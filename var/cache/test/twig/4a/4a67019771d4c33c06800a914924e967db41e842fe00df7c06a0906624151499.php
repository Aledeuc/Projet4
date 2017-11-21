<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_89fcf9b9400760353c15d14b72caf1a130f2b05ae20148f3f0ac50f7d3c1889f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fcf9b9400760353c15d14b72caf1a130f2b05ae20148f3f0ac50f7d3c1889f->enter($__internal_89fcf9b9400760353c15d14b72caf1a130f2b05ae20148f3f0ac50f7d3c1889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0ac6d2bf5c6660cc5fb688ebee8a052f605258ab1e3c170d155bd0eedd6cbcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac6d2bf5c6660cc5fb688ebee8a052f605258ab1e3c170d155bd0eedd6cbcf1->enter($__internal_0ac6d2bf5c6660cc5fb688ebee8a052f605258ab1e3c170d155bd0eedd6cbcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89fcf9b9400760353c15d14b72caf1a130f2b05ae20148f3f0ac50f7d3c1889f->leave($__internal_89fcf9b9400760353c15d14b72caf1a130f2b05ae20148f3f0ac50f7d3c1889f_prof);

        
        $__internal_0ac6d2bf5c6660cc5fb688ebee8a052f605258ab1e3c170d155bd0eedd6cbcf1->leave($__internal_0ac6d2bf5c6660cc5fb688ebee8a052f605258ab1e3c170d155bd0eedd6cbcf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dca8f81ee184b765bf5008cc1febb2b9dc7df53c37efb79bf5cf50c20d9bb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dca8f81ee184b765bf5008cc1febb2b9dc7df53c37efb79bf5cf50c20d9bb0c->enter($__internal_4dca8f81ee184b765bf5008cc1febb2b9dc7df53c37efb79bf5cf50c20d9bb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d8c0651f33be794d38b2b52c7a9d7f5b2a9f190a2d5b52b6cbcac15b4c01fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8c0651f33be794d38b2b52c7a9d7f5b2a9f190a2d5b52b6cbcac15b4c01fb9->enter($__internal_3d8c0651f33be794d38b2b52c7a9d7f5b2a9f190a2d5b52b6cbcac15b4c01fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d8c0651f33be794d38b2b52c7a9d7f5b2a9f190a2d5b52b6cbcac15b4c01fb9->leave($__internal_3d8c0651f33be794d38b2b52c7a9d7f5b2a9f190a2d5b52b6cbcac15b4c01fb9_prof);

        
        $__internal_4dca8f81ee184b765bf5008cc1febb2b9dc7df53c37efb79bf5cf50c20d9bb0c->leave($__internal_4dca8f81ee184b765bf5008cc1febb2b9dc7df53c37efb79bf5cf50c20d9bb0c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e30997430a6fc38c866a090d05dfe709ad687b1482c6f8ea02f3ff57231a54e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30997430a6fc38c866a090d05dfe709ad687b1482c6f8ea02f3ff57231a54e4->enter($__internal_e30997430a6fc38c866a090d05dfe709ad687b1482c6f8ea02f3ff57231a54e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc34511c9a78ab4ff0e993cc22dfce2f39c906182028eb1961ed046cfd44e99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc34511c9a78ab4ff0e993cc22dfce2f39c906182028eb1961ed046cfd44e99e->enter($__internal_bc34511c9a78ab4ff0e993cc22dfce2f39c906182028eb1961ed046cfd44e99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc34511c9a78ab4ff0e993cc22dfce2f39c906182028eb1961ed046cfd44e99e->leave($__internal_bc34511c9a78ab4ff0e993cc22dfce2f39c906182028eb1961ed046cfd44e99e_prof);

        
        $__internal_e30997430a6fc38c866a090d05dfe709ad687b1482c6f8ea02f3ff57231a54e4->leave($__internal_e30997430a6fc38c866a090d05dfe709ad687b1482c6f8ea02f3ff57231a54e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_76ba1a31fc1c3597f10beb56b9d24da7c390b222d519c38efc1eb4685b278980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ba1a31fc1c3597f10beb56b9d24da7c390b222d519c38efc1eb4685b278980->enter($__internal_76ba1a31fc1c3597f10beb56b9d24da7c390b222d519c38efc1eb4685b278980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00ccdfa85be04991f5b1d6d066b1184878b96b33004ad71954eceb01e829cc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ccdfa85be04991f5b1d6d066b1184878b96b33004ad71954eceb01e829cc39->enter($__internal_00ccdfa85be04991f5b1d6d066b1184878b96b33004ad71954eceb01e829cc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_00ccdfa85be04991f5b1d6d066b1184878b96b33004ad71954eceb01e829cc39->leave($__internal_00ccdfa85be04991f5b1d6d066b1184878b96b33004ad71954eceb01e829cc39_prof);

        
        $__internal_76ba1a31fc1c3597f10beb56b9d24da7c390b222d519c38efc1eb4685b278980->leave($__internal_76ba1a31fc1c3597f10beb56b9d24da7c390b222d519c38efc1eb4685b278980_prof);

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
