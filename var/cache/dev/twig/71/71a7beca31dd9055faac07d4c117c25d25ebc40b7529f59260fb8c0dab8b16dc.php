<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8694982594a0f6805f7de56eb0efa528d122c0b093afc5c74b2e8a142f7bdca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7c23bb5966d997a92429cdebcb375769988dbab3340cd1cf34dd5e094b6c958 = $this->env->getExtension("native_profiler");
        $__internal_e7c23bb5966d997a92429cdebcb375769988dbab3340cd1cf34dd5e094b6c958->enter($__internal_e7c23bb5966d997a92429cdebcb375769988dbab3340cd1cf34dd5e094b6c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c23bb5966d997a92429cdebcb375769988dbab3340cd1cf34dd5e094b6c958->leave($__internal_e7c23bb5966d997a92429cdebcb375769988dbab3340cd1cf34dd5e094b6c958_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_544825b1a9cd8073bc5ec8025ca0ddf5f028a6792a8a994be2d89c4b7502f748 = $this->env->getExtension("native_profiler");
        $__internal_544825b1a9cd8073bc5ec8025ca0ddf5f028a6792a8a994be2d89c4b7502f748->enter($__internal_544825b1a9cd8073bc5ec8025ca0ddf5f028a6792a8a994be2d89c4b7502f748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_544825b1a9cd8073bc5ec8025ca0ddf5f028a6792a8a994be2d89c4b7502f748->leave($__internal_544825b1a9cd8073bc5ec8025ca0ddf5f028a6792a8a994be2d89c4b7502f748_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75019f5fed360f0cfc5a3d17af2db4a57f64f0c5f5b2928a8366e99dea2811fc = $this->env->getExtension("native_profiler");
        $__internal_75019f5fed360f0cfc5a3d17af2db4a57f64f0c5f5b2928a8366e99dea2811fc->enter($__internal_75019f5fed360f0cfc5a3d17af2db4a57f64f0c5f5b2928a8366e99dea2811fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75019f5fed360f0cfc5a3d17af2db4a57f64f0c5f5b2928a8366e99dea2811fc->leave($__internal_75019f5fed360f0cfc5a3d17af2db4a57f64f0c5f5b2928a8366e99dea2811fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05ea47e269311f73e1abeddf345eb4d264c224fcc887da7f347d3391cd5b76b1 = $this->env->getExtension("native_profiler");
        $__internal_05ea47e269311f73e1abeddf345eb4d264c224fcc887da7f347d3391cd5b76b1->enter($__internal_05ea47e269311f73e1abeddf345eb4d264c224fcc887da7f347d3391cd5b76b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05ea47e269311f73e1abeddf345eb4d264c224fcc887da7f347d3391cd5b76b1->leave($__internal_05ea47e269311f73e1abeddf345eb4d264c224fcc887da7f347d3391cd5b76b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
