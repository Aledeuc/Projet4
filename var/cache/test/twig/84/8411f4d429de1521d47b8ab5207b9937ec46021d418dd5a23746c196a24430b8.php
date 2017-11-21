<?php

/* ::layout.html.twig */
class __TwigTemplate_e1f7f87ec41b48af8fed1342f5b3c528629f552ceb88412bb55db66d74a240ad extends Twig_Template
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
        $__internal_fe8f7332bf7aea2509c1fb4ae4c2864131ea0f17034255ba86ec373214598ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8f7332bf7aea2509c1fb4ae4c2864131ea0f17034255ba86ec373214598ee2->enter($__internal_fe8f7332bf7aea2509c1fb4ae4c2864131ea0f17034255ba86ec373214598ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_7bd9f73e861e3c57e38f391a92b870726186836fddd1fcbf6afb7e92032efd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd9f73e861e3c57e38f391a92b870726186836fddd1fcbf6afb7e92032efd44->enter($__internal_7bd9f73e861e3c57e38f391a92b870726186836fddd1fcbf6afb7e92032efd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_fe8f7332bf7aea2509c1fb4ae4c2864131ea0f17034255ba86ec373214598ee2->leave($__internal_fe8f7332bf7aea2509c1fb4ae4c2864131ea0f17034255ba86ec373214598ee2_prof);

        
        $__internal_7bd9f73e861e3c57e38f391a92b870726186836fddd1fcbf6afb7e92032efd44->leave($__internal_7bd9f73e861e3c57e38f391a92b870726186836fddd1fcbf6afb7e92032efd44_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_67fb51dfbecf059be4a286f82d872acf1f0bed3cddf8850fad336ffa00c8b089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fb51dfbecf059be4a286f82d872acf1f0bed3cddf8850fad336ffa00c8b089->enter($__internal_67fb51dfbecf059be4a286f82d872acf1f0bed3cddf8850fad336ffa00c8b089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdd2c61bd4ba539bba67d000c129d3abcf886795082ba82ebadd7ed28c0e031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd2c61bd4ba539bba67d000c129d3abcf886795082ba82ebadd7ed28c0e031f->enter($__internal_bdd2c61bd4ba539bba67d000c129d3abcf886795082ba82ebadd7ed28c0e031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_bdd2c61bd4ba539bba67d000c129d3abcf886795082ba82ebadd7ed28c0e031f->leave($__internal_bdd2c61bd4ba539bba67d000c129d3abcf886795082ba82ebadd7ed28c0e031f_prof);

        
        $__internal_67fb51dfbecf059be4a286f82d872acf1f0bed3cddf8850fad336ffa00c8b089->leave($__internal_67fb51dfbecf059be4a286f82d872acf1f0bed3cddf8850fad336ffa00c8b089_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4cfea1386d550ae4c201b25bccef75dc02914826046889195e78ea4c0ec1d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cfea1386d550ae4c201b25bccef75dc02914826046889195e78ea4c0ec1d5b->enter($__internal_d4cfea1386d550ae4c201b25bccef75dc02914826046889195e78ea4c0ec1d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a1c833ab474dfd84d26f88cab70a87d8d7ae63cb59db9008620e0c80fdbf319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1c833ab474dfd84d26f88cab70a87d8d7ae63cb59db9008620e0c80fdbf319->enter($__internal_6a1c833ab474dfd84d26f88cab70a87d8d7ae63cb59db9008620e0c80fdbf319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6a1c833ab474dfd84d26f88cab70a87d8d7ae63cb59db9008620e0c80fdbf319->leave($__internal_6a1c833ab474dfd84d26f88cab70a87d8d7ae63cb59db9008620e0c80fdbf319_prof);

        
        $__internal_d4cfea1386d550ae4c201b25bccef75dc02914826046889195e78ea4c0ec1d5b->leave($__internal_d4cfea1386d550ae4c201b25bccef75dc02914826046889195e78ea4c0ec1d5b_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e85fc23958818af562e3212b0d22aba1f26953e8e8a38427c92ce5aeb8dab4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e85fc23958818af562e3212b0d22aba1f26953e8e8a38427c92ce5aeb8dab4d->enter($__internal_9e85fc23958818af562e3212b0d22aba1f26953e8e8a38427c92ce5aeb8dab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a369ddfc5b146ded4c602d9a893c2aa298b379df9922c9f755ce592fef8b97f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a369ddfc5b146ded4c602d9a893c2aa298b379df9922c9f755ce592fef8b97f7->enter($__internal_a369ddfc5b146ded4c602d9a893c2aa298b379df9922c9f755ce592fef8b97f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_a369ddfc5b146ded4c602d9a893c2aa298b379df9922c9f755ce592fef8b97f7->leave($__internal_a369ddfc5b146ded4c602d9a893c2aa298b379df9922c9f755ce592fef8b97f7_prof);

        
        $__internal_9e85fc23958818af562e3212b0d22aba1f26953e8e8a38427c92ce5aeb8dab4d->leave($__internal_9e85fc23958818af562e3212b0d22aba1f26953e8e8a38427c92ce5aeb8dab4d_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71dbc23d5f9a94952eeb19512e82604c2a9eecac16a53759196825dda5111a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71dbc23d5f9a94952eeb19512e82604c2a9eecac16a53759196825dda5111a2e->enter($__internal_71dbc23d5f9a94952eeb19512e82604c2a9eecac16a53759196825dda5111a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a81f84d6a2b6a214ddc29a2b76254f276aed95b0931df29a69d35fd9b55e514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a81f84d6a2b6a214ddc29a2b76254f276aed95b0931df29a69d35fd9b55e514->enter($__internal_0a81f84d6a2b6a214ddc29a2b76254f276aed95b0931df29a69d35fd9b55e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_0a81f84d6a2b6a214ddc29a2b76254f276aed95b0931df29a69d35fd9b55e514->leave($__internal_0a81f84d6a2b6a214ddc29a2b76254f276aed95b0931df29a69d35fd9b55e514_prof);

        
        $__internal_71dbc23d5f9a94952eeb19512e82604c2a9eecac16a53759196825dda5111a2e->leave($__internal_71dbc23d5f9a94952eeb19512e82604c2a9eecac16a53759196825dda5111a2e_prof);

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
