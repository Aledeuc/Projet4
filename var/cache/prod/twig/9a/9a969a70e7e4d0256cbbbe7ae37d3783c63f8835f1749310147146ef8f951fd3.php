<?php

/* ::layout.html.twig */
class __TwigTemplate_a82e803ba17d19fdd4cbd1e393f9078650a336e1e83aa0fb8d723d990ad4485c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
    <div class=\"container\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepageEn");
        echo "\">
      EN 
    </a>
    </div>

    <footer>
        <p>The sky's the limit © ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
    </div>

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
</body>

</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Musée du Louvre";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 29
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  84 => 28,  80 => 13,  76 => 12,  70 => 10,  63 => 32,  61 => 28,  54 => 24,  45 => 18,  39 => 14,  37 => 12,  32 => 10,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/app/Resources/views/layout.html.twig");
    }
}
