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
        $__internal_8cfc42d35d232073a5ed67620da40f8dd38475ae5d50bafd15dc5fbf6a533b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfc42d35d232073a5ed67620da40f8dd38475ae5d50bafd15dc5fbf6a533b93->enter($__internal_8cfc42d35d232073a5ed67620da40f8dd38475ae5d50bafd15dc5fbf6a533b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_570aeacdcf0f24440364697c4193f695bd2866e01685ed1edbf5a43d859ac463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570aeacdcf0f24440364697c4193f695bd2866e01685ed1edbf5a43d859ac463->enter($__internal_570aeacdcf0f24440364697c4193f695bd2866e01685ed1edbf5a43d859ac463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfc42d35d232073a5ed67620da40f8dd38475ae5d50bafd15dc5fbf6a533b93->leave($__internal_8cfc42d35d232073a5ed67620da40f8dd38475ae5d50bafd15dc5fbf6a533b93_prof);

        
        $__internal_570aeacdcf0f24440364697c4193f695bd2866e01685ed1edbf5a43d859ac463->leave($__internal_570aeacdcf0f24440364697c4193f695bd2866e01685ed1edbf5a43d859ac463_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8d872933c6a0bfab3d11a2acf0cb8ad114c06c1f2de44d29d7f892b8def0045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d872933c6a0bfab3d11a2acf0cb8ad114c06c1f2de44d29d7f892b8def0045->enter($__internal_c8d872933c6a0bfab3d11a2acf0cb8ad114c06c1f2de44d29d7f892b8def0045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03c5ed56b590aa1a8cd10e6bf0cdb6738f8ca272aa0e5044b9d0d73d416050c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c5ed56b590aa1a8cd10e6bf0cdb6738f8ca272aa0e5044b9d0d73d416050c1->enter($__internal_03c5ed56b590aa1a8cd10e6bf0cdb6738f8ca272aa0e5044b9d0d73d416050c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_03c5ed56b590aa1a8cd10e6bf0cdb6738f8ca272aa0e5044b9d0d73d416050c1->leave($__internal_03c5ed56b590aa1a8cd10e6bf0cdb6738f8ca272aa0e5044b9d0d73d416050c1_prof);

        
        $__internal_c8d872933c6a0bfab3d11a2acf0cb8ad114c06c1f2de44d29d7f892b8def0045->leave($__internal_c8d872933c6a0bfab3d11a2acf0cb8ad114c06c1f2de44d29d7f892b8def0045_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_d720840f4582153e72147458ab461bec69fcb7bb54091eeafe108af653a36053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d720840f4582153e72147458ab461bec69fcb7bb54091eeafe108af653a36053->enter($__internal_d720840f4582153e72147458ab461bec69fcb7bb54091eeafe108af653a36053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_710827cb470aa73e1806d6977985668df3db9b5f3fbec771a925ac4049e12ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710827cb470aa73e1806d6977985668df3db9b5f3fbec771a925ac4049e12ff3->enter($__internal_710827cb470aa73e1806d6977985668df3db9b5f3fbec771a925ac4049e12ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_710827cb470aa73e1806d6977985668df3db9b5f3fbec771a925ac4049e12ff3->leave($__internal_710827cb470aa73e1806d6977985668df3db9b5f3fbec771a925ac4049e12ff3_prof);

        
        $__internal_d720840f4582153e72147458ab461bec69fcb7bb54091eeafe108af653a36053->leave($__internal_d720840f4582153e72147458ab461bec69fcb7bb54091eeafe108af653a36053_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c578c4e1b0f020ff43a8b40233fe60f603a171b17810eef75237f33b13612985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c578c4e1b0f020ff43a8b40233fe60f603a171b17810eef75237f33b13612985->enter($__internal_c578c4e1b0f020ff43a8b40233fe60f603a171b17810eef75237f33b13612985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_080dd76490fd7aa17d22879175497c68715284462e41b28fd841a19de49328cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080dd76490fd7aa17d22879175497c68715284462e41b28fd841a19de49328cb->enter($__internal_080dd76490fd7aa17d22879175497c68715284462e41b28fd841a19de49328cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
";
        
        $__internal_080dd76490fd7aa17d22879175497c68715284462e41b28fd841a19de49328cb->leave($__internal_080dd76490fd7aa17d22879175497c68715284462e41b28fd841a19de49328cb_prof);

        
        $__internal_c578c4e1b0f020ff43a8b40233fe60f603a171b17810eef75237f33b13612985->leave($__internal_c578c4e1b0f020ff43a8b40233fe60f603a171b17810eef75237f33b13612985_prof);

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
