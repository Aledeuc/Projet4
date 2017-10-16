<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_249e96c6608ac34fe18b5318a644564ecd15562ab9e29b2d539b2fb04142efea extends Twig_Template
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
        $__internal_7ee9e58f6f547adc4b65174c261c6ebc77ea2d9ff4ce6b40a549ed6c75d11838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee9e58f6f547adc4b65174c261c6ebc77ea2d9ff4ce6b40a549ed6c75d11838->enter($__internal_7ee9e58f6f547adc4b65174c261c6ebc77ea2d9ff4ce6b40a549ed6c75d11838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_98c4d3733b985e65212ad33b07b359af734de496b9c30edb6b4aa5f073b442f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c4d3733b985e65212ad33b07b359af734de496b9c30edb6b4aa5f073b442f4->enter($__internal_98c4d3733b985e65212ad33b07b359af734de496b9c30edb6b4aa5f073b442f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee9e58f6f547adc4b65174c261c6ebc77ea2d9ff4ce6b40a549ed6c75d11838->leave($__internal_7ee9e58f6f547adc4b65174c261c6ebc77ea2d9ff4ce6b40a549ed6c75d11838_prof);

        
        $__internal_98c4d3733b985e65212ad33b07b359af734de496b9c30edb6b4aa5f073b442f4->leave($__internal_98c4d3733b985e65212ad33b07b359af734de496b9c30edb6b4aa5f073b442f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40a8f2b28f6eb4b74b243b3e210324e70cb23e4780f0bf0896705ef95ad66440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a8f2b28f6eb4b74b243b3e210324e70cb23e4780f0bf0896705ef95ad66440->enter($__internal_40a8f2b28f6eb4b74b243b3e210324e70cb23e4780f0bf0896705ef95ad66440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_749d7eb7b4f5fa890d5b2ef176c26f5681e7571c283f1262c12158f083bbfd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749d7eb7b4f5fa890d5b2ef176c26f5681e7571c283f1262c12158f083bbfd73->enter($__internal_749d7eb7b4f5fa890d5b2ef176c26f5681e7571c283f1262c12158f083bbfd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_749d7eb7b4f5fa890d5b2ef176c26f5681e7571c283f1262c12158f083bbfd73->leave($__internal_749d7eb7b4f5fa890d5b2ef176c26f5681e7571c283f1262c12158f083bbfd73_prof);

        
        $__internal_40a8f2b28f6eb4b74b243b3e210324e70cb23e4780f0bf0896705ef95ad66440->leave($__internal_40a8f2b28f6eb4b74b243b3e210324e70cb23e4780f0bf0896705ef95ad66440_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_294402975810d6ed0f4f57676afe587a7750f54b8d1060d7b880d90cab39e783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294402975810d6ed0f4f57676afe587a7750f54b8d1060d7b880d90cab39e783->enter($__internal_294402975810d6ed0f4f57676afe587a7750f54b8d1060d7b880d90cab39e783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08d48c782147712419190e830b50981e032fbd5a5f56547ceef145fd0c8ede3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d48c782147712419190e830b50981e032fbd5a5f56547ceef145fd0c8ede3e->enter($__internal_08d48c782147712419190e830b50981e032fbd5a5f56547ceef145fd0c8ede3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_08d48c782147712419190e830b50981e032fbd5a5f56547ceef145fd0c8ede3e->leave($__internal_08d48c782147712419190e830b50981e032fbd5a5f56547ceef145fd0c8ede3e_prof);

        
        $__internal_294402975810d6ed0f4f57676afe587a7750f54b8d1060d7b880d90cab39e783->leave($__internal_294402975810d6ed0f4f57676afe587a7750f54b8d1060d7b880d90cab39e783_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_1249b2f37857f44973809e2a65573debc16ebdbdaacfc1dfaec55ef8399fc55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1249b2f37857f44973809e2a65573debc16ebdbdaacfc1dfaec55ef8399fc55d->enter($__internal_1249b2f37857f44973809e2a65573debc16ebdbdaacfc1dfaec55ef8399fc55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_5067085714897beacbdc291f47c1e163a39f1a3020c611d18d82cbde144dc403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5067085714897beacbdc291f47c1e163a39f1a3020c611d18d82cbde144dc403->enter($__internal_5067085714897beacbdc291f47c1e163a39f1a3020c611d18d82cbde144dc403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_5067085714897beacbdc291f47c1e163a39f1a3020c611d18d82cbde144dc403->leave($__internal_5067085714897beacbdc291f47c1e163a39f1a3020c611d18d82cbde144dc403_prof);

        
        $__internal_1249b2f37857f44973809e2a65573debc16ebdbdaacfc1dfaec55ef8399fc55d->leave($__internal_1249b2f37857f44973809e2a65573debc16ebdbdaacfc1dfaec55ef8399fc55d_prof);

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
