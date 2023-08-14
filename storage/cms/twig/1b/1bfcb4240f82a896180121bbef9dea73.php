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

/* /var/www/octobercms/themes/demo/partials/site/mobile.htm */
class __TwigTemplate_24ee8a2326997afb7efbc30071f3d973 extends Template
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
        echo "<div class=\"navbar-mobile\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"text-end\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"bi bi-x-circle\"></span>
            </button>
        </div>
        <ul class=\"nav flex-column mb-2 mb-lg-0\">
            ";
        // line 9
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 10
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/mobile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-mobile\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"text-end\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"bi bi-x-circle\"></span>
            </button>
        </div>
        <ul class=\"nav flex-column mb-2 mb-lg-0\">
            {% partial 'site/nav' %}
        </ul>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/site/mobile.htm", "");
    }
}
