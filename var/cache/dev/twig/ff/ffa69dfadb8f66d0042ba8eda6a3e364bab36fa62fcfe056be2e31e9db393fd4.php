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
        $__internal_e2bd0356f0100833da85139106b2818348f55fce572a6cac4c073072c9ebad77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bd0356f0100833da85139106b2818348f55fce572a6cac4c073072c9ebad77->enter($__internal_e2bd0356f0100833da85139106b2818348f55fce572a6cac4c073072c9ebad77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7876ae91351e4fbccbbba241a748dedef8abfabd659776c419f34c4c550992d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7876ae91351e4fbccbbba241a748dedef8abfabd659776c419f34c4c550992d0->enter($__internal_7876ae91351e4fbccbbba241a748dedef8abfabd659776c419f34c4c550992d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e2bd0356f0100833da85139106b2818348f55fce572a6cac4c073072c9ebad77->leave($__internal_e2bd0356f0100833da85139106b2818348f55fce572a6cac4c073072c9ebad77_prof);

        
        $__internal_7876ae91351e4fbccbbba241a748dedef8abfabd659776c419f34c4c550992d0->leave($__internal_7876ae91351e4fbccbbba241a748dedef8abfabd659776c419f34c4c550992d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82f39960899d4858843e02fcd43a0f0df72d20503909475445612b9f09e54cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f39960899d4858843e02fcd43a0f0df72d20503909475445612b9f09e54cd3->enter($__internal_82f39960899d4858843e02fcd43a0f0df72d20503909475445612b9f09e54cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f58008e6058b2f42e07446fc5390b24866aaadb4ac0777e86edc7de68c6e5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f58008e6058b2f42e07446fc5390b24866aaadb4ac0777e86edc7de68c6e5f8->enter($__internal_7f58008e6058b2f42e07446fc5390b24866aaadb4ac0777e86edc7de68c6e5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f58008e6058b2f42e07446fc5390b24866aaadb4ac0777e86edc7de68c6e5f8->leave($__internal_7f58008e6058b2f42e07446fc5390b24866aaadb4ac0777e86edc7de68c6e5f8_prof);

        
        $__internal_82f39960899d4858843e02fcd43a0f0df72d20503909475445612b9f09e54cd3->leave($__internal_82f39960899d4858843e02fcd43a0f0df72d20503909475445612b9f09e54cd3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dcbb695e77234747764d0d52f57c11ce635cc77259f951c77efb4ea88389320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcbb695e77234747764d0d52f57c11ce635cc77259f951c77efb4ea88389320->enter($__internal_3dcbb695e77234747764d0d52f57c11ce635cc77259f951c77efb4ea88389320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af3dd1e5a1086ebd6642f57825c38787c71ce514637a1253f192e3ad614258fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3dd1e5a1086ebd6642f57825c38787c71ce514637a1253f192e3ad614258fc->enter($__internal_af3dd1e5a1086ebd6642f57825c38787c71ce514637a1253f192e3ad614258fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_af3dd1e5a1086ebd6642f57825c38787c71ce514637a1253f192e3ad614258fc->leave($__internal_af3dd1e5a1086ebd6642f57825c38787c71ce514637a1253f192e3ad614258fc_prof);

        
        $__internal_3dcbb695e77234747764d0d52f57c11ce635cc77259f951c77efb4ea88389320->leave($__internal_3dcbb695e77234747764d0d52f57c11ce635cc77259f951c77efb4ea88389320_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a35b795a9e463dcf4cc57c49e5ed31c6e1305cee441f3d2c9289b432cf05895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a35b795a9e463dcf4cc57c49e5ed31c6e1305cee441f3d2c9289b432cf05895->enter($__internal_0a35b795a9e463dcf4cc57c49e5ed31c6e1305cee441f3d2c9289b432cf05895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6c0110b3ec65e8d0227a74b753a9583a9c72010a243bc8447ad60080ec8b1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c0110b3ec65e8d0227a74b753a9583a9c72010a243bc8447ad60080ec8b1c6->enter($__internal_d6c0110b3ec65e8d0227a74b753a9583a9c72010a243bc8447ad60080ec8b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6c0110b3ec65e8d0227a74b753a9583a9c72010a243bc8447ad60080ec8b1c6->leave($__internal_d6c0110b3ec65e8d0227a74b753a9583a9c72010a243bc8447ad60080ec8b1c6_prof);

        
        $__internal_0a35b795a9e463dcf4cc57c49e5ed31c6e1305cee441f3d2c9289b432cf05895->leave($__internal_0a35b795a9e463dcf4cc57c49e5ed31c6e1305cee441f3d2c9289b432cf05895_prof);

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
