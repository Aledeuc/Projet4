<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_037ae85d0493d952e10e9dab56c4a0d869b839b63dadadfce8ea1e82033789c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9426f80b9e3c9c3be4d80e78cf32a10c18640172e55ab48d988d086d214883d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9426f80b9e3c9c3be4d80e78cf32a10c18640172e55ab48d988d086d214883d6->enter($__internal_9426f80b9e3c9c3be4d80e78cf32a10c18640172e55ab48d988d086d214883d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_69c0e8a1c1ef04221ac116d566b0ca8d1f89e23045b2b5206ec3981e8b3c88a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c0e8a1c1ef04221ac116d566b0ca8d1f89e23045b2b5206ec3981e8b3c88a0->enter($__internal_69c0e8a1c1ef04221ac116d566b0ca8d1f89e23045b2b5206ec3981e8b3c88a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9426f80b9e3c9c3be4d80e78cf32a10c18640172e55ab48d988d086d214883d6->leave($__internal_9426f80b9e3c9c3be4d80e78cf32a10c18640172e55ab48d988d086d214883d6_prof);

        
        $__internal_69c0e8a1c1ef04221ac116d566b0ca8d1f89e23045b2b5206ec3981e8b3c88a0->leave($__internal_69c0e8a1c1ef04221ac116d566b0ca8d1f89e23045b2b5206ec3981e8b3c88a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9942e4a845ea30de3334fe7878a254a291c24fba8365b2a9581a640f9e35b8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9942e4a845ea30de3334fe7878a254a291c24fba8365b2a9581a640f9e35b8df->enter($__internal_9942e4a845ea30de3334fe7878a254a291c24fba8365b2a9581a640f9e35b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89bdc10bc03ce66f8fc443e997b7d88e965a81ae4e6119600590f7942b8315f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bdc10bc03ce66f8fc443e997b7d88e965a81ae4e6119600590f7942b8315f7->enter($__internal_89bdc10bc03ce66f8fc443e997b7d88e965a81ae4e6119600590f7942b8315f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_89bdc10bc03ce66f8fc443e997b7d88e965a81ae4e6119600590f7942b8315f7->leave($__internal_89bdc10bc03ce66f8fc443e997b7d88e965a81ae4e6119600590f7942b8315f7_prof);

        
        $__internal_9942e4a845ea30de3334fe7878a254a291c24fba8365b2a9581a640f9e35b8df->leave($__internal_9942e4a845ea30de3334fe7878a254a291c24fba8365b2a9581a640f9e35b8df_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5064937aae77489e7b12036ed7fa43c6c6cc4c25c819b9cf5ab0c6c044e04d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5064937aae77489e7b12036ed7fa43c6c6cc4c25c819b9cf5ab0c6c044e04d97->enter($__internal_5064937aae77489e7b12036ed7fa43c6c6cc4c25c819b9cf5ab0c6c044e04d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38d27fc016f966e53e67dca490c7b9e3a3205d7fc018083a2181627b6cbafef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d27fc016f966e53e67dca490c7b9e3a3205d7fc018083a2181627b6cbafef0->enter($__internal_38d27fc016f966e53e67dca490c7b9e3a3205d7fc018083a2181627b6cbafef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_38d27fc016f966e53e67dca490c7b9e3a3205d7fc018083a2181627b6cbafef0->leave($__internal_38d27fc016f966e53e67dca490c7b9e3a3205d7fc018083a2181627b6cbafef0_prof);

        
        $__internal_5064937aae77489e7b12036ed7fa43c6c6cc4c25c819b9cf5ab0c6c044e04d97->leave($__internal_5064937aae77489e7b12036ed7fa43c6c6cc4c25c819b9cf5ab0c6c044e04d97_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d45288b2cbcf54812d0c7cfcf4f0fa7a2c920ba7dc0aabc39f183e48b0fe15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d45288b2cbcf54812d0c7cfcf4f0fa7a2c920ba7dc0aabc39f183e48b0fe15c->enter($__internal_4d45288b2cbcf54812d0c7cfcf4f0fa7a2c920ba7dc0aabc39f183e48b0fe15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af64d7aea52106d48b1425a19a253333aea9ac52afe49f739721403604e2555a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af64d7aea52106d48b1425a19a253333aea9ac52afe49f739721403604e2555a->enter($__internal_af64d7aea52106d48b1425a19a253333aea9ac52afe49f739721403604e2555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af64d7aea52106d48b1425a19a253333aea9ac52afe49f739721403604e2555a->leave($__internal_af64d7aea52106d48b1425a19a253333aea9ac52afe49f739721403604e2555a_prof);

        
        $__internal_4d45288b2cbcf54812d0c7cfcf4f0fa7a2c920ba7dc0aabc39f183e48b0fe15c->leave($__internal_4d45288b2cbcf54812d0c7cfcf4f0fa7a2c920ba7dc0aabc39f183e48b0fe15c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
