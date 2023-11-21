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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/account/default.htm */
class __TwigTemplate_74e858e87f039238d36683622a22b2bbd26fd505cf16ee7e1a1edcf2dec531a5 extends \Twig\Template
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
        echo "    ";
        if ( !($context["user"] ?? null)) {
            // line 3
            echo "        <div class=\"column\">
            <h3>Войти</h3>
            ";
            // line 5
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/signin"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        </div>
    ";
        } else {
            // line 8
            echo "    
        ";
            // line 9
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/activation_check"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/update"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "    
    ";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  59 => 10,  55 => 9,  52 => 8,  48 => 6,  44 => 5,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
    {% if not user %}
        <div class=\"column\">
            <h3>Войти</h3>
            {% partial 'account/signin' %}
        </div>
    {% else %}
    
        {% partial 'account/activation_check' %}
        {% partial 'account/update' %}
    
    {% endif %}", "/var/www/ris/themes/bree7e-semantic-theme/partials/account/default.htm", "");
    }
}
