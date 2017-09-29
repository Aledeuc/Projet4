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
        $__internal_cd7787e2cbc4ddec2fac317226d589e9aef63d0f60008dff3ecbb9d47545dea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7787e2cbc4ddec2fac317226d589e9aef63d0f60008dff3ecbb9d47545dea6->enter($__internal_cd7787e2cbc4ddec2fac317226d589e9aef63d0f60008dff3ecbb9d47545dea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5bc62a66fe343fa5e1d45ce1f7c350a303cd290ca75416242e090a967047e2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc62a66fe343fa5e1d45ce1f7c350a303cd290ca75416242e090a967047e2de->enter($__internal_5bc62a66fe343fa5e1d45ce1f7c350a303cd290ca75416242e090a967047e2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7787e2cbc4ddec2fac317226d589e9aef63d0f60008dff3ecbb9d47545dea6->leave($__internal_cd7787e2cbc4ddec2fac317226d589e9aef63d0f60008dff3ecbb9d47545dea6_prof);

        
        $__internal_5bc62a66fe343fa5e1d45ce1f7c350a303cd290ca75416242e090a967047e2de->leave($__internal_5bc62a66fe343fa5e1d45ce1f7c350a303cd290ca75416242e090a967047e2de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b96d2238b67707e48595615a333d286010f03f31f7d08e0a22bf25173ca744a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96d2238b67707e48595615a333d286010f03f31f7d08e0a22bf25173ca744a3->enter($__internal_b96d2238b67707e48595615a333d286010f03f31f7d08e0a22bf25173ca744a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afbdba4c5601ab05a1d83c14943ca41f8cd297c9af12cc090e2ba824be219692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbdba4c5601ab05a1d83c14943ca41f8cd297c9af12cc090e2ba824be219692->enter($__internal_afbdba4c5601ab05a1d83c14943ca41f8cd297c9af12cc090e2ba824be219692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_afbdba4c5601ab05a1d83c14943ca41f8cd297c9af12cc090e2ba824be219692->leave($__internal_afbdba4c5601ab05a1d83c14943ca41f8cd297c9af12cc090e2ba824be219692_prof);

        
        $__internal_b96d2238b67707e48595615a333d286010f03f31f7d08e0a22bf25173ca744a3->leave($__internal_b96d2238b67707e48595615a333d286010f03f31f7d08e0a22bf25173ca744a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_996dd14d497c48ba8c906c792e466bf58200f26d3907d022769dece99d85eaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996dd14d497c48ba8c906c792e466bf58200f26d3907d022769dece99d85eaeb->enter($__internal_996dd14d497c48ba8c906c792e466bf58200f26d3907d022769dece99d85eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ccd159baa353e5b3735d554ebc48123b30b2cbf01cb3128cff9bd8688f5e5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccd159baa353e5b3735d554ebc48123b30b2cbf01cb3128cff9bd8688f5e5de->enter($__internal_3ccd159baa353e5b3735d554ebc48123b30b2cbf01cb3128cff9bd8688f5e5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3ccd159baa353e5b3735d554ebc48123b30b2cbf01cb3128cff9bd8688f5e5de->leave($__internal_3ccd159baa353e5b3735d554ebc48123b30b2cbf01cb3128cff9bd8688f5e5de_prof);

        
        $__internal_996dd14d497c48ba8c906c792e466bf58200f26d3907d022769dece99d85eaeb->leave($__internal_996dd14d497c48ba8c906c792e466bf58200f26d3907d022769dece99d85eaeb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4b65605a832f856781e4065fbde21672fb2f08e392800e59e216fe10fbbb058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b65605a832f856781e4065fbde21672fb2f08e392800e59e216fe10fbbb058->enter($__internal_d4b65605a832f856781e4065fbde21672fb2f08e392800e59e216fe10fbbb058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b12037e9b524b8aff091993473ae8c1b88d0c7fd096a6031dff227920a9286f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b12037e9b524b8aff091993473ae8c1b88d0c7fd096a6031dff227920a9286f->enter($__internal_7b12037e9b524b8aff091993473ae8c1b88d0c7fd096a6031dff227920a9286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7b12037e9b524b8aff091993473ae8c1b88d0c7fd096a6031dff227920a9286f->leave($__internal_7b12037e9b524b8aff091993473ae8c1b88d0c7fd096a6031dff227920a9286f_prof);

        
        $__internal_d4b65605a832f856781e4065fbde21672fb2f08e392800e59e216fe10fbbb058->leave($__internal_d4b65605a832f856781e4065fbde21672fb2f08e392800e59e216fe10fbbb058_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
