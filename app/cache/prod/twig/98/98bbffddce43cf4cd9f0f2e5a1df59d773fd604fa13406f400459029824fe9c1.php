<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_af1bd3d562645e3ee966b33ba1e3bf591fdedea52b06f3b1551845a2c43fb6e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataUserBundle::pagelayout.html.twig", "SonataUserBundle:Profile:action.html.twig", 11);
        $this->blocks = array(
            'metateg' => array($this, 'block_metateg'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_metateg($context, array $blocks = array())
    {
        // line 14
        echo "    <meta name=\"description\"
          content=\"лучшие квесты в одесса, occulto, ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "\"
    />

    <meta name=\"keywords\"
          content=\"квест, одесса, ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "\"
    />
";
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div id=\"start_page\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-md-offset-1\">
                <h2>";
        // line 31
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        // line 35
        echo "                </h2>
                <div class=\"sonata-user-show row row-fluid\">
                    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
                        ";
        // line 38
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 42
        echo "                    </div>

                    <div class=\"span10 col-lg-10\">
                        ";
        // line 45
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 45)->display($context);
        // line 46
        echo "
                        ";
        // line 47
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 48
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 31
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        // line 32
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "
                    ";
    }

    // line 38
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 39
        echo "                            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute(        // line 40
(isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()))));
        echo "
                        ";
    }

    // line 47
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  126 => 40,  124 => 39,  121 => 38,  115 => 33,  110 => 32,  107 => 31,  98 => 48,  96 => 47,  93 => 46,  91 => 45,  86 => 42,  84 => 38,  79 => 35,  77 => 31,  72 => 28,  69 => 27,  60 => 24,  57 => 23,  48 => 19,  39 => 15,  36 => 14,  33 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Profile:action.html.twig", "/var/www/user2967/data/www/quest/src/Application/Sonata/UserBundle/Resources/views/Profile/action.html.twig");
    }
}
