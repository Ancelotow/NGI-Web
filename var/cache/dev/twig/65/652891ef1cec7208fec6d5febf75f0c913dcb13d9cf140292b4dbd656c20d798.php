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
        $__internal_4726be57c680c6e2483019a3687fecefd6a49af80da702d0ee5b9c6b170db26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4726be57c680c6e2483019a3687fecefd6a49af80da702d0ee5b9c6b170db26d->enter($__internal_4726be57c680c6e2483019a3687fecefd6a49af80da702d0ee5b9c6b170db26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $__internal_df86c987e2605135b59ac294f2a0c6bf75de4c514640b9eb0d4fe6ce13943353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df86c987e2605135b59ac294f2a0c6bf75de4c514640b9eb0d4fe6ce13943353->enter($__internal_df86c987e2605135b59ac294f2a0c6bf75de4c514640b9eb0d4fe6ce13943353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:geolocalisation:carte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4726be57c680c6e2483019a3687fecefd6a49af80da702d0ee5b9c6b170db26d->leave($__internal_4726be57c680c6e2483019a3687fecefd6a49af80da702d0ee5b9c6b170db26d_prof);

        
        $__internal_df86c987e2605135b59ac294f2a0c6bf75de4c514640b9eb0d4fe6ce13943353->leave($__internal_df86c987e2605135b59ac294f2a0c6bf75de4c514640b9eb0d4fe6ce13943353_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3adb672572effdeaf864aa8221a9402d0e2c5f5e64367a30fb05010d99e0e78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adb672572effdeaf864aa8221a9402d0e2c5f5e64367a30fb05010d99e0e78b->enter($__internal_3adb672572effdeaf864aa8221a9402d0e2c5f5e64367a30fb05010d99e0e78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd815d650b6f9b4a6e7692cd4dc5ea8be71b256fbc7a05331f8c3bd43478605e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd815d650b6f9b4a6e7692cd4dc5ea8be71b256fbc7a05331f8c3bd43478605e->enter($__internal_cd815d650b6f9b4a6e7692cd4dc5ea8be71b256fbc7a05331f8c3bd43478605e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_cd815d650b6f9b4a6e7692cd4dc5ea8be71b256fbc7a05331f8c3bd43478605e->leave($__internal_cd815d650b6f9b4a6e7692cd4dc5ea8be71b256fbc7a05331f8c3bd43478605e_prof);

        
        $__internal_3adb672572effdeaf864aa8221a9402d0e2c5f5e64367a30fb05010d99e0e78b->leave($__internal_3adb672572effdeaf864aa8221a9402d0e2c5f5e64367a30fb05010d99e0e78b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc8a96d96ed384824a9589e9b0fcebe34cfdff89a20b3675464cd34acace543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc8a96d96ed384824a9589e9b0fcebe34cfdff89a20b3675464cd34acace543->enter($__internal_ccc8a96d96ed384824a9589e9b0fcebe34cfdff89a20b3675464cd34acace543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3167b22763ef812e1bdc89dbfbc062c468a39c007b5eb1fc1c9c37f916aed691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3167b22763ef812e1bdc89dbfbc062c468a39c007b5eb1fc1c9c37f916aed691->enter($__internal_3167b22763ef812e1bdc89dbfbc062c468a39c007b5eb1fc1c9c37f916aed691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3167b22763ef812e1bdc89dbfbc062c468a39c007b5eb1fc1c9c37f916aed691->leave($__internal_3167b22763ef812e1bdc89dbfbc062c468a39c007b5eb1fc1c9c37f916aed691_prof);

        
        $__internal_ccc8a96d96ed384824a9589e9b0fcebe34cfdff89a20b3675464cd34acace543->leave($__internal_ccc8a96d96ed384824a9589e9b0fcebe34cfdff89a20b3675464cd34acace543_prof);

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
