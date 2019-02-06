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
        $__internal_dae078ff11d9c436f5bd4d6746816d81cd63c2b4c87c7b4c8f5801eeb72ec6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae078ff11d9c436f5bd4d6746816d81cd63c2b4c87c7b4c8f5801eeb72ec6a2->enter($__internal_dae078ff11d9c436f5bd4d6746816d81cd63c2b4c87c7b4c8f5801eeb72ec6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $__internal_a5576ec5c3d8ec6663497109fdba15af8e2544545bdd36bf78b158ebab05c847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5576ec5c3d8ec6663497109fdba15af8e2544545bdd36bf78b158ebab05c847->enter($__internal_a5576ec5c3d8ec6663497109fdba15af8e2544545bdd36bf78b158ebab05c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae078ff11d9c436f5bd4d6746816d81cd63c2b4c87c7b4c8f5801eeb72ec6a2->leave($__internal_dae078ff11d9c436f5bd4d6746816d81cd63c2b4c87c7b4c8f5801eeb72ec6a2_prof);

        
        $__internal_a5576ec5c3d8ec6663497109fdba15af8e2544545bdd36bf78b158ebab05c847->leave($__internal_a5576ec5c3d8ec6663497109fdba15af8e2544545bdd36bf78b158ebab05c847_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa80d4f9fdbb9cfc7b941fdb8ff16776240959befa82a66c92f06f351cc3a28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa80d4f9fdbb9cfc7b941fdb8ff16776240959befa82a66c92f06f351cc3a28e->enter($__internal_fa80d4f9fdbb9cfc7b941fdb8ff16776240959befa82a66c92f06f351cc3a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2a776f98082e747ecf1fc0fc33d4c77125643153d300ca1263aea8312206879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a776f98082e747ecf1fc0fc33d4c77125643153d300ca1263aea8312206879->enter($__internal_e2a776f98082e747ecf1fc0fc33d4c77125643153d300ca1263aea8312206879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        
        $__internal_e2a776f98082e747ecf1fc0fc33d4c77125643153d300ca1263aea8312206879->leave($__internal_e2a776f98082e747ecf1fc0fc33d4c77125643153d300ca1263aea8312206879_prof);

        
        $__internal_fa80d4f9fdbb9cfc7b941fdb8ff16776240959befa82a66c92f06f351cc3a28e->leave($__internal_fa80d4f9fdbb9cfc7b941fdb8ff16776240959befa82a66c92f06f351cc3a28e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cc07b6699cf08fe05da7d4fde910bbc8569ead32342c35b9c859ba50b0a63a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc07b6699cf08fe05da7d4fde910bbc8569ead32342c35b9c859ba50b0a63a9->enter($__internal_1cc07b6699cf08fe05da7d4fde910bbc8569ead32342c35b9c859ba50b0a63a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ed1074c59d05cb43e22591304c1d81644dd0854c9bae58ef6c550fe005efaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed1074c59d05cb43e22591304c1d81644dd0854c9bae58ef6c550fe005efaa6->enter($__internal_1ed1074c59d05cb43e22591304c1d81644dd0854c9bae58ef6c550fe005efaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 161
        if ((twig_length_filter($this->env, ($context["sin"] ?? $this->getContext($context, "sin"))) > 0)) {
            // line 162
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">Code</th>
                                    <th scope=\"col\">Type</th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Lot</th>
                                    <th scope=\"col\">Consulter</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sin"] ?? $this->getContext($context, "sin")));
            foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
                // line 175
                echo "                                    <tr>
                                        <td>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 181
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 190
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun Sinistre.
                        </div>
                    ";
        }
        // line 194
        echo "                    <br/>
                    ";
        // line 195
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 196
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/sinistre/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 200
        echo "                </div>
                <div id=\"map\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    ";
        // line 204
        if ((twig_length_filter($this->env, ($context["ags"] ?? $this->getContext($context, "ags"))) > 0)) {
            // line 205
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
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ags"] ?? $this->getContext($context, "ags")));
            foreach ($context['_seq'] as $context["_key"] => $context["unA"]) {
                // line 217
                echo "                                    <tr>
                                        <td>";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "nbDecision", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 222
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 231
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    ";
        }
        // line 235
        echo "                    <br/>
                    ";
        // line 236
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 237
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/ag/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 241
        echo "                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    ";
        // line 244
        if ((twig_length_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs"))) > 0)) {
            // line 245
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
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cs"] ?? $this->getContext($context, "cs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unC"]) {
                // line 256
                echo "                                    <tr>
                                        <td>";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 260
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 269
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    ";
        }
        // line 273
        echo "                    <br/>
                    ";
        // line 274
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 275
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/cs/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 279
        echo "                </div>
            </div><br/>
            <center>
                    <img src=\"";
        // line 282
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
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "], 19);
            var Esri_WorldImagery = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);
            var marqueur = L.marker([";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "]).addTo(map);



        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_1ed1074c59d05cb43e22591304c1d81644dd0854c9bae58ef6c550fe005efaa6->leave($__internal_1ed1074c59d05cb43e22591304c1d81644dd0854c9bae58ef6c550fe005efaa6_prof);

        
        $__internal_1cc07b6699cf08fe05da7d4fde910bbc8569ead32342c35b9c859ba50b0a63a9->leave($__internal_1cc07b6699cf08fe05da7d4fde910bbc8569ead32342c35b9c859ba50b0a63a9_prof);

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
        return array (  650 => 303,  641 => 299,  621 => 282,  616 => 279,  608 => 275,  606 => 274,  603 => 273,  597 => 269,  590 => 264,  580 => 260,  575 => 258,  571 => 257,  568 => 256,  564 => 255,  552 => 245,  550 => 244,  545 => 241,  537 => 237,  535 => 236,  532 => 235,  526 => 231,  519 => 226,  509 => 222,  504 => 220,  500 => 219,  496 => 218,  493 => 217,  489 => 216,  476 => 205,  474 => 204,  468 => 200,  460 => 196,  458 => 195,  455 => 194,  449 => 190,  442 => 185,  432 => 181,  427 => 179,  423 => 178,  419 => 177,  415 => 176,  412 => 175,  408 => 174,  394 => 162,  392 => 161,  385 => 156,  377 => 152,  375 => 151,  372 => 150,  366 => 146,  360 => 142,  350 => 139,  344 => 137,  338 => 135,  336 => 134,  332 => 133,  328 => 132,  324 => 131,  320 => 130,  316 => 129,  313 => 128,  309 => 127,  297 => 118,  290 => 113,  288 => 112,  283 => 109,  275 => 105,  273 => 104,  270 => 103,  264 => 99,  257 => 94,  244 => 91,  240 => 90,  236 => 89,  231 => 88,  225 => 86,  219 => 84,  217 => 83,  214 => 82,  210 => 81,  196 => 69,  194 => 68,  189 => 65,  181 => 61,  179 => 60,  176 => 59,  170 => 55,  162 => 49,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  136 => 42,  130 => 40,  124 => 38,  121 => 37,  117 => 35,  113 => 33,  111 => 32,  108 => 31,  105 => 30,  101 => 29,  85 => 15,  83 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">{{ 'consulter'|upper }}</a>
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
