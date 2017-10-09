<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3ebb2421375fcd32c80291c43ce87d89d2de3f301fcdb77211f4e81d8b78c2e extends Twig_Template
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
        $__internal_7b506304cde65a26ae030c52343976f8b0b1270841e28b38723bfd6c122d8f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b506304cde65a26ae030c52343976f8b0b1270841e28b38723bfd6c122d8f83->enter($__internal_7b506304cde65a26ae030c52343976f8b0b1270841e28b38723bfd6c122d8f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b7c1167878c056b89e61444272f46dd79df7e620a237d587eb67bfba7c541312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c1167878c056b89e61444272f46dd79df7e620a237d587eb67bfba7c541312->enter($__internal_b7c1167878c056b89e61444272f46dd79df7e620a237d587eb67bfba7c541312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7b506304cde65a26ae030c52343976f8b0b1270841e28b38723bfd6c122d8f83->leave($__internal_7b506304cde65a26ae030c52343976f8b0b1270841e28b38723bfd6c122d8f83_prof);

        
        $__internal_b7c1167878c056b89e61444272f46dd79df7e620a237d587eb67bfba7c541312->leave($__internal_b7c1167878c056b89e61444272f46dd79df7e620a237d587eb67bfba7c541312_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
