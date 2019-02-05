<?php

/* NGGestionnaireBundle:geolocalisation:ville_add.html.twig */
class __TwigTemplate_a9966db35d58c6041012072363fd9caa73e4ffba351f35a44e3d22644729596e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:ville_add.html.twig", 1);
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
        $__internal_6f3f48db02bcb3a484d9a97bafaa64883308708b4c7f6702580e43067f9259ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3f48db02bcb3a484d9a97bafaa64883308708b4c7f6702580e43067f9259ca->enter($__internal_6f3f48db02bcb3a484d9a97bafaa64883308708b4c7f6702580e43067f9259ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:ville_add.html.twig"));

        $__internal_b5125b5307c49f2fbe867abe34b6b96220bc8a820da0beb3fe26df3d98bff0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5125b5307c49f2fbe867abe34b6b96220bc8a820da0beb3fe26df3d98bff0ab->enter($__internal_b5125b5307c49f2fbe867abe34b6b96220bc8a820da0beb3fe26df3d98bff0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:ville_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f3f48db02bcb3a484d9a97bafaa64883308708b4c7f6702580e43067f9259ca->leave($__internal_6f3f48db02bcb3a484d9a97bafaa64883308708b4c7f6702580e43067f9259ca_prof);

        
        $__internal_b5125b5307c49f2fbe867abe34b6b96220bc8a820da0beb3fe26df3d98bff0ab->leave($__internal_b5125b5307c49f2fbe867abe34b6b96220bc8a820da0beb3fe26df3d98bff0ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9384bfa5e5c9ae2ff2abe7b1264ca8b792198e466c653292cb438bb50ce43b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9384bfa5e5c9ae2ff2abe7b1264ca8b792198e466c653292cb438bb50ce43b1->enter($__internal_f9384bfa5e5c9ae2ff2abe7b1264ca8b792198e466c653292cb438bb50ce43b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b82396a6d58dd19d2c4d1e949b9f7913e7bfaae72082055a0a849ae85a1d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b82396a6d58dd19d2c4d1e949b9f7913e7bfaae72082055a0a849ae85a1d8e->enter($__internal_50b82396a6d58dd19d2c4d1e949b9f7913e7bfaae72082055a0a849ae85a1d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Villes";
        
        $__internal_50b82396a6d58dd19d2c4d1e949b9f7913e7bfaae72082055a0a849ae85a1d8e->leave($__internal_50b82396a6d58dd19d2c4d1e949b9f7913e7bfaae72082055a0a849ae85a1d8e_prof);

        
        $__internal_f9384bfa5e5c9ae2ff2abe7b1264ca8b792198e466c653292cb438bb50ce43b1->leave($__internal_f9384bfa5e5c9ae2ff2abe7b1264ca8b792198e466c653292cb438bb50ce43b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1502b4efd2280fed15f3ec5909b06a7d759e6f425746cb631e5d1986605cc54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1502b4efd2280fed15f3ec5909b06a7d759e6f425746cb631e5d1986605cc54c->enter($__internal_1502b4efd2280fed15f3ec5909b06a7d759e6f425746cb631e5d1986605cc54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e102329a01a51b447de977b1d92b53203ebf9241fce341caf229205a9ab205cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e102329a01a51b447de977b1d92b53203ebf9241fce341caf229205a9ab205cf->enter($__internal_e102329a01a51b447de977b1d92b53203ebf9241fce341caf229205a9ab205cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter une Ville</h4><br/>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"col-md-4 mb-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "departement", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "departement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"col-md-4 mb-3\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"col-md-4 mb-3\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_e102329a01a51b447de977b1d92b53203ebf9241fce341caf229205a9ab205cf->leave($__internal_e102329a01a51b447de977b1d92b53203ebf9241fce341caf229205a9ab205cf_prof);

        
        $__internal_1502b4efd2280fed15f3ec5909b06a7d759e6f425746cb631e5d1986605cc54c->leave($__internal_1502b4efd2280fed15f3ec5909b06a7d759e6f425746cb631e5d1986605cc54c_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:ville_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  113 => 28,  107 => 25,  103 => 24,  96 => 20,  92 => 19,  85 => 15,  81 => 14,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Villes{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter une Ville</h4><br/>

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.departement) }}
                {{ form_widget(form.departement, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

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
{% endblock %}", "NGGestionnaireBundle:geolocalisation:ville_add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/ville_add.html.twig");
    }
}
