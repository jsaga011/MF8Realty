<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/gantry/atoms.html.twig */
class __TwigTemplate_81a3c4c79bb6312b95666a39d442fef3f0905413c46731da5a0a86d4fec15f59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/gantry/atoms.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["outline"] = (($this->getAttribute(($context["field"] ?? null), "outline", [])) ? ($this->getAttribute(($context["field"] ?? null), "outline", [])) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "outline_field", [])))));
        // line 4
        $context["atoms"] = (($this->getAttribute(($context["field"] ?? null), "atoms", [])) ? ($this->getAttribute(($context["field"] ?? null), "atoms", [])) : (((($context["outline"] ?? null)) ? ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "outlines", []), "getAtomInstances", [0 => ($context["outline"] ?? null), 1 => $this->getAttribute(($context["field"] ?? null), "atom", []), 2 => false], "method")) : ([]))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_label($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("label", $context, $blocks);
        echo "
    <div><span class=\"particle-label-subtype badge\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "atom", []), "html", null, true);
        echo "</span></div>
";
    }

    // line 11
    public function block_input($context, array $blocks = [])
    {
        // line 12
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []), "html", null, true);
        echo "\">
        ";
        // line 13
        if (($context["atoms"] ?? null)) {
            // line 14
            echo "            <div class=\"input-group\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["atoms"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["atom"]) {
                // line 16
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), (($context["scope"] ?? null) . ($context["name"] ?? null)))) : ((($context["scope"] ?? null) . ($context["name"] ?? null)))) . "-") . $this->getAttribute($context["atom"], "id", [])), "html", null, true);
                echo "\">
                        <input
                                id=\"";
                // line 18
                echo twig_escape_filter($this->env, (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), (($context["scope"] ?? null) . ($context["name"] ?? null)))) : ((($context["scope"] ?? null) . ($context["name"] ?? null)))) . "-") . $this->getAttribute($context["atom"], "id", [])), "html", null, true);
                echo "\"
                                type=\"radio\"
                                name=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["name"] ?? null))), "html", null, true);
                echo "\"
                                value=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["atom"], "id", []), "html", null, true);
                echo "\"
                                required=\"required\"
                                ";
                // line 23
                if ((($context["value"] ?? null) == $this->getAttribute($context["atom"], "id", []))) {
                    echo "checked=\"checked\"";
                }
                // line 24
                echo "                        />
                        <span>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["atom"], "title", []), "html", null, true);
                echo "</span>
                        <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                    </label>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
        ";
        } else {
            // line 31
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_NO_INHERITANCE_SELECT_OUTLINE"), "html", null, true);
            echo "
        ";
        }
        // line 33
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/atoms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  116 => 31,  112 => 29,  102 => 25,  99 => 24,  95 => 23,  90 => 21,  86 => 20,  81 => 18,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  61 => 12,  58 => 11,  52 => 8,  47 => 7,  44 => 6,  40 => 1,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/gantry/atoms.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/admin/templates/forms/fields/gantry/atoms.html.twig");
    }
}
