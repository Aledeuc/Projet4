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
        $__internal_6d1becae108d96ccc23f552dd28f1b99c2cfe7c9baf1a08d4f8b97d3572b2580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1becae108d96ccc23f552dd28f1b99c2cfe7c9baf1a08d4f8b97d3572b2580->enter($__internal_6d1becae108d96ccc23f552dd28f1b99c2cfe7c9baf1a08d4f8b97d3572b2580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_a6bb468a7ecd9a75d8382d4994cd938b72ffdeecf9cd792d5680c2a03c05888d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bb468a7ecd9a75d8382d4994cd938b72ffdeecf9cd792d5680c2a03c05888d->enter($__internal_a6bb468a7ecd9a75d8382d4994cd938b72ffdeecf9cd792d5680c2a03c05888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1becae108d96ccc23f552dd28f1b99c2cfe7c9baf1a08d4f8b97d3572b2580->leave($__internal_6d1becae108d96ccc23f552dd28f1b99c2cfe7c9baf1a08d4f8b97d3572b2580_prof);

        
        $__internal_a6bb468a7ecd9a75d8382d4994cd938b72ffdeecf9cd792d5680c2a03c05888d->leave($__internal_a6bb468a7ecd9a75d8382d4994cd938b72ffdeecf9cd792d5680c2a03c05888d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cee6c37757b817eb9052afc7bb7bf68120e3957675261fbe1c48e978c203276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cee6c37757b817eb9052afc7bb7bf68120e3957675261fbe1c48e978c203276->enter($__internal_4cee6c37757b817eb9052afc7bb7bf68120e3957675261fbe1c48e978c203276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acc61983a9e3bc8778c45e5d965a4f888c6e4042f91acc0268b41729686fc08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc61983a9e3bc8778c45e5d965a4f888c6e4042f91acc0268b41729686fc08c->enter($__internal_acc61983a9e3bc8778c45e5d965a4f888c6e4042f91acc0268b41729686fc08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_acc61983a9e3bc8778c45e5d965a4f888c6e4042f91acc0268b41729686fc08c->leave($__internal_acc61983a9e3bc8778c45e5d965a4f888c6e4042f91acc0268b41729686fc08c_prof);

        
        $__internal_4cee6c37757b817eb9052afc7bb7bf68120e3957675261fbe1c48e978c203276->leave($__internal_4cee6c37757b817eb9052afc7bb7bf68120e3957675261fbe1c48e978c203276_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_a6318c0595029d70c72fdc6f00babf8f034721ffa24793b4b7b38852833e1f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6318c0595029d70c72fdc6f00babf8f034721ffa24793b4b7b38852833e1f98->enter($__internal_a6318c0595029d70c72fdc6f00babf8f034721ffa24793b4b7b38852833e1f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_1c8f5e9dac344b761e7d67e0d8d46267028141a36cb09ece2cfe8a292316d409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8f5e9dac344b761e7d67e0d8d46267028141a36cb09ece2cfe8a292316d409->enter($__internal_1c8f5e9dac344b761e7d67e0d8d46267028141a36cb09ece2cfe8a292316d409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_1c8f5e9dac344b761e7d67e0d8d46267028141a36cb09ece2cfe8a292316d409->leave($__internal_1c8f5e9dac344b761e7d67e0d8d46267028141a36cb09ece2cfe8a292316d409_prof);

        
        $__internal_a6318c0595029d70c72fdc6f00babf8f034721ffa24793b4b7b38852833e1f98->leave($__internal_a6318c0595029d70c72fdc6f00babf8f034721ffa24793b4b7b38852833e1f98_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3e5394303030b30f0a13f8bc75f2e2c5330339b1196ee3322a0f5c52811e0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e5394303030b30f0a13f8bc75f2e2c5330339b1196ee3322a0f5c52811e0a6->enter($__internal_f3e5394303030b30f0a13f8bc75f2e2c5330339b1196ee3322a0f5c52811e0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ac737cbe4c08b578b325877adba3ff1e247327a2c99da02dcee118cc6cf071bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac737cbe4c08b578b325877adba3ff1e247327a2c99da02dcee118cc6cf071bb->enter($__internal_ac737cbe4c08b578b325877adba3ff1e247327a2c99da02dcee118cc6cf071bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/animationHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ac737cbe4c08b578b325877adba3ff1e247327a2c99da02dcee118cc6cf071bb->leave($__internal_ac737cbe4c08b578b325877adba3ff1e247327a2c99da02dcee118cc6cf071bb_prof);

        
        $__internal_f3e5394303030b30f0a13f8bc75f2e2c5330339b1196ee3322a0f5c52811e0a6->leave($__internal_f3e5394303030b30f0a13f8bc75f2e2c5330339b1196ee3322a0f5c52811e0a6_prof);

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
