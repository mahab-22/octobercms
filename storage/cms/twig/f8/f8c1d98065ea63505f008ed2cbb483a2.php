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

/* /var/www/octobercms/themes/demo/partials/site/meta.htm */
class __TwigTemplate_52425235d0c9be492896b72d2adb2544 extends Template
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
        echo "<meta charset=\"utf-8\">
<title>October CMS - ";
        // line 2
        ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "meta_title", [], "any", false, false, false, 2)) ? (print (twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "meta_title", [], "any", false, false, false, 2), "html", null, true))) : (print ($this->extensions['Cms\Twig\Extension']->placeholderFunction("pageTitle"))));
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "meta_description", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"October CMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"October CMS\">
";
        // line 8
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('meta');
        // line 9
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
<link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap-icons/bootstrap-icons.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick-theme.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/less/theme.less"]);
        echo "\" rel=\"stylesheet\">
";
        // line 17
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('css');
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('styles');
        // line 18
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/codeblocks/codeblocks.min.js");
        echo "\"></script>
<script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-carousel/slick.min.js");
        echo "\"></script>
<script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
";
        // line 23
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework-bundle'.($_minify ? '.min' : '').'.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework-extras.css">'.PHP_EOL;
        unset($_minify);
        // line 24
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->assetsFunction('js');
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->displayBlock('scripts');
        // line 25
        echo "
<script type=\"module\">
    import PhotoSwipeLightbox from \"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe-lightbox.esm.min.js");
        echo "\";
    import PhotoSwipeModule from \"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe/photoswipe.esm.min.js");
        echo "\"
    import PhotoSwipeDynamicCaption from \"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js");
        echo "\";

    window.PhotoSwipeLightbox = PhotoSwipeLightbox;
    window.PhotoSwipeModule = PhotoSwipeModule;
    window.PhotoSwipeDynamicCaption = PhotoSwipeDynamicCaption;
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/octobercms/themes/demo/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  130 => 28,  126 => 27,  122 => 25,  119 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  93 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  57 => 9,  55 => 8,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<title>October CMS - {{ this.page.meta_title ?: placeholder('pageTitle') }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"October CMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"October CMS\">
{% meta %}
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
<link href=\"{{ 'assets/vendor/bootstrap/bootstrap.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/bootstrap-icons/bootstrap-icons.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/slick-carousel/slick.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/slick-carousel/slick-theme.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/photoswipe/photoswipe.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ ['assets/less/theme.less']|theme }}\" rel=\"stylesheet\">
{% styles %}
<script src=\"{{ 'assets/vendor/jquery.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/bootstrap.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/codeblocks/codeblocks.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/slick-carousel/slick.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
{% framework extras turbo %}
{% scripts %}

<script type=\"module\">
    import PhotoSwipeLightbox from \"{{ 'assets/vendor/photoswipe/photoswipe-lightbox.esm.min.js'|theme }}\";
    import PhotoSwipeModule from \"{{ 'assets/vendor/photoswipe/photoswipe.esm.min.js'|theme }}\"
    import PhotoSwipeDynamicCaption from \"{{ 'assets/vendor/photoswipe-dynamic-caption-plugin/photoswipe-dynamic-caption-plugin.esm.js'|theme }}\";

    window.PhotoSwipeLightbox = PhotoSwipeLightbox;
    window.PhotoSwipeModule = PhotoSwipeModule;
    window.PhotoSwipeDynamicCaption = PhotoSwipeDynamicCaption;
</script>", "/var/www/octobercms/themes/demo/partials/site/meta.htm", "");
    }
}
