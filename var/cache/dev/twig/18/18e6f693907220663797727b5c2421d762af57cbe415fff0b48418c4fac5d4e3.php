<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9e6eb5a50bdf6e46de95a2d8e526c098f321fc94be2f929817c18318d1a51ef0 extends Twig_Template
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
        $__internal_2af4919b443e0a51c5aea7f990a6c611b74040e79331c5add2d292ff50905d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af4919b443e0a51c5aea7f990a6c611b74040e79331c5add2d292ff50905d6d->enter($__internal_2af4919b443e0a51c5aea7f990a6c611b74040e79331c5add2d292ff50905d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b7dd68b3403092843b0cc0986e84381fc5554c5049713fccc7dc6557cb294f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7dd68b3403092843b0cc0986e84381fc5554c5049713fccc7dc6557cb294f3c->enter($__internal_b7dd68b3403092843b0cc0986e84381fc5554c5049713fccc7dc6557cb294f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2af4919b443e0a51c5aea7f990a6c611b74040e79331c5add2d292ff50905d6d->leave($__internal_2af4919b443e0a51c5aea7f990a6c611b74040e79331c5add2d292ff50905d6d_prof);

        
        $__internal_b7dd68b3403092843b0cc0986e84381fc5554c5049713fccc7dc6557cb294f3c->leave($__internal_b7dd68b3403092843b0cc0986e84381fc5554c5049713fccc7dc6557cb294f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
