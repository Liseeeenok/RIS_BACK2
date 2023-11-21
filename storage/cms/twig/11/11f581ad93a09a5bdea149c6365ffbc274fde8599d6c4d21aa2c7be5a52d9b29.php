<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/ris/plugins/bree7e/cris/components/authors/default.htm */
class __TwigTemplate_61e393c6a017446e83262244172d93a9e7818169f2acbc01449ca1bc9ffc0dbe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["author"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "author", [], "any", false, false, false, 2);
        // line 3
        $context["publicationsByYears"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", [], "any", false, false, false, 3);
        // line 4
        $context["projectsByYears"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projects", [], "any", false, false, false, 4);
        // line 5
        $context["publicationPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publicationPage", [], "any", false, false, false, 5);
        // line 6
        $context["projectPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projectPage", [], "any", false, false, false, 6);
        // line 7
        echo "
<h1 class=\"ui header\">";
        // line 8
        echo twig_escape_filter($this->env, ((((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "surname", [], "any", false, false, false, 8) . " ") . twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 8)) . " ") . twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "middlename", [], "any", false, false, false, 8)), "html", null, true);
        echo "</h1>
<div class=\"ui clearing vertical segment\">
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "avatar", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <img class=\"ui rounded bordered floated image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "avatar", [], "any", false, false, false, 11), "thumb", [0 => 200, 1 => 200], "method", false, false, false, 11), "html", null, true);
            echo "\">
    ";
        } else {
            // line 13
            echo "        <img class=\"ui rounded bordered floated image\" src=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/bree7e/cris/assets/images/man.png");
            echo "\" width=\"200px\">
    ";
        }
        // line 15
        echo "    ";
        // line 17
        echo "    <p>Автор ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "publicationCount", [], "any", false, false, false, 17), "html", null, true);
        echo " статей</p>
    <p><b>должность:</b>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "positions", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["key"] => $context["position"]) {
            // line 20
            echo "        ";
            echo ((($context["key"] > 0)) ? (", ") : (""));
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["position"], "name", [], "any", false, false, false, 21)), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    </p>
    <p><b>e-mail:</b> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
    <p><b>телефон:</b> ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "phones", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "phones", [], "any", false, false, false, 26), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</p>
    
</div>

";
        // line 31
        if (($context["publicationsByYears"] ?? null)) {
            // line 32
            echo "<div class=\"ui vertical segment\">
    <h3 class=\"ui  header\">Публикации</h3>
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publicationsByYears"] ?? null));
            foreach ($context['_seq'] as $context["year"] => $context["publications"]) {
                // line 35
                echo "        <h4>";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</h4>
        <div class=\"ui bulleted list\">
        ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["publications"]);
                foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                    // line 38
                    echo "            <div class=\"item\">
                <div class=\"content\">
                    <div class=\"header\"><a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, (($this->extensions['Cms\Twig\Extension']->pageFilter(($context["publicationPage"] ?? null), ["id" => " "]) . "/") . twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 40)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "</a> 
                        <!-- Нужен switch для типов публикаций -->
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, $context["publication"], "publication_type_id", [], "any", false, false, false, 42) == 1)) {
                        // line 43
                        echo "                        <div class=\"ui green mini label\">Статья в журнале</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 45
$context["publication"], "publication_type_id", [], "any", false, false, false, 45) == 2)) {
                        // line 46
                        echo "                        <div class=\"ui orange mini label\">Труды конференций</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["publication"], "publication_type_id", [], "any", false, false, false, 48) == 3)) {
                        // line 49
                        echo "                        <div class=\"ui blue mini label\">Авторское свидетельство</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["publication"], "publication_type_id", [], "any", false, false, false, 51) == 4)) {
                        // line 52
                        echo "                        <div class=\"ui red mini label\">Книга</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 54
$context["publication"], "publication_type_id", [], "any", false, false, false, 54) == 6)) {
                        // line 55
                        echo "                        <div class=\"ui black mini label\">Диссертация</div>
                        ";
                    }
                    // line 57
                    echo "                    </div>
                    <div class=\"description\">
                        <p>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "authors", [], "any", false, false, false, 59), "html", null, true);
                    echo "<br>
                        в журнале <i>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "journal", [], "any", false, false, false, 60), "html", null, true);
                    echo "</i>, издательство <i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "publisher", [], "any", false, false, false, 60), "html", null, true);
                    echo "</i> (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "adress", [], "any", false, false, false, 60), "html", null, true);
                    echo "), № ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "number", [], "any", false, false, false, 60), "html", null, true);
                    echo ", с.";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "pages", [], "any", false, false, false, 60), "html", null, true);
                    echo "</p>                            
                    </div>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "        </div>    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['year'], $context['publications'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</div>
";
        }
        // line 69
        echo "
";
        // line 70
        if (($context["projectsByYears"] ?? null)) {
            // line 71
            echo "<div class=\"ui vertical segment\">
    <h3 class=\"ui  header\">Руководство проектами</h3>
    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["projectsByYears"] ?? null));
            foreach ($context['_seq'] as $context["year"] => $context["projects"]) {
                // line 74
                echo "        <h4>";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</h4>
        <div class=\"ui bulleted list\">
        ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["projects"]);
                foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                    // line 77
                    echo "            <div class=\"item\">
                <div class=\"content\">
                    <div><a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, (($this->extensions['Cms\Twig\Extension']->pageFilter(($context["projectPage"] ?? null), ["id" => " "]) . "/") . twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 79)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "project_number", [], "any", false, false, false, 79), "html", null, true);
                    echo "</a> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 79), "html", null, true);
                    echo "
                        <!-- Нужен switch для типов публикаций -->
                        ";
                    // line 81
                    if ((twig_get_attribute($this->env, $this->source, $context["project"], "project_type_id", [], "any", false, false, false, 81) == 1)) {
                        // line 82
                        echo "                        <div class=\"ui green mini label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "projecttype", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
                        echo "</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 84
$context["project"], "project_type_id", [], "any", false, false, false, 84) == 2)) {
                        // line 85
                        echo "                        <div class=\"ui orange mini label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "projecttype", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                        echo "</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 87
$context["project"], "project_type_id", [], "any", false, false, false, 87) == 3)) {
                        // line 88
                        echo "                        <div class=\"ui blue mini label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "projecttype", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                        echo "</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 90
$context["project"], "project_type_id", [], "any", false, false, false, 90) == 4)) {
                        // line 91
                        echo "                        <div class=\"ui red mini label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "projecttype", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                        echo "</div>

                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 93
$context["project"], "project_type_id", [], "any", false, false, false, 93) == 6)) {
                        // line 94
                        echo "                        <div class=\"ui black mini label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "projecttype", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94), "html", null, true);
                        echo "</div>
                        ";
                    }
                    // line 95
                    echo "                        
                    </div>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "        </div>    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['year'], $context['projects'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/authors/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 102,  306 => 100,  296 => 95,  290 => 94,  288 => 93,  282 => 91,  280 => 90,  274 => 88,  272 => 87,  266 => 85,  264 => 84,  258 => 82,  256 => 81,  247 => 79,  243 => 77,  239 => 76,  233 => 74,  229 => 73,  225 => 71,  223 => 70,  220 => 69,  216 => 67,  209 => 65,  190 => 60,  186 => 59,  182 => 57,  178 => 55,  176 => 54,  172 => 52,  170 => 51,  166 => 49,  164 => 48,  160 => 46,  158 => 45,  154 => 43,  152 => 42,  145 => 40,  141 => 38,  137 => 37,  131 => 35,  127 => 34,  123 => 32,  121 => 31,  115 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 22,  86 => 21,  81 => 20,  77 => 19,  71 => 17,  69 => 15,  63 => 13,  57 => 11,  55 => 10,  50 => 8,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set author = __SELF__.author %}
{% set publicationsByYears = __SELF__.publications %}
{% set projectsByYears = __SELF__.projects %}
{% set publicationPage = __SELF__.publicationPage %}
{% set projectPage = __SELF__.projectPage %}

<h1 class=\"ui header\">{{ author.surname ~ ' ' ~ author.name ~ ' ' ~ author.middlename}}</h1>
<div class=\"ui clearing vertical segment\">
    {% if author.avatar %}
        <img class=\"ui rounded bordered floated image\" src=\"{{ author.avatar.thumb(200, 200) }}\">
    {% else %}
        <img class=\"ui rounded bordered floated image\" src=\"{{ '/plugins/bree7e/cris/assets/images/man.png'|app }}\" width=\"200px\">
    {% endif %}
    {# <p>Кандидат технических наук</p>
    <p>Тема кадидатской диссерации: <i>Тема из базы данных</i></p> #}
    <p>Автор {{ author.publicationCount }} статей</p>
    <p><b>должность:</b>
    {% for key, position in author.positions %}
        {{ key > 0 ? \", \"}}
        {{ position.name|trim }}
    {% endfor %}    
    </p>
    <p><b>e-mail:</b> {{ author.email }}</p>
    <p><b>телефон:</b> {% for phone in author.phones %}
        {{ phone.phones }}
    {% endfor %}</p>
    
</div>

{% if publicationsByYears %}
<div class=\"ui vertical segment\">
    <h3 class=\"ui  header\">Публикации</h3>
    {% for year, publications in publicationsByYears %}
        <h4>{{ year }}</h4>
        <div class=\"ui bulleted list\">
        {% for publication in publications %}
            <div class=\"item\">
                <div class=\"content\">
                    <div class=\"header\"><a href=\"{{ publicationPage|page({id: ' '}) ~ '/' ~ publication.id }}\">{{ publication.title }}</a> 
                        <!-- Нужен switch для типов публикаций -->
                        {% if publication.publication_type_id == 1 %}
                        <div class=\"ui green mini label\">Статья в журнале</div>

                        {% elseif publication.publication_type_id == 2 %}
                        <div class=\"ui orange mini label\">Труды конференций</div>

                        {% elseif publication.publication_type_id == 3 %}
                        <div class=\"ui blue mini label\">Авторское свидетельство</div>

                        {% elseif publication.publication_type_id == 4 %}
                        <div class=\"ui red mini label\">Книга</div>

                        {% elseif publication.publication_type_id == 6 %}
                        <div class=\"ui black mini label\">Диссертация</div>
                        {% endif %}
                    </div>
                    <div class=\"description\">
                        <p>{{ publication.authors }}<br>
                        в журнале <i>{{ publication.journal }}</i>, издательство <i>{{ publication.publisher }}</i> ({{ publication.adress }}), № {{ publication.number }}, с.{{ publication.pages }}</p>                            
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>    
    {% endfor %}
</div>
{% endif %}

{% if projectsByYears %}
<div class=\"ui vertical segment\">
    <h3 class=\"ui  header\">Руководство проектами</h3>
    {% for year, projects in projectsByYears %}
        <h4>{{ year }}</h4>
        <div class=\"ui bulleted list\">
        {% for project in projects %}
            <div class=\"item\">
                <div class=\"content\">
                    <div><a href=\"{{ projectPage|page({id: ' '}) ~ '/' ~ project.id }}\">{{ project.project_number }}</a> {{ project.name }}
                        <!-- Нужен switch для типов публикаций -->
                        {% if project.project_type_id == 1 %}
                        <div class=\"ui green mini label\">{{ project.projecttype.name }}</div>

                        {% elseif project.project_type_id == 2 %}
                        <div class=\"ui orange mini label\">{{ project.projecttype.name }}</div>

                        {% elseif project.project_type_id == 3 %}
                        <div class=\"ui blue mini label\">{{ project.projecttype.name }}</div>

                        {% elseif project.project_type_id == 4 %}
                        <div class=\"ui red mini label\">{{ project.projecttype.name }}</div>

                        {% elseif project.project_type_id == 6 %}
                        <div class=\"ui black mini label\">{{ project.projecttype.name }}</div>
                        {% endif %}                        
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>    
    {% endfor %}
    </div>
</div>
{% endif %}", "/var/www/ris/plugins/bree7e/cris/components/authors/default.htm", "");
    }
}
