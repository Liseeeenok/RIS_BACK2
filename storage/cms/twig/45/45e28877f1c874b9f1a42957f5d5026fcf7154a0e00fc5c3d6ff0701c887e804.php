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

/* /var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm */
class __TwigTemplate_f16e4544133f364c894e75f2c3f728a2814007c9e1968faf568f38d7ca01264f extends \Twig\Template
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
        echo "<meta name=\"yandex-verification\" content=\"";
        echo ($context["webmaster"] ?? null);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta name=\"yandex-verification\" content=\"{{ webmaster|raw }}\" />
", "/var/www/ris/plugins/xeor/yandexwebmaster/components/yandexwebmaster/default.htm", "");
    }
}
