<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e57b0d23bd4b7c80038834e44b39fda26de50dd4f3fd8503cd20a6eb288e42dd extends Twig_Template
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
        $__internal_7ebaca8026243da0753409196e60457042ab04ac9ee9f4b96a6f3954a55e7f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebaca8026243da0753409196e60457042ab04ac9ee9f4b96a6f3954a55e7f63->enter($__internal_7ebaca8026243da0753409196e60457042ab04ac9ee9f4b96a6f3954a55e7f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7b5e6f70e65ba929b9139e51ae18abf0ecf50ad80ba337d57f796a89902958e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5e6f70e65ba929b9139e51ae18abf0ecf50ad80ba337d57f796a89902958e4->enter($__internal_7b5e6f70e65ba929b9139e51ae18abf0ecf50ad80ba337d57f796a89902958e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7ebaca8026243da0753409196e60457042ab04ac9ee9f4b96a6f3954a55e7f63->leave($__internal_7ebaca8026243da0753409196e60457042ab04ac9ee9f4b96a6f3954a55e7f63_prof);

        
        $__internal_7b5e6f70e65ba929b9139e51ae18abf0ecf50ad80ba337d57f796a89902958e4->leave($__internal_7b5e6f70e65ba929b9139e51ae18abf0ecf50ad80ba337d57f796a89902958e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
