<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f0db85cebb3692b7f221dc885cbd502ceeea63485f50e19c966a6ae985147b90 extends Twig_Template
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
        $__internal_aaa725d90da800b5d4f146fe8c930b126982dbfd7d70d168fa5c21608e539389 = $this->env->getExtension("native_profiler");
        $__internal_aaa725d90da800b5d4f146fe8c930b126982dbfd7d70d168fa5c21608e539389->enter($__internal_aaa725d90da800b5d4f146fe8c930b126982dbfd7d70d168fa5c21608e539389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa725d90da800b5d4f146fe8c930b126982dbfd7d70d168fa5c21608e539389->leave($__internal_aaa725d90da800b5d4f146fe8c930b126982dbfd7d70d168fa5c21608e539389_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1706626fe0b04c27bde47e2d76c5652d41f6544aeeb716d7c76688014e65b35 = $this->env->getExtension("native_profiler");
        $__internal_d1706626fe0b04c27bde47e2d76c5652d41f6544aeeb716d7c76688014e65b35->enter($__internal_d1706626fe0b04c27bde47e2d76c5652d41f6544aeeb716d7c76688014e65b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_d1706626fe0b04c27bde47e2d76c5652d41f6544aeeb716d7c76688014e65b35->leave($__internal_d1706626fe0b04c27bde47e2d76c5652d41f6544aeeb716d7c76688014e65b35_prof);

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
