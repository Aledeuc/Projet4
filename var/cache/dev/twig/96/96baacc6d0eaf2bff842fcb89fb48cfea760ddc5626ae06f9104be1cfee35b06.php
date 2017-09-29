<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2fa8bdc24db712d8ca359b0108fd6ae5ff036b43cfe87c04879e4a11c415cdd5 extends Twig_Template
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
        $__internal_05b5bbac483ae5ad0901715e14e2112148b2f4ac2fc314d02d63dcf3ec554388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b5bbac483ae5ad0901715e14e2112148b2f4ac2fc314d02d63dcf3ec554388->enter($__internal_05b5bbac483ae5ad0901715e14e2112148b2f4ac2fc314d02d63dcf3ec554388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_033437e706badff61600aa9898db5a220592c14bcc40b5aa2949b9552cbecdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033437e706badff61600aa9898db5a220592c14bcc40b5aa2949b9552cbecdbb->enter($__internal_033437e706badff61600aa9898db5a220592c14bcc40b5aa2949b9552cbecdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_05b5bbac483ae5ad0901715e14e2112148b2f4ac2fc314d02d63dcf3ec554388->leave($__internal_05b5bbac483ae5ad0901715e14e2112148b2f4ac2fc314d02d63dcf3ec554388_prof);

        
        $__internal_033437e706badff61600aa9898db5a220592c14bcc40b5aa2949b9552cbecdbb->leave($__internal_033437e706badff61600aa9898db5a220592c14bcc40b5aa2949b9552cbecdbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
