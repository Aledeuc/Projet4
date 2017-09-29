<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d10afe707571e86edb5f1d37773e57b82b7c6d11e4de573702acd19f20a80b2c extends Twig_Template
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
        $__internal_1dd80112435ab64ea36272e8b0ba63570ebfd33eca6a8bbf7b0fb9dbeaf24a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd80112435ab64ea36272e8b0ba63570ebfd33eca6a8bbf7b0fb9dbeaf24a78->enter($__internal_1dd80112435ab64ea36272e8b0ba63570ebfd33eca6a8bbf7b0fb9dbeaf24a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6937b7554285226e941ebbd1a26cbe0a5a208d6d3ef2d7db50d919dd9bc941f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6937b7554285226e941ebbd1a26cbe0a5a208d6d3ef2d7db50d919dd9bc941f8->enter($__internal_6937b7554285226e941ebbd1a26cbe0a5a208d6d3ef2d7db50d919dd9bc941f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1dd80112435ab64ea36272e8b0ba63570ebfd33eca6a8bbf7b0fb9dbeaf24a78->leave($__internal_1dd80112435ab64ea36272e8b0ba63570ebfd33eca6a8bbf7b0fb9dbeaf24a78_prof);

        
        $__internal_6937b7554285226e941ebbd1a26cbe0a5a208d6d3ef2d7db50d919dd9bc941f8->leave($__internal_6937b7554285226e941ebbd1a26cbe0a5a208d6d3ef2d7db50d919dd9bc941f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
