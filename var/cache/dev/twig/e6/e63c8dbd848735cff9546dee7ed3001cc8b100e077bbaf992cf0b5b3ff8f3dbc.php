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
        $__internal_20362e1fbd869341cdaf0d95abe737ac82dbe4c8a1cef5b332cd6510b6edd5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20362e1fbd869341cdaf0d95abe737ac82dbe4c8a1cef5b332cd6510b6edd5ee->enter($__internal_20362e1fbd869341cdaf0d95abe737ac82dbe4c8a1cef5b332cd6510b6edd5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $__internal_c967864a26ee70fd2259547db29ce71843fe7440269f7f4bd38b1ceffcf2a2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c967864a26ee70fd2259547db29ce71843fe7440269f7f4bd38b1ceffcf2a2fe->enter($__internal_c967864a26ee70fd2259547db29ce71843fe7440269f7f4bd38b1ceffcf2a2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20362e1fbd869341cdaf0d95abe737ac82dbe4c8a1cef5b332cd6510b6edd5ee->leave($__internal_20362e1fbd869341cdaf0d95abe737ac82dbe4c8a1cef5b332cd6510b6edd5ee_prof);

        
        $__internal_c967864a26ee70fd2259547db29ce71843fe7440269f7f4bd38b1ceffcf2a2fe->leave($__internal_c967864a26ee70fd2259547db29ce71843fe7440269f7f4bd38b1ceffcf2a2fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e4c7223a46058f60159c79ada6d45ab7344d8e5255df47d9ce52f68a04d1559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4c7223a46058f60159c79ada6d45ab7344d8e5255df47d9ce52f68a04d1559->enter($__internal_2e4c7223a46058f60159c79ada6d45ab7344d8e5255df47d9ce52f68a04d1559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62954b83af8630f8ccbf3a0cbe75e61248d1fc9a5c35dfab874394e50b69be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62954b83af8630f8ccbf3a0cbe75e61248d1fc9a5c35dfab874394e50b69be11->enter($__internal_62954b83af8630f8ccbf3a0cbe75e61248d1fc9a5c35dfab874394e50b69be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_62954b83af8630f8ccbf3a0cbe75e61248d1fc9a5c35dfab874394e50b69be11->leave($__internal_62954b83af8630f8ccbf3a0cbe75e61248d1fc9a5c35dfab874394e50b69be11_prof);

        
        $__internal_2e4c7223a46058f60159c79ada6d45ab7344d8e5255df47d9ce52f68a04d1559->leave($__internal_2e4c7223a46058f60159c79ada6d45ab7344d8e5255df47d9ce52f68a04d1559_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_28c68a68325a8b59781202589efc520c4fda1ef498279eff7afef0c774d03584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c68a68325a8b59781202589efc520c4fda1ef498279eff7afef0c774d03584->enter($__internal_28c68a68325a8b59781202589efc520c4fda1ef498279eff7afef0c774d03584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_5c743b82ade57328ceb457c3dea069254d8d3fd3b1db71f656308f132c857ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c743b82ade57328ceb457c3dea069254d8d3fd3b1db71f656308f132c857ec9->enter($__internal_5c743b82ade57328ceb457c3dea069254d8d3fd3b1db71f656308f132c857ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

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
        
        $__internal_5c743b82ade57328ceb457c3dea069254d8d3fd3b1db71f656308f132c857ec9->leave($__internal_5c743b82ade57328ceb457c3dea069254d8d3fd3b1db71f656308f132c857ec9_prof);

        
        $__internal_28c68a68325a8b59781202589efc520c4fda1ef498279eff7afef0c774d03584->leave($__internal_28c68a68325a8b59781202589efc520c4fda1ef498279eff7afef0c774d03584_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afe70a7f916359ddae7e682251169b3de65d2b5089c9956bca9dec33d00d2c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe70a7f916359ddae7e682251169b3de65d2b5089c9956bca9dec33d00d2c06->enter($__internal_afe70a7f916359ddae7e682251169b3de65d2b5089c9956bca9dec33d00d2c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b32b1857962eb53c7a3f2715565f69425edfbe6c55885b689d5486fa30265bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32b1857962eb53c7a3f2715565f69425edfbe6c55885b689d5486fa30265bc7->enter($__internal_b32b1857962eb53c7a3f2715565f69425edfbe6c55885b689d5486fa30265bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

";
        
        $__internal_b32b1857962eb53c7a3f2715565f69425edfbe6c55885b689d5486fa30265bc7->leave($__internal_b32b1857962eb53c7a3f2715565f69425edfbe6c55885b689d5486fa30265bc7_prof);

        
        $__internal_afe70a7f916359ddae7e682251169b3de65d2b5089c9956bca9dec33d00d2c06->leave($__internal_afe70a7f916359ddae7e682251169b3de65d2b5089c9956bca9dec33d00d2c06_prof);

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
