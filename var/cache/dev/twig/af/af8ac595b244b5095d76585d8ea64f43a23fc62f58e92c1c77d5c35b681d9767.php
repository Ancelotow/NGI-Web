<?php

/* NGGestionnaireBundle:immeuble:ag-add.html.twig */
class __TwigTemplate_f48c8c513c9fc4c47bdc796e003e8636c47bea21b9aa63fd8077578e954f1939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:ag-add.html.twig", 1);
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
        $__internal_3ec6398fc47a1ce0cd3a5c366ea45c6cd37e96c2279167a8d5dd2c5579df2b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec6398fc47a1ce0cd3a5c366ea45c6cd37e96c2279167a8d5dd2c5579df2b7c->enter($__internal_3ec6398fc47a1ce0cd3a5c366ea45c6cd37e96c2279167a8d5dd2c5579df2b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:ag-add.html.twig"));

        $__internal_d975e0b023470815051f3c69e79fc47555855237036cad41e7349012811ddc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d975e0b023470815051f3c69e79fc47555855237036cad41e7349012811ddc11->enter($__internal_d975e0b023470815051f3c69e79fc47555855237036cad41e7349012811ddc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:ag-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec6398fc47a1ce0cd3a5c366ea45c6cd37e96c2279167a8d5dd2c5579df2b7c->leave($__internal_3ec6398fc47a1ce0cd3a5c366ea45c6cd37e96c2279167a8d5dd2c5579df2b7c_prof);

        
        $__internal_d975e0b023470815051f3c69e79fc47555855237036cad41e7349012811ddc11->leave($__internal_d975e0b023470815051f3c69e79fc47555855237036cad41e7349012811ddc11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34cc659156d87b2670614415fcffeae5d1f8fca3f6d4a9f5762dc4743e928880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cc659156d87b2670614415fcffeae5d1f8fca3f6d4a9f5762dc4743e928880->enter($__internal_34cc659156d87b2670614415fcffeae5d1f8fca3f6d4a9f5762dc4743e928880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03233f090b296d1a88d3a94449960e1416a09be96edfb26b1feead637f20db3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03233f090b296d1a88d3a94449960e1416a09be96edfb26b1feead637f20db3d->enter($__internal_03233f090b296d1a88d3a94449960e1416a09be96edfb26b1feead637f20db3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AG";
        
        $__internal_03233f090b296d1a88d3a94449960e1416a09be96edfb26b1feead637f20db3d->leave($__internal_03233f090b296d1a88d3a94449960e1416a09be96edfb26b1feead637f20db3d_prof);

        
        $__internal_34cc659156d87b2670614415fcffeae5d1f8fca3f6d4a9f5762dc4743e928880->leave($__internal_34cc659156d87b2670614415fcffeae5d1f8fca3f6d4a9f5762dc4743e928880_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5980037023a8cffbefa32c19d792d6faa2342249f83ff7157d8b9c755d6afda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5980037023a8cffbefa32c19d792d6faa2342249f83ff7157d8b9c755d6afda->enter($__internal_a5980037023a8cffbefa32c19d792d6faa2342249f83ff7157d8b9c755d6afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_314caec733c9b1912db46218476e2b566d356754b13cbba33fa8a9e60de1496b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314caec733c9b1912db46218476e2b566d356754b13cbba33fa8a9e60de1496b->enter($__internal_314caec733c9b1912db46218476e2b566d356754b13cbba33fa8a9e60de1496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter une Assemblé Générale</h4><br/>

            ";
        // line 12
        if ((twig_length_filter($this->env, ($context["habs"] ?? $this->getContext($context, "habs"))) == 0)) {
            // line 13
            echo "                <div class=\"alert alert-warning\">
                    Il n'y a aucun habitants sur cet immeuble.
                </div>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ref", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbDecision", array()), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbDecision", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Date de l'AG</label>
                    <input type=\"date\" name=\"dateAG\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pdf", array()), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pdf", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label><strong>Liste de présence : </strong></label><br/>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["habs"] ?? $this->getContext($context, "habs")));
        foreach ($context['_seq'] as $context["_key"] => $context["unH"]) {
            // line 46
            echo "                    <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["unH"], "id", array()) . $this->getAttribute($context["unH"], "nom", array())), "html", null, true);
            echo "\" />&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "prenom", array()), "html", null, true);
            echo "<br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unH'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div><br/>

            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_314caec733c9b1912db46218476e2b566d356754b13cbba33fa8a9e60de1496b->leave($__internal_314caec733c9b1912db46218476e2b566d356754b13cbba33fa8a9e60de1496b_prof);

        
        $__internal_a5980037023a8cffbefa32c19d792d6faa2342249f83ff7157d8b9c755d6afda->leave($__internal_a5980037023a8cffbefa32c19d792d6faa2342249f83ff7157d8b9c755d6afda_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:ag-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 52,  156 => 50,  152 => 48,  139 => 46,  135 => 45,  127 => 40,  123 => 39,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  87 => 18,  84 => 17,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AG{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>


            <h4>Ajouter une Assemblé Générale</h4><br/>

            {% if habs|length == 0   %}
                <div class=\"alert alert-warning\">
                    Il n'y a aucun habitants sur cet immeuble.
                </div>
            {% endif %}

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.ref) }}
                    {{ form_widget(form.ref, {'attr' :  {'class' : 'form-control'}}) }}
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.nbDecision) }}
                    {{ form_widget(form.nbDecision, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Date de l'AG</label>
                    <input type=\"date\" name=\"dateAG\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.pdf) }}
                    {{ form_widget(form.pdf, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 mb-3\">
                <label><strong>Liste de présence : </strong></label><br/>
                {% for unH in habs %}
                    <input type=\"checkbox\" name=\"{{ unH.id ~ unH.nom }}\" />&nbsp;{{ unH.nom }} {{ unH.prenom  }}<br/>
                {% endfor %}
            </div><br/>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:ag-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/ag-add.html.twig");
    }
}
