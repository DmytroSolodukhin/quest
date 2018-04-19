<?php

/* WebBundle:Default:quest.html.twig */
class __TwigTemplate_213728820c5c09124c70bf23890cc7f2ffe91c3c081c37ede28be90ab9697f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:quest.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'hed_phone' => array($this, 'block_hed_phone'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
            'mir_kvestov' => array($this, 'block_mir_kvestov'),
            'footer_js' => array($this, 'block_footer_js'),
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
                Квест комната ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "city", array()), "title", array()), "html", null, true);
        echo "
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"occulto - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "city", array()), "title", array()), "html", null, true);
        echo ", квест, комната, квеструм, эскейпрум, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "\" />
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
        // line 16
        echo "
";
    }

    // line 18
    public function block_hed_phone($context, array $blocks = array())
    {
        // line 19
        echo "                <span><a href=\"tel: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "user", array()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "user", array()), "phone", array()), "html", null, true);
        echo "</a></span>
            ";
    }

    // line 21
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"preloader active\" id=\"preloader\">
    <div>
        <h2><b>Пожалуйста подождите</b></h2>
        <img src=\"/images/loading_normal.gif\">
    </div>
</div>

";
        // line 32
        if ( !$this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "inprogress", array())) {
            // line 33
            echo "<section>
    <div class=\" quest_blocks\"
         style=\"background: rgba(0,0,0, 0.7);\">
        <div class=\"phone\">
            <h1>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "city", array()), "title", array()), "html", null, true);
            if ($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "addres", array())) {
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "addres", array()), "html", null, true);
            }
            // line 38
            echo "                <i class=\"icon-phone\"></i>
                <a href=\"tel:";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "user", array()), "phone", array()), "html", null, true);
            echo "\" style=\"color: white\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "user", array()), "phone", array()), "html", null, true);
            echo "</a>
            </h1>
        </div>
        <hr>
        <div id=\"visit_table\">
            <div id=\"mounth_visit\" class=\"row\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-md-";
            // line 46
            echo twig_escape_filter($this->env, (12 - twig_length_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "open", array()))), "html", null, true);
            echo " quest_table_name day\">
                        <h4 data-bind=\"text: value.date+' '+value.title+' - '+value.name\">
                        </h4>
                    </div>
                    <div class=\"select_time\" data-bind=\"foreach: \$parent.respArray(value.mounth+'_'+value.date+'_'+value.year)\">
                        <div class=\"col-md-1\">
                            <button style=\"height: 45px\"
                                    data-bind=\"enable: !selected, click: \$root.selectVisit(\$parent.value.mounth+'_'+\$parent.value.date+'_'+\$parent.value.year, id)\">
                                <div data-bind=\"text:title\"></div>
                                <div class=\"price\" data-bind=\"text: price+' грн', visible: !selected\">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
        // line 66
        echo "<section>
    <div class=\"index_text_block_quest row\" id=\"first\">
        <div class=\"col-sm-10 col-md-offset-1 quest_blocks\">
            <h1>
                ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "
            </h1>
            <div class=\"col-sm-11 col-sm-offset-1\">
                <img src=\"/uploads/";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "image", array()), "html", null, true);
        echo "\" style=\"float: left; width: 300px; margin: 0 25px 25px 0\" alt=\"квест комната: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "\">
                ";
        // line 74
        echo $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "description", array());
        echo "
            </div>
            <div class=\"col-sm-8\" style=\"text-align: left\">
                <strong><i class=\"icon-user\" style=\"color: white\"></i> : 2-";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "count", array()), "html", null, true);
        if ($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array())) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
            echo ")";
        }
        echo "</strong>
                </br>
                <strong>
                    Cложность :
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 82
            echo "                        ";
            if (($context["i"] <= $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "complexity", array()))) {
                // line 83
                echo "                            <img src=\"/images/omega.png\" width=\"30px\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
                echo " big complexity\">
                        ";
            }
            // line 85
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </strong>
            </div>
        </div>
    </div>
</section>
<br>

<section>
    <div class=\"map_block quest_blocks\" style=\"max-height: 500px; height: auto; width: 70%; min-width: 200px; margin: auto\">
        <div id=\"map\"></div>
        <script>
            function initMap() {
                var myLatlng = new google.maps.LatLng({lat: ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "lng", array()), "html", null, true);
        echo " });
                var myOptions = {
                    zoom: 14,
                    center: myLatlng,
                    scaleControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions),
                        contentString = '<h3 style=\"color: black\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h3>',
                        infowindow = new google.maps.InfoWindow({
                            content: contentString
                        }),
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            draggable: false,
                            title: \"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "\"
                        });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            }
        </script>
    </div>
</section>
</br>
<section>
    <div id=\"billing_popup\" data-bind=\"visible: showBilling()\">
        <div class=\"scroll\">
           <h1>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"closePopup\" data-bind=\"click: closePopup()\">X</div>
            <hr>
            <h3>
                При заказе, ждите звонка от нашего оператора, для подтверждения!
            </h3>
            <hr>
            <div class=\"row\">
                <form id=\"Reservation\" data-bind=\"submit: sendReserv\">
                    <div class=\"col-lg-4\">
                        <h3>Время:
                            <span class=\"curentTime\" data-bind=\"text: curentPrice().title\"></span>
                        </h3>
                        <h3>День:
                            <span class=\"curentDate\" data-bind=\"text: curentDate()\"></span>
                        </h3>
                        <h3>Цена:
                            <span class=\"curentPrice\" data-bind=\"text: curentPrice().price+' грн'\"></span>
                        </h3>
                    </div>
                    <div class=\"col-lg-4\">
                    <fieldset>
                        <label for=\"Phone\">Телефон:</label>
                        <input type=\"tel\" id=\"Phone\" data-bind=\"value: phone\" name=\"phone\" placeholder=\"(063)1392958\"
                               maxlength=\"16\">
                        <br>
                        <label for=\"Name\">Имя:</label>
                        <input type=\"text\" id=\"Name\" data-bind=\"value: name\" name=\"name\" placeholder=\"Дмитрий\"
                               maxlength=\"10\">
                        <br>

                    </fieldset>
                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>
                            <label for=\"description\">Количество человек:</label>
                            <br>
                            <input type=\"number\" id=\"numberUser\" value=\"4\"  maxlength=\"2\" min=\"2\" max=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
        echo "\" autocomplete=\"off\">
                            <br>
                            <input type=\"submit\" value=\"Заказать\">
                            <br>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id=\"success\">
    <h1>";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup()\">X</div>
    <hr>
    <h1>
        Поздравляю, Ваша заявка принята! Ждите звонка от нашего оператора.
    </h1>
</div>

<div id=\"errorSuccess\">
    <h1>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess()\">X</div>
    <hr>
    <h2 data-bind=\"text: error()\">
    </h2>
</div>
";
    }

    // line 195
    public function block_mir_kvestov($context, array $blocks = array())
    {
        // line 196
        if (($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id", array()) == 1)) {
            // line 197
            echo "            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">
                <div class=\"textwidget\">
                   <a href=\"http://odessa.mir-kvestov.com.ua/quests/7114\" target=\"_blank\">
                       <img src=\"http://odessa.mir-kvestov.com.ua/widgets/2710/img\" width=\"210\" alt=\"Отзывы на Квест в реальности Лабиринт Минотавра (Occulto)\" title=\"Отзывы на Квест в реальности Лабиринт Минотавра (Occulto)\"/>
                   </a>
                </div>
            </div>
";
        }
        // line 205
        if (($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id", array()) == 6)) {
            // line 206
            echo "            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">
                <div class=\"textwidget\">
<a href=\"http://odessa.mir-kvestov.com.ua/quests/8414\" target=\"_blank\">
    <img src=\"http://odessa.mir-kvestov.com.ua/widgets/3518/img\" width=\"210\" alt=\"Отзывы на Квест в реальности Черные паруса (Occulto Quests)\" title=\"Отзывы на Квест в реальности Черные паруса (Occulto Quests)\"/>
</a>
                </div>
            </div>
";
        }
    }

    // line 216
    public function block_footer_js($context, array $blocks = array())
    {
        // line 217
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDkv7_FSpAnqo33hmL_QTq-ONNxStvPsdU&callback=initMap\"
            async defer></script>
    <script src=\"/js/knockout-3.4.0.js\"></script>
    <script src=\"/js/visit_table.js\"></script>
    <script>
        var time_visit = [],
                visit = [],
                params = {
                    maxCount: ";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
        echo ",
                    count: ";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "count", array()), "html", null, true);
        echo ",
                    pay: ";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "plusPay", array()), "html", null, true);
        echo ",
                    primeDate: []
                };
        ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "primeDate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pdate"]) {
            // line 233
            echo "        params.primeDate.push({
            date: \"";
            // line 234
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pdate"], "date", array()), "n_j_Y"), "html", null, true);
            echo "\",
            price: ";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdate"], "price", array()), "html", null, true);
            echo "
        });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "
        ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "time", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["time_visit"]) {
            // line 240
            echo "
            time_visit.push({
                date: '";
            // line 242
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["time_visit"], "open", array()), "n_j_Y"), "html", null, true);
            echo "',
                name: '";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
                id_visit: '";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "id", array()), "html", null, true);
            echo "',
                time: '";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "title", array()), "html", null, true);
            echo "'
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "
        ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "open", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
            // line 250
            echo "        visit.push({
                id: ";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "id", array()), "html", null, true);
            echo ",
                title: '";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "title", array()), "html", null, true);
            echo "',
                price: ";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "price", array()), "html", null, true);
            echo "
            });


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "        ko.applyBindings(new TableVisitViewModel(time_visit, visit, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id", array()), "html", null, true);
        echo ", params));
    </script>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:quest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 258,  480 => 253,  476 => 252,  472 => 251,  469 => 250,  465 => 249,  462 => 248,  453 => 245,  449 => 244,  445 => 243,  441 => 242,  437 => 240,  433 => 239,  430 => 238,  421 => 235,  417 => 234,  414 => 233,  410 => 232,  404 => 229,  400 => 228,  396 => 227,  382 => 217,  379 => 216,  367 => 206,  365 => 205,  355 => 197,  353 => 196,  350 => 195,  339 => 187,  327 => 178,  311 => 165,  271 => 128,  254 => 114,  243 => 106,  230 => 98,  216 => 86,  210 => 85,  204 => 83,  201 => 82,  197 => 81,  185 => 77,  179 => 74,  173 => 73,  167 => 70,  161 => 66,  138 => 46,  126 => 39,  123 => 38,  117 => 37,  111 => 33,  109 => 32,  100 => 25,  97 => 24,  92 => 21,  83 => 19,  80 => 18,  75 => 16,  69 => 13,  66 => 12,  58 => 9,  53 => 8,  50 => 7,  41 => 4,  38 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:quest.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/quest.html.twig");
    }
}
