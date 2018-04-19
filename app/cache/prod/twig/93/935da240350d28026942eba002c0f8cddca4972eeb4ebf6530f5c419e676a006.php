<?php

/* ComurImageBundle:Form:croppable_image_modal.html.twig */
class __TwigTemplate_56bce960dcdbc239e51540bdaef02fcdfb166821b7519c91cab18abc35883993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comur_image_scripts' => array($this, 'block_comur_image_scripts'),
            'comur_image_stylesheets' => array($this, 'block_comur_image_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : null);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('comur_image_scripts', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('comur_image_stylesheets', $context, $blocks);
        // line 34
        echo "
<div id=\"image_upload_modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h3>";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Insert Image", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 40
        echo "</h3>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-pills\" id=\"image_upload_tabs\">
                    <li class=\"active\">
                        <a href=\"#upload-image\" data-toggle=\"tab\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Upload Image", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 45
        echo "</a>
                    </li>
                    <li><a href=\"#select-existing\" data-toggle=\"tab\">";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select Existing", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 47
        echo "</a></li>
                    <li><a href=\"#crop-and-use\" data-toggle=\"tab\">";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crop and Use", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 48
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <!-- UPLOAD IMAGE -->
                    <div class=\"tab-pane active\" id=\"upload-image\">
                        <div class=\"field-error clearfix hidden\">
                            <div id=\"image_upload_widget_error\" class=\"alert alert-danger span6\">
                            </div>
                        </div>
                        <div id=\"image_upload_drop_zone\" class=\"image_upload_drop_zone\">
                            <p>";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Drop your file here", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 58
        echo "</p>
                            <p>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("or", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 59
        echo "</p>
                        </div>
                        <div id=\"image_upload_file_container\">
                            <span class=\"btn btn-info fileinput-button\">
                                <i class=\"icon-white icon-download-alt\"></i>
                                <span> ";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Select a file...", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 64
        echo "</span>
                                <input id=\"image_upload_file\" type=\"file\" name=\"image_upload_file\">
                            </span>
                        </div>
                        <div id=\"image_file_upload_progress\" class=\"progress\">
                            <div class=\"progress-bar progress-bar-success\"></div>
                        </div>
                    </div>
                    <!-- IMAGE LIB -->
                    <div class=\"tab-pane hidden\" id=\"select-existing\">
                        <div class=\"field-error clearfix hidden\">
                            <div id=\"image_select_widget_error\" class=\"alert alert-danger span6\">
                            </div>
                        </div>
                        <div id=\"existing-images\"></div>
                        <input type=\"hidden\" id=\"selected_image\"/>
                    </div>
                    <!-- CROP IMAGE -->
                    <div class=\"tab-pane\" id=\"crop-and-use\">
                        <p>";
        // line 83
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please adjust selection to your image", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 83
        echo "</p>
                        <div class=\"image_preview\" id=\"image_preview\" style=\"z-index: 1050\">
                            <p>";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("Please select or upload an image", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 85
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Close", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 90
        echo "</button>
                    <span class=\"btn btn-success hidden\" id=\"image_crop_go_now\">
                        <i class=\"icon-white icon icon-fullscreen\"></i>
                        ";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crop & Use !", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 94
        echo "                    </span>
                    <span class=\"btn btn-success hidden\" id=\"image_crop_cancel\">
                        <i class=\"icon-white icon icon-fullscreen\"></i>
                        ";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(),         // line 1
(isset($context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"]) ? $context["__internal_5ec439a68eefe2f1c28178833a6ce25f0a29b5fa27fc6e27bd9cfb8c9994279a"] : null));
        // line 98
        echo "                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    \$('#image_upload_modal').on({
        'hidden.bs.modal': destroyImageManager
    });
</script>
";
    }

    // line 4
    public function block_comur_image_scripts($context, array $blocks = array())
    {
        // line 5
        if (( !array_key_exists("include_jquery", $context) || (isset($context["include_jquery"]) ? $context["include_jquery"] : null))) {
            // line 6
            echo "    <!-- The jQuery script, can be omitted if jQuery is already included -->
    <script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 9
        echo "<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/jquery.color.js"), "html", null, true);
        echo "\"></script>
";
        // line 16
        if (( !array_key_exists("include_holder", $context) || (isset($context["include_holder"]) ? $context["include_holder"] : null))) {
            // line 17
            echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/holder/2.5.2/holder.min.js\"></script>
";
        }
        // line 19
        if (( !array_key_exists("include_bootstrap", $context) || (isset($context["include_bootstrap"]) ? $context["include_bootstrap"] : null))) {
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 22
        echo "<!-- ComurImageBundle script. Do not remove this -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/js/comur.imagelibrary.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 26
    public function block_comur_image_stylesheets($context, array $blocks = array())
    {
        // line 27
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        // line 28
        if (( !array_key_exists("include_bootstrap", $context) || (isset($context["include_bootstrap"]) ? $context["include_bootstrap"] : null))) {
            // line 29
            echo "    <!-- The bootstrap stylesheet, can be omitted if already inclided -->
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/css/bootstrap.min.css"), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        // line 32
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/comurimage/css/comur.image_bundle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    public function getTemplateName()
    {
        return "ComurImageBundle:Form:croppable_image_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 32,  243 => 30,  240 => 29,  238 => 28,  233 => 27,  230 => 26,  224 => 23,  221 => 22,  215 => 20,  213 => 19,  209 => 17,  207 => 16,  203 => 15,  199 => 14,  195 => 13,  191 => 12,  186 => 10,  183 => 9,  178 => 7,  175 => 6,  173 => 5,  170 => 4,  155 => 98,  153 => 1,  152 => 97,  147 => 94,  145 => 1,  144 => 93,  139 => 90,  137 => 1,  136 => 90,  129 => 85,  127 => 1,  126 => 85,  122 => 83,  120 => 1,  119 => 83,  98 => 64,  96 => 1,  95 => 64,  88 => 59,  86 => 1,  85 => 59,  82 => 58,  80 => 1,  79 => 58,  67 => 48,  65 => 1,  64 => 48,  61 => 47,  59 => 1,  58 => 47,  54 => 45,  52 => 1,  51 => 45,  44 => 40,  42 => 1,  41 => 40,  33 => 34,  31 => 26,  28 => 25,  26 => 4,  23 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ComurImageBundle:Form:croppable_image_modal.html.twig", "/var/www/user2967/data/www/quest/vendor/comur/image-bundle/Comur/ImageBundle/Resources/views/Form/croppable_image_modal.html.twig");
    }
}
