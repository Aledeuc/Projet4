<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2bb7abb1546d9270dd6a5d03fd809adddcb0c8405c49e5d56d89404f0bf81ab1 extends Twig_Template
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
        $__internal_3864146abde3fba8b8f6cae1d63a7f01345f62a23bb9dbc6131329db6128d989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3864146abde3fba8b8f6cae1d63a7f01345f62a23bb9dbc6131329db6128d989->enter($__internal_3864146abde3fba8b8f6cae1d63a7f01345f62a23bb9dbc6131329db6128d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_010fcd0ab9359f89d4253d5d76d8434f9d61fca3f2880221d54f776605ab8916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010fcd0ab9359f89d4253d5d76d8434f9d61fca3f2880221d54f776605ab8916->enter($__internal_010fcd0ab9359f89d4253d5d76d8434f9d61fca3f2880221d54f776605ab8916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3864146abde3fba8b8f6cae1d63a7f01345f62a23bb9dbc6131329db6128d989->leave($__internal_3864146abde3fba8b8f6cae1d63a7f01345f62a23bb9dbc6131329db6128d989_prof);

        
        $__internal_010fcd0ab9359f89d4253d5d76d8434f9d61fca3f2880221d54f776605ab8916->leave($__internal_010fcd0ab9359f89d4253d5d76d8434f9d61fca3f2880221d54f776605ab8916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
