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

/* /var/www/octobercms/themes/demo/pages/blog/index.htm */
class __TwigTemplate_b554c4235fdccc43cfaccdf501194690 extends Template
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
        $context["posts"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blog"] ?? null), "paginate", [0 => 5], "method", false, false, false, 1);
        // line 2
        $context["archiveDates"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blog"] ?? null), "selectRaw", [0 => "count(*) as post_count, published_at_month, published_at_year"], "method", false, false, false, 2), "groupBy", [0 => "published_at_month", 1 => "published_at_year"], "method", false, false, false, 3), "get", [], "method", false, false, false, 4);
        // line 6
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->setBlock('pageTitle', ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogConfig"] ?? null), "blog_name", [], "any", false, false, false, 6)) ? (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogConfig"] ?? null), "blog_name", [], "any", false, false, false, 6)) : ("Blog"))        );
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "    ";
            $cmsPartialParams = [];
            $cmsPartialParams['post'] = $context["post"]            ;
            $cmsPartialParams['bannerCss'] = "banner-lg"            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("blog/post-card"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
<nav class=\"blog-pagination\" aria-label=\"Pagination\">
    ";
        // line 13
        echo $this->extensions['System\Twig\Extension']->pagerFunction(($context["posts"] ?? null));
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/pages/blog/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 11,  50 => 9,  46 => 8,  43 => 7,  41 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blog.paginate(5) %}
{% set archiveDates = blog
    .selectRaw(\"count(*) as post_count, published_at_month, published_at_year\")
    .groupBy('published_at_month', 'published_at_year').get()
%}
{% put pageTitle = blogConfig.blog_name ?: 'Blog' %}

{% for post in posts %}
    {% partial 'blog/post-card' post=post bannerCss='banner-lg' %}
{% endfor %}

<nav class=\"blog-pagination\" aria-label=\"Pagination\">
    {{ pager(posts) }}
</nav>", "/var/www/octobercms/themes/demo/pages/blog/index.htm", "");
    }
}
