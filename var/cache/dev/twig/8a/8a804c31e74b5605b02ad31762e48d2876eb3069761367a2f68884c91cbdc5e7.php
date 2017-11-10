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
        $__internal_f268e509fefb799cd2d6a9831f3fef3896387d544073ca50d092e29e4fe269e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f268e509fefb799cd2d6a9831f3fef3896387d544073ca50d092e29e4fe269e8->enter($__internal_f268e509fefb799cd2d6a9831f3fef3896387d544073ca50d092e29e4fe269e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_a72104233566dbb425034a414e8cc2b6ad3fcb76a042432e11cdcf85262befe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72104233566dbb425034a414e8cc2b6ad3fcb76a042432e11cdcf85262befe1->enter($__internal_a72104233566dbb425034a414e8cc2b6ad3fcb76a042432e11cdcf85262befe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_f268e509fefb799cd2d6a9831f3fef3896387d544073ca50d092e29e4fe269e8->leave($__internal_f268e509fefb799cd2d6a9831f3fef3896387d544073ca50d092e29e4fe269e8_prof);

        
        $__internal_a72104233566dbb425034a414e8cc2b6ad3fcb76a042432e11cdcf85262befe1->leave($__internal_a72104233566dbb425034a414e8cc2b6ad3fcb76a042432e11cdcf85262befe1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c120ace668bb5e7c3d2710e17d1f1a09f8f3dc5b44ab102a1d71902eb5fa5c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c120ace668bb5e7c3d2710e17d1f1a09f8f3dc5b44ab102a1d71902eb5fa5c07->enter($__internal_c120ace668bb5e7c3d2710e17d1f1a09f8f3dc5b44ab102a1d71902eb5fa5c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d734771f1cd95f3e80fb64fbabbc17fd78cf46217bfc1fba989f96386ebc015b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d734771f1cd95f3e80fb64fbabbc17fd78cf46217bfc1fba989f96386ebc015b->enter($__internal_d734771f1cd95f3e80fb64fbabbc17fd78cf46217bfc1fba989f96386ebc015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_d734771f1cd95f3e80fb64fbabbc17fd78cf46217bfc1fba989f96386ebc015b->leave($__internal_d734771f1cd95f3e80fb64fbabbc17fd78cf46217bfc1fba989f96386ebc015b_prof);

        
        $__internal_c120ace668bb5e7c3d2710e17d1f1a09f8f3dc5b44ab102a1d71902eb5fa5c07->leave($__internal_c120ace668bb5e7c3d2710e17d1f1a09f8f3dc5b44ab102a1d71902eb5fa5c07_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d95802c49fc2eb03bda90d0b53171b4c4c58907ccf9ac21233aad7165c4c8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d95802c49fc2eb03bda90d0b53171b4c4c58907ccf9ac21233aad7165c4c8b1->enter($__internal_3d95802c49fc2eb03bda90d0b53171b4c4c58907ccf9ac21233aad7165c4c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c4104c00f8ab184bb74b7d2438159c6ba59d38707d062ba3d2155f6b319c9cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4104c00f8ab184bb74b7d2438159c6ba59d38707d062ba3d2155f6b319c9cb3->enter($__internal_c4104c00f8ab184bb74b7d2438159c6ba59d38707d062ba3d2155f6b319c9cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c4104c00f8ab184bb74b7d2438159c6ba59d38707d062ba3d2155f6b319c9cb3->leave($__internal_c4104c00f8ab184bb74b7d2438159c6ba59d38707d062ba3d2155f6b319c9cb3_prof);

        
        $__internal_3d95802c49fc2eb03bda90d0b53171b4c4c58907ccf9ac21233aad7165c4c8b1->leave($__internal_3d95802c49fc2eb03bda90d0b53171b4c4c58907ccf9ac21233aad7165c4c8b1_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e15fbfa89162d5776ed7c1afd2080d21c1c12781ab973883e9b50d17acb4fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e15fbfa89162d5776ed7c1afd2080d21c1c12781ab973883e9b50d17acb4fed->enter($__internal_8e15fbfa89162d5776ed7c1afd2080d21c1c12781ab973883e9b50d17acb4fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8796fc3334572c2d98dac35b43f209175978564659f0649b6bfaa9c14c0193c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8796fc3334572c2d98dac35b43f209175978564659f0649b6bfaa9c14c0193c6->enter($__internal_8796fc3334572c2d98dac35b43f209175978564659f0649b6bfaa9c14c0193c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_8796fc3334572c2d98dac35b43f209175978564659f0649b6bfaa9c14c0193c6->leave($__internal_8796fc3334572c2d98dac35b43f209175978564659f0649b6bfaa9c14c0193c6_prof);

        
        $__internal_8e15fbfa89162d5776ed7c1afd2080d21c1c12781ab973883e9b50d17acb4fed->leave($__internal_8e15fbfa89162d5776ed7c1afd2080d21c1c12781ab973883e9b50d17acb4fed_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e66cf80ba34ef6c2eb8ab9dc2aeeca3f8ad768cc6001e6cbcb3248def6a90ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e66cf80ba34ef6c2eb8ab9dc2aeeca3f8ad768cc6001e6cbcb3248def6a90ab->enter($__internal_4e66cf80ba34ef6c2eb8ab9dc2aeeca3f8ad768cc6001e6cbcb3248def6a90ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b6f99b22d36afcdbae502d0a99f3f8d17b9b058018d00c93153e419e4999989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f99b22d36afcdbae502d0a99f3f8d17b9b058018d00c93153e419e4999989->enter($__internal_6b6f99b22d36afcdbae502d0a99f3f8d17b9b058018d00c93153e419e4999989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_6b6f99b22d36afcdbae502d0a99f3f8d17b9b058018d00c93153e419e4999989->leave($__internal_6b6f99b22d36afcdbae502d0a99f3f8d17b9b058018d00c93153e419e4999989_prof);

        
        $__internal_4e66cf80ba34ef6c2eb8ab9dc2aeeca3f8ad768cc6001e6cbcb3248def6a90ab->leave($__internal_4e66cf80ba34ef6c2eb8ab9dc2aeeca3f8ad768cc6001e6cbcb3248def6a90ab_prof);

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
