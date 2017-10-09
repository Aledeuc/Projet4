<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d424fec088ab131c9c4ffe1df8693b865fb2544a04e25db9f93a0485398ec859 extends Twig_Template
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
        $__internal_5675cc08beaa6d7c4483d3e0f38a0488962f9bf7e1a04d7e997e88d77dba6aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5675cc08beaa6d7c4483d3e0f38a0488962f9bf7e1a04d7e997e88d77dba6aed->enter($__internal_5675cc08beaa6d7c4483d3e0f38a0488962f9bf7e1a04d7e997e88d77dba6aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a862604a999c5a9b48b564efd431734b11955a818463769a8b15c4343f38750e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a862604a999c5a9b48b564efd431734b11955a818463769a8b15c4343f38750e->enter($__internal_a862604a999c5a9b48b564efd431734b11955a818463769a8b15c4343f38750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5675cc08beaa6d7c4483d3e0f38a0488962f9bf7e1a04d7e997e88d77dba6aed->leave($__internal_5675cc08beaa6d7c4483d3e0f38a0488962f9bf7e1a04d7e997e88d77dba6aed_prof);

        
        $__internal_a862604a999c5a9b48b564efd431734b11955a818463769a8b15c4343f38750e->leave($__internal_a862604a999c5a9b48b564efd431734b11955a818463769a8b15c4343f38750e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
