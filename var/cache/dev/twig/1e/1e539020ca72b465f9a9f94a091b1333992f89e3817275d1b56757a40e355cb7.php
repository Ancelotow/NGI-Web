<?php

/* NGGestionnaireBundle:geolocalisation:dept_add.html.twig */
class __TwigTemplate_988fcf41b98b090d274cf45e794935b217ee06a17a775ee0a88518b948c0b1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:dept_add.html.twig", 1);
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
        $__internal_abcec920ce1a679d5166747172ef5ea7190260415001b57d83d9ebabf0f0f2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcec920ce1a679d5166747172ef5ea7190260415001b57d83d9ebabf0f0f2f7->enter($__internal_abcec920ce1a679d5166747172ef5ea7190260415001b57d83d9ebabf0f0f2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:dept_add.html.twig"));

        $__internal_c5edf6eb90b3b26aeb233dd672bd103681ef7e8fa4f3c1917c3498d7fea2c5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5edf6eb90b3b26aeb233dd672bd103681ef7e8fa4f3c1917c3498d7fea2c5ee->enter($__internal_c5edf6eb90b3b26aeb233dd672bd103681ef7e8fa4f3c1917c3498d7fea2c5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:dept_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcec920ce1a679d5166747172ef5ea7190260415001b57d83d9ebabf0f0f2f7->leave($__internal_abcec920ce1a679d5166747172ef5ea7190260415001b57d83d9ebabf0f0f2f7_prof);

        
        $__internal_c5edf6eb90b3b26aeb233dd672bd103681ef7e8fa4f3c1917c3498d7fea2c5ee->leave($__internal_c5edf6eb90b3b26aeb233dd672bd103681ef7e8fa4f3c1917c3498d7fea2c5ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fc1724a0c50b775b59213420057023386a6416037218a16c8f8b41624e14b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fc1724a0c50b775b59213420057023386a6416037218a16c8f8b41624e14b3->enter($__internal_a2fc1724a0c50b775b59213420057023386a6416037218a16c8f8b41624e14b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_820d99068941ddb9590de3a07a0b5ed650fa0340e9e7e2bec55dfb254429efdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820d99068941ddb9590de3a07a0b5ed650fa0340e9e7e2bec55dfb254429efdc->enter($__internal_820d99068941ddb9590de3a07a0b5ed650fa0340e9e7e2bec55dfb254429efdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Département";
        
        $__internal_820d99068941ddb9590de3a07a0b5ed650fa0340e9e7e2bec55dfb254429efdc->leave($__internal_820d99068941ddb9590de3a07a0b5ed650fa0340e9e7e2bec55dfb254429efdc_prof);

        
        $__internal_a2fc1724a0c50b775b59213420057023386a6416037218a16c8f8b41624e14b3->leave($__internal_a2fc1724a0c50b775b59213420057023386a6416037218a16c8f8b41624e14b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfbf93c31c038c419440e2897d92567fc2265ce9e828eab68c887dc17786c188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfbf93c31c038c419440e2897d92567fc2265ce9e828eab68c887dc17786c188->enter($__internal_bfbf93c31c038c419440e2897d92567fc2265ce9e828eab68c887dc17786c188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaa7822be09672edc3817ea2bc10a40054c7920ad728a8de45bf8d5330d9c841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa7822be09672edc3817ea2bc10a40054c7920ad728a8de45bf8d5330d9c841->enter($__internal_aaa7822be09672edc3817ea2bc10a40054c7920ad728a8de45bf8d5330d9c841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter un département</h4><br/>

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

            <div class=\"col-md-4 mb-3\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "


            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


        </center>
    </div>
";
        
        $__internal_aaa7822be09672edc3817ea2bc10a40054c7920ad728a8de45bf8d5330d9c841->leave($__internal_aaa7822be09672edc3817ea2bc10a40054c7920ad728a8de45bf8d5330d9c841_prof);

        
        $__internal_bfbf93c31c038c419440e2897d92567fc2265ce9e828eab68c887dc17786c188->leave($__internal_bfbf93c31c038c419440e2897d92567fc2265ce9e828eab68c887dc17786c188_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:dept_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  113 => 28,  107 => 25,  103 => 24,  96 => 20,  92 => 19,  85 => 15,  81 => 14,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Département{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter un département</h4><br/>

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.code) }}
                {{ form_widget(form.code, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.nom) }}
                {{ form_widget(form.nom, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.region) }}
                {{ form_widget(form.region, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}


            {{ form_end(form) }}


        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:geolocalisation:dept_add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/dept_add.html.twig");
    }
}
