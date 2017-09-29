<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66685e5c920a6a3b78594a173556d4bf57a16f9f18da839aa9ea08f35b7e5bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66685e5c920a6a3b78594a173556d4bf57a16f9f18da839aa9ea08f35b7e5bb8->enter($__internal_66685e5c920a6a3b78594a173556d4bf57a16f9f18da839aa9ea08f35b7e5bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e915281701bc5a984a5cd3c1dea23bb749655a96ad5fe0ccae15a952113856c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e915281701bc5a984a5cd3c1dea23bb749655a96ad5fe0ccae15a952113856c4->enter($__internal_e915281701bc5a984a5cd3c1dea23bb749655a96ad5fe0ccae15a952113856c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66685e5c920a6a3b78594a173556d4bf57a16f9f18da839aa9ea08f35b7e5bb8->leave($__internal_66685e5c920a6a3b78594a173556d4bf57a16f9f18da839aa9ea08f35b7e5bb8_prof);

        
        $__internal_e915281701bc5a984a5cd3c1dea23bb749655a96ad5fe0ccae15a952113856c4->leave($__internal_e915281701bc5a984a5cd3c1dea23bb749655a96ad5fe0ccae15a952113856c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d6d169739e651a16a7d5d8e8070c9e4ff286a0e689540cdedb869661e052d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6d169739e651a16a7d5d8e8070c9e4ff286a0e689540cdedb869661e052d9e->enter($__internal_5d6d169739e651a16a7d5d8e8070c9e4ff286a0e689540cdedb869661e052d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71e7e23ec3f8cb1a661109f1e77cd82c9822fda2a59031a7d46df49ca9616084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e7e23ec3f8cb1a661109f1e77cd82c9822fda2a59031a7d46df49ca9616084->enter($__internal_71e7e23ec3f8cb1a661109f1e77cd82c9822fda2a59031a7d46df49ca9616084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71e7e23ec3f8cb1a661109f1e77cd82c9822fda2a59031a7d46df49ca9616084->leave($__internal_71e7e23ec3f8cb1a661109f1e77cd82c9822fda2a59031a7d46df49ca9616084_prof);

        
        $__internal_5d6d169739e651a16a7d5d8e8070c9e4ff286a0e689540cdedb869661e052d9e->leave($__internal_5d6d169739e651a16a7d5d8e8070c9e4ff286a0e689540cdedb869661e052d9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fcac2d8d66699e634eb6737a6dd244ec71709290027e9dda51afd00a12c7e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcac2d8d66699e634eb6737a6dd244ec71709290027e9dda51afd00a12c7e4d->enter($__internal_1fcac2d8d66699e634eb6737a6dd244ec71709290027e9dda51afd00a12c7e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f2c9c07d8511f78ba0e3ead8aa43ae78874c80324e24b47d2bb35bbc778a292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2c9c07d8511f78ba0e3ead8aa43ae78874c80324e24b47d2bb35bbc778a292->enter($__internal_4f2c9c07d8511f78ba0e3ead8aa43ae78874c80324e24b47d2bb35bbc778a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f2c9c07d8511f78ba0e3ead8aa43ae78874c80324e24b47d2bb35bbc778a292->leave($__internal_4f2c9c07d8511f78ba0e3ead8aa43ae78874c80324e24b47d2bb35bbc778a292_prof);

        
        $__internal_1fcac2d8d66699e634eb6737a6dd244ec71709290027e9dda51afd00a12c7e4d->leave($__internal_1fcac2d8d66699e634eb6737a6dd244ec71709290027e9dda51afd00a12c7e4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8ff29dbc996ee2bbcb12139dba97b103da712b08501dd1bc4bfd60e9e7fb361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ff29dbc996ee2bbcb12139dba97b103da712b08501dd1bc4bfd60e9e7fb361->enter($__internal_c8ff29dbc996ee2bbcb12139dba97b103da712b08501dd1bc4bfd60e9e7fb361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd6453d734b1d011f40eb860c76260f517af39e2c4bfdf6e50eb90ee5e71444b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6453d734b1d011f40eb860c76260f517af39e2c4bfdf6e50eb90ee5e71444b->enter($__internal_bd6453d734b1d011f40eb860c76260f517af39e2c4bfdf6e50eb90ee5e71444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd6453d734b1d011f40eb860c76260f517af39e2c4bfdf6e50eb90ee5e71444b->leave($__internal_bd6453d734b1d011f40eb860c76260f517af39e2c4bfdf6e50eb90ee5e71444b_prof);

        
        $__internal_c8ff29dbc996ee2bbcb12139dba97b103da712b08501dd1bc4bfd60e9e7fb361->leave($__internal_c8ff29dbc996ee2bbcb12139dba97b103da712b08501dd1bc4bfd60e9e7fb361_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
