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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/campanhas.htm */
class __TwigTemplate_22bd0cfb86bb78a9b9a9599be357bc69898757bbd57d1c70ab1b040f1d558fc1 extends \Twig\Template
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
        echo "<section id=\"eventosCampanhas\">
\t<h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Eventos e Campanhas</h2>
\t<div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item carousel-multi-item-2\" data-ride=\"carousel\">
\t  <!--Controls-->
\t <div class=\"col-md-2 offset-md-6\">
\t\t  <div class=\"controls-top\">
\t\t    <a class=\"black-text\" href=\"#multi-item-example\" data-slide=\"prev\"><i class=\"fas fa-angle-left fa-3x pr-3\"></i></a>
\t\t    <a class=\"black-text\" href=\"#multi-item-example\" data-slide=\"next\"><i class=\"fas fa-angle-right fa-3x pl-3\"></i></a>
\t\t  </div>
\t</div>
  <!--/.Controls-->
  <!--Slides-->
  <div class=\"carousel-inner\" role=\"listbox\">
  \t<div class=\"carousel-item active\">
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts1"] ?? null));
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
            // line 16
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) <= 4)) {
                // line 17
                echo "      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t  \t  ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 19), "count", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t  \t  \t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        echo "\t
\t\t  \t\t<img class=\"img-fluid\"  data-src=\"";
                        // line 21
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 21), "html", null, true);
                        echo "\" src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 21), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 21), "html", null, true);
                        echo "\">
\t\t  \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t  ";
                }
                // line 24
                echo "\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 25);
                echo "</h5>
\t\t    <p class=\"card-text\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 26);
                echo "</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t  </div>
\t  ";
            }
            // line 31
            echo "\t
\t";
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
        // line 33
        echo "\t</div> 
    <div class=\"carousel-item\">
\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 36
            echo "      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t  \t  ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t  \t  \t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    echo "\t
\t\t  \t\t<img class=\"img-fluid\"  data-src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">
\t\t  \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t  ";
            }
            // line 43
            echo "\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 44);
            echo "</h5>
\t\t    <p class=\"card-text\">";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 45);
            echo "</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t  </div>\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t</div>
  </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/campanhas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 51,  175 => 45,  171 => 44,  168 => 43,  165 => 42,  153 => 40,  146 => 39,  144 => 38,  140 => 36,  136 => 35,  132 => 33,  117 => 31,  108 => 26,  104 => 25,  101 => 24,  98 => 23,  86 => 21,  79 => 20,  77 => 19,  73 => 17,  70 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"eventosCampanhas\">
\t<h2 class=\"section__title section__title--underlined text-center\" data-aos=\"fade\" >Eventos e Campanhas</h2>
\t<div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item carousel-multi-item-2\" data-ride=\"carousel\">
\t  <!--Controls-->
\t <div class=\"col-md-2 offset-md-6\">
\t\t  <div class=\"controls-top\">
\t\t    <a class=\"black-text\" href=\"#multi-item-example\" data-slide=\"prev\"><i class=\"fas fa-angle-left fa-3x pr-3\"></i></a>
\t\t    <a class=\"black-text\" href=\"#multi-item-example\" data-slide=\"next\"><i class=\"fas fa-angle-right fa-3x pl-3\"></i></a>
\t\t  </div>
\t</div>
  <!--/.Controls-->
  <!--Slides-->
  <div class=\"carousel-inner\" role=\"listbox\">
  \t<div class=\"carousel-item active\">
\t{% for post in filteredPosts1 %}
\t\t{% if loop.index <= 4 %}
      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t  \t  {% if post.featured_images.count %}
\t  \t  \t{% for image in post.featured_images %}\t
\t\t  \t\t<img class=\"img-fluid\"  data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
\t\t  \t{% endfor %}
\t\t  {% endif %}
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">{{ post.title | raw }}</h5>
\t\t    <p class=\"card-text\">{{ post.summary| raw }}</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t  </div>
\t  {% endif %}\t
\t{% endfor %}
\t</div> 
    <div class=\"carousel-item\">
\t{% for post in filteredPosts2 %}
      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t  \t  {% if post.featured_images.count %}
\t  \t  \t{% for image in post.featured_images %}\t
\t\t  \t\t<img class=\"img-fluid\"  data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
\t\t  \t{% endfor %}
\t\t  {% endif %}
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">{{ post.title | raw }}</h5>
\t\t    <p class=\"card-text\">{{ post.summary| raw }}</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t  </div>\t
\t{% endfor %}
\t</div>
  </div>
</div>
</section>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/campanhas.htm", "");
    }
}
