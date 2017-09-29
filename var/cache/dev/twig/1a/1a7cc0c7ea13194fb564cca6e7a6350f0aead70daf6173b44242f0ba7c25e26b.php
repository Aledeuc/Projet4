<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7f4868530587e3718b720ee2e78f882b7c74f027bbfcedc46af603cc218e0454 extends Twig_Template
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
        $__internal_3adde656d62d2d7606c0d8ef6335cebc0efff802a4f2f27e083d86a019716cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adde656d62d2d7606c0d8ef6335cebc0efff802a4f2f27e083d86a019716cfb->enter($__internal_3adde656d62d2d7606c0d8ef6335cebc0efff802a4f2f27e083d86a019716cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9bc790781d7b135ee2ab4feefb3a20a8e545e1bc5b2ddbb1c6742e8592d44e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc790781d7b135ee2ab4feefb3a20a8e545e1bc5b2ddbb1c6742e8592d44e02->enter($__internal_9bc790781d7b135ee2ab4feefb3a20a8e545e1bc5b2ddbb1c6742e8592d44e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3adde656d62d2d7606c0d8ef6335cebc0efff802a4f2f27e083d86a019716cfb->leave($__internal_3adde656d62d2d7606c0d8ef6335cebc0efff802a4f2f27e083d86a019716cfb_prof);

        
        $__internal_9bc790781d7b135ee2ab4feefb3a20a8e545e1bc5b2ddbb1c6742e8592d44e02->leave($__internal_9bc790781d7b135ee2ab4feefb3a20a8e545e1bc5b2ddbb1c6742e8592d44e02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
