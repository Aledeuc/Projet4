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
        $__internal_2821fbff95be5af3a2fed3c51e46b0bc2fcc313e3f5acd246248825aae47a97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2821fbff95be5af3a2fed3c51e46b0bc2fcc313e3f5acd246248825aae47a97f->enter($__internal_2821fbff95be5af3a2fed3c51e46b0bc2fcc313e3f5acd246248825aae47a97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_08b9c10baeb6cd8b67422e1a3a6b13ea02ada1a75e72fa87de9de546cc165978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b9c10baeb6cd8b67422e1a3a6b13ea02ada1a75e72fa87de9de546cc165978->enter($__internal_08b9c10baeb6cd8b67422e1a3a6b13ea02ada1a75e72fa87de9de546cc165978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2821fbff95be5af3a2fed3c51e46b0bc2fcc313e3f5acd246248825aae47a97f->leave($__internal_2821fbff95be5af3a2fed3c51e46b0bc2fcc313e3f5acd246248825aae47a97f_prof);

        
        $__internal_08b9c10baeb6cd8b67422e1a3a6b13ea02ada1a75e72fa87de9de546cc165978->leave($__internal_08b9c10baeb6cd8b67422e1a3a6b13ea02ada1a75e72fa87de9de546cc165978_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bc417e43330cf97918d85c6ba8c9f2d007ca8cd90bbc1afb7d4adeadbf0c0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc417e43330cf97918d85c6ba8c9f2d007ca8cd90bbc1afb7d4adeadbf0c0f7->enter($__internal_7bc417e43330cf97918d85c6ba8c9f2d007ca8cd90bbc1afb7d4adeadbf0c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_018e2b13a63b99faf23c4511955a4fb2e90aba3a2deb8ee042cdb813148fef0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018e2b13a63b99faf23c4511955a4fb2e90aba3a2deb8ee042cdb813148fef0e->enter($__internal_018e2b13a63b99faf23c4511955a4fb2e90aba3a2deb8ee042cdb813148fef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_018e2b13a63b99faf23c4511955a4fb2e90aba3a2deb8ee042cdb813148fef0e->leave($__internal_018e2b13a63b99faf23c4511955a4fb2e90aba3a2deb8ee042cdb813148fef0e_prof);

        
        $__internal_7bc417e43330cf97918d85c6ba8c9f2d007ca8cd90bbc1afb7d4adeadbf0c0f7->leave($__internal_7bc417e43330cf97918d85c6ba8c9f2d007ca8cd90bbc1afb7d4adeadbf0c0f7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_886dbb1989f266019ab5bebc042a6f5b5b619e003c9e2098065f57fd12c68602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886dbb1989f266019ab5bebc042a6f5b5b619e003c9e2098065f57fd12c68602->enter($__internal_886dbb1989f266019ab5bebc042a6f5b5b619e003c9e2098065f57fd12c68602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faa2510cbb0f2a00b39e283cf906f613780024bb7dea49d574a4d1cfdbe8d6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa2510cbb0f2a00b39e283cf906f613780024bb7dea49d574a4d1cfdbe8d6c8->enter($__internal_faa2510cbb0f2a00b39e283cf906f613780024bb7dea49d574a4d1cfdbe8d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_faa2510cbb0f2a00b39e283cf906f613780024bb7dea49d574a4d1cfdbe8d6c8->leave($__internal_faa2510cbb0f2a00b39e283cf906f613780024bb7dea49d574a4d1cfdbe8d6c8_prof);

        
        $__internal_886dbb1989f266019ab5bebc042a6f5b5b619e003c9e2098065f57fd12c68602->leave($__internal_886dbb1989f266019ab5bebc042a6f5b5b619e003c9e2098065f57fd12c68602_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}