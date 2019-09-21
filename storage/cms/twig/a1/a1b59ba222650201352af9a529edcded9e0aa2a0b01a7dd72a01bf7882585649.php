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
        echo "
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "section_team", [], "any", false, false, false, 14)) {
            // line 15
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("team"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "section_facility", [], "any", false, false, false, 18)) {
            // line 19
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("facility"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "section_services", [], "any", false, false, false, 22)) {
            // line 23
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "            ";
        }
        // line 25
        echo "            
        </main>
        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "    </div>
    ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
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
        return array (  129 => 32,  125 => 31,  122 => 30,  118 => 29,  115 => 28,  111 => 27,  107 => 25,  104 => 24,  99 => 23,  97 => 22,  94 => 21,  91 => 20,  86 => 19,  84 => 18,  81 => 17,  78 => 16,  73 => 15,  71 => 14,  68 => 13,  65 => 12,  60 => 11,  58 => 10,  55 => 9,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
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

            {% if(this.theme.section_team) %}
                {% partial 'team' %}
            {% endif %}

            {% if(this.theme.section_facility) %}
                {% partial 'facility' %}
            {% endif %}

            {% if(this.theme.section_services) %}
                {% partial 'services' %}
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
