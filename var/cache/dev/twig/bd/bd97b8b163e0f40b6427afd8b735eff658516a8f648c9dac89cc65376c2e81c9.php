<?php

/* Emails/confirmation.html.twig */
class __TwigTemplate_04cf99ddcc9b66f9a2798d8490c3f5d6035639716c150f99efc1af7006f55cec extends Twig_Template
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
        $__internal_54ee47c721319df9eff94b7c952efa717f2054dad1631e189021a557c584908c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ee47c721319df9eff94b7c952efa717f2054dad1631e189021a557c584908c->enter($__internal_54ee47c721319df9eff94b7c952efa717f2054dad1631e189021a557c584908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        $__internal_b844cd97bf784204606ca2764ed03c07cac908e22838cfab2646b322f4e4e57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b844cd97bf784204606ca2764ed03c07cac908e22838cfab2646b322f4e4e57e->enter($__internal_b844cd97bf784204606ca2764ed03c07cac908e22838cfab2646b322f4e4e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        // line 2
        echo "
<h3>Commande effecuté avec succès !</h3>

Bonjour,

<p>Votre réservation numéro ";
        // line 7
        echo twig_escape_filter($this->env, ($context["numReservation"] ?? $this->getContext($context, "numReservation")), "html", null, true);
        echo " d'un montant de ";
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo "€ pour le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateOfBooking"] ?? $this->getContext($context, "dateOfBooking")), "d/m/Y"), "html", null, true);
        echo " 
    sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> 
    a bien été pris en compte.</p> 

<p>Votre réservation a été validé pour les personnes suivantes :</p>


    <li>";
        // line 14
        echo twig_escape_filter($this->env, twig_join_filter(($context["tableauNom"] ?? $this->getContext($context, "tableauNom")), ", "), "html", null, true);
        echo "</li>


<p>Nous vous souhaitons une agréable visite.</p>



<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["imageSrc"] ?? $this->getContext($context, "imageSrc")), "html", null, true);
        echo "\" alt=\"Logo musee\">";
        
        $__internal_54ee47c721319df9eff94b7c952efa717f2054dad1631e189021a557c584908c->leave($__internal_54ee47c721319df9eff94b7c952efa717f2054dad1631e189021a557c584908c_prof);

        
        $__internal_b844cd97bf784204606ca2764ed03c07cac908e22838cfab2646b322f4e4e57e->leave($__internal_b844cd97bf784204606ca2764ed03c07cac908e22838cfab2646b322f4e4e57e_prof);

    }

    public function getTemplateName()
    {
        return "Emails/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  46 => 14,  32 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Emails/registration.html.twig #}

<h3>Commande effecuté avec succès !</h3>

Bonjour,

<p>Votre réservation numéro {{ numReservation }} d'un montant de {{ totalPrice }}€ pour le {{ dateOfBooking|date('d/m/Y') }} 
    sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> 
    a bien été pris en compte.</p> 

<p>Votre réservation a été validé pour les personnes suivantes :</p>


    <li>{{ tableauNom|join(', ') }}</li>


<p>Nous vous souhaitons une agréable visite.</p>



<img src=\"{{ imageSrc }}\" alt=\"Logo musee\">", "Emails/confirmation.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/Emails/confirmation.html.twig");
    }
}
