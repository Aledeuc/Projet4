<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e55cd7179f2e9da0d3cd6d1d0633435d10dbb9ae3af7e8c4e27cf08020a70ac7 extends Twig_Template
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
        $__internal_9de75696211990d51d773cf633d7e6f2b5b16ca83306d734ecde10a66d664978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de75696211990d51d773cf633d7e6f2b5b16ca83306d734ecde10a66d664978->enter($__internal_9de75696211990d51d773cf633d7e6f2b5b16ca83306d734ecde10a66d664978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b9ef745db3fae7f8ca164c715fbb8d461e74ea6c4dc38872dd06c647c64a85c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ef745db3fae7f8ca164c715fbb8d461e74ea6c4dc38872dd06c647c64a85c7->enter($__internal_b9ef745db3fae7f8ca164c715fbb8d461e74ea6c4dc38872dd06c647c64a85c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9de75696211990d51d773cf633d7e6f2b5b16ca83306d734ecde10a66d664978->leave($__internal_9de75696211990d51d773cf633d7e6f2b5b16ca83306d734ecde10a66d664978_prof);

        
        $__internal_b9ef745db3fae7f8ca164c715fbb8d461e74ea6c4dc38872dd06c647c64a85c7->leave($__internal_b9ef745db3fae7f8ca164c715fbb8d461e74ea6c4dc38872dd06c647c64a85c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
