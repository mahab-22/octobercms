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

/* /var/www/octobercms/themes/demo/layouts/blog.htm */
class __TwigTemplate_d01609c055e05f2dbf96fd923c40f23b extends Template
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
        echo "    </head>
    <body class=\"blog-layout ";
        // line 6
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)), "html", null, true);
        echo "\">

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 10
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/header"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 11
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">
                ";
        // line 16
        $context["pageTitle"] = $this->extensions['Cms\Twig\Extension']->placeholderFunction("pageTitle");
        // line 17
        echo "                ";
        if (($context["pageTitle"] ?? null)) {
            // line 18
            echo "                    <header>
                        <h1>";
            // line 19
            echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
            echo "</h1>
                    </header>
                ";
        }
        // line 22
        echo "                <div class=\"row g-5\">
                    <div class=\"col-md-8\">
                        <div class=\"pe-3\">
                            ";
        // line 25
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction($context);
        // line 26
        echo "                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"position-sticky\" style=\"top: 2rem;\">
                            ";
        // line 31
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("blog/sidebar"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 32
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 40
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 41
        echo "        </footer>

        <!-- Mobile -->
        ";
        // line 44
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/mobile"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 45
        echo "
        <!-- How the page is made -->
        ";
        // line 47
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/how-its-made"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 48
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/layouts/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  121 => 47,  117 => 45,  114 => 44,  109 => 41,  106 => 40,  96 => 32,  93 => 31,  86 => 26,  84 => 25,  79 => 22,  73 => 19,  70 => 18,  67 => 17,  65 => 16,  58 => 11,  55 => 10,  48 => 6,  45 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body class=\"blog-layout {{ 'page-' ~ this.page.id }}\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">
                {% set pageTitle = placeholder('pageTitle') %}
                {% if pageTitle %}
                    <header>
                        <h1>{{ pageTitle }}</h1>
                    </header>
                {% endif %}
                <div class=\"row g-5\">
                    <div class=\"col-md-8\">
                        <div class=\"pe-3\">
                            {% page %}
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"position-sticky\" style=\"top: 2rem;\">
                            {% partial 'blog/sidebar' %}
                        </div>
                    </div>
                </div>
            </div>
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
</html>", "/var/www/octobercms/themes/demo/layouts/blog.htm", "");
    }
}
