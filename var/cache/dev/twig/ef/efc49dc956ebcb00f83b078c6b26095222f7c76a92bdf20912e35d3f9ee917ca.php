<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_613d50fd0bdaaaaaf5b68f17c83dd6489c26ef0b3f4ffc51dd7dc2bc26ec1bb9 extends Twig_Template
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
        $__internal_d39a7903c9ebb8fac4e954b7b9272e9c3abf3085dc37c0e7611e9e7f215196b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39a7903c9ebb8fac4e954b7b9272e9c3abf3085dc37c0e7611e9e7f215196b0->enter($__internal_d39a7903c9ebb8fac4e954b7b9272e9c3abf3085dc37c0e7611e9e7f215196b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_bdbe219b461a672023234d97706ab8937306b6c9a0a286dcb388e3257b958c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbe219b461a672023234d97706ab8937306b6c9a0a286dcb388e3257b958c5e->enter($__internal_bdbe219b461a672023234d97706ab8937306b6c9a0a286dcb388e3257b958c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d39a7903c9ebb8fac4e954b7b9272e9c3abf3085dc37c0e7611e9e7f215196b0->leave($__internal_d39a7903c9ebb8fac4e954b7b9272e9c3abf3085dc37c0e7611e9e7f215196b0_prof);

        
        $__internal_bdbe219b461a672023234d97706ab8937306b6c9a0a286dcb388e3257b958c5e->leave($__internal_bdbe219b461a672023234d97706ab8937306b6c9a0a286dcb388e3257b958c5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
