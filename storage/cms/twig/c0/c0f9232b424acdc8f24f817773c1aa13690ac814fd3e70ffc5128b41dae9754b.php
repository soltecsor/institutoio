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
                <div class=\"team-profile team-toggle active\" data-aos=\"fade-zoom-in\"  data-toggle=\"member-1\">
                    <img src=\"";
        // line 11
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
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_2.jpg");
        echo "\" alt=\"Team Member\" class=\"team-profile__image\">
                    <div class=\"team-profile__titles\">
                        <p>Head Nurse</p>
                    </div>
                </div>
                <div class=\"team-profile team-toggle\"  data-toggle=\"member-3\">
                    <img src=\"";
        // line 25
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
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_1.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Dr. Herman Lock</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Cardiologist</span>
                        </div>
                    </div>
                    <div class=\"team-member__item mb-3\" data-target=\"member-2\">
                        <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/member_thumbnail_2.jpg");
        echo "\" alt=\"image\" class=\"team-member__image\">
                        <div class=\"team-member__info\">
                            <span class=\"team-member__name\">Jenny Frou</span>
                            <span class=\"team-member__title highlight__secondary--dark\">Head Nurse</span>
                        </div>
                    </div>
                    <div class=\"team-member__item\" data-target=\"member-3\">
                        <img src=\"";
        // line 69
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
</section>";
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
        return array (  122 => 69,  112 => 62,  102 => 55,  69 => 25,  60 => 19,  49 => 11,  37 => 1,);
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
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/team.htm", "");
    }
}
