<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c3b28350cf39f46af88566568005e24a1ef332f959a0812fc7c7de23b1f8bf33 extends Twig_Template
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
        $__internal_80a9516c56eb170a2ae1b66fc4cb66af248515ad84c0e36ffc1021d7b892f5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a9516c56eb170a2ae1b66fc4cb66af248515ad84c0e36ffc1021d7b892f5f6->enter($__internal_80a9516c56eb170a2ae1b66fc4cb66af248515ad84c0e36ffc1021d7b892f5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b9c2caca7999b5e78ea4ceae9a1176aa0e9f4ad0c81b82e25f67e393b4f01e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c2caca7999b5e78ea4ceae9a1176aa0e9f4ad0c81b82e25f67e393b4f01e4b->enter($__internal_b9c2caca7999b5e78ea4ceae9a1176aa0e9f4ad0c81b82e25f67e393b4f01e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80a9516c56eb170a2ae1b66fc4cb66af248515ad84c0e36ffc1021d7b892f5f6->leave($__internal_80a9516c56eb170a2ae1b66fc4cb66af248515ad84c0e36ffc1021d7b892f5f6_prof);

        
        $__internal_b9c2caca7999b5e78ea4ceae9a1176aa0e9f4ad0c81b82e25f67e393b4f01e4b->leave($__internal_b9c2caca7999b5e78ea4ceae9a1176aa0e9f4ad0c81b82e25f67e393b4f01e4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
