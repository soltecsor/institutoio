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

/* /var/www/html/october/install-master/themes/thebakerdev-waard/partials/modal.htm */
class __TwigTemplate_3918b475b34f7d15bf06c10812deaf129773a1d89e115bdb1339a8a3a3e75742 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"subscription-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"subscription-modal__title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <h5 class=\"modal-title mb-2\" id=\"subscription-modal__title\">Subscribe to our newsletter</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, veniam!</p>
            <form action=\"#\" method=\"post\">
                <label class=\"sr-only\" for=\"subscription-modal__email\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"subscription-modal__email\" placeholder=\"Email\">  
            </form>
            <button class=\"button button--elevate button--secondary mt-4\">Subscribe</button>
        </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"subscription-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"subscription-modal__title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            <h5 class=\"modal-title mb-2\" id=\"subscription-modal__title\">Subscribe to our newsletter</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, veniam!</p>
            <form action=\"#\" method=\"post\">
                <label class=\"sr-only\" for=\"subscription-modal__email\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"subscription-modal__email\" placeholder=\"Email\">  
            </form>
            <button class=\"button button--elevate button--secondary mt-4\">Subscribe</button>
        </div>
      </div>
    </div>
</div>", "/var/www/html/october/install-master/themes/thebakerdev-waard/partials/modal.htm", "");
    }
}
