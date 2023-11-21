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

/* /var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm */
class __TwigTemplate_f4f0bd5770579e0fc44777ecb8a9bffd0774e65bfe39a29b6605b39a7a812cbe extends \Twig\Template
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
        echo "<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"column\">
            <div class=\"footer\">
                <p class=\"muted\"> © 2017-2018 — Александр Ветров</p>
                <p>Сайт работает на <a href=\"http://octobercms.com\">October CMS</a></p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"column\">
            <div class=\"footer\">
                <p class=\"muted\"> © 2017-2018 — Александр Ветров</p>
                <p>Сайт работает на <a href=\"http://octobercms.com\">October CMS</a></p>
            </div>
        </div>
    </div>
</div>", "/var/www/ris/themes/bree7e-semantic-theme/partials/site/footer.htm", "");
    }
}
