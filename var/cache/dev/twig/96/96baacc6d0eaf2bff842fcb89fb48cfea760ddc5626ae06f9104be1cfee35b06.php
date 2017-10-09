<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2fa8bdc24db712d8ca359b0108fd6ae5ff036b43cfe87c04879e4a11c415cdd5 extends Twig_Template
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
        $__internal_87152216a2e776776e659a2ab02bc0acec2f7ed919cc4a866c8e2c900622ab96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87152216a2e776776e659a2ab02bc0acec2f7ed919cc4a866c8e2c900622ab96->enter($__internal_87152216a2e776776e659a2ab02bc0acec2f7ed919cc4a866c8e2c900622ab96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ae86f4c2c822df422999f9ca479abc660ea3ef52e361a7c7c489d1517803b58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae86f4c2c822df422999f9ca479abc660ea3ef52e361a7c7c489d1517803b58e->enter($__internal_ae86f4c2c822df422999f9ca479abc660ea3ef52e361a7c7c489d1517803b58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_87152216a2e776776e659a2ab02bc0acec2f7ed919cc4a866c8e2c900622ab96->leave($__internal_87152216a2e776776e659a2ab02bc0acec2f7ed919cc4a866c8e2c900622ab96_prof);

        
        $__internal_ae86f4c2c822df422999f9ca479abc660ea3ef52e361a7c7c489d1517803b58e->leave($__internal_ae86f4c2c822df422999f9ca479abc660ea3ef52e361a7c7c489d1517803b58e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
