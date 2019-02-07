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
        $__internal_a3dc1c3b55424f4842eeecc64c984fc49e53c6cca774bbd8e3554f70200a8641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dc1c3b55424f4842eeecc64c984fc49e53c6cca774bbd8e3554f70200a8641->enter($__internal_a3dc1c3b55424f4842eeecc64c984fc49e53c6cca774bbd8e3554f70200a8641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $__internal_723c7391a4b17f3b1f31f9aa76f7870ff78d4950182999add5aef4a11d6240ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723c7391a4b17f3b1f31f9aa76f7870ff78d4950182999add5aef4a11d6240ce->enter($__internal_723c7391a4b17f3b1f31f9aa76f7870ff78d4950182999add5aef4a11d6240ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3dc1c3b55424f4842eeecc64c984fc49e53c6cca774bbd8e3554f70200a8641->leave($__internal_a3dc1c3b55424f4842eeecc64c984fc49e53c6cca774bbd8e3554f70200a8641_prof);

        
        $__internal_723c7391a4b17f3b1f31f9aa76f7870ff78d4950182999add5aef4a11d6240ce->leave($__internal_723c7391a4b17f3b1f31f9aa76f7870ff78d4950182999add5aef4a11d6240ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3a877f329f6ce5fc8dddb38091aeb720373f766f5c4c59f8f68d51fcdcfad6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a877f329f6ce5fc8dddb38091aeb720373f766f5c4c59f8f68d51fcdcfad6d->enter($__internal_d3a877f329f6ce5fc8dddb38091aeb720373f766f5c4c59f8f68d51fcdcfad6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0c5bd3b671efd5d2d6a45ebcab0814134ba900222afc8618fafaa373689aed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c5bd3b671efd5d2d6a45ebcab0814134ba900222afc8618fafaa373689aed5->enter($__internal_e0c5bd3b671efd5d2d6a45ebcab0814134ba900222afc8618fafaa373689aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        
        $__internal_e0c5bd3b671efd5d2d6a45ebcab0814134ba900222afc8618fafaa373689aed5->leave($__internal_e0c5bd3b671efd5d2d6a45ebcab0814134ba900222afc8618fafaa373689aed5_prof);

        
        $__internal_d3a877f329f6ce5fc8dddb38091aeb720373f766f5c4c59f8f68d51fcdcfad6d->leave($__internal_d3a877f329f6ce5fc8dddb38091aeb720373f766f5c4c59f8f68d51fcdcfad6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5695f12887bb263b2b5da343df7c5b3371c82a15b17819aa6e5fa04ec6b0347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5695f12887bb263b2b5da343df7c5b3371c82a15b17819aa6e5fa04ec6b0347->enter($__internal_b5695f12887bb263b2b5da343df7c5b3371c82a15b17819aa6e5fa04ec6b0347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_588a6e586907b095a1a06d5647644ef5c6f0f61dadc7f26e0563bf90fe1d64bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588a6e586907b095a1a06d5647644ef5c6f0f61dadc7f26e0563bf90fe1d64bc->enter($__internal_588a6e586907b095a1a06d5647644ef5c6f0f61dadc7f26e0563bf90fe1d64bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <th scope=\"col\">PDF</th>
                                </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["habs"] ?? $this->getContext($context, "habs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unH"]) {
                // line 31
                echo "                                    ";
                if (($this->getAttribute($context["unH"], "presidentCS", array()) == 1)) {
                    // line 32
                    echo "                                        <tr class=\"bg-warning\" >
                                    ";
                } elseif (($this->getAttribute(                // line 33
$context["unH"], "membreCS", array()) == 1)) {
                    // line 34
                    echo "                                        <tr class=\"bg-primary\" >
                                    ";
                } else {
                    // line 36
                    echo "                                        <tr>
                                    ";
                }
                // line 38
                echo "                                            ";
                if (($this->getAttribute($context["unH"], "sexe", array()) == 0)) {
                    // line 39
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 41
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 43
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "dateEmmenagement", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unH"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                            <td><a href=\"/ng/gestion/immeuble/pdf/habitant/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["unH"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"";
                // line 49
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
            // line 54
            echo "

                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 60
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun habitants.
                        </div>
                    ";
        }
        // line 64
        echo "                    <br/>
                    ";
        // line 65
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 66
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/habitant/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 70
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Propriétaires</h4>
                    ";
        // line 73
        if ((twig_length_filter($this->env, ($context["props"] ?? $this->getContext($context, "props"))) > 0)) {
            // line 74
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
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["props"] ?? $this->getContext($context, "props")));
            foreach ($context['_seq'] as $context["_key"] => $context["unP"]) {
                // line 87
                echo "                                        <tr>
                                            ";
                // line 88
                if (($this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 89
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 91
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 93
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "tel", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unP"], "proprietaire", array()), "email", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 96
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
            // line 99
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 104
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun propriétaires.
                        </div>
                    ";
        }
        // line 108
        echo "                    <br/>
                    ";
        // line 109
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 110
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/proprietaire/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 114
        echo "                </div>
                <div class=\"col-6 col-sm-4\">
                    <h4>Lots</h4>
                    ";
        // line 117
        if ((twig_length_filter($this->env, ($context["lots"] ?? $this->getContext($context, "lots"))) > 0)) {
            // line 118
            echo "                        <div class=\"table-wrapper-scroll-y\">
                            <table class=\"table-copro table-hover table-dark\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">";
            // line 123
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
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lots"] ?? $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["unL"]) {
                // line 133
                echo "                                        <tr>
                                            <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "num", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "etage", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "surface", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "carezze", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "prix", array()), "html", null, true);
                echo " €</td>
                                            ";
                // line 139
                if (($this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 140
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 142
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 144
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "typeLot", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unL'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 151
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun lots.
                        </div>
                    ";
        }
        // line 155
        echo "                    <br/>
                    ";
        // line 156
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 157
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 161
        echo "                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Sinistres</h4>
                    ";
        // line 166
        if ((twig_length_filter($this->env, ($context["sin"] ?? $this->getContext($context, "sin"))) > 0)) {
            // line 167
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
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sin"] ?? $this->getContext($context, "sin")));
            foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
                // line 180
                echo "                                    <tr>
                                        <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 183
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 186
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 195
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun Sinistre.
                        </div>
                    ";
        }
        // line 199
        echo "                    <br/>
                    ";
        // line 200
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 201
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/sinistre/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 205
        echo "                </div>
                <div id=\"map\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    ";
        // line 209
        if ((twig_length_filter($this->env, ($context["ags"] ?? $this->getContext($context, "ags"))) > 0)) {
            // line 210
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
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ags"] ?? $this->getContext($context, "ags")));
            foreach ($context['_seq'] as $context["_key"] => $context["unA"]) {
                // line 222
                echo "                                    <tr>
                                        <td>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "nbDecision", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 227
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 236
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    ";
        }
        // line 240
        echo "                    <br/>
                    ";
        // line 241
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 242
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/ag/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 246
        echo "                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    ";
        // line 249
        if ((twig_length_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs"))) > 0)) {
            // line 250
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
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cs"] ?? $this->getContext($context, "cs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unC"]) {
                // line 261
                echo "                                    <tr>
                                        <td>";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 265
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 274
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    ";
        }
        // line 278
        echo "                    <br/>
                    ";
        // line 279
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 280
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/cs/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 284
        echo "                </div>
            </div><br/>
            <center>
                    <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/copro_ext/") . $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "image", array())), "html", null, true);
        echo "\" />
                <a href=\"/ng/pdf\">Test pdf</a>
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
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "], 19);
            var Esri_WorldImagery = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);
            var marqueur = L.marker([";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "]).addTo(map);

        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_588a6e586907b095a1a06d5647644ef5c6f0f61dadc7f26e0563bf90fe1d64bc->leave($__internal_588a6e586907b095a1a06d5647644ef5c6f0f61dadc7f26e0563bf90fe1d64bc_prof);

        
        $__internal_b5695f12887bb263b2b5da343df7c5b3371c82a15b17819aa6e5fa04ec6b0347->leave($__internal_b5695f12887bb263b2b5da343df7c5b3371c82a15b17819aa6e5fa04ec6b0347_prof);

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
        return array (  662 => 309,  653 => 305,  632 => 287,  627 => 284,  619 => 280,  617 => 279,  614 => 278,  608 => 274,  601 => 269,  591 => 265,  586 => 263,  582 => 262,  579 => 261,  575 => 260,  563 => 250,  561 => 249,  556 => 246,  548 => 242,  546 => 241,  543 => 240,  537 => 236,  530 => 231,  520 => 227,  515 => 225,  511 => 224,  507 => 223,  504 => 222,  500 => 221,  487 => 210,  485 => 209,  479 => 205,  471 => 201,  469 => 200,  466 => 199,  460 => 195,  453 => 190,  443 => 186,  438 => 184,  434 => 183,  430 => 182,  426 => 181,  423 => 180,  419 => 179,  405 => 167,  403 => 166,  396 => 161,  388 => 157,  386 => 156,  383 => 155,  377 => 151,  371 => 147,  361 => 144,  355 => 142,  349 => 140,  347 => 139,  343 => 138,  339 => 137,  335 => 136,  331 => 135,  327 => 134,  324 => 133,  320 => 132,  308 => 123,  301 => 118,  299 => 117,  294 => 114,  286 => 110,  284 => 109,  281 => 108,  275 => 104,  268 => 99,  255 => 96,  251 => 95,  247 => 94,  242 => 93,  236 => 91,  230 => 89,  228 => 88,  225 => 87,  221 => 86,  207 => 74,  205 => 73,  200 => 70,  192 => 66,  190 => 65,  187 => 64,  181 => 60,  173 => 54,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  137 => 43,  131 => 41,  125 => 39,  122 => 38,  118 => 36,  114 => 34,  112 => 33,  109 => 32,  106 => 31,  102 => 30,  85 => 15,  83 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <a href=\"/ng/pdf\">Test pdf</a>
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
