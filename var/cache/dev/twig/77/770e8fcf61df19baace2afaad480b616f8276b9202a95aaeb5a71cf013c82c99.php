<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_da4c43d023a59762286dc72dafc833edcab8a244f11129da88c392fc849e4c85 extends Twig_Template
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
        $__internal_8da1ab455f7544e56ead53aaf13deb929ac4af3018433edcefe6b4a087c3aad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da1ab455f7544e56ead53aaf13deb929ac4af3018433edcefe6b4a087c3aad6->enter($__internal_8da1ab455f7544e56ead53aaf13deb929ac4af3018433edcefe6b4a087c3aad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bd0caa4ba3d0849f6bf82601314d6c537283a275733561e61a1506efebc60e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0caa4ba3d0849f6bf82601314d6c537283a275733561e61a1506efebc60e89->enter($__internal_bd0caa4ba3d0849f6bf82601314d6c537283a275733561e61a1506efebc60e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8da1ab455f7544e56ead53aaf13deb929ac4af3018433edcefe6b4a087c3aad6->leave($__internal_8da1ab455f7544e56ead53aaf13deb929ac4af3018433edcefe6b4a087c3aad6_prof);

        
        $__internal_bd0caa4ba3d0849f6bf82601314d6c537283a275733561e61a1506efebc60e89->leave($__internal_bd0caa4ba3d0849f6bf82601314d6c537283a275733561e61a1506efebc60e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
