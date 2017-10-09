<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d4b70286e1bd89c0e1b275f1b75575aa003d9b1c54b0ff5ed3ebb7e692e7cf2 extends Twig_Template
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
        $__internal_6b09bb29899571c9ad0f0de20987eba07f5b22306022e99e7465f7a5de1e4cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b09bb29899571c9ad0f0de20987eba07f5b22306022e99e7465f7a5de1e4cb4->enter($__internal_6b09bb29899571c9ad0f0de20987eba07f5b22306022e99e7465f7a5de1e4cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cf7ef5cb2cb11d665bac4c2aacf0369f8d20433ca3b96932f6c07ce8b34ebcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7ef5cb2cb11d665bac4c2aacf0369f8d20433ca3b96932f6c07ce8b34ebcc8->enter($__internal_cf7ef5cb2cb11d665bac4c2aacf0369f8d20433ca3b96932f6c07ce8b34ebcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6b09bb29899571c9ad0f0de20987eba07f5b22306022e99e7465f7a5de1e4cb4->leave($__internal_6b09bb29899571c9ad0f0de20987eba07f5b22306022e99e7465f7a5de1e4cb4_prof);

        
        $__internal_cf7ef5cb2cb11d665bac4c2aacf0369f8d20433ca3b96932f6c07ce8b34ebcc8->leave($__internal_cf7ef5cb2cb11d665bac4c2aacf0369f8d20433ca3b96932f6c07ce8b34ebcc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
