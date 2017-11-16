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
        $__internal_a9a0cda6d625e9815d223e5503921101e753379d7df5aa808b51d1ab59adaa11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a0cda6d625e9815d223e5503921101e753379d7df5aa808b51d1ab59adaa11->enter($__internal_a9a0cda6d625e9815d223e5503921101e753379d7df5aa808b51d1ab59adaa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_29ddb3d8198154f174bd16ad9c5c1e0ee9fe7d5b93cccf86d45efc440157923c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ddb3d8198154f174bd16ad9c5c1e0ee9fe7d5b93cccf86d45efc440157923c->enter($__internal_29ddb3d8198154f174bd16ad9c5c1e0ee9fe7d5b93cccf86d45efc440157923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a0cda6d625e9815d223e5503921101e753379d7df5aa808b51d1ab59adaa11->leave($__internal_a9a0cda6d625e9815d223e5503921101e753379d7df5aa808b51d1ab59adaa11_prof);

        
        $__internal_29ddb3d8198154f174bd16ad9c5c1e0ee9fe7d5b93cccf86d45efc440157923c->leave($__internal_29ddb3d8198154f174bd16ad9c5c1e0ee9fe7d5b93cccf86d45efc440157923c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89d433e43aeb72ee7b7fe2ebb20647fa4f3f4c86423fc8a47c995de5a33fc0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d433e43aeb72ee7b7fe2ebb20647fa4f3f4c86423fc8a47c995de5a33fc0c6->enter($__internal_89d433e43aeb72ee7b7fe2ebb20647fa4f3f4c86423fc8a47c995de5a33fc0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d22f0ee4a20a04e0e5fd1f5a19dc5d97a79bd5066e96ea944b50c4806fe172f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22f0ee4a20a04e0e5fd1f5a19dc5d97a79bd5066e96ea944b50c4806fe172f4->enter($__internal_d22f0ee4a20a04e0e5fd1f5a19dc5d97a79bd5066e96ea944b50c4806fe172f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_d22f0ee4a20a04e0e5fd1f5a19dc5d97a79bd5066e96ea944b50c4806fe172f4->leave($__internal_d22f0ee4a20a04e0e5fd1f5a19dc5d97a79bd5066e96ea944b50c4806fe172f4_prof);

        
        $__internal_89d433e43aeb72ee7b7fe2ebb20647fa4f3f4c86423fc8a47c995de5a33fc0c6->leave($__internal_89d433e43aeb72ee7b7fe2ebb20647fa4f3f4c86423fc8a47c995de5a33fc0c6_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_aef4cdbf234d2eef2cb32d02a1c403b40a9267475028f504cb682e01e477e372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef4cdbf234d2eef2cb32d02a1c403b40a9267475028f504cb682e01e477e372->enter($__internal_aef4cdbf234d2eef2cb32d02a1c403b40a9267475028f504cb682e01e477e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_94fe392dd8851047c8807aeb6f8fb683515299dbc7c1f711b582a17861ada4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fe392dd8851047c8807aeb6f8fb683515299dbc7c1f711b582a17861ada4cd->enter($__internal_94fe392dd8851047c8807aeb6f8fb683515299dbc7c1f711b582a17861ada4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_94fe392dd8851047c8807aeb6f8fb683515299dbc7c1f711b582a17861ada4cd->leave($__internal_94fe392dd8851047c8807aeb6f8fb683515299dbc7c1f711b582a17861ada4cd_prof);

        
        $__internal_aef4cdbf234d2eef2cb32d02a1c403b40a9267475028f504cb682e01e477e372->leave($__internal_aef4cdbf234d2eef2cb32d02a1c403b40a9267475028f504cb682e01e477e372_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ca018c9fe5b2432e3a39395daccbbe5aa2635a86c2c1a94dc819ebf16e53e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca018c9fe5b2432e3a39395daccbbe5aa2635a86c2c1a94dc819ebf16e53e55->enter($__internal_1ca018c9fe5b2432e3a39395daccbbe5aa2635a86c2c1a94dc819ebf16e53e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e10e7cf83c2033de731ba40aeba025cd122dfeea2a8bb769b8c584ce80cc496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e10e7cf83c2033de731ba40aeba025cd122dfeea2a8bb769b8c584ce80cc496->enter($__internal_3e10e7cf83c2033de731ba40aeba025cd122dfeea2a8bb769b8c584ce80cc496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_3e10e7cf83c2033de731ba40aeba025cd122dfeea2a8bb769b8c584ce80cc496->leave($__internal_3e10e7cf83c2033de731ba40aeba025cd122dfeea2a8bb769b8c584ce80cc496_prof);

        
        $__internal_1ca018c9fe5b2432e3a39395daccbbe5aa2635a86c2c1a94dc819ebf16e53e55->leave($__internal_1ca018c9fe5b2432e3a39395daccbbe5aa2635a86c2c1a94dc819ebf16e53e55_prof);

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
