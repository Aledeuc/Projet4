<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3d7559424f55a79cd76f14cdd7d3125146c0cf342f73b7ae85a1eae2e25f4547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f4e90a0dc9f42bc55c2716212455294ff3104f448a9609a48aeedeae6152938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4e90a0dc9f42bc55c2716212455294ff3104f448a9609a48aeedeae6152938->enter($__internal_7f4e90a0dc9f42bc55c2716212455294ff3104f448a9609a48aeedeae6152938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5e4caa69e96a09452714f25ba9c43f4a7cabbc86e599b848a97e50fe86770fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4caa69e96a09452714f25ba9c43f4a7cabbc86e599b848a97e50fe86770fe5->enter($__internal_5e4caa69e96a09452714f25ba9c43f4a7cabbc86e599b848a97e50fe86770fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f4e90a0dc9f42bc55c2716212455294ff3104f448a9609a48aeedeae6152938->leave($__internal_7f4e90a0dc9f42bc55c2716212455294ff3104f448a9609a48aeedeae6152938_prof);

        
        $__internal_5e4caa69e96a09452714f25ba9c43f4a7cabbc86e599b848a97e50fe86770fe5->leave($__internal_5e4caa69e96a09452714f25ba9c43f4a7cabbc86e599b848a97e50fe86770fe5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb25be95b2fceafe4deec25c1e2d0d502310816e7ddb24cbf6af175f0fba45ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb25be95b2fceafe4deec25c1e2d0d502310816e7ddb24cbf6af175f0fba45ec->enter($__internal_cb25be95b2fceafe4deec25c1e2d0d502310816e7ddb24cbf6af175f0fba45ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0981c64149aae2fbd43677afe046d67f8947f44daf42bfdbeb6b686b254dbcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0981c64149aae2fbd43677afe046d67f8947f44daf42bfdbeb6b686b254dbcd8->enter($__internal_0981c64149aae2fbd43677afe046d67f8947f44daf42bfdbeb6b686b254dbcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0981c64149aae2fbd43677afe046d67f8947f44daf42bfdbeb6b686b254dbcd8->leave($__internal_0981c64149aae2fbd43677afe046d67f8947f44daf42bfdbeb6b686b254dbcd8_prof);

        
        $__internal_cb25be95b2fceafe4deec25c1e2d0d502310816e7ddb24cbf6af175f0fba45ec->leave($__internal_cb25be95b2fceafe4deec25c1e2d0d502310816e7ddb24cbf6af175f0fba45ec_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_11b2fa146cc919b4f34b1ed03251a73c537d00e3de12727967e418c679750dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b2fa146cc919b4f34b1ed03251a73c537d00e3de12727967e418c679750dfc->enter($__internal_11b2fa146cc919b4f34b1ed03251a73c537d00e3de12727967e418c679750dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69102507d0c761a93504738e511a9ec5e29cb6ca36eb0ee05dc8973ec2e88de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69102507d0c761a93504738e511a9ec5e29cb6ca36eb0ee05dc8973ec2e88de6->enter($__internal_69102507d0c761a93504738e511a9ec5e29cb6ca36eb0ee05dc8973ec2e88de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_69102507d0c761a93504738e511a9ec5e29cb6ca36eb0ee05dc8973ec2e88de6->leave($__internal_69102507d0c761a93504738e511a9ec5e29cb6ca36eb0ee05dc8973ec2e88de6_prof);

        
        $__internal_11b2fa146cc919b4f34b1ed03251a73c537d00e3de12727967e418c679750dfc->leave($__internal_11b2fa146cc919b4f34b1ed03251a73c537d00e3de12727967e418c679750dfc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
