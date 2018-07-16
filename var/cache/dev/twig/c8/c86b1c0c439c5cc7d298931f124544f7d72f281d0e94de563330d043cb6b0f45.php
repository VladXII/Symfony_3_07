<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bfa1798610e6ef1f3691f76698d66d0973f7a4c824d80f67706401ffb0012c3d extends Twig_Template
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
        $__internal_6c4d0c37a492d75ca96bc053f7443ab8df0cbee9a1d9e756c34cd0ab1e8d549b = $this->env->getExtension("native_profiler");
        $__internal_6c4d0c37a492d75ca96bc053f7443ab8df0cbee9a1d9e756c34cd0ab1e8d549b->enter($__internal_6c4d0c37a492d75ca96bc053f7443ab8df0cbee9a1d9e756c34cd0ab1e8d549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4d0c37a492d75ca96bc053f7443ab8df0cbee9a1d9e756c34cd0ab1e8d549b->leave($__internal_6c4d0c37a492d75ca96bc053f7443ab8df0cbee9a1d9e756c34cd0ab1e8d549b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_145325cad15c28a57f354bdde8ce6522df71dbc693818e7f1958227f6864785f = $this->env->getExtension("native_profiler");
        $__internal_145325cad15c28a57f354bdde8ce6522df71dbc693818e7f1958227f6864785f->enter($__internal_145325cad15c28a57f354bdde8ce6522df71dbc693818e7f1958227f6864785f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_145325cad15c28a57f354bdde8ce6522df71dbc693818e7f1958227f6864785f->leave($__internal_145325cad15c28a57f354bdde8ce6522df71dbc693818e7f1958227f6864785f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4342406b098c8f00ce8e521b38ce58d48836b847a5857b1d3d6320887f789a42 = $this->env->getExtension("native_profiler");
        $__internal_4342406b098c8f00ce8e521b38ce58d48836b847a5857b1d3d6320887f789a42->enter($__internal_4342406b098c8f00ce8e521b38ce58d48836b847a5857b1d3d6320887f789a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4342406b098c8f00ce8e521b38ce58d48836b847a5857b1d3d6320887f789a42->leave($__internal_4342406b098c8f00ce8e521b38ce58d48836b847a5857b1d3d6320887f789a42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8641807d76268b2689e12df525914eb8042b08b335048359b2fef657b2d67160 = $this->env->getExtension("native_profiler");
        $__internal_8641807d76268b2689e12df525914eb8042b08b335048359b2fef657b2d67160->enter($__internal_8641807d76268b2689e12df525914eb8042b08b335048359b2fef657b2d67160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8641807d76268b2689e12df525914eb8042b08b335048359b2fef657b2d67160->leave($__internal_8641807d76268b2689e12df525914eb8042b08b335048359b2fef657b2d67160_prof);

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
