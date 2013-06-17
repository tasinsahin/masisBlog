<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_6c10d4175b601831e6cdf92b8d78fc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 9
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

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "        <div class=\"container\">
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"login-form\">
                        <h2>Login</h2>
                        <form action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("login_login_login");
        echo "\" method=\"POST\">
                            <fieldset>
                                <div class=\"clearfix\">
                                    <input type=\"text\" name=\"username\" placeholder=\"Username\">
                                </div>
                                <div class=\"clearfix\">
                                    <input type=\"password\" name=\"password\" placeholder=\"Password\">
                                </div>
                                    <label class=\"checkbox\">
                                        <input type=\"checkbox\" name=\"remember\" value=\"remember-me\">Remember me
                                    </label>
                                <button class=\"btn primary\" type=\"submit\">Sign in</button>
                                <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("login_login_signup");
        echo "\">Sign Up</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    ";
        // line 74
        if (array_key_exists("name", $context)) {
            echo " 
        <strong>Hello ";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
        ";
        }
        // line 76
        echo " 
";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 80,  136 => 79,  133 => 78,  128 => 76,  123 => 75,  119 => 74,  109 => 67,  94 => 55,  87 => 50,  84 => 49,  41 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}
