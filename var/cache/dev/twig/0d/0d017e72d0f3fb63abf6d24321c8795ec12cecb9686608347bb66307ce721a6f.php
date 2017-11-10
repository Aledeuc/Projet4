<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_249e96c6608ac34fe18b5318a644564ecd15562ab9e29b2d539b2fb04142efea extends Twig_Template
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
        $__internal_3fca3d01aac7bb193a96997f2239d54b732a86007142181a150ec8f400f93574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fca3d01aac7bb193a96997f2239d54b732a86007142181a150ec8f400f93574->enter($__internal_3fca3d01aac7bb193a96997f2239d54b732a86007142181a150ec8f400f93574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_5bd3480b43be31e72c258b17867ff52012f6db477bfe5e26a9e9bcf1b19ea36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd3480b43be31e72c258b17867ff52012f6db477bfe5e26a9e9bcf1b19ea36d->enter($__internal_5bd3480b43be31e72c258b17867ff52012f6db477bfe5e26a9e9bcf1b19ea36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fca3d01aac7bb193a96997f2239d54b732a86007142181a150ec8f400f93574->leave($__internal_3fca3d01aac7bb193a96997f2239d54b732a86007142181a150ec8f400f93574_prof);

        
        $__internal_5bd3480b43be31e72c258b17867ff52012f6db477bfe5e26a9e9bcf1b19ea36d->leave($__internal_5bd3480b43be31e72c258b17867ff52012f6db477bfe5e26a9e9bcf1b19ea36d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3acc93c1f47b78a56b943cd4dde60f2144655fbb486351c296bce9fcc1ba38cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acc93c1f47b78a56b943cd4dde60f2144655fbb486351c296bce9fcc1ba38cc->enter($__internal_3acc93c1f47b78a56b943cd4dde60f2144655fbb486351c296bce9fcc1ba38cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87ac70bf8a1a13e9b22f2c96cac52eff81ae77509bf536953f414a9dcfeb3ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ac70bf8a1a13e9b22f2c96cac52eff81ae77509bf536953f414a9dcfeb3ea4->enter($__internal_87ac70bf8a1a13e9b22f2c96cac52eff81ae77509bf536953f414a9dcfeb3ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_87ac70bf8a1a13e9b22f2c96cac52eff81ae77509bf536953f414a9dcfeb3ea4->leave($__internal_87ac70bf8a1a13e9b22f2c96cac52eff81ae77509bf536953f414a9dcfeb3ea4_prof);

        
        $__internal_3acc93c1f47b78a56b943cd4dde60f2144655fbb486351c296bce9fcc1ba38cc->leave($__internal_3acc93c1f47b78a56b943cd4dde60f2144655fbb486351c296bce9fcc1ba38cc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baaa5c370edb221eee8fb3e9ac102e4a18f11455231a3ae75db88515286b0775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baaa5c370edb221eee8fb3e9ac102e4a18f11455231a3ae75db88515286b0775->enter($__internal_baaa5c370edb221eee8fb3e9ac102e4a18f11455231a3ae75db88515286b0775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7873e5390bf05e8ae57fe4e4208be518b8e87fa90574e234bafbe29a6ede0f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7873e5390bf05e8ae57fe4e4208be518b8e87fa90574e234bafbe29a6ede0f4f->enter($__internal_7873e5390bf05e8ae57fe4e4208be518b8e87fa90574e234bafbe29a6ede0f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_7873e5390bf05e8ae57fe4e4208be518b8e87fa90574e234bafbe29a6ede0f4f->leave($__internal_7873e5390bf05e8ae57fe4e4208be518b8e87fa90574e234bafbe29a6ede0f4f_prof);

        
        $__internal_baaa5c370edb221eee8fb3e9ac102e4a18f11455231a3ae75db88515286b0775->leave($__internal_baaa5c370edb221eee8fb3e9ac102e4a18f11455231a3ae75db88515286b0775_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_a35172f635997b1eaf18ecf4e1e07d84ba7a4da96ceecb5af872b5ec038c9359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35172f635997b1eaf18ecf4e1e07d84ba7a4da96ceecb5af872b5ec038c9359->enter($__internal_a35172f635997b1eaf18ecf4e1e07d84ba7a4da96ceecb5af872b5ec038c9359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_a6c1e3e9c08deca24dc247bf667c70773ae60d0e89d7018b3a680cc944ea5d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c1e3e9c08deca24dc247bf667c70773ae60d0e89d7018b3a680cc944ea5d49->enter($__internal_a6c1e3e9c08deca24dc247bf667c70773ae60d0e89d7018b3a680cc944ea5d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_a6c1e3e9c08deca24dc247bf667c70773ae60d0e89d7018b3a680cc944ea5d49->leave($__internal_a6c1e3e9c08deca24dc247bf667c70773ae60d0e89d7018b3a680cc944ea5d49_prof);

        
        $__internal_a35172f635997b1eaf18ecf4e1e07d84ba7a4da96ceecb5af872b5ec038c9359->leave($__internal_a35172f635997b1eaf18ecf4e1e07d84ba7a4da96ceecb5af872b5ec038c9359_prof);

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
