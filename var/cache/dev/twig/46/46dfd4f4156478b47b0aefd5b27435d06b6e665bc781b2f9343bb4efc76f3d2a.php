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
        $__internal_7f655ac1bf820215d020cddd3691a46089b7916a35ebcb114378373fc181bafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f655ac1bf820215d020cddd3691a46089b7916a35ebcb114378373fc181bafd->enter($__internal_7f655ac1bf820215d020cddd3691a46089b7916a35ebcb114378373fc181bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fa2d56b5bbdb84f7f70126d0cb15ee66686834096aad7fba7cbcfcf83a25b1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2d56b5bbdb84f7f70126d0cb15ee66686834096aad7fba7cbcfcf83a25b1fa->enter($__internal_fa2d56b5bbdb84f7f70126d0cb15ee66686834096aad7fba7cbcfcf83a25b1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7f655ac1bf820215d020cddd3691a46089b7916a35ebcb114378373fc181bafd->leave($__internal_7f655ac1bf820215d020cddd3691a46089b7916a35ebcb114378373fc181bafd_prof);

        
        $__internal_fa2d56b5bbdb84f7f70126d0cb15ee66686834096aad7fba7cbcfcf83a25b1fa->leave($__internal_fa2d56b5bbdb84f7f70126d0cb15ee66686834096aad7fba7cbcfcf83a25b1fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7c396dbebcad66d65b03bf24b08919bee1badbb4799880c42e6324081547f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c396dbebcad66d65b03bf24b08919bee1badbb4799880c42e6324081547f8d->enter($__internal_b7c396dbebcad66d65b03bf24b08919bee1badbb4799880c42e6324081547f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37cccb2ad1629dba23297c1b2a6fa5cd0d72576f65feaa2ee39b91b395b101b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cccb2ad1629dba23297c1b2a6fa5cd0d72576f65feaa2ee39b91b395b101b5->enter($__internal_37cccb2ad1629dba23297c1b2a6fa5cd0d72576f65feaa2ee39b91b395b101b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_37cccb2ad1629dba23297c1b2a6fa5cd0d72576f65feaa2ee39b91b395b101b5->leave($__internal_37cccb2ad1629dba23297c1b2a6fa5cd0d72576f65feaa2ee39b91b395b101b5_prof);

        
        $__internal_b7c396dbebcad66d65b03bf24b08919bee1badbb4799880c42e6324081547f8d->leave($__internal_b7c396dbebcad66d65b03bf24b08919bee1badbb4799880c42e6324081547f8d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcec14de3a4837c397f6eac5c2518bc6de7445de4c46452e5a1980e3440816b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcec14de3a4837c397f6eac5c2518bc6de7445de4c46452e5a1980e3440816b9->enter($__internal_bcec14de3a4837c397f6eac5c2518bc6de7445de4c46452e5a1980e3440816b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdf24469065d905fa351f04383ed7d0a547f762e20bbd4aab0247da765a82e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf24469065d905fa351f04383ed7d0a547f762e20bbd4aab0247da765a82e1f->enter($__internal_fdf24469065d905fa351f04383ed7d0a547f762e20bbd4aab0247da765a82e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fdf24469065d905fa351f04383ed7d0a547f762e20bbd4aab0247da765a82e1f->leave($__internal_fdf24469065d905fa351f04383ed7d0a547f762e20bbd4aab0247da765a82e1f_prof);

        
        $__internal_bcec14de3a4837c397f6eac5c2518bc6de7445de4c46452e5a1980e3440816b9->leave($__internal_bcec14de3a4837c397f6eac5c2518bc6de7445de4c46452e5a1980e3440816b9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_224bbdfbe1774354457f7cf28d8c046d05bc56fdc65bc64085a4972fc3711852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224bbdfbe1774354457f7cf28d8c046d05bc56fdc65bc64085a4972fc3711852->enter($__internal_224bbdfbe1774354457f7cf28d8c046d05bc56fdc65bc64085a4972fc3711852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_096106c9c153a636edb9ca98a3ada41f4a4d211b9f975f988845bd1b129b6938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096106c9c153a636edb9ca98a3ada41f4a4d211b9f975f988845bd1b129b6938->enter($__internal_096106c9c153a636edb9ca98a3ada41f4a4d211b9f975f988845bd1b129b6938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_096106c9c153a636edb9ca98a3ada41f4a4d211b9f975f988845bd1b129b6938->leave($__internal_096106c9c153a636edb9ca98a3ada41f4a4d211b9f975f988845bd1b129b6938_prof);

        
        $__internal_224bbdfbe1774354457f7cf28d8c046d05bc56fdc65bc64085a4972fc3711852->leave($__internal_224bbdfbe1774354457f7cf28d8c046d05bc56fdc65bc64085a4972fc3711852_prof);

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
