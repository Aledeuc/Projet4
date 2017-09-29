<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f3e10be53e3f534f3f0644320cf3f694a05cff1c8dfb87fbad0201a9e00dfdb5 extends Twig_Template
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
        $__internal_df1af916c1b2dd21e66cf04319653de3cdc815ed047b18d267ea0479fa04bc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1af916c1b2dd21e66cf04319653de3cdc815ed047b18d267ea0479fa04bc4b->enter($__internal_df1af916c1b2dd21e66cf04319653de3cdc815ed047b18d267ea0479fa04bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_447652b22caeff93c04910d4b13239408de688b8d0d2738843ff2b491ecad7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447652b22caeff93c04910d4b13239408de688b8d0d2738843ff2b491ecad7b8->enter($__internal_447652b22caeff93c04910d4b13239408de688b8d0d2738843ff2b491ecad7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_df1af916c1b2dd21e66cf04319653de3cdc815ed047b18d267ea0479fa04bc4b->leave($__internal_df1af916c1b2dd21e66cf04319653de3cdc815ed047b18d267ea0479fa04bc4b_prof);

        
        $__internal_447652b22caeff93c04910d4b13239408de688b8d0d2738843ff2b491ecad7b8->leave($__internal_447652b22caeff93c04910d4b13239408de688b8d0d2738843ff2b491ecad7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
