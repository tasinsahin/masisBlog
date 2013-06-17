<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9ad18aa74bd28e855b42b065803e891c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  222 => 95,  215 => 90,  212 => 89,  207 => 85,  202 => 82,  194 => 72,  190 => 71,  186 => 70,  182 => 69,  178 => 68,  174 => 66,  171 => 65,  163 => 63,  157 => 53,  113 => 12,  108 => 10,  102 => 8,  96 => 4,  90 => 96,  88 => 95,  83 => 92,  81 => 89,  74 => 85,  70 => 83,  68 => 82,  60 => 76,  58 => 65,  53 => 63,  39 => 8,  32 => 4,  27 => 1,  76 => 86,  67 => 17,  61 => 16,  54 => 11,  50 => 11,  41 => 55,  37 => 5,  31 => 4,  28 => 3,);
    }
}
