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

/* @gantry-admin/pages/configurations/confirm-deletion.html.twig */
class __TwigTemplate_3b824592633e098c1675075deb6045d769dcf05f67848328a05ff34836f7d7af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'message' => [$this, 'block_message'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@gantry-admin/ajax/confirm-deletion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@gantry-admin/ajax/confirm-deletion.html.twig", "@gantry-admin/pages/configurations/confirm-deletion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_message($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($context["inherited"] ?? null)) {
            // line 5
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_INHERIT_X", (("<strong>" . ($context["outline"] ?? null)) . "</strong>"));
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_INHERIT_DESC"), "html", null, true);
            echo "
        <ul>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inherited"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("message", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/confirm-deletion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  75 => 15,  70 => 12,  61 => 10,  57 => 9,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/configurations/confirm-deletion.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/admin/templates/pages/configurations/confirm-deletion.html.twig");
    }
}
