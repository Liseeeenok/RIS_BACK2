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

/* /var/www/ris/plugins/bree7e/cris/components/partials/author.htm */
class __TwigTemplate_de22a48fab03767895df165e0c3f0158a340799f9f7d4a3b73080375b8d24636 extends \Twig\Template
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
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "surname", [], "any", false, false, false, 2) . " ") . twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 2))) . "."), "html", null, true);
        ((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "middlename", [], "any", false, false, false, 2)) ? (print (twig_escape_filter($this->env, (twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "middlename", [], "any", false, false, false, 2)) . "."), "html", null, true))) : (print ("")));
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/partials/author.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{{ author.surname ~ \" \" ~ author.name|first ~ \".\"}}{{author.middlename ? author.middlename|first ~ \".\"}}", "/var/www/ris/plugins/bree7e/cris/components/partials/author.htm", "");
    }
}
