<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d424fec088ab131c9c4ffe1df8693b865fb2544a04e25db9f93a0485398ec859 extends Twig_Template
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
        $__internal_a68d865358763eb00c1b78bb4ce1e23fa6183cae2ef1902e77bf3e88e2f055c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68d865358763eb00c1b78bb4ce1e23fa6183cae2ef1902e77bf3e88e2f055c3->enter($__internal_a68d865358763eb00c1b78bb4ce1e23fa6183cae2ef1902e77bf3e88e2f055c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_52f012795515f7f8a0eff8dd52e447bc6f0b65468ff52adbb12c4090a4534ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f012795515f7f8a0eff8dd52e447bc6f0b65468ff52adbb12c4090a4534ce6->enter($__internal_52f012795515f7f8a0eff8dd52e447bc6f0b65468ff52adbb12c4090a4534ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a68d865358763eb00c1b78bb4ce1e23fa6183cae2ef1902e77bf3e88e2f055c3->leave($__internal_a68d865358763eb00c1b78bb4ce1e23fa6183cae2ef1902e77bf3e88e2f055c3_prof);

        
        $__internal_52f012795515f7f8a0eff8dd52e447bc6f0b65468ff52adbb12c4090a4534ce6->leave($__internal_52f012795515f7f8a0eff8dd52e447bc6f0b65468ff52adbb12c4090a4534ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
