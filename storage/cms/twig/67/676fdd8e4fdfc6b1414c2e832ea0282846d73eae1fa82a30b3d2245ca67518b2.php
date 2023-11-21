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

/* /var/www/ris/plugins/bree7e/cris/components/publications/default.htm */
class __TwigTemplate_57235a6ba0e9fce97be272f4d257c2aedb2c8a070a2437be787dc33367f231b4 extends \Twig\Template
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
        $context["publication"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "publication", [], "any", false, false, false, 2);
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
<p>Авторы: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
<p>Журнал: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "journal", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
<p>Том: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "volume", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
<p>Номер: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "number", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
<p>Год: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "year", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<p>Отчётный год: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "reportYear", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p>Издательство: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publisher", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
<p>Местоположение издательства: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "address", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
<p>URL: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
<p>Аннотация: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "annotation", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
<p>Индексируется WOS: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "is_wos", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
<p>Индексируется Scopus: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "is_scopus", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
<p>Индексируется РИНЦ: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "is_risc", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
<p>Публикация в печати: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "is_to_print", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
<p>Добавил в систему: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "added_by_rb_user_id", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/publications/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set publication = __SELF__.publication %}
{# Пубилкация{{publication}} #}
<h1>{{ publication.title }}</h1>
<p>Авторы: {{ publication.authors }}</p>
<p>Журнал: {{ publication.journal }}</p>
<p>Том: {{ publication.volume }}</p>
<p>Номер: {{ publication.number }}</p>
<p>Год: {{ publication.year }}</p>
<p>Отчётный год: {{ publication.reportYear }}</p>
<p>Издательство: {{ publication.publisher }}</p>
<p>Местоположение издательства: {{ publication.address }}</p>
<p>URL: {{ publication.url }}</p>
<p>Аннотация: {{ publication.annotation }}</p>
<p>Индексируется WOS: {{ publication.is_wos }}</p>
<p>Индексируется Scopus: {{ publication.is_scopus }}</p>
<p>Индексируется РИНЦ: {{ publication.is_risc }}</p>
<p>Публикация в печати: {{ publication.is_to_print }}</p>
<p>Добавил в систему: {{ publication.added_by_rb_user_id }}</p>
", "/var/www/ris/plugins/bree7e/cris/components/publications/default.htm", "");
    }
}
