<?php

/* LoginLoginBundle::base.html.twig */
class __TwigTemplate_36b8c916d53248ee1bea1ad64def657e extends Twig_Template
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
        echo " - symblog</title>
    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "                                <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
                                </head>
                                <body>

                                <section id=\"wrapper\">
                                    <header id=\"header\">
                                        <div class=\"top\">   
                                            <hgroup>
                                                <h2>";
        // line 63
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                                            </hgroup>
                    ";
        // line 65
        $this->displayBlock('navigation', $context, $blocks);
        // line 76
        echo "                                        </div>


                                    </header>

                                    <section class=\"main-col\">
                ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "                                        </section>
                                        <aside class=\"sidebar\">
                ";
        // line 85
        $this->displayBlock('sidebar', $context, $blocks);
        // line 86
        echo "                                            </aside>

                                            <div id=\"footer\">
                ";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "                                                </div>
                                            </section>

        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "                                            </body>
                                            </html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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

                </style>

                <link href=\"http://fonts.googleapis.com/css?family=Irish+Grover\" rel='stylesheet' type='text/css'>
                    <link href=\"http://fonts.googleapis.com/css?family=La+Belle+Aurore\" rel='stylesheet' type='text/css'>

                        <link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 63
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">Masis Blog</a>";
    }

    // line 65
    public function block_navigation($context, array $blocks = array())
    {
        // line 66
        echo "                                            <nav>
                                                <ul class=\"navigation\">
                                                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">Home</a></li>
                                                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("login_login_about");
        echo "\">About</a></li>
                                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("login_login_contact");
        echo "\">Contact</a></li>
                                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\">Log in</a></li> 
                                                    <li> <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("login_login_logout");
        echo "\">Log out</a></li>
                                                </ul>
                                            </nav>
                    ";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
    }

    // line 85
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        // line 90
        echo "                                                    Symfony2 blog - created by <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://github.com/tasinsahin"), "html", null, true);
        echo "\">tasinsahin</a>
                ";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 95,  215 => 90,  212 => 89,  207 => 85,  202 => 82,  194 => 72,  190 => 71,  186 => 70,  182 => 69,  178 => 68,  174 => 66,  171 => 65,  163 => 63,  157 => 53,  113 => 12,  108 => 10,  102 => 8,  96 => 4,  90 => 96,  88 => 95,  83 => 92,  81 => 89,  76 => 86,  74 => 85,  70 => 83,  68 => 82,  60 => 76,  58 => 65,  53 => 63,  41 => 55,  39 => 8,  32 => 4,  27 => 1,);
    }
}
