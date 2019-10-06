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

/* /var/www/html/october/instituto/themes/thebakerdev-waard/partials/header-internas.htm */
class __TwigTemplate_415aecbf268cd8aa7cb158358b7013298b0f77232e63b825826e04a53acf2fec extends \Twig\Template
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
        echo "<header id=\"home\" class=\"header\">
    <div class=\"header__info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <p class=\"mb-0\"></p>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <ul class=\"social-links\">
                        <li class=\"social-links__item social-links__item--first\">(00) 0000 - 0000</li>
                        <li class=\"social-links__item\">
                            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "facebook_link", [], "any", false, false, false, 12), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                        </li>
                        <li class=\"social-links__item\">
                            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 15), "twitter_link", [], "any", false, false, false, 15), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                        </li>
                        <li class=\"social-links__item\">
                            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "instagram_link", [], "any", false, false, false, 18), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav id=\"navigation\" class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\"><span class=\"highlight__primary--dark\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "website_name", [], "any", false, false, false, 27), "html", null, true);
        echo "</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "\">Início<span class=\"sr-only\">(current)</span></a>
                </li>
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 37), "section_about", [], "any", false, false, false, 37)) {
            // line 38
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#about\">Sobre nós</a>
                    </li>
                ";
        }
        // line 42
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 42), "section_services", [], "any", false, false, false, 42)) {
            // line 43
            echo "                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['System\Twig\Extension']->appFilter("/#services");
            echo "\">O que fazemos</a>
                    </li>
                ";
        }
        // line 47
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 47), "section_facility", [], "any", false, false, false, 47)) {
            // line 48
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Eventos e Campanhas</a>
                    </li>
                ";
        }
        // line 52
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "section_services", [], "any", false, false, false, 52)) {
            // line 53
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Doenças e Prevenção</a>
                    </li>
                ";
        }
        // line 57
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        
      </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/header-internas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  122 => 53,  119 => 52,  113 => 48,  110 => 47,  104 => 44,  101 => 43,  98 => 42,  92 => 38,  90 => 37,  85 => 35,  74 => 27,  62 => 18,  56 => 15,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"home\" class=\"header\">
    <div class=\"header__info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <p class=\"mb-0\"></p>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                    <ul class=\"social-links\">
                        <li class=\"social-links__item social-links__item--first\">(00) 0000 - 0000</li>
                        <li class=\"social-links__item\">
                            <a href=\"{{ this.theme.facebook_link }}\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                        </li>
                        <li class=\"social-links__item\">
                            <a href=\"{{ this.theme.twitter_link }}\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                        </li>
                        <li class=\"social-links__item\">
                            <a href=\"{{ this.theme.instagram_link }}\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav id=\"navigation\" class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\"><span class=\"highlight__primary--dark\">{{ this.theme.website_name }}</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ '/'| app }}\">Início<span class=\"sr-only\">(current)</span></a>
                </li>
                {% if(this.theme.section_about) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#about\">Sobre nós</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_services) %}
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{'/#services' | app}}\">O que fazemos</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_facility) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Eventos e Campanhas</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_services) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Doenças e Prevenção</a>
                    </li>
                {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        
      </nav>
</header>", "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/header-internas.htm", "");
    }
}
