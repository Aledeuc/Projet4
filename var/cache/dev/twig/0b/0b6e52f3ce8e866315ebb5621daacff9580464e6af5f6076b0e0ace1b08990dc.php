<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0140a957ce408262aa6bad41db3f862946231811f3657a945d170673e87ed284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cbba77d2224a6993fd2cc8ba4cb53eed44effaf71178ede3f512deb4378119b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbba77d2224a6993fd2cc8ba4cb53eed44effaf71178ede3f512deb4378119b->enter($__internal_8cbba77d2224a6993fd2cc8ba4cb53eed44effaf71178ede3f512deb4378119b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_26c64e9bc8fe35a0bba9f17b254ca21169141e710818d2c212d52f3376908803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c64e9bc8fe35a0bba9f17b254ca21169141e710818d2c212d52f3376908803->enter($__internal_26c64e9bc8fe35a0bba9f17b254ca21169141e710818d2c212d52f3376908803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbba77d2224a6993fd2cc8ba4cb53eed44effaf71178ede3f512deb4378119b->leave($__internal_8cbba77d2224a6993fd2cc8ba4cb53eed44effaf71178ede3f512deb4378119b_prof);

        
        $__internal_26c64e9bc8fe35a0bba9f17b254ca21169141e710818d2c212d52f3376908803->leave($__internal_26c64e9bc8fe35a0bba9f17b254ca21169141e710818d2c212d52f3376908803_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6549d871da40cd4175779160c0a91310ca3ceb16fd6e93b47bb79b38dfa50265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6549d871da40cd4175779160c0a91310ca3ceb16fd6e93b47bb79b38dfa50265->enter($__internal_6549d871da40cd4175779160c0a91310ca3ceb16fd6e93b47bb79b38dfa50265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e092b35632928308c946d72245cdacc9eddfc3c19b3a0133d9234b9e28338025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e092b35632928308c946d72245cdacc9eddfc3c19b3a0133d9234b9e28338025->enter($__internal_e092b35632928308c946d72245cdacc9eddfc3c19b3a0133d9234b9e28338025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e092b35632928308c946d72245cdacc9eddfc3c19b3a0133d9234b9e28338025->leave($__internal_e092b35632928308c946d72245cdacc9eddfc3c19b3a0133d9234b9e28338025_prof);

        
        $__internal_6549d871da40cd4175779160c0a91310ca3ceb16fd6e93b47bb79b38dfa50265->leave($__internal_6549d871da40cd4175779160c0a91310ca3ceb16fd6e93b47bb79b38dfa50265_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02e4ca968f3631c1070155bd4e95d8c90496d416686a4f49dee6d664ddbb9f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e4ca968f3631c1070155bd4e95d8c90496d416686a4f49dee6d664ddbb9f8a->enter($__internal_02e4ca968f3631c1070155bd4e95d8c90496d416686a4f49dee6d664ddbb9f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86a3efef6217b6cccdace22ae2dc0d4c3e4eaa07a8c9c4f6b36b267655c24259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a3efef6217b6cccdace22ae2dc0d4c3e4eaa07a8c9c4f6b36b267655c24259->enter($__internal_86a3efef6217b6cccdace22ae2dc0d4c3e4eaa07a8c9c4f6b36b267655c24259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_86a3efef6217b6cccdace22ae2dc0d4c3e4eaa07a8c9c4f6b36b267655c24259->leave($__internal_86a3efef6217b6cccdace22ae2dc0d4c3e4eaa07a8c9c4f6b36b267655c24259_prof);

        
        $__internal_02e4ca968f3631c1070155bd4e95d8c90496d416686a4f49dee6d664ddbb9f8a->leave($__internal_02e4ca968f3631c1070155bd4e95d8c90496d416686a4f49dee6d664ddbb9f8a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
