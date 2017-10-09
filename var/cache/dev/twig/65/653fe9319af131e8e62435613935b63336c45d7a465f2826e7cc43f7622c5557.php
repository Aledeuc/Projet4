<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1f92ab3ef03944e6e197016407e6e8104e95a047b91907d27eea80521060a3bc extends Twig_Template
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
        $__internal_0e64c4552b8cf4d0347b0c13cdd02225b1dc400a22a6d88bab4ff646e82f02d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e64c4552b8cf4d0347b0c13cdd02225b1dc400a22a6d88bab4ff646e82f02d3->enter($__internal_0e64c4552b8cf4d0347b0c13cdd02225b1dc400a22a6d88bab4ff646e82f02d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8135af43a4a4d0690c643e3df3321ce97b91e7c8aef52e003d3c8cdb5b6da5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8135af43a4a4d0690c643e3df3321ce97b91e7c8aef52e003d3c8cdb5b6da5f3->enter($__internal_8135af43a4a4d0690c643e3df3321ce97b91e7c8aef52e003d3c8cdb5b6da5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0e64c4552b8cf4d0347b0c13cdd02225b1dc400a22a6d88bab4ff646e82f02d3->leave($__internal_0e64c4552b8cf4d0347b0c13cdd02225b1dc400a22a6d88bab4ff646e82f02d3_prof);

        
        $__internal_8135af43a4a4d0690c643e3df3321ce97b91e7c8aef52e003d3c8cdb5b6da5f3->leave($__internal_8135af43a4a4d0690c643e3df3321ce97b91e7c8aef52e003d3c8cdb5b6da5f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
