<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
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
        $__internal_1d22b6bb62ed6d65ea9e84311a11dc162175ab3777258f712e8a88f78d0b4f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d22b6bb62ed6d65ea9e84311a11dc162175ab3777258f712e8a88f78d0b4f74->enter($__internal_1d22b6bb62ed6d65ea9e84311a11dc162175ab3777258f712e8a88f78d0b4f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a331a2894b38b2fe7598a518d36a7761dea0ce63e61e3ea74825a1bbe31730e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a331a2894b38b2fe7598a518d36a7761dea0ce63e61e3ea74825a1bbe31730e4->enter($__internal_a331a2894b38b2fe7598a518d36a7761dea0ce63e61e3ea74825a1bbe31730e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1d22b6bb62ed6d65ea9e84311a11dc162175ab3777258f712e8a88f78d0b4f74->leave($__internal_1d22b6bb62ed6d65ea9e84311a11dc162175ab3777258f712e8a88f78d0b4f74_prof);

        
        $__internal_a331a2894b38b2fe7598a518d36a7761dea0ce63e61e3ea74825a1bbe31730e4->leave($__internal_a331a2894b38b2fe7598a518d36a7761dea0ce63e61e3ea74825a1bbe31730e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d51b30bc739ec25fee339ba194a3167cf443a2dc29ae8d26ff2c95e63b40e202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51b30bc739ec25fee339ba194a3167cf443a2dc29ae8d26ff2c95e63b40e202->enter($__internal_d51b30bc739ec25fee339ba194a3167cf443a2dc29ae8d26ff2c95e63b40e202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_299090a5bebc49caa97410cec7ce55a1cdcb25895df09074ca402cea25636c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299090a5bebc49caa97410cec7ce55a1cdcb25895df09074ca402cea25636c39->enter($__internal_299090a5bebc49caa97410cec7ce55a1cdcb25895df09074ca402cea25636c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_299090a5bebc49caa97410cec7ce55a1cdcb25895df09074ca402cea25636c39->leave($__internal_299090a5bebc49caa97410cec7ce55a1cdcb25895df09074ca402cea25636c39_prof);

        
        $__internal_d51b30bc739ec25fee339ba194a3167cf443a2dc29ae8d26ff2c95e63b40e202->leave($__internal_d51b30bc739ec25fee339ba194a3167cf443a2dc29ae8d26ff2c95e63b40e202_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d560e4efb26a9bd664cb434e438dea420407b4cee44ddb37b220a9287495289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d560e4efb26a9bd664cb434e438dea420407b4cee44ddb37b220a9287495289->enter($__internal_8d560e4efb26a9bd664cb434e438dea420407b4cee44ddb37b220a9287495289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a1d9ae778bd6347a33223a7213de016c5de755020d4bd3249612f86cb4f0002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1d9ae778bd6347a33223a7213de016c5de755020d4bd3249612f86cb4f0002->enter($__internal_5a1d9ae778bd6347a33223a7213de016c5de755020d4bd3249612f86cb4f0002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5a1d9ae778bd6347a33223a7213de016c5de755020d4bd3249612f86cb4f0002->leave($__internal_5a1d9ae778bd6347a33223a7213de016c5de755020d4bd3249612f86cb4f0002_prof);

        
        $__internal_8d560e4efb26a9bd664cb434e438dea420407b4cee44ddb37b220a9287495289->leave($__internal_8d560e4efb26a9bd664cb434e438dea420407b4cee44ddb37b220a9287495289_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_23a15f875bbbdfb3378de996f42236e0b172e9c7236ca25932d3061eba008d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a15f875bbbdfb3378de996f42236e0b172e9c7236ca25932d3061eba008d64->enter($__internal_23a15f875bbbdfb3378de996f42236e0b172e9c7236ca25932d3061eba008d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54b3ca6cdfd1cd6915889e0d302b23d0c4860bfe3dd264c62fb2988a1994386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b3ca6cdfd1cd6915889e0d302b23d0c4860bfe3dd264c62fb2988a1994386d->enter($__internal_54b3ca6cdfd1cd6915889e0d302b23d0c4860bfe3dd264c62fb2988a1994386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54b3ca6cdfd1cd6915889e0d302b23d0c4860bfe3dd264c62fb2988a1994386d->leave($__internal_54b3ca6cdfd1cd6915889e0d302b23d0c4860bfe3dd264c62fb2988a1994386d_prof);

        
        $__internal_23a15f875bbbdfb3378de996f42236e0b172e9c7236ca25932d3061eba008d64->leave($__internal_23a15f875bbbdfb3378de996f42236e0b172e9c7236ca25932d3061eba008d64_prof);

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
