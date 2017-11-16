<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_cca2f555ea4c14a439b8cc75f2956f8e3cb48f5d5e85e165ca7de832274f6af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCBookingBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocbooking_body' => array($this, 'block_ocbooking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4264927adaa99a0ced7702543d8bd2fe138896d5aaaf3d63a411d4f8b4b4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4264927adaa99a0ced7702543d8bd2fe138896d5aaaf3d63a411d4f8b4b4d5->enter($__internal_ea4264927adaa99a0ced7702543d8bd2fe138896d5aaaf3d63a411d4f8b4b4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_5d61011c4d2c171bd0ab7aaf612aec7dbfa1224b8a9a313627633f9d4ac75292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d61011c4d2c171bd0ab7aaf612aec7dbfa1224b8a9a313627633f9d4ac75292->enter($__internal_5d61011c4d2c171bd0ab7aaf612aec7dbfa1224b8a9a313627633f9d4ac75292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4264927adaa99a0ced7702543d8bd2fe138896d5aaaf3d63a411d4f8b4b4d5->leave($__internal_ea4264927adaa99a0ced7702543d8bd2fe138896d5aaaf3d63a411d4f8b4b4d5_prof);

        
        $__internal_5d61011c4d2c171bd0ab7aaf612aec7dbfa1224b8a9a313627633f9d4ac75292->leave($__internal_5d61011c4d2c171bd0ab7aaf612aec7dbfa1224b8a9a313627633f9d4ac75292_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b2989bc1350c889679353d7999f4f600dce73f41f72bee6717e2d3eda94f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b2989bc1350c889679353d7999f4f600dce73f41f72bee6717e2d3eda94f6e->enter($__internal_97b2989bc1350c889679353d7999f4f600dce73f41f72bee6717e2d3eda94f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef0771b5de61015d3932bd95b6f80fd5c0f32af5de05bcbb6f9317e29891b215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0771b5de61015d3932bd95b6f80fd5c0f32af5de05bcbb6f9317e29891b215->enter($__internal_ef0771b5de61015d3932bd95b6f80fd5c0f32af5de05bcbb6f9317e29891b215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_ef0771b5de61015d3932bd95b6f80fd5c0f32af5de05bcbb6f9317e29891b215->leave($__internal_ef0771b5de61015d3932bd95b6f80fd5c0f32af5de05bcbb6f9317e29891b215_prof);

        
        $__internal_97b2989bc1350c889679353d7999f4f600dce73f41f72bee6717e2d3eda94f6e->leave($__internal_97b2989bc1350c889679353d7999f4f600dce73f41f72bee6717e2d3eda94f6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2398715de23eb9abc55533e3a100c770ba042dcf2f73436d5e08d209a1a7eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2398715de23eb9abc55533e3a100c770ba042dcf2f73436d5e08d209a1a7eb7->enter($__internal_c2398715de23eb9abc55533e3a100c770ba042dcf2f73436d5e08d209a1a7eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b8b79e3005894de74b6997b9ee188b5f3330bfa64fd788b699e34eb7086b397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8b79e3005894de74b6997b9ee188b5f3330bfa64fd788b699e34eb7086b397->enter($__internal_8b8b79e3005894de74b6997b9ee188b5f3330bfa64fd788b699e34eb7086b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_8b8b79e3005894de74b6997b9ee188b5f3330bfa64fd788b699e34eb7086b397->leave($__internal_8b8b79e3005894de74b6997b9ee188b5f3330bfa64fd788b699e34eb7086b397_prof);

        
        $__internal_c2398715de23eb9abc55533e3a100c770ba042dcf2f73436d5e08d209a1a7eb7->leave($__internal_c2398715de23eb9abc55533e3a100c770ba042dcf2f73436d5e08d209a1a7eb7_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_2685a2f06804bdeb5a14fda97ec6e219062bba1bf08bc24dbda15b2d1814df37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2685a2f06804bdeb5a14fda97ec6e219062bba1bf08bc24dbda15b2d1814df37->enter($__internal_2685a2f06804bdeb5a14fda97ec6e219062bba1bf08bc24dbda15b2d1814df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_364d5eb77fcde5b3cd0ae5d5fb03121fd04e353b9cf311e2957a2681b9fcbf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364d5eb77fcde5b3cd0ae5d5fb03121fd04e353b9cf311e2957a2681b9fcbf2c->enter($__internal_364d5eb77fcde5b3cd0ae5d5fb03121fd04e353b9cf311e2957a2681b9fcbf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_364d5eb77fcde5b3cd0ae5d5fb03121fd04e353b9cf311e2957a2681b9fcbf2c->leave($__internal_364d5eb77fcde5b3cd0ae5d5fb03121fd04e353b9cf311e2957a2681b9fcbf2c_prof);

        
        $__internal_2685a2f06804bdeb5a14fda97ec6e219062bba1bf08bc24dbda15b2d1814df37->leave($__internal_2685a2f06804bdeb5a14fda97ec6e219062bba1bf08bc24dbda15b2d1814df37_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  93 => 13,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  54 => 7,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/layout.html.twig #} 

{% extends \"::layout.html.twig\" %} 

{% block title %} 

    {{ parent() }} 

{% endblock %}

{% block body %}

    {% block ocbooking_body %}
    {% endblock %} 
   
{% endblock %}", "OCBookingBundle::layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/layout.html.twig");
    }
}
