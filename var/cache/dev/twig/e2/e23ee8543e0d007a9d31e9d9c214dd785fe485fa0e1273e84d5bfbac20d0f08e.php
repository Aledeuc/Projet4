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
        $__internal_0e3ecbca6e1b3714bbf39bff2794f7aa9c32aa943ac47dd4ba6a59a278bfb2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3ecbca6e1b3714bbf39bff2794f7aa9c32aa943ac47dd4ba6a59a278bfb2b5->enter($__internal_0e3ecbca6e1b3714bbf39bff2794f7aa9c32aa943ac47dd4ba6a59a278bfb2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_25a769a14580e6b722b311997470ea30546bb67f0122abb309b195470941909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a769a14580e6b722b311997470ea30546bb67f0122abb309b195470941909b->enter($__internal_25a769a14580e6b722b311997470ea30546bb67f0122abb309b195470941909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0e3ecbca6e1b3714bbf39bff2794f7aa9c32aa943ac47dd4ba6a59a278bfb2b5->leave($__internal_0e3ecbca6e1b3714bbf39bff2794f7aa9c32aa943ac47dd4ba6a59a278bfb2b5_prof);

        
        $__internal_25a769a14580e6b722b311997470ea30546bb67f0122abb309b195470941909b->leave($__internal_25a769a14580e6b722b311997470ea30546bb67f0122abb309b195470941909b_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
