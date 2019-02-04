<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9bec9c1139426df76c081e6ef116bd2e812519a4d5506c90fcd87d715956378d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3c87c9afa4b14352d3b5256c32910c907ddbcdc9f64fa412c3a197bf5fd0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3c87c9afa4b14352d3b5256c32910c907ddbcdc9f64fa412c3a197bf5fd0a8->enter($__internal_6e3c87c9afa4b14352d3b5256c32910c907ddbcdc9f64fa412c3a197bf5fd0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2ef3626a9bcb2300e577db054db99dd24693ce12ffb7b11ad8a092ce8e3bbccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef3626a9bcb2300e577db054db99dd24693ce12ffb7b11ad8a092ce8e3bbccc->enter($__internal_2ef3626a9bcb2300e577db054db99dd24693ce12ffb7b11ad8a092ce8e3bbccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3c87c9afa4b14352d3b5256c32910c907ddbcdc9f64fa412c3a197bf5fd0a8->leave($__internal_6e3c87c9afa4b14352d3b5256c32910c907ddbcdc9f64fa412c3a197bf5fd0a8_prof);

        
        $__internal_2ef3626a9bcb2300e577db054db99dd24693ce12ffb7b11ad8a092ce8e3bbccc->leave($__internal_2ef3626a9bcb2300e577db054db99dd24693ce12ffb7b11ad8a092ce8e3bbccc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_921f99e0e4d260943f7ffca09e559d3a184b5f0d64f6372c43f1b68c412b920d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921f99e0e4d260943f7ffca09e559d3a184b5f0d64f6372c43f1b68c412b920d->enter($__internal_921f99e0e4d260943f7ffca09e559d3a184b5f0d64f6372c43f1b68c412b920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d8c5641bc737014cd52eb39239af65a2b17649f678d27e0b7466592bb9a8df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8c5641bc737014cd52eb39239af65a2b17649f678d27e0b7466592bb9a8df5->enter($__internal_8d8c5641bc737014cd52eb39239af65a2b17649f678d27e0b7466592bb9a8df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8d8c5641bc737014cd52eb39239af65a2b17649f678d27e0b7466592bb9a8df5->leave($__internal_8d8c5641bc737014cd52eb39239af65a2b17649f678d27e0b7466592bb9a8df5_prof);

        
        $__internal_921f99e0e4d260943f7ffca09e559d3a184b5f0d64f6372c43f1b68c412b920d->leave($__internal_921f99e0e4d260943f7ffca09e559d3a184b5f0d64f6372c43f1b68c412b920d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\NGI-Web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
