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
        $__internal_f03c4f6ba3fbfadd1c39c48a1d0b778bc3a7b21ed1d1ad4e0d673735811d81f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03c4f6ba3fbfadd1c39c48a1d0b778bc3a7b21ed1d1ad4e0d673735811d81f8->enter($__internal_f03c4f6ba3fbfadd1c39c48a1d0b778bc3a7b21ed1d1ad4e0d673735811d81f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3617b816cf20ec49ccf9c24bc70feb0a3e209a9d43dbaa8f1104320efdf34e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3617b816cf20ec49ccf9c24bc70feb0a3e209a9d43dbaa8f1104320efdf34e27->enter($__internal_3617b816cf20ec49ccf9c24bc70feb0a3e209a9d43dbaa8f1104320efdf34e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script type=\"text/javascript\">
            var pouet = false;
            window.onbeforeunload = function (){
                if ( pouet == false){
                    return false;
                }
            }
            function goToUrl(url){
                pouet = true;
                document.location.href = url;
                return false;
            }
        </script>
    </head>
    <body>
        ";
        // line 43
        $this->displayBlock('navbar', $context, $blocks);
        // line 138
        echo "            <center>
                ";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "            </center>
        ";
        // line 141
        $this->displayBlock('javascripts', $context, $blocks);
        // line 142
        echo "    </body>
</html>
";
        
        $__internal_f03c4f6ba3fbfadd1c39c48a1d0b778bc3a7b21ed1d1ad4e0d673735811d81f8->leave($__internal_f03c4f6ba3fbfadd1c39c48a1d0b778bc3a7b21ed1d1ad4e0d673735811d81f8_prof);

        
        $__internal_3617b816cf20ec49ccf9c24bc70feb0a3e209a9d43dbaa8f1104320efdf34e27->leave($__internal_3617b816cf20ec49ccf9c24bc70feb0a3e209a9d43dbaa8f1104320efdf34e27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab33d46ac55ace76c3690db72995816e2eb41c8bebd11ceb12e9b49713b874b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab33d46ac55ace76c3690db72995816e2eb41c8bebd11ceb12e9b49713b874b9->enter($__internal_ab33d46ac55ace76c3690db72995816e2eb41c8bebd11ceb12e9b49713b874b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e771c5c1ff2b93e1f286e200d2f476da3feb22f3c5365fb43483e14b2ceb357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e771c5c1ff2b93e1f286e200d2f476da3feb22f3c5365fb43483e14b2ceb357->enter($__internal_0e771c5c1ff2b93e1f286e200d2f476da3feb22f3c5365fb43483e14b2ceb357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0e771c5c1ff2b93e1f286e200d2f476da3feb22f3c5365fb43483e14b2ceb357->leave($__internal_0e771c5c1ff2b93e1f286e200d2f476da3feb22f3c5365fb43483e14b2ceb357_prof);

        
        $__internal_ab33d46ac55ace76c3690db72995816e2eb41c8bebd11ceb12e9b49713b874b9->leave($__internal_ab33d46ac55ace76c3690db72995816e2eb41c8bebd11ceb12e9b49713b874b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f39b22f2a5d9383282aaa6e870d53f8a3a6fc821acbda127123d4bc6c15205b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f39b22f2a5d9383282aaa6e870d53f8a3a6fc821acbda127123d4bc6c15205b->enter($__internal_0f39b22f2a5d9383282aaa6e870d53f8a3a6fc821acbda127123d4bc6c15205b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78f6e6c91448ad8deaac324935f61bef4e2e280449b24a9a4220d32cd4b324f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f6e6c91448ad8deaac324935f61bef4e2e280449b24a9a4220d32cd4b324f9->enter($__internal_78f6e6c91448ad8deaac324935f61bef4e2e280449b24a9a4220d32cd4b324f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_78f6e6c91448ad8deaac324935f61bef4e2e280449b24a9a4220d32cd4b324f9->leave($__internal_78f6e6c91448ad8deaac324935f61bef4e2e280449b24a9a4220d32cd4b324f9_prof);

        
        $__internal_0f39b22f2a5d9383282aaa6e870d53f8a3a6fc821acbda127123d4bc6c15205b->leave($__internal_0f39b22f2a5d9383282aaa6e870d53f8a3a6fc821acbda127123d4bc6c15205b_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4c2c2462a1664a1d9fc32c0c42b388f84a9b4b92520d197091671dcd45906716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2c2462a1664a1d9fc32c0c42b388f84a9b4b92520d197091671dcd45906716->enter($__internal_4c2c2462a1664a1d9fc32c0c42b388f84a9b4b92520d197091671dcd45906716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f84273ca83d1f1d75d7ad67a4ef204e56e6d601b45c6a26792e35772663624d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84273ca83d1f1d75d7ad67a4ef204e56e6d601b45c6a26792e35772663624d1->enter($__internal_f84273ca83d1f1d75d7ad67a4ef204e56e6d601b45c6a26792e35772663624d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_f84273ca83d1f1d75d7ad67a4ef204e56e6d601b45c6a26792e35772663624d1->leave($__internal_f84273ca83d1f1d75d7ad67a4ef204e56e6d601b45c6a26792e35772663624d1_prof);

        
        $__internal_4c2c2462a1664a1d9fc32c0c42b388f84a9b4b92520d197091671dcd45906716->leave($__internal_4c2c2462a1664a1d9fc32c0c42b388f84a9b4b92520d197091671dcd45906716_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_92610f75cd8ca645c01f76fde12951e11fd7ab913442c5ac8a61ba4f6c6105b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92610f75cd8ca645c01f76fde12951e11fd7ab913442c5ac8a61ba4f6c6105b8->enter($__internal_92610f75cd8ca645c01f76fde12951e11fd7ab913442c5ac8a61ba4f6c6105b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_078cd67599ce948b2d637705873b7ff2a5234d4fc58bfa3a6ee1499a5afe5bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078cd67599ce948b2d637705873b7ff2a5234d4fc58bfa3a6ee1499a5afe5bdb->enter($__internal_078cd67599ce948b2d637705873b7ff2a5234d4fc58bfa3a6ee1499a5afe5bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_078cd67599ce948b2d637705873b7ff2a5234d4fc58bfa3a6ee1499a5afe5bdb->leave($__internal_078cd67599ce948b2d637705873b7ff2a5234d4fc58bfa3a6ee1499a5afe5bdb_prof);

        
        $__internal_92610f75cd8ca645c01f76fde12951e11fd7ab913442c5ac8a61ba4f6c6105b8->leave($__internal_92610f75cd8ca645c01f76fde12951e11fd7ab913442c5ac8a61ba4f6c6105b8_prof);

    }

    // line 43
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_81d743bd1e60cba745327b201c95d9d5285f8f175fd9403d33057679dfbb298c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d743bd1e60cba745327b201c95d9d5285f8f175fd9403d33057679dfbb298c->enter($__internal_81d743bd1e60cba745327b201c95d9d5285f8f175fd9403d33057679dfbb298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_4ee03f75a0f86233ad479e2a82230791c5baddbbec9e4820e727785ee54e5a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee03f75a0f86233ad479e2a82230791c5baddbbec9e4820e727785ee54e5a57->enter($__internal_4ee03f75a0f86233ad479e2a82230791c5baddbbec9e4820e727785ee54e5a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 44
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
                <a class=\"navbar-brand\" href=\"/ng/\">
                    <img  src=\"";
        // line 46
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
        // line 55
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "acceuil"), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 59
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
        // line 69
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
        // line 80
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
        // line 91
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
        // line 101
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 102
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 104
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
        // line 114
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 116
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
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_4ee03f75a0f86233ad479e2a82230791c5baddbbec9e4820e727785ee54e5a57->leave($__internal_4ee03f75a0f86233ad479e2a82230791c5baddbbec9e4820e727785ee54e5a57_prof);

        
        $__internal_81d743bd1e60cba745327b201c95d9d5285f8f175fd9403d33057679dfbb298c->leave($__internal_81d743bd1e60cba745327b201c95d9d5285f8f175fd9403d33057679dfbb298c_prof);

    }

    // line 139
    public function block_body($context, array $blocks = array())
    {
        $__internal_66057e836de0e2aeb3f1012ae6355a9b4f1f884af44b4f46c8b5c636e1db51bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66057e836de0e2aeb3f1012ae6355a9b4f1f884af44b4f46c8b5c636e1db51bf->enter($__internal_66057e836de0e2aeb3f1012ae6355a9b4f1f884af44b4f46c8b5c636e1db51bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c538bad6820721df66cc0c11fe8fd46100b888be85faa574a53fcaae81470fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c538bad6820721df66cc0c11fe8fd46100b888be85faa574a53fcaae81470fcf->enter($__internal_c538bad6820721df66cc0c11fe8fd46100b888be85faa574a53fcaae81470fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c538bad6820721df66cc0c11fe8fd46100b888be85faa574a53fcaae81470fcf->leave($__internal_c538bad6820721df66cc0c11fe8fd46100b888be85faa574a53fcaae81470fcf_prof);

        
        $__internal_66057e836de0e2aeb3f1012ae6355a9b4f1f884af44b4f46c8b5c636e1db51bf->leave($__internal_66057e836de0e2aeb3f1012ae6355a9b4f1f884af44b4f46c8b5c636e1db51bf_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cadb191e37336a762a51bd4b058cb2e5e237f560ac857a744a216a8d4c56215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cadb191e37336a762a51bd4b058cb2e5e237f560ac857a744a216a8d4c56215->enter($__internal_4cadb191e37336a762a51bd4b058cb2e5e237f560ac857a744a216a8d4c56215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2efd3a20cdf10c023c3fb0e1340c81c6da5f64f3b7495088375ad54eb4e7cb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efd3a20cdf10c023c3fb0e1340c81c6da5f64f3b7495088375ad54eb4e7cb5a->enter($__internal_2efd3a20cdf10c023c3fb0e1340c81c6da5f64f3b7495088375ad54eb4e7cb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2efd3a20cdf10c023c3fb0e1340c81c6da5f64f3b7495088375ad54eb4e7cb5a->leave($__internal_2efd3a20cdf10c023c3fb0e1340c81c6da5f64f3b7495088375ad54eb4e7cb5a_prof);

        
        $__internal_4cadb191e37336a762a51bd4b058cb2e5e237f560ac857a744a216a8d4c56215->leave($__internal_4cadb191e37336a762a51bd4b058cb2e5e237f560ac857a744a216a8d4c56215_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  359 => 141,  342 => 139,  326 => 132,  320 => 131,  314 => 128,  308 => 127,  294 => 116,  290 => 114,  277 => 104,  273 => 102,  271 => 101,  258 => 91,  244 => 80,  230 => 69,  217 => 59,  210 => 55,  198 => 46,  194 => 44,  185 => 43,  172 => 15,  163 => 14,  150 => 10,  141 => 9,  128 => 7,  119 => 6,  102 => 5,  90 => 142,  88 => 141,  85 => 140,  83 => 139,  80 => 138,  78 => 43,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
        <script type=\"text/javascript\">
            var pouet = false;
            window.onbeforeunload = function (){
                if ( pouet == false){
                    return false;
                }
            }
            function goToUrl(url){
                pouet = true;
                document.location.href = url;
                return false;
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
