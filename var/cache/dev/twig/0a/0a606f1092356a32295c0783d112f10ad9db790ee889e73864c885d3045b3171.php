<?php

/* NGAdministrateurBundle:Default:errorProp.html.twig */
class __TwigTemplate_f3aabd459af8768265f4b7b66cd1e7ba8582e53480807c192ccbffab635b5c71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:errorProp.html.twig", 1);
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
        $__internal_5cc7785d6e3ae2c537d0f0706f97f3a06046c8ae3f0848e5914a326774a4ba5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc7785d6e3ae2c537d0f0706f97f3a06046c8ae3f0848e5914a326774a4ba5f->enter($__internal_5cc7785d6e3ae2c537d0f0706f97f3a06046c8ae3f0848e5914a326774a4ba5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorProp.html.twig"));

        $__internal_2e58e5c632009553969968964afa65de847e4e49e94aa6bf4052b549bef7877c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e58e5c632009553969968964afa65de847e4e49e94aa6bf4052b549bef7877c->enter($__internal_2e58e5c632009553969968964afa65de847e4e49e94aa6bf4052b549bef7877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorProp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc7785d6e3ae2c537d0f0706f97f3a06046c8ae3f0848e5914a326774a4ba5f->leave($__internal_5cc7785d6e3ae2c537d0f0706f97f3a06046c8ae3f0848e5914a326774a4ba5f_prof);

        
        $__internal_2e58e5c632009553969968964afa65de847e4e49e94aa6bf4052b549bef7877c->leave($__internal_2e58e5c632009553969968964afa65de847e4e49e94aa6bf4052b549bef7877c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f73ce6515675ae2feca13172bf87d3146bd5a9b4a0831901b0ab36d8bc0eae94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73ce6515675ae2feca13172bf87d3146bd5a9b4a0831901b0ab36d8bc0eae94->enter($__internal_f73ce6515675ae2feca13172bf87d3146bd5a9b4a0831901b0ab36d8bc0eae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02301ef06fd0adb3050394b92a37882b1d4bf7eb64e06d94b803d742918c0365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02301ef06fd0adb3050394b92a37882b1d4bf7eb64e06d94b803d742918c0365->enter($__internal_02301ef06fd0adb3050394b92a37882b1d4bf7eb64e06d94b803d742918c0365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 500";
        
        $__internal_02301ef06fd0adb3050394b92a37882b1d4bf7eb64e06d94b803d742918c0365->leave($__internal_02301ef06fd0adb3050394b92a37882b1d4bf7eb64e06d94b803d742918c0365_prof);

        
        $__internal_f73ce6515675ae2feca13172bf87d3146bd5a9b4a0831901b0ab36d8bc0eae94->leave($__internal_f73ce6515675ae2feca13172bf87d3146bd5a9b4a0831901b0ab36d8bc0eae94_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ab608995d22e45e4fdb4adb272b579b651f0553bcc7bbe1a3d4bdb6fa59d732a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab608995d22e45e4fdb4adb272b579b651f0553bcc7bbe1a3d4bdb6fa59d732a->enter($__internal_ab608995d22e45e4fdb4adb272b579b651f0553bcc7bbe1a3d4bdb6fa59d732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_8891643b4d0a5600436161d6e48368bb1e50823be163f06cdaa8241ea2496ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8891643b4d0a5600436161d6e48368bb1e50823be163f06cdaa8241ea2496ff3->enter($__internal_8891643b4d0a5600436161d6e48368bb1e50823be163f06cdaa8241ea2496ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 500"), "html", null, true);
        
        $__internal_8891643b4d0a5600436161d6e48368bb1e50823be163f06cdaa8241ea2496ff3->leave($__internal_8891643b4d0a5600436161d6e48368bb1e50823be163f06cdaa8241ea2496ff3_prof);

        
        $__internal_ab608995d22e45e4fdb4adb272b579b651f0553bcc7bbe1a3d4bdb6fa59d732a->leave($__internal_ab608995d22e45e4fdb4adb272b579b651f0553bcc7bbe1a3d4bdb6fa59d732a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e15ed68e1587b0933932ccaa9eb3b28ced0122b089e2a80bd9ca2ae86f4b68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e15ed68e1587b0933932ccaa9eb3b28ced0122b089e2a80bd9ca2ae86f4b68b->enter($__internal_7e15ed68e1587b0933932ccaa9eb3b28ced0122b089e2a80bd9ca2ae86f4b68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e9da8df7c54bff2d93be27b9cc3036ee28c025e069ac31eadc4e2ecb751188c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9da8df7c54bff2d93be27b9cc3036ee28c025e069ac31eadc4e2ecb751188c->enter($__internal_7e9da8df7c54bff2d93be27b9cc3036ee28c025e069ac31eadc4e2ecb751188c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 500 : Ce propriétaire n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/proprietaire\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à la liste des propriétaire"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_7e9da8df7c54bff2d93be27b9cc3036ee28c025e069ac31eadc4e2ecb751188c->leave($__internal_7e9da8df7c54bff2d93be27b9cc3036ee28c025e069ac31eadc4e2ecb751188c_prof);

        
        $__internal_7e15ed68e1587b0933932ccaa9eb3b28ced0122b089e2a80bd9ca2ae86f4b68b->leave($__internal_7e15ed68e1587b0933932ccaa9eb3b28ced0122b089e2a80bd9ca2ae86f4b68b_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:errorProp.html.twig";
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
        <h4>Erreur 500 : Ce propriétaire n'éxiste pas.</h4><br/>
        <a href=\"/ng/gestion/proprietaire\" class=\"btn btn-outline-ngi\">{{ \"retour à la liste des propriétaire\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:Default:errorProp.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/errorProp.html.twig");
    }
}
