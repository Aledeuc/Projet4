<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6d8610b2e18f2c7c57b9a08325309e694360b175f7a93276cba821e97abb2969 extends Twig_Template
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
        $__internal_a9ea137cb1339aacf50a6b90de4f54538452c375c11134bb85998c8d8f632abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ea137cb1339aacf50a6b90de4f54538452c375c11134bb85998c8d8f632abe->enter($__internal_a9ea137cb1339aacf50a6b90de4f54538452c375c11134bb85998c8d8f632abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9da3091f1525d414eba7060b91d364303414801277646859527cc9abddf22a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da3091f1525d414eba7060b91d364303414801277646859527cc9abddf22a23->enter($__internal_9da3091f1525d414eba7060b91d364303414801277646859527cc9abddf22a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a9ea137cb1339aacf50a6b90de4f54538452c375c11134bb85998c8d8f632abe->leave($__internal_a9ea137cb1339aacf50a6b90de4f54538452c375c11134bb85998c8d8f632abe_prof);

        
        $__internal_9da3091f1525d414eba7060b91d364303414801277646859527cc9abddf22a23->leave($__internal_9da3091f1525d414eba7060b91d364303414801277646859527cc9abddf22a23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
