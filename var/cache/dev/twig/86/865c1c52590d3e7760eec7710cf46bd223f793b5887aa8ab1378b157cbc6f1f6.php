<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_c36d185d5b18c1fd56887fac3493cd33973e1cc44c8c9607f350e5bce35d9f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36d185d5b18c1fd56887fac3493cd33973e1cc44c8c9607f350e5bce35d9f8c->enter($__internal_c36d185d5b18c1fd56887fac3493cd33973e1cc44c8c9607f350e5bce35d9f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea6864f3f601f0c63d4fd769b40472314ef02aeff937d2e6e8fbdc6014704280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6864f3f601f0c63d4fd769b40472314ef02aeff937d2e6e8fbdc6014704280->enter($__internal_ea6864f3f601f0c63d4fd769b40472314ef02aeff937d2e6e8fbdc6014704280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c36d185d5b18c1fd56887fac3493cd33973e1cc44c8c9607f350e5bce35d9f8c->leave($__internal_c36d185d5b18c1fd56887fac3493cd33973e1cc44c8c9607f350e5bce35d9f8c_prof);

        
        $__internal_ea6864f3f601f0c63d4fd769b40472314ef02aeff937d2e6e8fbdc6014704280->leave($__internal_ea6864f3f601f0c63d4fd769b40472314ef02aeff937d2e6e8fbdc6014704280_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aceb65b5d7a01eca4c2df9c91ee82e138cbeaac2db18928a0285b5accfb7c625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceb65b5d7a01eca4c2df9c91ee82e138cbeaac2db18928a0285b5accfb7c625->enter($__internal_aceb65b5d7a01eca4c2df9c91ee82e138cbeaac2db18928a0285b5accfb7c625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1269e51b83a3ad5d464eb3b6df1bdf38bb685cea1e0e5a56b8b7ac3840d470f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1269e51b83a3ad5d464eb3b6df1bdf38bb685cea1e0e5a56b8b7ac3840d470f1->enter($__internal_1269e51b83a3ad5d464eb3b6df1bdf38bb685cea1e0e5a56b8b7ac3840d470f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1269e51b83a3ad5d464eb3b6df1bdf38bb685cea1e0e5a56b8b7ac3840d470f1->leave($__internal_1269e51b83a3ad5d464eb3b6df1bdf38bb685cea1e0e5a56b8b7ac3840d470f1_prof);

        
        $__internal_aceb65b5d7a01eca4c2df9c91ee82e138cbeaac2db18928a0285b5accfb7c625->leave($__internal_aceb65b5d7a01eca4c2df9c91ee82e138cbeaac2db18928a0285b5accfb7c625_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8d961013edfb1e71984c58a9d6040e713e804e43fe60a973b939f42294ef7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d961013edfb1e71984c58a9d6040e713e804e43fe60a973b939f42294ef7e1->enter($__internal_e8d961013edfb1e71984c58a9d6040e713e804e43fe60a973b939f42294ef7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d8a9568109d81d6f07b9f4d425a268df361db98f0be410c46d51b3c25389d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8a9568109d81d6f07b9f4d425a268df361db98f0be410c46d51b3c25389d6f->enter($__internal_9d8a9568109d81d6f07b9f4d425a268df361db98f0be410c46d51b3c25389d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d8a9568109d81d6f07b9f4d425a268df361db98f0be410c46d51b3c25389d6f->leave($__internal_9d8a9568109d81d6f07b9f4d425a268df361db98f0be410c46d51b3c25389d6f_prof);

        
        $__internal_e8d961013edfb1e71984c58a9d6040e713e804e43fe60a973b939f42294ef7e1->leave($__internal_e8d961013edfb1e71984c58a9d6040e713e804e43fe60a973b939f42294ef7e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_483e5154fb21665c2b017947ab1859d1673f5bc4142688b9f3f85affd5e68a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483e5154fb21665c2b017947ab1859d1673f5bc4142688b9f3f85affd5e68a57->enter($__internal_483e5154fb21665c2b017947ab1859d1673f5bc4142688b9f3f85affd5e68a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dce1963090d2be3c15cd9f6de9758ab412ffaddd7b26ae826f68e18aa2f2e496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce1963090d2be3c15cd9f6de9758ab412ffaddd7b26ae826f68e18aa2f2e496->enter($__internal_dce1963090d2be3c15cd9f6de9758ab412ffaddd7b26ae826f68e18aa2f2e496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dce1963090d2be3c15cd9f6de9758ab412ffaddd7b26ae826f68e18aa2f2e496->leave($__internal_dce1963090d2be3c15cd9f6de9758ab412ffaddd7b26ae826f68e18aa2f2e496_prof);

        
        $__internal_483e5154fb21665c2b017947ab1859d1673f5bc4142688b9f3f85affd5e68a57->leave($__internal_483e5154fb21665c2b017947ab1859d1673f5bc4142688b9f3f85affd5e68a57_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
