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
        $__internal_a638dff4a4dd930f82fc7b2d605e62c177ad89581b23aafd43f54ffdacb0dbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a638dff4a4dd930f82fc7b2d605e62c177ad89581b23aafd43f54ffdacb0dbc0->enter($__internal_a638dff4a4dd930f82fc7b2d605e62c177ad89581b23aafd43f54ffdacb0dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_bbdc3f16b5c8d47eba70073e20e36f99d7887cae65eb0d251c497a437609125c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdc3f16b5c8d47eba70073e20e36f99d7887cae65eb0d251c497a437609125c->enter($__internal_bbdc3f16b5c8d47eba70073e20e36f99d7887cae65eb0d251c497a437609125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_a638dff4a4dd930f82fc7b2d605e62c177ad89581b23aafd43f54ffdacb0dbc0->leave($__internal_a638dff4a4dd930f82fc7b2d605e62c177ad89581b23aafd43f54ffdacb0dbc0_prof);

        
        $__internal_bbdc3f16b5c8d47eba70073e20e36f99d7887cae65eb0d251c497a437609125c->leave($__internal_bbdc3f16b5c8d47eba70073e20e36f99d7887cae65eb0d251c497a437609125c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_e969599470fb187562259eec0e8e190ab491f580f0f22c2dec982e5c6d70f106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e969599470fb187562259eec0e8e190ab491f580f0f22c2dec982e5c6d70f106->enter($__internal_e969599470fb187562259eec0e8e190ab491f580f0f22c2dec982e5c6d70f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_378b64cc3f922a4e3d25b8992cf9186a04f26abd45efd2998e29c846c33093cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378b64cc3f922a4e3d25b8992cf9186a04f26abd45efd2998e29c846c33093cc->enter($__internal_378b64cc3f922a4e3d25b8992cf9186a04f26abd45efd2998e29c846c33093cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_378b64cc3f922a4e3d25b8992cf9186a04f26abd45efd2998e29c846c33093cc->leave($__internal_378b64cc3f922a4e3d25b8992cf9186a04f26abd45efd2998e29c846c33093cc_prof);

        
        $__internal_e969599470fb187562259eec0e8e190ab491f580f0f22c2dec982e5c6d70f106->leave($__internal_e969599470fb187562259eec0e8e190ab491f580f0f22c2dec982e5c6d70f106_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2be08098d6122254b7a15cd7afed7a4cb02feaf71c0570892575197644e903c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2be08098d6122254b7a15cd7afed7a4cb02feaf71c0570892575197644e903c->enter($__internal_c2be08098d6122254b7a15cd7afed7a4cb02feaf71c0570892575197644e903c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_84b472df47724841b4881e405e4cc848a53275b678b0a1cbb46b4ced3dcd24c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b472df47724841b4881e405e4cc848a53275b678b0a1cbb46b4ced3dcd24c9->enter($__internal_84b472df47724841b4881e405e4cc848a53275b678b0a1cbb46b4ced3dcd24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_84b472df47724841b4881e405e4cc848a53275b678b0a1cbb46b4ced3dcd24c9->leave($__internal_84b472df47724841b4881e405e4cc848a53275b678b0a1cbb46b4ced3dcd24c9_prof);

        
        $__internal_c2be08098d6122254b7a15cd7afed7a4cb02feaf71c0570892575197644e903c->leave($__internal_c2be08098d6122254b7a15cd7afed7a4cb02feaf71c0570892575197644e903c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff1e20e9dd2dc9e2cd5ac9bc8d71432d13dd5aeb8345faeda38c89ee147ea772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1e20e9dd2dc9e2cd5ac9bc8d71432d13dd5aeb8345faeda38c89ee147ea772->enter($__internal_ff1e20e9dd2dc9e2cd5ac9bc8d71432d13dd5aeb8345faeda38c89ee147ea772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_359ce6c81e82e384b2f8d15ba27129df90fcb0d8aee7c5a7b05cd0dc32e1cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359ce6c81e82e384b2f8d15ba27129df90fcb0d8aee7c5a7b05cd0dc32e1cac1->enter($__internal_359ce6c81e82e384b2f8d15ba27129df90fcb0d8aee7c5a7b05cd0dc32e1cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_359ce6c81e82e384b2f8d15ba27129df90fcb0d8aee7c5a7b05cd0dc32e1cac1->leave($__internal_359ce6c81e82e384b2f8d15ba27129df90fcb0d8aee7c5a7b05cd0dc32e1cac1_prof);

        
        $__internal_ff1e20e9dd2dc9e2cd5ac9bc8d71432d13dd5aeb8345faeda38c89ee147ea772->leave($__internal_ff1e20e9dd2dc9e2cd5ac9bc8d71432d13dd5aeb8345faeda38c89ee147ea772_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d7486ae66ac940e81036c8bf58c28511100e80017b0b49342c92170227c657a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7486ae66ac940e81036c8bf58c28511100e80017b0b49342c92170227c657a->enter($__internal_6d7486ae66ac940e81036c8bf58c28511100e80017b0b49342c92170227c657a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1d8e0701afea64bddcf0b64a3357785c7f3b814c969a9985b35ff7995c2f3a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8e0701afea64bddcf0b64a3357785c7f3b814c969a9985b35ff7995c2f3a32->enter($__internal_1d8e0701afea64bddcf0b64a3357785c7f3b814c969a9985b35ff7995c2f3a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_1d8e0701afea64bddcf0b64a3357785c7f3b814c969a9985b35ff7995c2f3a32->leave($__internal_1d8e0701afea64bddcf0b64a3357785c7f3b814c969a9985b35ff7995c2f3a32_prof);

        
        $__internal_6d7486ae66ac940e81036c8bf58c28511100e80017b0b49342c92170227c657a->leave($__internal_6d7486ae66ac940e81036c8bf58c28511100e80017b0b49342c92170227c657a_prof);

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
