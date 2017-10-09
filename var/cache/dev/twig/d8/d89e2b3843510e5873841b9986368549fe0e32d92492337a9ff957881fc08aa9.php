<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ace7c01272a6e5ba8b100be798208d797e47bef98b04ac6fa5ee9e32fce50c31 extends Twig_Template
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
        $__internal_a8fc427ae922f69b591a48ae24ea7bbd12b22632cfcf7a74456a846b627b9ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fc427ae922f69b591a48ae24ea7bbd12b22632cfcf7a74456a846b627b9ba1->enter($__internal_a8fc427ae922f69b591a48ae24ea7bbd12b22632cfcf7a74456a846b627b9ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_312b1722e3496842855a54a60f3c328d3e0513fff1c1bcf4f440d4801e81cf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312b1722e3496842855a54a60f3c328d3e0513fff1c1bcf4f440d4801e81cf8c->enter($__internal_312b1722e3496842855a54a60f3c328d3e0513fff1c1bcf4f440d4801e81cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a8fc427ae922f69b591a48ae24ea7bbd12b22632cfcf7a74456a846b627b9ba1->leave($__internal_a8fc427ae922f69b591a48ae24ea7bbd12b22632cfcf7a74456a846b627b9ba1_prof);

        
        $__internal_312b1722e3496842855a54a60f3c328d3e0513fff1c1bcf4f440d4801e81cf8c->leave($__internal_312b1722e3496842855a54a60f3c328d3e0513fff1c1bcf4f440d4801e81cf8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
