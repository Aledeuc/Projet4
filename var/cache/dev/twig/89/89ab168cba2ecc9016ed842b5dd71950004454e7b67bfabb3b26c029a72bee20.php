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
        $__internal_d995d84eb0e188ca2e8c11d74f9f958121c74625b2af85fd2dc33b5596d33ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d995d84eb0e188ca2e8c11d74f9f958121c74625b2af85fd2dc33b5596d33ad2->enter($__internal_d995d84eb0e188ca2e8c11d74f9f958121c74625b2af85fd2dc33b5596d33ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_df2dea57906503bfd7f69efd820e624e72e062c58761ac51013abe224bb2c353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2dea57906503bfd7f69efd820e624e72e062c58761ac51013abe224bb2c353->enter($__internal_df2dea57906503bfd7f69efd820e624e72e062c58761ac51013abe224bb2c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d995d84eb0e188ca2e8c11d74f9f958121c74625b2af85fd2dc33b5596d33ad2->leave($__internal_d995d84eb0e188ca2e8c11d74f9f958121c74625b2af85fd2dc33b5596d33ad2_prof);

        
        $__internal_df2dea57906503bfd7f69efd820e624e72e062c58761ac51013abe224bb2c353->leave($__internal_df2dea57906503bfd7f69efd820e624e72e062c58761ac51013abe224bb2c353_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_faefe2b8ad43cea259de18e167b2b9b3b775a3327fa9b50923a03914cc09f7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faefe2b8ad43cea259de18e167b2b9b3b775a3327fa9b50923a03914cc09f7ac->enter($__internal_faefe2b8ad43cea259de18e167b2b9b3b775a3327fa9b50923a03914cc09f7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_290bb4ad690b8c94c98176fb9c21dc4ecfe123704dbb90b29667295ae86a2a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290bb4ad690b8c94c98176fb9c21dc4ecfe123704dbb90b29667295ae86a2a2b->enter($__internal_290bb4ad690b8c94c98176fb9c21dc4ecfe123704dbb90b29667295ae86a2a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_290bb4ad690b8c94c98176fb9c21dc4ecfe123704dbb90b29667295ae86a2a2b->leave($__internal_290bb4ad690b8c94c98176fb9c21dc4ecfe123704dbb90b29667295ae86a2a2b_prof);

        
        $__internal_faefe2b8ad43cea259de18e167b2b9b3b775a3327fa9b50923a03914cc09f7ac->leave($__internal_faefe2b8ad43cea259de18e167b2b9b3b775a3327fa9b50923a03914cc09f7ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_95d416989131c65ae9945cb51175072a3e7a098e09508f6b797d2035ac879bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d416989131c65ae9945cb51175072a3e7a098e09508f6b797d2035ac879bb3->enter($__internal_95d416989131c65ae9945cb51175072a3e7a098e09508f6b797d2035ac879bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_699250ce4a2181ff42f4bfc1cab7412bd46ad96049b2055f7ec55b66cce90a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699250ce4a2181ff42f4bfc1cab7412bd46ad96049b2055f7ec55b66cce90a33->enter($__internal_699250ce4a2181ff42f4bfc1cab7412bd46ad96049b2055f7ec55b66cce90a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_699250ce4a2181ff42f4bfc1cab7412bd46ad96049b2055f7ec55b66cce90a33->leave($__internal_699250ce4a2181ff42f4bfc1cab7412bd46ad96049b2055f7ec55b66cce90a33_prof);

        
        $__internal_95d416989131c65ae9945cb51175072a3e7a098e09508f6b797d2035ac879bb3->leave($__internal_95d416989131c65ae9945cb51175072a3e7a098e09508f6b797d2035ac879bb3_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_cdc5a86c20bf8ac5d92f7627f94f487159351edadbda2761581c36cb349062b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc5a86c20bf8ac5d92f7627f94f487159351edadbda2761581c36cb349062b2->enter($__internal_cdc5a86c20bf8ac5d92f7627f94f487159351edadbda2761581c36cb349062b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_9427afffeaf1dacaec7abd091f39b0645fe562b64ce5e86b0e3c46efe8412942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9427afffeaf1dacaec7abd091f39b0645fe562b64ce5e86b0e3c46efe8412942->enter($__internal_9427afffeaf1dacaec7abd091f39b0645fe562b64ce5e86b0e3c46efe8412942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_9427afffeaf1dacaec7abd091f39b0645fe562b64ce5e86b0e3c46efe8412942->leave($__internal_9427afffeaf1dacaec7abd091f39b0645fe562b64ce5e86b0e3c46efe8412942_prof);

        
        $__internal_cdc5a86c20bf8ac5d92f7627f94f487159351edadbda2761581c36cb349062b2->leave($__internal_cdc5a86c20bf8ac5d92f7627f94f487159351edadbda2761581c36cb349062b2_prof);

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
