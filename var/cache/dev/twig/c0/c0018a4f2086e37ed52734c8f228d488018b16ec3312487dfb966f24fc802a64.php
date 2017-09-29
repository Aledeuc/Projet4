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
        $__internal_435bc15380aff49b306df03c0c787e623f27ff3acc3b144aa9f8463562528a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435bc15380aff49b306df03c0c787e623f27ff3acc3b144aa9f8463562528a08->enter($__internal_435bc15380aff49b306df03c0c787e623f27ff3acc3b144aa9f8463562528a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_bb46c4d4d9f3f8bc20e06d501fcb3414c53ec09783c952062562671bca373e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb46c4d4d9f3f8bc20e06d501fcb3414c53ec09783c952062562671bca373e5a->enter($__internal_bb46c4d4d9f3f8bc20e06d501fcb3414c53ec09783c952062562671bca373e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_435bc15380aff49b306df03c0c787e623f27ff3acc3b144aa9f8463562528a08->leave($__internal_435bc15380aff49b306df03c0c787e623f27ff3acc3b144aa9f8463562528a08_prof);

        
        $__internal_bb46c4d4d9f3f8bc20e06d501fcb3414c53ec09783c952062562671bca373e5a->leave($__internal_bb46c4d4d9f3f8bc20e06d501fcb3414c53ec09783c952062562671bca373e5a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_7644e9c322238c94e38fcc0befcc2cbfd417a9d08de5c0dfa7d826f5f47b41d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7644e9c322238c94e38fcc0befcc2cbfd417a9d08de5c0dfa7d826f5f47b41d5->enter($__internal_7644e9c322238c94e38fcc0befcc2cbfd417a9d08de5c0dfa7d826f5f47b41d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4722057b153df2a0cc80c69ff3ad529e367560ed3fa7bef92879a218b2c9919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4722057b153df2a0cc80c69ff3ad529e367560ed3fa7bef92879a218b2c9919f->enter($__internal_4722057b153df2a0cc80c69ff3ad529e367560ed3fa7bef92879a218b2c9919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4722057b153df2a0cc80c69ff3ad529e367560ed3fa7bef92879a218b2c9919f->leave($__internal_4722057b153df2a0cc80c69ff3ad529e367560ed3fa7bef92879a218b2c9919f_prof);

        
        $__internal_7644e9c322238c94e38fcc0befcc2cbfd417a9d08de5c0dfa7d826f5f47b41d5->leave($__internal_7644e9c322238c94e38fcc0befcc2cbfd417a9d08de5c0dfa7d826f5f47b41d5_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3ae6bde5f36de1026b115dea54233beb0611f201532e4ea670a5024fbb73a62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae6bde5f36de1026b115dea54233beb0611f201532e4ea670a5024fbb73a62c->enter($__internal_3ae6bde5f36de1026b115dea54233beb0611f201532e4ea670a5024fbb73a62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_976049f92a63a5544947db303080b9c0f994ce001672ff3135939b8297c8d10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976049f92a63a5544947db303080b9c0f994ce001672ff3135939b8297c8d10b->enter($__internal_976049f92a63a5544947db303080b9c0f994ce001672ff3135939b8297c8d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_976049f92a63a5544947db303080b9c0f994ce001672ff3135939b8297c8d10b->leave($__internal_976049f92a63a5544947db303080b9c0f994ce001672ff3135939b8297c8d10b_prof);

        
        $__internal_3ae6bde5f36de1026b115dea54233beb0611f201532e4ea670a5024fbb73a62c->leave($__internal_3ae6bde5f36de1026b115dea54233beb0611f201532e4ea670a5024fbb73a62c_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c9e8649a5bf4f964049ceea62a78ab2fc0644ba159df75e3dcf4c71d65d924e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e8649a5bf4f964049ceea62a78ab2fc0644ba159df75e3dcf4c71d65d924e1->enter($__internal_c9e8649a5bf4f964049ceea62a78ab2fc0644ba159df75e3dcf4c71d65d924e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_999afcd4a16882e7b1eba06e7c09ffe3d22f3c81209bab9e0ef1a9bba21df1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999afcd4a16882e7b1eba06e7c09ffe3d22f3c81209bab9e0ef1a9bba21df1e4->enter($__internal_999afcd4a16882e7b1eba06e7c09ffe3d22f3c81209bab9e0ef1a9bba21df1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_999afcd4a16882e7b1eba06e7c09ffe3d22f3c81209bab9e0ef1a9bba21df1e4->leave($__internal_999afcd4a16882e7b1eba06e7c09ffe3d22f3c81209bab9e0ef1a9bba21df1e4_prof);

        
        $__internal_c9e8649a5bf4f964049ceea62a78ab2fc0644ba159df75e3dcf4c71d65d924e1->leave($__internal_c9e8649a5bf4f964049ceea62a78ab2fc0644ba159df75e3dcf4c71d65d924e1_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_51fa64ec3a407b7072779802fed11d62a2d3f179959dd25fabd5467c2a1821ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fa64ec3a407b7072779802fed11d62a2d3f179959dd25fabd5467c2a1821ed->enter($__internal_51fa64ec3a407b7072779802fed11d62a2d3f179959dd25fabd5467c2a1821ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cf5069cecc61e05865b30a3629bc339094e2e284f90615c789964f54174197a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5069cecc61e05865b30a3629bc339094e2e284f90615c789964f54174197a7->enter($__internal_cf5069cecc61e05865b30a3629bc339094e2e284f90615c789964f54174197a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_5871c8f905d9d3037ff66242bae70d11a1ae33ae12df1616cd593add871de03d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_3886dbbaa371f36f70e9d59290238efcd8dda420970c6ab8907855e706ff00b2 = "{{") && ('' === $__internal_3886dbbaa371f36f70e9d59290238efcd8dda420970c6ab8907855e706ff00b2 || 0 === strpos($__internal_5871c8f905d9d3037ff66242bae70d11a1ae33ae12df1616cd593add871de03d, $__internal_3886dbbaa371f36f70e9d59290238efcd8dda420970c6ab8907855e706ff00b2)));
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
        
        $__internal_cf5069cecc61e05865b30a3629bc339094e2e284f90615c789964f54174197a7->leave($__internal_cf5069cecc61e05865b30a3629bc339094e2e284f90615c789964f54174197a7_prof);

        
        $__internal_51fa64ec3a407b7072779802fed11d62a2d3f179959dd25fabd5467c2a1821ed->leave($__internal_51fa64ec3a407b7072779802fed11d62a2d3f179959dd25fabd5467c2a1821ed_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_edcc26534c2c08fa42489ff28f6064f1902c96c59517f22cfdee2f5cb2c4c647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcc26534c2c08fa42489ff28f6064f1902c96c59517f22cfdee2f5cb2c4c647->enter($__internal_edcc26534c2c08fa42489ff28f6064f1902c96c59517f22cfdee2f5cb2c4c647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7df3bdeda1a777ddb650d6109c7a2c6788341b1f504f27c607b7594902003e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df3bdeda1a777ddb650d6109c7a2c6788341b1f504f27c607b7594902003e45->enter($__internal_7df3bdeda1a777ddb650d6109c7a2c6788341b1f504f27c607b7594902003e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7df3bdeda1a777ddb650d6109c7a2c6788341b1f504f27c607b7594902003e45->leave($__internal_7df3bdeda1a777ddb650d6109c7a2c6788341b1f504f27c607b7594902003e45_prof);

        
        $__internal_edcc26534c2c08fa42489ff28f6064f1902c96c59517f22cfdee2f5cb2c4c647->leave($__internal_edcc26534c2c08fa42489ff28f6064f1902c96c59517f22cfdee2f5cb2c4c647_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2a1f99e1e34aaa92775e646dbe56f6767000bae49f70829ebcb8cd530f3d4d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1f99e1e34aaa92775e646dbe56f6767000bae49f70829ebcb8cd530f3d4d43->enter($__internal_2a1f99e1e34aaa92775e646dbe56f6767000bae49f70829ebcb8cd530f3d4d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_706f2e4c2bc21d1f964c3d08ae5284d27aecf3b3b341767dedb57eba5a0face3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706f2e4c2bc21d1f964c3d08ae5284d27aecf3b3b341767dedb57eba5a0face3->enter($__internal_706f2e4c2bc21d1f964c3d08ae5284d27aecf3b3b341767dedb57eba5a0face3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_706f2e4c2bc21d1f964c3d08ae5284d27aecf3b3b341767dedb57eba5a0face3->leave($__internal_706f2e4c2bc21d1f964c3d08ae5284d27aecf3b3b341767dedb57eba5a0face3_prof);

        
        $__internal_2a1f99e1e34aaa92775e646dbe56f6767000bae49f70829ebcb8cd530f3d4d43->leave($__internal_2a1f99e1e34aaa92775e646dbe56f6767000bae49f70829ebcb8cd530f3d4d43_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_27c4d3859be9a05aabcf681c4581f6eb8ae792c740c9ddf7812c06405b408009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c4d3859be9a05aabcf681c4581f6eb8ae792c740c9ddf7812c06405b408009->enter($__internal_27c4d3859be9a05aabcf681c4581f6eb8ae792c740c9ddf7812c06405b408009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_64ef3c38d07e949b0b73b154a3d7c13fdc7bf080d3bdbe3bbf7a187984823e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ef3c38d07e949b0b73b154a3d7c13fdc7bf080d3bdbe3bbf7a187984823e06->enter($__internal_64ef3c38d07e949b0b73b154a3d7c13fdc7bf080d3bdbe3bbf7a187984823e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_64ef3c38d07e949b0b73b154a3d7c13fdc7bf080d3bdbe3bbf7a187984823e06->leave($__internal_64ef3c38d07e949b0b73b154a3d7c13fdc7bf080d3bdbe3bbf7a187984823e06_prof);

        
        $__internal_27c4d3859be9a05aabcf681c4581f6eb8ae792c740c9ddf7812c06405b408009->leave($__internal_27c4d3859be9a05aabcf681c4581f6eb8ae792c740c9ddf7812c06405b408009_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_264cc9b20541e54c71e62a619a6e8735acc6fa7cab1534b2e37f77d979f422a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264cc9b20541e54c71e62a619a6e8735acc6fa7cab1534b2e37f77d979f422a8->enter($__internal_264cc9b20541e54c71e62a619a6e8735acc6fa7cab1534b2e37f77d979f422a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7b23b614df2c644260e4a5815236a5b1327dd1626830e42db0a4909a5cdd8b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b23b614df2c644260e4a5815236a5b1327dd1626830e42db0a4909a5cdd8b11->enter($__internal_7b23b614df2c644260e4a5815236a5b1327dd1626830e42db0a4909a5cdd8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_7b23b614df2c644260e4a5815236a5b1327dd1626830e42db0a4909a5cdd8b11->leave($__internal_7b23b614df2c644260e4a5815236a5b1327dd1626830e42db0a4909a5cdd8b11_prof);

        
        $__internal_264cc9b20541e54c71e62a619a6e8735acc6fa7cab1534b2e37f77d979f422a8->leave($__internal_264cc9b20541e54c71e62a619a6e8735acc6fa7cab1534b2e37f77d979f422a8_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b5da0a89adae443f87679cbf144fd81488656c7a2441b7836d6cf402a947e7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5da0a89adae443f87679cbf144fd81488656c7a2441b7836d6cf402a947e7ef->enter($__internal_b5da0a89adae443f87679cbf144fd81488656c7a2441b7836d6cf402a947e7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_02fb391f8a8f692dd03845a9ffea106399921bf2d1cc81e0b19b02c02aab3284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fb391f8a8f692dd03845a9ffea106399921bf2d1cc81e0b19b02c02aab3284->enter($__internal_02fb391f8a8f692dd03845a9ffea106399921bf2d1cc81e0b19b02c02aab3284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_02fb391f8a8f692dd03845a9ffea106399921bf2d1cc81e0b19b02c02aab3284->leave($__internal_02fb391f8a8f692dd03845a9ffea106399921bf2d1cc81e0b19b02c02aab3284_prof);

        
        $__internal_b5da0a89adae443f87679cbf144fd81488656c7a2441b7836d6cf402a947e7ef->leave($__internal_b5da0a89adae443f87679cbf144fd81488656c7a2441b7836d6cf402a947e7ef_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e9f2f94d378bb535f3cc35f59ed418bc69f28155cdafc4b4e4f75c604daf1054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f2f94d378bb535f3cc35f59ed418bc69f28155cdafc4b4e4f75c604daf1054->enter($__internal_e9f2f94d378bb535f3cc35f59ed418bc69f28155cdafc4b4e4f75c604daf1054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_225ae41502819350bb1002837036380a26b375c0de17ee7d251b3f202ec8328c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225ae41502819350bb1002837036380a26b375c0de17ee7d251b3f202ec8328c->enter($__internal_225ae41502819350bb1002837036380a26b375c0de17ee7d251b3f202ec8328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_225ae41502819350bb1002837036380a26b375c0de17ee7d251b3f202ec8328c->leave($__internal_225ae41502819350bb1002837036380a26b375c0de17ee7d251b3f202ec8328c_prof);

        
        $__internal_e9f2f94d378bb535f3cc35f59ed418bc69f28155cdafc4b4e4f75c604daf1054->leave($__internal_e9f2f94d378bb535f3cc35f59ed418bc69f28155cdafc4b4e4f75c604daf1054_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f18f3b33d6b880ce8d17dac0f25c820c0d54e0236fc477630a12072f06694805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18f3b33d6b880ce8d17dac0f25c820c0d54e0236fc477630a12072f06694805->enter($__internal_f18f3b33d6b880ce8d17dac0f25c820c0d54e0236fc477630a12072f06694805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c16a24e30bb3065c747856fab21eeb7b0a7bd4394033aa688a524717a9b2c515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16a24e30bb3065c747856fab21eeb7b0a7bd4394033aa688a524717a9b2c515->enter($__internal_c16a24e30bb3065c747856fab21eeb7b0a7bd4394033aa688a524717a9b2c515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c16a24e30bb3065c747856fab21eeb7b0a7bd4394033aa688a524717a9b2c515->leave($__internal_c16a24e30bb3065c747856fab21eeb7b0a7bd4394033aa688a524717a9b2c515_prof);

        
        $__internal_f18f3b33d6b880ce8d17dac0f25c820c0d54e0236fc477630a12072f06694805->leave($__internal_f18f3b33d6b880ce8d17dac0f25c820c0d54e0236fc477630a12072f06694805_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a379e950c31e7a9bda9b00703867fde71dc5ec54081c0ab7ebcd324c967a48d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a379e950c31e7a9bda9b00703867fde71dc5ec54081c0ab7ebcd324c967a48d8->enter($__internal_a379e950c31e7a9bda9b00703867fde71dc5ec54081c0ab7ebcd324c967a48d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e2c4b6a35cc87246c6ae6ea0a7a2a2c284215d588e95653c6545ab79e55dc974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c4b6a35cc87246c6ae6ea0a7a2a2c284215d588e95653c6545ab79e55dc974->enter($__internal_e2c4b6a35cc87246c6ae6ea0a7a2a2c284215d588e95653c6545ab79e55dc974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_e2c4b6a35cc87246c6ae6ea0a7a2a2c284215d588e95653c6545ab79e55dc974->leave($__internal_e2c4b6a35cc87246c6ae6ea0a7a2a2c284215d588e95653c6545ab79e55dc974_prof);

        
        $__internal_a379e950c31e7a9bda9b00703867fde71dc5ec54081c0ab7ebcd324c967a48d8->leave($__internal_a379e950c31e7a9bda9b00703867fde71dc5ec54081c0ab7ebcd324c967a48d8_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bdc734eb5d74ffa1733f53d02d55fe751135cd35ecde2bc50b2674fea1b0a7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc734eb5d74ffa1733f53d02d55fe751135cd35ecde2bc50b2674fea1b0a7f5->enter($__internal_bdc734eb5d74ffa1733f53d02d55fe751135cd35ecde2bc50b2674fea1b0a7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_12725879add55b67cd884ce2615f1b76b2b90f09b326e4e2539f98b58d56f3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12725879add55b67cd884ce2615f1b76b2b90f09b326e4e2539f98b58d56f3f7->enter($__internal_12725879add55b67cd884ce2615f1b76b2b90f09b326e4e2539f98b58d56f3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_12725879add55b67cd884ce2615f1b76b2b90f09b326e4e2539f98b58d56f3f7->leave($__internal_12725879add55b67cd884ce2615f1b76b2b90f09b326e4e2539f98b58d56f3f7_prof);

        
        $__internal_bdc734eb5d74ffa1733f53d02d55fe751135cd35ecde2bc50b2674fea1b0a7f5->leave($__internal_bdc734eb5d74ffa1733f53d02d55fe751135cd35ecde2bc50b2674fea1b0a7f5_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5a21b9d38a43b3cb26ef1263cfee293b1dc754aad5d49ffdec8089da7008a93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a21b9d38a43b3cb26ef1263cfee293b1dc754aad5d49ffdec8089da7008a93a->enter($__internal_5a21b9d38a43b3cb26ef1263cfee293b1dc754aad5d49ffdec8089da7008a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_08f73a3a088043235f1d8d2f09a2ffdf95af16be9e0eaff6ce0d44d94310c400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f73a3a088043235f1d8d2f09a2ffdf95af16be9e0eaff6ce0d44d94310c400->enter($__internal_08f73a3a088043235f1d8d2f09a2ffdf95af16be9e0eaff6ce0d44d94310c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_08f73a3a088043235f1d8d2f09a2ffdf95af16be9e0eaff6ce0d44d94310c400->leave($__internal_08f73a3a088043235f1d8d2f09a2ffdf95af16be9e0eaff6ce0d44d94310c400_prof);

        
        $__internal_5a21b9d38a43b3cb26ef1263cfee293b1dc754aad5d49ffdec8089da7008a93a->leave($__internal_5a21b9d38a43b3cb26ef1263cfee293b1dc754aad5d49ffdec8089da7008a93a_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_49e1442f158ef1af7ce5454943374d2f13aaf33d49d795a3c279021f04891d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e1442f158ef1af7ce5454943374d2f13aaf33d49d795a3c279021f04891d3e->enter($__internal_49e1442f158ef1af7ce5454943374d2f13aaf33d49d795a3c279021f04891d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4f66cb8e1453cb52e3bd9308be118ac7664a21175a703aa1a357fe26cc64dab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f66cb8e1453cb52e3bd9308be118ac7664a21175a703aa1a357fe26cc64dab9->enter($__internal_4f66cb8e1453cb52e3bd9308be118ac7664a21175a703aa1a357fe26cc64dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4f66cb8e1453cb52e3bd9308be118ac7664a21175a703aa1a357fe26cc64dab9->leave($__internal_4f66cb8e1453cb52e3bd9308be118ac7664a21175a703aa1a357fe26cc64dab9_prof);

        
        $__internal_49e1442f158ef1af7ce5454943374d2f13aaf33d49d795a3c279021f04891d3e->leave($__internal_49e1442f158ef1af7ce5454943374d2f13aaf33d49d795a3c279021f04891d3e_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3fb8fda9c215b712b085f49d3edfed4918e133aff1fc6f4839c26543cdf40cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb8fda9c215b712b085f49d3edfed4918e133aff1fc6f4839c26543cdf40cd9->enter($__internal_3fb8fda9c215b712b085f49d3edfed4918e133aff1fc6f4839c26543cdf40cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a1bd357711876f2db53fca8c5149e696d2a53550e61e5a6bbea754c0384609ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bd357711876f2db53fca8c5149e696d2a53550e61e5a6bbea754c0384609ea->enter($__internal_a1bd357711876f2db53fca8c5149e696d2a53550e61e5a6bbea754c0384609ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a1bd357711876f2db53fca8c5149e696d2a53550e61e5a6bbea754c0384609ea->leave($__internal_a1bd357711876f2db53fca8c5149e696d2a53550e61e5a6bbea754c0384609ea_prof);

        
        $__internal_3fb8fda9c215b712b085f49d3edfed4918e133aff1fc6f4839c26543cdf40cd9->leave($__internal_3fb8fda9c215b712b085f49d3edfed4918e133aff1fc6f4839c26543cdf40cd9_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3ca0f746ef08af89ef58c7abe31eba2a66b76057b912e13f0b1e81f44e1d8107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca0f746ef08af89ef58c7abe31eba2a66b76057b912e13f0b1e81f44e1d8107->enter($__internal_3ca0f746ef08af89ef58c7abe31eba2a66b76057b912e13f0b1e81f44e1d8107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e499d28f5b3ae1e871cae8ad1b3574ab15bb0b891bc8798cecc758e2d4b3fec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e499d28f5b3ae1e871cae8ad1b3574ab15bb0b891bc8798cecc758e2d4b3fec7->enter($__internal_e499d28f5b3ae1e871cae8ad1b3574ab15bb0b891bc8798cecc758e2d4b3fec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e499d28f5b3ae1e871cae8ad1b3574ab15bb0b891bc8798cecc758e2d4b3fec7->leave($__internal_e499d28f5b3ae1e871cae8ad1b3574ab15bb0b891bc8798cecc758e2d4b3fec7_prof);

        
        $__internal_3ca0f746ef08af89ef58c7abe31eba2a66b76057b912e13f0b1e81f44e1d8107->leave($__internal_3ca0f746ef08af89ef58c7abe31eba2a66b76057b912e13f0b1e81f44e1d8107_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_02374d49dfbabe33441eb69c128e73b890328445b58c2cb230a947863a082cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02374d49dfbabe33441eb69c128e73b890328445b58c2cb230a947863a082cdb->enter($__internal_02374d49dfbabe33441eb69c128e73b890328445b58c2cb230a947863a082cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0ddc201bf9238acfd00d6d08ad3135c75fac5105e8664c783ee714ea696e1ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddc201bf9238acfd00d6d08ad3135c75fac5105e8664c783ee714ea696e1ce5->enter($__internal_0ddc201bf9238acfd00d6d08ad3135c75fac5105e8664c783ee714ea696e1ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_0ddc201bf9238acfd00d6d08ad3135c75fac5105e8664c783ee714ea696e1ce5->leave($__internal_0ddc201bf9238acfd00d6d08ad3135c75fac5105e8664c783ee714ea696e1ce5_prof);

        
        $__internal_02374d49dfbabe33441eb69c128e73b890328445b58c2cb230a947863a082cdb->leave($__internal_02374d49dfbabe33441eb69c128e73b890328445b58c2cb230a947863a082cdb_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d01c64fd85efe33b8f8827f72c8386ca865c3208d92c26221f2b0895b76736db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01c64fd85efe33b8f8827f72c8386ca865c3208d92c26221f2b0895b76736db->enter($__internal_d01c64fd85efe33b8f8827f72c8386ca865c3208d92c26221f2b0895b76736db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e847cfa2bd3124103d205f3bb2cd7472a55cceaba1debc0b5b3dae04d48852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e847cfa2bd3124103d205f3bb2cd7472a55cceaba1debc0b5b3dae04d48852e->enter($__internal_1e847cfa2bd3124103d205f3bb2cd7472a55cceaba1debc0b5b3dae04d48852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1e847cfa2bd3124103d205f3bb2cd7472a55cceaba1debc0b5b3dae04d48852e->leave($__internal_1e847cfa2bd3124103d205f3bb2cd7472a55cceaba1debc0b5b3dae04d48852e_prof);

        
        $__internal_d01c64fd85efe33b8f8827f72c8386ca865c3208d92c26221f2b0895b76736db->leave($__internal_d01c64fd85efe33b8f8827f72c8386ca865c3208d92c26221f2b0895b76736db_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d6fdf95eb06361fd47bf6a04dab4774d6b8b0df48552c2fbaeb29da04dc0649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fdf95eb06361fd47bf6a04dab4774d6b8b0df48552c2fbaeb29da04dc0649e->enter($__internal_d6fdf95eb06361fd47bf6a04dab4774d6b8b0df48552c2fbaeb29da04dc0649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_be70e90858b9d7fbcd89246e9989b4dafc43a256dd6775ce15b4d8b2b47570d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be70e90858b9d7fbcd89246e9989b4dafc43a256dd6775ce15b4d8b2b47570d0->enter($__internal_be70e90858b9d7fbcd89246e9989b4dafc43a256dd6775ce15b4d8b2b47570d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_be70e90858b9d7fbcd89246e9989b4dafc43a256dd6775ce15b4d8b2b47570d0->leave($__internal_be70e90858b9d7fbcd89246e9989b4dafc43a256dd6775ce15b4d8b2b47570d0_prof);

        
        $__internal_d6fdf95eb06361fd47bf6a04dab4774d6b8b0df48552c2fbaeb29da04dc0649e->leave($__internal_d6fdf95eb06361fd47bf6a04dab4774d6b8b0df48552c2fbaeb29da04dc0649e_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4025f6878fcbef51f4bb360e2d359d7ee3dc2acf6b7385cece81f235b537e8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4025f6878fcbef51f4bb360e2d359d7ee3dc2acf6b7385cece81f235b537e8c4->enter($__internal_4025f6878fcbef51f4bb360e2d359d7ee3dc2acf6b7385cece81f235b537e8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1ae5a0634fe06b24876c8a361ab7347eafd823f46f7713b9a461cc88b6de3c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae5a0634fe06b24876c8a361ab7347eafd823f46f7713b9a461cc88b6de3c91->enter($__internal_1ae5a0634fe06b24876c8a361ab7347eafd823f46f7713b9a461cc88b6de3c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ae5a0634fe06b24876c8a361ab7347eafd823f46f7713b9a461cc88b6de3c91->leave($__internal_1ae5a0634fe06b24876c8a361ab7347eafd823f46f7713b9a461cc88b6de3c91_prof);

        
        $__internal_4025f6878fcbef51f4bb360e2d359d7ee3dc2acf6b7385cece81f235b537e8c4->leave($__internal_4025f6878fcbef51f4bb360e2d359d7ee3dc2acf6b7385cece81f235b537e8c4_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_96e6d6fee0eb44c84e6ffec5edcb908f2dcbec42efa734907e536336c410c118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e6d6fee0eb44c84e6ffec5edcb908f2dcbec42efa734907e536336c410c118->enter($__internal_96e6d6fee0eb44c84e6ffec5edcb908f2dcbec42efa734907e536336c410c118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_161bf204a2f994a1a89ea6d3ff96114065cd556131a9f9d28279f12bf1f4d9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161bf204a2f994a1a89ea6d3ff96114065cd556131a9f9d28279f12bf1f4d9ac->enter($__internal_161bf204a2f994a1a89ea6d3ff96114065cd556131a9f9d28279f12bf1f4d9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_161bf204a2f994a1a89ea6d3ff96114065cd556131a9f9d28279f12bf1f4d9ac->leave($__internal_161bf204a2f994a1a89ea6d3ff96114065cd556131a9f9d28279f12bf1f4d9ac_prof);

        
        $__internal_96e6d6fee0eb44c84e6ffec5edcb908f2dcbec42efa734907e536336c410c118->leave($__internal_96e6d6fee0eb44c84e6ffec5edcb908f2dcbec42efa734907e536336c410c118_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_45fb504c13fb05c08b7d9311c273b16690df858441f77e11adc19934025f6a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fb504c13fb05c08b7d9311c273b16690df858441f77e11adc19934025f6a90->enter($__internal_45fb504c13fb05c08b7d9311c273b16690df858441f77e11adc19934025f6a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_74a1d03656e727da2511959b13dae94ed76ffb54ba916b3b50ca0551364f1d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a1d03656e727da2511959b13dae94ed76ffb54ba916b3b50ca0551364f1d98->enter($__internal_74a1d03656e727da2511959b13dae94ed76ffb54ba916b3b50ca0551364f1d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_74a1d03656e727da2511959b13dae94ed76ffb54ba916b3b50ca0551364f1d98->leave($__internal_74a1d03656e727da2511959b13dae94ed76ffb54ba916b3b50ca0551364f1d98_prof);

        
        $__internal_45fb504c13fb05c08b7d9311c273b16690df858441f77e11adc19934025f6a90->leave($__internal_45fb504c13fb05c08b7d9311c273b16690df858441f77e11adc19934025f6a90_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e9add0e40e32c02c36e62c4356821f884dddac6dd0b7b4d2a9458703565969c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9add0e40e32c02c36e62c4356821f884dddac6dd0b7b4d2a9458703565969c5->enter($__internal_e9add0e40e32c02c36e62c4356821f884dddac6dd0b7b4d2a9458703565969c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_20641b920bc870b6361dbd4987c8704b03b320f32b7edabc04134e2890b9aea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20641b920bc870b6361dbd4987c8704b03b320f32b7edabc04134e2890b9aea0->enter($__internal_20641b920bc870b6361dbd4987c8704b03b320f32b7edabc04134e2890b9aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_20641b920bc870b6361dbd4987c8704b03b320f32b7edabc04134e2890b9aea0->leave($__internal_20641b920bc870b6361dbd4987c8704b03b320f32b7edabc04134e2890b9aea0_prof);

        
        $__internal_e9add0e40e32c02c36e62c4356821f884dddac6dd0b7b4d2a9458703565969c5->leave($__internal_e9add0e40e32c02c36e62c4356821f884dddac6dd0b7b4d2a9458703565969c5_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2c13ff5d8de57b4a1d3c5d546b317221fad90044731b7bc8b3440b6753b0255d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c13ff5d8de57b4a1d3c5d546b317221fad90044731b7bc8b3440b6753b0255d->enter($__internal_2c13ff5d8de57b4a1d3c5d546b317221fad90044731b7bc8b3440b6753b0255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d2455f1010b937cd21bee5af29b48cb5da71d749dcb781362df70d2417f6c2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2455f1010b937cd21bee5af29b48cb5da71d749dcb781362df70d2417f6c2ef->enter($__internal_d2455f1010b937cd21bee5af29b48cb5da71d749dcb781362df70d2417f6c2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d2455f1010b937cd21bee5af29b48cb5da71d749dcb781362df70d2417f6c2ef->leave($__internal_d2455f1010b937cd21bee5af29b48cb5da71d749dcb781362df70d2417f6c2ef_prof);

        
        $__internal_2c13ff5d8de57b4a1d3c5d546b317221fad90044731b7bc8b3440b6753b0255d->leave($__internal_2c13ff5d8de57b4a1d3c5d546b317221fad90044731b7bc8b3440b6753b0255d_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_259d516d76f6434a25a0cc668c685431e5bd831dd4f08f14591d3846df657dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259d516d76f6434a25a0cc668c685431e5bd831dd4f08f14591d3846df657dc5->enter($__internal_259d516d76f6434a25a0cc668c685431e5bd831dd4f08f14591d3846df657dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3102cbd415209dac3d70668097070ab796442ed35527951dd5ded4eeb4869c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3102cbd415209dac3d70668097070ab796442ed35527951dd5ded4eeb4869c26->enter($__internal_3102cbd415209dac3d70668097070ab796442ed35527951dd5ded4eeb4869c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3102cbd415209dac3d70668097070ab796442ed35527951dd5ded4eeb4869c26->leave($__internal_3102cbd415209dac3d70668097070ab796442ed35527951dd5ded4eeb4869c26_prof);

        
        $__internal_259d516d76f6434a25a0cc668c685431e5bd831dd4f08f14591d3846df657dc5->leave($__internal_259d516d76f6434a25a0cc668c685431e5bd831dd4f08f14591d3846df657dc5_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0dc330a84e815f630f33d2ea90e03275b004f810e753ea11dd84d5b118ccd283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc330a84e815f630f33d2ea90e03275b004f810e753ea11dd84d5b118ccd283->enter($__internal_0dc330a84e815f630f33d2ea90e03275b004f810e753ea11dd84d5b118ccd283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_83c0afb29cbbe8e60055cf1982d4b0a43251f76d83ee7ac7b3dde1277d8fea04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c0afb29cbbe8e60055cf1982d4b0a43251f76d83ee7ac7b3dde1277d8fea04->enter($__internal_83c0afb29cbbe8e60055cf1982d4b0a43251f76d83ee7ac7b3dde1277d8fea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_83c0afb29cbbe8e60055cf1982d4b0a43251f76d83ee7ac7b3dde1277d8fea04->leave($__internal_83c0afb29cbbe8e60055cf1982d4b0a43251f76d83ee7ac7b3dde1277d8fea04_prof);

        
        $__internal_0dc330a84e815f630f33d2ea90e03275b004f810e753ea11dd84d5b118ccd283->leave($__internal_0dc330a84e815f630f33d2ea90e03275b004f810e753ea11dd84d5b118ccd283_prof);

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
", "bootstrap_3_layout.html.twig", "/Users/alexandre/Desktop/Nouveau dossier contenant des éléments/Pro/OC/Projet4/Projet4/Symfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
