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
        $__internal_d9e8d09a36d2141acaf2b505d9778716392a7c2a3275defdbe63eeda3d9b39d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e8d09a36d2141acaf2b505d9778716392a7c2a3275defdbe63eeda3d9b39d2->enter($__internal_d9e8d09a36d2141acaf2b505d9778716392a7c2a3275defdbe63eeda3d9b39d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_878e29b4d80e01c7a91a64fd7865b12b11800ab7849277fd3aa51e17ead56bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878e29b4d80e01c7a91a64fd7865b12b11800ab7849277fd3aa51e17ead56bb8->enter($__internal_878e29b4d80e01c7a91a64fd7865b12b11800ab7849277fd3aa51e17ead56bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e8d09a36d2141acaf2b505d9778716392a7c2a3275defdbe63eeda3d9b39d2->leave($__internal_d9e8d09a36d2141acaf2b505d9778716392a7c2a3275defdbe63eeda3d9b39d2_prof);

        
        $__internal_878e29b4d80e01c7a91a64fd7865b12b11800ab7849277fd3aa51e17ead56bb8->leave($__internal_878e29b4d80e01c7a91a64fd7865b12b11800ab7849277fd3aa51e17ead56bb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54ec2e49d8d4c3fa01963f6bfee783ceaef844b20a488ccdaf1eb262f29c3cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ec2e49d8d4c3fa01963f6bfee783ceaef844b20a488ccdaf1eb262f29c3cc2->enter($__internal_54ec2e49d8d4c3fa01963f6bfee783ceaef844b20a488ccdaf1eb262f29c3cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_469ba8e6664de7b553a5888a951aabfef7de2acd4b13c01b563820c01752562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469ba8e6664de7b553a5888a951aabfef7de2acd4b13c01b563820c01752562d->enter($__internal_469ba8e6664de7b553a5888a951aabfef7de2acd4b13c01b563820c01752562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_469ba8e6664de7b553a5888a951aabfef7de2acd4b13c01b563820c01752562d->leave($__internal_469ba8e6664de7b553a5888a951aabfef7de2acd4b13c01b563820c01752562d_prof);

        
        $__internal_54ec2e49d8d4c3fa01963f6bfee783ceaef844b20a488ccdaf1eb262f29c3cc2->leave($__internal_54ec2e49d8d4c3fa01963f6bfee783ceaef844b20a488ccdaf1eb262f29c3cc2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_640d72772cef05e06e6a3dbb3e597214ddd035603dae19469e6ef61fcac1c270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640d72772cef05e06e6a3dbb3e597214ddd035603dae19469e6ef61fcac1c270->enter($__internal_640d72772cef05e06e6a3dbb3e597214ddd035603dae19469e6ef61fcac1c270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3ce1e74441deeb2279133875363d44eb40b18747983b983daa440476f467953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ce1e74441deeb2279133875363d44eb40b18747983b983daa440476f467953->enter($__internal_d3ce1e74441deeb2279133875363d44eb40b18747983b983daa440476f467953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d3ce1e74441deeb2279133875363d44eb40b18747983b983daa440476f467953->leave($__internal_d3ce1e74441deeb2279133875363d44eb40b18747983b983daa440476f467953_prof);

        
        $__internal_640d72772cef05e06e6a3dbb3e597214ddd035603dae19469e6ef61fcac1c270->leave($__internal_640d72772cef05e06e6a3dbb3e597214ddd035603dae19469e6ef61fcac1c270_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aefbb114aae94ef8899b89f24d4667c7df8d0bde2dd4274e7f30017e323b781f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefbb114aae94ef8899b89f24d4667c7df8d0bde2dd4274e7f30017e323b781f->enter($__internal_aefbb114aae94ef8899b89f24d4667c7df8d0bde2dd4274e7f30017e323b781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b880e52eaa0387b19d1b4b74860b3ea2693d7615f7c42b6575463e717a86010e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b880e52eaa0387b19d1b4b74860b3ea2693d7615f7c42b6575463e717a86010e->enter($__internal_b880e52eaa0387b19d1b4b74860b3ea2693d7615f7c42b6575463e717a86010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b880e52eaa0387b19d1b4b74860b3ea2693d7615f7c42b6575463e717a86010e->leave($__internal_b880e52eaa0387b19d1b4b74860b3ea2693d7615f7c42b6575463e717a86010e_prof);

        
        $__internal_aefbb114aae94ef8899b89f24d4667c7df8d0bde2dd4274e7f30017e323b781f->leave($__internal_aefbb114aae94ef8899b89f24d4667c7df8d0bde2dd4274e7f30017e323b781f_prof);

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
