<?php

/* WebBundle:Default:work.html.twig */
class __TwigTemplate_ee7e761fb5ec2c94127fa3f36b93c3a93e338fb60e728b53c06b93b9c8bbd1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:work.html.twig", 1);
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
                Вакансии от Occulto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"работа Occulto\">
    <meta name=\"keywords\" content=\"работа в Occulto\" />
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
        echo "    <div class=\"row\">
        <div  class=\"col-lg-10 col-lg-offset-1 quest_blocks animated fadeInUpBig\"
              style=\"background: rgba(0,0,0, 0.7); top: 30vh; position: fixed\">
            <h1>Работа в Occulto</h1>
            <h3>
                Дорогие друзья, мы ищем оператора, мы предлагаем спокойную работу с гибким графиком и дружным коллективом.
                По всем вопросам трудоустройства, обращайтесь по номеру тел:
                <a href=\"tel:+380632000282\" title=\"телефон\" style=\"color: white\"><i class=\"icon-phone\"></i>(063)2000-282</a>
            </h3>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:work.html.twig";
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
        return new Twig_Source("", "WebBundle:Default:work.html.twig", "/var/www/user2967/data/www/quest/src/WebBundle/Resources/views/Default/work.html.twig");
    }
}
