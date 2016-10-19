<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4e437f9d5d1d0709c7d4a305ef2fb848a9f26d84d989f5b2948098eff2aba602 extends Twig_Template
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
        $__internal_8e06844b33e83f0a22a57f090148ff2a4538c3a7b5fa844b02736e7b4fedd7eb = $this->env->getExtension("native_profiler");
        $__internal_8e06844b33e83f0a22a57f090148ff2a4538c3a7b5fa844b02736e7b4fedd7eb->enter($__internal_8e06844b33e83f0a22a57f090148ff2a4538c3a7b5fa844b02736e7b4fedd7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "form-signin")));
        echo "

    <h2 class=\"form-signin-heading\">Registrieren</h2>


    <div id=\"fos_user_registration_form\">

        <input class=\"form-control\" type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" placeholder=\"Email\" />

        <input class=\"form-control\" type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" placeholder=\"Username\" />

        <input class=\"form-control\" type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" placeholder=\"Password\" />

        <input class=\"form-control\" type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" placeholder=\"Password again\" />


        <label class=\"required\">Welche rolle nehmen Sie ein?</label>

        <div id=\"fos_user_registration_form_isDonator\">
            <input type=\"radio\" id=\"fos_user_registration_form_isDonator_0\" name=\"fos_user_registration_form[isDonator]\" required=\"required\" value=\"1\" />
            <label for=\"fos_user_registration_form_isDonator_0\" class=\"required\">Spender</label><input type=\"radio\" id=\"fos_user_registration_form_isDonator_1\" name=\"fos_user_registration_form[isDonator]\" required=\"required\" value=\"0\" checked=\"checked\" />
            <label for=\"fos_user_registration_form_isDonator_1\" class=\"required\">Empfänger</label>
        </div>

        <input class=\"form-control\" type=\"text\" id=\"fos_user_registration_form_mobil_pass_number\" name=\"fos_user_registration_form[mobil_pass_number]\" required=\"required\" maxlength=\"10\" pattern=\".{10,}\" placeholder=\"Mobilpassnummer\" />

        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    </div>


    <div>
        <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrieren", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "


</div>

";
        
        $__internal_8e06844b33e83f0a22a57f090148ff2a4538c3a7b5fa844b02736e7b4fedd7eb->leave($__internal_8e06844b33e83f0a22a57f090148ff2a4538c3a7b5fa844b02736e7b4fedd7eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  88 => 44,  79 => 42,  75 => 41,  71 => 40,  65 => 37,  56 => 31,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="container">*/
/* */
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-signin'}}) }}*/
/* */
/*     <h2 class="form-signin-heading">Registrieren</h2>*/
/* */
/* */
/*     <div id="fos_user_registration_form">*/
/* */
/*         <input class="form-control" type="email" id="fos_user_registration_form_email" name="fos_user_registration_form[email]" required="required" placeholder="Email" />*/
/* */
/*         <input class="form-control" type="text" id="fos_user_registration_form_username" name="fos_user_registration_form[username]" required="required" maxlength="255" pattern=".{2,}" placeholder="Username" />*/
/* */
/*         <input class="form-control" type="password" id="fos_user_registration_form_plainPassword_first" name="fos_user_registration_form[plainPassword][first]" required="required" placeholder="Password" />*/
/* */
/*         <input class="form-control" type="password" id="fos_user_registration_form_plainPassword_second" name="fos_user_registration_form[plainPassword][second]" required="required" placeholder="Password again" />*/
/* */
/* */
/*         <label class="required">Welche rolle nehmen Sie ein?</label>*/
/* */
/*         <div id="fos_user_registration_form_isDonator">*/
/*             <input type="radio" id="fos_user_registration_form_isDonator_0" name="fos_user_registration_form[isDonator]" required="required" value="1" />*/
/*             <label for="fos_user_registration_form_isDonator_0" class="required">Spender</label><input type="radio" id="fos_user_registration_form_isDonator_1" name="fos_user_registration_form[isDonator]" required="required" value="0" checked="checked" />*/
/*             <label for="fos_user_registration_form_isDonator_1" class="required">Empfänger</label>*/
/*         </div>*/
/* */
/*         <input class="form-control" type="text" id="fos_user_registration_form_mobil_pass_number" name="fos_user_registration_form[mobil_pass_number]" required="required" maxlength="10" pattern=".{10,}" placeholder="Mobilpassnummer" />*/
/* */
/*         {{ form_widget(form._token) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div>*/
/*         <input class="btn btn-lg btn-success btn-block" type="submit" value="{{ 'Registrieren'|trans }}" />*/
/*     </div>*/
/* */
/*     {{ form_errors(form) }}*/
/*     {% for child in form.children %}*/
/*         {{ form_errors(child) }}*/
/*     {% endfor %}*/
/* */
/*     {{ form_end(form, {'render_rest': false}) }}*/
/* */
/* */
/* </div>*/
/* */
/* */
