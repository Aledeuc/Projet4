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
        $__internal_13cdf945d5ad2424d8b33fc0643f963328e75a15d4e26d7763628a8cb9b8c06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cdf945d5ad2424d8b33fc0643f963328e75a15d4e26d7763628a8cb9b8c06d->enter($__internal_13cdf945d5ad2424d8b33fc0643f963328e75a15d4e26d7763628a8cb9b8c06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7401fdc20bce383ffae0317aa8affa0490f159f169dcaf135a0e444886c31de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7401fdc20bce383ffae0317aa8affa0490f159f169dcaf135a0e444886c31de6->enter($__internal_7401fdc20bce383ffae0317aa8affa0490f159f169dcaf135a0e444886c31de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_13cdf945d5ad2424d8b33fc0643f963328e75a15d4e26d7763628a8cb9b8c06d->leave($__internal_13cdf945d5ad2424d8b33fc0643f963328e75a15d4e26d7763628a8cb9b8c06d_prof);

        
        $__internal_7401fdc20bce383ffae0317aa8affa0490f159f169dcaf135a0e444886c31de6->leave($__internal_7401fdc20bce383ffae0317aa8affa0490f159f169dcaf135a0e444886c31de6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8e29bff40a937909448fab46ecf1b400753ad7c22169708bb004b0481b6baba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e29bff40a937909448fab46ecf1b400753ad7c22169708bb004b0481b6baba->enter($__internal_d8e29bff40a937909448fab46ecf1b400753ad7c22169708bb004b0481b6baba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b383d893a6e409ecbdfab640e117f5c1af082126e7bea1657cc81d59b80be51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b383d893a6e409ecbdfab640e117f5c1af082126e7bea1657cc81d59b80be51->enter($__internal_9b383d893a6e409ecbdfab640e117f5c1af082126e7bea1657cc81d59b80be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9b383d893a6e409ecbdfab640e117f5c1af082126e7bea1657cc81d59b80be51->leave($__internal_9b383d893a6e409ecbdfab640e117f5c1af082126e7bea1657cc81d59b80be51_prof);

        
        $__internal_d8e29bff40a937909448fab46ecf1b400753ad7c22169708bb004b0481b6baba->leave($__internal_d8e29bff40a937909448fab46ecf1b400753ad7c22169708bb004b0481b6baba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_128d7a5a1857b7cd05932b4e4c588650d751e420e4789b6227e8e9114bb7af80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128d7a5a1857b7cd05932b4e4c588650d751e420e4789b6227e8e9114bb7af80->enter($__internal_128d7a5a1857b7cd05932b4e4c588650d751e420e4789b6227e8e9114bb7af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6da07ac9ec832f6e74925be18c0b7681535cd06f8583ed4ed04f74b37c1e1db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da07ac9ec832f6e74925be18c0b7681535cd06f8583ed4ed04f74b37c1e1db4->enter($__internal_6da07ac9ec832f6e74925be18c0b7681535cd06f8583ed4ed04f74b37c1e1db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6da07ac9ec832f6e74925be18c0b7681535cd06f8583ed4ed04f74b37c1e1db4->leave($__internal_6da07ac9ec832f6e74925be18c0b7681535cd06f8583ed4ed04f74b37c1e1db4_prof);

        
        $__internal_128d7a5a1857b7cd05932b4e4c588650d751e420e4789b6227e8e9114bb7af80->leave($__internal_128d7a5a1857b7cd05932b4e4c588650d751e420e4789b6227e8e9114bb7af80_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a6b3e3fa013afc370863625ae5794a8a3434c25afb32c3f13b27a1c0581f839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6b3e3fa013afc370863625ae5794a8a3434c25afb32c3f13b27a1c0581f839->enter($__internal_7a6b3e3fa013afc370863625ae5794a8a3434c25afb32c3f13b27a1c0581f839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3865aae2deed673a5930a8c5287e2caab384497aa8fcd4bf0c54ca02c47cdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3865aae2deed673a5930a8c5287e2caab384497aa8fcd4bf0c54ca02c47cdb4->enter($__internal_b3865aae2deed673a5930a8c5287e2caab384497aa8fcd4bf0c54ca02c47cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3865aae2deed673a5930a8c5287e2caab384497aa8fcd4bf0c54ca02c47cdb4->leave($__internal_b3865aae2deed673a5930a8c5287e2caab384497aa8fcd4bf0c54ca02c47cdb4_prof);

        
        $__internal_7a6b3e3fa013afc370863625ae5794a8a3434c25afb32c3f13b27a1c0581f839->leave($__internal_7a6b3e3fa013afc370863625ae5794a8a3434c25afb32c3f13b27a1c0581f839_prof);

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
