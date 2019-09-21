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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/facility.htm */
class __TwigTemplate_e3c0579a955cc75c6308a60be9a95fa69dd8d402901dc5785a4ae937722bd09d extends \Twig\Template
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
        echo "<section id=\"facility\" class=\"section facility\">
    <div class=\"container-fluid facility-container\">
        <div class=\"facility-container__content\" data-aos=\"fade\" >
            <h2 class=\"section__title section__title--light mb-5\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "facility_heading", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "facility_description", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
            <button class=\"button button--elevate button--primary mt-5 mb-4\">Vivus magna</button>
        </div>
        <div class=\"facility-contaner__img\" style=\"background-image:url('";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "facility_image", [], "any", false, false, false, 8)) ? ($this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "facility_image", [], "any", false, false, false, 8))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/facility.jpg")));
        echo "')\"></div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/facility.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"facility\" class=\"section facility\">
    <div class=\"container-fluid facility-container\">
        <div class=\"facility-container__content\" data-aos=\"fade\" >
            <h2 class=\"section__title section__title--light mb-5\">{{ this.theme.facility_heading }}</h2>
            <p>{{ this.theme.facility_description }}</p>
            <button class=\"button button--elevate button--primary mt-5 mb-4\">Vivus magna</button>
        </div>
        <div class=\"facility-contaner__img\" style=\"background-image:url('{{ this.theme.facility_image ? this.theme.facility_image|media : 'assets/dist/images/facility.jpg'|theme }}')\"></div>
    </div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/facility.htm", "");
    }
}
