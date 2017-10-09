<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0140a957ce408262aa6bad41db3f862946231811f3657a945d170673e87ed284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47e363c4840b4d5ebf14a344ba5be68147069209f9805c889b210ffe164f22ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e363c4840b4d5ebf14a344ba5be68147069209f9805c889b210ffe164f22ca->enter($__internal_47e363c4840b4d5ebf14a344ba5be68147069209f9805c889b210ffe164f22ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4a10bda74fc7e4fb23075d9ce653a3fe06a32c4ad8d628733c189b92eafe164f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a10bda74fc7e4fb23075d9ce653a3fe06a32c4ad8d628733c189b92eafe164f->enter($__internal_4a10bda74fc7e4fb23075d9ce653a3fe06a32c4ad8d628733c189b92eafe164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e363c4840b4d5ebf14a344ba5be68147069209f9805c889b210ffe164f22ca->leave($__internal_47e363c4840b4d5ebf14a344ba5be68147069209f9805c889b210ffe164f22ca_prof);

        
        $__internal_4a10bda74fc7e4fb23075d9ce653a3fe06a32c4ad8d628733c189b92eafe164f->leave($__internal_4a10bda74fc7e4fb23075d9ce653a3fe06a32c4ad8d628733c189b92eafe164f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ebeaa58572369f259c3549ee0ca47b71a7856c6ca444339f762a84e7ef7fdf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeaa58572369f259c3549ee0ca47b71a7856c6ca444339f762a84e7ef7fdf16->enter($__internal_ebeaa58572369f259c3549ee0ca47b71a7856c6ca444339f762a84e7ef7fdf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1e73eef71cdac46907e006f8a41b4977c2baf982e830269a13e2e31cfa354b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73eef71cdac46907e006f8a41b4977c2baf982e830269a13e2e31cfa354b4e->enter($__internal_1e73eef71cdac46907e006f8a41b4977c2baf982e830269a13e2e31cfa354b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1e73eef71cdac46907e006f8a41b4977c2baf982e830269a13e2e31cfa354b4e->leave($__internal_1e73eef71cdac46907e006f8a41b4977c2baf982e830269a13e2e31cfa354b4e_prof);

        
        $__internal_ebeaa58572369f259c3549ee0ca47b71a7856c6ca444339f762a84e7ef7fdf16->leave($__internal_ebeaa58572369f259c3549ee0ca47b71a7856c6ca444339f762a84e7ef7fdf16_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6bbad61776f58e7960eb548c490d44703005acc65a75b4085eb43cdb868fe8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bbad61776f58e7960eb548c490d44703005acc65a75b4085eb43cdb868fe8b->enter($__internal_c6bbad61776f58e7960eb548c490d44703005acc65a75b4085eb43cdb868fe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_783b9d1fa46d2ff5f3ac86c6adffb7d0571f28dd51d2fb2c6357c7013278de2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783b9d1fa46d2ff5f3ac86c6adffb7d0571f28dd51d2fb2c6357c7013278de2c->enter($__internal_783b9d1fa46d2ff5f3ac86c6adffb7d0571f28dd51d2fb2c6357c7013278de2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_783b9d1fa46d2ff5f3ac86c6adffb7d0571f28dd51d2fb2c6357c7013278de2c->leave($__internal_783b9d1fa46d2ff5f3ac86c6adffb7d0571f28dd51d2fb2c6357c7013278de2c_prof);

        
        $__internal_c6bbad61776f58e7960eb548c490d44703005acc65a75b4085eb43cdb868fe8b->leave($__internal_c6bbad61776f58e7960eb548c490d44703005acc65a75b4085eb43cdb868fe8b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
