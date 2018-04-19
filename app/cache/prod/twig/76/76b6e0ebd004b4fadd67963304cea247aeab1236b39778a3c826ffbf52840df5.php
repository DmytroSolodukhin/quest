<?php

/* WebBundle:Default:quests.html.twig */
class __TwigTemplate_800c74e6dcbcc1b3b9d480f232ba83b605d99d954844eebe5934071de97afe0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:quests.html.twig", 1);
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
                Квест комнаты Oculto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"лучшие квест комнаты, ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
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
    <div class=\"row\">
    <div id=\"Quests\">
        <section>
            <div class=\"col-lg-2 col-lg-offset-10 fadeInUpBig filters_city\">
                <p>Города:
                    <select>
                        <option value=\"\">Все</option>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["city"]) ? $context["city"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
            // line 29
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cit"], "title", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
                </p>
            </div>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 35
            echo "            ";
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 36
                echo "                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig\"
                     style=\"min-height: 250px; background: url('/uploads/";
                // line 37
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "') repeat 0 0 scroll; background-size: contain;\">
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "\">
                        <div class=\"options_q\">

                            <strong style=\"float: right; margin: -5px 0 0;\">
                                Cложность :
                                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "                                    ";
                    if (($context["i"] <= $this->getAttribute($context["quest"], "complexity", array()))) {
                        // line 45
                        echo "                                        <img src=\"/images/omega.png\" width=\"20px\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                        echo " big complexity\">
                                    ";
                    }
                    // line 47
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                            </strong>
                        </div>
                        <div class=\"transparency\"></div>
                    ";
                // line 52
                echo "                    <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "</h2>

                    ";
                // line 55
                echo "                        ";
                // line 56
                echo "                    ";
                // line 57
                echo "                        <div class=\"options_q_footer\">
                            <strong style=\"float: right\"><i class=\"icon-user\" style=\"color: white\"></i> : 2-";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "count", array()), "html", null, true);
                if ($this->getAttribute($context["quest"], "maxCount", array())) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "maxCount", array()), "html", null, true);
                    echo ")";
                }
                echo "</strong>
                        </div>
                      </div>
                    </a>
                </div>
            ";
            } else {
                // line 64
                echo "                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig todown t2\"
                     style=\"min-height: 250px; background: url(";
                // line 65
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                    echo "'";
                } elseif ($this->getAttribute($context["quest"], "image", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                    echo "'";
                } else {
                    echo "'/images/logo/logo_w.png'";
                }
                echo ") repeat 0 0 scroll;
                     background-size: contain; opacity: 0.78;\">
                    <div class=\"inproggress\" style=\"min-height: 250px;\"></div>
                    <h2>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo ".
                        ";
                // line 69
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    // line 70
                    echo "                            ";
                    if ($this->getAttribute($context["quest"], "startTime", array())) {
                        // line 71
                        echo "                                Открытие квеста (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quest"], "startTime", array()), "d/m/y"), "html", null, true);
                        echo ")
                            ";
                    } else {
                        // line 73
                        echo "                                Этот квест в процессе разработки
                            ";
                    }
                    // line 75
                    echo "                        ";
                }
                // line 76
                echo "                    </h2>
                </div>
            ";
            }
            // line 79
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </section>
    </div>
</div>
</section>
";
    }

    // line 86
    public function block_footer_js($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:quests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 87,  260 => 86,  252 => 80,  246 => 79,  241 => 76,  238 => 75,  234 => 73,  228 => 71,  225 => 70,  223 => 69,  219 => 68,  203 => 65,  200 => 64,  186 => 58,  183 => 57,  181 => 56,  179 => 55,  173 => 52,  168 => 48,  162 => 47,  156 => 45,  153 => 44,  149 => 43,  139 => 38,  131 => 37,  128 => 36,  125 => 35,  121 => 34,  116 => 31,  105 => 29,  101 => 28,  91 => 20,  88 => 19,  83 => 16,  76 => 13,  73 => 12,  59 => 9,  46 => 8,  43 => 7,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:quests.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/quests.html.twig");
    }
}
