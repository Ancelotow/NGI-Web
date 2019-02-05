<?php

/* NGGestionnaireBundle:geolocalisation:ville_index.html.twig */
class __TwigTemplate_511e81379c86b8aa59a8257d3929f72e0bcac755531a318aeb638e86be5a31c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:ville_index.html.twig", 1);
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
        $__internal_1498be24de82d9a2afd4e4be529f5e847061e783613ff793ae320a26c4e3886e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1498be24de82d9a2afd4e4be529f5e847061e783613ff793ae320a26c4e3886e->enter($__internal_1498be24de82d9a2afd4e4be529f5e847061e783613ff793ae320a26c4e3886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:ville_index.html.twig"));

        $__internal_5f276886f2b0b7ae86fce0112c30c82f800b064d4d9cee44395c9b8b63f68f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f276886f2b0b7ae86fce0112c30c82f800b064d4d9cee44395c9b8b63f68f2e->enter($__internal_5f276886f2b0b7ae86fce0112c30c82f800b064d4d9cee44395c9b8b63f68f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:ville_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1498be24de82d9a2afd4e4be529f5e847061e783613ff793ae320a26c4e3886e->leave($__internal_1498be24de82d9a2afd4e4be529f5e847061e783613ff793ae320a26c4e3886e_prof);

        
        $__internal_5f276886f2b0b7ae86fce0112c30c82f800b064d4d9cee44395c9b8b63f68f2e->leave($__internal_5f276886f2b0b7ae86fce0112c30c82f800b064d4d9cee44395c9b8b63f68f2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bad3df6765f42e3fa05f32768f11bf4b704ec3c121cf38a15bc6ef969f063d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad3df6765f42e3fa05f32768f11bf4b704ec3c121cf38a15bc6ef969f063d4e->enter($__internal_bad3df6765f42e3fa05f32768f11bf4b704ec3c121cf38a15bc6ef969f063d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cc1c3da60ccb6164a293d14cd89d2bd952ee81c28ee04e3af77442bd678d6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc1c3da60ccb6164a293d14cd89d2bd952ee81c28ee04e3af77442bd678d6c8->enter($__internal_7cc1c3da60ccb6164a293d14cd89d2bd952ee81c28ee04e3af77442bd678d6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Villes";
        
        $__internal_7cc1c3da60ccb6164a293d14cd89d2bd952ee81c28ee04e3af77442bd678d6c8->leave($__internal_7cc1c3da60ccb6164a293d14cd89d2bd952ee81c28ee04e3af77442bd678d6c8_prof);

        
        $__internal_bad3df6765f42e3fa05f32768f11bf4b704ec3c121cf38a15bc6ef969f063d4e->leave($__internal_bad3df6765f42e3fa05f32768f11bf4b704ec3c121cf38a15bc6ef969f063d4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d86ed94454fd3405f10b089bb58853c42f0df28774f77730f8f939978660791a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86ed94454fd3405f10b089bb58853c42f0df28774f77730f8f939978660791a->enter($__internal_d86ed94454fd3405f10b089bb58853c42f0df28774f77730f8f939978660791a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0f86c4a942770bd68792f01965e354a7fca94eac2fa9b153a26cf7c56dd5611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f86c4a942770bd68792f01965e354a7fca94eac2fa9b153a26cf7c56dd5611->enter($__internal_c0f86c4a942770bd68792f01965e354a7fca94eac2fa9b153a26cf7c56dd5611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <h4>Liste des Villes référencé</h4><br/>

        ";
        // line 10
        if ((twig_length_filter($this->env, ($context["villes"] ?? $this->getContext($context, "villes"))) > 0)) {
            // line 11
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code Postale</th>
                    <th scope=\"col\">Ville</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneV"]) {
                // line 20
                echo "                    <tr>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneV"], "cp", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["uneV"], "nom", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneV'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                </tbody>
            </table><br/>
        ";
        } else {
            // line 28
            echo "            <div class=\"alert alert-warning\">
                Il n'y aucune Villes. Veuillez en ajouter.
            </div>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 34
            echo "            <a href=\"/ng/geolocalisation/ville/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 36
        echo "
    </div>
";
        
        $__internal_c0f86c4a942770bd68792f01965e354a7fca94eac2fa9b153a26cf7c56dd5611->leave($__internal_c0f86c4a942770bd68792f01965e354a7fca94eac2fa9b153a26cf7c56dd5611_prof);

        
        $__internal_d86ed94454fd3405f10b089bb58853c42f0df28774f77730f8f939978660791a->leave($__internal_d86ed94454fd3405f10b089bb58853c42f0df28774f77730f8f939978660791a_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:ville_index.html.twig";
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

{% block title %}Villes{% endblock %}

{% block body %}
    <div class=\"container\">

        <h4>Liste des Villes référencé</h4><br/>

        {% if villes|length > 0 %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code Postale</th>
                    <th scope=\"col\">Ville</th>
                </tr>
                </thead>
                <tbody>
                {% for uneV in villes %}
                    <tr>
                        <td>{{ uneV.cp }}</td>
                        <td>{{ uneV.nom }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table><br/>
        {% else %}
            <div class=\"alert alert-warning\">
                Il n'y aucune Villes. Veuillez en ajouter.
            </div>
        {% endif %}

        {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
            <a href=\"/ng/geolocalisation/ville/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
        {% endif %}

    </div>
{% endblock %}", "NGGestionnaireBundle:geolocalisation:ville_index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/ville_index.html.twig");
    }
}
