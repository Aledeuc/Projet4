<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_da4c43d023a59762286dc72dafc833edcab8a244f11129da88c392fc849e4c85 extends Twig_Template
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
        $__internal_91ffe4735dfa7916af0e07b4b558150e43bbb581493ddb8157090d04c3914a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ffe4735dfa7916af0e07b4b558150e43bbb581493ddb8157090d04c3914a54->enter($__internal_91ffe4735dfa7916af0e07b4b558150e43bbb581493ddb8157090d04c3914a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2aaf6cfe457aec21dd089dc39db50b8fbd502d16b99e78b94c9f2808f9304b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaf6cfe457aec21dd089dc39db50b8fbd502d16b99e78b94c9f2808f9304b22->enter($__internal_2aaf6cfe457aec21dd089dc39db50b8fbd502d16b99e78b94c9f2808f9304b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_91ffe4735dfa7916af0e07b4b558150e43bbb581493ddb8157090d04c3914a54->leave($__internal_91ffe4735dfa7916af0e07b4b558150e43bbb581493ddb8157090d04c3914a54_prof);

        
        $__internal_2aaf6cfe457aec21dd089dc39db50b8fbd502d16b99e78b94c9f2808f9304b22->leave($__internal_2aaf6cfe457aec21dd089dc39db50b8fbd502d16b99e78b94c9f2808f9304b22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
