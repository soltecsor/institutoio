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

/* /var/www/html/october/instituto/themes/thebakerdev-waard/partials/scripts.htm */
class __TwigTemplate_8bd18d2bf41c189975dd34371ac885eaea90962ac23318e6707432a916aab640 extends \Twig\Template
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
        echo "<script defer src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/js/fontawesome-all.min.js");
        echo "\"></script>
<script src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/js/app.js");
        echo "\"></script>
";
        // line 3
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script defer src=\"{{ 'assets/dist/js/fontawesome-all.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/dist/js/app.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}", "/var/www/html/october/instituto/themes/thebakerdev-waard/partials/scripts.htm", "");
    }
}
