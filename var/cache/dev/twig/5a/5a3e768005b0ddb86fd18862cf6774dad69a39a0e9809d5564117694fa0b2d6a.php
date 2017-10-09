<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e88e4c45aa70a93b31e89512786129cb420b5e8eee1159d23f90e962112b70ab extends Twig_Template
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
        $__internal_a40d8ef8a0190c9e120b1613fad500d65cb48ed7e3d2c9ff935590c47108173a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40d8ef8a0190c9e120b1613fad500d65cb48ed7e3d2c9ff935590c47108173a->enter($__internal_a40d8ef8a0190c9e120b1613fad500d65cb48ed7e3d2c9ff935590c47108173a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f620c6ad5c21513f80a871ab433291b5cf38f0eb6954bb2af29a7151022c8a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f620c6ad5c21513f80a871ab433291b5cf38f0eb6954bb2af29a7151022c8a4b->enter($__internal_f620c6ad5c21513f80a871ab433291b5cf38f0eb6954bb2af29a7151022c8a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a40d8ef8a0190c9e120b1613fad500d65cb48ed7e3d2c9ff935590c47108173a->leave($__internal_a40d8ef8a0190c9e120b1613fad500d65cb48ed7e3d2c9ff935590c47108173a_prof);

        
        $__internal_f620c6ad5c21513f80a871ab433291b5cf38f0eb6954bb2af29a7151022c8a4b->leave($__internal_f620c6ad5c21513f80a871ab433291b5cf38f0eb6954bb2af29a7151022c8a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
