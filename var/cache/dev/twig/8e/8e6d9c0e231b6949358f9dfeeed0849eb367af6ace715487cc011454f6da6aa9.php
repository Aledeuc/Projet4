<?php

/* OCBookingBundle:Welcome:index.html.twig */
class __TwigTemplate_621595e539fa04933dae8df71ece24cb8d9686423814f8e46833b0c070ee00d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Welcome:index.html.twig", 3);
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
        $__internal_0e3c9c3cb2c1e8e3049cc7e3231c5402711514c3bc037a8b465111264984575f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3c9c3cb2c1e8e3049cc7e3231c5402711514c3bc037a8b465111264984575f->enter($__internal_0e3c9c3cb2c1e8e3049cc7e3231c5402711514c3bc037a8b465111264984575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:index.html.twig"));

        $__internal_4ad6569c3265d944a17fea4418e156cc17f20cd9aca4499492827edcabfe9279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad6569c3265d944a17fea4418e156cc17f20cd9aca4499492827edcabfe9279->enter($__internal_4ad6569c3265d944a17fea4418e156cc17f20cd9aca4499492827edcabfe9279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3c9c3cb2c1e8e3049cc7e3231c5402711514c3bc037a8b465111264984575f->leave($__internal_0e3c9c3cb2c1e8e3049cc7e3231c5402711514c3bc037a8b465111264984575f_prof);

        
        $__internal_4ad6569c3265d944a17fea4418e156cc17f20cd9aca4499492827edcabfe9279->leave($__internal_4ad6569c3265d944a17fea4418e156cc17f20cd9aca4499492827edcabfe9279_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c3bb6313aef17694b5cafd76c3e94a58711ad8aeb4a323cab3d4af790557844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3bb6313aef17694b5cafd76c3e94a58711ad8aeb4a323cab3d4af790557844->enter($__internal_1c3bb6313aef17694b5cafd76c3e94a58711ad8aeb4a323cab3d4af790557844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adc9863d42b33186ea67a52d6aaa9e3a1b75d2907572b854f276660abb359d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc9863d42b33186ea67a52d6aaa9e3a1b75d2907572b854f276660abb359d40->enter($__internal_adc9863d42b33186ea67a52d6aaa9e3a1b75d2907572b854f276660abb359d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_adc9863d42b33186ea67a52d6aaa9e3a1b75d2907572b854f276660abb359d40->leave($__internal_adc9863d42b33186ea67a52d6aaa9e3a1b75d2907572b854f276660abb359d40_prof);

        
        $__internal_1c3bb6313aef17694b5cafd76c3e94a58711ad8aeb4a323cab3d4af790557844->leave($__internal_1c3bb6313aef17694b5cafd76c3e94a58711ad8aeb4a323cab3d4af790557844_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_483202ae4c8d91c7a7c0a7e7822e7cd3195cbec4c4658e9c2188d5ce04253247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483202ae4c8d91c7a7c0a7e7822e7cd3195cbec4c4658e9c2188d5ce04253247->enter($__internal_483202ae4c8d91c7a7c0a7e7822e7cd3195cbec4c4658e9c2188d5ce04253247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_f793215401f4ad118bb7d9774df6de39f2b08d30bfb4b6ba09acb9727a61e887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f793215401f4ad118bb7d9774df6de39f2b08d30bfb4b6ba09acb9727a61e887->enter($__internal_f793215401f4ad118bb7d9774df6de39f2b08d30bfb4b6ba09acb9727a61e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_f793215401f4ad118bb7d9774df6de39f2b08d30bfb4b6ba09acb9727a61e887->leave($__internal_f793215401f4ad118bb7d9774df6de39f2b08d30bfb4b6ba09acb9727a61e887_prof);

        
        $__internal_483202ae4c8d91c7a7c0a7e7822e7cd3195cbec4c4658e9c2188d5ce04253247->leave($__internal_483202ae4c8d91c7a7c0a7e7822e7cd3195cbec4c4658e9c2188d5ce04253247_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66fd8bdcf5ff5faea03b1fdf8ccdefef7a4c267f4d6c899782f48672c87eec00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fd8bdcf5ff5faea03b1fdf8ccdefef7a4c267f4d6c899782f48672c87eec00->enter($__internal_66fd8bdcf5ff5faea03b1fdf8ccdefef7a4c267f4d6c899782f48672c87eec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a4210e7f668f5ea10a287a35b67a27118101741154675f85be9490a8493221f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4210e7f668f5ea10a287a35b67a27118101741154675f85be9490a8493221f->enter($__internal_6a4210e7f668f5ea10a287a35b67a27118101741154675f85be9490a8493221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/animationHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6a4210e7f668f5ea10a287a35b67a27118101741154675f85be9490a8493221f->leave($__internal_6a4210e7f668f5ea10a287a35b67a27118101741154675f85be9490a8493221f_prof);

        
        $__internal_66fd8bdcf5ff5faea03b1fdf8ccdefef7a4c267f4d6c899782f48672c87eec00->leave($__internal_66fd8bdcf5ff5faea03b1fdf8ccdefef7a4c267f4d6c899782f48672c87eec00_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Welcome:index.html.twig";
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
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Welcome/index.html.twig #} 

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

{% endblock %}", "OCBookingBundle:Welcome:index.html.twig", "/Users/alexandre/Google Drive/Pro/OC/Projet4/Louvre/Symfony/src/OC/BookingBundle/Resources/views/Welcome/index.html.twig");
    }
}
