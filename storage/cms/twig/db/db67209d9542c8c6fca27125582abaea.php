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

/* /var/www/octobercms/themes/demo/partials/blocks/team-leaders.htm */
class __TwigTemplate_eace8c5ae750399f9c945545396decad extends Template
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
        echo "<div class=\"block-team-leaders\">
    <div class=\"container py-3\">
        <div class=\"text-center\">
            <h2 class=\"pt-5\">Meet the Team!</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        </div>
    </div>
</div>

<div class=\"container py-4\">
    <div class=\"block-team-leaders\">
        <div data-control=\"team-leaders\" class=\"team-leaders\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "members", [], "any", true, true, false, 13)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["block"] ?? null), "members", [], "any", false, false, false, 13), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 14
            echo "                <div class=\"team-member-container\">
                    <div class=\"team-member card\">
                        <div class=\"card-body\">
                            ";
            // line 17
            $cmsPartialParams = [];
            $cmsPartialParams['user'] = $context["member"]            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("elements/user-panel-team"            , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)            , true            );
            // line 18
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/blocks/team-leaders.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  64 => 18,  60 => 17,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-team-leaders\">
    <div class=\"container py-3\">
        <div class=\"text-center\">
            <h2 class=\"pt-5\">Meet the Team!</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        </div>
    </div>
</div>

<div class=\"container py-4\">
    <div class=\"block-team-leaders\">
        <div data-control=\"team-leaders\" class=\"team-leaders\">
            {% for member in block.members|default([]) %}
                <div class=\"team-member-container\">
                    <div class=\"team-member card\">
                        <div class=\"card-body\">
                            {% partial 'elements/user-panel-team' user=member %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/blocks/team-leaders.htm", "");
    }
}
