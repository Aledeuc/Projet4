<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_09e7e6f0f6c3d15966721659618d974d2f21a02954a70f9ba7bf5ee6b99197d5 extends Twig_Template
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
        $__internal_b3d16bcf64eacd153d6425a9e4f5682d59648129931538a0f04f3e5327007ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d16bcf64eacd153d6425a9e4f5682d59648129931538a0f04f3e5327007ae9->enter($__internal_b3d16bcf64eacd153d6425a9e4f5682d59648129931538a0f04f3e5327007ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_573e76b4cae5494ed31cbb6b17a2ebea13ed35e16cdaa5818b9fef7c1b6be527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573e76b4cae5494ed31cbb6b17a2ebea13ed35e16cdaa5818b9fef7c1b6be527->enter($__internal_573e76b4cae5494ed31cbb6b17a2ebea13ed35e16cdaa5818b9fef7c1b6be527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b3d16bcf64eacd153d6425a9e4f5682d59648129931538a0f04f3e5327007ae9->leave($__internal_b3d16bcf64eacd153d6425a9e4f5682d59648129931538a0f04f3e5327007ae9_prof);

        
        $__internal_573e76b4cae5494ed31cbb6b17a2ebea13ed35e16cdaa5818b9fef7c1b6be527->leave($__internal_573e76b4cae5494ed31cbb6b17a2ebea13ed35e16cdaa5818b9fef7c1b6be527_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
