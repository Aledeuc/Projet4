<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7f8b962c3920827dc15672b9a838e12d91f37db35b765ce1b7ceadb9c824cbb9 extends Twig_Template
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
        $__internal_be6c32a201ce9b55f347692a79cba896873d53f76184536ff6f2e7b4a3878995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6c32a201ce9b55f347692a79cba896873d53f76184536ff6f2e7b4a3878995->enter($__internal_be6c32a201ce9b55f347692a79cba896873d53f76184536ff6f2e7b4a3878995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_15f53aa2f2e74bc92ed4dbb7f37d74aa20f1076ad8dd0ed3b4a1db60b7834fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f53aa2f2e74bc92ed4dbb7f37d74aa20f1076ad8dd0ed3b4a1db60b7834fdb->enter($__internal_15f53aa2f2e74bc92ed4dbb7f37d74aa20f1076ad8dd0ed3b4a1db60b7834fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_be6c32a201ce9b55f347692a79cba896873d53f76184536ff6f2e7b4a3878995->leave($__internal_be6c32a201ce9b55f347692a79cba896873d53f76184536ff6f2e7b4a3878995_prof);

        
        $__internal_15f53aa2f2e74bc92ed4dbb7f37d74aa20f1076ad8dd0ed3b4a1db60b7834fdb->leave($__internal_15f53aa2f2e74bc92ed4dbb7f37d74aa20f1076ad8dd0ed3b4a1db60b7834fdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
