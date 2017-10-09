<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_145787740f096b964321e7847dc49dbeb31f081145f0306dfaf54a773cc825fd extends Twig_Template
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
        $__internal_c12c70fcf23cc74323fae82ac853875d31737cebd2c5b29250f341454dc76beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12c70fcf23cc74323fae82ac853875d31737cebd2c5b29250f341454dc76beb->enter($__internal_c12c70fcf23cc74323fae82ac853875d31737cebd2c5b29250f341454dc76beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_99eea42bea7e461d04ed2f283d5c978b08eac6322078b3050661cfe22da7dcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99eea42bea7e461d04ed2f283d5c978b08eac6322078b3050661cfe22da7dcc0->enter($__internal_99eea42bea7e461d04ed2f283d5c978b08eac6322078b3050661cfe22da7dcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c12c70fcf23cc74323fae82ac853875d31737cebd2c5b29250f341454dc76beb->leave($__internal_c12c70fcf23cc74323fae82ac853875d31737cebd2c5b29250f341454dc76beb_prof);

        
        $__internal_99eea42bea7e461d04ed2f283d5c978b08eac6322078b3050661cfe22da7dcc0->leave($__internal_99eea42bea7e461d04ed2f283d5c978b08eac6322078b3050661cfe22da7dcc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
