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

/* /var/www/octobercms/themes/demo/partials/site/nav.htm */
class __TwigTemplate_afc82feea039e995f1ea1116d4a1ac1a extends Template
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
        $context["activeNavLink"] = ((array_key_exists("activeNavLink", $context)) ? (_twig_default_filter(($context["activeNavLink"] ?? null), Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1))) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1)));
        // line 2
        echo "
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 4
        echo (((($context["activeNavLink"] ?? null) == "blog")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        echo "\">Blog</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 7
        echo (((($context["activeNavLink"] ?? null) == "wiki")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/index");
        echo "\">Wiki</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 10
        echo (((($context["activeNavLink"] ?? null) == "about")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 13
        echo (((($context["activeNavLink"] ?? null) == "contact")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 16
        echo (((($context["activeNavLink"] ?? null) == "components")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("components");
        echo "\">Components Demo</a>
</li>
";
        // line 18
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "isEnabled", [], "any", false, false, false, 18)) {
            // line 19
            echo "    <li class=\"nav-item dropdown\">
        <a class=\"btn btn-outline-light dropdown-toggle\" href=\"";
            // line 20
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
            // line 21
            echo twig_escape_filter($this->env, ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, true, false, 21), "name", [], "any", true, true, false, 21)) ? (_twig_default_filter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, true, false, 21), "name", [], "any", false, false, false, 21), "Sites")) : ("Sites")), "html", null, true);
            echo "
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["sitePicker"] ?? null), "sites", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 25
                echo "                <li><a class=\"dropdown-item ";
                echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "site", [], "any", false, false, false, 25), "code", [], "any", false, false, false, 25) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "code", [], "any", false, false, false, 25))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "url", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["site"], "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            if (($context["backendUrl"] ?? null)) {
                // line 28
                echo "                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, ($context["backendUrl"] ?? null), "html", null, true);
                echo "\">Backend Area</a></li>
            ";
            }
            // line 31
            echo "        </ul>
    </li>
";
        } elseif (        // line 33
($context["backendUrl"] ?? null)) {
            // line 34
            echo "    <li class=\"nav-item\">
        <a class=\"btn btn-outline-light\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["backendUrl"] ?? null), "html", null, true);
            echo "\" target=\"backend\">Backend Area</a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  131 => 34,  129 => 33,  125 => 31,  120 => 29,  117 => 28,  114 => 27,  101 => 25,  97 => 24,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  75 => 16,  67 => 13,  59 => 10,  51 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set activeNavLink = activeNavLink|default(this.page.id) %}

<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'blog' ? 'active' }}\" href=\"{{ 'blog/index'|page }}\">Blog</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'wiki' ? 'active' }}\" href=\"{{ 'wiki/index'|page }}\">Wiki</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'about' ? 'active' }}\" href=\"{{ 'about'|page }}\">About</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'contact' ? 'active' }}\" href=\"{{ 'contact'|page }}\">Contact</a>
</li>
<li class=\"nav-item\">
    <a class=\"nav-link {{ activeNavLink == 'components' ? 'active' }}\" href=\"{{ 'components'|page }}\">Components Demo</a>
</li>
{% if sitePicker.isEnabled %}
    <li class=\"nav-item dropdown\">
        <a class=\"btn btn-outline-light dropdown-toggle\" href=\"{{ ''|page }}\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {{ this.site.name|default('Sites') }}
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            {% for site in sitePicker.sites %}
                <li><a class=\"dropdown-item {{ this.site.code == site.code ? 'active' }}\" href=\"{{ site.url }}\">{{ site.name }}</a></li>
            {% endfor %}
            {% if backendUrl %}
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"{{ backendUrl }}\">Backend Area</a></li>
            {% endif %}
        </ul>
    </li>
{% elseif backendUrl %}
    <li class=\"nav-item\">
        <a class=\"btn btn-outline-light\" href=\"{{ backendUrl }}\" target=\"backend\">Backend Area</a>
    </li>
{% endif %}", "/var/www/octobercms/themes/demo/partials/site/nav.htm", "");
    }
}
