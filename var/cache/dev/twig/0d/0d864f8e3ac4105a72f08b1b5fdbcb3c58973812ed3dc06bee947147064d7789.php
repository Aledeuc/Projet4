<?php

/* OCBookingBundle:Welcome:indexEn.html.twig */
class __TwigTemplate_18d77cc398f5f5851e85c46c532c59a3b1781c3fa0f7b9870da2724cb8d5f8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Welcome:indexEn.html.twig", 1);
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
        $__internal_708ada09d8e703a8528f3cb09a9087739612740f926bc875e3e38f70d07cd468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708ada09d8e703a8528f3cb09a9087739612740f926bc875e3e38f70d07cd468->enter($__internal_708ada09d8e703a8528f3cb09a9087739612740f926bc875e3e38f70d07cd468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:indexEn.html.twig"));

        $__internal_78bb09e5bf9a51b24818acb3539180674e82eed667e262b8708e20e3ee8b9fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bb09e5bf9a51b24818acb3539180674e82eed667e262b8708e20e3ee8b9fbb->enter($__internal_78bb09e5bf9a51b24818acb3539180674e82eed667e262b8708e20e3ee8b9fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:indexEn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708ada09d8e703a8528f3cb09a9087739612740f926bc875e3e38f70d07cd468->leave($__internal_708ada09d8e703a8528f3cb09a9087739612740f926bc875e3e38f70d07cd468_prof);

        
        $__internal_78bb09e5bf9a51b24818acb3539180674e82eed667e262b8708e20e3ee8b9fbb->leave($__internal_78bb09e5bf9a51b24818acb3539180674e82eed667e262b8708e20e3ee8b9fbb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa6ea83ff3cc44fc03c246f82a894e3d6baabe643803782d87740cd89ccc6a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6ea83ff3cc44fc03c246f82a894e3d6baabe643803782d87740cd89ccc6a76->enter($__internal_fa6ea83ff3cc44fc03c246f82a894e3d6baabe643803782d87740cd89ccc6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b745d6c70af273ab8fbfa10ecaec1fc1df9960044c1131ff307871a58395779e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b745d6c70af273ab8fbfa10ecaec1fc1df9960044c1131ff307871a58395779e->enter($__internal_b745d6c70af273ab8fbfa10ecaec1fc1df9960044c1131ff307871a58395779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_b745d6c70af273ab8fbfa10ecaec1fc1df9960044c1131ff307871a58395779e->leave($__internal_b745d6c70af273ab8fbfa10ecaec1fc1df9960044c1131ff307871a58395779e_prof);

        
        $__internal_fa6ea83ff3cc44fc03c246f82a894e3d6baabe643803782d87740cd89ccc6a76->leave($__internal_fa6ea83ff3cc44fc03c246f82a894e3d6baabe643803782d87740cd89ccc6a76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e624e4b9f449f8740f57d9ae037244f1793fff141ad8ce0f73d78786af24d074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e624e4b9f449f8740f57d9ae037244f1793fff141ad8ce0f73d78786af24d074->enter($__internal_e624e4b9f449f8740f57d9ae037244f1793fff141ad8ce0f73d78786af24d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_737c5217bc1bbd7705a96f8c16ea602a88cf7cd91e181ad3bcc530eccf72973b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737c5217bc1bbd7705a96f8c16ea602a88cf7cd91e181ad3bcc530eccf72973b->enter($__internal_737c5217bc1bbd7705a96f8c16ea602a88cf7cd91e181ad3bcc530eccf72973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    WIP !
";
        
        $__internal_737c5217bc1bbd7705a96f8c16ea602a88cf7cd91e181ad3bcc530eccf72973b->leave($__internal_737c5217bc1bbd7705a96f8c16ea602a88cf7cd91e181ad3bcc530eccf72973b_prof);

        
        $__internal_e624e4b9f449f8740f57d9ae037244f1793fff141ad8ce0f73d78786af24d074->leave($__internal_e624e4b9f449f8740f57d9ae037244f1793fff141ad8ce0f73d78786af24d074_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Welcome:indexEn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Index{% endblock %}

{% block body %}
    WIP !
{% endblock %}", "OCBookingBundle:Welcome:indexEn.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Welcome/indexEn.html.twig");
    }
}
