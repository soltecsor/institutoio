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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm */
class __TwigTemplate_639585d92c67ffd4afe2fe87a4e233eefd985464f12bf94eaf0fc4e9f0d9986d extends \Twig\Template
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
        echo "<section id=\"services\" class=\"section services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center mt-0\" data-aos=\"fade\" >";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "services_heading", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-right\">
                    <header class=\"service__header\">
                        <h3>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "service_1_heading", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["service_1_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service_1_item"]) {
            // line 17
            echo "                                <li class=\"service-list__item\">";
            echo twig_escape_filter($this->env, $context["service_1_item"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_1_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "service_2_heading", [], "any", false, false, false, 27), "html", null, true);
        echo "</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["service_2_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service_2_item"]) {
            // line 32
            echo "                                <li class=\"service-list__item\">";
            echo twig_escape_filter($this->env, $context["service_2_item"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_2_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 42), "service_3_heading", [], "any", false, false, false, 42), "html", null, true);
        echo "</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["service_3_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service_3_item"]) {
            // line 47
            echo "                                <li class=\"service-list__item\">";
            echo twig_escape_filter($this->env, $context["service_3_item"], "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_3_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  124 => 47,  120 => 46,  113 => 42,  103 => 34,  94 => 32,  90 => 31,  83 => 27,  73 => 19,  64 => 17,  60 => 16,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"section services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center mt-0\" data-aos=\"fade\" >{{ this.theme.services_heading }}</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-right\">
                    <header class=\"service__header\">
                        <h3>{{ this.theme.service_1_heading }}</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            {% for service_1_item in service_1_items %}
                                <li class=\"service-list__item\">{{ service_1_item }}</li>
                            {% endfor %}
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>{{ this.theme.service_2_heading }}</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            {% for service_2_item in service_2_items %}
                                <li class=\"service-list__item\">{{ service_2_item }}</li>
                            {% endfor %}
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>{{ this.theme.service_3_heading }}</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            {% for service_3_item in service_3_items %}
                                <li class=\"service-list__item\">{{ service_3_item }}</li>
                            {% endfor %}
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Vivus magna</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm", "");
    }
}
