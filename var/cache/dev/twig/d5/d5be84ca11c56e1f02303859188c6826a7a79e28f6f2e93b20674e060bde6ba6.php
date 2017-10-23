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
        $__internal_85382e25df34eeeb36b671a083d63c05576dcc980c062f709f7d1c6023639bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85382e25df34eeeb36b671a083d63c05576dcc980c062f709f7d1c6023639bd5->enter($__internal_85382e25df34eeeb36b671a083d63c05576dcc980c062f709f7d1c6023639bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fa020d930851b27c1dca17e29c9542078b21b2b8f0220ea7b67f2a579a802720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa020d930851b27c1dca17e29c9542078b21b2b8f0220ea7b67f2a579a802720->enter($__internal_fa020d930851b27c1dca17e29c9542078b21b2b8f0220ea7b67f2a579a802720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85382e25df34eeeb36b671a083d63c05576dcc980c062f709f7d1c6023639bd5->leave($__internal_85382e25df34eeeb36b671a083d63c05576dcc980c062f709f7d1c6023639bd5_prof);

        
        $__internal_fa020d930851b27c1dca17e29c9542078b21b2b8f0220ea7b67f2a579a802720->leave($__internal_fa020d930851b27c1dca17e29c9542078b21b2b8f0220ea7b67f2a579a802720_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c48e1ce80c3e1ac37be0f23df0655107fb1d7588df8f88055ea37e6f7cf63866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48e1ce80c3e1ac37be0f23df0655107fb1d7588df8f88055ea37e6f7cf63866->enter($__internal_c48e1ce80c3e1ac37be0f23df0655107fb1d7588df8f88055ea37e6f7cf63866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5d34739cc6564511a72482cde1ab72707dc31b668ba962b4f185bfbdce3336e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d34739cc6564511a72482cde1ab72707dc31b668ba962b4f185bfbdce3336e->enter($__internal_e5d34739cc6564511a72482cde1ab72707dc31b668ba962b4f185bfbdce3336e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e5d34739cc6564511a72482cde1ab72707dc31b668ba962b4f185bfbdce3336e->leave($__internal_e5d34739cc6564511a72482cde1ab72707dc31b668ba962b4f185bfbdce3336e_prof);

        
        $__internal_c48e1ce80c3e1ac37be0f23df0655107fb1d7588df8f88055ea37e6f7cf63866->leave($__internal_c48e1ce80c3e1ac37be0f23df0655107fb1d7588df8f88055ea37e6f7cf63866_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a264ef33607abe7974f08b51ae57ed15416ddd55e67de3f0f14f4fcd4401607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a264ef33607abe7974f08b51ae57ed15416ddd55e67de3f0f14f4fcd4401607->enter($__internal_3a264ef33607abe7974f08b51ae57ed15416ddd55e67de3f0f14f4fcd4401607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28d8aa17c62c1febf19ce159e6115e827aa0b17af80f753a99ab371f3dbd2ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d8aa17c62c1febf19ce159e6115e827aa0b17af80f753a99ab371f3dbd2ec3->enter($__internal_28d8aa17c62c1febf19ce159e6115e827aa0b17af80f753a99ab371f3dbd2ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_28d8aa17c62c1febf19ce159e6115e827aa0b17af80f753a99ab371f3dbd2ec3->leave($__internal_28d8aa17c62c1febf19ce159e6115e827aa0b17af80f753a99ab371f3dbd2ec3_prof);

        
        $__internal_3a264ef33607abe7974f08b51ae57ed15416ddd55e67de3f0f14f4fcd4401607->leave($__internal_3a264ef33607abe7974f08b51ae57ed15416ddd55e67de3f0f14f4fcd4401607_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c68830058fc46e95dddc2fa67635d6d8e94f2479561f98f158975afb62ff5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c68830058fc46e95dddc2fa67635d6d8e94f2479561f98f158975afb62ff5cf->enter($__internal_7c68830058fc46e95dddc2fa67635d6d8e94f2479561f98f158975afb62ff5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b57ab508c3ac98cc087c066b33fd52dd2f3d352afc6f5889f8359bcdc866d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b57ab508c3ac98cc087c066b33fd52dd2f3d352afc6f5889f8359bcdc866d34->enter($__internal_4b57ab508c3ac98cc087c066b33fd52dd2f3d352afc6f5889f8359bcdc866d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b57ab508c3ac98cc087c066b33fd52dd2f3d352afc6f5889f8359bcdc866d34->leave($__internal_4b57ab508c3ac98cc087c066b33fd52dd2f3d352afc6f5889f8359bcdc866d34_prof);

        
        $__internal_7c68830058fc46e95dddc2fa67635d6d8e94f2479561f98f158975afb62ff5cf->leave($__internal_7c68830058fc46e95dddc2fa67635d6d8e94f2479561f98f158975afb62ff5cf_prof);

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
