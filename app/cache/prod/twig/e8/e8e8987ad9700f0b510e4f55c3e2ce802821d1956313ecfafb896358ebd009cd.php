<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_953daed3ccab3a6d90862107a5d8722bbeac1bb3ad8d4e766728f1e1d72f6318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
            'sonata_simple_formatter_type_widget' => array($this, 'block_sonata_simple_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : null), array(), "array"), 'widget');
        echo "
        ";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["format_field_options"]) ? $context["format_field_options"] : null), "choices", array())) > 1)) {
            // line 7
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
            echo "</i>
        ";
        }
        // line 9
        echo "    </div>

    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : null), array(), "array"), 'widget');
        echo "
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();

                ";
        // line 24
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : null), array(), "array"), "vars", array()), "id", array()));
        echo "

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        ";
        // line 43
        $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 43)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : null), array(), "array"), "vars", array()), "id", array()))));
        // line 44
        echo "                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
    }

    // line 62
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        // line 63
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->

    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
        echo "');

            ";
        // line 77
        if (((isset($context["format"]) ? $context["format"] : null) == "textile")) {
            // line 78
            echo "                elms.markItUp(markitup_sonataTextileSettings);
            ";
        } elseif ((        // line 79
(isset($context["format"]) ? $context["format"] : null) == "markdown")) {
            // line 80
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);
            ";
        } elseif ((        // line 81
(isset($context["format"]) ? $context["format"] : null) == "bbcode")) {
            // line 82
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);
            ";
        } elseif ((        // line 83
(isset($context["format"]) ? $context["format"] : null) == "rawhtml")) {
            // line 84
            echo "                elms.markItUp(markitup_sonataHtmlSettings);
            ";
        } elseif ((        // line 85
(isset($context["format"]) ? $context["format"] : null) == "richhtml")) {
            // line 86
            echo "                ";
            $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 86)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()))));
            // line 87
            echo "            ";
        }
        // line 88
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "');
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 92,  176 => 88,  173 => 87,  170 => 86,  168 => 85,  165 => 84,  163 => 83,  160 => 82,  158 => 81,  155 => 80,  153 => 79,  150 => 78,  148 => 77,  143 => 75,  131 => 66,  126 => 63,  123 => 62,  115 => 57,  100 => 44,  98 => 43,  76 => 24,  70 => 21,  66 => 20,  54 => 11,  50 => 9,  44 => 7,  42 => 6,  38 => 5,  33 => 2,  30 => 1,  26 => 62,  23 => 61,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:formatter.html.twig", "/var/www/user2967/data/www/quest/vendor/sonata-project/formatter-bundle/Resources/views/Form/formatter.html.twig");
    }
}
