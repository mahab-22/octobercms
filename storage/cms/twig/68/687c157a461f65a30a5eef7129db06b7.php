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

/* /var/www/octobercms/themes/demo/partials/blocks/scoreboard-metrics.htm */
class __TwigTemplate_09dfa45c963a20b6f46d48fe6a2fcf71 extends Template
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
        echo "<div class=\"block-scoreboard-metrics mt-3\">
    <div class=\"container\">
        <div class=\"metrics d-flex justify-content-between\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "metrics", [], "any", true, true, false, 4)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "metrics", [], "any", false, false, false, 4), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
            // line 5
            echo "                <div class=\"metric\">
                    <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/icons/icon-" . ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["metric"], "icon", [], "any", true, true, false, 6)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["metric"], "icon", [], "any", false, false, false, 6), "notepad")) : ("notepad"))) . ".png"));
            echo "\" width=\"42\" alt=\"\" />
                    <h3>";
            // line 7
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["metric"], "number", [], "any", false, false, false, 7), "html", null, true);
            echo "</h3>
                    <p>";
            // line 8
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </div>
    </div>
</div>
<div class=\"pb-3\"></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blocks/scoreboard-metrics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-scoreboard-metrics mt-3\">
    <div class=\"container\">
        <div class=\"metrics d-flex justify-content-between\">
            {% for metric in block.metrics|default([]) %}
                <div class=\"metric\">
                    <img src=\"{{ ('assets/images/icons/icon-' ~ metric.icon|default('notepad') ~ '.png')|theme }}\" width=\"42\" alt=\"\" />
                    <h3>{{ metric.number }}</h3>
                    <p>{{ metric.description }}</p>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
<div class=\"pb-3\"></div>", "/var/www/octobercms/themes/demo/partials/blocks/scoreboard-metrics.htm", "");
    }
}
