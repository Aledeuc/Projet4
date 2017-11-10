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
        $__internal_1cb68fa7911bd8e4a732047fd9842c1b62abb701160e909878dc603151ee6eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb68fa7911bd8e4a732047fd9842c1b62abb701160e909878dc603151ee6eb4->enter($__internal_1cb68fa7911bd8e4a732047fd9842c1b62abb701160e909878dc603151ee6eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_abbdbff825d67a86bc099a84ddd8687921b90ed4aa75b19e7f24c753ab5861bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbdbff825d67a86bc099a84ddd8687921b90ed4aa75b19e7f24c753ab5861bc->enter($__internal_abbdbff825d67a86bc099a84ddd8687921b90ed4aa75b19e7f24c753ab5861bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb68fa7911bd8e4a732047fd9842c1b62abb701160e909878dc603151ee6eb4->leave($__internal_1cb68fa7911bd8e4a732047fd9842c1b62abb701160e909878dc603151ee6eb4_prof);

        
        $__internal_abbdbff825d67a86bc099a84ddd8687921b90ed4aa75b19e7f24c753ab5861bc->leave($__internal_abbdbff825d67a86bc099a84ddd8687921b90ed4aa75b19e7f24c753ab5861bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75224b6572a360150f56c5df1c81090e1c8290ee22639710214ba5009ae6b24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75224b6572a360150f56c5df1c81090e1c8290ee22639710214ba5009ae6b24c->enter($__internal_75224b6572a360150f56c5df1c81090e1c8290ee22639710214ba5009ae6b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41f02fda465690cd47c6c260aaf4318d90fe1a780776a661903877b18861c2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f02fda465690cd47c6c260aaf4318d90fe1a780776a661903877b18861c2c0->enter($__internal_41f02fda465690cd47c6c260aaf4318d90fe1a780776a661903877b18861c2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_41f02fda465690cd47c6c260aaf4318d90fe1a780776a661903877b18861c2c0->leave($__internal_41f02fda465690cd47c6c260aaf4318d90fe1a780776a661903877b18861c2c0_prof);

        
        $__internal_75224b6572a360150f56c5df1c81090e1c8290ee22639710214ba5009ae6b24c->leave($__internal_75224b6572a360150f56c5df1c81090e1c8290ee22639710214ba5009ae6b24c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ac2924ac23a37137bb9204286e5eb488afe5f5e0a8895fa79c38e822038ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ac2924ac23a37137bb9204286e5eb488afe5f5e0a8895fa79c38e822038ac3->enter($__internal_04ac2924ac23a37137bb9204286e5eb488afe5f5e0a8895fa79c38e822038ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26f7c7de31d8756a988545c4bb89f561f39e0559a9f49d330d34ff098e25434d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f7c7de31d8756a988545c4bb89f561f39e0559a9f49d330d34ff098e25434d->enter($__internal_26f7c7de31d8756a988545c4bb89f561f39e0559a9f49d330d34ff098e25434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visitors", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo " 
        
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "


        <p><font size=\"2\">* Il sera nécessaire de présenter votre carte d'étudiant, militaire ou équivalent lors de l'entrée au musée.</font></p>
</div>


";
        
        $__internal_26f7c7de31d8756a988545c4bb89f561f39e0559a9f49d330d34ff098e25434d->leave($__internal_26f7c7de31d8756a988545c4bb89f561f39e0559a9f49d330d34ff098e25434d_prof);

        
        $__internal_04ac2924ac23a37137bb9204286e5eb488afe5f5e0a8895fa79c38e822038ac3->leave($__internal_04ac2924ac23a37137bb9204286e5eb488afe5f5e0a8895fa79c38e822038ac3_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b18c890ded85f10aa9f685097e7405e71c28e82081cc32a7238263354a37db63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18c890ded85f10aa9f685097e7405e71c28e82081cc32a7238263354a37db63->enter($__internal_b18c890ded85f10aa9f685097e7405e71c28e82081cc32a7238263354a37db63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_926f33bc19814aefedcbf27ac6178a494f627929814634fe7f754d20b867802a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926f33bc19814aefedcbf27ac6178a494f627929814634fe7f754d20b867802a->enter($__internal_926f33bc19814aefedcbf27ac6178a494f627929814634fe7f754d20b867802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bookingFormulaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_926f33bc19814aefedcbf27ac6178a494f627929814634fe7f754d20b867802a->leave($__internal_926f33bc19814aefedcbf27ac6178a494f627929814634fe7f754d20b867802a_prof);

        
        $__internal_b18c890ded85f10aa9f685097e7405e71c28e82081cc32a7238263354a37db63->leave($__internal_b18c890ded85f10aa9f685097e7405e71c28e82081cc32a7238263354a37db63_prof);

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
        return array (  191 => 63,  178 => 60,  160 => 51,  155 => 49,  147 => 44,  135 => 35,  130 => 33,  126 => 32,  123 => 31,  117 => 28,  112 => 26,  108 => 25,  105 => 24,  99 => 21,  94 => 19,  90 => 18,  87 => 17,  80 => 13,  75 => 11,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
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


        <p><font size=\"2\">* Il sera nécessaire de présenter votre carte d'étudiant, militaire ou équivalent lors de l'entrée au musée.</font></p>
</div>


{% endblock %}

{% block javascripts %} 
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"{{ asset('js/bookingFormulaire.js') }}\"></script>
{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
