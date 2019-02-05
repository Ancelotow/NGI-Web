<?php

/* NGGestionnaireBundle:immeuble:prop_lot-add.html.twig */
class __TwigTemplate_af22a89f9bd82c8fba579f50bdfc74f1e8a81b24dccab9dcb042da59b9a2af55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:prop_lot-add.html.twig", 1);
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
        $__internal_4ebd301856f6c0b53c83e3e4e0cb522186aa946ec975af72469573cf9008a715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebd301856f6c0b53c83e3e4e0cb522186aa946ec975af72469573cf9008a715->enter($__internal_4ebd301856f6c0b53c83e3e4e0cb522186aa946ec975af72469573cf9008a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:prop_lot-add.html.twig"));

        $__internal_4e6da8957a68d90c2fb5de7e18cb9c47705181070b9210fb110438889e7be71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6da8957a68d90c2fb5de7e18cb9c47705181070b9210fb110438889e7be71a->enter($__internal_4e6da8957a68d90c2fb5de7e18cb9c47705181070b9210fb110438889e7be71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:prop_lot-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebd301856f6c0b53c83e3e4e0cb522186aa946ec975af72469573cf9008a715->leave($__internal_4ebd301856f6c0b53c83e3e4e0cb522186aa946ec975af72469573cf9008a715_prof);

        
        $__internal_4e6da8957a68d90c2fb5de7e18cb9c47705181070b9210fb110438889e7be71a->leave($__internal_4e6da8957a68d90c2fb5de7e18cb9c47705181070b9210fb110438889e7be71a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50275830a0502e3e7841de7a37d5b784bf4af976d3c1697067d6a23905913751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50275830a0502e3e7841de7a37d5b784bf4af976d3c1697067d6a23905913751->enter($__internal_50275830a0502e3e7841de7a37d5b784bf4af976d3c1697067d6a23905913751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81c50e4e5851e8e2f9bed558fdc5c644f191ef59f9ff0b6feee76087d55877a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c50e4e5851e8e2f9bed558fdc5c644f191ef59f9ff0b6feee76087d55877a9->enter($__internal_81c50e4e5851e8e2f9bed558fdc5c644f191ef59f9ff0b6feee76087d55877a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Propriétaire/Lot";
        
        $__internal_81c50e4e5851e8e2f9bed558fdc5c644f191ef59f9ff0b6feee76087d55877a9->leave($__internal_81c50e4e5851e8e2f9bed558fdc5c644f191ef59f9ff0b6feee76087d55877a9_prof);

        
        $__internal_50275830a0502e3e7841de7a37d5b784bf4af976d3c1697067d6a23905913751->leave($__internal_50275830a0502e3e7841de7a37d5b784bf4af976d3c1697067d6a23905913751_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02f844c6e162f69170dca2bf72ff974010da60b81ae6bba567ef499407086842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f844c6e162f69170dca2bf72ff974010da60b81ae6bba567ef499407086842->enter($__internal_02f844c6e162f69170dca2bf72ff974010da60b81ae6bba567ef499407086842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8d284f8237dcf57c2b41b5aad475a510d92cfe2c6d5de1de087224448007f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d284f8237dcf57c2b41b5aad475a510d92cfe2c6d5de1de087224448007f7a->enter($__internal_c8d284f8237dcf57c2b41b5aad475a510d92cfe2c6d5de1de087224448007f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter un Propriétaire/Lot</h4><br/>

            ";
        // line 11
        if ((($context["error"] ?? $this->getContext($context, "error")) == true)) {
            // line 12
            echo "                <div class=\"alert alert-danger\">
                    Ce lot ou/et ce numéro de lot existe déjà.
                </div><br/>
            ";
        }
        // line 16
        echo "
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'label');
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Numéro du Lot</label>
                    <input type=\"text\" name=\"num\" step=\"1\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Etage</label>
                    <input type=\"text\" name=\"etage\" class=\"form-control\" required />
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Surface (en m²)</label>
                    <input type=\"number\" name=\"surface\" step=\"0.001\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Surface carezze (en m²)</label>
                    <input type=\"number\" name=\"carezze\" step=\"0.001\" min=\"0\" class=\"form-control\" required />
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Prix (en €)</label>
                    <input type=\"number\" name=\"prix\" step=\"0.01\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Type du Lot</label>
                    <select name=\"type_lot\" class=\"form-control\">
                        <option value=\"2\">Boutique</option>
                        <option value=\"3\">Bureau</option>
                        <option value=\"5\">Cave</option>
                        <option value=\"1\">Logement</option>
                        <option value=\"4\">Parking</option>
                    </select>
                </div>
            </div>



            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_c8d284f8237dcf57c2b41b5aad475a510d92cfe2c6d5de1de087224448007f7a->leave($__internal_c8d284f8237dcf57c2b41b5aad475a510d92cfe2c6d5de1de087224448007f7a_prof);

        
        $__internal_02f844c6e162f69170dca2bf72ff974010da60b81ae6bba567ef499407086842->leave($__internal_02f844c6e162f69170dca2bf72ff974010da60b81ae6bba567ef499407086842_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:prop_lot-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 106,  218 => 104,  167 => 56,  163 => 55,  156 => 51,  152 => 50,  143 => 44,  139 => 43,  132 => 39,  128 => 38,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  97 => 22,  93 => 21,  86 => 17,  83 => 16,  77 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Propriétaire/Lot{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter un Propriétaire/Lot</h4><br/>

            {% if error == true %}
                <div class=\"alert alert-danger\">
                    Ce lot ou/et ce numéro de lot existe déjà.
                </div><br/>
            {% endif %}

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

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Numéro du Lot</label>
                    <input type=\"text\" name=\"num\" step=\"1\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Etage</label>
                    <input type=\"text\" name=\"etage\" class=\"form-control\" required />
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Surface (en m²)</label>
                    <input type=\"number\" name=\"surface\" step=\"0.001\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Surface carezze (en m²)</label>
                    <input type=\"number\" name=\"carezze\" step=\"0.001\" min=\"0\" class=\"form-control\" required />
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Prix (en €)</label>
                    <input type=\"number\" name=\"prix\" step=\"0.01\" min=\"0\" class=\"form-control\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Type du Lot</label>
                    <select name=\"type_lot\" class=\"form-control\">
                        <option value=\"2\">Boutique</option>
                        <option value=\"3\">Bureau</option>
                        <option value=\"5\">Cave</option>
                        <option value=\"1\">Logement</option>
                        <option value=\"4\">Parking</option>
                    </select>
                </div>
            </div>



            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:prop_lot-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/prop_lot-add.html.twig");
    }
}
