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
        $__internal_a32cc55e20f5cfa973a4bb42559abe46ed6784e13ec62c0dfa6230cb5ee7d78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32cc55e20f5cfa973a4bb42559abe46ed6784e13ec62c0dfa6230cb5ee7d78f->enter($__internal_a32cc55e20f5cfa973a4bb42559abe46ed6784e13ec62c0dfa6230cb5ee7d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ac9e9278b833a3190cff14e28836cbae07d025a30146e9c38526159d62c53aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9e9278b833a3190cff14e28836cbae07d025a30146e9c38526159d62c53aa9->enter($__internal_ac9e9278b833a3190cff14e28836cbae07d025a30146e9c38526159d62c53aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 19
        $this->displayBlock('navbar', $context, $blocks);
        // line 114
        echo "            <center>
                ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "            </center>
        ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    </body>
</html>
";
        
        $__internal_a32cc55e20f5cfa973a4bb42559abe46ed6784e13ec62c0dfa6230cb5ee7d78f->leave($__internal_a32cc55e20f5cfa973a4bb42559abe46ed6784e13ec62c0dfa6230cb5ee7d78f_prof);

        
        $__internal_ac9e9278b833a3190cff14e28836cbae07d025a30146e9c38526159d62c53aa9->leave($__internal_ac9e9278b833a3190cff14e28836cbae07d025a30146e9c38526159d62c53aa9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6586c0b2837f25c45027d869d202dc064a0a4a5295bc9547798280c4a8774265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6586c0b2837f25c45027d869d202dc064a0a4a5295bc9547798280c4a8774265->enter($__internal_6586c0b2837f25c45027d869d202dc064a0a4a5295bc9547798280c4a8774265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca86e544461fc6974349303a7df1c2f02de35e13823cbf4b07c1209cd4fd3c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca86e544461fc6974349303a7df1c2f02de35e13823cbf4b07c1209cd4fd3c69->enter($__internal_ca86e544461fc6974349303a7df1c2f02de35e13823cbf4b07c1209cd4fd3c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ca86e544461fc6974349303a7df1c2f02de35e13823cbf4b07c1209cd4fd3c69->leave($__internal_ca86e544461fc6974349303a7df1c2f02de35e13823cbf4b07c1209cd4fd3c69_prof);

        
        $__internal_6586c0b2837f25c45027d869d202dc064a0a4a5295bc9547798280c4a8774265->leave($__internal_6586c0b2837f25c45027d869d202dc064a0a4a5295bc9547798280c4a8774265_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce9cac15bdfa307514036cf3a197d5e3c115272fbabc2eabfdda44f73ade6f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9cac15bdfa307514036cf3a197d5e3c115272fbabc2eabfdda44f73ade6f2d->enter($__internal_ce9cac15bdfa307514036cf3a197d5e3c115272fbabc2eabfdda44f73ade6f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f3765da68eba699d89542fba0021d4c5a433c853c350bca231ffad3778f88b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3765da68eba699d89542fba0021d4c5a433c853c350bca231ffad3778f88b9->enter($__internal_6f3765da68eba699d89542fba0021d4c5a433c853c350bca231ffad3778f88b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6f3765da68eba699d89542fba0021d4c5a433c853c350bca231ffad3778f88b9->leave($__internal_6f3765da68eba699d89542fba0021d4c5a433c853c350bca231ffad3778f88b9_prof);

        
        $__internal_ce9cac15bdfa307514036cf3a197d5e3c115272fbabc2eabfdda44f73ade6f2d->leave($__internal_ce9cac15bdfa307514036cf3a197d5e3c115272fbabc2eabfdda44f73ade6f2d_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_a547f66a133d86f7bbdc406b62e07bd3672115bba740ac425bb6378982821186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a547f66a133d86f7bbdc406b62e07bd3672115bba740ac425bb6378982821186->enter($__internal_a547f66a133d86f7bbdc406b62e07bd3672115bba740ac425bb6378982821186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6ff886d1c4c9063931ec548ad56c4ef3d1039239e360fc604946d500cfc72e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff886d1c4c9063931ec548ad56c4ef3d1039239e360fc604946d500cfc72e03->enter($__internal_6ff886d1c4c9063931ec548ad56c4ef3d1039239e360fc604946d500cfc72e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6ff886d1c4c9063931ec548ad56c4ef3d1039239e360fc604946d500cfc72e03->leave($__internal_6ff886d1c4c9063931ec548ad56c4ef3d1039239e360fc604946d500cfc72e03_prof);

        
        $__internal_a547f66a133d86f7bbdc406b62e07bd3672115bba740ac425bb6378982821186->leave($__internal_a547f66a133d86f7bbdc406b62e07bd3672115bba740ac425bb6378982821186_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e6ccf157d9ce1c0b01b934835150905f4e33af6ed444bdd4d5be27024a6b76a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ccf157d9ce1c0b01b934835150905f4e33af6ed444bdd4d5be27024a6b76a5->enter($__internal_e6ccf157d9ce1c0b01b934835150905f4e33af6ed444bdd4d5be27024a6b76a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_f88918563a5f1d57b119be3d62602ed9832d1710599c98e0525b4bfeede2848b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88918563a5f1d57b119be3d62602ed9832d1710599c98e0525b4bfeede2848b->enter($__internal_f88918563a5f1d57b119be3d62602ed9832d1710599c98e0525b4bfeede2848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f88918563a5f1d57b119be3d62602ed9832d1710599c98e0525b4bfeede2848b->leave($__internal_f88918563a5f1d57b119be3d62602ed9832d1710599c98e0525b4bfeede2848b_prof);

        
        $__internal_e6ccf157d9ce1c0b01b934835150905f4e33af6ed444bdd4d5be27024a6b76a5->leave($__internal_e6ccf157d9ce1c0b01b934835150905f4e33af6ed444bdd4d5be27024a6b76a5_prof);

    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c627465c0e6d812a8845415bcb979e605c54a3e78e6bae81643aa35066264de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c627465c0e6d812a8845415bcb979e605c54a3e78e6bae81643aa35066264de9->enter($__internal_c627465c0e6d812a8845415bcb979e605c54a3e78e6bae81643aa35066264de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_8fa9592ac3710bdff867cb3867803650e16330f4723eba063a6c427dc578140a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa9592ac3710bdff867cb3867803650e16330f4723eba063a6c427dc578140a->enter($__internal_8fa9592ac3710bdff867cb3867803650e16330f4723eba063a6c427dc578140a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 20
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img src=\"";
        // line 22
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
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "acceuil"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 35
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
        // line 45
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
        // line 56
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
        // line 67
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
        // line 77
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 80
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
        // line 90
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 92
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
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_8fa9592ac3710bdff867cb3867803650e16330f4723eba063a6c427dc578140a->leave($__internal_8fa9592ac3710bdff867cb3867803650e16330f4723eba063a6c427dc578140a_prof);

        
        $__internal_c627465c0e6d812a8845415bcb979e605c54a3e78e6bae81643aa35066264de9->leave($__internal_c627465c0e6d812a8845415bcb979e605c54a3e78e6bae81643aa35066264de9_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a5f6a09d77201f2729eadef7aefeb0c276c1c8df2ba25c3bd60f5da0ef5e3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5f6a09d77201f2729eadef7aefeb0c276c1c8df2ba25c3bd60f5da0ef5e3da->enter($__internal_0a5f6a09d77201f2729eadef7aefeb0c276c1c8df2ba25c3bd60f5da0ef5e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec2ab1c91f14e4efa6b8b9b3c3b03e9c29a7181c0f16f3e3dd3182b65fb18b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2ab1c91f14e4efa6b8b9b3c3b03e9c29a7181c0f16f3e3dd3182b65fb18b3a->enter($__internal_ec2ab1c91f14e4efa6b8b9b3c3b03e9c29a7181c0f16f3e3dd3182b65fb18b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec2ab1c91f14e4efa6b8b9b3c3b03e9c29a7181c0f16f3e3dd3182b65fb18b3a->leave($__internal_ec2ab1c91f14e4efa6b8b9b3c3b03e9c29a7181c0f16f3e3dd3182b65fb18b3a_prof);

        
        $__internal_0a5f6a09d77201f2729eadef7aefeb0c276c1c8df2ba25c3bd60f5da0ef5e3da->leave($__internal_0a5f6a09d77201f2729eadef7aefeb0c276c1c8df2ba25c3bd60f5da0ef5e3da_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d047ec704bc03bc923ba06ccf4c1f92bd5cbad48cecf10d1d480ebc0bc950b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d047ec704bc03bc923ba06ccf4c1f92bd5cbad48cecf10d1d480ebc0bc950b21->enter($__internal_d047ec704bc03bc923ba06ccf4c1f92bd5cbad48cecf10d1d480ebc0bc950b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9770a7d51404b7c28acb33cc075bf99011e7d1daebfc2b8300aac037f3c7a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9770a7d51404b7c28acb33cc075bf99011e7d1daebfc2b8300aac037f3c7a99->enter($__internal_e9770a7d51404b7c28acb33cc075bf99011e7d1daebfc2b8300aac037f3c7a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9770a7d51404b7c28acb33cc075bf99011e7d1daebfc2b8300aac037f3c7a99->leave($__internal_e9770a7d51404b7c28acb33cc075bf99011e7d1daebfc2b8300aac037f3c7a99_prof);

        
        $__internal_d047ec704bc03bc923ba06ccf4c1f92bd5cbad48cecf10d1d480ebc0bc950b21->leave($__internal_d047ec704bc03bc923ba06ccf4c1f92bd5cbad48cecf10d1d480ebc0bc950b21_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  335 => 117,  318 => 115,  302 => 108,  296 => 107,  290 => 104,  284 => 103,  270 => 92,  266 => 90,  253 => 80,  249 => 78,  247 => 77,  234 => 67,  220 => 56,  206 => 45,  193 => 35,  186 => 31,  174 => 22,  170 => 20,  161 => 19,  148 => 15,  139 => 14,  126 => 10,  117 => 9,  104 => 7,  95 => 6,  78 => 5,  66 => 118,  64 => 117,  61 => 116,  59 => 115,  56 => 114,  54 => 19,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
        {% block navbar %}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img src=\"{{ asset('image/logo2.gif') }}\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
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
