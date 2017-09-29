<?php

/* OCBookingBundle:Formulaire:ticketing.html.twig */
class __TwigTemplate_be6f9c83d8c07536fbb73d32cb8b155b9658c942367b5de338aa38b2129837c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Formulaire:ticketing.html.twig", 3);
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
        $__internal_c24e97590cc57bb484f166498507e84ebb7e3861a288467b2cc2bef839c3d283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24e97590cc57bb484f166498507e84ebb7e3861a288467b2cc2bef839c3d283->enter($__internal_c24e97590cc57bb484f166498507e84ebb7e3861a288467b2cc2bef839c3d283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:ticketing.html.twig"));

        $__internal_3dc7fe41c6914d385b28da820d1d6c1517f70f7571c3251462b56fd1af7c14fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc7fe41c6914d385b28da820d1d6c1517f70f7571c3251462b56fd1af7c14fa->enter($__internal_3dc7fe41c6914d385b28da820d1d6c1517f70f7571c3251462b56fd1af7c14fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:ticketing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24e97590cc57bb484f166498507e84ebb7e3861a288467b2cc2bef839c3d283->leave($__internal_c24e97590cc57bb484f166498507e84ebb7e3861a288467b2cc2bef839c3d283_prof);

        
        $__internal_3dc7fe41c6914d385b28da820d1d6c1517f70f7571c3251462b56fd1af7c14fa->leave($__internal_3dc7fe41c6914d385b28da820d1d6c1517f70f7571c3251462b56fd1af7c14fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_562f804964e8037920e8d45dc8856a7f1429989398fc988feb56520b54f0a780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562f804964e8037920e8d45dc8856a7f1429989398fc988feb56520b54f0a780->enter($__internal_562f804964e8037920e8d45dc8856a7f1429989398fc988feb56520b54f0a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d38d64d91bc451bd77b534ec9d3e93c5622488793995f6f3368ee944ff80042b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38d64d91bc451bd77b534ec9d3e93c5622488793995f6f3368ee944ff80042b->enter($__internal_d38d64d91bc451bd77b534ec9d3e93c5622488793995f6f3368ee944ff80042b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Réservation";
        
        $__internal_d38d64d91bc451bd77b534ec9d3e93c5622488793995f6f3368ee944ff80042b->leave($__internal_d38d64d91bc451bd77b534ec9d3e93c5622488793995f6f3368ee944ff80042b_prof);

        
        $__internal_562f804964e8037920e8d45dc8856a7f1429989398fc988feb56520b54f0a780->leave($__internal_562f804964e8037920e8d45dc8856a7f1429989398fc988feb56520b54f0a780_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_19d1308c4bf9b14dd98efe4ce8eec866294f6022f4e465aa876d95245f1a6721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d1308c4bf9b14dd98efe4ce8eec866294f6022f4e465aa876d95245f1a6721->enter($__internal_19d1308c4bf9b14dd98efe4ce8eec866294f6022f4e465aa876d95245f1a6721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e98ad1b987a36eee252f25ad85950354e52e9f75cbdea713c56edf1e74d930c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e98ad1b987a36eee252f25ad85950354e52e9f75cbdea713c56edf1e74d930c->enter($__internal_4e98ad1b987a36eee252f25ad85950354e52e9f75cbdea713c56edf1e74d930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Formulaire de contact</h3>

    <div class=\"Form\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

";
        
        $__internal_4e98ad1b987a36eee252f25ad85950354e52e9f75cbdea713c56edf1e74d930c->leave($__internal_4e98ad1b987a36eee252f25ad85950354e52e9f75cbdea713c56edf1e74d930c_prof);

        
        $__internal_19d1308c4bf9b14dd98efe4ce8eec866294f6022f4e465aa876d95245f1a6721->leave($__internal_19d1308c4bf9b14dd98efe4ce8eec866294f6022f4e465aa876d95245f1a6721_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Formulaire:ticketing.html.twig";
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
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/ticketing/form.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Réservation{% endblock %}

{% block body %}
    <h3>Formulaire de contact</h3>

    <div class=\"Form\">
        {{ form(form) }}
    </div>

{% endblock %}

", "OCBookingBundle:Formulaire:ticketing.html.twig", "/Users/alexandre/Google Drive/Pro/OC/Projet4/Louvre/Symfony/src/OC/BookingBundle/Resources/views/Formulaire/ticketing.html.twig");
    }
}
