<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_7b7ad16f25f9a94153deb493aaaad030734a9997bc355933f398505e301a3ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dbeef6e4f9e53acfdc67ecca421ceba2e0f89a943ad98b726bef109bf8a785f = $this->env->getExtension("native_profiler");
        $__internal_7dbeef6e4f9e53acfdc67ecca421ceba2e0f89a943ad98b726bef109bf8a785f->enter($__internal_7dbeef6e4f9e53acfdc67ecca421ceba2e0f89a943ad98b726bef109bf8a785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div style=\"color:red;font-size:30px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "

<div class=\"container\">

    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <h2 class=\"form-signin-heading\">Log In</h2>

        <label for=\"username\" class=\"sr-only\">Username</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autofocus />

        <label for=\"password\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required=\"required\" />


        <input style=\"float:left;margin-right:10px\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label class=\"checkbox\" for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("  Meine Daten merken"), "html", null, true);
        echo "</label>

        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anmelden"), "html", null, true);
        echo "\" />

    </form>

</div> <!-- /container -->
";
        
        $__internal_7dbeef6e4f9e53acfdc67ecca421ceba2e0f89a943ad98b726bef109bf8a785f->leave($__internal_7dbeef6e4f9e53acfdc67ecca421ceba2e0f89a943ad98b726bef109bf8a785f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  59 => 22,  49 => 15,  41 => 10,  36 => 8,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div style="color:red;font-size:30px">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <div class="container">*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <h2 class="form-signin-heading">Log In</h2>*/
/* */
/*         <label for="username" class="sr-only">Username</label>*/
/*         <input type="text" id="username" class="form-control" placeholder="Username" name="_username" value="{{ last_username }}" required="required" autofocus />*/
/* */
/*         <label for="password" class="sr-only">Password</label>*/
/*         <input type="password" id="password" class="form-control" placeholder="Password" name="_password" required="required" />*/
/* */
/* */
/*         <input style="float:left;margin-right:10px" type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label class="checkbox" for="remember_me">{{ '  Meine Daten merken'|trans }}</label>*/
/* */
/*         <input class="btn btn-lg btn-success btn-block" type="submit" id="_submit" name="_submit" value="{{ 'Anmelden'|trans }}" />*/
/* */
/*     </form>*/
/* */
/* </div> <!-- /container -->*/
/* */
