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
        $__internal_26577c471669e74c6b043d290fbfba1786ff21318f609d09f55c4dbdc8754247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26577c471669e74c6b043d290fbfba1786ff21318f609d09f55c4dbdc8754247->enter($__internal_26577c471669e74c6b043d290fbfba1786ff21318f609d09f55c4dbdc8754247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9073cefec193387ff946492041d1005ba182276c56e51a92cd853739ae9eaa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9073cefec193387ff946492041d1005ba182276c56e51a92cd853739ae9eaa06->enter($__internal_9073cefec193387ff946492041d1005ba182276c56e51a92cd853739ae9eaa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26577c471669e74c6b043d290fbfba1786ff21318f609d09f55c4dbdc8754247->leave($__internal_26577c471669e74c6b043d290fbfba1786ff21318f609d09f55c4dbdc8754247_prof);

        
        $__internal_9073cefec193387ff946492041d1005ba182276c56e51a92cd853739ae9eaa06->leave($__internal_9073cefec193387ff946492041d1005ba182276c56e51a92cd853739ae9eaa06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1278e49d1b808d7147adc9e9ff057fadf63471b3e11c1fd987b83f36ed9d6dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1278e49d1b808d7147adc9e9ff057fadf63471b3e11c1fd987b83f36ed9d6dc3->enter($__internal_1278e49d1b808d7147adc9e9ff057fadf63471b3e11c1fd987b83f36ed9d6dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99e9822dd322da4e076790e6a0a56d4a95a1888f08d166322534da139a894d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e9822dd322da4e076790e6a0a56d4a95a1888f08d166322534da139a894d46->enter($__internal_99e9822dd322da4e076790e6a0a56d4a95a1888f08d166322534da139a894d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_99e9822dd322da4e076790e6a0a56d4a95a1888f08d166322534da139a894d46->leave($__internal_99e9822dd322da4e076790e6a0a56d4a95a1888f08d166322534da139a894d46_prof);

        
        $__internal_1278e49d1b808d7147adc9e9ff057fadf63471b3e11c1fd987b83f36ed9d6dc3->leave($__internal_1278e49d1b808d7147adc9e9ff057fadf63471b3e11c1fd987b83f36ed9d6dc3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_10efe989e47deff7dcdf140d7046ca67e6a2f8b038e46d58f9301a12201432a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10efe989e47deff7dcdf140d7046ca67e6a2f8b038e46d58f9301a12201432a3->enter($__internal_10efe989e47deff7dcdf140d7046ca67e6a2f8b038e46d58f9301a12201432a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75f626865c2fa771fe41c028748df1fcdf4bce7782a65c29d4e14322579dd8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f626865c2fa771fe41c028748df1fcdf4bce7782a65c29d4e14322579dd8b1->enter($__internal_75f626865c2fa771fe41c028748df1fcdf4bce7782a65c29d4e14322579dd8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75f626865c2fa771fe41c028748df1fcdf4bce7782a65c29d4e14322579dd8b1->leave($__internal_75f626865c2fa771fe41c028748df1fcdf4bce7782a65c29d4e14322579dd8b1_prof);

        
        $__internal_10efe989e47deff7dcdf140d7046ca67e6a2f8b038e46d58f9301a12201432a3->leave($__internal_10efe989e47deff7dcdf140d7046ca67e6a2f8b038e46d58f9301a12201432a3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_115df4dc657760bdd9ef17b113888a6cf2e892d8990fcf6798d222d28d9cd867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115df4dc657760bdd9ef17b113888a6cf2e892d8990fcf6798d222d28d9cd867->enter($__internal_115df4dc657760bdd9ef17b113888a6cf2e892d8990fcf6798d222d28d9cd867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12bf102a51d6a58601027bafef0bbcb5ca44489ee4864bb7b2fe2389b3c737fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf102a51d6a58601027bafef0bbcb5ca44489ee4864bb7b2fe2389b3c737fa->enter($__internal_12bf102a51d6a58601027bafef0bbcb5ca44489ee4864bb7b2fe2389b3c737fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_12bf102a51d6a58601027bafef0bbcb5ca44489ee4864bb7b2fe2389b3c737fa->leave($__internal_12bf102a51d6a58601027bafef0bbcb5ca44489ee4864bb7b2fe2389b3c737fa_prof);

        
        $__internal_115df4dc657760bdd9ef17b113888a6cf2e892d8990fcf6798d222d28d9cd867->leave($__internal_115df4dc657760bdd9ef17b113888a6cf2e892d8990fcf6798d222d28d9cd867_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
