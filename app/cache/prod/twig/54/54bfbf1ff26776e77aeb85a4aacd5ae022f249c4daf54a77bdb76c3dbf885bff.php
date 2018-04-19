<?php

/* SonataUserBundle:Profile:zakaz_quest.html.twig */
class __TwigTemplate_42f7d523fc397aaeae5aa00261cb70cc7e2a4b5a813d7c1c455f2938905cdde3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:zakaz_quest.html.twig", 1);
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
        echo "    <div class=\"row\">

        <div id=\"visit_table\">
            <div id=\"mounth_visit\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-sm-2 quest_table_name\">
                        <h4 data-bind=\"text: value.date+' '+value.title+' - '+value.name\">
                        </h4>
                    </div>
                    <div class=\"select_time\" data-bind=\"foreach: \$parent.respArray(value.mounth+'_'+value.date+'_'+value.year)\">
                        <div class=\"col-lg-1\" style=\"padding: 0\">
                            <button class=\"admin_c\" data-bind=\"css: { 'reserved': selected }, click: \$root.selectVisit(\$parent.value.mounth+'_'+\$parent.value.date+'_'+\$parent.value.year, id)\">
                                <div data-bind=\"text:title\"></div>
                                <div class=\"price\" data-bind=\"text: price+' грн'\">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        </br></br>
    </div>
    <br>
    <br>
    <br>

    <div id=\"billing_popup\" data-bind=\"visible: showBilling()\">


        <h2>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h2>
        <div class=\"closePopup\" data-bind=\"click: closePopup()\">X</div>
        <h3>
            Время: <span class=\"curentTime\" data-bind=\"text: curentPrice().title\"></span> /
            День:  <span class=\"curentDate\" data-bind=\"text: curentDate()\"></span>
        </h3>

        <form id=\"Reservation\" data-bind=\"submit: sendReserv\">
                    <div class=\"col-lg-4\">
                        <fieldset>

                        <label for=\"Phone\">Телефон:</label>
                        <input type=\"tel\" id=\"Phone\" data-bind=\"value: phone\" name=\"phone\" placeholder=\"(063)1392958\">
                        <br>
                        <label for=\"Name\">Имя:</label>
                        <input type=\"text\" id=\"Name\" data-bind=\"value: name\" name=\"name\" placeholder=\"Дмитрий\">
                        <br>
                        </fieldset>

                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>

                        <label for=\"Phone\">Цена:</label>
                        <input type=\"number\" id=\"Price\" data-bind=\"value: price\" autocomplete=\"off\">
                        <br>
                        <label for=\"description\">Количество человек:</label>
                        <input type=\"number\" id=\"numberUser\" data-bind=\"value: count\"  max=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
        echo "\" autocomplete=\"off\">
                        </fieldset>

                    </div>
                    <div class=\"col-lg-4\" style=\"padding: 6% 0;;\">
                        <fieldset>

                        <!-- ko if: !!curentPrice().select_id -->
                        <button data-bind=\"click: removeTime, visible: curentPrice().select_id\" class=\"btn btn-danger\">
                            Удалить
                        </button>

                        <!-- /ko -->

                        <!-- ko if: !!!curentPrice().select_id -->
                        <input type=\"submit\" value=\"Заказать\">
                        <!-- /ko -->
                        </fieldset>

                    </div>
        </form>
    </div>

    <div id=\"success\">
        <h1>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup\">X</div>
        <hr>
        <h1>
            Записано!
        </h1>
    </div>

    <div id=\"errorSuccess\">
        <h1>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess\">X</div>
        <hr>
        <h2 data-bind=\"text: error()\">
        </h2>
    </div>
    </div>
";
    }

    // line 107
    public function block_footer_js($context, array $blocks = array())
    {
        // line 108
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
<script src=\"/js/knockout-3.4.0.js\"></script>
<script src=\"/js/admin_visit_table.js\"></script>

    <script>
    var time_visit = [],
            visit = [],
            params = {
                maxCount: ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
        echo ",
                count: ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "count", array()), "html", null, true);
        echo ",
                pay: ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "plusPay", array()), "html", null, true);
        echo ",
                primeDate: []
            };

    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "primeDate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pdate"]) {
            // line 123
            echo "        params.primeDate.push({
            date: \"";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pdate"], "date", array()), "n_j_Y"), "html", null, true);
            echo "\",
            price: ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdate"], "price", array()), "html", null, true);
            echo "
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "

    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "time", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["time_visit"]) {
            // line 131
            echo "
    time_visit.push({
        date: '";
            // line 133
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["time_visit"], "open", array()), "n_j_Y"), "html", null, true);
            echo "',
        name: '";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
        id_visit: '";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "id", array()), "html", null, true);
            echo "',
        time: '";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "title", array()), "html", null, true);
            echo "',
        id: '";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "id", array()), "html", null, true);
            echo "',
        title: '";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
        phone: '";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "phone", array()), "html", null, true);
            echo "',
        count: ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "count", array()), "html", null, true);
            echo ",
        price: ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "price", array()), "html", null, true);
            echo "
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "open", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
            // line 146
            echo "    visit.push({
        id: ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "id", array()), "html", null, true);
            echo ",
        title: '";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "title", array()), "html", null, true);
            echo "',
        price: ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "price", array()), "html", null, true);
            echo "
    });


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "    ko.applyBindings(new TableVisitViewModel(time_visit, visit, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id", array()), "html", null, true);
        echo ", params));
</script>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:zakaz_quest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 154,  277 => 149,  273 => 148,  269 => 147,  266 => 146,  262 => 145,  259 => 144,  250 => 141,  246 => 140,  242 => 139,  238 => 138,  234 => 137,  230 => 136,  226 => 135,  222 => 134,  218 => 133,  214 => 131,  210 => 130,  206 => 128,  197 => 125,  193 => 124,  190 => 123,  186 => 122,  179 => 118,  175 => 117,  171 => 116,  160 => 108,  157 => 107,  145 => 99,  133 => 90,  106 => 66,  76 => 39,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:zakaz_quest.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/zakaz_quest.html.twig");
    }
}
