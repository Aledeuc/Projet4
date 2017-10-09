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
        $__internal_5fd48f626292e2e41c248f601913997b939ecdd9751b2c5fd6c1b9e1f6c6e226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd48f626292e2e41c248f601913997b939ecdd9751b2c5fd6c1b9e1f6c6e226->enter($__internal_5fd48f626292e2e41c248f601913997b939ecdd9751b2c5fd6c1b9e1f6c6e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fb9ac42fa14a478c50890f47c96d8e9bcf995a8f760867294046fd4ac38e6578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9ac42fa14a478c50890f47c96d8e9bcf995a8f760867294046fd4ac38e6578->enter($__internal_fb9ac42fa14a478c50890f47c96d8e9bcf995a8f760867294046fd4ac38e6578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5fd48f626292e2e41c248f601913997b939ecdd9751b2c5fd6c1b9e1f6c6e226->leave($__internal_5fd48f626292e2e41c248f601913997b939ecdd9751b2c5fd6c1b9e1f6c6e226_prof);

        
        $__internal_fb9ac42fa14a478c50890f47c96d8e9bcf995a8f760867294046fd4ac38e6578->leave($__internal_fb9ac42fa14a478c50890f47c96d8e9bcf995a8f760867294046fd4ac38e6578_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
