<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_7dbcc887e3a5f16ac12bb7ebb5a5a23762edbd1139bbdacf64acfbb72d566953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Home:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocbooking_body' => array($this, 'block_ocbooking_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_847cee686c031172726f7978c622cd515b73d704628fddaa4a886b65e35e5ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847cee686c031172726f7978c622cd515b73d704628fddaa4a886b65e35e5ff9->enter($__internal_847cee686c031172726f7978c622cd515b73d704628fddaa4a886b65e35e5ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_6c8f5dc820869fd32947009c7bf9cce1282ce15fbdac19e54efa6ae8799fadf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8f5dc820869fd32947009c7bf9cce1282ce15fbdac19e54efa6ae8799fadf8->enter($__internal_6c8f5dc820869fd32947009c7bf9cce1282ce15fbdac19e54efa6ae8799fadf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847cee686c031172726f7978c622cd515b73d704628fddaa4a886b65e35e5ff9->leave($__internal_847cee686c031172726f7978c622cd515b73d704628fddaa4a886b65e35e5ff9_prof);

        
        $__internal_6c8f5dc820869fd32947009c7bf9cce1282ce15fbdac19e54efa6ae8799fadf8->leave($__internal_6c8f5dc820869fd32947009c7bf9cce1282ce15fbdac19e54efa6ae8799fadf8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9def0d653f4a174be895e43f6bd834cb8ecd35d6c99348b52dc4e1ca45e01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9def0d653f4a174be895e43f6bd834cb8ecd35d6c99348b52dc4e1ca45e01c->enter($__internal_eb9def0d653f4a174be895e43f6bd834cb8ecd35d6c99348b52dc4e1ca45e01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d7fa04819e55fca6843bca80fd4c953cfbafb428eadab6cdcd45cb8a566edcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7fa04819e55fca6843bca80fd4c953cfbafb428eadab6cdcd45cb8a566edcf->enter($__internal_4d7fa04819e55fca6843bca80fd4c953cfbafb428eadab6cdcd45cb8a566edcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_4d7fa04819e55fca6843bca80fd4c953cfbafb428eadab6cdcd45cb8a566edcf->leave($__internal_4d7fa04819e55fca6843bca80fd4c953cfbafb428eadab6cdcd45cb8a566edcf_prof);

        
        $__internal_eb9def0d653f4a174be895e43f6bd834cb8ecd35d6c99348b52dc4e1ca45e01c->leave($__internal_eb9def0d653f4a174be895e43f6bd834cb8ecd35d6c99348b52dc4e1ca45e01c_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_83f4bf42b5d4aef0b4a9e2cdabe25a486530cb8dfa590616871d55440a5ab126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f4bf42b5d4aef0b4a9e2cdabe25a486530cb8dfa590616871d55440a5ab126->enter($__internal_83f4bf42b5d4aef0b4a9e2cdabe25a486530cb8dfa590616871d55440a5ab126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_ef123ea665de2f93bdac9d9503a3656a403c1b17705e3861111d04c65ca35131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef123ea665de2f93bdac9d9503a3656a403c1b17705e3861111d04c65ca35131->enter($__internal_ef123ea665de2f93bdac9d9503a3656a403c1b17705e3861111d04c65ca35131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        echo " 

<div class=\"photoCentral\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/museedulouvrev2.png"), "html", null, true);
        echo "\"  class=\"photomusee\" alt=\"photomuseedulouvre\">
</div>

<div id=\"bookingButton\" class=\"col-lg-12\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_form");
        echo "\" class=\"btn btn-lg btn-booking\">Réservation</a>
</div> 

";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_ef123ea665de2f93bdac9d9503a3656a403c1b17705e3861111d04c65ca35131->leave($__internal_ef123ea665de2f93bdac9d9503a3656a403c1b17705e3861111d04c65ca35131_prof);

        
        $__internal_83f4bf42b5d4aef0b4a9e2cdabe25a486530cb8dfa590616871d55440a5ab126->leave($__internal_83f4bf42b5d4aef0b4a9e2cdabe25a486530cb8dfa590616871d55440a5ab126_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b73cc2f9267599cbfb3b7a7d26f6ed259c43c7ff61bd3a3e7169739e7d670ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73cc2f9267599cbfb3b7a7d26f6ed259c43c7ff61bd3a3e7169739e7d670ae1->enter($__internal_b73cc2f9267599cbfb3b7a7d26f6ed259c43c7ff61bd3a3e7169739e7d670ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04696e4a5a6b0ebf361640ab75ddf1acb2b9fbe037153d5f25dc1d57215f5121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04696e4a5a6b0ebf361640ab75ddf1acb2b9fbe037153d5f25dc1d57215f5121->enter($__internal_04696e4a5a6b0ebf361640ab75ddf1acb2b9fbe037153d5f25dc1d57215f5121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/animationHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_04696e4a5a6b0ebf361640ab75ddf1acb2b9fbe037153d5f25dc1d57215f5121->leave($__internal_04696e4a5a6b0ebf361640ab75ddf1acb2b9fbe037153d5f25dc1d57215f5121_prof);

        
        $__internal_b73cc2f9267599cbfb3b7a7d26f6ed259c43c7ff61bd3a3e7169739e7d670ae1->leave($__internal_b73cc2f9267599cbfb3b7a7d26f6ed259c43c7ff61bd3a3e7169739e7d670ae1_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  101 => 17,  90 => 21,  88 => 17,  82 => 14,  75 => 10,  62 => 7,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Home/index.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %} 

{% block title %} Accueil - {{ parent () }} {% endblock %} 

{% block ocbooking_body %} 

<div class=\"photoCentral\">
    <img src=\"{{ asset('images/museedulouvrev2.png') }}\"  class=\"photomusee\" alt=\"photomuseedulouvre\">
</div>

<div id=\"bookingButton\" class=\"col-lg-12\">
    <a href=\"{{ path('oc_booking_form') }}\" class=\"btn btn-lg btn-booking\">Réservation</a>
</div> 

{% block javascripts %} 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"{{ asset('js/animationHome.js') }}\"></script>
{% endblock %}

{% endblock %}", "OCBookingBundle:Home:index.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Home/index.html.twig");
    }
}
