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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/sidebar.htm */
class __TwigTemplate_37063f328f002c45c1050bac651a2a6b0f887f6990a19351bdb5624fa7b5b161 extends \Twig\Template
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
        echo "<nav id=\"sidebar\">
            <ul class=\"list-unstyled components\">
                <p class=\"sidebar-title\">O que fazemos</p>
                <li class=\"active\">
                    <a href=\"#nossasCausasSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Nossas Causas</a>
                    <ul class=\"collapse list-unstyled\" id=\"nossasCausasSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"#advocacySubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Advocacy</a>
                    <ul class=\"collapse list-unstyled\" id=\"advocacySubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">Educação e Saúde</a>
                </li>
                <li>
                    <a href=\"#educacaoSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Cultura e Saúde</a>
                    <ul class=\"collapse list-unstyled\" id=\"educacaoSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"#pacienteSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Paciente</a>
                    <ul class=\"collapse list-unstyled\" id=\"pacienteSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">Pesquisas</a>
                </li>
                <li>
                    <a href=\"#\">Campanhas</a>
                </li>
            </ul>
        </nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebar\">
            <ul class=\"list-unstyled components\">
                <p class=\"sidebar-title\">O que fazemos</p>
                <li class=\"active\">
                    <a href=\"#nossasCausasSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Nossas Causas</a>
                    <ul class=\"collapse list-unstyled\" id=\"nossasCausasSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"#advocacySubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Advocacy</a>
                    <ul class=\"collapse list-unstyled\" id=\"advocacySubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">Educação e Saúde</a>
                </li>
                <li>
                    <a href=\"#educacaoSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Cultura e Saúde</a>
                    <ul class=\"collapse list-unstyled\" id=\"educacaoSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li class=\"active\">
                    <a href=\"#pacienteSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Paciente</a>
                    <ul class=\"collapse list-unstyled\" id=\"pacienteSubmenu\">
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                        <li>
                            <a href=\"#\">Lorem Ipsum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"#\">Pesquisas</a>
                </li>
                <li>
                    <a href=\"#\">Campanhas</a>
                </li>
            </ul>
        </nav>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/sidebar.htm", "");
    }
}
