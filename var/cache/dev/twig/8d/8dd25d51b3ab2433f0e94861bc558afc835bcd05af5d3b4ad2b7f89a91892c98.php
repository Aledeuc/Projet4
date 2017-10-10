<?php

/* OCBookingBundle:Bookingform:form.html.twig */
class __TwigTemplate_c651d965e7d966eeca0ec70984d0cd7a3c9b17f03a9161b8fdae1b0b53085229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Bookingform:form.html.twig", 3);
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
        $__internal_c0003862e5b4b4d45662998b48b84413e84bdde9688a2811b5aa0f331cad5b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0003862e5b4b4d45662998b48b84413e84bdde9688a2811b5aa0f331cad5b2d->enter($__internal_c0003862e5b4b4d45662998b48b84413e84bdde9688a2811b5aa0f331cad5b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_310acb08f8d1605e8c664bbfd037f36f1ae018268ae464aed23998f12bb42a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310acb08f8d1605e8c664bbfd037f36f1ae018268ae464aed23998f12bb42a3b->enter($__internal_310acb08f8d1605e8c664bbfd037f36f1ae018268ae464aed23998f12bb42a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0003862e5b4b4d45662998b48b84413e84bdde9688a2811b5aa0f331cad5b2d->leave($__internal_c0003862e5b4b4d45662998b48b84413e84bdde9688a2811b5aa0f331cad5b2d_prof);

        
        $__internal_310acb08f8d1605e8c664bbfd037f36f1ae018268ae464aed23998f12bb42a3b->leave($__internal_310acb08f8d1605e8c664bbfd037f36f1ae018268ae464aed23998f12bb42a3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_856693520c5ebc5cd830dc0626023a5b2626baba18f7a0286f67e0a7fe276dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856693520c5ebc5cd830dc0626023a5b2626baba18f7a0286f67e0a7fe276dbc->enter($__internal_856693520c5ebc5cd830dc0626023a5b2626baba18f7a0286f67e0a7fe276dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_877a8f4db9bbf05587c380b1910b3471525bde5d74e7f4f7bbdb4e6e190ce230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877a8f4db9bbf05587c380b1910b3471525bde5d74e7f4f7bbdb4e6e190ce230->enter($__internal_877a8f4db9bbf05587c380b1910b3471525bde5d74e7f4f7bbdb4e6e190ce230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_877a8f4db9bbf05587c380b1910b3471525bde5d74e7f4f7bbdb4e6e190ce230->leave($__internal_877a8f4db9bbf05587c380b1910b3471525bde5d74e7f4f7bbdb4e6e190ce230_prof);

        
        $__internal_856693520c5ebc5cd830dc0626023a5b2626baba18f7a0286f67e0a7fe276dbc->leave($__internal_856693520c5ebc5cd830dc0626023a5b2626baba18f7a0286f67e0a7fe276dbc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b47d69cdfcdebb7e6d9c188e176ce305e633981c2c853d94c8b0e5c62b11483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b47d69cdfcdebb7e6d9c188e176ce305e633981c2c853d94c8b0e5c62b11483->enter($__internal_1b47d69cdfcdebb7e6d9c188e176ce305e633981c2c853d94c8b0e5c62b11483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e04d9291167f98a6fd618445d96d3c276c578f575921d0083d411aa41c65ac86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04d9291167f98a6fd618445d96d3c276c578f575921d0083d411aa41c65ac86->enter($__internal_e04d9291167f98a6fd618445d96d3c276c578f575921d0083d411aa41c65ac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'label', array("label_attr" => array("class" => "col-sm-1 control-label"), "label" => "Type de réservation"));
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketType", array()), 'errors');
        echo "   
        <div class=\"col-sm-1\">
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
        <div class=\"col-sm-1\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bookingemail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

    </div>


  
 
";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
        

";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

</div>

";
        
        $__internal_e04d9291167f98a6fd618445d96d3c276c578f575921d0083d411aa41c65ac86->leave($__internal_e04d9291167f98a6fd618445d96d3c276c578f575921d0083d411aa41c65ac86_prof);

        
        $__internal_1b47d69cdfcdebb7e6d9c188e176ce305e633981c2c853d94c8b0e5c62b11483->leave($__internal_1b47d69cdfcdebb7e6d9c188e176ce305e633981c2c853d94c8b0e5c62b11483_prof);

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
        return array (  173 => 54,  168 => 52,  162 => 49,  151 => 41,  146 => 39,  142 => 38,  139 => 37,  133 => 34,  128 => 32,  124 => 31,  121 => 30,  115 => 27,  110 => 25,  106 => 24,  103 => 23,  97 => 20,  92 => 18,  88 => 17,  85 => 16,  78 => 12,  73 => 10,  69 => 8,  60 => 7,  41 => 5,  11 => 3,);
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

        {# Visitor Number #} 
        {{ form_label(form.nbVisitor, \"Nombre de visiteur\", {'label_attr': {'class': 'col-sm-1 control-label'}}) }}
        {{ form_errors(form.nbVisitor) }}   
        <div class=\"col-sm-1\">
            {{ form_widget(form.nbVisitor, {'attr': {'class': 'form-control'}}) }}
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
        <div class=\"col-sm-1\">
            {{ form_widget(form.bookingemail, {'attr': {'class': 'form-control'}}) }}
        </div>

    </div>


  
 
{{ form_rest(form) }}
        

{{ form_end(form) }}

{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

</div>

{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
