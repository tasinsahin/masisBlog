<?php

/* LoginLoginBundle:Page:contact.html.twig */
class __TwigTemplate_8b273e197a8fd4caf3d370b283213194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
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
                            <h2>Contact</h2>
                            <form action=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("login_login_contact");
        echo "\" method=\"POST\">
                                <fieldset>
                                    <div class=\"clearfix\">
                                        <input type=\"text\" name=\"username\" placeholder=\"name\">
                                    </div>
                                    <div class=\"clearfix\">
                                        <input type=\"text\" name=\"email\" placeholder=\"email\">
                                    </div>
                                    <div class=\"clearfix\">
                                        <input type=\"text\" name=\"subject\" placeholder=\"subject\">
                                    </div>
                                    <div class=\"clearfix\">
                                        <input type=\"text\" name=\"body\" placeholder=\"body\">
                                    </div>
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
        return "LoginLoginBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 58,  105 => 53,  99 => 52,  94 => 49,  91 => 48,  85 => 46,  42 => 6,  37 => 4,  34 => 3,  31 => 2,);
    }
}
