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

/* /var/www/ris/plugins/bree7e/crisinfo/components/phones/default.htm */
class __TwigTemplate_1caa8417572af2654677189123a3386a60cb2095b096c062bf2891f1c573d450 extends \Twig\Template
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
        echo "
<div class=\"ui  fluid icon input\">
    <input type=\"text\" placeholder=\"Фамилия или телефон\" id=\"search-text\" onkeyup=\"tableSearch()\">
    <i class=\"search icon\"></i>
</div>

<table class=\"ui striped table\" id=\"info-table\">
  <thead>
    <tr>
      <th>Фамилия имя отчество</th>
      <th>Телефон</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "authors", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 17
            echo "        <tr>
            <td>
                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "surname", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "middlename", [], "any", false, false, false, 19), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["author"], "phones", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "phones", [], "any", false, false, false, 23), "html", null, true);
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      
  </tbody>
</table>



";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 34
        echo "
<script>
    function tableSearch() {
        var phrase = document.getElementById('search-text');
        var table = document.getElementById('info-table');
        var regPhrase = new RegExp(phrase.value, 'i');
        var flag = false;
        for (var i = 1; i < table.rows.length; i++) {
            flag = false;
            for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                if (flag) break;
            }
            if (flag) {
                table.rows[i].style.display = \"\";
            } else {
                table.rows[i].style.display = \"none\";
            }

        }
    }
</script>

";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/crisinfo/components/phones/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  102 => 34,  100 => 33,  92 => 27,  84 => 25,  75 => 23,  71 => 22,  61 => 19,  57 => 17,  53 => 16,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

<div class=\"ui  fluid icon input\">
    <input type=\"text\" placeholder=\"Фамилия или телефон\" id=\"search-text\" onkeyup=\"tableSearch()\">
    <i class=\"search icon\"></i>
</div>

<table class=\"ui striped table\" id=\"info-table\">
  <thead>
    <tr>
      <th>Фамилия имя отчество</th>
      <th>Телефон</th>
    </tr>
  </thead>
  <tbody>
    {% for author in __SELF__.authors %}
        <tr>
            <td>
                {{ author.surname }} {{ author.name }} {{ author.middlename }}
            </td>
            <td>
                {% for phone in author.phones %}
                    {{ phone.phones }} 
                {% endfor %}
            </td>
        </tr>
    {% endfor %}      
  </tbody>
</table>



{% put scripts %}

<script>
    function tableSearch() {
        var phrase = document.getElementById('search-text');
        var table = document.getElementById('info-table');
        var regPhrase = new RegExp(phrase.value, 'i');
        var flag = false;
        for (var i = 1; i < table.rows.length; i++) {
            flag = false;
            for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                if (flag) break;
            }
            if (flag) {
                table.rows[i].style.display = \"\";
            } else {
                table.rows[i].style.display = \"none\";
            }

        }
    }
</script>

{% endput %}", "/var/www/ris/plugins/bree7e/crisinfo/components/phones/default.htm", "");
    }
}
