<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_36e26ed3d29bf13b29221179c8e0bbeff0fcb93a654a21eda88c75d6477de302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3bbc124148068bf23a5fcab53d717095c9d88fb3103982ba685e93f77c917b9 = $this->env->getExtension("native_profiler");
        $__internal_b3bbc124148068bf23a5fcab53d717095c9d88fb3103982ba685e93f77c917b9->enter($__internal_b3bbc124148068bf23a5fcab53d717095c9d88fb3103982ba685e93f77c917b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"spendenverbindet-app\" lang=\"de\" >
<head>
    <meta charset=\"utf-8\">
    <title>Spendenverbindet</title>

    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">

    <script src=\"/js/jquery-3.1.0.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/angular.min.js\"></script>
    <script src=\"/js/controller.js\"></script>
    <script src=\"/js/filters.js\"></script>
    <script src=\"/js/services.js\"></script>
</head>

<body>

<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Spendenverbindet</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Über uns <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Entdecken</a></li>
                <li><a href=\"#\">Leute denen ich folge</a></li>
                <li><a href=\"#\">Mein Profil</a></li>
                <li><a href=\"#\">Hall of fame</a></li>
            </ul>

            <ul class=\"nav navbar-nav navbar-right\">


                ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "                    <li><a href=\"#\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("logged in as " . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a></li>
                    <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a></li>
                ";
        } else {
            // line 55
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Anmelden", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrieren", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 58
        echo "

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!-- was bewirkt der unten stehende code? -->

";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 69
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 70
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 71
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 72
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 77
        echo "
<div>
    ";
        // line 79
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 81
        echo "</div>

<!-- was bewirkt der oben stehende code? ende -->

";
        
        $__internal_b3bbc124148068bf23a5fcab53d717095c9d88fb3103982ba685e93f77c917b9->leave($__internal_b3bbc124148068bf23a5fcab53d717095c9d88fb3103982ba685e93f77c917b9_prof);

    }

    // line 79
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28059e7a149d30aae78db2fc65f3961fa0edd91458bc90225bb2a327a6f2c704 = $this->env->getExtension("native_profiler");
        $__internal_28059e7a149d30aae78db2fc65f3961fa0edd91458bc90225bb2a327a6f2c704->enter($__internal_28059e7a149d30aae78db2fc65f3961fa0edd91458bc90225bb2a327a6f2c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 80
        echo "    ";
        
        $__internal_28059e7a149d30aae78db2fc65f3961fa0edd91458bc90225bb2a327a6f2c704->leave($__internal_28059e7a149d30aae78db2fc65f3961fa0edd91458bc90225bb2a327a6f2c704_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 80,  167 => 79,  156 => 81,  154 => 79,  150 => 77,  143 => 75,  134 => 72,  129 => 71,  124 => 70,  119 => 69,  117 => 68,  105 => 58,  98 => 56,  91 => 55,  85 => 52,  81 => 51,  76 => 49,  73 => 48,  71 => 47,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="spendenverbindet-app" lang="de" >*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Spendenverbindet</title>*/
/* */
/*     <link rel="stylesheet" href="/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="/css/bootstrap-theme.min.css">*/
/*     <link rel="stylesheet" href="/css/style.css">*/
/* */
/*     <script src="/js/jquery-3.1.0.min.js"></script>*/
/*     <script src="/js/bootstrap.min.js"></script>*/
/*     <script src="/js/angular.min.js"></script>*/
/*     <script src="/js/controller.js"></script>*/
/*     <script src="/js/filters.js"></script>*/
/*     <script src="/js/services.js"></script>*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Spendenverbindet</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="#">Über uns <span class="sr-only">(current)</span></a></li>*/
/*                 <li><a href="#">Entdecken</a></li>*/
/*                 <li><a href="#">Leute denen ich folge</a></li>*/
/*                 <li><a href="#">Mein Profil</a></li>*/
/*                 <li><a href="#">Hall of fame</a></li>*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/* */
/* */
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <li><a href="#">*/
/*                             {{ ('logged in as ' ~ app.user.username) |trans({}, 'FOSUserBundle') }}*/
/*                         </a></li>*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('fos_user_security_login') }}">{{ 'Anmelden'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                     <li><a href="{{ path('fos_user_registration_register') }}">{{ 'Registrieren'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                 {% endif %}*/
/* */
/* */
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* */
/* <!-- was bewirkt der unten stehende code? -->*/
/* */
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* */
/* <!-- was bewirkt der oben stehende code? ende -->*/
/* */
/* */
