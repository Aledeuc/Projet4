<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_b571169e272def38bc088cfed9b1806524736f524bfb660082a12054d74e9426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b571169e272def38bc088cfed9b1806524736f524bfb660082a12054d74e9426->enter($__internal_b571169e272def38bc088cfed9b1806524736f524bfb660082a12054d74e9426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b5bc505be31443fa498c7584388bb81a1570818179f0be34cbe10270a2417ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5bc505be31443fa498c7584388bb81a1570818179f0be34cbe10270a2417ce->enter($__internal_3b5bc505be31443fa498c7584388bb81a1570818179f0be34cbe10270a2417ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b571169e272def38bc088cfed9b1806524736f524bfb660082a12054d74e9426->leave($__internal_b571169e272def38bc088cfed9b1806524736f524bfb660082a12054d74e9426_prof);

        
        $__internal_3b5bc505be31443fa498c7584388bb81a1570818179f0be34cbe10270a2417ce->leave($__internal_3b5bc505be31443fa498c7584388bb81a1570818179f0be34cbe10270a2417ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2965789589758a5cad67baf4e1f7e8a800d21696b65283184dfc00e3527c95c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2965789589758a5cad67baf4e1f7e8a800d21696b65283184dfc00e3527c95c4->enter($__internal_2965789589758a5cad67baf4e1f7e8a800d21696b65283184dfc00e3527c95c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2166ab4de74d5098d65ab40782c00b3f1a60a6b153ad01e995e88257128d6bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2166ab4de74d5098d65ab40782c00b3f1a60a6b153ad01e995e88257128d6bb5->enter($__internal_2166ab4de74d5098d65ab40782c00b3f1a60a6b153ad01e995e88257128d6bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2166ab4de74d5098d65ab40782c00b3f1a60a6b153ad01e995e88257128d6bb5->leave($__internal_2166ab4de74d5098d65ab40782c00b3f1a60a6b153ad01e995e88257128d6bb5_prof);

        
        $__internal_2965789589758a5cad67baf4e1f7e8a800d21696b65283184dfc00e3527c95c4->leave($__internal_2965789589758a5cad67baf4e1f7e8a800d21696b65283184dfc00e3527c95c4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad6ede1cfd6b280a168a3ad3973f4e80af4a49e5b26d5e0704c8cb8bd822a0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6ede1cfd6b280a168a3ad3973f4e80af4a49e5b26d5e0704c8cb8bd822a0b6->enter($__internal_ad6ede1cfd6b280a168a3ad3973f4e80af4a49e5b26d5e0704c8cb8bd822a0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c06fc6ab5f757a3629d97ade70175e4e0e6329173b770e1573a1e53ee338c45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06fc6ab5f757a3629d97ade70175e4e0e6329173b770e1573a1e53ee338c45a->enter($__internal_c06fc6ab5f757a3629d97ade70175e4e0e6329173b770e1573a1e53ee338c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c06fc6ab5f757a3629d97ade70175e4e0e6329173b770e1573a1e53ee338c45a->leave($__internal_c06fc6ab5f757a3629d97ade70175e4e0e6329173b770e1573a1e53ee338c45a_prof);

        
        $__internal_ad6ede1cfd6b280a168a3ad3973f4e80af4a49e5b26d5e0704c8cb8bd822a0b6->leave($__internal_ad6ede1cfd6b280a168a3ad3973f4e80af4a49e5b26d5e0704c8cb8bd822a0b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59b5520064581418fc4d77abf1aff805e04596983fc3622a8d86cbf7ef3c20ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b5520064581418fc4d77abf1aff805e04596983fc3622a8d86cbf7ef3c20ae->enter($__internal_59b5520064581418fc4d77abf1aff805e04596983fc3622a8d86cbf7ef3c20ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eec70cb1e80e34a548a2e1b455b9dbe96f279423e8c67d226393edaacdd708f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec70cb1e80e34a548a2e1b455b9dbe96f279423e8c67d226393edaacdd708f6->enter($__internal_eec70cb1e80e34a548a2e1b455b9dbe96f279423e8c67d226393edaacdd708f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eec70cb1e80e34a548a2e1b455b9dbe96f279423e8c67d226393edaacdd708f6->leave($__internal_eec70cb1e80e34a548a2e1b455b9dbe96f279423e8c67d226393edaacdd708f6_prof);

        
        $__internal_59b5520064581418fc4d77abf1aff805e04596983fc3622a8d86cbf7ef3c20ae->leave($__internal_59b5520064581418fc4d77abf1aff805e04596983fc3622a8d86cbf7ef3c20ae_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
