<?php

/* @galleries/helpers/pagination_view.twig */
class __TwigTemplate_3ce09b521a312d7db99cb356b24dea70dc34ead2d00dac36391cf0296af810fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getpaginationRender($__settings__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "settings" => $__settings__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/helpers/pagination_view.twig", 2);
            // line 3
            echo "\t";
            $context["hlp"] = $this->loadTemplate("@core/helpers.twig", "@galleries/helpers/pagination_view.twig", 3);
            // line 4
            echo "
\t<div class=\"gg-sett-pagination-wrapper\">
\t\t<label class=\"gg-pagination-per-page-lbl\">";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select images per page")), "html", null, true);
            echo "
\t\t";
            // line 7
            echo $context["hlp"]->getshowTooltip((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you may choose the amount of images per page, displayed at the image list below. ")) . "<a target='_blank' href='https://supsystic.com/documentation/images-settings/'>https://supsystic.com/documentation/images-settings/</a>"), "top", true);
            // line 10
            echo "
\t\t";
            // line 11
            echo $context["form"]->getselect("gg-pagination-per-page", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "perPageArr", array()), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "perPage", array()), array("id" => "gg-pagination-per-page"));
            // line 13
            echo "
\t\t</label>
\t\t<input type=\"hidden\" id=\"ggPaginationViewCurrPage\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "currPageForJs", array()), "html", null, true);
            echo "\"/>
\t\t<input type=\"hidden\" id=\"ggPaginationViewTotal\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "total", array()), "html", null, true);
            echo "\"/>
\t\t<div class=\"gg-links-list\">
\t\t\t";
            // line 18
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array(), "any", false, true), "first", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array(), "any", false, true), "prev", array(), "any", true, true))) {
                // line 19
                echo "\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "first", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("First")), "html", null, true);
                echo "</a>
\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "prev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Previous")), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 22
            echo "
\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["settings"] ?? null));
            foreach ($context['_seq'] as $context["ind1"] => $context["val1"]) {
                // line 24
                echo "\t\t\t\t";
                if (($context["ind1"] != "info")) {
                    // line 25
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "currentPage", array()) == $context["ind1"])) {
                        // line 26
                        echo "\t\t\t\t\t\t<span class=\"gg-sett-pagination-link button active\">";
                        echo twig_escape_filter($this->env, $context["ind1"], "html", null, true);
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 28
                        echo "\t\t\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                        echo twig_escape_filter($this->env, $context["val1"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["ind1"], "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 30
                    echo "
\t\t\t\t";
                }
                // line 32
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ind1'], $context['val1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
\t\t\t";
            // line 34
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array(), "any", false, true), "next", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array(), "any", false, true), "last", array(), "any", true, true))) {
                // line 35
                echo "\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "next", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Next")), "html", null, true);
                echo "</a>
\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "info", array()), "last", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last")), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 38
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/helpers/pagination_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  132 => 36,  125 => 35,  123 => 34,  120 => 33,  114 => 32,  110 => 30,  102 => 28,  96 => 26,  93 => 25,  90 => 24,  86 => 23,  83 => 22,  76 => 20,  69 => 19,  67 => 18,  62 => 16,  58 => 15,  54 => 13,  52 => 11,  49 => 10,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/helpers/pagination_view.twig", "C:\\xampp\\htdocs\\MTP\\myleentammoja\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\helpers\\pagination_view.twig");
    }
}
