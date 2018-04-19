<?php

/* WebBundle:Default:map.html.twig */
class __TwigTemplate_b7d020e05920516ac9f8df0cc11c2f6f7d2bb146e6c0c1e6d265514ac0eee219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:map.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
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
                Карта квестов от Occulto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"Карта квестов от Occulto\">
    <meta name=\"keywords\" content=\"Карта квестов, квест, комната, квеструм, загадки\" />
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
        echo "<section>
    <div class=\"map_block quest_blocks\" style=\"height: auto; width: 100%; min-width: 200px; margin: auto\">
        <div id=\"map\"></div>
        <script type=\"application/javascript\">
            var quests = [], k = 0;
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 26
            echo "                ";
            if ($this->getAttribute($context["quest"], "lat", array())) {
                // line 27
                echo "
                    quests[k] = {
                        title: '";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "',
                        lat: ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "lat", array()), "html", null, true);
                echo ",
                        lng: ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "lng", array()), "html", null, true);
                echo ",
                        image: '";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                echo "',
                        href: \"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\"
                    };
                    k++;
                ";
            }
            // line 37
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            var infowindow = [], marker = [];

            function initMap() {
                var myLatlng = new google.maps.LatLng({lat: quests[0].lat, lng: quests[0].lng });
                var myOptions = {
                    zoom: 14,
                    center: myLatlng,
                    scaleControl: false
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions);
                setMarkers(map);
            };


            function setMarkers(map) {

                for (var i = 0; i < quests.length; i++) {

                    infowindow[i] = new google.maps.InfoWindow({
                        content: '<a href=\"'+quests[i].href+'\"><img width=\"100\" src=\"../../../uploads/'+ quests[i].image +'\">' +
                        '<h1 style=\"color: Black\">'+quests[i].title+'</h1></a>'
                    });

                    marker[i] = new google.maps.Marker({
                                position: {
                                    lat: quests[i].lat, lng: quests[i].lng
                                },
                                map: map,
                                title: quests[i].title
                            });

                    google.maps.event.addListener(marker[i], 'click', function(data) {
                        for (var i = 0; i < marker.length; i++){
                            infowindow[i].close();
                            if (data.latLng ==  marker[i].position) {
                                infowindow[i].open(map, marker[i]);
                            }
                        }

                    });
                    marker[i].setMap(map);
                }
            }


        </script>
    </div>
</section>
";
    }

    // line 88
    public function block_footer_js($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDkv7_FSpAnqo33hmL_QTq-ONNxStvPsdU&callback=initMap\"
        async defer></script>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 89,  169 => 88,  117 => 38,  111 => 37,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 27,  81 => 26,  77 => 25,  70 => 20,  67 => 19,  62 => 16,  55 => 13,  52 => 12,  46 => 8,  43 => 7,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:map.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/map.html.twig");
    }
}
