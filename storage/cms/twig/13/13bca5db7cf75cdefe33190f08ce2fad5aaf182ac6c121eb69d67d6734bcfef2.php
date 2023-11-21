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

/* /var/www/ris/plugins/bree7e/cris/components/publicationsearch/publication-list.htm */
class __TwigTemplate_c5c7cb7e33c57e898e64b9e372defdf7275fb93e9a765afba746cbad81bda8a2 extends \Twig\Template
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
        if (($context["publications"] ?? null)) {
            // line 3
            echo "<h2 class=\"ui  header\">Список публикаций</h2>
<ol class=\"ui list\">

    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 7
                echo "    <li>
        ";
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['publication'] = $context["p"]                ;
                $context['__cms_partial_params']['showIndextion'] = true                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@publication"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    <ol>
        ";
        } else {
            // line 13
            echo "        <h2 class=\"ui  header\">По вашему запросу не найдено публикаций</h2>
        ";
        }
        // line 15
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/publicationsearch/publication-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 13,  64 => 11,  57 => 9,  51 => 8,  48 => 7,  44 => 6,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% if publications %}
<h2 class=\"ui  header\">Список публикаций</h2>
<ol class=\"ui list\">

    {% for p in publications %}
    <li>
        {% partial '@publication' publication = p showIndextion = true %}
    </li>
    {% endfor %}
    <ol>
        {% else %}
        <h2 class=\"ui  header\">По вашему запросу не найдено публикаций</h2>
        {% endif %}


        {# author.artRiscTotal ? author.artRiscTotal|number_format(2) #}
", "/var/www/ris/plugins/bree7e/cris/components/publicationsearch/publication-list.htm", "");
    }
}
