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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/staticmenu/main.htm */
class __TwigTemplate_edccfd9ab8f6a17c769e71a7e1944628ba6ef8a2fce85949f2823c211f0a2376 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 2), "isHidden", [], "any", false, false, false, 2)) {
                // line 3
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 4), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 4), "isExternal", [], "any", false, false, false, 4)) ? ("target=\"_blank\"") : (""));
                    echo "
            class=\"item ";
                    // line 5
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 5)) ? ("active") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 5), "cssClass", [], "any", false, false, false, 5), "html", null, true);
                    echo "\">
            ";
                    // line 6
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
                    echo " 
        </a>
    ";
                } else {
                    // line 9
                    echo "        <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
                    echo "</span>
    ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/staticmenu/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  58 => 6,  52 => 5,  45 => 4,  42 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% for item in items if not item.viewBag.isHidden %}
    {% if item.url %}
        <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}
            class=\"item {{ item.isActive ? 'active' : '' }} {{ item.viewBag.cssClass }}\">
            {{ item.title }} 
        </a>
    {% else %}
        <span>{{ item.title }}</span>
    {% endif %}
{% endfor %}", "/var/www/ris/themes/bree7e-semantic-theme/partials/staticmenu/main.htm", "");
    }
}
