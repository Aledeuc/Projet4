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
        $__internal_b8e751f496e07a7389a17b58a1bf6f8de99939662e6bb060ead8697aca79ea97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e751f496e07a7389a17b58a1bf6f8de99939662e6bb060ead8697aca79ea97->enter($__internal_b8e751f496e07a7389a17b58a1bf6f8de99939662e6bb060ead8697aca79ea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b4bb3e83588eb09d302a5bb2344816d5ca7d45c1bd17129ebfc15c8b474dc6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bb3e83588eb09d302a5bb2344816d5ca7d45c1bd17129ebfc15c8b474dc6a0->enter($__internal_b4bb3e83588eb09d302a5bb2344816d5ca7d45c1bd17129ebfc15c8b474dc6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_b8e751f496e07a7389a17b58a1bf6f8de99939662e6bb060ead8697aca79ea97->leave($__internal_b8e751f496e07a7389a17b58a1bf6f8de99939662e6bb060ead8697aca79ea97_prof);

        
        $__internal_b4bb3e83588eb09d302a5bb2344816d5ca7d45c1bd17129ebfc15c8b474dc6a0->leave($__internal_b4bb3e83588eb09d302a5bb2344816d5ca7d45c1bd17129ebfc15c8b474dc6a0_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f43a9afbdb8a68fe15ecf801397a86806e98f56a2c560364a792e23cebdb3190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43a9afbdb8a68fe15ecf801397a86806e98f56a2c560364a792e23cebdb3190->enter($__internal_f43a9afbdb8a68fe15ecf801397a86806e98f56a2c560364a792e23cebdb3190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0982dbc4f40eb1507febdb3ba55e40d391c733b085a84f478753555be2c6dfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0982dbc4f40eb1507febdb3ba55e40d391c733b085a84f478753555be2c6dfd3->enter($__internal_0982dbc4f40eb1507febdb3ba55e40d391c733b085a84f478753555be2c6dfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0982dbc4f40eb1507febdb3ba55e40d391c733b085a84f478753555be2c6dfd3->leave($__internal_0982dbc4f40eb1507febdb3ba55e40d391c733b085a84f478753555be2c6dfd3_prof);

        
        $__internal_f43a9afbdb8a68fe15ecf801397a86806e98f56a2c560364a792e23cebdb3190->leave($__internal_f43a9afbdb8a68fe15ecf801397a86806e98f56a2c560364a792e23cebdb3190_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ba506710e84c5cf99176679b3370fc11272b0ccaf9b120587794a89729ca3332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba506710e84c5cf99176679b3370fc11272b0ccaf9b120587794a89729ca3332->enter($__internal_ba506710e84c5cf99176679b3370fc11272b0ccaf9b120587794a89729ca3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_f76bad85ff3bdf95f79702183f28e4bbae167eba5b58115fc366bea94d046f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76bad85ff3bdf95f79702183f28e4bbae167eba5b58115fc366bea94d046f1e->enter($__internal_f76bad85ff3bdf95f79702183f28e4bbae167eba5b58115fc366bea94d046f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_f76bad85ff3bdf95f79702183f28e4bbae167eba5b58115fc366bea94d046f1e->leave($__internal_f76bad85ff3bdf95f79702183f28e4bbae167eba5b58115fc366bea94d046f1e_prof);

        
        $__internal_ba506710e84c5cf99176679b3370fc11272b0ccaf9b120587794a89729ca3332->leave($__internal_ba506710e84c5cf99176679b3370fc11272b0ccaf9b120587794a89729ca3332_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5fbb9ee18477d0fa9891cbdcf1f1a9f1c946e4f069ab964c1c82c0ccbe715a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbb9ee18477d0fa9891cbdcf1f1a9f1c946e4f069ab964c1c82c0ccbe715a6d->enter($__internal_5fbb9ee18477d0fa9891cbdcf1f1a9f1c946e4f069ab964c1c82c0ccbe715a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_33b3a3233725d830b6317d8393aab846358c38a4d8b03ca54e6102c06daa206e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b3a3233725d830b6317d8393aab846358c38a4d8b03ca54e6102c06daa206e->enter($__internal_33b3a3233725d830b6317d8393aab846358c38a4d8b03ca54e6102c06daa206e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_33b3a3233725d830b6317d8393aab846358c38a4d8b03ca54e6102c06daa206e->leave($__internal_33b3a3233725d830b6317d8393aab846358c38a4d8b03ca54e6102c06daa206e_prof);

        
        $__internal_5fbb9ee18477d0fa9891cbdcf1f1a9f1c946e4f069ab964c1c82c0ccbe715a6d->leave($__internal_5fbb9ee18477d0fa9891cbdcf1f1a9f1c946e4f069ab964c1c82c0ccbe715a6d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f22d804288d63fb8a4bc61703b2197c34e4b083c1a979879d5aaf246df790357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22d804288d63fb8a4bc61703b2197c34e4b083c1a979879d5aaf246df790357->enter($__internal_f22d804288d63fb8a4bc61703b2197c34e4b083c1a979879d5aaf246df790357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_66342d8ca465b4bed8d65c02d8b004040bc26bca0cbe1a1cb0090ae17cb8e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66342d8ca465b4bed8d65c02d8b004040bc26bca0cbe1a1cb0090ae17cb8e321->enter($__internal_66342d8ca465b4bed8d65c02d8b004040bc26bca0cbe1a1cb0090ae17cb8e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_f761189aa2c382a9224cc19818f07d9d749e8758790cdbe434752136d22cfd49 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_dfaaff76b5d46fda409d01bb7858f3c255ca2074cea49d9e97e1713324743f0f = "{{") && ('' === $__internal_dfaaff76b5d46fda409d01bb7858f3c255ca2074cea49d9e97e1713324743f0f || 0 === strpos($__internal_f761189aa2c382a9224cc19818f07d9d749e8758790cdbe434752136d22cfd49, $__internal_dfaaff76b5d46fda409d01bb7858f3c255ca2074cea49d9e97e1713324743f0f)));
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
        
        $__internal_66342d8ca465b4bed8d65c02d8b004040bc26bca0cbe1a1cb0090ae17cb8e321->leave($__internal_66342d8ca465b4bed8d65c02d8b004040bc26bca0cbe1a1cb0090ae17cb8e321_prof);

        
        $__internal_f22d804288d63fb8a4bc61703b2197c34e4b083c1a979879d5aaf246df790357->leave($__internal_f22d804288d63fb8a4bc61703b2197c34e4b083c1a979879d5aaf246df790357_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4560096422c863cc64e8d59018c2169fcd0effbec5b31bbfd70dcfca87a1cef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4560096422c863cc64e8d59018c2169fcd0effbec5b31bbfd70dcfca87a1cef9->enter($__internal_4560096422c863cc64e8d59018c2169fcd0effbec5b31bbfd70dcfca87a1cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6981c70a4760715dbcd27ea917f08b0df212a533b2a4ba8e8c585116354cb849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6981c70a4760715dbcd27ea917f08b0df212a533b2a4ba8e8c585116354cb849->enter($__internal_6981c70a4760715dbcd27ea917f08b0df212a533b2a4ba8e8c585116354cb849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_6981c70a4760715dbcd27ea917f08b0df212a533b2a4ba8e8c585116354cb849->leave($__internal_6981c70a4760715dbcd27ea917f08b0df212a533b2a4ba8e8c585116354cb849_prof);

        
        $__internal_4560096422c863cc64e8d59018c2169fcd0effbec5b31bbfd70dcfca87a1cef9->leave($__internal_4560096422c863cc64e8d59018c2169fcd0effbec5b31bbfd70dcfca87a1cef9_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_22c1ea3fcee36814700ed387c2f40858fc7ede701171b0bc7f2a1fb02a20e65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c1ea3fcee36814700ed387c2f40858fc7ede701171b0bc7f2a1fb02a20e65b->enter($__internal_22c1ea3fcee36814700ed387c2f40858fc7ede701171b0bc7f2a1fb02a20e65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_89febc53e414b6f8662aa48bbe2c84e16f1caa423c2b8aaf656af8442ea8e4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89febc53e414b6f8662aa48bbe2c84e16f1caa423c2b8aaf656af8442ea8e4ec->enter($__internal_89febc53e414b6f8662aa48bbe2c84e16f1caa423c2b8aaf656af8442ea8e4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_89febc53e414b6f8662aa48bbe2c84e16f1caa423c2b8aaf656af8442ea8e4ec->leave($__internal_89febc53e414b6f8662aa48bbe2c84e16f1caa423c2b8aaf656af8442ea8e4ec_prof);

        
        $__internal_22c1ea3fcee36814700ed387c2f40858fc7ede701171b0bc7f2a1fb02a20e65b->leave($__internal_22c1ea3fcee36814700ed387c2f40858fc7ede701171b0bc7f2a1fb02a20e65b_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_01ae264045992f767ad8638eb2098980d639ef648c9f2d782d26f3ba28e29ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ae264045992f767ad8638eb2098980d639ef648c9f2d782d26f3ba28e29ea0->enter($__internal_01ae264045992f767ad8638eb2098980d639ef648c9f2d782d26f3ba28e29ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3111e037f91ac7830dc2184b01a3400a80f85cfff436a9c2485b96f219e5df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3111e037f91ac7830dc2184b01a3400a80f85cfff436a9c2485b96f219e5df53->enter($__internal_3111e037f91ac7830dc2184b01a3400a80f85cfff436a9c2485b96f219e5df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_3111e037f91ac7830dc2184b01a3400a80f85cfff436a9c2485b96f219e5df53->leave($__internal_3111e037f91ac7830dc2184b01a3400a80f85cfff436a9c2485b96f219e5df53_prof);

        
        $__internal_01ae264045992f767ad8638eb2098980d639ef648c9f2d782d26f3ba28e29ea0->leave($__internal_01ae264045992f767ad8638eb2098980d639ef648c9f2d782d26f3ba28e29ea0_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_266ef740fac7ed2842606a70a90246c76af66767424e49cb8e2a9df4cfd63008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266ef740fac7ed2842606a70a90246c76af66767424e49cb8e2a9df4cfd63008->enter($__internal_266ef740fac7ed2842606a70a90246c76af66767424e49cb8e2a9df4cfd63008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_5ce3b6692ae622c75d2944bbab7795ec3e62b584cd69aee2dc93cea9a2f4d1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce3b6692ae622c75d2944bbab7795ec3e62b584cd69aee2dc93cea9a2f4d1fd->enter($__internal_5ce3b6692ae622c75d2944bbab7795ec3e62b584cd69aee2dc93cea9a2f4d1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_5ce3b6692ae622c75d2944bbab7795ec3e62b584cd69aee2dc93cea9a2f4d1fd->leave($__internal_5ce3b6692ae622c75d2944bbab7795ec3e62b584cd69aee2dc93cea9a2f4d1fd_prof);

        
        $__internal_266ef740fac7ed2842606a70a90246c76af66767424e49cb8e2a9df4cfd63008->leave($__internal_266ef740fac7ed2842606a70a90246c76af66767424e49cb8e2a9df4cfd63008_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_788c2e52f5f23bfdccd495f6a13526a5f445508bbbc7593a9f652bbedd582d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788c2e52f5f23bfdccd495f6a13526a5f445508bbbc7593a9f652bbedd582d9b->enter($__internal_788c2e52f5f23bfdccd495f6a13526a5f445508bbbc7593a9f652bbedd582d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_5e8ff04330b555e372bd269b69a8dff9e8d495de4d9d80a8a5fd76ccd07539d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8ff04330b555e372bd269b69a8dff9e8d495de4d9d80a8a5fd76ccd07539d1->enter($__internal_5e8ff04330b555e372bd269b69a8dff9e8d495de4d9d80a8a5fd76ccd07539d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_5e8ff04330b555e372bd269b69a8dff9e8d495de4d9d80a8a5fd76ccd07539d1->leave($__internal_5e8ff04330b555e372bd269b69a8dff9e8d495de4d9d80a8a5fd76ccd07539d1_prof);

        
        $__internal_788c2e52f5f23bfdccd495f6a13526a5f445508bbbc7593a9f652bbedd582d9b->leave($__internal_788c2e52f5f23bfdccd495f6a13526a5f445508bbbc7593a9f652bbedd582d9b_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dd3b2b3d1173b38e6ff4c36e12149cd8f2dc644f94fb0be864dca808e50ec3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3b2b3d1173b38e6ff4c36e12149cd8f2dc644f94fb0be864dca808e50ec3c5->enter($__internal_dd3b2b3d1173b38e6ff4c36e12149cd8f2dc644f94fb0be864dca808e50ec3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_00a56f28343a7497029aea6f22e78835113c7ee83f8abc8605b6687e5ca86b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a56f28343a7497029aea6f22e78835113c7ee83f8abc8605b6687e5ca86b5e->enter($__internal_00a56f28343a7497029aea6f22e78835113c7ee83f8abc8605b6687e5ca86b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_00a56f28343a7497029aea6f22e78835113c7ee83f8abc8605b6687e5ca86b5e->leave($__internal_00a56f28343a7497029aea6f22e78835113c7ee83f8abc8605b6687e5ca86b5e_prof);

        
        $__internal_dd3b2b3d1173b38e6ff4c36e12149cd8f2dc644f94fb0be864dca808e50ec3c5->leave($__internal_dd3b2b3d1173b38e6ff4c36e12149cd8f2dc644f94fb0be864dca808e50ec3c5_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a44a93985d35c4d4b6758930b660a27df3b8b657dc33f300f0aaf311843c9fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44a93985d35c4d4b6758930b660a27df3b8b657dc33f300f0aaf311843c9fa9->enter($__internal_a44a93985d35c4d4b6758930b660a27df3b8b657dc33f300f0aaf311843c9fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d8bede038cdce7f9f15aa8cc815dedc9ceede00e97ae4d5a293df3e97289301a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bede038cdce7f9f15aa8cc815dedc9ceede00e97ae4d5a293df3e97289301a->enter($__internal_d8bede038cdce7f9f15aa8cc815dedc9ceede00e97ae4d5a293df3e97289301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d8bede038cdce7f9f15aa8cc815dedc9ceede00e97ae4d5a293df3e97289301a->leave($__internal_d8bede038cdce7f9f15aa8cc815dedc9ceede00e97ae4d5a293df3e97289301a_prof);

        
        $__internal_a44a93985d35c4d4b6758930b660a27df3b8b657dc33f300f0aaf311843c9fa9->leave($__internal_a44a93985d35c4d4b6758930b660a27df3b8b657dc33f300f0aaf311843c9fa9_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9f259dc7da18f8fcf0abfd8fb663d708a73a10fb0357f5c4e41768fbd3876048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f259dc7da18f8fcf0abfd8fb663d708a73a10fb0357f5c4e41768fbd3876048->enter($__internal_9f259dc7da18f8fcf0abfd8fb663d708a73a10fb0357f5c4e41768fbd3876048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9cab324ad6313fb247f94536b13b09bd81fb8b25c2dd3152fd42b9eda703dab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cab324ad6313fb247f94536b13b09bd81fb8b25c2dd3152fd42b9eda703dab9->enter($__internal_9cab324ad6313fb247f94536b13b09bd81fb8b25c2dd3152fd42b9eda703dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9cab324ad6313fb247f94536b13b09bd81fb8b25c2dd3152fd42b9eda703dab9->leave($__internal_9cab324ad6313fb247f94536b13b09bd81fb8b25c2dd3152fd42b9eda703dab9_prof);

        
        $__internal_9f259dc7da18f8fcf0abfd8fb663d708a73a10fb0357f5c4e41768fbd3876048->leave($__internal_9f259dc7da18f8fcf0abfd8fb663d708a73a10fb0357f5c4e41768fbd3876048_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_45b3dee6c51f525f99df11efb79319a7748e5e44d712704b7993ab0de30398de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b3dee6c51f525f99df11efb79319a7748e5e44d712704b7993ab0de30398de->enter($__internal_45b3dee6c51f525f99df11efb79319a7748e5e44d712704b7993ab0de30398de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_dadc32142c5ccb07e635b65416830423cbfb8bb8019d35f71ff3c3e4040f6068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadc32142c5ccb07e635b65416830423cbfb8bb8019d35f71ff3c3e4040f6068->enter($__internal_dadc32142c5ccb07e635b65416830423cbfb8bb8019d35f71ff3c3e4040f6068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_dadc32142c5ccb07e635b65416830423cbfb8bb8019d35f71ff3c3e4040f6068->leave($__internal_dadc32142c5ccb07e635b65416830423cbfb8bb8019d35f71ff3c3e4040f6068_prof);

        
        $__internal_45b3dee6c51f525f99df11efb79319a7748e5e44d712704b7993ab0de30398de->leave($__internal_45b3dee6c51f525f99df11efb79319a7748e5e44d712704b7993ab0de30398de_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5e700d9263334b3e870b4541c1c6f7d8ac79792f867b9bd0993ccdf6a01e23f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e700d9263334b3e870b4541c1c6f7d8ac79792f867b9bd0993ccdf6a01e23f1->enter($__internal_5e700d9263334b3e870b4541c1c6f7d8ac79792f867b9bd0993ccdf6a01e23f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1e83c9cbb1afcc9fc01a4117ad08cc527bfffcdf550fcc7197c04663328de71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e83c9cbb1afcc9fc01a4117ad08cc527bfffcdf550fcc7197c04663328de71a->enter($__internal_1e83c9cbb1afcc9fc01a4117ad08cc527bfffcdf550fcc7197c04663328de71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1e83c9cbb1afcc9fc01a4117ad08cc527bfffcdf550fcc7197c04663328de71a->leave($__internal_1e83c9cbb1afcc9fc01a4117ad08cc527bfffcdf550fcc7197c04663328de71a_prof);

        
        $__internal_5e700d9263334b3e870b4541c1c6f7d8ac79792f867b9bd0993ccdf6a01e23f1->leave($__internal_5e700d9263334b3e870b4541c1c6f7d8ac79792f867b9bd0993ccdf6a01e23f1_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5c768a31992cc5f163895274b52482d1656607b5965df87b0bff1703f44c3242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c768a31992cc5f163895274b52482d1656607b5965df87b0bff1703f44c3242->enter($__internal_5c768a31992cc5f163895274b52482d1656607b5965df87b0bff1703f44c3242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0f7a7a7749a319ff9ea0b46cc1ee2e4cce64e386f4902fa7aaad9534f7a83144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7a7a7749a319ff9ea0b46cc1ee2e4cce64e386f4902fa7aaad9534f7a83144->enter($__internal_0f7a7a7749a319ff9ea0b46cc1ee2e4cce64e386f4902fa7aaad9534f7a83144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0f7a7a7749a319ff9ea0b46cc1ee2e4cce64e386f4902fa7aaad9534f7a83144->leave($__internal_0f7a7a7749a319ff9ea0b46cc1ee2e4cce64e386f4902fa7aaad9534f7a83144_prof);

        
        $__internal_5c768a31992cc5f163895274b52482d1656607b5965df87b0bff1703f44c3242->leave($__internal_5c768a31992cc5f163895274b52482d1656607b5965df87b0bff1703f44c3242_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6182ea3da90e6f209412196a95503746fd168e4e9e694c04d52f1ee05cd461e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6182ea3da90e6f209412196a95503746fd168e4e9e694c04d52f1ee05cd461e8->enter($__internal_6182ea3da90e6f209412196a95503746fd168e4e9e694c04d52f1ee05cd461e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7f20581f60147611201ad7d76b02f48fed5fe152b116d885a452aa5f2dd233e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f20581f60147611201ad7d76b02f48fed5fe152b116d885a452aa5f2dd233e5->enter($__internal_7f20581f60147611201ad7d76b02f48fed5fe152b116d885a452aa5f2dd233e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7f20581f60147611201ad7d76b02f48fed5fe152b116d885a452aa5f2dd233e5->leave($__internal_7f20581f60147611201ad7d76b02f48fed5fe152b116d885a452aa5f2dd233e5_prof);

        
        $__internal_6182ea3da90e6f209412196a95503746fd168e4e9e694c04d52f1ee05cd461e8->leave($__internal_6182ea3da90e6f209412196a95503746fd168e4e9e694c04d52f1ee05cd461e8_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4067cec6f8c31e3e25b4d237dcd7424beec5fd846a5c8caf3cb0053a94bd8d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4067cec6f8c31e3e25b4d237dcd7424beec5fd846a5c8caf3cb0053a94bd8d4e->enter($__internal_4067cec6f8c31e3e25b4d237dcd7424beec5fd846a5c8caf3cb0053a94bd8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e958461bc397cb5f112642e7c2789ae4df45faac275a363033f3b0ee344d649c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e958461bc397cb5f112642e7c2789ae4df45faac275a363033f3b0ee344d649c->enter($__internal_e958461bc397cb5f112642e7c2789ae4df45faac275a363033f3b0ee344d649c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e958461bc397cb5f112642e7c2789ae4df45faac275a363033f3b0ee344d649c->leave($__internal_e958461bc397cb5f112642e7c2789ae4df45faac275a363033f3b0ee344d649c_prof);

        
        $__internal_4067cec6f8c31e3e25b4d237dcd7424beec5fd846a5c8caf3cb0053a94bd8d4e->leave($__internal_4067cec6f8c31e3e25b4d237dcd7424beec5fd846a5c8caf3cb0053a94bd8d4e_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c5545a37c43e34c14cd745d56a043405d12f9ab465b37a42e5c9afd65deadb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5545a37c43e34c14cd745d56a043405d12f9ab465b37a42e5c9afd65deadb37->enter($__internal_c5545a37c43e34c14cd745d56a043405d12f9ab465b37a42e5c9afd65deadb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2b251e060bbd62899f5cb10d0a81be1a6c51b14c6d05f2a5db1d6834c4ec6dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b251e060bbd62899f5cb10d0a81be1a6c51b14c6d05f2a5db1d6834c4ec6dd5->enter($__internal_2b251e060bbd62899f5cb10d0a81be1a6c51b14c6d05f2a5db1d6834c4ec6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_2b251e060bbd62899f5cb10d0a81be1a6c51b14c6d05f2a5db1d6834c4ec6dd5->leave($__internal_2b251e060bbd62899f5cb10d0a81be1a6c51b14c6d05f2a5db1d6834c4ec6dd5_prof);

        
        $__internal_c5545a37c43e34c14cd745d56a043405d12f9ab465b37a42e5c9afd65deadb37->leave($__internal_c5545a37c43e34c14cd745d56a043405d12f9ab465b37a42e5c9afd65deadb37_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_411bda43f4a9ee6fca8e8b91910205f4731f9343dc4d8bace84ba8b0ed2f3e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411bda43f4a9ee6fca8e8b91910205f4731f9343dc4d8bace84ba8b0ed2f3e42->enter($__internal_411bda43f4a9ee6fca8e8b91910205f4731f9343dc4d8bace84ba8b0ed2f3e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f509a66bff1714707303e56c0cf3ff8d344b9ba5163f03ab8196a6e8bef0a6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f509a66bff1714707303e56c0cf3ff8d344b9ba5163f03ab8196a6e8bef0a6c5->enter($__internal_f509a66bff1714707303e56c0cf3ff8d344b9ba5163f03ab8196a6e8bef0a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f509a66bff1714707303e56c0cf3ff8d344b9ba5163f03ab8196a6e8bef0a6c5->leave($__internal_f509a66bff1714707303e56c0cf3ff8d344b9ba5163f03ab8196a6e8bef0a6c5_prof);

        
        $__internal_411bda43f4a9ee6fca8e8b91910205f4731f9343dc4d8bace84ba8b0ed2f3e42->leave($__internal_411bda43f4a9ee6fca8e8b91910205f4731f9343dc4d8bace84ba8b0ed2f3e42_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_992b45251107c552c307be0186c301af1cd2fb3876dd2e4bb59f5dd94f3f1b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992b45251107c552c307be0186c301af1cd2fb3876dd2e4bb59f5dd94f3f1b4a->enter($__internal_992b45251107c552c307be0186c301af1cd2fb3876dd2e4bb59f5dd94f3f1b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_edcd012d9d3b24587f52dd3e087dbd4f0f4101eb086fec82d52fb6a7bb25012d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edcd012d9d3b24587f52dd3e087dbd4f0f4101eb086fec82d52fb6a7bb25012d->enter($__internal_edcd012d9d3b24587f52dd3e087dbd4f0f4101eb086fec82d52fb6a7bb25012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_edcd012d9d3b24587f52dd3e087dbd4f0f4101eb086fec82d52fb6a7bb25012d->leave($__internal_edcd012d9d3b24587f52dd3e087dbd4f0f4101eb086fec82d52fb6a7bb25012d_prof);

        
        $__internal_992b45251107c552c307be0186c301af1cd2fb3876dd2e4bb59f5dd94f3f1b4a->leave($__internal_992b45251107c552c307be0186c301af1cd2fb3876dd2e4bb59f5dd94f3f1b4a_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5db69c9ba2754ed11abce9ffb64563077809c1b677c1aa083f418855946ce4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db69c9ba2754ed11abce9ffb64563077809c1b677c1aa083f418855946ce4be->enter($__internal_5db69c9ba2754ed11abce9ffb64563077809c1b677c1aa083f418855946ce4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8cdecdc763497c87f631031cf1ad9db3188771d3b46fec4d2ef7f682441a2752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdecdc763497c87f631031cf1ad9db3188771d3b46fec4d2ef7f682441a2752->enter($__internal_8cdecdc763497c87f631031cf1ad9db3188771d3b46fec4d2ef7f682441a2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cdecdc763497c87f631031cf1ad9db3188771d3b46fec4d2ef7f682441a2752->leave($__internal_8cdecdc763497c87f631031cf1ad9db3188771d3b46fec4d2ef7f682441a2752_prof);

        
        $__internal_5db69c9ba2754ed11abce9ffb64563077809c1b677c1aa083f418855946ce4be->leave($__internal_5db69c9ba2754ed11abce9ffb64563077809c1b677c1aa083f418855946ce4be_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d2d883ee1553444bf68a4b0b8194a08291701d3eabc7132a6c447d4b8ef0c0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d883ee1553444bf68a4b0b8194a08291701d3eabc7132a6c447d4b8ef0c0f7->enter($__internal_d2d883ee1553444bf68a4b0b8194a08291701d3eabc7132a6c447d4b8ef0c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9102ac490a4b63425267d7a8486ab83f1eaeb0b4862201178f6b552d627c765f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9102ac490a4b63425267d7a8486ab83f1eaeb0b4862201178f6b552d627c765f->enter($__internal_9102ac490a4b63425267d7a8486ab83f1eaeb0b4862201178f6b552d627c765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9102ac490a4b63425267d7a8486ab83f1eaeb0b4862201178f6b552d627c765f->leave($__internal_9102ac490a4b63425267d7a8486ab83f1eaeb0b4862201178f6b552d627c765f_prof);

        
        $__internal_d2d883ee1553444bf68a4b0b8194a08291701d3eabc7132a6c447d4b8ef0c0f7->leave($__internal_d2d883ee1553444bf68a4b0b8194a08291701d3eabc7132a6c447d4b8ef0c0f7_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c3127b26003c81b3034d8bd994f42517ce9aa5c895a8eb219fc6020898be6168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3127b26003c81b3034d8bd994f42517ce9aa5c895a8eb219fc6020898be6168->enter($__internal_c3127b26003c81b3034d8bd994f42517ce9aa5c895a8eb219fc6020898be6168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4d789dc0fa8a48b145ac7c71c6d2ab552117c9bbe9399ad02b9036abf093fb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d789dc0fa8a48b145ac7c71c6d2ab552117c9bbe9399ad02b9036abf093fb11->enter($__internal_4d789dc0fa8a48b145ac7c71c6d2ab552117c9bbe9399ad02b9036abf093fb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4d789dc0fa8a48b145ac7c71c6d2ab552117c9bbe9399ad02b9036abf093fb11->leave($__internal_4d789dc0fa8a48b145ac7c71c6d2ab552117c9bbe9399ad02b9036abf093fb11_prof);

        
        $__internal_c3127b26003c81b3034d8bd994f42517ce9aa5c895a8eb219fc6020898be6168->leave($__internal_c3127b26003c81b3034d8bd994f42517ce9aa5c895a8eb219fc6020898be6168_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_7a384d91c0cfc93d4439a89fc245996e1925ecf9e209d57c19ec289f7ba3971c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a384d91c0cfc93d4439a89fc245996e1925ecf9e209d57c19ec289f7ba3971c->enter($__internal_7a384d91c0cfc93d4439a89fc245996e1925ecf9e209d57c19ec289f7ba3971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b3c9bfe3f8c62625155894372f8774a9fa2f22cd3b486ce103ae20867bdef4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c9bfe3f8c62625155894372f8774a9fa2f22cd3b486ce103ae20867bdef4b8->enter($__internal_b3c9bfe3f8c62625155894372f8774a9fa2f22cd3b486ce103ae20867bdef4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b3c9bfe3f8c62625155894372f8774a9fa2f22cd3b486ce103ae20867bdef4b8->leave($__internal_b3c9bfe3f8c62625155894372f8774a9fa2f22cd3b486ce103ae20867bdef4b8_prof);

        
        $__internal_7a384d91c0cfc93d4439a89fc245996e1925ecf9e209d57c19ec289f7ba3971c->leave($__internal_7a384d91c0cfc93d4439a89fc245996e1925ecf9e209d57c19ec289f7ba3971c_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6792966e4321674e01beac8abe091c797e6d0ea5f9f2155ee5400cc94d76b03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6792966e4321674e01beac8abe091c797e6d0ea5f9f2155ee5400cc94d76b03a->enter($__internal_6792966e4321674e01beac8abe091c797e6d0ea5f9f2155ee5400cc94d76b03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cd09afe626bf9f9959223e5d79307d6f011bf3efdf1ead63f66a153e733f1eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd09afe626bf9f9959223e5d79307d6f011bf3efdf1ead63f66a153e733f1eea->enter($__internal_cd09afe626bf9f9959223e5d79307d6f011bf3efdf1ead63f66a153e733f1eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cd09afe626bf9f9959223e5d79307d6f011bf3efdf1ead63f66a153e733f1eea->leave($__internal_cd09afe626bf9f9959223e5d79307d6f011bf3efdf1ead63f66a153e733f1eea_prof);

        
        $__internal_6792966e4321674e01beac8abe091c797e6d0ea5f9f2155ee5400cc94d76b03a->leave($__internal_6792966e4321674e01beac8abe091c797e6d0ea5f9f2155ee5400cc94d76b03a_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8de82211ae16edd66f9d072fb6a6934a3cada0f4618837b9996297c36374b24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de82211ae16edd66f9d072fb6a6934a3cada0f4618837b9996297c36374b24d->enter($__internal_8de82211ae16edd66f9d072fb6a6934a3cada0f4618837b9996297c36374b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b5e05b769b648290252788d767a9371cf47331123c04c9cfc1e7d7a9b769af42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e05b769b648290252788d767a9371cf47331123c04c9cfc1e7d7a9b769af42->enter($__internal_b5e05b769b648290252788d767a9371cf47331123c04c9cfc1e7d7a9b769af42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b5e05b769b648290252788d767a9371cf47331123c04c9cfc1e7d7a9b769af42->leave($__internal_b5e05b769b648290252788d767a9371cf47331123c04c9cfc1e7d7a9b769af42_prof);

        
        $__internal_8de82211ae16edd66f9d072fb6a6934a3cada0f4618837b9996297c36374b24d->leave($__internal_8de82211ae16edd66f9d072fb6a6934a3cada0f4618837b9996297c36374b24d_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3143bdb6525f3c8127f9ee83e978782b440534fc1ffd6e9ffc942be9a215f093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3143bdb6525f3c8127f9ee83e978782b440534fc1ffd6e9ffc942be9a215f093->enter($__internal_3143bdb6525f3c8127f9ee83e978782b440534fc1ffd6e9ffc942be9a215f093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b0347ea5d9bf8fa68895dd52a35516b94ac0ff808f285b48bb9c20f5c390194f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0347ea5d9bf8fa68895dd52a35516b94ac0ff808f285b48bb9c20f5c390194f->enter($__internal_b0347ea5d9bf8fa68895dd52a35516b94ac0ff808f285b48bb9c20f5c390194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_b0347ea5d9bf8fa68895dd52a35516b94ac0ff808f285b48bb9c20f5c390194f->leave($__internal_b0347ea5d9bf8fa68895dd52a35516b94ac0ff808f285b48bb9c20f5c390194f_prof);

        
        $__internal_3143bdb6525f3c8127f9ee83e978782b440534fc1ffd6e9ffc942be9a215f093->leave($__internal_3143bdb6525f3c8127f9ee83e978782b440534fc1ffd6e9ffc942be9a215f093_prof);

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
