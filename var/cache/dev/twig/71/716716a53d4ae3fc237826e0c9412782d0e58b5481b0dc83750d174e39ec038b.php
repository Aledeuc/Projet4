<?php

/* ::layout.html.twig */
class __TwigTemplate_1f3e13b13a89c750d565f03779a52d36c15df9abfefe5b4df4c7a59a4526718e extends Twig_Template
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
        $__internal_ce5b340173c7265fc84dd5d8a08f7c127874aa1d6d6c3b3f68c3e1c8ac875166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5b340173c7265fc84dd5d8a08f7c127874aa1d6d6c3b3f68c3e1c8ac875166->enter($__internal_ce5b340173c7265fc84dd5d8a08f7c127874aa1d6d6c3b3f68c3e1c8ac875166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ef905e492329813e6bc27e4f4d6b6dad828d7524b3a8a098ce919951b52c05f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef905e492329813e6bc27e4f4d6b6dad828d7524b3a8a098ce919951b52c05f1->enter($__internal_ef905e492329813e6bc27e4f4d6b6dad828d7524b3a8a098ce919951b52c05f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_ce5b340173c7265fc84dd5d8a08f7c127874aa1d6d6c3b3f68c3e1c8ac875166->leave($__internal_ce5b340173c7265fc84dd5d8a08f7c127874aa1d6d6c3b3f68c3e1c8ac875166_prof);

        
        $__internal_ef905e492329813e6bc27e4f4d6b6dad828d7524b3a8a098ce919951b52c05f1->leave($__internal_ef905e492329813e6bc27e4f4d6b6dad828d7524b3a8a098ce919951b52c05f1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_415df4882492a74c9274e5f877c4f2503ba9e4164836877c52bdd024a1cd540d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415df4882492a74c9274e5f877c4f2503ba9e4164836877c52bdd024a1cd540d->enter($__internal_415df4882492a74c9274e5f877c4f2503ba9e4164836877c52bdd024a1cd540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2f33c9419cf4d46661f6956c366a5d0262a1b978ead170ab6a66e62ecc9b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f33c9419cf4d46661f6956c366a5d0262a1b978ead170ab6a66e62ecc9b841->enter($__internal_a2f33c9419cf4d46661f6956c366a5d0262a1b978ead170ab6a66e62ecc9b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_a2f33c9419cf4d46661f6956c366a5d0262a1b978ead170ab6a66e62ecc9b841->leave($__internal_a2f33c9419cf4d46661f6956c366a5d0262a1b978ead170ab6a66e62ecc9b841_prof);

        
        $__internal_415df4882492a74c9274e5f877c4f2503ba9e4164836877c52bdd024a1cd540d->leave($__internal_415df4882492a74c9274e5f877c4f2503ba9e4164836877c52bdd024a1cd540d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6997ecffeed7f412f29d62800725f94de69b3ee5bcf863fdd929556f9b6fa6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6997ecffeed7f412f29d62800725f94de69b3ee5bcf863fdd929556f9b6fa6d3->enter($__internal_6997ecffeed7f412f29d62800725f94de69b3ee5bcf863fdd929556f9b6fa6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0e56aa00f2e42c5c6979c3d6a92336c249f4eac5b4e76d3fc28fdd6977ac7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e56aa00f2e42c5c6979c3d6a92336c249f4eac5b4e76d3fc28fdd6977ac7a5->enter($__internal_e0e56aa00f2e42c5c6979c3d6a92336c249f4eac5b4e76d3fc28fdd6977ac7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> ";
        
        $__internal_e0e56aa00f2e42c5c6979c3d6a92336c249f4eac5b4e76d3fc28fdd6977ac7a5->leave($__internal_e0e56aa00f2e42c5c6979c3d6a92336c249f4eac5b4e76d3fc28fdd6977ac7a5_prof);

        
        $__internal_6997ecffeed7f412f29d62800725f94de69b3ee5bcf863fdd929556f9b6fa6d3->leave($__internal_6997ecffeed7f412f29d62800725f94de69b3ee5bcf863fdd929556f9b6fa6d3_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e6893e74b14bed2695d52f79b7eea684309d7297e503dbf6160fe5369c8e7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6893e74b14bed2695d52f79b7eea684309d7297e503dbf6160fe5369c8e7f7->enter($__internal_4e6893e74b14bed2695d52f79b7eea684309d7297e503dbf6160fe5369c8e7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3e44f3de7d1e015843de69f74ff970eb40414c06ddb81ab6d13969b9dcc3f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e44f3de7d1e015843de69f74ff970eb40414c06ddb81ab6d13969b9dcc3f70->enter($__internal_a3e44f3de7d1e015843de69f74ff970eb40414c06ddb81ab6d13969b9dcc3f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        // line 29
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_a3e44f3de7d1e015843de69f74ff970eb40414c06ddb81ab6d13969b9dcc3f70->leave($__internal_a3e44f3de7d1e015843de69f74ff970eb40414c06ddb81ab6d13969b9dcc3f70_prof);

        
        $__internal_4e6893e74b14bed2695d52f79b7eea684309d7297e503dbf6160fe5369c8e7f7->leave($__internal_4e6893e74b14bed2695d52f79b7eea684309d7297e503dbf6160fe5369c8e7f7_prof);

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
        return array (  130 => 29,  120 => 28,  110 => 13,  100 => 12,  82 => 10,  69 => 32,  67 => 28,  60 => 24,  51 => 18,  45 => 14,  43 => 12,  38 => 10,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Musée du Louvre{% endblock %}</title>

    {% block stylesheets %} {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> {% endblock %}
</head>

<body>
    <div class=\"container\">
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('oc_booking_homepageEn') }}\">
      EN 
    </a>
    </div>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
    </div>

    {% block javascripts %} {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    {% endblock %}

</body>

</html>", "::layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/app/Resources/views/layout.html.twig");
    }
}
