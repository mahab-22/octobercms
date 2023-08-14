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

/* /var/www/octobercms/themes/demo/layouts/wiki.htm */
class __TwigTemplate_f5e2731ddcf1a15c99636b5bcf0b0c18 extends Template
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
    <body class=\"wiki-layout ";
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
                <div class=\"row g-5\">
                    <div class=\"col-md-4\">
                        <div class=\"position-sticky\" style=\"top: 2rem;\">
                            ";
        // line 19
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("wiki/sidebar"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 20
        echo "                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 23
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction($context);
        // line 24
        echo "                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 31
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 32
        echo "        </footer>

        <!-- Mobile -->
        ";
        // line 35
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/mobile"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 36
        echo "
        <!-- How the page is made -->
        ";
        // line 38
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/how-its-made"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 39
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/layouts/wiki.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  102 => 38,  98 => 36,  95 => 35,  90 => 32,  87 => 31,  78 => 24,  76 => 23,  71 => 20,  68 => 19,  58 => 11,  55 => 10,  48 => 6,  45 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body class=\"wiki-layout {{ 'page-' ~ this.page.id }}\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">
                <div class=\"row g-5\">
                    <div class=\"col-md-4\">
                        <div class=\"position-sticky\" style=\"top: 2rem;\">
                            {% partial 'wiki/sidebar' %}
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        {% page %}
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
</html>", "/var/www/octobercms/themes/demo/layouts/wiki.htm", "");
    }
}
