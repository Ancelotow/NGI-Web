<?php

/* NGAdministrateurBundle:entreprise:partenaire_index.html.twig */
class __TwigTemplate_a40c3e170b069f61e85c50c165f6d15982bbd76dbf91614e59b8a1f7d76c9b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGAdministrateurBundle:entreprise:partenaire_index.html.twig", 1);
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
        $__internal_f2e8f45cc4b8fc8d58567a161875cd0d79a2f6a905f701f85c7f6d5a118af01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e8f45cc4b8fc8d58567a161875cd0d79a2f6a905f701f85c7f6d5a118af01f->enter($__internal_f2e8f45cc4b8fc8d58567a161875cd0d79a2f6a905f701f85c7f6d5a118af01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:partenaire_index.html.twig"));

        $__internal_d688075ece927827984af28fdbb23559cc3f24b82d70bee290f9944ea53fc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d688075ece927827984af28fdbb23559cc3f24b82d70bee290f9944ea53fc2c3->enter($__internal_d688075ece927827984af28fdbb23559cc3f24b82d70bee290f9944ea53fc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:partenaire_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e8f45cc4b8fc8d58567a161875cd0d79a2f6a905f701f85c7f6d5a118af01f->leave($__internal_f2e8f45cc4b8fc8d58567a161875cd0d79a2f6a905f701f85c7f6d5a118af01f_prof);

        
        $__internal_d688075ece927827984af28fdbb23559cc3f24b82d70bee290f9944ea53fc2c3->leave($__internal_d688075ece927827984af28fdbb23559cc3f24b82d70bee290f9944ea53fc2c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c940419024406b0ff0a3159b590f6888de5bc97b4f2fbe6d4228aee2bf89a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c940419024406b0ff0a3159b590f6888de5bc97b4f2fbe6d4228aee2bf89a93->enter($__internal_6c940419024406b0ff0a3159b590f6888de5bc97b4f2fbe6d4228aee2bf89a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d2ea1667df178218996ca40ffcaa5396555ca1ab23c6600e26c9856743b37e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2ea1667df178218996ca40ffcaa5396555ca1ab23c6600e26c9856743b37e8->enter($__internal_8d2ea1667df178218996ca40ffcaa5396555ca1ab23c6600e26c9856743b37e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partenaires";
        
        $__internal_8d2ea1667df178218996ca40ffcaa5396555ca1ab23c6600e26c9856743b37e8->leave($__internal_8d2ea1667df178218996ca40ffcaa5396555ca1ab23c6600e26c9856743b37e8_prof);

        
        $__internal_6c940419024406b0ff0a3159b590f6888de5bc97b4f2fbe6d4228aee2bf89a93->leave($__internal_6c940419024406b0ff0a3159b590f6888de5bc97b4f2fbe6d4228aee2bf89a93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c440f069ff019d7d6f9d1a4192959f25d45156cff0e21f7201d601327b6d63d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c440f069ff019d7d6f9d1a4192959f25d45156cff0e21f7201d601327b6d63d0->enter($__internal_c440f069ff019d7d6f9d1a4192959f25d45156cff0e21f7201d601327b6d63d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a7560a0538bf56c65efc65cb89fa7590310fa507d8d9f6135730111af386309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7560a0538bf56c65efc65cb89fa7590310fa507d8d9f6135730111af386309->enter($__internal_7a7560a0538bf56c65efc65cb89fa7590310fa507d8d9f6135730111af386309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h4>Liste des Partenaires</h4><br/>

    <table class=\"table table-hover table-dark\">
        <thead>
        <tr>
            <th scope=\"col\">Logo</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Ville</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ents"] ?? $this->getContext($context, "ents")));
        foreach ($context['_seq'] as $context["_key"] => $context["unE"]) {
            // line 23
            echo "            <tr>
                <td><img alt=\"logo_ent\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("image/partenaires_logo/" . $this->getAttribute($context["unE"], "logo", array()))), "html", null, true);
            echo "\" class=\"img-fluid img-thumbnail\" width=\"50\" height=\"50\" /></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["unE"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["unE"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["unE"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["unE"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["unE"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unE"], "ville", array()), "nom", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table><br/>

    <a href=\"/ng/immobilier/partenaire/ajout\" class=\"btn btn-outline-ngi\">";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
        echo "</a>

";
        
        $__internal_7a7560a0538bf56c65efc65cb89fa7590310fa507d8d9f6135730111af386309->leave($__internal_7a7560a0538bf56c65efc65cb89fa7590310fa507d8d9f6135730111af386309_prof);

        
        $__internal_c440f069ff019d7d6f9d1a4192959f25d45156cff0e21f7201d601327b6d63d0->leave($__internal_c440f069ff019d7d6f9d1a4192959f25d45156cff0e21f7201d601327b6d63d0_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:entreprise:partenaire_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  126 => 33,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  90 => 23,  86 => 22,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Partenaires{% endblock %}

{% block body %}

    <h4>Liste des Partenaires</h4><br/>

    <table class=\"table table-hover table-dark\">
        <thead>
        <tr>
            <th scope=\"col\">Logo</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Ville</th>
        </tr>
        </thead>
        <tbody>
        {% for unE in ents %}
            <tr>
                <td><img alt=\"logo_ent\" src=\"{{ asset('image/partenaires_logo/' ~ unE.logo) }}\" class=\"img-fluid img-thumbnail\" width=\"50\" height=\"50\" /></td>
                <td>{{ unE.nom }}</td>
                <td>{{ unE.type }}</td>
                <td>{{ unE.tel }}</td>
                <td>{{ unE.email }}</td>
                <td>{{ unE.adresse }}</td>
                <td>{{ unE.ville.nom }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table><br/>

    <a href=\"/ng/immobilier/partenaire/ajout\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>

{% endblock %}", "NGAdministrateurBundle:entreprise:partenaire_index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/entreprise/partenaire_index.html.twig");
    }
}
