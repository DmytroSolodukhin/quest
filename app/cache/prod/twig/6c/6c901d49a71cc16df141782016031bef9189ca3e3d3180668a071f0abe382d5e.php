<?php

/* SonataUserBundle:Profile:bron_quests.html.twig */
class __TwigTemplate_6ffd33fa6284cc81d048f7d59f6e9ec197e537cceae4ba4517a3ea0bda53052f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:bron_quests.html.twig", 1);
        $this->blocks = array(
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
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("sonata_profile_title", $context, $blocks);
        echo " - ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_edit_profile_organizations", array(), "SonataUserBundle");
    }

    // line 7
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row>\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 10
            echo "        <div class=\"col-sm-4\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_quest_zakaz", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
            echo "\">
                <h3>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo "
                </h3>
            </a>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:bron_quests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  57 => 13,  52 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:bron_quests.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/bron_quests.html.twig");
    }
}
