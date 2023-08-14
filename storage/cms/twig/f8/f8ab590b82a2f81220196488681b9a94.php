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

/* /var/www/octobercms/themes/demo/pages/wiki/index.htm */
class __TwigTemplate_6046b166ebb3180e9e8b40f9c0e8ff0b extends Template
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
        $context["article"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["wiki"] ?? null), "first", [], "method", false, false, false, 1);
        // line 2
        echo "
<div class=\"container\">
    <article class=\"wiki-article pb-3\">
        <h1 class=\"wiki-article-title mb-3\">";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
        <p class=\"lead\">";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "summary_text", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>

        <div class=\"wiki-banner mb-3\">
            ";
        // line 9
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "banner", [], "any", false, false, false, 9)) {
            // line 10
            echo "                <div class=\"text-banner\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "banner", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "html", null, true);
            echo "')\"></div>
            ";
        } else {
            // line 12
            echo "                <div class=\"text-banner\" style=\"background-image:url('";
            echo $this->extensions['Cms\Twig\Extension']->partialFunction("helpers/random-stock-image");
            echo "')\"></div>
            ";
        }
        // line 14
        echo "        </div>

        ";
        // line 16
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 16);
        echo "
    </article>

    ";
        // line 19
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "external_links", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <hr />
        <h2>External Links</h2>
        <ul class=\"bullet-list list-content\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["article"] ?? null), "external_links", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 24
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["link"], "link_url", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["link"], "link_text", [], "any", false, false, false, 24), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </ul>
    ";
        }
        // line 28
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/pages/wiki/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  100 => 26,  89 => 24,  85 => 23,  80 => 20,  78 => 19,  72 => 16,  68 => 14,  62 => 12,  56 => 10,  54 => 9,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set article = wiki.first() %}

<div class=\"container\">
    <article class=\"wiki-article pb-3\">
        <h1 class=\"wiki-article-title mb-3\">{{ article.title }}</h1>
        <p class=\"lead\">{{ article.summary_text }}</p>

        <div class=\"wiki-banner mb-3\">
            {% if article.banner %}
                <div class=\"text-banner\" style=\"background-image:url('{{ article.banner.path }}')\"></div>
            {% else %}
                <div class=\"text-banner\" style=\"background-image:url('{{ partial('helpers/random-stock-image') }}')\"></div>
            {% endif %}
        </div>

        {{ article.content|raw }}
    </article>

    {% if article.external_links %}
        <hr />
        <h2>External Links</h2>
        <ul class=\"bullet-list list-content\">
            {% for link in article.external_links %}
                <li><a href=\"{{ link.link_url }}\">{{ link.link_text }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}
</div>", "/var/www/octobercms/themes/demo/pages/wiki/index.htm", "");
    }
}
