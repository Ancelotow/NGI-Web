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
        $__internal_c393f7e74834b6bd6719fa192a5a0ac167ceec9d1128cfcf1e9ee34930cd74f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c393f7e74834b6bd6719fa192a5a0ac167ceec9d1128cfcf1e9ee34930cd74f0->enter($__internal_c393f7e74834b6bd6719fa192a5a0ac167ceec9d1128cfcf1e9ee34930cd74f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:sin-add.html.twig"));

        $__internal_2c1c0eab1fde370c8b928f0ab2323241465aaf6a94cae768494497ccdd25e45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1c0eab1fde370c8b928f0ab2323241465aaf6a94cae768494497ccdd25e45f->enter($__internal_2c1c0eab1fde370c8b928f0ab2323241465aaf6a94cae768494497ccdd25e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:sin-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c393f7e74834b6bd6719fa192a5a0ac167ceec9d1128cfcf1e9ee34930cd74f0->leave($__internal_c393f7e74834b6bd6719fa192a5a0ac167ceec9d1128cfcf1e9ee34930cd74f0_prof);

        
        $__internal_2c1c0eab1fde370c8b928f0ab2323241465aaf6a94cae768494497ccdd25e45f->leave($__internal_2c1c0eab1fde370c8b928f0ab2323241465aaf6a94cae768494497ccdd25e45f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ffc1b302c3d44ccdeb2ce61e08c7d1b63a6d8724e7522a2aebe3cf3914a3e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffc1b302c3d44ccdeb2ce61e08c7d1b63a6d8724e7522a2aebe3cf3914a3e3d->enter($__internal_2ffc1b302c3d44ccdeb2ce61e08c7d1b63a6d8724e7522a2aebe3cf3914a3e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12b52de01cfd9e44211d49fbd203ea6e9ca8c93f225e51a0e26ddfe8539a65a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b52de01cfd9e44211d49fbd203ea6e9ca8c93f225e51a0e26ddfe8539a65a6->enter($__internal_12b52de01cfd9e44211d49fbd203ea6e9ca8c93f225e51a0e26ddfe8539a65a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sinistre";
        
        $__internal_12b52de01cfd9e44211d49fbd203ea6e9ca8c93f225e51a0e26ddfe8539a65a6->leave($__internal_12b52de01cfd9e44211d49fbd203ea6e9ca8c93f225e51a0e26ddfe8539a65a6_prof);

        
        $__internal_2ffc1b302c3d44ccdeb2ce61e08c7d1b63a6d8724e7522a2aebe3cf3914a3e3d->leave($__internal_2ffc1b302c3d44ccdeb2ce61e08c7d1b63a6d8724e7522a2aebe3cf3914a3e3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f39095412f678bf8085ace303256d4fd4dfc348c90a4b74f0a1f5bb8906ac49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f39095412f678bf8085ace303256d4fd4dfc348c90a4b74f0a1f5bb8906ac49->enter($__internal_8f39095412f678bf8085ace303256d4fd4dfc348c90a4b74f0a1f5bb8906ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54df81d52bcfe25f2da28942b708cc4cecccb49ad0c4d620bc3b9ab8574049b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54df81d52bcfe25f2da28942b708cc4cecccb49ad0c4d620bc3b9ab8574049b4->enter($__internal_54df81d52bcfe25f2da28942b708cc4cecccb49ad0c4d620bc3b9ab8574049b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter un Sinisre</h4><br/>

            ";
        // line 12
        if ((($context["errorLot"] ?? $this->getContext($context, "errorLot")) == true)) {
            // line 13
            echo "                <div class=\"alert alert-warning\">
                    Il n'éxiste aucun lot sur cette copropriété.
                </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ((($context["errorCode"] ?? $this->getContext($context, "errorCode")) == true)) {
            // line 19
            echo "                <div class=\"alert alert-warning\">
                    Ce code sinistre existe déjâ.
                </div>
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Date du sinistre</label>
                    <input type=\"date\" name=\"dateSin\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_54df81d52bcfe25f2da28942b708cc4cecccb49ad0c4d620bc3b9ab8574049b4->leave($__internal_54df81d52bcfe25f2da28942b708cc4cecccb49ad0c4d620bc3b9ab8574049b4_prof);

        
        $__internal_8f39095412f678bf8085ace303256d4fd4dfc348c90a4b74f0a1f5bb8906ac49->leave($__internal_8f39095412f678bf8085ace303256d4fd4dfc348c90a4b74f0a1f5bb8906ac49_prof);

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
        return array (  145 => 47,  140 => 45,  134 => 42,  130 => 41,  118 => 32,  114 => 31,  107 => 27,  103 => 26,  98 => 24,  95 => 23,  89 => 19,  87 => 18,  84 => 17,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

            {% if errorLot == true %}
                <div class=\"alert alert-warning\">
                    Il n'éxiste aucun lot sur cette copropriété.
                </div>
            {% endif %}

            {% if errorCode == true %}
                <div class=\"alert alert-warning\">
                    Ce code sinistre existe déjâ.
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
