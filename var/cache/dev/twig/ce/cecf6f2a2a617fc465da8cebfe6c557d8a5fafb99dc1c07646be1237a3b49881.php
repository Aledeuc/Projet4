<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_96245b682387af822c8cd6d28e014d0390f47fa6b680c1c6c33962840df7abb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a53d7044f0239ad8746a7c29ce3e0ab124547f52241eabc2a51fa65bd1bf3289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53d7044f0239ad8746a7c29ce3e0ab124547f52241eabc2a51fa65bd1bf3289->enter($__internal_a53d7044f0239ad8746a7c29ce3e0ab124547f52241eabc2a51fa65bd1bf3289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_15c705d6bbf2b98be5db3a561a3c63ee398eb878f4ad43381c11438b9df81eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c705d6bbf2b98be5db3a561a3c63ee398eb878f4ad43381c11438b9df81eeb->enter($__internal_15c705d6bbf2b98be5db3a561a3c63ee398eb878f4ad43381c11438b9df81eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a53d7044f0239ad8746a7c29ce3e0ab124547f52241eabc2a51fa65bd1bf3289->leave($__internal_a53d7044f0239ad8746a7c29ce3e0ab124547f52241eabc2a51fa65bd1bf3289_prof);

        
        $__internal_15c705d6bbf2b98be5db3a561a3c63ee398eb878f4ad43381c11438b9df81eeb->leave($__internal_15c705d6bbf2b98be5db3a561a3c63ee398eb878f4ad43381c11438b9df81eeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
