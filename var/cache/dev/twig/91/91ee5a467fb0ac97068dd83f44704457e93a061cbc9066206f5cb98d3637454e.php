<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f01b2cf4e0560476a30bc16bbf580762ff177f74fb2feb34f49ab0d942aa554a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10aed7be9fccd4d3d225efea5efc28a9ffcdfa09e7ba6995e451b38c641bb2c5 = $this->env->getExtension("native_profiler");
        $__internal_10aed7be9fccd4d3d225efea5efc28a9ffcdfa09e7ba6995e451b38c641bb2c5->enter($__internal_10aed7be9fccd4d3d225efea5efc28a9ffcdfa09e7ba6995e451b38c641bb2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10aed7be9fccd4d3d225efea5efc28a9ffcdfa09e7ba6995e451b38c641bb2c5->leave($__internal_10aed7be9fccd4d3d225efea5efc28a9ffcdfa09e7ba6995e451b38c641bb2c5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14f8dfa16a46b6e8a44ea6d31abc0cc6700c8c8b7fed714879dfb6300bf6ad73 = $this->env->getExtension("native_profiler");
        $__internal_14f8dfa16a46b6e8a44ea6d31abc0cc6700c8c8b7fed714879dfb6300bf6ad73->enter($__internal_14f8dfa16a46b6e8a44ea6d31abc0cc6700c8c8b7fed714879dfb6300bf6ad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_14f8dfa16a46b6e8a44ea6d31abc0cc6700c8c8b7fed714879dfb6300bf6ad73->leave($__internal_14f8dfa16a46b6e8a44ea6d31abc0cc6700c8c8b7fed714879dfb6300bf6ad73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
