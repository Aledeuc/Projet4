<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_711796232b6d127c6463711734c980a8f914f18c2cd6f78cc396ae0ee33d4412 extends Twig_Template
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
        $__internal_a51a3bd5df3f35efd7f9d6507fe243492377b6f4d6708ad6bee35af324a2b1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51a3bd5df3f35efd7f9d6507fe243492377b6f4d6708ad6bee35af324a2b1b5->enter($__internal_a51a3bd5df3f35efd7f9d6507fe243492377b6f4d6708ad6bee35af324a2b1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d7b1f505bf258010b78c8a8e94370ad615dcaf40a302084e55d30a8dbc005fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b1f505bf258010b78c8a8e94370ad615dcaf40a302084e55d30a8dbc005fd1->enter($__internal_d7b1f505bf258010b78c8a8e94370ad615dcaf40a302084e55d30a8dbc005fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a51a3bd5df3f35efd7f9d6507fe243492377b6f4d6708ad6bee35af324a2b1b5->leave($__internal_a51a3bd5df3f35efd7f9d6507fe243492377b6f4d6708ad6bee35af324a2b1b5_prof);

        
        $__internal_d7b1f505bf258010b78c8a8e94370ad615dcaf40a302084e55d30a8dbc005fd1->leave($__internal_d7b1f505bf258010b78c8a8e94370ad615dcaf40a302084e55d30a8dbc005fd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
