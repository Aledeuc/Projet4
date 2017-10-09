<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e06f5f9fe4b090731b559b8f1100c086850027a4d69ccf4b9f8bbaa1d48163d7 extends Twig_Template
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
        $__internal_0243bb7b3d720d9e94824b4a6e46c2a4b98b7557304631b330ecdea8fffa921a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0243bb7b3d720d9e94824b4a6e46c2a4b98b7557304631b330ecdea8fffa921a->enter($__internal_0243bb7b3d720d9e94824b4a6e46c2a4b98b7557304631b330ecdea8fffa921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_587d891eb1b51784d05885457315bac1166867dc21eaf409d9d63a0303106ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587d891eb1b51784d05885457315bac1166867dc21eaf409d9d63a0303106ce3->enter($__internal_587d891eb1b51784d05885457315bac1166867dc21eaf409d9d63a0303106ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0243bb7b3d720d9e94824b4a6e46c2a4b98b7557304631b330ecdea8fffa921a->leave($__internal_0243bb7b3d720d9e94824b4a6e46c2a4b98b7557304631b330ecdea8fffa921a_prof);

        
        $__internal_587d891eb1b51784d05885457315bac1166867dc21eaf409d9d63a0303106ce3->leave($__internal_587d891eb1b51784d05885457315bac1166867dc21eaf409d9d63a0303106ce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
