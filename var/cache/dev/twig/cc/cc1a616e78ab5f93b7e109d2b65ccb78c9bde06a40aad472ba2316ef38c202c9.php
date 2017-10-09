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
        $__internal_f581a3750b87a3f6d7a3052cfc00a3fc714100fa086251294777fac6a5d7f91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f581a3750b87a3f6d7a3052cfc00a3fc714100fa086251294777fac6a5d7f91d->enter($__internal_f581a3750b87a3f6d7a3052cfc00a3fc714100fa086251294777fac6a5d7f91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ce7281b41235eceaee5922e24819d8f4de736d7935530ed2c87c2fce9879d92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7281b41235eceaee5922e24819d8f4de736d7935530ed2c87c2fce9879d92b->enter($__internal_ce7281b41235eceaee5922e24819d8f4de736d7935530ed2c87c2fce9879d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f581a3750b87a3f6d7a3052cfc00a3fc714100fa086251294777fac6a5d7f91d->leave($__internal_f581a3750b87a3f6d7a3052cfc00a3fc714100fa086251294777fac6a5d7f91d_prof);

        
        $__internal_ce7281b41235eceaee5922e24819d8f4de736d7935530ed2c87c2fce9879d92b->leave($__internal_ce7281b41235eceaee5922e24819d8f4de736d7935530ed2c87c2fce9879d92b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd83add55351ddce3144ad708a2415e8bf906c26afe098eba5f8154508248011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd83add55351ddce3144ad708a2415e8bf906c26afe098eba5f8154508248011->enter($__internal_dd83add55351ddce3144ad708a2415e8bf906c26afe098eba5f8154508248011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fcf244733d2c3b3a60bc27723dc76549d0a7434fbe45f198eaf1553a2644f908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf244733d2c3b3a60bc27723dc76549d0a7434fbe45f198eaf1553a2644f908->enter($__internal_fcf244733d2c3b3a60bc27723dc76549d0a7434fbe45f198eaf1553a2644f908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fcf244733d2c3b3a60bc27723dc76549d0a7434fbe45f198eaf1553a2644f908->leave($__internal_fcf244733d2c3b3a60bc27723dc76549d0a7434fbe45f198eaf1553a2644f908_prof);

        
        $__internal_dd83add55351ddce3144ad708a2415e8bf906c26afe098eba5f8154508248011->leave($__internal_dd83add55351ddce3144ad708a2415e8bf906c26afe098eba5f8154508248011_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2035081b59652e9bee85b4aa797067e8048b7cb1199886e0fa9e78ef69f76f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2035081b59652e9bee85b4aa797067e8048b7cb1199886e0fa9e78ef69f76f24->enter($__internal_2035081b59652e9bee85b4aa797067e8048b7cb1199886e0fa9e78ef69f76f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8862befc62b481c5c86ba2598ee745eccde034263783aec97aa8b74a6aacde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8862befc62b481c5c86ba2598ee745eccde034263783aec97aa8b74a6aacde1->enter($__internal_c8862befc62b481c5c86ba2598ee745eccde034263783aec97aa8b74a6aacde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8862befc62b481c5c86ba2598ee745eccde034263783aec97aa8b74a6aacde1->leave($__internal_c8862befc62b481c5c86ba2598ee745eccde034263783aec97aa8b74a6aacde1_prof);

        
        $__internal_2035081b59652e9bee85b4aa797067e8048b7cb1199886e0fa9e78ef69f76f24->leave($__internal_2035081b59652e9bee85b4aa797067e8048b7cb1199886e0fa9e78ef69f76f24_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1bacaebbb47effe8aa42959b9da860a924de653a1c14b36a00026bf2d25b741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bacaebbb47effe8aa42959b9da860a924de653a1c14b36a00026bf2d25b741->enter($__internal_d1bacaebbb47effe8aa42959b9da860a924de653a1c14b36a00026bf2d25b741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3b207c5c454ccf4ebf80268512a82dff89dc5fd488d9dfe005dcb5508f9196f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b207c5c454ccf4ebf80268512a82dff89dc5fd488d9dfe005dcb5508f9196f->enter($__internal_e3b207c5c454ccf4ebf80268512a82dff89dc5fd488d9dfe005dcb5508f9196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e3b207c5c454ccf4ebf80268512a82dff89dc5fd488d9dfe005dcb5508f9196f->leave($__internal_e3b207c5c454ccf4ebf80268512a82dff89dc5fd488d9dfe005dcb5508f9196f_prof);

        
        $__internal_d1bacaebbb47effe8aa42959b9da860a924de653a1c14b36a00026bf2d25b741->leave($__internal_d1bacaebbb47effe8aa42959b9da860a924de653a1c14b36a00026bf2d25b741_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
