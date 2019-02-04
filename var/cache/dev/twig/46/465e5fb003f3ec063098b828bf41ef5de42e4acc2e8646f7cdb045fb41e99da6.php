<?php

/* NGAdministrateurBundle:Default:index.html.twig */
class __TwigTemplate_03a5c14f97f3eb66705abf851885e7b0b4e7e6be76063d2b2602578f684fd714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:index.html.twig", 1);
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
        $__internal_ca41e750d77968757032c271e84ae93b57e96746f7d0546da905b4df1ff86c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca41e750d77968757032c271e84ae93b57e96746f7d0546da905b4df1ff86c93->enter($__internal_ca41e750d77968757032c271e84ae93b57e96746f7d0546da905b4df1ff86c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:index.html.twig"));

        $__internal_d4eefaec9d3d57cae906b42e1c6cd76b1a6c2a51c089f521d68467fccbaf5c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eefaec9d3d57cae906b42e1c6cd76b1a6c2a51c089f521d68467fccbaf5c98->enter($__internal_d4eefaec9d3d57cae906b42e1c6cd76b1a6c2a51c089f521d68467fccbaf5c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca41e750d77968757032c271e84ae93b57e96746f7d0546da905b4df1ff86c93->leave($__internal_ca41e750d77968757032c271e84ae93b57e96746f7d0546da905b4df1ff86c93_prof);

        
        $__internal_d4eefaec9d3d57cae906b42e1c6cd76b1a6c2a51c089f521d68467fccbaf5c98->leave($__internal_d4eefaec9d3d57cae906b42e1c6cd76b1a6c2a51c089f521d68467fccbaf5c98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a50326bac4ca65c68e5ae3ca271a51d7f4380436a05b525e6363351a543ee404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50326bac4ca65c68e5ae3ca271a51d7f4380436a05b525e6363351a543ee404->enter($__internal_a50326bac4ca65c68e5ae3ca271a51d7f4380436a05b525e6363351a543ee404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54c057a983e570aa9ede22eb6034dc6c60f9be88a14bd30b2ba93653c779f8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c057a983e570aa9ede22eb6034dc6c60f9be88a14bd30b2ba93653c779f8d2->enter($__internal_54c057a983e570aa9ede22eb6034dc6c60f9be88a14bd30b2ba93653c779f8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_54c057a983e570aa9ede22eb6034dc6c60f9be88a14bd30b2ba93653c779f8d2->leave($__internal_54c057a983e570aa9ede22eb6034dc6c60f9be88a14bd30b2ba93653c779f8d2_prof);

        
        $__internal_a50326bac4ca65c68e5ae3ca271a51d7f4380436a05b525e6363351a543ee404->leave($__internal_a50326bac4ca65c68e5ae3ca271a51d7f4380436a05b525e6363351a543ee404_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_fc4152c196ff34b1e2ae83b2b2521a7ad7ee96f688dbe5cf9171e86d03af2e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4152c196ff34b1e2ae83b2b2521a7ad7ee96f688dbe5cf9171e86d03af2e45->enter($__internal_fc4152c196ff34b1e2ae83b2b2521a7ad7ee96f688dbe5cf9171e86d03af2e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_4bf548543f9b08e278db81156652a0428422ddf5398e278d96865b667d2e4079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf548543f9b08e278db81156652a0428422ddf5398e278d96865b667d2e4079->enter($__internal_4bf548543f9b08e278db81156652a0428422ddf5398e278d96865b667d2e4079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "connexion"), "html", null, true);
        
        $__internal_4bf548543f9b08e278db81156652a0428422ddf5398e278d96865b667d2e4079->leave($__internal_4bf548543f9b08e278db81156652a0428422ddf5398e278d96865b667d2e4079_prof);

        
        $__internal_fc4152c196ff34b1e2ae83b2b2521a7ad7ee96f688dbe5cf9171e86d03af2e45->leave($__internal_fc4152c196ff34b1e2ae83b2b2521a7ad7ee96f688dbe5cf9171e86d03af2e45_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_46560fae82dbccc299608d3b821d876bc5be492df10977a9942b3271919f7d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46560fae82dbccc299608d3b821d876bc5be492df10977a9942b3271919f7d49->enter($__internal_46560fae82dbccc299608d3b821d876bc5be492df10977a9942b3271919f7d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9701ebade63bbae3a53da8c1adf89e9a3f87825848ee000ec65105c53fce38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9701ebade63bbae3a53da8c1adf89e9a3f87825848ee000ec65105c53fce38a->enter($__internal_e9701ebade63bbae3a53da8c1adf89e9a3f87825848ee000ec65105c53fce38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <center>
        <h4>Connexion</h4><br/>

        ";
        // line 11
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 12
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 13
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security") == "Invalid credentials.")) {
                // line 14
                echo "                    Identifiant ou mot de passe incorrect.
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 15
($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security") == "Account is disabled.")) {
                // line 16
                echo "                    Votre compte est bloqué.<br/> Pour plus d'informations, consulté votre gérant ou votre administrateur.
                ";
            } else {
                // line 18
                echo "                    Erreur dans le code, contactez votre développeur.
                ";
            }
            // line 20
            echo "            </div><br/>
        ";
        }
        // line 22
        echo "
        <form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 24
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 25
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 27
        echo "
            <div class=\"col-md-4 mb-3\">
                <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Identifiant"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>

            <input type=\"submit\" class=\"btn btn-outline-ngi\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion"), "html", null, true);
        echo "\" />
        </form>
    </center>

    <p style=\"position: absolute; bottom: 0; left: 0; right: 0\">Version 2.1</p>
";
        
        $__internal_e9701ebade63bbae3a53da8c1adf89e9a3f87825848ee000ec65105c53fce38a->leave($__internal_e9701ebade63bbae3a53da8c1adf89e9a3f87825848ee000ec65105c53fce38a_prof);

        
        $__internal_46560fae82dbccc299608d3b821d876bc5be492df10977a9942b3271919f7d49->leave($__internal_46560fae82dbccc299608d3b821d876bc5be492df10977a9942b3271919f7d49_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  146 => 34,  139 => 30,  135 => 29,  131 => 27,  125 => 25,  123 => 24,  119 => 23,  116 => 22,  112 => 20,  108 => 18,  104 => 16,  102 => 15,  99 => 14,  97 => 13,  94 => 12,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Connexion{% endblock %}

{% block navbar %}{{ 'connexion'|upper }}{% endblock %}

{% block body %}
    <center>
        <h4>Connexion</h4><br/>

        {% if error %}
            <div class=\"alert alert-danger\">
                {%  if error.messageKey|trans(error.messageData, 'security') == \"Invalid credentials.\"%}
                    Identifiant ou mot de passe incorrect.
                {% elseif error.messageKey|trans(error.messageData, 'security') == 'Account is disabled.' %}
                    Votre compte est bloqué.<br/> Pour plus d'informations, consulté votre gérant ou votre administrateur.
                {% else %}
                    Erreur dans le code, contactez votre développeur.
                {%  endif %}
            </div><br/>
        {% endif %}

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <div class=\"col-md-4 mb-3\">
                <label for=\"username\">{{ 'Identifiant'|trans }}</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"password\">{{ 'Mot de passe'|trans }}</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>

            <input type=\"submit\" class=\"btn btn-outline-ngi\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Connexion'|trans }}\" />
        </form>
    </center>

    <p style=\"position: absolute; bottom: 0; left: 0; right: 0\">Version 2.1</p>
{% endblock %}
", "NGAdministrateurBundle:Default:index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/index.html.twig");
    }
}
