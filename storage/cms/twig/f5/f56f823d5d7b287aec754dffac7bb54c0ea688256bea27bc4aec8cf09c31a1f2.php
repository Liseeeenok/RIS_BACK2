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

/* /var/www/ris/plugins/bree7e/cris/components/projectlist/default.htm */
class __TwigTemplate_128ba108596f7d210b78ec9c410c274ea53bb846d0ee27f1ce87bd1abfce8ae9 extends \Twig\Template
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
        $context["ongoingProjects"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projects", [], "any", false, false, false, 2);
        // line 3
        $context["finishedProjects"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projects", [], "any", false, false, false, 3);
        // line 4
        $context["projectPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projectPage", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if (($context["ongoingProjects"] ?? null)) {
            // line 7
            echo "    <h2 class=\"ui header\">Выполняемые на текущий год:</h2>
    <ol class=\"ui list\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ongoingProjects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo " 
        <li>
            <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, (($this->extensions['Cms\Twig\Extension']->pageFilter(($context["projectPage"] ?? null), ["id" => " "]) . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 11)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</a> 
            <p>Номер проекта: ";
                // line 12
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "project_number", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["p"], "project_number", [], "any", false, false, false, 12), "отсутствует")) : ("отсутствует")), "html", null, true);
                echo "<br/>
            ";
                // line 13
                ((twig_get_attribute($this->env, $this->source, $context["p"], "leader", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, ("Руководитель: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "leader", [], "any", false, false, false, 13), "surname", [], "any", false, false, false, 13)), "html", null, true))) : (print ("Без руководителя")));
                echo "<br/>
            Период выполнения: ";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "start_year_date", [], "any", false, false, false, 14), "d.m.Y"), "html", null, true);
                echo " ";
                ((twig_get_attribute($this->env, $this->source, $context["p"], "finish_year_date", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, (" - " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "finish_year_date", [], "any", false, false, false, 14), "d.m.Y")), "html", null, true))) : (print ("")));
                echo "</p>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </ol>
";
        } else {
            // line 19
            echo "    <h2 class=\"ui header\">На текущий год в системе не зарегистрировано выполняемых проектов.</h2>
";
        }
        // line 21
        echo "<h2 class=\"ui header\">Завершённые:</h2>
<ol class=\"ui list\">
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["finishedProjects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
        <li>
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, (($this->extensions['Cms\Twig\Extension']->pageFilter(($context["projectPage"] ?? null), ["id" => " "]) . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 25)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</a> 
            <p>Номер проекта: ";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "project_number", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["p"], "project_number", [], "any", false, false, false, 26), "отсутствует")) : ("отсутствует")), "html", null, true);
            echo "<br/>
            ";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["p"], "leader", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, ("Руководитель: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "leader", [], "any", false, false, false, 27), "surname", [], "any", false, false, false, 27)), "html", null, true))) : (print ("Без руководителя")));
            echo "<br/>
            Период выполнения: ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "start_year_date", [], "any", false, false, false, 28), "d.m.Y"), "html", null, true);
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["p"], "finish_year_date", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, (" - " . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "finish_year_date", [], "any", false, false, false, 28), "d.m.Y")), "html", null, true))) : (print ("")));
            echo "</p>
        </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/projectlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  117 => 28,  113 => 27,  109 => 26,  103 => 25,  96 => 23,  92 => 21,  88 => 19,  84 => 17,  73 => 14,  69 => 13,  65 => 12,  59 => 11,  52 => 9,  48 => 7,  46 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set ongoingProjects = __SELF__.projects %}
{% set finishedProjects = __SELF__.projects %}
{% set projectPage = __SELF__.projectPage %}

{% if ongoingProjects %}
    <h2 class=\"ui header\">Выполняемые на текущий год:</h2>
    <ol class=\"ui list\">
    {% for p in ongoingProjects %} 
        <li>
            <a href=\"{{ projectPage|page({id: ' '}) ~ '/' ~ p.id }}\">{{ p.name }}</a> 
            <p>Номер проекта: {{ p.project_number|default('отсутствует') }}<br/>
            {{ p.leader ? 'Руководитель: ' ~ p.leader.surname : 'Без руководителя'}}<br/>
            Период выполнения: {{ p.start_year_date | date('d.m.Y') }} {{ p.finish_year_date ? ' - ' ~ p.finish_year_date  | date('d.m.Y') }}</p>
        </li>
    {% endfor %}
    </ol>
{% else %}
    <h2 class=\"ui header\">На текущий год в системе не зарегистрировано выполняемых проектов.</h2>
{% endif %}
<h2 class=\"ui header\">Завершённые:</h2>
<ol class=\"ui list\">
{% for p in finishedProjects %} 
        <li>
            <a href=\"{{ projectPage|page({id: ' '}) ~ '/' ~ p.id }}\">{{ p.name }}</a> 
            <p>Номер проекта: {{ p.project_number|default('отсутствует') }}<br/>
            {{ p.leader ? 'Руководитель: ' ~ p.leader.surname : 'Без руководителя'}}<br/>
            Период выполнения: {{ p.start_year_date | date('d.m.Y') }} {{ p.finish_year_date ? ' - ' ~ p.finish_year_date | date('d.m.Y')}}</p>
        </li>
{% endfor %}
</ol>", "/var/www/ris/plugins/bree7e/cris/components/projectlist/default.htm", "");
    }
}
