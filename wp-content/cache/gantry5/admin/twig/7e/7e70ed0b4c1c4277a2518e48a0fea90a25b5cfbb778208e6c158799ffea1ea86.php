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

/* forms/fields/input/imagepicker.html.twig */
class __TwigTemplate_2d45776a6a0ac7d8c585e79d1527cbf3bc331ebc2089016f081dec57bb4d7dd6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/input/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/input/filepicker.html.twig", "forms/fields/input/imagepicker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["field"] = twig_array_merge(["icon" => "fa-file-image", "filter" => ".(jpe?g|gif|png|svg|webp)\$"], ($context["field"] ?? null));
        // line 5
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/imagepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/input/imagepicker.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/admin/templates/forms/fields/input/imagepicker.html.twig");
    }
}
