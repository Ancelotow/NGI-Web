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
        $__internal_a6f42711b1168e9a06c774edff733ddd597079e8b8c30871c212485ade79be94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f42711b1168e9a06c774edff733ddd597079e8b8c30871c212485ade79be94->enter($__internal_a6f42711b1168e9a06c774edff733ddd597079e8b8c30871c212485ade79be94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $__internal_b0fa3deaca6e7b10a70116dc775863b060b6b177322baca6570065a5adcc1b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fa3deaca6e7b10a70116dc775863b060b6b177322baca6570065a5adcc1b54->enter($__internal_b0fa3deaca6e7b10a70116dc775863b060b6b177322baca6570065a5adcc1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6f42711b1168e9a06c774edff733ddd597079e8b8c30871c212485ade79be94->leave($__internal_a6f42711b1168e9a06c774edff733ddd597079e8b8c30871c212485ade79be94_prof);

        
        $__internal_b0fa3deaca6e7b10a70116dc775863b060b6b177322baca6570065a5adcc1b54->leave($__internal_b0fa3deaca6e7b10a70116dc775863b060b6b177322baca6570065a5adcc1b54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e0f868f79205b533e6f5183e92f1c80c50ce8e2988dd7770a5055f293223f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0f868f79205b533e6f5183e92f1c80c50ce8e2988dd7770a5055f293223f19->enter($__internal_3e0f868f79205b533e6f5183e92f1c80c50ce8e2988dd7770a5055f293223f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d352a46b5280e9f0c1105cce3a2de19a68de210b906298eae01835a95dfdc868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d352a46b5280e9f0c1105cce3a2de19a68de210b906298eae01835a95dfdc868->enter($__internal_d352a46b5280e9f0c1105cce3a2de19a68de210b906298eae01835a95dfdc868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        
        $__internal_d352a46b5280e9f0c1105cce3a2de19a68de210b906298eae01835a95dfdc868->leave($__internal_d352a46b5280e9f0c1105cce3a2de19a68de210b906298eae01835a95dfdc868_prof);

        
        $__internal_3e0f868f79205b533e6f5183e92f1c80c50ce8e2988dd7770a5055f293223f19->leave($__internal_3e0f868f79205b533e6f5183e92f1c80c50ce8e2988dd7770a5055f293223f19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f4bf4f4bbaf54d8296f8ea540ba6a28c67b77b9858ab433fa32d3a3b1205ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4bf4f4bbaf54d8296f8ea540ba6a28c67b77b9858ab433fa32d3a3b1205ba2->enter($__internal_5f4bf4f4bbaf54d8296f8ea540ba6a28c67b77b9858ab433fa32d3a3b1205ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b24a56a70f35c4913afa636aeea97329e723ae81a66d39d35a39370e57e521c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24a56a70f35c4913afa636aeea97329e723ae81a66d39d35a39370e57e521c8->enter($__internal_b24a56a70f35c4913afa636aeea97329e723ae81a66d39d35a39370e57e521c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">
        <center>
            <div class=\"row\">
                <div class=\"col-sm\">
                    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "adresse", array()), "html", null, true);
        echo "</h2>
                    <a href=\"/ng/gestion/immeuble/pdf/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "id", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-danger\" >
                        ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "voir le pdf"), "html", null, true);
        echo "
                    </a>
                </div>
            </div><br/><br/><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Habitants</h4>
                    ";
        // line 19
        if ((twig_length_filter($this->env, ($context["habs"] ?? $this->getContext($context, "habs"))) > 0)) {
            // line 20
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
                                    <th scope=\"col\">PDF</th>
                                </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["habs"] ?? $this->getContext($context, "habs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unH"]) {
                // line 36
                echo "                                    ";
                if (($this->getAttribute($context["unH"], "presidentCS", array()) == 1)) {
                    // line 37
                    echo "                                        <tr class=\"bg-warning\" >
                                    ";
                } elseif (($this->getAttribute(                // line 38
$context["unH"], "membreCS", array()) == 1)) {
                    // line 39
                    echo "                                        <tr class=\"bg-primary\" >
                                    ";
                } else {
                    // line 41
                    echo "                                        <tr>
                                    ";
                }
                // line 43
                echo "                                            ";
                if (($this->getAttribute($context["unH"], "sexe", array()) == 0)) {
                    // line 44
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 46
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 48
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "dateEmmenagement", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unH"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                            <td><a href=\"/ng/gestion/immeuble/pdf/habitant/";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/image/pdf-logo.png"), "html", null, true);
                echo "\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unH'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "

                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 65
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun habitants.
                        </div>
                    ";
        }
        // line 69
        echo "                    <br/>
                    ";
        // line 70
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 71
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/habitant/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 75
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Propriétaires</h4>
                    ";
        // line 78
        if ((twig_length_filter($this->env, ($context["props"] ?? $this->getContext($context, "props"))) > 0)) {
            // line 79
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom</th>
                                        <th scope=\"col\">Prénom</th>
                                        <th scope=\"col\">Téléphone</th>
                                        <th scope=\"col\">Adresse mail</th>
                                        <th scope=\"col\">Adresse</th>
                                        <th scope=\"col\">PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? $this->getContext($context, "props")));
            foreach ($context['_seq'] as $context["_key"] => $context["unP"]) {
                // line 93
                echo "                                        <tr>
                                            ";
                // line 94
                if (($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 95
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 97
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 99
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "ville", array()), "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "ville", array()), "nom", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                <a href=\"/ng/gestion/proprietaire/pdf/";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/image/pdf-logo.png"), "html", null, true);
                echo "\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unP'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 115
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun propriétaires.
                        </div>
                    ";
        }
        // line 119
        echo "                    <br/>
                    ";
        // line 120
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 121
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/proprietaire/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 125
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Lots</h4>
                    ";
        // line 128
        if ((twig_length_filter($this->env, ($context["lots"] ?? $this->getContext($context, "lots"))) > 0)) {
            // line 129
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">";
            // line 134
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "é"), "html", null, true);
            echo "tage</th>
                                        <th scope=\"col\">Surface</th>
                                        <th scope=\"col\">Carezze</th>
                                        <th scope=\"col\">Prix</th>
                                        <th scope=\"col\">Propriétaire</th>
                                        <th scope=\"col\">Type</th>
                                        <th scope=\"col\">PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lots"] ?? $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["unL"]) {
                // line 145
                echo "                                        <tr>
                                            <td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "num", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "etage", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "surface", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "carezze", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "prix", array()), "html", null, true);
                echo " €</td>
                                            ";
                // line 151
                if (($this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 152
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 154
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 156
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "typeLot", array()), "nom", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                <a href=\"/ng/gestion/immeuble/pdf/lot/";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/image/pdf-logo.png"), "html", null, true);
                echo "\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unL'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 168
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun lots.
                        </div>
                    ";
        }
        // line 172
        echo "                    <br/>
                    ";
        // line 173
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 174
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 178
        echo "                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Sinistres</h4>
                    ";
        // line 183
        if ((twig_length_filter($this->env, ($context["sin"] ?? $this->getContext($context, "sin"))) > 0)) {
            // line 184
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Code</th>
                                    <th scope=\"col\">Type</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Lot</th>
                                    <th scope=\"col\">Consulter</th>
                                    <th scope=\"col\">PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sin"] ?? $this->getContext($context, "sin")));
            foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
                // line 198
                echo "                                    <tr>
                                        <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"/ng/gestion/sinistre/";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-success btn-vsm\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                        <td>
                                            <a href=\"/ng/gestion/immeuble/pdf/sinistre/";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                <img src=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/image/pdf-logo.png"), "html", null, true);
                echo "\" alt=\"logo-pdf\" width=\"15\" />
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 218
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun Sinistre.
                        </div>
                    ";
        }
        // line 222
        echo "                    <br/>
                    ";
        // line 223
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 224
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/sinistre/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 228
        echo "                </div>
                <div id=\"map\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    ";
        // line 232
        if ((twig_length_filter($this->env, ($context["ags"] ?? $this->getContext($context, "ags"))) > 0)) {
            // line 233
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
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ags"] ?? $this->getContext($context, "ags")));
            foreach ($context['_seq'] as $context["_key"] => $context["unA"]) {
                // line 245
                echo "                                    <tr>
                                        <td>";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "nbDecision", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 248
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 250
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 259
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    ";
        }
        // line 263
        echo "                    <br/>
                    ";
        // line 264
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 265
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/ag/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 269
        echo "                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    ";
        // line 272
        if ((twig_length_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs"))) > 0)) {
            // line 273
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
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cs"] ?? $this->getContext($context, "cs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unC"]) {
                // line 284
                echo "                                    <tr>
                                        <td>";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 288
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 297
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    ";
        }
        // line 301
        echo "                    <br/>
                    ";
        // line 302
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 303
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/cs/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 307
        echo "                </div>
            </div><br/>
            <center>
                    <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/copro_ext/") . $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "image", array())), "html", null, true);
        echo "\" />
            </center><br/>



        </center></div>

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>
    <script>
    function myMap() {
        \$(document).ready(function(){
            var map = L.map('map').setView([";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "], 19);
            var Esri_WorldImagery = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);
            var marqueur = L.marker([";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "]).addTo(map);

        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_b24a56a70f35c4913afa636aeea97329e723ae81a66d39d35a39370e57e521c8->leave($__internal_b24a56a70f35c4913afa636aeea97329e723ae81a66d39d35a39370e57e521c8_prof);

        
        $__internal_5f4bf4f4bbaf54d8296f8ea540ba6a28c67b77b9858ab433fa32d3a3b1205ba2->leave($__internal_5f4bf4f4bbaf54d8296f8ea540ba6a28c67b77b9858ab433fa32d3a3b1205ba2_prof);

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
        return array (  710 => 331,  701 => 327,  681 => 310,  676 => 307,  668 => 303,  666 => 302,  663 => 301,  657 => 297,  650 => 292,  640 => 288,  635 => 286,  631 => 285,  628 => 284,  624 => 283,  612 => 273,  610 => 272,  605 => 269,  597 => 265,  595 => 264,  592 => 263,  586 => 259,  579 => 254,  569 => 250,  564 => 248,  560 => 247,  556 => 246,  553 => 245,  549 => 244,  536 => 233,  534 => 232,  528 => 228,  520 => 224,  518 => 223,  515 => 222,  509 => 218,  502 => 213,  491 => 208,  487 => 207,  479 => 204,  474 => 202,  470 => 201,  466 => 200,  462 => 199,  459 => 198,  455 => 197,  440 => 184,  438 => 183,  431 => 178,  423 => 174,  421 => 173,  418 => 172,  412 => 168,  406 => 164,  395 => 159,  391 => 158,  385 => 156,  379 => 154,  373 => 152,  371 => 151,  367 => 150,  363 => 149,  359 => 148,  355 => 147,  351 => 146,  348 => 145,  344 => 144,  331 => 134,  324 => 129,  322 => 128,  317 => 125,  309 => 121,  307 => 120,  304 => 119,  298 => 115,  291 => 110,  280 => 105,  276 => 104,  267 => 102,  263 => 101,  259 => 100,  254 => 99,  248 => 97,  242 => 95,  240 => 94,  237 => 93,  233 => 92,  218 => 79,  216 => 78,  211 => 75,  203 => 71,  201 => 70,  198 => 69,  192 => 65,  184 => 59,  173 => 54,  169 => 53,  165 => 52,  161 => 51,  157 => 50,  153 => 49,  148 => 48,  142 => 46,  136 => 44,  133 => 43,  129 => 41,  125 => 39,  123 => 38,  120 => 37,  117 => 36,  113 => 35,  96 => 20,  94 => 19,  84 => 12,  80 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <div class=\"col-sm\">
                    <h2>{{ copro.code }} : {{ copro.adresse }}</h2>
                    <a href=\"/ng/gestion/immeuble/pdf/{{ copro.id }}\" target=\"_blank\" class=\"btn btn-outline-danger\" >
                        {{ \"voir le pdf\"|upper }}
                    </a>
                </div>
            </div><br/><br/><br/>
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
                                    <th scope=\"col\">PDF</th>
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
                                            <td><a href=\"/ng/gestion/immeuble/pdf/habitant/{{ unH.id }}\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"{{ asset('/image/pdf-logo.png') }}\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
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
                                        <th scope=\"col\">PDF</th>
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
                                            <td>
                                                <a href=\"/ng/gestion/proprietaire/pdf/{{ unP.proprietaire.id }}\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"{{ asset('/image/pdf-logo.png') }}\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
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
                                        <th scope=\"col\">PDF</th>
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
                                            <td>
                                                <a href=\"/ng/gestion/immeuble/pdf/lot/{{ unL.id }}\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"{{ asset('/image/pdf-logo.png') }}\" alt=\"logo-pdf\" width=\"15\" />
                                                </a>
                                            </td>
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
                    {% if sin|length > 0 %}
                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Code</th>
                                    <th scope=\"col\">Type</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Lot</th>
                                    <th scope=\"col\">Consulter</th>
                                    <th scope=\"col\">PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for unS in sin %}
                                    <tr>
                                        <td>{{ unS.code }}</td>
                                        <td>{{ unS.type }}</td>
                                        <td>{{ unS.date }}</td>
                                        <td>{{ unS.lot.num }}</td>
                                        <td>
                                            <a href=\"/ng/gestion/sinistre/{{ unS.code }}\" class=\"btn btn-outline-success btn-vsm\">{{ 'consulter'|upper }}</a>
                                        </td>
                                        <td>
                                            <a href=\"/ng/gestion/immeuble/pdf/sinistre/{{ unS.id }}\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                <img src=\"{{ asset('/image/pdf-logo.png') }}\" alt=\"logo-pdf\" width=\"15\" />
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            Il n'y a aucun Sinistre.
                        </div>
                    {% endif %}
                    <br/>
                    {% if is_granted(['ROLE_ADMIN', 'ROLE_GESTIONNAIRE']) %}
                        <a href=\"/ng/gestion/immeuble/ajout/sinistre/{{ copro.code }}\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    {% endif %}
                </div>
                <div id=\"map\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
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
            <center>
                    <img src=\"{{ asset('image/copro_ext/') ~ copro.image }}\" />
            </center><br/>



        </center></div>

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.css\"
          integrity=\"sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==\"
          crossorigin=\"\"/>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.4.0/dist/leaflet.js\"
            integrity=\"sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==\"
            crossorigin=\"\"></script>
    <script>
    function myMap() {
        \$(document).ready(function(){
            var map = L.map('map').setView([{{ copro.lattitude }}, {{ copro.longitude }}], 19);
            var Esri_WorldImagery = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);
            var marqueur = L.marker([{{ copro.lattitude }}, {{ copro.longitude }}]).addTo(map);

        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
{% endblock %}", "NGGestionnaireBundle:immeuble:copro.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\GestionnaireBundle/Resources/views/immeuble/copro.html.twig");
    }
}
