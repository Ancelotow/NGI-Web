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
        $__internal_8e3ca0df55c25260e0d477aa405bcbae519198d1158f8e5c108f7ea276067716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3ca0df55c25260e0d477aa405bcbae519198d1158f8e5c108f7ea276067716->enter($__internal_8e3ca0df55c25260e0d477aa405bcbae519198d1158f8e5c108f7ea276067716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        $__internal_845a11dcc84d06f28e9b8ddfada3755055b648854f085b9de448e69abc487738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845a11dcc84d06f28e9b8ddfada3755055b648854f085b9de448e69abc487738->enter($__internal_845a11dcc84d06f28e9b8ddfada3755055b648854f085b9de448e69abc487738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html oncontextmenu=\"return false\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo2.gif"), "html", null, true);
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
        
        $__internal_8e3ca0df55c25260e0d477aa405bcbae519198d1158f8e5c108f7ea276067716->leave($__internal_8e3ca0df55c25260e0d477aa405bcbae519198d1158f8e5c108f7ea276067716_prof);

        
        $__internal_845a11dcc84d06f28e9b8ddfada3755055b648854f085b9de448e69abc487738->leave($__internal_845a11dcc84d06f28e9b8ddfada3755055b648854f085b9de448e69abc487738_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd997e123bfd8a556dabe416266add493941e302bd887bd0cb325cf95825cdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd997e123bfd8a556dabe416266add493941e302bd887bd0cb325cf95825cdc1->enter($__internal_cd997e123bfd8a556dabe416266add493941e302bd887bd0cb325cf95825cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc0970b2205cd71ebb8e5480d6475672b3a556f64a2ff58c273dcb59f02d089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0970b2205cd71ebb8e5480d6475672b3a556f64a2ff58c273dcb59f02d089f->enter($__internal_dc0970b2205cd71ebb8e5480d6475672b3a556f64a2ff58c273dcb59f02d089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc0970b2205cd71ebb8e5480d6475672b3a556f64a2ff58c273dcb59f02d089f->leave($__internal_dc0970b2205cd71ebb8e5480d6475672b3a556f64a2ff58c273dcb59f02d089f_prof);

        
        $__internal_cd997e123bfd8a556dabe416266add493941e302bd887bd0cb325cf95825cdc1->leave($__internal_cd997e123bfd8a556dabe416266add493941e302bd887bd0cb325cf95825cdc1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c28e2627ca3021cc8f6d7ff1e0ef9f7c457413cf796fe3ad78fed5edd2a926a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c28e2627ca3021cc8f6d7ff1e0ef9f7c457413cf796fe3ad78fed5edd2a926a->enter($__internal_3c28e2627ca3021cc8f6d7ff1e0ef9f7c457413cf796fe3ad78fed5edd2a926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8ecc1ef6acc69727e8ce664077f1175389608ed1cbdfd83ff4e72752e2c6861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ecc1ef6acc69727e8ce664077f1175389608ed1cbdfd83ff4e72752e2c6861->enter($__internal_b8ecc1ef6acc69727e8ce664077f1175389608ed1cbdfd83ff4e72752e2c6861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b8ecc1ef6acc69727e8ce664077f1175389608ed1cbdfd83ff4e72752e2c6861->leave($__internal_b8ecc1ef6acc69727e8ce664077f1175389608ed1cbdfd83ff4e72752e2c6861_prof);

        
        $__internal_3c28e2627ca3021cc8f6d7ff1e0ef9f7c457413cf796fe3ad78fed5edd2a926a->leave($__internal_3c28e2627ca3021cc8f6d7ff1e0ef9f7c457413cf796fe3ad78fed5edd2a926a_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_49b34cf899669269563ef786526c998ae16f0450b5cdb657c0a4a1623dfaa9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b34cf899669269563ef786526c998ae16f0450b5cdb657c0a4a1623dfaa9a5->enter($__internal_49b34cf899669269563ef786526c998ae16f0450b5cdb657c0a4a1623dfaa9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_14583761e11a1df608b977ccce234fb99285c0337e0b05473ff66877b03c3d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14583761e11a1df608b977ccce234fb99285c0337e0b05473ff66877b03c3d64->enter($__internal_14583761e11a1df608b977ccce234fb99285c0337e0b05473ff66877b03c3d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_14583761e11a1df608b977ccce234fb99285c0337e0b05473ff66877b03c3d64->leave($__internal_14583761e11a1df608b977ccce234fb99285c0337e0b05473ff66877b03c3d64_prof);

        
        $__internal_49b34cf899669269563ef786526c998ae16f0450b5cdb657c0a4a1623dfaa9a5->leave($__internal_49b34cf899669269563ef786526c998ae16f0450b5cdb657c0a4a1623dfaa9a5_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_afc712308fbe91ec160d3f999e123a39cc2e24f9d64cf837d9b863ec8750fe67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc712308fbe91ec160d3f999e123a39cc2e24f9d64cf837d9b863ec8750fe67->enter($__internal_afc712308fbe91ec160d3f999e123a39cc2e24f9d64cf837d9b863ec8750fe67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_5a0339eb7b0578dbb579d2e565bd77030277e914691be8d2a001dd1e3c5a6f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0339eb7b0578dbb579d2e565bd77030277e914691be8d2a001dd1e3c5a6f75->enter($__internal_5a0339eb7b0578dbb579d2e565bd77030277e914691be8d2a001dd1e3c5a6f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_5a0339eb7b0578dbb579d2e565bd77030277e914691be8d2a001dd1e3c5a6f75->leave($__internal_5a0339eb7b0578dbb579d2e565bd77030277e914691be8d2a001dd1e3c5a6f75_prof);

        
        $__internal_afc712308fbe91ec160d3f999e123a39cc2e24f9d64cf837d9b863ec8750fe67->leave($__internal_afc712308fbe91ec160d3f999e123a39cc2e24f9d64cf837d9b863ec8750fe67_prof);

    }

    // line 23
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_53a693466d1a6de378892fca3962b4f5920d0e58f4aed36e2c0ebd743178b535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a693466d1a6de378892fca3962b4f5920d0e58f4aed36e2c0ebd743178b535->enter($__internal_53a693466d1a6de378892fca3962b4f5920d0e58f4aed36e2c0ebd743178b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_87f871093ac46261084ff070ac1baf688cf42cf228ceefd9aa1eda7a37c6409c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f871093ac46261084ff070ac1baf688cf42cf228ceefd9aa1eda7a37c6409c->enter($__internal_87f871093ac46261084ff070ac1baf688cf42cf228ceefd9aa1eda7a37c6409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_87f871093ac46261084ff070ac1baf688cf42cf228ceefd9aa1eda7a37c6409c->leave($__internal_87f871093ac46261084ff070ac1baf688cf42cf228ceefd9aa1eda7a37c6409c_prof);

        
        $__internal_53a693466d1a6de378892fca3962b4f5920d0e58f4aed36e2c0ebd743178b535->leave($__internal_53a693466d1a6de378892fca3962b4f5920d0e58f4aed36e2c0ebd743178b535_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d74e8647f6ef9f962bd72ab706c8c09f1fc60afcfc468b36688036befe05de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d74e8647f6ef9f962bd72ab706c8c09f1fc60afcfc468b36688036befe05de7->enter($__internal_2d74e8647f6ef9f962bd72ab706c8c09f1fc60afcfc468b36688036befe05de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76602ec7d495137b6eeed999430850b07d3ca170e9d09626404d9c8b70fbd37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76602ec7d495137b6eeed999430850b07d3ca170e9d09626404d9c8b70fbd37b->enter($__internal_76602ec7d495137b6eeed999430850b07d3ca170e9d09626404d9c8b70fbd37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_76602ec7d495137b6eeed999430850b07d3ca170e9d09626404d9c8b70fbd37b->leave($__internal_76602ec7d495137b6eeed999430850b07d3ca170e9d09626404d9c8b70fbd37b_prof);

        
        $__internal_2d74e8647f6ef9f962bd72ab706c8c09f1fc60afcfc468b36688036befe05de7->leave($__internal_2d74e8647f6ef9f962bd72ab706c8c09f1fc60afcfc468b36688036befe05de7_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73d9e8b8a8aedb5f56e17f958d5a7d4c8545d3d94f08d2cf13a5648ff8121265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d9e8b8a8aedb5f56e17f958d5a7d4c8545d3d94f08d2cf13a5648ff8121265->enter($__internal_73d9e8b8a8aedb5f56e17f958d5a7d4c8545d3d94f08d2cf13a5648ff8121265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c029aebcb2465970556eef9522aa35163562e4327d559f22a450d25fac2abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c029aebcb2465970556eef9522aa35163562e4327d559f22a450d25fac2abef->enter($__internal_2c029aebcb2465970556eef9522aa35163562e4327d559f22a450d25fac2abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c029aebcb2465970556eef9522aa35163562e4327d559f22a450d25fac2abef->leave($__internal_2c029aebcb2465970556eef9522aa35163562e4327d559f22a450d25fac2abef_prof);

        
        $__internal_73d9e8b8a8aedb5f56e17f958d5a7d4c8545d3d94f08d2cf13a5648ff8121265->leave($__internal_73d9e8b8a8aedb5f56e17f958d5a7d4c8545d3d94f08d2cf13a5648ff8121265_prof);

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
<html oncontextmenu=\"return false\">
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
                <img src=\"{{ asset('image/logo2.gif') }}\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
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
