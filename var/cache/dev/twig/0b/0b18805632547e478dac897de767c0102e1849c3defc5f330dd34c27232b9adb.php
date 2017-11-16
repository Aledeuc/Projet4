<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_96a81ae9b711056414c00d5e1a11fde7c699d9f7c33a6c87b42f9a060af24b21 extends Twig_Template
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
        $__internal_a64a1dc51a2d618ddf2da6f548cd671d51e70743fa7431a7b1f6cc248c966f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64a1dc51a2d618ddf2da6f548cd671d51e70743fa7431a7b1f6cc248c966f99->enter($__internal_a64a1dc51a2d618ddf2da6f548cd671d51e70743fa7431a7b1f6cc248c966f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_e95db072ed92465c9be37927b7cebf4877d3efe7609cfcee79f9f1f78611311d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95db072ed92465c9be37927b7cebf4877d3efe7609cfcee79f9f1f78611311d->enter($__internal_e95db072ed92465c9be37927b7cebf4877d3efe7609cfcee79f9f1f78611311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a64a1dc51a2d618ddf2da6f548cd671d51e70743fa7431a7b1f6cc248c966f99->leave($__internal_a64a1dc51a2d618ddf2da6f548cd671d51e70743fa7431a7b1f6cc248c966f99_prof);

        
        $__internal_e95db072ed92465c9be37927b7cebf4877d3efe7609cfcee79f9f1f78611311d->leave($__internal_e95db072ed92465c9be37927b7cebf4877d3efe7609cfcee79f9f1f78611311d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52245618fd4dde8babbf2d91c2e720ec6a0231c1cd77b50c2875e09c9a0c4ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52245618fd4dde8babbf2d91c2e720ec6a0231c1cd77b50c2875e09c9a0c4ea2->enter($__internal_52245618fd4dde8babbf2d91c2e720ec6a0231c1cd77b50c2875e09c9a0c4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba4baa142440407532e4e9fb2fa94478f2492955139a30579f3e7f435815f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4baa142440407532e4e9fb2fa94478f2492955139a30579f3e7f435815f332->enter($__internal_ba4baa142440407532e4e9fb2fa94478f2492955139a30579f3e7f435815f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_ba4baa142440407532e4e9fb2fa94478f2492955139a30579f3e7f435815f332->leave($__internal_ba4baa142440407532e4e9fb2fa94478f2492955139a30579f3e7f435815f332_prof);

        
        $__internal_52245618fd4dde8babbf2d91c2e720ec6a0231c1cd77b50c2875e09c9a0c4ea2->leave($__internal_52245618fd4dde8babbf2d91c2e720ec6a0231c1cd77b50c2875e09c9a0c4ea2_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_5bbf5e233c67327430ca0ec6a7c1948c41ce879d1bc8910f376c373a0658744f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbf5e233c67327430ca0ec6a7c1948c41ce879d1bc8910f376c373a0658744f->enter($__internal_5bbf5e233c67327430ca0ec6a7c1948c41ce879d1bc8910f376c373a0658744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_c9b54f9575926c66af3e86ed7b7c062ff5c3c0566c59567b1299b3b606c69475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b54f9575926c66af3e86ed7b7c062ff5c3c0566c59567b1299b3b606c69475->enter($__internal_c9b54f9575926c66af3e86ed7b7c062ff5c3c0566c59567b1299b3b606c69475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_c9b54f9575926c66af3e86ed7b7c062ff5c3c0566c59567b1299b3b606c69475->leave($__internal_c9b54f9575926c66af3e86ed7b7c062ff5c3c0566c59567b1299b3b606c69475_prof);

        
        $__internal_5bbf5e233c67327430ca0ec6a7c1948c41ce879d1bc8910f376c373a0658744f->leave($__internal_5bbf5e233c67327430ca0ec6a7c1948c41ce879d1bc8910f376c373a0658744f_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86158fd2021758dcb77737ad25955dbe534feecfbfa3ca94a79961755250eed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86158fd2021758dcb77737ad25955dbe534feecfbfa3ca94a79961755250eed8->enter($__internal_86158fd2021758dcb77737ad25955dbe534feecfbfa3ca94a79961755250eed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_655eaaf03c2e4068d414b1e9c31602568fb1fc42a3f7cd7f7e3f3dbf8a05c40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655eaaf03c2e4068d414b1e9c31602568fb1fc42a3f7cd7f7e3f3dbf8a05c40b->enter($__internal_655eaaf03c2e4068d414b1e9c31602568fb1fc42a3f7cd7f7e3f3dbf8a05c40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_655eaaf03c2e4068d414b1e9c31602568fb1fc42a3f7cd7f7e3f3dbf8a05c40b->leave($__internal_655eaaf03c2e4068d414b1e9c31602568fb1fc42a3f7cd7f7e3f3dbf8a05c40b_prof);

        
        $__internal_86158fd2021758dcb77737ad25955dbe534feecfbfa3ca94a79961755250eed8->leave($__internal_86158fd2021758dcb77737ad25955dbe534feecfbfa3ca94a79961755250eed8_prof);

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
        return array (  97 => 20,  82 => 14,  75 => 10,  62 => 7,  42 => 5,  11 => 3,);
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


{% endblock %}

{% block javascripts %} 
{% endblock %}", "OCBookingBundle:Home:index.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Home/index.html.twig");
    }
}
