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

/* /var/www/ris/plugins/bree7e/crisinfo/components/statistics/default.htm */
class __TwigTemplate_8d2109fb4470c79f45bd7915829213742ee81b24f560e931cfddd7f58a325d6d extends \Twig\Template
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
        echo "<div class=\"ui statistics\">
  <div class=\"statistic\">
    <div class=\"value\">
      ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "authorCount", [], "any", false, false, false, 5), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Авторов
    </div>
  </div>
  <div class=\"statistic\">
    <div class=\"value\">
      ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publicationCount", [], "any", false, false, false, 13), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Публикаций
    </div>
  </div>
  <div class=\"statistic\">
    <div class=\"value\">
      ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "projectCount", [], "any", false, false, false, 21), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Проектов
    </div>
  </div>
</div>

<h2 class=\"header\">Из них:</h2>
<div class=\"ui horizontal statistics\">
  <div class=\"statistic\">
    <div class=\"value\">
      ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "articleCount", [], "any", false, false, false, 33), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Журнальные статьи
    </div>
  </div>

    <div class=\"ui list\" style=\"margin-left:  1rem;\">
        <div class=\"item\">WoS: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "articleWosCount", [], "any", false, false, false, 41), "html", null, true);
        echo "</div>
        <div class=\"item\">Scopus: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "articleScopusCount", [], "any", false, false, false, 42), "html", null, true);
        echo "</div>
        <div class=\"item\">РИНЦ: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "articleRiscCount", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
    </div>

  <div class=\"statistic\">
    <div class=\"value\">
       ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "inproceedingsCount", [], "any", false, false, false, 48), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Труды конференций
    </div>
  </div>

  <div class=\"statistic\">
    <div class=\"value\">
      ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "patentCount", [], "any", false, false, false, 57), "html", null, true);
        echo "
    </div>
    <div class=\"label\">
      Авторские свидетельства
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisinfo/components/statistics/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  106 => 48,  98 => 43,  94 => 42,  90 => 41,  79 => 33,  64 => 21,  53 => 13,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"ui statistics\">
  <div class=\"statistic\">
    <div class=\"value\">
      {{ __SELF__.authorCount }}
    </div>
    <div class=\"label\">
      Авторов
    </div>
  </div>
  <div class=\"statistic\">
    <div class=\"value\">
      {{ __SELF__.publicationCount }}
    </div>
    <div class=\"label\">
      Публикаций
    </div>
  </div>
  <div class=\"statistic\">
    <div class=\"value\">
      {{ __SELF__.projectCount }}
    </div>
    <div class=\"label\">
      Проектов
    </div>
  </div>
</div>

<h2 class=\"header\">Из них:</h2>
<div class=\"ui horizontal statistics\">
  <div class=\"statistic\">
    <div class=\"value\">
      {{ __SELF__.articleCount }}
    </div>
    <div class=\"label\">
      Журнальные статьи
    </div>
  </div>

    <div class=\"ui list\" style=\"margin-left:  1rem;\">
        <div class=\"item\">WoS: {{ __SELF__.articleWosCount }}</div>
        <div class=\"item\">Scopus: {{  __SELF__.articleScopusCount }}</div>
        <div class=\"item\">РИНЦ: {{  __SELF__.articleRiscCount }}</div>
    </div>

  <div class=\"statistic\">
    <div class=\"value\">
       {{ __SELF__.inproceedingsCount }}
    </div>
    <div class=\"label\">
      Труды конференций
    </div>
  </div>

  <div class=\"statistic\">
    <div class=\"value\">
      {{ __SELF__.patentCount }}
    </div>
    <div class=\"label\">
      Авторские свидетельства
    </div>
  </div>

</div>", "/var/www/ris/plugins/bree7e/crisinfo/components/statistics/default.htm", "");
    }
}
