<?php

/* main/homepage.html.twig */
class __TwigTemplate_4974e06786faea4bc0efd53b5ba5f97c96451ff1757ffa7c78fea43b39b1cfc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3e07dcaf6148eb0100dfa464791fded4bce4f08e350fe81e7f524e5af797ec = $this->env->getExtension("native_profiler");
        $__internal_6e3e07dcaf6148eb0100dfa464791fded4bce4f08e350fe81e7f524e5af797ec->enter($__internal_6e3e07dcaf6148eb0100dfa464791fded4bce4f08e350fe81e7f524e5af797ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3e07dcaf6148eb0100dfa464791fded4bce4f08e350fe81e7f524e5af797ec->leave($__internal_6e3e07dcaf6148eb0100dfa464791fded4bce4f08e350fe81e7f524e5af797ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17999b65d9b0682afe121c8ec51454a3c69a9014b7041d2b94cec1598cf9d6cc = $this->env->getExtension("native_profiler");
        $__internal_17999b65d9b0682afe121c8ec51454a3c69a9014b7041d2b94cec1598cf9d6cc->enter($__internal_17999b65d9b0682afe121c8ec51454a3c69a9014b7041d2b94cec1598cf9d6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_17999b65d9b0682afe121c8ec51454a3c69a9014b7041d2b94cec1598cf9d6cc->leave($__internal_17999b65d9b0682afe121c8ec51454a3c69a9014b7041d2b94cec1598cf9d6cc_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
