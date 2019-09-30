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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/team.htm */
class __TwigTemplate_556952ab2a2acc7ef19587e911c71fa4954657b3d4aa7ce9680277b078870af7 extends \Twig\Template
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
        echo "<section id=\"doencaseprevencao\" class=\"section team\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Doenças e Prevenção</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-4 order-2 order-md-1\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                <div class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11) == 1)) ? ("team-profile team-toggle active") : ("team-profile team-toggle"));
            echo "\" data-aos=\"fade-zoom-in\"  data-toggle=\"member-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12)) {
                // line 13
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    echo " 
                    <img class=\"team-profile__image\" data-src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 14), "html", null, true);
                    echo "\">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                    ";
            }
            // line 17
            echo "                    <div class=\"team-profile__titles\">
                        <p>";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 18);
            echo "</p>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
            <div class=\"col-12 col-sm-6 col-md-4 order-3\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "                <div class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25) == 1)) ? ("team-info team team-toggle active") : ("team-info team team-toggle"));
            echo " data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" data-toggle=\"member-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    <h4 class=\"team-info__name\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26);
            echo "</h4>
                    <p>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 27);
            echo "</p>
                    <p>";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 28);
            echo "</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Saber mais</button>
                </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                <!--<div class=\"team-info team team-toggle\" data-toggle=\"member-2\">
                    <h4 class=\"team-info__name\">Dr. Jenny Frou</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti.</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-3\">
                    <h4 class=\"team-info__name\">Andy Johnson</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur consequatur saepe aspernatur!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, voluptatibus?</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>-->
            </div>
            <div class=\"col-12 col-md-4 order-1 order-md-3 mb-5 mb-md-0\">
                <div class=\"team-member\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 48
            echo "                    <div class=\"team-member__item mb-3\" data-target=\"member-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 49), "count", [], "any", false, false, false, 49)) {
                // line 50
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    echo " 
                                <img class=\"team-member__image\" data-src=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 51), "html", null, true);
                    echo "\">
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                        ";
            }
            echo "    
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 55);
            echo "</span>
                            <span class=\"team-member__title highlight__secondary--dark\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 56);
            echo "</span>
                        </div>
                    </div>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    <!--<div class=\"team-member__item mb-3\" data-target=\"member-2\">
                        <img src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_2.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Jenny Frou</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Head Nurse</span>
                        </div>
                    </div>
                    <div class=\"team-member__item\" data-target=\"member-3\">
                        <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_3.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Andy Johnson</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Internal Medicine</span>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section id=\"doencaseprevencao\" class=\"section team\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Doenças e Prevenção</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-4 order-2 order-md-1\">
                <div class=\"team-profile team-toggle active\" data-aos=\"fade-zoom-in\"  data-toggle=\"member-1\">
                    <img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_1.jpg");
        echo "\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Medical Doctor</p>
                        <p>Master of Medical Science</p>
                        <p>Anesthesiologists</p>
                    </div>
                </div>
                <div class=\"team-profile  team-toggle\" data-toggle=\"member-2\">
                    <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_2.jpg");
        echo "\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Head Nurse</p>
                    </div>
                </div>
                <div class=\"team-profile team-toggle\"  data-toggle=\"member-3\">
                    <img src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_3.jpg");
        echo "\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Internal Medicine</p>    
                        <p>Anesthesiologists</p>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-4 order-3\">
                <div class=\"team-info team team-toggle active\" data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" data-toggle=\"member-1\">
                    <h4 class=\"team-info__name\">Dr. Herman Lock</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque ipsum facere soluta in reiciendis rem?</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-2\">
                    <h4 class=\"team-info__name\">Dr. Jenny Frou</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti.</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-3\">
                    <h4 class=\"team-info__name\">Andy Johnson</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur consequatur saepe aspernatur!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, voluptatibus?</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
            </div>
            <div class=\"col-12 col-md-4 order-1 order-md-3 mb-5 mb-md-0\">
                <div class=\"team-member\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    <div class=\"team-member__item mb-3\" data-target=\"member-1\">
                        <img src=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_1.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Herman Lock</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Cardiologist</span>
                        </div>
                    </div>
                    <div class=\"team-member__item mb-3\" data-target=\"member-2\">
                        <img src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_2.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Jenny Frou</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Head Nurse</span>
                        </div>
                    </div>
                    <div class=\"team-member__item\" data-target=\"member-3\">
                        <img src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_3.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Andy Johnson</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Internal Medicine</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 147,  359 => 140,  349 => 133,  316 => 103,  307 => 97,  296 => 89,  272 => 68,  262 => 61,  259 => 60,  241 => 56,  237 => 55,  231 => 53,  219 => 51,  212 => 50,  210 => 49,  205 => 48,  188 => 47,  171 => 32,  153 => 28,  149 => 27,  145 => 26,  138 => 25,  121 => 24,  117 => 22,  99 => 18,  96 => 17,  93 => 16,  81 => 14,  74 => 13,  72 => 12,  65 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"doencaseprevencao\" class=\"section team\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Doenças e Prevenção</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-4 order-2 order-md-1\">
                {% for post in filteredPosts %}
                <div class=\"{{ loop.index == 1 ? 'team-profile team-toggle active' : 'team-profile team-toggle'}}\" data-aos=\"fade-zoom-in\"  data-toggle=\"member-{{ loop.index }}\">
                    {% if post.featured_images.count %}
                        {% for image in post.featured_images %} 
                    <img class=\"team-profile__image\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                        {% endfor %}
                    {% endif %}
                    <div class=\"team-profile__titles\">
                        <p>{{post.title | raw}}</p>
                    </div>
                </div>
            {% endfor %}
            </div>
            <div class=\"col-12 col-sm-6 col-md-4 order-3\">
                {% for post in filteredPosts %}
                <div class=\"{{ loop.index == 1 ? 'team-info team team-toggle active' : 'team-info team team-toggle'}} data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" data-toggle=\"member-{{ loop.index }}\">
                    <h4 class=\"team-info__name\">{{post.title | raw}}</h4>
                    <p>{{post.summary | raw}}</p>
                    <p>{{post.summary | raw}}</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Saber mais</button>
                </div>
                {% endfor %}
                <!--<div class=\"team-info team team-toggle\" data-toggle=\"member-2\">
                    <h4 class=\"team-info__name\">Dr. Jenny Frou</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti.</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-3\">
                    <h4 class=\"team-info__name\">Andy Johnson</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur consequatur saepe aspernatur!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, voluptatibus?</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>-->
            </div>
            <div class=\"col-12 col-md-4 order-1 order-md-3 mb-5 mb-md-0\">
                <div class=\"team-member\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    {% for post in filteredPosts %}
                    <div class=\"team-member__item mb-3\" data-target=\"member-{{loop.index}}\">
                        {% if post.featured_images.count %}
                            {% for image in post.featured_images %} 
                                <img class=\"team-member__image\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                            {% endfor %}
                        {% endif %}    
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">{{post.title | raw}}</span>
                            <span class=\"team-member__title highlight__secondary--dark\">{{post.summary | raw}}</span>
                        </div>
                    </div>
                    {% endfor %}
                    <!--<div class=\"team-member__item mb-3\" data-target=\"member-2\">
                        <img src=\"{{ 'assets/dist/images/member_thumbnail_2.jpg'|theme }}\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Jenny Frou</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Head Nurse</span>
                        </div>
                    </div>
                    <div class=\"team-member__item\" data-target=\"member-3\">
                        <img src=\"{{ 'assets/dist/images/member_thumbnail_3.jpg'|theme }}\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Andy Johnson</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Internal Medicine</span>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section id=\"doencaseprevencao\" class=\"section team\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Doenças e Prevenção</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 col-sm-6 col-md-4 order-2 order-md-1\">
                <div class=\"team-profile team-toggle active\" data-aos=\"fade-zoom-in\"  data-toggle=\"member-1\">
                    <img src=\"{{ 'assets/dist/images/member_1.jpg'|theme }}\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Medical Doctor</p>
                        <p>Master of Medical Science</p>
                        <p>Anesthesiologists</p>
                    </div>
                </div>
                <div class=\"team-profile  team-toggle\" data-toggle=\"member-2\">
                    <img src=\"{{ 'assets/dist/images/member_2.jpg'|theme }}\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Head Nurse</p>
                    </div>
                </div>
                <div class=\"team-profile team-toggle\"  data-toggle=\"member-3\">
                    <img src=\"{{ 'assets/dist/images/member_3.jpg'|theme }}\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Internal Medicine</p>    
                        <p>Anesthesiologists</p>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-4 order-3\">
                <div class=\"team-info team team-toggle active\" data-aos=\"fade-zoom-in\" data-aos-delay=\"150\" data-toggle=\"member-1\">
                    <h4 class=\"team-info__name\">Dr. Herman Lock</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque ipsum facere soluta in reiciendis rem?</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-2\">
                    <h4 class=\"team-info__name\">Dr. Jenny Frou</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, deleniti.</p>
                    <p>Eligendi veritatis maiores natus, incidunt reprehenderit exercitationem sunt delectus? Tempore, corporis ducimus!</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
                <div class=\"team-info team team-toggle\" data-toggle=\"member-3\">
                    <h4 class=\"team-info__name\">Andy Johnson</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur consequatur saepe aspernatur!</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, voluptatibus?</p>
                    <button class=\"button button--elevate button--secondary mt-4\">Contact</button>
                </div>
            </div>
            <div class=\"col-12 col-md-4 order-1 order-md-3 mb-5 mb-md-0\">
                <div class=\"team-member\" data-aos=\"fade-zoom-in\" data-aos-delay=\"250\" >
                    <div class=\"team-member__item mb-3\" data-target=\"member-1\">
                        <img src=\"{{ 'assets/dist/images/member_thumbnail_1.jpg'|theme }}\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Herman Lock</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Cardiologist</span>
                        </div>
                    </div>
                    <div class=\"team-member__item mb-3\" data-target=\"member-2\">
                        <img src=\"{{ 'assets/dist/images/member_thumbnail_2.jpg'|theme }}\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Jenny Frou</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Head Nurse</span>
                        </div>
                    </div>
                    <div class=\"team-member__item\" data-target=\"member-3\">
                        <img src=\"{{ 'assets/dist/images/member_thumbnail_3.jpg'|theme }}\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Andy Johnson</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Internal Medicine</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/team.htm", "");
    }
}
