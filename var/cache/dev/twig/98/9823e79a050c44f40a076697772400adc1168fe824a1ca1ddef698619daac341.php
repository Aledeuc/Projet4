<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_fe353fde69bf8864612f18b10d60896104a1ee8db8f57e667253233a04cf54b3 extends Twig_Template
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
        $__internal_603df6f3923ecee8df77a213c557dbbf1b8961863ebfd7649ab42bb5c5a8eb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603df6f3923ecee8df77a213c557dbbf1b8961863ebfd7649ab42bb5c5a8eb7b->enter($__internal_603df6f3923ecee8df77a213c557dbbf1b8961863ebfd7649ab42bb5c5a8eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_625695d89c669c895fe69f351215fbddeaa7175edf0ed16a82e89a5ff785672f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625695d89c669c895fe69f351215fbddeaa7175edf0ed16a82e89a5ff785672f->enter($__internal_625695d89c669c895fe69f351215fbddeaa7175edf0ed16a82e89a5ff785672f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603df6f3923ecee8df77a213c557dbbf1b8961863ebfd7649ab42bb5c5a8eb7b->leave($__internal_603df6f3923ecee8df77a213c557dbbf1b8961863ebfd7649ab42bb5c5a8eb7b_prof);

        
        $__internal_625695d89c669c895fe69f351215fbddeaa7175edf0ed16a82e89a5ff785672f->leave($__internal_625695d89c669c895fe69f351215fbddeaa7175edf0ed16a82e89a5ff785672f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76f14a3d60881959a476a2401dbf3d373ab0b062e9727acad834be02f071e947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f14a3d60881959a476a2401dbf3d373ab0b062e9727acad834be02f071e947->enter($__internal_76f14a3d60881959a476a2401dbf3d373ab0b062e9727acad834be02f071e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af053e51b83c83c37751b239ca8dfd8232e6d593f311397c2a3d1f23f1ec1beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af053e51b83c83c37751b239ca8dfd8232e6d593f311397c2a3d1f23f1ec1beb->enter($__internal_af053e51b83c83c37751b239ca8dfd8232e6d593f311397c2a3d1f23f1ec1beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_af053e51b83c83c37751b239ca8dfd8232e6d593f311397c2a3d1f23f1ec1beb->leave($__internal_af053e51b83c83c37751b239ca8dfd8232e6d593f311397c2a3d1f23f1ec1beb_prof);

        
        $__internal_76f14a3d60881959a476a2401dbf3d373ab0b062e9727acad834be02f071e947->leave($__internal_76f14a3d60881959a476a2401dbf3d373ab0b062e9727acad834be02f071e947_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_abafcec0034cb43b2bc56b725e7f39e91010e1a4c68b05a9a455f3e4c1a00331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abafcec0034cb43b2bc56b725e7f39e91010e1a4c68b05a9a455f3e4c1a00331->enter($__internal_abafcec0034cb43b2bc56b725e7f39e91010e1a4c68b05a9a455f3e4c1a00331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_176d8f547d54646e5a4f2eaa40ec0c564f04287265ca6ac7cebb026588f6592f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176d8f547d54646e5a4f2eaa40ec0c564f04287265ca6ac7cebb026588f6592f->enter($__internal_176d8f547d54646e5a4f2eaa40ec0c564f04287265ca6ac7cebb026588f6592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_176d8f547d54646e5a4f2eaa40ec0c564f04287265ca6ac7cebb026588f6592f->leave($__internal_176d8f547d54646e5a4f2eaa40ec0c564f04287265ca6ac7cebb026588f6592f_prof);

        
        $__internal_abafcec0034cb43b2bc56b725e7f39e91010e1a4c68b05a9a455f3e4c1a00331->leave($__internal_abafcec0034cb43b2bc56b725e7f39e91010e1a4c68b05a9a455f3e4c1a00331_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_821ab9e0ab7f3e9af8cd49b4e1057d45cef23fde6a271accb8c52ef19234e5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821ab9e0ab7f3e9af8cd49b4e1057d45cef23fde6a271accb8c52ef19234e5c4->enter($__internal_821ab9e0ab7f3e9af8cd49b4e1057d45cef23fde6a271accb8c52ef19234e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4c6a8d052664291b813094e9785b99a026478a677ed513ec2954ef57902d53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c6a8d052664291b813094e9785b99a026478a677ed513ec2954ef57902d53a->enter($__internal_d4c6a8d052664291b813094e9785b99a026478a677ed513ec2954ef57902d53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/animationHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d4c6a8d052664291b813094e9785b99a026478a677ed513ec2954ef57902d53a->leave($__internal_d4c6a8d052664291b813094e9785b99a026478a677ed513ec2954ef57902d53a_prof);

        
        $__internal_821ab9e0ab7f3e9af8cd49b4e1057d45cef23fde6a271accb8c52ef19234e5c4->leave($__internal_821ab9e0ab7f3e9af8cd49b4e1057d45cef23fde6a271accb8c52ef19234e5c4_prof);

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
