<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_29f3549959682e7498a5b92da7295e059c954036732673b0b9d7c36aa45aaf34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f3549959682e7498a5b92da7295e059c954036732673b0b9d7c36aa45aaf34->enter($__internal_29f3549959682e7498a5b92da7295e059c954036732673b0b9d7c36aa45aaf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b506dde9387e8acc133d4abeb97cc90b8efa65d941d7447f7c63b3308ea0c363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b506dde9387e8acc133d4abeb97cc90b8efa65d941d7447f7c63b3308ea0c363->enter($__internal_b506dde9387e8acc133d4abeb97cc90b8efa65d941d7447f7c63b3308ea0c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f3549959682e7498a5b92da7295e059c954036732673b0b9d7c36aa45aaf34->leave($__internal_29f3549959682e7498a5b92da7295e059c954036732673b0b9d7c36aa45aaf34_prof);

        
        $__internal_b506dde9387e8acc133d4abeb97cc90b8efa65d941d7447f7c63b3308ea0c363->leave($__internal_b506dde9387e8acc133d4abeb97cc90b8efa65d941d7447f7c63b3308ea0c363_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbbac9c3811a8e3c24e996dad30a7e384399eb240bfc4fe4bf3577c9fdd0971f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbac9c3811a8e3c24e996dad30a7e384399eb240bfc4fe4bf3577c9fdd0971f->enter($__internal_cbbac9c3811a8e3c24e996dad30a7e384399eb240bfc4fe4bf3577c9fdd0971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee9b9be5b1e42d22c86efcf5c5d59987009acea6dca7939bacc0085968e85f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9b9be5b1e42d22c86efcf5c5d59987009acea6dca7939bacc0085968e85f2c->enter($__internal_ee9b9be5b1e42d22c86efcf5c5d59987009acea6dca7939bacc0085968e85f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ee9b9be5b1e42d22c86efcf5c5d59987009acea6dca7939bacc0085968e85f2c->leave($__internal_ee9b9be5b1e42d22c86efcf5c5d59987009acea6dca7939bacc0085968e85f2c_prof);

        
        $__internal_cbbac9c3811a8e3c24e996dad30a7e384399eb240bfc4fe4bf3577c9fdd0971f->leave($__internal_cbbac9c3811a8e3c24e996dad30a7e384399eb240bfc4fe4bf3577c9fdd0971f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96a5886a7fef0e127fb83c673d43b2096663ea1663e88876b5ea8a67690125e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a5886a7fef0e127fb83c673d43b2096663ea1663e88876b5ea8a67690125e3->enter($__internal_96a5886a7fef0e127fb83c673d43b2096663ea1663e88876b5ea8a67690125e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f608f92faa3c3f0ab712d5042a37fbde6f877b8465ee6bbe1a6a297aa8c4cbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f608f92faa3c3f0ab712d5042a37fbde6f877b8465ee6bbe1a6a297aa8c4cbac->enter($__internal_f608f92faa3c3f0ab712d5042a37fbde6f877b8465ee6bbe1a6a297aa8c4cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f608f92faa3c3f0ab712d5042a37fbde6f877b8465ee6bbe1a6a297aa8c4cbac->leave($__internal_f608f92faa3c3f0ab712d5042a37fbde6f877b8465ee6bbe1a6a297aa8c4cbac_prof);

        
        $__internal_96a5886a7fef0e127fb83c673d43b2096663ea1663e88876b5ea8a67690125e3->leave($__internal_96a5886a7fef0e127fb83c673d43b2096663ea1663e88876b5ea8a67690125e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a302fe0fb681b0abdc2d7c575942ec2a9460ca501f7d8e7996c8aa3cd299703a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a302fe0fb681b0abdc2d7c575942ec2a9460ca501f7d8e7996c8aa3cd299703a->enter($__internal_a302fe0fb681b0abdc2d7c575942ec2a9460ca501f7d8e7996c8aa3cd299703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a1c132b373b98866f3d5f5a1b204bd5e84fe47c3be166421e24e6a62ab8c7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1c132b373b98866f3d5f5a1b204bd5e84fe47c3be166421e24e6a62ab8c7e6->enter($__internal_4a1c132b373b98866f3d5f5a1b204bd5e84fe47c3be166421e24e6a62ab8c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4a1c132b373b98866f3d5f5a1b204bd5e84fe47c3be166421e24e6a62ab8c7e6->leave($__internal_4a1c132b373b98866f3d5f5a1b204bd5e84fe47c3be166421e24e6a62ab8c7e6_prof);

        
        $__internal_a302fe0fb681b0abdc2d7c575942ec2a9460ca501f7d8e7996c8aa3cd299703a->leave($__internal_a302fe0fb681b0abdc2d7c575942ec2a9460ca501f7d8e7996c8aa3cd299703a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
