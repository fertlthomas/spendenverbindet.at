<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_074877361c07d293acae51f4b0349884d165378f790f592ef0d0b295eec77068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_dd146e378f74e4214d53d68da6a00cc886143aa995f0119931236258bf62a252 = $this->env->getExtension("native_profiler");
        $__internal_dd146e378f74e4214d53d68da6a00cc886143aa995f0119931236258bf62a252->enter($__internal_dd146e378f74e4214d53d68da6a00cc886143aa995f0119931236258bf62a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd146e378f74e4214d53d68da6a00cc886143aa995f0119931236258bf62a252->leave($__internal_dd146e378f74e4214d53d68da6a00cc886143aa995f0119931236258bf62a252_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de5b2578cc4845b671dcf3c43155b0f0189079ae44dedc4344a983d8a1112c83 = $this->env->getExtension("native_profiler");
        $__internal_de5b2578cc4845b671dcf3c43155b0f0189079ae44dedc4344a983d8a1112c83->enter($__internal_de5b2578cc4845b671dcf3c43155b0f0189079ae44dedc4344a983d8a1112c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_de5b2578cc4845b671dcf3c43155b0f0189079ae44dedc4344a983d8a1112c83->leave($__internal_de5b2578cc4845b671dcf3c43155b0f0189079ae44dedc4344a983d8a1112c83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
