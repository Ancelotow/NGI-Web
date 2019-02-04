<?php

/* NGGestionnaireBundle:proprietaire:index.html.twig */
class __TwigTemplate_5e6033dd543cf4408540741767d09710fb108ac50ef27031b7ddb1b9ead1af36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:proprietaire:index.html.twig", 1);
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
        $__internal_5e44644c720a89b22481952046af1d28102d785758f0614cec8d3e547db10a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e44644c720a89b22481952046af1d28102d785758f0614cec8d3e547db10a47->enter($__internal_5e44644c720a89b22481952046af1d28102d785758f0614cec8d3e547db10a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:index.html.twig"));

        $__internal_2f89318a299a076c8d5c05e92bee1ca1f8a2eadb2943299d9eb81655c7b29dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f89318a299a076c8d5c05e92bee1ca1f8a2eadb2943299d9eb81655c7b29dcc->enter($__internal_2f89318a299a076c8d5c05e92bee1ca1f8a2eadb2943299d9eb81655c7b29dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e44644c720a89b22481952046af1d28102d785758f0614cec8d3e547db10a47->leave($__internal_5e44644c720a89b22481952046af1d28102d785758f0614cec8d3e547db10a47_prof);

        
        $__internal_2f89318a299a076c8d5c05e92bee1ca1f8a2eadb2943299d9eb81655c7b29dcc->leave($__internal_2f89318a299a076c8d5c05e92bee1ca1f8a2eadb2943299d9eb81655c7b29dcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ffdd44d201eea9496c7395b79b0232883ce6d5988b26a0bc02d1bd282a55b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffdd44d201eea9496c7395b79b0232883ce6d5988b26a0bc02d1bd282a55b63->enter($__internal_4ffdd44d201eea9496c7395b79b0232883ce6d5988b26a0bc02d1bd282a55b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e24486de4c72a26416a6d268687c62f18c51e3c5d5114659551ed1cc78d8741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e24486de4c72a26416a6d268687c62f18c51e3c5d5114659551ed1cc78d8741->enter($__internal_0e24486de4c72a26416a6d268687c62f18c51e3c5d5114659551ed1cc78d8741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Propriétaires";
        
        $__internal_0e24486de4c72a26416a6d268687c62f18c51e3c5d5114659551ed1cc78d8741->leave($__internal_0e24486de4c72a26416a6d268687c62f18c51e3c5d5114659551ed1cc78d8741_prof);

        
        $__internal_4ffdd44d201eea9496c7395b79b0232883ce6d5988b26a0bc02d1bd282a55b63->leave($__internal_4ffdd44d201eea9496c7395b79b0232883ce6d5988b26a0bc02d1bd282a55b63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f551a889518b0d53ced3d0705b3c138f6e1e4801c2e42648acd147dc9857018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f551a889518b0d53ced3d0705b3c138f6e1e4801c2e42648acd147dc9857018->enter($__internal_2f551a889518b0d53ced3d0705b3c138f6e1e4801c2e42648acd147dc9857018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_296e758f97c167d4feaafca4e5b3d8a92b92cff72fe74ddd9f26561bc6423f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296e758f97c167d4feaafca4e5b3d8a92b92cff72fe74ddd9f26561bc6423f46->enter($__internal_296e758f97c167d4feaafca4e5b3d8a92b92cff72fe74ddd9f26561bc6423f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <h4>Liste des Propriétaire référencé</h4><br/>

        ";
        // line 10
        if ((twig_length_filter($this->env, ($context["props"] ?? $this->getContext($context, "props"))) > 0)) {
            // line 11
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Adresse mail</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Ville</th>
                    <th scope=\"col\">Consulter</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? $this->getContext($context, "props")));
            foreach ($context['_seq'] as $context["_key"] => $context["unP"]) {
                // line 25
                echo "                    <tr>
                        ";
                // line 26
                if (($this->getAttribute($context["unP"], "sexe", array()) == 0)) {
                    // line 27
                    echo "                            <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "nom", array()), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 29
                    echo "                            <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "nom", array()), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 31
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "prenom", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "tel", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "email", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["unP"], "adresse", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "ville", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"#\" class=\"btn btn-outline-success\">";
                // line 36
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </tbody>
            </table><br/>
        ";
        } else {
            // line 42
            echo "            <div class=\"alert alert-warning\">
                Il n'y aucun Proprietaire. Veuillez en ajouter.
            </div>
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 48
            echo "            <a href=\"/ng/gestion/proprietaire/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 50
        echo "
    </div>
";
        
        $__internal_296e758f97c167d4feaafca4e5b3d8a92b92cff72fe74ddd9f26561bc6423f46->leave($__internal_296e758f97c167d4feaafca4e5b3d8a92b92cff72fe74ddd9f26561bc6423f46_prof);

        
        $__internal_2f551a889518b0d53ced3d0705b3c138f6e1e4801c2e42648acd147dc9857018->leave($__internal_2f551a889518b0d53ced3d0705b3c138f6e1e4801c2e42648acd147dc9857018_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:proprietaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  158 => 48,  156 => 47,  153 => 46,  147 => 42,  142 => 39,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  112 => 31,  106 => 29,  100 => 27,  98 => 26,  95 => 25,  91 => 24,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Propriétaires{% endblock %}

{% block body %}
    <div class=\"container\">

        <h4>Liste des Propriétaire référencé</h4><br/>

        {% if props|length > 0 %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prénom</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Adresse mail</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Ville</th>
                    <th scope=\"col\">Consulter</th>
                </tr>
                </thead>
                <tbody>
                {% for unP in props %}
                    <tr>
                        {% if unP.sexe == 0 %}
                            <td>Mme. {{ unP.nom }}</td>
                        {% else %}
                            <td>M. {{ unP.nom }}</td>
                        {% endif %}
                        <td>{{ unP.prenom }}</td>
                        <td>{{ unP.tel }}</td>
                        <td>{{ unP.email }}</td>
                        <td>{{ unP.adresse }}</td>
                        <td>{{ unP.ville.nom }}</td>
                        <td><a href=\"#\" class=\"btn btn-outline-success\">{{ 'consulter'|upper }}</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table><br/>
        {% else %}
            <div class=\"alert alert-warning\">
                Il n'y aucun Proprietaire. Veuillez en ajouter.
            </div>
        {% endif %}

        {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
            <a href=\"/ng/gestion/proprietaire/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>
        {% endif %}

    </div>
{% endblock %}", "NGGestionnaireBundle:proprietaire:index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/proprietaire/index.html.twig");
    }
}
