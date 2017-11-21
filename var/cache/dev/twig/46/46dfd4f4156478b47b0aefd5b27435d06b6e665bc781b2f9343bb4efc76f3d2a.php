<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_760500d60203a18329615ad634ec6c08831d83448a94b3277ba0bf727c4972ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760500d60203a18329615ad634ec6c08831d83448a94b3277ba0bf727c4972ce->enter($__internal_760500d60203a18329615ad634ec6c08831d83448a94b3277ba0bf727c4972ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7cf53e52b43e80183db1f8411c299f7b508791d8e7882e5fe50132fa27c93f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf53e52b43e80183db1f8411c299f7b508791d8e7882e5fe50132fa27c93f85->enter($__internal_7cf53e52b43e80183db1f8411c299f7b508791d8e7882e5fe50132fa27c93f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_760500d60203a18329615ad634ec6c08831d83448a94b3277ba0bf727c4972ce->leave($__internal_760500d60203a18329615ad634ec6c08831d83448a94b3277ba0bf727c4972ce_prof);

        
        $__internal_7cf53e52b43e80183db1f8411c299f7b508791d8e7882e5fe50132fa27c93f85->leave($__internal_7cf53e52b43e80183db1f8411c299f7b508791d8e7882e5fe50132fa27c93f85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_177aac798acb02cf8c47777401627b7baaf553c8147565b5c87bcfa088370909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177aac798acb02cf8c47777401627b7baaf553c8147565b5c87bcfa088370909->enter($__internal_177aac798acb02cf8c47777401627b7baaf553c8147565b5c87bcfa088370909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4645c8411d7ba440a14ce68a3546cee56a5c22053de9d652412a24eb9c513870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4645c8411d7ba440a14ce68a3546cee56a5c22053de9d652412a24eb9c513870->enter($__internal_4645c8411d7ba440a14ce68a3546cee56a5c22053de9d652412a24eb9c513870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4645c8411d7ba440a14ce68a3546cee56a5c22053de9d652412a24eb9c513870->leave($__internal_4645c8411d7ba440a14ce68a3546cee56a5c22053de9d652412a24eb9c513870_prof);

        
        $__internal_177aac798acb02cf8c47777401627b7baaf553c8147565b5c87bcfa088370909->leave($__internal_177aac798acb02cf8c47777401627b7baaf553c8147565b5c87bcfa088370909_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_da7551c68a22737303498e2343974c97dc4a45d8def18a4397bbb71267d156a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7551c68a22737303498e2343974c97dc4a45d8def18a4397bbb71267d156a6->enter($__internal_da7551c68a22737303498e2343974c97dc4a45d8def18a4397bbb71267d156a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a30260a17f87a0b2de8bc6ff6db3edb39f2a86871d6ed560279ea47754d222ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30260a17f87a0b2de8bc6ff6db3edb39f2a86871d6ed560279ea47754d222ae->enter($__internal_a30260a17f87a0b2de8bc6ff6db3edb39f2a86871d6ed560279ea47754d222ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a30260a17f87a0b2de8bc6ff6db3edb39f2a86871d6ed560279ea47754d222ae->leave($__internal_a30260a17f87a0b2de8bc6ff6db3edb39f2a86871d6ed560279ea47754d222ae_prof);

        
        $__internal_da7551c68a22737303498e2343974c97dc4a45d8def18a4397bbb71267d156a6->leave($__internal_da7551c68a22737303498e2343974c97dc4a45d8def18a4397bbb71267d156a6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1b7828472a818b52e964e993d672b3fb14f3d749e8f0d13961ca053d274456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1b7828472a818b52e964e993d672b3fb14f3d749e8f0d13961ca053d274456->enter($__internal_3a1b7828472a818b52e964e993d672b3fb14f3d749e8f0d13961ca053d274456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad5d8637b8575cc5eb48e2f3d2a3d03c2999c65be79cd04552461945413b927b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5d8637b8575cc5eb48e2f3d2a3d03c2999c65be79cd04552461945413b927b->enter($__internal_ad5d8637b8575cc5eb48e2f3d2a3d03c2999c65be79cd04552461945413b927b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad5d8637b8575cc5eb48e2f3d2a3d03c2999c65be79cd04552461945413b927b->leave($__internal_ad5d8637b8575cc5eb48e2f3d2a3d03c2999c65be79cd04552461945413b927b_prof);

        
        $__internal_3a1b7828472a818b52e964e993d672b3fb14f3d749e8f0d13961ca053d274456->leave($__internal_3a1b7828472a818b52e964e993d672b3fb14f3d749e8f0d13961ca053d274456_prof);

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
