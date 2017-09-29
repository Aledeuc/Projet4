<?php

/* OCBookingBundle:Formulaire:ticketing.html.twig */
class __TwigTemplate_66bf02edec31e5745cab96f5a8cf8fd2aeaa971b5687507e7480e56fbddddb57 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>

<head>
    <title>Musée du louvre</title>
</head>

<body>
    <p id=\"presentation\"> Bienvenue sur la page de réservation</p>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepageEn");
        echo "\">EN</a>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "OCBookingBundle:Formulaire:ticketing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCBookingBundle:Formulaire:ticketing.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Formulaire/ticketing.html.twig");
    }
}
