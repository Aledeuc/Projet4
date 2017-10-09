<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3518a302d69a599c69ee72da56faecbafea88aa501d75bc2432b67afda8a2681 extends Twig_Template
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
        $__internal_c767949d1c06bbc5d2c50ce20b45c11d1e58138df6b90e80d40478c041a64c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c767949d1c06bbc5d2c50ce20b45c11d1e58138df6b90e80d40478c041a64c1b->enter($__internal_c767949d1c06bbc5d2c50ce20b45c11d1e58138df6b90e80d40478c041a64c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f11071bdce9de1f7c7ad156c23facdcadfe1fb3b941fa4a8b5bb88a205a9b80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11071bdce9de1f7c7ad156c23facdcadfe1fb3b941fa4a8b5bb88a205a9b80b->enter($__internal_f11071bdce9de1f7c7ad156c23facdcadfe1fb3b941fa4a8b5bb88a205a9b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c767949d1c06bbc5d2c50ce20b45c11d1e58138df6b90e80d40478c041a64c1b->leave($__internal_c767949d1c06bbc5d2c50ce20b45c11d1e58138df6b90e80d40478c041a64c1b_prof);

        
        $__internal_f11071bdce9de1f7c7ad156c23facdcadfe1fb3b941fa4a8b5bb88a205a9b80b->leave($__internal_f11071bdce9de1f7c7ad156c23facdcadfe1fb3b941fa4a8b5bb88a205a9b80b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
