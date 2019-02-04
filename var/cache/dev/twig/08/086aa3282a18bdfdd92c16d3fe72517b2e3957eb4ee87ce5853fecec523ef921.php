<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_91f23d26d1e9c4d15bd74abc1f548fe71498140eaf4fd2e477e058e8a9bd1df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718ee81c5477e0e0756385f367c068c611f5d33f3b0e67ffb2e7ec1d8c010b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718ee81c5477e0e0756385f367c068c611f5d33f3b0e67ffb2e7ec1d8c010b00->enter($__internal_718ee81c5477e0e0756385f367c068c611f5d33f3b0e67ffb2e7ec1d8c010b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_855941d812822b31fdac04ea51b73161d1fdba84cc11cd34de5d6e0e795db373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855941d812822b31fdac04ea51b73161d1fdba84cc11cd34de5d6e0e795db373->enter($__internal_855941d812822b31fdac04ea51b73161d1fdba84cc11cd34de5d6e0e795db373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718ee81c5477e0e0756385f367c068c611f5d33f3b0e67ffb2e7ec1d8c010b00->leave($__internal_718ee81c5477e0e0756385f367c068c611f5d33f3b0e67ffb2e7ec1d8c010b00_prof);

        
        $__internal_855941d812822b31fdac04ea51b73161d1fdba84cc11cd34de5d6e0e795db373->leave($__internal_855941d812822b31fdac04ea51b73161d1fdba84cc11cd34de5d6e0e795db373_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_415b7833102a05cce81407145973b6afc7705304ab4e8e9fee04a3ab3ad3de20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415b7833102a05cce81407145973b6afc7705304ab4e8e9fee04a3ab3ad3de20->enter($__internal_415b7833102a05cce81407145973b6afc7705304ab4e8e9fee04a3ab3ad3de20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4816e53404c43064d8b22cbfa9cd51a573f66a4aa9b8ef30b05be502628ac900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4816e53404c43064d8b22cbfa9cd51a573f66a4aa9b8ef30b05be502628ac900->enter($__internal_4816e53404c43064d8b22cbfa9cd51a573f66a4aa9b8ef30b05be502628ac900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4816e53404c43064d8b22cbfa9cd51a573f66a4aa9b8ef30b05be502628ac900->leave($__internal_4816e53404c43064d8b22cbfa9cd51a573f66a4aa9b8ef30b05be502628ac900_prof);

        
        $__internal_415b7833102a05cce81407145973b6afc7705304ab4e8e9fee04a3ab3ad3de20->leave($__internal_415b7833102a05cce81407145973b6afc7705304ab4e8e9fee04a3ab3ad3de20_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bccc5d79c004fbd46e58bf7c62470d77fa9dead2fb3fa7b04a5d406c9b6fbfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccc5d79c004fbd46e58bf7c62470d77fa9dead2fb3fa7b04a5d406c9b6fbfb5->enter($__internal_bccc5d79c004fbd46e58bf7c62470d77fa9dead2fb3fa7b04a5d406c9b6fbfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb06fa4e71b8118a7fb3da5659de9dbae5a331e778a84034aef1648d42443cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb06fa4e71b8118a7fb3da5659de9dbae5a331e778a84034aef1648d42443cfb->enter($__internal_cb06fa4e71b8118a7fb3da5659de9dbae5a331e778a84034aef1648d42443cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cb06fa4e71b8118a7fb3da5659de9dbae5a331e778a84034aef1648d42443cfb->leave($__internal_cb06fa4e71b8118a7fb3da5659de9dbae5a331e778a84034aef1648d42443cfb_prof);

        
        $__internal_bccc5d79c004fbd46e58bf7c62470d77fa9dead2fb3fa7b04a5d406c9b6fbfb5->leave($__internal_bccc5d79c004fbd46e58bf7c62470d77fa9dead2fb3fa7b04a5d406c9b6fbfb5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5c0a8ea79116821569e673cbc80b2c3a5666d60b70cadd494dc86fff82c8494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c0a8ea79116821569e673cbc80b2c3a5666d60b70cadd494dc86fff82c8494->enter($__internal_e5c0a8ea79116821569e673cbc80b2c3a5666d60b70cadd494dc86fff82c8494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e15eacb77490cf9cc8b71ca0bf1b36aec56b37f25e3ca70add72934094ff9172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15eacb77490cf9cc8b71ca0bf1b36aec56b37f25e3ca70add72934094ff9172->enter($__internal_e15eacb77490cf9cc8b71ca0bf1b36aec56b37f25e3ca70add72934094ff9172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e15eacb77490cf9cc8b71ca0bf1b36aec56b37f25e3ca70add72934094ff9172->leave($__internal_e15eacb77490cf9cc8b71ca0bf1b36aec56b37f25e3ca70add72934094ff9172_prof);

        
        $__internal_e5c0a8ea79116821569e673cbc80b2c3a5666d60b70cadd494dc86fff82c8494->leave($__internal_e5c0a8ea79116821569e673cbc80b2c3a5666d60b70cadd494dc86fff82c8494_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\NGI-Web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
