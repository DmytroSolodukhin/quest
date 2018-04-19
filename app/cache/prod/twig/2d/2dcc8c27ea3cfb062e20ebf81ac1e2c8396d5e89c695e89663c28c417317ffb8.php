<?php

/* SonataUserBundle:Profile:time.html.twig */
class __TwigTemplate_d839d51196bf6c0af2a69cc72f90d1d8a12a5789ba9746d2eecce761b7fa2550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:time.html.twig", 1);
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
        echo "    <h1>Ждут звонка</h1>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <h4>Квест</h4>
        </div>
        <div class=\"col-sm-4\">
            <h4>Число</h4>
        </div>
        <div class=\"col-sm-4\">
            <h4>Время</h4>
        </div>
    </div>
    <div id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 22
            echo "            ";
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quest"], "time", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["zakaz"]) {
                    // line 24
                    echo "                    <div class=\"row zakaz_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["zakaz"], "inprogress", array())) {
                        echo "admintable";
                    } else {
                        echo "admin_inprogress";
                    }
                    echo "\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"heading_";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo "\">
                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\"
                               data-target=\"#collapse_";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo "\">
                                <div class=\"col-sm-4\">
                                    <div class=\"admin_big\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                    echo "</div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"admin_big\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["zakaz"], "open", array()), "d/m/y"), "html", null, true);
                    echo "</div>
                                </div>
                                <div class=\"col-sm-4\">
                                    <div class=\"admin_big\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["zakaz"], "visit", array()), "title", array()), "html", null, true);
                    echo "</div>
                                </div>
                            </a>
                        </div>
                        <div id=\"collapse_";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo "\" class=\"collapse\" aria-labelledby=\"heading_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo "\">
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                        <div class=\"admin_big\">Тел: ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "phone", array()), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"admin_big\">Имя: ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "title", array()), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"admin_big\">Cтоимость: ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "price", array()), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"col-sm-3\">
                                        <div class=\"admin_big\">кол-во: ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "count", array()), "html", null, true);
                    echo "</div>
                                    </div>
                                    <div class=\"col-sm-3 control_btn\">
                                        ";
                    // line 55
                    if ($this->getAttribute($context["zakaz"], "inprogress", array())) {
                        // line 56
                        echo "                                        ";
                    } else {
                        // line 57
                        echo "                                            <button onclick=\"successTime(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                        echo ")\" class=\"btn btn-success\">
                                                Обработано
                                            </button>
                                        ";
                    }
                    // line 61
                    echo "                                        <button onclick=\"removeTime(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["zakaz"], "id", array()), "html", null, true);
                    echo ")\" class=\"btn btn-danger\">
                                            Удалить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zakaz'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            // line 71
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <hr>
        <h1>Обработанные</h1>
         <div class=\"row\">
            <div class=\"col-sm-4\">
                <h4>Квест</h4>
            </div>
            <div class=\"col-sm-4\">
                <h4>Число</h4>
            </div>
            <div class=\"col-sm-4\">
                <h4>Время</h4>
            </div>
        </div>
        <div id=\"history_time\">

        </div>
    </div>
";
    }

    // line 90
    public function block_footer_js($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"/js/time_admin.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 91,  202 => 90,  181 => 72,  175 => 71,  172 => 70,  156 => 61,  148 => 57,  145 => 56,  143 => 55,  137 => 52,  131 => 49,  125 => 46,  119 => 43,  110 => 39,  103 => 35,  97 => 32,  91 => 29,  86 => 27,  81 => 25,  70 => 24,  65 => 23,  62 => 22,  58 => 21,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:time.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/time.html.twig");
    }
}
