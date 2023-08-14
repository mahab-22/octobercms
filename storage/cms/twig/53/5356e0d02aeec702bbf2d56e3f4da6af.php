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

/* /var/www/octobercms/themes/demo/partials/elements/user-panel-team.htm */
class __TwigTemplate_5b3b22cb38e5aa12918b1b8381e8a3f3 extends Template
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
        echo "<div class=\"element-user-panel team-panel\">
    <div class=\"user-avatar\">
        ";
        // line 3
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <img src=\"";
            echo $this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, false, 4));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 6
            echo "            <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->partialFunction("helpers/random-avatar-image");
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
            echo "\" />
        ";
        }
        // line 8
        echo "    </div>
    <div class=\"user-details\">
        <h3 class=\"mb-0\">";
        // line 10
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h3>
        <p>
            ";
        // line 12
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </p>
    </div>

    <div class=\"user-social\">
        ";
        // line 17
        $cmsPartialParams = [];
        $cmsPartialParams['links'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "social_links", [], "any", false, false, false, 17)        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("elements/social-links"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 18
        echo "    </div>

    <div class=\"user-profile\">
        <p>";
        // line 21
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["user"] ?? null), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/elements/user-panel-team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  80 => 18,  76 => 17,  68 => 12,  63 => 10,  59 => 8,  51 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"element-user-panel team-panel\">
    <div class=\"user-avatar\">
        {% if user.avatar %}
            <img src=\"{{ user.avatar|media }}\" alt=\"{{ user.title }}\" />
        {% else %}
            <img src=\"{{ partial('helpers/random-avatar-image') }}\" alt=\"{{ user.title }}\" />
        {% endif %}
    </div>
    <div class=\"user-details\">
        <h3 class=\"mb-0\">{{ user.title }}</h3>
        <p>
            {{ user.role }}
        </p>
    </div>

    <div class=\"user-social\">
        {% partial 'elements/social-links' links=user.social_links %}
    </div>

    <div class=\"user-profile\">
        <p>{{ user.description }}</p>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/elements/user-panel-team.htm", "");
    }
}
