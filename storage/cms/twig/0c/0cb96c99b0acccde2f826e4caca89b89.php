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

/* /var/www/octobercms/themes/demo/pages/components.htm */
class __TwigTemplate_dc480a4f547eed591cb203978e193dbb extends Template
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
        echo "<div class=\"container pt-5\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"text-center py-3\">
                <h1 class=\"mb-4\">CMS Component Demo</h1>
                <p class=\"lead\">Plugins can provide CMS components, simple building blocks that can enrich pages, layouts, and partials. Check out the To Do example below.</p>
            </div>
        </div>
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"plugins-component-container pb-5\">
                ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("demoTodo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"explanation plugins-component-explanation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2\">
                <h3>HTML Markup for that example</h3>

                <div class=\"code-block mb-4\">
                    <pre>";
        // line 25
        echo "{% component 'demoTodo' %}";
        echo "</pre>
                </div>

                <p>Wait, only one line is needed? Yes! CMS components are simple building blocks that can be used with a small amount of code. Components encapsulate PHP code and partials and can be included in a page, layout or partial with a single line of code. By sharing plugins between multiple projects, you can reuse CMS components and be more productive. The <code>demoTodo</code> component used here is provided by the plugin called <em>October\\Demo</em>, you can find it in the <em>plugins/october/demo</em> folder.</p>

                <div class=\"py-4\">
                    <p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/components.html\" target=\"_blank\" class=\"btn btn-primary btn-lg btn-pill\">
                            Learn more about CMS Components
                        </a>
                    </p>
                </div>
                <div class=\"explanation-decoration-1\"></div>
                <div class=\"explanation-decoration-2\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/pages/components.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pt-5\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"text-center py-3\">
                <h1 class=\"mb-4\">CMS Component Demo</h1>
                <p class=\"lead\">Plugins can provide CMS components, simple building blocks that can enrich pages, layouts, and partials. Check out the To Do example below.</p>
            </div>
        </div>
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"plugins-component-container pb-5\">
                {% component 'demoTodo' %}
            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"explanation plugins-component-explanation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2\">
                <h3>HTML Markup for that example</h3>

                <div class=\"code-block mb-4\">
                    <pre>{% autoescape %}{{ \"{% component 'demoTodo' %}\" }}{% endautoescape %}</pre>
                </div>

                <p>Wait, only one line is needed? Yes! CMS components are simple building blocks that can be used with a small amount of code. Components encapsulate PHP code and partials and can be included in a page, layout or partial with a single line of code. By sharing plugins between multiple projects, you can reuse CMS components and be more productive. The <code>demoTodo</code> component used here is provided by the plugin called <em>October\\Demo</em>, you can find it in the <em>plugins/october/demo</em> folder.</p>

                <div class=\"py-4\">
                    <p>
                        <a href=\"https://docs.octobercms.com/3.x/cms/themes/components.html\" target=\"_blank\" class=\"btn btn-primary btn-lg btn-pill\">
                            Learn more about CMS Components
                        </a>
                    </p>
                </div>
                <div class=\"explanation-decoration-1\"></div>
                <div class=\"explanation-decoration-2\"></div>
            </div>
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/pages/components.htm", "");
    }
}
