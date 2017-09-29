<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8c30815eaab7c224a6e363eab5f76a9d8c85c8b59e3ce2e223c242e9c9cde08 extends Twig_Template
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
        $__internal_8347ceed9ada8e44b213f31e94ab3def296cf289e7041d74c47e52fa341b8661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8347ceed9ada8e44b213f31e94ab3def296cf289e7041d74c47e52fa341b8661->enter($__internal_8347ceed9ada8e44b213f31e94ab3def296cf289e7041d74c47e52fa341b8661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bd49779bd9e047464051c89144685e95a1fc695fdce84007405ac012ebf351aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd49779bd9e047464051c89144685e95a1fc695fdce84007405ac012ebf351aa->enter($__internal_bd49779bd9e047464051c89144685e95a1fc695fdce84007405ac012ebf351aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8347ceed9ada8e44b213f31e94ab3def296cf289e7041d74c47e52fa341b8661->leave($__internal_8347ceed9ada8e44b213f31e94ab3def296cf289e7041d74c47e52fa341b8661_prof);

        
        $__internal_bd49779bd9e047464051c89144685e95a1fc695fdce84007405ac012ebf351aa->leave($__internal_bd49779bd9e047464051c89144685e95a1fc695fdce84007405ac012ebf351aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
