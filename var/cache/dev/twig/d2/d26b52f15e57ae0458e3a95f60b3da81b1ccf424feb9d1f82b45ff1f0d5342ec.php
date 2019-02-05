<?php

/* NGGestionnaireBundle:geolocalisation:region_add.html.twig */
class __TwigTemplate_2143ce908c6a7a6a4a3198d3ca0b08abc623c5551cfe02dcc74b186be81426e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:region_add.html.twig", 1);
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
        $__internal_5ecc51252046a252d8828f620a56afb845f33b934791f0fbb929041d7be9870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecc51252046a252d8828f620a56afb845f33b934791f0fbb929041d7be9870b->enter($__internal_5ecc51252046a252d8828f620a56afb845f33b934791f0fbb929041d7be9870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:region_add.html.twig"));

        $__internal_b0bd595c50ab9019cd829e20c10d7926c61cc2d98683d0ce059659c4408c824b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bd595c50ab9019cd829e20c10d7926c61cc2d98683d0ce059659c4408c824b->enter($__internal_b0bd595c50ab9019cd829e20c10d7926c61cc2d98683d0ce059659c4408c824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:region_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecc51252046a252d8828f620a56afb845f33b934791f0fbb929041d7be9870b->leave($__internal_5ecc51252046a252d8828f620a56afb845f33b934791f0fbb929041d7be9870b_prof);

        
        $__internal_b0bd595c50ab9019cd829e20c10d7926c61cc2d98683d0ce059659c4408c824b->leave($__internal_b0bd595c50ab9019cd829e20c10d7926c61cc2d98683d0ce059659c4408c824b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6c14ed6b55ab023cc0f9b7886b3993e0062266b6e9c4b08490ded6b20fc41e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c14ed6b55ab023cc0f9b7886b3993e0062266b6e9c4b08490ded6b20fc41e7->enter($__internal_b6c14ed6b55ab023cc0f9b7886b3993e0062266b6e9c4b08490ded6b20fc41e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8745b429170429fe18c0d073cd5a3b11941a67e39c78fd8bf6ffc553b2010aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8745b429170429fe18c0d073cd5a3b11941a67e39c78fd8bf6ffc553b2010aa6->enter($__internal_8745b429170429fe18c0d073cd5a3b11941a67e39c78fd8bf6ffc553b2010aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Régions";
        
        $__internal_8745b429170429fe18c0d073cd5a3b11941a67e39c78fd8bf6ffc553b2010aa6->leave($__internal_8745b429170429fe18c0d073cd5a3b11941a67e39c78fd8bf6ffc553b2010aa6_prof);

        
        $__internal_b6c14ed6b55ab023cc0f9b7886b3993e0062266b6e9c4b08490ded6b20fc41e7->leave($__internal_b6c14ed6b55ab023cc0f9b7886b3993e0062266b6e9c4b08490ded6b20fc41e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d188e5fca93c00ef47dbdb904e46a7be2c638f8da98318218854bb93c11d711f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d188e5fca93c00ef47dbdb904e46a7be2c638f8da98318218854bb93c11d711f->enter($__internal_d188e5fca93c00ef47dbdb904e46a7be2c638f8da98318218854bb93c11d711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a5d73f1d17ca75387bf6435abb91945311fa7c869eacc19761cdc66ce5255cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5d73f1d17ca75387bf6435abb91945311fa7c869eacc19761cdc66ce5255cb->enter($__internal_7a5d73f1d17ca75387bf6435abb91945311fa7c869eacc19761cdc66ce5255cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

        <h4>Ajouter une région</h4><br/>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "


        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


        </center>
    </div>
";
        
        $__internal_7a5d73f1d17ca75387bf6435abb91945311fa7c869eacc19761cdc66ce5255cb->leave($__internal_7a5d73f1d17ca75387bf6435abb91945311fa7c869eacc19761cdc66ce5255cb_prof);

        
        $__internal_d188e5fca93c00ef47dbdb904e46a7be2c638f8da98318218854bb93c11d711f->leave($__internal_d188e5fca93c00ef47dbdb904e46a7be2c638f8da98318218854bb93c11d711f_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:region_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  102 => 23,  96 => 20,  92 => 19,  85 => 15,  81 => 14,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Régions{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

        <h4>Ajouter une région</h4><br/>

        {{ form_start(form, {'method' : 'POST'}) }}

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.code) }}
                    {{ form_widget(form.code, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.nom) }}
                    {{ form_widget(form.nom, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}


        {{ form_end(form) }}


        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:geolocalisation:region_add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/region_add.html.twig");
    }
}
