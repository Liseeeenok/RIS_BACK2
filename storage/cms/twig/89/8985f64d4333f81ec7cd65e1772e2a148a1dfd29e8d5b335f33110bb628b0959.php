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

/* /var/www/ris/plugins/bree7e/crisreport/components/report33/report.htm */
class __TwigTemplate_59ae88c5171cbc96be6007ad2b5363ea767bb9233fe1890fe01ab81f4ba37711 extends \Twig\Template
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
        $context["author2"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "author", [], "any", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if (($context["publications"] ?? null)) {
            // line 5
            echo "    <div class=\"ui center aligned container\">
        <h3 class=\"ui header\">СПИСОК</h3>
        <span>опубликованных научных и учебно-методических работ</span>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "surname", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "middlename", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
    </div>
    <table class=\"ui celled table\">
    <thead>
        <tr>
            <th>№<br>п/п</th>
            <th>Наименование работы</th>
            <th>Вид работы</th>
            <th>Выходные данные</th>
            <th>Объем работы</th>
            <th>Соавторы</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 23
                echo "        <tr>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "publicationtype", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication_outdata"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "pagesNumber", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "authors", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
            ";
                // line 31
                echo "        </tr>        
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </tbody>
    </table>
    <p>Соискатель: ________________________</p>
    <br>
    <p>Список верен.<br>Руководитель научного подразделения: ________________________________</p>
    <br>
    <p>Ученый секретарь: ________________________________
    </p>
    <p>Дата: ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d.m.Y"), "html", null, true);
            echo "</p>
    <p>Печать организации</p>
";
        } else {
            // line 44
            echo "    <h2 class=\"ui  header\">Публикации не найдены</h2>
";
        }
        // line 46
        echo "

";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/report33/report.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  148 => 44,  142 => 41,  132 => 33,  117 => 31,  113 => 29,  109 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  87 => 23,  70 => 22,  49 => 8,  44 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set author2 = __SELF__.author %}

{% if publications %}
    <div class=\"ui center aligned container\">
        <h3 class=\"ui header\">СПИСОК</h3>
        <span>опубликованных научных и учебно-методических работ</span>
        <p>{{ author.surname }} {{ author.name }} {{ author.middlename }}</p>
    </div>
    <table class=\"ui celled table\">
    <thead>
        <tr>
            <th>№<br>п/п</th>
            <th>Наименование работы</th>
            <th>Вид работы</th>
            <th>Выходные данные</th>
            <th>Объем работы</th>
            <th>Соавторы</th>
        </tr>
    </thead>
    <tbody>
        {% for p in publications %}
        <tr>
            <td>{{ loop.index }}</td>
            <td>{{ p.title }}</td>
            <td>{{ p.publicationtype.name }}</td>
            <td>{% partial '@publication_outdata' publication = p %}</td>
            <td>{{ p.pagesNumber }}</td>
            <td>{{ p.authors }}</td>
            {# <td>{{ p.coAuthors }}</td> #}
        </tr>        
        {% endfor %}
    </tbody>
    </table>
    <p>Соискатель: ________________________</p>
    <br>
    <p>Список верен.<br>Руководитель научного подразделения: ________________________________</p>
    <br>
    <p>Ученый секретарь: ________________________________
    </p>
    <p>Дата: {{ \"now\"|date(\"d.m.Y\") }}</p>
    <p>Печать организации</p>
{% else %}
    <h2 class=\"ui  header\">Публикации не найдены</h2>
{% endif %}


{# author.artRiscTotal ? author.artRiscTotal|number_format(2) #}
", "/var/www/ris/plugins/bree7e/crisreport/components/report33/report.htm", "");
    }
}
