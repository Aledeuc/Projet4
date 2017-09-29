<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9e6eb5a50bdf6e46de95a2d8e526c098f321fc94be2f929817c18318d1a51ef0 extends Twig_Template
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
        $__internal_ab424676432dc72945565f2351ce6c699420ea0ddc558dea6c7ed40239df5faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab424676432dc72945565f2351ce6c699420ea0ddc558dea6c7ed40239df5faf->enter($__internal_ab424676432dc72945565f2351ce6c699420ea0ddc558dea6c7ed40239df5faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b8dcaaeef2aef7149ec34c5ee9179be1d7da6954ab9ed4040c73d3b93f36c07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dcaaeef2aef7149ec34c5ee9179be1d7da6954ab9ed4040c73d3b93f36c07e->enter($__internal_b8dcaaeef2aef7149ec34c5ee9179be1d7da6954ab9ed4040c73d3b93f36c07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ab424676432dc72945565f2351ce6c699420ea0ddc558dea6c7ed40239df5faf->leave($__internal_ab424676432dc72945565f2351ce6c699420ea0ddc558dea6c7ed40239df5faf_prof);

        
        $__internal_b8dcaaeef2aef7149ec34c5ee9179be1d7da6954ab9ed4040c73d3b93f36c07e->leave($__internal_b8dcaaeef2aef7149ec34c5ee9179be1d7da6954ab9ed4040c73d3b93f36c07e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
