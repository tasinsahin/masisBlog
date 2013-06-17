<?php

/* LoginLoginBundle:Page:details.html.twig */
class __TwigTemplate_2f638ada1429123416893e9abefa814e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
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
                    width: 1000px;
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
        echo "HomePage";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "            <div class=\"container\">
                <div class=\"content\">
                    <article class=\"blog\">
                        <header>
                            <h2>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
        echo "</h2>
                        </header>

                        <div class=\"snippet\">
                            <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array(), "method"), "html", null, true);
        echo "</p>
                        </div>

                        <footer class=\"meta\">
                            <p>Posted by <span class=\"highlight\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author"), "html", null, true);
        echo "</span> </p>
                            <h4>Comments:</h4>
                        </footer>
                    </article>
                </div> 
            </div> 

            <div style=\"width: 10px\"><br></div>

    ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            echo " 

            <div class=\"container\">
                <div class=\"content\">
                    <header>
                        <h6>user: ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "user"), "html", null, true);
            echo "</h6>
                    </header>

                    <div class=\"snippet\">
                        <p>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "comment", array(), "method"), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <div style=\"width: 10px\">
                <br> 
            </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "            <div class=\"container\">
                <div class=\"content\">
            <p>There is no comment for This Blog</p>
                </div>
            </div>
            <div style=\"width: 10px\">
                <br> 
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "


            <div class=\"container\">
                <div class=\"content\">
                    <form action=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_details", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
        echo "\" method=\"POST\">
                        <fieldset>
                            <div class=\"clearfix\">
                                <textarea class=\"span6\" rows=\"3\" name=\"comment\" placeholder=\"What's up?\" required></textarea>
                            </div> 
                            <button class=\"btn primary\" type=\"submit\">Leave Comment!</button> 
                        </fieldset>
                    </form>
                </div>
            </div>


";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Page:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 100,  170 => 95,  156 => 86,  143 => 78,  136 => 74,  125 => 69,  113 => 60,  106 => 56,  99 => 52,  93 => 48,  90 => 47,  84 => 46,  41 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}
