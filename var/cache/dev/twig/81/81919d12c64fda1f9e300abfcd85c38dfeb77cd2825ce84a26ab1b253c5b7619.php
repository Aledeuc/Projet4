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
        $__internal_1eacb9566aae7616d1a35618cd9d5acd55e8678926cacb195df0bd2474990250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eacb9566aae7616d1a35618cd9d5acd55e8678926cacb195df0bd2474990250->enter($__internal_1eacb9566aae7616d1a35618cd9d5acd55e8678926cacb195df0bd2474990250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3fa576780cf99b977bc98ce46d59cbebcb0242a04c66557dea68715eaf242b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa576780cf99b977bc98ce46d59cbebcb0242a04c66557dea68715eaf242b19->enter($__internal_3fa576780cf99b977bc98ce46d59cbebcb0242a04c66557dea68715eaf242b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1eacb9566aae7616d1a35618cd9d5acd55e8678926cacb195df0bd2474990250->leave($__internal_1eacb9566aae7616d1a35618cd9d5acd55e8678926cacb195df0bd2474990250_prof);

        
        $__internal_3fa576780cf99b977bc98ce46d59cbebcb0242a04c66557dea68715eaf242b19->leave($__internal_3fa576780cf99b977bc98ce46d59cbebcb0242a04c66557dea68715eaf242b19_prof);

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
", "@Framework/Form/number_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
