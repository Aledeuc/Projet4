<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8c30815eaab7c224a6e363eab5f76a9d8c85c8b59e3ce2e223c242e9c9cde08 extends Twig_Template
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
        $__internal_9d3e5d90f26ae48852f405445f423a69e794322bd226f0897531a1ce1614aaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3e5d90f26ae48852f405445f423a69e794322bd226f0897531a1ce1614aaad->enter($__internal_9d3e5d90f26ae48852f405445f423a69e794322bd226f0897531a1ce1614aaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c692732fe170e261f6998ec2624a76628ea14bd542e512c6d8738246330fb3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c692732fe170e261f6998ec2624a76628ea14bd542e512c6d8738246330fb3ef->enter($__internal_c692732fe170e261f6998ec2624a76628ea14bd542e512c6d8738246330fb3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9d3e5d90f26ae48852f405445f423a69e794322bd226f0897531a1ce1614aaad->leave($__internal_9d3e5d90f26ae48852f405445f423a69e794322bd226f0897531a1ce1614aaad_prof);

        
        $__internal_c692732fe170e261f6998ec2624a76628ea14bd542e512c6d8738246330fb3ef->leave($__internal_c692732fe170e261f6998ec2624a76628ea14bd542e512c6d8738246330fb3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
