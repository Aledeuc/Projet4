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
        $__internal_92dbf5a36660bb5efd5314e7606f88167d32f4e3fe09d5e245ed827431821e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92dbf5a36660bb5efd5314e7606f88167d32f4e3fe09d5e245ed827431821e52->enter($__internal_92dbf5a36660bb5efd5314e7606f88167d32f4e3fe09d5e245ed827431821e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_392a5dd3974a1541f6dcea82301fd79fb7c96c99750b507f1b871573c8069377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392a5dd3974a1541f6dcea82301fd79fb7c96c99750b507f1b871573c8069377->enter($__internal_392a5dd3974a1541f6dcea82301fd79fb7c96c99750b507f1b871573c8069377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_92dbf5a36660bb5efd5314e7606f88167d32f4e3fe09d5e245ed827431821e52->leave($__internal_92dbf5a36660bb5efd5314e7606f88167d32f4e3fe09d5e245ed827431821e52_prof);

        
        $__internal_392a5dd3974a1541f6dcea82301fd79fb7c96c99750b507f1b871573c8069377->leave($__internal_392a5dd3974a1541f6dcea82301fd79fb7c96c99750b507f1b871573c8069377_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
