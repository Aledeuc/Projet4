<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_08c99f6a3ac4fcbef4caa1899ea788baed6e6680190075df648e47b9d2be6d93 extends Twig_Template
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
        $__internal_ec966d5b2ab212d7e768e1b7f10d4732a65923d0b74ccb094f07e4e41d78a998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec966d5b2ab212d7e768e1b7f10d4732a65923d0b74ccb094f07e4e41d78a998->enter($__internal_ec966d5b2ab212d7e768e1b7f10d4732a65923d0b74ccb094f07e4e41d78a998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_6eda75804821283339ca191a4ddb5c8c88e6bde76d32b2dd7cab08b8dc77ca73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eda75804821283339ca191a4ddb5c8c88e6bde76d32b2dd7cab08b8dc77ca73->enter($__internal_6eda75804821283339ca191a4ddb5c8c88e6bde76d32b2dd7cab08b8dc77ca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec966d5b2ab212d7e768e1b7f10d4732a65923d0b74ccb094f07e4e41d78a998->leave($__internal_ec966d5b2ab212d7e768e1b7f10d4732a65923d0b74ccb094f07e4e41d78a998_prof);

        
        $__internal_6eda75804821283339ca191a4ddb5c8c88e6bde76d32b2dd7cab08b8dc77ca73->leave($__internal_6eda75804821283339ca191a4ddb5c8c88e6bde76d32b2dd7cab08b8dc77ca73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc885f7cc7cab72e860338230a2ba028f7f481c62b3d8a4ea52573a549308288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc885f7cc7cab72e860338230a2ba028f7f481c62b3d8a4ea52573a549308288->enter($__internal_cc885f7cc7cab72e860338230a2ba028f7f481c62b3d8a4ea52573a549308288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d814b90bb97227c32ab7bda0cf7d91de5a7f23949c254092dd678af502482b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d814b90bb97227c32ab7bda0cf7d91de5a7f23949c254092dd678af502482b90->enter($__internal_d814b90bb97227c32ab7bda0cf7d91de5a7f23949c254092dd678af502482b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_d814b90bb97227c32ab7bda0cf7d91de5a7f23949c254092dd678af502482b90->leave($__internal_d814b90bb97227c32ab7bda0cf7d91de5a7f23949c254092dd678af502482b90_prof);

        
        $__internal_cc885f7cc7cab72e860338230a2ba028f7f481c62b3d8a4ea52573a549308288->leave($__internal_cc885f7cc7cab72e860338230a2ba028f7f481c62b3d8a4ea52573a549308288_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb0bd76c01c4cb308bd6bf2bd2435df6e38334a261f16e2c96258340bd8bc6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0bd76c01c4cb308bd6bf2bd2435df6e38334a261f16e2c96258340bd8bc6aa->enter($__internal_bb0bd76c01c4cb308bd6bf2bd2435df6e38334a261f16e2c96258340bd8bc6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a12f2026e1631372d25aceb13208c3209e20518aafe53897a6f980e46af5bc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12f2026e1631372d25aceb13208c3209e20518aafe53897a6f980e46af5bc0c->enter($__internal_a12f2026e1631372d25aceb13208c3209e20518aafe53897a6f980e46af5bc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_a12f2026e1631372d25aceb13208c3209e20518aafe53897a6f980e46af5bc0c->leave($__internal_a12f2026e1631372d25aceb13208c3209e20518aafe53897a6f980e46af5bc0c_prof);

        
        $__internal_bb0bd76c01c4cb308bd6bf2bd2435df6e38334a261f16e2c96258340bd8bc6aa->leave($__internal_bb0bd76c01c4cb308bd6bf2bd2435df6e38334a261f16e2c96258340bd8bc6aa_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_d946043d56ab97f16b8c5be9493a6c79179c01abfa39c57dae3f55d98a0fca13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d946043d56ab97f16b8c5be9493a6c79179c01abfa39c57dae3f55d98a0fca13->enter($__internal_d946043d56ab97f16b8c5be9493a6c79179c01abfa39c57dae3f55d98a0fca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_5b7a2a3074f242249128b56a69cf14af8e6a77994b3a7873e901ff8ba7df0173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7a2a3074f242249128b56a69cf14af8e6a77994b3a7873e901ff8ba7df0173->enter($__internal_5b7a2a3074f242249128b56a69cf14af8e6a77994b3a7873e901ff8ba7df0173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_5b7a2a3074f242249128b56a69cf14af8e6a77994b3a7873e901ff8ba7df0173->leave($__internal_5b7a2a3074f242249128b56a69cf14af8e6a77994b3a7873e901ff8ba7df0173_prof);

        
        $__internal_d946043d56ab97f16b8c5be9493a6c79179c01abfa39c57dae3f55d98a0fca13->leave($__internal_d946043d56ab97f16b8c5be9493a6c79179c01abfa39c57dae3f55d98a0fca13_prof);

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
