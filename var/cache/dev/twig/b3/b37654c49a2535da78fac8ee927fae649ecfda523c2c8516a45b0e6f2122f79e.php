<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2e98727b5b5402b7173e43ff1b648192df43e40b925811c1972eb0b92fab03e5 extends Twig_Template
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
        $__internal_0bdc8523a34014dd00dccf2dc09159114a6c9787e3203a58094b45716b42d2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdc8523a34014dd00dccf2dc09159114a6c9787e3203a58094b45716b42d2be->enter($__internal_0bdc8523a34014dd00dccf2dc09159114a6c9787e3203a58094b45716b42d2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_adce227e6cb3298d807aa53af383050cd2eb61af1569a7a2d02a5f31caae2564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adce227e6cb3298d807aa53af383050cd2eb61af1569a7a2d02a5f31caae2564->enter($__internal_adce227e6cb3298d807aa53af383050cd2eb61af1569a7a2d02a5f31caae2564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0bdc8523a34014dd00dccf2dc09159114a6c9787e3203a58094b45716b42d2be->leave($__internal_0bdc8523a34014dd00dccf2dc09159114a6c9787e3203a58094b45716b42d2be_prof);

        
        $__internal_adce227e6cb3298d807aa53af383050cd2eb61af1569a7a2d02a5f31caae2564->leave($__internal_adce227e6cb3298d807aa53af383050cd2eb61af1569a7a2d02a5f31caae2564_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
