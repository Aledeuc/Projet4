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
        $__internal_a48590da416022db4bb0e862bd262a289a7769413669d45a2240624b8e5284af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48590da416022db4bb0e862bd262a289a7769413669d45a2240624b8e5284af->enter($__internal_a48590da416022db4bb0e862bd262a289a7769413669d45a2240624b8e5284af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_41b86dafe00f7281f63948578b84ff59e01f1716a4b693ad2111f9730dd16952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b86dafe00f7281f63948578b84ff59e01f1716a4b693ad2111f9730dd16952->enter($__internal_41b86dafe00f7281f63948578b84ff59e01f1716a4b693ad2111f9730dd16952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 19
        echo "    </head>

    <body>   
        <div class=\"topSite\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepage");
        echo "\">
                <img src=\"";
        // line 24
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
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </div>
        
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
        <footer>
            <p>The sky's the limit © ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </body>
</html>";
        
        $__internal_a48590da416022db4bb0e862bd262a289a7769413669d45a2240624b8e5284af->leave($__internal_a48590da416022db4bb0e862bd262a289a7769413669d45a2240624b8e5284af_prof);

        
        $__internal_41b86dafe00f7281f63948578b84ff59e01f1716a4b693ad2111f9730dd16952->leave($__internal_41b86dafe00f7281f63948578b84ff59e01f1716a4b693ad2111f9730dd16952_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c4f697e9194f35f78e4b2045eaa8b8b88c617b19e6b5668baf071ebdfd42544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4f697e9194f35f78e4b2045eaa8b8b88c617b19e6b5668baf071ebdfd42544->enter($__internal_5c4f697e9194f35f78e4b2045eaa8b8b88c617b19e6b5668baf071ebdfd42544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b4bf3e2c0f6db42d87968a97f2353d30632fbf0ded45e1a00600e9d0bc10fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4bf3e2c0f6db42d87968a97f2353d30632fbf0ded45e1a00600e9d0bc10fd4->enter($__internal_3b4bf3e2c0f6db42d87968a97f2353d30632fbf0ded45e1a00600e9d0bc10fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_3b4bf3e2c0f6db42d87968a97f2353d30632fbf0ded45e1a00600e9d0bc10fd4->leave($__internal_3b4bf3e2c0f6db42d87968a97f2353d30632fbf0ded45e1a00600e9d0bc10fd4_prof);

        
        $__internal_5c4f697e9194f35f78e4b2045eaa8b8b88c617b19e6b5668baf071ebdfd42544->leave($__internal_5c4f697e9194f35f78e4b2045eaa8b8b88c617b19e6b5668baf071ebdfd42544_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea1c30ff48d20d76173a2283d47d9838eb52965cfee13d6c105e1ef910640a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1c30ff48d20d76173a2283d47d9838eb52965cfee13d6c105e1ef910640a83->enter($__internal_ea1c30ff48d20d76173a2283d47d9838eb52965cfee13d6c105e1ef910640a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d60a9ccfa5c748b4f54bdc3d86696924004a199d786aba028d50f57b09515bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60a9ccfa5c748b4f54bdc3d86696924004a199d786aba028d50f57b09515bee->enter($__internal_d60a9ccfa5c748b4f54bdc3d86696924004a199d786aba028d50f57b09515bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d60a9ccfa5c748b4f54bdc3d86696924004a199d786aba028d50f57b09515bee->leave($__internal_d60a9ccfa5c748b4f54bdc3d86696924004a199d786aba028d50f57b09515bee_prof);

        
        $__internal_ea1c30ff48d20d76173a2283d47d9838eb52965cfee13d6c105e1ef910640a83->leave($__internal_ea1c30ff48d20d76173a2283d47d9838eb52965cfee13d6c105e1ef910640a83_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9a1d98f55d88dd0cb484c7a25eedf7b73a5c25619967cd4c78a9b48e3d3d4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a1d98f55d88dd0cb484c7a25eedf7b73a5c25619967cd4c78a9b48e3d3d4a3->enter($__internal_d9a1d98f55d88dd0cb484c7a25eedf7b73a5c25619967cd4c78a9b48e3d3d4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_860668be64e685c91196566bdbd16a68e0fa82fb6dad51c67aa364d73f74b3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860668be64e685c91196566bdbd16a68e0fa82fb6dad51c67aa364d73f74b3d3->enter($__internal_860668be64e685c91196566bdbd16a68e0fa82fb6dad51c67aa364d73f74b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_860668be64e685c91196566bdbd16a68e0fa82fb6dad51c67aa364d73f74b3d3->leave($__internal_860668be64e685c91196566bdbd16a68e0fa82fb6dad51c67aa364d73f74b3d3_prof);

        
        $__internal_d9a1d98f55d88dd0cb484c7a25eedf7b73a5c25619967cd4c78a9b48e3d3d4a3->leave($__internal_d9a1d98f55d88dd0cb484c7a25eedf7b73a5c25619967cd4c78a9b48e3d3d4a3_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c4ab755d92b445998545601c8c4685775dc0d0a46e6ce409344288475119a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4ab755d92b445998545601c8c4685775dc0d0a46e6ce409344288475119a52->enter($__internal_6c4ab755d92b445998545601c8c4685775dc0d0a46e6ce409344288475119a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee1fe66f1ccbb53be551ea09af771a10386b1f8e735da37356ed5e05ce9c96ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1fe66f1ccbb53be551ea09af771a10386b1f8e735da37356ed5e05ce9c96ac->enter($__internal_ee1fe66f1ccbb53be551ea09af771a10386b1f8e735da37356ed5e05ce9c96ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_ee1fe66f1ccbb53be551ea09af771a10386b1f8e735da37356ed5e05ce9c96ac->leave($__internal_ee1fe66f1ccbb53be551ea09af771a10386b1f8e735da37356ed5e05ce9c96ac_prof);

        
        $__internal_6c4ab755d92b445998545601c8c4685775dc0d0a46e6ce409344288475119a52->leave($__internal_6c4ab755d92b445998545601c8c4685775dc0d0a46e6ce409344288475119a52_prof);

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
        return array (  164 => 43,  146 => 40,  134 => 17,  119 => 12,  101 => 10,  87 => 50,  83 => 48,  81 => 43,  77 => 41,  75 => 40,  56 => 24,  52 => 23,  46 => 19,  44 => 12,  39 => 10,  29 => 2,);
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
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
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
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        {% endblock %}

        <footer>
            <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
        </footer>
    </body>
</html>", "::layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/app/Resources/views/layout.html.twig");
    }
}
