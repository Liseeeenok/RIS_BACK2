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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/site/navigation.htm */
class __TwigTemplate_7bd129f430af1d905e60e075d591b00dd21ba264e79647c5341100e520a02965 extends \Twig\Template
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
        echo "<div class=\"ui inverted vertical masthead center aligned segment\">
    <div class=\"ui container navigation\">
        <div class=\"ui large secondary inverted pointing menu\">
        <a class=\"toc item\">
            <i class=\"sidebar icon\"></i>
        </a>
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 8)) {
            // line 9
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 9)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("staticmenu/main"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "        ";
        }
        echo "        
        <div class=\"right item\">
            ";
        // line 12
        if (($context["user"] ?? null)) {
            // line 13
            echo "                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account/account", false);
            echo "\" 
                    class=\"";
            // line 14
            echo ((($this->extensions['Cms\Twig\Extension']->pageFilter("") == $this->extensions['Cms\Twig\Extension']->pageFilter("account/account", false))) ? ("active") : (""));
            echo "\">
                    Мой профиль</a>
                <a href=\"#\"
                    class=\"ui inverted button navigation__right-item\" 
                    data-request=\"onLogout\"
                    data-request-redirect=\"/\">Выйти</a>
            ";
        } else {
            // line 21
            echo "                <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account/account", false);
            echo "\" class=\"ui inverted button navigation__right-item\">Войти</a>
            ";
        }
        // line 22
        echo "        
        </div>
        </div>
    </div>
</div>



";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 31
        echo "  <script>
  \$(document).ready(function() {
      // create sidebar and attach to menu open
      \$('.ui.sidebar').sidebar('attach events', '.toc.item');
    });
  </script>
";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/site/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  102 => 30,  94 => 31,  92 => 30,  82 => 22,  76 => 21,  66 => 14,  61 => 13,  59 => 12,  53 => 10,  47 => 9,  45 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui inverted vertical masthead center aligned segment\">
    <div class=\"ui container navigation\">
        <div class=\"ui large secondary inverted pointing menu\">
        <a class=\"toc item\">
            <i class=\"sidebar icon\"></i>
        </a>
        {% if staticMenu.menuItems %}
            {% partial \"staticmenu/main\" items=staticMenu.menuItems %}
        {% endif %}        
        <div class=\"right item\">
            {% if user %}
                <a href=\"{{ 'account/account'|page(false) }}\" 
                    class=\"{{ (''|page == 'account/account'|page(false)) ? 'active'}}\">
                    Мой профиль</a>
                <a href=\"#\"
                    class=\"ui inverted button navigation__right-item\" 
                    data-request=\"onLogout\"
                    data-request-redirect=\"/\">Выйти</a>
            {% else %}
                <a href=\"{{ 'account/account'|page(false) }}\" class=\"ui inverted button navigation__right-item\">Войти</a>
            {% endif %}        
        </div>
        </div>
    </div>
</div>



{% put scripts %}
  <script>
  \$(document).ready(function() {
      // create sidebar and attach to menu open
      \$('.ui.sidebar').sidebar('attach events', '.toc.item');
    });
  </script>
{% endput %}

{# <nav class=\"navbar navbar-dark bg-dark navbar-expand-sm\">
    <div class=\"container\">
        <div class=\"navbar-collapse collapse\" id=\"navbarToggleContent\" style=\"\">
        {% if staticMenu.menuItems %}
            <ul class=\"navbar-nav ml-auto\">
                {% partial \"staticmenu/items\" items=staticMenu.menuItems %}
            </ul>
        {% endif %}
        </div>    
 
    </div>
</nav> #}", "/var/www/ris/themes/bree7e-semantic-theme/partials/site/navigation.htm", "");
    }
}
