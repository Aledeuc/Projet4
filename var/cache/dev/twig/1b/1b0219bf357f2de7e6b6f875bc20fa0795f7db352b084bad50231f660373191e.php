<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_da5eff4de9b1cfd5151dfb498d18b960ac1ebe4b30d82a989f9136fbd2ac1746 extends Twig_Template
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
        $__internal_a8dc1e2df13421dc80b3e2bace4c349f38928a126b7eb9fa8c39bd5b325b8afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8dc1e2df13421dc80b3e2bace4c349f38928a126b7eb9fa8c39bd5b325b8afb->enter($__internal_a8dc1e2df13421dc80b3e2bace4c349f38928a126b7eb9fa8c39bd5b325b8afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_147e3b7148eeb60c1303c00677d704179544b5c8befba379f4c434033c7cf008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147e3b7148eeb60c1303c00677d704179544b5c8befba379f4c434033c7cf008->enter($__internal_147e3b7148eeb60c1303c00677d704179544b5c8befba379f4c434033c7cf008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a8dc1e2df13421dc80b3e2bace4c349f38928a126b7eb9fa8c39bd5b325b8afb->leave($__internal_a8dc1e2df13421dc80b3e2bace4c349f38928a126b7eb9fa8c39bd5b325b8afb_prof);

        
        $__internal_147e3b7148eeb60c1303c00677d704179544b5c8befba379f4c434033c7cf008->leave($__internal_147e3b7148eeb60c1303c00677d704179544b5c8befba379f4c434033c7cf008_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
