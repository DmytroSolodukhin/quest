<?php

/* WebBundle:Default:rules.html.twig */
class __TwigTemplate_54b9a918efb111bda917ec9a93fbf03ce9b6eec126bc6deffc8cc2c7c8c91db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:rules.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
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
                Oculto - Полезно знать
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"occulto - о квестах\">
    <meta name=\"keywords\" content=\"квест, комната, рум, эскейп, квест, игра, загадки, секрет, правила, подсказки\" />
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

    // line 17
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-10 col-md-offset-1\">
            <div class=\"row\">
            </div>
        </div>
    </div>
</div>

<div class=\"index_text_block_quest\" id=\"first\">
    <div class=\"row\">
        <div class=\"col-sm-10 col-md-offset-1 quest_blocks\" style=\"text-align: left;\">
            <h2>
                Что Полезно знать при посещении квест рума:
            </h2>
            <p>
                <h3>ВОЗРАСТ:</h3> <strong>К игре допускаются игроки старше 14 лет. Дети от 8 до 13 лет проходят игру в
                сопровождении родителей.</strong>
            </p>
            <p>
                <h3>ВРЕМЯ:</h3><strong> Чтобы не отказывать в игре командам, опоздавшим к началу, между играми есть 5-15 минут
                для полноценного прохождения квест-комнаты. Старайтесь не опаздывать)</strong>
            </p>
            <p>
                <h3>ПОДСКАЗКИ:</h3> <strong>Вы можете всегда обратится к оператору за помощью, и вам дадут подсказку или
                направят на путь решения  ак чтобы игра оставалась интересной для Вас.</strong>
            </p>
            <p>
                <h3>ВСЕ НЕОБХОДИМОЕ</h3> <strong>Для прохождения квеста находится внутри. Запрещено брать с собой подручные средства (телефоны, калькуляторы, фонарики, режущие предметы т.п.). На время игры личные вещи будут закрыты в сейфе.
                После открытия дверей необходимо оставлять КЛЮЧИ в замочных скважинах, а предметы в игре на местах их применения.</strong>
            </p>
            <p>
                <h3>СТОП ИГРА.</h3> <strong>Вы можете прекратить игру в любой момент без объяснения причин.
                Оплата игры при этом не возвращается.</strong>
            </p>

            <h3>ЗАПРЕЩАЕТСЯ:</h3>
            <ul>
                <li><strong>
                    Участвовать в квесте в нетрезвом виде;</strong>
                </li>
                <li><strong>
                    Ломать мебель, двери и другие предметы в помещениях.
                    Основа квеста – логика и наблюдательность, физическая сила в игре не потребуется;</strong>
                </li>
                <li><strong>
                    Разбирать полы и потолки. Подсказок и ключей там точно нет;</strong>
                </li>
                <li><strong>
                    Совать пальцы и посторонние предметы в движущиеся механизмы;</strong>
                </li>
                <li><strong>
                    Перекусывать или обрезать провода;</strong>
                </li>
                <li><strong>
                    Забирать на память элементы декораций;</strong>
                </li>
            </ul>
            <p>
                <strong>
                В случае нарушения игроками одного или нескольких правил АДМИНИСТРАТОР В ПРАВЕ в любой момент
                прекратить игру без возвращения ее стоимости.
                </strong>
            </p>

            <h3>РАЗРЕШАЕТСЯ:</h3>
            <ul>
                <li><strong>
                    громко шутить и веселиться;</strong>
                </li>
                <li><strong>
                    эффективно шевелить извилинами в Вашем мозгу;</strong>
                </li>
                <li><strong>
                    оставлять отзывы о нас в социальных сетях;</strong>
                </li>
                <li><strong>
                    рекомендовать Нас своим друзьям;</strong>
                </li>
            </ul>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  67 => 20,  62 => 17,  54 => 13,  51 => 12,  45 => 8,  42 => 7,  35 => 3,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:rules.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/rules.html.twig");
    }
}
