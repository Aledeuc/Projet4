<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4afe3a8476d9437995925ea9253d8875a8c054f6c1a119581248bac76d5a1fbc extends Twig_Template
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
        $__internal_f3e2a42881565d507523ace1fdbba70902d4790b8d576648bf69641cb8a66eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e2a42881565d507523ace1fdbba70902d4790b8d576648bf69641cb8a66eb5->enter($__internal_f3e2a42881565d507523ace1fdbba70902d4790b8d576648bf69641cb8a66eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_386b86a5162ad52cf957e6b4909cd0aed7b1c5ab77da4c630ab24680ef4cce0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386b86a5162ad52cf957e6b4909cd0aed7b1c5ab77da4c630ab24680ef4cce0a->enter($__internal_386b86a5162ad52cf957e6b4909cd0aed7b1c5ab77da4c630ab24680ef4cce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f3e2a42881565d507523ace1fdbba70902d4790b8d576648bf69641cb8a66eb5->leave($__internal_f3e2a42881565d507523ace1fdbba70902d4790b8d576648bf69641cb8a66eb5_prof);

        
        $__internal_386b86a5162ad52cf957e6b4909cd0aed7b1c5ab77da4c630ab24680ef4cce0a->leave($__internal_386b86a5162ad52cf957e6b4909cd0aed7b1c5ab77da4c630ab24680ef4cce0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
