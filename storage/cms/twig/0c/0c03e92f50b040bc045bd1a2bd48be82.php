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

/* /var/www/octobercms/themes/demo/partials/wiki/sidebar.htm */
class __TwigTemplate_d9650d804001468752c4762c945bf64a extends Template
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
        $context["articles"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["wiki"] ?? null), "getNested", [], "method", false, false, false, 1);
        // line 2
        echo "
<div class=\"sidebar-search\">
    <form action=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/search");
        echo "\" method=\"get\">
        <div class=\"form-control-search\">
            <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Search\" value=\"\">
            <span class=\"search-icon\"></span>
        </div>
    </form>
</div>

<div class=\"sidebar-toc\">
    <h3>Table of Contents</h3>
    ";
        // line 14
        $cmsPartialParams = [];
        $cmsPartialParams['articles'] = ($context["articles"] ?? null)        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("wiki/sidebar-toc"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/wiki/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 14,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set articles = wiki.getNested() %}

<div class=\"sidebar-search\">
    <form action=\"{{ 'wiki/search'|page }}\" method=\"get\">
        <div class=\"form-control-search\">
            <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Search\" value=\"\">
            <span class=\"search-icon\"></span>
        </div>
    </form>
</div>

<div class=\"sidebar-toc\">
    <h3>Table of Contents</h3>
    {% partial 'wiki/sidebar-toc' articles=articles %}
</div>", "/var/www/octobercms/themes/demo/partials/wiki/sidebar.htm", "");
    }
}
