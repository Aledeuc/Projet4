<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cea9427ee02d954c59bb57d662b46bf2e1e3ed43b775442053a6eff858385c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cea9427ee02d954c59bb57d662b46bf2e1e3ed43b775442053a6eff858385c3->enter($__internal_8cea9427ee02d954c59bb57d662b46bf2e1e3ed43b775442053a6eff858385c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_45b8cbbeb5600d8e54127abd0e419615051c3ac48f370f85bfa5046ffee5c109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b8cbbeb5600d8e54127abd0e419615051c3ac48f370f85bfa5046ffee5c109->enter($__internal_45b8cbbeb5600d8e54127abd0e419615051c3ac48f370f85bfa5046ffee5c109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8cea9427ee02d954c59bb57d662b46bf2e1e3ed43b775442053a6eff858385c3->leave($__internal_8cea9427ee02d954c59bb57d662b46bf2e1e3ed43b775442053a6eff858385c3_prof);

        
        $__internal_45b8cbbeb5600d8e54127abd0e419615051c3ac48f370f85bfa5046ffee5c109->leave($__internal_45b8cbbeb5600d8e54127abd0e419615051c3ac48f370f85bfa5046ffee5c109_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2d9ecd4c6684f88da449198ff7366900a716b8d2e7c711510152f87edd0ff23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9ecd4c6684f88da449198ff7366900a716b8d2e7c711510152f87edd0ff23c->enter($__internal_2d9ecd4c6684f88da449198ff7366900a716b8d2e7c711510152f87edd0ff23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f9414a9f8b5e7a67755da114b6c76314764efe737dd989bcef2980b535c0363a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9414a9f8b5e7a67755da114b6c76314764efe737dd989bcef2980b535c0363a->enter($__internal_f9414a9f8b5e7a67755da114b6c76314764efe737dd989bcef2980b535c0363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f9414a9f8b5e7a67755da114b6c76314764efe737dd989bcef2980b535c0363a->leave($__internal_f9414a9f8b5e7a67755da114b6c76314764efe737dd989bcef2980b535c0363a_prof);

        
        $__internal_2d9ecd4c6684f88da449198ff7366900a716b8d2e7c711510152f87edd0ff23c->leave($__internal_2d9ecd4c6684f88da449198ff7366900a716b8d2e7c711510152f87edd0ff23c_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0a9872cc50874fd373c8b81fc4c7336a2061f1bc01d22f3444c48621c3ed0f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9872cc50874fd373c8b81fc4c7336a2061f1bc01d22f3444c48621c3ed0f8d->enter($__internal_0a9872cc50874fd373c8b81fc4c7336a2061f1bc01d22f3444c48621c3ed0f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_389bfe5ba257c6fc06262401f80dbacd9d6deb8a67d7ff2c0de5d6e9e08038f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389bfe5ba257c6fc06262401f80dbacd9d6deb8a67d7ff2c0de5d6e9e08038f4->enter($__internal_389bfe5ba257c6fc06262401f80dbacd9d6deb8a67d7ff2c0de5d6e9e08038f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_389bfe5ba257c6fc06262401f80dbacd9d6deb8a67d7ff2c0de5d6e9e08038f4->leave($__internal_389bfe5ba257c6fc06262401f80dbacd9d6deb8a67d7ff2c0de5d6e9e08038f4_prof);

        
        $__internal_0a9872cc50874fd373c8b81fc4c7336a2061f1bc01d22f3444c48621c3ed0f8d->leave($__internal_0a9872cc50874fd373c8b81fc4c7336a2061f1bc01d22f3444c48621c3ed0f8d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_eedd9d2ba62b190049797d6fa338b0179d232fa5a1e1f2fa12db2f7d7fb207a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedd9d2ba62b190049797d6fa338b0179d232fa5a1e1f2fa12db2f7d7fb207a9->enter($__internal_eedd9d2ba62b190049797d6fa338b0179d232fa5a1e1f2fa12db2f7d7fb207a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e4be7ac591893d194ff3d0f800e4b00631ca7e5839fc1c6b8bd9737ea6d62e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4be7ac591893d194ff3d0f800e4b00631ca7e5839fc1c6b8bd9737ea6d62e50->enter($__internal_e4be7ac591893d194ff3d0f800e4b00631ca7e5839fc1c6b8bd9737ea6d62e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e4be7ac591893d194ff3d0f800e4b00631ca7e5839fc1c6b8bd9737ea6d62e50->leave($__internal_e4be7ac591893d194ff3d0f800e4b00631ca7e5839fc1c6b8bd9737ea6d62e50_prof);

        
        $__internal_eedd9d2ba62b190049797d6fa338b0179d232fa5a1e1f2fa12db2f7d7fb207a9->leave($__internal_eedd9d2ba62b190049797d6fa338b0179d232fa5a1e1f2fa12db2f7d7fb207a9_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9e0dbf8aa72e0fafb0dd04468241de1989224a089bb4425ba0c694fa95b4cbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0dbf8aa72e0fafb0dd04468241de1989224a089bb4425ba0c694fa95b4cbce->enter($__internal_9e0dbf8aa72e0fafb0dd04468241de1989224a089bb4425ba0c694fa95b4cbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6749a59927282dee6711261daf2f8939d0074eb9e85af6d3360127d070e15ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6749a59927282dee6711261daf2f8939d0074eb9e85af6d3360127d070e15ae2->enter($__internal_6749a59927282dee6711261daf2f8939d0074eb9e85af6d3360127d070e15ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_1f38095a89fe5c1be76c17216daf831a0be7072e88b7cbc2e5311c700db06ef9 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_df560ce4b2dbf1b18ca4c0ec487a222f18723bb1e3360519efc857e27b21fed0 = "{{") && ('' === $__internal_df560ce4b2dbf1b18ca4c0ec487a222f18723bb1e3360519efc857e27b21fed0 || 0 === strpos($__internal_1f38095a89fe5c1be76c17216daf831a0be7072e88b7cbc2e5311c700db06ef9, $__internal_df560ce4b2dbf1b18ca4c0ec487a222f18723bb1e3360519efc857e27b21fed0)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_6749a59927282dee6711261daf2f8939d0074eb9e85af6d3360127d070e15ae2->leave($__internal_6749a59927282dee6711261daf2f8939d0074eb9e85af6d3360127d070e15ae2_prof);

        
        $__internal_9e0dbf8aa72e0fafb0dd04468241de1989224a089bb4425ba0c694fa95b4cbce->leave($__internal_9e0dbf8aa72e0fafb0dd04468241de1989224a089bb4425ba0c694fa95b4cbce_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1750834c8cb73234483c7dcfae1e222fe6f95a51666c9485a93a8653b1593423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1750834c8cb73234483c7dcfae1e222fe6f95a51666c9485a93a8653b1593423->enter($__internal_1750834c8cb73234483c7dcfae1e222fe6f95a51666c9485a93a8653b1593423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b404a6daa2178cdc6b611cb6b554a20b9022f09b2c9f82a85b16884483f242c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b404a6daa2178cdc6b611cb6b554a20b9022f09b2c9f82a85b16884483f242c9->enter($__internal_b404a6daa2178cdc6b611cb6b554a20b9022f09b2c9f82a85b16884483f242c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b404a6daa2178cdc6b611cb6b554a20b9022f09b2c9f82a85b16884483f242c9->leave($__internal_b404a6daa2178cdc6b611cb6b554a20b9022f09b2c9f82a85b16884483f242c9_prof);

        
        $__internal_1750834c8cb73234483c7dcfae1e222fe6f95a51666c9485a93a8653b1593423->leave($__internal_1750834c8cb73234483c7dcfae1e222fe6f95a51666c9485a93a8653b1593423_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cce2f9f176d45c2df285cb1a3d870c7496ddd50fcb0bcb1fdf7d710ae169b22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce2f9f176d45c2df285cb1a3d870c7496ddd50fcb0bcb1fdf7d710ae169b22c->enter($__internal_cce2f9f176d45c2df285cb1a3d870c7496ddd50fcb0bcb1fdf7d710ae169b22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8723bb235627b4f96529ade17201d517ee1037d1e5d623f232e320bd4dee598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8723bb235627b4f96529ade17201d517ee1037d1e5d623f232e320bd4dee598e->enter($__internal_8723bb235627b4f96529ade17201d517ee1037d1e5d623f232e320bd4dee598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_8723bb235627b4f96529ade17201d517ee1037d1e5d623f232e320bd4dee598e->leave($__internal_8723bb235627b4f96529ade17201d517ee1037d1e5d623f232e320bd4dee598e_prof);

        
        $__internal_cce2f9f176d45c2df285cb1a3d870c7496ddd50fcb0bcb1fdf7d710ae169b22c->leave($__internal_cce2f9f176d45c2df285cb1a3d870c7496ddd50fcb0bcb1fdf7d710ae169b22c_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_aaf5578a40f80c0384b52071cb9de81a41fa3a6961ade2b4e34023d79a509654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf5578a40f80c0384b52071cb9de81a41fa3a6961ade2b4e34023d79a509654->enter($__internal_aaf5578a40f80c0384b52071cb9de81a41fa3a6961ade2b4e34023d79a509654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_61c43dc9402767cdf3b00d40b466bebf6ae6dbcb904e316792cf9041494fb259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c43dc9402767cdf3b00d40b466bebf6ae6dbcb904e316792cf9041494fb259->enter($__internal_61c43dc9402767cdf3b00d40b466bebf6ae6dbcb904e316792cf9041494fb259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_61c43dc9402767cdf3b00d40b466bebf6ae6dbcb904e316792cf9041494fb259->leave($__internal_61c43dc9402767cdf3b00d40b466bebf6ae6dbcb904e316792cf9041494fb259_prof);

        
        $__internal_aaf5578a40f80c0384b52071cb9de81a41fa3a6961ade2b4e34023d79a509654->leave($__internal_aaf5578a40f80c0384b52071cb9de81a41fa3a6961ade2b4e34023d79a509654_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d910f4f507d4210f51dda374dcc3a4fec39189786fd122fcb4e5f5ccc1ae6061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d910f4f507d4210f51dda374dcc3a4fec39189786fd122fcb4e5f5ccc1ae6061->enter($__internal_d910f4f507d4210f51dda374dcc3a4fec39189786fd122fcb4e5f5ccc1ae6061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2aff3d98c4ceb4a23254b33c7a7f6a5b988044c6d1f90c2305b638f471397b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aff3d98c4ceb4a23254b33c7a7f6a5b988044c6d1f90c2305b638f471397b20->enter($__internal_2aff3d98c4ceb4a23254b33c7a7f6a5b988044c6d1f90c2305b638f471397b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_2aff3d98c4ceb4a23254b33c7a7f6a5b988044c6d1f90c2305b638f471397b20->leave($__internal_2aff3d98c4ceb4a23254b33c7a7f6a5b988044c6d1f90c2305b638f471397b20_prof);

        
        $__internal_d910f4f507d4210f51dda374dcc3a4fec39189786fd122fcb4e5f5ccc1ae6061->leave($__internal_d910f4f507d4210f51dda374dcc3a4fec39189786fd122fcb4e5f5ccc1ae6061_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5871739b5c97a1148707abac71e83e994186ba207452a4dd53acc4952e3224a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5871739b5c97a1148707abac71e83e994186ba207452a4dd53acc4952e3224a7->enter($__internal_5871739b5c97a1148707abac71e83e994186ba207452a4dd53acc4952e3224a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_7f8e0e353e638d2ff7f3c5075cdac56a45f1aac5a996bfbecc7e6784220e1bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8e0e353e638d2ff7f3c5075cdac56a45f1aac5a996bfbecc7e6784220e1bb6->enter($__internal_7f8e0e353e638d2ff7f3c5075cdac56a45f1aac5a996bfbecc7e6784220e1bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_7f8e0e353e638d2ff7f3c5075cdac56a45f1aac5a996bfbecc7e6784220e1bb6->leave($__internal_7f8e0e353e638d2ff7f3c5075cdac56a45f1aac5a996bfbecc7e6784220e1bb6_prof);

        
        $__internal_5871739b5c97a1148707abac71e83e994186ba207452a4dd53acc4952e3224a7->leave($__internal_5871739b5c97a1148707abac71e83e994186ba207452a4dd53acc4952e3224a7_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_269561ea246e9bce54fec621d41f10e15fce60201759ce49c8b4d9e8d64af533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269561ea246e9bce54fec621d41f10e15fce60201759ce49c8b4d9e8d64af533->enter($__internal_269561ea246e9bce54fec621d41f10e15fce60201759ce49c8b4d9e8d64af533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_26c4ca2d6a38213eadf8c9bd805699e03e38fe43b85ebcfccad60a5851d3b198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c4ca2d6a38213eadf8c9bd805699e03e38fe43b85ebcfccad60a5851d3b198->enter($__internal_26c4ca2d6a38213eadf8c9bd805699e03e38fe43b85ebcfccad60a5851d3b198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_26c4ca2d6a38213eadf8c9bd805699e03e38fe43b85ebcfccad60a5851d3b198->leave($__internal_26c4ca2d6a38213eadf8c9bd805699e03e38fe43b85ebcfccad60a5851d3b198_prof);

        
        $__internal_269561ea246e9bce54fec621d41f10e15fce60201759ce49c8b4d9e8d64af533->leave($__internal_269561ea246e9bce54fec621d41f10e15fce60201759ce49c8b4d9e8d64af533_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d450997a52c17f0c0d713e626082da831e73d5cf4d69b8d28106b52c402ba934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d450997a52c17f0c0d713e626082da831e73d5cf4d69b8d28106b52c402ba934->enter($__internal_d450997a52c17f0c0d713e626082da831e73d5cf4d69b8d28106b52c402ba934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_732099e023071274e7a6ba5acebc498dd4c4320e9afa413b73a2a73c3b0f3ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732099e023071274e7a6ba5acebc498dd4c4320e9afa413b73a2a73c3b0f3ba4->enter($__internal_732099e023071274e7a6ba5acebc498dd4c4320e9afa413b73a2a73c3b0f3ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_732099e023071274e7a6ba5acebc498dd4c4320e9afa413b73a2a73c3b0f3ba4->leave($__internal_732099e023071274e7a6ba5acebc498dd4c4320e9afa413b73a2a73c3b0f3ba4_prof);

        
        $__internal_d450997a52c17f0c0d713e626082da831e73d5cf4d69b8d28106b52c402ba934->leave($__internal_d450997a52c17f0c0d713e626082da831e73d5cf4d69b8d28106b52c402ba934_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1cd0d8b91ec474aa70854c5978f0ae93348bbefa83b77ae43200738a5c0eebe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd0d8b91ec474aa70854c5978f0ae93348bbefa83b77ae43200738a5c0eebe8->enter($__internal_1cd0d8b91ec474aa70854c5978f0ae93348bbefa83b77ae43200738a5c0eebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d04290435ae402da69ec2a611a8736909c318a828582037c6f0b05c2d81ee9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04290435ae402da69ec2a611a8736909c318a828582037c6f0b05c2d81ee9ea->enter($__internal_d04290435ae402da69ec2a611a8736909c318a828582037c6f0b05c2d81ee9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_d04290435ae402da69ec2a611a8736909c318a828582037c6f0b05c2d81ee9ea->leave($__internal_d04290435ae402da69ec2a611a8736909c318a828582037c6f0b05c2d81ee9ea_prof);

        
        $__internal_1cd0d8b91ec474aa70854c5978f0ae93348bbefa83b77ae43200738a5c0eebe8->leave($__internal_1cd0d8b91ec474aa70854c5978f0ae93348bbefa83b77ae43200738a5c0eebe8_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6190762cb6b495dd7d18ea7fae6e0ccbd07103f8cdd7dca30830724e1eaf16c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6190762cb6b495dd7d18ea7fae6e0ccbd07103f8cdd7dca30830724e1eaf16c1->enter($__internal_6190762cb6b495dd7d18ea7fae6e0ccbd07103f8cdd7dca30830724e1eaf16c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c0ab4cba2a8947990296caa098dbd3d6c29536d3df8d444d58f76ed7232e0cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ab4cba2a8947990296caa098dbd3d6c29536d3df8d444d58f76ed7232e0cd0->enter($__internal_c0ab4cba2a8947990296caa098dbd3d6c29536d3df8d444d58f76ed7232e0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_c0ab4cba2a8947990296caa098dbd3d6c29536d3df8d444d58f76ed7232e0cd0->leave($__internal_c0ab4cba2a8947990296caa098dbd3d6c29536d3df8d444d58f76ed7232e0cd0_prof);

        
        $__internal_6190762cb6b495dd7d18ea7fae6e0ccbd07103f8cdd7dca30830724e1eaf16c1->leave($__internal_6190762cb6b495dd7d18ea7fae6e0ccbd07103f8cdd7dca30830724e1eaf16c1_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c61fc574a09f8639199008ac0e3526eb2ee0869d22f878b93f28a3ca889fee02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61fc574a09f8639199008ac0e3526eb2ee0869d22f878b93f28a3ca889fee02->enter($__internal_c61fc574a09f8639199008ac0e3526eb2ee0869d22f878b93f28a3ca889fee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_98cb3265bd8933707fe0a0dc7532a6c26c03d11c1b7fe86fe887ce6731b74b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98cb3265bd8933707fe0a0dc7532a6c26c03d11c1b7fe86fe887ce6731b74b0e->enter($__internal_98cb3265bd8933707fe0a0dc7532a6c26c03d11c1b7fe86fe887ce6731b74b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_98cb3265bd8933707fe0a0dc7532a6c26c03d11c1b7fe86fe887ce6731b74b0e->leave($__internal_98cb3265bd8933707fe0a0dc7532a6c26c03d11c1b7fe86fe887ce6731b74b0e_prof);

        
        $__internal_c61fc574a09f8639199008ac0e3526eb2ee0869d22f878b93f28a3ca889fee02->leave($__internal_c61fc574a09f8639199008ac0e3526eb2ee0869d22f878b93f28a3ca889fee02_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_afb9aaa08b02449dee3f82294c52b2f11b7dfd5975366f7c20ba5f7fc28c4852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb9aaa08b02449dee3f82294c52b2f11b7dfd5975366f7c20ba5f7fc28c4852->enter($__internal_afb9aaa08b02449dee3f82294c52b2f11b7dfd5975366f7c20ba5f7fc28c4852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_91da425aaeccf617878b4594f76ce847b3b4e1c5303cea9db0da0cd85f488a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91da425aaeccf617878b4594f76ce847b3b4e1c5303cea9db0da0cd85f488a79->enter($__internal_91da425aaeccf617878b4594f76ce847b3b4e1c5303cea9db0da0cd85f488a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_91da425aaeccf617878b4594f76ce847b3b4e1c5303cea9db0da0cd85f488a79->leave($__internal_91da425aaeccf617878b4594f76ce847b3b4e1c5303cea9db0da0cd85f488a79_prof);

        
        $__internal_afb9aaa08b02449dee3f82294c52b2f11b7dfd5975366f7c20ba5f7fc28c4852->leave($__internal_afb9aaa08b02449dee3f82294c52b2f11b7dfd5975366f7c20ba5f7fc28c4852_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_decd916a6350f5d88c4dcb7b34c894b12c682feef2c0fcc85aa674e8bf99be75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decd916a6350f5d88c4dcb7b34c894b12c682feef2c0fcc85aa674e8bf99be75->enter($__internal_decd916a6350f5d88c4dcb7b34c894b12c682feef2c0fcc85aa674e8bf99be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_47e8bd2398dc5e57b1f643162e59b3e22321ceafa6f4d04d7f7b0255725c63bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e8bd2398dc5e57b1f643162e59b3e22321ceafa6f4d04d7f7b0255725c63bb->enter($__internal_47e8bd2398dc5e57b1f643162e59b3e22321ceafa6f4d04d7f7b0255725c63bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_47e8bd2398dc5e57b1f643162e59b3e22321ceafa6f4d04d7f7b0255725c63bb->leave($__internal_47e8bd2398dc5e57b1f643162e59b3e22321ceafa6f4d04d7f7b0255725c63bb_prof);

        
        $__internal_decd916a6350f5d88c4dcb7b34c894b12c682feef2c0fcc85aa674e8bf99be75->leave($__internal_decd916a6350f5d88c4dcb7b34c894b12c682feef2c0fcc85aa674e8bf99be75_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e302db6c07af309359b5dbcead8e36a931549986b844cf87847cfe47aec9477f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e302db6c07af309359b5dbcead8e36a931549986b844cf87847cfe47aec9477f->enter($__internal_e302db6c07af309359b5dbcead8e36a931549986b844cf87847cfe47aec9477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c7933ad66b1ec36b14d84ded20d5ae25197b328407f38a35b7dda3a42f6631ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7933ad66b1ec36b14d84ded20d5ae25197b328407f38a35b7dda3a42f6631ea->enter($__internal_c7933ad66b1ec36b14d84ded20d5ae25197b328407f38a35b7dda3a42f6631ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c7933ad66b1ec36b14d84ded20d5ae25197b328407f38a35b7dda3a42f6631ea->leave($__internal_c7933ad66b1ec36b14d84ded20d5ae25197b328407f38a35b7dda3a42f6631ea_prof);

        
        $__internal_e302db6c07af309359b5dbcead8e36a931549986b844cf87847cfe47aec9477f->leave($__internal_e302db6c07af309359b5dbcead8e36a931549986b844cf87847cfe47aec9477f_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3e597393f41da9e8a1bb772258e9c721e86100812f703be809997fcd46ff2512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e597393f41da9e8a1bb772258e9c721e86100812f703be809997fcd46ff2512->enter($__internal_3e597393f41da9e8a1bb772258e9c721e86100812f703be809997fcd46ff2512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5055ac763dcb9b5a3c4401bb5dccb521559fcde6713c29a3a4cb166fcc5b8962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5055ac763dcb9b5a3c4401bb5dccb521559fcde6713c29a3a4cb166fcc5b8962->enter($__internal_5055ac763dcb9b5a3c4401bb5dccb521559fcde6713c29a3a4cb166fcc5b8962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_5055ac763dcb9b5a3c4401bb5dccb521559fcde6713c29a3a4cb166fcc5b8962->leave($__internal_5055ac763dcb9b5a3c4401bb5dccb521559fcde6713c29a3a4cb166fcc5b8962_prof);

        
        $__internal_3e597393f41da9e8a1bb772258e9c721e86100812f703be809997fcd46ff2512->leave($__internal_3e597393f41da9e8a1bb772258e9c721e86100812f703be809997fcd46ff2512_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_601eb74898c2ea18ebc1f0edbff799c546adead7837a3491083d7c99d5851409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601eb74898c2ea18ebc1f0edbff799c546adead7837a3491083d7c99d5851409->enter($__internal_601eb74898c2ea18ebc1f0edbff799c546adead7837a3491083d7c99d5851409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_15de4980fd6bd4bc259705f8e0106601fec2349668dda9297a6c4a50ae93ce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15de4980fd6bd4bc259705f8e0106601fec2349668dda9297a6c4a50ae93ce0f->enter($__internal_15de4980fd6bd4bc259705f8e0106601fec2349668dda9297a6c4a50ae93ce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_15de4980fd6bd4bc259705f8e0106601fec2349668dda9297a6c4a50ae93ce0f->leave($__internal_15de4980fd6bd4bc259705f8e0106601fec2349668dda9297a6c4a50ae93ce0f_prof);

        
        $__internal_601eb74898c2ea18ebc1f0edbff799c546adead7837a3491083d7c99d5851409->leave($__internal_601eb74898c2ea18ebc1f0edbff799c546adead7837a3491083d7c99d5851409_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_09d51e84a2bc44b17bffa47d7c8703e69ddb43b5e2dd9c0260484ccb0202f1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d51e84a2bc44b17bffa47d7c8703e69ddb43b5e2dd9c0260484ccb0202f1f5->enter($__internal_09d51e84a2bc44b17bffa47d7c8703e69ddb43b5e2dd9c0260484ccb0202f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ac9604cc326d730d04b1552c756960ea8a8eb288c99b8dd84ea6c8178e74e314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9604cc326d730d04b1552c756960ea8a8eb288c99b8dd84ea6c8178e74e314->enter($__internal_ac9604cc326d730d04b1552c756960ea8a8eb288c99b8dd84ea6c8178e74e314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_ac9604cc326d730d04b1552c756960ea8a8eb288c99b8dd84ea6c8178e74e314->leave($__internal_ac9604cc326d730d04b1552c756960ea8a8eb288c99b8dd84ea6c8178e74e314_prof);

        
        $__internal_09d51e84a2bc44b17bffa47d7c8703e69ddb43b5e2dd9c0260484ccb0202f1f5->leave($__internal_09d51e84a2bc44b17bffa47d7c8703e69ddb43b5e2dd9c0260484ccb0202f1f5_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_639d39039b3b7641c13f89ee9a9b359c4627688bed21ed90a43918302af87bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639d39039b3b7641c13f89ee9a9b359c4627688bed21ed90a43918302af87bb7->enter($__internal_639d39039b3b7641c13f89ee9a9b359c4627688bed21ed90a43918302af87bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9f3458b375f7018926a7303285d797d2bfd54ffc2b027df65bc7a2e96406b619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3458b375f7018926a7303285d797d2bfd54ffc2b027df65bc7a2e96406b619->enter($__internal_9f3458b375f7018926a7303285d797d2bfd54ffc2b027df65bc7a2e96406b619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9f3458b375f7018926a7303285d797d2bfd54ffc2b027df65bc7a2e96406b619->leave($__internal_9f3458b375f7018926a7303285d797d2bfd54ffc2b027df65bc7a2e96406b619_prof);

        
        $__internal_639d39039b3b7641c13f89ee9a9b359c4627688bed21ed90a43918302af87bb7->leave($__internal_639d39039b3b7641c13f89ee9a9b359c4627688bed21ed90a43918302af87bb7_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_412b5ebd23c1ef212865d7cee1e070a7171d6793e0e1969fa5748351a27e04df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412b5ebd23c1ef212865d7cee1e070a7171d6793e0e1969fa5748351a27e04df->enter($__internal_412b5ebd23c1ef212865d7cee1e070a7171d6793e0e1969fa5748351a27e04df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_1eca2015670c6191b8ba3e5af50f79b00113cf3998150139be75ee0096c77fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eca2015670c6191b8ba3e5af50f79b00113cf3998150139be75ee0096c77fe4->enter($__internal_1eca2015670c6191b8ba3e5af50f79b00113cf3998150139be75ee0096c77fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1eca2015670c6191b8ba3e5af50f79b00113cf3998150139be75ee0096c77fe4->leave($__internal_1eca2015670c6191b8ba3e5af50f79b00113cf3998150139be75ee0096c77fe4_prof);

        
        $__internal_412b5ebd23c1ef212865d7cee1e070a7171d6793e0e1969fa5748351a27e04df->leave($__internal_412b5ebd23c1ef212865d7cee1e070a7171d6793e0e1969fa5748351a27e04df_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b904fdf137ed74bf249d6186a8bc3a79d6861837bbc24278f6d6da66e831b27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b904fdf137ed74bf249d6186a8bc3a79d6861837bbc24278f6d6da66e831b27a->enter($__internal_b904fdf137ed74bf249d6186a8bc3a79d6861837bbc24278f6d6da66e831b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_af0bb1bf09d3baee7963455474cb8552fa271972f7a8f92c2d183c82bd4a958a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0bb1bf09d3baee7963455474cb8552fa271972f7a8f92c2d183c82bd4a958a->enter($__internal_af0bb1bf09d3baee7963455474cb8552fa271972f7a8f92c2d183c82bd4a958a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_af0bb1bf09d3baee7963455474cb8552fa271972f7a8f92c2d183c82bd4a958a->leave($__internal_af0bb1bf09d3baee7963455474cb8552fa271972f7a8f92c2d183c82bd4a958a_prof);

        
        $__internal_b904fdf137ed74bf249d6186a8bc3a79d6861837bbc24278f6d6da66e831b27a->leave($__internal_b904fdf137ed74bf249d6186a8bc3a79d6861837bbc24278f6d6da66e831b27a_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b5e6505ce4a22e7530909a836a520f1e77e0cf3e351c75670dd73bb2fe916308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e6505ce4a22e7530909a836a520f1e77e0cf3e351c75670dd73bb2fe916308->enter($__internal_b5e6505ce4a22e7530909a836a520f1e77e0cf3e351c75670dd73bb2fe916308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_80d654e4db354629732accfc3fe1be453f13d3867379762c0972d33f25eea427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d654e4db354629732accfc3fe1be453f13d3867379762c0972d33f25eea427->enter($__internal_80d654e4db354629732accfc3fe1be453f13d3867379762c0972d33f25eea427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_80d654e4db354629732accfc3fe1be453f13d3867379762c0972d33f25eea427->leave($__internal_80d654e4db354629732accfc3fe1be453f13d3867379762c0972d33f25eea427_prof);

        
        $__internal_b5e6505ce4a22e7530909a836a520f1e77e0cf3e351c75670dd73bb2fe916308->leave($__internal_b5e6505ce4a22e7530909a836a520f1e77e0cf3e351c75670dd73bb2fe916308_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_eb034e3f8148470c58aa11c9663652fb9c41dae027378cf8e37e8d764a5dbdd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb034e3f8148470c58aa11c9663652fb9c41dae027378cf8e37e8d764a5dbdd6->enter($__internal_eb034e3f8148470c58aa11c9663652fb9c41dae027378cf8e37e8d764a5dbdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_282337c6129cf8d355af2b53c619e3577c57093808f520790fba86fbd2b1572d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282337c6129cf8d355af2b53c619e3577c57093808f520790fba86fbd2b1572d->enter($__internal_282337c6129cf8d355af2b53c619e3577c57093808f520790fba86fbd2b1572d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_282337c6129cf8d355af2b53c619e3577c57093808f520790fba86fbd2b1572d->leave($__internal_282337c6129cf8d355af2b53c619e3577c57093808f520790fba86fbd2b1572d_prof);

        
        $__internal_eb034e3f8148470c58aa11c9663652fb9c41dae027378cf8e37e8d764a5dbdd6->leave($__internal_eb034e3f8148470c58aa11c9663652fb9c41dae027378cf8e37e8d764a5dbdd6_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_df5e5d4765953ca0026a8d6545189a67d9948414fa2ffa4f85c8a6157e3a5354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5e5d4765953ca0026a8d6545189a67d9948414fa2ffa4f85c8a6157e3a5354->enter($__internal_df5e5d4765953ca0026a8d6545189a67d9948414fa2ffa4f85c8a6157e3a5354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_725ad3b9e02dab7433676b3eeaf92d7f7a5b598146b6b26476c596e1a70dc37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725ad3b9e02dab7433676b3eeaf92d7f7a5b598146b6b26476c596e1a70dc37c->enter($__internal_725ad3b9e02dab7433676b3eeaf92d7f7a5b598146b6b26476c596e1a70dc37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_725ad3b9e02dab7433676b3eeaf92d7f7a5b598146b6b26476c596e1a70dc37c->leave($__internal_725ad3b9e02dab7433676b3eeaf92d7f7a5b598146b6b26476c596e1a70dc37c_prof);

        
        $__internal_df5e5d4765953ca0026a8d6545189a67d9948414fa2ffa4f85c8a6157e3a5354->leave($__internal_df5e5d4765953ca0026a8d6545189a67d9948414fa2ffa4f85c8a6157e3a5354_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9e5cc00b227bda9bef0b3bd5370cfe358cfb15936091347d64603e2af1688c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5cc00b227bda9bef0b3bd5370cfe358cfb15936091347d64603e2af1688c24->enter($__internal_9e5cc00b227bda9bef0b3bd5370cfe358cfb15936091347d64603e2af1688c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bf32ed1f5765ed4a59a8f34a817f42f24bc9fbc4f6ba1f79a639c89ec28453fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf32ed1f5765ed4a59a8f34a817f42f24bc9fbc4f6ba1f79a639c89ec28453fd->enter($__internal_bf32ed1f5765ed4a59a8f34a817f42f24bc9fbc4f6ba1f79a639c89ec28453fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_bf32ed1f5765ed4a59a8f34a817f42f24bc9fbc4f6ba1f79a639c89ec28453fd->leave($__internal_bf32ed1f5765ed4a59a8f34a817f42f24bc9fbc4f6ba1f79a639c89ec28453fd_prof);

        
        $__internal_9e5cc00b227bda9bef0b3bd5370cfe358cfb15936091347d64603e2af1688c24->leave($__internal_9e5cc00b227bda9bef0b3bd5370cfe358cfb15936091347d64603e2af1688c24_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/alexandre/Google Drive/Pro/Github/Projet4/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
