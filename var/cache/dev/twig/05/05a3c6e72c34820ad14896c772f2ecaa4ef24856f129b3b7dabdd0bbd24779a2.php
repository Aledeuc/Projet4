<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_711796232b6d127c6463711734c980a8f914f18c2cd6f78cc396ae0ee33d4412 extends Twig_Template
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
        $__internal_049711ccafba2c46db35431d360708850562d8086583e1dd65fbc3a5dc50eeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049711ccafba2c46db35431d360708850562d8086583e1dd65fbc3a5dc50eeac->enter($__internal_049711ccafba2c46db35431d360708850562d8086583e1dd65fbc3a5dc50eeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9b82575f6e67fca5908ec0dc462b7b8f5254e3f265e6155344cca1830fa64ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b82575f6e67fca5908ec0dc462b7b8f5254e3f265e6155344cca1830fa64ee8->enter($__internal_9b82575f6e67fca5908ec0dc462b7b8f5254e3f265e6155344cca1830fa64ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_049711ccafba2c46db35431d360708850562d8086583e1dd65fbc3a5dc50eeac->leave($__internal_049711ccafba2c46db35431d360708850562d8086583e1dd65fbc3a5dc50eeac_prof);

        
        $__internal_9b82575f6e67fca5908ec0dc462b7b8f5254e3f265e6155344cca1830fa64ee8->leave($__internal_9b82575f6e67fca5908ec0dc462b7b8f5254e3f265e6155344cca1830fa64ee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
