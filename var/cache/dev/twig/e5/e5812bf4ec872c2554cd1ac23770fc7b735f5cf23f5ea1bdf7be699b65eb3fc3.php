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
        $__internal_8e82934e248ed387ab7b61b99198b6a4f5d8386a96e6412cddb39a028ebf2382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e82934e248ed387ab7b61b99198b6a4f5d8386a96e6412cddb39a028ebf2382->enter($__internal_8e82934e248ed387ab7b61b99198b6a4f5d8386a96e6412cddb39a028ebf2382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a9d7d5156b1b7f53f28e3a34a43a07d602879e4c82a78648d0a97dc80fe9dece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d7d5156b1b7f53f28e3a34a43a07d602879e4c82a78648d0a97dc80fe9dece->enter($__internal_a9d7d5156b1b7f53f28e3a34a43a07d602879e4c82a78648d0a97dc80fe9dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8e82934e248ed387ab7b61b99198b6a4f5d8386a96e6412cddb39a028ebf2382->leave($__internal_8e82934e248ed387ab7b61b99198b6a4f5d8386a96e6412cddb39a028ebf2382_prof);

        
        $__internal_a9d7d5156b1b7f53f28e3a34a43a07d602879e4c82a78648d0a97dc80fe9dece->leave($__internal_a9d7d5156b1b7f53f28e3a34a43a07d602879e4c82a78648d0a97dc80fe9dece_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd90819d4f369f1e4782cd99bf14d3ea060189fff52815609b961f142de9ce75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd90819d4f369f1e4782cd99bf14d3ea060189fff52815609b961f142de9ce75->enter($__internal_bd90819d4f369f1e4782cd99bf14d3ea060189fff52815609b961f142de9ce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_158a2cc24af1796f5ab8d4f992a2361647d915b6be0958604d4da0d80ee77c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158a2cc24af1796f5ab8d4f992a2361647d915b6be0958604d4da0d80ee77c7c->enter($__internal_158a2cc24af1796f5ab8d4f992a2361647d915b6be0958604d4da0d80ee77c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_158a2cc24af1796f5ab8d4f992a2361647d915b6be0958604d4da0d80ee77c7c->leave($__internal_158a2cc24af1796f5ab8d4f992a2361647d915b6be0958604d4da0d80ee77c7c_prof);

        
        $__internal_bd90819d4f369f1e4782cd99bf14d3ea060189fff52815609b961f142de9ce75->leave($__internal_bd90819d4f369f1e4782cd99bf14d3ea060189fff52815609b961f142de9ce75_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d60045bd13e8321241e639c123466f4e0eb7fbd004e7bfef069f0b6724ca589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d60045bd13e8321241e639c123466f4e0eb7fbd004e7bfef069f0b6724ca589->enter($__internal_9d60045bd13e8321241e639c123466f4e0eb7fbd004e7bfef069f0b6724ca589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb1114803719d803f54e532715accf1799d0c9288a3f9193d854980f90f3e331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1114803719d803f54e532715accf1799d0c9288a3f9193d854980f90f3e331->enter($__internal_bb1114803719d803f54e532715accf1799d0c9288a3f9193d854980f90f3e331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bb1114803719d803f54e532715accf1799d0c9288a3f9193d854980f90f3e331->leave($__internal_bb1114803719d803f54e532715accf1799d0c9288a3f9193d854980f90f3e331_prof);

        
        $__internal_9d60045bd13e8321241e639c123466f4e0eb7fbd004e7bfef069f0b6724ca589->leave($__internal_9d60045bd13e8321241e639c123466f4e0eb7fbd004e7bfef069f0b6724ca589_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f436f2ef379a054db4d1c1fec35f912d9dc474663396b304e97927490fd68dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f436f2ef379a054db4d1c1fec35f912d9dc474663396b304e97927490fd68dc4->enter($__internal_f436f2ef379a054db4d1c1fec35f912d9dc474663396b304e97927490fd68dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddbf2672898ebe27039baf9b2476cf8747ca89b15a6bd501fd422e39a76a795a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbf2672898ebe27039baf9b2476cf8747ca89b15a6bd501fd422e39a76a795a->enter($__internal_ddbf2672898ebe27039baf9b2476cf8747ca89b15a6bd501fd422e39a76a795a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddbf2672898ebe27039baf9b2476cf8747ca89b15a6bd501fd422e39a76a795a->leave($__internal_ddbf2672898ebe27039baf9b2476cf8747ca89b15a6bd501fd422e39a76a795a_prof);

        
        $__internal_f436f2ef379a054db4d1c1fec35f912d9dc474663396b304e97927490fd68dc4->leave($__internal_f436f2ef379a054db4d1c1fec35f912d9dc474663396b304e97927490fd68dc4_prof);

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
