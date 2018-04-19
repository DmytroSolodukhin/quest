<?php

/* WebBundle:Default:fransh.html.twig */
class __TwigTemplate_9056243d32f20c2eb2def68864d7e90be4e8cce8d84b77ccb802751e244b161f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:fransh.html.twig", 1);
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
                Франшиза от Occulto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"франшиза, помощь при создании квест комнаты\">
    <meta name=\"keywords\" content=\"франшиза, создание, механизмы, квест, комната, квеструм, загадки\" />
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
    <div class=\"index_text_block_quest row\" id=\"first\">
        <div  class=\"col-lg-10 col-lg-offset-1 quest_blocks\">
            <h1>Франшиза от Occulto</h1>
            <p>
                Мы рады помочь всем, кто решил открыть данный вид бизнеса. Так как в этой сфере практически отсутствует конкуренция,
                он становится все более популярным, но и требования посетителей становятся всё более изощренными. Имея опыт и команду профессионалов,
                мы поможет вам с механизмами, электроникой, строительством, декорациями и сценарием. Создайте свой мир, с помощью Occulto Quests.
            </p>

            <p>
                По всем вопросам, касаемо франшизы или сотрудничества, пишите нам на почту, мы вам с удовольствием ответим:
                <a href=\"mailto:occulto.quests@gmail.com\" title=\"почта\">
                    <i class=\"icon-envelope\"></i>
                    occulto.quests@gmail.com
                </a>
            </p>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:fransh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  66 => 19,  61 => 16,  54 => 13,  51 => 12,  45 => 8,  42 => 7,  35 => 3,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:fransh.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/fransh.html.twig");
    }
}
