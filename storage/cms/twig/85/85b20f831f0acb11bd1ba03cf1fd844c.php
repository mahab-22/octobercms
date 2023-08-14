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

/* /var/www/octobercms/themes/demo/partials/helpers/random-stock-image.htm */
class __TwigTemplate_6c87e15bf99185a9cb3b8e1fc869dc2b extends Template
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
        $context["images"] = [0 => "workspace", 1 => "desktop", 2 => "pancakes", 3 => "doughnuts"];
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/stock/" . twig_random($this->env, ($context["images"] ?? null))) . ".png"));
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/helpers/random-stock-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set images = [
    'workspace',
    'desktop',
    'pancakes',
    'doughnuts'
] %}{{ ('assets/images/stock/' ~ random(images) ~ '.png')|theme }}", "/var/www/octobercms/themes/demo/partials/helpers/random-stock-image.htm", "");
    }
}
