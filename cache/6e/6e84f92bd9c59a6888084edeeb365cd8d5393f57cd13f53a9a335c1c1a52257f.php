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

/* view-itemshop.twig */
class __TwigTemplate_fa7fab211c977f9d50422c7076b6b0a7a9ae098706653c1e35c2792614e37834 extends Template
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
        $this->parent = $this->loadTemplate("html.twig", "view-itemshop.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["shop"] ?? null) : null), "html", null, true);
        echo "</h1>
<ul id=\"breadcrump\">
  <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["home"] ?? null) : null), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-list"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["shop"] ?? null) : null), "html", null, true);
        echo "</a></li>
  <li>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 8), "Name", [], "any", false, false, false, 8), "html", null, true);
        echo "</li>
</ul>
<div id=\"news\" class=\"read\">
    <article>
        <div class=\"header\" style=\"background-image:url('";
        // line 12
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "gamedata/items/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 12), "Icon", [], "any", false, false, false, 12), "html", null, true);
        echo "');width: 50px;height: 50px;margin: 5px 5px 0px 0px;float:right;\"></div>
        <p>
          <b style=\"text-transform: uppercase;color: #213961;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 20px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 800;\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 14), "Name", [], "any", false, false, false, 14), "html", null, true);
        echo "</b> ";
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Quantity", [], "any", false, false, false, 14), 1)) {
            echo "<span style=\"color: #2e3a4e;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 20px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 800;\">(x";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Quantity", [], "any", false, false, false, 14), "html", null, true);
            echo ")</span>";
        }
        echo " ";
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Promotion", [], "any", false, false, false, 14), 0)) {
            echo " <span style=\"color: #e02020;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 16px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 500;\">-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Promotion", [], "any", false, false, false, 14), "html", null, true);
            echo "%</span>";
        }
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Price", [], "any", false, false, false, 14), "html", null, true);
        echo " points)<br />
        ";
        // line 15
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 1)) {
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["shop_cat_items"] ?? null) : null), "html", null, true);
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 2)) {
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["shop_cat_usable"] ?? null) : null), "html", null, true);
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 3)) {
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["shop_cat_money"] ?? null) : null), "html", null, true);
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 4)) {
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["shop_cat_spells"] ?? null) : null), "html", null, true);
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 5)) {
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["shop_cat_events"] ?? null) : null), "html", null, true);
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 15), "ItemType", [], "any", false, false, false, 15), 6)) {
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["shop_cat_bags"] ?? null) : null), "html", null, true);
        }
        // line 16
        echo "        </p>
        <p>";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Desc", [], "any", false, false, false, 17);
        echo "</p>

        <p>
        ";
        // line 20
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 20), "ItemType", [], "any", false, false, false, 20), 1)) {
            // line 21
            echo "
            ";
            // line 22
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 22), "Damage", [], "any", false, false, false, 22), 0)) {
                // line 23
                echo "              <b>";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["itemstats_weapon_stats_title"] ?? null) : null), "html", null, true);
                echo " :</b><br />
              ";
                // line 24
                echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["itemstats_damages"] ?? null) : null), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 24), "Damage", [], "any", false, false, false, 24), "html", null, true);
                echo "<br />
              ";
                // line 25
                echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["itemstats_damagestype"] ?? null) : null), "html", null, true);
                echo " : ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 25), "DamageType", [], "any", false, false, false, 25), 0)) {
                    echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["itemstats_damagestype_physical"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 25), "DamageType", [], "any", false, false, false, 25), 1)) {
                    echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["itemstats_damagestype_magical"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 25), "DamageType", [], "any", false, false, false, 25), 2)) {
                    echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["itemstats_damagestype_true"] ?? null) : null), "html", null, true);
                }
                echo "<br />
              ";
                // line 26
                echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["itemstats_scalingstat"] ?? null) : null), "html", null, true);
                echo " : ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 26), "ScalingStat", [], "any", false, false, false, 26), 0)) {
                    echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["itemstats_stat_atk"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 26), "ScalingStat", [], "any", false, false, false, 26), 1)) {
                    echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["itemstats_stat_abpwr"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 26), "ScalingStat", [], "any", false, false, false, 26), 2)) {
                    echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["itemstats_stat_def"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 26), "ScalingStat", [], "any", false, false, false, 26), 3)) {
                    echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["itemstats_stat_magres"] ?? null) : null), "html", null, true);
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 26), "ScalingStat", [], "any", false, false, false, 26), 4)) {
                    echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["itemstats_stat_spd"] ?? null) : null), "html", null, true);
                }
                echo "<br />
              ";
                // line 27
                echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["itemstats_scalingamount"] ?? null) : null), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 27), "Scaling", [], "any", false, false, false, 27), "html", null, true);
                echo "%<br /><br />
            ";
            }
            // line 29
            echo "
            ";
            // line 31
            if ((((0 !== twig_compare((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 31), "VitalsGiven", [], "any", false, false, false, 31)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[0] ?? null) : null), 0) || 0 !== twig_compare((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 31), "PercentageVitalsGiven", [], "any", false, false, false, 31)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[0] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 32), "VitalsGiven", [], "any", false, false, false, 32)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[1] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 32), "PercentageVitalsGiven", [], "any", false, false, false, 32)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[1] ?? null) : null), 0))) {
                // line 34
                echo "              <b>";
                echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["itemstats_vitals_title"] ?? null) : null), "html", null, true);
                echo " :</b><br />
              +";
                // line 35
                echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["itemstats_vitals_hp"] ?? null) : null), "html", null, true);
                echo " : ";
                if (0 !== twig_compare((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 35), "VitalsGiven", [], "any", false, false, false, 35)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[0] ?? null) : null), 0)) {
                    echo "+";
                    echo twig_escape_filter($this->env, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 35), "VitalsGiven", [], "any", false, false, false, 35)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[0] ?? null) : null), "html", null, true);
                }
                echo " ";
                if (0 !== twig_compare((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 35), "PercentageVitalsGiven", [], "any", false, false, false, 35)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[0] ?? null) : null), 0)) {
                    echo "+ ";
                    echo twig_escape_filter($this->env, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 35), "PercentageVitalsGiven", [], "any", false, false, false, 35)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[0] ?? null) : null), "html", null, true);
                    echo "%";
                }
                echo "<br />
              +";
                // line 36
                echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["lang"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["itemstats_vitals_mp"] ?? null) : null), "html", null, true);
                echo " : ";
                if (0 !== twig_compare((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 36), "VitalsGiven", [], "any", false, false, false, 36)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[1] ?? null) : null), 0)) {
                    echo "+";
                    echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 36), "VitalsGiven", [], "any", false, false, false, 36)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[1] ?? null) : null), "html", null, true);
                }
                echo " ";
                if (0 !== twig_compare((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 36), "PercentageVitalsGiven", [], "any", false, false, false, 36)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[1] ?? null) : null), 0)) {
                    echo "+ ";
                    echo twig_escape_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 36), "PercentageVitalsGiven", [], "any", false, false, false, 36)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[1] ?? null) : null), "html", null, true);
                    echo "%";
                }
                echo "<br /><br />
            ";
            }
            // line 38
            echo "
            ";
            // line 40
            if ((((((((((0 !== twig_compare((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 40), "StatsGiven", [], "any", false, false, false, 40)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[0] ?? null) : null), 0) || 0 !== twig_compare((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 40), "PercentageStatsGiven", [], "any", false, false, false, 40)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[0] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 41), "StatsGiven", [], "any", false, false, false, 41)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[1] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 41), "PercentageStatsGiven", [], "any", false, false, false, 41)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[1] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 42), "StatsGiven", [], "any", false, false, false, 42)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[2] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 42), "PercentageStatsGiven", [], "any", false, false, false, 42)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[2] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 43
($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 43), "StatsGiven", [], "any", false, false, false, 43)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[3] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 43), "PercentageStatsGiven", [], "any", false, false, false, 43)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[3] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 44), "StatsGiven", [], "any", false, false, false, 44)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[4] ?? null) : null), 0)) || 0 !== twig_compare((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 44), "PercentageStatsGiven", [], "any", false, false, false, 44)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[4] ?? null) : null), 0))) {
                // line 46
                echo "              <b>";
                echo twig_escape_filter($this->env, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["lang"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["itemstats_stats_title"] ?? null) : null), "html", null, true);
                echo " :</b><br />
              ";
                // line 47
                if ((0 !== twig_compare((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 47), "StatsGiven", [], "any", false, false, false, 47)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[0] ?? null) : null), 0) || 0 !== twig_compare((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 47), "PercentageStatsGiven", [], "any", false, false, false, 47)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[0] ?? null) : null), 0))) {
                    // line 48
                    echo "                +";
                    echo twig_escape_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["lang"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["itemstats_stat_atk"] ?? null) : null), "html", null, true);
                    echo " : ";
                    if (0 !== twig_compare((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "StatsGiven", [], "any", false, false, false, 48)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[0] ?? null) : null), 0)) {
                        echo twig_escape_filter($this->env, ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "StatsGiven", [], "any", false, false, false, 48)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[0] ?? null) : null) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "StatGrowth", [], "any", false, false, false, 48)), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "StatsGiven", [], "any", false, false, false, 48)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[0] ?? null) : null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "StatGrowth", [], "any", false, false, false, 48)), "html", null, true);
                    }
                    echo " ";
                    if (0 !== twig_compare((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "PercentageStatsGiven", [], "any", false, false, false, 48)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[0] ?? null) : null), 0)) {
                        echo "+ ";
                        echo twig_escape_filter($this->env, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 48), "PercentageStatsGiven", [], "any", false, false, false, 48)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[0] ?? null) : null), "html", null, true);
                        echo "%";
                    }
                    echo "<br />
              ";
                }
                // line 50
                echo "              ";
                if ((0 !== twig_compare((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 50), "StatsGiven", [], "any", false, false, false, 50)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[1] ?? null) : null), 0) || 0 !== twig_compare((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 50), "PercentageStatsGiven", [], "any", false, false, false, 50)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[1] ?? null) : null), 0))) {
                    // line 51
                    echo "                +";
                    echo twig_escape_filter($this->env, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["lang"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["itemstats_stat_abpwr"] ?? null) : null), "html", null, true);
                    echo " : ";
                    if (0 !== twig_compare((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "StatsGiven", [], "any", false, false, false, 51)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[1] ?? null) : null), 0)) {
                        echo twig_escape_filter($this->env, ((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "StatsGiven", [], "any", false, false, false, 51)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[1] ?? null) : null) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "StatGrowth", [], "any", false, false, false, 51)), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "StatsGiven", [], "any", false, false, false, 51)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[1] ?? null) : null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "StatGrowth", [], "any", false, false, false, 51)), "html", null, true);
                    }
                    echo " ";
                    if (0 !== twig_compare((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "PercentageStatsGiven", [], "any", false, false, false, 51)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[1] ?? null) : null), 0)) {
                        echo "+ ";
                        echo twig_escape_filter($this->env, (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 51), "PercentageStatsGiven", [], "any", false, false, false, 51)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[1] ?? null) : null), "html", null, true);
                        echo "%";
                    }
                    echo "<br />
              ";
                }
                // line 53
                echo "              ";
                if ((0 !== twig_compare((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 53), "StatsGiven", [], "any", false, false, false, 53)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[2] ?? null) : null), 0) || 0 !== twig_compare((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 53), "PercentageStatsGiven", [], "any", false, false, false, 53)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[2] ?? null) : null), 0))) {
                    // line 54
                    echo "                +";
                    echo twig_escape_filter($this->env, (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["lang"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["itemstats_stat_def"] ?? null) : null), "html", null, true);
                    echo " : ";
                    if (0 !== twig_compare((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "StatsGiven", [], "any", false, false, false, 54)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[2] ?? null) : null), 0)) {
                        echo twig_escape_filter($this->env, ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "StatsGiven", [], "any", false, false, false, 54)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[2] ?? null) : null) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "StatGrowth", [], "any", false, false, false, 54)), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "StatsGiven", [], "any", false, false, false, 54)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[2] ?? null) : null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "StatGrowth", [], "any", false, false, false, 54)), "html", null, true);
                    }
                    echo " ";
                    if (0 !== twig_compare((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "PercentageStatsGiven", [], "any", false, false, false, 54)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[2] ?? null) : null), 0)) {
                        echo "+ ";
                        echo twig_escape_filter($this->env, (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 54), "PercentageStatsGiven", [], "any", false, false, false, 54)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[2] ?? null) : null), "html", null, true);
                        echo "%";
                    }
                    echo "<br />
              ";
                }
                // line 56
                echo "              ";
                if ((0 !== twig_compare((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 56), "StatsGiven", [], "any", false, false, false, 56)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[3] ?? null) : null), 0) || 0 !== twig_compare((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 56), "PercentageStatsGiven", [], "any", false, false, false, 56)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[3] ?? null) : null), 0))) {
                    // line 57
                    echo "                +";
                    echo twig_escape_filter($this->env, (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["lang"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["itemstats_stat_magres"] ?? null) : null), "html", null, true);
                    echo " : ";
                    if (0 !== twig_compare((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "StatsGiven", [], "any", false, false, false, 57)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[3] ?? null) : null), 0)) {
                        echo twig_escape_filter($this->env, ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "StatsGiven", [], "any", false, false, false, 57)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[3] ?? null) : null) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "StatGrowth", [], "any", false, false, false, 57)), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "StatsGiven", [], "any", false, false, false, 57)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[3] ?? null) : null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "StatGrowth", [], "any", false, false, false, 57)), "html", null, true);
                    }
                    echo " ";
                    if (0 !== twig_compare((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "PercentageStatsGiven", [], "any", false, false, false, 57)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[3] ?? null) : null), 0)) {
                        echo "+ ";
                        echo twig_escape_filter($this->env, (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 57), "PercentageStatsGiven", [], "any", false, false, false, 57)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[3] ?? null) : null), "html", null, true);
                        echo "%";
                    }
                    echo "<br />
              ";
                }
                // line 59
                echo "              ";
                if ((0 !== twig_compare((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 59), "StatsGiven", [], "any", false, false, false, 59)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[4] ?? null) : null), 0) || 0 !== twig_compare((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 59), "PercentageStatsGiven", [], "any", false, false, false, 59)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[4] ?? null) : null), 0))) {
                    // line 60
                    echo "                +";
                    echo twig_escape_filter($this->env, (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["lang"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["itemstats_stat_spd"] ?? null) : null), "html", null, true);
                    echo " : ";
                    if (0 !== twig_compare((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "StatsGiven", [], "any", false, false, false, 60)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[4] ?? null) : null), 0)) {
                        echo twig_escape_filter($this->env, ((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "StatsGiven", [], "any", false, false, false, 60)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[4] ?? null) : null) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "StatGrowth", [], "any", false, false, false, 60)), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "StatsGiven", [], "any", false, false, false, 60)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[4] ?? null) : null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "StatGrowth", [], "any", false, false, false, 60)), "html", null, true);
                    }
                    echo " ";
                    if (0 !== twig_compare((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "PercentageStatsGiven", [], "any", false, false, false, 60)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[4] ?? null) : null), 0)) {
                        echo "+ ";
                        echo twig_escape_filter($this->env, (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "itemData", [], "any", false, false, false, 60), "PercentageStatsGiven", [], "any", false, false, false, 60)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[4] ?? null) : null), "html", null, true);
                        echo "%";
                    }
                    echo "<br />
              ";
                }
                // line 62
                echo "            ";
            }
            // line 63
            echo "        ";
        }
        // line 64
        echo "        </p>

        <div id=\"middle\">
        <h2>";
        // line 67
        echo twig_escape_filter($this->env, (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["lang"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["shop_select_character_title"] ?? null) : null), "html", null, true);
        echo "</h2>
        <p>";
        // line 68
        echo twig_escape_filter($this->env, (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["lang"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["shop_balance_after_purchase"] ?? null) : null), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "points", [], "any", false, false, false, 68) - twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Price", [], "any", false, false, false, 68)), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "points", [], "any", false, false, false, 68), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itemShop"] ?? null), "Price", [], "any", false, false, false, 68), "html", null, true);
        echo ") ";
        echo twig_escape_filter($this->env, (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["lang"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["points"] ?? null) : null), "html", null, true);
        echo "</p>
        <p>";
        // line 69
        echo twig_escape_filter($this->env, (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["lang"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["shop_postpurchase_message"] ?? null) : null), "html", null, true);
        echo "</p>
        <center>
          <form method=\"post\">
            <select name=\"playerShop\">
              ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["playersAcc"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 74
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Name", [], "any", false, false, false, 74), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["lang"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["shop_select_character_level_tag"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "Level", [], "any", false, false, false, 74), "html", null, true);
            echo ")</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </select>
            <br /><br />
            <button style=\"padding: 15px 90px!important;\" class=\"customBTN\" type=\"sumbit\">";
        // line 78
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["lang"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["shop_buy_button"] ?? null) : null)), "html", null, true);
        echo "</button>
          </form>
        </center>
        </div>
    </article>
    <div class=\"clear\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "view-itemshop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 78,  389 => 76,  374 => 74,  370 => 73,  363 => 69,  351 => 68,  347 => 67,  342 => 64,  339 => 63,  336 => 62,  318 => 60,  315 => 59,  297 => 57,  294 => 56,  276 => 54,  273 => 53,  255 => 51,  252 => 50,  234 => 48,  232 => 47,  227 => 46,  225 => 44,  224 => 43,  223 => 42,  222 => 41,  221 => 40,  218 => 38,  202 => 36,  187 => 35,  182 => 34,  180 => 32,  179 => 31,  176 => 29,  169 => 27,  153 => 26,  141 => 25,  135 => 24,  130 => 23,  128 => 22,  125 => 21,  123 => 20,  117 => 17,  114 => 16,  100 => 15,  82 => 14,  75 => 12,  68 => 8,  62 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "view-itemshop.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\view-itemshop.twig");
    }
}
