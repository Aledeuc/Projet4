<?php

/* OCBookingBundle:Bookingform:form.html.twig */
class __TwigTemplate_fb10d7853c4c90e28f5e759f56244dbdf4e5455c1854e91daa286cc4a74f4abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Bookingform:form.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15694419b71d97a55fbfa91a2554ec5c1c9a06cc131dfdd0a56b1fbe99d333e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15694419b71d97a55fbfa91a2554ec5c1c9a06cc131dfdd0a56b1fbe99d333e7->enter($__internal_15694419b71d97a55fbfa91a2554ec5c1c9a06cc131dfdd0a56b1fbe99d333e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_b3405fc63d24f4cf9a558674cfc37169e0f33f174b48c9c6a76c073c44e970f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3405fc63d24f4cf9a558674cfc37169e0f33f174b48c9c6a76c073c44e970f7->enter($__internal_b3405fc63d24f4cf9a558674cfc37169e0f33f174b48c9c6a76c073c44e970f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15694419b71d97a55fbfa91a2554ec5c1c9a06cc131dfdd0a56b1fbe99d333e7->leave($__internal_15694419b71d97a55fbfa91a2554ec5c1c9a06cc131dfdd0a56b1fbe99d333e7_prof);

        
        $__internal_b3405fc63d24f4cf9a558674cfc37169e0f33f174b48c9c6a76c073c44e970f7->leave($__internal_b3405fc63d24f4cf9a558674cfc37169e0f33f174b48c9c6a76c073c44e970f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e44550e66cdea33021beb4ea3cd51a741195bb7b50afcddb0a6e1a6d759b2296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44550e66cdea33021beb4ea3cd51a741195bb7b50afcddb0a6e1a6d759b2296->enter($__internal_e44550e66cdea33021beb4ea3cd51a741195bb7b50afcddb0a6e1a6d759b2296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_469f9cea7c2126f522a80ba2c5be00083a2eb83420f94e2815a7adb3a6fc6d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469f9cea7c2126f522a80ba2c5be00083a2eb83420f94e2815a7adb3a6fc6d21->enter($__internal_469f9cea7c2126f522a80ba2c5be00083a2eb83420f94e2815a7adb3a6fc6d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_469f9cea7c2126f522a80ba2c5be00083a2eb83420f94e2815a7adb3a6fc6d21->leave($__internal_469f9cea7c2126f522a80ba2c5be00083a2eb83420f94e2815a7adb3a6fc6d21_prof);

        
        $__internal_e44550e66cdea33021beb4ea3cd51a741195bb7b50afcddb0a6e1a6d759b2296->leave($__internal_e44550e66cdea33021beb4ea3cd51a741195bb7b50afcddb0a6e1a6d759b2296_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa194c3ab482ffea3d2b181c79a62e4ead8010fe6c4a0c4b88126fc0c2f68c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa194c3ab482ffea3d2b181c79a62e4ead8010fe6c4a0c4b88126fc0c2f68c3->enter($__internal_4fa194c3ab482ffea3d2b181c79a62e4ead8010fe6c4a0c4b88126fc0c2f68c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4e6981187e3958e18ed0121ff3d87762833d45c6e115b35607370d4ea7e2d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e6981187e3958e18ed0121ff3d87762833d45c6e115b35607370d4ea7e2d38->enter($__internal_e4e6981187e3958e18ed0121ff3d87762833d45c6e115b35607370d4ea7e2d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"well\">

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    
        <div class=\"form-group\">
    
            ";
        // line 17
        echo " 
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Date de la visite"));
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'errors');
        echo "
            <div class=\"col-sm-3\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'widget');
        echo "
            </div>
    
            ";
        // line 24
        echo " 
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Type de réservation"));
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'errors');
        echo "   
            <div class=\"col-sm-1\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
    
            ";
        // line 31
        echo " 
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Email de réservation"));
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'errors');
        echo "   
            <div class=\"col-sm-2\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            
            
            
                
        </div>
        
        <div>
        
        <h3>Visiteurs</h3>

        <ul class=\"visitors form-group\" data-prototype=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visitors", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo " 
        
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

</div>


";
        
        $__internal_e4e6981187e3958e18ed0121ff3d87762833d45c6e115b35607370d4ea7e2d38->leave($__internal_e4e6981187e3958e18ed0121ff3d87762833d45c6e115b35607370d4ea7e2d38_prof);

        
        $__internal_4fa194c3ab482ffea3d2b181c79a62e4ead8010fe6c4a0c4b88126fc0c2f68c3->leave($__internal_4fa194c3ab482ffea3d2b181c79a62e4ead8010fe6c4a0c4b88126fc0c2f68c3_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4509fba189d83a86159c32d76472f65005aa7eede12f575e4058bd2818c2fdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4509fba189d83a86159c32d76472f65005aa7eede12f575e4058bd2818c2fdec->enter($__internal_4509fba189d83a86159c32d76472f65005aa7eede12f575e4058bd2818c2fdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_afbfc497561355256cb42f1a884ac2cf6fc51e34fe3c6552570e2724bc352842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbfc497561355256cb42f1a884ac2cf6fc51e34fe3c6552570e2724bc352842->enter($__internal_afbfc497561355256cb42f1a884ac2cf6fc51e34fe3c6552570e2724bc352842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bookingFormulaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_afbfc497561355256cb42f1a884ac2cf6fc51e34fe3c6552570e2724bc352842->leave($__internal_afbfc497561355256cb42f1a884ac2cf6fc51e34fe3c6552570e2724bc352842_prof);

        
        $__internal_4509fba189d83a86159c32d76472f65005aa7eede12f575e4058bd2818c2fdec->leave($__internal_4509fba189d83a86159c32d76472f65005aa7eede12f575e4058bd2818c2fdec_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Bookingform:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 62,  179 => 61,  163 => 54,  158 => 52,  150 => 47,  135 => 35,  130 => 33,  126 => 32,  123 => 31,  117 => 28,  112 => 26,  108 => 25,  105 => 24,  99 => 21,  94 => 19,  90 => 18,  87 => 17,  80 => 13,  75 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Boutique{% endblock %}

{% block body %}

<div class=\"well\">

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {{ form_errors(form) }}
    
        <div class=\"form-group\">
    
            {# Visit day #} 
            {{ form_label(form.bookingDate, \"Date de la visite\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.bookingDate) }}
            <div class=\"col-sm-3\">
                {{ form_widget(form.bookingDate) }}
            </div>
    
            {# Booking type #} 
            {{ form_label(form.ticketType, \"Type de réservation\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.ticketType) }}   
            <div class=\"col-sm-1\">
                {{ form_widget(form.ticketType, {'attr': {'class': 'form-control'}}) }}
            </div>
    
            {# Booking email #} 
            {{ form_label(form.bookingemail, \"Email de réservation\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.bookingemail) }}   
            <div class=\"col-sm-2\">
                {{ form_widget(form.bookingemail, {'attr': {'class': 'form-control'}}) }}
            </div>
            
            
            
                
        </div>
        
        <div>
        
        <h3>Visiteurs</h3>

        <ul class=\"visitors form-group\" data-prototype=\"{{ form_widget(form.visitors.vars.prototype)|e('html_attr') }}\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

        {{ form_row(form.save) }} 
        
        {{ form_widget(form._token) }}

</div>


{% endblock %}

{% block javascripts %} 
<script src=\"{{ asset('js/bookingFormulaire.js') }}\"></script>
{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
