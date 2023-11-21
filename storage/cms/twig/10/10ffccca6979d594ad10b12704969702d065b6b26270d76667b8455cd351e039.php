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

/* /var/www/ris/themes/bree7e-semantic-theme/pages/home.htm */
class __TwigTemplate_d479733c898172363de644fd7fff3fa4690a9b2aaa85129196e4dcb2e9391d33 extends \Twig\Template
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
        echo "<!-- Content -->
<img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/croped-notebook-1920.jpg");
        echo "\" class=\"ui image\">
<div class=\"ui vertical stripe segment\" style=\"padding-bottom: 8rem;\">
    <div class=\"ui middle aligned stackable grid container\">
    
        <div class=\"row\">
            <div class=\"wide column\">
                ";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cris.md"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Content -->
<img src=\"{{ 'assets/images/croped-notebook-1920.jpg'|theme }}\" class=\"ui image\">
<div class=\"ui vertical stripe segment\" style=\"padding-bottom: 8rem;\">
    <div class=\"ui middle aligned stackable grid container\">
    
        <div class=\"row\">
            <div class=\"wide column\">
                {% content 'cris.md' %}
            </div>
        </div>
    </div>
</div>", "/var/www/ris/themes/bree7e-semantic-theme/pages/home.htm", "");
    }
}
