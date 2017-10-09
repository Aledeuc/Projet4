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
        $__internal_c970bd470aab29863b38e679540ec3fc3ed8152cce7b4bdd5044347f128faca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c970bd470aab29863b38e679540ec3fc3ed8152cce7b4bdd5044347f128faca2->enter($__internal_c970bd470aab29863b38e679540ec3fc3ed8152cce7b4bdd5044347f128faca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f0b9f6c983e32a9783dda6f8fe9b0724315293f10964ece3d6585dca77c86300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b9f6c983e32a9783dda6f8fe9b0724315293f10964ece3d6585dca77c86300->enter($__internal_f0b9f6c983e32a9783dda6f8fe9b0724315293f10964ece3d6585dca77c86300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c970bd470aab29863b38e679540ec3fc3ed8152cce7b4bdd5044347f128faca2->leave($__internal_c970bd470aab29863b38e679540ec3fc3ed8152cce7b4bdd5044347f128faca2_prof);

        
        $__internal_f0b9f6c983e32a9783dda6f8fe9b0724315293f10964ece3d6585dca77c86300->leave($__internal_f0b9f6c983e32a9783dda6f8fe9b0724315293f10964ece3d6585dca77c86300_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
