<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f92d07ea7b80a2121134bda850927f3a2c451836f2b7616187c6e071cccc0599 extends Twig_Template
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
        $__internal_9d9d393579932ec78a5c8382f9a2093ed7771fbe052555e02a681e0bc6dd5a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9d393579932ec78a5c8382f9a2093ed7771fbe052555e02a681e0bc6dd5a74->enter($__internal_9d9d393579932ec78a5c8382f9a2093ed7771fbe052555e02a681e0bc6dd5a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b189cf61622449a03f3848ce839ec85b1750290f34c11655f4eb92fe480ddeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b189cf61622449a03f3848ce839ec85b1750290f34c11655f4eb92fe480ddeba->enter($__internal_b189cf61622449a03f3848ce839ec85b1750290f34c11655f4eb92fe480ddeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9d9d393579932ec78a5c8382f9a2093ed7771fbe052555e02a681e0bc6dd5a74->leave($__internal_9d9d393579932ec78a5c8382f9a2093ed7771fbe052555e02a681e0bc6dd5a74_prof);

        
        $__internal_b189cf61622449a03f3848ce839ec85b1750290f34c11655f4eb92fe480ddeba->leave($__internal_b189cf61622449a03f3848ce839ec85b1750290f34c11655f4eb92fe480ddeba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
