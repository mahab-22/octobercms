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

/* /var/www/octobercms/themes/demo/partials/wiki/sidebar-toc.htm */
class __TwigTemplate_7f5352b65fcdcfc8934fd9850a7d01a5 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
";
        // line 19
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 20
        echo "
<ul class=\"bullet-list\">
    ";
        // line 22
        echo twig_call_macro($macros["nav"], "macro_render_toc", [($context["articles"] ?? null), ((array_key_exists("activeSlug", $context)) ? (_twig_default_filter(($context["activeSlug"] ?? null), ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, true, false, 22), "fullslug", [], "any", true, true, false, 22)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, true, false, 22), "fullslug", [], "any", false, false, false, 22), "")) : ("")))) : (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, true, false, 22), "fullslug", [], "any", true, true, false, 22)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, true, false, 22), "fullslug", [], "any", false, false, false, 22), "")) : (""))))], 22, $context, $this->getSourceContext());
        echo "
</ul>";
    }

    // line 1
    public function macro_render_toc($__articles__ = null, $__activeSlug__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "articles" => $__articles__,
            "activeSlug" => $__activeSlug__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 3
                echo "        ";
                $context["hasChildren"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "children", [], "any", false, false, false, 3);
                // line 4
                echo "        ";
                $context["isActive"] = (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "fullslug", [], "any", false, false, false, 4) == ($context["activeSlug"] ?? null));
                // line 5
                echo "        <li class=\"";
                echo ((($context["hasChildren"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo ((($context["isActive"] ?? null)) ? ("active") : (""));
                echo "\">
            <a href=\"#tocItem";
                // line 6
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 6), "html", null, true);
                echo "\" class=\"collapse-caret ";
                echo (( !($context["isActive"] ?? null)) ? ("collapsed") : (""));
                echo "\" data-bs-toggle=\"collapse\"></a>
            <a class=\"mb-1 d-block\" href=\"";
                // line 7
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/article", ["fullslug" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "fullslug", [], "any", false, false, false, 7), "id" => Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 7)]);
                echo "\" class=\"label\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "</a>
            ";
                // line 8
                if (($context["hasChildren"] ?? null)) {
                    // line 9
                    echo "                <ul id=\"tocItem";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 9), "html", null, true);
                    echo "\" class=\"collapse ";
                    echo ((($context["isActive"] ?? null)) ? ("show") : (""));
                    echo "\">
                    ";
                    // line 10
                    if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "children", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "                        ";
                        echo twig_call_macro($macros["_self"], "macro_render_toc", [Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["article"], "children", [], "any", false, false, false, 11), ($context["activeSlug"] ?? null)], 11, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    // line 13
                    echo "                </ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/wiki/sidebar-toc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 15,  114 => 13,  108 => 11,  106 => 10,  99 => 9,  97 => 8,  91 => 7,  85 => 6,  78 => 5,  75 => 4,  72 => 3,  67 => 2,  53 => 1,  47 => 22,  43 => 20,  41 => 19,  38 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_toc(articles, activeSlug) %}
    {% for article in articles %}
        {% set hasChildren = article.children %}
        {% set isActive = article.fullslug == activeSlug %}
        <li class=\"{{ hasChildren ? 'collapsible' }} {{ isActive ? 'active' }}\">
            <a href=\"#tocItem{{ article.id }}\" class=\"collapse-caret {{ not isActive ? 'collapsed' }}\" data-bs-toggle=\"collapse\"></a>
            <a class=\"mb-1 d-block\" href=\"{{ 'wiki/article'|page({ fullslug: article.fullslug, id: article.id }) }}\" class=\"label\">{{ article.title }}</a>
            {% if hasChildren %}
                <ul id=\"tocItem{{ article.id }}\" class=\"collapse {{ isActive ? 'show' }}\">
                    {% if article.children %}
                        {{ _self.render_toc(article.children, activeSlug) }}
                    {% endif %}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<ul class=\"bullet-list\">
    {{ nav.render_toc(articles, activeSlug|default(this.param.fullslug|default(''))) }}
</ul>", "/var/www/octobercms/themes/demo/partials/wiki/sidebar-toc.htm", "");
    }
}
