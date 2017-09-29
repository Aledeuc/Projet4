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
        $__internal_94d171b59676616b78b4ae06f7927ea01da68febf0f1654a48182d51217a2a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d171b59676616b78b4ae06f7927ea01da68febf0f1654a48182d51217a2a3e->enter($__internal_94d171b59676616b78b4ae06f7927ea01da68febf0f1654a48182d51217a2a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_89b97d499a22fad13a8fb2ff225a57d642e124df9c0736314b717d43a9aa8a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b97d499a22fad13a8fb2ff225a57d642e124df9c0736314b717d43a9aa8a19->enter($__internal_89b97d499a22fad13a8fb2ff225a57d642e124df9c0736314b717d43a9aa8a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_94d171b59676616b78b4ae06f7927ea01da68febf0f1654a48182d51217a2a3e->leave($__internal_94d171b59676616b78b4ae06f7927ea01da68febf0f1654a48182d51217a2a3e_prof);

        
        $__internal_89b97d499a22fad13a8fb2ff225a57d642e124df9c0736314b717d43a9aa8a19->leave($__internal_89b97d499a22fad13a8fb2ff225a57d642e124df9c0736314b717d43a9aa8a19_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
