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
        $__internal_ab929607ec4c53d857dd64cbbe44a5f9a9d5a5db18359d1eaafc8a2719c021cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab929607ec4c53d857dd64cbbe44a5f9a9d5a5db18359d1eaafc8a2719c021cf->enter($__internal_ab929607ec4c53d857dd64cbbe44a5f9a9d5a5db18359d1eaafc8a2719c021cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $__internal_0fd97e8456922d5e7c8be39ae7d534f198e417c7558067dc7a4225075c11a966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd97e8456922d5e7c8be39ae7d534f198e417c7558067dc7a4225075c11a966->enter($__internal_0fd97e8456922d5e7c8be39ae7d534f198e417c7558067dc7a4225075c11a966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab929607ec4c53d857dd64cbbe44a5f9a9d5a5db18359d1eaafc8a2719c021cf->leave($__internal_ab929607ec4c53d857dd64cbbe44a5f9a9d5a5db18359d1eaafc8a2719c021cf_prof);

        
        $__internal_0fd97e8456922d5e7c8be39ae7d534f198e417c7558067dc7a4225075c11a966->leave($__internal_0fd97e8456922d5e7c8be39ae7d534f198e417c7558067dc7a4225075c11a966_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd2829ddb2df7fffc1dbf9519feb85b738ea66a78dd3a9534238381318f2dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd2829ddb2df7fffc1dbf9519feb85b738ea66a78dd3a9534238381318f2dbb->enter($__internal_1cd2829ddb2df7fffc1dbf9519feb85b738ea66a78dd3a9534238381318f2dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7b2103f6b4bd01fad965f96c8ebda9628d3af6e45722051f4c58a5c27df5e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b2103f6b4bd01fad965f96c8ebda9628d3af6e45722051f4c58a5c27df5e73->enter($__internal_e7b2103f6b4bd01fad965f96c8ebda9628d3af6e45722051f4c58a5c27df5e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_e7b2103f6b4bd01fad965f96c8ebda9628d3af6e45722051f4c58a5c27df5e73->leave($__internal_e7b2103f6b4bd01fad965f96c8ebda9628d3af6e45722051f4c58a5c27df5e73_prof);

        
        $__internal_1cd2829ddb2df7fffc1dbf9519feb85b738ea66a78dd3a9534238381318f2dbb->leave($__internal_1cd2829ddb2df7fffc1dbf9519feb85b738ea66a78dd3a9534238381318f2dbb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de83f7a396ed2bf9caec9ab69737a0e16efb06ed38bb6a9103fd3cc294303bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de83f7a396ed2bf9caec9ab69737a0e16efb06ed38bb6a9103fd3cc294303bf->enter($__internal_1de83f7a396ed2bf9caec9ab69737a0e16efb06ed38bb6a9103fd3cc294303bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9946c00309b8fea19d5c62d5dc2c4f53cf88d8a4952bd061a66aef24166cac10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9946c00309b8fea19d5c62d5dc2c4f53cf88d8a4952bd061a66aef24166cac10->enter($__internal_9946c00309b8fea19d5c62d5dc2c4f53cf88d8a4952bd061a66aef24166cac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>

    <div id=\"map\" style=\"width:100%;height:85vh\"></div>
    <script>
        \$(document).ready(function(){
            var map = L.map('map').setView([48.863051, 2.342763], 12);
            var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);

            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["immeubles"] ?? $this->getContext($context, "immeubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
            // line 23
            echo "                var ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
            echo " = L.marker([";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "lattitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "longitude", array()), "html", null, true);
            echo "]).addTo(map);
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
            echo ".bindPopup(\"<center><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
            echo "</b><center>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "adresse", array()), "html", null, true);
            echo "\");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "


        });
    </script>


















";
        
        $__internal_9946c00309b8fea19d5c62d5dc2c4f53cf88d8a4952bd061a66aef24166cac10->leave($__internal_9946c00309b8fea19d5c62d5dc2c4f53cf88d8a4952bd061a66aef24166cac10_prof);

        
        $__internal_1de83f7a396ed2bf9caec9ab69737a0e16efb06ed38bb6a9103fd3cc294303bf->leave($__internal_1de83f7a396ed2bf9caec9ab69737a0e16efb06ed38bb6a9103fd3cc294303bf_prof);

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
        return array (  111 => 26,  99 => 24,  90 => 23,  86 => 22,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>

    <div id=\"map\" style=\"width:100%;height:85vh\"></div>
    <script>
        \$(document).ready(function(){
            var map = L.map('map').setView([48.863051, 2.342763], 12);
            var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);

            {% for unI in immeubles %}
                var {{ unI.code }} = L.marker([{{ unI.lattitude }}, {{ unI.longitude }}]).addTo(map);
                {{ unI.code }}.bindPopup(\"<center><b>{{ unI.code }}</b><center>{{ unI.adresse }}\");
            {% endfor %}



        });
    </script>


















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
                    map: map,
                    icon : {
                            path : google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
                            strokeColor: \"red\",
                            scale: 3
                    }
                });
            {% endfor %}
            var ng = new google.maps.Marker({
                position: new google.maps.LatLng(48.856308, 2.362342),
                map: map,
                icon : '{{ asset('image/position_gm.png') }}'
            });
        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
#}
{% endblock %}", "NGGestionnaireBundle:geolocalisation:carte.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/carte.html.twig");
    }
}
