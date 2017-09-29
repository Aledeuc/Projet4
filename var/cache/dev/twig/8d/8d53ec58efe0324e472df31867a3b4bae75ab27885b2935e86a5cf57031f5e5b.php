<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4036b8255bbcb3852aa039cd37771a97203f2e40e37450eca75f80e2d1ae4156 extends Twig_Template
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
        $__internal_724fc45d6e5c1c4a2aba2c0b6522985b0f08de338042bd2f8a6b98fd4d03e094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724fc45d6e5c1c4a2aba2c0b6522985b0f08de338042bd2f8a6b98fd4d03e094->enter($__internal_724fc45d6e5c1c4a2aba2c0b6522985b0f08de338042bd2f8a6b98fd4d03e094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_97ed5daad85fe3f496ac25d990806329f26f4287a891d9fdc9455855def39c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ed5daad85fe3f496ac25d990806329f26f4287a891d9fdc9455855def39c0e->enter($__internal_97ed5daad85fe3f496ac25d990806329f26f4287a891d9fdc9455855def39c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_724fc45d6e5c1c4a2aba2c0b6522985b0f08de338042bd2f8a6b98fd4d03e094->leave($__internal_724fc45d6e5c1c4a2aba2c0b6522985b0f08de338042bd2f8a6b98fd4d03e094_prof);

        
        $__internal_97ed5daad85fe3f496ac25d990806329f26f4287a891d9fdc9455855def39c0e->leave($__internal_97ed5daad85fe3f496ac25d990806329f26f4287a891d9fdc9455855def39c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
