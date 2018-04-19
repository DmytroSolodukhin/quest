<?php

/* SonataUserBundle:Profile:edit_quest.html.twig */
class __TwigTemplate_7201a6a263f7ed2a2b62ac8c0e72668c7d4f5bd2a59efa55d28a900812d845cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:edit_quest.html.twig", 1);
        $this->blocks = array(
            'page_head_js' => array($this, 'block_page_head_js'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/holder.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ohgooglemaps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
    }

    // line 12
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("sonata_profile_title", $context, $blocks);
        echo " - ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_edit_profile_organizations", array(), "SonataUserBundle");
    }

    // line 16
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->loadTemplate("ComurImageBundle:Form:croppable_image_modal.html.twig", "SonataUserBundle:Profile:edit_quest.html.twig", 17)->display(array_merge($context, array("include_jquery" => false, "include_bootstrap" => false)));
        // line 18
        echo "
    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_quest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  73 => 18,  70 => 17,  67 => 16,  60 => 13,  57 => 12,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:edit_quest.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/edit_quest.html.twig");
    }
}
