<?php

/* NGGestionnaireBundle:immeuble:index.html.twig */
class __TwigTemplate_e89ad694aba650632c712138c33f8a1ad47d2cae6d3360cfb5f3baee48510bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:index.html.twig", 1);
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
        $__internal_d64e6842cf8efb8c786964623f74195a1b872db1e5ad82355ce88170bf0918f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64e6842cf8efb8c786964623f74195a1b872db1e5ad82355ce88170bf0918f9->enter($__internal_d64e6842cf8efb8c786964623f74195a1b872db1e5ad82355ce88170bf0918f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:index.html.twig"));

        $__internal_cd8aa88a96fb536d3f8e6fe97bd159d38e92d5ff2fa2174f3f822dacabb05bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8aa88a96fb536d3f8e6fe97bd159d38e92d5ff2fa2174f3f822dacabb05bb6->enter($__internal_cd8aa88a96fb536d3f8e6fe97bd159d38e92d5ff2fa2174f3f822dacabb05bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64e6842cf8efb8c786964623f74195a1b872db1e5ad82355ce88170bf0918f9->leave($__internal_d64e6842cf8efb8c786964623f74195a1b872db1e5ad82355ce88170bf0918f9_prof);

        
        $__internal_cd8aa88a96fb536d3f8e6fe97bd159d38e92d5ff2fa2174f3f822dacabb05bb6->leave($__internal_cd8aa88a96fb536d3f8e6fe97bd159d38e92d5ff2fa2174f3f822dacabb05bb6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a4ad4a78f9fd13eae16233e85482eebdab6f1dc742877186a3fb280290e1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a4ad4a78f9fd13eae16233e85482eebdab6f1dc742877186a3fb280290e1eb->enter($__internal_b3a4ad4a78f9fd13eae16233e85482eebdab6f1dc742877186a3fb280290e1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb7164d6ebf1df4d0db68060fe4bff643da46caa7ddd0528a4aee502708d4025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7164d6ebf1df4d0db68060fe4bff643da46caa7ddd0528a4aee502708d4025->enter($__internal_fb7164d6ebf1df4d0db68060fe4bff643da46caa7ddd0528a4aee502708d4025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Copropriétés";
        
        $__internal_fb7164d6ebf1df4d0db68060fe4bff643da46caa7ddd0528a4aee502708d4025->leave($__internal_fb7164d6ebf1df4d0db68060fe4bff643da46caa7ddd0528a4aee502708d4025_prof);

        
        $__internal_b3a4ad4a78f9fd13eae16233e85482eebdab6f1dc742877186a3fb280290e1eb->leave($__internal_b3a4ad4a78f9fd13eae16233e85482eebdab6f1dc742877186a3fb280290e1eb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfcf373af236431c6ae57079aa1f9913358111f72f768851af6bf05393f88988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcf373af236431c6ae57079aa1f9913358111f72f768851af6bf05393f88988->enter($__internal_bfcf373af236431c6ae57079aa1f9913358111f72f768851af6bf05393f88988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2895fff7c7d7fdbb7c68ab7c8aa753df6676f757bcf7fd458bb90cd5a64f10de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2895fff7c7d7fdbb7c68ab7c8aa753df6676f757bcf7fd458bb90cd5a64f10de->enter($__internal_2895fff7c7d7fdbb7c68ab7c8aa753df6676f757bcf7fd458bb90cd5a64f10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        <h4>Liste des Copropriétés référencé</h4><br/>

        ";
        // line 10
        if ((twig_length_filter($this->env, ($context["immeubles"] ?? $this->getContext($context, "immeubles"))) > 0)) {
            // line 11
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Ville</th>
                    <th scope=\"col\">Localisation</th>
                    <th scope=\"col\">Consulter</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["immeubles"] ?? $this->getContext($context, "immeubles")));
            foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
                // line 23
                echo "                    <tr>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "adresse", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unI"], "ville", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"https://www.google.com/maps/@";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "lattitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "longitude", array()), "html", null, true);
                echo ",20z\" target=\"_blank\" class=\"btn btn-outline-primary\" >
                                <img alt=\"google image\" src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo_gm.png"), "html", null, true);
                echo "\"  onmouseover=\"this.src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/position_gm.png"), "html", null, true);
                echo "';\"
                                     onmouseout=\"this.src='";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo_gm.png"), "html", null, true);
                echo "';\"width=\"30\"/>
                            </a>
                        </td>
                        <td><a href=\"/ng/gestion/immeuble/code/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-success\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </tbody>
            </table><br/>
        ";
        } else {
            // line 39
            echo "            <div class=\"alert alert-warning\">
                Il n'y aucune Copropriétés. Veuillez en ajouter.
            </div>
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 45
            echo "            <a href=\"/ng/gestion/immeuble/ajout\" class=\"btn btn-outline-ngi\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
            echo "</a>
        ";
        }
        // line 47
        echo "
    </div>
";
        
        $__internal_2895fff7c7d7fdbb7c68ab7c8aa753df6676f757bcf7fd458bb90cd5a64f10de->leave($__internal_2895fff7c7d7fdbb7c68ab7c8aa753df6676f757bcf7fd458bb90cd5a64f10de_prof);

        
        $__internal_bfcf373af236431c6ae57079aa1f9913358111f72f768851af6bf05393f88988->leave($__internal_bfcf373af236431c6ae57079aa1f9913358111f72f768851af6bf05393f88988_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 47,  154 => 45,  152 => 44,  149 => 43,  143 => 39,  138 => 36,  127 => 33,  121 => 30,  115 => 29,  109 => 28,  104 => 26,  100 => 25,  96 => 24,  93 => 23,  89 => 22,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Copropriétés{% endblock %}

{% block body %}
    <div class=\"container\">

        <h4>Liste des Copropriétés référencé</h4><br/>

        {% if immeubles|length > 0 %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Code</th>
                    <th scope=\"col\">Adresse</th>
                    <th scope=\"col\">Ville</th>
                    <th scope=\"col\">Localisation</th>
                    <th scope=\"col\">Consulter</th>
                </tr>
                </thead>
                <tbody>
                {% for unI in immeubles %}
                    <tr>
                        <td>{{ unI.code }}</td>
                        <td>{{ unI.adresse }}</td>
                        <td>{{ unI.ville.nom }}</td>
                        <td>
                            <a href=\"https://www.google.com/maps/@{{ unI.lattitude }},{{ unI.longitude }},20z\" target=\"_blank\" class=\"btn btn-outline-primary\" >
                                <img alt=\"google image\" src=\"{{ asset('image/logo_gm.png') }}\"  onmouseover=\"this.src='{{ asset(\"image/position_gm.png\")}}';\"
                                     onmouseout=\"this.src='{{ asset(\"image/logo_gm.png\")}}';\"width=\"30\"/>
                            </a>
                        </td>
                        <td><a href=\"/ng/gestion/immeuble/code/{{ unI.code }}\" class=\"btn btn-outline-success\">{{ 'consulter'|upper }}</a></td>
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
{% endblock %}", "NGGestionnaireBundle:immeuble:index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/index.html.twig");
    }
}
