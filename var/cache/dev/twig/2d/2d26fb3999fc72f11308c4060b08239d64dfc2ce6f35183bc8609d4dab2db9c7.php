<?php

/* NGGestionnaireBundle:immeuble:lot-add.html.twig */
class __TwigTemplate_511d1b1a49f29a529b13b77a181b4f6677fe10dc80321397c217c9fb6329e29c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:lot-add.html.twig", 1);
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
        $__internal_8d9bfdba602ac8e7d5cf843e4bd8572d0eef00ab274549672a4199277a84b8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9bfdba602ac8e7d5cf843e4bd8572d0eef00ab274549672a4199277a84b8d6->enter($__internal_8d9bfdba602ac8e7d5cf843e4bd8572d0eef00ab274549672a4199277a84b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:lot-add.html.twig"));

        $__internal_230eff94cae07f6468f6d92bde7737f501e76026558f9056169e91de0d617530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230eff94cae07f6468f6d92bde7737f501e76026558f9056169e91de0d617530->enter($__internal_230eff94cae07f6468f6d92bde7737f501e76026558f9056169e91de0d617530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:lot-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9bfdba602ac8e7d5cf843e4bd8572d0eef00ab274549672a4199277a84b8d6->leave($__internal_8d9bfdba602ac8e7d5cf843e4bd8572d0eef00ab274549672a4199277a84b8d6_prof);

        
        $__internal_230eff94cae07f6468f6d92bde7737f501e76026558f9056169e91de0d617530->leave($__internal_230eff94cae07f6468f6d92bde7737f501e76026558f9056169e91de0d617530_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4273de79f3100d284e2ddc3d42fa131ba1f4e112c39e3c4459e4af323fdcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4273de79f3100d284e2ddc3d42fa131ba1f4e112c39e3c4459e4af323fdcdc->enter($__internal_eb4273de79f3100d284e2ddc3d42fa131ba1f4e112c39e3c4459e4af323fdcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e794474afffd984ac24ad2124bf35aa89fa32e84682be65fbd029bc154cbb1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e794474afffd984ac24ad2124bf35aa89fa32e84682be65fbd029bc154cbb1b3->enter($__internal_e794474afffd984ac24ad2124bf35aa89fa32e84682be65fbd029bc154cbb1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lot";
        
        $__internal_e794474afffd984ac24ad2124bf35aa89fa32e84682be65fbd029bc154cbb1b3->leave($__internal_e794474afffd984ac24ad2124bf35aa89fa32e84682be65fbd029bc154cbb1b3_prof);

        
        $__internal_eb4273de79f3100d284e2ddc3d42fa131ba1f4e112c39e3c4459e4af323fdcdc->leave($__internal_eb4273de79f3100d284e2ddc3d42fa131ba1f4e112c39e3c4459e4af323fdcdc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b16beaee3536701c7e6bedd0daecb0a0407ae214229e2581738553eaab06225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16beaee3536701c7e6bedd0daecb0a0407ae214229e2581738553eaab06225->enter($__internal_6b16beaee3536701c7e6bedd0daecb0a0407ae214229e2581738553eaab06225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e77d7113c13c513305f32d7ceb21460a2608e2d45b87fc6504ad592f81895d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e77d7113c13c513305f32d7ceb21460a2608e2d45b87fc6504ad592f81895d->enter($__internal_20e77d7113c13c513305f32d7ceb21460a2608e2d45b87fc6504ad592f81895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter un Lot</h4><br/>

            ";
        // line 12
        if ((($context["error"] ?? $this->getContext($context, "error")) == true)) {
            // line 13
            echo "                <div class=\"alert alert-danger\">
                    Ce lot ou/et ce numéro de lot existe déjà.
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "num", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "num", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etage", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surface", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "carezze", array()), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "carezze", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLot", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proprietaire", array()), 'label');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proprietaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_20e77d7113c13c513305f32d7ceb21460a2608e2d45b87fc6504ad592f81895d->leave($__internal_20e77d7113c13c513305f32d7ceb21460a2608e2d45b87fc6504ad592f81895d_prof);

        
        $__internal_6b16beaee3536701c7e6bedd0daecb0a0407ae214229e2581738553eaab06225->leave($__internal_6b16beaee3536701c7e6bedd0daecb0a0407ae214229e2581738553eaab06225_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:lot-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 63,  175 => 61,  168 => 57,  164 => 56,  157 => 52,  153 => 51,  144 => 45,  140 => 44,  133 => 40,  129 => 39,  122 => 35,  118 => 34,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  87 => 18,  84 => 17,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Lot{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>


            <h4>Ajouter un Lot</h4><br/>

            {% if error == true %}
                <div class=\"alert alert-danger\">
                    Ce lot ou/et ce numéro de lot existe déjà.
                </div><br/>
            {% endif %}

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.num) }}
                    {{ form_widget(form.num, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.etage) }}
                    {{ form_widget(form.etage, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.surface) }}
                    {{ form_widget(form.surface, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.carezze) }}
                    {{ form_widget(form.carezze, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-4 mb-3\">
                    {{ form_label(form.prix) }}
                    {{ form_widget(form.prix, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.typeLot) }}
                    {{ form_widget(form.typeLot, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.proprietaire) }}
                    {{ form_widget(form.proprietaire, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:lot-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/lot-add.html.twig");
    }
}
