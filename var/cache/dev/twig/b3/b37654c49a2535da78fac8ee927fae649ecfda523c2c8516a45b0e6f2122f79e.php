<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2e98727b5b5402b7173e43ff1b648192df43e40b925811c1972eb0b92fab03e5 extends Twig_Template
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
        $__internal_a57a55e4bab8bb65e86066cd038cdfd1c778bdf4e0201788a8049ab7da119465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57a55e4bab8bb65e86066cd038cdfd1c778bdf4e0201788a8049ab7da119465->enter($__internal_a57a55e4bab8bb65e86066cd038cdfd1c778bdf4e0201788a8049ab7da119465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fdce3444166d3fa89b38e0a060d0fab0e8963f0fb00fa5728371efa6b288aaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdce3444166d3fa89b38e0a060d0fab0e8963f0fb00fa5728371efa6b288aaea->enter($__internal_fdce3444166d3fa89b38e0a060d0fab0e8963f0fb00fa5728371efa6b288aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a57a55e4bab8bb65e86066cd038cdfd1c778bdf4e0201788a8049ab7da119465->leave($__internal_a57a55e4bab8bb65e86066cd038cdfd1c778bdf4e0201788a8049ab7da119465_prof);

        
        $__internal_fdce3444166d3fa89b38e0a060d0fab0e8963f0fb00fa5728371efa6b288aaea->leave($__internal_fdce3444166d3fa89b38e0a060d0fab0e8963f0fb00fa5728371efa6b288aaea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
