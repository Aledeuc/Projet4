<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_4524dae46051e44c4ca5bd3d59723573d9bd7d95eabdc920a5c50acdc3cd888f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4524dae46051e44c4ca5bd3d59723573d9bd7d95eabdc920a5c50acdc3cd888f->enter($__internal_4524dae46051e44c4ca5bd3d59723573d9bd7d95eabdc920a5c50acdc3cd888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0d1b7b871431a469b9d8a71cd80d59cfe720821928f51642e03ddba3946ab7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1b7b871431a469b9d8a71cd80d59cfe720821928f51642e03ddba3946ab7a7->enter($__internal_0d1b7b871431a469b9d8a71cd80d59cfe720821928f51642e03ddba3946ab7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4524dae46051e44c4ca5bd3d59723573d9bd7d95eabdc920a5c50acdc3cd888f->leave($__internal_4524dae46051e44c4ca5bd3d59723573d9bd7d95eabdc920a5c50acdc3cd888f_prof);

        
        $__internal_0d1b7b871431a469b9d8a71cd80d59cfe720821928f51642e03ddba3946ab7a7->leave($__internal_0d1b7b871431a469b9d8a71cd80d59cfe720821928f51642e03ddba3946ab7a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c491352a52cab2b978c590749b7527e303a5653c595e8b280b6360653483bbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c491352a52cab2b978c590749b7527e303a5653c595e8b280b6360653483bbf4->enter($__internal_c491352a52cab2b978c590749b7527e303a5653c595e8b280b6360653483bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_07f0405740d263d72dab34f15aef4cb52bbcaefee6c0bf135b620c12ea884ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f0405740d263d72dab34f15aef4cb52bbcaefee6c0bf135b620c12ea884ca7->enter($__internal_07f0405740d263d72dab34f15aef4cb52bbcaefee6c0bf135b620c12ea884ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_07f0405740d263d72dab34f15aef4cb52bbcaefee6c0bf135b620c12ea884ca7->leave($__internal_07f0405740d263d72dab34f15aef4cb52bbcaefee6c0bf135b620c12ea884ca7_prof);

        
        $__internal_c491352a52cab2b978c590749b7527e303a5653c595e8b280b6360653483bbf4->leave($__internal_c491352a52cab2b978c590749b7527e303a5653c595e8b280b6360653483bbf4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4f7c161b4403de7b52bc403c1dd2e07833862e84b23262dcc17af0833cdc77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f7c161b4403de7b52bc403c1dd2e07833862e84b23262dcc17af0833cdc77f->enter($__internal_b4f7c161b4403de7b52bc403c1dd2e07833862e84b23262dcc17af0833cdc77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cb9c5ec93a793d3f39a868e5d7949349a4f9d105a2205d3882e20c2e44faf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb9c5ec93a793d3f39a868e5d7949349a4f9d105a2205d3882e20c2e44faf4d->enter($__internal_2cb9c5ec93a793d3f39a868e5d7949349a4f9d105a2205d3882e20c2e44faf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2cb9c5ec93a793d3f39a868e5d7949349a4f9d105a2205d3882e20c2e44faf4d->leave($__internal_2cb9c5ec93a793d3f39a868e5d7949349a4f9d105a2205d3882e20c2e44faf4d_prof);

        
        $__internal_b4f7c161b4403de7b52bc403c1dd2e07833862e84b23262dcc17af0833cdc77f->leave($__internal_b4f7c161b4403de7b52bc403c1dd2e07833862e84b23262dcc17af0833cdc77f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d562291bdc42fa2b08fdba1a20ddd4154bf2860e137339c1f9dd0cfac18010af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d562291bdc42fa2b08fdba1a20ddd4154bf2860e137339c1f9dd0cfac18010af->enter($__internal_d562291bdc42fa2b08fdba1a20ddd4154bf2860e137339c1f9dd0cfac18010af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_566dc1ff9b1b63f787deddf3787144f7c37bd96113d863f8c91cbaee85ea4c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566dc1ff9b1b63f787deddf3787144f7c37bd96113d863f8c91cbaee85ea4c7e->enter($__internal_566dc1ff9b1b63f787deddf3787144f7c37bd96113d863f8c91cbaee85ea4c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_566dc1ff9b1b63f787deddf3787144f7c37bd96113d863f8c91cbaee85ea4c7e->leave($__internal_566dc1ff9b1b63f787deddf3787144f7c37bd96113d863f8c91cbaee85ea4c7e_prof);

        
        $__internal_d562291bdc42fa2b08fdba1a20ddd4154bf2860e137339c1f9dd0cfac18010af->leave($__internal_d562291bdc42fa2b08fdba1a20ddd4154bf2860e137339c1f9dd0cfac18010af_prof);

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
