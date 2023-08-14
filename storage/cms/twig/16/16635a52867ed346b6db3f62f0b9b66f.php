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

/* /var/www/octobercms/themes/demo/pages/ajax.htm */
class __TwigTemplate_0b45dd8ce0d668a709682a873939c360 extends Template
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
                <h1 class=\"mb-4\">AJAX Framework</h1>
                <p class=\"lead\">The built-in JavaScript framework provides simple but powerful AJAX capabilities. In most cases, you don't need to write JavaScript code to post data to the server and update elements of your page. The <code>data-</code> attributes can solve a lot of typical tasks. For more complex cases you can employ the full power of JavaScript. You can find more information in the <a href=\"https://docs.octobercms.com/3.x/cms/ajax/introduction.html\">documentation</a>. Check out the calculator example below!</p>
            </div>
        </div>
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"ajax-demo-container pb-5\">
                <div class=\"panel\">
                    <div class=\"row\">
                        <div class=\"col-lg-9 control-panel\">
                            <div class=\"panel-body\">
                                <form role=\"form\" class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\">
                                    </div>

                                    <div class=\"form-group operation-buttons\">
                                        <label><input type=\"radio\" name=\"operation\" value=\"+\"><span>+</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"-\"><span>-</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"*\" checked><span>*</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"/\"><span>/</span></label>
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\">
                                    </div>

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">=</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-lg-3 ps-0\">
                            <div id=\"result\">";
        // line 38
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("calcresult"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"explanation ajax-demo-explanation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2\">
                <h3>The HTML markup for that example</h3>

                <p>The markup defines a form with the inputs for numbers, operation and buttons. Note the <code>data-request</code> and <code>data-request-update</code> attributes on the FORM tag. Those two attributes tell the AJAX framework which PHP function must handle the request and what page element must be updated when the result comes back from the server.</p>

                <div class=\"code-block collapsed-code-block collapsed\">
                    <pre>";
        // line 57
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->contentFunction("ajax/form.txt"        , $context['__cms_content_params']        , true        );
        unset($context['__cms_content_params']);
        echo "</pre>
                    <div class=\"expand-code\">Expand</div>
                </div>

                <h3>The <em>calcresult</em> partial</h3>

                <p>The partial is referred in the form's <code>data-request-update</code> attribute together with the ID of the element that must be updated with the AJAX request. The partial is also rendered when the page first loads to display the default value.</p>

                <div class=\"code-block\">
                    <pre>";
        // line 66
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->contentFunction("ajax/calcresult.txt"        , $context['__cms_content_params']        , true        );
        unset($context['__cms_content_params']);
        echo "</pre>
                </div>

                <h3>The <em>onTest</em> PHP function</h3>

                <p>That PHP function is referred in the form's <code>data-request</code> attribute and acts as the AJAX handler. It loads the submitted values, performs the requested operation, and assigns the calculated value to the <em>result</em> page variable, which is then used in the <em>calcresult</em> partial. The function is defined right in the page file, in the <a href=\"https://docs.octobercms.com/3.x/cms/themes/pages.html#dynamic-pages\">PHP section</a>.</p>

                <div class=\"code-block collapsed-code-block collapsed\">
                    <pre data-language=\"php\">";
        // line 74
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->contentFunction("ajax/handler.txt"        , $context['__cms_content_params']        , true        );
        unset($context['__cms_content_params']);
        echo "</pre>
                    <div class=\"expand-code\">Expand</div>
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
        return "/var/www/octobercms/themes/demo/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 74,  113 => 66,  99 => 57,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pt-5\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"text-center py-3\">
                <h1 class=\"mb-4\">AJAX Framework</h1>
                <p class=\"lead\">The built-in JavaScript framework provides simple but powerful AJAX capabilities. In most cases, you don't need to write JavaScript code to post data to the server and update elements of your page. The <code>data-</code> attributes can solve a lot of typical tasks. For more complex cases you can employ the full power of JavaScript. You can find more information in the <a href=\"https://docs.octobercms.com/3.x/cms/ajax/introduction.html\">documentation</a>. Check out the calculator example below!</p>
            </div>
        </div>
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"ajax-demo-container pb-5\">
                <div class=\"panel\">
                    <div class=\"row\">
                        <div class=\"col-lg-9 control-panel\">
                            <div class=\"panel-body\">
                                <form role=\"form\" class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\">
                                    </div>

                                    <div class=\"form-group operation-buttons\">
                                        <label><input type=\"radio\" name=\"operation\" value=\"+\"><span>+</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"-\"><span>-</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"*\" checked><span>*</span></label>
                                        <label><input type=\"radio\" name=\"operation\" value=\"/\"><span>/</span></label>
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\">
                                    </div>

                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-primary\">=</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-lg-3 ps-0\">
                            <div id=\"result\">{% partial \"calcresult\" %}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Explanation -->
<div class=\"explanation ajax-demo-explanation\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2\">
                <h3>The HTML markup for that example</h3>

                <p>The markup defines a form with the inputs for numbers, operation and buttons. Note the <code>data-request</code> and <code>data-request-update</code> attributes on the FORM tag. Those two attributes tell the AJAX framework which PHP function must handle the request and what page element must be updated when the result comes back from the server.</p>

                <div class=\"code-block collapsed-code-block collapsed\">
                    <pre>{% content \"ajax/form.txt\" %}</pre>
                    <div class=\"expand-code\">Expand</div>
                </div>

                <h3>The <em>calcresult</em> partial</h3>

                <p>The partial is referred in the form's <code>data-request-update</code> attribute together with the ID of the element that must be updated with the AJAX request. The partial is also rendered when the page first loads to display the default value.</p>

                <div class=\"code-block\">
                    <pre>{% content \"ajax/calcresult.txt\" %}</pre>
                </div>

                <h3>The <em>onTest</em> PHP function</h3>

                <p>That PHP function is referred in the form's <code>data-request</code> attribute and acts as the AJAX handler. It loads the submitted values, performs the requested operation, and assigns the calculated value to the <em>result</em> page variable, which is then used in the <em>calcresult</em> partial. The function is defined right in the page file, in the <a href=\"https://docs.octobercms.com/3.x/cms/themes/pages.html#dynamic-pages\">PHP section</a>.</p>

                <div class=\"code-block collapsed-code-block collapsed\">
                    <pre data-language=\"php\">{% content \"ajax/handler.txt\" %}</pre>
                    <div class=\"expand-code\">Expand</div>
                </div>

                <div class=\"explanation-decoration-1\"></div>
                <div class=\"explanation-decoration-2\"></div>
            </div>
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/pages/ajax.htm", "");
    }
}
