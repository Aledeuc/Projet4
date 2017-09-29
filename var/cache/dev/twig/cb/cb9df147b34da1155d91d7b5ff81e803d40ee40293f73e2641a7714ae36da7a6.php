<?php

/* OCBookingBundle:Formulaire:ticketing.html.twig */
class __TwigTemplate_fa05a25626c674c8feb5a050ca2bfe22246b3b270da36a9bf76120d7c8b00a09 extends Twig_Template
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
        $__internal_73d07956eeccfbbaba910f1954589e102ef1ef84e9a9aeea84ad1e5849b67148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d07956eeccfbbaba910f1954589e102ef1ef84e9a9aeea84ad1e5849b67148->enter($__internal_73d07956eeccfbbaba910f1954589e102ef1ef84e9a9aeea84ad1e5849b67148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:ticketing.html.twig"));

        $__internal_d0549caf843a07106eba87f3baf6f8e00f6d280b803414464d287607d55dd0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0549caf843a07106eba87f3baf6f8e00f6d280b803414464d287607d55dd0ca->enter($__internal_d0549caf843a07106eba87f3baf6f8e00f6d280b803414464d287607d55dd0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCBookingBundle:Formulaire:ticketing.html.twig"));

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
        
        $__internal_73d07956eeccfbbaba910f1954589e102ef1ef84e9a9aeea84ad1e5849b67148->leave($__internal_73d07956eeccfbbaba910f1954589e102ef1ef84e9a9aeea84ad1e5849b67148_prof);

        
        $__internal_d0549caf843a07106eba87f3baf6f8e00f6d280b803414464d287607d55dd0ca->leave($__internal_d0549caf843a07106eba87f3baf6f8e00f6d280b803414464d287607d55dd0ca_prof);

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
        return array (  37 => 12,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/BookingBundle/Resources/views/Formulaire/ticketing.html.twig #}

<!DOCTYPE html>
<html>

<head>
    <title>Musée du louvre</title>
</head>

<body>
    <p id=\"presentation\"> Bienvenue sur la page de réservation</p>
    <a href=\"{{ path('oc_booking_homepageEn') }}\">EN</a>

</body>

</html>", "OCBookingBundle:Formulaire:ticketing.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/src/OC/BookingBundle/Resources/views/Formulaire/ticketing.html.twig");
    }
}
