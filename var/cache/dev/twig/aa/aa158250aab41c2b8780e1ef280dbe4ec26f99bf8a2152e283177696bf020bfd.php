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
        $__internal_10cf6b0bfc6d76f0b3c8f8c5e8c43747e3a37d0855bc2b84931b51498325eb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cf6b0bfc6d76f0b3c8f8c5e8c43747e3a37d0855bc2b84931b51498325eb9d->enter($__internal_10cf6b0bfc6d76f0b3c8f8c5e8c43747e3a37d0855bc2b84931b51498325eb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d33ca0a2fa5b4f35e0be968f43119efe0725f7a4a2ad986a229e6820b18fa98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33ca0a2fa5b4f35e0be968f43119efe0725f7a4a2ad986a229e6820b18fa98f->enter($__internal_d33ca0a2fa5b4f35e0be968f43119efe0725f7a4a2ad986a229e6820b18fa98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                if((e.keyCode===85 && e.ctrlKey===true)||(e.keyCode===83 && e.ctrlKey===true)||(e.keyCode===73 && e.keyCode===16 && e.ctrlKey===true)){
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
        // line 30
        $this->displayBlock('navbar', $context, $blocks);
        // line 125
        echo "            <center>
                ";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "            </center>
        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "    </body>
</html>
";
        
        $__internal_10cf6b0bfc6d76f0b3c8f8c5e8c43747e3a37d0855bc2b84931b51498325eb9d->leave($__internal_10cf6b0bfc6d76f0b3c8f8c5e8c43747e3a37d0855bc2b84931b51498325eb9d_prof);

        
        $__internal_d33ca0a2fa5b4f35e0be968f43119efe0725f7a4a2ad986a229e6820b18fa98f->leave($__internal_d33ca0a2fa5b4f35e0be968f43119efe0725f7a4a2ad986a229e6820b18fa98f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57a6ab06c321e133d9773a29567c6c94eef32b5142d9a1818c0bad79c0fd00f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a6ab06c321e133d9773a29567c6c94eef32b5142d9a1818c0bad79c0fd00f3->enter($__internal_57a6ab06c321e133d9773a29567c6c94eef32b5142d9a1818c0bad79c0fd00f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47132fdee1dffc73ed7d356068f2a14767c33b399925759256f02fa3872203de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47132fdee1dffc73ed7d356068f2a14767c33b399925759256f02fa3872203de->enter($__internal_47132fdee1dffc73ed7d356068f2a14767c33b399925759256f02fa3872203de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_47132fdee1dffc73ed7d356068f2a14767c33b399925759256f02fa3872203de->leave($__internal_47132fdee1dffc73ed7d356068f2a14767c33b399925759256f02fa3872203de_prof);

        
        $__internal_57a6ab06c321e133d9773a29567c6c94eef32b5142d9a1818c0bad79c0fd00f3->leave($__internal_57a6ab06c321e133d9773a29567c6c94eef32b5142d9a1818c0bad79c0fd00f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d197199e6debe454d111830102028e2e62cae7064246845b44b63e353e93e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d197199e6debe454d111830102028e2e62cae7064246845b44b63e353e93e2a->enter($__internal_7d197199e6debe454d111830102028e2e62cae7064246845b44b63e353e93e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81161270839915c5c9100f70098ebc59b6e92a56048b6781a886c858cf7c3f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81161270839915c5c9100f70098ebc59b6e92a56048b6781a886c858cf7c3f1e->enter($__internal_81161270839915c5c9100f70098ebc59b6e92a56048b6781a886c858cf7c3f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_81161270839915c5c9100f70098ebc59b6e92a56048b6781a886c858cf7c3f1e->leave($__internal_81161270839915c5c9100f70098ebc59b6e92a56048b6781a886c858cf7c3f1e_prof);

        
        $__internal_7d197199e6debe454d111830102028e2e62cae7064246845b44b63e353e93e2a->leave($__internal_7d197199e6debe454d111830102028e2e62cae7064246845b44b63e353e93e2a_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_14834a41392c444f073b0e4cd40d1e5b97b772d580bca28c10446b61dbb0c732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14834a41392c444f073b0e4cd40d1e5b97b772d580bca28c10446b61dbb0c732->enter($__internal_14834a41392c444f073b0e4cd40d1e5b97b772d580bca28c10446b61dbb0c732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_67632b7fa37f2e908ce27393293d86953f337325cb12d393b216482423c95eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67632b7fa37f2e908ce27393293d86953f337325cb12d393b216482423c95eed->enter($__internal_67632b7fa37f2e908ce27393293d86953f337325cb12d393b216482423c95eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_67632b7fa37f2e908ce27393293d86953f337325cb12d393b216482423c95eed->leave($__internal_67632b7fa37f2e908ce27393293d86953f337325cb12d393b216482423c95eed_prof);

        
        $__internal_14834a41392c444f073b0e4cd40d1e5b97b772d580bca28c10446b61dbb0c732->leave($__internal_14834a41392c444f073b0e4cd40d1e5b97b772d580bca28c10446b61dbb0c732_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0a8a59654dd2854aeb483fd2b7fbfa6ad03d5156a7c2e75adbf9abd01d931c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8a59654dd2854aeb483fd2b7fbfa6ad03d5156a7c2e75adbf9abd01d931c3b->enter($__internal_0a8a59654dd2854aeb483fd2b7fbfa6ad03d5156a7c2e75adbf9abd01d931c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_dd931ec8f407f8b7eb404275471928f0a6b286025b7b5eec9a43ea3a66eac3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd931ec8f407f8b7eb404275471928f0a6b286025b7b5eec9a43ea3a66eac3f4->enter($__internal_dd931ec8f407f8b7eb404275471928f0a6b286025b7b5eec9a43ea3a66eac3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_dd931ec8f407f8b7eb404275471928f0a6b286025b7b5eec9a43ea3a66eac3f4->leave($__internal_dd931ec8f407f8b7eb404275471928f0a6b286025b7b5eec9a43ea3a66eac3f4_prof);

        
        $__internal_0a8a59654dd2854aeb483fd2b7fbfa6ad03d5156a7c2e75adbf9abd01d931c3b->leave($__internal_0a8a59654dd2854aeb483fd2b7fbfa6ad03d5156a7c2e75adbf9abd01d931c3b_prof);

    }

    // line 30
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_041472d19837dc05a7e4e647f69f349a3f96bda1dcb33e3c4f95086c6a75fffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041472d19837dc05a7e4e647f69f349a3f96bda1dcb33e3c4f95086c6a75fffe->enter($__internal_041472d19837dc05a7e4e647f69f349a3f96bda1dcb33e3c4f95086c6a75fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_e70584a9bdc829d01b53ed3239d8d098cdfa7f9b2643c8d0622b2b2dd0c0d713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70584a9bdc829d01b53ed3239d8d098cdfa7f9b2643c8d0622b2b2dd0c0d713->enter($__internal_e70584a9bdc829d01b53ed3239d8d098cdfa7f9b2643c8d0622b2b2dd0c0d713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 31
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img  src=\"";
        // line 33
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
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "acceuil"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 46
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
        // line 56
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
        // line 67
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
        // line 78
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
        // line 88
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 89
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 91
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
        // line 101
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 103
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
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_e70584a9bdc829d01b53ed3239d8d098cdfa7f9b2643c8d0622b2b2dd0c0d713->leave($__internal_e70584a9bdc829d01b53ed3239d8d098cdfa7f9b2643c8d0622b2b2dd0c0d713_prof);

        
        $__internal_041472d19837dc05a7e4e647f69f349a3f96bda1dcb33e3c4f95086c6a75fffe->leave($__internal_041472d19837dc05a7e4e647f69f349a3f96bda1dcb33e3c4f95086c6a75fffe_prof);

    }

    // line 126
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b49589c30a4ffa41fa16021cb58799715b0e6de667e72b33edecef198354220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b49589c30a4ffa41fa16021cb58799715b0e6de667e72b33edecef198354220->enter($__internal_2b49589c30a4ffa41fa16021cb58799715b0e6de667e72b33edecef198354220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d268c26fa36bdab9e5c2f9412def5f65bb5514462ad8ac6fb586570742d30797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d268c26fa36bdab9e5c2f9412def5f65bb5514462ad8ac6fb586570742d30797->enter($__internal_d268c26fa36bdab9e5c2f9412def5f65bb5514462ad8ac6fb586570742d30797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d268c26fa36bdab9e5c2f9412def5f65bb5514462ad8ac6fb586570742d30797->leave($__internal_d268c26fa36bdab9e5c2f9412def5f65bb5514462ad8ac6fb586570742d30797_prof);

        
        $__internal_2b49589c30a4ffa41fa16021cb58799715b0e6de667e72b33edecef198354220->leave($__internal_2b49589c30a4ffa41fa16021cb58799715b0e6de667e72b33edecef198354220_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_461767dddac79e3bcd5862ab932461cbe1eeb2cef74936d7a0b31bfe5aa6d6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461767dddac79e3bcd5862ab932461cbe1eeb2cef74936d7a0b31bfe5aa6d6bc->enter($__internal_461767dddac79e3bcd5862ab932461cbe1eeb2cef74936d7a0b31bfe5aa6d6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0cc98d8d2eb38ccdb15cc144a4d261c3223c1de6a2de20ea2764074b8bd043ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc98d8d2eb38ccdb15cc144a4d261c3223c1de6a2de20ea2764074b8bd043ee->enter($__internal_0cc98d8d2eb38ccdb15cc144a4d261c3223c1de6a2de20ea2764074b8bd043ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cc98d8d2eb38ccdb15cc144a4d261c3223c1de6a2de20ea2764074b8bd043ee->leave($__internal_0cc98d8d2eb38ccdb15cc144a4d261c3223c1de6a2de20ea2764074b8bd043ee_prof);

        
        $__internal_461767dddac79e3bcd5862ab932461cbe1eeb2cef74936d7a0b31bfe5aa6d6bc->leave($__internal_461767dddac79e3bcd5862ab932461cbe1eeb2cef74936d7a0b31bfe5aa6d6bc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  346 => 128,  329 => 126,  313 => 119,  307 => 118,  301 => 115,  295 => 114,  281 => 103,  277 => 101,  264 => 91,  260 => 89,  258 => 88,  245 => 78,  231 => 67,  217 => 56,  204 => 46,  197 => 42,  185 => 33,  181 => 31,  172 => 30,  159 => 15,  150 => 14,  137 => 10,  128 => 9,  115 => 7,  106 => 6,  89 => 5,  77 => 129,  75 => 128,  72 => 127,  70 => 126,  67 => 125,  65 => 30,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
                if((e.keyCode===85 && e.ctrlKey===true)||(e.keyCode===83 && e.ctrlKey===true)||(e.keyCode===73 && e.keyCode===16 && e.ctrlKey===true)){
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
