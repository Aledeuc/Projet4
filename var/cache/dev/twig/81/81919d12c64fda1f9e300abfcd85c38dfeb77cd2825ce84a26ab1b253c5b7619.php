<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_825e7e4a419d7dcee237c5f4be694183c93205ce0266877dc2a728f67071f7eb extends Twig_Template
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
        $__internal_a14e17add8f662976a7d0b243adf0daa9bf9f267cb36ad3309d93c4e328d66af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14e17add8f662976a7d0b243adf0daa9bf9f267cb36ad3309d93c4e328d66af->enter($__internal_a14e17add8f662976a7d0b243adf0daa9bf9f267cb36ad3309d93c4e328d66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_66f6c5e743e1427af4e743c12cce10240cd07509fbbad07cdae8c59081f07501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f6c5e743e1427af4e743c12cce10240cd07509fbbad07cdae8c59081f07501->enter($__internal_66f6c5e743e1427af4e743c12cce10240cd07509fbbad07cdae8c59081f07501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a14e17add8f662976a7d0b243adf0daa9bf9f267cb36ad3309d93c4e328d66af->leave($__internal_a14e17add8f662976a7d0b243adf0daa9bf9f267cb36ad3309d93c4e328d66af_prof);

        
        $__internal_66f6c5e743e1427af4e743c12cce10240cd07509fbbad07cdae8c59081f07501->leave($__internal_66f6c5e743e1427af4e743c12cce10240cd07509fbbad07cdae8c59081f07501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
