<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_994dea83eb4e4e32aca28ddbe1ed57616722915e067b075924a296a4ecd22849 extends Twig_Template
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
        $__internal_8a5774ce516af13eb56c4056d04e42ac79a0cf41286b377dc1ce3994e2a6a95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5774ce516af13eb56c4056d04e42ac79a0cf41286b377dc1ce3994e2a6a95d->enter($__internal_8a5774ce516af13eb56c4056d04e42ac79a0cf41286b377dc1ce3994e2a6a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6860295a98e065625da5600c0b41863f08ecce5e1a6d5fd7dd3535da708fc687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6860295a98e065625da5600c0b41863f08ecce5e1a6d5fd7dd3535da708fc687->enter($__internal_6860295a98e065625da5600c0b41863f08ecce5e1a6d5fd7dd3535da708fc687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8a5774ce516af13eb56c4056d04e42ac79a0cf41286b377dc1ce3994e2a6a95d->leave($__internal_8a5774ce516af13eb56c4056d04e42ac79a0cf41286b377dc1ce3994e2a6a95d_prof);

        
        $__internal_6860295a98e065625da5600c0b41863f08ecce5e1a6d5fd7dd3535da708fc687->leave($__internal_6860295a98e065625da5600c0b41863f08ecce5e1a6d5fd7dd3535da708fc687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
