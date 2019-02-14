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
        $__internal_418004818fe0f38277fcf421728e76547b6b6becd33f366706e608b9c6be9bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418004818fe0f38277fcf421728e76547b6b6becd33f366706e608b9c6be9bb5->enter($__internal_418004818fe0f38277fcf421728e76547b6b6becd33f366706e608b9c6be9bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cf6af042eadf21de4888ee9b4d686b081f99ab93d843c28d1a9953b8ede48d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6af042eadf21de4888ee9b4d686b081f99ab93d843c28d1a9953b8ede48d08->enter($__internal_cf6af042eadf21de4888ee9b4d686b081f99ab93d843c28d1a9953b8ede48d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 126
        echo "            <center>
                ";
        // line 127
        $this->displayBlock('body', $context, $blocks);
        // line 128
        echo "            </center>
        ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "    </body>
</html>
";
        
        $__internal_418004818fe0f38277fcf421728e76547b6b6becd33f366706e608b9c6be9bb5->leave($__internal_418004818fe0f38277fcf421728e76547b6b6becd33f366706e608b9c6be9bb5_prof);

        
        $__internal_cf6af042eadf21de4888ee9b4d686b081f99ab93d843c28d1a9953b8ede48d08->leave($__internal_cf6af042eadf21de4888ee9b4d686b081f99ab93d843c28d1a9953b8ede48d08_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96af14aaa8d9ddce082fc82013b7d9e2659008bec3605b20cf7871ef0752895d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96af14aaa8d9ddce082fc82013b7d9e2659008bec3605b20cf7871ef0752895d->enter($__internal_96af14aaa8d9ddce082fc82013b7d9e2659008bec3605b20cf7871ef0752895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_971ce4aae49265e4c0d0d1ed7ab7fbe0284b966db9a682e4c6793153bb8bfe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971ce4aae49265e4c0d0d1ed7ab7fbe0284b966db9a682e4c6793153bb8bfe97->enter($__internal_971ce4aae49265e4c0d0d1ed7ab7fbe0284b966db9a682e4c6793153bb8bfe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_971ce4aae49265e4c0d0d1ed7ab7fbe0284b966db9a682e4c6793153bb8bfe97->leave($__internal_971ce4aae49265e4c0d0d1ed7ab7fbe0284b966db9a682e4c6793153bb8bfe97_prof);

        
        $__internal_96af14aaa8d9ddce082fc82013b7d9e2659008bec3605b20cf7871ef0752895d->leave($__internal_96af14aaa8d9ddce082fc82013b7d9e2659008bec3605b20cf7871ef0752895d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b614c26f49f3ba0f8e502be7a443512d5e539b3d672a5997cd3bbe1fdb7b3bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b614c26f49f3ba0f8e502be7a443512d5e539b3d672a5997cd3bbe1fdb7b3bcc->enter($__internal_b614c26f49f3ba0f8e502be7a443512d5e539b3d672a5997cd3bbe1fdb7b3bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f40dd99057441b98270b1ac13a5b9e90afcb27f088c99130e3f856c3b70354a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40dd99057441b98270b1ac13a5b9e90afcb27f088c99130e3f856c3b70354a2->enter($__internal_f40dd99057441b98270b1ac13a5b9e90afcb27f088c99130e3f856c3b70354a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f40dd99057441b98270b1ac13a5b9e90afcb27f088c99130e3f856c3b70354a2->leave($__internal_f40dd99057441b98270b1ac13a5b9e90afcb27f088c99130e3f856c3b70354a2_prof);

        
        $__internal_b614c26f49f3ba0f8e502be7a443512d5e539b3d672a5997cd3bbe1fdb7b3bcc->leave($__internal_b614c26f49f3ba0f8e502be7a443512d5e539b3d672a5997cd3bbe1fdb7b3bcc_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_98302a37ab812e5ec2614f1b9e4e8542d416a89df9256cd0edb752805e907984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98302a37ab812e5ec2614f1b9e4e8542d416a89df9256cd0edb752805e907984->enter($__internal_98302a37ab812e5ec2614f1b9e4e8542d416a89df9256cd0edb752805e907984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_09169f3b672dd374e92f380996838d748c5f97e09c88949eb6f1888c9f30eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09169f3b672dd374e92f380996838d748c5f97e09c88949eb6f1888c9f30eedf->enter($__internal_09169f3b672dd374e92f380996838d748c5f97e09c88949eb6f1888c9f30eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_09169f3b672dd374e92f380996838d748c5f97e09c88949eb6f1888c9f30eedf->leave($__internal_09169f3b672dd374e92f380996838d748c5f97e09c88949eb6f1888c9f30eedf_prof);

        
        $__internal_98302a37ab812e5ec2614f1b9e4e8542d416a89df9256cd0edb752805e907984->leave($__internal_98302a37ab812e5ec2614f1b9e4e8542d416a89df9256cd0edb752805e907984_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_4931dd9833812b40b7355d2edc4d215e5f6c09e38af1d768b0114ecc0255cef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4931dd9833812b40b7355d2edc4d215e5f6c09e38af1d768b0114ecc0255cef5->enter($__internal_4931dd9833812b40b7355d2edc4d215e5f6c09e38af1d768b0114ecc0255cef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_ca334a317a2e447ecc90c281d888cd256270d1721c4ab92f373319a221c1d33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca334a317a2e447ecc90c281d888cd256270d1721c4ab92f373319a221c1d33d->enter($__internal_ca334a317a2e447ecc90c281d888cd256270d1721c4ab92f373319a221c1d33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_ca334a317a2e447ecc90c281d888cd256270d1721c4ab92f373319a221c1d33d->leave($__internal_ca334a317a2e447ecc90c281d888cd256270d1721c4ab92f373319a221c1d33d_prof);

        
        $__internal_4931dd9833812b40b7355d2edc4d215e5f6c09e38af1d768b0114ecc0255cef5->leave($__internal_4931dd9833812b40b7355d2edc4d215e5f6c09e38af1d768b0114ecc0255cef5_prof);

    }

    // line 30
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_77a1d4ee3a6a2ddbb513131778b74e264178abcf1423df974622d230dda229fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a1d4ee3a6a2ddbb513131778b74e264178abcf1423df974622d230dda229fd->enter($__internal_77a1d4ee3a6a2ddbb513131778b74e264178abcf1423df974622d230dda229fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_138f97ff6e54ca63daec03caa7eaf023b81485a4dd31658ca0fb3d350eac2d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138f97ff6e54ca63daec03caa7eaf023b81485a4dd31658ca0fb3d350eac2d3b->enter($__internal_138f97ff6e54ca63daec03caa7eaf023b81485a4dd31658ca0fb3d350eac2d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
                                <a class=\"dropdown-item\" href=\"/ng/gestion/travaux\">Travaux</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 57
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
        // line 68
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
        // line 79
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
        // line 89
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    ";
            // line 92
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
        // line 102
        echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 104
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/crypto1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>&nbsp;&nbsp;
                    <a href=\"https://www.fnaim.fr/19-mon-compte.htm\" target=\"_blank\" class=\"btn btn-fnaim\" >
                        <img rel=\"crypto\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "\" onmouseover=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim2.png"), "html", null, true);
        echo "';\"
                             onmouseout=\"this.src='";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/fnaim1.png"), "html", null, true);
        echo "';\" width=\"50\" />
                    </a>

                </div>
            </nav><br/>
        ";
        
        $__internal_138f97ff6e54ca63daec03caa7eaf023b81485a4dd31658ca0fb3d350eac2d3b->leave($__internal_138f97ff6e54ca63daec03caa7eaf023b81485a4dd31658ca0fb3d350eac2d3b_prof);

        
        $__internal_77a1d4ee3a6a2ddbb513131778b74e264178abcf1423df974622d230dda229fd->leave($__internal_77a1d4ee3a6a2ddbb513131778b74e264178abcf1423df974622d230dda229fd_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0b9af52b7c5c0313cf44584ea69d5cc28f635a8809abb3a5372c898ca6ab2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b9af52b7c5c0313cf44584ea69d5cc28f635a8809abb3a5372c898ca6ab2e4->enter($__internal_d0b9af52b7c5c0313cf44584ea69d5cc28f635a8809abb3a5372c898ca6ab2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_090de0b658163311afb034095c05c1c5f930113a178c1ccd5b839a9aeaba6cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090de0b658163311afb034095c05c1c5f930113a178c1ccd5b839a9aeaba6cc7->enter($__internal_090de0b658163311afb034095c05c1c5f930113a178c1ccd5b839a9aeaba6cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_090de0b658163311afb034095c05c1c5f930113a178c1ccd5b839a9aeaba6cc7->leave($__internal_090de0b658163311afb034095c05c1c5f930113a178c1ccd5b839a9aeaba6cc7_prof);

        
        $__internal_d0b9af52b7c5c0313cf44584ea69d5cc28f635a8809abb3a5372c898ca6ab2e4->leave($__internal_d0b9af52b7c5c0313cf44584ea69d5cc28f635a8809abb3a5372c898ca6ab2e4_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce56be788fef7838e8ead573e674e2596dd6d61130c70e8ec0da3f61f7bae5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce56be788fef7838e8ead573e674e2596dd6d61130c70e8ec0da3f61f7bae5e9->enter($__internal_ce56be788fef7838e8ead573e674e2596dd6d61130c70e8ec0da3f61f7bae5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_104683c7e47f1f2c4c8bdb196362ce80fa684523fa08117b19e9bdec979bbc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104683c7e47f1f2c4c8bdb196362ce80fa684523fa08117b19e9bdec979bbc9a->enter($__internal_104683c7e47f1f2c4c8bdb196362ce80fa684523fa08117b19e9bdec979bbc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_104683c7e47f1f2c4c8bdb196362ce80fa684523fa08117b19e9bdec979bbc9a->leave($__internal_104683c7e47f1f2c4c8bdb196362ce80fa684523fa08117b19e9bdec979bbc9a_prof);

        
        $__internal_ce56be788fef7838e8ead573e674e2596dd6d61130c70e8ec0da3f61f7bae5e9->leave($__internal_ce56be788fef7838e8ead573e674e2596dd6d61130c70e8ec0da3f61f7bae5e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 129,  330 => 127,  314 => 120,  308 => 119,  302 => 116,  296 => 115,  282 => 104,  278 => 102,  265 => 92,  261 => 90,  259 => 89,  246 => 79,  232 => 68,  218 => 57,  204 => 46,  197 => 42,  185 => 33,  181 => 31,  172 => 30,  159 => 15,  150 => 14,  137 => 10,  128 => 9,  115 => 7,  106 => 6,  89 => 5,  77 => 130,  75 => 129,  72 => 128,  70 => 127,  67 => 126,  65 => 30,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
                                <a class=\"dropdown-item\" href=\"/ng/gestion/travaux\">Travaux</a>
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
