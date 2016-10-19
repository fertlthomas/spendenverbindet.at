<?php

/* base.html.twig */
class __TwigTemplate_30ef0324da9ad67c73dda5a6fad7193ccbeca1ccd890df0984792b096c45e622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e21f233c9cee74ca584498ec73f8e54462394ae78cd3ba6d462c4a4cedbea444 = $this->env->getExtension("native_profiler");
        $__internal_e21f233c9cee74ca584498ec73f8e54462394ae78cd3ba6d462c4a4cedbea444->enter($__internal_e21f233c9cee74ca584498ec73f8e54462394ae78cd3ba6d462c4a4cedbea444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e21f233c9cee74ca584498ec73f8e54462394ae78cd3ba6d462c4a4cedbea444->leave($__internal_e21f233c9cee74ca584498ec73f8e54462394ae78cd3ba6d462c4a4cedbea444_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0596bfcb3196ab2d017f00e95e21ad0c0a6d5f4a3735829a84d219ddc9e028c1 = $this->env->getExtension("native_profiler");
        $__internal_0596bfcb3196ab2d017f00e95e21ad0c0a6d5f4a3735829a84d219ddc9e028c1->enter($__internal_0596bfcb3196ab2d017f00e95e21ad0c0a6d5f4a3735829a84d219ddc9e028c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0596bfcb3196ab2d017f00e95e21ad0c0a6d5f4a3735829a84d219ddc9e028c1->leave($__internal_0596bfcb3196ab2d017f00e95e21ad0c0a6d5f4a3735829a84d219ddc9e028c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db340c1cda8d97083cd560986cb5798e1c90bbaf5426e8b778fc2453d9732cff = $this->env->getExtension("native_profiler");
        $__internal_db340c1cda8d97083cd560986cb5798e1c90bbaf5426e8b778fc2453d9732cff->enter($__internal_db340c1cda8d97083cd560986cb5798e1c90bbaf5426e8b778fc2453d9732cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db340c1cda8d97083cd560986cb5798e1c90bbaf5426e8b778fc2453d9732cff->leave($__internal_db340c1cda8d97083cd560986cb5798e1c90bbaf5426e8b778fc2453d9732cff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a651df47f8b2fd085556877ae598ac1f64e89f0a2366af30e7001627f7a91faa = $this->env->getExtension("native_profiler");
        $__internal_a651df47f8b2fd085556877ae598ac1f64e89f0a2366af30e7001627f7a91faa->enter($__internal_a651df47f8b2fd085556877ae598ac1f64e89f0a2366af30e7001627f7a91faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a651df47f8b2fd085556877ae598ac1f64e89f0a2366af30e7001627f7a91faa->leave($__internal_a651df47f8b2fd085556877ae598ac1f64e89f0a2366af30e7001627f7a91faa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6da7fa024b150eac88e223c86f0389291b4a396ffbe4861bd701aaf8d6a83e56 = $this->env->getExtension("native_profiler");
        $__internal_6da7fa024b150eac88e223c86f0389291b4a396ffbe4861bd701aaf8d6a83e56->enter($__internal_6da7fa024b150eac88e223c86f0389291b4a396ffbe4861bd701aaf8d6a83e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6da7fa024b150eac88e223c86f0389291b4a396ffbe4861bd701aaf8d6a83e56->leave($__internal_6da7fa024b150eac88e223c86f0389291b4a396ffbe4861bd701aaf8d6a83e56_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
