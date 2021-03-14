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

/* view-news.twig */
class __TwigTemplate_5f2827cbb6edc303b1f6a24208991ab355b5eb68c66645ccd72a537f53c53ac5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seo' => [$this, 'block_seo'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("html.twig", "view-news.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<!-- Primary Meta Tags -->
\t<meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "\">

\t<!-- Open Graph / Facebook -->
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/news/";
        echo twig_escape_filter($this->env, ($context["img_url"] ?? null), "html", null, true);
        echo "\">

\t<!-- Twitter -->
\t<meta property=\"twitter:card\" content=\"summary_large_image\">
\t<meta property=\"twitter:url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"twitter:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"twitter:description\" content=\"\">
\t<meta property=\"twitter:image\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/news/";
        echo twig_escape_filter($this->env, ($context["img_url"] ?? null), "html", null, true);
        echo "\">
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
\t<h1>";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["news"] ?? null) : null), "html", null, true);
        echo "</h1>
\t<ul id=\"breadcrump\">
\t\t<li>
\t\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["home"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t</li>
\t\t<li>";
        // line 32
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</li>
\t</ul>
\t<div id=\"news\" class=\"read\">
\t\t<article>
\t\t\t<div class=\"header\" style=\"background-image:url('";
        // line 36
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/news/";
        echo twig_escape_filter($this->env, ($context["img_url"] ?? null), "html", null, true);
        echo "');\">
\t\t\t\t<h2><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "/img/i_news.png\">
\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</h2>
\t\t\t</div>

\t\t\t<p>";
        // line 41
        echo ($context["content"] ?? null);
        echo "</p>

\t\t\t<div class=\"footer\">
\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["news_posted_on"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t<strong>";
        // line 45
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</strong>
\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["news_by"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t<strong>";
        // line 47
        echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
        echo "</strong>.
\t\t\t</div>
\t\t</article>
\t\t<div class=\"clear\"></div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "view-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  164 => 46,  160 => 45,  156 => 44,  150 => 41,  144 => 38,  140 => 37,  134 => 36,  127 => 32,  120 => 30,  114 => 27,  111 => 26,  107 => 25,  99 => 22,  94 => 20,  90 => 19,  81 => 15,  77 => 14,  73 => 13,  66 => 9,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "view-news.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\view-news.twig");
    }
}
