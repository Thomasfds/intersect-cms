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

/* admin-shop.twig */
class __TwigTemplate_f71513da6a1ddea7610ce0fc77838e0d9c4391b021609156b234455b83d9242c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'footerjs' => [$this, 'block_footerjs'],
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
        $this->parent = $this->loadTemplate("html.twig", "admin-shop.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Administration</h1>
<ul id=\"breadcrump\">
  <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["home"] ?? null) : null), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["administration_title"] ?? null) : null), "html", null, true);
        echo "</a></li>
  <li>";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["administration_shop_title"] ?? null) : null), "html", null, true);
        echo "</li>
</ul>

<div id=\"middle\">
  ";
        // line 12
        if (0 !== twig_compare(($context["newsEdit"] ?? null), null)) {
            // line 13
            echo "    <h2>";
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["administration_edit_shop_title"] ?? null) : null), "html", null, true);
            echo "</h2>
  ";
        } else {
            // line 15
            echo "    <h2>";
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["administration_add_shop_title"] ?? null) : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 17
        echo "
    <center>
      <form method=\"post\">
      <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "gamedata/items/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "itemData", [], "any", false, false, false, 20), "Icon", [], "any", false, false, false, 20), "html", null, true);
        echo "\" style=\"width: 50px;height: 50px;float: left;\"></img>
      <input name =\"iName\" type=\"text\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["administration_shop_title_placeholder"] ?? null) : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "itemData", [], "any", false, false, false, 21), "Name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" disabled></input>
      <input name =\"iQuantity\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["administration_shop_quantity_placeholder"] ?? null) : null), "html", null, true);
        echo "\" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "Quantity", [], "any", false, false, false, 22), "html", null, true);
        echo "\"></input>
      <input name =\"iId\" type=\"text\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["administration_shop_id_placeholder"] ?? null) : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "id_item", [], "any", false, false, false, 23), "html", null, true);
        echo "\"></input>
      <input name =\"iPrice\" type=\"text\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["administration_shop_price_placeholder"] ?? null) : null), "html", null, true);
        echo "\" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "Price", [], "any", false, false, false, 24), "html", null, true);
        echo "\"></input>
      <input name =\"iPromo\" type=\"text\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["administration_shop_promo_placeholder"] ?? null) : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "Promotion", [], "any", false, false, false, 25), "html", null, true);
        echo "\"></input>
      <select name=\"iVisible\">
            <option value=\"1\" ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "Visible", [], "any", false, false, false, 27), 1)) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["lang"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["administration_shop_visible_yes"] ?? null) : null), "html", null, true);
        echo "</option>
            <option value=\"0\" ";
        // line 28
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "Visible", [], "any", false, false, false, 28), 0)) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["lang"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["administration_shop_visible_no"] ?? null) : null), "html", null, true);
        echo "</option>
      </select>
      <textarea name =\"iContent\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "baseDesc", [], "any", false, false, false, 30), "html", null, true);
        echo "\" style=\"height:200px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopEdit"] ?? null), "cDesc", [], "any", false, false, false, 30), "html", null, true);
        echo "</textarea>
      <br />
      <button style=\"padding: 15px 90px!important;\" class=\"customBTN\" type=\"sumbit\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["lang"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["button_submit_title"] ?? null) : null), "html", null, true);
        echo "</button>
      </form>
    </center>

    <h2>";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["lang"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["administration_shop_list_title"] ?? null) : null), "html", null, true);
        echo "</h2>
    <table class=\"ladder\">
        <thead>
            <tr>
                <th class=\"c\">";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["lang"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["administration_shop_column_title"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 41
        echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["lang"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["administration_shop_column_description"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["lang"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["administration_shop_column_image"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 43
        echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["lang"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["administration_shop_column_price"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 44
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["lang"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["administration_shop_column_quantity"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["lang"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["administration_shop_column_promotion"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["lang"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["administration_shop_column_visible"] ?? null) : null), "html", null, true);
        echo "</th>
                <th class=\"c\">";
        // line 47
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["lang"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["administration_shop_column_options"] ?? null) : null), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "          <tr>
          <td class=\"c\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 53), "Name", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
          <td class=\"c\">";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["item"], "Desc", [], "any", false, false, false, 54);
            echo "</td>
          <td class=\"c\"><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
            echo "gamedata/items/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 55), "Icon", [], "any", false, false, false, 55), "html", null, true);
            echo "\" style=\"width: 25px;height: 25px;\"></img></td>
          <td class=\"c\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Price", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
          <td class=\"c\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Quantity", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
          <td class=\"c\">-";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Promotion", [], "any", false, false, false, 58), "html", null, true);
            echo "%</td>
          <td class=\"c\">";
            // line 59
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "Visible", [], "any", false, false, false, 59), 1)) {
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["lang"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["administration_shop_visible_yes"] ?? null) : null), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["lang"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["administration_shop_visible_no"] ?? null) : null), "html", null, true);
                echo " ";
            }
            echo "</td>
          <td class=\"c\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-edit-shop", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["lang"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["administration_item_options_edit"] ?? null) : null), "html", null, true);
            echo "</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin-delete-shop", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["lang"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["administration_item_options_delete"] ?? null) : null), "html", null, true);
            echo "</a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
      </table>
</div>
";
    }

    // line 68
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "<script
    type=\"text/javascript\"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy=\"origin\">
  </script>
  <script type=\"text/javascript\">
  tinymce.init({
    selector:'textarea',
    language: '";
        // line 77
        echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["lang"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["administration_tinymce_lang"] ?? null) : null), "html", null, true);
        echo "',
    plugins: [
      'advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help autoresize autosave'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | restoredraft help',
    menu: {
      favs: {title: '";
        // line 87
        echo twig_escape_filter($this->env, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["lang"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["administration_tinymce_fav"] ?? null) : null), "html", null, true);
        echo "', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
    },
    a11y_advanced_options: true,
    image_advtab: true,
    image_title: true,
    autoresize_bottom_margin: 50,
    autosave_ask_before_unload: false,
    style_formats: [
      {title: 'Image Left', selector: 'img', styles: {
        'float' : 'left',
        'margin': '0 10px 0 10px'
      }},
      {title: 'Image Right', selector: 'img', styles: {
        'float' : 'right',
        'margin': '0 10px 0 10px'
      }}
    ],
    menubar: 'favs file edit view insert format tools table help'
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "admin-shop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 87,  284 => 77,  274 => 69,  270 => 68,  263 => 63,  248 => 60,  236 => 59,  232 => 58,  228 => 57,  224 => 56,  218 => 55,  214 => 54,  210 => 53,  207 => 52,  203 => 51,  196 => 47,  192 => 46,  188 => 45,  184 => 44,  180 => 43,  176 => 42,  172 => 41,  168 => 40,  161 => 36,  154 => 32,  147 => 30,  138 => 28,  130 => 27,  123 => 25,  117 => 24,  111 => 23,  105 => 22,  99 => 21,  93 => 20,  88 => 17,  82 => 15,  76 => 13,  74 => 12,  67 => 8,  61 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin-shop.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\admin-shop.twig");
    }
}
