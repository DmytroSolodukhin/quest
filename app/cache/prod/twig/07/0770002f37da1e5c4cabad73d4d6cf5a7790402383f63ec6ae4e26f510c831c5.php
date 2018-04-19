<?php

/* WebBundle:Menu:primaryNav.html.twig */
class __TwigTemplate_47fc87b84dbf8cf4df50c12a28ab2705b94a721c087117002911acf1a64fefbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "WebBundle:Menu:primaryNav.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_linkElement($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "WebBundle:Menu:primaryNav.html.twig", 3);
        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array()));
        echo " title=\"";
        $this->displayBlock("label", $context, $blocks);
        echo "\">
        <span ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "glyphicon"), "method"))) {
            // line 6
            echo "                class=\"glyphicon ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "glyphicon"), "method"), "html", null, true);
            echo "\"
            ";
        }
        // line 7
        echo ">
            ";
        // line 8
        $this->displayBlock("label", $context, $blocks);
        echo "
        </span>
    </a>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Menu:primaryNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  51 => 7,  45 => 6,  43 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Menu:primaryNav.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Menu/primaryNav.html.twig");
    }
}
