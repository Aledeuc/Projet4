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
        $__internal_09ee0823bcd9d019f7c851d9b532534ce89ed56d27eae4b55b594478876a9b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ee0823bcd9d019f7c851d9b532534ce89ed56d27eae4b55b594478876a9b4d->enter($__internal_09ee0823bcd9d019f7c851d9b532534ce89ed56d27eae4b55b594478876a9b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_0562dd12d22030496cf071251c1ed36149fb2028e831b09e439ff108e36dbac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0562dd12d22030496cf071251c1ed36149fb2028e831b09e439ff108e36dbac1->enter($__internal_0562dd12d22030496cf071251c1ed36149fb2028e831b09e439ff108e36dbac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_09ee0823bcd9d019f7c851d9b532534ce89ed56d27eae4b55b594478876a9b4d->leave($__internal_09ee0823bcd9d019f7c851d9b532534ce89ed56d27eae4b55b594478876a9b4d_prof);

        
        $__internal_0562dd12d22030496cf071251c1ed36149fb2028e831b09e439ff108e36dbac1->leave($__internal_0562dd12d22030496cf071251c1ed36149fb2028e831b09e439ff108e36dbac1_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_fb1f97c9823b24813132b149985603d443afa7d7d1eda8ea4672b2cb8b016784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1f97c9823b24813132b149985603d443afa7d7d1eda8ea4672b2cb8b016784->enter($__internal_fb1f97c9823b24813132b149985603d443afa7d7d1eda8ea4672b2cb8b016784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5d95a16a39fdfbbf7ad9082e81d799435edd73fb154943fe674f7763a4c62dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d95a16a39fdfbbf7ad9082e81d799435edd73fb154943fe674f7763a4c62dd2->enter($__internal_5d95a16a39fdfbbf7ad9082e81d799435edd73fb154943fe674f7763a4c62dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5d95a16a39fdfbbf7ad9082e81d799435edd73fb154943fe674f7763a4c62dd2->leave($__internal_5d95a16a39fdfbbf7ad9082e81d799435edd73fb154943fe674f7763a4c62dd2_prof);

        
        $__internal_fb1f97c9823b24813132b149985603d443afa7d7d1eda8ea4672b2cb8b016784->leave($__internal_fb1f97c9823b24813132b149985603d443afa7d7d1eda8ea4672b2cb8b016784_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ab7d637453f058870f80524a576061daa809c1133fc9c5272336603ead4ac93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7d637453f058870f80524a576061daa809c1133fc9c5272336603ead4ac93c->enter($__internal_ab7d637453f058870f80524a576061daa809c1133fc9c5272336603ead4ac93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_99441363a04f501fa8c310cbf655c1f04d3d3c2c51c9490d570e626f2882be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99441363a04f501fa8c310cbf655c1f04d3d3c2c51c9490d570e626f2882be34->enter($__internal_99441363a04f501fa8c310cbf655c1f04d3d3c2c51c9490d570e626f2882be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_99441363a04f501fa8c310cbf655c1f04d3d3c2c51c9490d570e626f2882be34->leave($__internal_99441363a04f501fa8c310cbf655c1f04d3d3c2c51c9490d570e626f2882be34_prof);

        
        $__internal_ab7d637453f058870f80524a576061daa809c1133fc9c5272336603ead4ac93c->leave($__internal_ab7d637453f058870f80524a576061daa809c1133fc9c5272336603ead4ac93c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8a40b1deccab7a9ce970935f20b96ca1a80e08aeeb6dfada1461f93628d3fbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a40b1deccab7a9ce970935f20b96ca1a80e08aeeb6dfada1461f93628d3fbaa->enter($__internal_8a40b1deccab7a9ce970935f20b96ca1a80e08aeeb6dfada1461f93628d3fbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0aab9fb683354be0912aac3bf66ccf6bace416578f3feeac67fa56a8fe851c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aab9fb683354be0912aac3bf66ccf6bace416578f3feeac67fa56a8fe851c5b->enter($__internal_0aab9fb683354be0912aac3bf66ccf6bace416578f3feeac67fa56a8fe851c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0aab9fb683354be0912aac3bf66ccf6bace416578f3feeac67fa56a8fe851c5b->leave($__internal_0aab9fb683354be0912aac3bf66ccf6bace416578f3feeac67fa56a8fe851c5b_prof);

        
        $__internal_8a40b1deccab7a9ce970935f20b96ca1a80e08aeeb6dfada1461f93628d3fbaa->leave($__internal_8a40b1deccab7a9ce970935f20b96ca1a80e08aeeb6dfada1461f93628d3fbaa_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e96ba44c6816a48022398e2c2fc402417d0dfa2b8054eb502f013e84f0ffbe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96ba44c6816a48022398e2c2fc402417d0dfa2b8054eb502f013e84f0ffbe22->enter($__internal_e96ba44c6816a48022398e2c2fc402417d0dfa2b8054eb502f013e84f0ffbe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_044df42bca694a4bf44cdc192678cc9ad072e83500d07d9af011783420e0fb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044df42bca694a4bf44cdc192678cc9ad072e83500d07d9af011783420e0fb6a->enter($__internal_044df42bca694a4bf44cdc192678cc9ad072e83500d07d9af011783420e0fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_3df6e9d6a22c8e3c32a94c30759fe8586cae3d141d4caab1465f66490ca151f9 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_f2b1cd02a3e76240327be32be6f916f4d1f32a7cde6cd7eaf620445a37bce023 = "{{") && ('' === $__internal_f2b1cd02a3e76240327be32be6f916f4d1f32a7cde6cd7eaf620445a37bce023 || 0 === strpos($__internal_3df6e9d6a22c8e3c32a94c30759fe8586cae3d141d4caab1465f66490ca151f9, $__internal_f2b1cd02a3e76240327be32be6f916f4d1f32a7cde6cd7eaf620445a37bce023)));
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
        
        $__internal_044df42bca694a4bf44cdc192678cc9ad072e83500d07d9af011783420e0fb6a->leave($__internal_044df42bca694a4bf44cdc192678cc9ad072e83500d07d9af011783420e0fb6a_prof);

        
        $__internal_e96ba44c6816a48022398e2c2fc402417d0dfa2b8054eb502f013e84f0ffbe22->leave($__internal_e96ba44c6816a48022398e2c2fc402417d0dfa2b8054eb502f013e84f0ffbe22_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_97b99636a47fca2007c8c75cc568719c2a55f4a4647cefcb894ada1dc8891abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b99636a47fca2007c8c75cc568719c2a55f4a4647cefcb894ada1dc8891abe->enter($__internal_97b99636a47fca2007c8c75cc568719c2a55f4a4647cefcb894ada1dc8891abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_96b2f77bbe4b8a33cc8d19ed917987c5d2a67fcb611fc96f32c47145da45abd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b2f77bbe4b8a33cc8d19ed917987c5d2a67fcb611fc96f32c47145da45abd0->enter($__internal_96b2f77bbe4b8a33cc8d19ed917987c5d2a67fcb611fc96f32c47145da45abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_96b2f77bbe4b8a33cc8d19ed917987c5d2a67fcb611fc96f32c47145da45abd0->leave($__internal_96b2f77bbe4b8a33cc8d19ed917987c5d2a67fcb611fc96f32c47145da45abd0_prof);

        
        $__internal_97b99636a47fca2007c8c75cc568719c2a55f4a4647cefcb894ada1dc8891abe->leave($__internal_97b99636a47fca2007c8c75cc568719c2a55f4a4647cefcb894ada1dc8891abe_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2294cb24eeaa806aefbec5eb8594ec0f58a1cf1e70852b2ffdb5c634b5778d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2294cb24eeaa806aefbec5eb8594ec0f58a1cf1e70852b2ffdb5c634b5778d1d->enter($__internal_2294cb24eeaa806aefbec5eb8594ec0f58a1cf1e70852b2ffdb5c634b5778d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_c48a19b82a65878a92e972bc9b7ad8773f3b607f4d31cbcccd81979dbef5b2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a19b82a65878a92e972bc9b7ad8773f3b607f4d31cbcccd81979dbef5b2fa->enter($__internal_c48a19b82a65878a92e972bc9b7ad8773f3b607f4d31cbcccd81979dbef5b2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_c48a19b82a65878a92e972bc9b7ad8773f3b607f4d31cbcccd81979dbef5b2fa->leave($__internal_c48a19b82a65878a92e972bc9b7ad8773f3b607f4d31cbcccd81979dbef5b2fa_prof);

        
        $__internal_2294cb24eeaa806aefbec5eb8594ec0f58a1cf1e70852b2ffdb5c634b5778d1d->leave($__internal_2294cb24eeaa806aefbec5eb8594ec0f58a1cf1e70852b2ffdb5c634b5778d1d_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9a8eb42f2478810fbb3185f81033059eb114437fe10389e74b50994670548ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8eb42f2478810fbb3185f81033059eb114437fe10389e74b50994670548ef2->enter($__internal_9a8eb42f2478810fbb3185f81033059eb114437fe10389e74b50994670548ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6604f3f9ccb405b87669e0da59fb366d08236c669c5a398a0b2cde2a0dc84e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6604f3f9ccb405b87669e0da59fb366d08236c669c5a398a0b2cde2a0dc84e91->enter($__internal_6604f3f9ccb405b87669e0da59fb366d08236c669c5a398a0b2cde2a0dc84e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_6604f3f9ccb405b87669e0da59fb366d08236c669c5a398a0b2cde2a0dc84e91->leave($__internal_6604f3f9ccb405b87669e0da59fb366d08236c669c5a398a0b2cde2a0dc84e91_prof);

        
        $__internal_9a8eb42f2478810fbb3185f81033059eb114437fe10389e74b50994670548ef2->leave($__internal_9a8eb42f2478810fbb3185f81033059eb114437fe10389e74b50994670548ef2_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_bc9974b4333faa869c41fbf77ba651e9605dbc1ee6f5ca45300566dd47336676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9974b4333faa869c41fbf77ba651e9605dbc1ee6f5ca45300566dd47336676->enter($__internal_bc9974b4333faa869c41fbf77ba651e9605dbc1ee6f5ca45300566dd47336676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6a4a8e72dc183ab22f18ed77c3843e4331cb60cabb7ca72084f3d7cc99434046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4a8e72dc183ab22f18ed77c3843e4331cb60cabb7ca72084f3d7cc99434046->enter($__internal_6a4a8e72dc183ab22f18ed77c3843e4331cb60cabb7ca72084f3d7cc99434046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_6a4a8e72dc183ab22f18ed77c3843e4331cb60cabb7ca72084f3d7cc99434046->leave($__internal_6a4a8e72dc183ab22f18ed77c3843e4331cb60cabb7ca72084f3d7cc99434046_prof);

        
        $__internal_bc9974b4333faa869c41fbf77ba651e9605dbc1ee6f5ca45300566dd47336676->leave($__internal_bc9974b4333faa869c41fbf77ba651e9605dbc1ee6f5ca45300566dd47336676_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d14ba8d4d4356e094eef63572f2e75c6542c36fe9c87a7de60eb89bb407e0e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14ba8d4d4356e094eef63572f2e75c6542c36fe9c87a7de60eb89bb407e0e79->enter($__internal_d14ba8d4d4356e094eef63572f2e75c6542c36fe9c87a7de60eb89bb407e0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_2e414114db4a7de4c6ceb33f33217cafeeb86300a77f6076c0f40c50dfa489bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e414114db4a7de4c6ceb33f33217cafeeb86300a77f6076c0f40c50dfa489bc->enter($__internal_2e414114db4a7de4c6ceb33f33217cafeeb86300a77f6076c0f40c50dfa489bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_2e414114db4a7de4c6ceb33f33217cafeeb86300a77f6076c0f40c50dfa489bc->leave($__internal_2e414114db4a7de4c6ceb33f33217cafeeb86300a77f6076c0f40c50dfa489bc_prof);

        
        $__internal_d14ba8d4d4356e094eef63572f2e75c6542c36fe9c87a7de60eb89bb407e0e79->leave($__internal_d14ba8d4d4356e094eef63572f2e75c6542c36fe9c87a7de60eb89bb407e0e79_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8bd9bba08aa22949d505de3d7f47af41ac6e33fc3d600788ab2ea1c539af4235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd9bba08aa22949d505de3d7f47af41ac6e33fc3d600788ab2ea1c539af4235->enter($__internal_8bd9bba08aa22949d505de3d7f47af41ac6e33fc3d600788ab2ea1c539af4235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9f5ea8f8a338f5161344ac340a1181a3a2e2314f94a1ab77bf99b050c02b581e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5ea8f8a338f5161344ac340a1181a3a2e2314f94a1ab77bf99b050c02b581e->enter($__internal_9f5ea8f8a338f5161344ac340a1181a3a2e2314f94a1ab77bf99b050c02b581e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9f5ea8f8a338f5161344ac340a1181a3a2e2314f94a1ab77bf99b050c02b581e->leave($__internal_9f5ea8f8a338f5161344ac340a1181a3a2e2314f94a1ab77bf99b050c02b581e_prof);

        
        $__internal_8bd9bba08aa22949d505de3d7f47af41ac6e33fc3d600788ab2ea1c539af4235->leave($__internal_8bd9bba08aa22949d505de3d7f47af41ac6e33fc3d600788ab2ea1c539af4235_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_03cab0ee4246ec13d4c17715bcd47dfcd48d4a1951cb5a2c1e3a96098668506c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cab0ee4246ec13d4c17715bcd47dfcd48d4a1951cb5a2c1e3a96098668506c->enter($__internal_03cab0ee4246ec13d4c17715bcd47dfcd48d4a1951cb5a2c1e3a96098668506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d19ccc4b0c25622c61567be8c844bc64c3b98d699c1c3333f723fa7e25117308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19ccc4b0c25622c61567be8c844bc64c3b98d699c1c3333f723fa7e25117308->enter($__internal_d19ccc4b0c25622c61567be8c844bc64c3b98d699c1c3333f723fa7e25117308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d19ccc4b0c25622c61567be8c844bc64c3b98d699c1c3333f723fa7e25117308->leave($__internal_d19ccc4b0c25622c61567be8c844bc64c3b98d699c1c3333f723fa7e25117308_prof);

        
        $__internal_03cab0ee4246ec13d4c17715bcd47dfcd48d4a1951cb5a2c1e3a96098668506c->leave($__internal_03cab0ee4246ec13d4c17715bcd47dfcd48d4a1951cb5a2c1e3a96098668506c_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d7fdda0b30e064cd76fabaab376f7a7c85bcba36b5a869bb73d8bddd5745c17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fdda0b30e064cd76fabaab376f7a7c85bcba36b5a869bb73d8bddd5745c17d->enter($__internal_d7fdda0b30e064cd76fabaab376f7a7c85bcba36b5a869bb73d8bddd5745c17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_77d2627087190281d40892b1f723c6d04a0ec46815f0743d185d7f5e012476b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d2627087190281d40892b1f723c6d04a0ec46815f0743d185d7f5e012476b3->enter($__internal_77d2627087190281d40892b1f723c6d04a0ec46815f0743d185d7f5e012476b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_77d2627087190281d40892b1f723c6d04a0ec46815f0743d185d7f5e012476b3->leave($__internal_77d2627087190281d40892b1f723c6d04a0ec46815f0743d185d7f5e012476b3_prof);

        
        $__internal_d7fdda0b30e064cd76fabaab376f7a7c85bcba36b5a869bb73d8bddd5745c17d->leave($__internal_d7fdda0b30e064cd76fabaab376f7a7c85bcba36b5a869bb73d8bddd5745c17d_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a708cec09f462e4246d8bc4cc5180ce10f0e539471ac538be3c92e069c27778c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a708cec09f462e4246d8bc4cc5180ce10f0e539471ac538be3c92e069c27778c->enter($__internal_a708cec09f462e4246d8bc4cc5180ce10f0e539471ac538be3c92e069c27778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8f2b002d2177cbd1d0b2cf10ec8a83a14915c2cbccb224f43920ea3c8db7b4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2b002d2177cbd1d0b2cf10ec8a83a14915c2cbccb224f43920ea3c8db7b4c9->enter($__internal_8f2b002d2177cbd1d0b2cf10ec8a83a14915c2cbccb224f43920ea3c8db7b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8f2b002d2177cbd1d0b2cf10ec8a83a14915c2cbccb224f43920ea3c8db7b4c9->leave($__internal_8f2b002d2177cbd1d0b2cf10ec8a83a14915c2cbccb224f43920ea3c8db7b4c9_prof);

        
        $__internal_a708cec09f462e4246d8bc4cc5180ce10f0e539471ac538be3c92e069c27778c->leave($__internal_a708cec09f462e4246d8bc4cc5180ce10f0e539471ac538be3c92e069c27778c_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c6cbb567dff09b7d334d6a246d9cbc7dc43a8d3dd89e7a231444363393c406e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cbb567dff09b7d334d6a246d9cbc7dc43a8d3dd89e7a231444363393c406e3->enter($__internal_c6cbb567dff09b7d334d6a246d9cbc7dc43a8d3dd89e7a231444363393c406e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1128ecda7320404c2ca485f3e88f793b6fa911d0b3a8c3a58a95353d5480c8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1128ecda7320404c2ca485f3e88f793b6fa911d0b3a8c3a58a95353d5480c8ab->enter($__internal_1128ecda7320404c2ca485f3e88f793b6fa911d0b3a8c3a58a95353d5480c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1128ecda7320404c2ca485f3e88f793b6fa911d0b3a8c3a58a95353d5480c8ab->leave($__internal_1128ecda7320404c2ca485f3e88f793b6fa911d0b3a8c3a58a95353d5480c8ab_prof);

        
        $__internal_c6cbb567dff09b7d334d6a246d9cbc7dc43a8d3dd89e7a231444363393c406e3->leave($__internal_c6cbb567dff09b7d334d6a246d9cbc7dc43a8d3dd89e7a231444363393c406e3_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_12e2389680b07d13f136cb8d59e21416cf3207e443acfd57c5b2224b7b9b4a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e2389680b07d13f136cb8d59e21416cf3207e443acfd57c5b2224b7b9b4a0f->enter($__internal_12e2389680b07d13f136cb8d59e21416cf3207e443acfd57c5b2224b7b9b4a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4fd6e3b3dffce6229f8c3b132a39c6a5b49961976fd62216c4235f2fafd4fa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd6e3b3dffce6229f8c3b132a39c6a5b49961976fd62216c4235f2fafd4fa78->enter($__internal_4fd6e3b3dffce6229f8c3b132a39c6a5b49961976fd62216c4235f2fafd4fa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4fd6e3b3dffce6229f8c3b132a39c6a5b49961976fd62216c4235f2fafd4fa78->leave($__internal_4fd6e3b3dffce6229f8c3b132a39c6a5b49961976fd62216c4235f2fafd4fa78_prof);

        
        $__internal_12e2389680b07d13f136cb8d59e21416cf3207e443acfd57c5b2224b7b9b4a0f->leave($__internal_12e2389680b07d13f136cb8d59e21416cf3207e443acfd57c5b2224b7b9b4a0f_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_22149855701ced016102141d9bc324294eb4e3ab05688c505b3fe49962dc9e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22149855701ced016102141d9bc324294eb4e3ab05688c505b3fe49962dc9e7e->enter($__internal_22149855701ced016102141d9bc324294eb4e3ab05688c505b3fe49962dc9e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_68275dbeb953f2ffa91e4bf90a718f66f4c0889191555dd6b25d8ae2715afb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68275dbeb953f2ffa91e4bf90a718f66f4c0889191555dd6b25d8ae2715afb97->enter($__internal_68275dbeb953f2ffa91e4bf90a718f66f4c0889191555dd6b25d8ae2715afb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_68275dbeb953f2ffa91e4bf90a718f66f4c0889191555dd6b25d8ae2715afb97->leave($__internal_68275dbeb953f2ffa91e4bf90a718f66f4c0889191555dd6b25d8ae2715afb97_prof);

        
        $__internal_22149855701ced016102141d9bc324294eb4e3ab05688c505b3fe49962dc9e7e->leave($__internal_22149855701ced016102141d9bc324294eb4e3ab05688c505b3fe49962dc9e7e_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9e1a6f90442668ae4da10a30bb81190b3d07fdc95f35f11a74ddfd7231dbc181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1a6f90442668ae4da10a30bb81190b3d07fdc95f35f11a74ddfd7231dbc181->enter($__internal_9e1a6f90442668ae4da10a30bb81190b3d07fdc95f35f11a74ddfd7231dbc181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_2b6fb98f382b68b2676050a83a302a978c911d5c0f7f768127b37e431780f6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6fb98f382b68b2676050a83a302a978c911d5c0f7f768127b37e431780f6f7->enter($__internal_2b6fb98f382b68b2676050a83a302a978c911d5c0f7f768127b37e431780f6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2b6fb98f382b68b2676050a83a302a978c911d5c0f7f768127b37e431780f6f7->leave($__internal_2b6fb98f382b68b2676050a83a302a978c911d5c0f7f768127b37e431780f6f7_prof);

        
        $__internal_9e1a6f90442668ae4da10a30bb81190b3d07fdc95f35f11a74ddfd7231dbc181->leave($__internal_9e1a6f90442668ae4da10a30bb81190b3d07fdc95f35f11a74ddfd7231dbc181_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0d71c093ddbf7d09ce94284bd77a1fc2d9a039644d939fb8a63adc552c406383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d71c093ddbf7d09ce94284bd77a1fc2d9a039644d939fb8a63adc552c406383->enter($__internal_0d71c093ddbf7d09ce94284bd77a1fc2d9a039644d939fb8a63adc552c406383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f82712000c3cf9c35c815b73821c81b394388fdbf6fdcbb49bb143b815f41042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82712000c3cf9c35c815b73821c81b394388fdbf6fdcbb49bb143b815f41042->enter($__internal_f82712000c3cf9c35c815b73821c81b394388fdbf6fdcbb49bb143b815f41042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f82712000c3cf9c35c815b73821c81b394388fdbf6fdcbb49bb143b815f41042->leave($__internal_f82712000c3cf9c35c815b73821c81b394388fdbf6fdcbb49bb143b815f41042_prof);

        
        $__internal_0d71c093ddbf7d09ce94284bd77a1fc2d9a039644d939fb8a63adc552c406383->leave($__internal_0d71c093ddbf7d09ce94284bd77a1fc2d9a039644d939fb8a63adc552c406383_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_592853aeff242b6d8cbe905dbe6d5c6c0ff13917138fa2b79127139387d0a3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592853aeff242b6d8cbe905dbe6d5c6c0ff13917138fa2b79127139387d0a3c9->enter($__internal_592853aeff242b6d8cbe905dbe6d5c6c0ff13917138fa2b79127139387d0a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e04f1074315e4f2a8ea2630e5d306fa8a499187ebc43c1bc43b6102dc8bbfc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04f1074315e4f2a8ea2630e5d306fa8a499187ebc43c1bc43b6102dc8bbfc7a->enter($__internal_e04f1074315e4f2a8ea2630e5d306fa8a499187ebc43c1bc43b6102dc8bbfc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e04f1074315e4f2a8ea2630e5d306fa8a499187ebc43c1bc43b6102dc8bbfc7a->leave($__internal_e04f1074315e4f2a8ea2630e5d306fa8a499187ebc43c1bc43b6102dc8bbfc7a_prof);

        
        $__internal_592853aeff242b6d8cbe905dbe6d5c6c0ff13917138fa2b79127139387d0a3c9->leave($__internal_592853aeff242b6d8cbe905dbe6d5c6c0ff13917138fa2b79127139387d0a3c9_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0c59084598af26490e442fc9af2fe06a689fefb94aa7a6599cb86d6614d794a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c59084598af26490e442fc9af2fe06a689fefb94aa7a6599cb86d6614d794a3->enter($__internal_0c59084598af26490e442fc9af2fe06a689fefb94aa7a6599cb86d6614d794a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c495fd87cc9b0f9ef701522674a2940167cb270261e108647940ea56dde276fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c495fd87cc9b0f9ef701522674a2940167cb270261e108647940ea56dde276fc->enter($__internal_c495fd87cc9b0f9ef701522674a2940167cb270261e108647940ea56dde276fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_c495fd87cc9b0f9ef701522674a2940167cb270261e108647940ea56dde276fc->leave($__internal_c495fd87cc9b0f9ef701522674a2940167cb270261e108647940ea56dde276fc_prof);

        
        $__internal_0c59084598af26490e442fc9af2fe06a689fefb94aa7a6599cb86d6614d794a3->leave($__internal_0c59084598af26490e442fc9af2fe06a689fefb94aa7a6599cb86d6614d794a3_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_87fdde8af6b29c81f1683103be89f95c013fdbb99410b536b1b56493a650add6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fdde8af6b29c81f1683103be89f95c013fdbb99410b536b1b56493a650add6->enter($__internal_87fdde8af6b29c81f1683103be89f95c013fdbb99410b536b1b56493a650add6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c499a017559c6a5e7f9b7a284fdba6697de38a8dc0859f73eb5d539e1676d3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c499a017559c6a5e7f9b7a284fdba6697de38a8dc0859f73eb5d539e1676d3de->enter($__internal_c499a017559c6a5e7f9b7a284fdba6697de38a8dc0859f73eb5d539e1676d3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c499a017559c6a5e7f9b7a284fdba6697de38a8dc0859f73eb5d539e1676d3de->leave($__internal_c499a017559c6a5e7f9b7a284fdba6697de38a8dc0859f73eb5d539e1676d3de_prof);

        
        $__internal_87fdde8af6b29c81f1683103be89f95c013fdbb99410b536b1b56493a650add6->leave($__internal_87fdde8af6b29c81f1683103be89f95c013fdbb99410b536b1b56493a650add6_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_2a14696933a9c27b550f1883b9fdb2ada1cee491db21ec528e687da95f8b57cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a14696933a9c27b550f1883b9fdb2ada1cee491db21ec528e687da95f8b57cc->enter($__internal_2a14696933a9c27b550f1883b9fdb2ada1cee491db21ec528e687da95f8b57cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b0929e7df6bb3d2fb85690a75e9bfa2b9591197c4da598c86024f2b4aa34042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0929e7df6bb3d2fb85690a75e9bfa2b9591197c4da598c86024f2b4aa34042d->enter($__internal_b0929e7df6bb3d2fb85690a75e9bfa2b9591197c4da598c86024f2b4aa34042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b0929e7df6bb3d2fb85690a75e9bfa2b9591197c4da598c86024f2b4aa34042d->leave($__internal_b0929e7df6bb3d2fb85690a75e9bfa2b9591197c4da598c86024f2b4aa34042d_prof);

        
        $__internal_2a14696933a9c27b550f1883b9fdb2ada1cee491db21ec528e687da95f8b57cc->leave($__internal_2a14696933a9c27b550f1883b9fdb2ada1cee491db21ec528e687da95f8b57cc_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e56a29df43071fc3c9f0a8aa313571a58f369140066182d50b8c1bba94ca60e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56a29df43071fc3c9f0a8aa313571a58f369140066182d50b8c1bba94ca60e9->enter($__internal_e56a29df43071fc3c9f0a8aa313571a58f369140066182d50b8c1bba94ca60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_603ada03395c0347f28e8eedfa0b4ca8db5296ebe5c2087cf45d886f0711aef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603ada03395c0347f28e8eedfa0b4ca8db5296ebe5c2087cf45d886f0711aef2->enter($__internal_603ada03395c0347f28e8eedfa0b4ca8db5296ebe5c2087cf45d886f0711aef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_603ada03395c0347f28e8eedfa0b4ca8db5296ebe5c2087cf45d886f0711aef2->leave($__internal_603ada03395c0347f28e8eedfa0b4ca8db5296ebe5c2087cf45d886f0711aef2_prof);

        
        $__internal_e56a29df43071fc3c9f0a8aa313571a58f369140066182d50b8c1bba94ca60e9->leave($__internal_e56a29df43071fc3c9f0a8aa313571a58f369140066182d50b8c1bba94ca60e9_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e15436bdd21e0f8c9268122dd71f0dffcabd2fb4c0325dcbdb84ff56bc223898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15436bdd21e0f8c9268122dd71f0dffcabd2fb4c0325dcbdb84ff56bc223898->enter($__internal_e15436bdd21e0f8c9268122dd71f0dffcabd2fb4c0325dcbdb84ff56bc223898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c483317acac27a941da5005273670edea52caf8973618a55a836f06897adc320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c483317acac27a941da5005273670edea52caf8973618a55a836f06897adc320->enter($__internal_c483317acac27a941da5005273670edea52caf8973618a55a836f06897adc320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c483317acac27a941da5005273670edea52caf8973618a55a836f06897adc320->leave($__internal_c483317acac27a941da5005273670edea52caf8973618a55a836f06897adc320_prof);

        
        $__internal_e15436bdd21e0f8c9268122dd71f0dffcabd2fb4c0325dcbdb84ff56bc223898->leave($__internal_e15436bdd21e0f8c9268122dd71f0dffcabd2fb4c0325dcbdb84ff56bc223898_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f0d2db4bfab1b0f1bccf54790b141a5547687504347f0d12874bcb99bd004abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d2db4bfab1b0f1bccf54790b141a5547687504347f0d12874bcb99bd004abf->enter($__internal_f0d2db4bfab1b0f1bccf54790b141a5547687504347f0d12874bcb99bd004abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_20e28033a90eace3a58eee6b59af820740d1eb579dff93b13d3a7514294d4355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e28033a90eace3a58eee6b59af820740d1eb579dff93b13d3a7514294d4355->enter($__internal_20e28033a90eace3a58eee6b59af820740d1eb579dff93b13d3a7514294d4355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_20e28033a90eace3a58eee6b59af820740d1eb579dff93b13d3a7514294d4355->leave($__internal_20e28033a90eace3a58eee6b59af820740d1eb579dff93b13d3a7514294d4355_prof);

        
        $__internal_f0d2db4bfab1b0f1bccf54790b141a5547687504347f0d12874bcb99bd004abf->leave($__internal_f0d2db4bfab1b0f1bccf54790b141a5547687504347f0d12874bcb99bd004abf_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_74bede02f1a012e428528c5860a47232403bc768be74ff8dfe921d01da0a958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bede02f1a012e428528c5860a47232403bc768be74ff8dfe921d01da0a958d->enter($__internal_74bede02f1a012e428528c5860a47232403bc768be74ff8dfe921d01da0a958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ec54a5a8a4cf9670b106147354b71b552fc4b5f096a6fd5e72c12781c2c7f169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec54a5a8a4cf9670b106147354b71b552fc4b5f096a6fd5e72c12781c2c7f169->enter($__internal_ec54a5a8a4cf9670b106147354b71b552fc4b5f096a6fd5e72c12781c2c7f169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_ec54a5a8a4cf9670b106147354b71b552fc4b5f096a6fd5e72c12781c2c7f169->leave($__internal_ec54a5a8a4cf9670b106147354b71b552fc4b5f096a6fd5e72c12781c2c7f169_prof);

        
        $__internal_74bede02f1a012e428528c5860a47232403bc768be74ff8dfe921d01da0a958d->leave($__internal_74bede02f1a012e428528c5860a47232403bc768be74ff8dfe921d01da0a958d_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_63095da6038e80fffc41a7d60741e5c95ab92c2369e84bfd225735b0964d4b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63095da6038e80fffc41a7d60741e5c95ab92c2369e84bfd225735b0964d4b3b->enter($__internal_63095da6038e80fffc41a7d60741e5c95ab92c2369e84bfd225735b0964d4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_de14537561f1481fc6d4cf34985d5b794deee8dc1339710b13f83e46224334fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de14537561f1481fc6d4cf34985d5b794deee8dc1339710b13f83e46224334fd->enter($__internal_de14537561f1481fc6d4cf34985d5b794deee8dc1339710b13f83e46224334fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_de14537561f1481fc6d4cf34985d5b794deee8dc1339710b13f83e46224334fd->leave($__internal_de14537561f1481fc6d4cf34985d5b794deee8dc1339710b13f83e46224334fd_prof);

        
        $__internal_63095da6038e80fffc41a7d60741e5c95ab92c2369e84bfd225735b0964d4b3b->leave($__internal_63095da6038e80fffc41a7d60741e5c95ab92c2369e84bfd225735b0964d4b3b_prof);

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
