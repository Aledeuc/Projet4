<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f9ef577faef357a172e6ba4d7892a15a1e56f5fd91733d4526b6a90faecf3a9 extends Twig_Template
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
        $__internal_314a43ea264f3ecfbdb26c43c55ffde98ff145db4b8365af9fad21ea8557ef7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314a43ea264f3ecfbdb26c43c55ffde98ff145db4b8365af9fad21ea8557ef7a->enter($__internal_314a43ea264f3ecfbdb26c43c55ffde98ff145db4b8365af9fad21ea8557ef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a9114bd06801baa23986f214d5841a9c8b09b39284b7160d1867a231ed6fd70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9114bd06801baa23986f214d5841a9c8b09b39284b7160d1867a231ed6fd70d->enter($__internal_a9114bd06801baa23986f214d5841a9c8b09b39284b7160d1867a231ed6fd70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314a43ea264f3ecfbdb26c43c55ffde98ff145db4b8365af9fad21ea8557ef7a->leave($__internal_314a43ea264f3ecfbdb26c43c55ffde98ff145db4b8365af9fad21ea8557ef7a_prof);

        
        $__internal_a9114bd06801baa23986f214d5841a9c8b09b39284b7160d1867a231ed6fd70d->leave($__internal_a9114bd06801baa23986f214d5841a9c8b09b39284b7160d1867a231ed6fd70d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92ec63cd0fa68277992540565929dde10920f280b8266fb1ce1c9ea1c22bca55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ec63cd0fa68277992540565929dde10920f280b8266fb1ce1c9ea1c22bca55->enter($__internal_92ec63cd0fa68277992540565929dde10920f280b8266fb1ce1c9ea1c22bca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_801e04e6589928a81033d37487496113a0cecf12e837cce979b5f77160fcfbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e04e6589928a81033d37487496113a0cecf12e837cce979b5f77160fcfbed->enter($__internal_801e04e6589928a81033d37487496113a0cecf12e837cce979b5f77160fcfbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_801e04e6589928a81033d37487496113a0cecf12e837cce979b5f77160fcfbed->leave($__internal_801e04e6589928a81033d37487496113a0cecf12e837cce979b5f77160fcfbed_prof);

        
        $__internal_92ec63cd0fa68277992540565929dde10920f280b8266fb1ce1c9ea1c22bca55->leave($__internal_92ec63cd0fa68277992540565929dde10920f280b8266fb1ce1c9ea1c22bca55_prof);

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
