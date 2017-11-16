<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_ab75d645390c94ebe75fd19295f804efe9fa062c741848c8de6b01524246aa8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab75d645390c94ebe75fd19295f804efe9fa062c741848c8de6b01524246aa8a->enter($__internal_ab75d645390c94ebe75fd19295f804efe9fa062c741848c8de6b01524246aa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_40b25784dd9f1db50e983cbcf1418757351ad8cd3cb4d2302f31714ca7a95ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b25784dd9f1db50e983cbcf1418757351ad8cd3cb4d2302f31714ca7a95ebb->enter($__internal_40b25784dd9f1db50e983cbcf1418757351ad8cd3cb4d2302f31714ca7a95ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab75d645390c94ebe75fd19295f804efe9fa062c741848c8de6b01524246aa8a->leave($__internal_ab75d645390c94ebe75fd19295f804efe9fa062c741848c8de6b01524246aa8a_prof);

        
        $__internal_40b25784dd9f1db50e983cbcf1418757351ad8cd3cb4d2302f31714ca7a95ebb->leave($__internal_40b25784dd9f1db50e983cbcf1418757351ad8cd3cb4d2302f31714ca7a95ebb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0887cc07285c0a82f48df5c5a155990a148e52940d0ade767ce7f87d53c14fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0887cc07285c0a82f48df5c5a155990a148e52940d0ade767ce7f87d53c14fa8->enter($__internal_0887cc07285c0a82f48df5c5a155990a148e52940d0ade767ce7f87d53c14fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_693e9907ec7b669a68bd564309d64e24aef3475ef1445eb921aff0bdbcb8db79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693e9907ec7b669a68bd564309d64e24aef3475ef1445eb921aff0bdbcb8db79->enter($__internal_693e9907ec7b669a68bd564309d64e24aef3475ef1445eb921aff0bdbcb8db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_693e9907ec7b669a68bd564309d64e24aef3475ef1445eb921aff0bdbcb8db79->leave($__internal_693e9907ec7b669a68bd564309d64e24aef3475ef1445eb921aff0bdbcb8db79_prof);

        
        $__internal_0887cc07285c0a82f48df5c5a155990a148e52940d0ade767ce7f87d53c14fa8->leave($__internal_0887cc07285c0a82f48df5c5a155990a148e52940d0ade767ce7f87d53c14fa8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23113fd561f0cf85941c1513eaf48e82cef8bedc741f24323618c7ad8792a028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23113fd561f0cf85941c1513eaf48e82cef8bedc741f24323618c7ad8792a028->enter($__internal_23113fd561f0cf85941c1513eaf48e82cef8bedc741f24323618c7ad8792a028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e9445e1e9b2baeee479c0bbcd58818c66a53372b4bd0be37b3b9794d19f53bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9445e1e9b2baeee479c0bbcd58818c66a53372b4bd0be37b3b9794d19f53bf->enter($__internal_2e9445e1e9b2baeee479c0bbcd58818c66a53372b4bd0be37b3b9794d19f53bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e9445e1e9b2baeee479c0bbcd58818c66a53372b4bd0be37b3b9794d19f53bf->leave($__internal_2e9445e1e9b2baeee479c0bbcd58818c66a53372b4bd0be37b3b9794d19f53bf_prof);

        
        $__internal_23113fd561f0cf85941c1513eaf48e82cef8bedc741f24323618c7ad8792a028->leave($__internal_23113fd561f0cf85941c1513eaf48e82cef8bedc741f24323618c7ad8792a028_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebb8f063612f0e6ba2e889334a27d76a32b2e410a42d636b3eee230b08e5df54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb8f063612f0e6ba2e889334a27d76a32b2e410a42d636b3eee230b08e5df54->enter($__internal_ebb8f063612f0e6ba2e889334a27d76a32b2e410a42d636b3eee230b08e5df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_284106699f11a071b396e3d9a9d08bf75472c9354e5eef618aa6232b62c0c8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284106699f11a071b396e3d9a9d08bf75472c9354e5eef618aa6232b62c0c8cb->enter($__internal_284106699f11a071b396e3d9a9d08bf75472c9354e5eef618aa6232b62c0c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_284106699f11a071b396e3d9a9d08bf75472c9354e5eef618aa6232b62c0c8cb->leave($__internal_284106699f11a071b396e3d9a9d08bf75472c9354e5eef618aa6232b62c0c8cb_prof);

        
        $__internal_ebb8f063612f0e6ba2e889334a27d76a32b2e410a42d636b3eee230b08e5df54->leave($__internal_ebb8f063612f0e6ba2e889334a27d76a32b2e410a42d636b3eee230b08e5df54_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
