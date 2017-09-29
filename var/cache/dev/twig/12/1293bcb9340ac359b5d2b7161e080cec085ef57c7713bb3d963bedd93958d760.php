<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9d4b70286e1bd89c0e1b275f1b75575aa003d9b1c54b0ff5ed3ebb7e692e7cf2 extends Twig_Template
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
        $__internal_db5394c29ce5bf096ce90a048c5bc35a14a8b36b3d72dbd192e74400b49e4396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5394c29ce5bf096ce90a048c5bc35a14a8b36b3d72dbd192e74400b49e4396->enter($__internal_db5394c29ce5bf096ce90a048c5bc35a14a8b36b3d72dbd192e74400b49e4396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_71d7d10f8d59754b4c046bc93a13cf33b99bb7d34c1c940259bff39d612d80a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d7d10f8d59754b4c046bc93a13cf33b99bb7d34c1c940259bff39d612d80a5->enter($__internal_71d7d10f8d59754b4c046bc93a13cf33b99bb7d34c1c940259bff39d612d80a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_db5394c29ce5bf096ce90a048c5bc35a14a8b36b3d72dbd192e74400b49e4396->leave($__internal_db5394c29ce5bf096ce90a048c5bc35a14a8b36b3d72dbd192e74400b49e4396_prof);

        
        $__internal_71d7d10f8d59754b4c046bc93a13cf33b99bb7d34c1c940259bff39d612d80a5->leave($__internal_71d7d10f8d59754b4c046bc93a13cf33b99bb7d34c1c940259bff39d612d80a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
