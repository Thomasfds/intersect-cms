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

/* admin-home.twig */
class __TwigTemplate_c27bcd759d361fae7e5150ac81321b95ed4f9365c5e98e59886289f4e90e9dea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("html.twig", "admin-home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["news"] ?? null) : null), "html", null, true);
        echo "</h1>
<ul id=\"breadcrump\">
  <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["home"] ?? null) : null), "html", null, true);
        echo "</a></li>
  <li>";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["administration_title"] ?? null) : null), "html", null, true);
        echo "</li>
</ul>

<div id=\"news\">

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 13
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/news.jpg');\">
    <h2><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["administration_news_title"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-add-news"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["administration_access_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 22
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/shop.jpg');\">
    <h2><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["administration_shop_title"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-add-shop"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["administration_access_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 31
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/pages.jpg');\">
    <h2><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["administration_pages_title"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-add-pages"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["administration_access_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 40
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/settings.jpg');\">
    <h2><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["administration_settings_title"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-edit-settings"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["administration_access_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 49
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/settings.jpg');\">
    <h2><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["admin_itemsList"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-items", ["page" => 0]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["admin_itemsList_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

<article>
  <div class=\"header\" style=\"background-image:url('";
        // line 58
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/admin/settings.jpg');\">
    <h2><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_news.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["administration_translate_title"] ?? null) : null), "html", null, true);
        echo "</h2>
  </div>
  <div class=\"footer\">
    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-edit-translation"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/i_bulle.png\"/> ";
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["administration_access_title"] ?? null) : null), "html", null, true);
        echo "</a>
  </div>
</article>

  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin-home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 62,  195 => 59,  191 => 58,  179 => 53,  171 => 50,  167 => 49,  155 => 44,  147 => 41,  143 => 40,  131 => 35,  123 => 32,  119 => 31,  107 => 26,  99 => 23,  95 => 22,  83 => 17,  75 => 14,  71 => 13,  62 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin-home.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\admin-home.twig");
    }
}
