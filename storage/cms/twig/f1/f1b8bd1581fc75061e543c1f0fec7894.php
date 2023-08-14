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

/* /var/www/octobercms/themes/demo/partials/site/header.htm */
class __TwigTemplate_e7951662f4be6f9bca86fd09a7cb15d3 extends Template
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
        echo "<!-- Nav -->
";
        // line 2
        $context['__placeholder_headerBefore_default_contents'] = null;        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('headerBefore', $context['__placeholder_headerBefore_default_contents']);
        unset($context['__placeholder_headerBefore_default_contents']);        // line 3
        echo "<nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
    <div class=\"navbar-container container\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
            <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"October CMS Demo\" width=\"230\" />
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                ";
        // line 13
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 14
        echo "            </ul>
        </div>
    </div>
</nav>
<div id=\"layout-nav-decorations\">
    <div class=\"navbar-decorations container\">
        <div class=\"navbar-decoration-1\"></div>
        <div class=\"navbar-decoration-2\"></div>
    </div>
</div>
";
        // line 24
        $context['__placeholder_headerAfter_default_contents'] = null;        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('headerAfter', $context['__placeholder_headerAfter_default_contents']);
        unset($context['__placeholder_headerAfter_default_contents']);    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  63 => 14,  60 => 13,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
{% placeholder headerBefore %}
<nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
    <div class=\"navbar-container container\">
        <a class=\"navbar-brand\" href=\"{{ 'index'|page }}\">
            <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"October CMS Demo\" width=\"230\" />
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                {% partial 'site/nav' %}
            </ul>
        </div>
    </div>
</nav>
<div id=\"layout-nav-decorations\">
    <div class=\"navbar-decorations container\">
        <div class=\"navbar-decoration-1\"></div>
        <div class=\"navbar-decoration-2\"></div>
    </div>
</div>
{% placeholder headerAfter %}", "/var/www/octobercms/themes/demo/partials/site/header.htm", "");
    }
}
