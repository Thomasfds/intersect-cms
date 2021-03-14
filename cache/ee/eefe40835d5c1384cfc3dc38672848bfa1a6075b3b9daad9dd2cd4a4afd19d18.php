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

/* html.twig */
class __TwigTemplate_29ac3bd3195bc771251a0d6c47a78245c195bde0ff2b596a13cde954700a2004 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seo' => [$this, 'block_seo'],
            'content' => [$this, 'block_content'],
            'footerjs' => [$this, 'block_footerjs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\"/>
\t\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["game_title"] ?? null) : null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["game_min_desc"] ?? null) : null), "html", null, true);
        echo "</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "css/stylesheet.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "css/fontawesome.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "css/StackModal.min.css\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "css/StackCustom.min.css\"/>

";
        // line 15
        $this->displayBlock('seo', $context, $blocks);
        // line 34
        echo "
\t</head>

\t<body>

\t\t<header>
\t\t\t<div class=\"ct\">
\t\t\t\t";
        // line 41
        if ( !($context["nav_community"] ?? null)) {
            // line 42
            echo "\t\t\t\t\t<a id=\"logotype\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["game_title"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t<small>";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["game_min_desc"] ?? null) : null), "html", null, true);
            echo "</small>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t<nav>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["home"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<span class=\"ico_home\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["game"] ?? null) : null), "html", null, true);
        echo "<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t";
        // line 57
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Id", [], "any", false, false, false, 57)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("register"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["register"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gamePages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gamepage"]) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("gamepage", ["unique_slug" => twig_get_attribute($this->env, $this->source, $context["gamepage"], "unique_slug", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gamepage"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamepage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playerList"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["playersList"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["leaders"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("leader"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["leader_environment"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["community"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 87
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["discord_link"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["discord"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["forum_link"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["forum"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 93
        echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["twitter_link"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["twitter"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 96
        echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["facebook_link"] ?? null) : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["facebook"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["shop"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["shop_cat_all"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 1]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["shop_cat_items"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 2]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["lang"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["shop_cat_usable"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 3]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["lang"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["shop_cat_money"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 4]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["shop_cat_spells"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 5]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["shop_cat_events"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list-cat", ["cat" => 6]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["shop_cat_bags"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t";
        // line 128
        echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["encyclopedia"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["wikiPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["wikipage"]) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("wikipage", ["unique_slug" => twig_get_attribute($this->env, $this->source, $context["wikipage"], "unique_slug", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wikipage"], "name", [], "any", false, false, false, 133), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wikipage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 138
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Id", [], "any", false, false, false, 138)) {
            // line 139
            echo "\t\t\t\t\t\t\t<li class=\"sub\">
\t\t\t\t\t\t\t\t";
            // line 140
            echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["lang"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["profil"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t(";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Name", [], "any", false, false, false, 141), "html", null, true);
            echo ")
\t\t\t\t\t\t\t\t<span class=\"ico_caret-down\"></span>
\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("my_account"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["lang"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["account_settings"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["lang"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["disconnect"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t\t</nav>
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<a data-nav=\"no\" class=\"link menu\">
\t\t\t\t\t\t\t<div class=\"ico_navicon\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 158
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Id", [], "any", false, false, false, 158)) {
            // line 159
            echo "\t\t\t\t\t\t\t<a href=\"#LoginWnd\" rel=\"modal:open\" class=\"link\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["lang"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["login_panel_login"] ?? null) : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"ico_lock\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("register"), "html", null, true);
            echo "\" class=\"link\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["lang"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["login_panel_register"] ?? null) : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"ico_user-plus\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t";
        // line 170
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Id", [], "any", false, false, false, 170)) {
            // line 171
            echo "\t\t\t\t<div id=\"LoginWnd\" class=\"modal\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t<div class=\"ico_lock\"></div>
\t\t\t\t\t\t";
            // line 174
            echo twig_escape_filter($this->env, (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["lang"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["login_to_site"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<ul id=\"breadcrump\">
\t\t\t\t\t\t<li>";
            // line 177
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["lang"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["login_to_site_desc"] ?? null) : null);
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"middle\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<label for=\"formuser\">
\t\t\t\t\t\t\t\t\t<span>*</span>
\t\t\t\t\t\t\t\t\t";
            // line 184
            echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["lang"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["login_account"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"formuser\" value=\"\">
\t\t\t\t\t\t\t\t<label for=\"formpass\">
\t\t\t\t\t\t\t\t\t<span>*</span>
\t\t\t\t\t\t\t\t\t";
            // line 190
            echo twig_escape_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["lang"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["login_password"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t:
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"formpass\" value=\"\">
\t\t\t\t\t\t\t\t<button name=\"connection\" type=\"sumbit\">";
            // line 194
            echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["lang"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["login_log_me"] ?? null) : null), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 200
        echo "
\t\t\t<div class=\"ct\">
\t\t\t\t<a id=\"logo\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["lang"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["home"] ?? null) : null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "img/logotype.png\"/></a>
\t\t\t\t<main>

\t\t\t\t\t<div id=\"content\"> ";
        // line 205
        $this->displayBlock('content', $context, $blocks);
        // line 206
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<aside>
\t\t\t\t\t\t\t";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["server_infos"] ?? null), "uptime", [], "any", false, false, false, 208)) {
            // line 209
            echo "\t\t\t\t\t\t\t\t<a class=\"butt serverOnline\">
\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 211
            echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["lang"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["menu_server_state"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small>";
            // line 212
            echo twig_escape_filter($this->env, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["lang"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["menu_server_online"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t(";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server_infos"] ?? null), "onlineCount", [], "any", false, false, false, 213), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 214
            echo twig_escape_filter($this->env, (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["lang"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["menu_server_player"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 215
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["server_infos"] ?? null), "onlineCount", [], "any", false, false, false, 215), 1)) {
                echo "s
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo ")</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        } else {
            // line 219
            echo "\t\t\t\t\t\t\t\t<a class=\"butt serverOffline\">
\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 221
            echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["lang"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["menu_server_state"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small>";
            // line 222
            echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["lang"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["menu_server_offline"] ?? null) : null), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "isAdmin", [], "any", false, false, false, 225) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "isAdmin", [], "any", false, false, false, 225), 1))) {
            // line 226
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-home"), "html", null, true);
            echo "\" class=\"butt ladder\">
\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 228
            echo twig_escape_filter($this->env, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["lang"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["menu_administration_title"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small>";
            // line 229
            echo twig_escape_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["lang"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["menu_administration_desc"] ?? null) : null), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 232
        echo "\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Id", [], "any", false, false, false, 232)) {
            // line 233
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("my_account"), "html", null, true);
            echo "\" class=\"butt joins\">
\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user_Name", [], "any", false, false, false, 235), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small>";
            // line 236
            echo twig_escape_filter($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["lang"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["menu_my_profile"] ?? null) : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t- (";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "points", [], "any", false, false, false, 237), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 238
            echo twig_escape_filter($this->env, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["lang"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["points"] ?? null) : null), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["cms_settings"] ?? null), "use_right_community_button", [], "any", false, false, false, 241), "true")) {
            // line 242
            echo "\t\t\t\t\t\t\t\t";
            if (0 === twig_compare( !(($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["lang"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["forum_link"] ?? null) : null), "")) {
                // line 243
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["lang"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["forum_link"] ?? null) : null), "html", null, true);
                echo "\" class=\"butt forum\">
\t\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t\t";
                // line 245
                echo twig_escape_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["lang"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["forum"] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<small>";
                // line 246
                echo twig_escape_filter($this->env, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["lang"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["discuss_with_players"] ?? null) : null), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t\t\t\t";
            if (0 === twig_compare( !(($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["lang"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["discord_link"] ?? null) : null), "")) {
                // line 250
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["lang"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["discord_link"] ?? null) : null), "html", null, true);
                echo "\" class=\"butt discord\">
\t\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t\t";
                // line 252
                echo twig_escape_filter($this->env, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["lang"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["discord"] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<small>";
                // line 253
                echo twig_escape_filter($this->env, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["lang"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["discuss_with_players"] ?? null) : null), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t\t\t\t";
            if (0 === twig_compare( !(($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["lang"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["facebook_link"] ?? null) : null), "")) {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["lang"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["facebook_link"] ?? null) : null), "html", null, true);
                echo "\" class=\"butt facebook\">
\t\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t\t";
                // line 259
                echo twig_escape_filter($this->env, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["lang"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["facebook"] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<small>";
                // line 260
                echo twig_escape_filter($this->env, (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["lang"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["follow_us_on_facebook"] ?? null) : null), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 263
            echo "\t\t\t\t\t\t\t\t";
            if (0 === twig_compare( !(($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["lang"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["twitter_link"] ?? null) : null), "")) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["lang"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["twitter_link"] ?? null) : null), "html", null, true);
                echo "\" class=\"butt twitter\">
\t\t\t\t\t\t\t\t\t\t<span class=\"illu\"></span>
\t\t\t\t\t\t\t\t\t\t";
                // line 266
                echo twig_escape_filter($this->env, (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["lang"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["twitter"] ?? null) : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t<small>";
                // line 267
                echo twig_escape_filter($this->env, (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["lang"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["follow_us_on_twitter"] ?? null) : null), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 270
            echo "\t\t\t\t\t\t\t";
        }
        // line 271
        echo "\t\t\t\t\t\t</aside>
\t\t\t\t\t</main>
\t\t\t\t\t<footer>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<strong>";
        // line 275
        echo twig_escape_filter($this->env, (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["lang"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["game_title"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t© 2020</strong>.
\t\t\t\t\t\t\t";
        // line 277
        echo twig_escape_filter($this->env, (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["lang"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["all_rights_reserved"] ?? null) : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        // line 279
        echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["lang"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["graphic_concept_by"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        // line 281
        echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["lang"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["developped_by"] ?? null) : null);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</footer>
\t\t\t\t</div>

\t\t\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "js/interface.js\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "js/StackModal.min.js\"></script>
\t\t\t\t";
        // line 289
        $this->displayBlock('footerjs', $context, $blocks);
        // line 290
        echo "\t\t\t</body>
\t\t</body>
\t</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t<!-- Primary Meta Tags -->
\t\t<meta name=\"title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["lang"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["game_title"] ?? null) : null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["lang"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["game_min_desc"] ?? null) : null), "html", null, true);
        echo "\">
\t\t<meta name=\"description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">

\t\t<!-- Open Graph / Facebook -->
\t\t<meta property=\"og:type\" content=\"website\">
\t\t<meta property=\"og:url\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t\t<meta property=\"og:title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["lang"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["game_title"] ?? null) : null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["lang"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["game_min_desc"] ?? null) : null), "html", null, true);
        echo "\">
\t\t<meta property=\"og:description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">
\t\t<meta property=\"og:image\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/seo/seo.png\">

\t\t<!-- Twitter -->
\t\t<meta property=\"twitter:card\" content=\"summary_large_image\">
\t\t<meta property=\"twitter:url\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t\t<meta property=\"twitter:title\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["lang"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["game_title"] ?? null) : null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["lang"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["game_min_desc"] ?? null) : null), "html", null, true);
        echo "\">
\t\t<meta property=\"twitter:description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">
\t\t<meta property=\"twitter:image\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/seo/seo.png\">
";
    }

    // line 205
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 289
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  742 => 289,  736 => 205,  730 => 32,  723 => 30,  719 => 29,  712 => 25,  705 => 23,  701 => 22,  691 => 17,  688 => 16,  684 => 15,  678 => 7,  671 => 290,  669 => 289,  665 => 288,  661 => 287,  652 => 281,  647 => 279,  642 => 277,  637 => 275,  631 => 271,  628 => 270,  622 => 267,  618 => 266,  612 => 264,  609 => 263,  603 => 260,  599 => 259,  593 => 257,  590 => 256,  584 => 253,  580 => 252,  574 => 250,  571 => 249,  565 => 246,  561 => 245,  555 => 243,  552 => 242,  549 => 241,  543 => 238,  539 => 237,  535 => 236,  531 => 235,  525 => 233,  522 => 232,  516 => 229,  512 => 228,  506 => 226,  503 => 225,  497 => 222,  493 => 221,  489 => 219,  484 => 216,  479 => 215,  475 => 214,  471 => 213,  467 => 212,  463 => 211,  459 => 209,  457 => 208,  453 => 206,  451 => 205,  441 => 202,  437 => 200,  428 => 194,  421 => 190,  412 => 184,  405 => 180,  399 => 177,  393 => 174,  388 => 171,  386 => 170,  380 => 166,  371 => 162,  364 => 159,  362 => 158,  355 => 153,  345 => 148,  337 => 145,  330 => 141,  326 => 140,  323 => 139,  321 => 138,  317 => 136,  306 => 133,  303 => 132,  299 => 131,  293 => 128,  283 => 123,  275 => 120,  267 => 117,  259 => 114,  251 => 111,  243 => 108,  235 => 105,  228 => 101,  218 => 96,  210 => 93,  202 => 90,  194 => 87,  187 => 83,  177 => 78,  170 => 74,  159 => 68,  156 => 67,  145 => 64,  142 => 63,  137 => 62,  129 => 59,  126 => 58,  124 => 57,  119 => 55,  109 => 50,  104 => 47,  98 => 44,  94 => 43,  89 => 42,  87 => 41,  78 => 34,  76 => 15,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "html.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\html.twig");
    }
}
