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

/* /var/www/ris/plugins/bree7e/cris/components/partials/publication_citis.htm */
class __TwigTemplate_9d59c3ed8ca8e09566a99df18291017c083196f371ce43d8af05d6e16839e55a extends \Twig\Template
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
";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "is_wos", [], "any", false, false, false, 21) == 1)) {
            // line 22
            echo "    ";
            $context["quartile"] = "Q";
            echo " ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
($context["publication"] ?? null), "is_scopus", [], "any", false, false, false, 23) == 1)) {
            // line 24
            echo "    ";
            $context["quartile"] = "S";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 25
($context["publication"] ?? null), "is_risc", [], "any", false, false, false, 25) == 1)) {
            // line 26
            echo "    ";
            $context["quartile"] = "V";
        } else {
            // line 28
            echo "    ";
            $context["quartile"] = "";
        }
        // line 30
        echo "
";
        // line 31
        $context["affilation"] = 1;
        echo " ";
        // line 32
        echo "
";
        // line 33
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_authors", [], "any", false, false, false, 33)) > 0)) {
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "publication_authors", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "doi", [], "any", false, false, false, 35), "html", null, true);
                echo ";";
                echo twig_escape_filter($this->env, ($context["quartile"] ?? null), "html", null, true);
                echo ";";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "authors_count", [], "any", false, false, false, 35), "html", null, true);
                echo ";";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['author'] = $context["a"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@author"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                echo ";";
                echo twig_escape_filter($this->env, ($context["affilation"] ?? null), "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "projects", [], "any", false, false, false, 37));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 38
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38) > 1)) ? (",") : (""));
                ((twig_get_attribute($this->env, $this->source, $context["project"], "nioktr_number", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "nioktr_number", [], "any", false, false, false, 38), "html", null, true))) : (print ("Нет ЦИТИС номера")));
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 41
            echo "    С публикацией не ассоциированны авторы системы
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/ris/plugins/bree7e/cris/components/partials/publication_citis.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  111 => 38,  94 => 37,  76 => 35,  72 => 34,  70 => 33,  67 => 32,  64 => 31,  61 => 30,  57 => 28,  53 => 26,  51 => 25,  48 => 24,  46 => 23,  42 => 22,  40 => 21,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}

{#
  В поля раздела «Публикация» необходимо внести DOI публикации и информацию об авторе 
  (в формате Фамилия И.О.) соответственно. В разделе «Характеристики» требуется указать 
  количество аффиляций автора и количество авторов, а так же в поле «Квартиль» выбрать 
  из списка (нажав на кнопку) квартиль публикации. 
  
  Символы Q1 – Q4 используются для публикаций, 
  зарегистрированных в Web of Science, если у публикации нет индекса квартили, 
  но она входит в Core Collection Web of Science для неё ставится индекс Q4. 
  Символ S для публикаций, зарегистрированных в Scopus и не индексируемых в Web of Science. 
  Символ R для публикаций в журналах из RSCI Web of Science. 
  Символ V для публикаций в журналах списка ВАК, не входящие в вышеперечисленные пункты. 

  В поле «Темы» указываются регистрационные номера тем в ЕГИСУ НИОКТР (путем перечисления номеров 
  госрегистрации тем, разделенных запятыми), результаты работы по которым автор использовал в публикации.
  Можно приводить как несколько тем, так и ни одной. Учитывается для подсчета количества публикаций, 
  связанных с выполнением тематических работ в рамках Государственного задания. 
#}
{% if publication.is_wos == 1 %}
    {% set quartile = 'Q' %} {# Должен браться квартиль из базы данных #}
{% elseif publication.is_scopus == 1 %}
    {% set quartile = 'S' %}
{% elseif publication.is_risc == 1 %}
    {% set quartile = 'V' %}
{% else %}
    {% set quartile = '' %}
{% endif %}

{% set affilation = 1 %} {# Не учитывается в нашей системе #}

{% if publication.publication_authors|length > 0 %}
    {%- for a in publication.publication_authors -%}
        {{ publication.doi }};{{ quartile }};{{ publication.authors_count }};{% partial '@author' author = a %};{{ affilation }};
    {%- endfor -%}
    {%- for project in publication.projects -%}
        {{ loop.index > 1 ? ',' }}{{ project.nioktr_number ? project.nioktr_number : 'Нет ЦИТИС номера' }}         
    {%- endfor -%}   
{% else %}
    С публикацией не ассоциированны авторы системы
{% endif %}", "/var/www/ris/plugins/bree7e/cris/components/partials/publication_citis.htm", "");
    }
}
