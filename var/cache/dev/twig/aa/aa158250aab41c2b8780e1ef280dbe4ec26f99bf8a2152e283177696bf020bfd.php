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
        $__internal_77b6429d2d6974727d5f1f8a2469295e8e5d79de24fd295caf05faea5e25ccd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b6429d2d6974727d5f1f8a2469295e8e5d79de24fd295caf05faea5e25ccd2->enter($__internal_77b6429d2d6974727d5f1f8a2469295e8e5d79de24fd295caf05faea5e25ccd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b35904258a9dd439129bd46a1c0ceb52ab36253e210af8cc5ceb5214375cb70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35904258a9dd439129bd46a1c0ceb52ab36253e210af8cc5ceb5214375cb70d->enter($__internal_b35904258a9dd439129bd46a1c0ceb52ab36253e210af8cc5ceb5214375cb70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 115
        echo "            <center>
                ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "            </center>
        ";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "    </body>
</html>
";
        
        $__internal_77b6429d2d6974727d5f1f8a2469295e8e5d79de24fd295caf05faea5e25ccd2->leave($__internal_77b6429d2d6974727d5f1f8a2469295e8e5d79de24fd295caf05faea5e25ccd2_prof);

        
        $__internal_b35904258a9dd439129bd46a1c0ceb52ab36253e210af8cc5ceb5214375cb70d->leave($__internal_b35904258a9dd439129bd46a1c0ceb52ab36253e210af8cc5ceb5214375cb70d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0b9d257e824db2f974296a4d23e738f1c0c682906586c1153c3b8f02049ca50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b9d257e824db2f974296a4d23e738f1c0c682906586c1153c3b8f02049ca50->enter($__internal_c0b9d257e824db2f974296a4d23e738f1c0c682906586c1153c3b8f02049ca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03f460f0c6a456cb85d4b90e54c377f1d327323c5c9b08345654478b6549450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f460f0c6a456cb85d4b90e54c377f1d327323c5c9b08345654478b6549450c->enter($__internal_03f460f0c6a456cb85d4b90e54c377f1d327323c5c9b08345654478b6549450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03f460f0c6a456cb85d4b90e54c377f1d327323c5c9b08345654478b6549450c->leave($__internal_03f460f0c6a456cb85d4b90e54c377f1d327323c5c9b08345654478b6549450c_prof);

        
        $__internal_c0b9d257e824db2f974296a4d23e738f1c0c682906586c1153c3b8f02049ca50->leave($__internal_c0b9d257e824db2f974296a4d23e738f1c0c682906586c1153c3b8f02049ca50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_307ebb477eb22e933c825ca26e0597727d0830fee756c3d4f7e38b751b82f177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307ebb477eb22e933c825ca26e0597727d0830fee756c3d4f7e38b751b82f177->enter($__internal_307ebb477eb22e933c825ca26e0597727d0830fee756c3d4f7e38b751b82f177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edc89fbe3a0276d8cb17a005775480c458ae55881cb7931138e40f9b1ef143db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc89fbe3a0276d8cb17a005775480c458ae55881cb7931138e40f9b1ef143db->enter($__internal_edc89fbe3a0276d8cb17a005775480c458ae55881cb7931138e40f9b1ef143db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_edc89fbe3a0276d8cb17a005775480c458ae55881cb7931138e40f9b1ef143db->leave($__internal_edc89fbe3a0276d8cb17a005775480c458ae55881cb7931138e40f9b1ef143db_prof);

        
        $__internal_307ebb477eb22e933c825ca26e0597727d0830fee756c3d4f7e38b751b82f177->leave($__internal_307ebb477eb22e933c825ca26e0597727d0830fee756c3d4f7e38b751b82f177_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_720ece98c0881f995ef0f27210c9de2adf630290498682ba4e93787c4870eeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720ece98c0881f995ef0f27210c9de2adf630290498682ba4e93787c4870eeb7->enter($__internal_720ece98c0881f995ef0f27210c9de2adf630290498682ba4e93787c4870eeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_3ef59f7b76b9be3dfa084e178caccf98628fab6d686e748845faf4b572005bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef59f7b76b9be3dfa084e178caccf98628fab6d686e748845faf4b572005bd8->enter($__internal_3ef59f7b76b9be3dfa084e178caccf98628fab6d686e748845faf4b572005bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_3ef59f7b76b9be3dfa084e178caccf98628fab6d686e748845faf4b572005bd8->leave($__internal_3ef59f7b76b9be3dfa084e178caccf98628fab6d686e748845faf4b572005bd8_prof);

        
        $__internal_720ece98c0881f995ef0f27210c9de2adf630290498682ba4e93787c4870eeb7->leave($__internal_720ece98c0881f995ef0f27210c9de2adf630290498682ba4e93787c4870eeb7_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_db39ee8654f4eb4885bd182b350b40e707e4a2a83689d390bcca4337bfb85cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db39ee8654f4eb4885bd182b350b40e707e4a2a83689d390bcca4337bfb85cb9->enter($__internal_db39ee8654f4eb4885bd182b350b40e707e4a2a83689d390bcca4337bfb85cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_4c0ee4d1f930ffbe743e23e3ac7fc064992e7286a979a31f30f715798b5bffcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0ee4d1f930ffbe743e23e3ac7fc064992e7286a979a31f30f715798b5bffcb->enter($__internal_4c0ee4d1f930ffbe743e23e3ac7fc064992e7286a979a31f30f715798b5bffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_4c0ee4d1f930ffbe743e23e3ac7fc064992e7286a979a31f30f715798b5bffcb->leave($__internal_4c0ee4d1f930ffbe743e23e3ac7fc064992e7286a979a31f30f715798b5bffcb_prof);

        
        $__internal_db39ee8654f4eb4885bd182b350b40e707e4a2a83689d390bcca4337bfb85cb9->leave($__internal_db39ee8654f4eb4885bd182b350b40e707e4a2a83689d390bcca4337bfb85cb9_prof);

    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_887a1f1bbcb82f6817620b2d745089d21a419d1cfc19cff97356d51f81c84af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887a1f1bbcb82f6817620b2d745089d21a419d1cfc19cff97356d51f81c84af0->enter($__internal_887a1f1bbcb82f6817620b2d745089d21a419d1cfc19cff97356d51f81c84af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_a58499c55c77ed81e1495736ba96f30e1618d65e91dfa671272a810ed17f2cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58499c55c77ed81e1495736ba96f30e1618d65e91dfa671272a810ed17f2cb8->enter($__internal_a58499c55c77ed81e1495736ba96f30e1618d65e91dfa671272a810ed17f2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 46
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
        // line 57
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
        // line 68
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
        // line 78
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 81
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
        // line 91
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 93
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
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_a58499c55c77ed81e1495736ba96f30e1618d65e91dfa671272a810ed17f2cb8->leave($__internal_a58499c55c77ed81e1495736ba96f30e1618d65e91dfa671272a810ed17f2cb8_prof);

        
        $__internal_887a1f1bbcb82f6817620b2d745089d21a419d1cfc19cff97356d51f81c84af0->leave($__internal_887a1f1bbcb82f6817620b2d745089d21a419d1cfc19cff97356d51f81c84af0_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_345f74db9990c2002ee396200daf5772e43677403060ec6f50476cba2956dfc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345f74db9990c2002ee396200daf5772e43677403060ec6f50476cba2956dfc9->enter($__internal_345f74db9990c2002ee396200daf5772e43677403060ec6f50476cba2956dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d56c7c4cc9b718628d8c5c0e2c938d1e85fd6471caaab50235e59a5a90dc630f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56c7c4cc9b718628d8c5c0e2c938d1e85fd6471caaab50235e59a5a90dc630f->enter($__internal_d56c7c4cc9b718628d8c5c0e2c938d1e85fd6471caaab50235e59a5a90dc630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d56c7c4cc9b718628d8c5c0e2c938d1e85fd6471caaab50235e59a5a90dc630f->leave($__internal_d56c7c4cc9b718628d8c5c0e2c938d1e85fd6471caaab50235e59a5a90dc630f_prof);

        
        $__internal_345f74db9990c2002ee396200daf5772e43677403060ec6f50476cba2956dfc9->leave($__internal_345f74db9990c2002ee396200daf5772e43677403060ec6f50476cba2956dfc9_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fb8813f6fc978d5b9855a2244d677fad88d9a8ba35c9306de8611c5d0ea357c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb8813f6fc978d5b9855a2244d677fad88d9a8ba35c9306de8611c5d0ea357c->enter($__internal_7fb8813f6fc978d5b9855a2244d677fad88d9a8ba35c9306de8611c5d0ea357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a6cbc09b8880105363f94c451048ff475c28162ecabcc171aa958336e667783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6cbc09b8880105363f94c451048ff475c28162ecabcc171aa958336e667783->enter($__internal_6a6cbc09b8880105363f94c451048ff475c28162ecabcc171aa958336e667783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a6cbc09b8880105363f94c451048ff475c28162ecabcc171aa958336e667783->leave($__internal_6a6cbc09b8880105363f94c451048ff475c28162ecabcc171aa958336e667783_prof);

        
        $__internal_7fb8813f6fc978d5b9855a2244d677fad88d9a8ba35c9306de8611c5d0ea357c->leave($__internal_7fb8813f6fc978d5b9855a2244d677fad88d9a8ba35c9306de8611c5d0ea357c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  336 => 118,  319 => 116,  303 => 109,  297 => 108,  291 => 105,  285 => 104,  271 => 93,  267 => 91,  254 => 81,  250 => 79,  248 => 78,  235 => 68,  221 => 57,  207 => 46,  193 => 35,  186 => 31,  174 => 22,  170 => 20,  161 => 19,  148 => 15,  139 => 14,  126 => 10,  117 => 9,  104 => 7,  95 => 6,  78 => 5,  66 => 119,  64 => 118,  61 => 117,  59 => 116,  56 => 115,  54 => 19,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
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
