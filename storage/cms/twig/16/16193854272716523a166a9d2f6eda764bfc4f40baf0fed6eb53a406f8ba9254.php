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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/about.htm */
class __TwigTemplate_0e760af85c00fef0f168237de83eafc6ace3fe4d7f00c1fc45a8fb21fb2f6017 extends \Twig\Template
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
        echo "<section id=\"about\" class=\"section about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "about_heading", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-7 mx-auto text-center\" data-aos=\"fade\" >
                <!--<p class=\"about__description\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "about_description", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>-->
                <p class=\"about__description\">";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-sobrenos/sobrenos.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" >
                    <i class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "card_icon_1", [], "any", false, false, false, 17), "html", null, true);
        echo "\"></i>
                    <p>";
        // line 18
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-sobrenos/card-1.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" >
                    <i class=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "card_icon_2", [], "any", false, false, false, 23), "html", null, true);
        echo "\"></i>
                    <p>";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-sobrenos/card-2.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    <i class=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 29), "card_icon_3", [], "any", false, false, false, 29), "html", null, true);
        echo "\"></i>
                    <p>";
        // line 30
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-sobrenos/card-3.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\" data-aos=\"fade-zoom-in\" data-aos-delay=\"350\" >
                <div class=\"about__item\">
                    <i class=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 35), "card_icon_4", [], "any", false, false, false, 35), "html", null, true);
        echo "\"></i>
                    <p>";
        // line 36
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-sobrenos/card-4.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  108 => 35,  98 => 30,  94 => 29,  84 => 24,  80 => 23,  70 => 18,  66 => 17,  55 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"section about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >{{ this.theme.about_heading }}</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-7 mx-auto text-center\" data-aos=\"fade\" >
                <!--<p class=\"about__description\">{{ this.theme.about_description }}</p>-->
                <p class=\"about__description\">{% content 'home-sobrenos/sobrenos.txt' %}</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" >
                    <i class=\"{{ this.theme.card_icon_1 }}\"></i>
                    <p>{% content 'home-sobrenos/card-1.htm' %}</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" >
                    <i class=\"{{ this.theme.card_icon_2 }}\"></i>
                    <p>{% content 'home-sobrenos/card-2.htm' %}</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"about__item\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    <i class=\"{{ this.theme.card_icon_3 }}\"></i>
                    <p>{% content 'home-sobrenos/card-3.htm' %}</p>
                </div>
            </div>
            <div class=\"col-6 col-md-3\" data-aos=\"fade-zoom-in\" data-aos-delay=\"350\" >
                <div class=\"about__item\">
                    <i class=\"{{ this.theme.card_icon_4 }}\"></i>
                    <p>{% content 'home-sobrenos/card-4.htm' %}</p>
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/about.htm", "");
    }
}
