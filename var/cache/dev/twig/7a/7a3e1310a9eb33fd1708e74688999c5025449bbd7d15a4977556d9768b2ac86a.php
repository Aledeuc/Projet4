<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b2f1322aecbd6429255ca3351a305b06309771a4c82f5950163391c7ff39c1ca extends Twig_Template
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
        $__internal_2dffb05b9a7beb5564734ce05b3c99b757d80f8a04d67efbc991b2c48cf2bbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dffb05b9a7beb5564734ce05b3c99b757d80f8a04d67efbc991b2c48cf2bbfe->enter($__internal_2dffb05b9a7beb5564734ce05b3c99b757d80f8a04d67efbc991b2c48cf2bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_df07de49c9194bd2c7229f1c4581be86e3e55be00249b4f83edea1f80369fd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df07de49c9194bd2c7229f1c4581be86e3e55be00249b4f83edea1f80369fd80->enter($__internal_df07de49c9194bd2c7229f1c4581be86e3e55be00249b4f83edea1f80369fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2dffb05b9a7beb5564734ce05b3c99b757d80f8a04d67efbc991b2c48cf2bbfe->leave($__internal_2dffb05b9a7beb5564734ce05b3c99b757d80f8a04d67efbc991b2c48cf2bbfe_prof);

        
        $__internal_df07de49c9194bd2c7229f1c4581be86e3e55be00249b4f83edea1f80369fd80->leave($__internal_df07de49c9194bd2c7229f1c4581be86e3e55be00249b4f83edea1f80369fd80_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
