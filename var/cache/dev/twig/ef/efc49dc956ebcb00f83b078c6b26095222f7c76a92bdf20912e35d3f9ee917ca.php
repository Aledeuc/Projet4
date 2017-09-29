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
        $__internal_fdeaa91f92917b6c497d49245b0cf17453a1499f3e4885d8c38798d67565f946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdeaa91f92917b6c497d49245b0cf17453a1499f3e4885d8c38798d67565f946->enter($__internal_fdeaa91f92917b6c497d49245b0cf17453a1499f3e4885d8c38798d67565f946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1c33a1e46b3054bed7b50cab2e2af96bd251fdb90e2b033bbbd6562219708572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c33a1e46b3054bed7b50cab2e2af96bd251fdb90e2b033bbbd6562219708572->enter($__internal_1c33a1e46b3054bed7b50cab2e2af96bd251fdb90e2b033bbbd6562219708572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_fdeaa91f92917b6c497d49245b0cf17453a1499f3e4885d8c38798d67565f946->leave($__internal_fdeaa91f92917b6c497d49245b0cf17453a1499f3e4885d8c38798d67565f946_prof);

        
        $__internal_1c33a1e46b3054bed7b50cab2e2af96bd251fdb90e2b033bbbd6562219708572->leave($__internal_1c33a1e46b3054bed7b50cab2e2af96bd251fdb90e2b033bbbd6562219708572_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
