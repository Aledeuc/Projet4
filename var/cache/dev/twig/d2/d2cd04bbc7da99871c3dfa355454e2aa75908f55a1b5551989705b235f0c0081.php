<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_22ea8ca5930624cab12f978184cbaf73f8482cbbdd4121d184a57f71890b8058 extends Twig_Template
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
        $__internal_6322e0c6007f817e2db9a64061a425acd22244f9b088e84f3fceb5de7a88c1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6322e0c6007f817e2db9a64061a425acd22244f9b088e84f3fceb5de7a88c1b3->enter($__internal_6322e0c6007f817e2db9a64061a425acd22244f9b088e84f3fceb5de7a88c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_fc2af817b53d3205bdb1cf4b8733f07bb29863aef976d6dad9780aee7bfa87b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2af817b53d3205bdb1cf4b8733f07bb29863aef976d6dad9780aee7bfa87b5->enter($__internal_fc2af817b53d3205bdb1cf4b8733f07bb29863aef976d6dad9780aee7bfa87b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6322e0c6007f817e2db9a64061a425acd22244f9b088e84f3fceb5de7a88c1b3->leave($__internal_6322e0c6007f817e2db9a64061a425acd22244f9b088e84f3fceb5de7a88c1b3_prof);

        
        $__internal_fc2af817b53d3205bdb1cf4b8733f07bb29863aef976d6dad9780aee7bfa87b5->leave($__internal_fc2af817b53d3205bdb1cf4b8733f07bb29863aef976d6dad9780aee7bfa87b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
