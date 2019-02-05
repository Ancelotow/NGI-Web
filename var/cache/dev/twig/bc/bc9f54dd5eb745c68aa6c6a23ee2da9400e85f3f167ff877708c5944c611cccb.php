<?php

/* NGGestionnaireBundle:immeuble:cs-add.html.twig */
class __TwigTemplate_887617a38bb57e5c7568a3dd2e41d5a5060995408a3ca91aaf38e33ebebd6467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:cs-add.html.twig", 1);
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
        $__internal_b61f4cdd3ef6492e0031f46a169e5a211e4f31684cf4b8138ed8759f18d68ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61f4cdd3ef6492e0031f46a169e5a211e4f31684cf4b8138ed8759f18d68ec4->enter($__internal_b61f4cdd3ef6492e0031f46a169e5a211e4f31684cf4b8138ed8759f18d68ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:cs-add.html.twig"));

        $__internal_a6dd760911cbab9c9341cda7f51391c8ab84b4e6b0c500f1a0d69bdab88d0845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6dd760911cbab9c9341cda7f51391c8ab84b4e6b0c500f1a0d69bdab88d0845->enter($__internal_a6dd760911cbab9c9341cda7f51391c8ab84b4e6b0c500f1a0d69bdab88d0845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:cs-add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61f4cdd3ef6492e0031f46a169e5a211e4f31684cf4b8138ed8759f18d68ec4->leave($__internal_b61f4cdd3ef6492e0031f46a169e5a211e4f31684cf4b8138ed8759f18d68ec4_prof);

        
        $__internal_a6dd760911cbab9c9341cda7f51391c8ab84b4e6b0c500f1a0d69bdab88d0845->leave($__internal_a6dd760911cbab9c9341cda7f51391c8ab84b4e6b0c500f1a0d69bdab88d0845_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d23f912ed5df1e44cece48fc43c21302354a1f4b4c11b5b3774c81109c9ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d23f912ed5df1e44cece48fc43c21302354a1f4b4c11b5b3774c81109c9ab8->enter($__internal_b6d23f912ed5df1e44cece48fc43c21302354a1f4b4c11b5b3774c81109c9ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d9df82fbe0830a861a7097f035a5cb24503f067137a882ef8d672bf48169e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9df82fbe0830a861a7097f035a5cb24503f067137a882ef8d672bf48169e92->enter($__internal_6d9df82fbe0830a861a7097f035a5cb24503f067137a882ef8d672bf48169e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CS";
        
        $__internal_6d9df82fbe0830a861a7097f035a5cb24503f067137a882ef8d672bf48169e92->leave($__internal_6d9df82fbe0830a861a7097f035a5cb24503f067137a882ef8d672bf48169e92_prof);

        
        $__internal_b6d23f912ed5df1e44cece48fc43c21302354a1f4b4c11b5b3774c81109c9ab8->leave($__internal_b6d23f912ed5df1e44cece48fc43c21302354a1f4b4c11b5b3774c81109c9ab8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0fd26a95b696c5b84f0db5396bebee73a5b17bb8a26b7f0958a893f7afe819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0fd26a95b696c5b84f0db5396bebee73a5b17bb8a26b7f0958a893f7afe819->enter($__internal_cf0fd26a95b696c5b84f0db5396bebee73a5b17bb8a26b7f0958a893f7afe819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24e1cf518ff3e2936e3d94f29ebb8cfdba237f0c010b075272fb41fbe14b2b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e1cf518ff3e2936e3d94f29ebb8cfdba237f0c010b075272fb41fbe14b2b6f->enter($__internal_24e1cf518ff3e2936e3d94f29ebb8cfdba237f0c010b075272fb41fbe14b2b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <center>

            <h4>Ajouter un Conseil Syndical</h4><br/>

            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "

            <div class=\"col-md-4 mb-3\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ref", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            <div class=\"col-md-4 mb-3\">
                <label>Date du CS</label>
                <input type=\"date\" name=\"dateCS\" class=\"form-control\" required />
            </div>

            <div class=\"col-md-4 mb-3\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pdf", array()), 'label');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pdf", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valid", array()), 'widget', array("attr" => array("class" => "btn btn-outline-ngi")));
        echo "

            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </center>
    </div>
";
        
        $__internal_24e1cf518ff3e2936e3d94f29ebb8cfdba237f0c010b075272fb41fbe14b2b6f->leave($__internal_24e1cf518ff3e2936e3d94f29ebb8cfdba237f0c010b075272fb41fbe14b2b6f_prof);

        
        $__internal_cf0fd26a95b696c5b84f0db5396bebee73a5b17bb8a26b7f0958a893f7afe819->leave($__internal_cf0fd26a95b696c5b84f0db5396bebee73a5b17bb8a26b7f0958a893f7afe819_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:cs-add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  107 => 28,  101 => 25,  97 => 24,  85 => 15,  81 => 14,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}CS{% endblock %}

{% block body %}
    <div class=\"container\">
        <center>

            <h4>Ajouter un Conseil Syndical</h4><br/>

            {{ form_start(form, {'method' : 'POST'}) }}

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.ref) }}
                {{ form_widget(form.ref, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

            <div class=\"col-md-4 mb-3\">
                <label>Date du CS</label>
                <input type=\"date\" name=\"dateCS\" class=\"form-control\" required />
            </div>

            <div class=\"col-md-4 mb-3\">
                {{ form_label(form.pdf) }}
                {{ form_widget(form.pdf, {'attr' :  {'class' : 'form-control'}}) }}
            </div>

            {{ form_widget(form.valid, {'attr' : {'class' : 'btn btn-outline-ngi'}}) }}

            {{ form_end(form) }}

        </center>
    </div>
{% endblock %}", "NGGestionnaireBundle:immeuble:cs-add.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/cs-add.html.twig");
    }
}
