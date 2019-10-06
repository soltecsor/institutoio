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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/pages/nossas-causas.htm */
class __TwigTemplate_d9c502060e76205fedf6922e642cc7c9a80e0ca97c468aea501523e601279ce7 extends \Twig\Template
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
        echo "<section id=\"nossascausas\" class=\"section nossascausas\">
    <div class=\"container\">
        <div class=\"row\">
        \t<div class=\"col-md-7 mx-auto data-aos=\"fade\" >
        \t\t<span class=\"preSpanBreadCrumbs\">Você está em: </span><span class=\"spanBreadCrumbs\"><a href=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "\">Home</a> / O que fazemos / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " </span>
        \t\t<h3 class=\"pageHd\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
        \t\t<hr class=\"pageHr\">
\t\t\t\t<div class=\"nossas-causas\">
\t\t\t\t\t";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("oquefazemos/nossascausas.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 10
        echo "\t\t\t\t\t<!--<div class=\"imagePage img-responsive\">
\t\t\t\t\t\t<img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/oquefazemos/nossascausas/facility.jpg");
        echo "\" />
\t\t\t\t\t\t<img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/oquefazemos/nossascausas/member_2.jpg");
        echo "\" />
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\" style=\"margin-left:220px;margin-right: -190px\">
\t\t\t\t<div class=\"imagePage img-responsive\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/oquefazemos/nossascausas/facility.jpg");
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"imagePage img-responsive\">
\t\t\t\t\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/oquefazemos/nossascausas/member_2.jpg");
        echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/pages/nossas-causas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  78 => 21,  66 => 12,  62 => 11,  59 => 10,  55 => 9,  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"nossascausas\" class=\"section nossascausas\">
    <div class=\"container\">
        <div class=\"row\">
        \t<div class=\"col-md-7 mx-auto data-aos=\"fade\" >
        \t\t<span class=\"preSpanBreadCrumbs\">Você está em: </span><span class=\"spanBreadCrumbs\"><a href=\"{{'/' | app}}\">Home</a> / O que fazemos / {{ this.page.title }} </span>
        \t\t<h3 class=\"pageHd\">{{ this.page.title }}</h3>
        \t\t<hr class=\"pageHr\">
\t\t\t\t<div class=\"nossas-causas\">
\t\t\t\t\t{% content 'oquefazemos/nossascausas.txt' %}
\t\t\t\t\t<!--<div class=\"imagePage img-responsive\">
\t\t\t\t\t\t<img src=\"{{ 'assets/dist/oquefazemos/nossascausas/facility.jpg'|theme }}\" />
\t\t\t\t\t\t<img src=\"{{ 'assets/dist/oquefazemos/nossascausas/member_2.jpg'|theme }}\" />
\t\t\t\t\t</div>-->
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\" style=\"margin-left:220px;margin-right: -190px\">
\t\t\t\t<div class=\"imagePage img-responsive\">
\t\t\t\t\t<img src=\"{{ 'assets/dist/oquefazemos/nossascausas/facility.jpg'|theme }}\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"imagePage img-responsive\">
\t\t\t\t\t<img src=\"{{ 'assets/dist/oquefazemos/nossascausas/member_2.jpg'|theme }}\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/pages/nossas-causas.htm", "");
    }
}
