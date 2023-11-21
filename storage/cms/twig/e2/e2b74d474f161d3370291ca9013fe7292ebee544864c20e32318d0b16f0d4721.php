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

/* /var/www/ris/plugins/bree7e/crisreport/components/yearreport/year-report.htm */
class __TwigTemplate_069be1f1b236a2557741ff8d42bfb3da80f8d3964b8c4fb3b82670b18e59c1bd extends \Twig\Template
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
        $context["publications"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publications", [], "any", false, false, false, 2);
        // line 3
        $context["lastHeader"] = "";
        // line 4
        echo "
<h2 class=\"ui header\">Перечень публикаций и полученных патентов</h2>
<ol class=\"ui list\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 8
            echo "        ";
            if ((($context["lastHeader"] ?? null) != twig_get_attribute($this->env, $this->source, $context["p"], "classified", [], "any", false, false, false, 8))) {
                // line 9
                echo "            <h3 class=\"ui header\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "classified", [], "any", false, false, false, 9), "html", null, true);
                echo "</h3>
        ";
            }
            // line 11
            echo "        <li>
            ";
            // line 12
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['publication'] = $context["p"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        </li>
        ";
            // line 14
            $context["lastHeader"] = twig_get_attribute($this->env, $this->source, $context["p"], "classified", [], "any", false, false, false, 14);
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    
</ol>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/yearreport/year-report.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 15,  70 => 14,  67 => 13,  62 => 12,  59 => 11,  53 => 9,  50 => 8,  46 => 7,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set publications = __SELF__.publications %}
{% set lastHeader = '' %}

<h2 class=\"ui header\">Перечень публикаций и полученных патентов</h2>
<ol class=\"ui list\">
    {% for p in publications %}
        {% if lastHeader != p.classified %}
            <h3 class=\"ui header\">{{ p.classified }}</h3>
        {% endif %}
        <li>
            {% partial '@publication' publication = p %}
        </li>
        {% set lastHeader = p.classified %}
    {% endfor %}
    
</ol>", "/var/www/ris/plugins/bree7e/crisreport/components/yearreport/year-report.htm", "");
    }
}
