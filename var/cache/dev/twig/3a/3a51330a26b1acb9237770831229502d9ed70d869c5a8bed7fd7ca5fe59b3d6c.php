<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_80c103d43d2f0d4236385404e3d37b42fe6268e04eb165e63077f625a05e6922 extends Twig_Template
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
        $__internal_02a091ee6b640cad162853b3cb23a62ee252dd54880046f759c2e3565758ebeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a091ee6b640cad162853b3cb23a62ee252dd54880046f759c2e3565758ebeb->enter($__internal_02a091ee6b640cad162853b3cb23a62ee252dd54880046f759c2e3565758ebeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d4a82e356677361ac0f4f14d8a8299324f5489da9b40c13fc21c6a0b0eeab0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a82e356677361ac0f4f14d8a8299324f5489da9b40c13fc21c6a0b0eeab0a9->enter($__internal_d4a82e356677361ac0f4f14d8a8299324f5489da9b40c13fc21c6a0b0eeab0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_02a091ee6b640cad162853b3cb23a62ee252dd54880046f759c2e3565758ebeb->leave($__internal_02a091ee6b640cad162853b3cb23a62ee252dd54880046f759c2e3565758ebeb_prof);

        
        $__internal_d4a82e356677361ac0f4f14d8a8299324f5489da9b40c13fc21c6a0b0eeab0a9->leave($__internal_d4a82e356677361ac0f4f14d8a8299324f5489da9b40c13fc21c6a0b0eeab0a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
