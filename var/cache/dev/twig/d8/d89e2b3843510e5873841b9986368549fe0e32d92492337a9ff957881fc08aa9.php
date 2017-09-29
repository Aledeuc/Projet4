<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ace7c01272a6e5ba8b100be798208d797e47bef98b04ac6fa5ee9e32fce50c31 extends Twig_Template
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
        $__internal_3616ff3eecdfb954b89ac38771ddefca6d46e2c369ed840578acf39cc9c74905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3616ff3eecdfb954b89ac38771ddefca6d46e2c369ed840578acf39cc9c74905->enter($__internal_3616ff3eecdfb954b89ac38771ddefca6d46e2c369ed840578acf39cc9c74905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9c97cf502cc011a9757ecebff432b97ec0828713fd22b834e477a1055b2caaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c97cf502cc011a9757ecebff432b97ec0828713fd22b834e477a1055b2caaf8->enter($__internal_9c97cf502cc011a9757ecebff432b97ec0828713fd22b834e477a1055b2caaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3616ff3eecdfb954b89ac38771ddefca6d46e2c369ed840578acf39cc9c74905->leave($__internal_3616ff3eecdfb954b89ac38771ddefca6d46e2c369ed840578acf39cc9c74905_prof);

        
        $__internal_9c97cf502cc011a9757ecebff432b97ec0828713fd22b834e477a1055b2caaf8->leave($__internal_9c97cf502cc011a9757ecebff432b97ec0828713fd22b834e477a1055b2caaf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
