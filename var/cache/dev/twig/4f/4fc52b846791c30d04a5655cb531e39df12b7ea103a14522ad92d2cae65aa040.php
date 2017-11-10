<?php

/* Emails/confirmation.html.twig */
class __TwigTemplate_2052275eb1b5db40e5c715a18e45492bda3c5d6824db47834b0413995f996694 extends Twig_Template
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
        $__internal_9270287e59319d79ae69ad93c6cfa7daa0bed982c34d9765b5926206db8a93fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9270287e59319d79ae69ad93c6cfa7daa0bed982c34d9765b5926206db8a93fd->enter($__internal_9270287e59319d79ae69ad93c6cfa7daa0bed982c34d9765b5926206db8a93fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        $__internal_6d2ff9df08114953a3651a41f7c95330d6a51ead635e7a846984d8c406a65a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2ff9df08114953a3651a41f7c95330d6a51ead635e7a846984d8c406a65a0d->enter($__internal_6d2ff9df08114953a3651a41f7c95330d6a51ead635e7a846984d8c406a65a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        // line 2
        echo "
<h3>Commande effecuté avec succès !</h3>

Bonjour,

<p>Votre réservation numéro ";
        // line 7
        echo twig_escape_filter($this->env, ($context["numReservation"] ?? $this->getContext($context, "numReservation")), "html", null, true);
        echo " d'en montant de ";
        echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
        echo " pour le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateOfBooking"] ?? $this->getContext($context, "dateOfBooking")), "d/m/Y"), "html", null, true);
        echo " 
    sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> 
    à bien été pris en compte.</p> 

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
        
        $__internal_9270287e59319d79ae69ad93c6cfa7daa0bed982c34d9765b5926206db8a93fd->leave($__internal_9270287e59319d79ae69ad93c6cfa7daa0bed982c34d9765b5926206db8a93fd_prof);

        
        $__internal_6d2ff9df08114953a3651a41f7c95330d6a51ead635e7a846984d8c406a65a0d->leave($__internal_6d2ff9df08114953a3651a41f7c95330d6a51ead635e7a846984d8c406a65a0d_prof);

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

<p>Votre réservation numéro {{ numReservation }} d'en montant de {{ totalPrice }} pour le {{ dateOfBooking|date('d/m/Y') }} 
    sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> 
    à bien été pris en compte.</p> 

<p>Votre réservation a été validé pour les personnes suivantes :</p>


    <li>{{ tableauNom|join(', ') }}</li>


<p>Nous vous souhaitons une agréable visite.</p>



<img src=\"{{ imageSrc }}\" alt=\"Logo musee\">", "Emails/confirmation.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/Emails/confirmation.html.twig");
    }
}
