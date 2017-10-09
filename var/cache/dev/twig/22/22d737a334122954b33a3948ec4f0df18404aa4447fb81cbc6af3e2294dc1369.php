<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1e92d4efe8b680ff8ff6e8d0d9d85129fae31e454e8e47ee009fb32a95c0666d extends Twig_Template
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
        $__internal_efac3cf838632643e3ee711c3862b6111ab628f463e062c51d38e915d7c61679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efac3cf838632643e3ee711c3862b6111ab628f463e062c51d38e915d7c61679->enter($__internal_efac3cf838632643e3ee711c3862b6111ab628f463e062c51d38e915d7c61679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_32c8db34141c378507e08242527a0fbd39cab52d374820c442c443ff57afb749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c8db34141c378507e08242527a0fbd39cab52d374820c442c443ff57afb749->enter($__internal_32c8db34141c378507e08242527a0fbd39cab52d374820c442c443ff57afb749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_efac3cf838632643e3ee711c3862b6111ab628f463e062c51d38e915d7c61679->leave($__internal_efac3cf838632643e3ee711c3862b6111ab628f463e062c51d38e915d7c61679_prof);

        
        $__internal_32c8db34141c378507e08242527a0fbd39cab52d374820c442c443ff57afb749->leave($__internal_32c8db34141c378507e08242527a0fbd39cab52d374820c442c443ff57afb749_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
