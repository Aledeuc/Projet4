<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_56afe13ae580fbc2898ca97af581e7e50d360bacbf280a80c2664910df593b19 extends Twig_Template
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
        $__internal_45314802d43774cdbb8034ccfe52a31e62d3fca9fc35f01d350c23be96c87a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45314802d43774cdbb8034ccfe52a31e62d3fca9fc35f01d350c23be96c87a8d->enter($__internal_45314802d43774cdbb8034ccfe52a31e62d3fca9fc35f01d350c23be96c87a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d2c8edb8ce2a6b4513930a28cf44aa71fc8fc18021e4e310e732be8b6dc7ab0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c8edb8ce2a6b4513930a28cf44aa71fc8fc18021e4e310e732be8b6dc7ab0b->enter($__internal_d2c8edb8ce2a6b4513930a28cf44aa71fc8fc18021e4e310e732be8b6dc7ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_45314802d43774cdbb8034ccfe52a31e62d3fca9fc35f01d350c23be96c87a8d->leave($__internal_45314802d43774cdbb8034ccfe52a31e62d3fca9fc35f01d350c23be96c87a8d_prof);

        
        $__internal_d2c8edb8ce2a6b4513930a28cf44aa71fc8fc18021e4e310e732be8b6dc7ab0b->leave($__internal_d2c8edb8ce2a6b4513930a28cf44aa71fc8fc18021e4e310e732be8b6dc7ab0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
