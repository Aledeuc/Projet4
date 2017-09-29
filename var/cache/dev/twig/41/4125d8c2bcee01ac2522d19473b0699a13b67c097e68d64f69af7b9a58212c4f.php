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
        $__internal_bc3e75fcbbef67ecd056271669e23cf53396ee48d2559c21ef90219ef072a826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc3e75fcbbef67ecd056271669e23cf53396ee48d2559c21ef90219ef072a826->enter($__internal_bc3e75fcbbef67ecd056271669e23cf53396ee48d2559c21ef90219ef072a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bc423c1cac28eec4be02cb831684ce163ac0234b030861ca94d84e2fc244cd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc423c1cac28eec4be02cb831684ce163ac0234b030861ca94d84e2fc244cd1e->enter($__internal_bc423c1cac28eec4be02cb831684ce163ac0234b030861ca94d84e2fc244cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bc3e75fcbbef67ecd056271669e23cf53396ee48d2559c21ef90219ef072a826->leave($__internal_bc3e75fcbbef67ecd056271669e23cf53396ee48d2559c21ef90219ef072a826_prof);

        
        $__internal_bc423c1cac28eec4be02cb831684ce163ac0234b030861ca94d84e2fc244cd1e->leave($__internal_bc423c1cac28eec4be02cb831684ce163ac0234b030861ca94d84e2fc244cd1e_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
