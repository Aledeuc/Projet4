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
        $__internal_c0cf2447c371e9a807f75146602c3f0bbfa493a037710754a30d31c4b4e4f990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cf2447c371e9a807f75146602c3f0bbfa493a037710754a30d31c4b4e4f990->enter($__internal_c0cf2447c371e9a807f75146602c3f0bbfa493a037710754a30d31c4b4e4f990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_bba3479d2ea30caa9d35c861bc6c67f995c6a7218267d790bda22e79ba90c4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba3479d2ea30caa9d35c861bc6c67f995c6a7218267d790bda22e79ba90c4ef->enter($__internal_bba3479d2ea30caa9d35c861bc6c67f995c6a7218267d790bda22e79ba90c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0cf2447c371e9a807f75146602c3f0bbfa493a037710754a30d31c4b4e4f990->leave($__internal_c0cf2447c371e9a807f75146602c3f0bbfa493a037710754a30d31c4b4e4f990_prof);

        
        $__internal_bba3479d2ea30caa9d35c861bc6c67f995c6a7218267d790bda22e79ba90c4ef->leave($__internal_bba3479d2ea30caa9d35c861bc6c67f995c6a7218267d790bda22e79ba90c4ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2948b964256433e91e0078a7552bcf963e1f09896f66e0b8b6630554ac5f50db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2948b964256433e91e0078a7552bcf963e1f09896f66e0b8b6630554ac5f50db->enter($__internal_2948b964256433e91e0078a7552bcf963e1f09896f66e0b8b6630554ac5f50db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec1ed3f7fa84290a3fedbe8c9c408637b5302e270135f37c206c3b051fd46923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1ed3f7fa84290a3fedbe8c9c408637b5302e270135f37c206c3b051fd46923->enter($__internal_ec1ed3f7fa84290a3fedbe8c9c408637b5302e270135f37c206c3b051fd46923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_ec1ed3f7fa84290a3fedbe8c9c408637b5302e270135f37c206c3b051fd46923->leave($__internal_ec1ed3f7fa84290a3fedbe8c9c408637b5302e270135f37c206c3b051fd46923_prof);

        
        $__internal_2948b964256433e91e0078a7552bcf963e1f09896f66e0b8b6630554ac5f50db->leave($__internal_2948b964256433e91e0078a7552bcf963e1f09896f66e0b8b6630554ac5f50db_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_793b22b5c4b2ea67daf5688070890fdc57112bd3e3e16c026b89b3b19e57de04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793b22b5c4b2ea67daf5688070890fdc57112bd3e3e16c026b89b3b19e57de04->enter($__internal_793b22b5c4b2ea67daf5688070890fdc57112bd3e3e16c026b89b3b19e57de04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0679462c2301ac314bd5156903bab18fe5c761cc0346d424cca4a5193a72aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0679462c2301ac314bd5156903bab18fe5c761cc0346d424cca4a5193a72aa3c->enter($__internal_0679462c2301ac314bd5156903bab18fe5c761cc0346d424cca4a5193a72aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"col-sm-2\">
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
        
        $__internal_0679462c2301ac314bd5156903bab18fe5c761cc0346d424cca4a5193a72aa3c->leave($__internal_0679462c2301ac314bd5156903bab18fe5c761cc0346d424cca4a5193a72aa3c_prof);

        
        $__internal_793b22b5c4b2ea67daf5688070890fdc57112bd3e3e16c026b89b3b19e57de04->leave($__internal_793b22b5c4b2ea67daf5688070890fdc57112bd3e3e16c026b89b3b19e57de04_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34551c303e4b95725ee77a09aed9fec235484644b612e679663d1594026f765f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34551c303e4b95725ee77a09aed9fec235484644b612e679663d1594026f765f->enter($__internal_34551c303e4b95725ee77a09aed9fec235484644b612e679663d1594026f765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_732df90deac313b8aa88117845d84521d271a7d4bea0b3cf7d439e2f9bf93ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732df90deac313b8aa88117845d84521d271a7d4bea0b3cf7d439e2f9bf93ace->enter($__internal_732df90deac313b8aa88117845d84521d271a7d4bea0b3cf7d439e2f9bf93ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bookingFormulaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_732df90deac313b8aa88117845d84521d271a7d4bea0b3cf7d439e2f9bf93ace->leave($__internal_732df90deac313b8aa88117845d84521d271a7d4bea0b3cf7d439e2f9bf93ace_prof);

        
        $__internal_34551c303e4b95725ee77a09aed9fec235484644b612e679663d1594026f765f->leave($__internal_34551c303e4b95725ee77a09aed9fec235484644b612e679663d1594026f765f_prof);

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
        return array (  193 => 65,  179 => 61,  163 => 54,  158 => 52,  150 => 47,  135 => 35,  130 => 33,  126 => 32,  123 => 31,  117 => 28,  112 => 26,  108 => 25,  105 => 24,  99 => 21,  94 => 19,  90 => 18,  87 => 17,  80 => 13,  75 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
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
            <div class=\"col-sm-2\">
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
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"{{ asset('js/bookingFormulaire.js') }}\"></script>
{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
