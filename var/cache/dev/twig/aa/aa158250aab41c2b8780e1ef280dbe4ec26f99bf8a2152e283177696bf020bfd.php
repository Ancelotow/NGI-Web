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
        $__internal_43ea402f999eb2c1e4dceb5871b9805773ef7edce4a2ad35a2725e03ba9925d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ea402f999eb2c1e4dceb5871b9805773ef7edce4a2ad35a2725e03ba9925d5->enter($__internal_43ea402f999eb2c1e4dceb5871b9805773ef7edce4a2ad35a2725e03ba9925d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53f86a9e6415a939ffc63c2aa6a0b29b63f3cdb86923dd949f56c77bc19a114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f86a9e6415a939ffc63c2aa6a0b29b63f3cdb86923dd949f56c77bc19a114f->enter($__internal_53f86a9e6415a939ffc63c2aa6a0b29b63f3cdb86923dd949f56c77bc19a114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_43ea402f999eb2c1e4dceb5871b9805773ef7edce4a2ad35a2725e03ba9925d5->leave($__internal_43ea402f999eb2c1e4dceb5871b9805773ef7edce4a2ad35a2725e03ba9925d5_prof);

        
        $__internal_53f86a9e6415a939ffc63c2aa6a0b29b63f3cdb86923dd949f56c77bc19a114f->leave($__internal_53f86a9e6415a939ffc63c2aa6a0b29b63f3cdb86923dd949f56c77bc19a114f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e56243e445931ae2df9a0eb7c8e2e84fc4aa42ea8a1d1d13ac00d1b706fff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e56243e445931ae2df9a0eb7c8e2e84fc4aa42ea8a1d1d13ac00d1b706fff9->enter($__internal_72e56243e445931ae2df9a0eb7c8e2e84fc4aa42ea8a1d1d13ac00d1b706fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f462cc3c8774e62516ca8a640ea81fb1f35daaa04401423bb873858f14664595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f462cc3c8774e62516ca8a640ea81fb1f35daaa04401423bb873858f14664595->enter($__internal_f462cc3c8774e62516ca8a640ea81fb1f35daaa04401423bb873858f14664595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f462cc3c8774e62516ca8a640ea81fb1f35daaa04401423bb873858f14664595->leave($__internal_f462cc3c8774e62516ca8a640ea81fb1f35daaa04401423bb873858f14664595_prof);

        
        $__internal_72e56243e445931ae2df9a0eb7c8e2e84fc4aa42ea8a1d1d13ac00d1b706fff9->leave($__internal_72e56243e445931ae2df9a0eb7c8e2e84fc4aa42ea8a1d1d13ac00d1b706fff9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3de75038e802443aa8ee421eac4fd4304d4dc548108063f930988137c47a88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3de75038e802443aa8ee421eac4fd4304d4dc548108063f930988137c47a88f->enter($__internal_d3de75038e802443aa8ee421eac4fd4304d4dc548108063f930988137c47a88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_93282efee876ebbb5fc2674941c1dca7fb2ba5a306c25d39932191f7ba166e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93282efee876ebbb5fc2674941c1dca7fb2ba5a306c25d39932191f7ba166e4d->enter($__internal_93282efee876ebbb5fc2674941c1dca7fb2ba5a306c25d39932191f7ba166e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_93282efee876ebbb5fc2674941c1dca7fb2ba5a306c25d39932191f7ba166e4d->leave($__internal_93282efee876ebbb5fc2674941c1dca7fb2ba5a306c25d39932191f7ba166e4d_prof);

        
        $__internal_d3de75038e802443aa8ee421eac4fd4304d4dc548108063f930988137c47a88f->leave($__internal_d3de75038e802443aa8ee421eac4fd4304d4dc548108063f930988137c47a88f_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_2bf42e40a417bf693f2758778ec33d55ae17cba82fe2d513cd12ebdd38cde0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf42e40a417bf693f2758778ec33d55ae17cba82fe2d513cd12ebdd38cde0f1->enter($__internal_2bf42e40a417bf693f2758778ec33d55ae17cba82fe2d513cd12ebdd38cde0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_89563974429e11dee68b70a77c9bb4b9e46e72c3fd1dbd01339a14713a59ef9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89563974429e11dee68b70a77c9bb4b9e46e72c3fd1dbd01339a14713a59ef9b->enter($__internal_89563974429e11dee68b70a77c9bb4b9e46e72c3fd1dbd01339a14713a59ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_89563974429e11dee68b70a77c9bb4b9e46e72c3fd1dbd01339a14713a59ef9b->leave($__internal_89563974429e11dee68b70a77c9bb4b9e46e72c3fd1dbd01339a14713a59ef9b_prof);

        
        $__internal_2bf42e40a417bf693f2758778ec33d55ae17cba82fe2d513cd12ebdd38cde0f1->leave($__internal_2bf42e40a417bf693f2758778ec33d55ae17cba82fe2d513cd12ebdd38cde0f1_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_5f1535b1c441e67f942ebcea0c978ce9a1b3e93f02cb5347255ca6b59c1bda5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1535b1c441e67f942ebcea0c978ce9a1b3e93f02cb5347255ca6b59c1bda5b->enter($__internal_5f1535b1c441e67f942ebcea0c978ce9a1b3e93f02cb5347255ca6b59c1bda5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_24683eaab6ef9b84eb1e8a616527893a2d0aa6516d1f6b3505a22b0c0594d750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24683eaab6ef9b84eb1e8a616527893a2d0aa6516d1f6b3505a22b0c0594d750->enter($__internal_24683eaab6ef9b84eb1e8a616527893a2d0aa6516d1f6b3505a22b0c0594d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_24683eaab6ef9b84eb1e8a616527893a2d0aa6516d1f6b3505a22b0c0594d750->leave($__internal_24683eaab6ef9b84eb1e8a616527893a2d0aa6516d1f6b3505a22b0c0594d750_prof);

        
        $__internal_5f1535b1c441e67f942ebcea0c978ce9a1b3e93f02cb5347255ca6b59c1bda5b->leave($__internal_5f1535b1c441e67f942ebcea0c978ce9a1b3e93f02cb5347255ca6b59c1bda5b_prof);

    }

    // line 36
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d41507d69f5b699b6ebd11a5284ae366a5d6317529e0dfab3c0deb6b1206b22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41507d69f5b699b6ebd11a5284ae366a5d6317529e0dfab3c0deb6b1206b22d->enter($__internal_d41507d69f5b699b6ebd11a5284ae366a5d6317529e0dfab3c0deb6b1206b22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_923b757aeebf9fc80364db53f381d17498aa52046e4f5de05d19bda2f98f2872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923b757aeebf9fc80364db53f381d17498aa52046e4f5de05d19bda2f98f2872->enter($__internal_923b757aeebf9fc80364db53f381d17498aa52046e4f5de05d19bda2f98f2872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_923b757aeebf9fc80364db53f381d17498aa52046e4f5de05d19bda2f98f2872->leave($__internal_923b757aeebf9fc80364db53f381d17498aa52046e4f5de05d19bda2f98f2872_prof);

        
        $__internal_d41507d69f5b699b6ebd11a5284ae366a5d6317529e0dfab3c0deb6b1206b22d->leave($__internal_d41507d69f5b699b6ebd11a5284ae366a5d6317529e0dfab3c0deb6b1206b22d_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_47bca0b69cfe3294ef320f320fd086cbbf94e2d17774eee1ce52de23b41dc549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bca0b69cfe3294ef320f320fd086cbbf94e2d17774eee1ce52de23b41dc549->enter($__internal_47bca0b69cfe3294ef320f320fd086cbbf94e2d17774eee1ce52de23b41dc549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce2d4de47eafcc25588b3a142b460116cf41cd38bbc13687ad6b7ea2f0489a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2d4de47eafcc25588b3a142b460116cf41cd38bbc13687ad6b7ea2f0489a77->enter($__internal_ce2d4de47eafcc25588b3a142b460116cf41cd38bbc13687ad6b7ea2f0489a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce2d4de47eafcc25588b3a142b460116cf41cd38bbc13687ad6b7ea2f0489a77->leave($__internal_ce2d4de47eafcc25588b3a142b460116cf41cd38bbc13687ad6b7ea2f0489a77_prof);

        
        $__internal_47bca0b69cfe3294ef320f320fd086cbbf94e2d17774eee1ce52de23b41dc549->leave($__internal_47bca0b69cfe3294ef320f320fd086cbbf94e2d17774eee1ce52de23b41dc549_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc533b99d31c2bf224ea5e73a94272a6a6a8f7bc9c9a921b007b76bd2ec9fa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc533b99d31c2bf224ea5e73a94272a6a6a8f7bc9c9a921b007b76bd2ec9fa9a->enter($__internal_bc533b99d31c2bf224ea5e73a94272a6a6a8f7bc9c9a921b007b76bd2ec9fa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_185e85e0ae21777fab8402a41386716319cf7bf7fd2cadb598358d49edb83de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185e85e0ae21777fab8402a41386716319cf7bf7fd2cadb598358d49edb83de9->enter($__internal_185e85e0ae21777fab8402a41386716319cf7bf7fd2cadb598358d49edb83de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_185e85e0ae21777fab8402a41386716319cf7bf7fd2cadb598358d49edb83de9->leave($__internal_185e85e0ae21777fab8402a41386716319cf7bf7fd2cadb598358d49edb83de9_prof);

        
        $__internal_bc533b99d31c2bf224ea5e73a94272a6a6a8f7bc9c9a921b007b76bd2ec9fa9a->leave($__internal_bc533b99d31c2bf224ea5e73a94272a6a6a8f7bc9c9a921b007b76bd2ec9fa9a_prof);

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
