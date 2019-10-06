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
                        <h3>Nossas Causas</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">";
        // line 16
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/nossascausas.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\"><a href=\"";
        // line 18
        echo $this->extensions['System\Twig\Extension']->appFilter("/nossas-causas");
        echo "\">Saber Mais</a></button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>Advocacy</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">";
        // line 29
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/advocacy.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\"><a href=\"";
        // line 31
        echo RainLab\Pages\Classes\Page::url("nossas-causas");
        echo "\">Saber Mais</a></button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>Educação e Saúde</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">";
        // line 42
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/educacaoesaude.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=\"services2\" class=\"section services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-right\">
                    <header class=\"service__header\">
                        <h3>Cultura e Saúde</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                                <li class=\"service-list__item\">";
        // line 61
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/culturaesaude.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>Paciente</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">";
        // line 74
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/paciente.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>Pesquisas</h3>
                    </header>
                    <div class=\"service__body\">
                         <ul class=\"service-list\">
                            <li class=\"service-list__item\">";
        // line 87
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home-oquefazemos/pesquisas.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
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
        return array (  159 => 87,  141 => 74,  123 => 61,  99 => 42,  85 => 31,  78 => 29,  64 => 18,  57 => 16,  43 => 5,  37 => 1,);
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
                        <h3>Nossas Causas</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">{% content 'home-oquefazemos/nossascausas.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\"><a href=\"{{ '/nossas-causas'| app }}\">Saber Mais</a></button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>Advocacy</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">{% content 'home-oquefazemos/advocacy.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\"><a href=\"{{ 'nossas-causas'|staticPage }}\">Saber Mais</a></button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>Educação e Saúde</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">{% content 'home-oquefazemos/educacaoesaude.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=\"services2\" class=\"section services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-right\">
                    <header class=\"service__header\">
                        <h3>Cultura e Saúde</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                                <li class=\"service-list__item\">{% content 'home-oquefazemos/culturaesaude.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-down\">
                    <header class=\"service__header service__header--dark\">
                        <h3>Paciente</h3>
                    </header>
                    <div class=\"service__body\">
                        <ul class=\"service-list\">
                            <li class=\"service-list__item\">{% content 'home-oquefazemos/paciente.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"service\" data-aos=\"fade-left\">
                    <header class=\"service__header\">
                        <h3>Pesquisas</h3>
                    </header>
                    <div class=\"service__body\">
                         <ul class=\"service-list\">
                            <li class=\"service-list__item\">{% content 'home-oquefazemos/pesquisas.txt' %}</li>
                        </ul>
                        <button class=\"button button--elevate button--secondary mt-4\">Saber Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm", "");
    }
}
