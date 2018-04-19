<?php

/* SonataUserBundle::pagelayout.html.twig */
class __TwigTemplate_c53ce7a07dbc9bb794851a98a44686eb0aee3de82e3e27b559934d0daad7f1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head' => array($this, 'block_page_head'),
            'page_head_css' => array($this, 'block_page_head_css'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'hed_phone' => array($this, 'block_hed_phone'),
            'topMenu' => array($this, 'block_topMenu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=ru\"/>
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
        <meta name=\"robots\" content=\"noindex, nofollow\"/>
        ";
        // line 12
        $this->displayBlock('metateg', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('page_head', $context, $blocks);
        // line 23
        echo "            <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        ";
        // line 24
        $this->displayBlock('page_head_css', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('page_head_js', $context, $blocks);
        // line 56
        echo "
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,600,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 62
        echo "    </head>

    <body>

    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"nav-collapse pull-right\">
                    <ul class=\"nav\">
                        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                            <div class=\"container-fluid\">
                                <div class=\"navbar-header\">
                                    <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                                        <span class=\"sr-only\">Меню</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_homepage");
        echo "\"><img src=\"/images/logo/logo_w.png\" width=\"90px\"> </a>
                                </div>
                                <div class=\"navbar-collapse collapse navbar-link\">
                                    ";
        // line 88
        $this->displayBlock('hed_phone', $context, $blocks);
        // line 93
        echo "                                    ";
        $this->displayBlock('topMenu', $context, $blocks);
        // line 96
        echo "                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>


        ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('footer', $context, $blocks);
        // line 140
        echo "
        ";
        // line 141
        $this->displayBlock('footer_js', $context, $blocks);
        // line 172
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "                Occulto таой квест
            ";
    }

    // line 12
    public function block_metateg($context, array $blocks = array())
    {
        // line 13
        echo "
        ";
    }

    // line 15
    public function block_page_head($context, array $blocks = array())
    {
        // line 16
        echo "
            <link rel=\"apple-touch-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
            <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
            <!--[if lt IE 9]>
            <![endif]-->
        ";
    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        // line 25
        echo "            <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
            <link href=\"/css/main.css\" rel=\"stylesheet\">
            <link href=\"/css/admin_main.css\" rel=\"stylesheet\">
            <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        ";
    }

    // line 30
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"/js/respond.min.js\"></script>
            <script src=\"/js/vendor/modernizr-2.6.2.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script>window.jQuery || document.write('<script src=\"/bundles/web/js/vendor/jquery-1.10.2.min.js\"><\\/script>')</script>
            <script src=\"/js/bootstrap.js\"></script>
            <script src=\"/js/plugins.js\"></script>
            <script src=\"/js/jquery.colorbox-min.js\"></script>
            <style>
                .form- .form-group {
                    border: 1px solid;
                    border-radius: 7px;
                    padding: 10px;
                    background: #eef none repeat scroll 0 0;
                }

                .form- .form-group .form-group {
                    border: none;
                    margin: 0;
                }

                #form_save {
                    width: 100%;
                }
            </style>
        ";
    }

    // line 88
    public function block_hed_phone($context, array $blocks = array())
    {
        // line 89
        echo "                                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "phone", array(), "any", true, true)) {
            // line 90
            echo "                                        <span><a href=\"tel: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "phone", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "phone", array()), "html", null, true);
            echo "</a></span>
                                        ";
        }
        // line 92
        echo "                                    ";
    }

    // line 93
    public function block_topMenu($context, array $blocks = array())
    {
        // line 94
        echo "                                        ";
        $this->loadTemplate("WebBundle::menu.html.twig", "SonataUserBundle::pagelayout.html.twig", 94)->display($context);
        // line 95
        echo "                                    ";
    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        // line 107
        echo "            <main>
                <div class=\"jumbotron\">
                    <div class=\"container\">
                    </div>
                </div>

                <div class=\"container\">
                    <div class=\"row\">
                    </div>
                </div>
            </main>
        ";
    }

    // line 120
    public function block_footer($context, array $blocks = array())
    {
        // line 121
        echo "            <section id=\"popup\" class=\"popup hidden\">
                <div class=\"popup__outer\">
                    <div class=\"popup__inner\">
                        <div class=\"popup__overlay\" data-toggle=\"popup-open\" data-toggle-hidden=\"#popup\"></div>
                        <div id=\"popup-content\"></div>
                    </div>
                </div>
            </section>

            <footer class=\"footer\">
                <div class=\"footer__content\">
                    <div class=\"footer__info\">


                    </div>
                    ";
        // line 137
        echo "                </div>
            </footer>
        ";
    }

    // line 141
    public function block_footer_js($context, array $blocks = array())
    {
        // line 142
        echo "            ";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 143
            echo "
            ";
        } else {
            // line 145
            echo "            <script>
                var userId = ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
            echo ";
                function countTime(){
                    \$.ajax({
                        method: 'GET',
                        url: '/restapi/time',
                        async: true
                    }).done(function (data) {
                        if (data) {
                            if(data['count']){
                                var text = \"Заказы   ( \" + data['count'] + \" )\";
                                \$('.list-group-item:first').html(text);
                            }
                            if(data['error'] && data['error'] == \"login\")
                            {
                                document.location.href = '/login';
                            }
                        }
                    })
                }
                countTime();
                setInterval(function() {
                    countTime();
                },30000);
            </script>
            ";
        }
        // line 171
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 171,  291 => 146,  288 => 145,  284 => 143,  281 => 142,  278 => 141,  272 => 137,  255 => 121,  252 => 120,  237 => 107,  234 => 106,  230 => 95,  227 => 94,  224 => 93,  220 => 92,  212 => 90,  209 => 89,  206 => 88,  178 => 31,  175 => 30,  167 => 25,  164 => 24,  155 => 18,  151 => 17,  148 => 16,  145 => 15,  140 => 13,  137 => 12,  132 => 8,  129 => 7,  123 => 172,  121 => 141,  118 => 140,  116 => 120,  113 => 119,  111 => 106,  99 => 96,  96 => 93,  94 => 88,  88 => 85,  63 => 62,  56 => 56,  53 => 30,  51 => 24,  48 => 23,  45 => 15,  43 => 12,  39 => 10,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle::pagelayout.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/pagelayout.html.twig");
    }
}
