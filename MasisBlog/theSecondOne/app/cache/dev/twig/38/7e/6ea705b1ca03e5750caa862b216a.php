<?php

/* LoginLoginBundle::base2.html.twig */
class __TwigTemplate_387e6ea705b1ca03e5750caa862b216a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_title' => array($this, 'block_blog_title'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 59
        echo "                                <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
                                </head>
                                <body>

                                <section id=\"wrapper\">
                                    <header id=\"header\">
                                        <div class=\"top\">   
                                            <hgroup>
                                                <h2 style=\"display: block;padding-left: 230px\" >";
        // line 67
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                                            </hgroup>
                    ";
        // line 69
        $this->displayBlock('navigation', $context, $blocks);
        // line 77
        echo "                                        </div>


                                    </header>

                                    <section class=\"main-col\">
                ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "                                        </section>
                                        <aside class=\"sidebar\">
                ";
        // line 86
        $this->displayBlock('sidebar', $context, $blocks);
        // line 87
        echo "                                            </aside>

                                            <div id=\"footer\">
                ";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "                                                </div>
                                            </section>

        ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "                                            </body>
                                            </html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Masis Blog Admin Panel";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 

 
             <style type=\"text/css\">
                    /* Override some defaults */
                    html, body {
                        background-color: #eee;
                    }
                    body {
                        padding-top: 40px; 
                    }
                    .container {
                        width: 300px;
                    }

                    /* The white background content wrapper */
                    .container > .content {
                        background-color: #fff;
                        padding: 20px;
                        margin: 0 -20px; 
                        -webkit-border-radius: 10px 10px 10px 10px;
                        -moz-border-radius: 10px 10px 10px 10px;
                        border-radius: 10px 10px 10px 10px;
                        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                        box-shadow: 0 1px 2px rgba(0,0,0,.15);
                    }

                    .login-form {
                        margin-left: 65px;
                    }

                    legend {
                        margin-right: -50px;
                        font-weight: bold;
                        color: #404040;
                    }
                    ul {
                        padding-bottom: 50px;
                        padding-left: 200px;
                    }    
                    li {
                        float:left !important;
                        width: 92px;
                        border: 1px;
                        border-style: solid;
                        background-color: white;
                    }    
                </style>
 
         ";
    }

    // line 67
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">Masis Blog Admin Panel</a>";
    }

    // line 69
    public function block_navigation($context, array $blocks = array())
    {
        echo "  
                                            <nav style=\"display: block;padding-left: 230px\">
                                                <ul class=\"nav nav-tabs\"> 
                                                    <li class=\"active\"> <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("login_login_list");
        echo "\">ContactList</a></li>
                                                    <li class=\"active\"> <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("login_login_new");
        echo "\">Create Blog</a></li> 
                                                    <li class=\"active\"> <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\">Log out</a></li>
                                                </ul>  
                    ";
    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
    }

    // line 86
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        echo "<div style=\"padding-left: 245px;\">
                                                    Symfony2 blog - created by <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://github.com/tasinsahin"), "html", null, true);
        echo "\">tasinsahin</a></div>
                ";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 96,  203 => 91,  198 => 90,  193 => 86,  188 => 83,  181 => 74,  177 => 73,  173 => 72,  166 => 69,  158 => 67,  102 => 8,  96 => 4,  90 => 97,  88 => 96,  83 => 93,  81 => 90,  76 => 87,  74 => 86,  70 => 84,  68 => 83,  60 => 77,  58 => 69,  53 => 67,  41 => 59,  39 => 8,  32 => 4,  27 => 1,);
    }
}
