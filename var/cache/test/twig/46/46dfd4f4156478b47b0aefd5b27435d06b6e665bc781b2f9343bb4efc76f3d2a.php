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
        $__internal_44c74b0acc4ac660500b00d41eceebe9a2894345c19953ee131b640602bef5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c74b0acc4ac660500b00d41eceebe9a2894345c19953ee131b640602bef5ec->enter($__internal_44c74b0acc4ac660500b00d41eceebe9a2894345c19953ee131b640602bef5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7dcc0cad3d59dcc87ca7a6eb6b68ad48b8288b019ed5c0382b78cf8996bdbd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcc0cad3d59dcc87ca7a6eb6b68ad48b8288b019ed5c0382b78cf8996bdbd2f->enter($__internal_7dcc0cad3d59dcc87ca7a6eb6b68ad48b8288b019ed5c0382b78cf8996bdbd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_44c74b0acc4ac660500b00d41eceebe9a2894345c19953ee131b640602bef5ec->leave($__internal_44c74b0acc4ac660500b00d41eceebe9a2894345c19953ee131b640602bef5ec_prof);

        
        $__internal_7dcc0cad3d59dcc87ca7a6eb6b68ad48b8288b019ed5c0382b78cf8996bdbd2f->leave($__internal_7dcc0cad3d59dcc87ca7a6eb6b68ad48b8288b019ed5c0382b78cf8996bdbd2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8134f40643550ad6b74d6b9a9456f3bc0b169d51f0cc6c7c743d37ecae50952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8134f40643550ad6b74d6b9a9456f3bc0b169d51f0cc6c7c743d37ecae50952->enter($__internal_d8134f40643550ad6b74d6b9a9456f3bc0b169d51f0cc6c7c743d37ecae50952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2eb1d9c1e322e8a5953d7cf1589a8d1ac34f94ef8dbd7ad0c0d30873939afde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb1d9c1e322e8a5953d7cf1589a8d1ac34f94ef8dbd7ad0c0d30873939afde4->enter($__internal_2eb1d9c1e322e8a5953d7cf1589a8d1ac34f94ef8dbd7ad0c0d30873939afde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2eb1d9c1e322e8a5953d7cf1589a8d1ac34f94ef8dbd7ad0c0d30873939afde4->leave($__internal_2eb1d9c1e322e8a5953d7cf1589a8d1ac34f94ef8dbd7ad0c0d30873939afde4_prof);

        
        $__internal_d8134f40643550ad6b74d6b9a9456f3bc0b169d51f0cc6c7c743d37ecae50952->leave($__internal_d8134f40643550ad6b74d6b9a9456f3bc0b169d51f0cc6c7c743d37ecae50952_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_534c4c7d63f352caf25c36f612eb1c2638cb62230d4d7504bbe4d7c936eebac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c4c7d63f352caf25c36f612eb1c2638cb62230d4d7504bbe4d7c936eebac2->enter($__internal_534c4c7d63f352caf25c36f612eb1c2638cb62230d4d7504bbe4d7c936eebac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bbb211a73d7a897d9cb499b5f9b6007b32a1e0390fd4db1680d484d5beafb2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb211a73d7a897d9cb499b5f9b6007b32a1e0390fd4db1680d484d5beafb2ea->enter($__internal_bbb211a73d7a897d9cb499b5f9b6007b32a1e0390fd4db1680d484d5beafb2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bbb211a73d7a897d9cb499b5f9b6007b32a1e0390fd4db1680d484d5beafb2ea->leave($__internal_bbb211a73d7a897d9cb499b5f9b6007b32a1e0390fd4db1680d484d5beafb2ea_prof);

        
        $__internal_534c4c7d63f352caf25c36f612eb1c2638cb62230d4d7504bbe4d7c936eebac2->leave($__internal_534c4c7d63f352caf25c36f612eb1c2638cb62230d4d7504bbe4d7c936eebac2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d511ed9a3d10d13dd7246e6ab8edffe54260a42b283fa4e9b0423ff161824d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d511ed9a3d10d13dd7246e6ab8edffe54260a42b283fa4e9b0423ff161824d66->enter($__internal_d511ed9a3d10d13dd7246e6ab8edffe54260a42b283fa4e9b0423ff161824d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37afb5e96d75c2637c818cb8b524d91186d929968245452a39e12051670057a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37afb5e96d75c2637c818cb8b524d91186d929968245452a39e12051670057a1->enter($__internal_37afb5e96d75c2637c818cb8b524d91186d929968245452a39e12051670057a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37afb5e96d75c2637c818cb8b524d91186d929968245452a39e12051670057a1->leave($__internal_37afb5e96d75c2637c818cb8b524d91186d929968245452a39e12051670057a1_prof);

        
        $__internal_d511ed9a3d10d13dd7246e6ab8edffe54260a42b283fa4e9b0423ff161824d66->leave($__internal_d511ed9a3d10d13dd7246e6ab8edffe54260a42b283fa4e9b0423ff161824d66_prof);

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
