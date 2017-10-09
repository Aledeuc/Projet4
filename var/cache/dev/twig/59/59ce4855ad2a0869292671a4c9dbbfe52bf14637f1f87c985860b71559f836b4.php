<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a747a1f2d2ba9eca43614b2f77b009e21f5a4f385e24bddbb05a6fb274f165e2 extends Twig_Template
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
        $__internal_3f21f81723be44b893c358e28323d837cc73ad421b4b07a3176f607d9d0d7bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f21f81723be44b893c358e28323d837cc73ad421b4b07a3176f607d9d0d7bff->enter($__internal_3f21f81723be44b893c358e28323d837cc73ad421b4b07a3176f607d9d0d7bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2fa9888aa7eef3d8d3df96d4ced753ab1578031e219f1a3b95f3ac55d7f163a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa9888aa7eef3d8d3df96d4ced753ab1578031e219f1a3b95f3ac55d7f163a2->enter($__internal_2fa9888aa7eef3d8d3df96d4ced753ab1578031e219f1a3b95f3ac55d7f163a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3f21f81723be44b893c358e28323d837cc73ad421b4b07a3176f607d9d0d7bff->leave($__internal_3f21f81723be44b893c358e28323d837cc73ad421b4b07a3176f607d9d0d7bff_prof);

        
        $__internal_2fa9888aa7eef3d8d3df96d4ced753ab1578031e219f1a3b95f3ac55d7f163a2->leave($__internal_2fa9888aa7eef3d8d3df96d4ced753ab1578031e219f1a3b95f3ac55d7f163a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
