<?php

/* LoginLoginBundle:Blog:blog.html.twig */
class __TwigTemplate_c20ea60f33d00b55a93661ba6930ef91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle::base2.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 6
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
                    width: 600px;
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

";
    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "


";
        // line 52
        $this->displayBlock('container', $context, $blocks);
    }

    public function block_container($context, array $blocks = array())
    {
        // line 53
        echo "            <div class=\"container\">
                <div class=\"content\">
                    <div class=\"row\">
                        <div class=\"login-form\">
                            <h5>Hello Admin</h5>
                            <h2>Create Blog</h2>
                            <form action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("login_login_new");
        echo "\" method=\"POST\">
                                <fieldset>
                                    <div class=\"clearfix\">
                                        <input type=\"text\" name=\"title\" placeholder=\"title\" style=\"width:560px\">
                                    </div> 
                                    <div class=\"clearfix\">
                                        <textarea class=\"span6\" name=\"blog\" rows=\"3\" placeholder=\"What's up?\" required></textarea>                                    </div> 
                                    <button class=\"btn primary\" type=\"submit\">Submit</button>  
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /container --> 
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Blog:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 59,  104 => 53,  98 => 52,  93 => 49,  90 => 48,  84 => 46,  41 => 6,  36 => 4,  31 => 3,);
    }
}
