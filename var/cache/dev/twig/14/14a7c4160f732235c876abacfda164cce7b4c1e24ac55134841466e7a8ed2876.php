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
        $__internal_3b8165a37a8d4c9fe524a032aa8c7e0f49c75a8fb1c9cd5253f8fc96550b2d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8165a37a8d4c9fe524a032aa8c7e0f49c75a8fb1c9cd5253f8fc96550b2d53->enter($__internal_3b8165a37a8d4c9fe524a032aa8c7e0f49c75a8fb1c9cd5253f8fc96550b2d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_254c40b55f6285c61442e3b554c1760fe6b70eed7f07de07d69c3388136836b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254c40b55f6285c61442e3b554c1760fe6b70eed7f07de07d69c3388136836b1->enter($__internal_254c40b55f6285c61442e3b554c1760fe6b70eed7f07de07d69c3388136836b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3b8165a37a8d4c9fe524a032aa8c7e0f49c75a8fb1c9cd5253f8fc96550b2d53->leave($__internal_3b8165a37a8d4c9fe524a032aa8c7e0f49c75a8fb1c9cd5253f8fc96550b2d53_prof);

        
        $__internal_254c40b55f6285c61442e3b554c1760fe6b70eed7f07de07d69c3388136836b1->leave($__internal_254c40b55f6285c61442e3b554c1760fe6b70eed7f07de07d69c3388136836b1_prof);

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
", "@Framework/Form/form_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
