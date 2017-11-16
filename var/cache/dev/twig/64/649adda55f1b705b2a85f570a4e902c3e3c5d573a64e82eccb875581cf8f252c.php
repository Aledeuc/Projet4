<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_4beb4d5349000dd81207b7518aa981107b2f10d772c4142e1f9745dbc4e66e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4beb4d5349000dd81207b7518aa981107b2f10d772c4142e1f9745dbc4e66e4e->enter($__internal_4beb4d5349000dd81207b7518aa981107b2f10d772c4142e1f9745dbc4e66e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba613fe9f93c3d06a16694ba6087ed1e4000b4f9e2d89e183845cf824c7c62a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba613fe9f93c3d06a16694ba6087ed1e4000b4f9e2d89e183845cf824c7c62a1->enter($__internal_ba613fe9f93c3d06a16694ba6087ed1e4000b4f9e2d89e183845cf824c7c62a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4beb4d5349000dd81207b7518aa981107b2f10d772c4142e1f9745dbc4e66e4e->leave($__internal_4beb4d5349000dd81207b7518aa981107b2f10d772c4142e1f9745dbc4e66e4e_prof);

        
        $__internal_ba613fe9f93c3d06a16694ba6087ed1e4000b4f9e2d89e183845cf824c7c62a1->leave($__internal_ba613fe9f93c3d06a16694ba6087ed1e4000b4f9e2d89e183845cf824c7c62a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3e5aaf49163930aafc460f477bddf67dee8916d1481d990f05bb673f7c22e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e5aaf49163930aafc460f477bddf67dee8916d1481d990f05bb673f7c22e7f->enter($__internal_d3e5aaf49163930aafc460f477bddf67dee8916d1481d990f05bb673f7c22e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4750cd70df73060ee2e697e20b918197bb2875922b5c5b2661fd3576a46fe11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4750cd70df73060ee2e697e20b918197bb2875922b5c5b2661fd3576a46fe11d->enter($__internal_4750cd70df73060ee2e697e20b918197bb2875922b5c5b2661fd3576a46fe11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4750cd70df73060ee2e697e20b918197bb2875922b5c5b2661fd3576a46fe11d->leave($__internal_4750cd70df73060ee2e697e20b918197bb2875922b5c5b2661fd3576a46fe11d_prof);

        
        $__internal_d3e5aaf49163930aafc460f477bddf67dee8916d1481d990f05bb673f7c22e7f->leave($__internal_d3e5aaf49163930aafc460f477bddf67dee8916d1481d990f05bb673f7c22e7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0761a7e4f64b157b8f795bf21503b5d18ea86510817146bf321022c5a0a84e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0761a7e4f64b157b8f795bf21503b5d18ea86510817146bf321022c5a0a84e40->enter($__internal_0761a7e4f64b157b8f795bf21503b5d18ea86510817146bf321022c5a0a84e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_412a2e00fae2b073087f7638e5998a7393975fe1d3228f17449a7e819cd423f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412a2e00fae2b073087f7638e5998a7393975fe1d3228f17449a7e819cd423f1->enter($__internal_412a2e00fae2b073087f7638e5998a7393975fe1d3228f17449a7e819cd423f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_412a2e00fae2b073087f7638e5998a7393975fe1d3228f17449a7e819cd423f1->leave($__internal_412a2e00fae2b073087f7638e5998a7393975fe1d3228f17449a7e819cd423f1_prof);

        
        $__internal_0761a7e4f64b157b8f795bf21503b5d18ea86510817146bf321022c5a0a84e40->leave($__internal_0761a7e4f64b157b8f795bf21503b5d18ea86510817146bf321022c5a0a84e40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c3d18b9856d1fbdb4a4374bf567e5d6e91081af93530de0836758ed50ade562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3d18b9856d1fbdb4a4374bf567e5d6e91081af93530de0836758ed50ade562->enter($__internal_6c3d18b9856d1fbdb4a4374bf567e5d6e91081af93530de0836758ed50ade562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87d4e634988f6231367bee282c2c2790704c057f043e57559fa56b663e38a4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d4e634988f6231367bee282c2c2790704c057f043e57559fa56b663e38a4a3->enter($__internal_87d4e634988f6231367bee282c2c2790704c057f043e57559fa56b663e38a4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87d4e634988f6231367bee282c2c2790704c057f043e57559fa56b663e38a4a3->leave($__internal_87d4e634988f6231367bee282c2c2790704c057f043e57559fa56b663e38a4a3_prof);

        
        $__internal_6c3d18b9856d1fbdb4a4374bf567e5d6e91081af93530de0836758ed50ade562->leave($__internal_6c3d18b9856d1fbdb4a4374bf567e5d6e91081af93530de0836758ed50ade562_prof);

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
