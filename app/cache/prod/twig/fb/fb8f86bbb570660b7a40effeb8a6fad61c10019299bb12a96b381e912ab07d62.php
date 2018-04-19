<?php

/* OhGoogleMapFormTypeBundle:Form:google_maps.html.twig */
class __TwigTemplate_a955240fcf1d0d4e245c2559c6aafc71acae1d56ddda67596bad9f320c7cd10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oh_google_maps_widget' => array($this, 'block_oh_google_maps_widget'),
            'oh_google_maps_html' => array($this, 'block_oh_google_maps_html'),
            'oh_google_maps_fields' => array($this, 'block_oh_google_maps_fields'),
            'oh_google_maps_javascripts' => array($this, 'block_oh_google_maps_javascripts'),
            'oh_google_maps_javascript' => array($this, 'block_oh_google_maps_javascript'),
            'oh_google_maps_callback' => array($this, 'block_oh_google_maps_callback'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oh_google_maps_widget', $context, $blocks);
    }

    public function block_oh_google_maps_widget($context, array $blocks = array())
    {
        // line 2
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
\t";
        // line 3
        $this->displayBlock('oh_google_maps_html', $context, $blocks);
        // line 10
        echo "\t";
        $this->displayBlock('oh_google_maps_fields', $context, $blocks);
        // line 15
        echo "\t";
        $this->displayBlock('oh_google_maps_javascripts', $context, $blocks);
        // line 28
        echo "\t";
        $this->displayBlock('oh_google_maps_javascript', $context, $blocks);
        // line 55
        echo "</div>
";
    }

    // line 3
    public function block_oh_google_maps_html($context, array $blocks = array())
    {
        echo " 
\t<div id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container\">
\t\t<input type=\"text\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_input\" /><button id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_search_button\" class=\"btn\">Search</button><br /><a href=\"#\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_current_position\">Current location</a>
\t\t<div id=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_map_canvas\" class=\"gmap\" style=\"width: ";
        echo twig_escape_filter($this->env, (isset($context["map_width"]) ? $context["map_width"] : null), "html", null, true);
        echo "px; height: ";
        echo twig_escape_filter($this->env, (isset($context["map_height"]) ? $context["map_height"] : null), "html", null, true);
        echo "px\"></div>
\t\t<div id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_error\"></div>
\t</div>
\t";
    }

    // line 10
    public function block_oh_google_maps_fields($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "\t\t    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t";
    }

    // line 15
    public function block_oh_google_maps_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "\t\t";
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : null)) {
            // line 17
            echo "\t\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
\t\t";
        }
        // line 19
        echo "\t\t";
        if ((isset($context["include_gmaps_js"]) ? $context["include_gmaps_js"] : null)) {
            // line 20
            echo "\t\t<script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js?key=AIzaSyDkv7_FSpAnqo33hmL_QTq-ONNxStvPsdU&sensor=true\"></script>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7c6d010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010_jquery.ohgooglemaps_1.js");
            // line 25
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "7c6d010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 27
        echo "\t";
    }

    // line 28
    public function block_oh_google_maps_javascript($context, array $blocks = array())
    {
        // line 29
        echo "\t\t";
        $this->displayBlock('oh_google_maps_callback', $context, $blocks);
        // line 36
        echo "\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){
\t\t\t\t\$('#";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_map_canvas').ohGoogleMapType({
\t\t\t\t  'search_input_el'    : \$('#";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_input'),
\t\t\t\t  'search_action_el'   : \$('#";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_search_button'),
\t\t\t\t  'search_error_el'    : \$('#";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_error'),
\t\t\t\t  'current_position_el': \$('#";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_current_position'),
\t\t\t\t  'default_lat'        : '";
        // line 44
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lat"]) ? $context["default_lat"] : null), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_lng'        : '";
        // line 45
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lng"]) ? $context["default_lng"] : null), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_zoom'       : ";
        // line 46
        if ((((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "lat", array())) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "lng", array()))) {
            echo "15";
        } else {
            echo "5";
        }
        echo ",
\t\t\t\t  'lat_field'          : \$('#";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'lng_field'          : \$('#";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'callback'           : oh_google_maps_callback
\t\t\t\t});
\t\t\t});

\t\t</script>
\t";
    }

    // line 29
    public function block_oh_google_maps_callback($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar oh_google_maps_callback = function(location, gmap){
\t\t\t\t\t// your callback function here
\t\t\t\t}
\t\t\t</script>\t
\t\t";
    }

    public function getTemplateName()
    {
        return "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 30,  216 => 29,  205 => 48,  201 => 47,  193 => 46,  185 => 45,  177 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  152 => 36,  149 => 29,  146 => 28,  142 => 27,  128 => 25,  123 => 22,  119 => 20,  116 => 19,  112 => 17,  109 => 16,  106 => 15,  102 => 14,  93 => 12,  89 => 11,  84 => 10,  77 => 7,  69 => 6,  61 => 5,  57 => 4,  52 => 3,  47 => 55,  44 => 28,  41 => 15,  38 => 10,  36 => 3,  31 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig", "/var/www/user2967/data/www/quest/vendor/oh/google-map-form-type-bundle/Oh/GoogleMapFormTypeBundle/Resources/views/Form/google_maps.html.twig");
    }
}
