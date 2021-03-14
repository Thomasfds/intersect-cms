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

/* shop-list.twig */
class __TwigTemplate_8e0c662c51019c71276fb22b74307726431545f902538df6b42ae7827c68d333 extends Template
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
        $this->parent = $this->loadTemplate("html.twig", "shop-list.twig", 1);
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
  <li>";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["shop"] ?? null) : null), "html", null, true);
        echo "</li>
</ul>

<div id=\"shop\">

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "  <article>
    <div class=\"header\" style=\"height: 60px;\">
      <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
            echo "gamedata/items/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 15), "Icon", [], "any", false, false, false, 15), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px;margin: 5px 10px 0px 5px;float: left;\"></img>
      <br /><b style=\"text-transform: uppercase;color: #2e3a4e;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 20px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 800;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 16), "Name", [], "any", false, false, false, 16), "html", null, true);
            echo "</b> ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "Quantity", [], "any", false, false, false, 16), 1)) {
                echo " <span style=\"color: #2e3a4e;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 20px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 800;\">(x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Quantity", [], "any", false, false, false, 16), "html", null, true);
                echo ")</span>";
            }
            echo " ";
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "Promotion", [], "any", false, false, false, 16), 0)) {
                echo " <span style=\"color: #e02020;text-shadow: 0 1px 3px rgba(0,0,0,.15);font-size: 16px;font-family: 'Montserrat', 'proxima-nova_bold', Helvetica, Arial, sans-serif;font-weight: 500;\">-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Promotion", [], "any", false, false, false, 16), "html", null, true);
                echo "%</span>";
            }
            // line 17
            echo "    </div>
    <p style=\"height: auto;\"><b>";
            // line 18
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 1)) {
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["shop_cat_items"] ?? null) : null), "html", null, true);
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 2)) {
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["shop_cat_usable"] ?? null) : null), "html", null, true);
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 3)) {
                echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["shop_cat_money"] ?? null) : null), "html", null, true);
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 4)) {
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["shop_cat_spells"] ?? null) : null), "html", null, true);
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 5)) {
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["lang"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["shop_cat_events"] ?? null) : null), "html", null, true);
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "itemData", [], "any", false, false, false, 18), "ItemType", [], "any", false, false, false, 18), 6)) {
                echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["lang"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["shop_cat_bags"] ?? null) : null), "html", null, true);
            }
            echo "</b><br /><br />
    ";
            // line 19
            ((1 === twig_compare(twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "Desc", [], "any", false, false, false, 19))), 380)) ? (print (twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "Desc", [], "any", false, false, false, 19)), 0, 380) . "..."), "html", null, true))) : (print (strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "Desc", [], "any", false, false, false, 19)))));
            echo "
  </p>
    <div class=\"footer\">
      <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Price", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["lang"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["points"] ?? null) : null), "html", null, true);
            echo "</strong>
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("shop-detail", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
            echo "img/i_basket.png\" width=\"25px\"/></a>
    </div>
  </article>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "shop-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 27,  129 => 23,  123 => 22,  117 => 19,  101 => 18,  98 => 17,  84 => 16,  78 => 15,  74 => 13,  70 => 12,  62 => 7,  56 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop-list.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\shop-list.twig");
    }
}
