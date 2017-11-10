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
        $__internal_3c0bef3f64bf2b9c512d37a87263ae46778da49d1b7a718a80aed7bb24b94e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0bef3f64bf2b9c512d37a87263ae46778da49d1b7a718a80aed7bb24b94e67->enter($__internal_3c0bef3f64bf2b9c512d37a87263ae46778da49d1b7a718a80aed7bb24b94e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        $__internal_d0d0d1dbfb597f2f1fc4dd44b1852fffd08e3b233af34648e959f2b559ff02aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d0d1dbfb597f2f1fc4dd44b1852fffd08e3b233af34648e959f2b559ff02aa->enter($__internal_d0d0d1dbfb597f2f1fc4dd44b1852fffd08e3b233af34648e959f2b559ff02aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Emails/confirmation.html.twig"));

        // line 2
        echo "
<h3>Commande effecuté avec succès !</h3>

Bonjour,

";
        // line 8
        echo "<p>Votre réservation pour le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateOfBooking"] ?? $this->getContext($context, "dateOfBooking")), "d/m/Y"), "html", null, true);
        echo " sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> à bien été pris en compte.</p> 

<p>Nous vous souhaitons une agréable visite.</p>



<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["imageSrc"] ?? $this->getContext($context, "imageSrc")), "html", null, true);
        echo "\" alt=\"Logo musee\">";
        
        $__internal_3c0bef3f64bf2b9c512d37a87263ae46778da49d1b7a718a80aed7bb24b94e67->leave($__internal_3c0bef3f64bf2b9c512d37a87263ae46778da49d1b7a718a80aed7bb24b94e67_prof);

        
        $__internal_d0d0d1dbfb597f2f1fc4dd44b1852fffd08e3b233af34648e959f2b559ff02aa->leave($__internal_d0d0d1dbfb597f2f1fc4dd44b1852fffd08e3b233af34648e959f2b559ff02aa_prof);

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
        return array (  42 => 14,  32 => 8,  25 => 2,);
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

{# example, assuming you have a route named \"login\" #}
<p>Votre réservation pour le {{ dateOfBooking|date('d/m/Y') }} sur le site du <a href=\"http://localhost:8888/web/app_dev.php/museedulouvre.fr\"> Musée du Louvre</a> à bien été pris en compte.</p> 

<p>Nous vous souhaitons une agréable visite.</p>



<img src=\"{{ imageSrc }}\" alt=\"Logo musee\">", "Emails/confirmation.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/Emails/confirmation.html.twig");
    }
}
