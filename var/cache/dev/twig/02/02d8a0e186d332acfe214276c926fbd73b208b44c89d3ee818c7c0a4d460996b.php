<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_d7c9c9861af20c5549708ec3b213c26d29e4c95723dd6ee50033bb1b88bc2fc6 extends Twig_Template
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
        $__internal_4f7eea414b56dd7e499e1eaf0d53b9928fddde617f3052d2d4dc753dafbeddc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7eea414b56dd7e499e1eaf0d53b9928fddde617f3052d2d4dc753dafbeddc1->enter($__internal_4f7eea414b56dd7e499e1eaf0d53b9928fddde617f3052d2d4dc753dafbeddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_c056ae2a972ae2ddfeb8b08be1044eb1e6de1c6aa6eb7e90bd6bdf843b770d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c056ae2a972ae2ddfeb8b08be1044eb1e6de1c6aa6eb7e90bd6bdf843b770d19->enter($__internal_c056ae2a972ae2ddfeb8b08be1044eb1e6de1c6aa6eb7e90bd6bdf843b770d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4f7eea414b56dd7e499e1eaf0d53b9928fddde617f3052d2d4dc753dafbeddc1->leave($__internal_4f7eea414b56dd7e499e1eaf0d53b9928fddde617f3052d2d4dc753dafbeddc1_prof);

        
        $__internal_c056ae2a972ae2ddfeb8b08be1044eb1e6de1c6aa6eb7e90bd6bdf843b770d19->leave($__internal_c056ae2a972ae2ddfeb8b08be1044eb1e6de1c6aa6eb7e90bd6bdf843b770d19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
