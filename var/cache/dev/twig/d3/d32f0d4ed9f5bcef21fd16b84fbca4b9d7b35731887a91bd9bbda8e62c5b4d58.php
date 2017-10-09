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
        $__internal_564e5b81eb1c94537185fc966b944b757e15552758c345c681248525df8801ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564e5b81eb1c94537185fc966b944b757e15552758c345c681248525df8801ff->enter($__internal_564e5b81eb1c94537185fc966b944b757e15552758c345c681248525df8801ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_97641dfd23ee365ac7d2c51ad7a3afc59533209e531af638159f34fdd3d94722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97641dfd23ee365ac7d2c51ad7a3afc59533209e531af638159f34fdd3d94722->enter($__internal_97641dfd23ee365ac7d2c51ad7a3afc59533209e531af638159f34fdd3d94722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_564e5b81eb1c94537185fc966b944b757e15552758c345c681248525df8801ff->leave($__internal_564e5b81eb1c94537185fc966b944b757e15552758c345c681248525df8801ff_prof);

        
        $__internal_97641dfd23ee365ac7d2c51ad7a3afc59533209e531af638159f34fdd3d94722->leave($__internal_97641dfd23ee365ac7d2c51ad7a3afc59533209e531af638159f34fdd3d94722_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea8e1e27f7c983e9c98ba94959e16918d4ebea020e20187f1ac2aa2d8ffab042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8e1e27f7c983e9c98ba94959e16918d4ebea020e20187f1ac2aa2d8ffab042->enter($__internal_ea8e1e27f7c983e9c98ba94959e16918d4ebea020e20187f1ac2aa2d8ffab042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b54b2ff98c9328eaf26d2ed46306efd143d7d86c098616e314b092c5a5888638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54b2ff98c9328eaf26d2ed46306efd143d7d86c098616e314b092c5a5888638->enter($__internal_b54b2ff98c9328eaf26d2ed46306efd143d7d86c098616e314b092c5a5888638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b54b2ff98c9328eaf26d2ed46306efd143d7d86c098616e314b092c5a5888638->leave($__internal_b54b2ff98c9328eaf26d2ed46306efd143d7d86c098616e314b092c5a5888638_prof);

        
        $__internal_ea8e1e27f7c983e9c98ba94959e16918d4ebea020e20187f1ac2aa2d8ffab042->leave($__internal_ea8e1e27f7c983e9c98ba94959e16918d4ebea020e20187f1ac2aa2d8ffab042_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ef92a18ed5b12f6714875342e5928c7fcff5360b369140435f13c008049e2b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef92a18ed5b12f6714875342e5928c7fcff5360b369140435f13c008049e2b7->enter($__internal_5ef92a18ed5b12f6714875342e5928c7fcff5360b369140435f13c008049e2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9aa74f4c60b42f60a4856a95eaa218c66792fd032346ae80fc0254234d312b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa74f4c60b42f60a4856a95eaa218c66792fd032346ae80fc0254234d312b61->enter($__internal_9aa74f4c60b42f60a4856a95eaa218c66792fd032346ae80fc0254234d312b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9aa74f4c60b42f60a4856a95eaa218c66792fd032346ae80fc0254234d312b61->leave($__internal_9aa74f4c60b42f60a4856a95eaa218c66792fd032346ae80fc0254234d312b61_prof);

        
        $__internal_5ef92a18ed5b12f6714875342e5928c7fcff5360b369140435f13c008049e2b7->leave($__internal_5ef92a18ed5b12f6714875342e5928c7fcff5360b369140435f13c008049e2b7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_980babb47c584baaacd96f7163bff65dd5cfd0aa0364461624fa289dfc8ab677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980babb47c584baaacd96f7163bff65dd5cfd0aa0364461624fa289dfc8ab677->enter($__internal_980babb47c584baaacd96f7163bff65dd5cfd0aa0364461624fa289dfc8ab677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60bb8c67ab255bb9148fc6de25103a0a9e481411e9a261e57fdbb859c07bdd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bb8c67ab255bb9148fc6de25103a0a9e481411e9a261e57fdbb859c07bdd08->enter($__internal_60bb8c67ab255bb9148fc6de25103a0a9e481411e9a261e57fdbb859c07bdd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60bb8c67ab255bb9148fc6de25103a0a9e481411e9a261e57fdbb859c07bdd08->leave($__internal_60bb8c67ab255bb9148fc6de25103a0a9e481411e9a261e57fdbb859c07bdd08_prof);

        
        $__internal_980babb47c584baaacd96f7163bff65dd5cfd0aa0364461624fa289dfc8ab677->leave($__internal_980babb47c584baaacd96f7163bff65dd5cfd0aa0364461624fa289dfc8ab677_prof);

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
", "@Twig/layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
