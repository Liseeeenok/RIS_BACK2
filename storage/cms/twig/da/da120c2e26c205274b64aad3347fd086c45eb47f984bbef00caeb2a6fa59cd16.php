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

/* /var/www/ris/plugins/bree7e/crisreport/components/yearreport/default.htm */
class __TwigTemplate_460e56ee8610a9ea1f65d5b720f4697599eeec07a9b1141499e8ceee33633cd2 extends \Twig\Template
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
        echo "<form class=\"ui form\"
    data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMakeReport\"
    data-request-update=\"'";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::year-report': '#result'\">
    <div class=\"three wide field\">
        <label>Отчетный год</label>
        <input name=\"year\" type=\"number\" value=\"2017\" min=\"1990\" max=\"2050\">
    </div>
    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary labeled icon button\" data-attach-loading>
            <i class=\"newspaper icon\"></i>Сформировать
        </button> 
    </div>      
</form>         
<br>           
<div id=\"result\"></div>
<br>
<br>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisreport/components/yearreport/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<form class=\"ui form\"
    data-request=\"{{ __SELF__ }}::onMakeReport\"
    data-request-update=\"'{{ __SELF__ }}::year-report': '#result'\">
    <div class=\"three wide field\">
        <label>Отчетный год</label>
        <input name=\"year\" type=\"number\" value=\"2017\" min=\"1990\" max=\"2050\">
    </div>
    <div class=\"field\">
        <button type=\"submit\" class=\"ui primary labeled icon button\" data-attach-loading>
            <i class=\"newspaper icon\"></i>Сформировать
        </button> 
    </div>      
</form>         
<br>           
<div id=\"result\"></div>
<br>
<br>", "/var/www/ris/plugins/bree7e/crisreport/components/yearreport/default.htm", "");
    }
}
