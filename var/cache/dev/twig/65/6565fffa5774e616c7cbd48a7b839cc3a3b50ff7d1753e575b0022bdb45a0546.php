<?php

/* NGGestionnaireBundle:sinistre:liste.html.twig */
class __TwigTemplate_d8babdcaa2bcef17162b6baa54ebcfe27f2b4fad7302406e279e11e11755ca9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:sinistre:liste.html.twig", 1);
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
        $__internal_80f8e4b3ce642bb1c23cc72c8a0112adc05939da96b9965cc96701060c331f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f8e4b3ce642bb1c23cc72c8a0112adc05939da96b9965cc96701060c331f56->enter($__internal_80f8e4b3ce642bb1c23cc72c8a0112adc05939da96b9965cc96701060c331f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:sinistre:liste.html.twig"));

        $__internal_8d2ed3baf4c0b680e48274b886ace523bf325b830a6585db19425a7827511652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2ed3baf4c0b680e48274b886ace523bf325b830a6585db19425a7827511652->enter($__internal_8d2ed3baf4c0b680e48274b886ace523bf325b830a6585db19425a7827511652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:sinistre:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f8e4b3ce642bb1c23cc72c8a0112adc05939da96b9965cc96701060c331f56->leave($__internal_80f8e4b3ce642bb1c23cc72c8a0112adc05939da96b9965cc96701060c331f56_prof);

        
        $__internal_8d2ed3baf4c0b680e48274b886ace523bf325b830a6585db19425a7827511652->leave($__internal_8d2ed3baf4c0b680e48274b886ace523bf325b830a6585db19425a7827511652_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_909e032f6959148bafa165704f29b7dfc9df93150bd779bd7967ed9c24749aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909e032f6959148bafa165704f29b7dfc9df93150bd779bd7967ed9c24749aed->enter($__internal_909e032f6959148bafa165704f29b7dfc9df93150bd779bd7967ed9c24749aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2580cad8841a773869edeb76e029b45d9fe763506d72e7b9fa37dd2a3daf738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2580cad8841a773869edeb76e029b45d9fe763506d72e7b9fa37dd2a3daf738->enter($__internal_b2580cad8841a773869edeb76e029b45d9fe763506d72e7b9fa37dd2a3daf738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sinistres";
        
        $__internal_b2580cad8841a773869edeb76e029b45d9fe763506d72e7b9fa37dd2a3daf738->leave($__internal_b2580cad8841a773869edeb76e029b45d9fe763506d72e7b9fa37dd2a3daf738_prof);

        
        $__internal_909e032f6959148bafa165704f29b7dfc9df93150bd779bd7967ed9c24749aed->leave($__internal_909e032f6959148bafa165704f29b7dfc9df93150bd779bd7967ed9c24749aed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_321f84cda9ff239b1026d56d2b1382df2de21bf133f386b6ab9997b872419a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321f84cda9ff239b1026d56d2b1382df2de21bf133f386b6ab9997b872419a91->enter($__internal_321f84cda9ff239b1026d56d2b1382df2de21bf133f386b6ab9997b872419a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49be01d24793de904090657c2162362c8e800a394340b96e44d24b0ece34f20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49be01d24793de904090657c2162362c8e800a394340b96e44d24b0ece34f20a->enter($__internal_49be01d24793de904090657c2162362c8e800a394340b96e44d24b0ece34f20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">

    <h4>Liste des Sinistres référencé</h4><br/>

    ";
        // line 10
        if ((twig_length_filter($this->env, ($context["sin"] ?? $this->getContext($context, "sin"))) > 0)) {
            // line 11
            echo "        <table class=\"table table-hover table-dark\">
            <thead>
            <tr>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Code immeuble</th>
                <th scope=\"col\">Lot</th>
                <th scope=\"col\">Consulter</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sin"] ?? $this->getContext($context, "sin")));
            foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
                // line 24
                echo "                <tr>
                    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "type", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "date", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "copro", array()), "code", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                    <td><a href=\"/ng/gestion/sinistre/code/";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </tbody>
        </table><br/>
    ";
        } else {
            // line 36
            echo "        <div class=\"alert alert-warning\">
            Il n'y aucun Sinistres. Veuillez en ajouter.
        </div>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 42
            echo "        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
    ";
        }
        // line 44
        echo "
</div>
";
        
        $__internal_49be01d24793de904090657c2162362c8e800a394340b96e44d24b0ece34f20a->leave($__internal_49be01d24793de904090657c2162362c8e800a394340b96e44d24b0ece34f20a_prof);

        
        $__internal_321f84cda9ff239b1026d56d2b1382df2de21bf133f386b6ab9997b872419a91->leave($__internal_321f84cda9ff239b1026d56d2b1382df2de21bf133f386b6ab9997b872419a91_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:sinistre:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  144 => 42,  142 => 41,  139 => 40,  133 => 36,  128 => 33,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  94 => 24,  90 => 23,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Sinistres{% endblock %}

{% block body %}
<div class=\"container\">

    <h4>Liste des Sinistres référencé</h4><br/>

    {% if sin|length > 0 %}
        <table class=\"table table-hover table-dark\">
            <thead>
            <tr>
                <th scope=\"col\">Code</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Code immeuble</th>
                <th scope=\"col\">Lot</th>
                <th scope=\"col\">Consulter</th>
            </tr>
            </thead>
            <tbody>
            {% for unS in sin %}
                <tr>
                    <td>{{ unS.code }}</td>
                    <td>{{ unS.type }}</td>
                    <td>{{ unS.date }}</td>
                    <td>{{ unS.lot.copro.code }}</td>
                    <td>{{ unS.lot.num }}</td>
                    <td><a href=\"/ng/gestion/sinistre/code/{{ unS.code }}\" class=\"btn btn-outline-success\">{{ 'consulter'|upper }}</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table><br/>
    {% else %}
        <div class=\"alert alert-warning\">
            Il n'y aucun Sinistres. Veuillez en ajouter.
        </div>
    {% endif %}

    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
    {% endif %}

</div>
{% endblock %}", "NGGestionnaireBundle:sinistre:liste.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/sinistre/liste.html.twig");
    }
}
