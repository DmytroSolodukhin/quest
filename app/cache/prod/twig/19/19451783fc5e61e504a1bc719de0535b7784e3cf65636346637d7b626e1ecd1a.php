<?php

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_57d8cfbfdffb890827afe0491943f550725ce3939d94331f29fbd1166783f5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "        <title>
            Квест комнаты Occulto Quests
        </title>
    ";
    }

    // line 8
    public function block_metateg($context, array $blocks = array())
    {
        // line 9
        echo "        <meta name=\"description\" content=\"лучшие квест комнаты Одессы, игра, квест комната, секрет и логика, интеллект и головоломки, интуиция, это все - occulto\">
        <meta name=\"keywords\" content=\"Одесса, квест, ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "лабиринт, квест комната,
labirint, игры квесты, квест одесса, квест игры, quest room, квест рум одесса\" />
    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<a class=\"scroll-down hidden-xs hidden-sm\" href=\"#first\"></a>



<section>
<div class=\"index_text_block\" id=\"first\">
    <div class=\"row\">
        <div class=\"col-sm-10 col-md-offset-1 quest_block\">
            <h1>
                Occulto Quests
            </h1>
            <p>Погружение в мир тайн и загадок. Соприкосновение с героями мифов и легенд.
                Перенос в былые времена и эпохи. Раскрытие тайных замыслов и встреча с чудовищами,
                борьба против себя самого, против своих страхов и фобий. Загадки и головоломки, поиск и удача,
                подсказки и секреты, испытание логики и интуиции. Использование интеллекта как
                самого необходимого инструмента, помощь друзей и командная игра. Все это — Occulto Quests.
            </p>
            <p>Погрузитесь в мир, cозданный для Вас - Occulto Quests!</p>
        </div>
    </div>
</div>
</section>

<section>
    <div class=\"first_block\">
    <div class=\"row\" id=\"Quests\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["quest"]) {
            // line 42
            echo "        <section>
            ";
            // line 43
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 44
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "\">
                    <div class=\"col-sm-10 col-md-offset-1 quest_block\"
                         style=\"min-height: 250px; background: url('/uploads/";
                // line 46
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "') repeat 0 0 scroll; background-size: contain;\">
                        <div class=\"transparency\"></div>
                        <strong style=\"float: right\"><i class=\"icon-user\" style=\"color: white\"></i> : 2-";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "count", array()), "html", null, true);
                if ($this->getAttribute($context["quest"], "maxCount", array())) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "maxCount", array()), "html", null, true);
                    echo ")";
                }
                echo "</strong>

                        <h3>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quest"], "city", array()), "title", array()), "html", null, true);
                echo "
                        </h3>
                        <h2>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "</h2>
                                <strong style=\"float: right; margin: 54px 0 0;\">
                                    Cложность :
                                    ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 57
                    echo "                                        ";
                    if (($context["i"] <= $this->getAttribute($context["quest"], "complexity", array()))) {
                        // line 58
                        echo "                                            <img src=\"/images/omega.png\" width=\"30px\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                        echo " big complexity\">
                                        ";
                    }
                    // line 60
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                </strong>
                        ";
                // line 63
                echo "                            ";
                // line 64
                echo "                        ";
                // line 65
                echo "                    </div>
                </a>
            ";
            } else {
                // line 68
                echo "                <div class=\"col-sm-10 col-md-offset-1 quest_block ";
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    echo "todown";
                }
                echo " t2\"
                     style=\"min-height: 250px; background: url(";
                // line 69
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
                echo ") repeat 0 0 scroll; background-size: contain; opacity: 0.78;\">
                    <div class=\"inproggress\" style=\"min-height: 250px; \"></div>
                    <strong>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quest"], "city", array()), "title", array()), "html", null, true);
                echo "</strong>
                    <h2>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo ".
                        ";
                // line 73
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    // line 74
                    echo "                            ";
                    if ($this->getAttribute($context["quest"], "startTime", array())) {
                        // line 75
                        echo "                                Открытие квеста (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quest"], "startTime", array()), "d/m/y"), "html", null, true);
                        echo ")
                            ";
                    } else {
                        // line 77
                        echo "                                Этот квест в процессе разработки
                                ";
                    }
                    // line 79
                    echo "                        ";
                }
                // line 80
                echo "                    </h2>
                </div>
            ";
            }
            // line 83
            echo "        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </div>
</div>
</section>
";
    }

    // line 90
    public function block_footer_js($context, array $blocks = array())
    {
        // line 91
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
        return "WebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 91,  239 => 90,  232 => 85,  225 => 83,  220 => 80,  217 => 79,  213 => 77,  207 => 75,  204 => 74,  202 => 73,  198 => 72,  194 => 71,  179 => 69,  172 => 68,  167 => 65,  165 => 64,  163 => 63,  160 => 61,  154 => 60,  148 => 58,  145 => 57,  141 => 56,  135 => 53,  130 => 51,  119 => 48,  110 => 46,  102 => 44,  100 => 43,  97 => 42,  93 => 41,  65 => 15,  62 => 14,  47 => 10,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:index.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/index.html.twig");
    }
}
