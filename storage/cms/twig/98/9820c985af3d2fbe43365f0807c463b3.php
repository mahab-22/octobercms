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

/* /var/www/octobercms/themes/demo/partials/elements/social-links.htm */
class __TwigTemplate_3e9dcee9205624377546256d9beb12cd extends Template
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
        echo "<div class=\"element-social-links\">
    <ul class=\"nav\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("links", $context)) ? (_twig_default_filter(($context["links"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 5), "html", null, true);
            echo "\" target=\"_blank\" rel=\"nofollow\">
                    <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter((("assets/images/social-icons/" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["link"], "platform", [], "any", false, false, false, 6)) . ".png"));
            echo "\" alt=\"Dribbble\"  />
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
        if (((array_key_exists("showRssLink", $context)) ? (_twig_default_filter(($context["showRssLink"] ?? null), false)) : (false))) {
            // line 11
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/rss");
            echo "\" target=\"_blank\">
                    <img src=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons/rss.png");
            echo "\" alt=\"RSS Feed\"  />
                </a>
            </li>
        ";
        }
        // line 17
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/elements/social-links.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  72 => 13,  68 => 12,  65 => 11,  62 => 10,  52 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"element-social-links\">
    <ul class=\"nav\">
        {% for link in links|default([]) %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"{{ link.url }}\" target=\"_blank\" rel=\"nofollow\">
                    <img src=\"{{ ('assets/images/social-icons/' ~ link.platform ~ '.png')|theme }}\" alt=\"Dribbble\"  />
                </a>
            </li>
        {% endfor %}
        {% if showRssLink|default(false) %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"{{ 'blog/rss'|page }}\" target=\"_blank\">
                    <img src=\"{{ ('assets/images/social-icons/rss.png')|theme }}\" alt=\"RSS Feed\"  />
                </a>
            </li>
        {% endif %}
    </ul>
</div>", "/var/www/octobercms/themes/demo/partials/elements/social-links.htm", "");
    }
}
