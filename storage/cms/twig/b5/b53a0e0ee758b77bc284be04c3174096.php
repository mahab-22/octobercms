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

/* /var/www/octobercms/themes/demo/partials/helpers/random-avatar-image.htm */
class __TwigTemplate_8e7f76f4428213827891a83d1c1340b7 extends Template
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
        $context["images"] = [0 => "avatar-1", 1 => "avatar-2", 2 => "avatar-3", 3 => "avatar-4", 4 => "avatar-5"];
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/avatars/" . twig_random($this->env, ($context["images"] ?? null))) . ".png"));
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/helpers/random-avatar-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set images = [
    'avatar-1',
    'avatar-2',
    'avatar-3',
    'avatar-4',
    'avatar-5'
] %}{{ ('assets/images/avatars/' ~ random(images) ~ '.png')|theme }}", "/var/www/octobercms/themes/demo/partials/helpers/random-avatar-image.htm", "");
    }
}
