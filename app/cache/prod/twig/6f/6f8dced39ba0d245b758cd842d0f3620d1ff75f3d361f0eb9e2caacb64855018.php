<?php

/* WebBundle:Default:akcii.html.twig */
class __TwigTemplate_f8f84a314654ff84c18644227e4395fbf0f14e8f18f2a38bb332c6ea8155f52b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:akcii.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "            <title>
                Акции и скидки в квест комнаты Occulto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"акции в квест комнаты Occulto\">
    <meta name=\"keywords\" content=\"акции, скидки, квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
";
    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <div  class=\"col-lg-10 col-lg-offset-1 quest_blocks animated fadeInUpBig\" id=\"HeadSale\">
        <h1>Occulto запускает Акции</h1>
        <h3>следите так же за проводимыми акциями в соц. сетях
            <a target=\"_blank\" title=\"facebook\" href=\"https://www.facebook.com/groups/1516653968364799/\">
                <i class=\"icon-facebook\"></i>
            </a>
            <a target=\"_blank\" title=\"vk\" href=\"https://vk.com/occulto_quest\">
                <i class=\"icon-vk\"></i>
            </a>
        </h3>
    </div>
    <div id=\"Akcii\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["akcii"]) ? $context["akcii"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["akciya"]) {
            // line 34
            echo "        <div class=\"col-lg-10 col-lg-offset-1 quest_blocks\"
             style=\"background: #000000 none repeat scroll 0 0;\">
            <h2 style=\"color: #FFFFFF;\">Акция: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["akciya"], "title", array()), "html", null, true);
            echo "</h2>
            ";
            // line 37
            if ($this->getAttribute($context["akciya"], "image", array())) {
                // line 38
                echo "            <img src=\"/uploads/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["akciya"], "image", array()), "html", null, true);
                echo "\" alt=\"акция квест ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["akciya"], "title", array()), "html", null, true);
                echo "\" style=\"height: 250px; float: left; margin: 20px;\">
            ";
            }
            // line 40
            echo "            ";
            echo $this->getAttribute($context["akciya"], "description", array());
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['akciya'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:akcii.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  106 => 40,  98 => 38,  96 => 37,  92 => 36,  88 => 34,  84 => 33,  69 => 20,  66 => 19,  61 => 16,  54 => 13,  51 => 12,  45 => 8,  42 => 7,  35 => 3,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:akcii.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/akcii.html.twig");
    }
}
