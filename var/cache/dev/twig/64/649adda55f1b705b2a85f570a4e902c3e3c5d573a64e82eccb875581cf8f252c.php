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
        $__internal_b7131a69af855e887a88e9e35ddad00ab03cc713f957ed2732f6fba09f7f701f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7131a69af855e887a88e9e35ddad00ab03cc713f957ed2732f6fba09f7f701f->enter($__internal_b7131a69af855e887a88e9e35ddad00ab03cc713f957ed2732f6fba09f7f701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_be5aec5aa145b1e365e3c3433829f5a14002a036b3d14c615f8484b3907d2912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5aec5aa145b1e365e3c3433829f5a14002a036b3d14c615f8484b3907d2912->enter($__internal_be5aec5aa145b1e365e3c3433829f5a14002a036b3d14c615f8484b3907d2912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7131a69af855e887a88e9e35ddad00ab03cc713f957ed2732f6fba09f7f701f->leave($__internal_b7131a69af855e887a88e9e35ddad00ab03cc713f957ed2732f6fba09f7f701f_prof);

        
        $__internal_be5aec5aa145b1e365e3c3433829f5a14002a036b3d14c615f8484b3907d2912->leave($__internal_be5aec5aa145b1e365e3c3433829f5a14002a036b3d14c615f8484b3907d2912_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcbff870a54c24420cc730ae545171fdb6a170a247dc0ba4a7b2bfcc14a5c6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbff870a54c24420cc730ae545171fdb6a170a247dc0ba4a7b2bfcc14a5c6f0->enter($__internal_fcbff870a54c24420cc730ae545171fdb6a170a247dc0ba4a7b2bfcc14a5c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f01d0c46ec5ff64dafb064f0f30928aad26b19973c7d2c9f819f7e9af2aa7348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01d0c46ec5ff64dafb064f0f30928aad26b19973c7d2c9f819f7e9af2aa7348->enter($__internal_f01d0c46ec5ff64dafb064f0f30928aad26b19973c7d2c9f819f7e9af2aa7348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f01d0c46ec5ff64dafb064f0f30928aad26b19973c7d2c9f819f7e9af2aa7348->leave($__internal_f01d0c46ec5ff64dafb064f0f30928aad26b19973c7d2c9f819f7e9af2aa7348_prof);

        
        $__internal_fcbff870a54c24420cc730ae545171fdb6a170a247dc0ba4a7b2bfcc14a5c6f0->leave($__internal_fcbff870a54c24420cc730ae545171fdb6a170a247dc0ba4a7b2bfcc14a5c6f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd6c5e0553f07059126b9ab67de92122f7158148bbb2b5a596c3273fbdb531b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6c5e0553f07059126b9ab67de92122f7158148bbb2b5a596c3273fbdb531b2->enter($__internal_dd6c5e0553f07059126b9ab67de92122f7158148bbb2b5a596c3273fbdb531b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f82e611d10ee63f49f7dd2f9f8f9074d96fc801e533aeb83acc37ffa587039e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82e611d10ee63f49f7dd2f9f8f9074d96fc801e533aeb83acc37ffa587039e4->enter($__internal_f82e611d10ee63f49f7dd2f9f8f9074d96fc801e533aeb83acc37ffa587039e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f82e611d10ee63f49f7dd2f9f8f9074d96fc801e533aeb83acc37ffa587039e4->leave($__internal_f82e611d10ee63f49f7dd2f9f8f9074d96fc801e533aeb83acc37ffa587039e4_prof);

        
        $__internal_dd6c5e0553f07059126b9ab67de92122f7158148bbb2b5a596c3273fbdb531b2->leave($__internal_dd6c5e0553f07059126b9ab67de92122f7158148bbb2b5a596c3273fbdb531b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f6fcd6234d78be919f62c56bdc8497d9b959cb172031222acfd6614e5c44ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6fcd6234d78be919f62c56bdc8497d9b959cb172031222acfd6614e5c44ac8->enter($__internal_9f6fcd6234d78be919f62c56bdc8497d9b959cb172031222acfd6614e5c44ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_829f9c42ac2e17f1f5da9bd2cd60b63b3625448c4712aad4338fe212f7fdbd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829f9c42ac2e17f1f5da9bd2cd60b63b3625448c4712aad4338fe212f7fdbd3c->enter($__internal_829f9c42ac2e17f1f5da9bd2cd60b63b3625448c4712aad4338fe212f7fdbd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_829f9c42ac2e17f1f5da9bd2cd60b63b3625448c4712aad4338fe212f7fdbd3c->leave($__internal_829f9c42ac2e17f1f5da9bd2cd60b63b3625448c4712aad4338fe212f7fdbd3c_prof);

        
        $__internal_9f6fcd6234d78be919f62c56bdc8497d9b959cb172031222acfd6614e5c44ac8->leave($__internal_9f6fcd6234d78be919f62c56bdc8497d9b959cb172031222acfd6614e5c44ac8_prof);

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
