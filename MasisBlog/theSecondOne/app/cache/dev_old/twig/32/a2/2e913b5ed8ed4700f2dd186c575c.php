<?php

/* LoginLoginBundle::layout.html.twig */
class __TwigTemplate_32a22e913b5ed8ed4700f2dd186c575c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "  
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("LoginLoginBundle_sidebar"), array());
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  34 => 4,  29 => 3,  93 => 50,  90 => 49,  84 => 47,  41 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
