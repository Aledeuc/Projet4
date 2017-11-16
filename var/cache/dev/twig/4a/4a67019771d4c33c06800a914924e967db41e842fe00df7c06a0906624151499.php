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
        $__internal_e3ec09674dc870c5fa7f478f140f9bf7781605e6c98cb865bca6d0a9607dbc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ec09674dc870c5fa7f478f140f9bf7781605e6c98cb865bca6d0a9607dbc62->enter($__internal_e3ec09674dc870c5fa7f478f140f9bf7781605e6c98cb865bca6d0a9607dbc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4ec74c036c91b6fe154d48d97d240939ebcda5eae24d1e727f62b3db8b254069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec74c036c91b6fe154d48d97d240939ebcda5eae24d1e727f62b3db8b254069->enter($__internal_4ec74c036c91b6fe154d48d97d240939ebcda5eae24d1e727f62b3db8b254069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ec09674dc870c5fa7f478f140f9bf7781605e6c98cb865bca6d0a9607dbc62->leave($__internal_e3ec09674dc870c5fa7f478f140f9bf7781605e6c98cb865bca6d0a9607dbc62_prof);

        
        $__internal_4ec74c036c91b6fe154d48d97d240939ebcda5eae24d1e727f62b3db8b254069->leave($__internal_4ec74c036c91b6fe154d48d97d240939ebcda5eae24d1e727f62b3db8b254069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcd11871b2619768c9ccf042fcd6898467425b1b11292dffd05f810ea59d1324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd11871b2619768c9ccf042fcd6898467425b1b11292dffd05f810ea59d1324->enter($__internal_bcd11871b2619768c9ccf042fcd6898467425b1b11292dffd05f810ea59d1324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1fcba7a44b8f6c67e6ae886d4a9848aff4d854b78e3536c8054ba0f3808fb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fcba7a44b8f6c67e6ae886d4a9848aff4d854b78e3536c8054ba0f3808fb9d->enter($__internal_b1fcba7a44b8f6c67e6ae886d4a9848aff4d854b78e3536c8054ba0f3808fb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b1fcba7a44b8f6c67e6ae886d4a9848aff4d854b78e3536c8054ba0f3808fb9d->leave($__internal_b1fcba7a44b8f6c67e6ae886d4a9848aff4d854b78e3536c8054ba0f3808fb9d_prof);

        
        $__internal_bcd11871b2619768c9ccf042fcd6898467425b1b11292dffd05f810ea59d1324->leave($__internal_bcd11871b2619768c9ccf042fcd6898467425b1b11292dffd05f810ea59d1324_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca80d6a117669e05b154236edab020438cbb53faeb3a6140b1f316eed1d247ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca80d6a117669e05b154236edab020438cbb53faeb3a6140b1f316eed1d247ee->enter($__internal_ca80d6a117669e05b154236edab020438cbb53faeb3a6140b1f316eed1d247ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3e9ea0cae2cef369093dd17e8fbb8d5a39d5acaa8ec186eb09f5cb6286f8be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e9ea0cae2cef369093dd17e8fbb8d5a39d5acaa8ec186eb09f5cb6286f8be6->enter($__internal_d3e9ea0cae2cef369093dd17e8fbb8d5a39d5acaa8ec186eb09f5cb6286f8be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d3e9ea0cae2cef369093dd17e8fbb8d5a39d5acaa8ec186eb09f5cb6286f8be6->leave($__internal_d3e9ea0cae2cef369093dd17e8fbb8d5a39d5acaa8ec186eb09f5cb6286f8be6_prof);

        
        $__internal_ca80d6a117669e05b154236edab020438cbb53faeb3a6140b1f316eed1d247ee->leave($__internal_ca80d6a117669e05b154236edab020438cbb53faeb3a6140b1f316eed1d247ee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d2b5135f376d44468add438243cf9f3c70db2bc85c925819a0398abf1b9384d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2b5135f376d44468add438243cf9f3c70db2bc85c925819a0398abf1b9384d->enter($__internal_1d2b5135f376d44468add438243cf9f3c70db2bc85c925819a0398abf1b9384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_091c629edcdba05eba64da68d361894009a5cc3e64eff20f117b7e76480de6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091c629edcdba05eba64da68d361894009a5cc3e64eff20f117b7e76480de6cb->enter($__internal_091c629edcdba05eba64da68d361894009a5cc3e64eff20f117b7e76480de6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_091c629edcdba05eba64da68d361894009a5cc3e64eff20f117b7e76480de6cb->leave($__internal_091c629edcdba05eba64da68d361894009a5cc3e64eff20f117b7e76480de6cb_prof);

        
        $__internal_1d2b5135f376d44468add438243cf9f3c70db2bc85c925819a0398abf1b9384d->leave($__internal_1d2b5135f376d44468add438243cf9f3c70db2bc85c925819a0398abf1b9384d_prof);

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
