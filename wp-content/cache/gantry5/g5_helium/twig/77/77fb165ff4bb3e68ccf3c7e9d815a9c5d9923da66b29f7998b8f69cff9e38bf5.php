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

/* partials/meta.html.twig */
class __TwigTemplate_f8038695f197a5ed972e5558adb6cb9a18f52c4e6c09635c41f653c73a4eef24 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["twigTemplate"] = "meta.html.twig";
        // line 2
        echo "
<div class=\"entry-meta\">

    ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 118
        echo "
</div>
";
    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        // line 6
        echo "
        ";
        // line 8
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"], "method") && $this->getAttribute(($context["post"] ?? null), "date", []))) {
            // line 9
            echo "            <div class=\"meta-date\">
                <i class=\"far fa-clock\" aria-hidden=\"true\"></i>

                ";
            // line 12
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.prefix"), 1 => ""], "method"))) {
                // line 13
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.prefix"), 1 => ""], "method") . " ");
                echo "</span>
                ";
            }
            // line 15
            echo "
                ";
            // line 16
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.link"), 1 => "1"], "method")) {
                // line 17
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", []);
                echo "\" class=\"meta-date-link\">
                        <span class=\"date\">";
                // line 18
                echo $this->getAttribute(($context["post"] ?? null), "date", [0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.format"), 1 => "j F Y"], "method")], "method");
                echo "</span>
                    </a>
                ";
            } else {
                // line 21
                echo "                    <span class=\"date\">";
                echo $this->getAttribute(($context["post"] ?? null), "date", [0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.format"), 1 => "j F Y"], "method")], "method");
                echo "</span>
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        // line 25
        echo "        ";
        // line 26
        echo "
        ";
        // line 28
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"], "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", []), "name", []))) {
            // line 29
            echo "            <div class=\"meta-author\">
                <i class=\"fa fa-pencil fa-pencil-alt\" aria-hidden=\"true\"></i>

                ";
            // line 32
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.prefix"), 1 => ""], "method"))) {
                // line 33
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.prefix"), 1 => ""], "method") . " ");
                echo "</span>
                ";
            }
            // line 35
            echo "
                ";
            // line 36
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.link"), 1 => "1"], "method")) {
                // line 37
                echo "                    <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", []), "link", []);
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", []), "name", []);
                echo "\" class=\"meta-author-link\"><span class=\"author\">";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", []), "name", []);
                echo "</span></a>
                ";
            } else {
                // line 39
                echo "                    <span class=\"author\">";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", []), "name", []);
                echo "</span>
                ";
            }
            // line 41
            echo "            </div>
        ";
        }
        // line 43
        echo "        ";
        // line 44
        echo "
        ";
        // line 46
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.enabled"), 1 => "1"], "method")) {
            // line 47
            echo "            <div class=\"meta-comments-count\">
                <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>

                ";
            // line 50
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.prefix"), 1 => ""], "method"))) {
                // line 51
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.prefix"), 1 => ""], "method") . " ");
                echo "</span>
                ";
            }
            // line 53
            echo "
                ";
            // line 54
            if (($this->getAttribute(($context["post"] ?? null), "comment_count", []) == "0")) {
                // line 55
                echo "                    ";
                $context["comment_count"] = __("No comments", ($context["textdomain"] ?? null));
                // line 56
                echo "                ";
            } elseif (($this->getAttribute(($context["post"] ?? null), "comment_count", []) == "1")) {
                // line 57
                echo "                    ";
                $context["comment_count"] = (($this->getAttribute(($context["post"] ?? null), "comment_count", []) . " ") . __("Comment", ($context["textdomain"] ?? null)));
                // line 58
                echo "                ";
            } else {
                // line 59
                echo "                    ";
                $context["comment_count"] = (($this->getAttribute(($context["post"] ?? null), "comment_count", []) . " ") . __("Comments", ($context["textdomain"] ?? null)));
                // line 60
                echo "                ";
            }
            // line 61
            echo "
                ";
            // line 62
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.link"), 1 => "0"], "method")) {
                // line 63
                echo "                    <a href=\"";
                echo ($this->getAttribute(($context["post"] ?? null), "link", []) . "#comments");
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "comment_count", []);
                echo "\" class=\"meta-comments-link\"><span class=\"comment-count\">";
                echo ($context["comment_count"] ?? null);
                echo "</span></a>
                ";
            } else {
                // line 65
                echo "                    <span class=\"comments-count\">";
                echo ($context["comment_count"] ?? null);
                echo "</span>
                ";
            }
            // line 67
            echo "            </div>
        ";
        }
        // line 69
        echo "        ";
        // line 70
        echo "
        ";
        // line 72
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.enabled"), 1 => "1"], "method") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "categories", [])))) {
            // line 73
            echo "            <div class=\"meta-categories\">
                <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>

                ";
            // line 76
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.prefix"), 1 => "Categories:"], "method"))) {
                // line 77
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.prefix"), 1 => "Categories:"], "method") . " ");
                echo "</span>
                ";
            }
            // line 79
            echo "
                <span class=\"categories\">
                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 82
                if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.link"), 1 => "1"], "method")) {
                    // line 83
                    echo "<a href=\"";
                    echo $this->getAttribute($context["category"], "link", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "name", []);
                    echo "\" class=\"meta-category-link\"><span class=\"single-cat\">";
                    echo $this->getAttribute($context["category"], "name", []);
                    echo "</span></a>";
                } else {
                    // line 85
                    echo "<span class=\"single-cat\">";
                    echo $this->getAttribute($context["category"], "name", []);
                    echo "</span>";
                }
                // line 87
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo twig_trim_filter(",");
                }
                // line 88
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                </span>
            </div>
        ";
        }
        // line 92
        echo "        ";
        // line 93
        echo "
        ";
        // line 95
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.enabled"), 1 => "1"], "method") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "tags", [])))) {
            // line 96
            echo "            <div class=\"meta-tags\">
                <i class=\"fa fa-tags\" aria-hidden=\"true\"></i>

                ";
            // line 99
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.prefix"), 1 => "Tags:"], "method"))) {
                // line 100
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.prefix"), 1 => "Tags:"], "method") . " ");
                echo "</span>
                ";
            }
            // line 102
            echo "
                <span class=\"tags\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "tags", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 105
                if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.link"), 1 => "1"], "method")) {
                    // line 106
                    echo "<a href=\"";
                    echo $this->getAttribute($context["tag"], "link", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["tag"], "name", []);
                    echo "\" class=\"meta-tag-link\"><span class=\"single-tag\">";
                    echo $this->getAttribute($context["tag"], "name", []);
                    echo "</span></a>";
                } else {
                    // line 108
                    echo "<span class=\"single-tag\">";
                    echo $this->getAttribute($context["tag"], "name", []);
                    echo "</span>";
                }
                // line 110
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo twig_trim_filter(",");
                }
                // line 111
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                </span>
            </div>
        ";
        }
        // line 115
        echo "        ";
        // line 116
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 116,  373 => 115,  368 => 112,  354 => 111,  350 => 110,  345 => 108,  336 => 106,  334 => 105,  317 => 104,  313 => 102,  307 => 100,  305 => 99,  300 => 96,  297 => 95,  294 => 93,  292 => 92,  287 => 89,  273 => 88,  269 => 87,  264 => 85,  255 => 83,  253 => 82,  236 => 81,  232 => 79,  226 => 77,  224 => 76,  219 => 73,  216 => 72,  213 => 70,  211 => 69,  207 => 67,  201 => 65,  191 => 63,  189 => 62,  186 => 61,  183 => 60,  180 => 59,  177 => 58,  174 => 57,  171 => 56,  168 => 55,  166 => 54,  163 => 53,  157 => 51,  155 => 50,  150 => 47,  147 => 46,  144 => 44,  142 => 43,  138 => 41,  132 => 39,  122 => 37,  120 => 36,  117 => 35,  111 => 33,  109 => 32,  104 => 29,  101 => 28,  98 => 26,  96 => 25,  92 => 23,  86 => 21,  80 => 18,  73 => 17,  71 => 16,  68 => 15,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  49 => 6,  46 => 5,  40 => 118,  38 => 5,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/meta.html.twig", "/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/views/partials/meta.html.twig");
    }
}
