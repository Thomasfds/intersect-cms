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

/* leader.twig */
class __TwigTemplate_28b513051c77e7d325a36d81ccd7c5dae50792d8192255991580cbf49ea582b9 extends Template
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
        $this->parent = $this->loadTemplate("html.twig", "leader.twig", 1);
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
\t<meta
\tname=\"description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">

\t<!-- Open Graph / Facebook -->
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">
\t<meta
\tproperty=\"og:image\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/seo/seo.png\">

\t<!-- Twitter -->
\t<meta property=\"twitter:card\" content=\"summary_large_image\">
\t<meta property=\"twitter:url\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["current_url"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"twitter:title\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "\">
\t<meta property=\"twitter:description\" content=\"DragonBallZ: Shukuteki, jeu retrancant l'histoire originale de l'animé en jeu MMORPG 2D, le jeu n'attend plus que vous !\">
\t<meta property=\"twitter:image\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["globalAssetsPath"] ?? null), "html", null, true);
        echo "/seo/seo.png\">
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "\t<h1>";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["leaders"] ?? null) : null), "html", null, true);
        echo "</h1>
\t<ul id=\"breadcrump\">
\t\t<li>
\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["home"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t</li>
\t\t<li>";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["leaders"] ?? null) : null), "html", null, true);
        echo "</li>
\t</ul>

\t<div id=\"middle\">

\t\t<h2>";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["lang"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["leader_pve_title"] ?? null) : null), "html", null, true);
        echo "</h2>
\t\t<table class=\"ladder\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"50px\" class=\"c\">#</th>
\t\t\t\t\t<th>";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["lang"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["leader_player_name"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"c\">";
        // line 46
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["lang"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["leader_player_level"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"r\">";
        // line 47
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["lang"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["leader_player_exp"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 52
            echo "\t\t\t\t\t";
            $context["position"] = (($context["position"] ?? null) + 1);
            // line 53
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"c\">
\t\t\t\t\t\t\t<span class=\"rang\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"c\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "level", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"c\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "exp", [], "any", false, false, false, 59), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "expNext", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "                        <div class=\"alert alert-info\">
                            Aucune information disponible.
                        </div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "leader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  191 => 62,  181 => 59,  177 => 58,  173 => 57,  168 => 55,  164 => 53,  161 => 52,  156 => 51,  149 => 47,  145 => 46,  141 => 45,  133 => 40,  125 => 35,  118 => 33,  111 => 30,  107 => 29,  101 => 26,  96 => 24,  92 => 23,  85 => 19,  79 => 16,  75 => 15,  66 => 9,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "leader.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\leader.twig");
    }
}
