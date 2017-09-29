<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6e09a6297135c0a55321d3fab65db5c734a9504d3c23d2cdcf6ff7a46cc67abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a1b6d126386b691a1afd8b3502541240c7cb698d477133692305cbf7cfaa52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a1b6d126386b691a1afd8b3502541240c7cb698d477133692305cbf7cfaa52->enter($__internal_d7a1b6d126386b691a1afd8b3502541240c7cb698d477133692305cbf7cfaa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d8076e8d4a1c71d97be63eef9d0ccf1fdbda6f1a630b00ea802f0afc92b6dca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8076e8d4a1c71d97be63eef9d0ccf1fdbda6f1a630b00ea802f0afc92b6dca7->enter($__internal_d8076e8d4a1c71d97be63eef9d0ccf1fdbda6f1a630b00ea802f0afc92b6dca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d7a1b6d126386b691a1afd8b3502541240c7cb698d477133692305cbf7cfaa52->leave($__internal_d7a1b6d126386b691a1afd8b3502541240c7cb698d477133692305cbf7cfaa52_prof);

        
        $__internal_d8076e8d4a1c71d97be63eef9d0ccf1fdbda6f1a630b00ea802f0afc92b6dca7->leave($__internal_d8076e8d4a1c71d97be63eef9d0ccf1fdbda6f1a630b00ea802f0afc92b6dca7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d059f01a01d6fffe38761cfc9d2d588083af9fa761768dcb0da655da77fba512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d059f01a01d6fffe38761cfc9d2d588083af9fa761768dcb0da655da77fba512->enter($__internal_d059f01a01d6fffe38761cfc9d2d588083af9fa761768dcb0da655da77fba512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90096c582d53c05b8a21bfcf24b07422d7d000d3e92833b27898bb1bc4d3277c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90096c582d53c05b8a21bfcf24b07422d7d000d3e92833b27898bb1bc4d3277c->enter($__internal_90096c582d53c05b8a21bfcf24b07422d7d000d3e92833b27898bb1bc4d3277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90096c582d53c05b8a21bfcf24b07422d7d000d3e92833b27898bb1bc4d3277c->leave($__internal_90096c582d53c05b8a21bfcf24b07422d7d000d3e92833b27898bb1bc4d3277c_prof);

        
        $__internal_d059f01a01d6fffe38761cfc9d2d588083af9fa761768dcb0da655da77fba512->leave($__internal_d059f01a01d6fffe38761cfc9d2d588083af9fa761768dcb0da655da77fba512_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
