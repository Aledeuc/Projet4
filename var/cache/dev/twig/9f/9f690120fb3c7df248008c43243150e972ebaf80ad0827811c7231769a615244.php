<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_fd106cccb5a1b2dd05a1e7bd5ac40cc1514bc9aaacd75eb8aefd2fad7f1eb76e extends Twig_Template
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
        $__internal_cbbb5d862239fb3e213896297fa4e84eb36724af3ddaa30d109efd272fbabe11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbb5d862239fb3e213896297fa4e84eb36724af3ddaa30d109efd272fbabe11->enter($__internal_cbbb5d862239fb3e213896297fa4e84eb36724af3ddaa30d109efd272fbabe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_8a6187eb5d90a24a42a4baf931bf54360643e2068d235c760c507a59f0a936fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6187eb5d90a24a42a4baf931bf54360643e2068d235c760c507a59f0a936fb->enter($__internal_8a6187eb5d90a24a42a4baf931bf54360643e2068d235c760c507a59f0a936fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbb5d862239fb3e213896297fa4e84eb36724af3ddaa30d109efd272fbabe11->leave($__internal_cbbb5d862239fb3e213896297fa4e84eb36724af3ddaa30d109efd272fbabe11_prof);

        
        $__internal_8a6187eb5d90a24a42a4baf931bf54360643e2068d235c760c507a59f0a936fb->leave($__internal_8a6187eb5d90a24a42a4baf931bf54360643e2068d235c760c507a59f0a936fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dc46406f6a924459c87652b498a766beddc48277829c6fd61846ab9e008bd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc46406f6a924459c87652b498a766beddc48277829c6fd61846ab9e008bd6d->enter($__internal_3dc46406f6a924459c87652b498a766beddc48277829c6fd61846ab9e008bd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f555c9f6a03e220d171331e9ce90936bb50808f6d19492c0dccb419d2271e417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f555c9f6a03e220d171331e9ce90936bb50808f6d19492c0dccb419d2271e417->enter($__internal_f555c9f6a03e220d171331e9ce90936bb50808f6d19492c0dccb419d2271e417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_f555c9f6a03e220d171331e9ce90936bb50808f6d19492c0dccb419d2271e417->leave($__internal_f555c9f6a03e220d171331e9ce90936bb50808f6d19492c0dccb419d2271e417_prof);

        
        $__internal_3dc46406f6a924459c87652b498a766beddc48277829c6fd61846ab9e008bd6d->leave($__internal_3dc46406f6a924459c87652b498a766beddc48277829c6fd61846ab9e008bd6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02637cbf7b2ad622e05d2fdc8faaa1e85c3d55905cea3b80cf82d3f4c8d880a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02637cbf7b2ad622e05d2fdc8faaa1e85c3d55905cea3b80cf82d3f4c8d880a4->enter($__internal_02637cbf7b2ad622e05d2fdc8faaa1e85c3d55905cea3b80cf82d3f4c8d880a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c3b50b6c78b44fbb941441605f502735de445970a2837dc4086c0625919ba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3b50b6c78b44fbb941441605f502735de445970a2837dc4086c0625919ba61->enter($__internal_3c3b50b6c78b44fbb941441605f502735de445970a2837dc4086c0625919ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_3c3b50b6c78b44fbb941441605f502735de445970a2837dc4086c0625919ba61->leave($__internal_3c3b50b6c78b44fbb941441605f502735de445970a2837dc4086c0625919ba61_prof);

        
        $__internal_02637cbf7b2ad622e05d2fdc8faaa1e85c3d55905cea3b80cf82d3f4c8d880a4->leave($__internal_02637cbf7b2ad622e05d2fdc8faaa1e85c3d55905cea3b80cf82d3f4c8d880a4_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_6c2d57f09faa5436491731889b73a14b686601ca232aebc4b74f4b668f0dc5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2d57f09faa5436491731889b73a14b686601ca232aebc4b74f4b668f0dc5b3->enter($__internal_6c2d57f09faa5436491731889b73a14b686601ca232aebc4b74f4b668f0dc5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_8fb1fd4a8ce24f23896ff4408d571353539e215eb15499e5698f54da5baa4c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb1fd4a8ce24f23896ff4408d571353539e215eb15499e5698f54da5baa4c8e->enter($__internal_8fb1fd4a8ce24f23896ff4408d571353539e215eb15499e5698f54da5baa4c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_8fb1fd4a8ce24f23896ff4408d571353539e215eb15499e5698f54da5baa4c8e->leave($__internal_8fb1fd4a8ce24f23896ff4408d571353539e215eb15499e5698f54da5baa4c8e_prof);

        
        $__internal_6c2d57f09faa5436491731889b73a14b686601ca232aebc4b74f4b668f0dc5b3->leave($__internal_6c2d57f09faa5436491731889b73a14b686601ca232aebc4b74f4b668f0dc5b3_prof);

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
