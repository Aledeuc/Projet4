<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_445ff1f5bc4f4d58b47b58125845336b439c21c62bf92490af0cda8c7133a284 extends Twig_Template
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
        $__internal_14ca289af6e271626a45988ba7472c5a05fe6031c821ba5d498f4a2009878673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ca289af6e271626a45988ba7472c5a05fe6031c821ba5d498f4a2009878673->enter($__internal_14ca289af6e271626a45988ba7472c5a05fe6031c821ba5d498f4a2009878673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e831bc56f670e81b2daa0f589edc2ccfd2ffb1e434bb6f6330231199f912d186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e831bc56f670e81b2daa0f589edc2ccfd2ffb1e434bb6f6330231199f912d186->enter($__internal_e831bc56f670e81b2daa0f589edc2ccfd2ffb1e434bb6f6330231199f912d186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_14ca289af6e271626a45988ba7472c5a05fe6031c821ba5d498f4a2009878673->leave($__internal_14ca289af6e271626a45988ba7472c5a05fe6031c821ba5d498f4a2009878673_prof);

        
        $__internal_e831bc56f670e81b2daa0f589edc2ccfd2ffb1e434bb6f6330231199f912d186->leave($__internal_e831bc56f670e81b2daa0f589edc2ccfd2ffb1e434bb6f6330231199f912d186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
