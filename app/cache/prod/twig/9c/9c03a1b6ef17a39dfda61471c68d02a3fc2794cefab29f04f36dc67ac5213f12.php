<?php

/* WebBundle::pagelayout.html.twig */
class __TwigTemplate_8c6aef6bf728d59aed39875362b401758b2496f5a1e9637c4c728d698ef557d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_css' => array($this, 'block_page_head_css'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'hed_phone' => array($this, 'block_hed_phone'),
            'topMenu' => array($this, 'block_topMenu'),
            'myCanvas' => array($this, 'block_myCanvas'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'mir_kvestov' => array($this, 'block_mir_kvestov'),
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
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 24
        $this->displayBlock('page_head_css', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('page_head_js', $context, $blocks);
        // line 52
        echo "
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

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"nav-collapse pull-right\">
                <div class=\"nav navbar navbar-default navbar-fixed-top container-fluid\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                            <span class=\"sr-only\">Меню</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_homepage");
        echo "\" title=\"Главная\"><img src=\"/images/logo/logo_w.png\" width=\"90px\" alt=\"квест румы occulto quest\"> </a>
 <a class=\"visible-xs pulse\" style=\"border-radius: 50%;border: 1px solid white;width: 50px;height: 47px;padding: 11px;float: left;background:  white;margin: 7px;\" href=\"tel:+380632000282\" title=\"телефон\"><i class=\"icon-phone icon-large\"></i></a>

                    </div>
                    <div class=\"navbar-collapse collapse navbar-link\">
                        ";
        // line 93
        $this->displayBlock('hed_phone', $context, $blocks);
        // line 98
        echo "                        ";
        $this->displayBlock('topMenu', $context, $blocks);
        // line 101
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 108
        $this->displayBlock('myCanvas', $context, $blocks);
        // line 111
        echo "
<div id=\"keys\" style='background: rgba(0, 0, 0, 0) url(\"/images/key/keys.png\") repeat-x scroll -170px -89ch'>
</div>

";
        // line 115
        $this->displayBlock('welcome', $context, $blocks);
        // line 120
        echo "
<main>
";
        // line 122
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "</main>


";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 227
        echo "    </body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "        <title>
            Occulto Quests
        </title>
    ";
    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        // line 18
        echo "        <meta name=\"description\" content=\"лучшие квест комнаты Одессы, черные паруса, лабиринт минотавра, occulto-quests - лучшие миры для вас\">
        <meta name=\"keywords\" content=\"одесса, квест, квесткомната, франшиза, секрет, логика, интеллект, интуиция, квеструм, мифы, легенды, лабиринт, командная игра, головоломки, квест комната, рум, эскейп\" />
    ";
    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        // line 25
        echo "        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
    }

    // line 31
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 32
        echo "        <script src=\"/js/respond.min.js\"></script>
        ";
        // line 34
        echo "        <script>
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
    ";
    }

    // line 93
    public function block_hed_phone($context, array $blocks = array())
    {
        // line 94
        echo "                            <span>
                                <a href=\"tel:+380632000282\" title=\"телефон\">+38(063)2000-282</a>
                            </span>
                        ";
    }

    // line 98
    public function block_topMenu($context, array $blocks = array())
    {
        // line 99
        echo "                            ";
        $this->loadTemplate("WebBundle::menu.html.twig", "WebBundle::pagelayout.html.twig", 99)->display($context);
        // line 100
        echo "                        ";
    }

    // line 108
    public function block_myCanvas($context, array $blocks = array())
    {
        // line 109
        echo "    <canvas id=\"myCanvas\" height=\"400\"></canvas>
";
    }

    // line 115
    public function block_welcome($context, array $blocks = array())
    {
        // line 116
        echo "    <div class=\"parallax\">
        <img class=\"logop\" src=\"/images/logo/logo_w.png\" alt=\"квест комнаты occulto quest\">
    </div>
";
    }

    // line 122
    public function block_content($context, array $blocks = array())
    {
        // line 123
        echo "        <div class=\"jumbotron\">
            <div class=\"container\">
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
            </div>
        </div>
";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo " <div class=\"second_block\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 phone\">
                <div class=\"phone\">
                    <a href=\"tel:+380632000282\" title=\"телефон\">
                        <i class=\"icon-phone\"></i>
                        (063)2000-282
                    </a>
                </div>
                <div class=\"email\">
                     <a href=\"mailto:occulto.quests@gmail.com\" title=\"почта\">
                        <i class=\"icon-envelope\"></i>
                        occulto.quests@gmail.com
                    </a>
                </div>
           </div>
            ";
        // line 153
        $this->displayBlock('mir_kvestov', $context, $blocks);
        // line 163
        echo "            </div>
                 
        </div>
    </div>
    <footer>
        <div class=\"copyright-block dark-bg clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                <div class=\"text-left col-xs-12 col-sm-9 col-md-9 col-lg-9 responsive-center\">
                    <p>Copyright &copy; 2016 by <a href=\"mailto:dmitreysergeevich86@gmail.com\">DSolo</a>. All Rights Reserved</p>
                </div>

                    <div class=\"sotial col-xs-12 col-sm-3 col-md-3 col-lg-3\">
                        <a target=\"_blank\" title=\"facebook\" href=\"https://www.facebook.com/groups/1516653968364799/\">
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a target=\"_blank\" title=\"vk\" href=\"https://vk.com/occulto_quest\">
                            <i class=\"icon-vk\"></i>
                        </a>
 
                        <a href=\"https://www.instagram.com/occultoquest/\" title=\"instagram\" target=\"_blank\">
                            <i class=\"icon-instagram\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
    ";
        // line 194
        $this->displayBlock('footer_js', $context, $blocks);
        // line 206
        echo "

<!-- Begin Verbox {literal} -->
<script type='text/javascript'>
\t(function(d, w, m) {
\t\twindow.supportAPIMethod = m;
\t\tvar s = d.createElement('script');
\t\ts.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
\t\ts.async = true;
\t\tvar id = 'f7fce94823b4a4cf38631443e5058802';
\t\ts.src = '//admin.verbox.ru/support/support.js?h='+id;
\t\tvar sc = d.getElementsByTagName('script')[0];
\t\tw[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
\t\tif (sc) sc.parentNode.insertBefore(s, sc); 
\t\telse d.documentElement.firstChild.appendChild(s);
\t})(document, window, 'Verbox');
</script>
<!-- {/literal} End Verbox -->
<div id=\"onlineSupportReviews\" data-limit=\"12\" data-description=\"1\" data-pagination=\"1\" data-pagination-type=\"expand\" data-all-sites=\"0\" data-auto-width=\"1\" data-display-names=\"1\" data-display-city=\"1\"></div>

";
    }

    // line 153
    public function block_mir_kvestov($context, array $blocks = array())
    {
        // line 154
        echo "            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">

                <div class=\"textwidget\">
                   <a href=\"http://odessa.mir-kvestov.com.ua/quests/7114\" target=\"_blank\">
                       <img src=\"http://odessa.mir-kvestov.com.ua/widgets/2710/img\" width=\"210\" alt=\"Отзывы на Квест в реальности Лабиринт Минотавра (Occulto)\" title=\"Отзывы на Квест в реальности Лабиринт Минотавра (Occulto)\"/>
                   </a>
                </div>
            </div>
                 ";
    }

    // line 194
    public function block_footer_js($context, array $blocks = array())
    {
        // line 195
        echo "        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
        <script src=\"/js/smoke.js\"></script>
 <script>
            \$('.navbar-toggle').on('click touch', function(){
                \$('.collapse').toggle( \"slow\");
            })
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "WebBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 195,  358 => 194,  346 => 154,  343 => 153,  319 => 206,  317 => 194,  284 => 163,  282 => 153,  264 => 137,  261 => 136,  248 => 123,  245 => 122,  238 => 116,  235 => 115,  230 => 109,  227 => 108,  223 => 100,  220 => 99,  217 => 98,  210 => 94,  207 => 93,  186 => 34,  183 => 32,  180 => 31,  172 => 25,  169 => 24,  163 => 18,  160 => 17,  153 => 12,  150 => 11,  145 => 227,  143 => 136,  138 => 133,  136 => 122,  132 => 120,  130 => 115,  124 => 111,  122 => 108,  113 => 101,  110 => 98,  108 => 93,  100 => 88,  62 => 52,  60 => 31,  57 => 30,  55 => 24,  50 => 21,  48 => 17,  45 => 16,  43 => 11,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle::pagelayout.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/pagelayout.html.twig");
    }
}
