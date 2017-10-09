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
        $__internal_877a232fcc5da889836c9a59124e6745b20491f3197ff7852b0686a94da38e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877a232fcc5da889836c9a59124e6745b20491f3197ff7852b0686a94da38e16->enter($__internal_877a232fcc5da889836c9a59124e6745b20491f3197ff7852b0686a94da38e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d1a798fdf1b1f0dd62fc50c2f686f0277e5d984090571ffdd437d574d9c9f2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a798fdf1b1f0dd62fc50c2f686f0277e5d984090571ffdd437d574d9c9f2b5->enter($__internal_d1a798fdf1b1f0dd62fc50c2f686f0277e5d984090571ffdd437d574d9c9f2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_877a232fcc5da889836c9a59124e6745b20491f3197ff7852b0686a94da38e16->leave($__internal_877a232fcc5da889836c9a59124e6745b20491f3197ff7852b0686a94da38e16_prof);

        
        $__internal_d1a798fdf1b1f0dd62fc50c2f686f0277e5d984090571ffdd437d574d9c9f2b5->leave($__internal_d1a798fdf1b1f0dd62fc50c2f686f0277e5d984090571ffdd437d574d9c9f2b5_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
