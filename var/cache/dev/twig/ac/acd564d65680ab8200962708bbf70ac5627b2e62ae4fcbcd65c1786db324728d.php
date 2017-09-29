<?php

/* OCBookingBundle:Admission:form.html.twig */
class __TwigTemplate_f72094794e13fab6c64e54114d15d0d741b52a611c4c7413521682f7003909c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Admission:form.html.twig", 3);
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
        $__internal_88d8df6a9bcd457cf025d7ae15fd7933e9e414b581d42848e18e56d0db4eafe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d8df6a9bcd457cf025d7ae15fd7933e9e414b581d42848e18e56d0db4eafe8->enter($__internal_88d8df6a9bcd457cf025d7ae15fd7933e9e414b581d42848e18e56d0db4eafe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Admission:form.html.twig"));

        $__internal_a675a9cd96ec8c01fe8a2a7cd2fbecd1e6a412cb8d82a0e93d4535846351a42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a675a9cd96ec8c01fe8a2a7cd2fbecd1e6a412cb8d82a0e93d4535846351a42a->enter($__internal_a675a9cd96ec8c01fe8a2a7cd2fbecd1e6a412cb8d82a0e93d4535846351a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Admission:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d8df6a9bcd457cf025d7ae15fd7933e9e414b581d42848e18e56d0db4eafe8->leave($__internal_88d8df6a9bcd457cf025d7ae15fd7933e9e414b581d42848e18e56d0db4eafe8_prof);

        
        $__internal_a675a9cd96ec8c01fe8a2a7cd2fbecd1e6a412cb8d82a0e93d4535846351a42a->leave($__internal_a675a9cd96ec8c01fe8a2a7cd2fbecd1e6a412cb8d82a0e93d4535846351a42a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a19c13ddbcf2aa53b691cf9a3959dd5733197ae448eca8d2c935bed2dab3268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a19c13ddbcf2aa53b691cf9a3959dd5733197ae448eca8d2c935bed2dab3268->enter($__internal_8a19c13ddbcf2aa53b691cf9a3959dd5733197ae448eca8d2c935bed2dab3268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76b0af312f2a4a2602c9a4cf7bf210bb20f2d1620d5e60060c251e362b3c09c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b0af312f2a4a2602c9a4cf7bf210bb20f2d1620d5e60060c251e362b3c09c7->enter($__internal_76b0af312f2a4a2602c9a4cf7bf210bb20f2d1620d5e60060c251e362b3c09c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_76b0af312f2a4a2602c9a4cf7bf210bb20f2d1620d5e60060c251e362b3c09c7->leave($__internal_76b0af312f2a4a2602c9a4cf7bf210bb20f2d1620d5e60060c251e362b3c09c7_prof);

        
        $__internal_8a19c13ddbcf2aa53b691cf9a3959dd5733197ae448eca8d2c935bed2dab3268->leave($__internal_8a19c13ddbcf2aa53b691cf9a3959dd5733197ae448eca8d2c935bed2dab3268_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2682df9f8cd13ff5349d2b1d69494d27e03b41df4df91037003606090316a12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2682df9f8cd13ff5349d2b1d69494d27e03b41df4df91037003606090316a12c->enter($__internal_2682df9f8cd13ff5349d2b1d69494d27e03b41df4df91037003606090316a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f318c4ac45fa9a8e54b5a8034c5f97031a2b2db593f431f0cdb1b07e1b86302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f318c4ac45fa9a8e54b5a8034c5f97031a2b2db593f431f0cdb1b07e1b86302b->enter($__internal_f318c4ac45fa9a8e54b5a8034c5f97031a2b2db593f431f0cdb1b07e1b86302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"well\">
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">

        ";
        // line 16
        echo " 
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Date de la visite"));
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'errors');
        echo "
        <div class=\"col-sm-3\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingDate", array()), 'widget');
        echo "
        </div>

        ";
        // line 23
        echo " 
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbVisitor", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Nombre de visiteur"));
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbVisitor", array()), 'errors');
        echo "   
        <div class=\"col-sm-1\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbVisitor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        ";
        // line 30
        echo " 
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingType", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Type de réservation"));
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingType", array()), 'errors');
        echo "   
        <div class=\"col-sm-1\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

  

    <div class=\"dynamicForm\">

        <div class=\"form-group\">
            ";
        // line 43
        echo " 
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Nom"));
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "  
            <div class=\"col-sm-1\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            
            ";
        // line 51
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Prénom"));
        echo "
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
            <div class=\"col-sm-1\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Pays"));
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors');
        echo "
            <div class=\"col-sm-1\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            
            ";
        // line 65
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDate", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Date d'anniversaire"));
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDate", array()), 'errors');
        echo "
            <div class=\"col-sm-3\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDate", array()), 'widget');
        echo "
            </div>

            ";
        // line 72
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reduce", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Réduction"));
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reduce", array()), 'errors');
        echo "
            <div class=\"col-sm-1\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reduce", array()), 'widget');
        echo "
            </div>
        </div>
    </div>

 
";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        

";
        // line 84
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

</div>

";
        
        $__internal_f318c4ac45fa9a8e54b5a8034c5f97031a2b2db593f431f0cdb1b07e1b86302b->leave($__internal_f318c4ac45fa9a8e54b5a8034c5f97031a2b2db593f431f0cdb1b07e1b86302b_prof);

        
        $__internal_2682df9f8cd13ff5349d2b1d69494d27e03b41df4df91037003606090316a12c->leave($__internal_2682df9f8cd13ff5349d2b1d69494d27e03b41df4df91037003606090316a12c_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Admission:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 86,  236 => 84,  230 => 81,  221 => 75,  216 => 73,  211 => 72,  205 => 68,  200 => 66,  195 => 65,  189 => 61,  184 => 59,  179 => 58,  173 => 54,  168 => 52,  163 => 51,  157 => 47,  152 => 45,  148 => 44,  145 => 43,  133 => 34,  128 => 32,  124 => 31,  121 => 30,  115 => 27,  110 => 25,  106 => 24,  103 => 23,  97 => 20,  92 => 18,  88 => 17,  85 => 16,  78 => 12,  73 => 10,  69 => 8,  60 => 7,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Admission/form.html.twig #} 

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

        {# Visitor Number #} 
        {{ form_label(form.nbVisitor, \"Nombre de visiteur\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
        {{ form_errors(form.nbVisitor) }}   
        <div class=\"col-sm-1\">
            {{ form_widget(form.nbVisitor, {'attr': {'class': 'form-control'}}) }}
        </div>

        {# Booking type #} 
        {{ form_label(form.bookingType, \"Type de réservation\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
        {{ form_errors(form.bookingType) }}   
        <div class=\"col-sm-1\">
            {{ form_widget(form.bookingType, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

  

    <div class=\"dynamicForm\">

        <div class=\"form-group\">
            {# Name #} 
            {{ form_label(form.name, \"Nom\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.name) }}  
            <div class=\"col-sm-1\">
                {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
            </div>
            
            {# First Name #}
            {{ form_label(form.firstName, \"Prénom\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.firstName) }}
            <div class=\"col-sm-1\">
                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
            </div>

            {# Country #}
            {{ form_label(form.country, \"Pays\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.country) }}
            <div class=\"col-sm-1\">
                {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}
            </div>
            
            {# Birthday #}
            {{ form_label(form.birthDate, \"Date d'anniversaire\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.birthDate) }}
            <div class=\"col-sm-3\">
                {{ form_widget(form.birthDate) }}
            </div>

            {# Reduce #}
            {{ form_label(form.reduce, \"Réduction\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
            {{ form_errors(form.reduce) }}
            <div class=\"col-sm-1\">
                {{ form_widget(form.reduce) }}
            </div>
        </div>
    </div>

 
{{ form_rest(form) }}
        

{{ form_end(form) }}

{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

</div>

{% endblock %}



", "OCBookingBundle:Admission:form.html.twig", "/Users/alexandre/Google Drive/Pro/OC/Projet4/Louvre/Symfony/src/OC/BookingBundle/Resources/views/Admission/form.html.twig");
    }
}
