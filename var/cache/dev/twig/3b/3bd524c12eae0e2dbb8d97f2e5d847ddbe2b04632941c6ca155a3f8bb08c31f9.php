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
        $__internal_e2639323ca9d918302699e60dfce1552ca88aa5e57472801266734b1c1fd81f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2639323ca9d918302699e60dfce1552ca88aa5e57472801266734b1c1fd81f5->enter($__internal_e2639323ca9d918302699e60dfce1552ca88aa5e57472801266734b1c1fd81f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a45471d5c5e2c4b686728901e87e27cd29ad3a862981b567c057f5002055f809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45471d5c5e2c4b686728901e87e27cd29ad3a862981b567c057f5002055f809->enter($__internal_a45471d5c5e2c4b686728901e87e27cd29ad3a862981b567c057f5002055f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e2639323ca9d918302699e60dfce1552ca88aa5e57472801266734b1c1fd81f5->leave($__internal_e2639323ca9d918302699e60dfce1552ca88aa5e57472801266734b1c1fd81f5_prof);

        
        $__internal_a45471d5c5e2c4b686728901e87e27cd29ad3a862981b567c057f5002055f809->leave($__internal_a45471d5c5e2c4b686728901e87e27cd29ad3a862981b567c057f5002055f809_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
