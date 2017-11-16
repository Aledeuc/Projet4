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
        $__internal_8536c988f2d425459b5bb2a701027c6c2c773014867a73aeba1151e7fbb5e38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8536c988f2d425459b5bb2a701027c6c2c773014867a73aeba1151e7fbb5e38f->enter($__internal_8536c988f2d425459b5bb2a701027c6c2c773014867a73aeba1151e7fbb5e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_dc197a7d2ac3e0b0f65486048b90f2f4342f830f17bb2be1b058f0ceae90899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc197a7d2ac3e0b0f65486048b90f2f4342f830f17bb2be1b058f0ceae90899f->enter($__internal_dc197a7d2ac3e0b0f65486048b90f2f4342f830f17bb2be1b058f0ceae90899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8536c988f2d425459b5bb2a701027c6c2c773014867a73aeba1151e7fbb5e38f->leave($__internal_8536c988f2d425459b5bb2a701027c6c2c773014867a73aeba1151e7fbb5e38f_prof);

        
        $__internal_dc197a7d2ac3e0b0f65486048b90f2f4342f830f17bb2be1b058f0ceae90899f->leave($__internal_dc197a7d2ac3e0b0f65486048b90f2f4342f830f17bb2be1b058f0ceae90899f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21a0b0d47adfba0fcf83e72bf10f84744d191e76c8b2f486a5945fb8d97e5388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a0b0d47adfba0fcf83e72bf10f84744d191e76c8b2f486a5945fb8d97e5388->enter($__internal_21a0b0d47adfba0fcf83e72bf10f84744d191e76c8b2f486a5945fb8d97e5388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d37a22670d9219e0d87fb83f5211a79c04c918f9a274d73bf8896bdb836026f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37a22670d9219e0d87fb83f5211a79c04c918f9a274d73bf8896bdb836026f5->enter($__internal_d37a22670d9219e0d87fb83f5211a79c04c918f9a274d73bf8896bdb836026f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_d37a22670d9219e0d87fb83f5211a79c04c918f9a274d73bf8896bdb836026f5->leave($__internal_d37a22670d9219e0d87fb83f5211a79c04c918f9a274d73bf8896bdb836026f5_prof);

        
        $__internal_21a0b0d47adfba0fcf83e72bf10f84744d191e76c8b2f486a5945fb8d97e5388->leave($__internal_21a0b0d47adfba0fcf83e72bf10f84744d191e76c8b2f486a5945fb8d97e5388_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_686288c6c14577f7712e9420e036c89f233becd99c708f7d25b6da9ea24d1d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686288c6c14577f7712e9420e036c89f233becd99c708f7d25b6da9ea24d1d5b->enter($__internal_686288c6c14577f7712e9420e036c89f233becd99c708f7d25b6da9ea24d1d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be93331520c94b0e6f31480021ae901d801aca962fecec4b802412a20e403f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be93331520c94b0e6f31480021ae901d801aca962fecec4b802412a20e403f72->enter($__internal_be93331520c94b0e6f31480021ae901d801aca962fecec4b802412a20e403f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_be93331520c94b0e6f31480021ae901d801aca962fecec4b802412a20e403f72->leave($__internal_be93331520c94b0e6f31480021ae901d801aca962fecec4b802412a20e403f72_prof);

        
        $__internal_686288c6c14577f7712e9420e036c89f233becd99c708f7d25b6da9ea24d1d5b->leave($__internal_686288c6c14577f7712e9420e036c89f233becd99c708f7d25b6da9ea24d1d5b_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_a5c5e24fe69f138b4e3a2117a6ebec3c9be4e2782057bbbc76def54fd91c1149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c5e24fe69f138b4e3a2117a6ebec3c9be4e2782057bbbc76def54fd91c1149->enter($__internal_a5c5e24fe69f138b4e3a2117a6ebec3c9be4e2782057bbbc76def54fd91c1149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_8c99cf7e13db2c1a37a8e3d7af2efddeb108fb2b52c58ea3680190520f234648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c99cf7e13db2c1a37a8e3d7af2efddeb108fb2b52c58ea3680190520f234648->enter($__internal_8c99cf7e13db2c1a37a8e3d7af2efddeb108fb2b52c58ea3680190520f234648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_8c99cf7e13db2c1a37a8e3d7af2efddeb108fb2b52c58ea3680190520f234648->leave($__internal_8c99cf7e13db2c1a37a8e3d7af2efddeb108fb2b52c58ea3680190520f234648_prof);

        
        $__internal_a5c5e24fe69f138b4e3a2117a6ebec3c9be4e2782057bbbc76def54fd91c1149->leave($__internal_a5c5e24fe69f138b4e3a2117a6ebec3c9be4e2782057bbbc76def54fd91c1149_prof);

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
