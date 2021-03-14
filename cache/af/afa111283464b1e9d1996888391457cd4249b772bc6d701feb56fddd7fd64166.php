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

/* playersList/players.twig */
class __TwigTemplate_31a5801769466bd46c73497e6ab6b3d21ab6d813956bbebf340ca4815a4121af extends Template
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
        $this->parent = $this->loadTemplate("html.twig", "playersList/players.twig", 1);
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
        echo "\t<h1>";
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["playersList"] ?? null) : null), "html", null, true);
        echo "</h1>
\t<ul id=\"breadcrump\">
\t\t<li>
\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["home"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t</li>
\t\t<li>";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["playersList"] ?? null) : null), "html", null, true);
        echo "</li>
\t</ul>

\t<div id=\"middle\">
\t\t<ul class=\"nav nav-tabs card-header-tabs mb-2\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<button id=\"all\" class=\"nav-link active\" aria-current=\"true\" href=\"#!\">Tout les joueurs</button>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<button id=\"online\" class=\"nav-link\" href=\"#!\">Joueurs en ligne</button>
\t\t\t</li>
\t\t</ul>

\t\t<div id=\"content-page\"></div>

\t</div>
";
    }

    // line 49
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["assetsPath"] ?? null), "html", null, true);
        echo "js/players.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "playersList/players.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  147 => 49,  126 => 31,  119 => 29,  112 => 26,  108 => 25,  100 => 22,  95 => 20,  91 => 19,  82 => 15,  78 => 14,  74 => 13,  67 => 9,  64 => 8,  60 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "playersList/players.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\playersList\\players.twig");
    }
}
