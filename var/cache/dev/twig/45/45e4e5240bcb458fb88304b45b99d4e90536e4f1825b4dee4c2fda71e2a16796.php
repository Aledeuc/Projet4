<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_445ff1f5bc4f4d58b47b58125845336b439c21c62bf92490af0cda8c7133a284 extends Twig_Template
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
        $__internal_ef9a22a80e299b51637d1b332b8b22ab3615f0cb9d6915b42e34f90dfe5e471f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9a22a80e299b51637d1b332b8b22ab3615f0cb9d6915b42e34f90dfe5e471f->enter($__internal_ef9a22a80e299b51637d1b332b8b22ab3615f0cb9d6915b42e34f90dfe5e471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_869bd829616a69fd229c6550b48e5b0b1ecaffa66c3d32ddc888ddfe031833c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869bd829616a69fd229c6550b48e5b0b1ecaffa66c3d32ddc888ddfe031833c8->enter($__internal_869bd829616a69fd229c6550b48e5b0b1ecaffa66c3d32ddc888ddfe031833c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ef9a22a80e299b51637d1b332b8b22ab3615f0cb9d6915b42e34f90dfe5e471f->leave($__internal_ef9a22a80e299b51637d1b332b8b22ab3615f0cb9d6915b42e34f90dfe5e471f_prof);

        
        $__internal_869bd829616a69fd229c6550b48e5b0b1ecaffa66c3d32ddc888ddfe031833c8->leave($__internal_869bd829616a69fd229c6550b48e5b0b1ecaffa66c3d32ddc888ddfe031833c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
