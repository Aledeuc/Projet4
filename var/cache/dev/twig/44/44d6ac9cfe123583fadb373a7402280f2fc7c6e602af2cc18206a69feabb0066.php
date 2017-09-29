<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c741c5f6bc1a1a68320510fea59e2f31657fbe2195a68abf8bbfc1fc309ecc2d extends Twig_Template
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
        $__internal_223ebb81bfaa58f4cf7663c08029c84a4725e8490d080f07111dd5596bc66eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223ebb81bfaa58f4cf7663c08029c84a4725e8490d080f07111dd5596bc66eb7->enter($__internal_223ebb81bfaa58f4cf7663c08029c84a4725e8490d080f07111dd5596bc66eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_35ee6fa3dd599f4a003f645a88c20db9a19548e2b0cb430e7f490d3b861b3982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ee6fa3dd599f4a003f645a88c20db9a19548e2b0cb430e7f490d3b861b3982->enter($__internal_35ee6fa3dd599f4a003f645a88c20db9a19548e2b0cb430e7f490d3b861b3982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_223ebb81bfaa58f4cf7663c08029c84a4725e8490d080f07111dd5596bc66eb7->leave($__internal_223ebb81bfaa58f4cf7663c08029c84a4725e8490d080f07111dd5596bc66eb7_prof);

        
        $__internal_35ee6fa3dd599f4a003f645a88c20db9a19548e2b0cb430e7f490d3b861b3982->leave($__internal_35ee6fa3dd599f4a003f645a88c20db9a19548e2b0cb430e7f490d3b861b3982_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
