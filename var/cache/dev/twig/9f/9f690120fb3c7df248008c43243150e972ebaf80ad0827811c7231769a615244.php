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
        $__internal_23a5e71c654b6bf209bb716810e9ca66b71c0c14834bb50653d20f5bf5b09291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a5e71c654b6bf209bb716810e9ca66b71c0c14834bb50653d20f5bf5b09291->enter($__internal_23a5e71c654b6bf209bb716810e9ca66b71c0c14834bb50653d20f5bf5b09291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_3aa696afd0518ce1e035f294b7f767680306d66d2f6d2e5d4bab7f978945cdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa696afd0518ce1e035f294b7f767680306d66d2f6d2e5d4bab7f978945cdbc->enter($__internal_3aa696afd0518ce1e035f294b7f767680306d66d2f6d2e5d4bab7f978945cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a5e71c654b6bf209bb716810e9ca66b71c0c14834bb50653d20f5bf5b09291->leave($__internal_23a5e71c654b6bf209bb716810e9ca66b71c0c14834bb50653d20f5bf5b09291_prof);

        
        $__internal_3aa696afd0518ce1e035f294b7f767680306d66d2f6d2e5d4bab7f978945cdbc->leave($__internal_3aa696afd0518ce1e035f294b7f767680306d66d2f6d2e5d4bab7f978945cdbc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84d9d156d54835fda0530f1a94f9925927bb93556da956bfe4dc4b74f70ac69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d9d156d54835fda0530f1a94f9925927bb93556da956bfe4dc4b74f70ac69b->enter($__internal_84d9d156d54835fda0530f1a94f9925927bb93556da956bfe4dc4b74f70ac69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26b5d7b9202b2caa99e845f486b45c7117238a1fd2016e1b2f4620f5fad7f955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b5d7b9202b2caa99e845f486b45c7117238a1fd2016e1b2f4620f5fad7f955->enter($__internal_26b5d7b9202b2caa99e845f486b45c7117238a1fd2016e1b2f4620f5fad7f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_26b5d7b9202b2caa99e845f486b45c7117238a1fd2016e1b2f4620f5fad7f955->leave($__internal_26b5d7b9202b2caa99e845f486b45c7117238a1fd2016e1b2f4620f5fad7f955_prof);

        
        $__internal_84d9d156d54835fda0530f1a94f9925927bb93556da956bfe4dc4b74f70ac69b->leave($__internal_84d9d156d54835fda0530f1a94f9925927bb93556da956bfe4dc4b74f70ac69b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_35be2d7d0ed36ad0ac69949b6647fa048998501bbdaa783dd342c57d1ac5efea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35be2d7d0ed36ad0ac69949b6647fa048998501bbdaa783dd342c57d1ac5efea->enter($__internal_35be2d7d0ed36ad0ac69949b6647fa048998501bbdaa783dd342c57d1ac5efea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de7f0b54f81eaeb4064dbddaba28e78ceef5100f008421d645b3266d2a157e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7f0b54f81eaeb4064dbddaba28e78ceef5100f008421d645b3266d2a157e72->enter($__internal_de7f0b54f81eaeb4064dbddaba28e78ceef5100f008421d645b3266d2a157e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 11
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_de7f0b54f81eaeb4064dbddaba28e78ceef5100f008421d645b3266d2a157e72->leave($__internal_de7f0b54f81eaeb4064dbddaba28e78ceef5100f008421d645b3266d2a157e72_prof);

        
        $__internal_35be2d7d0ed36ad0ac69949b6647fa048998501bbdaa783dd342c57d1ac5efea->leave($__internal_35be2d7d0ed36ad0ac69949b6647fa048998501bbdaa783dd342c57d1ac5efea_prof);

    }

    // line 11
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_44f279a33169b4fbb202f4a64034ddb9502bc2985ecfe39874ed0959395fb8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f279a33169b4fbb202f4a64034ddb9502bc2985ecfe39874ed0959395fb8a6->enter($__internal_44f279a33169b4fbb202f4a64034ddb9502bc2985ecfe39874ed0959395fb8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_10ba5d7ddde6d4a3ca574f80aaa9fa628959b698d1543099c4fbbe8dd69e5b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ba5d7ddde6d4a3ca574f80aaa9fa628959b698d1543099c4fbbe8dd69e5b3a->enter($__internal_10ba5d7ddde6d4a3ca574f80aaa9fa628959b698d1543099c4fbbe8dd69e5b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 12
        echo "  ";
        
        $__internal_10ba5d7ddde6d4a3ca574f80aaa9fa628959b698d1543099c4fbbe8dd69e5b3a->leave($__internal_10ba5d7ddde6d4a3ca574f80aaa9fa628959b698d1543099c4fbbe8dd69e5b3a_prof);

        
        $__internal_44f279a33169b4fbb202f4a64034ddb9502bc2985ecfe39874ed0959395fb8a6->leave($__internal_44f279a33169b4fbb202f4a64034ddb9502bc2985ecfe39874ed0959395fb8a6_prof);

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
        return array (  98 => 12,  89 => 11,  78 => 13,  76 => 11,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
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
  Accueil - {{ parent() }}
{% endblock %}

{% block body %}

  {% block ocbooking_body %}
  {% endblock %}

{% endblock %}", "OCBookingBundle::layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/layout.html.twig");
    }
}
