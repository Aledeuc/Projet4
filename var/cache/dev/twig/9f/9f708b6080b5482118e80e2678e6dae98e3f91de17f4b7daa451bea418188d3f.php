<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2016d5baa5b668863f8793e786534582906b4be7dc5fed65f8bcc70c1ce56ecf extends Twig_Template
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
        $__internal_f49ff9d174df95bc008b8699fb2d6e14aeaefb47b483beeb51f73064349054ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49ff9d174df95bc008b8699fb2d6e14aeaefb47b483beeb51f73064349054ba->enter($__internal_f49ff9d174df95bc008b8699fb2d6e14aeaefb47b483beeb51f73064349054ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4c7d6ddd2da93d07bbfc069b80ba6e842336dbf2ff7679eb9fb35a704c5750c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7d6ddd2da93d07bbfc069b80ba6e842336dbf2ff7679eb9fb35a704c5750c2->enter($__internal_4c7d6ddd2da93d07bbfc069b80ba6e842336dbf2ff7679eb9fb35a704c5750c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f49ff9d174df95bc008b8699fb2d6e14aeaefb47b483beeb51f73064349054ba->leave($__internal_f49ff9d174df95bc008b8699fb2d6e14aeaefb47b483beeb51f73064349054ba_prof);

        
        $__internal_4c7d6ddd2da93d07bbfc069b80ba6e842336dbf2ff7679eb9fb35a704c5750c2->leave($__internal_4c7d6ddd2da93d07bbfc069b80ba6e842336dbf2ff7679eb9fb35a704c5750c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
