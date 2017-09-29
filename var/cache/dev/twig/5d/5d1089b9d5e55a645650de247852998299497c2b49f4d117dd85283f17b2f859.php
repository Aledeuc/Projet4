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
        $__internal_b4c9446a68bd91674e341c413b62b2bdec1c60a4b9cf2318957e87ae01294354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c9446a68bd91674e341c413b62b2bdec1c60a4b9cf2318957e87ae01294354->enter($__internal_b4c9446a68bd91674e341c413b62b2bdec1c60a4b9cf2318957e87ae01294354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d29ea15b6d7adbe38cdc5c6fe4e897509b7567b64b0910f03f29ac9a3c790763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29ea15b6d7adbe38cdc5c6fe4e897509b7567b64b0910f03f29ac9a3c790763->enter($__internal_d29ea15b6d7adbe38cdc5c6fe4e897509b7567b64b0910f03f29ac9a3c790763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b4c9446a68bd91674e341c413b62b2bdec1c60a4b9cf2318957e87ae01294354->leave($__internal_b4c9446a68bd91674e341c413b62b2bdec1c60a4b9cf2318957e87ae01294354_prof);

        
        $__internal_d29ea15b6d7adbe38cdc5c6fe4e897509b7567b64b0910f03f29ac9a3c790763->leave($__internal_d29ea15b6d7adbe38cdc5c6fe4e897509b7567b64b0910f03f29ac9a3c790763_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
