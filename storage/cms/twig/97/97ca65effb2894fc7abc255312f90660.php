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

/* /var/www/octobercms/themes/demo/pages/contact.htm */
class __TwigTemplate_827314562bc0321259c65e2ac3c01ad3 extends Template
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
        echo "<div class=\"container my-5 py-4\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <h1>Ready for something new? Get in touch!</h1>
            <p class=\"py-4\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

            <div class=\"contact-options\">
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-address.png");
        echo "\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Address</h3>
                        <p>Cupertino, California, United States</p>
                    </div>
                </div>
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-email.png");
        echo "\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Email</h3>
                        <p><a href=\"mailto:example@example.tld\">example@example.tld</a></p>
                    </div>
                </div>
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/icon-phone.png");
        echo "\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Phone</h3>
                        <p>0 (123) 456 7890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-7 offset-lg-1\">
            <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/contact-image.png");
        echo "\" class=\"img-fluid\" alt=\"Team Shot\" />
        </div>
    </div>
</div>

<div class=\"contactform\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                ";
        // line 47
        $cmsPartialParams = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("about/contact-form"        , array_merge($context, ['__cms_partial_params' => $cmsPartialParams], $cmsPartialParams)        , true        );
        // line 48
        echo "                <div class=\"contactform-decoration-1\"></div>
                <div class=\"contactform-decoration-2\"></div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 48,  97 => 47,  85 => 38,  72 => 28,  60 => 19,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container my-5 py-4\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <h1>Ready for something new? Get in touch!</h1>
            <p class=\"py-4\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

            <div class=\"contact-options\">
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"{{ 'assets/images/icons/icon-address.png'|theme }}\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Address</h3>
                        <p>Cupertino, California, United States</p>
                    </div>
                </div>
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"{{ 'assets/images/icons/icon-email.png'|theme }}\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Email</h3>
                        <p><a href=\"mailto:example@example.tld\">example@example.tld</a></p>
                    </div>
                </div>
                <div class=\"option mb-2 d-flex\">
                    <div class=\"pe-3\">
                        <img src=\"{{ 'assets/images/icons/icon-phone.png'|theme }}\" width=\"42\" alt=\"\" />
                    </div>
                    <div>
                        <h3 class=\"my-1\">Phone</h3>
                        <p>0 (123) 456 7890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-7 offset-lg-1\">
            <img src=\"{{ 'assets/images/contact-image.png'|theme }}\" class=\"img-fluid\" alt=\"Team Shot\" />
        </div>
    </div>
</div>

<div class=\"contactform\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                {% partial 'about/contact-form' %}
                <div class=\"contactform-decoration-1\"></div>
                <div class=\"contactform-decoration-2\"></div>
            </div>
        </div>
    </div>
</div>", "/var/www/octobercms/themes/demo/pages/contact.htm", "");
    }
}
