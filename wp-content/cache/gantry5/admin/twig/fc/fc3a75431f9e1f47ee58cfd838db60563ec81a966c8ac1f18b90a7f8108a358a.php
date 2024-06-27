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

/* @gantry-admin/ajax/confirm-deletion.html.twig */
class __TwigTemplate_f6e7bf4b853b0135443f33b1896a5800cbd40da25d7799da3d680379e9150e00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'message' => [$this, 'block_message'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"card settings-block\">
    <h4 id=\"g-modal-labelledby\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter(("GANTRY5_PLATFORM_DELETE_" . ($context["page_type"] ?? null))), "html", null, true);
        echo "</h4>
    <div class=\"inner-params\" id=\"g-modal-describedby\">
        ";
        // line 4
        $this->displayBlock('message', $context, $blocks);
        // line 7
        echo "    </div>
</div>

<div class=\"g-modal-actions\">
    <button tabindex=\"0\" class=\"button button-primary\" role=\"button\" aria-label=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONFIRM"), "html", null, true);
        echo "\" data-g-delete-confirm=\"\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CONFIRM"), "html", null, true);
        echo "
    </button>
    <button tabindex=\"0\" class=\"button g5-dialog-close\" role=\"button\" aria-label=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "\" data-g-delete-cancel=\"\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "
    </button>
</div>
";
    }

    // line 4
    public function block_message($context, array $blocks = [])
    {
        // line 5
        echo "        ";
        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter((("GANTRY5_PLATFORM_DELETE_" . ($context["page_type"] ?? null)) . "_DESC"), ($context["outline"] ?? null));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/confirm-deletion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  68 => 4,  60 => 15,  56 => 14,  51 => 12,  47 => 11,  41 => 7,  39 => 4,  34 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/ajax/confirm-deletion.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/admin/templates/ajax/confirm-deletion.html.twig");
    }
}
