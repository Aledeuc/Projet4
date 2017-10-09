<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_205ba722ee0381de858e073c42202ab62c7783f54dcaa4577729834c0348ca0f extends Twig_Template
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
        $__internal_2dea7417fc45b015b6b0e0ed01b495a5fece0b8ac47ba7de32480c7d6cc18f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dea7417fc45b015b6b0e0ed01b495a5fece0b8ac47ba7de32480c7d6cc18f91->enter($__internal_2dea7417fc45b015b6b0e0ed01b495a5fece0b8ac47ba7de32480c7d6cc18f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7e1ab43282d5ec7dc47dc5efdfba11587c68bddb5f79279e444af1b3b6c89113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1ab43282d5ec7dc47dc5efdfba11587c68bddb5f79279e444af1b3b6c89113->enter($__internal_7e1ab43282d5ec7dc47dc5efdfba11587c68bddb5f79279e444af1b3b6c89113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2dea7417fc45b015b6b0e0ed01b495a5fece0b8ac47ba7de32480c7d6cc18f91->leave($__internal_2dea7417fc45b015b6b0e0ed01b495a5fece0b8ac47ba7de32480c7d6cc18f91_prof);

        
        $__internal_7e1ab43282d5ec7dc47dc5efdfba11587c68bddb5f79279e444af1b3b6c89113->leave($__internal_7e1ab43282d5ec7dc47dc5efdfba11587c68bddb5f79279e444af1b3b6c89113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
