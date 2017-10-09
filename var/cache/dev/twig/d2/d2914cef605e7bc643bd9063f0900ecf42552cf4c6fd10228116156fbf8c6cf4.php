<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d180a32bfa13f9e61c734866501950104f0f7f7fdff65653ef564c01a233e423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_351522c6eda0dc8485e2e906ee063983fb31c64a290d5f6083c5abcacb669587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351522c6eda0dc8485e2e906ee063983fb31c64a290d5f6083c5abcacb669587->enter($__internal_351522c6eda0dc8485e2e906ee063983fb31c64a290d5f6083c5abcacb669587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e88e9a1a6660de7a0251759d947779cc82739678828cd2ec6e235dd0564d9312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88e9a1a6660de7a0251759d947779cc82739678828cd2ec6e235dd0564d9312->enter($__internal_e88e9a1a6660de7a0251759d947779cc82739678828cd2ec6e235dd0564d9312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351522c6eda0dc8485e2e906ee063983fb31c64a290d5f6083c5abcacb669587->leave($__internal_351522c6eda0dc8485e2e906ee063983fb31c64a290d5f6083c5abcacb669587_prof);

        
        $__internal_e88e9a1a6660de7a0251759d947779cc82739678828cd2ec6e235dd0564d9312->leave($__internal_e88e9a1a6660de7a0251759d947779cc82739678828cd2ec6e235dd0564d9312_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23ec2497b0719812722163f2f0604101abe57dbc281d64dbc106442e287334e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ec2497b0719812722163f2f0604101abe57dbc281d64dbc106442e287334e3->enter($__internal_23ec2497b0719812722163f2f0604101abe57dbc281d64dbc106442e287334e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2f28b537ee8ffd79ace326ec37e74163d6636e9581113f28db5e0c6c448d6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f28b537ee8ffd79ace326ec37e74163d6636e9581113f28db5e0c6c448d6e5->enter($__internal_f2f28b537ee8ffd79ace326ec37e74163d6636e9581113f28db5e0c6c448d6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f2f28b537ee8ffd79ace326ec37e74163d6636e9581113f28db5e0c6c448d6e5->leave($__internal_f2f28b537ee8ffd79ace326ec37e74163d6636e9581113f28db5e0c6c448d6e5_prof);

        
        $__internal_23ec2497b0719812722163f2f0604101abe57dbc281d64dbc106442e287334e3->leave($__internal_23ec2497b0719812722163f2f0604101abe57dbc281d64dbc106442e287334e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42e53a0a6395cc45645ee4c6571fd7c5f4c80950e593f2ca64644c969ac58aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e53a0a6395cc45645ee4c6571fd7c5f4c80950e593f2ca64644c969ac58aa5->enter($__internal_42e53a0a6395cc45645ee4c6571fd7c5f4c80950e593f2ca64644c969ac58aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5030a6482ce0ea9fed757664929e15212f152b7c2734b4a6dd9cd589b0fdb21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5030a6482ce0ea9fed757664929e15212f152b7c2734b4a6dd9cd589b0fdb21d->enter($__internal_5030a6482ce0ea9fed757664929e15212f152b7c2734b4a6dd9cd589b0fdb21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5030a6482ce0ea9fed757664929e15212f152b7c2734b4a6dd9cd589b0fdb21d->leave($__internal_5030a6482ce0ea9fed757664929e15212f152b7c2734b4a6dd9cd589b0fdb21d_prof);

        
        $__internal_42e53a0a6395cc45645ee4c6571fd7c5f4c80950e593f2ca64644c969ac58aa5->leave($__internal_42e53a0a6395cc45645ee4c6571fd7c5f4c80950e593f2ca64644c969ac58aa5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_270d739db8b990ac5ad9fe6a18b20f2e71c4a78b00afd20e2d09ce5b02934593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270d739db8b990ac5ad9fe6a18b20f2e71c4a78b00afd20e2d09ce5b02934593->enter($__internal_270d739db8b990ac5ad9fe6a18b20f2e71c4a78b00afd20e2d09ce5b02934593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee3ab01af04029d73fe94dc08425561e409f83337bfea9fa5c5cd3579a1747e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3ab01af04029d73fe94dc08425561e409f83337bfea9fa5c5cd3579a1747e7->enter($__internal_ee3ab01af04029d73fe94dc08425561e409f83337bfea9fa5c5cd3579a1747e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee3ab01af04029d73fe94dc08425561e409f83337bfea9fa5c5cd3579a1747e7->leave($__internal_ee3ab01af04029d73fe94dc08425561e409f83337bfea9fa5c5cd3579a1747e7_prof);

        
        $__internal_270d739db8b990ac5ad9fe6a18b20f2e71c4a78b00afd20e2d09ce5b02934593->leave($__internal_270d739db8b990ac5ad9fe6a18b20f2e71c4a78b00afd20e2d09ce5b02934593_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
