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

/* /var/www/ris/plugins/bree7e/cris/components/publicationlist/default.htm */
class __TwigTemplate_e9ed7ed5accf3cdba66d7c19a0a96e0e6d1ac89e356b22b05d1e277a3e923116 extends \Twig\Template
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
        $context["publicationPage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publicationPage", [], "any", false, false, false, 3);
        // line 4
        echo "
<h1>Публикации</h1>
<ol>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
    <li>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "authors", [], "any", false, false, false, 7), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, (($this->extensions['Cms\Twig\Extension']->pageFilter(($context["publicationPage"] ?? null), ["id" => " "]) . "/") . twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 7)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/publicationlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  51 => 7,  45 => 6,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set publications = __SELF__.publications %}
{% set publicationPage = __SELF__.publicationPage %}

<h1>Публикации</h1>
<ol>{% for p in publications %} 
    <li>{{ p.authors }} <a href=\"{{ publicationPage|page({id: ' '}) ~ '/' ~ p.id }}\">{{ p.title }}</a></li>
{% endfor %}</ol>
", "/var/www/ris/plugins/bree7e/cris/components/publicationlist/default.htm", "");
    }
}
