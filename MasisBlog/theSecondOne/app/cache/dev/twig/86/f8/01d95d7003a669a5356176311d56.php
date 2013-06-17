<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_86f801d95d7003a669a5356176311d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 8
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

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    <div class=\"container\">
        <div class=\"content\">
            <div class=\"row\">
                <div class=\"login-form\">
                    <h2>Login</h2>
                    <form action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\" method=\"POST\">
                        <fieldset>
                            <label>Username</label>
                            <div class=\"clearfix\">
                                <input type=\"text\" name=\"username\" placeholder=\"Username\">
                            </div>
                            <label>First Name</label>
                            <div class=\"clearfix\">
                                <input type=\"text\" name=\"firstname\" placeholder=\"Firstname\">
                            </div>
                            <label>Password</label>
                            <div class=\"clearfix\">
                                <input type=\"password\" name=\"password\" placeholder=\"Password\">
                            </div>
                            <button class=\"btn primary\" type=\"submit\">Sign Up</button>
                                <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\">Log in</a> 
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
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 69,  93 => 54,  86 => 49,  83 => 48,  40 => 8,  35 => 6,  32 => 5,  29 => 4,);
    }
}
