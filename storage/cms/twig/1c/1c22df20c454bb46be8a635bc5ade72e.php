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

/* /var/www/octobercms/themes/demo/partials/blog/sidebar.htm */
class __TwigTemplate_590d326d820bbf97ddcace076c237940 extends Template
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
        $context["archiveDates"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blog"] ?? null), "selectRaw", [0 => "count(*) as post_count, published_at_month, published_at_year"], "method", false, false, false, 1), "groupBy", [0 => "published_at_month", 1 => "published_at_year"], "method", false, false, false, 2), "get", [], "method", false, false, false, 3);
        // line 5
        echo "
<div class=\"sidebar-search\">
    <form action=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/search");
        echo "\" method=\"get\">
        <div class=\"form-control-search\">
            <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Search\" value=\"\">
            <span class=\"search-icon\"></span>
        </div>
    </form>
</div>

<div class=\"sidebar-about\">
    <h3>About Us</h3>
    ";
        // line 17
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogConfig"] ?? null), "about_this_blog", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
            echo $this->env->getFilter('md_safe')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogConfig"] ?? null), "about_this_blog", [], "any", false, false, false, 18));
            echo "
    ";
        } else {
            // line 20
            echo "        <p class=\"text-secondary\">
            Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.
        </p>
    ";
        }
        // line 24
        echo "</div>

<div class=\"sidebar-social\">
    ";
        // line 27
        $cmsPartialParams = [];
        $cmsPartialParams['links'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogConfig"] ?? null), "social_links", [], "any", false, false, false, 27)        ;
        $cmsPartialParams['showRssLink'] = true        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("elements/social-links"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 28
        echo "</div>

<div class=\"sidebar-categories\">
    <h3>Categories</h3>
    <ul class=\"bullet-list\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "            <li class=\"";
            echo (((($context["activeBlogCategory"] ?? null) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 34))) ? ("active") : (""));
            echo "\">
                <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/category", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 35)]);
            echo "\">
                    ";
            // line 36
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </ul>
</div>

<div class=\"sidebar-archives\">
    <h3>Archives</h3>
    <ul class=\"bullet-list\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["archiveDates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 47
            echo "            ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["date"], "published_at_year", [], "any", false, false, false, 47)) {
                // line 48
                echo "                ";
                $context["dateParsed"] = twig_date_converter($this->env, ((("1-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["date"], "published_at_month", [], "any", false, false, false, 48)) . "-") . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["date"], "published_at_year", [], "any", false, false, false, 48)));
                // line 49
                echo "                <li>
                    <a
                        href=\"";
                // line 51
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/archive", ["month" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["date"], "published_at_month", [], "any", false, false, false, 51), "year" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["date"], "published_at_year", [], "any", false, false, false, 51)]);
                echo "\"
                    >";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateParsed"] ?? null), "F Y"), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 55
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blog/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  142 => 55,  136 => 52,  132 => 51,  128 => 49,  125 => 48,  122 => 47,  118 => 46,  110 => 40,  100 => 36,  96 => 35,  91 => 34,  87 => 33,  80 => 28,  75 => 27,  70 => 24,  64 => 20,  58 => 18,  56 => 17,  43 => 7,  39 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set archiveDates = blog
    .selectRaw(\"count(*) as post_count, published_at_month, published_at_year\")
    .groupBy('published_at_month', 'published_at_year').get()
%}

<div class=\"sidebar-search\">
    <form action=\"{{ 'blog/search'|page }}\" method=\"get\">
        <div class=\"form-control-search\">
            <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Search\" value=\"\">
            <span class=\"search-icon\"></span>
        </div>
    </form>
</div>

<div class=\"sidebar-about\">
    <h3>About Us</h3>
    {% if blogConfig.about_this_blog %}
        {{ blogConfig.about_this_blog|md_safe }}
    {% else %}
        <p class=\"text-secondary\">
            Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.
        </p>
    {% endif %}
</div>

<div class=\"sidebar-social\">
    {% partial 'elements/social-links' links=blogConfig.social_links showRssLink=true %}
</div>

<div class=\"sidebar-categories\">
    <h3>Categories</h3>
    <ul class=\"bullet-list\">
        {% for category in blogCategories %}
            <li class=\"{{ activeBlogCategory == category.slug ? 'active' }}\">
                <a href=\"{{ 'blog/category'|page({ slug: category.slug }) }}\">
                    {{ category.title }}
                </a>
            </li>
        {% endfor %}
    </ul>
</div>

<div class=\"sidebar-archives\">
    <h3>Archives</h3>
    <ul class=\"bullet-list\">
        {% for date in archiveDates %}
            {% if date.published_at_year %}
                {% set dateParsed = date('1-'~date.published_at_month~'-'~date.published_at_year) %}
                <li>
                    <a
                        href=\"{{ 'blog/archive'|page({ month: date.published_at_month, year: date.published_at_year }) }}\"
                    >{{ dateParsed|date('F Y') }}</a>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</div>", "/var/www/octobercms/themes/demo/partials/blog/sidebar.htm", "");
    }
}
