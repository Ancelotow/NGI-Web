<?php

/* NGGestionnaireBundle:geolocalisation:carte.html.twig */
class __TwigTemplate_b28db4c57607c23fff551010c3e5e5d9d0379e9704878dd73f8b45f3d1f113e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:geolocalisation:carte.html.twig", 1);
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
        $__internal_0b366e05f78f0cfee3a914839ac0ba8209d43afa5f51180bcb807db051fd6d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b366e05f78f0cfee3a914839ac0ba8209d43afa5f51180bcb807db051fd6d05->enter($__internal_0b366e05f78f0cfee3a914839ac0ba8209d43afa5f51180bcb807db051fd6d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $__internal_806938c7ee5f0e5e514461be3f7f6780327c274f7b1466d4b7f19b8439d79aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806938c7ee5f0e5e514461be3f7f6780327c274f7b1466d4b7f19b8439d79aec->enter($__internal_806938c7ee5f0e5e514461be3f7f6780327c274f7b1466d4b7f19b8439d79aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b366e05f78f0cfee3a914839ac0ba8209d43afa5f51180bcb807db051fd6d05->leave($__internal_0b366e05f78f0cfee3a914839ac0ba8209d43afa5f51180bcb807db051fd6d05_prof);

        
        $__internal_806938c7ee5f0e5e514461be3f7f6780327c274f7b1466d4b7f19b8439d79aec->leave($__internal_806938c7ee5f0e5e514461be3f7f6780327c274f7b1466d4b7f19b8439d79aec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6334e978cc404ec2fd64b7044d66325dbc5b2f4d0238444abd10f173d071f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6334e978cc404ec2fd64b7044d66325dbc5b2f4d0238444abd10f173d071f6b->enter($__internal_f6334e978cc404ec2fd64b7044d66325dbc5b2f4d0238444abd10f173d071f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_962ab326362d32a54a01336fe024814cbfdf086f821871a73ece08902bd99cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962ab326362d32a54a01336fe024814cbfdf086f821871a73ece08902bd99cef->enter($__internal_962ab326362d32a54a01336fe024814cbfdf086f821871a73ece08902bd99cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_962ab326362d32a54a01336fe024814cbfdf086f821871a73ece08902bd99cef->leave($__internal_962ab326362d32a54a01336fe024814cbfdf086f821871a73ece08902bd99cef_prof);

        
        $__internal_f6334e978cc404ec2fd64b7044d66325dbc5b2f4d0238444abd10f173d071f6b->leave($__internal_f6334e978cc404ec2fd64b7044d66325dbc5b2f4d0238444abd10f173d071f6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f36ab1ea9c1258a8be86bc9a0b107c7c92876dab4d72c022042e9e453343ca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36ab1ea9c1258a8be86bc9a0b107c7c92876dab4d72c022042e9e453343ca4a->enter($__internal_f36ab1ea9c1258a8be86bc9a0b107c7c92876dab4d72c022042e9e453343ca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d364a83cc0ade938f242be7ecc9e67b8c316afa094f7c320e124097404a465c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d364a83cc0ade938f242be7ecc9e67b8c316afa094f7c320e124097404a465c->enter($__internal_4d364a83cc0ade938f242be7ecc9e67b8c316afa094f7c320e124097404a465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div id=\"mapid\"></div>
    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
    </script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>




";
        // line 42
        echo "
";
        
        $__internal_4d364a83cc0ade938f242be7ecc9e67b8c316afa094f7c320e124097404a465c->leave($__internal_4d364a83cc0ade938f242be7ecc9e67b8c316afa094f7c320e124097404a465c_prof);

        
        $__internal_f36ab1ea9c1258a8be86bc9a0b107c7c92876dab4d72c022042e9e453343ca4a->leave($__internal_f36ab1ea9c1258a8be86bc9a0b107c7c92876dab4d72c022042e9e453343ca4a_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:geolocalisation:carte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 42,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Carte{% endblock %}

{% block body %}



    <div id=\"mapid\"></div>
    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
    </script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>




{#
    <div id=\"googleMap\" style=\"width:100%;height:800px;\"></div>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(48.863051, 2.342763),
                zoom:12.75,
            };
            var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
            {% for unI in immeubles %}
                var {{ unI.code }} = new google.maps.Marker({
                    position: new google.maps.LatLng({{ unI.lattitude }}, {{ unI.longitude }}),
                    map: map
                });
            {% endfor %}
        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
#}

{% endblock %}", "NGGestionnaireBundle:geolocalisation:carte.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/carte.html.twig");
    }
}
