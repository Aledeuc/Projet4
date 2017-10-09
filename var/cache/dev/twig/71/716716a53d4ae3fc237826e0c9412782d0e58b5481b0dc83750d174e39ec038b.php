<?php

/* ::layout.html.twig */
class __TwigTemplate_1f3e13b13a89c750d565f03779a52d36c15df9abfefe5b4df4c7a59a4526718e extends Twig_Template
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
        $__internal_8f7a13dd2ac854b743bf3ebee53fcc0b6fbda3ef91eb3dbd2a77f8e3ba5c4c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7a13dd2ac854b743bf3ebee53fcc0b6fbda3ef91eb3dbd2a77f8e3ba5c4c64->enter($__internal_8f7a13dd2ac854b743bf3ebee53fcc0b6fbda3ef91eb3dbd2a77f8e3ba5c4c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_8d0a045b7e65618e8a69f28f5497a6a4b2f3da61aba8562ef649db0db5cc961a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0a045b7e65618e8a69f28f5497a6a4b2f3da61aba8562ef649db0db5cc961a->enter($__internal_8d0a045b7e65618e8a69f28f5497a6a4b2f3da61aba8562ef649db0db5cc961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_8f7a13dd2ac854b743bf3ebee53fcc0b6fbda3ef91eb3dbd2a77f8e3ba5c4c64->leave($__internal_8f7a13dd2ac854b743bf3ebee53fcc0b6fbda3ef91eb3dbd2a77f8e3ba5c4c64_prof);

        
        $__internal_8d0a045b7e65618e8a69f28f5497a6a4b2f3da61aba8562ef649db0db5cc961a->leave($__internal_8d0a045b7e65618e8a69f28f5497a6a4b2f3da61aba8562ef649db0db5cc961a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c12b4c464bc3f4a747c57b5168c63a4d16f2622c949117ab9e7f180ac58e50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c12b4c464bc3f4a747c57b5168c63a4d16f2622c949117ab9e7f180ac58e50f->enter($__internal_9c12b4c464bc3f4a747c57b5168c63a4d16f2622c949117ab9e7f180ac58e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ea924ebb559f41feb6a0a3c499c0febdedb9f58813856325cd0dd9433ca7f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea924ebb559f41feb6a0a3c499c0febdedb9f58813856325cd0dd9433ca7f9c->enter($__internal_3ea924ebb559f41feb6a0a3c499c0febdedb9f58813856325cd0dd9433ca7f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_3ea924ebb559f41feb6a0a3c499c0febdedb9f58813856325cd0dd9433ca7f9c->leave($__internal_3ea924ebb559f41feb6a0a3c499c0febdedb9f58813856325cd0dd9433ca7f9c_prof);

        
        $__internal_9c12b4c464bc3f4a747c57b5168c63a4d16f2622c949117ab9e7f180ac58e50f->leave($__internal_9c12b4c464bc3f4a747c57b5168c63a4d16f2622c949117ab9e7f180ac58e50f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a20feaac2ef7b7bd9ff38d65172d24975e8fb7967e2b60f9b35e1c996844e254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20feaac2ef7b7bd9ff38d65172d24975e8fb7967e2b60f9b35e1c996844e254->enter($__internal_a20feaac2ef7b7bd9ff38d65172d24975e8fb7967e2b60f9b35e1c996844e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c82c0e46ae767248467d7fb48cddcfd284e9dbc4447eaace28a5315bf2ab7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c82c0e46ae767248467d7fb48cddcfd284e9dbc4447eaace28a5315bf2ab7ca->enter($__internal_3c82c0e46ae767248467d7fb48cddcfd284e9dbc4447eaace28a5315bf2ab7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_3c82c0e46ae767248467d7fb48cddcfd284e9dbc4447eaace28a5315bf2ab7ca->leave($__internal_3c82c0e46ae767248467d7fb48cddcfd284e9dbc4447eaace28a5315bf2ab7ca_prof);

        
        $__internal_a20feaac2ef7b7bd9ff38d65172d24975e8fb7967e2b60f9b35e1c996844e254->leave($__internal_a20feaac2ef7b7bd9ff38d65172d24975e8fb7967e2b60f9b35e1c996844e254_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_520444a97f0fe52851415cc132bfd7bf5b9daed99e264c76e337f1125c5c2eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520444a97f0fe52851415cc132bfd7bf5b9daed99e264c76e337f1125c5c2eda->enter($__internal_520444a97f0fe52851415cc132bfd7bf5b9daed99e264c76e337f1125c5c2eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dde787f9b3450d4e35a11c4be12a7124dacf3fbaa16d8179dda3e6586ddecf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dde787f9b3450d4e35a11c4be12a7124dacf3fbaa16d8179dda3e6586ddecf3->enter($__internal_5dde787f9b3450d4e35a11c4be12a7124dacf3fbaa16d8179dda3e6586ddecf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_5dde787f9b3450d4e35a11c4be12a7124dacf3fbaa16d8179dda3e6586ddecf3->leave($__internal_5dde787f9b3450d4e35a11c4be12a7124dacf3fbaa16d8179dda3e6586ddecf3_prof);

        
        $__internal_520444a97f0fe52851415cc132bfd7bf5b9daed99e264c76e337f1125c5c2eda->leave($__internal_520444a97f0fe52851415cc132bfd7bf5b9daed99e264c76e337f1125c5c2eda_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_549547d1871f1ab66c0ba59be3f7deb71c5d2a0f41678b464b42d258cfbd912a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549547d1871f1ab66c0ba59be3f7deb71c5d2a0f41678b464b42d258cfbd912a->enter($__internal_549547d1871f1ab66c0ba59be3f7deb71c5d2a0f41678b464b42d258cfbd912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_937ffc29ab01fb7aee4eff9b7557001fe1513e55e87e7a2920eeabc09360e6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937ffc29ab01fb7aee4eff9b7557001fe1513e55e87e7a2920eeabc09360e6b0->enter($__internal_937ffc29ab01fb7aee4eff9b7557001fe1513e55e87e7a2920eeabc09360e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_937ffc29ab01fb7aee4eff9b7557001fe1513e55e87e7a2920eeabc09360e6b0->leave($__internal_937ffc29ab01fb7aee4eff9b7557001fe1513e55e87e7a2920eeabc09360e6b0_prof);

        
        $__internal_549547d1871f1ab66c0ba59be3f7deb71c5d2a0f41678b464b42d258cfbd912a->leave($__internal_549547d1871f1ab66c0ba59be3f7deb71c5d2a0f41678b464b42d258cfbd912a_prof);

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
