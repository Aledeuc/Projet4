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
        $__internal_9180a311345bd110386abfd5d2e27ce27af4a891385547a5b4b00b67576c4504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9180a311345bd110386abfd5d2e27ce27af4a891385547a5b4b00b67576c4504->enter($__internal_9180a311345bd110386abfd5d2e27ce27af4a891385547a5b4b00b67576c4504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_dd3beb7e78dfe1c23237c878d107ade34929a6fc70b9bdbae9bec22086fe549e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3beb7e78dfe1c23237c878d107ade34929a6fc70b9bdbae9bec22086fe549e->enter($__internal_dd3beb7e78dfe1c23237c878d107ade34929a6fc70b9bdbae9bec22086fe549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9180a311345bd110386abfd5d2e27ce27af4a891385547a5b4b00b67576c4504->leave($__internal_9180a311345bd110386abfd5d2e27ce27af4a891385547a5b4b00b67576c4504_prof);

        
        $__internal_dd3beb7e78dfe1c23237c878d107ade34929a6fc70b9bdbae9bec22086fe549e->leave($__internal_dd3beb7e78dfe1c23237c878d107ade34929a6fc70b9bdbae9bec22086fe549e_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
