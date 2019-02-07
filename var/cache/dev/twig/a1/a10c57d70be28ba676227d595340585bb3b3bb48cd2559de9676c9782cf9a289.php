<?php

/* NGAdministrateurBundle:Default:errorHab.html.twig */
class __TwigTemplate_0a9cf52fcdb5b77b08aaec7325c26014cb9cd158d8056e9341eed29f3e54cfd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:errorHab.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":administrateur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2af3de5e28df926dd6566e185bd033bbf37a31d8891278bb9bab0224a9cef45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af3de5e28df926dd6566e185bd033bbf37a31d8891278bb9bab0224a9cef45d->enter($__internal_2af3de5e28df926dd6566e185bd033bbf37a31d8891278bb9bab0224a9cef45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorHab.html.twig"));

        $__internal_b4aa2fd08e0d738fc690559d08c26320b136629beb46ba5a60dbaa5ddcad7d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4aa2fd08e0d738fc690559d08c26320b136629beb46ba5a60dbaa5ddcad7d4e->enter($__internal_b4aa2fd08e0d738fc690559d08c26320b136629beb46ba5a60dbaa5ddcad7d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorHab.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af3de5e28df926dd6566e185bd033bbf37a31d8891278bb9bab0224a9cef45d->leave($__internal_2af3de5e28df926dd6566e185bd033bbf37a31d8891278bb9bab0224a9cef45d_prof);

        
        $__internal_b4aa2fd08e0d738fc690559d08c26320b136629beb46ba5a60dbaa5ddcad7d4e->leave($__internal_b4aa2fd08e0d738fc690559d08c26320b136629beb46ba5a60dbaa5ddcad7d4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbb07459201a2575cf36e0aeb88dc32ee24944ecbbe1db354efaeee75e2bc7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb07459201a2575cf36e0aeb88dc32ee24944ecbbe1db354efaeee75e2bc7ae->enter($__internal_bbb07459201a2575cf36e0aeb88dc32ee24944ecbbe1db354efaeee75e2bc7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddf0eb820b3b64f8717feb65478e8a9233e8846879bc25fa33f317c24da1732e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf0eb820b3b64f8717feb65478e8a9233e8846879bc25fa33f317c24da1732e->enter($__internal_ddf0eb820b3b64f8717feb65478e8a9233e8846879bc25fa33f317c24da1732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 500";
        
        $__internal_ddf0eb820b3b64f8717feb65478e8a9233e8846879bc25fa33f317c24da1732e->leave($__internal_ddf0eb820b3b64f8717feb65478e8a9233e8846879bc25fa33f317c24da1732e_prof);

        
        $__internal_bbb07459201a2575cf36e0aeb88dc32ee24944ecbbe1db354efaeee75e2bc7ae->leave($__internal_bbb07459201a2575cf36e0aeb88dc32ee24944ecbbe1db354efaeee75e2bc7ae_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_517f8c22fa68429f606fa76512ee2e67fd229a8ac3fb88d177a38c16e3f29cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517f8c22fa68429f606fa76512ee2e67fd229a8ac3fb88d177a38c16e3f29cd2->enter($__internal_517f8c22fa68429f606fa76512ee2e67fd229a8ac3fb88d177a38c16e3f29cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_20610352056dd2d6143a68c59883e7d5ab952ae4447ac39dfc84d3931b862abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20610352056dd2d6143a68c59883e7d5ab952ae4447ac39dfc84d3931b862abb->enter($__internal_20610352056dd2d6143a68c59883e7d5ab952ae4447ac39dfc84d3931b862abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 500"), "html", null, true);
        
        $__internal_20610352056dd2d6143a68c59883e7d5ab952ae4447ac39dfc84d3931b862abb->leave($__internal_20610352056dd2d6143a68c59883e7d5ab952ae4447ac39dfc84d3931b862abb_prof);

        
        $__internal_517f8c22fa68429f606fa76512ee2e67fd229a8ac3fb88d177a38c16e3f29cd2->leave($__internal_517f8c22fa68429f606fa76512ee2e67fd229a8ac3fb88d177a38c16e3f29cd2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7f8733c47b45c07eb344b46074b6f67ceb411cb0307e5b242b312771849532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7f8733c47b45c07eb344b46074b6f67ceb411cb0307e5b242b312771849532->enter($__internal_0e7f8733c47b45c07eb344b46074b6f67ceb411cb0307e5b242b312771849532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c44866bde8fd831cd8f225730ae380ab9fa45e23cf65c5dfa6bb892ca44b57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c44866bde8fd831cd8f225730ae380ab9fa45e23cf65c5dfa6bb892ca44b57c->enter($__internal_9c44866bde8fd831cd8f225730ae380ab9fa45e23cf65c5dfa6bb892ca44b57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 500 : Cet habitant n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à la liste des copropriété"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_9c44866bde8fd831cd8f225730ae380ab9fa45e23cf65c5dfa6bb892ca44b57c->leave($__internal_9c44866bde8fd831cd8f225730ae380ab9fa45e23cf65c5dfa6bb892ca44b57c_prof);

        
        $__internal_0e7f8733c47b45c07eb344b46074b6f67ceb411cb0307e5b242b312771849532->leave($__internal_0e7f8733c47b45c07eb344b46074b6f67ceb411cb0307e5b242b312771849532_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:errorHab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends':administrateur:base.html.twig' %}

{% block title %}Erreur 500{% endblock %}

{% block navbar %}{{ 'erreur 500'|upper }}{% endblock %}

{% block body %}

    <center>
        <h4>Erreur 500 : Cet habitant n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">{{ \"retour à la liste des copropriété\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:Default:errorHab.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/errorHab.html.twig");
    }
}
