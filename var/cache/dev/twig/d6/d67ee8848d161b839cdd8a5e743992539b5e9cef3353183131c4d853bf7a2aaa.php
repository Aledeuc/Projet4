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
        $__internal_d16fe0adf841de47b7d0d35d4c02fbbb41e067cc70850eb9d83071a725641862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16fe0adf841de47b7d0d35d4c02fbbb41e067cc70850eb9d83071a725641862->enter($__internal_d16fe0adf841de47b7d0d35d4c02fbbb41e067cc70850eb9d83071a725641862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_a35f32d42fd4372a3399cd6601e18f14dea1ab32c66e789d0fd66baa99287923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35f32d42fd4372a3399cd6601e18f14dea1ab32c66e789d0fd66baa99287923->enter($__internal_a35f32d42fd4372a3399cd6601e18f14dea1ab32c66e789d0fd66baa99287923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d16fe0adf841de47b7d0d35d4c02fbbb41e067cc70850eb9d83071a725641862->leave($__internal_d16fe0adf841de47b7d0d35d4c02fbbb41e067cc70850eb9d83071a725641862_prof);

        
        $__internal_a35f32d42fd4372a3399cd6601e18f14dea1ab32c66e789d0fd66baa99287923->leave($__internal_a35f32d42fd4372a3399cd6601e18f14dea1ab32c66e789d0fd66baa99287923_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_322437ef9906168f3642cf59d8d0fdf390d0d139f8eb58017cc25965c0cbb227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322437ef9906168f3642cf59d8d0fdf390d0d139f8eb58017cc25965c0cbb227->enter($__internal_322437ef9906168f3642cf59d8d0fdf390d0d139f8eb58017cc25965c0cbb227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_237301b9caec12dee85e79cc52225fd0c6e658f7c6090b1962ef4c8a117c8c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237301b9caec12dee85e79cc52225fd0c6e658f7c6090b1962ef4c8a117c8c4f->enter($__internal_237301b9caec12dee85e79cc52225fd0c6e658f7c6090b1962ef4c8a117c8c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_237301b9caec12dee85e79cc52225fd0c6e658f7c6090b1962ef4c8a117c8c4f->leave($__internal_237301b9caec12dee85e79cc52225fd0c6e658f7c6090b1962ef4c8a117c8c4f_prof);

        
        $__internal_322437ef9906168f3642cf59d8d0fdf390d0d139f8eb58017cc25965c0cbb227->leave($__internal_322437ef9906168f3642cf59d8d0fdf390d0d139f8eb58017cc25965c0cbb227_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_cafcf4a5906bf8df608ba146e9d2f14deaedb91d95a55ccdeb9bf20a597aa8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafcf4a5906bf8df608ba146e9d2f14deaedb91d95a55ccdeb9bf20a597aa8ac->enter($__internal_cafcf4a5906bf8df608ba146e9d2f14deaedb91d95a55ccdeb9bf20a597aa8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_9a0fc4732e8c87f3f2bd876d0999937da2eb6ebe18d3704585f2a93790860767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0fc4732e8c87f3f2bd876d0999937da2eb6ebe18d3704585f2a93790860767->enter($__internal_9a0fc4732e8c87f3f2bd876d0999937da2eb6ebe18d3704585f2a93790860767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        // line 20
        echo "
";
        
        $__internal_9a0fc4732e8c87f3f2bd876d0999937da2eb6ebe18d3704585f2a93790860767->leave($__internal_9a0fc4732e8c87f3f2bd876d0999937da2eb6ebe18d3704585f2a93790860767_prof);

        
        $__internal_cafcf4a5906bf8df608ba146e9d2f14deaedb91d95a55ccdeb9bf20a597aa8ac->leave($__internal_cafcf4a5906bf8df608ba146e9d2f14deaedb91d95a55ccdeb9bf20a597aa8ac_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5296bf446f6f5715ae31f2f43135f4cc04a103f784dda9cafe63f7cb227d2d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5296bf446f6f5715ae31f2f43135f4cc04a103f784dda9cafe63f7cb227d2d27->enter($__internal_5296bf446f6f5715ae31f2f43135f4cc04a103f784dda9cafe63f7cb227d2d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_28290ff019e2b5e6e96f0f00432f76827dbe40b5c7bb6874249656faf011383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28290ff019e2b5e6e96f0f00432f76827dbe40b5c7bb6874249656faf011383a->enter($__internal_28290ff019e2b5e6e96f0f00432f76827dbe40b5c7bb6874249656faf011383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
";
        
        $__internal_28290ff019e2b5e6e96f0f00432f76827dbe40b5c7bb6874249656faf011383a->leave($__internal_28290ff019e2b5e6e96f0f00432f76827dbe40b5c7bb6874249656faf011383a_prof);

        
        $__internal_5296bf446f6f5715ae31f2f43135f4cc04a103f784dda9cafe63f7cb227d2d27->leave($__internal_5296bf446f6f5715ae31f2f43135f4cc04a103f784dda9cafe63f7cb227d2d27_prof);

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
        return array (  101 => 17,  90 => 20,  88 => 17,  82 => 14,  75 => 10,  62 => 7,  42 => 5,  11 => 3,);
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
{% endblock %}

{% endblock %}", "OCBookingBundle:Home:index.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Home/index.html.twig");
    }
}
