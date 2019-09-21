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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/header.htm */
class __TwigTemplate_2a2366fd9a84e5957bf3a1d479b75140c28990978369cd034347f997abff4c22 extends \Twig\Template
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
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 28), "website_name", [], "any", false, false, false, 28), "html", null, true);
        echo "</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#home\">Início<span class=\"sr-only\">(current)</span></a>
                </li>
                ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 38), "section_about", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#about\">Quem Somos</a>
                    </li>
                ";
        }
        // line 43
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 43), "section_team", [], "any", false, false, false, 43)) {
            // line 44
            echo "                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#team\">Nosso Trabalho</a>
                    </li>
                ";
        }
        // line 48
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 48), "section_facility", [], "any", false, false, false, 48)) {
            // line 49
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#facility\">Eventos e Campanhas</a>
                    </li>
                ";
        }
        // line 53
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 53), "section_services", [], "any", false, false, false, 53)) {
            // line 54
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#services\">Doenças e Prevenção</a>
                    </li>
                ";
        }
        // line 58
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#services\">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        
      </nav>
      ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 66), "hero_carousel", [], "any", false, false, false, 66) == false)) {
            // line 67
            echo "        <div class=\"hero section\" style=\"background-image:url('";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 67), "hero_image", [], "any", false, false, false, 67)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 67), "hero_image", [], "any", false, false, false, 67))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/hero.jpg")));
            echo "')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                        <div class=\"hero__content\">
                            <h1>Welcome to <span><span class=\"highlight__primary--dark\">waard</span> theme</span></h1>
                            <p class=\"mb-5\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 73), "hero_description", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
                            <button class=\"button button--primary-dark\">More Information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      ";
        } else {
            // line 81
            echo "      <div class=\"hero-carousel section\">
            <div id=\"hero-carousel__item-indicators\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 83), "hero_carousel_indicators", [], "any", false, false, false, 83)) {
                // line 84
                echo "                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"2\"></li>
                    </ol>
                ";
            }
            // line 90
            echo "                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"hero\" style=\"background-image:url('";
            // line 92
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 92), "hero_carousel_slide_1", [], "any", false, false, false, 92)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 92), "hero_carousel_slide_1", [], "any", false, false, false, 92))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/slide_1.jpg")));
            echo "')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                            <div class=\"hero__content\">
                                                <h1>Conheça o<span><span class=\"highlight__primary--dark\">Instituto de Oncologia</span></span></h1>
                                                <p class=\"mb-5\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 98), "hero_description", [], "any", false, false, false, 98), "html", null, true);
            echo "</p>
                                                <button class=\"button button--primary-dark\">Mais Informações</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"hero\" style=\"background-image:url('";
            // line 107
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 107), "hero_carousel_slide_2", [], "any", false, false, false, 107)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 107), "hero_carousel_slide_2", [], "any", false, false, false, 107))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/slide_2.jpg")));
            echo "')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                        <div class=\"hero__content\">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio excepturi amet dignissimos iusto possimus hic unde, eligendi omnis. Illum officiis amet minus dolore nostrum omnis voluptates exercitationem dolorum possimus cum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"hero\" style=\"background-image:url('";
            // line 120
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 120), "hero_carousel_slide_3", [], "any", false, false, false, 120)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 120), "hero_carousel_slide_3", [], "any", false, false, false, 120))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/slide_3.jpg")));
            echo "')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                        <div class=\"hero__content\">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis, pariatur ex similique, modi in blanditiis rerum quae, architecto obcaecati quia. Quam omnis consequatur ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 133
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 133), "hero_carousel_controls", [], "any", false, false, false, 133)) {
                // line 134
                echo "                    <a class=\"carousel-control-prev d-none d-sm-flex\" data-target=\"#hero-carousel__item-indicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next d-none d-sm-flex\" data-target=\"#hero-carousel__item-indicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                ";
            }
            // line 143
            echo "            </div>
      </div>
      ";
        }
        // line 146
        echo "      
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 146,  240 => 143,  229 => 134,  227 => 133,  211 => 120,  195 => 107,  183 => 98,  174 => 92,  170 => 90,  162 => 84,  160 => 83,  156 => 81,  145 => 73,  135 => 67,  133 => 66,  123 => 58,  117 => 54,  114 => 53,  108 => 49,  105 => 48,  99 => 44,  96 => 43,  90 => 39,  88 => 38,  75 => 28,  62 => 18,  56 => 15,  50 => 12,  37 => 1,);
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
                    <a class=\"nav-link\" href=\"#home\">Início<span class=\"sr-only\">(current)</span></a>
                </li>
                {% if(this.theme.section_about) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#about\">Quem Somos</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_team) %}
                    <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#team\">Nosso Trabalho</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_facility) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#facility\">Eventos e Campanhas</a>
                    </li>
                {% endif %}
                {% if(this.theme.section_services) %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#services\">Doenças e Prevenção</a>
                    </li>
                {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#services\">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        
      </nav>
      {% if(this.theme.hero_carousel == false) %}
        <div class=\"hero section\" style=\"background-image:url('{{ this.theme.hero_image ? this.theme.hero_image|media : 'assets/dist/images/hero.jpg'|theme  }}')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                        <div class=\"hero__content\">
                            <h1>Welcome to <span><span class=\"highlight__primary--dark\">waard</span> theme</span></h1>
                            <p class=\"mb-5\">{{ this.theme.hero_description }}</p>
                            <button class=\"button button--primary-dark\">More Information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {% else %}
      <div class=\"hero-carousel section\">
            <div id=\"hero-carousel__item-indicators\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                {% if(this.theme.hero_carousel_indicators) %}
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#hero-carousel__item-indicators\" data-slide-to=\"2\"></li>
                    </ol>
                {% endif %}
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"hero\" style=\"background-image:url('{{ this.theme.hero_carousel_slide_1 ? this.theme.hero_carousel_slide_1|media : 'assets/dist/images/slide_1.jpg'|theme  }}')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                            <div class=\"hero__content\">
                                                <h1>Conheça o<span><span class=\"highlight__primary--dark\">Instituto de Oncologia</span></span></h1>
                                                <p class=\"mb-5\">{{ this.theme.hero_description }}</p>
                                                <button class=\"button button--primary-dark\">Mais Informações</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"hero\" style=\"background-image:url('{{ this.theme.hero_carousel_slide_2 ? this.theme.hero_carousel_slide_2|media : 'assets/dist/images/slide_2.jpg'|theme  }}')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                        <div class=\"hero__content\">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio excepturi amet dignissimos iusto possimus hic unde, eligendi omnis. Illum officiis amet minus dolore nostrum omnis voluptates exercitationem dolorum possimus cum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"hero\" style=\"background-image:url('{{ this.theme.hero_carousel_slide_3 ? this.theme.hero_carousel_slide_3|media : 'assets/dist/images/slide_3.jpg'|theme  }}')\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-lg-6 ml-auto\">
                                        <div class=\"hero__content\">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis, pariatur ex similique, modi in blanditiis rerum quae, architecto obcaecati quia. Quam omnis consequatur ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% if(this.theme.hero_carousel_controls) %}
                    <a class=\"carousel-control-prev d-none d-sm-flex\" data-target=\"#hero-carousel__item-indicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next d-none d-sm-flex\" data-target=\"#hero-carousel__item-indicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                {% endif %}
            </div>
      </div>
      {% endif %}
      
</header>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/header.htm", "");
    }
}
