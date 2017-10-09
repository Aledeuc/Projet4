<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3da9e57f763202da27290915cf5bc201b325bbd0994b417052f1e50bab71383c extends Twig_Template
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
        $__internal_f289a17ded1d0c56fce50dac27c94ac161241480195d234203da311897f3eced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f289a17ded1d0c56fce50dac27c94ac161241480195d234203da311897f3eced->enter($__internal_f289a17ded1d0c56fce50dac27c94ac161241480195d234203da311897f3eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_40d4ba07740e3bad35c9b361ee3607fb9a6458aa58ce1ccf74bd98b8309b0421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d4ba07740e3bad35c9b361ee3607fb9a6458aa58ce1ccf74bd98b8309b0421->enter($__internal_40d4ba07740e3bad35c9b361ee3607fb9a6458aa58ce1ccf74bd98b8309b0421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f289a17ded1d0c56fce50dac27c94ac161241480195d234203da311897f3eced->leave($__internal_f289a17ded1d0c56fce50dac27c94ac161241480195d234203da311897f3eced_prof);

        
        $__internal_40d4ba07740e3bad35c9b361ee3607fb9a6458aa58ce1ccf74bd98b8309b0421->leave($__internal_40d4ba07740e3bad35c9b361ee3607fb9a6458aa58ce1ccf74bd98b8309b0421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
