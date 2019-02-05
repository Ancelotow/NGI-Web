<?php

/* NGAdministrateurBundle:Default:errorCopro.html.twig */
class __TwigTemplate_2cf3bee882e0f75b3393079e2144c8069218bff82ce3c76495bfcea2eda18701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:errorCopro.html.twig", 1);
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
        $__internal_66ea781919447d320a51efe59449ff665979aab814f1d15a2d53132ea108dfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ea781919447d320a51efe59449ff665979aab814f1d15a2d53132ea108dfaa->enter($__internal_66ea781919447d320a51efe59449ff665979aab814f1d15a2d53132ea108dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorCopro.html.twig"));

        $__internal_7edbbd774d9490271ecf10555437639d7c34fd211113ce9cdafd2e3fd9e1f254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edbbd774d9490271ecf10555437639d7c34fd211113ce9cdafd2e3fd9e1f254->enter($__internal_7edbbd774d9490271ecf10555437639d7c34fd211113ce9cdafd2e3fd9e1f254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorCopro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ea781919447d320a51efe59449ff665979aab814f1d15a2d53132ea108dfaa->leave($__internal_66ea781919447d320a51efe59449ff665979aab814f1d15a2d53132ea108dfaa_prof);

        
        $__internal_7edbbd774d9490271ecf10555437639d7c34fd211113ce9cdafd2e3fd9e1f254->leave($__internal_7edbbd774d9490271ecf10555437639d7c34fd211113ce9cdafd2e3fd9e1f254_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8b6b5746a5e4f5977d99b5e904fe2d3e7b87f82be27fd706cb9358083a7d477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b6b5746a5e4f5977d99b5e904fe2d3e7b87f82be27fd706cb9358083a7d477->enter($__internal_f8b6b5746a5e4f5977d99b5e904fe2d3e7b87f82be27fd706cb9358083a7d477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_839613279e40dd936a96d332b66a217234ee5f2933fdaf74341b5558b73c7e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839613279e40dd936a96d332b66a217234ee5f2933fdaf74341b5558b73c7e87->enter($__internal_839613279e40dd936a96d332b66a217234ee5f2933fdaf74341b5558b73c7e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 500";
        
        $__internal_839613279e40dd936a96d332b66a217234ee5f2933fdaf74341b5558b73c7e87->leave($__internal_839613279e40dd936a96d332b66a217234ee5f2933fdaf74341b5558b73c7e87_prof);

        
        $__internal_f8b6b5746a5e4f5977d99b5e904fe2d3e7b87f82be27fd706cb9358083a7d477->leave($__internal_f8b6b5746a5e4f5977d99b5e904fe2d3e7b87f82be27fd706cb9358083a7d477_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_0a1f101a49dc74c8aff09bb88844c1c4175b9592d3001ae7156554e2f86ea2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1f101a49dc74c8aff09bb88844c1c4175b9592d3001ae7156554e2f86ea2d6->enter($__internal_0a1f101a49dc74c8aff09bb88844c1c4175b9592d3001ae7156554e2f86ea2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_0ab4ea9829552bd375a5b47074a9b032bca2290a549577ea81b9b0ac34637ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab4ea9829552bd375a5b47074a9b032bca2290a549577ea81b9b0ac34637ec0->enter($__internal_0ab4ea9829552bd375a5b47074a9b032bca2290a549577ea81b9b0ac34637ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 500"), "html", null, true);
        
        $__internal_0ab4ea9829552bd375a5b47074a9b032bca2290a549577ea81b9b0ac34637ec0->leave($__internal_0ab4ea9829552bd375a5b47074a9b032bca2290a549577ea81b9b0ac34637ec0_prof);

        
        $__internal_0a1f101a49dc74c8aff09bb88844c1c4175b9592d3001ae7156554e2f86ea2d6->leave($__internal_0a1f101a49dc74c8aff09bb88844c1c4175b9592d3001ae7156554e2f86ea2d6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1f9be674181370bc3aa9803f4ff03e02eb13b753d3d81467c1c9cca399072cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f9be674181370bc3aa9803f4ff03e02eb13b753d3d81467c1c9cca399072cd->enter($__internal_a1f9be674181370bc3aa9803f4ff03e02eb13b753d3d81467c1c9cca399072cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52026d3331f8f4aa1632ec5af79b37408c69076f39db5d94be26eeb03895a748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52026d3331f8f4aa1632ec5af79b37408c69076f39db5d94be26eeb03895a748->enter($__internal_52026d3331f8f4aa1632ec5af79b37408c69076f39db5d94be26eeb03895a748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 500 : Cette copropriété n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à la liste des copropriété"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_52026d3331f8f4aa1632ec5af79b37408c69076f39db5d94be26eeb03895a748->leave($__internal_52026d3331f8f4aa1632ec5af79b37408c69076f39db5d94be26eeb03895a748_prof);

        
        $__internal_a1f9be674181370bc3aa9803f4ff03e02eb13b753d3d81467c1c9cca399072cd->leave($__internal_a1f9be674181370bc3aa9803f4ff03e02eb13b753d3d81467c1c9cca399072cd_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:errorCopro.html.twig";
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
        <h4>Erreur 500 : Cette copropriété n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">{{ \"retour à la liste des copropriété\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:Default:errorCopro.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/errorCopro.html.twig");
    }
}
