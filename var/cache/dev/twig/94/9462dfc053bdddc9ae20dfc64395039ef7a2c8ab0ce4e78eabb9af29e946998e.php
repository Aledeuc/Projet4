<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_362500c00eacaca143d9a61619d8df2804641c0d430c88a896828684abfb5a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ca9d9d5c7ed3a5f162154e7e20a849fbfb111b06cbad44f1bf0fec30f4da18bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9d9d5c7ed3a5f162154e7e20a849fbfb111b06cbad44f1bf0fec30f4da18bb->enter($__internal_ca9d9d5c7ed3a5f162154e7e20a849fbfb111b06cbad44f1bf0fec30f4da18bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9806653759c6b4afd1d31c109066a73684dd322c8522a37b59101cded4922910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9806653759c6b4afd1d31c109066a73684dd322c8522a37b59101cded4922910->enter($__internal_9806653759c6b4afd1d31c109066a73684dd322c8522a37b59101cded4922910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9d9d5c7ed3a5f162154e7e20a849fbfb111b06cbad44f1bf0fec30f4da18bb->leave($__internal_ca9d9d5c7ed3a5f162154e7e20a849fbfb111b06cbad44f1bf0fec30f4da18bb_prof);

        
        $__internal_9806653759c6b4afd1d31c109066a73684dd322c8522a37b59101cded4922910->leave($__internal_9806653759c6b4afd1d31c109066a73684dd322c8522a37b59101cded4922910_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3c32881bcea73201499eef9e197b9a1f3c7b4c3c0af56df13756f953fc62b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c32881bcea73201499eef9e197b9a1f3c7b4c3c0af56df13756f953fc62b7f->enter($__internal_f3c32881bcea73201499eef9e197b9a1f3c7b4c3c0af56df13756f953fc62b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b89032474ffb006e29b3b1730de0c305601693dcfda02c2b3b1853adf70a626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b89032474ffb006e29b3b1730de0c305601693dcfda02c2b3b1853adf70a626->enter($__internal_6b89032474ffb006e29b3b1730de0c305601693dcfda02c2b3b1853adf70a626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6b89032474ffb006e29b3b1730de0c305601693dcfda02c2b3b1853adf70a626->leave($__internal_6b89032474ffb006e29b3b1730de0c305601693dcfda02c2b3b1853adf70a626_prof);

        
        $__internal_f3c32881bcea73201499eef9e197b9a1f3c7b4c3c0af56df13756f953fc62b7f->leave($__internal_f3c32881bcea73201499eef9e197b9a1f3c7b4c3c0af56df13756f953fc62b7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9539902894a286e9f1568f0e886868783d146dced5a6227934b810042e4f1633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9539902894a286e9f1568f0e886868783d146dced5a6227934b810042e4f1633->enter($__internal_9539902894a286e9f1568f0e886868783d146dced5a6227934b810042e4f1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0235d3f1318e42694f2b7952628985895597bd7f5a16a95416600fe0010d6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0235d3f1318e42694f2b7952628985895597bd7f5a16a95416600fe0010d6f4->enter($__internal_a0235d3f1318e42694f2b7952628985895597bd7f5a16a95416600fe0010d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a0235d3f1318e42694f2b7952628985895597bd7f5a16a95416600fe0010d6f4->leave($__internal_a0235d3f1318e42694f2b7952628985895597bd7f5a16a95416600fe0010d6f4_prof);

        
        $__internal_9539902894a286e9f1568f0e886868783d146dced5a6227934b810042e4f1633->leave($__internal_9539902894a286e9f1568f0e886868783d146dced5a6227934b810042e4f1633_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
