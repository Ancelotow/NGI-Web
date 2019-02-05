<?php

/* NGGestionnaireBundle:geolocalisation:dept_index.html.twig */
class __TwigTemplate_575468038205711b72830b228bb51f717687ee8883789a10cae14de1cf740453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:dept_index.html.twig", 1);
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
        $__internal_d84d30be0545f522f34b752f8353e2ae2b1e098e014af01917752051ff64f641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84d30be0545f522f34b752f8353e2ae2b1e098e014af01917752051ff64f641->enter($__internal_d84d30be0545f522f34b752f8353e2ae2b1e098e014af01917752051ff64f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:dept_index.html.twig"));

        $__internal_3423f4943546b22725511f6d513aaf23d3f00c7f951749fecfdf8290de022764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3423f4943546b22725511f6d513aaf23d3f00c7f951749fecfdf8290de022764->enter($__internal_3423f4943546b22725511f6d513aaf23d3f00c7f951749fecfdf8290de022764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:dept_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84d30be0545f522f34b752f8353e2ae2b1e098e014af01917752051ff64f641->leave($__internal_d84d30be0545f522f34b752f8353e2ae2b1e098e014af01917752051ff64f641_prof);

        
        $__internal_3423f4943546b22725511f6d513aaf23d3f00c7f951749fecfdf8290de022764->leave($__internal_3423f4943546b22725511f6d513aaf23d3f00c7f951749fecfdf8290de022764_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4157df28046ea37c1d2ba3f9503b94e195b7c39e36da29f71cfbad1477d1fa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4157df28046ea37c1d2ba3f9503b94e195b7c39e36da29f71cfbad1477d1fa12->enter($__internal_4157df28046ea37c1d2ba3f9503b94e195b7c39e36da29f71cfbad1477d1fa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89dec5ba1007b13aff542c4a769a8e0f9a68b727e1ac1ff64c30377a32a24633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dec5ba1007b13aff542c4a769a8e0f9a68b727e1ac1ff64c30377a32a24633->enter($__internal_89dec5ba1007b13aff542c4a769a8e0f9a68b727e1ac1ff64c30377a32a24633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Départements";
        
        $__internal_89dec5ba1007b13aff542c4a769a8e0f9a68b727e1ac1ff64c30377a32a24633->leave($__internal_89dec5ba1007b13aff542c4a769a8e0f9a68b727e1ac1ff64c30377a32a24633_prof);

        
        $__internal_4157df28046ea37c1d2ba3f9503b94e195b7c39e36da29f71cfbad1477d1fa12->leave($__internal_4157df28046ea37c1d2ba3f9503b94e195b7c39e36da29f71cfbad1477d1fa12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f3ce31c7514a82e8aaaa4c0b9bed8330a50fcfd56f285aaadb37407a623f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f3ce31c7514a82e8aaaa4c0b9bed8330a50fcfd56f285aaadb37407a623f44->enter($__internal_18f3ce31c7514a82e8aaaa4c0b9bed8330a50fcfd56f285aaadb37407a623f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eabbafe635f97a0dd3c365bed84a77c289171ee40b1fbedf6ef7701e32b5670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eabbafe635f97a0dd3c365bed84a77c289171ee40b1fbedf6ef7701e32b5670->enter($__internal_1eabbafe635f97a0dd3c365bed84a77c289171ee40b1fbedf6ef7701e32b5670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <h4>Liste des Départements référencé</h4><br/>

        ";
        // line 10
        if ((twig_length_filter($this->env, ($context["depts"] ?? $this->getContext($context, "depts"))) > 0)) {
            // line 11
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Département</th>
                    <th scope=\"col\">Région</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["depts"] ?? $this->getContext($context, "depts")));
            foreach ($context['_seq'] as $context["_key"] => $context["unD"]) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["unD"], "code", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["unD"], "nom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unD"], "region", array()), "nom", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unD'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </tbody>
            </table><br/>
        ";
        } else {
            // line 30
            echo "            <div class=\"alert alert-warning\">
                Il n'y aucun Départements. Veuillez en ajouter.
            </div>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 36
            echo "            <a href=\"/ng/geolocalisation/departement/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 38
        echo "


    </div>
";
        
        $__internal_1eabbafe635f97a0dd3c365bed84a77c289171ee40b1fbedf6ef7701e32b5670->leave($__internal_1eabbafe635f97a0dd3c365bed84a77c289171ee40b1fbedf6ef7701e32b5670_prof);

        
        $__internal_18f3ce31c7514a82e8aaaa4c0b9bed8330a50fcfd56f285aaadb37407a623f44->leave($__internal_18f3ce31c7514a82e8aaaa4c0b9bed8330a50fcfd56f285aaadb37407a623f44_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:dept_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  127 => 36,  125 => 35,  122 => 34,  116 => 30,  111 => 27,  102 => 24,  98 => 23,  94 => 22,  91 => 21,  87 => 20,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Départements{% endblock %}

{% block body %}
    <div class=\"container\">

        <h4>Liste des Départements référencé</h4><br/>

        {% if depts|length > 0 %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Département</th>
                    <th scope=\"col\">Région</th>
                </tr>
                </thead>
                <tbody>
                {% for unD in depts %}
                    <tr>
                        <td>{{ unD.code }}</td>
                        <td>{{ unD.nom }}</td>
                        <td>{{ unD.region.nom }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table><br/>
        {% else %}
            <div class=\"alert alert-warning\">
                Il n'y aucun Départements. Veuillez en ajouter.
            </div>
        {% endif %}

        {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
            <a href=\"/ng/geolocalisation/departement/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
        {% endif %}



    </div>
{% endblock %}", "NGGestionnaireBundle:geolocalisation:dept_index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/dept_index.html.twig");
    }
}
