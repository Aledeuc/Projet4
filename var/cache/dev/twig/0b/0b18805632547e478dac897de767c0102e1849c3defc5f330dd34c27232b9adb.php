<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_96a81ae9b711056414c00d5e1a11fde7c699d9f7c33a6c87b42f9a060af24b21 extends Twig_Template
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
        $__internal_cd2c63a8799a2b88b40e2ad07e5a734444d2f1196456d31f50e7d8134ca4a9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2c63a8799a2b88b40e2ad07e5a734444d2f1196456d31f50e7d8134ca4a9b0->enter($__internal_cd2c63a8799a2b88b40e2ad07e5a734444d2f1196456d31f50e7d8134ca4a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_8069c3510fe29ceaf0b47e3970d28d97f3cea56da7fbf427b8b2bc416293a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8069c3510fe29ceaf0b47e3970d28d97f3cea56da7fbf427b8b2bc416293a815->enter($__internal_8069c3510fe29ceaf0b47e3970d28d97f3cea56da7fbf427b8b2bc416293a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2c63a8799a2b88b40e2ad07e5a734444d2f1196456d31f50e7d8134ca4a9b0->leave($__internal_cd2c63a8799a2b88b40e2ad07e5a734444d2f1196456d31f50e7d8134ca4a9b0_prof);

        
        $__internal_8069c3510fe29ceaf0b47e3970d28d97f3cea56da7fbf427b8b2bc416293a815->leave($__internal_8069c3510fe29ceaf0b47e3970d28d97f3cea56da7fbf427b8b2bc416293a815_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75e7f01dbb8880aecf46da23ec469a24771309b356e36878bade7886e602a06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e7f01dbb8880aecf46da23ec469a24771309b356e36878bade7886e602a06c->enter($__internal_75e7f01dbb8880aecf46da23ec469a24771309b356e36878bade7886e602a06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f494a2445b4d920de52eb6eec601b7e73108c98adf87aa3d8ca3a3a82079c3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f494a2445b4d920de52eb6eec601b7e73108c98adf87aa3d8ca3a3a82079c3b1->enter($__internal_f494a2445b4d920de52eb6eec601b7e73108c98adf87aa3d8ca3a3a82079c3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_f494a2445b4d920de52eb6eec601b7e73108c98adf87aa3d8ca3a3a82079c3b1->leave($__internal_f494a2445b4d920de52eb6eec601b7e73108c98adf87aa3d8ca3a3a82079c3b1_prof);

        
        $__internal_75e7f01dbb8880aecf46da23ec469a24771309b356e36878bade7886e602a06c->leave($__internal_75e7f01dbb8880aecf46da23ec469a24771309b356e36878bade7886e602a06c_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_1796980fd13fb5d2949b96124d02190571b2346b15e003ad44851548e7553ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1796980fd13fb5d2949b96124d02190571b2346b15e003ad44851548e7553ef7->enter($__internal_1796980fd13fb5d2949b96124d02190571b2346b15e003ad44851548e7553ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_3deca3a2d6a088ab7ba3b984b70dce114c8231499fc1ee4a076452f72253b695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3deca3a2d6a088ab7ba3b984b70dce114c8231499fc1ee4a076452f72253b695->enter($__internal_3deca3a2d6a088ab7ba3b984b70dce114c8231499fc1ee4a076452f72253b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_3deca3a2d6a088ab7ba3b984b70dce114c8231499fc1ee4a076452f72253b695->leave($__internal_3deca3a2d6a088ab7ba3b984b70dce114c8231499fc1ee4a076452f72253b695_prof);

        
        $__internal_1796980fd13fb5d2949b96124d02190571b2346b15e003ad44851548e7553ef7->leave($__internal_1796980fd13fb5d2949b96124d02190571b2346b15e003ad44851548e7553ef7_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ade9013c92f0118b847c48f42d15ae9389d281b31c1fcca071c4bd43fc0f9c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade9013c92f0118b847c48f42d15ae9389d281b31c1fcca071c4bd43fc0f9c15->enter($__internal_ade9013c92f0118b847c48f42d15ae9389d281b31c1fcca071c4bd43fc0f9c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d53029a033242ca7a58e33f485d86df492717e1d6b39bfdefb3b9ff82605d29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53029a033242ca7a58e33f485d86df492717e1d6b39bfdefb3b9ff82605d29d->enter($__internal_d53029a033242ca7a58e33f485d86df492717e1d6b39bfdefb3b9ff82605d29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_d53029a033242ca7a58e33f485d86df492717e1d6b39bfdefb3b9ff82605d29d->leave($__internal_d53029a033242ca7a58e33f485d86df492717e1d6b39bfdefb3b9ff82605d29d_prof);

        
        $__internal_ade9013c92f0118b847c48f42d15ae9389d281b31c1fcca071c4bd43fc0f9c15->leave($__internal_ade9013c92f0118b847c48f42d15ae9389d281b31c1fcca071c4bd43fc0f9c15_prof);

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
        return array (  97 => 20,  82 => 14,  75 => 10,  62 => 7,  42 => 5,  11 => 3,);
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


{% endblock %}

{% block javascripts %} 
{% endblock %}", "OCBookingBundle:Home:index.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Home/index.html.twig");
    }
}
