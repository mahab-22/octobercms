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

/* /var/www/octobercms/themes/demo/partials/blog/post-card.htm */
class __TwigTemplate_2c7a00dc0c2936968e7e02d458364277 extends Template
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
        echo "<div class=\"col ";
        echo twig_escape_filter($this->env, ((array_key_exists("cssClass", $context)) ? (_twig_default_filter(($context["cssClass"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
    <div class=\"card post-card mb-5\">
        ";
        // line 3
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <div class=\"card-banner ";
            echo twig_escape_filter($this->env, ((array_key_exists("bannerCss", $context)) ? (_twig_default_filter(($context["bannerCss"] ?? null), "")) : ("")), "html", null, true);
            echo "\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "banner", [], "any", false, false, false, 4), "path", [], "any", false, false, false, 4), "html", null, true);
            echo "')\"></div>
        ";
        } else {
            // line 6
            echo "            <div class=\"card-banner ";
            echo twig_escape_filter($this->env, ((array_key_exists("bannerCss", $context)) ? (_twig_default_filter(($context["bannerCss"] ?? null), "")) : ("")), "html", null, true);
            echo "\" style=\"background-image:url('";
            echo $this->extensions['Cms\Twig\Extension']->partialFunction("helpers/random-stock-image");
            echo "')\"></div>
        ";
        }
        // line 8
        echo "
        <div class=\"card-body\">
            ";
        // line 10
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 10)) {
            // line 11
            echo "                <div class=\"blog-post-categories\">
                    <ul class=\"list-inline\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                            <li class=\"list-inline-item\">
                                &mdash; <a href=\"";
                // line 15
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/category", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 15)]);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </ul>
                </div>
            ";
        }
        // line 21
        echo "
            <h4 class=\"blog-post-title\">
                <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "slug", [], "any", false, false, false, 23)]);
        echo "\" class=\"stretched-link\">";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
            </h4>

            <div class=\"blog-post-featured-text\">
                <p>";
        // line 27
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "featured_text", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"card-footer\">
            <div class=\"blog-post-meta\">
                <div class=\"meta-item meta-date text-icon text-icon-date\">
                    ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "published_at_date", [], "any", false, false, false, 34), "j M Y"), "html", null, true);
        echo "
                </div>
                ";
        // line 36
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 36)) {
            // line 37
            echo "                    <div class=\"meta-item meta-divider\">
                        &bull;
                    </div>
                    <div class=\"meta-item meta-author text-icon text-icon-author\">
                        By <a href=\"";
            // line 41
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/author", ["slug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 41), "slug", [], "any", false, false, false, 41)]);
            echo "\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, true, false, 42), "title", [], "any", true, true, false, 42)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, true, false, 42), "title", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
            echo "
                        </a>
                    </div>
                ";
        }
        // line 46
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blog/post-card.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  134 => 42,  130 => 41,  124 => 37,  122 => 36,  117 => 34,  107 => 27,  98 => 23,  94 => 21,  89 => 18,  78 => 15,  75 => 14,  71 => 13,  67 => 11,  65 => 10,  61 => 8,  53 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col {{ cssClass|default('') }}\">
    <div class=\"card post-card mb-5\">
        {% if post.banner %}
            <div class=\"card-banner {{ bannerCss|default('') }}\" style=\"background-image:url('{{ post.banner.path }}')\"></div>
        {% else %}
            <div class=\"card-banner {{ bannerCss|default('') }}\" style=\"background-image:url('{{ partial('helpers/random-stock-image') }}')\"></div>
        {% endif %}

        <div class=\"card-body\">
            {% if post.categories %}
                <div class=\"blog-post-categories\">
                    <ul class=\"list-inline\">
                        {% for category in post.categories %}
                            <li class=\"list-inline-item\">
                                &mdash; <a href=\"{{ 'blog/category'|page({ slug: category.slug }) }}\">{{ category.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}

            <h4 class=\"blog-post-title\">
                <a href=\"{{ 'blog/post'|page({ slug: post.slug }) }}\" class=\"stretched-link\">{{ post.title }}</a>
            </h4>

            <div class=\"blog-post-featured-text\">
                <p>{{ post.featured_text }}</p>
            </div>
        </div>

        <div class=\"card-footer\">
            <div class=\"blog-post-meta\">
                <div class=\"meta-item meta-date text-icon text-icon-date\">
                    {{ post.published_at_date|date('j M Y') }}
                </div>
                {% if post.author %}
                    <div class=\"meta-item meta-divider\">
                        &bull;
                    </div>
                    <div class=\"meta-item meta-author text-icon text-icon-author\">
                        By <a href=\"{{ 'blog/author'|page({ slug: post.author.slug }) }}\">
                            {{ post.author.title|default('') }}
                        </a>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/blog/post-card.htm", "");
    }
}
