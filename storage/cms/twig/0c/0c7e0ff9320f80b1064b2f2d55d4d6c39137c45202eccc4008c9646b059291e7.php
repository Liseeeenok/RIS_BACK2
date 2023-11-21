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

/* /var/www/ris/themes/bree7e-semantic-theme/layouts/text-container.htm */
class __TwigTemplate_a260e76bb97c2124f11264a2f9cba43ea26d57ac54856767bdf47e28a281edf8 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>
<body class=\"pushable layout\">
    <!-- Sidebar Menu -->
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    <div class=\"pusher\">
        <div class=\"layout__page\">
            <nav class=\"layout__navigation\">
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            </nav>
            <div class=\"ui text container\">
                <main class=\"layout__content\">
                    <h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
                    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 19
        echo "                </main>
            </div>
        </div>

        <footer class=\"layout__footer\">
            ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "        </footer>    
    </div>

    ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/layouts/text-container.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  91 => 28,  86 => 25,  82 => 24,  75 => 19,  73 => 18,  69 => 17,  64 => 14,  60 => 13,  55 => 10,  51 => 9,  46 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!DOCTYPE html>
<html lang=\"ru\">
<head>
    {% partial 'site/head' %}
</head>
<body class=\"pushable layout\">
    <!-- Sidebar Menu -->
    {% partial 'site/sidebar' %}
    <div class=\"pusher\">
        <div class=\"layout__page\">
            <nav class=\"layout__navigation\">
                {% partial 'site/navigation' %}
            </nav>
            <div class=\"ui text container\">
                <main class=\"layout__content\">
                    <h1>{{ this.page.title }}</h1>
                    {% page %}
                </main>
            </div>
        </div>

        <footer class=\"layout__footer\">
            {% partial 'site/footer' %}
        </footer>    
    </div>

    {% partial 'site/scripts' %}
</body>
</html>", "/var/www/ris/themes/bree7e-semantic-theme/layouts/text-container.htm", "");
    }
}
