<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_596134ad84a45d3a703ef1c943d6679f4d623e85895794760a3bbcf0e91e4958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_90067158aac24f80b6f15faa69a597cd96638e7d3bf26a6477cee2464f5000b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90067158aac24f80b6f15faa69a597cd96638e7d3bf26a6477cee2464f5000b0->enter($__internal_90067158aac24f80b6f15faa69a597cd96638e7d3bf26a6477cee2464f5000b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_636f26e5561b314bcfef9869412b264b46882e1a4df7c9866c1c2a5d97b4e868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636f26e5561b314bcfef9869412b264b46882e1a4df7c9866c1c2a5d97b4e868->enter($__internal_636f26e5561b314bcfef9869412b264b46882e1a4df7c9866c1c2a5d97b4e868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90067158aac24f80b6f15faa69a597cd96638e7d3bf26a6477cee2464f5000b0->leave($__internal_90067158aac24f80b6f15faa69a597cd96638e7d3bf26a6477cee2464f5000b0_prof);

        
        $__internal_636f26e5561b314bcfef9869412b264b46882e1a4df7c9866c1c2a5d97b4e868->leave($__internal_636f26e5561b314bcfef9869412b264b46882e1a4df7c9866c1c2a5d97b4e868_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a41d1fb175c7eedeb96effbd5448b91da546568da17f8535db6a573d764f9b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41d1fb175c7eedeb96effbd5448b91da546568da17f8535db6a573d764f9b24->enter($__internal_a41d1fb175c7eedeb96effbd5448b91da546568da17f8535db6a573d764f9b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ded97be63fb5b5d192a7a34748f88990d04fbed3a84536332db0b449f705ecf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded97be63fb5b5d192a7a34748f88990d04fbed3a84536332db0b449f705ecf5->enter($__internal_ded97be63fb5b5d192a7a34748f88990d04fbed3a84536332db0b449f705ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ded97be63fb5b5d192a7a34748f88990d04fbed3a84536332db0b449f705ecf5->leave($__internal_ded97be63fb5b5d192a7a34748f88990d04fbed3a84536332db0b449f705ecf5_prof);

        
        $__internal_a41d1fb175c7eedeb96effbd5448b91da546568da17f8535db6a573d764f9b24->leave($__internal_a41d1fb175c7eedeb96effbd5448b91da546568da17f8535db6a573d764f9b24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4695f00d1f03e35153fc41a888d858f94680ae745fafc67dd66652e6d1aff216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4695f00d1f03e35153fc41a888d858f94680ae745fafc67dd66652e6d1aff216->enter($__internal_4695f00d1f03e35153fc41a888d858f94680ae745fafc67dd66652e6d1aff216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_912616ff0239ce6c219212cb7790a3e11d6a0030080b6d100da4fb6fbfde7e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912616ff0239ce6c219212cb7790a3e11d6a0030080b6d100da4fb6fbfde7e94->enter($__internal_912616ff0239ce6c219212cb7790a3e11d6a0030080b6d100da4fb6fbfde7e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_912616ff0239ce6c219212cb7790a3e11d6a0030080b6d100da4fb6fbfde7e94->leave($__internal_912616ff0239ce6c219212cb7790a3e11d6a0030080b6d100da4fb6fbfde7e94_prof);

        
        $__internal_4695f00d1f03e35153fc41a888d858f94680ae745fafc67dd66652e6d1aff216->leave($__internal_4695f00d1f03e35153fc41a888d858f94680ae745fafc67dd66652e6d1aff216_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_881b0463583154ced1e7e2f058a51b567b137c8bd7ec04ae3b1da914c2ca3aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881b0463583154ced1e7e2f058a51b567b137c8bd7ec04ae3b1da914c2ca3aa9->enter($__internal_881b0463583154ced1e7e2f058a51b567b137c8bd7ec04ae3b1da914c2ca3aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2f629cae418099ced34f252bd9dcf95da8874cf8e8f64ae6cccaadc7abac4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f629cae418099ced34f252bd9dcf95da8874cf8e8f64ae6cccaadc7abac4a0->enter($__internal_c2f629cae418099ced34f252bd9dcf95da8874cf8e8f64ae6cccaadc7abac4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c2f629cae418099ced34f252bd9dcf95da8874cf8e8f64ae6cccaadc7abac4a0->leave($__internal_c2f629cae418099ced34f252bd9dcf95da8874cf8e8f64ae6cccaadc7abac4a0_prof);

        
        $__internal_881b0463583154ced1e7e2f058a51b567b137c8bd7ec04ae3b1da914c2ca3aa9->leave($__internal_881b0463583154ced1e7e2f058a51b567b137c8bd7ec04ae3b1da914c2ca3aa9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\NGI-Web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
