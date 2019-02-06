<?php

/* NGAdministrateurBundle:Default:errorLot.html.twig */
class __TwigTemplate_4fa1096be121349f3e12d46ea981eeb3e176ad8e12f38d9a0af166de96bc6510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:errorLot.html.twig", 1);
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
        $__internal_4f3ea857d87d7a3da125e2cc30accccb27b08be566bd3b11e0ed2a4074b13375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3ea857d87d7a3da125e2cc30accccb27b08be566bd3b11e0ed2a4074b13375->enter($__internal_4f3ea857d87d7a3da125e2cc30accccb27b08be566bd3b11e0ed2a4074b13375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorLot.html.twig"));

        $__internal_7e6d1d4618477159e71e3605df911b7cc60a4558bec8fda88a0f0fd17001fc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6d1d4618477159e71e3605df911b7cc60a4558bec8fda88a0f0fd17001fc93->enter($__internal_7e6d1d4618477159e71e3605df911b7cc60a4558bec8fda88a0f0fd17001fc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorLot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3ea857d87d7a3da125e2cc30accccb27b08be566bd3b11e0ed2a4074b13375->leave($__internal_4f3ea857d87d7a3da125e2cc30accccb27b08be566bd3b11e0ed2a4074b13375_prof);

        
        $__internal_7e6d1d4618477159e71e3605df911b7cc60a4558bec8fda88a0f0fd17001fc93->leave($__internal_7e6d1d4618477159e71e3605df911b7cc60a4558bec8fda88a0f0fd17001fc93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f1c21315bd963d00b66e2afb7f4464374b86cd4befe80c07b157fe4dab2b7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1c21315bd963d00b66e2afb7f4464374b86cd4befe80c07b157fe4dab2b7c0->enter($__internal_5f1c21315bd963d00b66e2afb7f4464374b86cd4befe80c07b157fe4dab2b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acdb08409af99c62e589f6abd24a7ffe28ab0550ecd5776f5aa398724c834c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdb08409af99c62e589f6abd24a7ffe28ab0550ecd5776f5aa398724c834c2c->enter($__internal_acdb08409af99c62e589f6abd24a7ffe28ab0550ecd5776f5aa398724c834c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 500";
        
        $__internal_acdb08409af99c62e589f6abd24a7ffe28ab0550ecd5776f5aa398724c834c2c->leave($__internal_acdb08409af99c62e589f6abd24a7ffe28ab0550ecd5776f5aa398724c834c2c_prof);

        
        $__internal_5f1c21315bd963d00b66e2afb7f4464374b86cd4befe80c07b157fe4dab2b7c0->leave($__internal_5f1c21315bd963d00b66e2afb7f4464374b86cd4befe80c07b157fe4dab2b7c0_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_f229f32a0d318a6c4119f845628580f50abfe1dba4d548586ca8142e99c55512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f229f32a0d318a6c4119f845628580f50abfe1dba4d548586ca8142e99c55512->enter($__internal_f229f32a0d318a6c4119f845628580f50abfe1dba4d548586ca8142e99c55512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ef1b7462252ecf85d48f004b5599a0c6ad9c8aeb54fc22c2f21b3e9e354a6140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1b7462252ecf85d48f004b5599a0c6ad9c8aeb54fc22c2f21b3e9e354a6140->enter($__internal_ef1b7462252ecf85d48f004b5599a0c6ad9c8aeb54fc22c2f21b3e9e354a6140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 500"), "html", null, true);
        
        $__internal_ef1b7462252ecf85d48f004b5599a0c6ad9c8aeb54fc22c2f21b3e9e354a6140->leave($__internal_ef1b7462252ecf85d48f004b5599a0c6ad9c8aeb54fc22c2f21b3e9e354a6140_prof);

        
        $__internal_f229f32a0d318a6c4119f845628580f50abfe1dba4d548586ca8142e99c55512->leave($__internal_f229f32a0d318a6c4119f845628580f50abfe1dba4d548586ca8142e99c55512_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5761a5f87b16aa71b9e51afe7c15f5762d41287b43a77ca804ecc38d6cedc877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5761a5f87b16aa71b9e51afe7c15f5762d41287b43a77ca804ecc38d6cedc877->enter($__internal_5761a5f87b16aa71b9e51afe7c15f5762d41287b43a77ca804ecc38d6cedc877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb9e5f5f1fc90c0ac3783b60da1e0e9b44e147febf8e69c8e93ce3d11cf3762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9e5f5f1fc90c0ac3783b60da1e0e9b44e147febf8e69c8e93ce3d11cf3762e->enter($__internal_bb9e5f5f1fc90c0ac3783b60da1e0e9b44e147febf8e69c8e93ce3d11cf3762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 500 : Ce lot n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à la liste des copropriété"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_bb9e5f5f1fc90c0ac3783b60da1e0e9b44e147febf8e69c8e93ce3d11cf3762e->leave($__internal_bb9e5f5f1fc90c0ac3783b60da1e0e9b44e147febf8e69c8e93ce3d11cf3762e_prof);

        
        $__internal_5761a5f87b16aa71b9e51afe7c15f5762d41287b43a77ca804ecc38d6cedc877->leave($__internal_5761a5f87b16aa71b9e51afe7c15f5762d41287b43a77ca804ecc38d6cedc877_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:errorLot.html.twig";
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
        <h4>Erreur 500 : Ce lot n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/immeuble\" class=\"btn btn-outline-ngi\">{{ \"retour à la liste des copropriété\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:Default:errorLot.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/errorLot.html.twig");
    }
}
