<?php

/* NGAdministrateurBundle:entreprise:user-add.html.twig */
class __TwigTemplate_e6200177303d18cea0d4a5ff4a1461849be6b8214b7854eb8c5fc8acc3bf3ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGAdministrateurBundle:entreprise:user-add.html.twig", 1);
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
        $__internal_029a45f8c56bb3d3a57444c7deb9af3de573a8874296d31f1e0ae6027cf72954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029a45f8c56bb3d3a57444c7deb9af3de573a8874296d31f1e0ae6027cf72954->enter($__internal_029a45f8c56bb3d3a57444c7deb9af3de573a8874296d31f1e0ae6027cf72954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:user-add.html.twig"));

        $__internal_8fe6db1f293a9e9722f28e95e778f3f431167b6687412cf2caff556a8db96bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe6db1f293a9e9722f28e95e778f3f431167b6687412cf2caff556a8db96bb9->enter($__internal_8fe6db1f293a9e9722f28e95e778f3f431167b6687412cf2caff556a8db96bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:user-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_029a45f8c56bb3d3a57444c7deb9af3de573a8874296d31f1e0ae6027cf72954->leave($__internal_029a45f8c56bb3d3a57444c7deb9af3de573a8874296d31f1e0ae6027cf72954_prof);

        
        $__internal_8fe6db1f293a9e9722f28e95e778f3f431167b6687412cf2caff556a8db96bb9->leave($__internal_8fe6db1f293a9e9722f28e95e778f3f431167b6687412cf2caff556a8db96bb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c87cdd1998b858f3f946baac872790b1bf0fb014d2145004188cf6465057cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c87cdd1998b858f3f946baac872790b1bf0fb014d2145004188cf6465057cab->enter($__internal_8c87cdd1998b858f3f946baac872790b1bf0fb014d2145004188cf6465057cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d66ea11cc700213c647342fa785a5785ee2df185e7b56c37a2da65a7b847ea89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66ea11cc700213c647342fa785a5785ee2df185e7b56c37a2da65a7b847ea89->enter($__internal_d66ea11cc700213c647342fa785a5785ee2df185e7b56c37a2da65a7b847ea89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Employé";
        
        $__internal_d66ea11cc700213c647342fa785a5785ee2df185e7b56c37a2da65a7b847ea89->leave($__internal_d66ea11cc700213c647342fa785a5785ee2df185e7b56c37a2da65a7b847ea89_prof);

        
        $__internal_8c87cdd1998b858f3f946baac872790b1bf0fb014d2145004188cf6465057cab->leave($__internal_8c87cdd1998b858f3f946baac872790b1bf0fb014d2145004188cf6465057cab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5083119fc0b9aecad441afff3b902b9b48bc553285f90938979687489532ba2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5083119fc0b9aecad441afff3b902b9b48bc553285f90938979687489532ba2f->enter($__internal_5083119fc0b9aecad441afff3b902b9b48bc553285f90938979687489532ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f975302255005eeb9d3847cfef5fec7fdf6dc5836c79d7d643fb500bdc1ec62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f975302255005eeb9d3847cfef5fec7fdf6dc5836c79d7d643fb500bdc1ec62c->enter($__internal_f975302255005eeb9d3847cfef5fec7fdf6dc5836c79d7d643fb500bdc1ec62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h4>Formulaire d'inscription d'employer</h4><br/>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 9
        if (array_key_exists("errorMdp", $context)) {
            // line 10
            echo "            <div class=\"alert alert-danger\">
                Les mot de passe sont différent.
            </div>
         ";
        } elseif ((        // line 13
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors') != "")) {
            // line 14
            echo "             <div class=\"alert alert-danger\">
                 L'adresse mail est déjâ utilisé.
             </div>
         ";
        } elseif ((        // line 17
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors') != "")) {
            // line 18
            echo "             <div class=\"alert alert-danger\">
                 Cet identifiant est déjâ utilisé.
             </div>
        ";
        }
        // line 22
        echo "        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                <label >Sexe</label><br/>
                <input type=\"radio\" value=\"1\" name=\"sexe\" checked>Homme&nbsp;
                <input type=\"radio\" value=\"0\"  name=\"sexe\" >Femme
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Nom</label>
                <input type=\"text\" class=\"form-control\" name=\"nom\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Prénom</label>
                <input type=\"text\" class=\"form-control\" name=\"prenom\" required>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                <label>Date de naissance</label>
                <input type=\"date\" class=\"form-control\" name=\"ddn\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Téléphone</label>
                <input type=\"text\" class=\"form-control\" name=\"tel\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label>Adresse mail</label>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
                <label >Poste</label>
                <select class=\"form-control\" name=\"poste\">
                    <option value=\"4\">Administrateur</option>
                    <option value=\"6\">Assistant comptable</option>
                    <option value=\"5\">Assitant gestionnaire</option>
                    <option value=\"1\">Comptable</option>
                    <option value=\"3\">Gérant</option>
                    <option value=\"2\" selected>Gestionnaire</option>
                </select>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label>Identifiant</label>
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
                <label>Mot de passe</label>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"col-md-6 mb-3\">
                <label>Confimation</label>
                <input type=\"password\" name=\"rmdp\" class=\"form-control\" placeholder=\"Retapez le mot de passe\" required/>
            </div>
        </div>
        <div>
            <input type=\"submit\" class=\"btn btn-outline-ngi\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ajouter"), "html", null, true);
        echo "\" />
        </div>
        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_f975302255005eeb9d3847cfef5fec7fdf6dc5836c79d7d643fb500bdc1ec62c->leave($__internal_f975302255005eeb9d3847cfef5fec7fdf6dc5836c79d7d643fb500bdc1ec62c_prof);

        
        $__internal_5083119fc0b9aecad441afff3b902b9b48bc553285f90938979687489532ba2f->leave($__internal_5083119fc0b9aecad441afff3b902b9b48bc553285f90938979687489532ba2f_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:entreprise:user-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 81,  166 => 79,  155 => 71,  146 => 65,  126 => 48,  98 => 22,  92 => 18,  90 => 17,  85 => 14,  83 => 13,  78 => 10,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Employé{% endblock %}

{% block body %}
    <div class=\"container\">
        <h4>Formulaire d'inscription d'employer</h4><br/>
        {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {% if errorMdp is defined%}
            <div class=\"alert alert-danger\">
                Les mot de passe sont différent.
            </div>
         {% elseif form_errors(form.email) != \"\" %}
             <div class=\"alert alert-danger\">
                 L'adresse mail est déjâ utilisé.
             </div>
         {% elseif form_errors(form.username) != \"\" %}
             <div class=\"alert alert-danger\">
                 Cet identifiant est déjâ utilisé.
             </div>
        {% endif %}
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                <label >Sexe</label><br/>
                <input type=\"radio\" value=\"1\" name=\"sexe\" checked>Homme&nbsp;
                <input type=\"radio\" value=\"0\"  name=\"sexe\" >Femme
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Nom</label>
                <input type=\"text\" class=\"form-control\" name=\"nom\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Prénom</label>
                <input type=\"text\" class=\"form-control\" name=\"prenom\" required>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                <label>Date de naissance</label>
                <input type=\"date\" class=\"form-control\" name=\"ddn\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label >Téléphone</label>
                <input type=\"text\" class=\"form-control\" name=\"tel\" required>
            </div>
            <div class=\"col-md-4 mb-3\">
                <label>Adresse mail</label>
                {{ form_widget(form.email, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
                <label >Poste</label>
                <select class=\"form-control\" name=\"poste\">
                    <option value=\"4\">Administrateur</option>
                    <option value=\"6\">Assistant comptable</option>
                    <option value=\"5\">Assitant gestionnaire</option>
                    <option value=\"1\">Comptable</option>
                    <option value=\"3\">Gérant</option>
                    <option value=\"2\" selected>Gestionnaire</option>
                </select>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label>Identifiant</label>
                {{ form_widget(form.username, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
                <label>Mot de passe</label>
                {{ form_widget(form.plainPassword, {'attr' : {'class' : 'form-control'}}) }}
            </div>
            <div class=\"col-md-6 mb-3\">
                <label>Confimation</label>
                <input type=\"password\" name=\"rmdp\" class=\"form-control\" placeholder=\"Retapez le mot de passe\" required/>
            </div>
        </div>
        <div>
            <input type=\"submit\" class=\"btn btn-outline-ngi\" value=\"{{ 'ajouter'|upper }}\" />
        </div>
        {{ form_end(form) }}
    </div>


{% endblock %}", "NGAdministrateurBundle:entreprise:user-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/entreprise/user-add.html.twig");
    }
}
