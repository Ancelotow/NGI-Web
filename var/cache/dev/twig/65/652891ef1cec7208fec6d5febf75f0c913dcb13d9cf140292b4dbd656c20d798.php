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
        $__internal_f73b365ae20b783a86d98b44c5c44c488f3ef30372b81ceb6b42f090605c4f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73b365ae20b783a86d98b44c5c44c488f3ef30372b81ceb6b42f090605c4f86->enter($__internal_f73b365ae20b783a86d98b44c5c44c488f3ef30372b81ceb6b42f090605c4f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $__internal_72e06620de0a617ac3cbb47876075899974e2c4a3121e7b818293a9b1012057a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e06620de0a617ac3cbb47876075899974e2c4a3121e7b818293a9b1012057a->enter($__internal_72e06620de0a617ac3cbb47876075899974e2c4a3121e7b818293a9b1012057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73b365ae20b783a86d98b44c5c44c488f3ef30372b81ceb6b42f090605c4f86->leave($__internal_f73b365ae20b783a86d98b44c5c44c488f3ef30372b81ceb6b42f090605c4f86_prof);

        
        $__internal_72e06620de0a617ac3cbb47876075899974e2c4a3121e7b818293a9b1012057a->leave($__internal_72e06620de0a617ac3cbb47876075899974e2c4a3121e7b818293a9b1012057a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c55d72f69c6bb3233af6d86f0fd85571ccf5a19e65f657d1af162f5f097e897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c55d72f69c6bb3233af6d86f0fd85571ccf5a19e65f657d1af162f5f097e897->enter($__internal_0c55d72f69c6bb3233af6d86f0fd85571ccf5a19e65f657d1af162f5f097e897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2420f98e10a4983ce975ec2a5419b4730b926e05f6ac9e50b55020c080d2913c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2420f98e10a4983ce975ec2a5419b4730b926e05f6ac9e50b55020c080d2913c->enter($__internal_2420f98e10a4983ce975ec2a5419b4730b926e05f6ac9e50b55020c080d2913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_2420f98e10a4983ce975ec2a5419b4730b926e05f6ac9e50b55020c080d2913c->leave($__internal_2420f98e10a4983ce975ec2a5419b4730b926e05f6ac9e50b55020c080d2913c_prof);

        
        $__internal_0c55d72f69c6bb3233af6d86f0fd85571ccf5a19e65f657d1af162f5f097e897->leave($__internal_0c55d72f69c6bb3233af6d86f0fd85571ccf5a19e65f657d1af162f5f097e897_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a591b4b3333006747cd090df5b638ff322dae21659e8ea9904778be682e18b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a591b4b3333006747cd090df5b638ff322dae21659e8ea9904778be682e18b0->enter($__internal_5a591b4b3333006747cd090df5b638ff322dae21659e8ea9904778be682e18b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ae75c23493995966772f952efcf78fc6150aa99ba9d25e763e31c68afd6f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae75c23493995966772f952efcf78fc6150aa99ba9d25e763e31c68afd6f81b->enter($__internal_6ae75c23493995966772f952efcf78fc6150aa99ba9d25e763e31c68afd6f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div id=\"googleMap\" style=\"width:100%;height:800px;\"></div>
    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(48.863051, 2.342763),
                zoom:12.75,
            };
            var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["immeubles"] ?? $this->getContext($context, "immeubles")));
        foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
            // line 16
            echo "                var ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "code", array()), "html", null, true);
            echo " = new google.maps.Marker({
                    position: new google.maps.LatLng(";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "lattitude", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["unI"], "longitude", array()), "html", null, true);
            echo "),
                    map: map
                });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_6ae75c23493995966772f952efcf78fc6150aa99ba9d25e763e31c68afd6f81b->leave($__internal_6ae75c23493995966772f952efcf78fc6150aa99ba9d25e763e31c68afd6f81b_prof);

        
        $__internal_5a591b4b3333006747cd090df5b638ff322dae21659e8ea9904778be682e18b0->leave($__internal_5a591b4b3333006747cd090df5b638ff322dae21659e8ea9904778be682e18b0_prof);

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
        return array (  100 => 21,  88 => 17,  83 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
{% endblock %}", "NGGestionnaireBundle:geolocalisation:carte.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/geolocalisation/carte.html.twig");
    }
}
