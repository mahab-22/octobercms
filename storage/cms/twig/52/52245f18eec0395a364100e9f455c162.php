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

/* /var/www/octobercms/plugins/october/demo/components/todo/default.htm */
class __TwigTemplate_7ce14438b0f9582098eb8d430afcf5e6 extends Template
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
        echo "<form
    role=\"form\"
    data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onAddItem\"
    data-request-update=\"'";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\"
    data-request-flash>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">To Do List</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"What needs to be done?\">
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
                </span>
            </div>
        </div>
        <ul class=\"list-group\" id=\"result\">
            ";
        // line 20
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::list")        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 21
        echo "        </ul>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/plugins/october/demo/components/todo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  64 => 20,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form
    role=\"form\"
    data-request=\"{{ __SELF__ }}::onAddItem\"
    data-request-update=\"'{{ __SELF__ }}::list': '#result'\"
    data-request-success=\"\$('#input-item').val('')\"
    data-request-flash>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">To Do List</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"input-item\" class=\"form-control\" value=\"\" name=\"newItem\" placeholder=\"What needs to be done?\">
                <span class=\"input-group-btn\">
                    <button type=\"submit\" class=\"btn btn-primary\">Add</button>
                </span>
            </div>
        </div>
        <ul class=\"list-group\" id=\"result\">
            {% partial __SELF__ ~ '::list' %}
        </ul>
    </div>
</form>
", "/var/www/octobercms/plugins/october/demo/components/todo/default.htm", "");
    }
}
