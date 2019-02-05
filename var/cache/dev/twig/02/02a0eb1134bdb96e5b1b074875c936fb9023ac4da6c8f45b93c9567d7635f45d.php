<?php

/* NGAdministrateurBundle:default:error403.html.twig */
class __TwigTemplate_9e79fbf1b2f891721e19816807c716cabde125c1ad3c49be45576be0a84d95f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:default:error403.html.twig", 1);
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
        $__internal_7f21c089e417c628fdeffcba37981025e899ea475b6883914c081b4fcb03d3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f21c089e417c628fdeffcba37981025e899ea475b6883914c081b4fcb03d3fd->enter($__internal_7f21c089e417c628fdeffcba37981025e899ea475b6883914c081b4fcb03d3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:error403.html.twig"));

        $__internal_fe123ea018b2e65a7ef8b0ced50cec0058503ce1b9111eded376b98e9d2181e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe123ea018b2e65a7ef8b0ced50cec0058503ce1b9111eded376b98e9d2181e0->enter($__internal_fe123ea018b2e65a7ef8b0ced50cec0058503ce1b9111eded376b98e9d2181e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f21c089e417c628fdeffcba37981025e899ea475b6883914c081b4fcb03d3fd->leave($__internal_7f21c089e417c628fdeffcba37981025e899ea475b6883914c081b4fcb03d3fd_prof);

        
        $__internal_fe123ea018b2e65a7ef8b0ced50cec0058503ce1b9111eded376b98e9d2181e0->leave($__internal_fe123ea018b2e65a7ef8b0ced50cec0058503ce1b9111eded376b98e9d2181e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10868954ae18531081a2911d667ae73f21cd130bc59adb72c56dc9a1b3684aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10868954ae18531081a2911d667ae73f21cd130bc59adb72c56dc9a1b3684aa4->enter($__internal_10868954ae18531081a2911d667ae73f21cd130bc59adb72c56dc9a1b3684aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c898aa9e683221c7c4eaf13430a7e0abf1482abfba1e2c90b89c1ffd62085afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c898aa9e683221c7c4eaf13430a7e0abf1482abfba1e2c90b89c1ffd62085afe->enter($__internal_c898aa9e683221c7c4eaf13430a7e0abf1482abfba1e2c90b89c1ffd62085afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 403";
        
        $__internal_c898aa9e683221c7c4eaf13430a7e0abf1482abfba1e2c90b89c1ffd62085afe->leave($__internal_c898aa9e683221c7c4eaf13430a7e0abf1482abfba1e2c90b89c1ffd62085afe_prof);

        
        $__internal_10868954ae18531081a2911d667ae73f21cd130bc59adb72c56dc9a1b3684aa4->leave($__internal_10868954ae18531081a2911d667ae73f21cd130bc59adb72c56dc9a1b3684aa4_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d139328d16ece8dbd19a5adce2658985184fd39bd87ea9cc303a0379134bf5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d139328d16ece8dbd19a5adce2658985184fd39bd87ea9cc303a0379134bf5df->enter($__internal_d139328d16ece8dbd19a5adce2658985184fd39bd87ea9cc303a0379134bf5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_f9451b0637e9b1ede233c809b7956089c09cc07a25cfbdb788c495ae447214ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9451b0637e9b1ede233c809b7956089c09cc07a25cfbdb788c495ae447214ee->enter($__internal_f9451b0637e9b1ede233c809b7956089c09cc07a25cfbdb788c495ae447214ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 403"), "html", null, true);
        
        $__internal_f9451b0637e9b1ede233c809b7956089c09cc07a25cfbdb788c495ae447214ee->leave($__internal_f9451b0637e9b1ede233c809b7956089c09cc07a25cfbdb788c495ae447214ee_prof);

        
        $__internal_d139328d16ece8dbd19a5adce2658985184fd39bd87ea9cc303a0379134bf5df->leave($__internal_d139328d16ece8dbd19a5adce2658985184fd39bd87ea9cc303a0379134bf5df_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2055f453082ffdd349ba9ab9fea706c14e13373aeb005ddd11bb08fb09c585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2055f453082ffdd349ba9ab9fea706c14e13373aeb005ddd11bb08fb09c585->enter($__internal_1b2055f453082ffdd349ba9ab9fea706c14e13373aeb005ddd11bb08fb09c585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d593499b20a4b2db5bb0a139821776c7b9f238964555d03a4a67893bdcee48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d593499b20a4b2db5bb0a139821776c7b9f238964555d03a4a67893bdcee48b->enter($__internal_5d593499b20a4b2db5bb0a139821776c7b9f238964555d03a4a67893bdcee48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 403 : Accès interdit</h4><br/>
        <a href=\"/ng/\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à l'accueil"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_5d593499b20a4b2db5bb0a139821776c7b9f238964555d03a4a67893bdcee48b->leave($__internal_5d593499b20a4b2db5bb0a139821776c7b9f238964555d03a4a67893bdcee48b_prof);

        
        $__internal_1b2055f453082ffdd349ba9ab9fea706c14e13373aeb005ddd11bb08fb09c585->leave($__internal_1b2055f453082ffdd349ba9ab9fea706c14e13373aeb005ddd11bb08fb09c585_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:default:error403.html.twig";
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

{% block title %}Erreur 403{% endblock %}

{% block navbar %}{{ 'erreur 403'|upper }}{% endblock %}

{% block body %}

    <center>
        <h4>Erreur 403 : Accès interdit</h4><br/>
        <a href=\"/ng/\" class=\"btn btn-outline-ngi\">{{ \"retour à l'accueil\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:default:error403.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/default/error403.html.twig");
    }
}
