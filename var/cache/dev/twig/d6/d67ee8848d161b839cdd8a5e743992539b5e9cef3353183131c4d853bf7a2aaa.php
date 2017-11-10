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
        $__internal_91bb74647c6d23c6b8b16747257a6b84687c48794739614279e8224730d4caa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bb74647c6d23c6b8b16747257a6b84687c48794739614279e8224730d4caa6->enter($__internal_91bb74647c6d23c6b8b16747257a6b84687c48794739614279e8224730d4caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_ef8f0b61f1ea5333c4a4caa1427fa215178fe5dc7e4094e8af27e42a386d6532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8f0b61f1ea5333c4a4caa1427fa215178fe5dc7e4094e8af27e42a386d6532->enter($__internal_ef8f0b61f1ea5333c4a4caa1427fa215178fe5dc7e4094e8af27e42a386d6532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91bb74647c6d23c6b8b16747257a6b84687c48794739614279e8224730d4caa6->leave($__internal_91bb74647c6d23c6b8b16747257a6b84687c48794739614279e8224730d4caa6_prof);

        
        $__internal_ef8f0b61f1ea5333c4a4caa1427fa215178fe5dc7e4094e8af27e42a386d6532->leave($__internal_ef8f0b61f1ea5333c4a4caa1427fa215178fe5dc7e4094e8af27e42a386d6532_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_649439840a589360ee399b961be5e534ca7313f9c15dba506703b0fb7824959f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649439840a589360ee399b961be5e534ca7313f9c15dba506703b0fb7824959f->enter($__internal_649439840a589360ee399b961be5e534ca7313f9c15dba506703b0fb7824959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43d49c859250b635ed64fa512c655f32d28bd3ec5d3576bd889fb281235096d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d49c859250b635ed64fa512c655f32d28bd3ec5d3576bd889fb281235096d2->enter($__internal_43d49c859250b635ed64fa512c655f32d28bd3ec5d3576bd889fb281235096d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_43d49c859250b635ed64fa512c655f32d28bd3ec5d3576bd889fb281235096d2->leave($__internal_43d49c859250b635ed64fa512c655f32d28bd3ec5d3576bd889fb281235096d2_prof);

        
        $__internal_649439840a589360ee399b961be5e534ca7313f9c15dba506703b0fb7824959f->leave($__internal_649439840a589360ee399b961be5e534ca7313f9c15dba506703b0fb7824959f_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_4cfbd7bdc5274c87498217d22f80ce8a4535740a732278f7ed64ab2e194d0c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfbd7bdc5274c87498217d22f80ce8a4535740a732278f7ed64ab2e194d0c9c->enter($__internal_4cfbd7bdc5274c87498217d22f80ce8a4535740a732278f7ed64ab2e194d0c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_472687fd4bd2e6c74f41e647bb5c8adc3fe44a2964f1fc120b7974f390d8436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472687fd4bd2e6c74f41e647bb5c8adc3fe44a2964f1fc120b7974f390d8436f->enter($__internal_472687fd4bd2e6c74f41e647bb5c8adc3fe44a2964f1fc120b7974f390d8436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        echo " 

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "<div class=\"flash-success\">
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
<div class=\"photoCentral\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/museedulouvrev2.png"), "html", null, true);
        echo "\"  class=\"photomusee\" alt=\"photomuseedulouvre\">
</div>

<div id=\"bookingButton\" class=\"col-lg-12\">
    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_form");
        echo "\" class=\"btn btn-lg btn-booking\">Réservation</a>
</div> 


";
        
        $__internal_472687fd4bd2e6c74f41e647bb5c8adc3fe44a2964f1fc120b7974f390d8436f->leave($__internal_472687fd4bd2e6c74f41e647bb5c8adc3fe44a2964f1fc120b7974f390d8436f_prof);

        
        $__internal_4cfbd7bdc5274c87498217d22f80ce8a4535740a732278f7ed64ab2e194d0c9c->leave($__internal_4cfbd7bdc5274c87498217d22f80ce8a4535740a732278f7ed64ab2e194d0c9c_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc7a29545a748c3009c8107894428fc77d19160d526e6d8c4d7a6f079ab7c5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7a29545a748c3009c8107894428fc77d19160d526e6d8c4d7a6f079ab7c5f5->enter($__internal_dc7a29545a748c3009c8107894428fc77d19160d526e6d8c4d7a6f079ab7c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8705b82c36cd2761493a099335215d7fa7928e0f066b324426fba0a1589a44c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8705b82c36cd2761493a099335215d7fa7928e0f066b324426fba0a1589a44c4->enter($__internal_8705b82c36cd2761493a099335215d7fa7928e0f066b324426fba0a1589a44c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_8705b82c36cd2761493a099335215d7fa7928e0f066b324426fba0a1589a44c4->leave($__internal_8705b82c36cd2761493a099335215d7fa7928e0f066b324426fba0a1589a44c4_prof);

        
        $__internal_dc7a29545a748c3009c8107894428fc77d19160d526e6d8c4d7a6f079ab7c5f5->leave($__internal_dc7a29545a748c3009c8107894428fc77d19160d526e6d8c4d7a6f079ab7c5f5_prof);

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
        return array (  116 => 26,  101 => 20,  94 => 16,  90 => 14,  81 => 11,  78 => 10,  74 => 9,  62 => 7,  42 => 5,  11 => 3,);
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

{% for message in app.flashes('success') %}
<div class=\"flash-success\">
    {{ message }}
</div>
{% endfor %}

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
