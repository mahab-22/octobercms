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

/* /var/www/octobercms/themes/demo/partials/site/how-its-made.htm */
class __TwigTemplate_7443e54a8c9c86ff5009b7722ee739c5 extends Template
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
        if ((($context["backendUrl"] ?? null) && ($context["howItsMadeCmsTemplate"] ?? null))) {
            // line 2
            echo "    <div class=\"how-its-made init\">
        <div>
            <p>Wondering how this page is made? View the
                ";
            // line 5
            if (((array_key_exists("howItsMadeCmsTemplate", $context)) ? (_twig_default_filter(($context["howItsMadeCmsTemplate"] ?? null), false)) : (false))) {
                // line 6
                echo "                    <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, ((($context["backendUrl"] ?? null) . "/editor?open=") . ($context["howItsMadeCmsTemplate"] ?? null)), "html", null, true);
                echo "\">CMS Template</a>
                ";
            }
            // line 8
            echo "                ";
            if (((array_key_exists("howItsMadeTailorBlueprint", $context)) ? (_twig_default_filter(($context["howItsMadeTailorBlueprint"] ?? null), false)) : (false))) {
                // line 9
                echo "                    •  <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, ((($context["backendUrl"] ?? null) . "/editor?open=") . ($context["howItsMadeTailorBlueprint"] ?? null)), "html", null, true);
                echo "\">Tailor Blueprint</a>
                ";
            }
            // line 11
            echo "                ";
            if (((array_key_exists("howItsMadeTailorContent", $context)) ? (_twig_default_filter(($context["howItsMadeTailorContent"] ?? null), false)) : (false))) {
                // line 12
                echo "                    •  <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, ((($context["backendUrl"] ?? null) . "/tailor/") . ($context["howItsMadeTailorContent"] ?? null)), "html", null, true);
                echo "\">Tailor Content</a>
                ";
            }
            // line 14
            echo "            </p>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/how-its-made.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 12,  61 => 11,  55 => 9,  52 => 8,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if backendUrl and howItsMadeCmsTemplate %}
    <div class=\"how-its-made init\">
        <div>
            <p>Wondering how this page is made? View the
                {% if howItsMadeCmsTemplate|default(false) %}
                    <a target=\"_blank\" href=\"{{ backendUrl ~ '/editor?open=' ~ howItsMadeCmsTemplate }}\">CMS Template</a>
                {% endif %}
                {% if howItsMadeTailorBlueprint|default(false) %}
                    •  <a target=\"_blank\" href=\"{{ backendUrl ~ '/editor?open=' ~ howItsMadeTailorBlueprint }}\">Tailor Blueprint</a>
                {% endif %}
                {% if howItsMadeTailorContent|default(false) %}
                    •  <a target=\"_blank\" href=\"{{ backendUrl ~ '/tailor/' ~ howItsMadeTailorContent }}\">Tailor Content</a>
                {% endif %}
            </p>
        </div>
    </div>
{% endif %}", "/var/www/octobercms/themes/demo/partials/site/how-its-made.htm", "");
    }
}
