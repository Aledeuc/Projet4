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
        $__internal_64c802b39b6843a968b68e6efb4f44e90fb7c22eaf206b799dc20fbdb175af5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c802b39b6843a968b68e6efb4f44e90fb7c22eaf206b799dc20fbdb175af5a->enter($__internal_64c802b39b6843a968b68e6efb4f44e90fb7c22eaf206b799dc20fbdb175af5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_64e5597f08283ee59ab1f3b4f99d0e12e33048f6f273c1ef2c56dd8ec6c86887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e5597f08283ee59ab1f3b4f99d0e12e33048f6f273c1ef2c56dd8ec6c86887->enter($__internal_64e5597f08283ee59ab1f3b4f99d0e12e33048f6f273c1ef2c56dd8ec6c86887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_64c802b39b6843a968b68e6efb4f44e90fb7c22eaf206b799dc20fbdb175af5a->leave($__internal_64c802b39b6843a968b68e6efb4f44e90fb7c22eaf206b799dc20fbdb175af5a_prof);

        
        $__internal_64e5597f08283ee59ab1f3b4f99d0e12e33048f6f273c1ef2c56dd8ec6c86887->leave($__internal_64e5597f08283ee59ab1f3b4f99d0e12e33048f6f273c1ef2c56dd8ec6c86887_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7fd2073de8928e810fe27035d54fce7e81aed0c7095e8753256a19044e497bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fd2073de8928e810fe27035d54fce7e81aed0c7095e8753256a19044e497bf->enter($__internal_a7fd2073de8928e810fe27035d54fce7e81aed0c7095e8753256a19044e497bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26f12e09acc4e0d36872f2f5f4e58286b9b781822def108f14f2c150c3bccac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f12e09acc4e0d36872f2f5f4e58286b9b781822def108f14f2c150c3bccac4->enter($__internal_26f12e09acc4e0d36872f2f5f4e58286b9b781822def108f14f2c150c3bccac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_26f12e09acc4e0d36872f2f5f4e58286b9b781822def108f14f2c150c3bccac4->leave($__internal_26f12e09acc4e0d36872f2f5f4e58286b9b781822def108f14f2c150c3bccac4_prof);

        
        $__internal_a7fd2073de8928e810fe27035d54fce7e81aed0c7095e8753256a19044e497bf->leave($__internal_a7fd2073de8928e810fe27035d54fce7e81aed0c7095e8753256a19044e497bf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3914a1fd78990e9a163c17655d71551c390488ee086c4a2b2c78483b3a078d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3914a1fd78990e9a163c17655d71551c390488ee086c4a2b2c78483b3a078d2->enter($__internal_b3914a1fd78990e9a163c17655d71551c390488ee086c4a2b2c78483b3a078d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_257f7d8a770430013a0b956b1fdf1e3a024d6b47f025f0a811d6e082fa5bd300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f7d8a770430013a0b956b1fdf1e3a024d6b47f025f0a811d6e082fa5bd300->enter($__internal_257f7d8a770430013a0b956b1fdf1e3a024d6b47f025f0a811d6e082fa5bd300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_257f7d8a770430013a0b956b1fdf1e3a024d6b47f025f0a811d6e082fa5bd300->leave($__internal_257f7d8a770430013a0b956b1fdf1e3a024d6b47f025f0a811d6e082fa5bd300_prof);

        
        $__internal_b3914a1fd78990e9a163c17655d71551c390488ee086c4a2b2c78483b3a078d2->leave($__internal_b3914a1fd78990e9a163c17655d71551c390488ee086c4a2b2c78483b3a078d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_941c99f65f554882e0066d2a9739964af5f994bbfc1b53e3d8ccde7d2822211a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941c99f65f554882e0066d2a9739964af5f994bbfc1b53e3d8ccde7d2822211a->enter($__internal_941c99f65f554882e0066d2a9739964af5f994bbfc1b53e3d8ccde7d2822211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4240036339210439d3ca4d169df32e1064d4fce3736c3f12e9cf7f225b19a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4240036339210439d3ca4d169df32e1064d4fce3736c3f12e9cf7f225b19a52->enter($__internal_d4240036339210439d3ca4d169df32e1064d4fce3736c3f12e9cf7f225b19a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4240036339210439d3ca4d169df32e1064d4fce3736c3f12e9cf7f225b19a52->leave($__internal_d4240036339210439d3ca4d169df32e1064d4fce3736c3f12e9cf7f225b19a52_prof);

        
        $__internal_941c99f65f554882e0066d2a9739964af5f994bbfc1b53e3d8ccde7d2822211a->leave($__internal_941c99f65f554882e0066d2a9739964af5f994bbfc1b53e3d8ccde7d2822211a_prof);

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
