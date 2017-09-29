<?php

/* OCBookingBundle:Contact:add.html.twig */
class __TwigTemplate_1643552e9d934eee0959846059e77fcbd8ffb9baf6902165d3312b33b813d6cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Contact:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50148e059a6d362e10dd9015206b8a02582541a1f048bf3c1a27b4520eae2666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50148e059a6d362e10dd9015206b8a02582541a1f048bf3c1a27b4520eae2666->enter($__internal_50148e059a6d362e10dd9015206b8a02582541a1f048bf3c1a27b4520eae2666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Contact:add.html.twig"));

        $__internal_588e8cd62c2445b5b8b0c87de6c80338afc3fd9aaebfe1504ddbebdd4f6171f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588e8cd62c2445b5b8b0c87de6c80338afc3fd9aaebfe1504ddbebdd4f6171f3->enter($__internal_588e8cd62c2445b5b8b0c87de6c80338afc3fd9aaebfe1504ddbebdd4f6171f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Contact:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50148e059a6d362e10dd9015206b8a02582541a1f048bf3c1a27b4520eae2666->leave($__internal_50148e059a6d362e10dd9015206b8a02582541a1f048bf3c1a27b4520eae2666_prof);

        
        $__internal_588e8cd62c2445b5b8b0c87de6c80338afc3fd9aaebfe1504ddbebdd4f6171f3->leave($__internal_588e8cd62c2445b5b8b0c87de6c80338afc3fd9aaebfe1504ddbebdd4f6171f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8921effb844df87f195a77b93ba28ea149c45f24053517c1801dffe09593bf5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8921effb844df87f195a77b93ba28ea149c45f24053517c1801dffe09593bf5f->enter($__internal_8921effb844df87f195a77b93ba28ea149c45f24053517c1801dffe09593bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe95ce0f43167e2a185e40198d2efb47adfab4ee85d85a88370b2a458236850b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe95ce0f43167e2a185e40198d2efb47adfab4ee85d85a88370b2a458236850b->enter($__internal_fe95ce0f43167e2a185e40198d2efb47adfab4ee85d85a88370b2a458236850b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Contact";
        
        $__internal_fe95ce0f43167e2a185e40198d2efb47adfab4ee85d85a88370b2a458236850b->leave($__internal_fe95ce0f43167e2a185e40198d2efb47adfab4ee85d85a88370b2a458236850b_prof);

        
        $__internal_8921effb844df87f195a77b93ba28ea149c45f24053517c1801dffe09593bf5f->leave($__internal_8921effb844df87f195a77b93ba28ea149c45f24053517c1801dffe09593bf5f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d1d7c914124afd9da046557e36e4ede1a62a055375f3fdcb54e6aac5ff3772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d1d7c914124afd9da046557e36e4ede1a62a055375f3fdcb54e6aac5ff3772->enter($__internal_f2d1d7c914124afd9da046557e36e4ede1a62a055375f3fdcb54e6aac5ff3772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58c726ba10c45c20642f7f458cb09098211138a80faf227f84bd21a058500eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c726ba10c45c20642f7f458cb09098211138a80faf227f84bd21a058500eda->enter($__internal_58c726ba10c45c20642f7f458cb09098211138a80faf227f84bd21a058500eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Formulaire de contact</h3>

    <div class=\"well\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

";
        
        $__internal_58c726ba10c45c20642f7f458cb09098211138a80faf227f84bd21a058500eda->leave($__internal_58c726ba10c45c20642f7f458cb09098211138a80faf227f84bd21a058500eda_prof);

        
        $__internal_f2d1d7c914124afd9da046557e36e4ede1a62a055375f3fdcb54e6aac5ff3772->leave($__internal_f2d1d7c914124afd9da046557e36e4ede1a62a055375f3fdcb54e6aac5ff3772_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Contact:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  69 => 8,  60 => 7,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Contact/index.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Contact{% endblock %}

{% block body %}
    <h3>Formulaire de contact</h3>

    <div class=\"well\">
        {{ form(form) }}
    </div>

{% endblock %}


", "OCBookingBundle:Contact:add.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Contact/add.html.twig");
    }
}
