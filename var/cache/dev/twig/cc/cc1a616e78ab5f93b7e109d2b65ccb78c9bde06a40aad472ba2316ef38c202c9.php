<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_35559a4edd42f31669a8d45b0a4d4639757c1018493614bbdb0c3209ff60620b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_d7c683a7845a739294a1dfc6874179eca7c5e151cd25c5a397a0485d1b5ff102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c683a7845a739294a1dfc6874179eca7c5e151cd25c5a397a0485d1b5ff102->enter($__internal_d7c683a7845a739294a1dfc6874179eca7c5e151cd25c5a397a0485d1b5ff102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d385f9f1e0643bf553231f40172406c4381def22b32b5d3f67c205be555ea85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d385f9f1e0643bf553231f40172406c4381def22b32b5d3f67c205be555ea85a->enter($__internal_d385f9f1e0643bf553231f40172406c4381def22b32b5d3f67c205be555ea85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c683a7845a739294a1dfc6874179eca7c5e151cd25c5a397a0485d1b5ff102->leave($__internal_d7c683a7845a739294a1dfc6874179eca7c5e151cd25c5a397a0485d1b5ff102_prof);

        
        $__internal_d385f9f1e0643bf553231f40172406c4381def22b32b5d3f67c205be555ea85a->leave($__internal_d385f9f1e0643bf553231f40172406c4381def22b32b5d3f67c205be555ea85a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4457c41d35a03cb0a8f7ff1696b7e65d8d2cbc082b4eeaa625918f0360dc078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4457c41d35a03cb0a8f7ff1696b7e65d8d2cbc082b4eeaa625918f0360dc078e->enter($__internal_4457c41d35a03cb0a8f7ff1696b7e65d8d2cbc082b4eeaa625918f0360dc078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10c7942e4e15f802a51564b3ae6aaca3de21f6559ab8efb75b4b0c779c39f356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c7942e4e15f802a51564b3ae6aaca3de21f6559ab8efb75b4b0c779c39f356->enter($__internal_10c7942e4e15f802a51564b3ae6aaca3de21f6559ab8efb75b4b0c779c39f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10c7942e4e15f802a51564b3ae6aaca3de21f6559ab8efb75b4b0c779c39f356->leave($__internal_10c7942e4e15f802a51564b3ae6aaca3de21f6559ab8efb75b4b0c779c39f356_prof);

        
        $__internal_4457c41d35a03cb0a8f7ff1696b7e65d8d2cbc082b4eeaa625918f0360dc078e->leave($__internal_4457c41d35a03cb0a8f7ff1696b7e65d8d2cbc082b4eeaa625918f0360dc078e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_83a908340cabc9fac8d6e95f22b2b0c9ccd13722dda80c2021aec9b896607d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a908340cabc9fac8d6e95f22b2b0c9ccd13722dda80c2021aec9b896607d09->enter($__internal_83a908340cabc9fac8d6e95f22b2b0c9ccd13722dda80c2021aec9b896607d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad7fd4fdbe376e13a221eb2eb3a7fb8a055abab681525f5448b24575aa35ec9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7fd4fdbe376e13a221eb2eb3a7fb8a055abab681525f5448b24575aa35ec9d->enter($__internal_ad7fd4fdbe376e13a221eb2eb3a7fb8a055abab681525f5448b24575aa35ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ad7fd4fdbe376e13a221eb2eb3a7fb8a055abab681525f5448b24575aa35ec9d->leave($__internal_ad7fd4fdbe376e13a221eb2eb3a7fb8a055abab681525f5448b24575aa35ec9d_prof);

        
        $__internal_83a908340cabc9fac8d6e95f22b2b0c9ccd13722dda80c2021aec9b896607d09->leave($__internal_83a908340cabc9fac8d6e95f22b2b0c9ccd13722dda80c2021aec9b896607d09_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_539978c5ed10f895d08a2eb4a1416f7fed5a6edddd6ebe7fd0583fa09b2d7923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539978c5ed10f895d08a2eb4a1416f7fed5a6edddd6ebe7fd0583fa09b2d7923->enter($__internal_539978c5ed10f895d08a2eb4a1416f7fed5a6edddd6ebe7fd0583fa09b2d7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dc5de43dbd5b417278dac5d93cff0cbf1f5c2561a86f38aab657b39f8d4ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc5de43dbd5b417278dac5d93cff0cbf1f5c2561a86f38aab657b39f8d4ddeb->enter($__internal_3dc5de43dbd5b417278dac5d93cff0cbf1f5c2561a86f38aab657b39f8d4ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3dc5de43dbd5b417278dac5d93cff0cbf1f5c2561a86f38aab657b39f8d4ddeb->leave($__internal_3dc5de43dbd5b417278dac5d93cff0cbf1f5c2561a86f38aab657b39f8d4ddeb_prof);

        
        $__internal_539978c5ed10f895d08a2eb4a1416f7fed5a6edddd6ebe7fd0583fa09b2d7923->leave($__internal_539978c5ed10f895d08a2eb4a1416f7fed5a6edddd6ebe7fd0583fa09b2d7923_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
