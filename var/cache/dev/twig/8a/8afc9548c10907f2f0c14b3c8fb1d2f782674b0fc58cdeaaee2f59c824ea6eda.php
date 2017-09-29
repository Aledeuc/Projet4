<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e06f5f9fe4b090731b559b8f1100c086850027a4d69ccf4b9f8bbaa1d48163d7 extends Twig_Template
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
        $__internal_5f7fc48a67a90c4fb362c4f3a0707c5d299bf596124f630a6a611d5ecf39b633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7fc48a67a90c4fb362c4f3a0707c5d299bf596124f630a6a611d5ecf39b633->enter($__internal_5f7fc48a67a90c4fb362c4f3a0707c5d299bf596124f630a6a611d5ecf39b633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c861d0ab8387cdd55fe37ce0f5c8f7ffb9570623417c2696602eb3f2c04fb8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c861d0ab8387cdd55fe37ce0f5c8f7ffb9570623417c2696602eb3f2c04fb8eb->enter($__internal_c861d0ab8387cdd55fe37ce0f5c8f7ffb9570623417c2696602eb3f2c04fb8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5f7fc48a67a90c4fb362c4f3a0707c5d299bf596124f630a6a611d5ecf39b633->leave($__internal_5f7fc48a67a90c4fb362c4f3a0707c5d299bf596124f630a6a611d5ecf39b633_prof);

        
        $__internal_c861d0ab8387cdd55fe37ce0f5c8f7ffb9570623417c2696602eb3f2c04fb8eb->leave($__internal_c861d0ab8387cdd55fe37ce0f5c8f7ffb9570623417c2696602eb3f2c04fb8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
