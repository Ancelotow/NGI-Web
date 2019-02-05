<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6b1b118ca9a4f51e779e95d9f3e4cd5a7efce8433f21005203583c13633b4d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_364b4b9df56f8fc653b544168128d3dd3e767dfb57ba35c154d876a17922ef09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364b4b9df56f8fc653b544168128d3dd3e767dfb57ba35c154d876a17922ef09->enter($__internal_364b4b9df56f8fc653b544168128d3dd3e767dfb57ba35c154d876a17922ef09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7acd2509c95cfb382645c7b6f2390c47805111472d4ca866da8cd29a8ad2f941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acd2509c95cfb382645c7b6f2390c47805111472d4ca866da8cd29a8ad2f941->enter($__internal_7acd2509c95cfb382645c7b6f2390c47805111472d4ca866da8cd29a8ad2f941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364b4b9df56f8fc653b544168128d3dd3e767dfb57ba35c154d876a17922ef09->leave($__internal_364b4b9df56f8fc653b544168128d3dd3e767dfb57ba35c154d876a17922ef09_prof);

        
        $__internal_7acd2509c95cfb382645c7b6f2390c47805111472d4ca866da8cd29a8ad2f941->leave($__internal_7acd2509c95cfb382645c7b6f2390c47805111472d4ca866da8cd29a8ad2f941_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae559276b780ec480751aa9f2e4b4be54ad04f07d15fac54ef42ba2d01238703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae559276b780ec480751aa9f2e4b4be54ad04f07d15fac54ef42ba2d01238703->enter($__internal_ae559276b780ec480751aa9f2e4b4be54ad04f07d15fac54ef42ba2d01238703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd1153e722cea0568aab3fb692420c1e8ca30d2b887498871971cdc6568c2271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1153e722cea0568aab3fb692420c1e8ca30d2b887498871971cdc6568c2271->enter($__internal_cd1153e722cea0568aab3fb692420c1e8ca30d2b887498871971cdc6568c2271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cd1153e722cea0568aab3fb692420c1e8ca30d2b887498871971cdc6568c2271->leave($__internal_cd1153e722cea0568aab3fb692420c1e8ca30d2b887498871971cdc6568c2271_prof);

        
        $__internal_ae559276b780ec480751aa9f2e4b4be54ad04f07d15fac54ef42ba2d01238703->leave($__internal_ae559276b780ec480751aa9f2e4b4be54ad04f07d15fac54ef42ba2d01238703_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c17b920d41f70cb4bdfb0bb9f3c7702071ab83d9646435f0e5d934313a5be75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c17b920d41f70cb4bdfb0bb9f3c7702071ab83d9646435f0e5d934313a5be75->enter($__internal_9c17b920d41f70cb4bdfb0bb9f3c7702071ab83d9646435f0e5d934313a5be75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47ccfedf4ec7d0547ee1ec336bc4d8170d79928beca8925d973fe26d22bf3077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ccfedf4ec7d0547ee1ec336bc4d8170d79928beca8925d973fe26d22bf3077->enter($__internal_47ccfedf4ec7d0547ee1ec336bc4d8170d79928beca8925d973fe26d22bf3077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47ccfedf4ec7d0547ee1ec336bc4d8170d79928beca8925d973fe26d22bf3077->leave($__internal_47ccfedf4ec7d0547ee1ec336bc4d8170d79928beca8925d973fe26d22bf3077_prof);

        
        $__internal_9c17b920d41f70cb4bdfb0bb9f3c7702071ab83d9646435f0e5d934313a5be75->leave($__internal_9c17b920d41f70cb4bdfb0bb9f3c7702071ab83d9646435f0e5d934313a5be75_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_09ca48911b59734f836facd725d6acbb68e8a749c6158c1692a756ad07bf357f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ca48911b59734f836facd725d6acbb68e8a749c6158c1692a756ad07bf357f->enter($__internal_09ca48911b59734f836facd725d6acbb68e8a749c6158c1692a756ad07bf357f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2e75c99121883165ce4743e4a41b4b54b49cf9d6c751f604809ba9f92816511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e75c99121883165ce4743e4a41b4b54b49cf9d6c751f604809ba9f92816511->enter($__internal_f2e75c99121883165ce4743e4a41b4b54b49cf9d6c751f604809ba9f92816511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f2e75c99121883165ce4743e4a41b4b54b49cf9d6c751f604809ba9f92816511->leave($__internal_f2e75c99121883165ce4743e4a41b4b54b49cf9d6c751f604809ba9f92816511_prof);

        
        $__internal_09ca48911b59734f836facd725d6acbb68e8a749c6158c1692a756ad07bf357f->leave($__internal_09ca48911b59734f836facd725d6acbb68e8a749c6158c1692a756ad07bf357f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\NGI-Web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
