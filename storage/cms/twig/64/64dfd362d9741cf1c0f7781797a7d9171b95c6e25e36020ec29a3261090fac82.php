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

/* /var/www/ris/plugins/bree7e/cris/components/projects/default.htm */
class __TwigTemplate_d9fe37edf19ac6a75626f4a1d1c1581386a200c757a1b513b7099de5af6be762 extends \Twig\Template
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
        $context["project"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "project", [], "any", false, false, false, 2);
        // line 3
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "publications", [], "any", false, false, false, 3);
        // line 4
        echo "
<h1 class=\"ui header\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
<p>Руководитель: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "leader", [], "any", false, false, false, 6), "surname", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "leader", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "leader", [], "any", false, false, false, 6), "middlename", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
<p>Тип проекта: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "projecttype", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
<p>Конкурс: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "competition", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>Номер: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "project_number", [], "any", false, false, false, 9), "html", null, true);
        echo "<br/>
Номер ЦИТИС: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "nioktr_number", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p>Дата начала: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "start_year_date", [], "any", false, false, false, 11), "html", null, true);
        echo "<br/>
Дата завершения: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "finish_year_date", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
<p>URL: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
<p>Описание: ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", [], "any", false, false, false, 14);
        echo "</p>

";
        // line 16
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 17
            echo "<h3 class=\"ui header\">Публикации по проекту:</h3>
<ol class=\"ui list\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "        <li>
          ";
                // line 21
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 22
                echo "        </li>        
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</ol>

<h3 class=\"ui header\">Экспорт в ЦИТИС:</h3>
<ol class=\"ui list\">
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 29
                echo "        <li>
          ";
                // line 30
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication_citis"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 31
                echo "        </li>        
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    <ol>    
";
        } else {
            // line 35
            echo "    <h3 class=\"ui  header\">По данному проекту в системе не зарегистрировано публикаций</h3>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/projects/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  139 => 33,  132 => 31,  127 => 30,  124 => 29,  120 => 28,  114 => 24,  107 => 22,  102 => 21,  99 => 20,  95 => 19,  91 => 17,  89 => 16,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  48 => 6,  44 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set project = __SELF__.project %}
{% set publications = project.publications %}

<h1 class=\"ui header\">{{ project.name }}</h1>
<p>Руководитель: {{ project.leader.surname }} {{ project.leader.name }} {{ project.leader.middlename }}</p>
<p>Тип проекта: {{ project.projecttype.name }}</p>
<p>Конкурс: {{ project.competition }}</p>
<p>Номер: {{ project.project_number }}<br/>
Номер ЦИТИС: {{ project.nioktr_number }}</p>
<p>Дата начала: {{ project.start_year_date }}<br/>
Дата завершения: {{ project.finish_year_date }}</p>
<p>URL: {{ project.url }}</p>
<p>Описание: {{ project.description|raw }}</p>

{% if publications|length > 0 %}
<h3 class=\"ui header\">Публикации по проекту:</h3>
<ol class=\"ui list\">
    {% for p in publications %}
        <li>
          {% partial '@publication' publication = p %}
        </li>        
    {% endfor %}
</ol>

<h3 class=\"ui header\">Экспорт в ЦИТИС:</h3>
<ol class=\"ui list\">
    {% for p in publications %}
        <li>
          {% partial '@publication_citis' publication = p %}
        </li>        
    {% endfor %}
    <ol>    
{% else %}
    <h3 class=\"ui  header\">По данному проекту в системе не зарегистрировано публикаций</h3>
{% endif %}", "/var/www/ris/plugins/bree7e/cris/components/projects/default.htm", "");
    }
}
