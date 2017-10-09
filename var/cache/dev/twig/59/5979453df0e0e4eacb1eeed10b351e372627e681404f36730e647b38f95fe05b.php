<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6e09a6297135c0a55321d3fab65db5c734a9504d3c23d2cdcf6ff7a46cc67abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69cc2f3d4841e8d68371b3a266583166b18079ff2a0032ce00f5977792880b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69cc2f3d4841e8d68371b3a266583166b18079ff2a0032ce00f5977792880b9->enter($__internal_d69cc2f3d4841e8d68371b3a266583166b18079ff2a0032ce00f5977792880b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7b982346d1ccb4f0bef9e402442f8e9c9baaad59bbba239bdde3ab02f7d84a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b982346d1ccb4f0bef9e402442f8e9c9baaad59bbba239bdde3ab02f7d84a06->enter($__internal_7b982346d1ccb4f0bef9e402442f8e9c9baaad59bbba239bdde3ab02f7d84a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d69cc2f3d4841e8d68371b3a266583166b18079ff2a0032ce00f5977792880b9->leave($__internal_d69cc2f3d4841e8d68371b3a266583166b18079ff2a0032ce00f5977792880b9_prof);

        
        $__internal_7b982346d1ccb4f0bef9e402442f8e9c9baaad59bbba239bdde3ab02f7d84a06->leave($__internal_7b982346d1ccb4f0bef9e402442f8e9c9baaad59bbba239bdde3ab02f7d84a06_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_78165999fd6f400c99636c3df2432278a1dd9a68fc1ff9eb3d725a11c79709f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78165999fd6f400c99636c3df2432278a1dd9a68fc1ff9eb3d725a11c79709f5->enter($__internal_78165999fd6f400c99636c3df2432278a1dd9a68fc1ff9eb3d725a11c79709f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00bdeb69da6db26a4a30680b143432019948aea9a56c72085111062b1ea1f2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bdeb69da6db26a4a30680b143432019948aea9a56c72085111062b1ea1f2c6->enter($__internal_00bdeb69da6db26a4a30680b143432019948aea9a56c72085111062b1ea1f2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_00bdeb69da6db26a4a30680b143432019948aea9a56c72085111062b1ea1f2c6->leave($__internal_00bdeb69da6db26a4a30680b143432019948aea9a56c72085111062b1ea1f2c6_prof);

        
        $__internal_78165999fd6f400c99636c3df2432278a1dd9a68fc1ff9eb3d725a11c79709f5->leave($__internal_78165999fd6f400c99636c3df2432278a1dd9a68fc1ff9eb3d725a11c79709f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
