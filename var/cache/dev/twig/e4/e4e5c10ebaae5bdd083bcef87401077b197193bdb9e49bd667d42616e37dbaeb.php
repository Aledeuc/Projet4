<?php

/* ::layout.html.twig */
class __TwigTemplate_12653917b1c6b145bb3ef58218243f498660f07b891cfcaaaf97129726f179ba extends Twig_Template
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
        $__internal_b454cd30b146ceec2b8a7acc48d1f8cd86eb72163fac8e2adb6dcbbe70092b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b454cd30b146ceec2b8a7acc48d1f8cd86eb72163fac8e2adb6dcbbe70092b26->enter($__internal_b454cd30b146ceec2b8a7acc48d1f8cd86eb72163fac8e2adb6dcbbe70092b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_20bc4b203ec479e2487a831d7dd8f560b70ce87e2509dec5f8d8704413f927a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bc4b203ec479e2487a831d7dd8f560b70ce87e2509dec5f8d8704413f927a5->enter($__internal_20bc4b203ec479e2487a831d7dd8f560b70ce87e2509dec5f8d8704413f927a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 18
        echo "    </head>

    <body>   
        <div class=\"topSite\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepage");
        echo "\">
                <img src=\"";
        // line 23
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
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
        
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
        <footer>
            <p>The sky's the limit © ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </body>
</html>";
        
        $__internal_b454cd30b146ceec2b8a7acc48d1f8cd86eb72163fac8e2adb6dcbbe70092b26->leave($__internal_b454cd30b146ceec2b8a7acc48d1f8cd86eb72163fac8e2adb6dcbbe70092b26_prof);

        
        $__internal_20bc4b203ec479e2487a831d7dd8f560b70ce87e2509dec5f8d8704413f927a5->leave($__internal_20bc4b203ec479e2487a831d7dd8f560b70ce87e2509dec5f8d8704413f927a5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd4c057c3c5e9ba3b6a7759ba591ece1dcbd86f0c5b3191f629ecdeff827b2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4c057c3c5e9ba3b6a7759ba591ece1dcbd86f0c5b3191f629ecdeff827b2c3->enter($__internal_dd4c057c3c5e9ba3b6a7759ba591ece1dcbd86f0c5b3191f629ecdeff827b2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_371fe65aa7249ccd695fa91b314e65764d956494ec8192300ec4259831c45ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371fe65aa7249ccd695fa91b314e65764d956494ec8192300ec4259831c45ce7->enter($__internal_371fe65aa7249ccd695fa91b314e65764d956494ec8192300ec4259831c45ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_371fe65aa7249ccd695fa91b314e65764d956494ec8192300ec4259831c45ce7->leave($__internal_371fe65aa7249ccd695fa91b314e65764d956494ec8192300ec4259831c45ce7_prof);

        
        $__internal_dd4c057c3c5e9ba3b6a7759ba591ece1dcbd86f0c5b3191f629ecdeff827b2c3->leave($__internal_dd4c057c3c5e9ba3b6a7759ba591ece1dcbd86f0c5b3191f629ecdeff827b2c3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5988f5617f94abdd336d26f33b28adf081a82f742ed23039f1f82d97051a74f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5988f5617f94abdd336d26f33b28adf081a82f742ed23039f1f82d97051a74f2->enter($__internal_5988f5617f94abdd336d26f33b28adf081a82f742ed23039f1f82d97051a74f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77a85b8b69c11d34234fcd17d4e4db25a5271ae918a30b0896d03172c0e1c599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a85b8b69c11d34234fcd17d4e4db25a5271ae918a30b0896d03172c0e1c599->enter($__internal_77a85b8b69c11d34234fcd17d4e4db25a5271ae918a30b0896d03172c0e1c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_77a85b8b69c11d34234fcd17d4e4db25a5271ae918a30b0896d03172c0e1c599->leave($__internal_77a85b8b69c11d34234fcd17d4e4db25a5271ae918a30b0896d03172c0e1c599_prof);

        
        $__internal_5988f5617f94abdd336d26f33b28adf081a82f742ed23039f1f82d97051a74f2->leave($__internal_5988f5617f94abdd336d26f33b28adf081a82f742ed23039f1f82d97051a74f2_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_d96ca5dd6390cebe5ce8b486d0f5c4fe18ce9b02202d46c28f1b17153cd8c8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96ca5dd6390cebe5ce8b486d0f5c4fe18ce9b02202d46c28f1b17153cd8c8de->enter($__internal_d96ca5dd6390cebe5ce8b486d0f5c4fe18ce9b02202d46c28f1b17153cd8c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4c4ca4baa75f6296f92828a2fad7393914a348979c1c8b0b42d8c26fbf93443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c4ca4baa75f6296f92828a2fad7393914a348979c1c8b0b42d8c26fbf93443->enter($__internal_e4c4ca4baa75f6296f92828a2fad7393914a348979c1c8b0b42d8c26fbf93443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_e4c4ca4baa75f6296f92828a2fad7393914a348979c1c8b0b42d8c26fbf93443->leave($__internal_e4c4ca4baa75f6296f92828a2fad7393914a348979c1c8b0b42d8c26fbf93443_prof);

        
        $__internal_d96ca5dd6390cebe5ce8b486d0f5c4fe18ce9b02202d46c28f1b17153cd8c8de->leave($__internal_d96ca5dd6390cebe5ce8b486d0f5c4fe18ce9b02202d46c28f1b17153cd8c8de_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c40631639cabdc6cce1bd7dabbc6cb73437704f34f262d6f2906d2693da9015a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40631639cabdc6cce1bd7dabbc6cb73437704f34f262d6f2906d2693da9015a->enter($__internal_c40631639cabdc6cce1bd7dabbc6cb73437704f34f262d6f2906d2693da9015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_479c4173fcc1c8def8be2839a63a639f2a6e2c36f0973c2ad134ee3c4144d309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c4173fcc1c8def8be2839a63a639f2a6e2c36f0973c2ad134ee3c4144d309->enter($__internal_479c4173fcc1c8def8be2839a63a639f2a6e2c36f0973c2ad134ee3c4144d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_479c4173fcc1c8def8be2839a63a639f2a6e2c36f0973c2ad134ee3c4144d309->leave($__internal_479c4173fcc1c8def8be2839a63a639f2a6e2c36f0973c2ad134ee3c4144d309_prof);

        
        $__internal_c40631639cabdc6cce1bd7dabbc6cb73437704f34f262d6f2906d2693da9015a->leave($__internal_c40631639cabdc6cce1bd7dabbc6cb73437704f34f262d6f2906d2693da9015a_prof);

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
        return array (  163 => 42,  145 => 39,  133 => 16,  119 => 12,  101 => 10,  87 => 48,  83 => 46,  81 => 42,  77 => 40,  75 => 39,  56 => 23,  52 => 22,  46 => 18,  44 => 12,  39 => 10,  29 => 2,);
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
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
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
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% endblock %}

        <footer>
            <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
        </footer>
    </body>
</html>", "::layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/layout.html.twig");
    }
}
