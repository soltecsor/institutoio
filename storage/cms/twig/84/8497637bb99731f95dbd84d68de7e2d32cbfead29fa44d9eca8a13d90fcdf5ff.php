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
        echo "<section id=\"eventosCampanhas\"/>
<div class=\"post-list\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "        <h3><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 4), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 4);
            echo "</a></h3>
        <p class=\"excerpt\">";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 5);
            echo "</p>
        <div class=\"custom-posts\">
    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 7), "count", [], "any", false, false, false, 7)) {
                // line 8
                echo "    <div class=\"posts-image\">
        ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 10
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"><img data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"></a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    </div>
    ";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
\t<h2 class=\"section__title section__title--underlined text-center aos-init aos-animate\" data-aos=\"fade\">Eventos e Campanhas</h2>
\t<div class=\"col-md-5 offset-md-4\">
\t\t<p class=\"campanha__description\">Mauris sit amet orci ac diam rutrum blandit.Mauris sit amet orci ac diam rutrum blandit.</p>
\t</div>
<!--Carousel Wrapper-->
<div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item carousel-multi-item-2\" data-ride=\"carousel\">
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

    <!--First slide-->
    <div class=\"carousel-item active\">

      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t
            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class=\"carousel-item\">

      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <!--<div class=\"carousel-item\">

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(64).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(51).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(59).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(63).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

    </div>-->
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
</section>
<!--/.Carousel Wrapper-->";
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
        return array (  93 => 16,  82 => 12,  67 => 10,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  46 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"eventosCampanhas\"/>
<div class=\"post-list\">
    {% for post in filteredPosts %}
        <h3><a href=\"{{ post.url }}\">{{ post.title|raw }}</a></h3>
        <p class=\"excerpt\">{{ post.summary|raw }}</p>
        <div class=\"custom-posts\">
    {% if post.featured_images.count %}
    <div class=\"posts-image\">
        {% for image in post.featured_images %}
        <a href=\"{{ post.url }}\"><img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\"></a>
        {% endfor %}
    </div>
    {% endif %}
{% else %}
{% endfor %}
</div>
\t<h2 class=\"section__title section__title--underlined text-center aos-init aos-animate\" data-aos=\"fade\">Eventos e Campanhas</h2>
\t<div class=\"col-md-5 offset-md-4\">
\t\t<p class=\"campanha__description\">Mauris sit amet orci ac diam rutrum blandit.Mauris sit amet orci ac diam rutrum blandit.</p>
\t</div>
<!--Carousel Wrapper-->
<div id=\"multi-item-example\" class=\"carousel slide carousel-multi-item carousel-multi-item-2\" data-ride=\"carousel\">
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

    <!--First slide-->
    <div class=\"carousel-item active\">

      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t
            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

            <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class=\"carousel-item\">

      <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

     <div class=\"col-md-3 mb-3\">
\t  \t<div class=\"card\" style=\"width: 18rem;\">
\t\t  <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(38).jpg\" alt=\"Card image cap\">
\t\t  <div class=\"card-body\">
\t\t    <h5 class=\"card-title\">Lorem Ipsum</h5>
\t\t    <p class=\"card-text\">Some quick example text to build on the Lorem Ipsum and make up the bulk of the card's content.</p>
\t\t    <a href=\"#\" class=\"btn btn-primary\">Saber mais</a>
\t\t  </div>
\t\t</div>  
\t </div>\t

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <!--<div class=\"carousel-item\">

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(64).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(51).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(59).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

      <div class=\"col-md-3 mb-3\">
        <div class=\"card\">
          <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(63).jpg\"
            alt=\"Card image cap\">
        </div>
      </div>

    </div>-->
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
</section>
<!--/.Carousel Wrapper-->", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/campanhas.htm", "");
    }
}
