<?php

/* default/index.html.twig */
class __TwigTemplate_e4d7cf99809b19ead9d1444354eeec08d06839731b59be0475b35603b45709a6 extends Twig_Template
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
        $__internal_98e80fe2bc93b027e2c12a873e29e8b5932fa4f4775a881092824629fb1571e9 = $this->env->getExtension("native_profiler");
        $__internal_98e80fe2bc93b027e2c12a873e29e8b5932fa4f4775a881092824629fb1571e9->enter($__internal_98e80fe2bc93b027e2c12a873e29e8b5932fa4f4775a881092824629fb1571e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "FOSUserBundle::layout.html.twig");
        echo "

<style>
    body{background-color:#eee}
    h1{text-align: center}
</style>

<div ng-controller=\"indexController\">



    <h1>Willkommen bei Spendenverbindet!</h1>

    ";
        // line 14
        echo "{{ message }}";
        echo "


    <div id=\"demo\"><h2>Let AJAX change this text</h2></div>

    <button type=\"button\" onclick=\"loadDoc()\">Change Content</button>

    <script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(\"demo\").innerHTML = this.responseText;
            }
        };
        xhttp.open(\"GET\", \"testCall\", true);
        xhttp.send();
    }
    </script>


</div>

</body>
</html>

";
        
        $__internal_98e80fe2bc93b027e2c12a873e29e8b5932fa4f4775a881092824629fb1571e9->leave($__internal_98e80fe2bc93b027e2c12a873e29e8b5932fa4f4775a881092824629fb1571e9_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  22 => 1,);
    }
}
/* {{ include("FOSUserBundle::layout.html.twig") }}*/
/* */
/* <style>*/
/*     body{background-color:#eee}*/
/*     h1{text-align: center}*/
/* </style>*/
/* */
/* <div ng-controller="indexController">*/
/* */
/* */
/* */
/*     <h1>Willkommen bei Spendenverbindet!</h1>*/
/* */
/*     {{ '{{ message }}' }}*/
/* */
/* */
/*     <div id="demo"><h2>Let AJAX change this text</h2></div>*/
/* */
/*     <button type="button" onclick="loadDoc()">Change Content</button>*/
/* */
/*     <script>*/
/*     function loadDoc() {*/
/*         var xhttp = new XMLHttpRequest();*/
/*         xhttp.onreadystatechange = function() {*/
/*             if (this.readyState == 4 && this.status == 200) {*/
/*                 document.getElementById("demo").innerHTML = this.responseText;*/
/*             }*/
/*         };*/
/*         xhttp.open("GET", "testCall", true);*/
/*         xhttp.send();*/
/*     }*/
/*     </script>*/
/* */
/* */
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
