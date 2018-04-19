<?php

/* WebBundle::menu.html.twig */
class __TwigTemplate_cd93bf8ca2229144585bc149dac5d846128689b4149685722a963c7001c690e4 extends Twig_Template
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
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("WebBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "WebBundle:Menu:primaryNav.html.twig"));
        // line 2
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle::menu.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/menu.html.twig");
    }
}
