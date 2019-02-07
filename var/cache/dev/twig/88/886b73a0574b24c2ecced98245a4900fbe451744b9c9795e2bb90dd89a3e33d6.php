<?php

/* NGAdministrateurBundle:Default:errorSin.html.twig */
class __TwigTemplate_f81ef475a0ede4bb62a3a43deb7cc87d682b370c1639865d9794d94a9992edc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:errorSin.html.twig", 1);
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
        $__internal_121ff615d94bf597bd653257104df705551fc4ba0324fb30af3fd09956ebe9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121ff615d94bf597bd653257104df705551fc4ba0324fb30af3fd09956ebe9ab->enter($__internal_121ff615d94bf597bd653257104df705551fc4ba0324fb30af3fd09956ebe9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorSin.html.twig"));

        $__internal_2985b42cd44f56b0dc6d661128ac0c99b306881d356434616d1fb7621562517f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2985b42cd44f56b0dc6d661128ac0c99b306881d356434616d1fb7621562517f->enter($__internal_2985b42cd44f56b0dc6d661128ac0c99b306881d356434616d1fb7621562517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGAdministrateurBundle:Default:errorSin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121ff615d94bf597bd653257104df705551fc4ba0324fb30af3fd09956ebe9ab->leave($__internal_121ff615d94bf597bd653257104df705551fc4ba0324fb30af3fd09956ebe9ab_prof);

        
        $__internal_2985b42cd44f56b0dc6d661128ac0c99b306881d356434616d1fb7621562517f->leave($__internal_2985b42cd44f56b0dc6d661128ac0c99b306881d356434616d1fb7621562517f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_476d04d86b6c31e8bb94327ed989964b29c97b7e41aea66ffd21cbcda7f2bdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476d04d86b6c31e8bb94327ed989964b29c97b7e41aea66ffd21cbcda7f2bdef->enter($__internal_476d04d86b6c31e8bb94327ed989964b29c97b7e41aea66ffd21cbcda7f2bdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cee037c0fa010e5bfba0a7d8eaa9434ff6f43a081431c0451e8c06080e4f3f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee037c0fa010e5bfba0a7d8eaa9434ff6f43a081431c0451e8c06080e4f3f85->enter($__internal_cee037c0fa010e5bfba0a7d8eaa9434ff6f43a081431c0451e8c06080e4f3f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Erreur 500";
        
        $__internal_cee037c0fa010e5bfba0a7d8eaa9434ff6f43a081431c0451e8c06080e4f3f85->leave($__internal_cee037c0fa010e5bfba0a7d8eaa9434ff6f43a081431c0451e8c06080e4f3f85_prof);

        
        $__internal_476d04d86b6c31e8bb94327ed989964b29c97b7e41aea66ffd21cbcda7f2bdef->leave($__internal_476d04d86b6c31e8bb94327ed989964b29c97b7e41aea66ffd21cbcda7f2bdef_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_69aa01055cb06ab14dd3f928b92a8c76a7f4ec0a26ffa9ec93b4c5c7dcdeb445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aa01055cb06ab14dd3f928b92a8c76a7f4ec0a26ffa9ec93b4c5c7dcdeb445->enter($__internal_69aa01055cb06ab14dd3f928b92a8c76a7f4ec0a26ffa9ec93b4c5c7dcdeb445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_d48873ad23390ccc8a32c24c6bd9ea382219c99b30ab41de35fd972b93bc3c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48873ad23390ccc8a32c24c6bd9ea382219c99b30ab41de35fd972b93bc3c47->enter($__internal_d48873ad23390ccc8a32c24c6bd9ea382219c99b30ab41de35fd972b93bc3c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "erreur 500"), "html", null, true);
        
        $__internal_d48873ad23390ccc8a32c24c6bd9ea382219c99b30ab41de35fd972b93bc3c47->leave($__internal_d48873ad23390ccc8a32c24c6bd9ea382219c99b30ab41de35fd972b93bc3c47_prof);

        
        $__internal_69aa01055cb06ab14dd3f928b92a8c76a7f4ec0a26ffa9ec93b4c5c7dcdeb445->leave($__internal_69aa01055cb06ab14dd3f928b92a8c76a7f4ec0a26ffa9ec93b4c5c7dcdeb445_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a717ebee44587f0c251ee2a198d0fdedd7d7f0ad1073c4c76929f0b78a6a0373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a717ebee44587f0c251ee2a198d0fdedd7d7f0ad1073c4c76929f0b78a6a0373->enter($__internal_a717ebee44587f0c251ee2a198d0fdedd7d7f0ad1073c4c76929f0b78a6a0373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d687d17ecbf4f861bba65e833ecbd8fb7d8ad047dd7679bf62a47fd698834a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d687d17ecbf4f861bba65e833ecbd8fb7d8ad047dd7679bf62a47fd698834a8->enter($__internal_0d687d17ecbf4f861bba65e833ecbd8fb7d8ad047dd7679bf62a47fd698834a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <center>
        <h4>Erreur 500 : Ce sinsitre n'éxiste pas.</h4><br/>
        <a href=\"#\" class=\"btn btn-outline-ngi\">";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "retour à la liste des sinsitres"), "html", null, true);
        echo "</a>
    </center>

";
        
        $__internal_0d687d17ecbf4f861bba65e833ecbd8fb7d8ad047dd7679bf62a47fd698834a8->leave($__internal_0d687d17ecbf4f861bba65e833ecbd8fb7d8ad047dd7679bf62a47fd698834a8_prof);

        
        $__internal_a717ebee44587f0c251ee2a198d0fdedd7d7f0ad1073c4c76929f0b78a6a0373->leave($__internal_a717ebee44587f0c251ee2a198d0fdedd7d7f0ad1073c4c76929f0b78a6a0373_prof);

    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:errorSin.html.twig";
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

{% block title %}Erreur 500{% endblock %}

{% block navbar %}{{ 'erreur 500'|upper }}{% endblock %}

{% block body %}

    <center>
        <h4>Erreur 500 : Ce sinsitre n'éxiste pas.</h4><br/>
        <a href=\"#\" class=\"btn btn-outline-ngi\">{{ \"retour à la liste des sinsitres\"|upper }}</a>
    </center>

{% endblock %}", "NGAdministrateurBundle:Default:errorSin.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/errorSin.html.twig");
    }
}
