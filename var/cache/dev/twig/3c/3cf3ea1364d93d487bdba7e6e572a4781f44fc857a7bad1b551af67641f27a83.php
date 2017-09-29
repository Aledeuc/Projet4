<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6d8610b2e18f2c7c57b9a08325309e694360b175f7a93276cba821e97abb2969 extends Twig_Template
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
        $__internal_8b23404d91e53518ee6fdf6f247fd0860c2ceeedf0abe4a792da3b00a3b3ce62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b23404d91e53518ee6fdf6f247fd0860c2ceeedf0abe4a792da3b00a3b3ce62->enter($__internal_8b23404d91e53518ee6fdf6f247fd0860c2ceeedf0abe4a792da3b00a3b3ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_70df7c9ac489d74eed4fe0c25771370df40508f2de390941624421a8d891dc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70df7c9ac489d74eed4fe0c25771370df40508f2de390941624421a8d891dc0b->enter($__internal_70df7c9ac489d74eed4fe0c25771370df40508f2de390941624421a8d891dc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8b23404d91e53518ee6fdf6f247fd0860c2ceeedf0abe4a792da3b00a3b3ce62->leave($__internal_8b23404d91e53518ee6fdf6f247fd0860c2ceeedf0abe4a792da3b00a3b3ce62_prof);

        
        $__internal_70df7c9ac489d74eed4fe0c25771370df40508f2de390941624421a8d891dc0b->leave($__internal_70df7c9ac489d74eed4fe0c25771370df40508f2de390941624421a8d891dc0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
