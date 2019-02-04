<?php

/* :administrateur:base.html.twig */
class __TwigTemplate_dd8887f5c410b984cb69424a27ebc4bce9af4846ddce5a56dbb4cb09f2510461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'logo' => array($this, 'block_logo'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec80507a479679312e7f716cb55d1e98956643a167766f34a61f65d432c8a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec80507a479679312e7f716cb55d1e98956643a167766f34a61f65d432c8a96->enter($__internal_dec80507a479679312e7f716cb55d1e98956643a167766f34a61f65d432c8a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        $__internal_89eb013236c649d6b0c9762dbc707b4bfddc31f7366b5a0e35128cde37465bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eb013236c649d6b0c9762dbc707b4bfddc31f7366b5a0e35128cde37465bde->enter($__internal_89eb013236c649d6b0c9762dbc707b4bfddc31f7366b5a0e35128cde37465bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>NG | ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('logo', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            </a>
            <a class=\"navbar-brand\" href=\"/\">";
        // line 23
        $this->displayBlock('navbar', $context, $blocks);
        echo "</a>
        </nav><br/>
        <div class=\"container\">
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        </div>
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_dec80507a479679312e7f716cb55d1e98956643a167766f34a61f65d432c8a96->leave($__internal_dec80507a479679312e7f716cb55d1e98956643a167766f34a61f65d432c8a96_prof);

        
        $__internal_89eb013236c649d6b0c9762dbc707b4bfddc31f7366b5a0e35128cde37465bde->leave($__internal_89eb013236c649d6b0c9762dbc707b4bfddc31f7366b5a0e35128cde37465bde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cafae97bfc696e3974c255d5ed0e10277d7cb8d73fa99076b41c23a6397219b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafae97bfc696e3974c255d5ed0e10277d7cb8d73fa99076b41c23a6397219b6->enter($__internal_cafae97bfc696e3974c255d5ed0e10277d7cb8d73fa99076b41c23a6397219b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f493a9eefbd350abd19ae0ca56d15aae9a633420b02ada6581b3129f2ac58339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f493a9eefbd350abd19ae0ca56d15aae9a633420b02ada6581b3129f2ac58339->enter($__internal_f493a9eefbd350abd19ae0ca56d15aae9a633420b02ada6581b3129f2ac58339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f493a9eefbd350abd19ae0ca56d15aae9a633420b02ada6581b3129f2ac58339->leave($__internal_f493a9eefbd350abd19ae0ca56d15aae9a633420b02ada6581b3129f2ac58339_prof);

        
        $__internal_cafae97bfc696e3974c255d5ed0e10277d7cb8d73fa99076b41c23a6397219b6->leave($__internal_cafae97bfc696e3974c255d5ed0e10277d7cb8d73fa99076b41c23a6397219b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d42f4ef87d3c56f8307e149b528fdb9eb49bd2cff84e48044acfeef6bce0a50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42f4ef87d3c56f8307e149b528fdb9eb49bd2cff84e48044acfeef6bce0a50c->enter($__internal_d42f4ef87d3c56f8307e149b528fdb9eb49bd2cff84e48044acfeef6bce0a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4895fdcbef4cc1136d5b6477a4cc346197a7700ef71813035c7361e99535e3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4895fdcbef4cc1136d5b6477a4cc346197a7700ef71813035c7361e99535e3ae->enter($__internal_4895fdcbef4cc1136d5b6477a4cc346197a7700ef71813035c7361e99535e3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4895fdcbef4cc1136d5b6477a4cc346197a7700ef71813035c7361e99535e3ae->leave($__internal_4895fdcbef4cc1136d5b6477a4cc346197a7700ef71813035c7361e99535e3ae_prof);

        
        $__internal_d42f4ef87d3c56f8307e149b528fdb9eb49bd2cff84e48044acfeef6bce0a50c->leave($__internal_d42f4ef87d3c56f8307e149b528fdb9eb49bd2cff84e48044acfeef6bce0a50c_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6fdc935ca0a87bfad09370eca65d0c2d04db76820d9edf697f7981a2edceeec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdc935ca0a87bfad09370eca65d0c2d04db76820d9edf697f7981a2edceeec2->enter($__internal_6fdc935ca0a87bfad09370eca65d0c2d04db76820d9edf697f7981a2edceeec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_ed4e92cca132362920ecf12a8ddd86b3cf0e671a9669738f4c3c451dbf5f7954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4e92cca132362920ecf12a8ddd86b3cf0e671a9669738f4c3c451dbf5f7954->enter($__internal_ed4e92cca132362920ecf12a8ddd86b3cf0e671a9669738f4c3c451dbf5f7954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_ed4e92cca132362920ecf12a8ddd86b3cf0e671a9669738f4c3c451dbf5f7954->leave($__internal_ed4e92cca132362920ecf12a8ddd86b3cf0e671a9669738f4c3c451dbf5f7954_prof);

        
        $__internal_6fdc935ca0a87bfad09370eca65d0c2d04db76820d9edf697f7981a2edceeec2->leave($__internal_6fdc935ca0a87bfad09370eca65d0c2d04db76820d9edf697f7981a2edceeec2_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_58160edb9f83c0c89772227c45d9092e8be9fa6a9a07d23f38ac328b5b07147a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58160edb9f83c0c89772227c45d9092e8be9fa6a9a07d23f38ac328b5b07147a->enter($__internal_58160edb9f83c0c89772227c45d9092e8be9fa6a9a07d23f38ac328b5b07147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_fe5cbba8512aa7211a51a9984f02123fe8c3c0e688c809ca7c4fe31f43e4d74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5cbba8512aa7211a51a9984f02123fe8c3c0e688c809ca7c4fe31f43e4d74d->enter($__internal_fe5cbba8512aa7211a51a9984f02123fe8c3c0e688c809ca7c4fe31f43e4d74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_fe5cbba8512aa7211a51a9984f02123fe8c3c0e688c809ca7c4fe31f43e4d74d->leave($__internal_fe5cbba8512aa7211a51a9984f02123fe8c3c0e688c809ca7c4fe31f43e4d74d_prof);

        
        $__internal_58160edb9f83c0c89772227c45d9092e8be9fa6a9a07d23f38ac328b5b07147a->leave($__internal_58160edb9f83c0c89772227c45d9092e8be9fa6a9a07d23f38ac328b5b07147a_prof);

    }

    // line 23
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_58716765db59b28b35e9f910304305df965c872362104ffebfb81d738583ac1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58716765db59b28b35e9f910304305df965c872362104ffebfb81d738583ac1e->enter($__internal_58716765db59b28b35e9f910304305df965c872362104ffebfb81d738583ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_aab5b6ef5a08c8bb19eda7c8efd08b55e7a259744ddbcad990900dd5d6c213e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab5b6ef5a08c8bb19eda7c8efd08b55e7a259744ddbcad990900dd5d6c213e4->enter($__internal_aab5b6ef5a08c8bb19eda7c8efd08b55e7a259744ddbcad990900dd5d6c213e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_aab5b6ef5a08c8bb19eda7c8efd08b55e7a259744ddbcad990900dd5d6c213e4->leave($__internal_aab5b6ef5a08c8bb19eda7c8efd08b55e7a259744ddbcad990900dd5d6c213e4_prof);

        
        $__internal_58716765db59b28b35e9f910304305df965c872362104ffebfb81d738583ac1e->leave($__internal_58716765db59b28b35e9f910304305df965c872362104ffebfb81d738583ac1e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b23d8c3f2a11166ba0d5121d9b7b4e12f102bee508ed139a07a0d1d7b125ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b23d8c3f2a11166ba0d5121d9b7b4e12f102bee508ed139a07a0d1d7b125ca0->enter($__internal_8b23d8c3f2a11166ba0d5121d9b7b4e12f102bee508ed139a07a0d1d7b125ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c742e78a10814523d7de8808dbe7984f27a7c47a66785644cbf9fa37540b693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c742e78a10814523d7de8808dbe7984f27a7c47a66785644cbf9fa37540b693d->enter($__internal_c742e78a10814523d7de8808dbe7984f27a7c47a66785644cbf9fa37540b693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c742e78a10814523d7de8808dbe7984f27a7c47a66785644cbf9fa37540b693d->leave($__internal_c742e78a10814523d7de8808dbe7984f27a7c47a66785644cbf9fa37540b693d_prof);

        
        $__internal_8b23d8c3f2a11166ba0d5121d9b7b4e12f102bee508ed139a07a0d1d7b125ca0->leave($__internal_8b23d8c3f2a11166ba0d5121d9b7b4e12f102bee508ed139a07a0d1d7b125ca0_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2391f1bff3a9a7f4df26827f03c44cac053233266023d7d218dde671b8adab4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2391f1bff3a9a7f4df26827f03c44cac053233266023d7d218dde671b8adab4b->enter($__internal_2391f1bff3a9a7f4df26827f03c44cac053233266023d7d218dde671b8adab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_516267af0d0e5b84ee324930172674ff2b1221f663282d3b9b85ed011224db88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516267af0d0e5b84ee324930172674ff2b1221f663282d3b9b85ed011224db88->enter($__internal_516267af0d0e5b84ee324930172674ff2b1221f663282d3b9b85ed011224db88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_516267af0d0e5b84ee324930172674ff2b1221f663282d3b9b85ed011224db88->leave($__internal_516267af0d0e5b84ee324930172674ff2b1221f663282d3b9b85ed011224db88_prof);

        
        $__internal_2391f1bff3a9a7f4df26827f03c44cac053233266023d7d218dde671b8adab4b->leave($__internal_2391f1bff3a9a7f4df26827f03c44cac053233266023d7d218dde671b8adab4b_prof);

    }

    public function getTemplateName()
    {
        return ":administrateur:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 28,  186 => 26,  169 => 23,  156 => 15,  147 => 14,  134 => 10,  125 => 9,  112 => 7,  103 => 6,  86 => 5,  74 => 29,  72 => 28,  69 => 27,  67 => 26,  61 => 23,  56 => 21,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>NG | {% block title %}{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\" />
        {% endblock %}
        {% block scripts %}
            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        {% endblock %}
        {% block logo %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('image/logo.gif') }}\" />
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"{{ asset('image/logo.gif') }}\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            </a>
            <a class=\"navbar-brand\" href=\"/\">{% block navbar %}{% endblock %}</a>
        </nav><br/>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", ":administrateur:base.html.twig", "C:\\wamp64\\www\\NGI-Web\\app/Resources\\views/administrateur/base.html.twig");
    }
}
