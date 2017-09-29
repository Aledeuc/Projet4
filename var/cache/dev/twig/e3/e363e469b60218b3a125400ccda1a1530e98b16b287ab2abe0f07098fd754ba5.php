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
        $__internal_72ea599832c55d5413520275a1422004c8ca20d946cedf8c145d87ab6b284d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ea599832c55d5413520275a1422004c8ca20d946cedf8c145d87ab6b284d87->enter($__internal_72ea599832c55d5413520275a1422004c8ca20d946cedf8c145d87ab6b284d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_537199a7bc96da3b16fb383364da349492d1c649d92583946e6cb25047db7f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537199a7bc96da3b16fb383364da349492d1c649d92583946e6cb25047db7f3b->enter($__internal_537199a7bc96da3b16fb383364da349492d1c649d92583946e6cb25047db7f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_72ea599832c55d5413520275a1422004c8ca20d946cedf8c145d87ab6b284d87->leave($__internal_72ea599832c55d5413520275a1422004c8ca20d946cedf8c145d87ab6b284d87_prof);

        
        $__internal_537199a7bc96da3b16fb383364da349492d1c649d92583946e6cb25047db7f3b->leave($__internal_537199a7bc96da3b16fb383364da349492d1c649d92583946e6cb25047db7f3b_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
