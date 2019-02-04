<?php

/* NGAdministrateurBundle:entreprise:users_index.html.twig */
class __TwigTemplate_319c9d93a0620f87a9912ff2bf066d843cf8e1c3feff47563aaf0b8a83dfe632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGAdministrateurBundle:entreprise:users_index.html.twig", 1);
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
        $__internal_fb2d1395fecfc0b5a1ea05a31cac9c1fa25e8caa14c0962514f5dae7ba92b610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2d1395fecfc0b5a1ea05a31cac9c1fa25e8caa14c0962514f5dae7ba92b610->enter($__internal_fb2d1395fecfc0b5a1ea05a31cac9c1fa25e8caa14c0962514f5dae7ba92b610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:users_index.html.twig"));

        $__internal_bd7c35ae5ef994ee8070722f3e348aa1ec086cf7e8e80ebde4c77483149e7ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7c35ae5ef994ee8070722f3e348aa1ec086cf7e8e80ebde4c77483149e7ec2->enter($__internal_bd7c35ae5ef994ee8070722f3e348aa1ec086cf7e8e80ebde4c77483149e7ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:users_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2d1395fecfc0b5a1ea05a31cac9c1fa25e8caa14c0962514f5dae7ba92b610->leave($__internal_fb2d1395fecfc0b5a1ea05a31cac9c1fa25e8caa14c0962514f5dae7ba92b610_prof);

        
        $__internal_bd7c35ae5ef994ee8070722f3e348aa1ec086cf7e8e80ebde4c77483149e7ec2->leave($__internal_bd7c35ae5ef994ee8070722f3e348aa1ec086cf7e8e80ebde4c77483149e7ec2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a0fb9a0748a4f1742e5329885c64585a009503fbed82dce49e8bb6e1fb43d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0fb9a0748a4f1742e5329885c64585a009503fbed82dce49e8bb6e1fb43d08->enter($__internal_4a0fb9a0748a4f1742e5329885c64585a009503fbed82dce49e8bb6e1fb43d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da678db5ab10b7e66bf4d8aad052f95a14adb51a91ab1a6f27cd99c5608005b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da678db5ab10b7e66bf4d8aad052f95a14adb51a91ab1a6f27cd99c5608005b1->enter($__internal_da678db5ab10b7e66bf4d8aad052f95a14adb51a91ab1a6f27cd99c5608005b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Employés";
        
        $__internal_da678db5ab10b7e66bf4d8aad052f95a14adb51a91ab1a6f27cd99c5608005b1->leave($__internal_da678db5ab10b7e66bf4d8aad052f95a14adb51a91ab1a6f27cd99c5608005b1_prof);

        
        $__internal_4a0fb9a0748a4f1742e5329885c64585a009503fbed82dce49e8bb6e1fb43d08->leave($__internal_4a0fb9a0748a4f1742e5329885c64585a009503fbed82dce49e8bb6e1fb43d08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d9f0798683750fa349b327a3d5b0e749c77adffb6fd624b8ef8ebb5efb60198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9f0798683750fa349b327a3d5b0e749c77adffb6fd624b8ef8ebb5efb60198->enter($__internal_4d9f0798683750fa349b327a3d5b0e749c77adffb6fd624b8ef8ebb5efb60198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14c3759f6a03ac23372e759bc606dcf60fc683cfb924ac83960ecf4f141077ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c3759f6a03ac23372e759bc606dcf60fc683cfb924ac83960ecf4f141077ca->enter($__internal_14c3759f6a03ac23372e759bc606dcf60fc683cfb924ac83960ecf4f141077ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h4>Liste des Employés</h4><br/>

    <table class=\"table table-hover table-dark\">
        <thead>
        <tr>
            <th scope=\"col\">Identifiant</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Date de Naissance</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Poste</th>
            <th scope=\"col\">Dernière connexion</th>
            <th scope=\"col\">Activé/Bloqué</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["unU"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unU"], "DDN", array()), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "poste", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unU"], "lastLogin", array()), "d/m/Y H:i:s", "Europe/Paris"), "html", null, true);
            echo "</td>
                ";
            // line 34
            if (($this->getAttribute($context["unU"], "enabled", array()) == 1)) {
                // line 35
                echo "                    <td>
                        <a href=\"/ng/immobilier/user/activer/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-success\">Activé</a>
                        <a href=\"/ng/immobilier/user/bloquer/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-danger\">Bloqué</a>
                    </td>
                ";
            } else {
                // line 40
                echo "                    <td>
                        <a href=\"/ng/immobilier/user/activer/";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">Activé</a>
                        <a href=\"/ng/immobilier/user/bloquer/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["unU"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-danger\">Bloqué</a>
                    </td>
                ";
            }
            // line 45
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unU'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table><br/>

    <a href=\"/register/\" class=\"btn btn-outline-ngi\">";
        // line 50
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
        echo "</a>

";
        
        $__internal_14c3759f6a03ac23372e759bc606dcf60fc683cfb924ac83960ecf4f141077ca->leave($__internal_14c3759f6a03ac23372e759bc606dcf60fc683cfb924ac83960ecf4f141077ca_prof);

        
        $__internal_4d9f0798683750fa349b327a3d5b0e749c77adffb6fd624b8ef8ebb5efb60198->leave($__internal_4d9f0798683750fa349b327a3d5b0e749c77adffb6fd624b8ef8ebb5efb60198_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:entreprise:users_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  162 => 47,  155 => 45,  149 => 42,  145 => 41,  142 => 40,  136 => 37,  132 => 36,  129 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  95 => 26,  92 => 25,  88 => 24,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Employés{% endblock %}

{% block body %}

    <h4>Liste des Employés</h4><br/>

    <table class=\"table table-hover table-dark\">
        <thead>
        <tr>
            <th scope=\"col\">Identifiant</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Date de Naissance</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Adresse mail</th>
            <th scope=\"col\">Poste</th>
            <th scope=\"col\">Dernière connexion</th>
            <th scope=\"col\">Activé/Bloqué</th>
        </tr>
        </thead>
        <tbody>
        {% for unU in users %}
            <tr>
                <td>{{ unU.username }}</td>
                <td>{{ unU.nom }}</td>
                <td>{{ unU.prenom }}</td>
                <td>{{ unU.DDN|date('d/m/Y', \"Europe/Paris\") }}</td>
                <td>{{ unU.tel }}</td>
                <td>{{ unU.email }}</td>
                <td>{{ unU.poste }}</td>
                <td>{{ unU.lastLogin|date('d/m/Y H:i:s', \"Europe/Paris\") }}</td>
                {% if unU.enabled == 1 %}
                    <td>
                        <a href=\"/ng/immobilier/user/activer/{{ unU.id }}\" class=\"btn btn-success\">Activé</a>
                        <a href=\"/ng/immobilier/user/bloquer/{{ unU.id }}\" class=\"btn btn-outline-danger\">Bloqué</a>
                    </td>
                {% else %}
                    <td>
                        <a href=\"/ng/immobilier/user/activer/{{ unU.id }}\" class=\"btn btn-outline-success\">Activé</a>
                        <a href=\"/ng/immobilier/user/bloquer/{{ unU.id }}\" class=\"btn btn-danger\">Bloqué</a>
                    </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table><br/>

    <a href=\"/register/\" class=\"btn btn-outline-ngi\">{{ 'ajouter'|upper }}</a>

{% endblock %}", "NGAdministrateurBundle:entreprise:users_index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/entreprise/users_index.html.twig");
    }
}
