<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc7d8db1d994707953eb9a93005305f60c711167e0f634d3021ac97ad3e7dcf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7d8db1d994707953eb9a93005305f60c711167e0f634d3021ac97ad3e7dcf0->enter($__internal_fc7d8db1d994707953eb9a93005305f60c711167e0f634d3021ac97ad3e7dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_69999ff0e897928326ef345cdf8c39e0f5446658e695571eaa9cfd2723e03ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69999ff0e897928326ef345cdf8c39e0f5446658e695571eaa9cfd2723e03ed1->enter($__internal_69999ff0e897928326ef345cdf8c39e0f5446658e695571eaa9cfd2723e03ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc7d8db1d994707953eb9a93005305f60c711167e0f634d3021ac97ad3e7dcf0->leave($__internal_fc7d8db1d994707953eb9a93005305f60c711167e0f634d3021ac97ad3e7dcf0_prof);

        
        $__internal_69999ff0e897928326ef345cdf8c39e0f5446658e695571eaa9cfd2723e03ed1->leave($__internal_69999ff0e897928326ef345cdf8c39e0f5446658e695571eaa9cfd2723e03ed1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fd844916f41a914ab2ce82d08df1652fc4e35e71e96c63d2d3040ad89b663bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd844916f41a914ab2ce82d08df1652fc4e35e71e96c63d2d3040ad89b663bf->enter($__internal_7fd844916f41a914ab2ce82d08df1652fc4e35e71e96c63d2d3040ad89b663bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc1280a765c35b64f86078db0c13a8567742c5cef6e8b1f0293c39f087af3ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1280a765c35b64f86078db0c13a8567742c5cef6e8b1f0293c39f087af3ffb->enter($__internal_bc1280a765c35b64f86078db0c13a8567742c5cef6e8b1f0293c39f087af3ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bc1280a765c35b64f86078db0c13a8567742c5cef6e8b1f0293c39f087af3ffb->leave($__internal_bc1280a765c35b64f86078db0c13a8567742c5cef6e8b1f0293c39f087af3ffb_prof);

        
        $__internal_7fd844916f41a914ab2ce82d08df1652fc4e35e71e96c63d2d3040ad89b663bf->leave($__internal_7fd844916f41a914ab2ce82d08df1652fc4e35e71e96c63d2d3040ad89b663bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
