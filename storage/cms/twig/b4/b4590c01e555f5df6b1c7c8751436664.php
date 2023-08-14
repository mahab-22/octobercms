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

/* /var/www/octobercms/themes/demo/partials/blocks/image-slice.htm */
class __TwigTemplate_cb5947a4dee44dea98abb9c44f359936 extends Template
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
        $context["heroImage"] = ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1)) ? ($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "image", [], "any", false, false, false, 1))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/stock/desks-cropped.png")));
        // line 2
        echo "
<div class=\"block-hero-image\" style=\"background-image:url('";
        // line 3
        echo twig_escape_filter($this->env, ($context["heroImage"] ?? null), "html", null, true);
        echo "')\"></div>
<div class=\"pb-5\"></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blocks/image-slice.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set heroImage = block.image ? block.image|media : 'assets/images/stock/desks-cropped.png'|theme %}

<div class=\"block-hero-image\" style=\"background-image:url('{{ heroImage }}')\"></div>
<div class=\"pb-5\"></div>", "/var/www/octobercms/themes/demo/partials/blocks/image-slice.htm", "");
    }
}
