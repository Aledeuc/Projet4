<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2bb7abb1546d9270dd6a5d03fd809adddcb0c8405c49e5d56d89404f0bf81ab1 extends Twig_Template
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
        $__internal_64d47d664b1a2eb020a839747d7aeb7491d8e44b58aaed8f8843e20443cb5a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d47d664b1a2eb020a839747d7aeb7491d8e44b58aaed8f8843e20443cb5a40->enter($__internal_64d47d664b1a2eb020a839747d7aeb7491d8e44b58aaed8f8843e20443cb5a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0ee7822058c5ea6c2cb713c0bddf8c9b4033c79d3809e598c1ba88daa32eb45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee7822058c5ea6c2cb713c0bddf8c9b4033c79d3809e598c1ba88daa32eb45f->enter($__internal_0ee7822058c5ea6c2cb713c0bddf8c9b4033c79d3809e598c1ba88daa32eb45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_64d47d664b1a2eb020a839747d7aeb7491d8e44b58aaed8f8843e20443cb5a40->leave($__internal_64d47d664b1a2eb020a839747d7aeb7491d8e44b58aaed8f8843e20443cb5a40_prof);

        
        $__internal_0ee7822058c5ea6c2cb713c0bddf8c9b4033c79d3809e598c1ba88daa32eb45f->leave($__internal_0ee7822058c5ea6c2cb713c0bddf8c9b4033c79d3809e598c1ba88daa32eb45f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
