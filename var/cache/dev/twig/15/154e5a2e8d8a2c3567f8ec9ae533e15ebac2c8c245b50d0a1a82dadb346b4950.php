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
        $__internal_2f9891fd87463073c9c50e910fabb9d0f65de960f12fc8e9b2e713dc35bf8b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9891fd87463073c9c50e910fabb9d0f65de960f12fc8e9b2e713dc35bf8b51->enter($__internal_2f9891fd87463073c9c50e910fabb9d0f65de960f12fc8e9b2e713dc35bf8b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        $__internal_43cdd876d049a19c87bc217bc116de91a1f7108ed18136d90347d0b46f604d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cdd876d049a19c87bc217bc116de91a1f7108ed18136d90347d0b46f604d56->enter($__internal_43cdd876d049a19c87bc217bc116de91a1f7108ed18136d90347d0b46f604d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

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
        
        $__internal_2f9891fd87463073c9c50e910fabb9d0f65de960f12fc8e9b2e713dc35bf8b51->leave($__internal_2f9891fd87463073c9c50e910fabb9d0f65de960f12fc8e9b2e713dc35bf8b51_prof);

        
        $__internal_43cdd876d049a19c87bc217bc116de91a1f7108ed18136d90347d0b46f604d56->leave($__internal_43cdd876d049a19c87bc217bc116de91a1f7108ed18136d90347d0b46f604d56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_181d46ee4feac6a38998f0996ce65b6f41fed43aa1a8a4af0d38af5bd74561d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181d46ee4feac6a38998f0996ce65b6f41fed43aa1a8a4af0d38af5bd74561d3->enter($__internal_181d46ee4feac6a38998f0996ce65b6f41fed43aa1a8a4af0d38af5bd74561d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_480ffbb03a439431c1ddca56965d0934ee90f6d3d2aafbb44838ab4919998ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480ffbb03a439431c1ddca56965d0934ee90f6d3d2aafbb44838ab4919998ed4->enter($__internal_480ffbb03a439431c1ddca56965d0934ee90f6d3d2aafbb44838ab4919998ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_480ffbb03a439431c1ddca56965d0934ee90f6d3d2aafbb44838ab4919998ed4->leave($__internal_480ffbb03a439431c1ddca56965d0934ee90f6d3d2aafbb44838ab4919998ed4_prof);

        
        $__internal_181d46ee4feac6a38998f0996ce65b6f41fed43aa1a8a4af0d38af5bd74561d3->leave($__internal_181d46ee4feac6a38998f0996ce65b6f41fed43aa1a8a4af0d38af5bd74561d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1573b2706fb5e44c08448d377ba9995f4e4d50e37333752be20f367942f9b22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1573b2706fb5e44c08448d377ba9995f4e4d50e37333752be20f367942f9b22b->enter($__internal_1573b2706fb5e44c08448d377ba9995f4e4d50e37333752be20f367942f9b22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_db989b50767e285145f6bf399e92314edb4a04b48e144921d646c649569889e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db989b50767e285145f6bf399e92314edb4a04b48e144921d646c649569889e0->enter($__internal_db989b50767e285145f6bf399e92314edb4a04b48e144921d646c649569889e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_db989b50767e285145f6bf399e92314edb4a04b48e144921d646c649569889e0->leave($__internal_db989b50767e285145f6bf399e92314edb4a04b48e144921d646c649569889e0_prof);

        
        $__internal_1573b2706fb5e44c08448d377ba9995f4e4d50e37333752be20f367942f9b22b->leave($__internal_1573b2706fb5e44c08448d377ba9995f4e4d50e37333752be20f367942f9b22b_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_f0ae9dc01f80555e5f92c7b637e9fe085ca9e7094a57af1ec2e58dd4281ea8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ae9dc01f80555e5f92c7b637e9fe085ca9e7094a57af1ec2e58dd4281ea8de->enter($__internal_f0ae9dc01f80555e5f92c7b637e9fe085ca9e7094a57af1ec2e58dd4281ea8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_adc46b6dcd5b660ae6e933ac32dd429e68f4fb4970c8d0f3001ca0ec739d3317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc46b6dcd5b660ae6e933ac32dd429e68f4fb4970c8d0f3001ca0ec739d3317->enter($__internal_adc46b6dcd5b660ae6e933ac32dd429e68f4fb4970c8d0f3001ca0ec739d3317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_adc46b6dcd5b660ae6e933ac32dd429e68f4fb4970c8d0f3001ca0ec739d3317->leave($__internal_adc46b6dcd5b660ae6e933ac32dd429e68f4fb4970c8d0f3001ca0ec739d3317_prof);

        
        $__internal_f0ae9dc01f80555e5f92c7b637e9fe085ca9e7094a57af1ec2e58dd4281ea8de->leave($__internal_f0ae9dc01f80555e5f92c7b637e9fe085ca9e7094a57af1ec2e58dd4281ea8de_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_4e273599def5523065d845341a660caa73206966f26c8bb583069ee4ea499394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e273599def5523065d845341a660caa73206966f26c8bb583069ee4ea499394->enter($__internal_4e273599def5523065d845341a660caa73206966f26c8bb583069ee4ea499394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_91e7cc01b1b0bb3454853c85e6b4901bdac651c925cf66fefb4ea3e4f1c55f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e7cc01b1b0bb3454853c85e6b4901bdac651c925cf66fefb4ea3e4f1c55f46->enter($__internal_91e7cc01b1b0bb3454853c85e6b4901bdac651c925cf66fefb4ea3e4f1c55f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_91e7cc01b1b0bb3454853c85e6b4901bdac651c925cf66fefb4ea3e4f1c55f46->leave($__internal_91e7cc01b1b0bb3454853c85e6b4901bdac651c925cf66fefb4ea3e4f1c55f46_prof);

        
        $__internal_4e273599def5523065d845341a660caa73206966f26c8bb583069ee4ea499394->leave($__internal_4e273599def5523065d845341a660caa73206966f26c8bb583069ee4ea499394_prof);

    }

    // line 23
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_b71ea403607e9dd925ab793437a642318fd67ca1a912b595984c4dc11246786f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71ea403607e9dd925ab793437a642318fd67ca1a912b595984c4dc11246786f->enter($__internal_b71ea403607e9dd925ab793437a642318fd67ca1a912b595984c4dc11246786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_b03e9f902835d779423ffe9c37f7ea0b5a20d4626f5e7231e3834f97fb10ccc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03e9f902835d779423ffe9c37f7ea0b5a20d4626f5e7231e3834f97fb10ccc4->enter($__internal_b03e9f902835d779423ffe9c37f7ea0b5a20d4626f5e7231e3834f97fb10ccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_b03e9f902835d779423ffe9c37f7ea0b5a20d4626f5e7231e3834f97fb10ccc4->leave($__internal_b03e9f902835d779423ffe9c37f7ea0b5a20d4626f5e7231e3834f97fb10ccc4_prof);

        
        $__internal_b71ea403607e9dd925ab793437a642318fd67ca1a912b595984c4dc11246786f->leave($__internal_b71ea403607e9dd925ab793437a642318fd67ca1a912b595984c4dc11246786f_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_01a0963a88a83b9daf5572c81fb2164ddb84531cbdb5076e8961238a3f73c12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a0963a88a83b9daf5572c81fb2164ddb84531cbdb5076e8961238a3f73c12d->enter($__internal_01a0963a88a83b9daf5572c81fb2164ddb84531cbdb5076e8961238a3f73c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63c357dfdc8dfc4df8274c74af44b3eefe3bca5c927aa55f5936ab5279f0cf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c357dfdc8dfc4df8274c74af44b3eefe3bca5c927aa55f5936ab5279f0cf01->enter($__internal_63c357dfdc8dfc4df8274c74af44b3eefe3bca5c927aa55f5936ab5279f0cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63c357dfdc8dfc4df8274c74af44b3eefe3bca5c927aa55f5936ab5279f0cf01->leave($__internal_63c357dfdc8dfc4df8274c74af44b3eefe3bca5c927aa55f5936ab5279f0cf01_prof);

        
        $__internal_01a0963a88a83b9daf5572c81fb2164ddb84531cbdb5076e8961238a3f73c12d->leave($__internal_01a0963a88a83b9daf5572c81fb2164ddb84531cbdb5076e8961238a3f73c12d_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56bf373857f198762cdae0c1971b43f035e6601bf336c58ef411fbdf78dec31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bf373857f198762cdae0c1971b43f035e6601bf336c58ef411fbdf78dec31c->enter($__internal_56bf373857f198762cdae0c1971b43f035e6601bf336c58ef411fbdf78dec31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3237de5a8eecd580a8b3cd5e08fc4389ebb4b50422b0d4ef22b27e9d38c9b51c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3237de5a8eecd580a8b3cd5e08fc4389ebb4b50422b0d4ef22b27e9d38c9b51c->enter($__internal_3237de5a8eecd580a8b3cd5e08fc4389ebb4b50422b0d4ef22b27e9d38c9b51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3237de5a8eecd580a8b3cd5e08fc4389ebb4b50422b0d4ef22b27e9d38c9b51c->leave($__internal_3237de5a8eecd580a8b3cd5e08fc4389ebb4b50422b0d4ef22b27e9d38c9b51c_prof);

        
        $__internal_56bf373857f198762cdae0c1971b43f035e6601bf336c58ef411fbdf78dec31c->leave($__internal_56bf373857f198762cdae0c1971b43f035e6601bf336c58ef411fbdf78dec31c_prof);

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
