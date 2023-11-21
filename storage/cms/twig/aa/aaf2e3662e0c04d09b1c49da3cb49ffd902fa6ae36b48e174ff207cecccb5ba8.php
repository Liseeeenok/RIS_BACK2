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

/* /var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm */
class __TwigTemplate_b405f489e6a91f2591693f3d14880e92bdf6c19a6b679636029911b534fab84f extends \Twig\Template
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
        $context["departments"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "departments", [], "any", false, false, false, 2);
        // line 3
        echo "
<div class=\"ui vertical segment\">
    <table class=\"ui celled structured striped center aligned table\">
        <thead>
            <tr>
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"11\">Статьи</th>
                <th colspan=\"3\">Труды конференций</th>
                <th rowspan=\"2\">Монографии</th>
                <th rowspan=\"2\">Свидетельства</th>
                <th rowspan=\"2\">ИТОГО</th>
            </tr>
            <tr>
                <th>WoS Q1</th>
                <th>WoS Q2</th>
                <th>WoS Q3</th>
                <th>WoS Q4</th>
                <th>Wos ESCI</th>
                <th>Scopus Q1</th>
                <th>Scopus Q2</th>
                <th>Scopus Q3</th>
                <th>Scopus Q4</th>
                <th>Scopus ESCI</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 34
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 34)) {
                // line 35
                echo "            <tr>
                <th colspan=\"18\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</th>
            </tr>
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["department"], "workers", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 39
                    echo "            <tr data-user-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">
                <td class=\"left aligned\">
                    ";
                    // line 41
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 41) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 41))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 41))) . "."), "html", null, true);
                    echo "
                    ";
                    // line 42
                    echo ((twig_get_attribute($this->env, $this->source, $context["author"], "hasExcepted", [], "any", false, false, false, 42)) ? (" (Не учитывается)") : (""));
                    echo "
                </td> <!--Фамилии-->
                <td>";
                    // line 44
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ1Total", [], "any", false, false, false, 44), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q1-->
                <td>";
                    // line 45
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ2Total", [], "any", false, false, false, 45), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q2-->
                <td>";
                    // line 46
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ3Total", [], "any", false, false, false, 46), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q3-->
                <td>";
                    // line 47
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ4Total", [], "any", false, false, false, 47), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS Q4-->
                <td>";
                    // line 48
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artWosQ5Total", [], "any", false, false, false, 48), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--WOS ESCI-->
                <td>";
                    // line 49
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ1Total", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ1Total", [], "any", false, false, false, 49), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q1-->
                <td>";
                    // line 50
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ2Total", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ2Total", [], "any", false, false, false, 50), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q2-->
                <td>";
                    // line 51
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ3Total", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ3Total", [], "any", false, false, false, 51), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q3-->
                <td>";
                    // line 52
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ4Total", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ4Total", [], "any", false, false, false, 52), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus Q4-->
                <td>";
                    // line 53
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ5Total", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artScopusQ5Total", [], "any", false, false, false, 53), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td>
                <!--Scopus ESCI-->
                <td>";
                    // line 55
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "artRiscTotal", [], "any", false, false, false, 55), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--РИНЦ-->
                <td>";
                    // line 56
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procWosTotal", [], "any", false, false, false, 56), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Wos-->
                <td>";
                    // line 57
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procScopusTotal", [], "any", false, false, false, 57), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Scopus-->
                <td>";
                    // line 58
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "procRiscTotal", [], "any", false, false, false, 58), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--РИНЦ-->
                <td>";
                    // line 59
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "bookTotal", [], "any", false, false, false, 59), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Монографии-->
                <td>";
                    // line 60
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "patentTotal", [], "any", false, false, false, 60), 2, ","), "html", null, true))) : (print ("")));
                    echo "</td> <!--Свидетельства-->
                <td>";
                    // line 61
                    ((twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "total", [], "any", false, false, false, 61), 2, ","), "html", null, true))) : (print (0)));
                    echo "</td> <!--ИТОГО-->
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            ";
            }
            // line 65
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
</div>

";
        // line 70
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", [], "any", false, false, false, 70);
        // line 71
        if (($context["publications"] ?? null)) {
            // line 72
            echo "<div class=\"ui vertical segment\">
    <h2>Список публикаций, участвующих в отчёте</h2>
    <ol class=\"ui list\">
        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 76
                echo "        <li>
            ";
                // line 77
                echo twig_escape_filter($this->env, ((((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "k", [], "any", false, false, false, 77), 2, ",") . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "countAuthor", [], "any", false, false, false, 77)) . "=") . twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dividedK", [], "any", false, false, false, 77), 2, ",")), "html", null, true);
                echo "
            ";
                // line 79
                echo "            - ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                $context['__cms_partial_params']['showIndextion'] = true                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 80
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasTranslatedVersion", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "            <span style=\"color: orange;\">(Есть перевод:
                ";
                    // line 82
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 82), "authors", [], "any", false, false, false, 82) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82)) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "translated_version", [], "any", false, false, false, 82), "year", [], "any", false, false, false, 82)) . "."), "html", null, true);
                    // line 83
                    echo "
                )</span>
            ";
                }
                // line 86
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["p"], "hasExceptAuthors", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "            <span style=\"color: red;\">(Не&nbspучитываются:
                ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "publication_authors", [], "any", false, false, false, 88));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 89
                        echo "                ";
                        ((twig_get_attribute($this->env, $this->source, $context["a"], "is_except", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, ((((((" " . twig_get_attribute($this->env, $this->source, $context["a"], "surname", [], "any", false, false, false, 89)) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 89))) . ".") . twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "middlename", [], "any", false, false, false, 89))) . "."), "html", null, true))) : (print ("")));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                )</span>
            ";
                }
                // line 93
                echo "        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "    </ol>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 95,  257 => 93,  253 => 91,  244 => 89,  240 => 88,  237 => 87,  234 => 86,  229 => 83,  227 => 82,  224 => 81,  221 => 80,  214 => 79,  210 => 77,  207 => 76,  203 => 75,  198 => 72,  196 => 71,  194 => 70,  188 => 66,  182 => 65,  179 => 64,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  100 => 42,  96 => 41,  90 => 39,  86 => 38,  81 => 36,  78 => 35,  75 => 34,  71 => 33,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set departments = __SELF__.departments %}

<div class=\"ui vertical segment\">
    <table class=\"ui celled structured striped center aligned table\">
        <thead>
            <tr>
                <th rowspan=\"2\" class=\"left aligned\">Фамилия</th>
                <th colspan=\"11\">Статьи</th>
                <th colspan=\"3\">Труды конференций</th>
                <th rowspan=\"2\">Монографии</th>
                <th rowspan=\"2\">Свидетельства</th>
                <th rowspan=\"2\">ИТОГО</th>
            </tr>
            <tr>
                <th>WoS Q1</th>
                <th>WoS Q2</th>
                <th>WoS Q3</th>
                <th>WoS Q4</th>
                <th>Wos ESCI</th>
                <th>Scopus Q1</th>
                <th>Scopus Q2</th>
                <th>Scopus Q3</th>
                <th>Scopus Q4</th>
                <th>Scopus ESCI</th>
                <th>РИНЦ</th>
                <th>Wos</th>
                <th>Scopus</th>
                <th>РИНЦ</th>
            </tr>
        </thead>
        <tbody>
            {% for department in departments %}
            {% if department.workers %}
            <tr>
                <th colspan=\"18\">{{ department.name }}</th>
            </tr>
            {% for author in department.workers %}
            <tr data-user-id=\"{{ author.id }}\">
                <td class=\"left aligned\">
                    {{ author.surname ~ \" \" ~ author.name|first ~ \".\" ~ author.middlename|first ~ \".\"}}
                    {{ author.hasExcepted ? \" (Не учитывается)\"}}
                </td> <!--Фамилии-->
                <td>{{ author.artWosQ1Total ? author.artWosQ1Total|number_format(2, ',') }}</td> <!--WOS Q1-->
                <td>{{ author.artWosQ2Total ? author.artWosQ2Total|number_format(2, ',') }}</td> <!--WOS Q2-->
                <td>{{ author.artWosQ3Total ? author.artWosQ3Total|number_format(2, ',') }}</td> <!--WOS Q3-->
                <td>{{ author.artWosQ4Total ? author.artWosQ4Total|number_format(2, ',') }}</td> <!--WOS Q4-->
                <td>{{ author.artWosQ5Total ? author.artWosQ5Total|number_format(2, ',') }}</td> <!--WOS ESCI-->
                <td>{{ author.artScopusQ1Total ? author.artScopusQ1Total|number_format(2, ',') }}</td> <!--Scopus Q1-->
                <td>{{ author.artScopusQ2Total ? author.artScopusQ2Total|number_format(2, ',') }}</td> <!--Scopus Q2-->
                <td>{{ author.artScopusQ3Total ? author.artScopusQ3Total|number_format(2, ',') }}</td> <!--Scopus Q3-->
                <td>{{ author.artScopusQ4Total ? author.artScopusQ4Total|number_format(2, ',') }}</td> <!--Scopus Q4-->
                <td>{{ author.artScopusQ5Total ? author.artScopusQ5Total|number_format(2, ',') }}</td>
                <!--Scopus ESCI-->
                <td>{{ author.artRiscTotal ? author.artRiscTotal|number_format(2, ',') }}</td> <!--РИНЦ-->
                <td>{{ author.procWosTotal ? author.procWosTotal|number_format(2, ',') }}</td> <!--Wos-->
                <td>{{ author.procScopusTotal ? author.procScopusTotal|number_format(2, ',') }}</td> <!--Scopus-->
                <td>{{ author.procRiscTotal ? author.procRiscTotal|number_format(2, ',') }}</td> <!--РИНЦ-->
                <td>{{ author.bookTotal ? author.bookTotal|number_format(2, ',') }}</td> <!--Монографии-->
                <td>{{ author.patentTotal ? author.patentTotal|number_format(2, ',') }}</td> <!--Свидетельства-->
                <td>{{ author.total ? author.total|number_format(2, ',') : 0 }}</td> <!--ИТОГО-->
            </tr>
            {% endfor %}
            {% endif %}
            {% endfor %}
        </tbody>
    </table>
</div>

{% set publications = __SELF__.publications %}
{% if publications %}
<div class=\"ui vertical segment\">
    <h2>Список публикаций, участвующих в отчёте</h2>
    <ol class=\"ui list\">
        {% for p in publications %}
        <li>
            {{ p.k|number_format(2, ',') ~ \"/\" ~ p.countAuthor ~ \"=\" ~ p.dividedK|number_format(2, ',') }}
            {#<strong>{{ p.authors }}</strong>#}
            - {% partial '@publication' publication = p showIndextion = true %}
            {% if p.hasTranslatedVersion %}
            <span style=\"color: orange;\">(Есть перевод:
                {{ p.translated_version.authors ~ \" \" ~ p.translated_version.title ~ \".\" ~ p.translated_version.year ~
                \".\" }}
                )</span>
            {% endif %}
            {% if p.hasExceptAuthors %}
            <span style=\"color: red;\">(Не&nbspучитываются:
                {% for a in p.publication_authors %}
                {{ a.is_except ? \" \" ~ a.surname ~ \" \" ~ a.name|first ~ \".\" ~ a.middlename|first ~ \".\" }}
                {% endfor %}
                )</span>
            {% endif %}
        </li>
        {% endfor %}
    </ol>
</div>
{% endif %}
", "/var/www/ris/plugins/bree7e/crisreport/components/raspilreport/raspil-list-by-departments.htm", "");
    }
}
