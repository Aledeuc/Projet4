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
        $__internal_2ef207f94ee56a49024799cd470eb8389fa3c8262f6a5b671ac5937a5ae37a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef207f94ee56a49024799cd470eb8389fa3c8262f6a5b671ac5937a5ae37a03->enter($__internal_2ef207f94ee56a49024799cd470eb8389fa3c8262f6a5b671ac5937a5ae37a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6825c9a1dcf00f4de186d03fc5627d873cc9d8fd079c5968d6802e075b1de1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6825c9a1dcf00f4de186d03fc5627d873cc9d8fd079c5968d6802e075b1de1a6->enter($__internal_6825c9a1dcf00f4de186d03fc5627d873cc9d8fd079c5968d6802e075b1de1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2ef207f94ee56a49024799cd470eb8389fa3c8262f6a5b671ac5937a5ae37a03->leave($__internal_2ef207f94ee56a49024799cd470eb8389fa3c8262f6a5b671ac5937a5ae37a03_prof);

        
        $__internal_6825c9a1dcf00f4de186d03fc5627d873cc9d8fd079c5968d6802e075b1de1a6->leave($__internal_6825c9a1dcf00f4de186d03fc5627d873cc9d8fd079c5968d6802e075b1de1a6_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
