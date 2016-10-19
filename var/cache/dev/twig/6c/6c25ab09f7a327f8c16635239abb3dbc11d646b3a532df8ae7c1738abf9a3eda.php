<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0de5628572528026c9fe5e4253d0e74f8c293aed00baf25a3b7129b0df857bdc extends Twig_Template
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
        $__internal_208490bc8469fdcd7040d6420eb37f034ba2071d6228930585d9705b3902d644 = $this->env->getExtension("native_profiler");
        $__internal_208490bc8469fdcd7040d6420eb37f034ba2071d6228930585d9705b3902d644->enter($__internal_208490bc8469fdcd7040d6420eb37f034ba2071d6228930585d9705b3902d644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_208490bc8469fdcd7040d6420eb37f034ba2071d6228930585d9705b3902d644->leave($__internal_208490bc8469fdcd7040d6420eb37f034ba2071d6228930585d9705b3902d644_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de30183182ec7a29b1fa7bd8dbbeb290b650e8ca9d3119f28a1915fc01e25c65 = $this->env->getExtension("native_profiler");
        $__internal_de30183182ec7a29b1fa7bd8dbbeb290b650e8ca9d3119f28a1915fc01e25c65->enter($__internal_de30183182ec7a29b1fa7bd8dbbeb290b650e8ca9d3119f28a1915fc01e25c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_de30183182ec7a29b1fa7bd8dbbeb290b650e8ca9d3119f28a1915fc01e25c65->leave($__internal_de30183182ec7a29b1fa7bd8dbbeb290b650e8ca9d3119f28a1915fc01e25c65_prof);

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
