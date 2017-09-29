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
        $__internal_3abf264c27fb84acf9a50663a7f9c847897dfcef37f20dbda113715447b166f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abf264c27fb84acf9a50663a7f9c847897dfcef37f20dbda113715447b166f4->enter($__internal_3abf264c27fb84acf9a50663a7f9c847897dfcef37f20dbda113715447b166f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_cb900d42256e0168484fb9e41ed24ccc8b52bde47df0289710f708473637c614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb900d42256e0168484fb9e41ed24ccc8b52bde47df0289710f708473637c614->enter($__internal_cb900d42256e0168484fb9e41ed24ccc8b52bde47df0289710f708473637c614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_3abf264c27fb84acf9a50663a7f9c847897dfcef37f20dbda113715447b166f4->leave($__internal_3abf264c27fb84acf9a50663a7f9c847897dfcef37f20dbda113715447b166f4_prof);

        
        $__internal_cb900d42256e0168484fb9e41ed24ccc8b52bde47df0289710f708473637c614->leave($__internal_cb900d42256e0168484fb9e41ed24ccc8b52bde47df0289710f708473637c614_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d465b86a703e1cfa122bb42cab34f61561b98bc94a0f56615da3af48bae3fdc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d465b86a703e1cfa122bb42cab34f61561b98bc94a0f56615da3af48bae3fdc2->enter($__internal_d465b86a703e1cfa122bb42cab34f61561b98bc94a0f56615da3af48bae3fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a088d3f9ef442906d695421d6231862d1df33ad0e35baf703503f5e731ee4448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a088d3f9ef442906d695421d6231862d1df33ad0e35baf703503f5e731ee4448->enter($__internal_a088d3f9ef442906d695421d6231862d1df33ad0e35baf703503f5e731ee4448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_a088d3f9ef442906d695421d6231862d1df33ad0e35baf703503f5e731ee4448->leave($__internal_a088d3f9ef442906d695421d6231862d1df33ad0e35baf703503f5e731ee4448_prof);

        
        $__internal_d465b86a703e1cfa122bb42cab34f61561b98bc94a0f56615da3af48bae3fdc2->leave($__internal_d465b86a703e1cfa122bb42cab34f61561b98bc94a0f56615da3af48bae3fdc2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71222539990474a41915a16b7710e7f6895e19a550022c4fce3b10c407f195a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71222539990474a41915a16b7710e7f6895e19a550022c4fce3b10c407f195a2->enter($__internal_71222539990474a41915a16b7710e7f6895e19a550022c4fce3b10c407f195a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a61631b2a4e775962693c9dce5c9c0c2c39be137f36336c02c473283c898ee4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61631b2a4e775962693c9dce5c9c0c2c39be137f36336c02c473283c898ee4f->enter($__internal_a61631b2a4e775962693c9dce5c9c0c2c39be137f36336c02c473283c898ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a61631b2a4e775962693c9dce5c9c0c2c39be137f36336c02c473283c898ee4f->leave($__internal_a61631b2a4e775962693c9dce5c9c0c2c39be137f36336c02c473283c898ee4f_prof);

        
        $__internal_71222539990474a41915a16b7710e7f6895e19a550022c4fce3b10c407f195a2->leave($__internal_71222539990474a41915a16b7710e7f6895e19a550022c4fce3b10c407f195a2_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ffa051372d38d712a65648dae4e7ce51845792c5cd4e04ad7f432be6779c4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffa051372d38d712a65648dae4e7ce51845792c5cd4e04ad7f432be6779c4e3->enter($__internal_7ffa051372d38d712a65648dae4e7ce51845792c5cd4e04ad7f432be6779c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8d579854ef10d30c01cb9a740b6966e45466e419d4880f5310ebc1b19759481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d579854ef10d30c01cb9a740b6966e45466e419d4880f5310ebc1b19759481->enter($__internal_b8d579854ef10d30c01cb9a740b6966e45466e419d4880f5310ebc1b19759481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_b8d579854ef10d30c01cb9a740b6966e45466e419d4880f5310ebc1b19759481->leave($__internal_b8d579854ef10d30c01cb9a740b6966e45466e419d4880f5310ebc1b19759481_prof);

        
        $__internal_7ffa051372d38d712a65648dae4e7ce51845792c5cd4e04ad7f432be6779c4e3->leave($__internal_7ffa051372d38d712a65648dae4e7ce51845792c5cd4e04ad7f432be6779c4e3_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c54cd5c6a8e5b61ebe3b75b7f026b1ec5d6baafa0d812880ece42c8cf2388162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c54cd5c6a8e5b61ebe3b75b7f026b1ec5d6baafa0d812880ece42c8cf2388162->enter($__internal_c54cd5c6a8e5b61ebe3b75b7f026b1ec5d6baafa0d812880ece42c8cf2388162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bfe1015ac6707787ecd46a84120b8170ca45cb828a7719a93b8139cd1dc0ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfe1015ac6707787ecd46a84120b8170ca45cb828a7719a93b8139cd1dc0ed3->enter($__internal_4bfe1015ac6707787ecd46a84120b8170ca45cb828a7719a93b8139cd1dc0ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_4bfe1015ac6707787ecd46a84120b8170ca45cb828a7719a93b8139cd1dc0ed3->leave($__internal_4bfe1015ac6707787ecd46a84120b8170ca45cb828a7719a93b8139cd1dc0ed3_prof);

        
        $__internal_c54cd5c6a8e5b61ebe3b75b7f026b1ec5d6baafa0d812880ece42c8cf2388162->leave($__internal_c54cd5c6a8e5b61ebe3b75b7f026b1ec5d6baafa0d812880ece42c8cf2388162_prof);

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
</html>", "::layout.html.twig", "/Users/alexandre/Google Drive/Pro/OC/Projet4/Louvre/Symfony/app/Resources/views/layout.html.twig");
    }
}
