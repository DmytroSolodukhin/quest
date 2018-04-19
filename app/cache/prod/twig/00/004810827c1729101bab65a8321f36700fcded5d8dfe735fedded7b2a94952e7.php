<?php

/* WebBundle:Default:quest_frame.html.twig */
class __TwigTemplate_89033687260ca76e8bfeb86ef5a6c8255580e2eae7738b829a43d5bc434a018b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'myCanvas' => array($this, 'block_myCanvas'),
            'content' => array($this, 'block_content'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"yandex-verification\" content=\"ef680a1f137132cf\" />

    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('metateg', $context, $blocks);
        // line 21
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/mainFrme.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">

        <script src=\"/js/respond.min.js\"></script>
        <script src=\"/js/vendor/modernizr-2.6.2.min.js\"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-90097863-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MTWTQXP');</script>
        <!-- End Google Tag Manager -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,600,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MTWTQXP\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!--[if lt IE 7]>
<p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please
    <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

";
        // line 67
        $this->displayBlock('myCanvas', $context, $blocks);
        // line 70
        echo "
<main>
";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 167
        echo "</main>

";
        // line 169
        $this->displayBlock('footer_js', $context, $blocks);
        // line 216
        echo "
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "        <title>
            Квест комната ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "city", array()), "title", array()), "html", null, true);
        echo " Occulto
        </title>
    ";
    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        // line 18
        echo "        <meta name=\"description\" content=\"occulto - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
        <meta name=\"keywords\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "city", array()), "title", array()), "html", null, true);
        echo ", квест, комната, квеструм, эскейпрум, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "\" />
    ";
    }

    // line 67
    public function block_myCanvas($context, array $blocks = array())
    {
        // line 68
        echo "    <canvas id=\"myCanvas\"></canvas>
";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"preloader active\" id=\"preloader\">
        <div>
            <h2><b>Пожалуйста подождите</b></h2>
            <img src=\"/images/loading_normal.gif\">
        </div>
    </div>
    <section>
        <div class=\" quest_blocks\">
<hr>
            <div id=\"visit_table\">
                <div id=\"mounth_visit\" data-bind=\"foreach: mounthList()\">
                        <div class=\"col-sm-3 col-lg-3 col-lg-offset-2 quest_table_name day\">
                            <h4 data-bind=\"text: value.date+' '+value.title+' - '+value.name\">
                            </h4>
                        </div>
                        <div class=\"select_time\" data-bind=\"foreach: \$parent.respArray(value.mounth+'_'+value.date+'_'+value.year)\">
                            <div class=\"col-sm-1\">
                                <button style=\"min-height: 45px\"
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
    </section>

    <section>
        <div id=\"billing_popup\" class=\"scroll\" data-bind=\"visible: showBilling()\">
            <div class=\"closePopup\" data-bind=\"click: closePopup()\">X</div>
            <h3>
                При заказе, ждите звонка от нашего оператора, для подтверждения!
            </h3>
            <div class=\"row\">
                <form id=\"Reservation\" data-bind=\"submit: sendReserv\">
                    <div class=\"col-sm-4\">
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
                    <div class=\"col-sm-4\">
                        <fieldset>
                            <label for=\"Phone\">Телефон:</label>
                            <input type=\"tel\" id=\"Phone\" data-bind=\"value: phone\" name=\"phone\" placeholder=\"(063)1392958\"
                                   maxlength=\"16\" >
                            <br>
                            <label for=\"Name\">Имя:</label>
                            <input type=\"text\" id=\"Name\" data-bind=\"value: name\" name=\"name\" placeholder=\"Дмитрий\"
                                   maxlength=\"10\">
                            <br>

                        </fieldset>
                    </div>
                    <div class=\"col-sm-4\">
                        <fieldset>
                            <label for=\"description\">Количество человек:</label>
                            <br>
                            <input type=\"number\" id=\"numberUser\" value=\"4\"  max=\"";
        // line 139
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
    </section>

    <div id=\"success\">
        <h1>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup\">X</div>
        <hr>
        <h1>
            Поздравляю, Ваша заявка принята! Ждите звонка от нашего оператора.
        </h1>
    </div>

    <div id=\"errorSuccess\">
        <h1>";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "title", array()), "html", null, true);
        echo "</h1>
        <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess\">X</div>
        <hr>
        <h2 data-bind=\"text: error()\">
        </h2>
    </div>
";
    }

    // line 169
    public function block_footer_js($context, array $blocks = array())
    {
        // line 170
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/plugins.js\"></script>
    <script src=\"/js/jquery.colorbox-min.js\"></script>
    <script src=\"/js/smoke.js\"></script>
    <script src=\"/js/knockout-3.4.0.js\"></script>
    <script src=\"/js/visit_table.js\"></script>
    <script>
        var time_visit = [],
                visit = [],
                params = {
                    maxCount: ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "maxCount", array()), "html", null, true);
        echo ",
                    count: ";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "count", array()), "html", null, true);
        echo ",
                    pay: ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "plusPay", array()), "html", null, true);
        echo ",
                    primeDate: []
                };
        ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "primeDate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pdate"]) {
            // line 188
            echo "        params.primeDate.push({
            date: \"";
            // line 189
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pdate"], "date", array()), "n_j_Y"), "html", null, true);
            echo "\",
            price: ";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["pdate"], "price", array()), "html", null, true);
            echo "
        });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pdate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "
        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "time", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["time_visit"]) {
            // line 195
            echo "
        time_visit.push({
            date: '";
            // line 197
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["time_visit"], "open", array()), "n_j_Y"), "html", null, true);
            echo "',
            name: '";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
            id_visit: '";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "id", array()), "html", null, true);
            echo "',
            time: '";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "title", array()), "html", null, true);
            echo "'
        });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "
        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "open", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
            // line 205
            echo "        visit.push({
            id: ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "id", array()), "html", null, true);
            echo ",
            title: '";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "title", array()), "html", null, true);
            echo "',
            price: ";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "price", array()), "html", null, true);
            echo "
        });


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "        ko.applyBindings(new TableVisitViewModel(time_visit, visit, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id", array()), "html", null, true);
        echo ", params));
    </script>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:quest_frame.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 213,  359 => 208,  355 => 207,  351 => 206,  348 => 205,  344 => 204,  341 => 203,  332 => 200,  328 => 199,  324 => 198,  320 => 197,  316 => 195,  312 => 194,  309 => 193,  300 => 190,  296 => 189,  293 => 188,  289 => 187,  283 => 184,  279 => 183,  275 => 182,  261 => 170,  258 => 169,  247 => 160,  235 => 151,  220 => 139,  152 => 73,  149 => 72,  144 => 68,  141 => 67,  133 => 19,  128 => 18,  125 => 17,  116 => 13,  113 => 12,  110 => 11,  105 => 216,  103 => 169,  99 => 167,  97 => 72,  93 => 70,  91 => 67,  43 => 21,  41 => 17,  38 => 16,  36 => 11,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:quest_frame.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/quest_frame.html.twig");
    }
}
