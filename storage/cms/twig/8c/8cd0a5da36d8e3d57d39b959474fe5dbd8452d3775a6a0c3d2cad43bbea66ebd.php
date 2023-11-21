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

/* /var/www/ris/plugins/bree7e/crisreport/components/partials/publication_outdata.htm */
class __TwigTemplate_e3e69949a4fa4d5aaf56fb0452067d974ce889b6dc0692cd2f5b8ac71ba10d4c extends \Twig\Template
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
            $context["volume"] = ". Т.";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 4
($context["publication"] ?? null), "language", [], "any", false, false, false, 4) == "english")) {
            // line 5
            echo "    ";
            $context["volume"] = ". Vol.";
        }
        // line 7
        echo "
";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 8) == 1) || (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 8) == 2))) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "journal", [], "any", false, false, false, 9)), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 9)), "html", null, true);
            echo "
    ";
            // line 10
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "volume", [], "any", false, false, false, 10))) {
                // line 11
                echo "        ";
                echo twig_escape_filter($this->env, (($context["volume"] ?? null) . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "volume", [], "any", false, false, false, 11))), "html", null, true);
                echo "
        ";
                // line 12
                ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, (", №" . twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 12))), "html", null, true))) : (print ("")));
                echo "
    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 13
($context["publication"] ?? null), "number", [], "any", false, false, false, 13))) {
                // line 14
                echo "        . — №";
                echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 14)), "html", null, true);
                echo "
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 16
($context["publication"] ?? null), "publication_type_id", [], "any", false, false, false, 16) == 3)) {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
            echo ": Свидетельство о государственной регистрации программ для ЭВМ №";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 17), "html", null, true);
            echo " М.: Федеральная служба по интеллектуальной собственности, патентам и товарным знакам, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 17), "html", null, true);
            echo ".                
";
        }
        // line 19
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/partials/publication_outdata.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  81 => 17,  79 => 16,  73 => 14,  71 => 13,  67 => 12,  62 => 11,  60 => 10,  53 => 9,  51 => 8,  48 => 7,  44 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% if publication.language == 'russian' %}
    {% set volume = '. Т.' %}
{% elseif publication.language == 'english' %}
    {% set volume = '. Vol.' %}
{% endif %}

{% if publication.publication_type_id == 1 or publication.publication_type_id == 2 %}
    {{ publication.journal|trim }}. {{ publication.year|trim }}
    {% if publication.volume is not empty %}
        {{ volume ~ publication.volume|trim }}
        {{ publication.number ? \", №\" ~ publication.number|trim }}
    {% elseif publication.number is not empty %}
        . — №{{ publication.number|trim }}
    {% endif %}
{% elseif publication.publication_type_id == 3 %}
    {{ publication.title }}: Свидетельство о государственной регистрации программ для ЭВМ №{{ publication.number }} М.: Федеральная служба по интеллектуальной собственности, патентам и товарным знакам, {{ publication.year }}.                
{% endif %}
        
    ", "/var/www/ris/plugins/bree7e/crisreport/components/partials/publication_outdata.htm", "");
    }
}
