<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_28811c1da81b0e51ce3033330a5726c7d0212912e37c8cd7c6f62b7597e85d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28811c1da81b0e51ce3033330a5726c7d0212912e37c8cd7c6f62b7597e85d5f->enter($__internal_28811c1da81b0e51ce3033330a5726c7d0212912e37c8cd7c6f62b7597e85d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_654b44a789831c83db838ce4c24dc6e2098782b3798dbdf6b5720852e6318b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654b44a789831c83db838ce4c24dc6e2098782b3798dbdf6b5720852e6318b34->enter($__internal_654b44a789831c83db838ce4c24dc6e2098782b3798dbdf6b5720852e6318b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_28811c1da81b0e51ce3033330a5726c7d0212912e37c8cd7c6f62b7597e85d5f->leave($__internal_28811c1da81b0e51ce3033330a5726c7d0212912e37c8cd7c6f62b7597e85d5f_prof);

        
        $__internal_654b44a789831c83db838ce4c24dc6e2098782b3798dbdf6b5720852e6318b34->leave($__internal_654b44a789831c83db838ce4c24dc6e2098782b3798dbdf6b5720852e6318b34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8112eeceff9c75478339dfb8d8bc8e0308a601c20e5e61e80e4f860573faf744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8112eeceff9c75478339dfb8d8bc8e0308a601c20e5e61e80e4f860573faf744->enter($__internal_8112eeceff9c75478339dfb8d8bc8e0308a601c20e5e61e80e4f860573faf744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_954c3f042e627124ad436391857cb637ad62c8efc1fadc6404054f93a7186dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954c3f042e627124ad436391857cb637ad62c8efc1fadc6404054f93a7186dbe->enter($__internal_954c3f042e627124ad436391857cb637ad62c8efc1fadc6404054f93a7186dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_954c3f042e627124ad436391857cb637ad62c8efc1fadc6404054f93a7186dbe->leave($__internal_954c3f042e627124ad436391857cb637ad62c8efc1fadc6404054f93a7186dbe_prof);

        
        $__internal_8112eeceff9c75478339dfb8d8bc8e0308a601c20e5e61e80e4f860573faf744->leave($__internal_8112eeceff9c75478339dfb8d8bc8e0308a601c20e5e61e80e4f860573faf744_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db551cb917f9e7b7c00aef5ccaebdf1a9f36c16de4971ec9408b1f566dcc11d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db551cb917f9e7b7c00aef5ccaebdf1a9f36c16de4971ec9408b1f566dcc11d5->enter($__internal_db551cb917f9e7b7c00aef5ccaebdf1a9f36c16de4971ec9408b1f566dcc11d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_140742f9b37e463a552729be257bfdf49cf4c3bfc0792fabd419e8db46997dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140742f9b37e463a552729be257bfdf49cf4c3bfc0792fabd419e8db46997dd8->enter($__internal_140742f9b37e463a552729be257bfdf49cf4c3bfc0792fabd419e8db46997dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_140742f9b37e463a552729be257bfdf49cf4c3bfc0792fabd419e8db46997dd8->leave($__internal_140742f9b37e463a552729be257bfdf49cf4c3bfc0792fabd419e8db46997dd8_prof);

        
        $__internal_db551cb917f9e7b7c00aef5ccaebdf1a9f36c16de4971ec9408b1f566dcc11d5->leave($__internal_db551cb917f9e7b7c00aef5ccaebdf1a9f36c16de4971ec9408b1f566dcc11d5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ebdf188a3ee1eca8346ff65507d24115c988968ceb243f101c696aa87a2f7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebdf188a3ee1eca8346ff65507d24115c988968ceb243f101c696aa87a2f7fe->enter($__internal_9ebdf188a3ee1eca8346ff65507d24115c988968ceb243f101c696aa87a2f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_903a6f2f7a954831bdc0935ea0f30011505619754ca7c44a37a6a2eb304e339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903a6f2f7a954831bdc0935ea0f30011505619754ca7c44a37a6a2eb304e339d->enter($__internal_903a6f2f7a954831bdc0935ea0f30011505619754ca7c44a37a6a2eb304e339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_903a6f2f7a954831bdc0935ea0f30011505619754ca7c44a37a6a2eb304e339d->leave($__internal_903a6f2f7a954831bdc0935ea0f30011505619754ca7c44a37a6a2eb304e339d_prof);

        
        $__internal_9ebdf188a3ee1eca8346ff65507d24115c988968ceb243f101c696aa87a2f7fe->leave($__internal_9ebdf188a3ee1eca8346ff65507d24115c988968ceb243f101c696aa87a2f7fe_prof);

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
