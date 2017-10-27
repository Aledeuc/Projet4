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
        $__internal_fb20d80a51eb976f44baff95f71bbc0324ef932c93919d794975960989be3426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb20d80a51eb976f44baff95f71bbc0324ef932c93919d794975960989be3426->enter($__internal_fb20d80a51eb976f44baff95f71bbc0324ef932c93919d794975960989be3426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_293ed51ba9dea894dedb021c7f6345e35470afb1cb94ccf9eaca3e4d3b614afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293ed51ba9dea894dedb021c7f6345e35470afb1cb94ccf9eaca3e4d3b614afb->enter($__internal_293ed51ba9dea894dedb021c7f6345e35470afb1cb94ccf9eaca3e4d3b614afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 25
        echo "    </head>

    <body>   
        <div class=\"topSite\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_booking_homepage");
        echo "\">
                <img src=\"";
        // line 30
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
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        </div>
        
        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
        <footer>
            <p>The sky's the limit © ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </body>
</html>";
        
        $__internal_fb20d80a51eb976f44baff95f71bbc0324ef932c93919d794975960989be3426->leave($__internal_fb20d80a51eb976f44baff95f71bbc0324ef932c93919d794975960989be3426_prof);

        
        $__internal_293ed51ba9dea894dedb021c7f6345e35470afb1cb94ccf9eaca3e4d3b614afb->leave($__internal_293ed51ba9dea894dedb021c7f6345e35470afb1cb94ccf9eaca3e4d3b614afb_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_2abe320ebc066e89a5751b1058998ad7115d5a61317d9599c5061d348f7d7e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abe320ebc066e89a5751b1058998ad7115d5a61317d9599c5061d348f7d7e18->enter($__internal_2abe320ebc066e89a5751b1058998ad7115d5a61317d9599c5061d348f7d7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_143b0c804711dcb81ae2fb7af94d0acbc4ed65750617fd94594888a781f067bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143b0c804711dcb81ae2fb7af94d0acbc4ed65750617fd94594888a781f067bf->enter($__internal_143b0c804711dcb81ae2fb7af94d0acbc4ed65750617fd94594888a781f067bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_143b0c804711dcb81ae2fb7af94d0acbc4ed65750617fd94594888a781f067bf->leave($__internal_143b0c804711dcb81ae2fb7af94d0acbc4ed65750617fd94594888a781f067bf_prof);

        
        $__internal_2abe320ebc066e89a5751b1058998ad7115d5a61317d9599c5061d348f7d7e18->leave($__internal_2abe320ebc066e89a5751b1058998ad7115d5a61317d9599c5061d348f7d7e18_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25c7d39e0aa12bf13eae99a8abefa5fe8ffdef8e67614987bedfeb7204bf7694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c7d39e0aa12bf13eae99a8abefa5fe8ffdef8e67614987bedfeb7204bf7694->enter($__internal_25c7d39e0aa12bf13eae99a8abefa5fe8ffdef8e67614987bedfeb7204bf7694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa7cf48b8e01b073a7e775986de58c733e9529651ff62ff0acd2cf249ac0ed7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7cf48b8e01b073a7e775986de58c733e9529651ff62ff0acd2cf249ac0ed7d->enter($__internal_fa7cf48b8e01b073a7e775986de58c733e9529651ff62ff0acd2cf249ac0ed7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
      
        ";
        
        $__internal_fa7cf48b8e01b073a7e775986de58c733e9529651ff62ff0acd2cf249ac0ed7d->leave($__internal_fa7cf48b8e01b073a7e775986de58c733e9529651ff62ff0acd2cf249ac0ed7d_prof);

        
        $__internal_25c7d39e0aa12bf13eae99a8abefa5fe8ffdef8e67614987bedfeb7204bf7694->leave($__internal_25c7d39e0aa12bf13eae99a8abefa5fe8ffdef8e67614987bedfeb7204bf7694_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_70f27c2d46ebcf84a87decf6009b28783c22466000656b0b05ab0ab7b817ab0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f27c2d46ebcf84a87decf6009b28783c22466000656b0b05ab0ab7b817ab0b->enter($__internal_70f27c2d46ebcf84a87decf6009b28783c22466000656b0b05ab0ab7b817ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74be07afecf19a22d85262b5dd19c8e74cf089382aee415f13ed51d554f2f439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74be07afecf19a22d85262b5dd19c8e74cf089382aee415f13ed51d554f2f439->enter($__internal_74be07afecf19a22d85262b5dd19c8e74cf089382aee415f13ed51d554f2f439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_74be07afecf19a22d85262b5dd19c8e74cf089382aee415f13ed51d554f2f439->leave($__internal_74be07afecf19a22d85262b5dd19c8e74cf089382aee415f13ed51d554f2f439_prof);

        
        $__internal_70f27c2d46ebcf84a87decf6009b28783c22466000656b0b05ab0ab7b817ab0b->leave($__internal_70f27c2d46ebcf84a87decf6009b28783c22466000656b0b05ab0ab7b817ab0b_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fce8469e4b882db55e4cd2b859b361b774864c424d9c6a203ea60a4f47bbbaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce8469e4b882db55e4cd2b859b361b774864c424d9c6a203ea60a4f47bbbaa9->enter($__internal_fce8469e4b882db55e4cd2b859b361b774864c424d9c6a203ea60a4f47bbbaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7aec7612f72f629e3bfc5a8e098a47530aa52d06ce19c6960b75fe938511f638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aec7612f72f629e3bfc5a8e098a47530aa52d06ce19c6960b75fe938511f638->enter($__internal_7aec7612f72f629e3bfc5a8e098a47530aa52d06ce19c6960b75fe938511f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        
        ";
        
        $__internal_7aec7612f72f629e3bfc5a8e098a47530aa52d06ce19c6960b75fe938511f638->leave($__internal_7aec7612f72f629e3bfc5a8e098a47530aa52d06ce19c6960b75fe938511f638_prof);

        
        $__internal_fce8469e4b882db55e4cd2b859b361b774864c424d9c6a203ea60a4f47bbbaa9->leave($__internal_fce8469e4b882db55e4cd2b859b361b774864c424d9c6a203ea60a4f47bbbaa9_prof);

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
        return array (  170 => 49,  152 => 46,  134 => 17,  119 => 12,  101 => 10,  87 => 56,  83 => 54,  81 => 49,  77 => 47,  75 => 46,  56 => 30,  52 => 29,  46 => 25,  44 => 12,  39 => 10,  29 => 2,);
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
