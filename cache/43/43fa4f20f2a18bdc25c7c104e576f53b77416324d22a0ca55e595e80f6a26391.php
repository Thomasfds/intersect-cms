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

/* playersList/table.twig */
class __TwigTemplate_59ca6080ca749beaee69d1da031c971488ddf10e5f2bcf664fa6bc0de6bc3282 extends Template
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
        echo "<table class=\"table ladder\">
\t<thead>
\t\t<tr>
\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["lang"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["leader_player_name"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t<th class=\"c\">";
        // line 5
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["lang"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["leader_player_level"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t\t<th class=\"r\">";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["lang"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["leader_player_exp"] ?? null) : null), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joueurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 11
            echo "\t\t\t

\t\t\t<tr>
\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"c\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "level", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"r\">
\t\t\t\t\t<b>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "exp", [], "any", false, false, false, 17), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "expNext", [], "any", false, false, false, 17), "html", null, true);
            echo "</b>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</tbody>
</table>


<nav aria-label=\"Page navigation example\">
\t<ul class=\"pagination\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["max"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "\t\t\t<li class=\"page-item  ";
            if (0 === twig_compare(($context["page_actuel"] ?? null), $context["i"])) {
                echo "active";
            }
            echo "\">
\t\t\t\t<a class=\"page-link\">";
            // line 29
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "playersList/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  106 => 29,  99 => 28,  95 => 27,  87 => 21,  75 => 17,  70 => 15,  66 => 14,  61 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "playersList/table.twig", "D:\\laragon\\www\\intersectcms\\application\\templates\\Britania\\playersList\\table.twig");
    }
}
