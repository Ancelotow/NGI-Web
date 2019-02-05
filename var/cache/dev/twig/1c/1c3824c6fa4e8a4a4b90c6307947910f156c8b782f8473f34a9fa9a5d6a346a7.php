<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_36c9f179f7b8af5c18b486640948fbf0bf8663e795b6c2bd6fa9b65bb1d31063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a95aa14198df5be345987ec1e92fd8d8ce1a9a1dfb7f6ede7721f77f141b3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a95aa14198df5be345987ec1e92fd8d8ce1a9a1dfb7f6ede7721f77f141b3f6->enter($__internal_5a95aa14198df5be345987ec1e92fd8d8ce1a9a1dfb7f6ede7721f77f141b3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ca8a22a0de16b80769f05ab1318462921a321c0e44e6cd79a241a3ff68042260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8a22a0de16b80769f05ab1318462921a321c0e44e6cd79a241a3ff68042260->enter($__internal_ca8a22a0de16b80769f05ab1318462921a321c0e44e6cd79a241a3ff68042260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5a95aa14198df5be345987ec1e92fd8d8ce1a9a1dfb7f6ede7721f77f141b3f6->leave($__internal_5a95aa14198df5be345987ec1e92fd8d8ce1a9a1dfb7f6ede7721f77f141b3f6_prof);

        
        $__internal_ca8a22a0de16b80769f05ab1318462921a321c0e44e6cd79a241a3ff68042260->leave($__internal_ca8a22a0de16b80769f05ab1318462921a321c0e44e6cd79a241a3ff68042260_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a645dee144ec3756514cb06bc59c113bc5fd6a0e2924bbf874f0ee3c167ab6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a645dee144ec3756514cb06bc59c113bc5fd6a0e2924bbf874f0ee3c167ab6db->enter($__internal_a645dee144ec3756514cb06bc59c113bc5fd6a0e2924bbf874f0ee3c167ab6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bc7bb55bd7a00dd9266c2e3e742fe063bafbdaaff2a5c02ecb9305ca6639b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc7bb55bd7a00dd9266c2e3e742fe063bafbdaaff2a5c02ecb9305ca6639b69->enter($__internal_6bc7bb55bd7a00dd9266c2e3e742fe063bafbdaaff2a5c02ecb9305ca6639b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6bc7bb55bd7a00dd9266c2e3e742fe063bafbdaaff2a5c02ecb9305ca6639b69->leave($__internal_6bc7bb55bd7a00dd9266c2e3e742fe063bafbdaaff2a5c02ecb9305ca6639b69_prof);

        
        $__internal_a645dee144ec3756514cb06bc59c113bc5fd6a0e2924bbf874f0ee3c167ab6db->leave($__internal_a645dee144ec3756514cb06bc59c113bc5fd6a0e2924bbf874f0ee3c167ab6db_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_148516213adfa58df7158a0403196d9d2764641ec5706e125cf25587fc240748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148516213adfa58df7158a0403196d9d2764641ec5706e125cf25587fc240748->enter($__internal_148516213adfa58df7158a0403196d9d2764641ec5706e125cf25587fc240748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2411fef858ce91702158dc2161feb005947d8f4b6c97d980bdc8519de2d455e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2411fef858ce91702158dc2161feb005947d8f4b6c97d980bdc8519de2d455e->enter($__internal_d2411fef858ce91702158dc2161feb005947d8f4b6c97d980bdc8519de2d455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d2411fef858ce91702158dc2161feb005947d8f4b6c97d980bdc8519de2d455e->leave($__internal_d2411fef858ce91702158dc2161feb005947d8f4b6c97d980bdc8519de2d455e_prof);

        
        $__internal_148516213adfa58df7158a0403196d9d2764641ec5706e125cf25587fc240748->leave($__internal_148516213adfa58df7158a0403196d9d2764641ec5706e125cf25587fc240748_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f93bc3151e220708d02a215d5dd91b8f473cba2045bd14d40750598cdbb240c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93bc3151e220708d02a215d5dd91b8f473cba2045bd14d40750598cdbb240c0->enter($__internal_f93bc3151e220708d02a215d5dd91b8f473cba2045bd14d40750598cdbb240c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa1200e70c06db6d3d24ccad7e2d9327d508d7fe74c9df49c4d1833c04b272d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1200e70c06db6d3d24ccad7e2d9327d508d7fe74c9df49c4d1833c04b272d8->enter($__internal_aa1200e70c06db6d3d24ccad7e2d9327d508d7fe74c9df49c4d1833c04b272d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa1200e70c06db6d3d24ccad7e2d9327d508d7fe74c9df49c4d1833c04b272d8->leave($__internal_aa1200e70c06db6d3d24ccad7e2d9327d508d7fe74c9df49c4d1833c04b272d8_prof);

        
        $__internal_f93bc3151e220708d02a215d5dd91b8f473cba2045bd14d40750598cdbb240c0->leave($__internal_f93bc3151e220708d02a215d5dd91b8f473cba2045bd14d40750598cdbb240c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\NGI-Web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
