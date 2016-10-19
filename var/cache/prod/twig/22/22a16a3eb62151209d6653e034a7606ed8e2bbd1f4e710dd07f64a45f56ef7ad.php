<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_93ea9e162bd91ca147b490c9eac7cc5e27c33662503717de03863b56a8f5c5fb extends Twig_Template
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
        // line 1
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div style=\"color:red;font-size:30px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "

<style>
    body{background-color:#eee}.form-signin{max-width:330px;padding:15px;margin:0 auto}.form-signin .form-signin-heading,.form-signin .checkbox{margin-bottom:10px}.form-signin .checkbox{font-weight:400}.form-signin .form-control{position:relative;height:auto;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;font-size:16px}.form-signin .form-control:focus{z-index:2}.form-signin input[type=\"email\"]{margin-bottom:-1px;border-bottom-right-radius:0;border-bottom-left-radius:0}.form-signin input[type=\"password\"]{margin-bottom:10px;border-top-left-radius:0;border-top-right-radius:0}
</style>

<div class=\"container\">

    <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

        <h2 class=\"form-signin-heading\">Log In</h2>

        <label for=\"username\" class=\"sr-only\">Username</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"Username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" autofocus />

        <label for=\"password\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required=\"required\" />


        <input style=\"float:left;margin-right:10px\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label class=\"checkbox\" for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("  Meine Daten merken"), "html", null, true);
        echo "</label>

        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anmelden"), "html", null, true);
        echo "\" />

    </form>

</div> <!-- /container -->
";
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
        return array (  65 => 28,  60 => 26,  50 => 19,  42 => 14,  37 => 12,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if error %}*/
/*     <div style="color:red;font-size:30px">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* <style>*/
/*     body{background-color:#eee}.form-signin{max-width:330px;padding:15px;margin:0 auto}.form-signin .form-signin-heading,.form-signin .checkbox{margin-bottom:10px}.form-signin .checkbox{font-weight:400}.form-signin .form-control{position:relative;height:auto;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;font-size:16px}.form-signin .form-control:focus{z-index:2}.form-signin input[type="email"]{margin-bottom:-1px;border-bottom-right-radius:0;border-bottom-left-radius:0}.form-signin input[type="password"]{margin-bottom:10px;border-top-left-radius:0;border-top-right-radius:0}*/
/* </style>*/
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
