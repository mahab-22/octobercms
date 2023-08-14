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

/* /var/www/octobercms/themes/demo/partials/site/footer.htm */
class __TwigTemplate_59901007399070e0912782773e28c909 extends Template
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
        echo "<div class=\"element-footer ";
        echo ((((array_key_exists("blueFooterStyle", $context)) ? (_twig_default_filter(($context["blueFooterStyle"] ?? null), false)) : (false))) ? ("footer-bluezone") : (""));
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"footer-brand\">
                    <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"October CMS Demo\" width=\"270\" />
                </div>
                <div class=\"footer-nav\">
                    <div class=\"row gx-0\">
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Company</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        echo "\">Blog</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wiki/index");
        echo "\">Wiki</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Technology</a>
                                </li>
                                ";
        // line 34
        if (($context["backendUrl"] ?? null)) {
            // line 35
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["backendUrl"] ?? null), "html", null, true);
            echo "\" target=\"backend\">Backend Area</a>
                                    </li>
                                ";
        }
        // line 39
        echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX Demo</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("components");
        echo "\">Components Demo</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com\" target=\"_blank\">October CMS</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://docs.octobercms.com\" target=\"_blank\">Documentation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com/pricing\" target=\"_blank\">Buy a License</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://www.youtube.com/c/OctoberCMSOfficial\" target=\"_blank\">YouTube Channel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"footer-social\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://dribbble.com/\" target=\"_blank\">
                                <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/dribbble-white.png");
        echo "\" alt=\"Dribbble\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.linkedin.com/company/october-cms/\" target=\"_blank\">
                                <img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/linkedin-white.png");
        echo "\" alt=\"LinkedIn\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://twitter.com/octobercms\" target=\"_blank\">
                                <img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/twitter-white.png");
        echo "\" alt=\"Twitter\" />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.facebook.com/octobercms\" target=\"_blank\">
                                <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/social-icons-white/facebook-white.png");
        echo "\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"footer-copyright\">
                    <p>&copy; ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Company Name</p>
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
        <div class=\"footer-decoration-1\"></div>
        <div class=\"footer-decoration-2\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 96,  172 => 88,  164 => 83,  156 => 78,  148 => 73,  115 => 43,  109 => 40,  106 => 39,  100 => 36,  97 => 35,  95 => 34,  90 => 32,  80 => 25,  74 => 22,  68 => 19,  62 => 16,  56 => 13,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"element-footer {{ blueFooterStyle|default(false) ? 'footer-bluezone' }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-lg-6 col-xl-5\">
                <div class=\"footer-brand\">
                    <img src=\"{{ 'assets/images/logo.svg'|theme }}\" alt=\"October CMS Demo\" width=\"270\" />
                </div>
                <div class=\"footer-nav\">
                    <div class=\"row gx-0\">
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"{{ 'index'|page }}\">Company</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'blog/index'|page }}\">Blog</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'wiki/index'|page }}\">Wiki</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"{{ 'index'|page }}\">Technology</a>
                                </li>
                                {% if backendUrl %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ backendUrl }}\" target=\"backend\">Backend Area</a>
                                    </li>
                                {% endif %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'ajax'|page }}\">AJAX Demo</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ 'components'|page }}\">Components Demo</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item nav-item-header\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com\" target=\"_blank\">October CMS</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://docs.octobercms.com\" target=\"_blank\">Documentation</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://octobercms.com/pricing\" target=\"_blank\">Buy a License</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"https://www.youtube.com/c/OctoberCMSOfficial\" target=\"_blank\">YouTube Channel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"footer-social\">
                    <ul class=\"nav\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://dribbble.com/\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/dribbble-white.png'|theme }}\" alt=\"Dribbble\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.linkedin.com/company/october-cms/\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/linkedin-white.png'|theme }}\" alt=\"LinkedIn\"  />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://twitter.com/octobercms\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/twitter-white.png'|theme }}\" alt=\"Twitter\" />
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" aria-current=\"page\" href=\"https://www.facebook.com/octobercms\" target=\"_blank\">
                                <img src=\"{{ 'assets/images/social-icons-white/facebook-white.png'|theme }}\" alt=\"Facebook\" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"footer-copyright\">
                    <p>&copy; {{ \"now\"|date(\"Y\") }} Your Company Name</p>
                    <p>All rights reserved</p>
                </div>
            </div>
        </div>
        <div class=\"footer-decoration-1\"></div>
        <div class=\"footer-decoration-2\"></div>
    </div>
</div>", "/var/www/octobercms/themes/demo/partials/site/footer.htm", "");
    }
}
