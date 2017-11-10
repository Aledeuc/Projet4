<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca8d0295f2918c4784c02010ec0d84d4614009b680bcb4663c8aa161153355b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8d0295f2918c4784c02010ec0d84d4614009b680bcb4663c8aa161153355b7->enter($__internal_ca8d0295f2918c4784c02010ec0d84d4614009b680bcb4663c8aa161153355b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7c4c32fd0d7a4947f351ff64aa4800bc1f335fda59911fe917eb7dcde4bd3105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4c32fd0d7a4947f351ff64aa4800bc1f335fda59911fe917eb7dcde4bd3105->enter($__internal_7c4c32fd0d7a4947f351ff64aa4800bc1f335fda59911fe917eb7dcde4bd3105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca8d0295f2918c4784c02010ec0d84d4614009b680bcb4663c8aa161153355b7->leave($__internal_ca8d0295f2918c4784c02010ec0d84d4614009b680bcb4663c8aa161153355b7_prof);

        
        $__internal_7c4c32fd0d7a4947f351ff64aa4800bc1f335fda59911fe917eb7dcde4bd3105->leave($__internal_7c4c32fd0d7a4947f351ff64aa4800bc1f335fda59911fe917eb7dcde4bd3105_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebb6fb3c13efa97f465615531b176c3531d597fe2d3950f961087e28001b897d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb6fb3c13efa97f465615531b176c3531d597fe2d3950f961087e28001b897d->enter($__internal_ebb6fb3c13efa97f465615531b176c3531d597fe2d3950f961087e28001b897d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e260500fd3897162710437a7b09f0d7eb059edd53b2e1636f50b572801280b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e260500fd3897162710437a7b09f0d7eb059edd53b2e1636f50b572801280b7->enter($__internal_3e260500fd3897162710437a7b09f0d7eb059edd53b2e1636f50b572801280b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3e260500fd3897162710437a7b09f0d7eb059edd53b2e1636f50b572801280b7->leave($__internal_3e260500fd3897162710437a7b09f0d7eb059edd53b2e1636f50b572801280b7_prof);

        
        $__internal_ebb6fb3c13efa97f465615531b176c3531d597fe2d3950f961087e28001b897d->leave($__internal_ebb6fb3c13efa97f465615531b176c3531d597fe2d3950f961087e28001b897d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad1b5130bd16d4fddf242b419f61f50df95d563a363e69f465eca67067b148a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad1b5130bd16d4fddf242b419f61f50df95d563a363e69f465eca67067b148a->enter($__internal_1ad1b5130bd16d4fddf242b419f61f50df95d563a363e69f465eca67067b148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82183df5f7f6b42cbb5bfbee7df444ac24f41b37f4a19e0ae8bff42f954dea61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82183df5f7f6b42cbb5bfbee7df444ac24f41b37f4a19e0ae8bff42f954dea61->enter($__internal_82183df5f7f6b42cbb5bfbee7df444ac24f41b37f4a19e0ae8bff42f954dea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_82183df5f7f6b42cbb5bfbee7df444ac24f41b37f4a19e0ae8bff42f954dea61->leave($__internal_82183df5f7f6b42cbb5bfbee7df444ac24f41b37f4a19e0ae8bff42f954dea61_prof);

        
        $__internal_1ad1b5130bd16d4fddf242b419f61f50df95d563a363e69f465eca67067b148a->leave($__internal_1ad1b5130bd16d4fddf242b419f61f50df95d563a363e69f465eca67067b148a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
