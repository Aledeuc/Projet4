<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c3747d0f78a0b3876f44470863f13e8ee3ac0326231f44a7b359330407d8127 extends Twig_Template
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
        $__internal_1f915b59c259b73aa9f2805e8b4a6e31f2df0d30cdd73519b88418043d9fd348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f915b59c259b73aa9f2805e8b4a6e31f2df0d30cdd73519b88418043d9fd348->enter($__internal_1f915b59c259b73aa9f2805e8b4a6e31f2df0d30cdd73519b88418043d9fd348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4d159db6892e5744c1c90bcb0326bf55c69134a67033988e5077add76eeb64f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d159db6892e5744c1c90bcb0326bf55c69134a67033988e5077add76eeb64f1->enter($__internal_4d159db6892e5744c1c90bcb0326bf55c69134a67033988e5077add76eeb64f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1f915b59c259b73aa9f2805e8b4a6e31f2df0d30cdd73519b88418043d9fd348->leave($__internal_1f915b59c259b73aa9f2805e8b4a6e31f2df0d30cdd73519b88418043d9fd348_prof);

        
        $__internal_4d159db6892e5744c1c90bcb0326bf55c69134a67033988e5077add76eeb64f1->leave($__internal_4d159db6892e5744c1c90bcb0326bf55c69134a67033988e5077add76eeb64f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
