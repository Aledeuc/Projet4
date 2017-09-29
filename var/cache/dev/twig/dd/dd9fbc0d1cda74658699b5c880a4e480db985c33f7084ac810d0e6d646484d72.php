<?php

/* OCBookingBundle:Formulaire:index.html.twig */
class __TwigTemplate_e7c19fa8d6863b651ab26bdbd7b73ca3d2ca45fa0c01f5de1108a1e8b866779a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Formulaire:index.html.twig", 3);
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
        $__internal_bea10d4bc8a7339740cd3ab8375c972aeb9d66fa5e895060cd8d8d44635b7d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea10d4bc8a7339740cd3ab8375c972aeb9d66fa5e895060cd8d8d44635b7d6f->enter($__internal_bea10d4bc8a7339740cd3ab8375c972aeb9d66fa5e895060cd8d8d44635b7d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:index.html.twig"));

        $__internal_d5759f170fe9beea507ba905dea7d57dc41f9551ee9f1e65a89230d4428e1858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5759f170fe9beea507ba905dea7d57dc41f9551ee9f1e65a89230d4428e1858->enter($__internal_d5759f170fe9beea507ba905dea7d57dc41f9551ee9f1e65a89230d4428e1858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea10d4bc8a7339740cd3ab8375c972aeb9d66fa5e895060cd8d8d44635b7d6f->leave($__internal_bea10d4bc8a7339740cd3ab8375c972aeb9d66fa5e895060cd8d8d44635b7d6f_prof);

        
        $__internal_d5759f170fe9beea507ba905dea7d57dc41f9551ee9f1e65a89230d4428e1858->leave($__internal_d5759f170fe9beea507ba905dea7d57dc41f9551ee9f1e65a89230d4428e1858_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50c69c0cd55640c7c6ab6e800adbdf9ec9c3d8e8118b7380f35472b70f02a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50c69c0cd55640c7c6ab6e800adbdf9ec9c3d8e8118b7380f35472b70f02a86->enter($__internal_f50c69c0cd55640c7c6ab6e800adbdf9ec9c3d8e8118b7380f35472b70f02a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_700c3c3ec2a7459de4ca5c315beaae5fcacb8038276aea34d63a61a0ec435097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700c3c3ec2a7459de4ca5c315beaae5fcacb8038276aea34d63a61a0ec435097->enter($__internal_700c3c3ec2a7459de4ca5c315beaae5fcacb8038276aea34d63a61a0ec435097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Réservation";
        
        $__internal_700c3c3ec2a7459de4ca5c315beaae5fcacb8038276aea34d63a61a0ec435097->leave($__internal_700c3c3ec2a7459de4ca5c315beaae5fcacb8038276aea34d63a61a0ec435097_prof);

        
        $__internal_f50c69c0cd55640c7c6ab6e800adbdf9ec9c3d8e8118b7380f35472b70f02a86->leave($__internal_f50c69c0cd55640c7c6ab6e800adbdf9ec9c3d8e8118b7380f35472b70f02a86_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bdb18c542bfd89a4b4daa4dd275dbb2257e695797a40cd9c9e3a31431fef26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdb18c542bfd89a4b4daa4dd275dbb2257e695797a40cd9c9e3a31431fef26f->enter($__internal_9bdb18c542bfd89a4b4daa4dd275dbb2257e695797a40cd9c9e3a31431fef26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0811868d9a665f6a88711e281b37226b53000208b4d335e5a6f3ce69aab6be75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0811868d9a665f6a88711e281b37226b53000208b4d335e5a6f3ce69aab6be75->enter($__internal_0811868d9a665f6a88711e281b37226b53000208b4d335e5a6f3ce69aab6be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    Site en cours de construction !
";
        
        $__internal_0811868d9a665f6a88711e281b37226b53000208b4d335e5a6f3ce69aab6be75->leave($__internal_0811868d9a665f6a88711e281b37226b53000208b4d335e5a6f3ce69aab6be75_prof);

        
        $__internal_9bdb18c542bfd89a4b4daa4dd275dbb2257e695797a40cd9c9e3a31431fef26f->leave($__internal_9bdb18c542bfd89a4b4daa4dd275dbb2257e695797a40cd9c9e3a31431fef26f_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Formulaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  60 => 7,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Welcome/index.html.twig #}

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Réservation{% endblock %}

{% block body %}
    Site en cours de construction !
{% endblock %}", "OCBookingBundle:Formulaire:index.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Formulaire/index.html.twig");
    }
}
