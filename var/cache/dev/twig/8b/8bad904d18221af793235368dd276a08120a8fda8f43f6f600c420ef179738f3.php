<?php

/* NGGestionnaireBundle:immeuble:add.html.twig */
class __TwigTemplate_6844e253c7497988fe54933d6f94813af8d906a155081069b66ee557444bf36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:add.html.twig", 1);
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
        $__internal_cc4052c063d916bd2c790d0e08261afda4bb5c8ba816aa32761ebc2e17ec562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4052c063d916bd2c790d0e08261afda4bb5c8ba816aa32761ebc2e17ec562a->enter($__internal_cc4052c063d916bd2c790d0e08261afda4bb5c8ba816aa32761ebc2e17ec562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:add.html.twig"));

        $__internal_26b1570566540e5ed9d12c90f15a94e1a5f4a2383b6635a7313a875d4ff1529c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b1570566540e5ed9d12c90f15a94e1a5f4a2383b6635a7313a875d4ff1529c->enter($__internal_26b1570566540e5ed9d12c90f15a94e1a5f4a2383b6635a7313a875d4ff1529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4052c063d916bd2c790d0e08261afda4bb5c8ba816aa32761ebc2e17ec562a->leave($__internal_cc4052c063d916bd2c790d0e08261afda4bb5c8ba816aa32761ebc2e17ec562a_prof);

        
        $__internal_26b1570566540e5ed9d12c90f15a94e1a5f4a2383b6635a7313a875d4ff1529c->leave($__internal_26b1570566540e5ed9d12c90f15a94e1a5f4a2383b6635a7313a875d4ff1529c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ca88b0fbac33fe459666cf5dbe89128139ded814212bc7b0c239911af852a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ca88b0fbac33fe459666cf5dbe89128139ded814212bc7b0c239911af852a4->enter($__internal_a9ca88b0fbac33fe459666cf5dbe89128139ded814212bc7b0c239911af852a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56713fd6cbcbe302331e69494508addb1261bf894bf74f6c929fdccdf73d8d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56713fd6cbcbe302331e69494508addb1261bf894bf74f6c929fdccdf73d8d75->enter($__internal_56713fd6cbcbe302331e69494508addb1261bf894bf74f6c929fdccdf73d8d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Copropriété";
        
        $__internal_56713fd6cbcbe302331e69494508addb1261bf894bf74f6c929fdccdf73d8d75->leave($__internal_56713fd6cbcbe302331e69494508addb1261bf894bf74f6c929fdccdf73d8d75_prof);

        
        $__internal_a9ca88b0fbac33fe459666cf5dbe89128139ded814212bc7b0c239911af852a4->leave($__internal_a9ca88b0fbac33fe459666cf5dbe89128139ded814212bc7b0c239911af852a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61b9f6ecbb0c86bec7b6bb773de8bc0025515c8ad05912b8028eb43c1726c4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b9f6ecbb0c86bec7b6bb773de8bc0025515c8ad05912b8028eb43c1726c4ce->enter($__internal_61b9f6ecbb0c86bec7b6bb773de8bc0025515c8ad05912b8028eb43c1726c4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9adb505791b9c2c9a9e45677e256de9ed8d130d0134aacc59f1bd5f07fb0c6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adb505791b9c2c9a9e45677e256de9ed8d130d0134aacc59f1bd5f07fb0c6ee->enter($__internal_9adb505791b9c2c9a9e45677e256de9ed8d130d0134aacc59f1bd5f07fb0c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter une Copropriété</h4><br/>

            ";
        // line 12
        if ((($context["error"] ?? $this->getContext($context, "error")) == true)) {
            // line 13
            echo "                <div class=\"alert alert-danger\">
                    Cette copropriété ou/et ce code de copropriété existe déjà.
                </div><br/>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lattitude", array()), 'label');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lattitude", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "longitude", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "longitude", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_9adb505791b9c2c9a9e45677e256de9ed8d130d0134aacc59f1bd5f07fb0c6ee->leave($__internal_9adb505791b9c2c9a9e45677e256de9ed8d130d0134aacc59f1bd5f07fb0c6ee_prof);

        
        $__internal_61b9f6ecbb0c86bec7b6bb773de8bc0025515c8ad05912b8028eb43c1726c4ce->leave($__internal_61b9f6ecbb0c86bec7b6bb773de8bc0025515c8ad05912b8028eb43c1726c4ce_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 58,  164 => 56,  157 => 52,  153 => 51,  146 => 47,  142 => 46,  133 => 40,  129 => 39,  122 => 35,  118 => 34,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  87 => 18,  84 => 17,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Copropriété{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>


            <h4>Ajouter une Copropriété</h4><br/>

            {% if error == true %}
                <div class=\"alert alert-danger\">
                    Cette copropriété ou/et ce code de copropriété existe déjà.
                </div><br/>
            {% endif %}

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.code) }}
                    {{ form_widget(form.code, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.image) }}
                    {{ form_widget(form.image, {'attr' :  {'class' : 'form-control'}}) }}
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

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.lattitude) }}
                    {{ form_widget(form.lattitude, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.longitude) }}
                    {{ form_widget(form.longitude, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/add.html.twig");
    }
}
