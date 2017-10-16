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
        $__internal_459e6c5af402b520804417edc7c399719ff5e0585841f3ca7c846cdeb8f3ab0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459e6c5af402b520804417edc7c399719ff5e0585841f3ca7c846cdeb8f3ab0b->enter($__internal_459e6c5af402b520804417edc7c399719ff5e0585841f3ca7c846cdeb8f3ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_ee0aedd9c329f301e200bad3c620871d0ba5daffc2d134d2efd576080ba480ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0aedd9c329f301e200bad3c620871d0ba5daffc2d134d2efd576080ba480ad->enter($__internal_ee0aedd9c329f301e200bad3c620871d0ba5daffc2d134d2efd576080ba480ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459e6c5af402b520804417edc7c399719ff5e0585841f3ca7c846cdeb8f3ab0b->leave($__internal_459e6c5af402b520804417edc7c399719ff5e0585841f3ca7c846cdeb8f3ab0b_prof);

        
        $__internal_ee0aedd9c329f301e200bad3c620871d0ba5daffc2d134d2efd576080ba480ad->leave($__internal_ee0aedd9c329f301e200bad3c620871d0ba5daffc2d134d2efd576080ba480ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1889055a1e56f3c0bd1de5bf111dcf7aa33ddc684cd121cd2a17e441deb812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1889055a1e56f3c0bd1de5bf111dcf7aa33ddc684cd121cd2a17e441deb812->enter($__internal_3c1889055a1e56f3c0bd1de5bf111dcf7aa33ddc684cd121cd2a17e441deb812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f51801e11d916779dae998af4695efcdc5498f73617a12ee37895b62f113d458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51801e11d916779dae998af4695efcdc5498f73617a12ee37895b62f113d458->enter($__internal_f51801e11d916779dae998af4695efcdc5498f73617a12ee37895b62f113d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_f51801e11d916779dae998af4695efcdc5498f73617a12ee37895b62f113d458->leave($__internal_f51801e11d916779dae998af4695efcdc5498f73617a12ee37895b62f113d458_prof);

        
        $__internal_3c1889055a1e56f3c0bd1de5bf111dcf7aa33ddc684cd121cd2a17e441deb812->leave($__internal_3c1889055a1e56f3c0bd1de5bf111dcf7aa33ddc684cd121cd2a17e441deb812_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_638f56da20cc955b891988c4ec855461964930301a6154c55c05255a2bcbb0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638f56da20cc955b891988c4ec855461964930301a6154c55c05255a2bcbb0bf->enter($__internal_638f56da20cc955b891988c4ec855461964930301a6154c55c05255a2bcbb0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f1ea59f943a846ba49b8db06fc51a59b82e3e13c26d25f7cb11f66e7c4c189b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1ea59f943a846ba49b8db06fc51a59b82e3e13c26d25f7cb11f66e7c4c189b->enter($__internal_2f1ea59f943a846ba49b8db06fc51a59b82e3e13c26d25f7cb11f66e7c4c189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <ul class=\"visitors\" data-prototype=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visitors", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo " 
</div>


";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
";
        
        $__internal_2f1ea59f943a846ba49b8db06fc51a59b82e3e13c26d25f7cb11f66e7c4c189b->leave($__internal_2f1ea59f943a846ba49b8db06fc51a59b82e3e13c26d25f7cb11f66e7c4c189b_prof);

        
        $__internal_638f56da20cc955b891988c4ec855461964930301a6154c55c05255a2bcbb0bf->leave($__internal_638f56da20cc955b891988c4ec855461964930301a6154c55c05255a2bcbb0bf_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_194466821ec303ddc4265fb998159a7eb02c3ec84757e1a6f4b5b3b18a0283fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194466821ec303ddc4265fb998159a7eb02c3ec84757e1a6f4b5b3b18a0283fd->enter($__internal_194466821ec303ddc4265fb998159a7eb02c3ec84757e1a6f4b5b3b18a0283fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aecaade83bf767514f3bc92046085957b31c7b7bdfda3fb2e3d0f6656a1df4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecaade83bf767514f3bc92046085957b31c7b7bdfda3fb2e3d0f6656a1df4cc->enter($__internal_aecaade83bf767514f3bc92046085957b31c7b7bdfda3fb2e3d0f6656a1df4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bookingFormulaire.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_aecaade83bf767514f3bc92046085957b31c7b7bdfda3fb2e3d0f6656a1df4cc->leave($__internal_aecaade83bf767514f3bc92046085957b31c7b7bdfda3fb2e3d0f6656a1df4cc_prof);

        
        $__internal_194466821ec303ddc4265fb998159a7eb02c3ec84757e1a6f4b5b3b18a0283fd->leave($__internal_194466821ec303ddc4265fb998159a7eb02c3ec84757e1a6f4b5b3b18a0283fd_prof);

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
        return array (  187 => 55,  175 => 53,  164 => 58,  162 => 53,  155 => 49,  147 => 44,  135 => 35,  130 => 33,  126 => 32,  123 => 31,  117 => 28,  112 => 26,  108 => 25,  105 => 24,  99 => 21,  94 => 19,  90 => 18,  87 => 17,  80 => 13,  75 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
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

        <ul class=\"visitors\" data-prototype=\"{{ form_widget(form.visitors.vars.prototype)|e('html_attr') }}\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

    {{ form_row(form.save) }} 
</div>


{% block javascripts %} 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"{{ asset('js/bookingFormulaire.js') }}\"></script>
<script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
