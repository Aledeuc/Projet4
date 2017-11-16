<?php

/* OCBookingBundle:Bookingform:form.html.twig */
class __TwigTemplate_832a4bb2927e55373db80b0954adf662be894802ee5e67a506ba7ac8268bea29 extends Twig_Template
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
        $__internal_8356be52d6e2a8c536f515fdde3619338beb69f3e7c6df13f1315376baff684f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8356be52d6e2a8c536f515fdde3619338beb69f3e7c6df13f1315376baff684f->enter($__internal_8356be52d6e2a8c536f515fdde3619338beb69f3e7c6df13f1315376baff684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_5d93d3943becd33eea3e5dcc56092ac76f38680163872d948e9869cf2b97c38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d93d3943becd33eea3e5dcc56092ac76f38680163872d948e9869cf2b97c38e->enter($__internal_5d93d3943becd33eea3e5dcc56092ac76f38680163872d948e9869cf2b97c38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8356be52d6e2a8c536f515fdde3619338beb69f3e7c6df13f1315376baff684f->leave($__internal_8356be52d6e2a8c536f515fdde3619338beb69f3e7c6df13f1315376baff684f_prof);

        
        $__internal_5d93d3943becd33eea3e5dcc56092ac76f38680163872d948e9869cf2b97c38e->leave($__internal_5d93d3943becd33eea3e5dcc56092ac76f38680163872d948e9869cf2b97c38e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78535ab2cfd9388059797e0a28e506c69ab0764d02410cfb5b433e65be11494e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78535ab2cfd9388059797e0a28e506c69ab0764d02410cfb5b433e65be11494e->enter($__internal_78535ab2cfd9388059797e0a28e506c69ab0764d02410cfb5b433e65be11494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adc94b9bc42bd18a3c07a6b49c9da334bd8e6aa5a117f7247d24e8c67e141b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc94b9bc42bd18a3c07a6b49c9da334bd8e6aa5a117f7247d24e8c67e141b62->enter($__internal_adc94b9bc42bd18a3c07a6b49c9da334bd8e6aa5a117f7247d24e8c67e141b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_adc94b9bc42bd18a3c07a6b49c9da334bd8e6aa5a117f7247d24e8c67e141b62->leave($__internal_adc94b9bc42bd18a3c07a6b49c9da334bd8e6aa5a117f7247d24e8c67e141b62_prof);

        
        $__internal_78535ab2cfd9388059797e0a28e506c69ab0764d02410cfb5b433e65be11494e->leave($__internal_78535ab2cfd9388059797e0a28e506c69ab0764d02410cfb5b433e65be11494e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c944ec655c883115c8ce6f6c7f3f119eb92163127c17b2b81199880e34e434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c944ec655c883115c8ce6f6c7f3f119eb92163127c17b2b81199880e34e434->enter($__internal_c0c944ec655c883115c8ce6f6c7f3f119eb92163127c17b2b81199880e34e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e18132897f2815e22e3e19e875ba598cfaa4c5866468ff77672f32a15255e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e18132897f2815e22e3e19e875ba598cfaa4c5866468ff77672f32a15255e8e->enter($__internal_2e18132897f2815e22e3e19e875ba598cfaa4c5866468ff77672f32a15255e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "<div class=\"flash-notice\">
    ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
<div class=\"well\">

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    
        <div class=\"form-group\">
    
            ";
        // line 23
        echo " 
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Date de la visite"));
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'errors');
        echo "
            <div class=\"col-sm-3\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'widget');
        echo "
            </div>
    
            ";
        // line 30
        echo " 
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Type de réservation"));
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'errors');
        echo "   
            <div class=\"col-sm-2\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
    
            ";
        // line 37
        echo " 
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Email de réservation"));
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'errors');
        echo "   
            <div class=\"col-sm-2\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
       
        </div>
        
        <div =\"col-sm-3\">
        
        <h3>Visiteurs</h3>

        <ul class=\"visitors form-group\" data-prototype=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visitors", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\"></ul>
            
        <button href=\"#\" class=\"addVisitor\">Ajouter un visiteur</button>
        </div>

        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row');
        echo " 
        
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "


        <p><font size=\"2\">* Il sera nécessaire de présenter votre carte d'étudiant, militaire ou équivalent lors de l'entrée au musée.</font></p>
</div>


";
        
        $__internal_2e18132897f2815e22e3e19e875ba598cfaa4c5866468ff77672f32a15255e8e->leave($__internal_2e18132897f2815e22e3e19e875ba598cfaa4c5866468ff77672f32a15255e8e_prof);

        
        $__internal_c0c944ec655c883115c8ce6f6c7f3f119eb92163127c17b2b81199880e34e434->leave($__internal_c0c944ec655c883115c8ce6f6c7f3f119eb92163127c17b2b81199880e34e434_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b70b9e83e669507c497d3562dd8dd4ec8a776f261a986e70649258c92d357615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70b9e83e669507c497d3562dd8dd4ec8a776f261a986e70649258c92d357615->enter($__internal_b70b9e83e669507c497d3562dd8dd4ec8a776f261a986e70649258c92d357615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7329b6346a7ac24587437a17283e0aacadceadbd2a2f4a2075dd587031575f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7329b6346a7ac24587437a17283e0aacadceadbd2a2f4a2075dd587031575f2c->enter($__internal_7329b6346a7ac24587437a17283e0aacadceadbd2a2f4a2075dd587031575f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bookingFormulaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7329b6346a7ac24587437a17283e0aacadceadbd2a2f4a2075dd587031575f2c->leave($__internal_7329b6346a7ac24587437a17283e0aacadceadbd2a2f4a2075dd587031575f2c_prof);

        
        $__internal_b70b9e83e669507c497d3562dd8dd4ec8a776f261a986e70649258c92d357615->leave($__internal_b70b9e83e669507c497d3562dd8dd4ec8a776f261a986e70649258c92d357615_prof);

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
        return array (  210 => 69,  197 => 66,  179 => 57,  174 => 55,  166 => 50,  154 => 41,  149 => 39,  145 => 38,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  124 => 30,  118 => 27,  113 => 25,  109 => 24,  106 => 23,  99 => 19,  94 => 17,  89 => 14,  80 => 11,  77 => 10,  73 => 9,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
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

{% for message in app.flashes('notice') %}
<div class=\"flash-notice\">
    {{ message }}
</div>
{% endfor %}

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
        
        <div =\"col-sm-3\">
        
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
