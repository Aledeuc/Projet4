<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_20ff6b87d20683dc40b7fc6eed1e1dd3db2c6fa6cc0890640874acdd382502aa extends Twig_Template
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
        $__internal_6fa1e90c2c5d374ee120b7b56ea947c7cf03f1122b08d105b6fb46e45d82e08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa1e90c2c5d374ee120b7b56ea947c7cf03f1122b08d105b6fb46e45d82e08d->enter($__internal_6fa1e90c2c5d374ee120b7b56ea947c7cf03f1122b08d105b6fb46e45d82e08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_4fd4278f8243f5a1d398f9ef18cd0e546163e8445ec8b4c072911ee7293489a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd4278f8243f5a1d398f9ef18cd0e546163e8445ec8b4c072911ee7293489a2->enter($__internal_4fd4278f8243f5a1d398f9ef18cd0e546163e8445ec8b4c072911ee7293489a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_6fa1e90c2c5d374ee120b7b56ea947c7cf03f1122b08d105b6fb46e45d82e08d->leave($__internal_6fa1e90c2c5d374ee120b7b56ea947c7cf03f1122b08d105b6fb46e45d82e08d_prof);

        
        $__internal_4fd4278f8243f5a1d398f9ef18cd0e546163e8445ec8b4c072911ee7293489a2->leave($__internal_4fd4278f8243f5a1d398f9ef18cd0e546163e8445ec8b4c072911ee7293489a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
