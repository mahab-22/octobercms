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

/* /var/www/octobercms/themes/demo/partials/blocks/paragraph-block.htm */
class __TwigTemplate_24724d4d2b27682cb84b8fe14fdb41a0 extends Template
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
        $context["blockImage"] = ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1)) ? ($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-chart.png")));
        // line 2
        echo "
<div class=\"container py-3\">
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-md-9\">
            ";
        // line 7
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "content", [], "any", false, false, false, 7);
        echo "
        </div>
        <div class=\"col-md-3\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["blockImage"] ?? null), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\" />
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blocks/paragraph-block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set blockImage = block.image ? block.image|media : 'assets/images/about-chart.png'|theme %}

<div class=\"container py-3\">
    <h1>{{ block.title }}</h1>
    <div class=\"row\">
        <div class=\"col-md-9\">
            {{ block.content|raw }}
        </div>
        <div class=\"col-md-3\">
            <img src=\"{{ blockImage }}\" alt=\"\" class=\"img-fluid\" />
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/blocks/paragraph-block.htm", "");
    }
}
