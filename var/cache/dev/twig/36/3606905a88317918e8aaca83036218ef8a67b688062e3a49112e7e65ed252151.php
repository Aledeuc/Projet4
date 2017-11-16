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
        $__internal_28ace0f5ef7df7f9bf7f3d6f0a418f596d64ee81cc877768228dea0d6bd0b14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ace0f5ef7df7f9bf7f3d6f0a418f596d64ee81cc877768228dea0d6bd0b14c->enter($__internal_28ace0f5ef7df7f9bf7f3d6f0a418f596d64ee81cc877768228dea0d6bd0b14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ee13dd24258991a05941c9a8f01891445559652b6a5d1622263c8eeb8ecbde09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee13dd24258991a05941c9a8f01891445559652b6a5d1622263c8eeb8ecbde09->enter($__internal_ee13dd24258991a05941c9a8f01891445559652b6a5d1622263c8eeb8ecbde09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ace0f5ef7df7f9bf7f3d6f0a418f596d64ee81cc877768228dea0d6bd0b14c->leave($__internal_28ace0f5ef7df7f9bf7f3d6f0a418f596d64ee81cc877768228dea0d6bd0b14c_prof);

        
        $__internal_ee13dd24258991a05941c9a8f01891445559652b6a5d1622263c8eeb8ecbde09->leave($__internal_ee13dd24258991a05941c9a8f01891445559652b6a5d1622263c8eeb8ecbde09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d03f2205abcd45bca5cdea2835fcf6f31ba7cf9f2d6395c80407fc7b92a21ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d03f2205abcd45bca5cdea2835fcf6f31ba7cf9f2d6395c80407fc7b92a21ce->enter($__internal_3d03f2205abcd45bca5cdea2835fcf6f31ba7cf9f2d6395c80407fc7b92a21ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c72f2a65e3bd2aabad4db13f768e7de8f11d54aabcb76db3ac89bef5aace420d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72f2a65e3bd2aabad4db13f768e7de8f11d54aabcb76db3ac89bef5aace420d->enter($__internal_c72f2a65e3bd2aabad4db13f768e7de8f11d54aabcb76db3ac89bef5aace420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c72f2a65e3bd2aabad4db13f768e7de8f11d54aabcb76db3ac89bef5aace420d->leave($__internal_c72f2a65e3bd2aabad4db13f768e7de8f11d54aabcb76db3ac89bef5aace420d_prof);

        
        $__internal_3d03f2205abcd45bca5cdea2835fcf6f31ba7cf9f2d6395c80407fc7b92a21ce->leave($__internal_3d03f2205abcd45bca5cdea2835fcf6f31ba7cf9f2d6395c80407fc7b92a21ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f2bdd2f7689ed8fb886db86170732ca5a9e660d6aabc98537a5237889a1d27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2bdd2f7689ed8fb886db86170732ca5a9e660d6aabc98537a5237889a1d27d->enter($__internal_0f2bdd2f7689ed8fb886db86170732ca5a9e660d6aabc98537a5237889a1d27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e81aca9f4350d0be1b433b4491c99203669a31d29cba82933e77ffb0512426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e81aca9f4350d0be1b433b4491c99203669a31d29cba82933e77ffb0512426a->enter($__internal_5e81aca9f4350d0be1b433b4491c99203669a31d29cba82933e77ffb0512426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5e81aca9f4350d0be1b433b4491c99203669a31d29cba82933e77ffb0512426a->leave($__internal_5e81aca9f4350d0be1b433b4491c99203669a31d29cba82933e77ffb0512426a_prof);

        
        $__internal_0f2bdd2f7689ed8fb886db86170732ca5a9e660d6aabc98537a5237889a1d27d->leave($__internal_0f2bdd2f7689ed8fb886db86170732ca5a9e660d6aabc98537a5237889a1d27d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e388d9f8ed891fcf16d98fc0323c7a20638a79e711356e57bce3d8fe957fdd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e388d9f8ed891fcf16d98fc0323c7a20638a79e711356e57bce3d8fe957fdd90->enter($__internal_e388d9f8ed891fcf16d98fc0323c7a20638a79e711356e57bce3d8fe957fdd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7204a968095a70e147578ca91327bf8a80fa63167cf6c33e50455f05088acd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7204a968095a70e147578ca91327bf8a80fa63167cf6c33e50455f05088acd17->enter($__internal_7204a968095a70e147578ca91327bf8a80fa63167cf6c33e50455f05088acd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7204a968095a70e147578ca91327bf8a80fa63167cf6c33e50455f05088acd17->leave($__internal_7204a968095a70e147578ca91327bf8a80fa63167cf6c33e50455f05088acd17_prof);

        
        $__internal_e388d9f8ed891fcf16d98fc0323c7a20638a79e711356e57bce3d8fe957fdd90->leave($__internal_e388d9f8ed891fcf16d98fc0323c7a20638a79e711356e57bce3d8fe957fdd90_prof);

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
