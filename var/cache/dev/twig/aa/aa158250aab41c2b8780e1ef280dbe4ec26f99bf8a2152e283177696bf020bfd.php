<?php

/* base.html.twig */
class __TwigTemplate_cf276ec5c8aeca8007e33ee25c4885ab60c5782e044b68c641db76c6879257f8 extends Twig_Template
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
        $__internal_c955248b726374d5deb67e0effb8b72b89de83c5d42ce4c45f55a62d9c31c3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c955248b726374d5deb67e0effb8b72b89de83c5d42ce4c45f55a62d9c31c3b9->enter($__internal_c955248b726374d5deb67e0effb8b72b89de83c5d42ce4c45f55a62d9c31c3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7e3a6656419522291d325dc9925d4955b170ef261c6b61ab2560bc816683c039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3a6656419522291d325dc9925d4955b170ef261c6b61ab2560bc816683c039->enter($__internal_7e3a6656419522291d325dc9925d4955b170ef261c6b61ab2560bc816683c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <script>
            window.onkeydown=function(event){
                var e=event||window.event;
                if(e.keyCode===85 && e.ctrlKey===true){
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    return false;
                }
                else if(e.keyCode===115 && e.ctrlKey===true){
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    return false;
                }
            }
        </script>
    </head>
    <body>
        ";
        // line 36
        $this->displayBlock('navbar', $context, $blocks);
        // line 131
        echo "            <center>
                ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "            </center>
        ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "    </body>
</html>
";
        
        $__internal_c955248b726374d5deb67e0effb8b72b89de83c5d42ce4c45f55a62d9c31c3b9->leave($__internal_c955248b726374d5deb67e0effb8b72b89de83c5d42ce4c45f55a62d9c31c3b9_prof);

        
        $__internal_7e3a6656419522291d325dc9925d4955b170ef261c6b61ab2560bc816683c039->leave($__internal_7e3a6656419522291d325dc9925d4955b170ef261c6b61ab2560bc816683c039_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb01959c1f7e963567d2639327c0c0be8ef8c91897ffb4d2965f7bfa346f89e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb01959c1f7e963567d2639327c0c0be8ef8c91897ffb4d2965f7bfa346f89e8->enter($__internal_fb01959c1f7e963567d2639327c0c0be8ef8c91897ffb4d2965f7bfa346f89e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d42a0cf1e81b1894bd90df6512f90746dbfef5b1c2fed0c26cae6b4742b76667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42a0cf1e81b1894bd90df6512f90746dbfef5b1c2fed0c26cae6b4742b76667->enter($__internal_d42a0cf1e81b1894bd90df6512f90746dbfef5b1c2fed0c26cae6b4742b76667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d42a0cf1e81b1894bd90df6512f90746dbfef5b1c2fed0c26cae6b4742b76667->leave($__internal_d42a0cf1e81b1894bd90df6512f90746dbfef5b1c2fed0c26cae6b4742b76667_prof);

        
        $__internal_fb01959c1f7e963567d2639327c0c0be8ef8c91897ffb4d2965f7bfa346f89e8->leave($__internal_fb01959c1f7e963567d2639327c0c0be8ef8c91897ffb4d2965f7bfa346f89e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c07e8b7ecaa581d57c5cb4f5bc61694a90ff10299d7ee1a6670a459e0b313104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07e8b7ecaa581d57c5cb4f5bc61694a90ff10299d7ee1a6670a459e0b313104->enter($__internal_c07e8b7ecaa581d57c5cb4f5bc61694a90ff10299d7ee1a6670a459e0b313104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e8cbcdc0ea2109cd6fb9cbaec3d6db7174e529611d25751e704bced9f44351fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cbcdc0ea2109cd6fb9cbaec3d6db7174e529611d25751e704bced9f44351fd->enter($__internal_e8cbcdc0ea2109cd6fb9cbaec3d6db7174e529611d25751e704bced9f44351fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e8cbcdc0ea2109cd6fb9cbaec3d6db7174e529611d25751e704bced9f44351fd->leave($__internal_e8cbcdc0ea2109cd6fb9cbaec3d6db7174e529611d25751e704bced9f44351fd_prof);

        
        $__internal_c07e8b7ecaa581d57c5cb4f5bc61694a90ff10299d7ee1a6670a459e0b313104->leave($__internal_c07e8b7ecaa581d57c5cb4f5bc61694a90ff10299d7ee1a6670a459e0b313104_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4b93c56247c5599f6711ed8acdb95d481abc39cc73eb022c4c741c2b5f3732cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b93c56247c5599f6711ed8acdb95d481abc39cc73eb022c4c741c2b5f3732cd->enter($__internal_4b93c56247c5599f6711ed8acdb95d481abc39cc73eb022c4c741c2b5f3732cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_52cf7b70e3a959b9b542c290717bceab33d5183423844d71a9fb9baf2de813ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cf7b70e3a959b9b542c290717bceab33d5183423844d71a9fb9baf2de813ab->enter($__internal_52cf7b70e3a959b9b542c290717bceab33d5183423844d71a9fb9baf2de813ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_52cf7b70e3a959b9b542c290717bceab33d5183423844d71a9fb9baf2de813ab->leave($__internal_52cf7b70e3a959b9b542c290717bceab33d5183423844d71a9fb9baf2de813ab_prof);

        
        $__internal_4b93c56247c5599f6711ed8acdb95d481abc39cc73eb022c4c741c2b5f3732cd->leave($__internal_4b93c56247c5599f6711ed8acdb95d481abc39cc73eb022c4c741c2b5f3732cd_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_92089f4851a0a16e7996777ad7291b28f4fa0c6d7e21f1b6992d31eba1a64458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92089f4851a0a16e7996777ad7291b28f4fa0c6d7e21f1b6992d31eba1a64458->enter($__internal_92089f4851a0a16e7996777ad7291b28f4fa0c6d7e21f1b6992d31eba1a64458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_9385fcee9de3937c8cfd4d888237728d68b4f5d497fc504bbdb7d54625bfbf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9385fcee9de3937c8cfd4d888237728d68b4f5d497fc504bbdb7d54625bfbf66->enter($__internal_9385fcee9de3937c8cfd4d888237728d68b4f5d497fc504bbdb7d54625bfbf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_9385fcee9de3937c8cfd4d888237728d68b4f5d497fc504bbdb7d54625bfbf66->leave($__internal_9385fcee9de3937c8cfd4d888237728d68b4f5d497fc504bbdb7d54625bfbf66_prof);

        
        $__internal_92089f4851a0a16e7996777ad7291b28f4fa0c6d7e21f1b6992d31eba1a64458->leave($__internal_92089f4851a0a16e7996777ad7291b28f4fa0c6d7e21f1b6992d31eba1a64458_prof);

    }

    // line 36
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_3f3a4d8f0af2cfc71d2d8fbb74f8aac83de8927b4543c3d76766893d9a3b4eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3a4d8f0af2cfc71d2d8fbb74f8aac83de8927b4543c3d76766893d9a3b4eec->enter($__internal_3f3a4d8f0af2cfc71d2d8fbb74f8aac83de8927b4543c3d76766893d9a3b4eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_0b89480b23fc4d1a414d88378cdeb3be4483d5f644e5ab980151ab3e7684db33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b89480b23fc4d1a414d88378cdeb3be4483d5f644e5ab980151ab3e7684db33->enter($__internal_0b89480b23fc4d1a414d88378cdeb3be4483d5f644e5ab980151ab3e7684db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 37
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img  src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo2.gif"), "html", null, true);
        echo "\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"/ng/\">";
        // line 48
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "acceuil"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 52
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "gestion"), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/ng/gestion/immeuble\">Copropriétés</a>
                                <a class=\"dropdown-item\" href=\"/ng/gestion/proprietaire\">Propriétaires</a>
                                <a class=\"dropdown-item\" href=\"/ng/gestion/sinistre\">Sinistres</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 62
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "comptabilité"), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 73
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "location/vente"), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 84
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "géolocalisation"), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/region\">Région</a>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/departement\">Département</a>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/ville\">Ville</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/carte\">Carte</a>
                            </div>
                        </li>
                        ";
        // line 94
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 95
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 97
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "ng immobilier"), "html", null, true);
            echo "
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"/ng/immobilier/user\">Employés</a>
                                    <a class=\"dropdown-item\" href=\"/ng/immobilier/partenaire\">Partenaires</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                </div>
                            </li>
                        ";
        }
        // line 107
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 109
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/logout\">Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                    <a href=\"https://ngimmobilier.crypto-extranet.com/connexion/\" target=\"_blank\" class=\"btn btn-crypto\" >
                        <img rel=\"crypto\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_0b89480b23fc4d1a414d88378cdeb3be4483d5f644e5ab980151ab3e7684db33->leave($__internal_0b89480b23fc4d1a414d88378cdeb3be4483d5f644e5ab980151ab3e7684db33_prof);

        
        $__internal_3f3a4d8f0af2cfc71d2d8fbb74f8aac83de8927b4543c3d76766893d9a3b4eec->leave($__internal_3f3a4d8f0af2cfc71d2d8fbb74f8aac83de8927b4543c3d76766893d9a3b4eec_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_98afb46fc841defa168945fb6f040232c81468a7918a93bb83076d448f85c110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98afb46fc841defa168945fb6f040232c81468a7918a93bb83076d448f85c110->enter($__internal_98afb46fc841defa168945fb6f040232c81468a7918a93bb83076d448f85c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_420880c474a6a40f6436aa57482f60ae0c1b2aa78141201d044a7ffc9d9ed82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420880c474a6a40f6436aa57482f60ae0c1b2aa78141201d044a7ffc9d9ed82e->enter($__internal_420880c474a6a40f6436aa57482f60ae0c1b2aa78141201d044a7ffc9d9ed82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_420880c474a6a40f6436aa57482f60ae0c1b2aa78141201d044a7ffc9d9ed82e->leave($__internal_420880c474a6a40f6436aa57482f60ae0c1b2aa78141201d044a7ffc9d9ed82e_prof);

        
        $__internal_98afb46fc841defa168945fb6f040232c81468a7918a93bb83076d448f85c110->leave($__internal_98afb46fc841defa168945fb6f040232c81468a7918a93bb83076d448f85c110_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28ba7ce0ae60bcbf0f32817367a26927ab5ee1c14c656140c0dbb19bacde7ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ba7ce0ae60bcbf0f32817367a26927ab5ee1c14c656140c0dbb19bacde7ee2->enter($__internal_28ba7ce0ae60bcbf0f32817367a26927ab5ee1c14c656140c0dbb19bacde7ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5b53c7c0c2a74c100a8d952e922696838c493097353849cc87543efc9fa79c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b53c7c0c2a74c100a8d952e922696838c493097353849cc87543efc9fa79c0->enter($__internal_c5b53c7c0c2a74c100a8d952e922696838c493097353849cc87543efc9fa79c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5b53c7c0c2a74c100a8d952e922696838c493097353849cc87543efc9fa79c0->leave($__internal_c5b53c7c0c2a74c100a8d952e922696838c493097353849cc87543efc9fa79c0_prof);

        
        $__internal_28ba7ce0ae60bcbf0f32817367a26927ab5ee1c14c656140c0dbb19bacde7ee2->leave($__internal_28ba7ce0ae60bcbf0f32817367a26927ab5ee1c14c656140c0dbb19bacde7ee2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  352 => 134,  335 => 132,  319 => 125,  313 => 124,  307 => 121,  301 => 120,  287 => 109,  283 => 107,  270 => 97,  266 => 95,  264 => 94,  251 => 84,  237 => 73,  223 => 62,  210 => 52,  203 => 48,  191 => 39,  187 => 37,  178 => 36,  165 => 15,  156 => 14,  143 => 10,  134 => 9,  121 => 7,  112 => 6,  95 => 5,  83 => 135,  81 => 134,  78 => 133,  76 => 132,  73 => 131,  71 => 36,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
        <script>
            window.onkeydown=function(event){
                var e=event||window.event;
                if(e.keyCode===85 && e.ctrlKey===true){
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    return false;
                }
                else if(e.keyCode===115 && e.ctrlKey===true){
                    e.stopPropagation();
                    e.preventDefault();
                    e.returnValue = false;
                    return false;
                }
            }
        </script>
    </head>
    <body>
        {% block navbar %}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img  src=\"{{ asset('image/logo2.gif') }}\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"/ng/\">{{ 'acceuil'|upper }}</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'gestion'|upper }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/ng/gestion/immeuble\">Copropriétés</a>
                                <a class=\"dropdown-item\" href=\"/ng/gestion/proprietaire\">Propriétaires</a>
                                <a class=\"dropdown-item\" href=\"/ng/gestion/sinistre\">Sinistres</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'comptabilité'|upper }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'location/vente'|upper }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ 'géolocalisation'|upper }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/region\">Région</a>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/departement\">Département</a>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/ville\">Ville</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/ng/geolocalisation/carte\">Carte</a>
                            </div>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    {{ \"ng immobilier\"|upper }}
                                </a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"/ng/immobilier/user\">Employés</a>
                                    <a class=\"dropdown-item\" href=\"/ng/immobilier/partenaire\">Partenaires</a>
                                    <div class=\"dropdown-divider\"></div>
                                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                                </div>
                            </li>
                        {% endif %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ app.user.username|upper }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">Action</a>
                                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"/logout\">Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                    <a href=\"https://ngimmobilier.crypto-extranet.com/connexion/\" target=\"_blank\" class=\"btn btn-crypto\" >
                        <img rel=\"crypto\" src=\"{{ asset('image/crypto1.png')}}\" onmouseover=\"this.src='{{ asset(\"image/crypto2.png\")}}';\"
                             onmouseout=\"this.src='{{ asset(\"image/crypto1.png\")}}';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"{{ asset('image/fnaim1.png')}}\" onmouseover=\"this.src='{{ asset(\"image/fnaim2.png\")}}';\"
                             onmouseout=\"this.src='{{ asset(\"image/fnaim1.png\")}}';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        {% endblock %}
            <center>
                {% block body %}{% endblock %}
            </center>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NGI-Web\\app\\Resources\\views\\base.html.twig");
    }
}
