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

/* /var/www/html/october/instituto/themes/thebakerdev-waard/partials/footer.htm */
class __TwigTemplate_eee2d285f4e08a303869c28763bacb8507f326720779bf9c0d6e2cfcd2325422 extends \Twig\Template
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">mapa do site</h3>
                    <ul class=\"footer-menu  mt-4\">
                        <li class=\"footer-menu__item\"><a href=\"#home\">Quem Somos</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#about\">Nosso Trabalho</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#team\">Eventos e Campanhas</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Doenças e Prevenção</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Serviços</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Blog</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">Onde estamos</h3>
                    <ul class=\"footer-menu  mt-4\">
                        <!--<li class=\"footer-menu__item\">123 6th St. </li>
                        <li class=\"footer-menu__item\">Melbourne, FL 32904</li>
                        <li class=\"footer-menu__item\">71 Pilgrim Avenue</li>
                        <li class=\"footer-menu__item\">Chevy Chase, MD 20815</li>-->
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">Contatos</h3>
                    <ul class=\"footer-menu mt-4\">
                        <li class=\"footer-menu__item\">(00) 0000 - 0000</li>
                        <li class=\"footer-menu__item\">(00) 00000 - 0000</li>
                        <li class=\"footer-menu__item\">instito@instituto.com.br</li>
                    </ul>
                    <!--button class=\"button button--elevate button--secondary mt-4\" data-toggle=\"modal\" data-target=\"#subscription-modal\">Newsletter</button>-->
                </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col footer__copyright-wrap\">
                <p class=\"text-center\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 39), "footer_copyright", [], "any", false, false, false, 39), "html", null, true);
        echo "
                </p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">mapa do site</h3>
                    <ul class=\"footer-menu  mt-4\">
                        <li class=\"footer-menu__item\"><a href=\"#home\">Quem Somos</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#about\">Nosso Trabalho</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#team\">Eventos e Campanhas</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Doenças e Prevenção</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Serviços</a></li>
                        <li class=\"footer-menu__item\"><a href=\"#\">Blog</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">Onde estamos</h3>
                    <ul class=\"footer-menu  mt-4\">
                        <!--<li class=\"footer-menu__item\">123 6th St. </li>
                        <li class=\"footer-menu__item\">Melbourne, FL 32904</li>
                        <li class=\"footer-menu__item\">71 Pilgrim Avenue</li>
                        <li class=\"footer-menu__item\">Chevy Chase, MD 20815</li>-->
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"text-uppercase\">Contatos</h3>
                    <ul class=\"footer-menu mt-4\">
                        <li class=\"footer-menu__item\">(00) 0000 - 0000</li>
                        <li class=\"footer-menu__item\">(00) 00000 - 0000</li>
                        <li class=\"footer-menu__item\">instito@instituto.com.br</li>
                    </ul>
                    <!--button class=\"button button--elevate button--secondary mt-4\" data-toggle=\"modal\" data-target=\"#subscription-modal\">Newsletter</button>-->
                </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col footer__copyright-wrap\">
                <p class=\"text-center\">
                    {{ this.theme.footer_copyright }}
                </p>
            </div>
        </div>
    </div>
</footer>", "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/footer.htm", "");
    }
}
