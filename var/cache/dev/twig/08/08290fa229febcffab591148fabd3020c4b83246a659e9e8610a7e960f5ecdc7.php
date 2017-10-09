<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e7664091dbeb026860c20aaa0dd04446347e603959e83c7d8371d7d614c35627 extends Twig_Template
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
        $__internal_592789232ad34adbdf57b70eb1bed8a9452ddbe9b16173d3fd3948b221649ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592789232ad34adbdf57b70eb1bed8a9452ddbe9b16173d3fd3948b221649ade->enter($__internal_592789232ad34adbdf57b70eb1bed8a9452ddbe9b16173d3fd3948b221649ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2bf65e2e0e09a8f1d7d673a0745ce5b951aae69c195b9dea92feebdfeed8a30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf65e2e0e09a8f1d7d673a0745ce5b951aae69c195b9dea92feebdfeed8a30c->enter($__internal_2bf65e2e0e09a8f1d7d673a0745ce5b951aae69c195b9dea92feebdfeed8a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_592789232ad34adbdf57b70eb1bed8a9452ddbe9b16173d3fd3948b221649ade->leave($__internal_592789232ad34adbdf57b70eb1bed8a9452ddbe9b16173d3fd3948b221649ade_prof);

        
        $__internal_2bf65e2e0e09a8f1d7d673a0745ce5b951aae69c195b9dea92feebdfeed8a30c->leave($__internal_2bf65e2e0e09a8f1d7d673a0745ce5b951aae69c195b9dea92feebdfeed8a30c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
