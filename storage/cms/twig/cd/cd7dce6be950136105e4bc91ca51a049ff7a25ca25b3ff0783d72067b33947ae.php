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

/* /var/www/ris/plugins/bree7e/crisreport/components/partials/publication.htm */
class __TwigTemplate_85946cc2e2a687b4c592fba6dffa743833964364685ad19315dce18d729d0e8b extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "language", [], "any", false, false, false, 2) == "russian")) {
            // line 3
            echo "    ";
            $context["pages"] = ". С. ";
            // line 4
            echo "    ";
            $context["volume"] = ". Т. ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 5
($context["publication"] ?? null), "language", [], "any", false, false, false, 5) == "english")) {
            // line 6
            echo "    ";
            $context["pages"] = ". pp. ";
            // line 7
            echo "    ";
            $context["volume"] = ". Vol. ";
        }
        // line 9
        echo "
";
        // line 10
        if (((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 10) == 1) || (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 10) == 2))) {
            // line 11
            echo "    <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors", [], "any", false, false, false, 11), "html", null, true);
            echo "</i> ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 11)), "html", null, true);
            echo " // ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "journal", [], "any", false, false, false, 11)), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 11)), "html", null, true);
            // line 12
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "volume", [], "any", false, false, false, 12))) {
                // line 13
                echo twig_escape_filter($this->env, (($context["volume"] ?? null) . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "volume", [], "any", false, false, false, 13))), "html", null, true);
                // line 14
                ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, (", №" . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 14))), "html", null, true))) : (print ("")));
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 15
($context["publication"] ?? null), "number", [], "any", false, false, false, 15))) {
                // line 16
                echo twig_escape_filter($this->env, (". — №" . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 16))), "html", null, true);
            }
            // line 18
            ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "pages", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, ((($context["pages"] ?? null) . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "pages", [], "any", false, false, false, 18))) . "."), "html", null, true))) : (print ("")));
            // line 19
            ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "doi", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, ((" DOI: " . twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "doi", [], "any", false, false, false, 19)) . "."), "html", null, true))) : (print ("")));
            // line 20
            ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "url", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, ((" URL: " . twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "url", [], "any", false, false, false, 20)) . "."), "html", null, true))) : (print ("")));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 21
($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 21) == 3)) {
            // line 22
            echo "    <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors", [], "any", false, false, false, 22), "html", null, true);
            echo "</i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
            echo ": Свидетельство о государственной регистрации программ для ЭВМ №";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 22), "html", null, true);
            echo " от ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "published_at", [], "any", false, false, false, 22), "d.m.Y"), "html", null, true);
            echo " М.: Федеральная служба по интеллектуальной собственности, патентам и товарным знакам, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 22), "html", null, true);
            echo ".
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 23) == 6)) {
            // line 24
            echo "    <i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors", [], "any", false, false, false, 24), "html", null, true);
            echo "</i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
            echo ": дис. ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 24), "html", null, true);
            echo ".
";
        } else {
            // line 26
            echo "    <b>Нет шаблона вывода. Type ID: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 26), "html", null, true);
            echo " </b><i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors", [], "any", false, false, false, 26), "html", null, true);
            echo "</i> ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 26)), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 26), "html", null, true);
            echo ".
";
        }
        // line 28
        if ((($context["showIndextion"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "best_indexation", [], "any", false, false, false, 28) != "-"))) {
            // line 29
            echo "    (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "best_indexation", [], "any", false, false, false, 29), "html", null, true);
            echo ")
";
        }
        // line 31
        echo "    ";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/partials/publication.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 31,  126 => 29,  124 => 28,  112 => 26,  102 => 24,  100 => 23,  87 => 22,  85 => 21,  83 => 20,  81 => 19,  79 => 18,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  68 => 12,  59 => 11,  57 => 10,  54 => 9,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% if publication.language == 'russian' %}
    {% set pages = '. С. ' %}
    {% set volume = '. Т. ' %}
{% elseif publication.language == 'english' %}
    {% set pages = '. pp. ' %}
    {% set volume = '. Vol. ' %}
{% endif %}

{% if publication.publication_type_id == 1 or publication.publication_type_id == 2 %}
    <i>{{ publication.authors }}</i> {{ publication.title|trim }} // {{ publication.journal|trim }}. {{ publication.year|trim -}}
    {%- if publication.volume is not empty -%}
        {{- volume ~ publication.volume|trim -}}
        {{- publication.number ? \", №\" ~ publication.number|trim -}}
    {% elseif publication.number is not empty -%}
        {{- \". — №\" ~ publication.number|trim -}}
    {%- endif %}
    {{- publication.pages ? pages ~ publication.pages|trim ~ \".\" -}}
    {{- publication.doi ? \" DOI: \" ~ publication.doi ~ \".\" -}}
    {{- publication.url ? \" URL: \" ~ publication.url ~ \".\" -}}
{% elseif publication.publication_type_id == 3 %}
    <i>{{ publication.authors }}</i> {{ publication.title }}: Свидетельство о государственной регистрации программ для ЭВМ №{{ publication.number }} от {{ publication.published_at|date(\"d.m.Y\") }} М.: Федеральная служба по интеллектуальной собственности, патентам и товарным знакам, {{ publication.year }}.
{% elseif publication.publication_type_id == 6 %}
    <i>{{ publication.authors }}</i> {{ publication.title }}: дис. {{ publication.year }}.
{% else %}
    <b>Нет шаблона вывода. Type ID: {{ publication.publication_type_id }} </b><i>{{ publication.authors }}</i> {{ publication.title|trim }}. {{ publication.year }}.
{% endif %}
{% if showIndextion and publication.best_indexation != '-' %}
    ({{ publication.best_indexation }})
{% endif %}
    ", "/var/www/ris/plugins/bree7e/crisreport/components/partials/publication.htm", "");
    }
}
