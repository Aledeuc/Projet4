<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b7bb9c28bba7463b68067fa938346dada7f2e252253473f87fa413bf44d4380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7bb9c28bba7463b68067fa938346dada7f2e252253473f87fa413bf44d4380->enter($__internal_5b7bb9c28bba7463b68067fa938346dada7f2e252253473f87fa413bf44d4380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7d0b3f8a592d453a0237da47cc90e194fddd796396769b65d66637000ebf127e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0b3f8a592d453a0237da47cc90e194fddd796396769b65d66637000ebf127e->enter($__internal_7d0b3f8a592d453a0237da47cc90e194fddd796396769b65d66637000ebf127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b7bb9c28bba7463b68067fa938346dada7f2e252253473f87fa413bf44d4380->leave($__internal_5b7bb9c28bba7463b68067fa938346dada7f2e252253473f87fa413bf44d4380_prof);

        
        $__internal_7d0b3f8a592d453a0237da47cc90e194fddd796396769b65d66637000ebf127e->leave($__internal_7d0b3f8a592d453a0237da47cc90e194fddd796396769b65d66637000ebf127e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc50bfb1d1ffbd322d3cd9e645ec21ea2384fa47debcc351e203a7636d4abb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc50bfb1d1ffbd322d3cd9e645ec21ea2384fa47debcc351e203a7636d4abb3c->enter($__internal_fc50bfb1d1ffbd322d3cd9e645ec21ea2384fa47debcc351e203a7636d4abb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd11f1ae40c816fd27c0764348bdc13aa78dba88b81e5d3c81a050b9cd058856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd11f1ae40c816fd27c0764348bdc13aa78dba88b81e5d3c81a050b9cd058856->enter($__internal_cd11f1ae40c816fd27c0764348bdc13aa78dba88b81e5d3c81a050b9cd058856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cd11f1ae40c816fd27c0764348bdc13aa78dba88b81e5d3c81a050b9cd058856->leave($__internal_cd11f1ae40c816fd27c0764348bdc13aa78dba88b81e5d3c81a050b9cd058856_prof);

        
        $__internal_fc50bfb1d1ffbd322d3cd9e645ec21ea2384fa47debcc351e203a7636d4abb3c->leave($__internal_fc50bfb1d1ffbd322d3cd9e645ec21ea2384fa47debcc351e203a7636d4abb3c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c13d6ed11b7536e0d58cb1a35590b2bab4323591db7b213edccf07d71738b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c13d6ed11b7536e0d58cb1a35590b2bab4323591db7b213edccf07d71738b5a->enter($__internal_6c13d6ed11b7536e0d58cb1a35590b2bab4323591db7b213edccf07d71738b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b7b79ab830edce90e17a066e5ac9031feed8e0ec96ab69ba91dab58d672076f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7b79ab830edce90e17a066e5ac9031feed8e0ec96ab69ba91dab58d672076f->enter($__internal_3b7b79ab830edce90e17a066e5ac9031feed8e0ec96ab69ba91dab58d672076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b7b79ab830edce90e17a066e5ac9031feed8e0ec96ab69ba91dab58d672076f->leave($__internal_3b7b79ab830edce90e17a066e5ac9031feed8e0ec96ab69ba91dab58d672076f_prof);

        
        $__internal_6c13d6ed11b7536e0d58cb1a35590b2bab4323591db7b213edccf07d71738b5a->leave($__internal_6c13d6ed11b7536e0d58cb1a35590b2bab4323591db7b213edccf07d71738b5a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_091d9a6a3eec0674683959d3ffa7f4368fa8f8ab00979978eff9442f7871c571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091d9a6a3eec0674683959d3ffa7f4368fa8f8ab00979978eff9442f7871c571->enter($__internal_091d9a6a3eec0674683959d3ffa7f4368fa8f8ab00979978eff9442f7871c571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d43373b040423153063863308d040eb1143dbae9a1641ad129aa0a78ed40cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d43373b040423153063863308d040eb1143dbae9a1641ad129aa0a78ed40cd8->enter($__internal_1d43373b040423153063863308d040eb1143dbae9a1641ad129aa0a78ed40cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1d43373b040423153063863308d040eb1143dbae9a1641ad129aa0a78ed40cd8->leave($__internal_1d43373b040423153063863308d040eb1143dbae9a1641ad129aa0a78ed40cd8_prof);

        
        $__internal_091d9a6a3eec0674683959d3ffa7f4368fa8f8ab00979978eff9442f7871c571->leave($__internal_091d9a6a3eec0674683959d3ffa7f4368fa8f8ab00979978eff9442f7871c571_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
