<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_09bcd2dc6be0f24368f66cab57adaa6f58b8b387691a537e6d589e04371b69dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_294b8ec0b6a9aad87843530bd5d0eca58500a680011271d240e6c3a535b40ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294b8ec0b6a9aad87843530bd5d0eca58500a680011271d240e6c3a535b40ba9->enter($__internal_294b8ec0b6a9aad87843530bd5d0eca58500a680011271d240e6c3a535b40ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fa6c4d2e62e36e64a21200ff4a3792a8cfeb9a8c7cbd4a73ad0b66c2ef72e8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6c4d2e62e36e64a21200ff4a3792a8cfeb9a8c7cbd4a73ad0b66c2ef72e8b7->enter($__internal_fa6c4d2e62e36e64a21200ff4a3792a8cfeb9a8c7cbd4a73ad0b66c2ef72e8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_294b8ec0b6a9aad87843530bd5d0eca58500a680011271d240e6c3a535b40ba9->leave($__internal_294b8ec0b6a9aad87843530bd5d0eca58500a680011271d240e6c3a535b40ba9_prof);

        
        $__internal_fa6c4d2e62e36e64a21200ff4a3792a8cfeb9a8c7cbd4a73ad0b66c2ef72e8b7->leave($__internal_fa6c4d2e62e36e64a21200ff4a3792a8cfeb9a8c7cbd4a73ad0b66c2ef72e8b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
