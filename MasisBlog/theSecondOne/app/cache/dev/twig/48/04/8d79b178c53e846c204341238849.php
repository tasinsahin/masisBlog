<?php

/* LoginLoginBundle:Blog:contactList.html.twig */
class __TwigTemplate_48048d79b178c53e846c204341238849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 51
            echo "            <div class=\"container\">
                <div class=\"content\">
                    <article class=\"blog\"> 
                        <p>Posted by :<span class=\"highlight\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "username"), "html", null, true);
            echo "</span> </p>
                        <p>E-mail    :<span class=\"highlight\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email"), "html", null, true);
            echo "</span> </p>
                        <p>Subject   :<span class=\"highlight\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "subject"), "html", null, true);
            echo "</span> </p>
                        <p>Body      :<span class=\"highlight\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "body"), "html", null, true);
            echo "</span> </p>
                    </article>
                </div>
            </div>
            <div style=\"width: 10px\"><br></div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Blog:contactList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  128 => 63,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  100 => 51,  95 => 50,  92 => 49,  89 => 48,  83 => 46,  40 => 6,  35 => 4,  30 => 3,);
    }
}
