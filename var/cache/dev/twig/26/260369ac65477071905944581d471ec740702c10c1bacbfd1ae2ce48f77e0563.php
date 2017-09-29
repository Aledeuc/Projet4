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
        $__internal_4f3934856d666d0b0383b10e034f516b712a71d6c964d9f6240d1145b593092c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3934856d666d0b0383b10e034f516b712a71d6c964d9f6240d1145b593092c->enter($__internal_4f3934856d666d0b0383b10e034f516b712a71d6c964d9f6240d1145b593092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8bc0024b52f63089fa7ec9e8dfd93cbd6c95f56160ceb9834d591c23692dbabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc0024b52f63089fa7ec9e8dfd93cbd6c95f56160ceb9834d591c23692dbabb->enter($__internal_8bc0024b52f63089fa7ec9e8dfd93cbd6c95f56160ceb9834d591c23692dbabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4f3934856d666d0b0383b10e034f516b712a71d6c964d9f6240d1145b593092c->leave($__internal_4f3934856d666d0b0383b10e034f516b712a71d6c964d9f6240d1145b593092c_prof);

        
        $__internal_8bc0024b52f63089fa7ec9e8dfd93cbd6c95f56160ceb9834d591c23692dbabb->leave($__internal_8bc0024b52f63089fa7ec9e8dfd93cbd6c95f56160ceb9834d591c23692dbabb_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
