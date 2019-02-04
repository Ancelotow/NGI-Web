<?php

/* NGAdministrateurBundle:default:home.html.twig */
class __TwigTemplate_31792d7a001f2f221390fc3a9eacc228824fbc6fe537cc756e8c390c05eb37b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGAdministrateurBundle:default:home.html.twig", 1);
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
        $__internal_732dec8eac40cab971712c2bea3130ef2d992bc1c362213f5185be88e1d109cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732dec8eac40cab971712c2bea3130ef2d992bc1c362213f5185be88e1d109cf->enter($__internal_732dec8eac40cab971712c2bea3130ef2d992bc1c362213f5185be88e1d109cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:home.html.twig"));

        $__internal_c1c6ad7324b1db58f9d2a11a7affc6d731eef13284175581a78d9f59f5a740ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c6ad7324b1db58f9d2a11a7affc6d731eef13284175581a78d9f59f5a740ea->enter($__internal_c1c6ad7324b1db58f9d2a11a7affc6d731eef13284175581a78d9f59f5a740ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732dec8eac40cab971712c2bea3130ef2d992bc1c362213f5185be88e1d109cf->leave($__internal_732dec8eac40cab971712c2bea3130ef2d992bc1c362213f5185be88e1d109cf_prof);

        
        $__internal_c1c6ad7324b1db58f9d2a11a7affc6d731eef13284175581a78d9f59f5a740ea->leave($__internal_c1c6ad7324b1db58f9d2a11a7affc6d731eef13284175581a78d9f59f5a740ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7506e24e1e4229ea9b676a4b6e02bb435d5afaf35bb4e14964a4f2eb3321f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7506e24e1e4229ea9b676a4b6e02bb435d5afaf35bb4e14964a4f2eb3321f2c->enter($__internal_b7506e24e1e4229ea9b676a4b6e02bb435d5afaf35bb4e14964a4f2eb3321f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19288c9b000a17fc169c171e99459de987fb2520ad099b3fb78007b3052da609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19288c9b000a17fc169c171e99459de987fb2520ad099b3fb78007b3052da609->enter($__internal_19288c9b000a17fc169c171e99459de987fb2520ad099b3fb78007b3052da609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_19288c9b000a17fc169c171e99459de987fb2520ad099b3fb78007b3052da609->leave($__internal_19288c9b000a17fc169c171e99459de987fb2520ad099b3fb78007b3052da609_prof);

        
        $__internal_b7506e24e1e4229ea9b676a4b6e02bb435d5afaf35bb4e14964a4f2eb3321f2c->leave($__internal_b7506e24e1e4229ea9b676a4b6e02bb435d5afaf35bb4e14964a4f2eb3321f2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3330f58a4fdccd97abcb752063ae74aafa89a8709c72a62ff0e0ea7ecee37050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3330f58a4fdccd97abcb752063ae74aafa89a8709c72a62ff0e0ea7ecee37050->enter($__internal_3330f58a4fdccd97abcb752063ae74aafa89a8709c72a62ff0e0ea7ecee37050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a34fc12923933898a92d94b81bb3df1c80900a2a1943540ea13d87669fa6b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a34fc12923933898a92d94b81bb3df1c80900a2a1943540ea13d87669fa6b33->enter($__internal_6a34fc12923933898a92d94b81bb3df1c80900a2a1943540ea13d87669fa6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <h2>Bonjour ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "utilisateur", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "utilisateur", array()), "nom", array()), "html", null, true);
        echo "</h2>

        <h6>Dernière connexion : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d/m/Y H:i:s", "Europe/Paris"), "html", null, true);
        echo "</h6>

";
        
        $__internal_6a34fc12923933898a92d94b81bb3df1c80900a2a1943540ea13d87669fa6b33->leave($__internal_6a34fc12923933898a92d94b81bb3df1c80900a2a1943540ea13d87669fa6b33_prof);

        
        $__internal_3330f58a4fdccd97abcb752063ae74aafa89a8709c72a62ff0e0ea7ecee37050->leave($__internal_3330f58a4fdccd97abcb752063ae74aafa89a8709c72a62ff0e0ea7ecee37050_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Accueil{% endblock %}

{% block body %}

        <h2>Bonjour {{ app.user.utilisateur.prenom }} {{ app.user.utilisateur.nom }}</h2>

        <h6>Dernière connexion : {{ app.user.lastLogin|date('d/m/Y H:i:s', \"Europe/Paris\") }}</h6>

{% endblock %}", "NGAdministrateurBundle:default:home.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/default/home.html.twig");
    }
}
