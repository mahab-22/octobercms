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

/* /var/www/octobercms/themes/demo/pages/about.htm */
class __TwigTemplate_91eef0afbd1db3456992b1f75fb9057c extends Template
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
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->startBlock('headerAfter'        );
        // line 2
        echo "    <div class=\"container\">
        <div class=\"header-extra text-center\">
            <h1 class=\"mb-4\">Hello! This is October CMS!</h1>
            <p class=\"lead\">A company proving that making websites is not rocket science.</p>
        </div>
    </div>
";
        // line 1
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->endBlock(true        );
        // line 9
        echo "<main class=\"header-flush\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["landingPage"] ?? null), "blocks", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 11
            echo "        ";
            $cmsPartialParams = [];
            $cmsPartialParams['block'] = $context["block"]            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction(("blocks/" . $this->env->getFunction('str_slug')->getCallable()("slug", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 11)))            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</main>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 12,  56 => 11,  52 => 10,  49 => 9,  47 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put headerAfter %}
    <div class=\"container\">
        <div class=\"header-extra text-center\">
            <h1 class=\"mb-4\">Hello! This is October CMS!</h1>
            <p class=\"lead\">A company proving that making websites is not rocket science.</p>
        </div>
    </div>
{% endput %}
<main class=\"header-flush\">
    {% for block in landingPage.blocks %}
        {% partial 'blocks/' ~ str_slug(block.type) block=block %}
    {% endfor %}
</main>", "/var/www/octobercms/themes/demo/pages/about.htm", "");
    }
}
