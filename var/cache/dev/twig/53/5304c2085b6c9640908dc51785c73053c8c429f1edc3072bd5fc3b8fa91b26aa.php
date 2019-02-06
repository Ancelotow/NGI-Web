<?php

/* NGGestionnaireBundle:immeuble:sin-add.html.twig */
class __TwigTemplate_73724759a857cf2a4d7f6a75a0548b3256e98a5574e70e6b39afb66c147a2b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:sin-add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d594f61dd6c5b6c51699bab1fb805703cfbd0b4faa5cf273cc96780c92ddb0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d594f61dd6c5b6c51699bab1fb805703cfbd0b4faa5cf273cc96780c92ddb0c1->enter($__internal_d594f61dd6c5b6c51699bab1fb805703cfbd0b4faa5cf273cc96780c92ddb0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:sin-add.html.twig"));

        $__internal_410995ab21ea93869fdbdb575329568eb141c1dc295d89f48504a315d5ce4ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410995ab21ea93869fdbdb575329568eb141c1dc295d89f48504a315d5ce4ce3->enter($__internal_410995ab21ea93869fdbdb575329568eb141c1dc295d89f48504a315d5ce4ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:sin-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d594f61dd6c5b6c51699bab1fb805703cfbd0b4faa5cf273cc96780c92ddb0c1->leave($__internal_d594f61dd6c5b6c51699bab1fb805703cfbd0b4faa5cf273cc96780c92ddb0c1_prof);

        
        $__internal_410995ab21ea93869fdbdb575329568eb141c1dc295d89f48504a315d5ce4ce3->leave($__internal_410995ab21ea93869fdbdb575329568eb141c1dc295d89f48504a315d5ce4ce3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d5ee540e6ec6cfc45eed6d1cefa0987734762debff35e9b153bb961c6474f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d5ee540e6ec6cfc45eed6d1cefa0987734762debff35e9b153bb961c6474f9->enter($__internal_e4d5ee540e6ec6cfc45eed6d1cefa0987734762debff35e9b153bb961c6474f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed90ed6a5af63bb7723c898ab8eaa7da4689c1c7a1f9c684a0ef51490a1ec4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed90ed6a5af63bb7723c898ab8eaa7da4689c1c7a1f9c684a0ef51490a1ec4d7->enter($__internal_ed90ed6a5af63bb7723c898ab8eaa7da4689c1c7a1f9c684a0ef51490a1ec4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sinistre";
        
        $__internal_ed90ed6a5af63bb7723c898ab8eaa7da4689c1c7a1f9c684a0ef51490a1ec4d7->leave($__internal_ed90ed6a5af63bb7723c898ab8eaa7da4689c1c7a1f9c684a0ef51490a1ec4d7_prof);

        
        $__internal_e4d5ee540e6ec6cfc45eed6d1cefa0987734762debff35e9b153bb961c6474f9->leave($__internal_e4d5ee540e6ec6cfc45eed6d1cefa0987734762debff35e9b153bb961c6474f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bee5f98d0eb65449717b33e2dbb8cfa567629adf7baa78da24f336a18f02d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bee5f98d0eb65449717b33e2dbb8cfa567629adf7baa78da24f336a18f02d3c->enter($__internal_7bee5f98d0eb65449717b33e2dbb8cfa567629adf7baa78da24f336a18f02d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f88d8ee4e02270888a0bf207a72b6f62a59c6337d651bf23285d6e33ab0f7e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88d8ee4e02270888a0bf207a72b6f62a59c6337d651bf23285d6e33ab0f7e5a->enter($__internal_f88d8ee4e02270888a0bf207a72b6f62a59c6337d651bf23285d6e33ab0f7e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter un Sinisre</h4><br/>

            ";
        // line 12
        if ((($context["error"] ?? $this->getContext($context, "error")) == true)) {
            // line 13
            echo "                <div class=\"alert alert-warning\">
                    Il n'éxiste aucun lot sur cette copropriété
                </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Date du sinistre</label>
                    <input type=\"date\" name=\"dateSin\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_f88d8ee4e02270888a0bf207a72b6f62a59c6337d651bf23285d6e33ab0f7e5a->leave($__internal_f88d8ee4e02270888a0bf207a72b6f62a59c6337d651bf23285d6e33ab0f7e5a_prof);

        
        $__internal_7bee5f98d0eb65449717b33e2dbb8cfa567629adf7baa78da24f336a18f02d3c->leave($__internal_7bee5f98d0eb65449717b33e2dbb8cfa567629adf7baa78da24f336a18f02d3c_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:sin-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  129 => 39,  123 => 36,  119 => 35,  107 => 26,  103 => 25,  96 => 21,  92 => 20,  87 => 18,  84 => 17,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'base.html.twig' %}

{% block title %}Sinistre{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>


            <h4>Ajouter un Sinisre</h4><br/>

            {% if error == true %}
                <div class=\"alert alert-warning\">
                    Il n'éxiste aucun lot sur cette copropriété
                </div>
            {% endif %}

            {{ form_start(form, {'method' : 'POST'}) }}
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.code) }}
                    {{ form_widget(form.code, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Date du sinistre</label>
                    <input type=\"date\" name=\"dateSin\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.lot) }}
                    {{ form_widget(form.lot, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:sin-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/sin-add.html.twig");
    }
}
