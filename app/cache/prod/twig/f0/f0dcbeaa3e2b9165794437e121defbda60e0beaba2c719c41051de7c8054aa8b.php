<?php

/* SonataFormatterBundle:Form:ckeditor.html.twig */
class __TwigTemplate_12a4ca17701b81a3f8d8185794cbf2f98850894d65bae4df5d49b982c8d6f864 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ckeditor_plugins"]) ? $context["ckeditor_plugins"] : null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 2
            echo "\t";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["ckeditor_field_id"]) ? $context["ckeditor_field_id"] : null), (isset($context["ckeditor_configuration"]) ? $context["ckeditor_configuration"] : null), array("input_sync" => true));
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 5,  32 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:ckeditor.html.twig", "/var/www/user2967/data/www/quest/vendor/sonata-project/formatter-bundle/Resources/views/Form/ckeditor.html.twig");
    }
}
