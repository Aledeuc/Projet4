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
        $__internal_24a8b6613e1372f49387c0a3a1ab4aaf6b55e92ede1c04205c361fa9d2b904aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a8b6613e1372f49387c0a3a1ab4aaf6b55e92ede1c04205c361fa9d2b904aa->enter($__internal_24a8b6613e1372f49387c0a3a1ab4aaf6b55e92ede1c04205c361fa9d2b904aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c10680e48acf68402884fe1843f7d4bb7e66db51dde92f0db667d6452a2279f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10680e48acf68402884fe1843f7d4bb7e66db51dde92f0db667d6452a2279f4->enter($__internal_c10680e48acf68402884fe1843f7d4bb7e66db51dde92f0db667d6452a2279f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_24a8b6613e1372f49387c0a3a1ab4aaf6b55e92ede1c04205c361fa9d2b904aa->leave($__internal_24a8b6613e1372f49387c0a3a1ab4aaf6b55e92ede1c04205c361fa9d2b904aa_prof);

        
        $__internal_c10680e48acf68402884fe1843f7d4bb7e66db51dde92f0db667d6452a2279f4->leave($__internal_c10680e48acf68402884fe1843f7d4bb7e66db51dde92f0db667d6452a2279f4_prof);

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
", "@Framework/Form/form_rows.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
