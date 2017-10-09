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
        $__internal_84c79ef7f8dde835c586ef30acb36a70cdf4432a6f90d6aedff6d6b2b67987e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c79ef7f8dde835c586ef30acb36a70cdf4432a6f90d6aedff6d6b2b67987e0->enter($__internal_84c79ef7f8dde835c586ef30acb36a70cdf4432a6f90d6aedff6d6b2b67987e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_47005c134b3a0b565b2860e12dcafe00f21a1edef169af75a752486dff63f7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47005c134b3a0b565b2860e12dcafe00f21a1edef169af75a752486dff63f7d3->enter($__internal_47005c134b3a0b565b2860e12dcafe00f21a1edef169af75a752486dff63f7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c79ef7f8dde835c586ef30acb36a70cdf4432a6f90d6aedff6d6b2b67987e0->leave($__internal_84c79ef7f8dde835c586ef30acb36a70cdf4432a6f90d6aedff6d6b2b67987e0_prof);

        
        $__internal_47005c134b3a0b565b2860e12dcafe00f21a1edef169af75a752486dff63f7d3->leave($__internal_47005c134b3a0b565b2860e12dcafe00f21a1edef169af75a752486dff63f7d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2ac99adfbe7216983ff7f43d7fde92960cf2c9f895a44e6a5816921a4f52c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ac99adfbe7216983ff7f43d7fde92960cf2c9f895a44e6a5816921a4f52c69->enter($__internal_f2ac99adfbe7216983ff7f43d7fde92960cf2c9f895a44e6a5816921a4f52c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_644f8bf04dce4fc0354628cfa800319db5b00924c5afb15fb606098b9666365a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644f8bf04dce4fc0354628cfa800319db5b00924c5afb15fb606098b9666365a->enter($__internal_644f8bf04dce4fc0354628cfa800319db5b00924c5afb15fb606098b9666365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_644f8bf04dce4fc0354628cfa800319db5b00924c5afb15fb606098b9666365a->leave($__internal_644f8bf04dce4fc0354628cfa800319db5b00924c5afb15fb606098b9666365a_prof);

        
        $__internal_f2ac99adfbe7216983ff7f43d7fde92960cf2c9f895a44e6a5816921a4f52c69->leave($__internal_f2ac99adfbe7216983ff7f43d7fde92960cf2c9f895a44e6a5816921a4f52c69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_126777a169c0d674fc42e594bee4900394a63be7d1ee525fecfaefcbeeb3c327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126777a169c0d674fc42e594bee4900394a63be7d1ee525fecfaefcbeeb3c327->enter($__internal_126777a169c0d674fc42e594bee4900394a63be7d1ee525fecfaefcbeeb3c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fcf0f5fddec12f51b8c89be9381924f2d1d960352dde87f144c0a871404dbc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf0f5fddec12f51b8c89be9381924f2d1d960352dde87f144c0a871404dbc7c->enter($__internal_fcf0f5fddec12f51b8c89be9381924f2d1d960352dde87f144c0a871404dbc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcf0f5fddec12f51b8c89be9381924f2d1d960352dde87f144c0a871404dbc7c->leave($__internal_fcf0f5fddec12f51b8c89be9381924f2d1d960352dde87f144c0a871404dbc7c_prof);

        
        $__internal_126777a169c0d674fc42e594bee4900394a63be7d1ee525fecfaefcbeeb3c327->leave($__internal_126777a169c0d674fc42e594bee4900394a63be7d1ee525fecfaefcbeeb3c327_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c386b31cb02d97af1391dfadaf772ed679a79a4c7e135ca73ce2c276275fe008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c386b31cb02d97af1391dfadaf772ed679a79a4c7e135ca73ce2c276275fe008->enter($__internal_c386b31cb02d97af1391dfadaf772ed679a79a4c7e135ca73ce2c276275fe008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26b45b9c833faf96312fa5d3e6bc9a5ea83d343406e096c78efec6e7a9a2b037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b45b9c833faf96312fa5d3e6bc9a5ea83d343406e096c78efec6e7a9a2b037->enter($__internal_26b45b9c833faf96312fa5d3e6bc9a5ea83d343406e096c78efec6e7a9a2b037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26b45b9c833faf96312fa5d3e6bc9a5ea83d343406e096c78efec6e7a9a2b037->leave($__internal_26b45b9c833faf96312fa5d3e6bc9a5ea83d343406e096c78efec6e7a9a2b037_prof);

        
        $__internal_c386b31cb02d97af1391dfadaf772ed679a79a4c7e135ca73ce2c276275fe008->leave($__internal_c386b31cb02d97af1391dfadaf772ed679a79a4c7e135ca73ce2c276275fe008_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
