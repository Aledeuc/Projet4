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
        $__internal_d7adf16e33b74d3cd1b5bf69a2c2350762a4f39ca6edefc95101aaf4975374b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7adf16e33b74d3cd1b5bf69a2c2350762a4f39ca6edefc95101aaf4975374b6->enter($__internal_d7adf16e33b74d3cd1b5bf69a2c2350762a4f39ca6edefc95101aaf4975374b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_de9c9c6422c012e0e84f071170e5b341fd109c757660b964997f5f5d803309a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9c9c6422c012e0e84f071170e5b341fd109c757660b964997f5f5d803309a6->enter($__internal_de9c9c6422c012e0e84f071170e5b341fd109c757660b964997f5f5d803309a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d7adf16e33b74d3cd1b5bf69a2c2350762a4f39ca6edefc95101aaf4975374b6->leave($__internal_d7adf16e33b74d3cd1b5bf69a2c2350762a4f39ca6edefc95101aaf4975374b6_prof);

        
        $__internal_de9c9c6422c012e0e84f071170e5b341fd109c757660b964997f5f5d803309a6->leave($__internal_de9c9c6422c012e0e84f071170e5b341fd109c757660b964997f5f5d803309a6_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
