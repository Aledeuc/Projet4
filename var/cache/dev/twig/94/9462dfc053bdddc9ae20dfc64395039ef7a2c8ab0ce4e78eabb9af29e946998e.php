<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_362500c00eacaca143d9a61619d8df2804641c0d430c88a896828684abfb5a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41a5d1f02c45a18c9642b5de7d7562a2e4de8ace97eedb8bac4fa95c923078f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a5d1f02c45a18c9642b5de7d7562a2e4de8ace97eedb8bac4fa95c923078f2->enter($__internal_41a5d1f02c45a18c9642b5de7d7562a2e4de8ace97eedb8bac4fa95c923078f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_27e8be4939b977fcfe9cda86fbc536217fd7c438e0f89b699cfd48fc530dca0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e8be4939b977fcfe9cda86fbc536217fd7c438e0f89b699cfd48fc530dca0b->enter($__internal_27e8be4939b977fcfe9cda86fbc536217fd7c438e0f89b699cfd48fc530dca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a5d1f02c45a18c9642b5de7d7562a2e4de8ace97eedb8bac4fa95c923078f2->leave($__internal_41a5d1f02c45a18c9642b5de7d7562a2e4de8ace97eedb8bac4fa95c923078f2_prof);

        
        $__internal_27e8be4939b977fcfe9cda86fbc536217fd7c438e0f89b699cfd48fc530dca0b->leave($__internal_27e8be4939b977fcfe9cda86fbc536217fd7c438e0f89b699cfd48fc530dca0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9daa88f06eb10feedda7997782aa004e6b2bdb8b69249e281dae2b5e60d56ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9daa88f06eb10feedda7997782aa004e6b2bdb8b69249e281dae2b5e60d56ebe->enter($__internal_9daa88f06eb10feedda7997782aa004e6b2bdb8b69249e281dae2b5e60d56ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_debf0ff1a330c2673bb6a2a06f1d13c81d91050ff286b67cb397f87618b6f6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debf0ff1a330c2673bb6a2a06f1d13c81d91050ff286b67cb397f87618b6f6d5->enter($__internal_debf0ff1a330c2673bb6a2a06f1d13c81d91050ff286b67cb397f87618b6f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_debf0ff1a330c2673bb6a2a06f1d13c81d91050ff286b67cb397f87618b6f6d5->leave($__internal_debf0ff1a330c2673bb6a2a06f1d13c81d91050ff286b67cb397f87618b6f6d5_prof);

        
        $__internal_9daa88f06eb10feedda7997782aa004e6b2bdb8b69249e281dae2b5e60d56ebe->leave($__internal_9daa88f06eb10feedda7997782aa004e6b2bdb8b69249e281dae2b5e60d56ebe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfb24a75afc8aec65611b35e392e1b4fc54c5fdbaaf81c27273a9a9de10de9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb24a75afc8aec65611b35e392e1b4fc54c5fdbaaf81c27273a9a9de10de9f2->enter($__internal_cfb24a75afc8aec65611b35e392e1b4fc54c5fdbaaf81c27273a9a9de10de9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e3442e7b4f05ac9420562019de27dafe00002d283c30b0dad234c185dfc4acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3442e7b4f05ac9420562019de27dafe00002d283c30b0dad234c185dfc4acf->enter($__internal_8e3442e7b4f05ac9420562019de27dafe00002d283c30b0dad234c185dfc4acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8e3442e7b4f05ac9420562019de27dafe00002d283c30b0dad234c185dfc4acf->leave($__internal_8e3442e7b4f05ac9420562019de27dafe00002d283c30b0dad234c185dfc4acf_prof);

        
        $__internal_cfb24a75afc8aec65611b35e392e1b4fc54c5fdbaaf81c27273a9a9de10de9f2->leave($__internal_cfb24a75afc8aec65611b35e392e1b4fc54c5fdbaaf81c27273a9a9de10de9f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
