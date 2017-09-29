<?php

/* OCBookingBundle:Welcome:index.html.twig */
class __TwigTemplate_cac4b145347b5a90e528d7438f95c9450a87263676f3e5f3dc0e5e62acf1ada9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Welcome:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocbooking_body' => array($this, 'block_ocbooking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e971fa04ed54e4f8dfc95e49ec7c0faf2e084507771af55e515f7e9e3765d60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e971fa04ed54e4f8dfc95e49ec7c0faf2e084507771af55e515f7e9e3765d60a->enter($__internal_e971fa04ed54e4f8dfc95e49ec7c0faf2e084507771af55e515f7e9e3765d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:index.html.twig"));

        $__internal_18d6d0e7aadae3b57d7d046c46cfef173c7d67bf2d99055b5acae2d6bbcd0db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d6d0e7aadae3b57d7d046c46cfef173c7d67bf2d99055b5acae2d6bbcd0db3->enter($__internal_18d6d0e7aadae3b57d7d046c46cfef173c7d67bf2d99055b5acae2d6bbcd0db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Welcome:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e971fa04ed54e4f8dfc95e49ec7c0faf2e084507771af55e515f7e9e3765d60a->leave($__internal_e971fa04ed54e4f8dfc95e49ec7c0faf2e084507771af55e515f7e9e3765d60a_prof);

        
        $__internal_18d6d0e7aadae3b57d7d046c46cfef173c7d67bf2d99055b5acae2d6bbcd0db3->leave($__internal_18d6d0e7aadae3b57d7d046c46cfef173c7d67bf2d99055b5acae2d6bbcd0db3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3016fcca1bdcb6f7ec6c8e0775ea6585d4948336ab1f56d2bf8a02806939e962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3016fcca1bdcb6f7ec6c8e0775ea6585d4948336ab1f56d2bf8a02806939e962->enter($__internal_3016fcca1bdcb6f7ec6c8e0775ea6585d4948336ab1f56d2bf8a02806939e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0808e307a49e0bce60c20230422c9ec39e455c4f5686031b8e096a464ad8c339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0808e307a49e0bce60c20230422c9ec39e455c4f5686031b8e096a464ad8c339->enter($__internal_0808e307a49e0bce60c20230422c9ec39e455c4f5686031b8e096a464ad8c339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0808e307a49e0bce60c20230422c9ec39e455c4f5686031b8e096a464ad8c339->leave($__internal_0808e307a49e0bce60c20230422c9ec39e455c4f5686031b8e096a464ad8c339_prof);

        
        $__internal_3016fcca1bdcb6f7ec6c8e0775ea6585d4948336ab1f56d2bf8a02806939e962->leave($__internal_3016fcca1bdcb6f7ec6c8e0775ea6585d4948336ab1f56d2bf8a02806939e962_prof);

    }

    // line 9
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_c7d6e2c2cb141fde2d19de81c14f421aa165d854577c8054c4c540e5a5d156ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d6e2c2cb141fde2d19de81c14f421aa165d854577c8054c4c540e5a5d156ec->enter($__internal_c7d6e2c2cb141fde2d19de81c14f421aa165d854577c8054c4c540e5a5d156ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_f6bfdcd0bd03c7694d5b457bb558413f5dacd4b27efd5e272caba029b01168a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bfdcd0bd03c7694d5b457bb558413f5dacd4b27efd5e272caba029b01168a0->enter($__internal_f6bfdcd0bd03c7694d5b457bb558413f5dacd4b27efd5e272caba029b01168a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        // line 10
        echo "    Site en cours de construction !
";
        
        $__internal_f6bfdcd0bd03c7694d5b457bb558413f5dacd4b27efd5e272caba029b01168a0->leave($__internal_f6bfdcd0bd03c7694d5b457bb558413f5dacd4b27efd5e272caba029b01168a0_prof);

        
        $__internal_c7d6e2c2cb141fde2d19de81c14f421aa165d854577c8054c4c540e5a5d156ec->leave($__internal_c7d6e2c2cb141fde2d19de81c14f421aa165d854577c8054c4c540e5a5d156ec_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Welcome/index.html.twig #}

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent () }}
{% endblock %}

{% block ocbooking_body %}
    Site en cours de construction !
{% endblock %}", "OCBookingBundle:Welcome:index.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Welcome/index.html.twig");
    }
}
