<?php

/* OCBookingBundle:Home:index.html.twig */
class __TwigTemplate_7dbcc887e3a5f16ac12bb7ebb5a5a23762edbd1139bbdacf64acfbb72d566953 extends Twig_Template
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
        $__internal_1167ecac9e5453482c9c34bcf6cc8a6698b1a0e86a716736156fbf16aacbb8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1167ecac9e5453482c9c34bcf6cc8a6698b1a0e86a716736156fbf16aacbb8ed->enter($__internal_1167ecac9e5453482c9c34bcf6cc8a6698b1a0e86a716736156fbf16aacbb8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $__internal_9052c2faa35d0fa8788088da866f6ee6c89116f996c9a7e02b28fcd749afbc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9052c2faa35d0fa8788088da866f6ee6c89116f996c9a7e02b28fcd749afbc1b->enter($__internal_9052c2faa35d0fa8788088da866f6ee6c89116f996c9a7e02b28fcd749afbc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1167ecac9e5453482c9c34bcf6cc8a6698b1a0e86a716736156fbf16aacbb8ed->leave($__internal_1167ecac9e5453482c9c34bcf6cc8a6698b1a0e86a716736156fbf16aacbb8ed_prof);

        
        $__internal_9052c2faa35d0fa8788088da866f6ee6c89116f996c9a7e02b28fcd749afbc1b->leave($__internal_9052c2faa35d0fa8788088da866f6ee6c89116f996c9a7e02b28fcd749afbc1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03b6d042503ab601adb45cb9d426593cfbe5101d6e150b9f3e98a406eb0ad275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b6d042503ab601adb45cb9d426593cfbe5101d6e150b9f3e98a406eb0ad275->enter($__internal_03b6d042503ab601adb45cb9d426593cfbe5101d6e150b9f3e98a406eb0ad275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40b7d4ee1a10aabfdb7628ead960513a37f5b283080a08a9343a46706b249545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b7d4ee1a10aabfdb7628ead960513a37f5b283080a08a9343a46706b249545->enter($__internal_40b7d4ee1a10aabfdb7628ead960513a37f5b283080a08a9343a46706b249545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_40b7d4ee1a10aabfdb7628ead960513a37f5b283080a08a9343a46706b249545->leave($__internal_40b7d4ee1a10aabfdb7628ead960513a37f5b283080a08a9343a46706b249545_prof);

        
        $__internal_03b6d042503ab601adb45cb9d426593cfbe5101d6e150b9f3e98a406eb0ad275->leave($__internal_03b6d042503ab601adb45cb9d426593cfbe5101d6e150b9f3e98a406eb0ad275_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_ac8a5801ca1c8a512f3a1b46c93ce8d2a8efe31b21ef4af7462d5d61b1a3013d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8a5801ca1c8a512f3a1b46c93ce8d2a8efe31b21ef4af7462d5d61b1a3013d->enter($__internal_ac8a5801ca1c8a512f3a1b46c93ce8d2a8efe31b21ef4af7462d5d61b1a3013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_9c36e58f8975c00f4534232e9003ee28b4ae2fa9b2352188ab689b97faad3b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c36e58f8975c00f4534232e9003ee28b4ae2fa9b2352188ab689b97faad3b1c->enter($__internal_9c36e58f8975c00f4534232e9003ee28b4ae2fa9b2352188ab689b97faad3b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_9c36e58f8975c00f4534232e9003ee28b4ae2fa9b2352188ab689b97faad3b1c->leave($__internal_9c36e58f8975c00f4534232e9003ee28b4ae2fa9b2352188ab689b97faad3b1c_prof);

        
        $__internal_ac8a5801ca1c8a512f3a1b46c93ce8d2a8efe31b21ef4af7462d5d61b1a3013d->leave($__internal_ac8a5801ca1c8a512f3a1b46c93ce8d2a8efe31b21ef4af7462d5d61b1a3013d_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd2dbf76dfd4532c1b04fe2722761ff88412bd69a13cc8ce7c4f0882bd38ff2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2dbf76dfd4532c1b04fe2722761ff88412bd69a13cc8ce7c4f0882bd38ff2c->enter($__internal_fd2dbf76dfd4532c1b04fe2722761ff88412bd69a13cc8ce7c4f0882bd38ff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3134ab506b4b7b8f49fb0da8aa833a97cfdd861f676ecaac4d9e26d8030595d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3134ab506b4b7b8f49fb0da8aa833a97cfdd861f676ecaac4d9e26d8030595d3->enter($__internal_3134ab506b4b7b8f49fb0da8aa833a97cfdd861f676ecaac4d9e26d8030595d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/animationHome.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3134ab506b4b7b8f49fb0da8aa833a97cfdd861f676ecaac4d9e26d8030595d3->leave($__internal_3134ab506b4b7b8f49fb0da8aa833a97cfdd861f676ecaac4d9e26d8030595d3_prof);

        
        $__internal_fd2dbf76dfd4532c1b04fe2722761ff88412bd69a13cc8ce7c4f0882bd38ff2c->leave($__internal_fd2dbf76dfd4532c1b04fe2722761ff88412bd69a13cc8ce7c4f0882bd38ff2c_prof);

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

{% endblock %}", "OCBookingBundle:Home:index.html.twig", "/Users/alexandre/Google Drive/Pro/OC/Projet4/Louvre/Symfony/src/OC/BookingBundle/Resources/views/Home/index.html.twig");
    }
}
