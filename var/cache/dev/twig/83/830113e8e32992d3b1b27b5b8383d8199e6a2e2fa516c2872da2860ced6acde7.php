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
        $__internal_3e4a8dab662bf324f7acb175639df165a27b832a5c8fc0426f7af444a1bcce94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4a8dab662bf324f7acb175639df165a27b832a5c8fc0426f7af444a1bcce94->enter($__internal_3e4a8dab662bf324f7acb175639df165a27b832a5c8fc0426f7af444a1bcce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a6f54088489d2c355c358effa68c4c726a91e4e97fcbc62b1043e539e37bc14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f54088489d2c355c358effa68c4c726a91e4e97fcbc62b1043e539e37bc14f->enter($__internal_a6f54088489d2c355c358effa68c4c726a91e4e97fcbc62b1043e539e37bc14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3e4a8dab662bf324f7acb175639df165a27b832a5c8fc0426f7af444a1bcce94->leave($__internal_3e4a8dab662bf324f7acb175639df165a27b832a5c8fc0426f7af444a1bcce94_prof);

        
        $__internal_a6f54088489d2c355c358effa68c4c726a91e4e97fcbc62b1043e539e37bc14f->leave($__internal_a6f54088489d2c355c358effa68c4c726a91e4e97fcbc62b1043e539e37bc14f_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
