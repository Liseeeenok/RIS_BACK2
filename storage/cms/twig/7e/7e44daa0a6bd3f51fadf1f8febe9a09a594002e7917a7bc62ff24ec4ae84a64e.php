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

/* /var/www/ris/themes/bree7e-semantic-theme/pages/404.htm */
class __TwigTemplate_abbfecd0485933aa84871c42a1cb0091627897b54bc0d87b27176f2ba9eb70b1 extends \Twig\Template
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
        echo "<div class=\"ui container\" style=\"padding-top: 8rem;padding-bottom: 38rem;\">
    <h1 class=\"ui header\" style=\"font-size: 4rem;\">404 Страница не найдена</h1>
    <p>Кажется, такой страницы не существует</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui container\" style=\"padding-top: 8rem;padding-bottom: 38rem;\">
    <h1 class=\"ui header\" style=\"font-size: 4rem;\">404 Страница не найдена</h1>
    <p>Кажется, такой страницы не существует</p>
</div>", "/var/www/ris/themes/bree7e-semantic-theme/pages/404.htm", "");
    }
}
