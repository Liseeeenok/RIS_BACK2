<?php namespace Bree7e\Cris\Components;

use Bree7e\Cris\Models\Author;
use Bree7e\Cris\Models\Department;
use Bree7e\Cris\Models\Project;
use Bree7e\Cris\Models\Publication;
use Bree7e\Cris\Models\PublicationType;
use Bree7e\Cris\Models\ProjectsPublications;
use Cms\Classes\ComponentBase;

class PublicationSearch extends ComponentBase
{
    public $departments;
    public $authors;
    public $types;
    public $projects;

    public function componentDetails()
    {
        return [
            'name' => 'Поиск публикаций',
            'description' => 'No description provided yet...',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->getDepartments();
        $this->getAuthors();
        $this->getTypes();
        $this->getProjects();
        // Bibliography::main();
    }

    public function getDepartments()
    {
        $this->departments = Department::all();
    }

    public function getTypes()
    {
        $this->types = PublicationType::all();
    }

    public function getProjects()
    {
        $this->projects = Project::all();
    }

    public function getAuthors()
    {
        $this->authors = Author::orderBy('surname')->get();
    }

    public function onGetPublications()
    {
        $fromYear = post('fromYear') ?? 1900;
        $toYear = post('toYear') ?? 2100;
        $department = post('department') ?? 0; // id
        $author = post('author') ?? 0; // id
        $type = post('type') ?? "0"; // 1,2,3,...
        $index = post('index') ?? "all"; // all,wos,scopus,risc
        $project = post('project') ?? 0; //id
        $sort_argument = post('sort_argument') ?? "author";
        $sort_following = post('sort_following') ?? "increasing";

        // если указан автор, то не учитвать подразделение
        if ($author > 0) {
            unset($department);
        }

        if (empty($department) || $department == 0) {
            $query = Publication::query();
        } else {
            $query = Publication::ofDepartment($department);
        }

        if (empty($fromYear)) {
            $fromYear = 1900;
        }

        if (empty($toYear)) {
            $toYear = 2100;
        }

        $query = $query->betweenYears($fromYear, $toYear);

        if ($index !== 'all') {
            switch ($index) {
                case 'wos':
                    $query = $query->isWos();
                    break;
                case 'scopus':
                    $query = $query->isScopus();
                    break;
                case 'risc':
                    $query = $query->isRisc();
                    break;
            }
        }

        if ($project > 0) {
            $query = $query->ofProject($project);
        }

        if ($type > 0) {
            $query = $query->filterByType([$type]);
        }

        if ($author > 0) {
            $query = $query->ofAuthors([$author]);
        }

        // Вывод номеров проектов у публикации
        $projects_publications = ProjectsPublications::all();
        $projects = Project::all();

        $count_projects = 0;
        for($i = 0; $i < count($projects_publications); $i++) {
            while($count_projects < (count($projects)-1) && $projects[$count_projects]->id != $projects_publications[$i]->project_id) $count_projects += 1;

            if($projects[$count_projects]->id == $projects_publications[$i]->project_id) {
                $projects_publications[$i]->nioktr_number = $projects[$count_projects]->nioktr_number;
                $projects_publications[$i]->project_number = $projects[$count_projects]->project_number;
            }
        }

        $projects_publications = $projects_publications->sortBy('publication_id');
        $projects_publications = $projects_publications->values()->all();
        $publications = $query->get();

        $count_publications = 0;
        $count_projects_publications = 0;
        $number_projects = [];
        while($count_publications < (count($publications)-1)) {
            if($projects_publications[$count_projects_publications]->publication_id == $publications[$count_publications]->id) {
                if($projects_publications[$count_projects_publications]->nioktr_number)
                    array_push($number_projects, $projects_publications[$count_projects_publications]->nioktr_number);
                if(count($number_projects) > 1) 
                    $number_projects[count($number_projects)-2] .= ", ";
                $count_projects_publications += 1;
            } elseif ($projects_publications[$count_projects_publications]->publication_id > $publications[$count_publications]->id) {
                $publications[$count_publications]->number_projects = $number_projects;
                $number_projects = [];
                $count_publications += 1;
            } else {
                $count_projects_publications += 1;
            }
        }
        // Вывод номеров проектов у публикации

        if ($sort_following == "increasing")
            $publications = $publications->sortBy($sort_argument);
        else if ($sort_following == "decreasing")
            $publications = $publications->sortByDesc($sort_argument);

        if ($publications->isEmpty()) {
            unset($this->page['publications']);
        } else {
            $this->page['publications'] = $publications;
        }

    }
}
