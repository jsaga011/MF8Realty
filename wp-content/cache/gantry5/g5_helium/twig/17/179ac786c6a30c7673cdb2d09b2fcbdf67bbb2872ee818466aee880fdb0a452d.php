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

/* single.html.twig */
class __TwigTemplate_77727aacb8c2f245ce076497339811344ae12836ed75856f59d6934a4148a4d9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["twigTemplate"] = "single.html.twig";
        // line 3
        $context["scope"] = "single";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"content-wrapper\">
            <section class=\"entry\">

                ";
        // line 11
        $this->loadTemplate([0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/content.html.twig"], "single.html.twig", 11)->display($context);
        // line 12
        echo "
            </section>
        </div> <!-- /content-wrapper -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "single.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/views/single.html.twig");
    }
}
