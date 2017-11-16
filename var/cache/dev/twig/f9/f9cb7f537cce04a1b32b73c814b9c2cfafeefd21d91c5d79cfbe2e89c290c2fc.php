<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
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
        $__internal_e9493dda63117f4d8391325e6a893fadd586590485a3770a8e7b98ee0f591374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9493dda63117f4d8391325e6a893fadd586590485a3770a8e7b98ee0f591374->enter($__internal_e9493dda63117f4d8391325e6a893fadd586590485a3770a8e7b98ee0f591374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_60773e31a37997577d951e4aa117d0fe0656b71e334eaa13ad6e9dc8ee285324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60773e31a37997577d951e4aa117d0fe0656b71e334eaa13ad6e9dc8ee285324->enter($__internal_60773e31a37997577d951e4aa117d0fe0656b71e334eaa13ad6e9dc8ee285324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_e9493dda63117f4d8391325e6a893fadd586590485a3770a8e7b98ee0f591374->leave($__internal_e9493dda63117f4d8391325e6a893fadd586590485a3770a8e7b98ee0f591374_prof);

        
        $__internal_60773e31a37997577d951e4aa117d0fe0656b71e334eaa13ad6e9dc8ee285324->leave($__internal_60773e31a37997577d951e4aa117d0fe0656b71e334eaa13ad6e9dc8ee285324_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1f6dcc6c430f67346d70f3a65a5134ca52e6c7a755f9b9a455ffc98668c64c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6dcc6c430f67346d70f3a65a5134ca52e6c7a755f9b9a455ffc98668c64c3f->enter($__internal_1f6dcc6c430f67346d70f3a65a5134ca52e6c7a755f9b9a455ffc98668c64c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9048464631f2997a30cfc9643dd033d0537a8280c1119a37cd23fc61d296a87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9048464631f2997a30cfc9643dd033d0537a8280c1119a37cd23fc61d296a87d->enter($__internal_9048464631f2997a30cfc9643dd033d0537a8280c1119a37cd23fc61d296a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9048464631f2997a30cfc9643dd033d0537a8280c1119a37cd23fc61d296a87d->leave($__internal_9048464631f2997a30cfc9643dd033d0537a8280c1119a37cd23fc61d296a87d_prof);

        
        $__internal_1f6dcc6c430f67346d70f3a65a5134ca52e6c7a755f9b9a455ffc98668c64c3f->leave($__internal_1f6dcc6c430f67346d70f3a65a5134ca52e6c7a755f9b9a455ffc98668c64c3f_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_82777203e4a82c293e7ca6f2b954456ec5903a379cac05ffd30c2cba521652f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82777203e4a82c293e7ca6f2b954456ec5903a379cac05ffd30c2cba521652f4->enter($__internal_82777203e4a82c293e7ca6f2b954456ec5903a379cac05ffd30c2cba521652f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_90b2b0c41b1efff5ec7df9019c19de93482192b3fa13dbd804adcdea14b06151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b2b0c41b1efff5ec7df9019c19de93482192b3fa13dbd804adcdea14b06151->enter($__internal_90b2b0c41b1efff5ec7df9019c19de93482192b3fa13dbd804adcdea14b06151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_90b2b0c41b1efff5ec7df9019c19de93482192b3fa13dbd804adcdea14b06151->leave($__internal_90b2b0c41b1efff5ec7df9019c19de93482192b3fa13dbd804adcdea14b06151_prof);

        
        $__internal_82777203e4a82c293e7ca6f2b954456ec5903a379cac05ffd30c2cba521652f4->leave($__internal_82777203e4a82c293e7ca6f2b954456ec5903a379cac05ffd30c2cba521652f4_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1df82ad1a18ccbcd795844547a111051f72c36854525036942e3df3da0408e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df82ad1a18ccbcd795844547a111051f72c36854525036942e3df3da0408e74->enter($__internal_1df82ad1a18ccbcd795844547a111051f72c36854525036942e3df3da0408e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_eb7e6b48e9a84c401d6fbbac13e097530ec0fc5db0fcf07ce7a39581f2e4ea70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7e6b48e9a84c401d6fbbac13e097530ec0fc5db0fcf07ce7a39581f2e4ea70->enter($__internal_eb7e6b48e9a84c401d6fbbac13e097530ec0fc5db0fcf07ce7a39581f2e4ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_eb7e6b48e9a84c401d6fbbac13e097530ec0fc5db0fcf07ce7a39581f2e4ea70->leave($__internal_eb7e6b48e9a84c401d6fbbac13e097530ec0fc5db0fcf07ce7a39581f2e4ea70_prof);

        
        $__internal_1df82ad1a18ccbcd795844547a111051f72c36854525036942e3df3da0408e74->leave($__internal_1df82ad1a18ccbcd795844547a111051f72c36854525036942e3df3da0408e74_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_df39b1db904e90a3ec75f620df40cb04452857ccfd52c3705591f4b7ff42b119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df39b1db904e90a3ec75f620df40cb04452857ccfd52c3705591f4b7ff42b119->enter($__internal_df39b1db904e90a3ec75f620df40cb04452857ccfd52c3705591f4b7ff42b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c9fdbdd9b5e43a3dffee1dc55c149bb64595d2d1b560b7919b500d0ecfa32b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fdbdd9b5e43a3dffee1dc55c149bb64595d2d1b560b7919b500d0ecfa32b07->enter($__internal_c9fdbdd9b5e43a3dffee1dc55c149bb64595d2d1b560b7919b500d0ecfa32b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_2874b293559343a811d147dd90339bce961bc10d28a90ae4ca094b9964502140 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_9256ba656dfe9b3b43a0610b7be128b998b55a9b96100387242b8eb14b7e9c0a = "{{") && ('' === $__internal_9256ba656dfe9b3b43a0610b7be128b998b55a9b96100387242b8eb14b7e9c0a || 0 === strpos($__internal_2874b293559343a811d147dd90339bce961bc10d28a90ae4ca094b9964502140, $__internal_9256ba656dfe9b3b43a0610b7be128b998b55a9b96100387242b8eb14b7e9c0a)));
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
        
        $__internal_c9fdbdd9b5e43a3dffee1dc55c149bb64595d2d1b560b7919b500d0ecfa32b07->leave($__internal_c9fdbdd9b5e43a3dffee1dc55c149bb64595d2d1b560b7919b500d0ecfa32b07_prof);

        
        $__internal_df39b1db904e90a3ec75f620df40cb04452857ccfd52c3705591f4b7ff42b119->leave($__internal_df39b1db904e90a3ec75f620df40cb04452857ccfd52c3705591f4b7ff42b119_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ddc09d1e86d18028a090614f479e0990b3534cd8fab8d243e9e4ca0b52465594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc09d1e86d18028a090614f479e0990b3534cd8fab8d243e9e4ca0b52465594->enter($__internal_ddc09d1e86d18028a090614f479e0990b3534cd8fab8d243e9e4ca0b52465594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8c4ffd213b17506fcc0f6f68c279c0fa3d1219455fab8354e5cb99c3f2f8b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4ffd213b17506fcc0f6f68c279c0fa3d1219455fab8354e5cb99c3f2f8b742->enter($__internal_8c4ffd213b17506fcc0f6f68c279c0fa3d1219455fab8354e5cb99c3f2f8b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_8c4ffd213b17506fcc0f6f68c279c0fa3d1219455fab8354e5cb99c3f2f8b742->leave($__internal_8c4ffd213b17506fcc0f6f68c279c0fa3d1219455fab8354e5cb99c3f2f8b742_prof);

        
        $__internal_ddc09d1e86d18028a090614f479e0990b3534cd8fab8d243e9e4ca0b52465594->leave($__internal_ddc09d1e86d18028a090614f479e0990b3534cd8fab8d243e9e4ca0b52465594_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7b3026c0ed0dda29b372a9c2a6b81dc589873e0aa04aa63e550d573ed969a824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3026c0ed0dda29b372a9c2a6b81dc589873e0aa04aa63e550d573ed969a824->enter($__internal_7b3026c0ed0dda29b372a9c2a6b81dc589873e0aa04aa63e550d573ed969a824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_026cd3c7724be3727b3915be5317be8df21a67abbd9a3ac7210a908fe6598cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026cd3c7724be3727b3915be5317be8df21a67abbd9a3ac7210a908fe6598cb4->enter($__internal_026cd3c7724be3727b3915be5317be8df21a67abbd9a3ac7210a908fe6598cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_026cd3c7724be3727b3915be5317be8df21a67abbd9a3ac7210a908fe6598cb4->leave($__internal_026cd3c7724be3727b3915be5317be8df21a67abbd9a3ac7210a908fe6598cb4_prof);

        
        $__internal_7b3026c0ed0dda29b372a9c2a6b81dc589873e0aa04aa63e550d573ed969a824->leave($__internal_7b3026c0ed0dda29b372a9c2a6b81dc589873e0aa04aa63e550d573ed969a824_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_152614c394881bf9a77ac18044277e81c439acd0c892c75af3068d763793dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152614c394881bf9a77ac18044277e81c439acd0c892c75af3068d763793dd5f->enter($__internal_152614c394881bf9a77ac18044277e81c439acd0c892c75af3068d763793dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_76f4eb71f0a9efe0883dbebb9f8ea79e9d63ef801bfe6393c31272d0643fb83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f4eb71f0a9efe0883dbebb9f8ea79e9d63ef801bfe6393c31272d0643fb83e->enter($__internal_76f4eb71f0a9efe0883dbebb9f8ea79e9d63ef801bfe6393c31272d0643fb83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_76f4eb71f0a9efe0883dbebb9f8ea79e9d63ef801bfe6393c31272d0643fb83e->leave($__internal_76f4eb71f0a9efe0883dbebb9f8ea79e9d63ef801bfe6393c31272d0643fb83e_prof);

        
        $__internal_152614c394881bf9a77ac18044277e81c439acd0c892c75af3068d763793dd5f->leave($__internal_152614c394881bf9a77ac18044277e81c439acd0c892c75af3068d763793dd5f_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0eb48dc7740a397066e8903b3fe0a936408dec8daf978fe0566ced4c01c7e67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb48dc7740a397066e8903b3fe0a936408dec8daf978fe0566ced4c01c7e67a->enter($__internal_0eb48dc7740a397066e8903b3fe0a936408dec8daf978fe0566ced4c01c7e67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_cb9a0ec90f977956b26f82d8a7d1ebf7f98d08af3b48cf5101fde19b03ce7bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9a0ec90f977956b26f82d8a7d1ebf7f98d08af3b48cf5101fde19b03ce7bdd->enter($__internal_cb9a0ec90f977956b26f82d8a7d1ebf7f98d08af3b48cf5101fde19b03ce7bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_cb9a0ec90f977956b26f82d8a7d1ebf7f98d08af3b48cf5101fde19b03ce7bdd->leave($__internal_cb9a0ec90f977956b26f82d8a7d1ebf7f98d08af3b48cf5101fde19b03ce7bdd_prof);

        
        $__internal_0eb48dc7740a397066e8903b3fe0a936408dec8daf978fe0566ced4c01c7e67a->leave($__internal_0eb48dc7740a397066e8903b3fe0a936408dec8daf978fe0566ced4c01c7e67a_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9ae2daf41d2d9ccd2d618acc6be1e34b156ea65137f201d70069c95cd29843fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae2daf41d2d9ccd2d618acc6be1e34b156ea65137f201d70069c95cd29843fc->enter($__internal_9ae2daf41d2d9ccd2d618acc6be1e34b156ea65137f201d70069c95cd29843fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f031c3eb1de18184c4b98a874d9ca5011eb6204cdb16c6868d14632de3ebb924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f031c3eb1de18184c4b98a874d9ca5011eb6204cdb16c6868d14632de3ebb924->enter($__internal_f031c3eb1de18184c4b98a874d9ca5011eb6204cdb16c6868d14632de3ebb924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_f031c3eb1de18184c4b98a874d9ca5011eb6204cdb16c6868d14632de3ebb924->leave($__internal_f031c3eb1de18184c4b98a874d9ca5011eb6204cdb16c6868d14632de3ebb924_prof);

        
        $__internal_9ae2daf41d2d9ccd2d618acc6be1e34b156ea65137f201d70069c95cd29843fc->leave($__internal_9ae2daf41d2d9ccd2d618acc6be1e34b156ea65137f201d70069c95cd29843fc_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f9430c9f65af782542b252dd3c140efa5f3ad09b55dd5e20854779b0b337130d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9430c9f65af782542b252dd3c140efa5f3ad09b55dd5e20854779b0b337130d->enter($__internal_f9430c9f65af782542b252dd3c140efa5f3ad09b55dd5e20854779b0b337130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0ead3cabd2614566b4f7101525786d8d0f1ce22627434b3df810c3c00656036d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ead3cabd2614566b4f7101525786d8d0f1ce22627434b3df810c3c00656036d->enter($__internal_0ead3cabd2614566b4f7101525786d8d0f1ce22627434b3df810c3c00656036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_0ead3cabd2614566b4f7101525786d8d0f1ce22627434b3df810c3c00656036d->leave($__internal_0ead3cabd2614566b4f7101525786d8d0f1ce22627434b3df810c3c00656036d_prof);

        
        $__internal_f9430c9f65af782542b252dd3c140efa5f3ad09b55dd5e20854779b0b337130d->leave($__internal_f9430c9f65af782542b252dd3c140efa5f3ad09b55dd5e20854779b0b337130d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_68c34d721a788843c6e942b0cf8509764ec33202e0b994e9dcecd32fb36bf0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c34d721a788843c6e942b0cf8509764ec33202e0b994e9dcecd32fb36bf0da->enter($__internal_68c34d721a788843c6e942b0cf8509764ec33202e0b994e9dcecd32fb36bf0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b69ea1488019d673e9527a4ca395ad2990be77feae8b8ccecc0defc793f43c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69ea1488019d673e9527a4ca395ad2990be77feae8b8ccecc0defc793f43c70->enter($__internal_b69ea1488019d673e9527a4ca395ad2990be77feae8b8ccecc0defc793f43c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_b69ea1488019d673e9527a4ca395ad2990be77feae8b8ccecc0defc793f43c70->leave($__internal_b69ea1488019d673e9527a4ca395ad2990be77feae8b8ccecc0defc793f43c70_prof);

        
        $__internal_68c34d721a788843c6e942b0cf8509764ec33202e0b994e9dcecd32fb36bf0da->leave($__internal_68c34d721a788843c6e942b0cf8509764ec33202e0b994e9dcecd32fb36bf0da_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_40c6467898f513d10e2926790afe4da94a3444425dc89b6119fc0df2808f8c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c6467898f513d10e2926790afe4da94a3444425dc89b6119fc0df2808f8c0f->enter($__internal_40c6467898f513d10e2926790afe4da94a3444425dc89b6119fc0df2808f8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_161e9d9a75d949878a7a56efe0174960935c61e7a89bc1eb4f816db6ec27180c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161e9d9a75d949878a7a56efe0174960935c61e7a89bc1eb4f816db6ec27180c->enter($__internal_161e9d9a75d949878a7a56efe0174960935c61e7a89bc1eb4f816db6ec27180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_161e9d9a75d949878a7a56efe0174960935c61e7a89bc1eb4f816db6ec27180c->leave($__internal_161e9d9a75d949878a7a56efe0174960935c61e7a89bc1eb4f816db6ec27180c_prof);

        
        $__internal_40c6467898f513d10e2926790afe4da94a3444425dc89b6119fc0df2808f8c0f->leave($__internal_40c6467898f513d10e2926790afe4da94a3444425dc89b6119fc0df2808f8c0f_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b54308648fe611d81718af431c4edca09da443a2604783a71a05a780d5a76e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54308648fe611d81718af431c4edca09da443a2604783a71a05a780d5a76e7f->enter($__internal_b54308648fe611d81718af431c4edca09da443a2604783a71a05a780d5a76e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_4b43a52875df64aecf2b43ba3d0d080aae605c9765bf0dabec8dc3f55ff86ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b43a52875df64aecf2b43ba3d0d080aae605c9765bf0dabec8dc3f55ff86ac4->enter($__internal_4b43a52875df64aecf2b43ba3d0d080aae605c9765bf0dabec8dc3f55ff86ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_4b43a52875df64aecf2b43ba3d0d080aae605c9765bf0dabec8dc3f55ff86ac4->leave($__internal_4b43a52875df64aecf2b43ba3d0d080aae605c9765bf0dabec8dc3f55ff86ac4_prof);

        
        $__internal_b54308648fe611d81718af431c4edca09da443a2604783a71a05a780d5a76e7f->leave($__internal_b54308648fe611d81718af431c4edca09da443a2604783a71a05a780d5a76e7f_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_58814f35c8965b633d2231865de223d0ced982ab64a0f0dccc7c85c52edb1d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58814f35c8965b633d2231865de223d0ced982ab64a0f0dccc7c85c52edb1d11->enter($__internal_58814f35c8965b633d2231865de223d0ced982ab64a0f0dccc7c85c52edb1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0ffd2e790c28a8988ae93e292bd23c481985599fd585b20b882770e3ba1ee018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffd2e790c28a8988ae93e292bd23c481985599fd585b20b882770e3ba1ee018->enter($__internal_0ffd2e790c28a8988ae93e292bd23c481985599fd585b20b882770e3ba1ee018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0ffd2e790c28a8988ae93e292bd23c481985599fd585b20b882770e3ba1ee018->leave($__internal_0ffd2e790c28a8988ae93e292bd23c481985599fd585b20b882770e3ba1ee018_prof);

        
        $__internal_58814f35c8965b633d2231865de223d0ced982ab64a0f0dccc7c85c52edb1d11->leave($__internal_58814f35c8965b633d2231865de223d0ced982ab64a0f0dccc7c85c52edb1d11_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d4fc211d1afd22da45b4dbd2728759c6fed838338c31a4f28e420af2d6279521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fc211d1afd22da45b4dbd2728759c6fed838338c31a4f28e420af2d6279521->enter($__internal_d4fc211d1afd22da45b4dbd2728759c6fed838338c31a4f28e420af2d6279521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_67e839eba7f759830295759309fbbd5addcdee93e4682dc74032ee9fae8455e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e839eba7f759830295759309fbbd5addcdee93e4682dc74032ee9fae8455e0->enter($__internal_67e839eba7f759830295759309fbbd5addcdee93e4682dc74032ee9fae8455e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_67e839eba7f759830295759309fbbd5addcdee93e4682dc74032ee9fae8455e0->leave($__internal_67e839eba7f759830295759309fbbd5addcdee93e4682dc74032ee9fae8455e0_prof);

        
        $__internal_d4fc211d1afd22da45b4dbd2728759c6fed838338c31a4f28e420af2d6279521->leave($__internal_d4fc211d1afd22da45b4dbd2728759c6fed838338c31a4f28e420af2d6279521_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ff57176d919792b9aaba095a12f25526734966dc6ebc13f111450412eadf153a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff57176d919792b9aaba095a12f25526734966dc6ebc13f111450412eadf153a->enter($__internal_ff57176d919792b9aaba095a12f25526734966dc6ebc13f111450412eadf153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8f4dbbafe4ac3198800c73c80d4c8da2f15a0d03628e2f966139f68d0d4338fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4dbbafe4ac3198800c73c80d4c8da2f15a0d03628e2f966139f68d0d4338fc->enter($__internal_8f4dbbafe4ac3198800c73c80d4c8da2f15a0d03628e2f966139f68d0d4338fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8f4dbbafe4ac3198800c73c80d4c8da2f15a0d03628e2f966139f68d0d4338fc->leave($__internal_8f4dbbafe4ac3198800c73c80d4c8da2f15a0d03628e2f966139f68d0d4338fc_prof);

        
        $__internal_ff57176d919792b9aaba095a12f25526734966dc6ebc13f111450412eadf153a->leave($__internal_ff57176d919792b9aaba095a12f25526734966dc6ebc13f111450412eadf153a_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_95c56dd91ad9b047241457c3998bd89f55374aec919bc892b7612c0efd45f287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c56dd91ad9b047241457c3998bd89f55374aec919bc892b7612c0efd45f287->enter($__internal_95c56dd91ad9b047241457c3998bd89f55374aec919bc892b7612c0efd45f287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_32fbc51179e961b8287d64a53611b6d6c2ef6d4f9a3219dda7c51acbb9b3c26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fbc51179e961b8287d64a53611b6d6c2ef6d4f9a3219dda7c51acbb9b3c26b->enter($__internal_32fbc51179e961b8287d64a53611b6d6c2ef6d4f9a3219dda7c51acbb9b3c26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_32fbc51179e961b8287d64a53611b6d6c2ef6d4f9a3219dda7c51acbb9b3c26b->leave($__internal_32fbc51179e961b8287d64a53611b6d6c2ef6d4f9a3219dda7c51acbb9b3c26b_prof);

        
        $__internal_95c56dd91ad9b047241457c3998bd89f55374aec919bc892b7612c0efd45f287->leave($__internal_95c56dd91ad9b047241457c3998bd89f55374aec919bc892b7612c0efd45f287_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_82574657f551cb6ed50f5b3f51dc27e8d45b4126f81e322b685d6a3bc124390b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82574657f551cb6ed50f5b3f51dc27e8d45b4126f81e322b685d6a3bc124390b->enter($__internal_82574657f551cb6ed50f5b3f51dc27e8d45b4126f81e322b685d6a3bc124390b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2f0a11034d662282e9fa2b176f758e5d206527beb28a024e16414fcbf9367612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0a11034d662282e9fa2b176f758e5d206527beb28a024e16414fcbf9367612->enter($__internal_2f0a11034d662282e9fa2b176f758e5d206527beb28a024e16414fcbf9367612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2f0a11034d662282e9fa2b176f758e5d206527beb28a024e16414fcbf9367612->leave($__internal_2f0a11034d662282e9fa2b176f758e5d206527beb28a024e16414fcbf9367612_prof);

        
        $__internal_82574657f551cb6ed50f5b3f51dc27e8d45b4126f81e322b685d6a3bc124390b->leave($__internal_82574657f551cb6ed50f5b3f51dc27e8d45b4126f81e322b685d6a3bc124390b_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e25cdee38a6b9f8dc660f6feee00af5137ef0fad57c757b038c9f7066a239d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25cdee38a6b9f8dc660f6feee00af5137ef0fad57c757b038c9f7066a239d7c->enter($__internal_e25cdee38a6b9f8dc660f6feee00af5137ef0fad57c757b038c9f7066a239d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_726cd3b17a87f3315efb81ba3cdd448e5dc8640edcf4fd10c13f4dbb9191d5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726cd3b17a87f3315efb81ba3cdd448e5dc8640edcf4fd10c13f4dbb9191d5c1->enter($__internal_726cd3b17a87f3315efb81ba3cdd448e5dc8640edcf4fd10c13f4dbb9191d5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_726cd3b17a87f3315efb81ba3cdd448e5dc8640edcf4fd10c13f4dbb9191d5c1->leave($__internal_726cd3b17a87f3315efb81ba3cdd448e5dc8640edcf4fd10c13f4dbb9191d5c1_prof);

        
        $__internal_e25cdee38a6b9f8dc660f6feee00af5137ef0fad57c757b038c9f7066a239d7c->leave($__internal_e25cdee38a6b9f8dc660f6feee00af5137ef0fad57c757b038c9f7066a239d7c_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b01320869a787ec87a2d187cc55a5f247d85ae0db06054c601548f79d9a2bc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01320869a787ec87a2d187cc55a5f247d85ae0db06054c601548f79d9a2bc86->enter($__internal_b01320869a787ec87a2d187cc55a5f247d85ae0db06054c601548f79d9a2bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_edc3da1e192c7ff3b5779d4b20ef2de370713def84f773816c77759febf2484b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3da1e192c7ff3b5779d4b20ef2de370713def84f773816c77759febf2484b->enter($__internal_edc3da1e192c7ff3b5779d4b20ef2de370713def84f773816c77759febf2484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_edc3da1e192c7ff3b5779d4b20ef2de370713def84f773816c77759febf2484b->leave($__internal_edc3da1e192c7ff3b5779d4b20ef2de370713def84f773816c77759febf2484b_prof);

        
        $__internal_b01320869a787ec87a2d187cc55a5f247d85ae0db06054c601548f79d9a2bc86->leave($__internal_b01320869a787ec87a2d187cc55a5f247d85ae0db06054c601548f79d9a2bc86_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4940560a07d68729e061d6d57386ff9f75c85cd613db77ef99acd873a85adf96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4940560a07d68729e061d6d57386ff9f75c85cd613db77ef99acd873a85adf96->enter($__internal_4940560a07d68729e061d6d57386ff9f75c85cd613db77ef99acd873a85adf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_45c11e64d008c0f61392d1191144d358efcd442a7fb0e4ea2cfcc3767b2602c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c11e64d008c0f61392d1191144d358efcd442a7fb0e4ea2cfcc3767b2602c8->enter($__internal_45c11e64d008c0f61392d1191144d358efcd442a7fb0e4ea2cfcc3767b2602c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_45c11e64d008c0f61392d1191144d358efcd442a7fb0e4ea2cfcc3767b2602c8->leave($__internal_45c11e64d008c0f61392d1191144d358efcd442a7fb0e4ea2cfcc3767b2602c8_prof);

        
        $__internal_4940560a07d68729e061d6d57386ff9f75c85cd613db77ef99acd873a85adf96->leave($__internal_4940560a07d68729e061d6d57386ff9f75c85cd613db77ef99acd873a85adf96_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e4da3e3e6e1ee8f2a3a2b2078e13f869e3804f1c443dfa9956eb227db55a31cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4da3e3e6e1ee8f2a3a2b2078e13f869e3804f1c443dfa9956eb227db55a31cb->enter($__internal_e4da3e3e6e1ee8f2a3a2b2078e13f869e3804f1c443dfa9956eb227db55a31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8eeb515b14dc636464f156dd9ff5b42846115634e147e4180ac22c1343dd1084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eeb515b14dc636464f156dd9ff5b42846115634e147e4180ac22c1343dd1084->enter($__internal_8eeb515b14dc636464f156dd9ff5b42846115634e147e4180ac22c1343dd1084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8eeb515b14dc636464f156dd9ff5b42846115634e147e4180ac22c1343dd1084->leave($__internal_8eeb515b14dc636464f156dd9ff5b42846115634e147e4180ac22c1343dd1084_prof);

        
        $__internal_e4da3e3e6e1ee8f2a3a2b2078e13f869e3804f1c443dfa9956eb227db55a31cb->leave($__internal_e4da3e3e6e1ee8f2a3a2b2078e13f869e3804f1c443dfa9956eb227db55a31cb_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_babd514d51451c69eb4d95d1c75c7deda3440938c7cacf86e5e3fb6dbb4ffa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babd514d51451c69eb4d95d1c75c7deda3440938c7cacf86e5e3fb6dbb4ffa18->enter($__internal_babd514d51451c69eb4d95d1c75c7deda3440938c7cacf86e5e3fb6dbb4ffa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_96ebacaabf18516274b75870e41f7be53bd49e27843397f5bd7b5a9ab1875a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ebacaabf18516274b75870e41f7be53bd49e27843397f5bd7b5a9ab1875a3b->enter($__internal_96ebacaabf18516274b75870e41f7be53bd49e27843397f5bd7b5a9ab1875a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_96ebacaabf18516274b75870e41f7be53bd49e27843397f5bd7b5a9ab1875a3b->leave($__internal_96ebacaabf18516274b75870e41f7be53bd49e27843397f5bd7b5a9ab1875a3b_prof);

        
        $__internal_babd514d51451c69eb4d95d1c75c7deda3440938c7cacf86e5e3fb6dbb4ffa18->leave($__internal_babd514d51451c69eb4d95d1c75c7deda3440938c7cacf86e5e3fb6dbb4ffa18_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bad261c58271da1f0c4309e698b47b420e372061a6c18afa493ea1eb8d29fc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad261c58271da1f0c4309e698b47b420e372061a6c18afa493ea1eb8d29fc7c->enter($__internal_bad261c58271da1f0c4309e698b47b420e372061a6c18afa493ea1eb8d29fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bea0409513c0bd5064adfe3fe848674a5b192f17f3c74e0690d25fe166ca3ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea0409513c0bd5064adfe3fe848674a5b192f17f3c74e0690d25fe166ca3ead->enter($__internal_bea0409513c0bd5064adfe3fe848674a5b192f17f3c74e0690d25fe166ca3ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bea0409513c0bd5064adfe3fe848674a5b192f17f3c74e0690d25fe166ca3ead->leave($__internal_bea0409513c0bd5064adfe3fe848674a5b192f17f3c74e0690d25fe166ca3ead_prof);

        
        $__internal_bad261c58271da1f0c4309e698b47b420e372061a6c18afa493ea1eb8d29fc7c->leave($__internal_bad261c58271da1f0c4309e698b47b420e372061a6c18afa493ea1eb8d29fc7c_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_60fe6a4197e9af02debc943035ec381fb5bc21e79232576544ac2af8851ccdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fe6a4197e9af02debc943035ec381fb5bc21e79232576544ac2af8851ccdba->enter($__internal_60fe6a4197e9af02debc943035ec381fb5bc21e79232576544ac2af8851ccdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_da1c4c803592e7b77f43565b8d47361e6b3a9ec3d2e59d6c0b77b4cc188190e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1c4c803592e7b77f43565b8d47361e6b3a9ec3d2e59d6c0b77b4cc188190e6->enter($__internal_da1c4c803592e7b77f43565b8d47361e6b3a9ec3d2e59d6c0b77b4cc188190e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_da1c4c803592e7b77f43565b8d47361e6b3a9ec3d2e59d6c0b77b4cc188190e6->leave($__internal_da1c4c803592e7b77f43565b8d47361e6b3a9ec3d2e59d6c0b77b4cc188190e6_prof);

        
        $__internal_60fe6a4197e9af02debc943035ec381fb5bc21e79232576544ac2af8851ccdba->leave($__internal_60fe6a4197e9af02debc943035ec381fb5bc21e79232576544ac2af8851ccdba_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9be43b2618130a3bc67e55011b6bcb3cd9a3d7f84890de201fa4857ad6f703ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be43b2618130a3bc67e55011b6bcb3cd9a3d7f84890de201fa4857ad6f703ff->enter($__internal_9be43b2618130a3bc67e55011b6bcb3cd9a3d7f84890de201fa4857ad6f703ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2322dcbc704098feb4e0a41c8b44f5289f1e75c49754bd46c582ddc692b99638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2322dcbc704098feb4e0a41c8b44f5289f1e75c49754bd46c582ddc692b99638->enter($__internal_2322dcbc704098feb4e0a41c8b44f5289f1e75c49754bd46c582ddc692b99638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_2322dcbc704098feb4e0a41c8b44f5289f1e75c49754bd46c582ddc692b99638->leave($__internal_2322dcbc704098feb4e0a41c8b44f5289f1e75c49754bd46c582ddc692b99638_prof);

        
        $__internal_9be43b2618130a3bc67e55011b6bcb3cd9a3d7f84890de201fa4857ad6f703ff->leave($__internal_9be43b2618130a3bc67e55011b6bcb3cd9a3d7f84890de201fa4857ad6f703ff_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5b96dddfa6818658ec104d1344064b9929321c626f652c2f223b529ff672d223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b96dddfa6818658ec104d1344064b9929321c626f652c2f223b529ff672d223->enter($__internal_5b96dddfa6818658ec104d1344064b9929321c626f652c2f223b529ff672d223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4bf9918885df58fb41ff5823e11335eb14dbbf3b706324e402f02093281f2e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf9918885df58fb41ff5823e11335eb14dbbf3b706324e402f02093281f2e93->enter($__internal_4bf9918885df58fb41ff5823e11335eb14dbbf3b706324e402f02093281f2e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4bf9918885df58fb41ff5823e11335eb14dbbf3b706324e402f02093281f2e93->leave($__internal_4bf9918885df58fb41ff5823e11335eb14dbbf3b706324e402f02093281f2e93_prof);

        
        $__internal_5b96dddfa6818658ec104d1344064b9929321c626f652c2f223b529ff672d223->leave($__internal_5b96dddfa6818658ec104d1344064b9929321c626f652c2f223b529ff672d223_prof);

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
