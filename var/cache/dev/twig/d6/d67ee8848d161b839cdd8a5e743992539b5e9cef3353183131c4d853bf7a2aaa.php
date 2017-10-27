<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_5acdb34a6129d4757dadcc05620ad31f5bec5a467f6a4fa6809fd520b46b275c extends Twig_Template
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
        $__internal_9f451715f3090cfe6b4a8ebb8cedf43d50303f4f7806a4ef129a9f7f5d35ec70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f451715f3090cfe6b4a8ebb8cedf43d50303f4f7806a4ef129a9f7f5d35ec70->enter($__internal_9f451715f3090cfe6b4a8ebb8cedf43d50303f4f7806a4ef129a9f7f5d35ec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_a5bb664f268fa6f7955d475c2bf6d3b96cca8ce211564cd0625e0ab1757e4228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bb664f268fa6f7955d475c2bf6d3b96cca8ce211564cd0625e0ab1757e4228->enter($__internal_a5bb664f268fa6f7955d475c2bf6d3b96cca8ce211564cd0625e0ab1757e4228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f451715f3090cfe6b4a8ebb8cedf43d50303f4f7806a4ef129a9f7f5d35ec70->leave($__internal_9f451715f3090cfe6b4a8ebb8cedf43d50303f4f7806a4ef129a9f7f5d35ec70_prof);

        
        $__internal_a5bb664f268fa6f7955d475c2bf6d3b96cca8ce211564cd0625e0ab1757e4228->leave($__internal_a5bb664f268fa6f7955d475c2bf6d3b96cca8ce211564cd0625e0ab1757e4228_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d85890b7ab03f98834477c7136bcb34d8bb4ca149d41eef7e5c8cc5e3d4539fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85890b7ab03f98834477c7136bcb34d8bb4ca149d41eef7e5c8cc5e3d4539fa->enter($__internal_d85890b7ab03f98834477c7136bcb34d8bb4ca149d41eef7e5c8cc5e3d4539fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05ca465dcee1b12af79c8c739116524101ad957c61cf6409a23eadf6dbd25cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ca465dcee1b12af79c8c739116524101ad957c61cf6409a23eadf6dbd25cec->enter($__internal_05ca465dcee1b12af79c8c739116524101ad957c61cf6409a23eadf6dbd25cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_05ca465dcee1b12af79c8c739116524101ad957c61cf6409a23eadf6dbd25cec->leave($__internal_05ca465dcee1b12af79c8c739116524101ad957c61cf6409a23eadf6dbd25cec_prof);

        
        $__internal_d85890b7ab03f98834477c7136bcb34d8bb4ca149d41eef7e5c8cc5e3d4539fa->leave($__internal_d85890b7ab03f98834477c7136bcb34d8bb4ca149d41eef7e5c8cc5e3d4539fa_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_54fdd15ed368cc6e43a33a0266c3ee6936e39639070e3b40574004a96a5fc42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fdd15ed368cc6e43a33a0266c3ee6936e39639070e3b40574004a96a5fc42a->enter($__internal_54fdd15ed368cc6e43a33a0266c3ee6936e39639070e3b40574004a96a5fc42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_97602bee08202aa71f78dca3ead56d12f2c1d786069abb9aad613da5c3a8c3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97602bee08202aa71f78dca3ead56d12f2c1d786069abb9aad613da5c3a8c3e3->enter($__internal_97602bee08202aa71f78dca3ead56d12f2c1d786069abb9aad613da5c3a8c3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_97602bee08202aa71f78dca3ead56d12f2c1d786069abb9aad613da5c3a8c3e3->leave($__internal_97602bee08202aa71f78dca3ead56d12f2c1d786069abb9aad613da5c3a8c3e3_prof);

        
        $__internal_54fdd15ed368cc6e43a33a0266c3ee6936e39639070e3b40574004a96a5fc42a->leave($__internal_54fdd15ed368cc6e43a33a0266c3ee6936e39639070e3b40574004a96a5fc42a_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3621c239bf938cb5a96a7246cffb8f9d4049fbe2a5746f2800e676ee82bfa05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3621c239bf938cb5a96a7246cffb8f9d4049fbe2a5746f2800e676ee82bfa05c->enter($__internal_3621c239bf938cb5a96a7246cffb8f9d4049fbe2a5746f2800e676ee82bfa05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7847aecb744bbcc70904d7cdbfb9de29e93285d9b56a9927ccdb0c78874fffbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7847aecb744bbcc70904d7cdbfb9de29e93285d9b56a9927ccdb0c78874fffbf->enter($__internal_7847aecb744bbcc70904d7cdbfb9de29e93285d9b56a9927ccdb0c78874fffbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_7847aecb744bbcc70904d7cdbfb9de29e93285d9b56a9927ccdb0c78874fffbf->leave($__internal_7847aecb744bbcc70904d7cdbfb9de29e93285d9b56a9927ccdb0c78874fffbf_prof);

        
        $__internal_3621c239bf938cb5a96a7246cffb8f9d4049fbe2a5746f2800e676ee82bfa05c->leave($__internal_3621c239bf938cb5a96a7246cffb8f9d4049fbe2a5746f2800e676ee82bfa05c_prof);

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
