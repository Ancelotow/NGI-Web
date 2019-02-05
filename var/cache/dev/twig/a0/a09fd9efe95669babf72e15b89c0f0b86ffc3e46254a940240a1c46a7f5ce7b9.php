<?php

/* NGGestionnaireBundle:immeuble:hab-add.html.twig */
class __TwigTemplate_e8ab31e42020054c36656ef9ddae981b60cd38f22e6677b5e0d529d372b756cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:hab-add.html.twig", 1);
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
        $__internal_38b754863a646b8f9b551dc655d77142d84ddb7f9d823ba28c65af7448a4da96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b754863a646b8f9b551dc655d77142d84ddb7f9d823ba28c65af7448a4da96->enter($__internal_38b754863a646b8f9b551dc655d77142d84ddb7f9d823ba28c65af7448a4da96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:hab-add.html.twig"));

        $__internal_0a1abd9bb82954928b1d163b91a64b318434b916dde70fff24bb0804b6fe818e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1abd9bb82954928b1d163b91a64b318434b916dde70fff24bb0804b6fe818e->enter($__internal_0a1abd9bb82954928b1d163b91a64b318434b916dde70fff24bb0804b6fe818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:hab-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b754863a646b8f9b551dc655d77142d84ddb7f9d823ba28c65af7448a4da96->leave($__internal_38b754863a646b8f9b551dc655d77142d84ddb7f9d823ba28c65af7448a4da96_prof);

        
        $__internal_0a1abd9bb82954928b1d163b91a64b318434b916dde70fff24bb0804b6fe818e->leave($__internal_0a1abd9bb82954928b1d163b91a64b318434b916dde70fff24bb0804b6fe818e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de997431284f94b18df1facca90aa43792da394aac6baac5e3e612b0bd7066b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de997431284f94b18df1facca90aa43792da394aac6baac5e3e612b0bd7066b->enter($__internal_4de997431284f94b18df1facca90aa43792da394aac6baac5e3e612b0bd7066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bcbbb91dbae2284cbad3541ca97e5602dfa831fe5214e88a43782a9aff6631d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcbbb91dbae2284cbad3541ca97e5602dfa831fe5214e88a43782a9aff6631d->enter($__internal_2bcbbb91dbae2284cbad3541ca97e5602dfa831fe5214e88a43782a9aff6631d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Habitant";
        
        $__internal_2bcbbb91dbae2284cbad3541ca97e5602dfa831fe5214e88a43782a9aff6631d->leave($__internal_2bcbbb91dbae2284cbad3541ca97e5602dfa831fe5214e88a43782a9aff6631d_prof);

        
        $__internal_4de997431284f94b18df1facca90aa43792da394aac6baac5e3e612b0bd7066b->leave($__internal_4de997431284f94b18df1facca90aa43792da394aac6baac5e3e612b0bd7066b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f46a5e4bfbc42eb7730f086a4e582454b43a7ea2bdaa6d3ab44a15fcc5e9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f46a5e4bfbc42eb7730f086a4e582454b43a7ea2bdaa6d3ab44a15fcc5e9ee->enter($__internal_32f46a5e4bfbc42eb7730f086a4e582454b43a7ea2bdaa6d3ab44a15fcc5e9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f85d5851d70462dc52e07c5fdafcdabc2749bc75e5f7510515be67cc340b2778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85d5851d70462dc52e07c5fdafcdabc2749bc75e5f7510515be67cc340b2778->enter($__internal_f85d5851d70462dc52e07c5fdafcdabc2749bc75e5f7510515be67cc340b2778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>


            <h4>Ajouter un Habitant</h4><br/>

            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"form-row\">
                <div class=\"col-md-4 mb-3\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-4 mb-3\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Date d'emménagement</label>
                    <input type=\"date\" class=\"form-control\" name=\"dateE\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lot", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Membre du CS</label><br/>
                    <input type=\"radio\" name=\"cs\" value=\"0\" onclick=\"cocherCS()\" checked />Non&nbsp;&nbsp;&nbsp;
                    <input type=\"radio\" name=\"cs\" id=\"mcs\" value=\"1\"/>Oui
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Président du CS</label><br/>
                    <input type=\"radio\" name=\"pcs\" value=\"0\" id=\"pcs2\" checked />Non&nbsp;&nbsp;&nbsp;
                    <input type=\"radio\" name=\"pcs\" id=\"pcs\" value=\"1\" onclick=\"cocherPCS()\" />Oui
                </div>
            </div>

            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            <script>
                function cocherPCS(){
                    document.getElementById('mcs').checked = true;
                }

                function cocherCS(){
                    document.getElementById('pcs2').checked = true;
                }
            </script>

        </center>
    </div>
";
        
        $__internal_f85d5851d70462dc52e07c5fdafcdabc2749bc75e5f7510515be67cc340b2778->leave($__internal_f85d5851d70462dc52e07c5fdafcdabc2749bc75e5f7510515be67cc340b2778_prof);

        
        $__internal_32f46a5e4bfbc42eb7730f086a4e582454b43a7ea2bdaa6d3ab44a15fcc5e9ee->leave($__internal_32f46a5e4bfbc42eb7730f086a4e582454b43a7ea2bdaa6d3ab44a15fcc5e9ee_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:hab-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  172 => 69,  151 => 51,  147 => 50,  133 => 39,  129 => 38,  122 => 34,  118 => 33,  109 => 27,  105 => 26,  98 => 22,  94 => 21,  87 => 17,  83 => 16,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Habitant{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>


            <h4>Ajouter un Habitant</h4><br/>

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
                    <label>Date d'emménagement</label>
                    <input type=\"date\" class=\"form-control\" name=\"dateE\" required />
                </div>

                <div class=\"col-md-6 mb-3\">
                    {{ form_label(form.lot) }}
                    {{ form_widget(form.lot, {'attr' :  {'class' : 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"col-md-6 mb-3\">
                    <label>Membre du CS</label><br/>
                    <input type=\"radio\" name=\"cs\" value=\"0\" onclick=\"cocherCS()\" checked />Non&nbsp;&nbsp;&nbsp;
                    <input type=\"radio\" name=\"cs\" id=\"mcs\" value=\"1\"/>Oui
                </div>

                <div class=\"col-md-6 mb-3\">
                    <label>Président du CS</label><br/>
                    <input type=\"radio\" name=\"pcs\" value=\"0\" id=\"pcs2\" checked />Non&nbsp;&nbsp;&nbsp;
                    <input type=\"radio\" name=\"pcs\" id=\"pcs\" value=\"1\" onclick=\"cocherPCS()\" />Oui
                </div>
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

            <script>
                function cocherPCS(){
                    document.getElementById('mcs').checked = true;
                }

                function cocherCS(){
                    document.getElementById('pcs2').checked = true;
                }
            </script>

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:hab-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/hab-add.html.twig");
    }
}
