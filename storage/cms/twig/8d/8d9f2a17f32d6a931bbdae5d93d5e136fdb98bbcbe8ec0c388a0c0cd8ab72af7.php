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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/site/head.htm */
class __TwigTemplate_cbb0aec242b1307bde4f6c379d815fda53ea9a57fe68ed0e8841d092b2e02941 extends \Twig\Template
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
        echo "<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"author\" content=\"Alexandr Vetrov\">
<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6)) {
            // line 7
            echo "  <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
";
        }
        // line 9
        echo "<meta name=\"yandex-verification\" content=\"ae835d9dd02d1509\" />
<title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "site_name", [], "any", false, false, false, 10), "html", null, true);
        echo "</title>

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\"/>
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/semantic/dist/semantic.min.css", 1 => "assets/css/latofonts.css", 2 => "assets/css/style.css"]);
        // line 17
        echo "\" rel=\"stylesheet\">
";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("webmaster"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/site/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  70 => 18,  67 => 17,  65 => 13,  61 => 12,  54 => 10,  51 => 9,  45 => 7,  43 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"author\" content=\"Alexandr Vetrov\">
<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
{% if this.page.meta_description %}
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
{% endif %}
<meta name=\"yandex-verification\" content=\"ae835d9dd02d1509\" />
<title>{{ this.page.title }} / {{ this.theme.site_name }}</title>

<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\"/>
<link href=\"{{ [
    'assets/vendor/semantic/dist/semantic.min.css',
    'assets/css/latofonts.css',
    'assets/css/style.css'
]|theme }}\" rel=\"stylesheet\">
{% styles %}
{% component 'webmaster' %}", "/var/www/ris/themes/bree7e-semantic-theme/partials/site/head.htm", "");
    }
}
