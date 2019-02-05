<?php

/* NGGestionnaireBundle:proprietaire:add.html.twig */
class __TwigTemplate_5c27fb0ed86d73c6f188ac8a005dc739db6498e75133d65f034f50539d05ce60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:proprietaire:add.html.twig", 1);
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
        $__internal_07cb0e9ba0ed35dad530250ae250f58a61fa4388bbcd1e0fb29b103e590a6b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cb0e9ba0ed35dad530250ae250f58a61fa4388bbcd1e0fb29b103e590a6b7d->enter($__internal_07cb0e9ba0ed35dad530250ae250f58a61fa4388bbcd1e0fb29b103e590a6b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:add.html.twig"));

        $__internal_d258f08b93d42b2cde7f74ff6c7261583c993ab1acac015e9d712034af3b6c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d258f08b93d42b2cde7f74ff6c7261583c993ab1acac015e9d712034af3b6c5f->enter($__internal_d258f08b93d42b2cde7f74ff6c7261583c993ab1acac015e9d712034af3b6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:proprietaire:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07cb0e9ba0ed35dad530250ae250f58a61fa4388bbcd1e0fb29b103e590a6b7d->leave($__internal_07cb0e9ba0ed35dad530250ae250f58a61fa4388bbcd1e0fb29b103e590a6b7d_prof);

        
        $__internal_d258f08b93d42b2cde7f74ff6c7261583c993ab1acac015e9d712034af3b6c5f->leave($__internal_d258f08b93d42b2cde7f74ff6c7261583c993ab1acac015e9d712034af3b6c5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f105cc179534bdb58f21c8f42133023f7fd7b43841e863ec1397fb1b1f8980fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f105cc179534bdb58f21c8f42133023f7fd7b43841e863ec1397fb1b1f8980fc->enter($__internal_f105cc179534bdb58f21c8f42133023f7fd7b43841e863ec1397fb1b1f8980fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a71b1e4490d524fcd022e35e53822904d9c0646063a2a5acb3592939d12c59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a71b1e4490d524fcd022e35e53822904d9c0646063a2a5acb3592939d12c59a->enter($__internal_8a71b1e4490d524fcd022e35e53822904d9c0646063a2a5acb3592939d12c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Propriétaire";
        
        $__internal_8a71b1e4490d524fcd022e35e53822904d9c0646063a2a5acb3592939d12c59a->leave($__internal_8a71b1e4490d524fcd022e35e53822904d9c0646063a2a5acb3592939d12c59a_prof);

        
        $__internal_f105cc179534bdb58f21c8f42133023f7fd7b43841e863ec1397fb1b1f8980fc->leave($__internal_f105cc179534bdb58f21c8f42133023f7fd7b43841e863ec1397fb1b1f8980fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a72840918c08991ab887a36d1ca641aab35eede13a1449aaff000975937ff5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72840918c08991ab887a36d1ca641aab35eede13a1449aaff000975937ff5ca->enter($__internal_a72840918c08991ab887a36d1ca641aab35eede13a1449aaff000975937ff5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ca5a5658f2a50ee03e152b0b11d95bc9bf45409251063220de51f98f671f6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca5a5658f2a50ee03e152b0b11d95bc9bf45409251063220de51f98f671f6a7->enter($__internal_6ca5a5658f2a50ee03e152b0b11d95bc9bf45409251063220de51f98f671f6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter un Propriétaire</h4><br/>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        
        $__internal_6ca5a5658f2a50ee03e152b0b11d95bc9bf45409251063220de51f98f671f6a7->leave($__internal_6ca5a5658f2a50ee03e152b0b11d95bc9bf45409251063220de51f98f671f6a7_prof);

        
        $__internal_a72840918c08991ab887a36d1ca641aab35eede13a1449aaff000975937ff5ca->leave($__internal_a72840918c08991ab887a36d1ca641aab35eede13a1449aaff000975937ff5ca_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:proprietaire:add.html.twig";
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

{% block title %}Propriétaire{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter un Propriétaire</h4><br/>

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.sexe) }}
                    {{ form_widget(form.sexe, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.nom) }}
                    {{ form_widget(form.nom, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.prenom) }}
                    {{ form_widget(form.prenom, {'attr' :  {'class' : 'form-control'}}) }}
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
{% endblock %}", "NGGestionnaireBundle:proprietaire:add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/proprietaire/add.html.twig");
    }
}
