<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4036b8255bbcb3852aa039cd37771a97203f2e40e37450eca75f80e2d1ae4156 extends Twig_Template
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
        $__internal_a0ab44d603847ce074fd4980f2a9553ccb7bf4e4d58c84ce27901bf4cc6fc47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ab44d603847ce074fd4980f2a9553ccb7bf4e4d58c84ce27901bf4cc6fc47f->enter($__internal_a0ab44d603847ce074fd4980f2a9553ccb7bf4e4d58c84ce27901bf4cc6fc47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_78347723b605e607e743d870ec1fa5331039bf76d6e441e9a1c8cc7cd7148562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78347723b605e607e743d870ec1fa5331039bf76d6e441e9a1c8cc7cd7148562->enter($__internal_78347723b605e607e743d870ec1fa5331039bf76d6e441e9a1c8cc7cd7148562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a0ab44d603847ce074fd4980f2a9553ccb7bf4e4d58c84ce27901bf4cc6fc47f->leave($__internal_a0ab44d603847ce074fd4980f2a9553ccb7bf4e4d58c84ce27901bf4cc6fc47f_prof);

        
        $__internal_78347723b605e607e743d870ec1fa5331039bf76d6e441e9a1c8cc7cd7148562->leave($__internal_78347723b605e607e743d870ec1fa5331039bf76d6e441e9a1c8cc7cd7148562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
