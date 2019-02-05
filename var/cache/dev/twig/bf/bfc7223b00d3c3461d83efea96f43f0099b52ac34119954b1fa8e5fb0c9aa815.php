<?php

/* NGGestionnaireBundle:geolocalisation:region_index.html.twig */
class __TwigTemplate_6eb9fe3bdd11b5ae7155487aacdbe0c258f37d58058ed6c6166a13c0816ba4ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:region_index.html.twig", 1);
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
        $__internal_9a5f5cc70d3eacf039caa970a7cf6c8b83de1badd9761423ac802d41e13cafa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5f5cc70d3eacf039caa970a7cf6c8b83de1badd9761423ac802d41e13cafa6->enter($__internal_9a5f5cc70d3eacf039caa970a7cf6c8b83de1badd9761423ac802d41e13cafa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:region_index.html.twig"));

        $__internal_31c1ce4599c7588375ef8acf51bf97c879412205c4f23eaa5ae52374310a8916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c1ce4599c7588375ef8acf51bf97c879412205c4f23eaa5ae52374310a8916->enter($__internal_31c1ce4599c7588375ef8acf51bf97c879412205c4f23eaa5ae52374310a8916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:region_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5f5cc70d3eacf039caa970a7cf6c8b83de1badd9761423ac802d41e13cafa6->leave($__internal_9a5f5cc70d3eacf039caa970a7cf6c8b83de1badd9761423ac802d41e13cafa6_prof);

        
        $__internal_31c1ce4599c7588375ef8acf51bf97c879412205c4f23eaa5ae52374310a8916->leave($__internal_31c1ce4599c7588375ef8acf51bf97c879412205c4f23eaa5ae52374310a8916_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9220db66ab7b452d34745eeefd27f815b0b06a268caccb34b25bfb5f5b7419b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9220db66ab7b452d34745eeefd27f815b0b06a268caccb34b25bfb5f5b7419b7->enter($__internal_9220db66ab7b452d34745eeefd27f815b0b06a268caccb34b25bfb5f5b7419b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3786ffa91e0cea4b5d13d49a6cd3b7b5504c46b98ed2beff27ab97cfa74c2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3786ffa91e0cea4b5d13d49a6cd3b7b5504c46b98ed2beff27ab97cfa74c2a1->enter($__internal_a3786ffa91e0cea4b5d13d49a6cd3b7b5504c46b98ed2beff27ab97cfa74c2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Régions";
        
        $__internal_a3786ffa91e0cea4b5d13d49a6cd3b7b5504c46b98ed2beff27ab97cfa74c2a1->leave($__internal_a3786ffa91e0cea4b5d13d49a6cd3b7b5504c46b98ed2beff27ab97cfa74c2a1_prof);

        
        $__internal_9220db66ab7b452d34745eeefd27f815b0b06a268caccb34b25bfb5f5b7419b7->leave($__internal_9220db66ab7b452d34745eeefd27f815b0b06a268caccb34b25bfb5f5b7419b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a17e7588a4a077f327763b9f651d5741adfc145ea10a419c9e35c5d2418b4de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17e7588a4a077f327763b9f651d5741adfc145ea10a419c9e35c5d2418b4de7->enter($__internal_a17e7588a4a077f327763b9f651d5741adfc145ea10a419c9e35c5d2418b4de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e9b6b7aaaea7ffc7b15c7f1bc3abae342c3d5c566f255a3e286424df94f4a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9b6b7aaaea7ffc7b15c7f1bc3abae342c3d5c566f255a3e286424df94f4a5f->enter($__internal_1e9b6b7aaaea7ffc7b15c7f1bc3abae342c3d5c566f255a3e286424df94f4a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <h4>Liste des Régions référencé</h4><br/>

        ";
        // line 10
        if ((twig_length_filter($this->env, ($context["regions"] ?? $this->getContext($context, "regions"))) > 0)) {
            // line 11
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Régions</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? $this->getContext($context, "regions")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneR"]) {
                // line 20
                echo "                    <tr>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneR"], "code", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneR"], "nom", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneR'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </tbody>
            </table><br/>
        ";
        } else {
            // line 28
            echo "            <div class=\"alert alert-warning\">
                Il n'y aucune région. Veuillez en ajouter.
            </div>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 34
            echo "            <a href=\"/ng/geolocalisation/region/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 36
        echo "


    </div>
";
        
        $__internal_1e9b6b7aaaea7ffc7b15c7f1bc3abae342c3d5c566f255a3e286424df94f4a5f->leave($__internal_1e9b6b7aaaea7ffc7b15c7f1bc3abae342c3d5c566f255a3e286424df94f4a5f_prof);

        
        $__internal_a17e7588a4a077f327763b9f651d5741adfc145ea10a419c9e35c5d2418b4de7->leave($__internal_a17e7588a4a077f327763b9f651d5741adfc145ea10a419c9e35c5d2418b4de7_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:region_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  122 => 34,  120 => 33,  117 => 32,  111 => 28,  106 => 25,  97 => 22,  93 => 21,  90 => 20,  86 => 19,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

        <h4>Liste des Régions référencé</h4><br/>

        {% if regions|length > 0 %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Régions</th>
                </tr>
                </thead>
                <tbody>
                {% for uneR in regions %}
                    <tr>
                        <td>{{ uneR.code }}</td>
                        <td>{{ uneR.nom }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table><br/>
        {% else %}
            <div class=\"alert alert-warning\">
                Il n'y aucune région. Veuillez en ajouter.
            </div>
        {% endif %}

        {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
            <a href=\"/ng/geolocalisation/region/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
        {% endif %}



    </div>
{% endblock %}", "NGGestionnaireBundle:geolocalisation:region_index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/region_index.html.twig");
    }
}
