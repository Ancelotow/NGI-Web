<?php

/* NGGestionnaireBundle:proprietaire:consult.html.twig */
class __TwigTemplate_607521d945501f04374cad525898f17d55dc2a9536aaff3d11d7d6742507ad10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:proprietaire:consult.html.twig", 1);
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
        $__internal_516b5b4aec92e3b9fa5cf9aa7a76534e3c7bfc3337dca33b1ddfb410bc2effbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516b5b4aec92e3b9fa5cf9aa7a76534e3c7bfc3337dca33b1ddfb410bc2effbb->enter($__internal_516b5b4aec92e3b9fa5cf9aa7a76534e3c7bfc3337dca33b1ddfb410bc2effbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:consult.html.twig"));

        $__internal_d0878ea104eb8826f99d36a25c54db6958c97afa495899a6c3a5038aa8a166d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0878ea104eb8826f99d36a25c54db6958c97afa495899a6c3a5038aa8a166d3->enter($__internal_d0878ea104eb8826f99d36a25c54db6958c97afa495899a6c3a5038aa8a166d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:consult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516b5b4aec92e3b9fa5cf9aa7a76534e3c7bfc3337dca33b1ddfb410bc2effbb->leave($__internal_516b5b4aec92e3b9fa5cf9aa7a76534e3c7bfc3337dca33b1ddfb410bc2effbb_prof);

        
        $__internal_d0878ea104eb8826f99d36a25c54db6958c97afa495899a6c3a5038aa8a166d3->leave($__internal_d0878ea104eb8826f99d36a25c54db6958c97afa495899a6c3a5038aa8a166d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0bb21611170ca9008acc2086160468b2f21e67beabea127776adeb433ebf2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bb21611170ca9008acc2086160468b2f21e67beabea127776adeb433ebf2dc->enter($__internal_e0bb21611170ca9008acc2086160468b2f21e67beabea127776adeb433ebf2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68df8f2162e10783377e5af54432db743466f96b9834a8bed917ce2a6de65905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68df8f2162e10783377e5af54432db743466f96b9834a8bed917ce2a6de65905->enter($__internal_68df8f2162e10783377e5af54432db743466f96b9834a8bed917ce2a6de65905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Propriétaire";
        
        $__internal_68df8f2162e10783377e5af54432db743466f96b9834a8bed917ce2a6de65905->leave($__internal_68df8f2162e10783377e5af54432db743466f96b9834a8bed917ce2a6de65905_prof);

        
        $__internal_e0bb21611170ca9008acc2086160468b2f21e67beabea127776adeb433ebf2dc->leave($__internal_e0bb21611170ca9008acc2086160468b2f21e67beabea127776adeb433ebf2dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f56d991668bfbf4999608f45a7513c01c0d69ae37b421baec7acb98eaa76a67b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56d991668bfbf4999608f45a7513c01c0d69ae37b421baec7acb98eaa76a67b->enter($__internal_f56d991668bfbf4999608f45a7513c01c0d69ae37b421baec7acb98eaa76a67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_656956fee72cab1131e9802edd165c2b878eaf91a99580697c102be02b864aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656956fee72cab1131e9802edd165c2b878eaf91a99580697c102be02b864aeb->enter($__internal_656956fee72cab1131e9802edd165c2b878eaf91a99580697c102be02b864aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

        ";
        // line 8
        if (($this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "sexe", array()) == 0)) {
            // line 9
            echo "            <h1>Mme. ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "prenom", array()), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 11
            echo "            <h1>M. ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "prenom", array()), "html", null, true);
            echo "</h1>
        ";
        }
        // line 12
        echo "<br/>
        <a href=\"/ng/gestion/proprietaire/pdf/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "id", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-danger\">Voir le PDF</a><br/><br/>

        <div class=\"row\">
            <div class=\"col-4 col-sm-6\">
                <h4><strong style=\"color:#AE1F23;\">Téléphone : </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "tel", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"col-4 col-sm-6\">
                <h4><strong style=\"color:#AE1F23;\">Adresse mail : </strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "email", array()), "html", null, true);
        echo "</h4>
            </div>
        </div><br/>

        <div class=\"row\">
            <div class=\"col-4 col-sm-12\">
                <h4><strong style=\"color:#AE1F23;\">Adresse : </strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "adresse", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "ville", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "ville", array()), "nom", array()), "html", null, true);
        echo "</h4>
            </div>
        </div><br/><br/>

        <h4>Les lots</h4>
        ";
        // line 31
        if ((twig_length_filter($this->env, ($context["lots"] ?? $this->getContext($context, "lots"))) == 0)) {
            // line 32
            echo "            <div class=\"alert alert-warning\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["prop"] ?? $this->getContext($context, "prop")), "nom", array()), "html", null, true);
            echo " ne possède aucun lot.
            </div>
        ";
        } else {
            // line 36
            echo "            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Numéro du lot</th>
                    <th scope=\"col\">";
            // line 40
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "étage"), "html", null, true);
            echo "</th>
                    <th scope=\"col\">Surface</th>
                    <th scope=\"col\">Carezze</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Type du lot</th>
                    <th scope=\"col\">PDF</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lots"] ?? $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["unL"]) {
                // line 50
                echo "                    <tr>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "num", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "etage", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "surface", array()), "html", null, true);
                echo " m²</td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "carezze", array()), "html", null, true);
                echo " m²</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "prix", array()), "html", null, true);
                echo " €</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "typeLot", array()), "nom", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"/ng/gestion/immeuble/pdf/lot/";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger\">
                                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/image/pdf-logo.png"), "html", null, true);
                echo "\" alt=\"logo-pdf\" width=\"25\" />
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unL'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </tbody>
            </table><br/>
        ";
        }
        // line 67
        echo "

    </div>
";
        
        $__internal_656956fee72cab1131e9802edd165c2b878eaf91a99580697c102be02b864aeb->leave($__internal_656956fee72cab1131e9802edd165c2b878eaf91a99580697c102be02b864aeb_prof);

        
        $__internal_f56d991668bfbf4999608f45a7513c01c0d69ae37b421baec7acb98eaa76a67b->leave($__internal_f56d991668bfbf4999608f45a7513c01c0d69ae37b421baec7acb98eaa76a67b_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:proprietaire:consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 67,  205 => 64,  194 => 59,  190 => 58,  185 => 56,  181 => 55,  177 => 54,  173 => 53,  169 => 52,  165 => 51,  162 => 50,  158 => 49,  146 => 40,  140 => 36,  132 => 33,  129 => 32,  127 => 31,  115 => 26,  106 => 20,  100 => 17,  93 => 13,  90 => 12,  82 => 11,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Propriétaire{% endblock %}

{% block body %}
    <div class=\"container\">

        {% if prop.sexe == 0 %}
            <h1>Mme. {{ prop.nom }} {{ prop.prenom }}</h1>
        {% else %}
            <h1>M. {{ prop.nom }} {{ prop.prenom }}</h1>
        {% endif %}<br/>
        <a href=\"/ng/gestion/proprietaire/pdf/{{ prop.id }}\" target=\"_blank\" class=\"btn btn-outline-danger\">Voir le PDF</a><br/><br/>

        <div class=\"row\">
            <div class=\"col-4 col-sm-6\">
                <h4><strong style=\"color:#AE1F23;\">Téléphone : </strong>{{ prop.tel }}</h4>
            </div>
            <div class=\"col-4 col-sm-6\">
                <h4><strong style=\"color:#AE1F23;\">Adresse mail : </strong>{{ prop.email }}</h4>
            </div>
        </div><br/>

        <div class=\"row\">
            <div class=\"col-4 col-sm-12\">
                <h4><strong style=\"color:#AE1F23;\">Adresse : </strong>{{ prop.adresse }}, {{ prop.ville.cp }} {{ prop.ville.nom }}</h4>
            </div>
        </div><br/><br/>

        <h4>Les lots</h4>
        {% if lots|length == 0 %}
            <div class=\"alert alert-warning\">
                {{ prop.prenom }} {{ prop.nom }} ne possède aucun lot.
            </div>
        {% else %}
            <table class=\"table table-hover table-dark\">
                <thead>
                <tr>
                    <th scope=\"col\">Numéro du lot</th>
                    <th scope=\"col\">{{ \"étage\"|upper }}</th>
                    <th scope=\"col\">Surface</th>
                    <th scope=\"col\">Carezze</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Type du lot</th>
                    <th scope=\"col\">PDF</th>
                </tr>
                </thead>
                <tbody>
                {% for unL in lots %}
                    <tr>
                        <td>{{ unL.num }}</td>
                        <td>{{ unL.etage }}</td>
                        <td>{{ unL.surface }} m²</td>
                        <td>{{ unL.carezze }} m²</td>
                        <td>{{ unL.prix }} €</td>
                        <td>{{ unL.typeLot.nom }}</td>
                        <td>
                            <a href=\"/ng/gestion/immeuble/pdf/lot/{{ unL.id }}\" target=\"_blank\" class=\"btn btn-outline-danger\">
                                <img src=\"{{ asset('/image/pdf-logo.png') }}\" alt=\"logo-pdf\" width=\"25\" />
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table><br/>
        {% endif %}


    </div>
{% endblock %}", "NGGestionnaireBundle:proprietaire:consult.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/proprietaire/consult.html.twig");
    }
}
