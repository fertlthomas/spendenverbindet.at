<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f832fb167ecbe4870ccbfbe3746764f3d3d6131158d898c1d33717c5a5684d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2572c327da959df20655e5fa3e74d4139fbdb562e286f9522d1b15ba9f06d98 = $this->env->getExtension("native_profiler");
        $__internal_a2572c327da959df20655e5fa3e74d4139fbdb562e286f9522d1b15ba9f06d98->enter($__internal_a2572c327da959df20655e5fa3e74d4139fbdb562e286f9522d1b15ba9f06d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2572c327da959df20655e5fa3e74d4139fbdb562e286f9522d1b15ba9f06d98->leave($__internal_a2572c327da959df20655e5fa3e74d4139fbdb562e286f9522d1b15ba9f06d98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad1538ff2d1c2bb8c449b6594e9e0431a48b03200d953c932b9dcab08b9bbcfe = $this->env->getExtension("native_profiler");
        $__internal_ad1538ff2d1c2bb8c449b6594e9e0431a48b03200d953c932b9dcab08b9bbcfe->enter($__internal_ad1538ff2d1c2bb8c449b6594e9e0431a48b03200d953c932b9dcab08b9bbcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad1538ff2d1c2bb8c449b6594e9e0431a48b03200d953c932b9dcab08b9bbcfe->leave($__internal_ad1538ff2d1c2bb8c449b6594e9e0431a48b03200d953c932b9dcab08b9bbcfe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b803bb7641c8061933824535e96cf9d53ad95110a8a3051c0f4f551e86312fff = $this->env->getExtension("native_profiler");
        $__internal_b803bb7641c8061933824535e96cf9d53ad95110a8a3051c0f4f551e86312fff->enter($__internal_b803bb7641c8061933824535e96cf9d53ad95110a8a3051c0f4f551e86312fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b803bb7641c8061933824535e96cf9d53ad95110a8a3051c0f4f551e86312fff->leave($__internal_b803bb7641c8061933824535e96cf9d53ad95110a8a3051c0f4f551e86312fff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d780e643e0ccc6fab4083f8b13fc60cde31401adb05a4b043347955117abd49 = $this->env->getExtension("native_profiler");
        $__internal_6d780e643e0ccc6fab4083f8b13fc60cde31401adb05a4b043347955117abd49->enter($__internal_6d780e643e0ccc6fab4083f8b13fc60cde31401adb05a4b043347955117abd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6d780e643e0ccc6fab4083f8b13fc60cde31401adb05a4b043347955117abd49->leave($__internal_6d780e643e0ccc6fab4083f8b13fc60cde31401adb05a4b043347955117abd49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
