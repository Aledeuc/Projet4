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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCBookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ed85d31d8918654c7659ddc66274bd5188231ff88c0a28a32b47e9cf8ff21ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed85d31d8918654c7659ddc66274bd5188231ff88c0a28a32b47e9cf8ff21ca->enter($__internal_4ed85d31d8918654c7659ddc66274bd5188231ff88c0a28a32b47e9cf8ff21ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $__internal_9950245b801483dbae6de0aca2eebf4a19d04dee39b79dceb1f5ef011c559a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9950245b801483dbae6de0aca2eebf4a19d04dee39b79dceb1f5ef011c559a6a->enter($__internal_9950245b801483dbae6de0aca2eebf4a19d04dee39b79dceb1f5ef011c559a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Paymentform:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed85d31d8918654c7659ddc66274bd5188231ff88c0a28a32b47e9cf8ff21ca->leave($__internal_4ed85d31d8918654c7659ddc66274bd5188231ff88c0a28a32b47e9cf8ff21ca_prof);

        
        $__internal_9950245b801483dbae6de0aca2eebf4a19d04dee39b79dceb1f5ef011c559a6a->leave($__internal_9950245b801483dbae6de0aca2eebf4a19d04dee39b79dceb1f5ef011c559a6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_076c2731e833c1dc1f0acd6d7eab7168ef0879422383913f4fa5f30216d119f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076c2731e833c1dc1f0acd6d7eab7168ef0879422383913f4fa5f30216d119f4->enter($__internal_076c2731e833c1dc1f0acd6d7eab7168ef0879422383913f4fa5f30216d119f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8455ca6f771f08760acb2a01feaebf7576f46cc833d22cb9fe5435faa6cae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8455ca6f771f08760acb2a01feaebf7576f46cc833d22cb9fe5435faa6cae9f->enter($__internal_c8455ca6f771f08760acb2a01feaebf7576f46cc833d22cb9fe5435faa6cae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Boutique";
        
        $__internal_c8455ca6f771f08760acb2a01feaebf7576f46cc833d22cb9fe5435faa6cae9f->leave($__internal_c8455ca6f771f08760acb2a01feaebf7576f46cc833d22cb9fe5435faa6cae9f_prof);

        
        $__internal_076c2731e833c1dc1f0acd6d7eab7168ef0879422383913f4fa5f30216d119f4->leave($__internal_076c2731e833c1dc1f0acd6d7eab7168ef0879422383913f4fa5f30216d119f4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_df5aae0375dd62e2c8cc0a335dbd428b615151bfa21c23429a6ae8b667ad81a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5aae0375dd62e2c8cc0a335dbd428b615151bfa21c23429a6ae8b667ad81a3->enter($__internal_df5aae0375dd62e2c8cc0a335dbd428b615151bfa21c23429a6ae8b667ad81a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5bcec0608509e1f2865d320d5f1d5d1390802fb5dace694d9b1c4aa75efa65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bcec0608509e1f2865d320d5f1d5d1390802fb5dace694d9b1c4aa75efa65a->enter($__internal_d5bcec0608509e1f2865d320d5f1d5d1390802fb5dace694d9b1c4aa75efa65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<form action=\"/web/app_dev.php/museedulouvre.fr\" method=\"post\" id=\"payment-form\">
  <div class=\"form-row\">
    <label for=\"card-element\">
      Carte bleu
    </label>
    <div id=\"card-element\">
      <!-- a Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors -->
    <div id=\"card-errors\" role=\"alert\"></div>
  </div>

  <button class=\"paymentButton\">Payer</button>


</form>

";
        
        $__internal_d5bcec0608509e1f2865d320d5f1d5d1390802fb5dace694d9b1c4aa75efa65a->leave($__internal_d5bcec0608509e1f2865d320d5f1d5d1390802fb5dace694d9b1c4aa75efa65a_prof);

        
        $__internal_df5aae0375dd62e2c8cc0a335dbd428b615151bfa21c23429a6ae8b667ad81a3->leave($__internal_df5aae0375dd62e2c8cc0a335dbd428b615151bfa21c23429a6ae8b667ad81a3_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1df65e1cdfdb4dc68adb58c526ea3a446a21080bb0ea889493f22e00809bcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1df65e1cdfdb4dc68adb58c526ea3a446a21080bb0ea889493f22e00809bcc8->enter($__internal_e1df65e1cdfdb4dc68adb58c526ea3a446a21080bb0ea889493f22e00809bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c73e274a3c463c97301ee6a2008bc92b5dc95d85d50a2789ae26871d137ac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c73e274a3c463c97301ee6a2008bc92b5dc95d85d50a2789ae26871d137ac7b->enter($__internal_9c73e274a3c463c97301ee6a2008bc92b5dc95d85d50a2789ae26871d137ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
<script src=\"https://js.stripe.com/v3/\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stripeForm.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9c73e274a3c463c97301ee6a2008bc92b5dc95d85d50a2789ae26871d137ac7b->leave($__internal_9c73e274a3c463c97301ee6a2008bc92b5dc95d85d50a2789ae26871d137ac7b_prof);

        
        $__internal_e1df65e1cdfdb4dc68adb58c526ea3a446a21080bb0ea889493f22e00809bcc8->leave($__internal_e1df65e1cdfdb4dc68adb58c526ea3a446a21080bb0ea889493f22e00809bcc8_prof);

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
        return array (  111 => 31,  99 => 29,  70 => 8,  61 => 7,  42 => 5,  11 => 3,);
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

{% block body %}

<form action=\"/web/app_dev.php/museedulouvre.fr\" method=\"post\" id=\"payment-form\">
  <div class=\"form-row\">
    <label for=\"card-element\">
      Carte bleu
    </label>
    <div id=\"card-element\">
      <!-- a Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors -->
    <div id=\"card-errors\" role=\"alert\"></div>
  </div>

  <button class=\"paymentButton\">Payer</button>


</form>

{% endblock %}

{% block javascripts %} 
<script src=\"https://js.stripe.com/v3/\"></script>
<script src=\"{{ asset('js/stripeForm.js') }}\"></script>
{% endblock %}", "OCBookingBundle:Paymentform:payment.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/src/OC/BookingBundle/Resources/views/Paymentform/payment.html.twig");
    }
}
