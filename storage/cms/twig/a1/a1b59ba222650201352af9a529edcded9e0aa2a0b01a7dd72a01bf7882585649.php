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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/layouts/default.htm */
class __TwigTemplate_ecaeb2a1e510e001f6401e71195c1e49ca0670cd39e1687ccb65f0d460ab7c5a extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "  </head>
  <body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"50\">
    <div class=\"wrapper\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <main class=\"content\">
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "section_about", [], "any", false, false, false, 10)) {
            // line 11
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "            ";
        }
        // line 13
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "section_services", [], "any", false, false, false, 13)) {
            // line 14
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "            ";
        }
        // line 16
        echo "                ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("campanhas"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "           <!-- ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "section_team", [], "any", false, false, false, 17)) {
            // line 18
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("team"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "            ";
        }
        echo "-->

            <!--";
        // line 21
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "section_facility", [], "any", false, false, false, 21)) {
            // line 22
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("facility"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 23
            echo "            ";
        }
        echo "-->

            <!--";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "section_services", [], "any", false, false, false, 25)) {
            // line 26
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "-->
            ";
        }
        // line 28
        echo "            
        </main>
        ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    </div>
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "
    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  139 => 34,  136 => 33,  132 => 32,  129 => 31,  125 => 30,  121 => 28,  113 => 26,  111 => 25,  105 => 23,  100 => 22,  98 => 21,  92 => 19,  87 => 18,  84 => 17,  79 => 16,  76 => 15,  71 => 14,  68 => 13,  65 => 12,  60 => 11,  58 => 10,  55 => 9,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    {% partial 'meta' %}
  </head>
  <body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"50\">
    <div class=\"wrapper\">
        {% partial 'header' %}
        <main class=\"content\">
            {% if(this.theme.section_about) %}
                {% partial 'about' %}
            {% endif %}
            {% if(this.theme.section_services) %}
                {% partial 'services' %}
            {% endif %}
                {% partial 'campanhas' %}
           <!-- {% if(this.theme.section_team) %}
                {% partial 'team' %}
            {% endif %}-->

            <!--{% if(this.theme.section_facility) %}
                {% partial 'facility' %}
            {% endif %}-->

            <!--{% if(this.theme.section_services) %}
                {% partial 'services' %}-->
            {% endif %}
            
        </main>
        {% partial 'footer' %}
    </div>
    {% partial 'modal' %}

    {% partial 'scripts' %}
</body>
</html>", "/var/www/html/october/install-master/themes/thebakerdev-waard/layouts/default.htm", "");
    }
}
