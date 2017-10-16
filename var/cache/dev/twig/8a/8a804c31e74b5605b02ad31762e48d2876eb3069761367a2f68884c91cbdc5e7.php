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
        $__internal_186ace11c06cfbb2f17e96c0b9ed045851069e786b0ee387ee482792f8eacba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186ace11c06cfbb2f17e96c0b9ed045851069e786b0ee387ee482792f8eacba7->enter($__internal_186ace11c06cfbb2f17e96c0b9ed045851069e786b0ee387ee482792f8eacba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_15c5161493cd91112ad16ef66997a80feabeb9600b6713f157c877897a3f3d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c5161493cd91112ad16ef66997a80feabeb9600b6713f157c877897a3f3d26->enter($__internal_15c5161493cd91112ad16ef66997a80feabeb9600b6713f157c877897a3f3d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_186ace11c06cfbb2f17e96c0b9ed045851069e786b0ee387ee482792f8eacba7->leave($__internal_186ace11c06cfbb2f17e96c0b9ed045851069e786b0ee387ee482792f8eacba7_prof);

        
        $__internal_15c5161493cd91112ad16ef66997a80feabeb9600b6713f157c877897a3f3d26->leave($__internal_15c5161493cd91112ad16ef66997a80feabeb9600b6713f157c877897a3f3d26_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9af814ad84e6f728c726a73d0868db9745397465fb3372d3440eca4bdcbbc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9af814ad84e6f728c726a73d0868db9745397465fb3372d3440eca4bdcbbc1e->enter($__internal_e9af814ad84e6f728c726a73d0868db9745397465fb3372d3440eca4bdcbbc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d48e9d5a18ba1d27f83d4f347476faca2b8bc9d5537bcaeef82c13e5f65fb13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48e9d5a18ba1d27f83d4f347476faca2b8bc9d5537bcaeef82c13e5f65fb13b->enter($__internal_d48e9d5a18ba1d27f83d4f347476faca2b8bc9d5537bcaeef82c13e5f65fb13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_d48e9d5a18ba1d27f83d4f347476faca2b8bc9d5537bcaeef82c13e5f65fb13b->leave($__internal_d48e9d5a18ba1d27f83d4f347476faca2b8bc9d5537bcaeef82c13e5f65fb13b_prof);

        
        $__internal_e9af814ad84e6f728c726a73d0868db9745397465fb3372d3440eca4bdcbbc1e->leave($__internal_e9af814ad84e6f728c726a73d0868db9745397465fb3372d3440eca4bdcbbc1e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc10a33a38584ee4545e3ff9d8bd3c745824b55ce34524ce3ac209fbee41c212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc10a33a38584ee4545e3ff9d8bd3c745824b55ce34524ce3ac209fbee41c212->enter($__internal_cc10a33a38584ee4545e3ff9d8bd3c745824b55ce34524ce3ac209fbee41c212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c812f038765b23412c170a8107ce4646d267a30dcd758debf51797c7e9b2b3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c812f038765b23412c170a8107ce4646d267a30dcd758debf51797c7e9b2b3f4->enter($__internal_c812f038765b23412c170a8107ce4646d267a30dcd758debf51797c7e9b2b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c812f038765b23412c170a8107ce4646d267a30dcd758debf51797c7e9b2b3f4->leave($__internal_c812f038765b23412c170a8107ce4646d267a30dcd758debf51797c7e9b2b3f4_prof);

        
        $__internal_cc10a33a38584ee4545e3ff9d8bd3c745824b55ce34524ce3ac209fbee41c212->leave($__internal_cc10a33a38584ee4545e3ff9d8bd3c745824b55ce34524ce3ac209fbee41c212_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_b44d93d780b24d27dcaa8b6b9820717ad77748ed1497fc3ba46da280b0382a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44d93d780b24d27dcaa8b6b9820717ad77748ed1497fc3ba46da280b0382a7a->enter($__internal_b44d93d780b24d27dcaa8b6b9820717ad77748ed1497fc3ba46da280b0382a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03096ec2d24fb8f9082e72f0a9d5c502b6139a4f1f0c091bb81c03f087a45133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03096ec2d24fb8f9082e72f0a9d5c502b6139a4f1f0c091bb81c03f087a45133->enter($__internal_03096ec2d24fb8f9082e72f0a9d5c502b6139a4f1f0c091bb81c03f087a45133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_03096ec2d24fb8f9082e72f0a9d5c502b6139a4f1f0c091bb81c03f087a45133->leave($__internal_03096ec2d24fb8f9082e72f0a9d5c502b6139a4f1f0c091bb81c03f087a45133_prof);

        
        $__internal_b44d93d780b24d27dcaa8b6b9820717ad77748ed1497fc3ba46da280b0382a7a->leave($__internal_b44d93d780b24d27dcaa8b6b9820717ad77748ed1497fc3ba46da280b0382a7a_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eab8a7bbc6a35d271c396de39066a3b4a232e148b23b2dea26f8c0a1590087a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab8a7bbc6a35d271c396de39066a3b4a232e148b23b2dea26f8c0a1590087a1->enter($__internal_eab8a7bbc6a35d271c396de39066a3b4a232e148b23b2dea26f8c0a1590087a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_21375d57851048327db01194305a8abe79ff906e3920a37485b7fa239a089690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21375d57851048327db01194305a8abe79ff906e3920a37485b7fa239a089690->enter($__internal_21375d57851048327db01194305a8abe79ff906e3920a37485b7fa239a089690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_21375d57851048327db01194305a8abe79ff906e3920a37485b7fa239a089690->leave($__internal_21375d57851048327db01194305a8abe79ff906e3920a37485b7fa239a089690_prof);

        
        $__internal_eab8a7bbc6a35d271c396de39066a3b4a232e148b23b2dea26f8c0a1590087a1->leave($__internal_eab8a7bbc6a35d271c396de39066a3b4a232e148b23b2dea26f8c0a1590087a1_prof);

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
