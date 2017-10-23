<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_6d4dcd3aa41ef2575ed19bb047b6527bdc3575e6293af7b299a6e38b6d6e5548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4dcd3aa41ef2575ed19bb047b6527bdc3575e6293af7b299a6e38b6d6e5548->enter($__internal_6d4dcd3aa41ef2575ed19bb047b6527bdc3575e6293af7b299a6e38b6d6e5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1a76b7aa2194253b10d08aa5c8d212c95933d4cb8ee70d599d578d6787442ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a76b7aa2194253b10d08aa5c8d212c95933d4cb8ee70d599d578d6787442ca5->enter($__internal_1a76b7aa2194253b10d08aa5c8d212c95933d4cb8ee70d599d578d6787442ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4dcd3aa41ef2575ed19bb047b6527bdc3575e6293af7b299a6e38b6d6e5548->leave($__internal_6d4dcd3aa41ef2575ed19bb047b6527bdc3575e6293af7b299a6e38b6d6e5548_prof);

        
        $__internal_1a76b7aa2194253b10d08aa5c8d212c95933d4cb8ee70d599d578d6787442ca5->leave($__internal_1a76b7aa2194253b10d08aa5c8d212c95933d4cb8ee70d599d578d6787442ca5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6cfee5a0ea7e47c5a7a0a1927a99267b30faea723bee90520de5e8695e6d6159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfee5a0ea7e47c5a7a0a1927a99267b30faea723bee90520de5e8695e6d6159->enter($__internal_6cfee5a0ea7e47c5a7a0a1927a99267b30faea723bee90520de5e8695e6d6159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_534ac88f041680261b4ed942df299aa82d49fd440f57281f19cab87aeba57034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534ac88f041680261b4ed942df299aa82d49fd440f57281f19cab87aeba57034->enter($__internal_534ac88f041680261b4ed942df299aa82d49fd440f57281f19cab87aeba57034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_534ac88f041680261b4ed942df299aa82d49fd440f57281f19cab87aeba57034->leave($__internal_534ac88f041680261b4ed942df299aa82d49fd440f57281f19cab87aeba57034_prof);

        
        $__internal_6cfee5a0ea7e47c5a7a0a1927a99267b30faea723bee90520de5e8695e6d6159->leave($__internal_6cfee5a0ea7e47c5a7a0a1927a99267b30faea723bee90520de5e8695e6d6159_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdd615f97ab1a1bea57fb646ba69e1a72f85c87f979946cb687820dff7cad5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd615f97ab1a1bea57fb646ba69e1a72f85c87f979946cb687820dff7cad5fb->enter($__internal_bdd615f97ab1a1bea57fb646ba69e1a72f85c87f979946cb687820dff7cad5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_834f28a69c1c97bb3b20ab11d6a4e924b4eb5a4c8f9b12f412842607b4d9d5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834f28a69c1c97bb3b20ab11d6a4e924b4eb5a4c8f9b12f412842607b4d9d5bf->enter($__internal_834f28a69c1c97bb3b20ab11d6a4e924b4eb5a4c8f9b12f412842607b4d9d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_834f28a69c1c97bb3b20ab11d6a4e924b4eb5a4c8f9b12f412842607b4d9d5bf->leave($__internal_834f28a69c1c97bb3b20ab11d6a4e924b4eb5a4c8f9b12f412842607b4d9d5bf_prof);

        
        $__internal_bdd615f97ab1a1bea57fb646ba69e1a72f85c87f979946cb687820dff7cad5fb->leave($__internal_bdd615f97ab1a1bea57fb646ba69e1a72f85c87f979946cb687820dff7cad5fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7774a1de300df4df614e667d233dae4772c9691903daf03737da1a017d50bc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7774a1de300df4df614e667d233dae4772c9691903daf03737da1a017d50bc01->enter($__internal_7774a1de300df4df614e667d233dae4772c9691903daf03737da1a017d50bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_699515bebcc57c393310de58be88585944ca4215c267cca312264ecf6f72c391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699515bebcc57c393310de58be88585944ca4215c267cca312264ecf6f72c391->enter($__internal_699515bebcc57c393310de58be88585944ca4215c267cca312264ecf6f72c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_699515bebcc57c393310de58be88585944ca4215c267cca312264ecf6f72c391->leave($__internal_699515bebcc57c393310de58be88585944ca4215c267cca312264ecf6f72c391_prof);

        
        $__internal_7774a1de300df4df614e667d233dae4772c9691903daf03737da1a017d50bc01->leave($__internal_7774a1de300df4df614e667d233dae4772c9691903daf03737da1a017d50bc01_prof);

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
