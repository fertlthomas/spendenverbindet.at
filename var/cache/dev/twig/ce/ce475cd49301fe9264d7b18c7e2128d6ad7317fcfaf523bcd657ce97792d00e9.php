<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4c46a581207c1e80382f08d8029d5912b87f221ee9945f29df3fa499306d0cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ea3ee316e19cf37704e46de2560247ddbf48e63b790e1868484d84a781e62267 = $this->env->getExtension("native_profiler");
        $__internal_ea3ee316e19cf37704e46de2560247ddbf48e63b790e1868484d84a781e62267->enter($__internal_ea3ee316e19cf37704e46de2560247ddbf48e63b790e1868484d84a781e62267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3ee316e19cf37704e46de2560247ddbf48e63b790e1868484d84a781e62267->leave($__internal_ea3ee316e19cf37704e46de2560247ddbf48e63b790e1868484d84a781e62267_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecfb05a45449f7f12c41c3de99edc668f50c1ffce0e4a3b1a0504e9c1d597392 = $this->env->getExtension("native_profiler");
        $__internal_ecfb05a45449f7f12c41c3de99edc668f50c1ffce0e4a3b1a0504e9c1d597392->enter($__internal_ecfb05a45449f7f12c41c3de99edc668f50c1ffce0e4a3b1a0504e9c1d597392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ecfb05a45449f7f12c41c3de99edc668f50c1ffce0e4a3b1a0504e9c1d597392->leave($__internal_ecfb05a45449f7f12c41c3de99edc668f50c1ffce0e4a3b1a0504e9c1d597392_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
