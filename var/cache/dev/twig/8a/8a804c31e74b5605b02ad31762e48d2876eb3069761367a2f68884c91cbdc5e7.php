<?php

/* ::layout.html.twig */
class __TwigTemplate_1e0e6001b1405279f82fe97b0d47945ab71a917532f34f220d6a944886abce59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f130e9e16186843a64e528418b353b63147bce5ab5436091de1fc31321bc4c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f130e9e16186843a64e528418b353b63147bce5ab5436091de1fc31321bc4c53->enter($__internal_f130e9e16186843a64e528418b353b63147bce5ab5436091de1fc31321bc4c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_a22daf3fb7fc1c2262bdf02fcb613685046ea38c66c387e031227e319a698266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22daf3fb7fc1c2262bdf02fcb613685046ea38c66c387e031227e319a698266->enter($__internal_a22daf3fb7fc1c2262bdf02fcb613685046ea38c66c387e031227e319a698266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
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
        // line 27
        echo "    </head>

    <body>   
        <div class=\"topSite\">
            <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepage");
        echo "\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_44.png"), "html", null, true);
        echo "\"  class=\"logoLouvre\" alt=\"logomuseedulouvre\">
            </a> 

                <div class=\"reseauxsociaux\">
                    <a href=\"https://twitter.com/museelouvre\" class=\"btn btn-social-icon btn-twitter\">
                        <span class=\"fa fa-twitter\"></span>
                    </a>

                    <a href=\"https://www.facebook.com/museedulouvre\" class=\"btn btn-social-icon btn-facebook\">
                        <span class=\"fa fa-facebook\"></span>
                    </a>
                </div>
        </div>


        <div id=\"content\" class=\"col-lg-12\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
        
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
        <footer>
            <p>The sky's the limit © ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </body>
</html>";
        
        $__internal_f130e9e16186843a64e528418b353b63147bce5ab5436091de1fc31321bc4c53->leave($__internal_f130e9e16186843a64e528418b353b63147bce5ab5436091de1fc31321bc4c53_prof);

        
        $__internal_a22daf3fb7fc1c2262bdf02fcb613685046ea38c66c387e031227e319a698266->leave($__internal_a22daf3fb7fc1c2262bdf02fcb613685046ea38c66c387e031227e319a698266_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_357b958a3e06b101c51fb4d11feccab746f8caae357ea5d8f6e1deebb9d6aaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357b958a3e06b101c51fb4d11feccab746f8caae357ea5d8f6e1deebb9d6aaa2->enter($__internal_357b958a3e06b101c51fb4d11feccab746f8caae357ea5d8f6e1deebb9d6aaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54780640ed4928008528c8b67c174776e079949011df66d48365731b1cb6f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54780640ed4928008528c8b67c174776e079949011df66d48365731b1cb6f630->enter($__internal_54780640ed4928008528c8b67c174776e079949011df66d48365731b1cb6f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_54780640ed4928008528c8b67c174776e079949011df66d48365731b1cb6f630->leave($__internal_54780640ed4928008528c8b67c174776e079949011df66d48365731b1cb6f630_prof);

        
        $__internal_357b958a3e06b101c51fb4d11feccab746f8caae357ea5d8f6e1deebb9d6aaa2->leave($__internal_357b958a3e06b101c51fb4d11feccab746f8caae357ea5d8f6e1deebb9d6aaa2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c77f3089a50e70a9f10b87233e63870896189de3fc357b9edaf9bf8328afd413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77f3089a50e70a9f10b87233e63870896189de3fc357b9edaf9bf8328afd413->enter($__internal_c77f3089a50e70a9f10b87233e63870896189de3fc357b9edaf9bf8328afd413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8435c567056ddebc14a3b1d06f52efb917f5c44d2892ce72fe9ee9a8f823bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8435c567056ddebc14a3b1d06f52efb917f5c44d2892ce72fe9ee9a8f823bd9->enter($__internal_b8435c567056ddebc14a3b1d06f52efb917f5c44d2892ce72fe9ee9a8f823bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <!--bootstrap -->
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- css -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <!-- jquery -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- bouton réseaux sociaux -->
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <!-- date picker -->
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <!-- Stripe -->
        <script src=\"https://js.stripe.com/v3/\"></script>
        ";
        
        $__internal_b8435c567056ddebc14a3b1d06f52efb917f5c44d2892ce72fe9ee9a8f823bd9->leave($__internal_b8435c567056ddebc14a3b1d06f52efb917f5c44d2892ce72fe9ee9a8f823bd9_prof);

        
        $__internal_c77f3089a50e70a9f10b87233e63870896189de3fc357b9edaf9bf8328afd413->leave($__internal_c77f3089a50e70a9f10b87233e63870896189de3fc357b9edaf9bf8328afd413_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_477bcab9ba38555147e00af39cb6d83b63df34df30daf7a9ad6e7310cce16cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477bcab9ba38555147e00af39cb6d83b63df34df30daf7a9ad6e7310cce16cb8->enter($__internal_477bcab9ba38555147e00af39cb6d83b63df34df30daf7a9ad6e7310cce16cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efaa8c7a6c6e51f0e0db3e2ea2e3fa82cba1aaaec47d6cbba1c8f0ee7b7477ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaa8c7a6c6e51f0e0db3e2ea2e3fa82cba1aaaec47d6cbba1c8f0ee7b7477ef->enter($__internal_efaa8c7a6c6e51f0e0db3e2ea2e3fa82cba1aaaec47d6cbba1c8f0ee7b7477ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_efaa8c7a6c6e51f0e0db3e2ea2e3fa82cba1aaaec47d6cbba1c8f0ee7b7477ef->leave($__internal_efaa8c7a6c6e51f0e0db3e2ea2e3fa82cba1aaaec47d6cbba1c8f0ee7b7477ef_prof);

        
        $__internal_477bcab9ba38555147e00af39cb6d83b63df34df30daf7a9ad6e7310cce16cb8->leave($__internal_477bcab9ba38555147e00af39cb6d83b63df34df30daf7a9ad6e7310cce16cb8_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f094d440b4b571f626e156e4af184bc5d0dbbb33e43980a78a085e013f7a5983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f094d440b4b571f626e156e4af184bc5d0dbbb33e43980a78a085e013f7a5983->enter($__internal_f094d440b4b571f626e156e4af184bc5d0dbbb33e43980a78a085e013f7a5983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c2ea8748670a1a502276f3ed26d95c66ecad239d4dfa02011e4903c32dc264e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2ea8748670a1a502276f3ed26d95c66ecad239d4dfa02011e4903c32dc264e->enter($__internal_9c2ea8748670a1a502276f3ed26d95c66ecad239d4dfa02011e4903c32dc264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_9c2ea8748670a1a502276f3ed26d95c66ecad239d4dfa02011e4903c32dc264e->leave($__internal_9c2ea8748670a1a502276f3ed26d95c66ecad239d4dfa02011e4903c32dc264e_prof);

        
        $__internal_f094d440b4b571f626e156e4af184bc5d0dbbb33e43980a78a085e013f7a5983->leave($__internal_f094d440b4b571f626e156e4af184bc5d0dbbb33e43980a78a085e013f7a5983_prof);

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
        return array (  172 => 51,  154 => 48,  134 => 17,  119 => 12,  101 => 10,  87 => 58,  83 => 56,  81 => 51,  77 => 49,  75 => 48,  56 => 32,  52 => 31,  46 => 27,  44 => 12,  39 => 10,  29 => 2,);
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

<!DOCTYPE HTML>
<html>

    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}Musée du Louvre{% endblock %}</title>

        {% block stylesheets %} 
        <!--bootstrap -->
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <!-- jquery -->
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!-- bouton réseaux sociaux -->
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <!-- date picker -->
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <!-- Stripe -->
        <script src=\"https://js.stripe.com/v3/\"></script>
        {% endblock %}
    </head>

    <body>   
        <div class=\"topSite\">
            <a href=\"{{ path('oc_booking_homepage') }}\">
                <img src=\"{{ asset('images/logo_44.png') }}\"  class=\"logoLouvre\" alt=\"logomuseedulouvre\">
            </a> 

                <div class=\"reseauxsociaux\">
                    <a href=\"https://twitter.com/museelouvre\" class=\"btn btn-social-icon btn-twitter\">
                        <span class=\"fa fa-twitter\"></span>
                    </a>

                    <a href=\"https://www.facebook.com/museedulouvre\" class=\"btn btn-social-icon btn-facebook\">
                        <span class=\"fa fa-facebook\"></span>
                    </a>
                </div>
        </div>


        <div id=\"content\" class=\"col-lg-12\">
            {% block body %} {% endblock %}
        </div>
        
        {% block javascripts %} 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        {% endblock %}

        <footer>
            <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
        </footer>
    </body>
</html>", "::layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/layout.html.twig");
    }
}
