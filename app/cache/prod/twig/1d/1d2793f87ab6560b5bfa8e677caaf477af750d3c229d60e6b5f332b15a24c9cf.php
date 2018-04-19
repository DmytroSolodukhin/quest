<?php

/* ComurImageBundle:Form:fields.html.twig */
class __TwigTemplate_75d52b571cddf3a6fc26b85a6ecf11bf5702b270063f03c98c7df6883ca09945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comur_image_widget' => array($this, 'block_comur_image_widget'),
            'comur_gallery_widget' => array($this, 'block_comur_gallery_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('comur_image_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('comur_gallery_widget', $context, $blocks);
    }

    // line 1
    public function block_comur_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["__internal_0581351cf0813f707a79ed2f7e9ec51b38307803708eacb80205c8d0b5682eb4"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : null);
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), 'widget');
        echo "
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array())) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), 'widget');
            echo "
        ";
        }
        // line 10
        echo "
        <div class=\"field-error clearfix hidden\">
            <div id=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div class=\"image_preview select-image-button\" id=\"image_preview_";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" style=\"z-index: 1050\">
            <div class=\"image_edit_button\">
                <span class=\"btn btn-success select-image-button\">
                    <i class=\"glyphicon glyphicon-edit glyphicon-white\"></i> ";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(),         // line 2
(isset($context["__internal_0581351cf0813f707a79ed2f7e9ec51b38307803708eacb80205c8d0b5682eb4"]) ? $context["__internal_0581351cf0813f707a79ed2f7e9ec51b38307803708eacb80205c8d0b5682eb4"] : null));
        // line 19
        echo "                </span>
            </div>
            <div id=\"image_preview_image_";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 22
        if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "fieldImage", array())) {
            // line 23
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "value", array())) {
                // line 24
                echo "                        <img src=\"/";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "value", array())), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\" style=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array())) ? ("cursor:hand; cursor: pointer") : (""));
                echo "\"/>
                    ";
            } else {
                // line 26
                echo "                        <img data-src=\"holder.js/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "cropConfig", array()), "minWidth", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "cropConfig", array()), "minHeight", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\"/>
                    ";
            }
            // line 28
            echo "                ";
        } else {
            // line 29
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "value", array())) {
                // line 30
                echo "                        <img src=\"/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Comur\ImageBundle\Twig\ThumbExtension')->getThumb((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "value", array())), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "fieldImage", array()), "maxWidth", array()), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "fieldImage", array()), "maxHeight", array())), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\" style=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array())) ? ("cursor:hand; cursor: pointer") : (""));
                echo "\"/>
                    ";
            } else {
                // line 32
                echo "                        <img data-src=\"holder.js/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "fieldImage", array()), "maxWidth", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "fieldImage", array()), "maxHeight", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\"/>
                    ";
            }
            // line 34
            echo "                ";
        }
        // line 35
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 39
        echo "
    <script>
        \$(document).ready(function(){
            Holder.run();
            ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array())) {
            // line 44
            echo "                if(\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "').val()){
                    \$('#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "_preview').click(function(e){
                        // console.log(e.target);
                        if(\$( e.target ).is( \"img\" )){
                            \$('<div class=\"modal hide fade\"><img src=\"/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "webDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "value", array()), "html", null, true);
            echo "\"/></div>').modal();
                            return false;
                        }
                    });
                }
            ";
        }
        // line 54
        echo "            \$('#image_preview_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo ".select-image-button .image_edit_button').click(function(event){
                var options = \$.parseJSON('";
        // line 55
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo "');
                ";
        // line 56
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array())) {
            // line 57
            echo "                    options['originalImageFieldId'] = '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "';
                ";
        }
        // line 59
        echo "                initializeImageManager('";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "', options);
                // console.log('";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo " onclick');
                \$('#image_upload_modal').modal('show');
            });
        });
        \$('.select-image-button').mouseover(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').removeClass('hidden');
        });
        \$('.select-image-button').mouseout(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').addClass('hidden');
        });

    </script>
";
    }

    // line 76
    public function block_comur_gallery_widget($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $context["__internal_2a9f1b176ccbcefadeb201857ead7925be4c0bab5bda648cfe021ba1858637a9"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : null);
        // line 78
        echo "    ";
        // line 79
        echo "
    ";
        // line 80
        ob_start();
        // line 81
        echo "
        <div class=\"field-error clearfix hidden\">
            <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div id=\"gallery_preview_";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"well\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "full_name", array()), "html", null, true);
        echo "\">

            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 89
            echo "                <div class=\"gallery-image-container\" data-image=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "\">
                    <span class=\"gallery-image-helper\"></span>
                    ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "
                    <span class=\"remove-image\"><i class=\"glyphicon glyphicon-remove\" data-delete=\"image\"></i></span>
                    <img src=\"/";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Comur\ImageBundle\Twig\ThumbExtension')->getThumb((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array())), $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "galleryThumbSize", array()), $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "galleryThumbSize", array())), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
            echo "\"/>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </div>
        <div class=\"image_add_button\" id=\"image_add_button_";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\">
            <span class=\"btn btn-success add-image-button\">
                <i class=\"glyphicon glyphicon-picture glyphicon-white\"></i> ";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add image", array(),         // line 77
(isset($context["__internal_2a9f1b176ccbcefadeb201857ead7925be4c0bab5bda648cfe021ba1858637a9"]) ? $context["__internal_2a9f1b176ccbcefadeb201857ead7925be4c0bab5bda648cfe021ba1858637a9"] : null));
        // line 100
        echo "            </span>
        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 104
        echo "
    <script>

        \$(document).ready(function(){
            rebindGalleryRemove();
            galleries['";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "'] = true;
            \$('#image_add_button_";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').click(function(event){
                initializeImageManager('";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "', \$.parseJSON('";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo "'));
                \$('#image_upload_modal').modal('show');
            });
            \$( \"#gallery_preview_";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" ).sortable({
                placeholder: \"gallery-image-container placeholder\",
                update: function(e, ui){
                    reorderItems('gallery_preview_";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                }
            });
            \$( \"#gallery_preview_";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" ).disableSelection();
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "ComurImageBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  326 => 120,  320 => 117,  314 => 114,  306 => 111,  302 => 110,  298 => 109,  291 => 104,  285 => 100,  283 => 77,  282 => 99,  277 => 97,  274 => 96,  263 => 93,  258 => 91,  252 => 89,  248 => 88,  241 => 86,  235 => 83,  231 => 81,  229 => 80,  226 => 79,  224 => 78,  221 => 77,  218 => 76,  199 => 60,  194 => 59,  188 => 57,  186 => 56,  182 => 55,  177 => 54,  166 => 48,  160 => 45,  155 => 44,  153 => 43,  147 => 39,  141 => 35,  138 => 34,  128 => 32,  116 => 30,  113 => 29,  110 => 28,  100 => 26,  88 => 24,  85 => 23,  83 => 22,  79 => 21,  75 => 19,  73 => 2,  72 => 18,  66 => 15,  60 => 12,  56 => 10,  50 => 8,  48 => 7,  43 => 6,  41 => 5,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 76,  23 => 75,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ComurImageBundle:Form:fields.html.twig", "/var/www/user2967/data/www/quest/vendor/comur/image-bundle/Comur/ImageBundle/Resources/views/Form/fields.html.twig");
    }
}
