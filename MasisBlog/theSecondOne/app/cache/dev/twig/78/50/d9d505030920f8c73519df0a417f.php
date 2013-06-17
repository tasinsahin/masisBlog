<?php

/* LoginLoginBundle:Page:index.html.twig */
class __TwigTemplate_7850d9d505030920f8c73519df0a417f extends Twig_Template
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

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 50
            echo "            <div class=\"container\">
                <div class=\"content\">
                    <article class=\"blog\">
                        <header>
                            <h2><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_details", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
            echo "</a></h2>
                        </header>

                        <div class=\"snippet\">
                            <p>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                            <p class=\"continue\"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_details", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
                        </div>

                        <footer class=\"meta\">
                            <p> <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_details", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id"))), "html", null, true);
            echo "\"> </a></p>
                            <p>Posted by <span class=\"highlight\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author"), "html", null, true);
            echo "</span> </p>
                        </footer>
                    </article>
                </div>
            </div>
<div style=\"width: 10px\"><br></div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 71,  129 => 64,  125 => 63,  118 => 59,  114 => 58,  105 => 54,  99 => 50,  93 => 49,  90 => 48,  84 => 46,  41 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}
