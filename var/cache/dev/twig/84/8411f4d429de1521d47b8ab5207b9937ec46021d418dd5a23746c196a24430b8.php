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
        $__internal_19b19dc794260168e0f0b7cd939adef62b1cd642d5576de34c9878c11503de20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b19dc794260168e0f0b7cd939adef62b1cd642d5576de34c9878c11503de20->enter($__internal_19b19dc794260168e0f0b7cd939adef62b1cd642d5576de34c9878c11503de20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_d84aab033f1fa08cb7a9b2835d0b54e36c4350bd3790351fa51c9c7586e72cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84aab033f1fa08cb7a9b2835d0b54e36c4350bd3790351fa51c9c7586e72cf6->enter($__internal_d84aab033f1fa08cb7a9b2835d0b54e36c4350bd3790351fa51c9c7586e72cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_19b19dc794260168e0f0b7cd939adef62b1cd642d5576de34c9878c11503de20->leave($__internal_19b19dc794260168e0f0b7cd939adef62b1cd642d5576de34c9878c11503de20_prof);

        
        $__internal_d84aab033f1fa08cb7a9b2835d0b54e36c4350bd3790351fa51c9c7586e72cf6->leave($__internal_d84aab033f1fa08cb7a9b2835d0b54e36c4350bd3790351fa51c9c7586e72cf6_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c71878e7c3ae279f885e21e7d1cd073825b5b03bc1d56c37981e513d274e3a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71878e7c3ae279f885e21e7d1cd073825b5b03bc1d56c37981e513d274e3a91->enter($__internal_c71878e7c3ae279f885e21e7d1cd073825b5b03bc1d56c37981e513d274e3a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adfb361fa1f8cd9fcdade98b0105e6132ecc1f2ff92e432d3474905c978d6403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfb361fa1f8cd9fcdade98b0105e6132ecc1f2ff92e432d3474905c978d6403->enter($__internal_adfb361fa1f8cd9fcdade98b0105e6132ecc1f2ff92e432d3474905c978d6403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_adfb361fa1f8cd9fcdade98b0105e6132ecc1f2ff92e432d3474905c978d6403->leave($__internal_adfb361fa1f8cd9fcdade98b0105e6132ecc1f2ff92e432d3474905c978d6403_prof);

        
        $__internal_c71878e7c3ae279f885e21e7d1cd073825b5b03bc1d56c37981e513d274e3a91->leave($__internal_c71878e7c3ae279f885e21e7d1cd073825b5b03bc1d56c37981e513d274e3a91_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1579b12d0f86ba9695f70a101f64240f53521cdd6652d460ba190f879577cd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1579b12d0f86ba9695f70a101f64240f53521cdd6652d460ba190f879577cd13->enter($__internal_1579b12d0f86ba9695f70a101f64240f53521cdd6652d460ba190f879577cd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38b15b1964206167f18cef17a08d1864cfc63a645e9d08174f2e2afa3b81b1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b15b1964206167f18cef17a08d1864cfc63a645e9d08174f2e2afa3b81b1b6->enter($__internal_38b15b1964206167f18cef17a08d1864cfc63a645e9d08174f2e2afa3b81b1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_38b15b1964206167f18cef17a08d1864cfc63a645e9d08174f2e2afa3b81b1b6->leave($__internal_38b15b1964206167f18cef17a08d1864cfc63a645e9d08174f2e2afa3b81b1b6_prof);

        
        $__internal_1579b12d0f86ba9695f70a101f64240f53521cdd6652d460ba190f879577cd13->leave($__internal_1579b12d0f86ba9695f70a101f64240f53521cdd6652d460ba190f879577cd13_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c3dc3a15065093a8a6268b0a97de3bb07aea5f3cc0c03d9d315a200c483b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c3dc3a15065093a8a6268b0a97de3bb07aea5f3cc0c03d9d315a200c483b82->enter($__internal_87c3dc3a15065093a8a6268b0a97de3bb07aea5f3cc0c03d9d315a200c483b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b01196883f937c1c26563ce944336103fe7aff163f591e537c04978f2facf2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01196883f937c1c26563ce944336103fe7aff163f591e537c04978f2facf2cd->enter($__internal_b01196883f937c1c26563ce944336103fe7aff163f591e537c04978f2facf2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_b01196883f937c1c26563ce944336103fe7aff163f591e537c04978f2facf2cd->leave($__internal_b01196883f937c1c26563ce944336103fe7aff163f591e537c04978f2facf2cd_prof);

        
        $__internal_87c3dc3a15065093a8a6268b0a97de3bb07aea5f3cc0c03d9d315a200c483b82->leave($__internal_87c3dc3a15065093a8a6268b0a97de3bb07aea5f3cc0c03d9d315a200c483b82_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60cd8ced29bd98990bae139d5d6893eb6ee18da8fd54d22c3ef2cc3fb1c8faf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60cd8ced29bd98990bae139d5d6893eb6ee18da8fd54d22c3ef2cc3fb1c8faf7->enter($__internal_60cd8ced29bd98990bae139d5d6893eb6ee18da8fd54d22c3ef2cc3fb1c8faf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52a53b7c46e07bebda64fe1b3a4f6bd0c38a3df2847f09107c57e83fb9b4e7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a53b7c46e07bebda64fe1b3a4f6bd0c38a3df2847f09107c57e83fb9b4e7b9->enter($__internal_52a53b7c46e07bebda64fe1b3a4f6bd0c38a3df2847f09107c57e83fb9b4e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_52a53b7c46e07bebda64fe1b3a4f6bd0c38a3df2847f09107c57e83fb9b4e7b9->leave($__internal_52a53b7c46e07bebda64fe1b3a4f6bd0c38a3df2847f09107c57e83fb9b4e7b9_prof);

        
        $__internal_60cd8ced29bd98990bae139d5d6893eb6ee18da8fd54d22c3ef2cc3fb1c8faf7->leave($__internal_60cd8ced29bd98990bae139d5d6893eb6ee18da8fd54d22c3ef2cc3fb1c8faf7_prof);

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
