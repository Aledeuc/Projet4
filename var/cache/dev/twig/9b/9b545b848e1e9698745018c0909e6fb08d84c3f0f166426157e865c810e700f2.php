<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e4d36eb4a91a4b1725e1b16ab5c68f8484cf2777f085421cd785e9b73165c40f extends Twig_Template
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
        $__internal_fb9e37bf2ed070c763a112bc55b93a024edba69bc1cd5894ca9e141cba7669b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9e37bf2ed070c763a112bc55b93a024edba69bc1cd5894ca9e141cba7669b9->enter($__internal_fb9e37bf2ed070c763a112bc55b93a024edba69bc1cd5894ca9e141cba7669b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d01497a0fbfa4d9a94bcc95bd204af1ee9c805c41a2ed49997dfe73adc2a76b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01497a0fbfa4d9a94bcc95bd204af1ee9c805c41a2ed49997dfe73adc2a76b7->enter($__internal_d01497a0fbfa4d9a94bcc95bd204af1ee9c805c41a2ed49997dfe73adc2a76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb9e37bf2ed070c763a112bc55b93a024edba69bc1cd5894ca9e141cba7669b9->leave($__internal_fb9e37bf2ed070c763a112bc55b93a024edba69bc1cd5894ca9e141cba7669b9_prof);

        
        $__internal_d01497a0fbfa4d9a94bcc95bd204af1ee9c805c41a2ed49997dfe73adc2a76b7->leave($__internal_d01497a0fbfa4d9a94bcc95bd204af1ee9c805c41a2ed49997dfe73adc2a76b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
