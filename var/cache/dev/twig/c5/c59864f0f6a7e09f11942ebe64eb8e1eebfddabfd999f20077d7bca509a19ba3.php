<?php

/* NGAdministrateurBundle:entreprise:partenaire_add.html.twig */
class __TwigTemplate_c25dd0d16e909756dbcfca8b7da3b73c05a380b4f86d46b1489fb4b78c60ba58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGAdministrateurBundle:entreprise:partenaire_add.html.twig", 1);
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
        $__internal_1a7614c83775217f9acdbc4646ee41ac41d9fe82a3c6e203e4647ab79f260369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7614c83775217f9acdbc4646ee41ac41d9fe82a3c6e203e4647ab79f260369->enter($__internal_1a7614c83775217f9acdbc4646ee41ac41d9fe82a3c6e203e4647ab79f260369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:partenaire_add.html.twig"));

        $__internal_e308723a7a69a3b3527d869e7e4e7e74410aad1e2b9d4ecc7fbe0b806567ac5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e308723a7a69a3b3527d869e7e4e7e74410aad1e2b9d4ecc7fbe0b806567ac5e->enter($__internal_e308723a7a69a3b3527d869e7e4e7e74410aad1e2b9d4ecc7fbe0b806567ac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:entreprise:partenaire_add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7614c83775217f9acdbc4646ee41ac41d9fe82a3c6e203e4647ab79f260369->leave($__internal_1a7614c83775217f9acdbc4646ee41ac41d9fe82a3c6e203e4647ab79f260369_prof);

        
        $__internal_e308723a7a69a3b3527d869e7e4e7e74410aad1e2b9d4ecc7fbe0b806567ac5e->leave($__internal_e308723a7a69a3b3527d869e7e4e7e74410aad1e2b9d4ecc7fbe0b806567ac5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c240bd7ef58e652df04cffdc5fae4ad6429a019ba553e4935fa27fefe540632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c240bd7ef58e652df04cffdc5fae4ad6429a019ba553e4935fa27fefe540632->enter($__internal_4c240bd7ef58e652df04cffdc5fae4ad6429a019ba553e4935fa27fefe540632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de06a18477b621bb87417cbda6912a983d7c24764e33f9a0986a0d22a9953d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de06a18477b621bb87417cbda6912a983d7c24764e33f9a0986a0d22a9953d9c->enter($__internal_de06a18477b621bb87417cbda6912a983d7c24764e33f9a0986a0d22a9953d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Partenaire";
        
        $__internal_de06a18477b621bb87417cbda6912a983d7c24764e33f9a0986a0d22a9953d9c->leave($__internal_de06a18477b621bb87417cbda6912a983d7c24764e33f9a0986a0d22a9953d9c_prof);

        
        $__internal_4c240bd7ef58e652df04cffdc5fae4ad6429a019ba553e4935fa27fefe540632->leave($__internal_4c240bd7ef58e652df04cffdc5fae4ad6429a019ba553e4935fa27fefe540632_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4082fc7456b8bac49803d61780b2e28e5ab8cd42299c1f6ad4df426b90a3b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4082fc7456b8bac49803d61780b2e28e5ab8cd42299c1f6ad4df426b90a3b7b->enter($__internal_d4082fc7456b8bac49803d61780b2e28e5ab8cd42299c1f6ad4df426b90a3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01e9ac6ff9699b214e7c5b3dcc45c56d657d95630fef5f1f51864101d5fab495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e9ac6ff9699b214e7c5b3dcc45c56d657d95630fef5f1f51864101d5fab495->enter($__internal_01e9ac6ff9699b214e7c5b3dcc45c56d657d95630fef5f1f51864101d5fab495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter un Partenaire</h4><br/>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "logo", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "logo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_01e9ac6ff9699b214e7c5b3dcc45c56d657d95630fef5f1f51864101d5fab495->leave($__internal_01e9ac6ff9699b214e7c5b3dcc45c56d657d95630fef5f1f51864101d5fab495_prof);

        
        $__internal_d4082fc7456b8bac49803d61780b2e28e5ab8cd42299c1f6ad4df426b90a3b7b->leave($__internal_d4082fc7456b8bac49803d61780b2e28e5ab8cd42299c1f6ad4df426b90a3b7b_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:entreprise:partenaire_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  163 => 54,  156 => 50,  152 => 49,  145 => 45,  141 => 44,  132 => 38,  128 => 37,  121 => 33,  117 => 32,  108 => 26,  104 => 25,  97 => 21,  93 => 20,  86 => 16,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Partenaire{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter un Partenaire</h4><br/>

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.nom) }}
                    {{ form_widget(form.nom, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.type) }}
                    {{ form_widget(form.type, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.logo) }}
                    {{ form_widget(form.logo, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.tel) }}
                    {{ form_widget(form.tel, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.adresse) }}
                    {{ form_widget(form.adresse, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.ville) }}
                    {{ form_widget(form.ville, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGAdministrateurBundle:entreprise:partenaire_add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/entreprise/partenaire_add.html.twig");
    }
}
