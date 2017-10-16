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
        $__internal_3ba44a3a95dd46fc85a77eb7284639539dd56963448b4ad4d4651c9a921e36f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba44a3a95dd46fc85a77eb7284639539dd56963448b4ad4d4651c9a921e36f9->enter($__internal_3ba44a3a95dd46fc85a77eb7284639539dd56963448b4ad4d4651c9a921e36f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f000e5838732c68b2966cb2123cc272b678532918a624d5d083358ec4d4d2f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f000e5838732c68b2966cb2123cc272b678532918a624d5d083358ec4d4d2f0b->enter($__internal_f000e5838732c68b2966cb2123cc272b678532918a624d5d083358ec4d4d2f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_3ba44a3a95dd46fc85a77eb7284639539dd56963448b4ad4d4651c9a921e36f9->leave($__internal_3ba44a3a95dd46fc85a77eb7284639539dd56963448b4ad4d4651c9a921e36f9_prof);

        
        $__internal_f000e5838732c68b2966cb2123cc272b678532918a624d5d083358ec4d4d2f0b->leave($__internal_f000e5838732c68b2966cb2123cc272b678532918a624d5d083358ec4d4d2f0b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d9b226debd35c872c3fef904ab9468a28bb7842e73057bd2a84b0e02d19d7fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b226debd35c872c3fef904ab9468a28bb7842e73057bd2a84b0e02d19d7fde->enter($__internal_d9b226debd35c872c3fef904ab9468a28bb7842e73057bd2a84b0e02d19d7fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_07ec4c8b806287f06bb50efd6d155de2ecfd3c3848ed74820dbaa45fda8c4f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ec4c8b806287f06bb50efd6d155de2ecfd3c3848ed74820dbaa45fda8c4f1b->enter($__internal_07ec4c8b806287f06bb50efd6d155de2ecfd3c3848ed74820dbaa45fda8c4f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_07ec4c8b806287f06bb50efd6d155de2ecfd3c3848ed74820dbaa45fda8c4f1b->leave($__internal_07ec4c8b806287f06bb50efd6d155de2ecfd3c3848ed74820dbaa45fda8c4f1b_prof);

        
        $__internal_d9b226debd35c872c3fef904ab9468a28bb7842e73057bd2a84b0e02d19d7fde->leave($__internal_d9b226debd35c872c3fef904ab9468a28bb7842e73057bd2a84b0e02d19d7fde_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9c6e5d4cb4581cd8d5550e6c338a151743b89cbe6499f28822230c20cad53bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6e5d4cb4581cd8d5550e6c338a151743b89cbe6499f28822230c20cad53bc7->enter($__internal_9c6e5d4cb4581cd8d5550e6c338a151743b89cbe6499f28822230c20cad53bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_706926cc9f1b3e01ae180fe9a3fdf7871e14825bc717b3fdd22ce8cb536d812b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706926cc9f1b3e01ae180fe9a3fdf7871e14825bc717b3fdd22ce8cb536d812b->enter($__internal_706926cc9f1b3e01ae180fe9a3fdf7871e14825bc717b3fdd22ce8cb536d812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_706926cc9f1b3e01ae180fe9a3fdf7871e14825bc717b3fdd22ce8cb536d812b->leave($__internal_706926cc9f1b3e01ae180fe9a3fdf7871e14825bc717b3fdd22ce8cb536d812b_prof);

        
        $__internal_9c6e5d4cb4581cd8d5550e6c338a151743b89cbe6499f28822230c20cad53bc7->leave($__internal_9c6e5d4cb4581cd8d5550e6c338a151743b89cbe6499f28822230c20cad53bc7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9b929c20abce919e3293e98386b044492a82890b7aec10e6f760a55e93d026df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b929c20abce919e3293e98386b044492a82890b7aec10e6f760a55e93d026df->enter($__internal_9b929c20abce919e3293e98386b044492a82890b7aec10e6f760a55e93d026df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_54d3e9ec0ec763cf368dd4436df56a7a87e1e4d389e74d5559d84cd4c481d511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d3e9ec0ec763cf368dd4436df56a7a87e1e4d389e74d5559d84cd4c481d511->enter($__internal_54d3e9ec0ec763cf368dd4436df56a7a87e1e4d389e74d5559d84cd4c481d511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_54d3e9ec0ec763cf368dd4436df56a7a87e1e4d389e74d5559d84cd4c481d511->leave($__internal_54d3e9ec0ec763cf368dd4436df56a7a87e1e4d389e74d5559d84cd4c481d511_prof);

        
        $__internal_9b929c20abce919e3293e98386b044492a82890b7aec10e6f760a55e93d026df->leave($__internal_9b929c20abce919e3293e98386b044492a82890b7aec10e6f760a55e93d026df_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e913f6919ba1d467a1276769974bac06179476f2fa439f20a5de97bc7acee872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e913f6919ba1d467a1276769974bac06179476f2fa439f20a5de97bc7acee872->enter($__internal_e913f6919ba1d467a1276769974bac06179476f2fa439f20a5de97bc7acee872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9259ec4af3a9f7158689326ecee1b490ba0952ef0f9db2e9876b5a3689b61dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9259ec4af3a9f7158689326ecee1b490ba0952ef0f9db2e9876b5a3689b61dec->enter($__internal_9259ec4af3a9f7158689326ecee1b490ba0952ef0f9db2e9876b5a3689b61dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e3f63cf028a1126db749843aaf0bbb810695ca3adef060bb0883a1a668f5366e = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1d6ac24c871be940205267fe6085d9fab78f898633c300b21d7dc5d719eeed75 = "{{") && ('' === $__internal_1d6ac24c871be940205267fe6085d9fab78f898633c300b21d7dc5d719eeed75 || 0 === strpos($__internal_e3f63cf028a1126db749843aaf0bbb810695ca3adef060bb0883a1a668f5366e, $__internal_1d6ac24c871be940205267fe6085d9fab78f898633c300b21d7dc5d719eeed75)));
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
        
        $__internal_9259ec4af3a9f7158689326ecee1b490ba0952ef0f9db2e9876b5a3689b61dec->leave($__internal_9259ec4af3a9f7158689326ecee1b490ba0952ef0f9db2e9876b5a3689b61dec_prof);

        
        $__internal_e913f6919ba1d467a1276769974bac06179476f2fa439f20a5de97bc7acee872->leave($__internal_e913f6919ba1d467a1276769974bac06179476f2fa439f20a5de97bc7acee872_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4d87b2230caaa822d79dc55de6bf82f39e4f736bb4e7fff52ec47cd77044cc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d87b2230caaa822d79dc55de6bf82f39e4f736bb4e7fff52ec47cd77044cc19->enter($__internal_4d87b2230caaa822d79dc55de6bf82f39e4f736bb4e7fff52ec47cd77044cc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8950f156e2e1eb1a7ae71f4168a240b3425ea53bf6cadcf9fd23ef5469168581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8950f156e2e1eb1a7ae71f4168a240b3425ea53bf6cadcf9fd23ef5469168581->enter($__internal_8950f156e2e1eb1a7ae71f4168a240b3425ea53bf6cadcf9fd23ef5469168581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8950f156e2e1eb1a7ae71f4168a240b3425ea53bf6cadcf9fd23ef5469168581->leave($__internal_8950f156e2e1eb1a7ae71f4168a240b3425ea53bf6cadcf9fd23ef5469168581_prof);

        
        $__internal_4d87b2230caaa822d79dc55de6bf82f39e4f736bb4e7fff52ec47cd77044cc19->leave($__internal_4d87b2230caaa822d79dc55de6bf82f39e4f736bb4e7fff52ec47cd77044cc19_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_78829bf85219ad8a91e8dbeffa725b3cfdfbecc19ff91824f125b3839aa1b98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78829bf85219ad8a91e8dbeffa725b3cfdfbecc19ff91824f125b3839aa1b98f->enter($__internal_78829bf85219ad8a91e8dbeffa725b3cfdfbecc19ff91824f125b3839aa1b98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6c468f07d32b063d99ca9e7fade8d5448ee7180414d6307a498f2d36c8f6167e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c468f07d32b063d99ca9e7fade8d5448ee7180414d6307a498f2d36c8f6167e->enter($__internal_6c468f07d32b063d99ca9e7fade8d5448ee7180414d6307a498f2d36c8f6167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_6c468f07d32b063d99ca9e7fade8d5448ee7180414d6307a498f2d36c8f6167e->leave($__internal_6c468f07d32b063d99ca9e7fade8d5448ee7180414d6307a498f2d36c8f6167e_prof);

        
        $__internal_78829bf85219ad8a91e8dbeffa725b3cfdfbecc19ff91824f125b3839aa1b98f->leave($__internal_78829bf85219ad8a91e8dbeffa725b3cfdfbecc19ff91824f125b3839aa1b98f_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_282d9faafdd6642b1b62f8c1eaba35bc57810731bf7abd997c2a855c8b3263dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282d9faafdd6642b1b62f8c1eaba35bc57810731bf7abd997c2a855c8b3263dd->enter($__internal_282d9faafdd6642b1b62f8c1eaba35bc57810731bf7abd997c2a855c8b3263dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_1700d30969e15ea0b9dd77ac21fac46cfc0e751b9649bdd8cbb2873d145d1dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1700d30969e15ea0b9dd77ac21fac46cfc0e751b9649bdd8cbb2873d145d1dd7->enter($__internal_1700d30969e15ea0b9dd77ac21fac46cfc0e751b9649bdd8cbb2873d145d1dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_1700d30969e15ea0b9dd77ac21fac46cfc0e751b9649bdd8cbb2873d145d1dd7->leave($__internal_1700d30969e15ea0b9dd77ac21fac46cfc0e751b9649bdd8cbb2873d145d1dd7_prof);

        
        $__internal_282d9faafdd6642b1b62f8c1eaba35bc57810731bf7abd997c2a855c8b3263dd->leave($__internal_282d9faafdd6642b1b62f8c1eaba35bc57810731bf7abd997c2a855c8b3263dd_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2d654b331facfdbcfc42427b10b892ff5acee8aeea1cd8a6f85072bfd48e9756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d654b331facfdbcfc42427b10b892ff5acee8aeea1cd8a6f85072bfd48e9756->enter($__internal_2d654b331facfdbcfc42427b10b892ff5acee8aeea1cd8a6f85072bfd48e9756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a62515cdaab1e601b9b1020cad915bbe0cbd0a3e52da1791afec3f630352b5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62515cdaab1e601b9b1020cad915bbe0cbd0a3e52da1791afec3f630352b5b1->enter($__internal_a62515cdaab1e601b9b1020cad915bbe0cbd0a3e52da1791afec3f630352b5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_a62515cdaab1e601b9b1020cad915bbe0cbd0a3e52da1791afec3f630352b5b1->leave($__internal_a62515cdaab1e601b9b1020cad915bbe0cbd0a3e52da1791afec3f630352b5b1_prof);

        
        $__internal_2d654b331facfdbcfc42427b10b892ff5acee8aeea1cd8a6f85072bfd48e9756->leave($__internal_2d654b331facfdbcfc42427b10b892ff5acee8aeea1cd8a6f85072bfd48e9756_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c689d5ebbc140c947cfba8d247d8b2776290cb13854274b0cbb3e066d849396a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c689d5ebbc140c947cfba8d247d8b2776290cb13854274b0cbb3e066d849396a->enter($__internal_c689d5ebbc140c947cfba8d247d8b2776290cb13854274b0cbb3e066d849396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f812ce724c5d824f596a0107bba1ed52bc35176fabb31829a3fbfa23164d66bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f812ce724c5d824f596a0107bba1ed52bc35176fabb31829a3fbfa23164d66bc->enter($__internal_f812ce724c5d824f596a0107bba1ed52bc35176fabb31829a3fbfa23164d66bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_f812ce724c5d824f596a0107bba1ed52bc35176fabb31829a3fbfa23164d66bc->leave($__internal_f812ce724c5d824f596a0107bba1ed52bc35176fabb31829a3fbfa23164d66bc_prof);

        
        $__internal_c689d5ebbc140c947cfba8d247d8b2776290cb13854274b0cbb3e066d849396a->leave($__internal_c689d5ebbc140c947cfba8d247d8b2776290cb13854274b0cbb3e066d849396a_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9fd66fb92ccf6f0bb7913f52af709cfa98f46bf158e87c19f4f78e784eb6358d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd66fb92ccf6f0bb7913f52af709cfa98f46bf158e87c19f4f78e784eb6358d->enter($__internal_9fd66fb92ccf6f0bb7913f52af709cfa98f46bf158e87c19f4f78e784eb6358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9c8a4bf9494bfc5aaf69b5d8b780535da61f06ea8c7054813ca619a9480dfda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8a4bf9494bfc5aaf69b5d8b780535da61f06ea8c7054813ca619a9480dfda9->enter($__internal_9c8a4bf9494bfc5aaf69b5d8b780535da61f06ea8c7054813ca619a9480dfda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9c8a4bf9494bfc5aaf69b5d8b780535da61f06ea8c7054813ca619a9480dfda9->leave($__internal_9c8a4bf9494bfc5aaf69b5d8b780535da61f06ea8c7054813ca619a9480dfda9_prof);

        
        $__internal_9fd66fb92ccf6f0bb7913f52af709cfa98f46bf158e87c19f4f78e784eb6358d->leave($__internal_9fd66fb92ccf6f0bb7913f52af709cfa98f46bf158e87c19f4f78e784eb6358d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f84ba4746228385f128ff54ffc6d278429bfe45cc7ce4d248aa453dd1307f2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84ba4746228385f128ff54ffc6d278429bfe45cc7ce4d248aa453dd1307f2a4->enter($__internal_f84ba4746228385f128ff54ffc6d278429bfe45cc7ce4d248aa453dd1307f2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_332057e4ae32384325bfd58041928b054ae4b6eafd50fc92205c955cfb54d40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332057e4ae32384325bfd58041928b054ae4b6eafd50fc92205c955cfb54d40c->enter($__internal_332057e4ae32384325bfd58041928b054ae4b6eafd50fc92205c955cfb54d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_332057e4ae32384325bfd58041928b054ae4b6eafd50fc92205c955cfb54d40c->leave($__internal_332057e4ae32384325bfd58041928b054ae4b6eafd50fc92205c955cfb54d40c_prof);

        
        $__internal_f84ba4746228385f128ff54ffc6d278429bfe45cc7ce4d248aa453dd1307f2a4->leave($__internal_f84ba4746228385f128ff54ffc6d278429bfe45cc7ce4d248aa453dd1307f2a4_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5ce8d5bfffe63849514b3a66bebc1cf4f6268ea5b4cae3694a19eeec2a2edc5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce8d5bfffe63849514b3a66bebc1cf4f6268ea5b4cae3694a19eeec2a2edc5e->enter($__internal_5ce8d5bfffe63849514b3a66bebc1cf4f6268ea5b4cae3694a19eeec2a2edc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d697b7544e8029e991499a398c259058d06a9feaf503a797c70d3cc06b89e0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d697b7544e8029e991499a398c259058d06a9feaf503a797c70d3cc06b89e0d6->enter($__internal_d697b7544e8029e991499a398c259058d06a9feaf503a797c70d3cc06b89e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_d697b7544e8029e991499a398c259058d06a9feaf503a797c70d3cc06b89e0d6->leave($__internal_d697b7544e8029e991499a398c259058d06a9feaf503a797c70d3cc06b89e0d6_prof);

        
        $__internal_5ce8d5bfffe63849514b3a66bebc1cf4f6268ea5b4cae3694a19eeec2a2edc5e->leave($__internal_5ce8d5bfffe63849514b3a66bebc1cf4f6268ea5b4cae3694a19eeec2a2edc5e_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_885721adf215dfd07d0ad9f17068d68168755c481cb70d93745977c729312a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885721adf215dfd07d0ad9f17068d68168755c481cb70d93745977c729312a39->enter($__internal_885721adf215dfd07d0ad9f17068d68168755c481cb70d93745977c729312a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0641f5424b0ccdba5164beb72b82bc5ff54ec4d455154eb0916c0afe14e6fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0641f5424b0ccdba5164beb72b82bc5ff54ec4d455154eb0916c0afe14e6fa41->enter($__internal_0641f5424b0ccdba5164beb72b82bc5ff54ec4d455154eb0916c0afe14e6fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0641f5424b0ccdba5164beb72b82bc5ff54ec4d455154eb0916c0afe14e6fa41->leave($__internal_0641f5424b0ccdba5164beb72b82bc5ff54ec4d455154eb0916c0afe14e6fa41_prof);

        
        $__internal_885721adf215dfd07d0ad9f17068d68168755c481cb70d93745977c729312a39->leave($__internal_885721adf215dfd07d0ad9f17068d68168755c481cb70d93745977c729312a39_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2143bd61aac3f4fb834d0e086d0bbb9e12bfcc4c05dda2a500390ad8414c06e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2143bd61aac3f4fb834d0e086d0bbb9e12bfcc4c05dda2a500390ad8414c06e8->enter($__internal_2143bd61aac3f4fb834d0e086d0bbb9e12bfcc4c05dda2a500390ad8414c06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7e034a4a7e8953ce39d106cf9b5cc040b9a0cb607f16ce5d35f68183e298ec8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e034a4a7e8953ce39d106cf9b5cc040b9a0cb607f16ce5d35f68183e298ec8f->enter($__internal_7e034a4a7e8953ce39d106cf9b5cc040b9a0cb607f16ce5d35f68183e298ec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7e034a4a7e8953ce39d106cf9b5cc040b9a0cb607f16ce5d35f68183e298ec8f->leave($__internal_7e034a4a7e8953ce39d106cf9b5cc040b9a0cb607f16ce5d35f68183e298ec8f_prof);

        
        $__internal_2143bd61aac3f4fb834d0e086d0bbb9e12bfcc4c05dda2a500390ad8414c06e8->leave($__internal_2143bd61aac3f4fb834d0e086d0bbb9e12bfcc4c05dda2a500390ad8414c06e8_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_37d65372ccf457e21b82f1923ce094cc50aa07287bc8005e08546d156964f3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d65372ccf457e21b82f1923ce094cc50aa07287bc8005e08546d156964f3e1->enter($__internal_37d65372ccf457e21b82f1923ce094cc50aa07287bc8005e08546d156964f3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_81e00393b08c3235e5c13577a026369789ceabef1274dc31e7ad1c9a889fb618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e00393b08c3235e5c13577a026369789ceabef1274dc31e7ad1c9a889fb618->enter($__internal_81e00393b08c3235e5c13577a026369789ceabef1274dc31e7ad1c9a889fb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_81e00393b08c3235e5c13577a026369789ceabef1274dc31e7ad1c9a889fb618->leave($__internal_81e00393b08c3235e5c13577a026369789ceabef1274dc31e7ad1c9a889fb618_prof);

        
        $__internal_37d65372ccf457e21b82f1923ce094cc50aa07287bc8005e08546d156964f3e1->leave($__internal_37d65372ccf457e21b82f1923ce094cc50aa07287bc8005e08546d156964f3e1_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_309120dd8e175be996265202153ee2f85a40c978db31068a9cfbdcc1913fa86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309120dd8e175be996265202153ee2f85a40c978db31068a9cfbdcc1913fa86f->enter($__internal_309120dd8e175be996265202153ee2f85a40c978db31068a9cfbdcc1913fa86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3b69b572103fac1ca30897e4566930e91c5c954795bcdc60fb65c61514585ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b69b572103fac1ca30897e4566930e91c5c954795bcdc60fb65c61514585ac3->enter($__internal_3b69b572103fac1ca30897e4566930e91c5c954795bcdc60fb65c61514585ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3b69b572103fac1ca30897e4566930e91c5c954795bcdc60fb65c61514585ac3->leave($__internal_3b69b572103fac1ca30897e4566930e91c5c954795bcdc60fb65c61514585ac3_prof);

        
        $__internal_309120dd8e175be996265202153ee2f85a40c978db31068a9cfbdcc1913fa86f->leave($__internal_309120dd8e175be996265202153ee2f85a40c978db31068a9cfbdcc1913fa86f_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d69d718ceb4da31fafd62a64863926107b6d621a5d0d70de73f8078d07d60a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69d718ceb4da31fafd62a64863926107b6d621a5d0d70de73f8078d07d60a42->enter($__internal_d69d718ceb4da31fafd62a64863926107b6d621a5d0d70de73f8078d07d60a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3975c68f59930848fa1ba7d0ff6de34dab72e9701c9fa00c91d68d4ee56f6aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3975c68f59930848fa1ba7d0ff6de34dab72e9701c9fa00c91d68d4ee56f6aec->enter($__internal_3975c68f59930848fa1ba7d0ff6de34dab72e9701c9fa00c91d68d4ee56f6aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3975c68f59930848fa1ba7d0ff6de34dab72e9701c9fa00c91d68d4ee56f6aec->leave($__internal_3975c68f59930848fa1ba7d0ff6de34dab72e9701c9fa00c91d68d4ee56f6aec_prof);

        
        $__internal_d69d718ceb4da31fafd62a64863926107b6d621a5d0d70de73f8078d07d60a42->leave($__internal_d69d718ceb4da31fafd62a64863926107b6d621a5d0d70de73f8078d07d60a42_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bda0e9ba41f47fb051d2a7b5420c890b701fce4730571aff782840ba23dc49e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda0e9ba41f47fb051d2a7b5420c890b701fce4730571aff782840ba23dc49e6->enter($__internal_bda0e9ba41f47fb051d2a7b5420c890b701fce4730571aff782840ba23dc49e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_04e477fe240bbd340c34730a1149cc90dd5991f2cd4ec6fdc2bb46ddbc49847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e477fe240bbd340c34730a1149cc90dd5991f2cd4ec6fdc2bb46ddbc49847f->enter($__internal_04e477fe240bbd340c34730a1149cc90dd5991f2cd4ec6fdc2bb46ddbc49847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_04e477fe240bbd340c34730a1149cc90dd5991f2cd4ec6fdc2bb46ddbc49847f->leave($__internal_04e477fe240bbd340c34730a1149cc90dd5991f2cd4ec6fdc2bb46ddbc49847f_prof);

        
        $__internal_bda0e9ba41f47fb051d2a7b5420c890b701fce4730571aff782840ba23dc49e6->leave($__internal_bda0e9ba41f47fb051d2a7b5420c890b701fce4730571aff782840ba23dc49e6_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_04d76e8fca6feab4aedcf67ee1e47018bb8e7b9197bbfb7fdb8d85ee6be95ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d76e8fca6feab4aedcf67ee1e47018bb8e7b9197bbfb7fdb8d85ee6be95ac1->enter($__internal_04d76e8fca6feab4aedcf67ee1e47018bb8e7b9197bbfb7fdb8d85ee6be95ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d2719cf5a869ce9170e809ad781a0b967c9c816cac5fe1a485e4879ecf09f3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2719cf5a869ce9170e809ad781a0b967c9c816cac5fe1a485e4879ecf09f3d4->enter($__internal_d2719cf5a869ce9170e809ad781a0b967c9c816cac5fe1a485e4879ecf09f3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d2719cf5a869ce9170e809ad781a0b967c9c816cac5fe1a485e4879ecf09f3d4->leave($__internal_d2719cf5a869ce9170e809ad781a0b967c9c816cac5fe1a485e4879ecf09f3d4_prof);

        
        $__internal_04d76e8fca6feab4aedcf67ee1e47018bb8e7b9197bbfb7fdb8d85ee6be95ac1->leave($__internal_04d76e8fca6feab4aedcf67ee1e47018bb8e7b9197bbfb7fdb8d85ee6be95ac1_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9023c2f8b6a7846e65262663f8f355f80b6440eae4fcaa02f041e9c2466cf23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9023c2f8b6a7846e65262663f8f355f80b6440eae4fcaa02f041e9c2466cf23a->enter($__internal_9023c2f8b6a7846e65262663f8f355f80b6440eae4fcaa02f041e9c2466cf23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_68e462918db268533fb1cbdbf3db9856b2ca261f75f12eaf4b400bc8786c6c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e462918db268533fb1cbdbf3db9856b2ca261f75f12eaf4b400bc8786c6c3c->enter($__internal_68e462918db268533fb1cbdbf3db9856b2ca261f75f12eaf4b400bc8786c6c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_68e462918db268533fb1cbdbf3db9856b2ca261f75f12eaf4b400bc8786c6c3c->leave($__internal_68e462918db268533fb1cbdbf3db9856b2ca261f75f12eaf4b400bc8786c6c3c_prof);

        
        $__internal_9023c2f8b6a7846e65262663f8f355f80b6440eae4fcaa02f041e9c2466cf23a->leave($__internal_9023c2f8b6a7846e65262663f8f355f80b6440eae4fcaa02f041e9c2466cf23a_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7bc3ee65907739bfb8c841e3e66806cbec2f040a58163cd412fbb619d1c7f12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc3ee65907739bfb8c841e3e66806cbec2f040a58163cd412fbb619d1c7f12b->enter($__internal_7bc3ee65907739bfb8c841e3e66806cbec2f040a58163cd412fbb619d1c7f12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_779ccfca44f27d3c616134251f5e3a5ce082ba78d9ba3f670047d633a4c30305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779ccfca44f27d3c616134251f5e3a5ce082ba78d9ba3f670047d633a4c30305->enter($__internal_779ccfca44f27d3c616134251f5e3a5ce082ba78d9ba3f670047d633a4c30305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_779ccfca44f27d3c616134251f5e3a5ce082ba78d9ba3f670047d633a4c30305->leave($__internal_779ccfca44f27d3c616134251f5e3a5ce082ba78d9ba3f670047d633a4c30305_prof);

        
        $__internal_7bc3ee65907739bfb8c841e3e66806cbec2f040a58163cd412fbb619d1c7f12b->leave($__internal_7bc3ee65907739bfb8c841e3e66806cbec2f040a58163cd412fbb619d1c7f12b_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e99e97a9cb4944d7ea5128a216d50c7eba88c3a7a73b4dc6792124ad66e275eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99e97a9cb4944d7ea5128a216d50c7eba88c3a7a73b4dc6792124ad66e275eb->enter($__internal_e99e97a9cb4944d7ea5128a216d50c7eba88c3a7a73b4dc6792124ad66e275eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_64f88dbee002f2f92d14da3836b44b4a1c4debb1605e59aee4371adfd3f228bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f88dbee002f2f92d14da3836b44b4a1c4debb1605e59aee4371adfd3f228bc->enter($__internal_64f88dbee002f2f92d14da3836b44b4a1c4debb1605e59aee4371adfd3f228bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_64f88dbee002f2f92d14da3836b44b4a1c4debb1605e59aee4371adfd3f228bc->leave($__internal_64f88dbee002f2f92d14da3836b44b4a1c4debb1605e59aee4371adfd3f228bc_prof);

        
        $__internal_e99e97a9cb4944d7ea5128a216d50c7eba88c3a7a73b4dc6792124ad66e275eb->leave($__internal_e99e97a9cb4944d7ea5128a216d50c7eba88c3a7a73b4dc6792124ad66e275eb_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_12bcc0ebd74a1edaacbe93694d7af3e748e359c48165dbc6c4589c36c9ddcf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bcc0ebd74a1edaacbe93694d7af3e748e359c48165dbc6c4589c36c9ddcf75->enter($__internal_12bcc0ebd74a1edaacbe93694d7af3e748e359c48165dbc6c4589c36c9ddcf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_28ed37d7c9fb77aead7098c6ef5290b1a0c3b32c0cc16505b629de7e01c3cace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ed37d7c9fb77aead7098c6ef5290b1a0c3b32c0cc16505b629de7e01c3cace->enter($__internal_28ed37d7c9fb77aead7098c6ef5290b1a0c3b32c0cc16505b629de7e01c3cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_28ed37d7c9fb77aead7098c6ef5290b1a0c3b32c0cc16505b629de7e01c3cace->leave($__internal_28ed37d7c9fb77aead7098c6ef5290b1a0c3b32c0cc16505b629de7e01c3cace_prof);

        
        $__internal_12bcc0ebd74a1edaacbe93694d7af3e748e359c48165dbc6c4589c36c9ddcf75->leave($__internal_12bcc0ebd74a1edaacbe93694d7af3e748e359c48165dbc6c4589c36c9ddcf75_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_af0de96a2d8d7d6d74650cbb0f4aca44ab865323090d82aeac3d55614f9089b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0de96a2d8d7d6d74650cbb0f4aca44ab865323090d82aeac3d55614f9089b7->enter($__internal_af0de96a2d8d7d6d74650cbb0f4aca44ab865323090d82aeac3d55614f9089b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4c2acbc9f641b74a4ae4ca6a984c2ffe84cdbf98b0aa1ec0ceb43fe737708a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2acbc9f641b74a4ae4ca6a984c2ffe84cdbf98b0aa1ec0ceb43fe737708a7f->enter($__internal_4c2acbc9f641b74a4ae4ca6a984c2ffe84cdbf98b0aa1ec0ceb43fe737708a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4c2acbc9f641b74a4ae4ca6a984c2ffe84cdbf98b0aa1ec0ceb43fe737708a7f->leave($__internal_4c2acbc9f641b74a4ae4ca6a984c2ffe84cdbf98b0aa1ec0ceb43fe737708a7f_prof);

        
        $__internal_af0de96a2d8d7d6d74650cbb0f4aca44ab865323090d82aeac3d55614f9089b7->leave($__internal_af0de96a2d8d7d6d74650cbb0f4aca44ab865323090d82aeac3d55614f9089b7_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7636236f79ea48b4e42c6873b314a24b2c148dcfdcc513b09309c4b9b2000efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7636236f79ea48b4e42c6873b314a24b2c148dcfdcc513b09309c4b9b2000efe->enter($__internal_7636236f79ea48b4e42c6873b314a24b2c148dcfdcc513b09309c4b9b2000efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2474436dd573fe2a9698cd4eda9a8b57388a5f86222f97db82efbc63e8402d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2474436dd573fe2a9698cd4eda9a8b57388a5f86222f97db82efbc63e8402d36->enter($__internal_2474436dd573fe2a9698cd4eda9a8b57388a5f86222f97db82efbc63e8402d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_2474436dd573fe2a9698cd4eda9a8b57388a5f86222f97db82efbc63e8402d36->leave($__internal_2474436dd573fe2a9698cd4eda9a8b57388a5f86222f97db82efbc63e8402d36_prof);

        
        $__internal_7636236f79ea48b4e42c6873b314a24b2c148dcfdcc513b09309c4b9b2000efe->leave($__internal_7636236f79ea48b4e42c6873b314a24b2c148dcfdcc513b09309c4b9b2000efe_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_81cdd5986b76f3a957d7c305f0e2d66e7a1fccc9f111b2af882866f40bfb9d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cdd5986b76f3a957d7c305f0e2d66e7a1fccc9f111b2af882866f40bfb9d11->enter($__internal_81cdd5986b76f3a957d7c305f0e2d66e7a1fccc9f111b2af882866f40bfb9d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_560733ef6e7138d4e0eb3b226debd92f50920cbb54d24350aa6fcfa9944037cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560733ef6e7138d4e0eb3b226debd92f50920cbb54d24350aa6fcfa9944037cd->enter($__internal_560733ef6e7138d4e0eb3b226debd92f50920cbb54d24350aa6fcfa9944037cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_560733ef6e7138d4e0eb3b226debd92f50920cbb54d24350aa6fcfa9944037cd->leave($__internal_560733ef6e7138d4e0eb3b226debd92f50920cbb54d24350aa6fcfa9944037cd_prof);

        
        $__internal_81cdd5986b76f3a957d7c305f0e2d66e7a1fccc9f111b2af882866f40bfb9d11->leave($__internal_81cdd5986b76f3a957d7c305f0e2d66e7a1fccc9f111b2af882866f40bfb9d11_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_67e427d6949c0df6bddebdfba98b3dff817a23b0721c5d644d4277554475a101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e427d6949c0df6bddebdfba98b3dff817a23b0721c5d644d4277554475a101->enter($__internal_67e427d6949c0df6bddebdfba98b3dff817a23b0721c5d644d4277554475a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_82984b504f3194a62f7866890d16d9f4082dab204a4755c8e3af5edf36fbd20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82984b504f3194a62f7866890d16d9f4082dab204a4755c8e3af5edf36fbd20b->enter($__internal_82984b504f3194a62f7866890d16d9f4082dab204a4755c8e3af5edf36fbd20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_82984b504f3194a62f7866890d16d9f4082dab204a4755c8e3af5edf36fbd20b->leave($__internal_82984b504f3194a62f7866890d16d9f4082dab204a4755c8e3af5edf36fbd20b_prof);

        
        $__internal_67e427d6949c0df6bddebdfba98b3dff817a23b0721c5d644d4277554475a101->leave($__internal_67e427d6949c0df6bddebdfba98b3dff817a23b0721c5d644d4277554475a101_prof);

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
