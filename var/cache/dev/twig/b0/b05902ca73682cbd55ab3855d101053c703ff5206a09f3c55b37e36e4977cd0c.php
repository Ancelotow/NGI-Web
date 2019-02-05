<?php

/* NGGestionnaireBundle:immeuble:copro.html.twig */
class __TwigTemplate_5719d3e42471c79875d0cfea4df9e127fea20889100c6293c480b964a74c7e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NGGestionnaireBundle:immeuble:copro.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4389546ffbc0a74f8c657764314e4fc7bb2ad4e049f8c3f2b6e71a2109f0f962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4389546ffbc0a74f8c657764314e4fc7bb2ad4e049f8c3f2b6e71a2109f0f962->enter($__internal_4389546ffbc0a74f8c657764314e4fc7bb2ad4e049f8c3f2b6e71a2109f0f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $__internal_826a0ef384f0f8d4a31f597ef6d355c9a88faf3543562c3662100b766af0aedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a0ef384f0f8d4a31f597ef6d355c9a88faf3543562c3662100b766af0aedf->enter($__internal_826a0ef384f0f8d4a31f597ef6d355c9a88faf3543562c3662100b766af0aedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4389546ffbc0a74f8c657764314e4fc7bb2ad4e049f8c3f2b6e71a2109f0f962->leave($__internal_4389546ffbc0a74f8c657764314e4fc7bb2ad4e049f8c3f2b6e71a2109f0f962_prof);

        
        $__internal_826a0ef384f0f8d4a31f597ef6d355c9a88faf3543562c3662100b766af0aedf->leave($__internal_826a0ef384f0f8d4a31f597ef6d355c9a88faf3543562c3662100b766af0aedf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd15042a46b00f8a88f62b177ed453fdf9cf303dd5028247655c779deac68431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd15042a46b00f8a88f62b177ed453fdf9cf303dd5028247655c779deac68431->enter($__internal_fd15042a46b00f8a88f62b177ed453fdf9cf303dd5028247655c779deac68431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df4b6d4fe587bc0bc65f5ccc3595c0ea5c8cb7eb474132d972b1b2c2d7979807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4b6d4fe587bc0bc65f5ccc3595c0ea5c8cb7eb474132d972b1b2c2d7979807->enter($__internal_df4b6d4fe587bc0bc65f5ccc3595c0ea5c8cb7eb474132d972b1b2c2d7979807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        
        $__internal_df4b6d4fe587bc0bc65f5ccc3595c0ea5c8cb7eb474132d972b1b2c2d7979807->leave($__internal_df4b6d4fe587bc0bc65f5ccc3595c0ea5c8cb7eb474132d972b1b2c2d7979807_prof);

        
        $__internal_fd15042a46b00f8a88f62b177ed453fdf9cf303dd5028247655c779deac68431->leave($__internal_fd15042a46b00f8a88f62b177ed453fdf9cf303dd5028247655c779deac68431_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dd4fab4a2f344a9612752f9a81f40d187a2d9a913d0b33c98cbdb1ec37578e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd4fab4a2f344a9612752f9a81f40d187a2d9a913d0b33c98cbdb1ec37578e1->enter($__internal_0dd4fab4a2f344a9612752f9a81f40d187a2d9a913d0b33c98cbdb1ec37578e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_845c4eedd38a6474e816d4c5369619563bb5bb63bf06c594f789e0b6d2c36929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845c4eedd38a6474e816d4c5369619563bb5bb63bf06c594f789e0b6d2c36929->enter($__internal_845c4eedd38a6474e816d4c5369619563bb5bb63bf06c594f789e0b6d2c36929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <center>
            <div class=\"row\">
                <div class=\"col-sm\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "adresse", array()), "html", null, true);
        echo "</h2></div><br/>
            </div>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Habitants</h4>
                    ";
        // line 14
        if ((twig_length_filter($this->env, ($context["habs"] ?? $this->getContext($context, "habs"))) > 0)) {
            // line 15
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Prénom</th>
                                    <th scope=\"col\">Date d'emménagment</th>
                                    <th scope=\"col\">Téléphone</th>
                                    <th scope=\"col\">Adresse mail</th>
                                    <th scope=\"col\">Lot</th>
                                </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["habs"] ?? $this->getContext($context, "habs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unH"]) {
                // line 30
                echo "                                    ";
                if (($this->getAttribute($context["unH"], "presidentCS", array()) == 1)) {
                    // line 31
                    echo "                                        <tr class=\"bg-warning\" >
                                    ";
                } elseif (($this->getAttribute(                // line 32
$context["unH"], "membreCS", array()) == 1)) {
                    // line 33
                    echo "                                        <tr class=\"bg-primary\" >
                                    ";
                } else {
                    // line 35
                    echo "                                        <tr>
                                    ";
                }
                // line 37
                echo "                                            ";
                if (($this->getAttribute($context["unH"], "sexe", array()) == 0)) {
                    // line 38
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 40
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 42
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "dateEmmenagement", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unH"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unH'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "

                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 55
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun habitants.
                        </div>
                    ";
        }
        // line 59
        echo "                    <br/>
                    ";
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 61
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/habitant/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 65
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Propriétaires</h4>
                    ";
        // line 68
        if ((twig_length_filter($this->env, ($context["props"] ?? $this->getContext($context, "props"))) > 0)) {
            // line 69
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Prénom</th>
                                        <th scope=\"col\">Téléphone</th>
                                        <th scope=\"col\">Adresse mail</th>
                                        <th scope=\"col\">Adresse</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? $this->getContext($context, "props")));
            foreach ($context['_seq'] as $context["_key"] => $context["unP"]) {
                // line 82
                echo "                                        <tr>
                                            ";
                // line 83
                if (($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 84
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 86
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 88
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "ville", array()), "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "ville", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 99
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun propriétaires.
                        </div>
                    ";
        }
        // line 103
        echo "                    <br/>
                    ";
        // line 104
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 105
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/proprietaire/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 109
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Lots</h4>
                    ";
        // line 112
        if ((twig_length_filter($this->env, ($context["lots"] ?? $this->getContext($context, "lots"))) > 0)) {
            // line 113
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">";
            // line 118
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "é"), "html", null, true);
            echo "tage</th>
                                        <th scope=\"col\">Surface</th>
                                        <th scope=\"col\">Carezze</th>
                                        <th scope=\"col\">Prix</th>
                                        <th scope=\"col\">Propriétaire</th>
                                        <th scope=\"col\">Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lots"] ?? $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["unL"]) {
                // line 128
                echo "                                        <tr>
                                            <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "num", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "etage", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "surface", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "carezze", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "prix", array()), "html", null, true);
                echo " €</td>
                                            ";
                // line 134
                if (($this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 135
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 137
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 139
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "typeLot", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unL'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 146
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun lots.
                        </div>
                    ";
        }
        // line 150
        echo "                    <br/>
                    ";
        // line 151
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 152
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 156
        echo "                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Sinistres</h4>
                    <div class=\"table-wrapper-scroll-y\">
                        <table class=\"table table-hover table-dark\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">First</th>
                                <th scope=\"col\">Last</th>
                                <th scope=\"col\">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope=\"row\">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>

                    </div></div>
                <div id=\"googleMap\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    ";
        // line 215
        if ((twig_length_filter($this->env, ($context["ags"] ?? $this->getContext($context, "ags"))) > 0)) {
            // line 216
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Référence</th>
                                    <th scope=\"col\">Décisions</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Consulter</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ags"] ?? $this->getContext($context, "ags")));
            foreach ($context['_seq'] as $context["_key"] => $context["unA"]) {
                // line 228
                echo "                                    <tr>
                                        <td>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "nbDecision", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 233
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 242
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    ";
        }
        // line 246
        echo "                    <br/>
                    ";
        // line 247
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 248
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/ag/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 252
        echo "                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    ";
        // line 255
        if ((twig_length_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs"))) > 0)) {
            // line 256
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Référence</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Consulter</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cs"] ?? $this->getContext($context, "cs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unC"]) {
                // line 267
                echo "                                    <tr>
                                        <td>";
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 271
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 280
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    ";
        }
        // line 284
        echo "                    <br/>
                    ";
        // line 285
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 286
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/cs/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 290
        echo "                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-2\">
                    <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/copro_ext/") . $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "image", array())), "html", null, true);
        echo "\" />
                </div><br/>
            </div>



        </center></div>
    <script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "),
            zoom:18,
        };
        var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
        var marqueur = new google.maps.Marker({
            position: new google.maps.LatLng(";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "),
            map: map
        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_845c4eedd38a6474e816d4c5369619563bb5bb63bf06c594f789e0b6d2c36929->leave($__internal_845c4eedd38a6474e816d4c5369619563bb5bb63bf06c594f789e0b6d2c36929_prof);

        
        $__internal_0dd4fab4a2f344a9612752f9a81f40d187a2d9a913d0b33c98cbdb1ec37578e1->leave($__internal_0dd4fab4a2f344a9612752f9a81f40d187a2d9a913d0b33c98cbdb1ec37578e1_prof);

    }

    public function getTemplateName()
    {
        return "NGGestionnaireBundle:immeuble:copro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 309,  607 => 304,  594 => 294,  588 => 290,  580 => 286,  578 => 285,  575 => 284,  569 => 280,  562 => 275,  552 => 271,  547 => 269,  543 => 268,  540 => 267,  536 => 266,  524 => 256,  522 => 255,  517 => 252,  509 => 248,  507 => 247,  504 => 246,  498 => 242,  491 => 237,  481 => 233,  476 => 231,  472 => 230,  468 => 229,  465 => 228,  461 => 227,  448 => 216,  446 => 215,  385 => 156,  377 => 152,  375 => 151,  372 => 150,  366 => 146,  360 => 142,  350 => 139,  344 => 137,  338 => 135,  336 => 134,  332 => 133,  328 => 132,  324 => 131,  320 => 130,  316 => 129,  313 => 128,  309 => 127,  297 => 118,  290 => 113,  288 => 112,  283 => 109,  275 => 105,  273 => 104,  270 => 103,  264 => 99,  257 => 94,  244 => 91,  240 => 90,  236 => 89,  231 => 88,  225 => 86,  219 => 84,  217 => 83,  214 => 82,  210 => 81,  196 => 69,  194 => 68,  189 => 65,  181 => 61,  179 => 60,  176 => 59,  170 => 55,  162 => 49,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  136 => 42,  130 => 40,  124 => 38,  121 => 37,  117 => 35,  113 => 33,  111 => 32,  108 => 31,  105 => 30,  101 => 29,  85 => 15,  83 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'base.html.twig' %}

{% block title %}{{ copro.code }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <center>
            <div class=\"row\">
                <div class=\"col-sm\"><h2>{{ copro.code }} : {{ copro.adresse }}</h2></div><br/>
            </div>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Habitants</h4>
                    {% if habs|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\">Prénom</th>
                                    <th scope=\"col\">Date d'emménagment</th>
                                    <th scope=\"col\">Téléphone</th>
                                    <th scope=\"col\">Adresse mail</th>
                                    <th scope=\"col\">Lot</th>
                                </tr>
                                </thead>
                                <tbody>

                                    {% for unH in habs %}
                                    {% if unH.presidentCS == 1 %}
                                        <tr class=\"bg-warning\" >
                                    {% elseif unH.membreCS == 1 %}
                                        <tr class=\"bg-primary\" >
                                    {% else %}
                                        <tr>
                                    {% endif %}
                                            {% if unH.sexe == 0 %}
                                                <td>Mme. {{ unH.nom }}</td>
                                            {% else %}
                                                <td>M. {{ unH.nom }}</td>
                                            {% endif %}
                                            <td>{{ unH.prenom }}</td>
                                            <td>{{ unH.dateEmmenagement }}</td>
                                            <td>{{ unH.tel }}</td>
                                            <td>{{ unH.email }}</td>
                                            <td>{{ unH.lot.num }}</td>
                                        </tr>
                                    {% endfor %}


                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucun habitants.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/habitant/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Propriétaires</h4>
                    {% if props|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Prénom</th>
                                        <th scope=\"col\">Téléphone</th>
                                        <th scope=\"col\">Adresse mail</th>
                                        <th scope=\"col\">Adresse</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {% for unP in props %}
                                        <tr>
                                            {% if unP.proprietaire.sexe == 0 %}
                                                <td>Mme. {{ unP.proprietaire.nom }}</td>
                                            {% else %}
                                                <td>M. {{ unP.proprietaire.nom }}</td>
                                            {% endif %}
                                            <td>{{ unP.proprietaire.prenom }}</td>
                                            <td>{{ unP.proprietaire.tel }}</td>
                                            <td>{{ unP.proprietaire.email }}</td>
                                            <td>{{ unP.proprietaire.adresse }}, {{ unP.proprietaire.ville.cp }} {{ unP.proprietaire.ville.nom }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucun propriétaires.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/lot/proprietaire/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Lots</h4>
                    {% if lots|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">{{ \"é\"|upper }}tage</th>
                                        <th scope=\"col\">Surface</th>
                                        <th scope=\"col\">Carezze</th>
                                        <th scope=\"col\">Prix</th>
                                        <th scope=\"col\">Propriétaire</th>
                                        <th scope=\"col\">Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for unL in lots %}
                                        <tr>
                                            <td>{{ unL.num }}</td>
                                            <td>{{ unL.etage }}</td>
                                            <td>{{ unL.surface }} m²</td>
                                            <td>{{ unL.carezze }} m²</td>
                                            <td>{{ unL.prix }} €</td>
                                            {% if unL.proprietaire.sexe == 0 %}
                                                <td>Mme. {{ unL.proprietaire.nom }}</td>
                                            {% else %}
                                                <td>M. {{ unL.proprietaire.nom }}</td>
                                            {% endif %}
                                            <td>{{ unL.typeLot.nom }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucun lots.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/lot/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Sinistres</h4>
                    <div class=\"table-wrapper-scroll-y\">
                        <table class=\"table table-hover table-dark\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">First</th>
                                <th scope=\"col\">Last</th>
                                <th scope=\"col\">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope=\"row\">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>

                    </div></div>
                <div id=\"googleMap\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    {% if ags|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Référence</th>
                                    <th scope=\"col\">Décisions</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Consulter</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for unA in ags %}
                                    <tr>
                                        <td>{{ unA.ref }}</td>
                                        <td>{{ unA.nbDecision }}</td>
                                        <td>{{ unA.date }}</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">{{ 'consulter'|upper }}</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/ag/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    {% if cs|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Référence</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Consulter</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for unC in cs %}
                                    <tr>
                                        <td>{{ unC.ref }}</td>
                                        <td>{{ unC.date }}</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">{{ 'consulter'|upper }}</a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/cs/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-2\">
                    <img src=\"{{ asset('image/copro_ext/') ~ copro.image }}\" />
                </div><br/>
            </div>



        </center></div>
    <script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng({{ copro.lattitude }},{{ copro.longitude }}),
            zoom:18,
        };
        var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
        var marqueur = new google.maps.Marker({
            position: new google.maps.LatLng({{ copro.lattitude }},{{ copro.longitude }}),
            map: map
        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
{% endblock %}", "NGGestionnaireBundle:immeuble:copro.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/copro.html.twig");
    }
}
