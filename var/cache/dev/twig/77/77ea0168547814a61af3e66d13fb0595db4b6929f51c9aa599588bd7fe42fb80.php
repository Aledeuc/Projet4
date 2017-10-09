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
        $__internal_2e798ee116925f0490ffa9e86901469e4ce4e834ca9d72691529a814416442ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e798ee116925f0490ffa9e86901469e4ce4e834ca9d72691529a814416442ae->enter($__internal_2e798ee116925f0490ffa9e86901469e4ce4e834ca9d72691529a814416442ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd621dfea4512384b89bcff5a01c88123d8d5faf58c06eb067ffc634de215fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd621dfea4512384b89bcff5a01c88123d8d5faf58c06eb067ffc634de215fab->enter($__internal_fd621dfea4512384b89bcff5a01c88123d8d5faf58c06eb067ffc634de215fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e798ee116925f0490ffa9e86901469e4ce4e834ca9d72691529a814416442ae->leave($__internal_2e798ee116925f0490ffa9e86901469e4ce4e834ca9d72691529a814416442ae_prof);

        
        $__internal_fd621dfea4512384b89bcff5a01c88123d8d5faf58c06eb067ffc634de215fab->leave($__internal_fd621dfea4512384b89bcff5a01c88123d8d5faf58c06eb067ffc634de215fab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c094c27e75ee15cb23cd4bd417cc1fc7943096388552693e6d27018aab4de8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c094c27e75ee15cb23cd4bd417cc1fc7943096388552693e6d27018aab4de8b->enter($__internal_1c094c27e75ee15cb23cd4bd417cc1fc7943096388552693e6d27018aab4de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34a7bd3ce2045b95c0d030fffe57a641c0f9786304779e4917115d731aefa919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a7bd3ce2045b95c0d030fffe57a641c0f9786304779e4917115d731aefa919->enter($__internal_34a7bd3ce2045b95c0d030fffe57a641c0f9786304779e4917115d731aefa919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34a7bd3ce2045b95c0d030fffe57a641c0f9786304779e4917115d731aefa919->leave($__internal_34a7bd3ce2045b95c0d030fffe57a641c0f9786304779e4917115d731aefa919_prof);

        
        $__internal_1c094c27e75ee15cb23cd4bd417cc1fc7943096388552693e6d27018aab4de8b->leave($__internal_1c094c27e75ee15cb23cd4bd417cc1fc7943096388552693e6d27018aab4de8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3f936a8030ee78f75bf3f780389013e0b7cd3aa067c341af59cfd2c8425bcab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f936a8030ee78f75bf3f780389013e0b7cd3aa067c341af59cfd2c8425bcab->enter($__internal_b3f936a8030ee78f75bf3f780389013e0b7cd3aa067c341af59cfd2c8425bcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_027fffe05e4f6ac40eb0368b8491e7bcc952afa584561c82cfeb71e1c3493612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027fffe05e4f6ac40eb0368b8491e7bcc952afa584561c82cfeb71e1c3493612->enter($__internal_027fffe05e4f6ac40eb0368b8491e7bcc952afa584561c82cfeb71e1c3493612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_027fffe05e4f6ac40eb0368b8491e7bcc952afa584561c82cfeb71e1c3493612->leave($__internal_027fffe05e4f6ac40eb0368b8491e7bcc952afa584561c82cfeb71e1c3493612_prof);

        
        $__internal_b3f936a8030ee78f75bf3f780389013e0b7cd3aa067c341af59cfd2c8425bcab->leave($__internal_b3f936a8030ee78f75bf3f780389013e0b7cd3aa067c341af59cfd2c8425bcab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27cd1e9fb9c59be8bdaa228336d35484dd0144c904663f214909e24112937e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cd1e9fb9c59be8bdaa228336d35484dd0144c904663f214909e24112937e64->enter($__internal_27cd1e9fb9c59be8bdaa228336d35484dd0144c904663f214909e24112937e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35d4898045d5a27721593111a741727e57d00325cb4f988fe8c246ace7b6f33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d4898045d5a27721593111a741727e57d00325cb4f988fe8c246ace7b6f33b->enter($__internal_35d4898045d5a27721593111a741727e57d00325cb4f988fe8c246ace7b6f33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35d4898045d5a27721593111a741727e57d00325cb4f988fe8c246ace7b6f33b->leave($__internal_35d4898045d5a27721593111a741727e57d00325cb4f988fe8c246ace7b6f33b_prof);

        
        $__internal_27cd1e9fb9c59be8bdaa228336d35484dd0144c904663f214909e24112937e64->leave($__internal_27cd1e9fb9c59be8bdaa228336d35484dd0144c904663f214909e24112937e64_prof);

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
