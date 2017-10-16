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
        $__internal_c3ae8f4bd07a126a3174d82c725faf19fb53a4453620a44127751bd77daaa894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ae8f4bd07a126a3174d82c725faf19fb53a4453620a44127751bd77daaa894->enter($__internal_c3ae8f4bd07a126a3174d82c725faf19fb53a4453620a44127751bd77daaa894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e43885b23ae05faf77becd41cbb8d72970805be7cc8fe66c8e029eb08cdba7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e43885b23ae05faf77becd41cbb8d72970805be7cc8fe66c8e029eb08cdba7d->enter($__internal_4e43885b23ae05faf77becd41cbb8d72970805be7cc8fe66c8e029eb08cdba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ae8f4bd07a126a3174d82c725faf19fb53a4453620a44127751bd77daaa894->leave($__internal_c3ae8f4bd07a126a3174d82c725faf19fb53a4453620a44127751bd77daaa894_prof);

        
        $__internal_4e43885b23ae05faf77becd41cbb8d72970805be7cc8fe66c8e029eb08cdba7d->leave($__internal_4e43885b23ae05faf77becd41cbb8d72970805be7cc8fe66c8e029eb08cdba7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c483710da1022ae6e1497ae8a9b11e7232d7241454cb416d701f4ac3d65c4b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c483710da1022ae6e1497ae8a9b11e7232d7241454cb416d701f4ac3d65c4b30->enter($__internal_c483710da1022ae6e1497ae8a9b11e7232d7241454cb416d701f4ac3d65c4b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73655980b7401aa97a7cdd6629039ab18b5c826b403a7dece50693f173279b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73655980b7401aa97a7cdd6629039ab18b5c826b403a7dece50693f173279b96->enter($__internal_73655980b7401aa97a7cdd6629039ab18b5c826b403a7dece50693f173279b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73655980b7401aa97a7cdd6629039ab18b5c826b403a7dece50693f173279b96->leave($__internal_73655980b7401aa97a7cdd6629039ab18b5c826b403a7dece50693f173279b96_prof);

        
        $__internal_c483710da1022ae6e1497ae8a9b11e7232d7241454cb416d701f4ac3d65c4b30->leave($__internal_c483710da1022ae6e1497ae8a9b11e7232d7241454cb416d701f4ac3d65c4b30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cf2a886be1148deae60ec0267d984a752f55aa371d6de6aae35714da6ec20f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf2a886be1148deae60ec0267d984a752f55aa371d6de6aae35714da6ec20f4->enter($__internal_4cf2a886be1148deae60ec0267d984a752f55aa371d6de6aae35714da6ec20f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0013329030deac7a66a71191abe8aa5699a0ba4a43cad43f9db46d8c81b92250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0013329030deac7a66a71191abe8aa5699a0ba4a43cad43f9db46d8c81b92250->enter($__internal_0013329030deac7a66a71191abe8aa5699a0ba4a43cad43f9db46d8c81b92250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0013329030deac7a66a71191abe8aa5699a0ba4a43cad43f9db46d8c81b92250->leave($__internal_0013329030deac7a66a71191abe8aa5699a0ba4a43cad43f9db46d8c81b92250_prof);

        
        $__internal_4cf2a886be1148deae60ec0267d984a752f55aa371d6de6aae35714da6ec20f4->leave($__internal_4cf2a886be1148deae60ec0267d984a752f55aa371d6de6aae35714da6ec20f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02fabb0f5fb86876726cd45baffd85b1b0ec93426edd51b87eda5369f7f6f16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fabb0f5fb86876726cd45baffd85b1b0ec93426edd51b87eda5369f7f6f16f->enter($__internal_02fabb0f5fb86876726cd45baffd85b1b0ec93426edd51b87eda5369f7f6f16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f22b7c75e17610f763e43413bc88c76915092724c91a516d5a8bc36b33e7040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f22b7c75e17610f763e43413bc88c76915092724c91a516d5a8bc36b33e7040->enter($__internal_1f22b7c75e17610f763e43413bc88c76915092724c91a516d5a8bc36b33e7040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f22b7c75e17610f763e43413bc88c76915092724c91a516d5a8bc36b33e7040->leave($__internal_1f22b7c75e17610f763e43413bc88c76915092724c91a516d5a8bc36b33e7040_prof);

        
        $__internal_02fabb0f5fb86876726cd45baffd85b1b0ec93426edd51b87eda5369f7f6f16f->leave($__internal_02fabb0f5fb86876726cd45baffd85b1b0ec93426edd51b87eda5369f7f6f16f_prof);

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
