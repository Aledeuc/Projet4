<?php

/* OCBookingBundle:Paymentform:payment.html.twig */
class __TwigTemplate_bd32c7f000d208cc18ad3633a9257b16054144e9c395d7c9f8da68e7c9f8f33c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCBookingBundle::layout.html.twig", "OCBookingBundle:Paymentform:payment.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocbooking_body' => array($this, 'block_ocbooking_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37acef6e9161c12b9b19bc3722b90b031a922cd078552880b712a36ba043d62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37acef6e9161c12b9b19bc3722b90b031a922cd078552880b712a36ba043d62d->enter($__internal_37acef6e9161c12b9b19bc3722b90b031a922cd078552880b712a36ba043d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $__internal_5879246565eff87271f78b264adafdee4155d17c89c2e7259cdd531ccac89c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5879246565eff87271f78b264adafdee4155d17c89c2e7259cdd531ccac89c71->enter($__internal_5879246565eff87271f78b264adafdee4155d17c89c2e7259cdd531ccac89c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37acef6e9161c12b9b19bc3722b90b031a922cd078552880b712a36ba043d62d->leave($__internal_37acef6e9161c12b9b19bc3722b90b031a922cd078552880b712a36ba043d62d_prof);

        
        $__internal_5879246565eff87271f78b264adafdee4155d17c89c2e7259cdd531ccac89c71->leave($__internal_5879246565eff87271f78b264adafdee4155d17c89c2e7259cdd531ccac89c71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_480e496234f43077833afc39245af30b242dae4236bd7d9473e7ba5ff1451080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480e496234f43077833afc39245af30b242dae4236bd7d9473e7ba5ff1451080->enter($__internal_480e496234f43077833afc39245af30b242dae4236bd7d9473e7ba5ff1451080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10f57f1e25aa72685bd4d64432c315c733ce5e811fb144e94ccfba100f546b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f57f1e25aa72685bd4d64432c315c733ce5e811fb144e94ccfba100f546b10->enter($__internal_10f57f1e25aa72685bd4d64432c315c733ce5e811fb144e94ccfba100f546b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_10f57f1e25aa72685bd4d64432c315c733ce5e811fb144e94ccfba100f546b10->leave($__internal_10f57f1e25aa72685bd4d64432c315c733ce5e811fb144e94ccfba100f546b10_prof);

        
        $__internal_480e496234f43077833afc39245af30b242dae4236bd7d9473e7ba5ff1451080->leave($__internal_480e496234f43077833afc39245af30b242dae4236bd7d9473e7ba5ff1451080_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_3e2bfa0d14765022f495eab4f18e8fac45ca2776af71fc75eb22f0e9ae61dccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2bfa0d14765022f495eab4f18e8fac45ca2776af71fc75eb22f0e9ae61dccc->enter($__internal_3e2bfa0d14765022f495eab4f18e8fac45ca2776af71fc75eb22f0e9ae61dccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_0b1e68f7c5eee1e331509906696d4329b0e9d0f3d528cf4abfe27f764ad123d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1e68f7c5eee1e331509906696d4329b0e9d0f3d528cf4abfe27f764ad123d2->enter($__internal_0b1e68f7c5eee1e331509906696d4329b0e9d0f3d528cf4abfe27f764ad123d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        echo " 

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"flash-error\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
<div class=\"recapitulatif_commande\">
  <h2>Récapitulatif de commande :</h2>
  <p>Vous souhaitez réserver ";
        // line 17
        echo twig_escape_filter($this->env, ($context["totalVisitor"] ?? $this->getContext($context, "totalVisitor")), "html", null, true);
        echo " billets d'entrée à la ";
        echo twig_escape_filter($this->env, ($context["ticketType"] ?? $this->getContext($context, "ticketType")), "html", null, true);
        echo ", pour le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateOfBooking"] ?? $this->getContext($context, "dateOfBooking")), "d/m/Y"), "html", null, true);
        echo ".
      Votre facture est de ";
        // line 18
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo " € </p>
</div>

<div class=\"stripeForm\">
    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_checkout");
        echo "\" method=\"POST\" id=\"payment-form\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"pk_test_WYvpEHPHdIksCPWlOKjoGN3P\"
            data-email=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["bookingEmail"] ?? $this->getContext($context, "bookingEmail")), "html", null, true);
        echo "\"
            data-amount=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["priceStripe"] ?? $this->getContext($context, "priceStripe")), "html", null, true);
        echo "\"
            data-name=\"Musée du Louvre\"
            data-description=\"Billet de réservation\"
            data-locale=\"auto\"
            data-currency=\"eur\">
        </script>
    </form>
</div>

";
        
        $__internal_0b1e68f7c5eee1e331509906696d4329b0e9d0f3d528cf4abfe27f764ad123d2->leave($__internal_0b1e68f7c5eee1e331509906696d4329b0e9d0f3d528cf4abfe27f764ad123d2_prof);

        
        $__internal_3e2bfa0d14765022f495eab4f18e8fac45ca2776af71fc75eb22f0e9ae61dccc->leave($__internal_3e2bfa0d14765022f495eab4f18e8fac45ca2776af71fc75eb22f0e9ae61dccc_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb0ba87d8e07632dbeab1e369146cb5c322fcac74380cc39f283c73bdc817a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0ba87d8e07632dbeab1e369146cb5c322fcac74380cc39f283c73bdc817a5a->enter($__internal_eb0ba87d8e07632dbeab1e369146cb5c322fcac74380cc39f283c73bdc817a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ea666947e788f24c97b3cc699f93134ccc48e2e568e37290b26e3831c8f1b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea666947e788f24c97b3cc699f93134ccc48e2e568e37290b26e3831c8f1b57->enter($__internal_3ea666947e788f24c97b3cc699f93134ccc48e2e568e37290b26e3831c8f1b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

";
        
        $__internal_3ea666947e788f24c97b3cc699f93134ccc48e2e568e37290b26e3831c8f1b57->leave($__internal_3ea666947e788f24c97b3cc699f93134ccc48e2e568e37290b26e3831c8f1b57_prof);

        
        $__internal_eb0ba87d8e07632dbeab1e369146cb5c322fcac74380cc39f283c73bdc817a5a->leave($__internal_eb0ba87d8e07632dbeab1e369146cb5c322fcac74380cc39f283c73bdc817a5a_prof);

    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Paymentform:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  120 => 27,  116 => 26,  109 => 22,  102 => 18,  94 => 17,  89 => 14,  80 => 11,  77 => 10,  73 => 9,  61 => 7,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Payment/paymentform.html.twig #} 

{% extends \"OCBookingBundle::layout.html.twig\" %}

{% block title %}{{ parent () }} - Boutique{% endblock %}

{% block ocbooking_body %} 

{% for message in app.flashes('error') %}
    <div class=\"flash-error\">
        {{ message }}
    </div>
{% endfor %}

<div class=\"recapitulatif_commande\">
  <h2>Récapitulatif de commande :</h2>
  <p>Vous souhaitez réserver {{ totalVisitor }} billets d'entrée à la {{ ticketType }}, pour le {{ dateOfBooking|date('d/m/Y') }}.
      Votre facture est de {{ totalPrice }} € </p>
</div>

<div class=\"stripeForm\">
    <form action=\"{{ path('order_checkout') }}\" method=\"POST\" id=\"payment-form\">
        <script
            src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
            data-key=\"pk_test_WYvpEHPHdIksCPWlOKjoGN3P\"
            data-email=\"{{ bookingEmail }}\"
            data-amount=\"{{ priceStripe }}\"
            data-name=\"Musée du Louvre\"
            data-description=\"Billet de réservation\"
            data-locale=\"auto\"
            data-currency=\"eur\">
        </script>
    </form>
</div>

{% endblock %}

{% block javascripts %} 

{% endblock %}", "OCBookingBundle:Paymentform:payment.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Paymentform/payment.html.twig");
    }
}
