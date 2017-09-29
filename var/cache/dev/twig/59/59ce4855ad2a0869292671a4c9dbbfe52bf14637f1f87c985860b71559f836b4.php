<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a747a1f2d2ba9eca43614b2f77b009e21f5a4f385e24bddbb05a6fb274f165e2 extends Twig_Template
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
        $__internal_3b1570439920aeaf5318cb26e088019492322c44d645e461aa220d7293ffb6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1570439920aeaf5318cb26e088019492322c44d645e461aa220d7293ffb6ac->enter($__internal_3b1570439920aeaf5318cb26e088019492322c44d645e461aa220d7293ffb6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_282424da3c0534c647ca57d06309576e1fbef6ab0e443fd36287d5ecacf2bf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282424da3c0534c647ca57d06309576e1fbef6ab0e443fd36287d5ecacf2bf31->enter($__internal_282424da3c0534c647ca57d06309576e1fbef6ab0e443fd36287d5ecacf2bf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3b1570439920aeaf5318cb26e088019492322c44d645e461aa220d7293ffb6ac->leave($__internal_3b1570439920aeaf5318cb26e088019492322c44d645e461aa220d7293ffb6ac_prof);

        
        $__internal_282424da3c0534c647ca57d06309576e1fbef6ab0e443fd36287d5ecacf2bf31->leave($__internal_282424da3c0534c647ca57d06309576e1fbef6ab0e443fd36287d5ecacf2bf31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
