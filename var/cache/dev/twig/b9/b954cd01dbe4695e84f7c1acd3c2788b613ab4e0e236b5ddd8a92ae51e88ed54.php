<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_34e121b3ad8c217b47a6565552a2db11de10c34f038973525ddcb0506f3d00cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ffbc78dedee269c86301d565313e23622cbf9ccb6a0951f4604f79acb1643271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbc78dedee269c86301d565313e23622cbf9ccb6a0951f4604f79acb1643271->enter($__internal_ffbc78dedee269c86301d565313e23622cbf9ccb6a0951f4604f79acb1643271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_60680a985f45b126ce518522ba25623e1f08c3acd8d96400c40ab425e62e5865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60680a985f45b126ce518522ba25623e1f08c3acd8d96400c40ab425e62e5865->enter($__internal_60680a985f45b126ce518522ba25623e1f08c3acd8d96400c40ab425e62e5865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffbc78dedee269c86301d565313e23622cbf9ccb6a0951f4604f79acb1643271->leave($__internal_ffbc78dedee269c86301d565313e23622cbf9ccb6a0951f4604f79acb1643271_prof);

        
        $__internal_60680a985f45b126ce518522ba25623e1f08c3acd8d96400c40ab425e62e5865->leave($__internal_60680a985f45b126ce518522ba25623e1f08c3acd8d96400c40ab425e62e5865_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b8f52d9e10b87f8224c03a43d28f2e3875f9229814f2ce568f23deba67c6461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8f52d9e10b87f8224c03a43d28f2e3875f9229814f2ce568f23deba67c6461->enter($__internal_8b8f52d9e10b87f8224c03a43d28f2e3875f9229814f2ce568f23deba67c6461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72404bd7b215d08fb6ddda31ac704c624e5e96c5b3bfa1a5f5c1793063f6403f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72404bd7b215d08fb6ddda31ac704c624e5e96c5b3bfa1a5f5c1793063f6403f->enter($__internal_72404bd7b215d08fb6ddda31ac704c624e5e96c5b3bfa1a5f5c1793063f6403f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72404bd7b215d08fb6ddda31ac704c624e5e96c5b3bfa1a5f5c1793063f6403f->leave($__internal_72404bd7b215d08fb6ddda31ac704c624e5e96c5b3bfa1a5f5c1793063f6403f_prof);

        
        $__internal_8b8f52d9e10b87f8224c03a43d28f2e3875f9229814f2ce568f23deba67c6461->leave($__internal_8b8f52d9e10b87f8224c03a43d28f2e3875f9229814f2ce568f23deba67c6461_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e42be6970da9739b238fe981b631497d584669896cf2f5537af3528186845dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e42be6970da9739b238fe981b631497d584669896cf2f5537af3528186845dc->enter($__internal_2e42be6970da9739b238fe981b631497d584669896cf2f5537af3528186845dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c89d4bc471b287cb1b6f0c96aa74279f6a638ac437cffb50f837547d016c573a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c89d4bc471b287cb1b6f0c96aa74279f6a638ac437cffb50f837547d016c573a->enter($__internal_c89d4bc471b287cb1b6f0c96aa74279f6a638ac437cffb50f837547d016c573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c89d4bc471b287cb1b6f0c96aa74279f6a638ac437cffb50f837547d016c573a->leave($__internal_c89d4bc471b287cb1b6f0c96aa74279f6a638ac437cffb50f837547d016c573a_prof);

        
        $__internal_2e42be6970da9739b238fe981b631497d584669896cf2f5537af3528186845dc->leave($__internal_2e42be6970da9739b238fe981b631497d584669896cf2f5537af3528186845dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_975c57524c0c592952e0a77c93bb0886b4e48f9fa9764a5c1c9d10e5d8645b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975c57524c0c592952e0a77c93bb0886b4e48f9fa9764a5c1c9d10e5d8645b1b->enter($__internal_975c57524c0c592952e0a77c93bb0886b4e48f9fa9764a5c1c9d10e5d8645b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c3fe9f743e51aebd39ec1e23ff9bce01de06878257491fa38ab83a299d07dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3fe9f743e51aebd39ec1e23ff9bce01de06878257491fa38ab83a299d07dd4->enter($__internal_4c3fe9f743e51aebd39ec1e23ff9bce01de06878257491fa38ab83a299d07dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4c3fe9f743e51aebd39ec1e23ff9bce01de06878257491fa38ab83a299d07dd4->leave($__internal_4c3fe9f743e51aebd39ec1e23ff9bce01de06878257491fa38ab83a299d07dd4_prof);

        
        $__internal_975c57524c0c592952e0a77c93bb0886b4e48f9fa9764a5c1c9d10e5d8645b1b->leave($__internal_975c57524c0c592952e0a77c93bb0886b4e48f9fa9764a5c1c9d10e5d8645b1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
