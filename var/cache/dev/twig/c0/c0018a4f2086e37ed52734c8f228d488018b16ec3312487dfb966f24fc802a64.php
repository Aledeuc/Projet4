<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3e8aa2a8526e3f074d9a1dcef3cf2ff715b05e24568d1503a5d1d06f41a5edc8 extends Twig_Template
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
        $__internal_67b4b764762ced5f03392f16fafcafdb5fd9b30d829b8ae693a60995f318c865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b4b764762ced5f03392f16fafcafdb5fd9b30d829b8ae693a60995f318c865->enter($__internal_67b4b764762ced5f03392f16fafcafdb5fd9b30d829b8ae693a60995f318c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9609827f48fb8c49db51a455ec501175d5ff8a336286ee9cf8095a0d6466f40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9609827f48fb8c49db51a455ec501175d5ff8a336286ee9cf8095a0d6466f40c->enter($__internal_9609827f48fb8c49db51a455ec501175d5ff8a336286ee9cf8095a0d6466f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_67b4b764762ced5f03392f16fafcafdb5fd9b30d829b8ae693a60995f318c865->leave($__internal_67b4b764762ced5f03392f16fafcafdb5fd9b30d829b8ae693a60995f318c865_prof);

        
        $__internal_9609827f48fb8c49db51a455ec501175d5ff8a336286ee9cf8095a0d6466f40c->leave($__internal_9609827f48fb8c49db51a455ec501175d5ff8a336286ee9cf8095a0d6466f40c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2579124117e914a23bfcae45a5f44d3537866ede8fa5d01634cb4f47f3f3eebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2579124117e914a23bfcae45a5f44d3537866ede8fa5d01634cb4f47f3f3eebf->enter($__internal_2579124117e914a23bfcae45a5f44d3537866ede8fa5d01634cb4f47f3f3eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f568794af7645ac2d4ff6baa70a5ebd638706abcd8f7f1a860625fcdf05eb06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f568794af7645ac2d4ff6baa70a5ebd638706abcd8f7f1a860625fcdf05eb06a->enter($__internal_f568794af7645ac2d4ff6baa70a5ebd638706abcd8f7f1a860625fcdf05eb06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f568794af7645ac2d4ff6baa70a5ebd638706abcd8f7f1a860625fcdf05eb06a->leave($__internal_f568794af7645ac2d4ff6baa70a5ebd638706abcd8f7f1a860625fcdf05eb06a_prof);

        
        $__internal_2579124117e914a23bfcae45a5f44d3537866ede8fa5d01634cb4f47f3f3eebf->leave($__internal_2579124117e914a23bfcae45a5f44d3537866ede8fa5d01634cb4f47f3f3eebf_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4a1f083dc439b16178e337b9b78f85a9b4b766948b4195b4e7e25f74dd922999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1f083dc439b16178e337b9b78f85a9b4b766948b4195b4e7e25f74dd922999->enter($__internal_4a1f083dc439b16178e337b9b78f85a9b4b766948b4195b4e7e25f74dd922999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1581bbce39ac7eb315003f24d74103cecc4a13a4a6ac97f1d321ad6c0e5ad4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1581bbce39ac7eb315003f24d74103cecc4a13a4a6ac97f1d321ad6c0e5ad4fe->enter($__internal_1581bbce39ac7eb315003f24d74103cecc4a13a4a6ac97f1d321ad6c0e5ad4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1581bbce39ac7eb315003f24d74103cecc4a13a4a6ac97f1d321ad6c0e5ad4fe->leave($__internal_1581bbce39ac7eb315003f24d74103cecc4a13a4a6ac97f1d321ad6c0e5ad4fe_prof);

        
        $__internal_4a1f083dc439b16178e337b9b78f85a9b4b766948b4195b4e7e25f74dd922999->leave($__internal_4a1f083dc439b16178e337b9b78f85a9b4b766948b4195b4e7e25f74dd922999_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_471d1176295334d18a97358512629bfef3fc871c76c7715bd03a5fa8cef6f3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471d1176295334d18a97358512629bfef3fc871c76c7715bd03a5fa8cef6f3fd->enter($__internal_471d1176295334d18a97358512629bfef3fc871c76c7715bd03a5fa8cef6f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b36e10453f6455f1f4326526991a61cf83e72bedeb6ab3094e8a0b0a1de98836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36e10453f6455f1f4326526991a61cf83e72bedeb6ab3094e8a0b0a1de98836->enter($__internal_b36e10453f6455f1f4326526991a61cf83e72bedeb6ab3094e8a0b0a1de98836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b36e10453f6455f1f4326526991a61cf83e72bedeb6ab3094e8a0b0a1de98836->leave($__internal_b36e10453f6455f1f4326526991a61cf83e72bedeb6ab3094e8a0b0a1de98836_prof);

        
        $__internal_471d1176295334d18a97358512629bfef3fc871c76c7715bd03a5fa8cef6f3fd->leave($__internal_471d1176295334d18a97358512629bfef3fc871c76c7715bd03a5fa8cef6f3fd_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6272b4976ff91bc79752c8c7d22e3ffae996bd8d8308175bd605f68d264aaf94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6272b4976ff91bc79752c8c7d22e3ffae996bd8d8308175bd605f68d264aaf94->enter($__internal_6272b4976ff91bc79752c8c7d22e3ffae996bd8d8308175bd605f68d264aaf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f45769dfdb3090b3fc535feef8fea2b996965262668b16e34a2b7fb122d4bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45769dfdb3090b3fc535feef8fea2b996965262668b16e34a2b7fb122d4bb10->enter($__internal_f45769dfdb3090b3fc535feef8fea2b996965262668b16e34a2b7fb122d4bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_d6a745f87f558b69902e871295d1fc94f701b2c2fec40e5d71e72db607d84a8c = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1480eb9d927de3fd9924c8e21764afc76fb752087ed9499065c91a1676465697 = "{{") && ('' === $__internal_1480eb9d927de3fd9924c8e21764afc76fb752087ed9499065c91a1676465697 || 0 === strpos($__internal_d6a745f87f558b69902e871295d1fc94f701b2c2fec40e5d71e72db607d84a8c, $__internal_1480eb9d927de3fd9924c8e21764afc76fb752087ed9499065c91a1676465697)));
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
        
        $__internal_f45769dfdb3090b3fc535feef8fea2b996965262668b16e34a2b7fb122d4bb10->leave($__internal_f45769dfdb3090b3fc535feef8fea2b996965262668b16e34a2b7fb122d4bb10_prof);

        
        $__internal_6272b4976ff91bc79752c8c7d22e3ffae996bd8d8308175bd605f68d264aaf94->leave($__internal_6272b4976ff91bc79752c8c7d22e3ffae996bd8d8308175bd605f68d264aaf94_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fdcf8f091d001789263199f3aae256facf8b2ab118c2d6a7815dfd4fbb2b2a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdcf8f091d001789263199f3aae256facf8b2ab118c2d6a7815dfd4fbb2b2a79->enter($__internal_fdcf8f091d001789263199f3aae256facf8b2ab118c2d6a7815dfd4fbb2b2a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9088ea2b24e247ef6e7d8d547d0c5465a848cbb4c05bcbeca32eeb5c95255ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9088ea2b24e247ef6e7d8d547d0c5465a848cbb4c05bcbeca32eeb5c95255ca8->enter($__internal_9088ea2b24e247ef6e7d8d547d0c5465a848cbb4c05bcbeca32eeb5c95255ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9088ea2b24e247ef6e7d8d547d0c5465a848cbb4c05bcbeca32eeb5c95255ca8->leave($__internal_9088ea2b24e247ef6e7d8d547d0c5465a848cbb4c05bcbeca32eeb5c95255ca8_prof);

        
        $__internal_fdcf8f091d001789263199f3aae256facf8b2ab118c2d6a7815dfd4fbb2b2a79->leave($__internal_fdcf8f091d001789263199f3aae256facf8b2ab118c2d6a7815dfd4fbb2b2a79_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8a96138c3053b63d770295213f604313660e4f04c1600a8d516cda3368681ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a96138c3053b63d770295213f604313660e4f04c1600a8d516cda3368681ccd->enter($__internal_8a96138c3053b63d770295213f604313660e4f04c1600a8d516cda3368681ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3af24ee7055027a89fbee926ec83123dfc1b36f05bdc46331354c9d57b549f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af24ee7055027a89fbee926ec83123dfc1b36f05bdc46331354c9d57b549f57->enter($__internal_3af24ee7055027a89fbee926ec83123dfc1b36f05bdc46331354c9d57b549f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_3af24ee7055027a89fbee926ec83123dfc1b36f05bdc46331354c9d57b549f57->leave($__internal_3af24ee7055027a89fbee926ec83123dfc1b36f05bdc46331354c9d57b549f57_prof);

        
        $__internal_8a96138c3053b63d770295213f604313660e4f04c1600a8d516cda3368681ccd->leave($__internal_8a96138c3053b63d770295213f604313660e4f04c1600a8d516cda3368681ccd_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_db5d585e73b66ebf74d608c15fa7ad2fb1a283420633e8df0b90487c85f89c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5d585e73b66ebf74d608c15fa7ad2fb1a283420633e8df0b90487c85f89c3c->enter($__internal_db5d585e73b66ebf74d608c15fa7ad2fb1a283420633e8df0b90487c85f89c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f80ac329de760b2ac58ba5c23429570ca3b667350b894ce8b35433aef1283086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80ac329de760b2ac58ba5c23429570ca3b667350b894ce8b35433aef1283086->enter($__internal_f80ac329de760b2ac58ba5c23429570ca3b667350b894ce8b35433aef1283086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_f80ac329de760b2ac58ba5c23429570ca3b667350b894ce8b35433aef1283086->leave($__internal_f80ac329de760b2ac58ba5c23429570ca3b667350b894ce8b35433aef1283086_prof);

        
        $__internal_db5d585e73b66ebf74d608c15fa7ad2fb1a283420633e8df0b90487c85f89c3c->leave($__internal_db5d585e73b66ebf74d608c15fa7ad2fb1a283420633e8df0b90487c85f89c3c_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_316eebc2bb4891345c39dbdc3cfc86fdb5f4608fceb8ec85270d849a98e98f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316eebc2bb4891345c39dbdc3cfc86fdb5f4608fceb8ec85270d849a98e98f72->enter($__internal_316eebc2bb4891345c39dbdc3cfc86fdb5f4608fceb8ec85270d849a98e98f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3b6572b7deec7d4325256a6dcc36ad2889b0e5dc2978984a9a0793e4de2a5d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6572b7deec7d4325256a6dcc36ad2889b0e5dc2978984a9a0793e4de2a5d9b->enter($__internal_3b6572b7deec7d4325256a6dcc36ad2889b0e5dc2978984a9a0793e4de2a5d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_3b6572b7deec7d4325256a6dcc36ad2889b0e5dc2978984a9a0793e4de2a5d9b->leave($__internal_3b6572b7deec7d4325256a6dcc36ad2889b0e5dc2978984a9a0793e4de2a5d9b_prof);

        
        $__internal_316eebc2bb4891345c39dbdc3cfc86fdb5f4608fceb8ec85270d849a98e98f72->leave($__internal_316eebc2bb4891345c39dbdc3cfc86fdb5f4608fceb8ec85270d849a98e98f72_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5e863125b2c5aa3563c8c970ba91ef5f69fb019865641fdb5d05a256d2bc6bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e863125b2c5aa3563c8c970ba91ef5f69fb019865641fdb5d05a256d2bc6bd1->enter($__internal_5e863125b2c5aa3563c8c970ba91ef5f69fb019865641fdb5d05a256d2bc6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_a029f671d19cd553a9c056b478ab4683504791f8c1a85c55e8b59ecc344356b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a029f671d19cd553a9c056b478ab4683504791f8c1a85c55e8b59ecc344356b8->enter($__internal_a029f671d19cd553a9c056b478ab4683504791f8c1a85c55e8b59ecc344356b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_a029f671d19cd553a9c056b478ab4683504791f8c1a85c55e8b59ecc344356b8->leave($__internal_a029f671d19cd553a9c056b478ab4683504791f8c1a85c55e8b59ecc344356b8_prof);

        
        $__internal_5e863125b2c5aa3563c8c970ba91ef5f69fb019865641fdb5d05a256d2bc6bd1->leave($__internal_5e863125b2c5aa3563c8c970ba91ef5f69fb019865641fdb5d05a256d2bc6bd1_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_46add718cc5070ab0aa67f40928ffa98b5c8c928b3f07966592b8823592f7247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46add718cc5070ab0aa67f40928ffa98b5c8c928b3f07966592b8823592f7247->enter($__internal_46add718cc5070ab0aa67f40928ffa98b5c8c928b3f07966592b8823592f7247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fee89a2f50648eef33d9ec97c32274defd6856a1c91a8440e160198c6e50283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee89a2f50648eef33d9ec97c32274defd6856a1c91a8440e160198c6e50283b->enter($__internal_fee89a2f50648eef33d9ec97c32274defd6856a1c91a8440e160198c6e50283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_fee89a2f50648eef33d9ec97c32274defd6856a1c91a8440e160198c6e50283b->leave($__internal_fee89a2f50648eef33d9ec97c32274defd6856a1c91a8440e160198c6e50283b_prof);

        
        $__internal_46add718cc5070ab0aa67f40928ffa98b5c8c928b3f07966592b8823592f7247->leave($__internal_46add718cc5070ab0aa67f40928ffa98b5c8c928b3f07966592b8823592f7247_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f2efcb10c892221b8b4ab50b1ace6de059c25409da7e9fd62b1df31566fc5c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2efcb10c892221b8b4ab50b1ace6de059c25409da7e9fd62b1df31566fc5c12->enter($__internal_f2efcb10c892221b8b4ab50b1ace6de059c25409da7e9fd62b1df31566fc5c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6b0a2de87895fd915f3919147e32a5683157b698470dde11eb9cb8892dacdf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0a2de87895fd915f3919147e32a5683157b698470dde11eb9cb8892dacdf94->enter($__internal_6b0a2de87895fd915f3919147e32a5683157b698470dde11eb9cb8892dacdf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_6b0a2de87895fd915f3919147e32a5683157b698470dde11eb9cb8892dacdf94->leave($__internal_6b0a2de87895fd915f3919147e32a5683157b698470dde11eb9cb8892dacdf94_prof);

        
        $__internal_f2efcb10c892221b8b4ab50b1ace6de059c25409da7e9fd62b1df31566fc5c12->leave($__internal_f2efcb10c892221b8b4ab50b1ace6de059c25409da7e9fd62b1df31566fc5c12_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cc485a165202242dd9de8259477dafba88c9e134e99d0d2f2d89ba4af85105d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc485a165202242dd9de8259477dafba88c9e134e99d0d2f2d89ba4af85105d9->enter($__internal_cc485a165202242dd9de8259477dafba88c9e134e99d0d2f2d89ba4af85105d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f7d4fb4e99b53978518a4fa0c6e07e653fa29fce21b546811a6f7cb21868e143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d4fb4e99b53978518a4fa0c6e07e653fa29fce21b546811a6f7cb21868e143->enter($__internal_f7d4fb4e99b53978518a4fa0c6e07e653fa29fce21b546811a6f7cb21868e143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f7d4fb4e99b53978518a4fa0c6e07e653fa29fce21b546811a6f7cb21868e143->leave($__internal_f7d4fb4e99b53978518a4fa0c6e07e653fa29fce21b546811a6f7cb21868e143_prof);

        
        $__internal_cc485a165202242dd9de8259477dafba88c9e134e99d0d2f2d89ba4af85105d9->leave($__internal_cc485a165202242dd9de8259477dafba88c9e134e99d0d2f2d89ba4af85105d9_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_75b5e75d6b3581a72dfdae3f93a8a663ce40655ec52c662a767d4e27b4590d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b5e75d6b3581a72dfdae3f93a8a663ce40655ec52c662a767d4e27b4590d58->enter($__internal_75b5e75d6b3581a72dfdae3f93a8a663ce40655ec52c662a767d4e27b4590d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0cf44bf6f8d2795eba965c89015aee776dab4c7daa51cd615df123ec503e3d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf44bf6f8d2795eba965c89015aee776dab4c7daa51cd615df123ec503e3d70->enter($__internal_0cf44bf6f8d2795eba965c89015aee776dab4c7daa51cd615df123ec503e3d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0cf44bf6f8d2795eba965c89015aee776dab4c7daa51cd615df123ec503e3d70->leave($__internal_0cf44bf6f8d2795eba965c89015aee776dab4c7daa51cd615df123ec503e3d70_prof);

        
        $__internal_75b5e75d6b3581a72dfdae3f93a8a663ce40655ec52c662a767d4e27b4590d58->leave($__internal_75b5e75d6b3581a72dfdae3f93a8a663ce40655ec52c662a767d4e27b4590d58_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_95e58c2285946e1b3f9bf43e8ae30226576acc7278d1ee0c7135df560a208e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e58c2285946e1b3f9bf43e8ae30226576acc7278d1ee0c7135df560a208e17->enter($__internal_95e58c2285946e1b3f9bf43e8ae30226576acc7278d1ee0c7135df560a208e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fee3230fae549ca1771dd90eb747dbde3fb53a0d1b4f19cf13ab1fab7e885db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee3230fae549ca1771dd90eb747dbde3fb53a0d1b4f19cf13ab1fab7e885db6->enter($__internal_fee3230fae549ca1771dd90eb747dbde3fb53a0d1b4f19cf13ab1fab7e885db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fee3230fae549ca1771dd90eb747dbde3fb53a0d1b4f19cf13ab1fab7e885db6->leave($__internal_fee3230fae549ca1771dd90eb747dbde3fb53a0d1b4f19cf13ab1fab7e885db6_prof);

        
        $__internal_95e58c2285946e1b3f9bf43e8ae30226576acc7278d1ee0c7135df560a208e17->leave($__internal_95e58c2285946e1b3f9bf43e8ae30226576acc7278d1ee0c7135df560a208e17_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_554c5c8155e5cea402a9a5052d8634cae24012b3ef858e1bc1ed9103b3b1ee29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554c5c8155e5cea402a9a5052d8634cae24012b3ef858e1bc1ed9103b3b1ee29->enter($__internal_554c5c8155e5cea402a9a5052d8634cae24012b3ef858e1bc1ed9103b3b1ee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_081e4e52462e68a68f0f7e8e36fdd127760d0091016ff3966b5dae2f52782a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081e4e52462e68a68f0f7e8e36fdd127760d0091016ff3966b5dae2f52782a4d->enter($__internal_081e4e52462e68a68f0f7e8e36fdd127760d0091016ff3966b5dae2f52782a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_081e4e52462e68a68f0f7e8e36fdd127760d0091016ff3966b5dae2f52782a4d->leave($__internal_081e4e52462e68a68f0f7e8e36fdd127760d0091016ff3966b5dae2f52782a4d_prof);

        
        $__internal_554c5c8155e5cea402a9a5052d8634cae24012b3ef858e1bc1ed9103b3b1ee29->leave($__internal_554c5c8155e5cea402a9a5052d8634cae24012b3ef858e1bc1ed9103b3b1ee29_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ab8650584a0c92748e4adae24f44741ba504b09f8721746bc12e19200ee1a320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8650584a0c92748e4adae24f44741ba504b09f8721746bc12e19200ee1a320->enter($__internal_ab8650584a0c92748e4adae24f44741ba504b09f8721746bc12e19200ee1a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0a779c82aea69214df40d94077ceb5af668111f36ca7ec3efd4434f5d0781844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a779c82aea69214df40d94077ceb5af668111f36ca7ec3efd4434f5d0781844->enter($__internal_0a779c82aea69214df40d94077ceb5af668111f36ca7ec3efd4434f5d0781844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0a779c82aea69214df40d94077ceb5af668111f36ca7ec3efd4434f5d0781844->leave($__internal_0a779c82aea69214df40d94077ceb5af668111f36ca7ec3efd4434f5d0781844_prof);

        
        $__internal_ab8650584a0c92748e4adae24f44741ba504b09f8721746bc12e19200ee1a320->leave($__internal_ab8650584a0c92748e4adae24f44741ba504b09f8721746bc12e19200ee1a320_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_03f7bb778187438bdb402474e98421034434e2a4fa531253b835afcdab30794e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f7bb778187438bdb402474e98421034434e2a4fa531253b835afcdab30794e->enter($__internal_03f7bb778187438bdb402474e98421034434e2a4fa531253b835afcdab30794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7037ce4763b73d92c4c0e15ffe33312a8710eaca81ae0d0611ca410f64adff3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7037ce4763b73d92c4c0e15ffe33312a8710eaca81ae0d0611ca410f64adff3c->enter($__internal_7037ce4763b73d92c4c0e15ffe33312a8710eaca81ae0d0611ca410f64adff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7037ce4763b73d92c4c0e15ffe33312a8710eaca81ae0d0611ca410f64adff3c->leave($__internal_7037ce4763b73d92c4c0e15ffe33312a8710eaca81ae0d0611ca410f64adff3c_prof);

        
        $__internal_03f7bb778187438bdb402474e98421034434e2a4fa531253b835afcdab30794e->leave($__internal_03f7bb778187438bdb402474e98421034434e2a4fa531253b835afcdab30794e_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6377177317a6d814a39a5154d479c38e892ad02e998fc4690384d7cbd38d1848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6377177317a6d814a39a5154d479c38e892ad02e998fc4690384d7cbd38d1848->enter($__internal_6377177317a6d814a39a5154d479c38e892ad02e998fc4690384d7cbd38d1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_33d314680e3f4378adb088b32572c4c554d31787a42a4c826c7ca62bfc4952d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d314680e3f4378adb088b32572c4c554d31787a42a4c826c7ca62bfc4952d9->enter($__internal_33d314680e3f4378adb088b32572c4c554d31787a42a4c826c7ca62bfc4952d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_33d314680e3f4378adb088b32572c4c554d31787a42a4c826c7ca62bfc4952d9->leave($__internal_33d314680e3f4378adb088b32572c4c554d31787a42a4c826c7ca62bfc4952d9_prof);

        
        $__internal_6377177317a6d814a39a5154d479c38e892ad02e998fc4690384d7cbd38d1848->leave($__internal_6377177317a6d814a39a5154d479c38e892ad02e998fc4690384d7cbd38d1848_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8e7805d67f3746a36c07885c6ac238f57a92032d674895b86af7358ba03e83b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7805d67f3746a36c07885c6ac238f57a92032d674895b86af7358ba03e83b5->enter($__internal_8e7805d67f3746a36c07885c6ac238f57a92032d674895b86af7358ba03e83b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0aad87ab722e675851a860eff285fbecf0d4e5c84ac0dbe7b168ea792554ebea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aad87ab722e675851a860eff285fbecf0d4e5c84ac0dbe7b168ea792554ebea->enter($__internal_0aad87ab722e675851a860eff285fbecf0d4e5c84ac0dbe7b168ea792554ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0aad87ab722e675851a860eff285fbecf0d4e5c84ac0dbe7b168ea792554ebea->leave($__internal_0aad87ab722e675851a860eff285fbecf0d4e5c84ac0dbe7b168ea792554ebea_prof);

        
        $__internal_8e7805d67f3746a36c07885c6ac238f57a92032d674895b86af7358ba03e83b5->leave($__internal_8e7805d67f3746a36c07885c6ac238f57a92032d674895b86af7358ba03e83b5_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2bcba6bf66384c856a4a4f62eb3b4662167b1b6a68de2360106fbc59227b91ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcba6bf66384c856a4a4f62eb3b4662167b1b6a68de2360106fbc59227b91ab->enter($__internal_2bcba6bf66384c856a4a4f62eb3b4662167b1b6a68de2360106fbc59227b91ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cd3212e894e92f78f06104f0d84183aaec09365b2d650295352b873a2b7096e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3212e894e92f78f06104f0d84183aaec09365b2d650295352b873a2b7096e0->enter($__internal_cd3212e894e92f78f06104f0d84183aaec09365b2d650295352b873a2b7096e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_cd3212e894e92f78f06104f0d84183aaec09365b2d650295352b873a2b7096e0->leave($__internal_cd3212e894e92f78f06104f0d84183aaec09365b2d650295352b873a2b7096e0_prof);

        
        $__internal_2bcba6bf66384c856a4a4f62eb3b4662167b1b6a68de2360106fbc59227b91ab->leave($__internal_2bcba6bf66384c856a4a4f62eb3b4662167b1b6a68de2360106fbc59227b91ab_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c74b4380a0927bc4eeff516dde9f2f1879d004437ca95e55b056117ac37a22cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74b4380a0927bc4eeff516dde9f2f1879d004437ca95e55b056117ac37a22cc->enter($__internal_c74b4380a0927bc4eeff516dde9f2f1879d004437ca95e55b056117ac37a22cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f7190d49692e1b25727292329f593f08c60c209e758297e2a5a564fb1a890a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7190d49692e1b25727292329f593f08c60c209e758297e2a5a564fb1a890a81->enter($__internal_f7190d49692e1b25727292329f593f08c60c209e758297e2a5a564fb1a890a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7190d49692e1b25727292329f593f08c60c209e758297e2a5a564fb1a890a81->leave($__internal_f7190d49692e1b25727292329f593f08c60c209e758297e2a5a564fb1a890a81_prof);

        
        $__internal_c74b4380a0927bc4eeff516dde9f2f1879d004437ca95e55b056117ac37a22cc->leave($__internal_c74b4380a0927bc4eeff516dde9f2f1879d004437ca95e55b056117ac37a22cc_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cff9711f5f0df5c3f06e729f173dc1ff9f1087a0ae9be7139db1e3286b5d77ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9711f5f0df5c3f06e729f173dc1ff9f1087a0ae9be7139db1e3286b5d77ad->enter($__internal_cff9711f5f0df5c3f06e729f173dc1ff9f1087a0ae9be7139db1e3286b5d77ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d336e7b53c264bf7abba4331cb51ad5b416d750e269f4d9065b6e12cc828d103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d336e7b53c264bf7abba4331cb51ad5b416d750e269f4d9065b6e12cc828d103->enter($__internal_d336e7b53c264bf7abba4331cb51ad5b416d750e269f4d9065b6e12cc828d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d336e7b53c264bf7abba4331cb51ad5b416d750e269f4d9065b6e12cc828d103->leave($__internal_d336e7b53c264bf7abba4331cb51ad5b416d750e269f4d9065b6e12cc828d103_prof);

        
        $__internal_cff9711f5f0df5c3f06e729f173dc1ff9f1087a0ae9be7139db1e3286b5d77ad->leave($__internal_cff9711f5f0df5c3f06e729f173dc1ff9f1087a0ae9be7139db1e3286b5d77ad_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a3e9b485f5290f27f601dc7b38ecf6497c9e0ecc7248830ada7c4c545783672c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e9b485f5290f27f601dc7b38ecf6497c9e0ecc7248830ada7c4c545783672c->enter($__internal_a3e9b485f5290f27f601dc7b38ecf6497c9e0ecc7248830ada7c4c545783672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c0f7853855142cc5d79de824fa50e8c4d4bf84de1a82f43819a8bb9d041415bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f7853855142cc5d79de824fa50e8c4d4bf84de1a82f43819a8bb9d041415bb->enter($__internal_c0f7853855142cc5d79de824fa50e8c4d4bf84de1a82f43819a8bb9d041415bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c0f7853855142cc5d79de824fa50e8c4d4bf84de1a82f43819a8bb9d041415bb->leave($__internal_c0f7853855142cc5d79de824fa50e8c4d4bf84de1a82f43819a8bb9d041415bb_prof);

        
        $__internal_a3e9b485f5290f27f601dc7b38ecf6497c9e0ecc7248830ada7c4c545783672c->leave($__internal_a3e9b485f5290f27f601dc7b38ecf6497c9e0ecc7248830ada7c4c545783672c_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bdb41cc30842843b0f728bf5d0fb5b360078569efcd5008848957d68a440bd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb41cc30842843b0f728bf5d0fb5b360078569efcd5008848957d68a440bd5e->enter($__internal_bdb41cc30842843b0f728bf5d0fb5b360078569efcd5008848957d68a440bd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d9634a49c080f520037c5c56f49b145ed081bc3dbbcd2bcd36ebe643091cba8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9634a49c080f520037c5c56f49b145ed081bc3dbbcd2bcd36ebe643091cba8e->enter($__internal_d9634a49c080f520037c5c56f49b145ed081bc3dbbcd2bcd36ebe643091cba8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9634a49c080f520037c5c56f49b145ed081bc3dbbcd2bcd36ebe643091cba8e->leave($__internal_d9634a49c080f520037c5c56f49b145ed081bc3dbbcd2bcd36ebe643091cba8e_prof);

        
        $__internal_bdb41cc30842843b0f728bf5d0fb5b360078569efcd5008848957d68a440bd5e->leave($__internal_bdb41cc30842843b0f728bf5d0fb5b360078569efcd5008848957d68a440bd5e_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5515b0451853e6d21ff410dfc32faae14bfc0e6c57bd5b4fcd07a3a050102d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5515b0451853e6d21ff410dfc32faae14bfc0e6c57bd5b4fcd07a3a050102d27->enter($__internal_5515b0451853e6d21ff410dfc32faae14bfc0e6c57bd5b4fcd07a3a050102d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4673135e8cae081872f88be1eedfbc815ce31a12e7f11cf9766dbce91f512139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4673135e8cae081872f88be1eedfbc815ce31a12e7f11cf9766dbce91f512139->enter($__internal_4673135e8cae081872f88be1eedfbc815ce31a12e7f11cf9766dbce91f512139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4673135e8cae081872f88be1eedfbc815ce31a12e7f11cf9766dbce91f512139->leave($__internal_4673135e8cae081872f88be1eedfbc815ce31a12e7f11cf9766dbce91f512139_prof);

        
        $__internal_5515b0451853e6d21ff410dfc32faae14bfc0e6c57bd5b4fcd07a3a050102d27->leave($__internal_5515b0451853e6d21ff410dfc32faae14bfc0e6c57bd5b4fcd07a3a050102d27_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6dcc423873331750e968a0e700510dc8246f93fd8e6b8451d4ef46b46045ad89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dcc423873331750e968a0e700510dc8246f93fd8e6b8451d4ef46b46045ad89->enter($__internal_6dcc423873331750e968a0e700510dc8246f93fd8e6b8451d4ef46b46045ad89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bb8ba004be5af73e6cdae7014e7021b78fe69baab43bb61ffc196f084f929c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8ba004be5af73e6cdae7014e7021b78fe69baab43bb61ffc196f084f929c01->enter($__internal_bb8ba004be5af73e6cdae7014e7021b78fe69baab43bb61ffc196f084f929c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_bb8ba004be5af73e6cdae7014e7021b78fe69baab43bb61ffc196f084f929c01->leave($__internal_bb8ba004be5af73e6cdae7014e7021b78fe69baab43bb61ffc196f084f929c01_prof);

        
        $__internal_6dcc423873331750e968a0e700510dc8246f93fd8e6b8451d4ef46b46045ad89->leave($__internal_6dcc423873331750e968a0e700510dc8246f93fd8e6b8451d4ef46b46045ad89_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_311947c0bbf6a9d28606080c57fab33174a1042823e38ea5d4ecca55523613d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311947c0bbf6a9d28606080c57fab33174a1042823e38ea5d4ecca55523613d0->enter($__internal_311947c0bbf6a9d28606080c57fab33174a1042823e38ea5d4ecca55523613d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7841838d65a4c5f23317b1cf8fdc8610cb0ca8e35ea08811aab199a26118de9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7841838d65a4c5f23317b1cf8fdc8610cb0ca8e35ea08811aab199a26118de9a->enter($__internal_7841838d65a4c5f23317b1cf8fdc8610cb0ca8e35ea08811aab199a26118de9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_7841838d65a4c5f23317b1cf8fdc8610cb0ca8e35ea08811aab199a26118de9a->leave($__internal_7841838d65a4c5f23317b1cf8fdc8610cb0ca8e35ea08811aab199a26118de9a_prof);

        
        $__internal_311947c0bbf6a9d28606080c57fab33174a1042823e38ea5d4ecca55523613d0->leave($__internal_311947c0bbf6a9d28606080c57fab33174a1042823e38ea5d4ecca55523613d0_prof);

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
