<?php

/* OCBookingBundle:Bookingform:form.html.twig */
class __TwigTemplate_c651d965e7d966eeca0ec70984d0cd7a3c9b17f03a9161b8fdae1b0b53085229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Bookingform:form.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50834444cc59c6dc805e416271b88791ba203fec21e909ff093762d928d35db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50834444cc59c6dc805e416271b88791ba203fec21e909ff093762d928d35db1->enter($__internal_50834444cc59c6dc805e416271b88791ba203fec21e909ff093762d928d35db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $__internal_e62d6c55c493c046b971fb7021f19ac9bda9c7aec8ca27bcac68ac23b82fc246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62d6c55c493c046b971fb7021f19ac9bda9c7aec8ca27bcac68ac23b82fc246->enter($__internal_e62d6c55c493c046b971fb7021f19ac9bda9c7aec8ca27bcac68ac23b82fc246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Bookingform:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50834444cc59c6dc805e416271b88791ba203fec21e909ff093762d928d35db1->leave($__internal_50834444cc59c6dc805e416271b88791ba203fec21e909ff093762d928d35db1_prof);

        
        $__internal_e62d6c55c493c046b971fb7021f19ac9bda9c7aec8ca27bcac68ac23b82fc246->leave($__internal_e62d6c55c493c046b971fb7021f19ac9bda9c7aec8ca27bcac68ac23b82fc246_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28fc584df5070fbc5a63ca385598c2e97594d4dbeaa97bb96c5b68b771a4da54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fc584df5070fbc5a63ca385598c2e97594d4dbeaa97bb96c5b68b771a4da54->enter($__internal_28fc584df5070fbc5a63ca385598c2e97594d4dbeaa97bb96c5b68b771a4da54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a5cf831bd6468047953a19a2199b16ef0e6aa0f4312d4de09b6a79bb90925fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5cf831bd6468047953a19a2199b16ef0e6aa0f4312d4de09b6a79bb90925fc->enter($__internal_6a5cf831bd6468047953a19a2199b16ef0e6aa0f4312d4de09b6a79bb90925fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_6a5cf831bd6468047953a19a2199b16ef0e6aa0f4312d4de09b6a79bb90925fc->leave($__internal_6a5cf831bd6468047953a19a2199b16ef0e6aa0f4312d4de09b6a79bb90925fc_prof);

        
        $__internal_28fc584df5070fbc5a63ca385598c2e97594d4dbeaa97bb96c5b68b771a4da54->leave($__internal_28fc584df5070fbc5a63ca385598c2e97594d4dbeaa97bb96c5b68b771a4da54_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_640cbf47b2233850798223e4501a6111e6d3fa84a899f3ff53a7c1a6f89ae137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640cbf47b2233850798223e4501a6111e6d3fa84a899f3ff53a7c1a6f89ae137->enter($__internal_640cbf47b2233850798223e4501a6111e6d3fa84a899f3ff53a7c1a6f89ae137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4312574e4092d148e3d24bcb2b3f4843ba6a084f640a651dc1bc3d79e5a056f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4312574e4092d148e3d24bcb2b3f4843ba6a084f640a651dc1bc3d79e5a056f1->enter($__internal_4312574e4092d148e3d24bcb2b3f4843ba6a084f640a651dc1bc3d79e5a056f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visitors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 12
            echo "    
    ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["visitor"], "firstname", array()), 'row');
            echo "
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "
";
        
        $__internal_4312574e4092d148e3d24bcb2b3f4843ba6a084f640a651dc1bc3d79e5a056f1->leave($__internal_4312574e4092d148e3d24bcb2b3f4843ba6a084f640a651dc1bc3d79e5a056f1_prof);

        
        $__internal_640cbf47b2233850798223e4501a6111e6d3fa84a899f3ff53a7c1a6f89ae137->leave($__internal_640cbf47b2233850798223e4501a6111e6d3fa84a899f3ff53a7c1a6f89ae137_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1875b2e43e13e9217b691a3920240494530d775a3e0a060470e917b89070209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1875b2e43e13e9217b691a3920240494530d775a3e0a060470e917b89070209->enter($__internal_f1875b2e43e13e9217b691a3920240494530d775a3e0a060470e917b89070209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_889940f3a9a7a0ed3a8979799ea567c10de50117b29658b53bda999cef2375d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889940f3a9a7a0ed3a8979799ea567c10de50117b29658b53bda999cef2375d1->enter($__internal_889940f3a9a7a0ed3a8979799ea567c10de50117b29658b53bda999cef2375d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

";
        
        $__internal_889940f3a9a7a0ed3a8979799ea567c10de50117b29658b53bda999cef2375d1->leave($__internal_889940f3a9a7a0ed3a8979799ea567c10de50117b29658b53bda999cef2375d1_prof);

        
        $__internal_f1875b2e43e13e9217b691a3920240494530d775a3e0a060470e917b89070209->leave($__internal_f1875b2e43e13e9217b691a3920240494530d775a3e0a060470e917b89070209_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Bookingform:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  105 => 23,  103 => 20,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  78 => 11,  73 => 9,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Boutique{% endblock %}

{% block body %}

{{ form_start(form) }}

{% for visitor in form.visitors %}
    
    {{ form_row(visitor.firstname) }}
\t
{% endfor %}

{{ form_end(form) }}


{% block javascripts %} 

{% endblock %}

{% endblock %}



", "OCBookingBundle:Bookingform:form.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Bookingform/form.html.twig");
    }
}
