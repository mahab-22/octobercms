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

/* /var/www/octobercms/themes/demo/layouts/home.htm */
class __TwigTemplate_4095289f8845591892da07cec2ad1d6d extends Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 5
        echo "        <meta name=\"turbo-visit-control\" content=\"reload\" />
    </head>
    <body class=\"home-layout ";
        // line 7
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)), "html", null, true);
        echo "\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"October CMS Demo\" width=\"190\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        ";
        // line 20
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/nav"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 21
        echo "                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 28
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction($context);
        // line 29
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 33
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 34
        echo "        </footer>

        <!-- Mobile -->
        ";
        // line 37
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/mobile"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 38
        echo "
        <!-- How the page is made -->
        ";
        // line 40
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/how-its-made"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 41
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  106 => 40,  102 => 38,  99 => 37,  94 => 34,  91 => 33,  85 => 29,  83 => 28,  74 => 21,  71 => 20,  61 => 13,  57 => 12,  49 => 7,  45 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
        <meta name=\"turbo-visit-control\" content=\"reload\" />
    </head>
    <body class=\"home-layout {{ 'page-'~this.page.id }}\">

        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar navbar-expand-lg navbar-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ 'index'|page }}\">
                    <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"October CMS Demo\" width=\"190\" />
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

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Mobile -->
        {% partial 'site/mobile' %}

        <!-- How the page is made -->
        {% partial 'site/how-its-made' %}

    </body>
</html>", "/var/www/octobercms/themes/demo/layouts/home.htm", "");
    }
}
