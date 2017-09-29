<?php

/* ::base.html.twig */
class __TwigTemplate_168373775b7e98459a42141fd891efc60f474d7d95f56672954e55245650c7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_544cc05c460410337320d79ba5a973e1db4d84ef67ae21d804c9702f71ac34e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544cc05c460410337320d79ba5a973e1db4d84ef67ae21d804c9702f71ac34e8->enter($__internal_544cc05c460410337320d79ba5a973e1db4d84ef67ae21d804c9702f71ac34e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ab6643b493de494e2fa02ca163657fb427eca4a41a4cfbebfd2a5d9f42aad369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6643b493de494e2fa02ca163657fb427eca4a41a4cfbebfd2a5d9f42aad369->enter($__internal_ab6643b493de494e2fa02ca163657fb427eca4a41a4cfbebfd2a5d9f42aad369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_544cc05c460410337320d79ba5a973e1db4d84ef67ae21d804c9702f71ac34e8->leave($__internal_544cc05c460410337320d79ba5a973e1db4d84ef67ae21d804c9702f71ac34e8_prof);

        
        $__internal_ab6643b493de494e2fa02ca163657fb427eca4a41a4cfbebfd2a5d9f42aad369->leave($__internal_ab6643b493de494e2fa02ca163657fb427eca4a41a4cfbebfd2a5d9f42aad369_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43a0422daec844e5057c4c5b35cef26b9ca97350b4fd04d029ad19391d932908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a0422daec844e5057c4c5b35cef26b9ca97350b4fd04d029ad19391d932908->enter($__internal_43a0422daec844e5057c4c5b35cef26b9ca97350b4fd04d029ad19391d932908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_663f04ab7ab4fe39de8f43c28bd4a788ffd9ecfc3c4e0ee149e9f29bc843eb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f04ab7ab4fe39de8f43c28bd4a788ffd9ecfc3c4e0ee149e9f29bc843eb7b->enter($__internal_663f04ab7ab4fe39de8f43c28bd4a788ffd9ecfc3c4e0ee149e9f29bc843eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_663f04ab7ab4fe39de8f43c28bd4a788ffd9ecfc3c4e0ee149e9f29bc843eb7b->leave($__internal_663f04ab7ab4fe39de8f43c28bd4a788ffd9ecfc3c4e0ee149e9f29bc843eb7b_prof);

        
        $__internal_43a0422daec844e5057c4c5b35cef26b9ca97350b4fd04d029ad19391d932908->leave($__internal_43a0422daec844e5057c4c5b35cef26b9ca97350b4fd04d029ad19391d932908_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25b7765f8cebb55ea94be4a32dc7552603f2c9711f57d25cc54ff02707172314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b7765f8cebb55ea94be4a32dc7552603f2c9711f57d25cc54ff02707172314->enter($__internal_25b7765f8cebb55ea94be4a32dc7552603f2c9711f57d25cc54ff02707172314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4bbea128e09d6504bf1931028be739473fc156c9f443b633bcd5179fe9f813ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbea128e09d6504bf1931028be739473fc156c9f443b633bcd5179fe9f813ed->enter($__internal_4bbea128e09d6504bf1931028be739473fc156c9f443b633bcd5179fe9f813ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4bbea128e09d6504bf1931028be739473fc156c9f443b633bcd5179fe9f813ed->leave($__internal_4bbea128e09d6504bf1931028be739473fc156c9f443b633bcd5179fe9f813ed_prof);

        
        $__internal_25b7765f8cebb55ea94be4a32dc7552603f2c9711f57d25cc54ff02707172314->leave($__internal_25b7765f8cebb55ea94be4a32dc7552603f2c9711f57d25cc54ff02707172314_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_11de3be363259823037ba2ca96604aa8b8e9ab8af3f017a8fd2d8c13401facc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11de3be363259823037ba2ca96604aa8b8e9ab8af3f017a8fd2d8c13401facc6->enter($__internal_11de3be363259823037ba2ca96604aa8b8e9ab8af3f017a8fd2d8c13401facc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b61120940d9119af21445f1014bddfcd8272caf35567c06ec0cc72694ee922c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b61120940d9119af21445f1014bddfcd8272caf35567c06ec0cc72694ee922c->enter($__internal_8b61120940d9119af21445f1014bddfcd8272caf35567c06ec0cc72694ee922c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b61120940d9119af21445f1014bddfcd8272caf35567c06ec0cc72694ee922c->leave($__internal_8b61120940d9119af21445f1014bddfcd8272caf35567c06ec0cc72694ee922c_prof);

        
        $__internal_11de3be363259823037ba2ca96604aa8b8e9ab8af3f017a8fd2d8c13401facc6->leave($__internal_11de3be363259823037ba2ca96604aa8b8e9ab8af3f017a8fd2d8c13401facc6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75167c9843c6967fdb99c4e633a5d9c1366507164ec3dae2d6c67ebc1b53824b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75167c9843c6967fdb99c4e633a5d9c1366507164ec3dae2d6c67ebc1b53824b->enter($__internal_75167c9843c6967fdb99c4e633a5d9c1366507164ec3dae2d6c67ebc1b53824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_20ed5cc487ca727f2d7c9267cf3bb6fe8cb3386eaa5cb107f8c6a240af7f12c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ed5cc487ca727f2d7c9267cf3bb6fe8cb3386eaa5cb107f8c6a240af7f12c5->enter($__internal_20ed5cc487ca727f2d7c9267cf3bb6fe8cb3386eaa5cb107f8c6a240af7f12c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20ed5cc487ca727f2d7c9267cf3bb6fe8cb3386eaa5cb107f8c6a240af7f12c5->leave($__internal_20ed5cc487ca727f2d7c9267cf3bb6fe8cb3386eaa5cb107f8c6a240af7f12c5_prof);

        
        $__internal_75167c9843c6967fdb99c4e633a5d9c1366507164ec3dae2d6c67ebc1b53824b->leave($__internal_75167c9843c6967fdb99c4e633a5d9c1366507164ec3dae2d6c67ebc1b53824b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/app/Resources/views/base.html.twig");
    }
}
