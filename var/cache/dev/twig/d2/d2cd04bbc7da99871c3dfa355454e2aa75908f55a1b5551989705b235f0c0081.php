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
        $__internal_d51e5a8dd2e6a9aea79f8e60135549a2124ec42fdc648f73f3b37571c3b7ace4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51e5a8dd2e6a9aea79f8e60135549a2124ec42fdc648f73f3b37571c3b7ace4->enter($__internal_d51e5a8dd2e6a9aea79f8e60135549a2124ec42fdc648f73f3b37571c3b7ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_163f77a807706e613b244b1a27d7b96e58ad780df75d27f0909dfe7569db9b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163f77a807706e613b244b1a27d7b96e58ad780df75d27f0909dfe7569db9b54->enter($__internal_163f77a807706e613b244b1a27d7b96e58ad780df75d27f0909dfe7569db9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d51e5a8dd2e6a9aea79f8e60135549a2124ec42fdc648f73f3b37571c3b7ace4->leave($__internal_d51e5a8dd2e6a9aea79f8e60135549a2124ec42fdc648f73f3b37571c3b7ace4_prof);

        
        $__internal_163f77a807706e613b244b1a27d7b96e58ad780df75d27f0909dfe7569db9b54->leave($__internal_163f77a807706e613b244b1a27d7b96e58ad780df75d27f0909dfe7569db9b54_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
