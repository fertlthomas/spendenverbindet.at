<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4fb8a8824a34d2294743d7457023e0fc9b4711a421415eb8ea62b6a87ca41d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_ebb172723afa02c5931890619d5dae57f82625882fa2a22a1d759068f92f2f29 = $this->env->getExtension("native_profiler");
        $__internal_ebb172723afa02c5931890619d5dae57f82625882fa2a22a1d759068f92f2f29->enter($__internal_ebb172723afa02c5931890619d5dae57f82625882fa2a22a1d759068f92f2f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb172723afa02c5931890619d5dae57f82625882fa2a22a1d759068f92f2f29->leave($__internal_ebb172723afa02c5931890619d5dae57f82625882fa2a22a1d759068f92f2f29_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a3170a5c1e8f8c11717b9534c09bcf95d3eda57fe5852f5af8622e09fedee64 = $this->env->getExtension("native_profiler");
        $__internal_2a3170a5c1e8f8c11717b9534c09bcf95d3eda57fe5852f5af8622e09fedee64->enter($__internal_2a3170a5c1e8f8c11717b9534c09bcf95d3eda57fe5852f5af8622e09fedee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2a3170a5c1e8f8c11717b9534c09bcf95d3eda57fe5852f5af8622e09fedee64->leave($__internal_2a3170a5c1e8f8c11717b9534c09bcf95d3eda57fe5852f5af8622e09fedee64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
