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
        $__internal_b1a500766d8084c23785deb1a5e318793c87bdad00824b1428b50d2c2c4b298c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a500766d8084c23785deb1a5e318793c87bdad00824b1428b50d2c2c4b298c->enter($__internal_b1a500766d8084c23785deb1a5e318793c87bdad00824b1428b50d2c2c4b298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2baabeb292146ba5d0263adcf66a9ca30cd4ab6bb74e029b7fa26dfc9eb19c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baabeb292146ba5d0263adcf66a9ca30cd4ab6bb74e029b7fa26dfc9eb19c3c->enter($__internal_2baabeb292146ba5d0263adcf66a9ca30cd4ab6bb74e029b7fa26dfc9eb19c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a500766d8084c23785deb1a5e318793c87bdad00824b1428b50d2c2c4b298c->leave($__internal_b1a500766d8084c23785deb1a5e318793c87bdad00824b1428b50d2c2c4b298c_prof);

        
        $__internal_2baabeb292146ba5d0263adcf66a9ca30cd4ab6bb74e029b7fa26dfc9eb19c3c->leave($__internal_2baabeb292146ba5d0263adcf66a9ca30cd4ab6bb74e029b7fa26dfc9eb19c3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ce7430457703df47e532e02bd4c693116800d3e88f265325a112c1933daf490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce7430457703df47e532e02bd4c693116800d3e88f265325a112c1933daf490->enter($__internal_4ce7430457703df47e532e02bd4c693116800d3e88f265325a112c1933daf490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_432458b4f5560ba2a23fd54940bb61afd7ae15af0c0b0e7e1040f4a69d46488e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432458b4f5560ba2a23fd54940bb61afd7ae15af0c0b0e7e1040f4a69d46488e->enter($__internal_432458b4f5560ba2a23fd54940bb61afd7ae15af0c0b0e7e1040f4a69d46488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_432458b4f5560ba2a23fd54940bb61afd7ae15af0c0b0e7e1040f4a69d46488e->leave($__internal_432458b4f5560ba2a23fd54940bb61afd7ae15af0c0b0e7e1040f4a69d46488e_prof);

        
        $__internal_4ce7430457703df47e532e02bd4c693116800d3e88f265325a112c1933daf490->leave($__internal_4ce7430457703df47e532e02bd4c693116800d3e88f265325a112c1933daf490_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e4c9180588378981bb1d6011dc7daf778e8819a05dcb1297f08096c7f0e86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e4c9180588378981bb1d6011dc7daf778e8819a05dcb1297f08096c7f0e86d->enter($__internal_97e4c9180588378981bb1d6011dc7daf778e8819a05dcb1297f08096c7f0e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9256ea3753ee91d5d40049dc3343b8c5ec054bc17812d7ba9d163c6ff0616fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9256ea3753ee91d5d40049dc3343b8c5ec054bc17812d7ba9d163c6ff0616fb->enter($__internal_a9256ea3753ee91d5d40049dc3343b8c5ec054bc17812d7ba9d163c6ff0616fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9256ea3753ee91d5d40049dc3343b8c5ec054bc17812d7ba9d163c6ff0616fb->leave($__internal_a9256ea3753ee91d5d40049dc3343b8c5ec054bc17812d7ba9d163c6ff0616fb_prof);

        
        $__internal_97e4c9180588378981bb1d6011dc7daf778e8819a05dcb1297f08096c7f0e86d->leave($__internal_97e4c9180588378981bb1d6011dc7daf778e8819a05dcb1297f08096c7f0e86d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_967984239a42c6e66ae9b9c9fc0dcda65ba4ee6705af02f1c185020142747a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967984239a42c6e66ae9b9c9fc0dcda65ba4ee6705af02f1c185020142747a2e->enter($__internal_967984239a42c6e66ae9b9c9fc0dcda65ba4ee6705af02f1c185020142747a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb2e6c741bd0803034ed9fe155a971878efa6eee7fa683cb7b9a8e6444d8d9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2e6c741bd0803034ed9fe155a971878efa6eee7fa683cb7b9a8e6444d8d9d7->enter($__internal_bb2e6c741bd0803034ed9fe155a971878efa6eee7fa683cb7b9a8e6444d8d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bb2e6c741bd0803034ed9fe155a971878efa6eee7fa683cb7b9a8e6444d8d9d7->leave($__internal_bb2e6c741bd0803034ed9fe155a971878efa6eee7fa683cb7b9a8e6444d8d9d7_prof);

        
        $__internal_967984239a42c6e66ae9b9c9fc0dcda65ba4ee6705af02f1c185020142747a2e->leave($__internal_967984239a42c6e66ae9b9c9fc0dcda65ba4ee6705af02f1c185020142747a2e_prof);

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
