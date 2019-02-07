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
        $__internal_3024776fc5f07c1bd7a04651916045155e53a4c584c3b96ebf35f82d2446d2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3024776fc5f07c1bd7a04651916045155e53a4c584c3b96ebf35f82d2446d2d0->enter($__internal_3024776fc5f07c1bd7a04651916045155e53a4c584c3b96ebf35f82d2446d2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:sinistre:liste.html.twig"));

        $__internal_8e32d9a9ee8b2c4eddef26bae22f560d9738750ce7354f9361d905a602eb4154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e32d9a9ee8b2c4eddef26bae22f560d9738750ce7354f9361d905a602eb4154->enter($__internal_8e32d9a9ee8b2c4eddef26bae22f560d9738750ce7354f9361d905a602eb4154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:sinistre:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3024776fc5f07c1bd7a04651916045155e53a4c584c3b96ebf35f82d2446d2d0->leave($__internal_3024776fc5f07c1bd7a04651916045155e53a4c584c3b96ebf35f82d2446d2d0_prof);

        
        $__internal_8e32d9a9ee8b2c4eddef26bae22f560d9738750ce7354f9361d905a602eb4154->leave($__internal_8e32d9a9ee8b2c4eddef26bae22f560d9738750ce7354f9361d905a602eb4154_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40dc24d9e23106c2bd601cd916ef8cee845536bfc452bf1493ced28a8e64fd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dc24d9e23106c2bd601cd916ef8cee845536bfc452bf1493ced28a8e64fd3c->enter($__internal_40dc24d9e23106c2bd601cd916ef8cee845536bfc452bf1493ced28a8e64fd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4e136252ba7e944650eeb2454c42f10856a46817ec7bdcb09e4bc74d1ba7728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e136252ba7e944650eeb2454c42f10856a46817ec7bdcb09e4bc74d1ba7728->enter($__internal_b4e136252ba7e944650eeb2454c42f10856a46817ec7bdcb09e4bc74d1ba7728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sinistres";
        
        $__internal_b4e136252ba7e944650eeb2454c42f10856a46817ec7bdcb09e4bc74d1ba7728->leave($__internal_b4e136252ba7e944650eeb2454c42f10856a46817ec7bdcb09e4bc74d1ba7728_prof);

        
        $__internal_40dc24d9e23106c2bd601cd916ef8cee845536bfc452bf1493ced28a8e64fd3c->leave($__internal_40dc24d9e23106c2bd601cd916ef8cee845536bfc452bf1493ced28a8e64fd3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33905d19c4adb196f4db76e8f4a74f71061a814561da7f3003f897de16531f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33905d19c4adb196f4db76e8f4a74f71061a814561da7f3003f897de16531f46->enter($__internal_33905d19c4adb196f4db76e8f4a74f71061a814561da7f3003f897de16531f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b2acb8b1e15ceb2644d62e4d482d2fa3018a8fc175de38af8fe295ff46e47f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2acb8b1e15ceb2644d62e4d482d2fa3018a8fc175de38af8fe295ff46e47f6->enter($__internal_6b2acb8b1e15ceb2644d62e4d482d2fa3018a8fc175de38af8fe295ff46e47f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td><a href=\"/ng/gestion/sinistre/";
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
            Il n'y aucune Copropriétés. Veuillez en ajouter.
        </div>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 42
            echo "        <a href=\"/ng/gestion/immeuble/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
    ";
        }
        // line 44
        echo "
</div>
";
        
        $__internal_6b2acb8b1e15ceb2644d62e4d482d2fa3018a8fc175de38af8fe295ff46e47f6->leave($__internal_6b2acb8b1e15ceb2644d62e4d482d2fa3018a8fc175de38af8fe295ff46e47f6_prof);

        
        $__internal_33905d19c4adb196f4db76e8f4a74f71061a814561da7f3003f897de16531f46->leave($__internal_33905d19c4adb196f4db76e8f4a74f71061a814561da7f3003f897de16531f46_prof);

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
                    <td><a href=\"/ng/gestion/sinistre/{{ unS.code }}\" class=\"btn btn-outline-success\">{{ 'consulter'|upper }}</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table><br/>
    {% else %}
        <div class=\"alert alert-warning\">
            Il n'y aucune Copropriétés. Veuillez en ajouter.
        </div>
    {% endif %}

    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
        <a href=\"/ng/gestion/immeuble/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
    {% endif %}

</div>
{% endblock %}", "NGGestionnaireBundle:sinistre:liste.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/sinistre/liste.html.twig");
    }
}
