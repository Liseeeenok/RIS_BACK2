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

/* /var/www/ris/plugins/xeor/yandexwebmaster/components/yandexmetrika/default.htm */
class __TwigTemplate_346ea77c62c5f176aadf8cdacbcf8ceeac598d3e4313c4fcfca6136f2d00f7c6 extends \Twig\Template
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
        // line 1
        echo ($context["metrika"] ?? null);
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexmetrika/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ metrika|raw }}", "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexmetrika/default.htm", "");
    }
}
