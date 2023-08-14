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

/* /var/www/octobercms/themes/demo/partials/blocks/detailed-block.htm */
class __TwigTemplate_939aeca51eb5c482dc4443c129f923ba extends Template
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
        $context["blockImage"] = ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1)) ? ($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-team.png")));
        // line 2
        echo "
<div class=\"container py-3\">
    <div class=\"row\">
        <div class=\"col-md-6 pt-5\">
            <h2 class=\"my-4\">";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
            ";
        // line 7
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, false, 7);
        echo "

            ";
        // line 9
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "list_items", [], "any", false, false, false, 9)) {
            // line 10
            echo "                <ul class=\"list-inline list-with-ticks py-2\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "list_items", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "                        <li class=\"list-inline-item\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 12), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                </ul>
            ";
        }
        // line 16
        echo "
            <p>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "button_url", [], "any", false, false, false, 18), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-pill\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "button_text", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </a>
            </p>
        </div>
        <div class=\"col-md-6\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["blockImage"] ?? null), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\" />
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blocks/detailed-block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  84 => 19,  80 => 18,  76 => 16,  72 => 14,  63 => 12,  59 => 11,  56 => 10,  54 => 9,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blockImage = block.image ? block.image|media : 'assets/images/about-team.png'|theme %}

<div class=\"container py-3\">
    <div class=\"row\">
        <div class=\"col-md-6 pt-5\">
            <h2 class=\"my-4\">{{ block.title }}</h2>
            {{ block.content|raw }}

            {% if block.list_items %}
                <ul class=\"list-inline list-with-ticks py-2\">
                    {% for item in block.list_items %}
                        <li class=\"list-inline-item\">{{ item.text }}</li>
                    {% endfor %}
                </ul>
            {% endif %}

            <p>
                <a href=\"{{ block.button_url }}\" class=\"btn btn-primary btn-lg btn-pill\">
                    {{ block.button_text }}
                </a>
            </p>
        </div>
        <div class=\"col-md-6\">
            <img src=\"{{ blockImage }}\" alt=\"\" class=\"img-fluid\" />
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/blocks/detailed-block.htm", "");
    }
}
