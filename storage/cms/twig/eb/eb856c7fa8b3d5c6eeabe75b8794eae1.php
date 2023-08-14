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

/* /var/www/octobercms/themes/demo/partials/about/contact-form.htm */
class __TwigTemplate_95be3534b40c1c72c17a99b6b377fd08 extends Template
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
        echo "<div class=\"contact-us-form\">
    <h3 class=\"mb-4\">Drop Us a Line</h3>
    <p class=\"lead\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <form>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-floating mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"commentNameInput\">
                    <label for=\"commentNameInput\">First Name</label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"commentLastNameInput\">
                    <label for=\"commentLastNameInput\">Last Name</label>
                </div>
            </div>
        </div>
        <div class=\"form-floating mb-3\">
            <input type=\"email\" class=\"form-control\" id=\"commentEmailInput\">
            <label for=\"commentEmailInput\">Email address</label>
        </div>
        <div class=\"mb-3 form-floating\">
            <textarea style=\"height:125px\" class=\"form-control\" id=\"commentContentTextarea\"></textarea>
            <label for=\"commentContentTextarea\">Comment</label>
        </div>
        <div class=\"form-buttons d-flex pt-2\">
            <div>
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-pill\">Submit</button>
            </div>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/about/contact-form.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact-us-form\">
    <h3 class=\"mb-4\">Drop Us a Line</h3>
    <p class=\"lead\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <form>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-floating mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"commentNameInput\">
                    <label for=\"commentNameInput\">First Name</label>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"form-floating mb-3\">
                    <input type=\"text\" class=\"form-control\" id=\"commentLastNameInput\">
                    <label for=\"commentLastNameInput\">Last Name</label>
                </div>
            </div>
        </div>
        <div class=\"form-floating mb-3\">
            <input type=\"email\" class=\"form-control\" id=\"commentEmailInput\">
            <label for=\"commentEmailInput\">Email address</label>
        </div>
        <div class=\"mb-3 form-floating\">
            <textarea style=\"height:125px\" class=\"form-control\" id=\"commentContentTextarea\"></textarea>
            <label for=\"commentContentTextarea\">Comment</label>
        </div>
        <div class=\"form-buttons d-flex pt-2\">
            <div>
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-pill\">Submit</button>
            </div>
        </div>
    </form>
</div>", "/var/www/octobercms/themes/demo/partials/about/contact-form.htm", "");
    }
}
