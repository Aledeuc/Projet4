<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a6dee838f60a3ba4808bed528f3e24d81d2ae2c9a18715aa3a97ee45e905b300 extends Twig_Template
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
        $__internal_a4498f12939af0a588803cbcf6775b080947a6ec48d4a40848948040958552a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4498f12939af0a588803cbcf6775b080947a6ec48d4a40848948040958552a5->enter($__internal_a4498f12939af0a588803cbcf6775b080947a6ec48d4a40848948040958552a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e25ed3131df23eac4db040d64fcaa2c3dadc25719fe1444c20d3c703252e1c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25ed3131df23eac4db040d64fcaa2c3dadc25719fe1444c20d3c703252e1c67->enter($__internal_e25ed3131df23eac4db040d64fcaa2c3dadc25719fe1444c20d3c703252e1c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a4498f12939af0a588803cbcf6775b080947a6ec48d4a40848948040958552a5->leave($__internal_a4498f12939af0a588803cbcf6775b080947a6ec48d4a40848948040958552a5_prof);

        
        $__internal_e25ed3131df23eac4db040d64fcaa2c3dadc25719fe1444c20d3c703252e1c67->leave($__internal_e25ed3131df23eac4db040d64fcaa2c3dadc25719fe1444c20d3c703252e1c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
