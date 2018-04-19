<?php

/* SonataUserBundle:Profile:statistic.html.twig */
class __TwigTemplate_5e18ea293d83a646fa9447941d05a7e09edddf4fea5d962bbbd457869d67bac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:statistic.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'footer_js' => array($this, 'block_footer_js'),
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 9
            echo "        ";
            $context["price"] = 0;
            // line 10
            echo "        ";
            $context["count"] = 0;
            // line 11
            echo "    <div class=\"row history\">
        <h1>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo "</h1>
            <div class=\"col-sm-2 quest\">
                    <h4>Квест</h4>
            </div>
            <div class=\"col-sm-1 quest\">
                    <h4>Число</h4>
            </div>
            <div class=\"col-sm-1 quest\">
                    <h4>Время</h4>
            </div>
            <div class=\"col-sm-2 quest\">
                    <h4>Тел:</h4>
            </div>
            <div class=\"col-sm-1 quest\">
                    <h4>Имя</h4>
            </div>
            <div class=\"col-sm-2 quest\">
                    <h4>Cтоимость</h4>
            </div>
            <div class=\"col-sm-2 quest\">
                    <h4>Кол-во чел.</h4>
            </div>
            <div class=\"col-sm-1 quest\">
            </div>
    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quest"], "history", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["zakaz"]) {
                // line 37
                echo "            <div class=\"col-sm-2 quest\">
                <div class=\"admin_big\">";
                // line 38
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["quest"], "title", array()), 0, 8), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-1 quest\">
                <div class=\"admin_big\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["zakaz"], "open", array()), "d/m/y"), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-1 quest\">
                <div class=\"admin_big\">";
                // line 44
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["zakaz"], "visit", array()), "title", array()), 0, 8), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-2 quest\">
                <div class=\"admin_big\"> ";
                // line 47
                echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_replace_filter($this->getAttribute($context["zakaz"], "phone", array()), array(" " => "")), array(")" => "")), array("(" => "")), array("+" => "")), array("-" => "")), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-1 quest\">
                <div class=\"admin_big\">";
                // line 50
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["zakaz"], "title", array()), 0, 5), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-2 quest\">
                <div class=\"admin_big\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "price", array()), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-2 quest\">
                <div class=\"admin_big\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "count", array()), "html", null, true);
                echo "</div>
            </div>
            <div class=\"col-sm-1 quest\">
            </div>
        ";
                // line 60
                $context["price"] = ((isset($context["price"]) ? $context["price"] : null) + $this->getAttribute($context["zakaz"], "price", array()));
                // line 61
                echo "        ";
                $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + $this->getAttribute($context["zakaz"], "count", array()));
                // line 62
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zakaz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        <div class=\"col-sm-4\">
            Колмчество посещений:   ";
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["quest"], "history", array())), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-2 col-md-offset-3\">
            ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-2\">
            ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "
        </div>
        <div class=\"col-sm-1\">
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 77
    public function block_footer_js($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"/js/knockout-3.4.0.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:statistic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 78,  174 => 77,  160 => 70,  154 => 67,  148 => 64,  145 => 63,  139 => 62,  136 => 61,  134 => 60,  127 => 56,  121 => 53,  115 => 50,  109 => 47,  103 => 44,  97 => 41,  91 => 38,  88 => 37,  84 => 36,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:statistic.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/statistic.html.twig");
    }
}
