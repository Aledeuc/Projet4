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
        $__internal_8e4fca019a81dcf05c29aa53436881719e4d50431c8954f84fe9112b9bf259f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4fca019a81dcf05c29aa53436881719e4d50431c8954f84fe9112b9bf259f5->enter($__internal_8e4fca019a81dcf05c29aa53436881719e4d50431c8954f84fe9112b9bf259f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_df8ce13d16f6f09c8e2454e82df65c420995bf45d642a36a511b853c30a017d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8ce13d16f6f09c8e2454e82df65c420995bf45d642a36a511b853c30a017d3->enter($__internal_df8ce13d16f6f09c8e2454e82df65c420995bf45d642a36a511b853c30a017d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4fca019a81dcf05c29aa53436881719e4d50431c8954f84fe9112b9bf259f5->leave($__internal_8e4fca019a81dcf05c29aa53436881719e4d50431c8954f84fe9112b9bf259f5_prof);

        
        $__internal_df8ce13d16f6f09c8e2454e82df65c420995bf45d642a36a511b853c30a017d3->leave($__internal_df8ce13d16f6f09c8e2454e82df65c420995bf45d642a36a511b853c30a017d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b6ab7c4ecf8b6af3ada741b0d0ef2ee234a343f0854328c140a660f33f3cb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6ab7c4ecf8b6af3ada741b0d0ef2ee234a343f0854328c140a660f33f3cb86->enter($__internal_8b6ab7c4ecf8b6af3ada741b0d0ef2ee234a343f0854328c140a660f33f3cb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d791e2ae4fd3be8fe5cef0ec2e41926d8c444eb392b367bcc622837a94d59a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d791e2ae4fd3be8fe5cef0ec2e41926d8c444eb392b367bcc622837a94d59a41->enter($__internal_d791e2ae4fd3be8fe5cef0ec2e41926d8c444eb392b367bcc622837a94d59a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_d791e2ae4fd3be8fe5cef0ec2e41926d8c444eb392b367bcc622837a94d59a41->leave($__internal_d791e2ae4fd3be8fe5cef0ec2e41926d8c444eb392b367bcc622837a94d59a41_prof);

        
        $__internal_8b6ab7c4ecf8b6af3ada741b0d0ef2ee234a343f0854328c140a660f33f3cb86->leave($__internal_8b6ab7c4ecf8b6af3ada741b0d0ef2ee234a343f0854328c140a660f33f3cb86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18fa9ead872384d73263dbb166a1b0228b227582f111e459a76fc9c42a93ca63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fa9ead872384d73263dbb166a1b0228b227582f111e459a76fc9c42a93ca63->enter($__internal_18fa9ead872384d73263dbb166a1b0228b227582f111e459a76fc9c42a93ca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b3aad7f837e908926174be44735653325fdfeeedda3a61dbd6cc6fba87059d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3aad7f837e908926174be44735653325fdfeeedda3a61dbd6cc6fba87059d2->enter($__internal_7b3aad7f837e908926174be44735653325fdfeeedda3a61dbd6cc6fba87059d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_7b3aad7f837e908926174be44735653325fdfeeedda3a61dbd6cc6fba87059d2->leave($__internal_7b3aad7f837e908926174be44735653325fdfeeedda3a61dbd6cc6fba87059d2_prof);

        
        $__internal_18fa9ead872384d73263dbb166a1b0228b227582f111e459a76fc9c42a93ca63->leave($__internal_18fa9ead872384d73263dbb166a1b0228b227582f111e459a76fc9c42a93ca63_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_681be7e49fbc8b1598db1129673ec6a519b480c0c3d36423d927331489024265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681be7e49fbc8b1598db1129673ec6a519b480c0c3d36423d927331489024265->enter($__internal_681be7e49fbc8b1598db1129673ec6a519b480c0c3d36423d927331489024265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_1b2fa390578b8fef526921a074d8766dec255956c6a170baf8c77dded0df818d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2fa390578b8fef526921a074d8766dec255956c6a170baf8c77dded0df818d->enter($__internal_1b2fa390578b8fef526921a074d8766dec255956c6a170baf8c77dded0df818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_1b2fa390578b8fef526921a074d8766dec255956c6a170baf8c77dded0df818d->leave($__internal_1b2fa390578b8fef526921a074d8766dec255956c6a170baf8c77dded0df818d_prof);

        
        $__internal_681be7e49fbc8b1598db1129673ec6a519b480c0c3d36423d927331489024265->leave($__internal_681be7e49fbc8b1598db1129673ec6a519b480c0c3d36423d927331489024265_prof);

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
