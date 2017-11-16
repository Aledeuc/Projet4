<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
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
        $__internal_35a34c72c0ee8af187a263eb4cc43a4ae086553ed6bf6dc9212657d51e2da75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a34c72c0ee8af187a263eb4cc43a4ae086553ed6bf6dc9212657d51e2da75e->enter($__internal_35a34c72c0ee8af187a263eb4cc43a4ae086553ed6bf6dc9212657d51e2da75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_217da0f1f182e914916ca15521c0a838c3261aafc7b8d1c270069ca0fe8cd0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217da0f1f182e914916ca15521c0a838c3261aafc7b8d1c270069ca0fe8cd0ab->enter($__internal_217da0f1f182e914916ca15521c0a838c3261aafc7b8d1c270069ca0fe8cd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a34c72c0ee8af187a263eb4cc43a4ae086553ed6bf6dc9212657d51e2da75e->leave($__internal_35a34c72c0ee8af187a263eb4cc43a4ae086553ed6bf6dc9212657d51e2da75e_prof);

        
        $__internal_217da0f1f182e914916ca15521c0a838c3261aafc7b8d1c270069ca0fe8cd0ab->leave($__internal_217da0f1f182e914916ca15521c0a838c3261aafc7b8d1c270069ca0fe8cd0ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da4c540ad941fbd07f3d15f4568bf51598640177ebebe07a90aa97c84efa46df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4c540ad941fbd07f3d15f4568bf51598640177ebebe07a90aa97c84efa46df->enter($__internal_da4c540ad941fbd07f3d15f4568bf51598640177ebebe07a90aa97c84efa46df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a86824bc422482b6240800d659206cc6c1680825efb938aedc97a8f710e8ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a86824bc422482b6240800d659206cc6c1680825efb938aedc97a8f710e8ec0->enter($__internal_0a86824bc422482b6240800d659206cc6c1680825efb938aedc97a8f710e8ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0a86824bc422482b6240800d659206cc6c1680825efb938aedc97a8f710e8ec0->leave($__internal_0a86824bc422482b6240800d659206cc6c1680825efb938aedc97a8f710e8ec0_prof);

        
        $__internal_da4c540ad941fbd07f3d15f4568bf51598640177ebebe07a90aa97c84efa46df->leave($__internal_da4c540ad941fbd07f3d15f4568bf51598640177ebebe07a90aa97c84efa46df_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2c07b085a5d0e04bf344bbff3f12ad25b43f49e012f3045dd5ae143bc2ef7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c07b085a5d0e04bf344bbff3f12ad25b43f49e012f3045dd5ae143bc2ef7d3->enter($__internal_e2c07b085a5d0e04bf344bbff3f12ad25b43f49e012f3045dd5ae143bc2ef7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bdc261f574193623cfadea43a175f41113923b58cbd0f4c9029f14dd5c22685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdc261f574193623cfadea43a175f41113923b58cbd0f4c9029f14dd5c22685->enter($__internal_1bdc261f574193623cfadea43a175f41113923b58cbd0f4c9029f14dd5c22685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bdc261f574193623cfadea43a175f41113923b58cbd0f4c9029f14dd5c22685->leave($__internal_1bdc261f574193623cfadea43a175f41113923b58cbd0f4c9029f14dd5c22685_prof);

        
        $__internal_e2c07b085a5d0e04bf344bbff3f12ad25b43f49e012f3045dd5ae143bc2ef7d3->leave($__internal_e2c07b085a5d0e04bf344bbff3f12ad25b43f49e012f3045dd5ae143bc2ef7d3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_97966618fff180c0cb05acd79cec0d167f2c1edc8ce43b9a5d0483536f524492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97966618fff180c0cb05acd79cec0d167f2c1edc8ce43b9a5d0483536f524492->enter($__internal_97966618fff180c0cb05acd79cec0d167f2c1edc8ce43b9a5d0483536f524492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e29f63b84f020d08598e341d6662f39f25c8611262b22d315200a38b2da3195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e29f63b84f020d08598e341d6662f39f25c8611262b22d315200a38b2da3195->enter($__internal_3e29f63b84f020d08598e341d6662f39f25c8611262b22d315200a38b2da3195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3e29f63b84f020d08598e341d6662f39f25c8611262b22d315200a38b2da3195->leave($__internal_3e29f63b84f020d08598e341d6662f39f25c8611262b22d315200a38b2da3195_prof);

        
        $__internal_97966618fff180c0cb05acd79cec0d167f2c1edc8ce43b9a5d0483536f524492->leave($__internal_97966618fff180c0cb05acd79cec0d167f2c1edc8ce43b9a5d0483536f524492_prof);

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
