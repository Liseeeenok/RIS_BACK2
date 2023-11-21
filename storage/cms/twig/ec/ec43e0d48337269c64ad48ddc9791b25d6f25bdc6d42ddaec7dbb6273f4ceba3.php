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

/* /var/www/ris/plugins/bree7e/crisinfo/components/structure/default.htm */
class __TwigTemplate_3ce2ac07ffc5ba5ab77b8d0517901cb6ff8476fe81e0c9a40723c5bfc62379a9 extends \Twig\Template
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
        echo "

";
        // line 32
        echo "
";
        // line 33
        $context["departments"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "departments", [], "any", false, false, false, 33);
        // line 34
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 35
        echo twig_call_macro($macros["tree"], "macro_list", [($context["departments"] ?? null)], 35, $context, $this->getSourceContext());
    }

    // line 4
    public function macro_list($__departments__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "departments" => $__departments__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 5
            echo "    ";
            $macros["tree"] = $this;
            // line 6
            echo "    ";
            $context["profilePageUrl"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "profilePageUrl", [], "any", false, false, false, 6);
            // line 7
            echo " 
    <ul class=\"ui list\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 10
                echo "        <li>
            ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "
            ";
                // line 12
                if (((twig_get_attribute($this->env, $this->source, $context["department"], "nest_right", [], "any", false, false, false, 12) - twig_get_attribute($this->env, $this->source, $context["department"], "nest_left", [], "any", false, false, false, 12)) > 0)) {
                    // line 13
                    echo "                ";
                    echo twig_call_macro($macros["tree"], "macro_list", [twig_get_attribute($this->env, $this->source, $context["department"], "getChildren", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 15
                echo "            ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "sortedAuthors", [], "any", false, false, false, 15)) > 0)) {
                    // line 16
                    echo "                <ul>
                ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["department"], "sortedAuthors", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                        // line 18
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, (("authors" . "/") . twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 18)), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 18), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 18), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 18), "html", null, true);
                        echo "</a>
                    ";
                        // line 19
                        echo ((twig_get_attribute($this->env, $this->source, $context["author"], "positions", [], "any", false, false, false, 19)) ? (" - ") : (""));
                        echo "
                    ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["author"], "positions", [], "any", false, false, false, 20));
                        foreach ($context['_seq'] as $context["key"] => $context["position"]) {
                            // line 21
                            echo "                        ";
                            echo ((($context["key"] > 0)) ? (", ") : (""));
                            echo "
                        ";
                            // line 22
                            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["position"], "name", [], "any", false, false, false, 22)), "html", null, true);
                            echo "
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['position'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "    
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "    
                </ul>
            ";
                }
                // line 27
                echo "            
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisinfo/components/structure/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 30,  149 => 27,  144 => 25,  136 => 23,  128 => 22,  123 => 21,  119 => 20,  115 => 19,  104 => 18,  100 => 17,  97 => 16,  94 => 15,  88 => 13,  86 => 12,  82 => 11,  79 => 10,  75 => 9,  71 => 7,  68 => 6,  65 => 5,  52 => 4,  48 => 35,  46 => 34,  44 => 33,  41 => 32,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}


{% macro list(departments) %}
    {% import _self as tree %}
    {% set profilePageUrl = __SELF__.profilePageUrl %}
 
    <ul class=\"ui list\">
    {% for department in departments %}
        <li>
            {{ department.name }}
            {% if department.nest_right - department.nest_left > 0 %}
                {{ tree.list(department.getChildren) }}
            {% endif %}
            {% if department.sortedAuthors|length > 0 %}
                <ul>
                {% for author in department.sortedAuthors %}
                    <li><a href=\"{{ 'authors' ~ '/' ~ author.id }}\">{{ author.surname }} {{ author.name }} {{ author.middlename }}</a>
                    {{ author.positions ? \" - \" }}
                    {% for key, position in author.positions %}
                        {{ key > 0 ? \", \"}}
                        {{ position.name|trim }}
                    {% endfor %}    
                    </li>
                {% endfor %}    
                </ul>
            {% endif %}            
        </li>
    {% endfor %}
    </ul>
{% endmacro %}

{% set departments = __SELF__.departments %}
{% import _self as tree %}
{{ tree.list(departments) }}", "/var/www/ris/plugins/bree7e/crisinfo/components/structure/default.htm", "");
    }
}
