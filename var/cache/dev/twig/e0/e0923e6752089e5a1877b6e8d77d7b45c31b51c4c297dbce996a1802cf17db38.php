<?php

/* OCBookingBundle:Contact:form.html.twig */
class __TwigTemplate_7efbc95b6cd3b69760249ac2367193e8ad62548cdf115f77b13a2cd685b81087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Contact:form.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b42d1498c30b9a35e4131d89def68a018eaf3467f96b85ae2f39299d0c32a3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42d1498c30b9a35e4131d89def68a018eaf3467f96b85ae2f39299d0c32a3f5->enter($__internal_b42d1498c30b9a35e4131d89def68a018eaf3467f96b85ae2f39299d0c32a3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Contact:form.html.twig"));

        $__internal_d87e49d86d695007ca4ad47df5451c636c8314450cce1d8c87c802696e8efed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87e49d86d695007ca4ad47df5451c636c8314450cce1d8c87c802696e8efed6->enter($__internal_d87e49d86d695007ca4ad47df5451c636c8314450cce1d8c87c802696e8efed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Contact:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42d1498c30b9a35e4131d89def68a018eaf3467f96b85ae2f39299d0c32a3f5->leave($__internal_b42d1498c30b9a35e4131d89def68a018eaf3467f96b85ae2f39299d0c32a3f5_prof);

        
        $__internal_d87e49d86d695007ca4ad47df5451c636c8314450cce1d8c87c802696e8efed6->leave($__internal_d87e49d86d695007ca4ad47df5451c636c8314450cce1d8c87c802696e8efed6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed2dfbb5aae870059ff6881e37204d1d718b02859d9f1513858077c3bdc6f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed2dfbb5aae870059ff6881e37204d1d718b02859d9f1513858077c3bdc6f48->enter($__internal_eed2dfbb5aae870059ff6881e37204d1d718b02859d9f1513858077c3bdc6f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_852f7de8ae8c445fc46820aa6d76c57a19937b1ba8ce44c8e12515f655dc1f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852f7de8ae8c445fc46820aa6d76c57a19937b1ba8ce44c8e12515f655dc1f60->enter($__internal_852f7de8ae8c445fc46820aa6d76c57a19937b1ba8ce44c8e12515f655dc1f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Contact";
        
        $__internal_852f7de8ae8c445fc46820aa6d76c57a19937b1ba8ce44c8e12515f655dc1f60->leave($__internal_852f7de8ae8c445fc46820aa6d76c57a19937b1ba8ce44c8e12515f655dc1f60_prof);

        
        $__internal_eed2dfbb5aae870059ff6881e37204d1d718b02859d9f1513858077c3bdc6f48->leave($__internal_eed2dfbb5aae870059ff6881e37204d1d718b02859d9f1513858077c3bdc6f48_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8060d743230622ac307cae2dec46b07a9608234b56f1981c2a138386cacd8c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8060d743230622ac307cae2dec46b07a9608234b56f1981c2a138386cacd8c28->enter($__internal_8060d743230622ac307cae2dec46b07a9608234b56f1981c2a138386cacd8c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c74fddde7f99eda061a231252f29973b15fa444b7e0f9065b15e0ccbac24bc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74fddde7f99eda061a231252f29973b15fa444b7e0f9065b15e0ccbac24bc77->enter($__internal_c74fddde7f99eda061a231252f29973b15fa444b7e0f9065b15e0ccbac24bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Formulaire de contact</h3>

    <div class=\"contactForm\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

";
        
        $__internal_c74fddde7f99eda061a231252f29973b15fa444b7e0f9065b15e0ccbac24bc77->leave($__internal_c74fddde7f99eda061a231252f29973b15fa444b7e0f9065b15e0ccbac24bc77_prof);

        
        $__internal_8060d743230622ac307cae2dec46b07a9608234b56f1981c2a138386cacd8c28->leave($__internal_8060d743230622ac307cae2dec46b07a9608234b56f1981c2a138386cacd8c28_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  69 => 8,  60 => 7,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Contact/form.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Contact{% endblock %}

{% block body %}
    <h3>Formulaire de contact</h3>

    <div class=\"contactForm\">
        {{ form(form) }}
    </div>

{% endblock %}


", "OCBookingBundle:Contact:form.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Contact/form.html.twig");
    }
}
