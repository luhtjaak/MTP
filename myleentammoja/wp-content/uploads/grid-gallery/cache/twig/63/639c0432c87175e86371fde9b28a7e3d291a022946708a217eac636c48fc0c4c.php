<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_5359d7daa4e04e9498f5a010f08c2be3aa0019a1f2f84be86e98bac87cd2407f extends Twig_Template
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
        // line 97
        echo "
";
    }

    // line 1
    public function getshow($__areaWidth__ = null, $__galleryId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $__areaWidth__,
            "galleryId" => $__galleryId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["form1"] = $this->loadTemplate("@core/form.twig", "@galleries/shortcode/import.twig", 2);
            // line 3
            echo "    <div class=\"media-wrapr ";
            if (twig_test_empty(($context["galleryId"] ?? null))) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["areaWidth"] ?? null), "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
\t\t";
            // line 4
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 5
                echo "\t\t\t<br/>
\t\t\t<label>
\t\t\t\t";
                // line 7
                echo $context["form1"]->getcheckbox("importUseExifData", 0, array("checked" => "checked", "class" => "ggUseExifData"));
                echo "
\t\t\t\t";
                // line 8
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import EXIF data")), "html", null, true);
                echo "
\t\t\t</label>
\t\t";
            } else {
                // line 11
                echo "\t\t\t<div>
\t\t\t\t";
                // line 12
                echo $context["form1"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("")), "utm_source=plugin&utm_medium=use-exif-data&utm_campaign=gallery", "backgroundColorForShowOnHoverFree",                 // line 16
$context["form1"]->getcheckbox("importExifData", 0, array("disabled" => "disabled", "class" => "ggUseExifData")));
                // line 17
                echo "
\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import EXIF data")), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            // line 21
            echo "        <h1>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px; margin-bottom: 20px;\"
                data-gallery-id=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["galleryId"] ?? null), "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
\t\t";
            // line 28
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 29
                echo "\t\t\t<button class=\"button button-primary button-hero gallery\" id=\"sggUploadVideoFromUrlBtn\" data-folder-id=\"0\"
\t\t\t\t\tstyle=\"width: 400px;\"
\t\t\t>
\t\t\t\t<i class=\"fa fa-youtube-play fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add video")), "html", null, true);
                echo "
\t\t\t</button>
\t\t";
            }
            // line 36
            echo "        <h3>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 41
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                // line 42
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 44
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 52
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>

            <h3 style=\"margin-top: 0px\">";
                // line 55
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 58
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => ($context["galleryId"] ?? null))), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 62
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 65
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 68
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-youtube-play fa-2x\"></i>
                ";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add video")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/flickr/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 76
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/tumblr/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 80
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/facebook/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 84
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/ftp-import/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 88
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero disabled\" href=\"https://supsystic.com/documentation/google-drive-import/\" target=\"_blank\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 92
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 95
            echo "    </div>
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
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 95,  234 => 92,  227 => 88,  220 => 84,  213 => 80,  206 => 76,  199 => 72,  192 => 68,  185 => 65,  179 => 62,  174 => 60,  169 => 58,  164 => 56,  160 => 55,  154 => 52,  149 => 50,  144 => 48,  139 => 46,  134 => 44,  128 => 42,  126 => 41,  121 => 39,  116 => 37,  111 => 36,  105 => 33,  99 => 29,  97 => 28,  92 => 26,  87 => 24,  80 => 21,  74 => 18,  71 => 17,  69 => 16,  68 => 12,  65 => 11,  59 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  37 => 2,  24 => 1,  19 => 97,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/import.twig", "C:\\xampp\\htdocs\\MTP\\myleentammoja\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\import.twig");
    }
}
