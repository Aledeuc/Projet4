<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9592255c54b949b5fe64b9a7c79852ffdff6c47111741dcf2886570086b28d9b extends Twig_Template
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
        $__internal_6c6e7a8eba10ecf761d39979cfac6661285d05bc01220302218e776f6588c56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6e7a8eba10ecf761d39979cfac6661285d05bc01220302218e776f6588c56e->enter($__internal_6c6e7a8eba10ecf761d39979cfac6661285d05bc01220302218e776f6588c56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5042834b31b878476643793ad2f6e092c7e9e890d69fd467714f46618f35059a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5042834b31b878476643793ad2f6e092c7e9e890d69fd467714f46618f35059a->enter($__internal_5042834b31b878476643793ad2f6e092c7e9e890d69fd467714f46618f35059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6c6e7a8eba10ecf761d39979cfac6661285d05bc01220302218e776f6588c56e->leave($__internal_6c6e7a8eba10ecf761d39979cfac6661285d05bc01220302218e776f6588c56e_prof);

        
        $__internal_5042834b31b878476643793ad2f6e092c7e9e890d69fd467714f46618f35059a->leave($__internal_5042834b31b878476643793ad2f6e092c7e9e890d69fd467714f46618f35059a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
