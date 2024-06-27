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

/* index.html.twig */
class __TwigTemplate_8ebd3940704751a934e94b687ea2633c285fc8fb9350a9cbc2c233d3a85672d7 extends \Twig\Template
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
        $context["twigTemplate"] = "index.html.twig";
        // line 3
        $context["scope"] = "blog";
        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"blog\">

            ";
        // line 11
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.enabled"), 1 => "0"], "method") &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")], "method")))) {
            // line 12
            echo "                <header class=\"page-header\">
                    <h1>
                        ";
            // line 14
            echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")], "method");
            echo "
                    </h1>
                </header>
            ";
        }
        // line 18
        echo "            ";
        // line 19
        echo "
            ";
        // line 21
        echo "            <section class=\"entries\">
                <div class=\"g-grid\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "                        <div class=\"g-block ";
            if ((($this->getAttribute(($context["pagination"] ?? null), "current", []) == 1) && twig_in_filter("sticky", $this->getAttribute($context["post"], "class", [])))) {
                echo "size-100";
            } else {
                echo (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", [], "any", false, true), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.columns")], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", [], "any", false, true), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".content.columns")], "method"), "size-100")) : ("size-100"));
            }
            echo "\">
                            ";
            // line 25
            $this->loadTemplate([0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => (($this->getAttribute($context["post"], "format", [])) ? ((("partials/content-" . $this->getAttribute($context["post"], "format", [])) . ".html.twig")) : ("")), 2 => "partials/content.html.twig"], "index.html.twig", 25)->display($context);
            // line 26
            echo "                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </div>
            </section>
            ";
        // line 31
        echo "
            ";
        // line 33
        echo "            ";
        if (($this->getAttribute(($context["pagination"] ?? null), "pages", []) && (twig_length_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "pages", [])) > 1))) {
            // line 34
            echo "                ";
            $this->loadTemplate("partials/pagination.html.twig", "index.html.twig", 34)->display($context);
            // line 35
            echo "            ";
        }
        // line 36
        echo "            ";
        // line 37
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  135 => 36,  132 => 35,  129 => 34,  126 => 33,  123 => 31,  119 => 28,  104 => 26,  102 => 25,  93 => 24,  76 => 23,  72 => 21,  69 => 19,  67 => 18,  60 => 14,  56 => 12,  53 => 11,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/views/index.html.twig");
    }
}
