<?php

/* OCBookingBundle::layout.html.twig */
class __TwigTemplate_cca2f555ea4c14a439b8cc75f2956f8e3cb48f5d5e85e165ca7de832274f6af3 extends Twig_Template
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
        $__internal_d85cf66267c7bc20988a36b4953fcead66d34844604f7f27047ddb9a9868b655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85cf66267c7bc20988a36b4953fcead66d34844604f7f27047ddb9a9868b655->enter($__internal_d85cf66267c7bc20988a36b4953fcead66d34844604f7f27047ddb9a9868b655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $__internal_2c34366e3659da2dab27692f9dbef3a9fd73dcd071050adb523c4f8c03109d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c34366e3659da2dab27692f9dbef3a9fd73dcd071050adb523c4f8c03109d75->enter($__internal_2c34366e3659da2dab27692f9dbef3a9fd73dcd071050adb523c4f8c03109d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d85cf66267c7bc20988a36b4953fcead66d34844604f7f27047ddb9a9868b655->leave($__internal_d85cf66267c7bc20988a36b4953fcead66d34844604f7f27047ddb9a9868b655_prof);

        
        $__internal_2c34366e3659da2dab27692f9dbef3a9fd73dcd071050adb523c4f8c03109d75->leave($__internal_2c34366e3659da2dab27692f9dbef3a9fd73dcd071050adb523c4f8c03109d75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60fa4eee3806d524997b3a79b7c37a1a95f6500fa513da21995d0a3992ccfc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fa4eee3806d524997b3a79b7c37a1a95f6500fa513da21995d0a3992ccfc37->enter($__internal_60fa4eee3806d524997b3a79b7c37a1a95f6500fa513da21995d0a3992ccfc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3228d646d84c6c027fc95b66edc63cc5918b3d0e0a61aaada060f5bd039599ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3228d646d84c6c027fc95b66edc63cc5918b3d0e0a61aaada060f5bd039599ec->enter($__internal_3228d646d84c6c027fc95b66edc63cc5918b3d0e0a61aaada060f5bd039599ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 

    ";
        // line 7
        $this->displayParentBlock("title", $context, $blocks);
        echo " 

";
        
        $__internal_3228d646d84c6c027fc95b66edc63cc5918b3d0e0a61aaada060f5bd039599ec->leave($__internal_3228d646d84c6c027fc95b66edc63cc5918b3d0e0a61aaada060f5bd039599ec_prof);

        
        $__internal_60fa4eee3806d524997b3a79b7c37a1a95f6500fa513da21995d0a3992ccfc37->leave($__internal_60fa4eee3806d524997b3a79b7c37a1a95f6500fa513da21995d0a3992ccfc37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a595e04f967925365e01d2146ec66d1a567d90ce5ae1a69e1f76ee8a358b8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a595e04f967925365e01d2146ec66d1a567d90ce5ae1a69e1f76ee8a358b8ef->enter($__internal_5a595e04f967925365e01d2146ec66d1a567d90ce5ae1a69e1f76ee8a358b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5e994ccc91fb8f367ed8bbc5eb3d0f0df1e3e22862a4255bbe93ba6c8f2ca51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e994ccc91fb8f367ed8bbc5eb3d0f0df1e3e22862a4255bbe93ba6c8f2ca51->enter($__internal_f5e994ccc91fb8f367ed8bbc5eb3d0f0df1e3e22862a4255bbe93ba6c8f2ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('ocbooking_body', $context, $blocks);
        // line 14
        echo " 
   
";
        
        $__internal_f5e994ccc91fb8f367ed8bbc5eb3d0f0df1e3e22862a4255bbe93ba6c8f2ca51->leave($__internal_f5e994ccc91fb8f367ed8bbc5eb3d0f0df1e3e22862a4255bbe93ba6c8f2ca51_prof);

        
        $__internal_5a595e04f967925365e01d2146ec66d1a567d90ce5ae1a69e1f76ee8a358b8ef->leave($__internal_5a595e04f967925365e01d2146ec66d1a567d90ce5ae1a69e1f76ee8a358b8ef_prof);

    }

    // line 13
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_20bda3433f3fdad1fd0713d51812abc8b9341c3ccadd487f43fc915543ff20d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bda3433f3fdad1fd0713d51812abc8b9341c3ccadd487f43fc915543ff20d6->enter($__internal_20bda3433f3fdad1fd0713d51812abc8b9341c3ccadd487f43fc915543ff20d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_7b91678bbb5ad791d238420cd39b5e57aa853cda4d5c7b937073734cd60a000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b91678bbb5ad791d238420cd39b5e57aa853cda4d5c7b937073734cd60a000d->enter($__internal_7b91678bbb5ad791d238420cd39b5e57aa853cda4d5c7b937073734cd60a000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 14
        echo "    ";
        
        $__internal_7b91678bbb5ad791d238420cd39b5e57aa853cda4d5c7b937073734cd60a000d->leave($__internal_7b91678bbb5ad791d238420cd39b5e57aa853cda4d5c7b937073734cd60a000d_prof);

        
        $__internal_20bda3433f3fdad1fd0713d51812abc8b9341c3ccadd487f43fc915543ff20d6->leave($__internal_20bda3433f3fdad1fd0713d51812abc8b9341c3ccadd487f43fc915543ff20d6_prof);

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
