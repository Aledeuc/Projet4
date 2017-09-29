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
        $__internal_9004f64181e4d3c65dbfe7c563f2a4d25b849a70ae989749f6204774cb7c0889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004f64181e4d3c65dbfe7c563f2a4d25b849a70ae989749f6204774cb7c0889->enter($__internal_9004f64181e4d3c65dbfe7c563f2a4d25b849a70ae989749f6204774cb7c0889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_2fce70aae1e4914c555fe9cf709bcce8ca29729800540f0b5935738242ed5102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fce70aae1e4914c555fe9cf709bcce8ca29729800540f0b5935738242ed5102->enter($__internal_2fce70aae1e4914c555fe9cf709bcce8ca29729800540f0b5935738242ed5102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9004f64181e4d3c65dbfe7c563f2a4d25b849a70ae989749f6204774cb7c0889->leave($__internal_9004f64181e4d3c65dbfe7c563f2a4d25b849a70ae989749f6204774cb7c0889_prof);

        
        $__internal_2fce70aae1e4914c555fe9cf709bcce8ca29729800540f0b5935738242ed5102->leave($__internal_2fce70aae1e4914c555fe9cf709bcce8ca29729800540f0b5935738242ed5102_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca71a3b535a918887d47879fe828567877cfec51f7038e24884395caee94bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca71a3b535a918887d47879fe828567877cfec51f7038e24884395caee94bc6->enter($__internal_dca71a3b535a918887d47879fe828567877cfec51f7038e24884395caee94bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e50e180f7eff433a1654f95b55af4fb16fbd745bb43b8e23c65e854a0492b45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50e180f7eff433a1654f95b55af4fb16fbd745bb43b8e23c65e854a0492b45c->enter($__internal_e50e180f7eff433a1654f95b55af4fb16fbd745bb43b8e23c65e854a0492b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_e50e180f7eff433a1654f95b55af4fb16fbd745bb43b8e23c65e854a0492b45c->leave($__internal_e50e180f7eff433a1654f95b55af4fb16fbd745bb43b8e23c65e854a0492b45c_prof);

        
        $__internal_dca71a3b535a918887d47879fe828567877cfec51f7038e24884395caee94bc6->leave($__internal_dca71a3b535a918887d47879fe828567877cfec51f7038e24884395caee94bc6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55fb4453a9d948ed8ab0c353668235720070fa5c2b4e91fa329dd6fdb2e94c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fb4453a9d948ed8ab0c353668235720070fa5c2b4e91fa329dd6fdb2e94c2c->enter($__internal_55fb4453a9d948ed8ab0c353668235720070fa5c2b4e91fa329dd6fdb2e94c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7da36d7e62804a777066ffbc1857af21413f423443a8da14a3268c7fa65c232d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da36d7e62804a777066ffbc1857af21413f423443a8da14a3268c7fa65c232d->enter($__internal_7da36d7e62804a777066ffbc1857af21413f423443a8da14a3268c7fa65c232d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_7da36d7e62804a777066ffbc1857af21413f423443a8da14a3268c7fa65c232d->leave($__internal_7da36d7e62804a777066ffbc1857af21413f423443a8da14a3268c7fa65c232d_prof);

        
        $__internal_55fb4453a9d948ed8ab0c353668235720070fa5c2b4e91fa329dd6fdb2e94c2c->leave($__internal_55fb4453a9d948ed8ab0c353668235720070fa5c2b4e91fa329dd6fdb2e94c2c_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_adb8babf8c4aa0ed7900fc041ab2c06c26a904c815514b0e051e0f0d775bdaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb8babf8c4aa0ed7900fc041ab2c06c26a904c815514b0e051e0f0d775bdaf2->enter($__internal_adb8babf8c4aa0ed7900fc041ab2c06c26a904c815514b0e051e0f0d775bdaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_36d9b5763dc2b1759959d8219ba012c9991c587527b930c78441db1feba833be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d9b5763dc2b1759959d8219ba012c9991c587527b930c78441db1feba833be->enter($__internal_36d9b5763dc2b1759959d8219ba012c9991c587527b930c78441db1feba833be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_36d9b5763dc2b1759959d8219ba012c9991c587527b930c78441db1feba833be->leave($__internal_36d9b5763dc2b1759959d8219ba012c9991c587527b930c78441db1feba833be_prof);

        
        $__internal_adb8babf8c4aa0ed7900fc041ab2c06c26a904c815514b0e051e0f0d775bdaf2->leave($__internal_adb8babf8c4aa0ed7900fc041ab2c06c26a904c815514b0e051e0f0d775bdaf2_prof);

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
   
{% endblock %}", "OCBookingBundle::layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/layout.html.twig");
    }
}
