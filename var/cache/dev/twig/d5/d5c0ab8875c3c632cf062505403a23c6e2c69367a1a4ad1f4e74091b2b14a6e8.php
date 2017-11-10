<?php

/* OCBookingBundle:Paymentform:payment.html.twig */
class __TwigTemplate_b047f1426fe5e76e8a4b1c3afe6691ce7291f31c1b608deff064bf4f43337f94 extends Twig_Template
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
        $__internal_0fae52645d6054ace1cde74fb5d4686c25c77a22b96a9a5844f6a437420791a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fae52645d6054ace1cde74fb5d4686c25c77a22b96a9a5844f6a437420791a7->enter($__internal_0fae52645d6054ace1cde74fb5d4686c25c77a22b96a9a5844f6a437420791a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $__internal_c6840c98e56d53a5cfbc8177e0e434215a44a6a8d1cc4d74546247abd5cee19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6840c98e56d53a5cfbc8177e0e434215a44a6a8d1cc4d74546247abd5cee19f->enter($__internal_c6840c98e56d53a5cfbc8177e0e434215a44a6a8d1cc4d74546247abd5cee19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fae52645d6054ace1cde74fb5d4686c25c77a22b96a9a5844f6a437420791a7->leave($__internal_0fae52645d6054ace1cde74fb5d4686c25c77a22b96a9a5844f6a437420791a7_prof);

        
        $__internal_c6840c98e56d53a5cfbc8177e0e434215a44a6a8d1cc4d74546247abd5cee19f->leave($__internal_c6840c98e56d53a5cfbc8177e0e434215a44a6a8d1cc4d74546247abd5cee19f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4be6c8a09478bd6145cf3623b8461644d53c19ce4bd547284787b45a07a3028c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be6c8a09478bd6145cf3623b8461644d53c19ce4bd547284787b45a07a3028c->enter($__internal_4be6c8a09478bd6145cf3623b8461644d53c19ce4bd547284787b45a07a3028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_044b216b4f2bc0a7f58b73e09983468c3fdaf64848b1ee428a971c2011d0263b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044b216b4f2bc0a7f58b73e09983468c3fdaf64848b1ee428a971c2011d0263b->enter($__internal_044b216b4f2bc0a7f58b73e09983468c3fdaf64848b1ee428a971c2011d0263b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_044b216b4f2bc0a7f58b73e09983468c3fdaf64848b1ee428a971c2011d0263b->leave($__internal_044b216b4f2bc0a7f58b73e09983468c3fdaf64848b1ee428a971c2011d0263b_prof);

        
        $__internal_4be6c8a09478bd6145cf3623b8461644d53c19ce4bd547284787b45a07a3028c->leave($__internal_4be6c8a09478bd6145cf3623b8461644d53c19ce4bd547284787b45a07a3028c_prof);

    }

    // line 7
    public function block_ocbooking_body($context, array $blocks = array())
    {
        $__internal_e7ff9c6cdc5104169317f7c0a73784b0025b70e3f672256cbb1f82cf0182fc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ff9c6cdc5104169317f7c0a73784b0025b70e3f672256cbb1f82cf0182fc4a->enter($__internal_e7ff9c6cdc5104169317f7c0a73784b0025b70e3f672256cbb1f82cf0182fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        $__internal_0266c91368e31efb7271311c6e4dbad7a88327c1223af86a698601d5aafa4a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0266c91368e31efb7271311c6e4dbad7a88327c1223af86a698601d5aafa4a95->enter($__internal_0266c91368e31efb7271311c6e4dbad7a88327c1223af86a698601d5aafa4a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocbooking_body"));

        echo " 

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "<div class=\"flash-error\">
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
        // line 19
        echo twig_escape_filter($this->env, ($context["totalVisitor"] ?? $this->getContext($context, "totalVisitor")), "html", null, true);
        echo " billets d'entrée à la ";
        echo twig_escape_filter($this->env, ($context["ticketType"] ?? $this->getContext($context, "ticketType")), "html", null, true);
        echo ", pour le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateOfBooking"] ?? $this->getContext($context, "dateOfBooking")), "d/m/Y"), "html", null, true);
        echo ".
      Votre facture est de ";
        // line 20
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo " € </p>

</div>

<form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_checkout");
        echo "\" method=\"POST\" id=\"payment-form\">
    <script
    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
    data-key=\"pk_test_WYvpEHPHdIksCPWlOKjoGN3P\"
    data-email=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["bookingEmail"] ?? $this->getContext($context, "bookingEmail")), "html", null, true);
        echo "\"
    data-amount=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["priceStripe"] ?? $this->getContext($context, "priceStripe")), "html", null, true);
        echo "\"
    data-name=\"Musée du Louvre\"
    data-description=\"Billet de réservation\"
    data-locale=\"auto\"
    data-currency=\"eur\">
  </script>

</form>


";
        
        $__internal_0266c91368e31efb7271311c6e4dbad7a88327c1223af86a698601d5aafa4a95->leave($__internal_0266c91368e31efb7271311c6e4dbad7a88327c1223af86a698601d5aafa4a95_prof);

        
        $__internal_e7ff9c6cdc5104169317f7c0a73784b0025b70e3f672256cbb1f82cf0182fc4a->leave($__internal_e7ff9c6cdc5104169317f7c0a73784b0025b70e3f672256cbb1f82cf0182fc4a_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0254543b540911a2160ba62c1423cbe9f2981f1112d753d44cea5d17fec02aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0254543b540911a2160ba62c1423cbe9f2981f1112d753d44cea5d17fec02aae->enter($__internal_0254543b540911a2160ba62c1423cbe9f2981f1112d753d44cea5d17fec02aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_59aabcfbb87e6ea7f9a028c1e042e2c44330608c92b165cd9188bcf28dfecc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59aabcfbb87e6ea7f9a028c1e042e2c44330608c92b165cd9188bcf28dfecc86->enter($__internal_59aabcfbb87e6ea7f9a028c1e042e2c44330608c92b165cd9188bcf28dfecc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

";
        
        $__internal_59aabcfbb87e6ea7f9a028c1e042e2c44330608c92b165cd9188bcf28dfecc86->leave($__internal_59aabcfbb87e6ea7f9a028c1e042e2c44330608c92b165cd9188bcf28dfecc86_prof);

        
        $__internal_0254543b540911a2160ba62c1423cbe9f2981f1112d753d44cea5d17fec02aae->leave($__internal_0254543b540911a2160ba62c1423cbe9f2981f1112d753d44cea5d17fec02aae_prof);

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
        return array (  143 => 41,  122 => 29,  118 => 28,  111 => 24,  104 => 20,  96 => 19,  89 => 14,  80 => 11,  77 => 10,  73 => 9,  61 => 7,  42 => 5,  11 => 3,);
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


{% endblock %}

{% block javascripts %} 

{% endblock %}", "OCBookingBundle:Paymentform:payment.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Paymentform/payment.html.twig");
    }
}
