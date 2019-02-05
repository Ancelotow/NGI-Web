<?php

/* NGAdministrateurBundle:default:error404.html.twig */
class __TwigTemplate_fdda8879601837b4a720c385e883ecbce51e1c906f9842b4141efa03a7fd30d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:default:error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":administrateur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed8a12c414144bf13bc801659c4c967d7944f56039c2d5d2a86cef1583b4219e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8a12c414144bf13bc801659c4c967d7944f56039c2d5d2a86cef1583b4219e->enter($__internal_ed8a12c414144bf13bc801659c4c967d7944f56039c2d5d2a86cef1583b4219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:error404.html.twig"));

        $__internal_5f7b71e5f2ce8cad1525941b0e9e646f55afde8b98c0d58e831fb9a17157babc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7b71e5f2ce8cad1525941b0e9e646f55afde8b98c0d58e831fb9a17157babc->enter($__internal_5f7b71e5f2ce8cad1525941b0e9e646f55afde8b98c0d58e831fb9a17157babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:default:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8a12c414144bf13bc801659c4c967d7944f56039c2d5d2a86cef1583b4219e->leave($__internal_ed8a12c414144bf13bc801659c4c967d7944f56039c2d5d2a86cef1583b4219e_prof);

        
        $__internal_5f7b71e5f2ce8cad1525941b0e9e646f55afde8b98c0d58e831fb9a17157babc->leave($__internal_5f7b71e5f2ce8cad1525941b0e9e646f55afde8b98c0d58e831fb9a17157babc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de36613abf604999632d442d0db0daa01d194c4d6b7892606b3d5830ab627392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de36613abf604999632d442d0db0daa01d194c4d6b7892606b3d5830ab627392->enter($__internal_de36613abf604999632d442d0db0daa01d194c4d6b7892606b3d5830ab627392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b97f496a5c7e834c65a918cdbcd4bd9ec42d5cbfb4c1548d76dc7b4e712962b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b97f496a5c7e834c65a918cdbcd4bd9ec42d5cbfb4c1548d76dc7b4e712962b->enter($__internal_4b97f496a5c7e834c65a918cdbcd4bd9ec42d5cbfb4c1548d76dc7b4e712962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 404";
        
        $__internal_4b97f496a5c7e834c65a918cdbcd4bd9ec42d5cbfb4c1548d76dc7b4e712962b->leave($__internal_4b97f496a5c7e834c65a918cdbcd4bd9ec42d5cbfb4c1548d76dc7b4e712962b_prof);

        
        $__internal_de36613abf604999632d442d0db0daa01d194c4d6b7892606b3d5830ab627392->leave($__internal_de36613abf604999632d442d0db0daa01d194c4d6b7892606b3d5830ab627392_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_41a1bfb0917ff1dd18788e795319153c778c29969e80aec2cbd756b7164f6505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a1bfb0917ff1dd18788e795319153c778c29969e80aec2cbd756b7164f6505->enter($__internal_41a1bfb0917ff1dd18788e795319153c778c29969e80aec2cbd756b7164f6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_792da8fe9ff733909e0bfdb4e658276fbcd0dbb1fe11b4124ab08f3a1b6aad3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792da8fe9ff733909e0bfdb4e658276fbcd0dbb1fe11b4124ab08f3a1b6aad3d->enter($__internal_792da8fe9ff733909e0bfdb4e658276fbcd0dbb1fe11b4124ab08f3a1b6aad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 404"), "html", null, true);
        
        $__internal_792da8fe9ff733909e0bfdb4e658276fbcd0dbb1fe11b4124ab08f3a1b6aad3d->leave($__internal_792da8fe9ff733909e0bfdb4e658276fbcd0dbb1fe11b4124ab08f3a1b6aad3d_prof);

        
        $__internal_41a1bfb0917ff1dd18788e795319153c778c29969e80aec2cbd756b7164f6505->leave($__internal_41a1bfb0917ff1dd18788e795319153c778c29969e80aec2cbd756b7164f6505_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d4f6c9c4b707bac5cf6a6f0f4578ee5276e2e5556d289029c38bdaa38f0f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f6c9c4b707bac5cf6a6f0f4578ee5276e2e5556d289029c38bdaa38f0f62e->enter($__internal_5d4f6c9c4b707bac5cf6a6f0f4578ee5276e2e5556d289029c38bdaa38f0f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_089e85a91bae4873d9a47cc1ac78a9682d3b4205755dd7d183c5e1ec773c81b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089e85a91bae4873d9a47cc1ac78a9682d3b4205755dd7d183c5e1ec773c81b1->enter($__internal_089e85a91bae4873d9a47cc1ac78a9682d3b4205755dd7d183c5e1ec773c81b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 404 : Page non trouvé</h4><br/>
        <a href=\"/ng/\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à l'accueil"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_089e85a91bae4873d9a47cc1ac78a9682d3b4205755dd7d183c5e1ec773c81b1->leave($__internal_089e85a91bae4873d9a47cc1ac78a9682d3b4205755dd7d183c5e1ec773c81b1_prof);

        
        $__internal_5d4f6c9c4b707bac5cf6a6f0f4578ee5276e2e5556d289029c38bdaa38f0f62e->leave($__internal_5d4f6c9c4b707bac5cf6a6f0f4578ee5276e2e5556d289029c38bdaa38f0f62e_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:default:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends':administrateur:base.html.twig' %}

{% block title %}Erreur 404{% endblock %}

{% block navbar %}{{ 'erreur 404'|upper }}{% endblock %}

{% block body %}

    <center>
        <h4>Erreur 404 : Page non trouvé</h4><br/>
        <a href=\"/ng/\" class=\"btn btn-outline-ngi\">{{ \"retour à l'accueil\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:default:error404.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/default/error404.html.twig");
    }
}
