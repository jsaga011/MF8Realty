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

/* @nucleus/content/spacer.html.twig */
class __TwigTemplate_5d7acf69712dbc45afd4a63a82f530e63e5c6e7e0b5b578c1e7a9c9ec109b4f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !($context["particle"] ?? null)) {
            // line 2
            echo "    ";
            $context["enabled"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("particles." . $this->getAttribute(($context["segment"] ?? null), "type", [])) . ".enabled"), 1 => 1], "method");
            // line 3
            echo "    ";
            $context["spacer"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "getJoined", [0 => ("particles." . $this->getAttribute(($context["segment"] ?? null), "type", [])), 1 => $this->getAttribute(($context["segment"] ?? null), "attributes", [])], "method");
        }
        // line 5
        echo "
";
        // line 6
        if ((($context["enabled"] ?? null) && ((null === $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "enabled", [])) || $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", []), "enabled", [])))) {
            // line 7
            echo "    <div class=\"spacer";
            (($this->getAttribute(($context["segment"] ?? null), "classes", [])) ? (print (twig_escape_filter($this->env, (" " . twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["segment"] ?? null), "classes", []), " "))), "html", null, true))) : (print ("")));
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/content/spacer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  42 => 6,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/content/spacer.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/engines/nucleus/templates/content/spacer.html.twig");
    }
}
