<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8ea217db59889de9444b02b601785febc4781444531f7c6ec36736d5004d8570 extends Twig_Template
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
        $__internal_32d78da756cacb2d510236011c3d4b60899376c82e2ad825060cf002fd62476d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d78da756cacb2d510236011c3d4b60899376c82e2ad825060cf002fd62476d->enter($__internal_32d78da756cacb2d510236011c3d4b60899376c82e2ad825060cf002fd62476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1edf7e6b0df7ba026b09962f99a775b338dd69de91205ba928390ae2c8cb22d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edf7e6b0df7ba026b09962f99a775b338dd69de91205ba928390ae2c8cb22d2->enter($__internal_1edf7e6b0df7ba026b09962f99a775b338dd69de91205ba928390ae2c8cb22d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_32d78da756cacb2d510236011c3d4b60899376c82e2ad825060cf002fd62476d->leave($__internal_32d78da756cacb2d510236011c3d4b60899376c82e2ad825060cf002fd62476d_prof);

        
        $__internal_1edf7e6b0df7ba026b09962f99a775b338dd69de91205ba928390ae2c8cb22d2->leave($__internal_1edf7e6b0df7ba026b09962f99a775b338dd69de91205ba928390ae2c8cb22d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
