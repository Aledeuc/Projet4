<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_4620904388c5cf05a78ba147b8020776f54981bf5a88746965c96c79546eb34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4620904388c5cf05a78ba147b8020776f54981bf5a88746965c96c79546eb34a->enter($__internal_4620904388c5cf05a78ba147b8020776f54981bf5a88746965c96c79546eb34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_160029aaf08726c6655f7037fdc11f8bd25add463533d41c1a3dd6ffdf676e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160029aaf08726c6655f7037fdc11f8bd25add463533d41c1a3dd6ffdf676e55->enter($__internal_160029aaf08726c6655f7037fdc11f8bd25add463533d41c1a3dd6ffdf676e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4620904388c5cf05a78ba147b8020776f54981bf5a88746965c96c79546eb34a->leave($__internal_4620904388c5cf05a78ba147b8020776f54981bf5a88746965c96c79546eb34a_prof);

        
        $__internal_160029aaf08726c6655f7037fdc11f8bd25add463533d41c1a3dd6ffdf676e55->leave($__internal_160029aaf08726c6655f7037fdc11f8bd25add463533d41c1a3dd6ffdf676e55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f53021402e44324291268370019f330f89a1836d914e5cdf91a017739d945ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f53021402e44324291268370019f330f89a1836d914e5cdf91a017739d945ee->enter($__internal_9f53021402e44324291268370019f330f89a1836d914e5cdf91a017739d945ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37906073ae327e4587c5b5b575b34a904ddf2d13824d06beece3cee722c8e9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37906073ae327e4587c5b5b575b34a904ddf2d13824d06beece3cee722c8e9c9->enter($__internal_37906073ae327e4587c5b5b575b34a904ddf2d13824d06beece3cee722c8e9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_37906073ae327e4587c5b5b575b34a904ddf2d13824d06beece3cee722c8e9c9->leave($__internal_37906073ae327e4587c5b5b575b34a904ddf2d13824d06beece3cee722c8e9c9_prof);

        
        $__internal_9f53021402e44324291268370019f330f89a1836d914e5cdf91a017739d945ee->leave($__internal_9f53021402e44324291268370019f330f89a1836d914e5cdf91a017739d945ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57400f75d154479d13dde8fce458e030d0a47af93fef25b84a99aa983925c23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57400f75d154479d13dde8fce458e030d0a47af93fef25b84a99aa983925c23a->enter($__internal_57400f75d154479d13dde8fce458e030d0a47af93fef25b84a99aa983925c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26af8d6ac638035a7bc7c3a46d2855494bb1daca7517c8b86301f01ab42cea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26af8d6ac638035a7bc7c3a46d2855494bb1daca7517c8b86301f01ab42cea59->enter($__internal_26af8d6ac638035a7bc7c3a46d2855494bb1daca7517c8b86301f01ab42cea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_26af8d6ac638035a7bc7c3a46d2855494bb1daca7517c8b86301f01ab42cea59->leave($__internal_26af8d6ac638035a7bc7c3a46d2855494bb1daca7517c8b86301f01ab42cea59_prof);

        
        $__internal_57400f75d154479d13dde8fce458e030d0a47af93fef25b84a99aa983925c23a->leave($__internal_57400f75d154479d13dde8fce458e030d0a47af93fef25b84a99aa983925c23a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4664eca3b64fe340cc252b7e68c9349a12d8de0b433666f12ded7fcb41c46ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4664eca3b64fe340cc252b7e68c9349a12d8de0b433666f12ded7fcb41c46ea1->enter($__internal_4664eca3b64fe340cc252b7e68c9349a12d8de0b433666f12ded7fcb41c46ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03738bbbf6bfc8321c6e6afec478f5f1c4a7cdbc28f1ba6f51260438a4e250e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03738bbbf6bfc8321c6e6afec478f5f1c4a7cdbc28f1ba6f51260438a4e250e4->enter($__internal_03738bbbf6bfc8321c6e6afec478f5f1c4a7cdbc28f1ba6f51260438a4e250e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_03738bbbf6bfc8321c6e6afec478f5f1c4a7cdbc28f1ba6f51260438a4e250e4->leave($__internal_03738bbbf6bfc8321c6e6afec478f5f1c4a7cdbc28f1ba6f51260438a4e250e4_prof);

        
        $__internal_4664eca3b64fe340cc252b7e68c9349a12d8de0b433666f12ded7fcb41c46ea1->leave($__internal_4664eca3b64fe340cc252b7e68c9349a12d8de0b433666f12ded7fcb41c46ea1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
