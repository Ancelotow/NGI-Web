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
        $__internal_85cb0d95da15f4d68ea703403c0efe672912a916cd88717f996262995b87ca60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cb0d95da15f4d68ea703403c0efe672912a916cd88717f996262995b87ca60->enter($__internal_85cb0d95da15f4d68ea703403c0efe672912a916cd88717f996262995b87ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $__internal_c725effe45b4c17e74ff64d29828d749cb627f96ce0ec86fd0e57247b5a14661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c725effe45b4c17e74ff64d29828d749cb627f96ce0ec86fd0e57247b5a14661->enter($__internal_c725effe45b4c17e74ff64d29828d749cb627f96ce0ec86fd0e57247b5a14661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NGGestionnaireBundle:immeuble:copro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cb0d95da15f4d68ea703403c0efe672912a916cd88717f996262995b87ca60->leave($__internal_85cb0d95da15f4d68ea703403c0efe672912a916cd88717f996262995b87ca60_prof);

        
        $__internal_c725effe45b4c17e74ff64d29828d749cb627f96ce0ec86fd0e57247b5a14661->leave($__internal_c725effe45b4c17e74ff64d29828d749cb627f96ce0ec86fd0e57247b5a14661_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afe4a03586b1fc7c42e5ba5904b6c8572a4f8f53d609ccce7560626915910648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe4a03586b1fc7c42e5ba5904b6c8572a4f8f53d609ccce7560626915910648->enter($__internal_afe4a03586b1fc7c42e5ba5904b6c8572a4f8f53d609ccce7560626915910648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_372c264fade5c2c075f1bfea43323f5134122e7727c2c0b4a553100a8aeba52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372c264fade5c2c075f1bfea43323f5134122e7727c2c0b4a553100a8aeba52c->enter($__internal_372c264fade5c2c075f1bfea43323f5134122e7727c2c0b4a553100a8aeba52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
        
        $__internal_372c264fade5c2c075f1bfea43323f5134122e7727c2c0b4a553100a8aeba52c->leave($__internal_372c264fade5c2c075f1bfea43323f5134122e7727c2c0b4a553100a8aeba52c_prof);

        
        $__internal_afe4a03586b1fc7c42e5ba5904b6c8572a4f8f53d609ccce7560626915910648->leave($__internal_afe4a03586b1fc7c42e5ba5904b6c8572a4f8f53d609ccce7560626915910648_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eb0ddd62cf5b8bfcf16173c6a63b76aa8306b64bc877cbdf28e4c1992cc5149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb0ddd62cf5b8bfcf16173c6a63b76aa8306b64bc877cbdf28e4c1992cc5149->enter($__internal_9eb0ddd62cf5b8bfcf16173c6a63b76aa8306b64bc877cbdf28e4c1992cc5149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_325718cf193267901afae2fc7aa9d0eca5a4e847b0ec7dbe3466ef273f24ca03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325718cf193267901afae2fc7aa9d0eca5a4e847b0ec7dbe3466ef273f24ca03->enter($__internal_325718cf193267901afae2fc7aa9d0eca5a4e847b0ec7dbe3466ef273f24ca03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                        <th scope=\"col\">PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lots"] ?? $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["unL"]) {
                // line 134
                echo "                                        <tr>
                                            <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "num", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "etage", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "surface", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "carezze", array()), "html", null, true);
                echo " m²</td>
                                            <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "prix", array()), "html", null, true);
                echo " €</td>
                                            ";
                // line 140
                if (($this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "sexe", array()) == 0)) {
                    // line 141
                    echo "                                                <td>Mme. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 143
                    echo "                                                <td>M. ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "proprietaire", array()), "nom", array()), "html", null, true);
                    echo "</td>
                                            ";
                }
                // line 145
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unL"], "typeLot", array()), "nom", array()), "html", null, true);
                echo "</td>
                                            <td>
                                                <a href=\"/ng/gestion/immeuble/pdf/lot/";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["unL"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                    <img src=\"";
                // line 148
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
            // line 153
            echo "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 157
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun lots.
                        </div>
                    ";
        }
        // line 161
        echo "                    <br/>
                    ";
        // line 162
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 163
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/lot/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 167
        echo "                </div>
            </div><br/>
            <div class=\"row\">
                <div class=\"col-6 col-sm-4\">
                    <h4>Sinistres</h4>
                    ";
        // line 172
        if ((twig_length_filter($this->env, ($context["sin"] ?? $this->getContext($context, "sin"))) > 0)) {
            // line 173
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
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sin"] ?? $this->getContext($context, "sin")));
            foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
                // line 187
                echo "                                    <tr>
                                        <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["unS"], "lot", array()), "num", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"/ng/gestion/sinistre/";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "code", array()), "html", null, true);
                echo "\" class=\"btn btn-outline-success btn-vsm\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                        <td>
                                            <a href=\"/ng/gestion/immeuble/pdf/sinistre/";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute($context["unS"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-danger btn-vsm\">
                                                <img src=\"";
                // line 197
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
            // line 202
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 207
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun Sinistre.
                        </div>
                    ";
        }
        // line 211
        echo "                    <br/>
                    ";
        // line 212
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 213
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/sinistre/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 217
        echo "                </div>
                <div id=\"map\" class=\"col-6 col-sm-4\" style=\"height:230px;\"></div>
                <div class=\"col-6 col-sm-2\">
                    <h4>AG</h4>
                    ";
        // line 221
        if ((twig_length_filter($this->env, ($context["ags"] ?? $this->getContext($context, "ags"))) > 0)) {
            // line 222
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
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ags"] ?? $this->getContext($context, "ags")));
            foreach ($context['_seq'] as $context["_key"] => $context["unA"]) {
                // line 234
                echo "                                    <tr>
                                        <td>";
                // line 235
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "nbDecision", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["unA"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 239
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unA'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 248
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucune AG.
                        </div>
                    ";
        }
        // line 252
        echo "                    <br/>
                    ";
        // line 253
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 254
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/ag/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 258
        echo "                </div>
                <div class=\"col-6 col-sm-2\">
                    <h4>CS</h4>
                    ";
        // line 261
        if ((twig_length_filter($this->env, ($context["cs"] ?? $this->getContext($context, "cs"))) > 0)) {
            // line 262
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
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cs"] ?? $this->getContext($context, "cs")));
            foreach ($context['_seq'] as $context["_key"] => $context["unC"]) {
                // line 273
                echo "                                    <tr>
                                        <td>";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "ref", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute($context["unC"], "date", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-outline-success btn-vsm\">";
                // line 277
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, "consulter"), "html", null, true);
                echo "</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "                                </tbody>
                            </table>

                        </div>
                    ";
        } else {
            // line 286
            echo "                        <div class=\"alert alert-warning\">
                            Il n'y a aucun CS.
                        </div>
                    ";
        }
        // line 290
        echo "                    <br/>
                    ";
        // line 291
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "ROLE_ADMIN", 1 => "ROLE_GESTIONNAIRE"))) {
            // line 292
            echo "                        <a href=\"/ng/gestion/immeuble/ajout/cs/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "code", array()), "html", null, true);
            echo "\" class=\"btn btn-outline-ngi\">
                            Ajouter
                        </a><br/>
                    ";
        }
        // line 296
        echo "                </div>
            </div><br/>
            <center>
                    <img src=\"";
        // line 299
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
        // line 316
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "], 19);
            var Esri_WorldImagery = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'N.G. Immobilier'
            }).addTo(map);
            var marqueur = L.marker([";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "lattitude", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["copro"] ?? $this->getContext($context, "copro")), "longitude", array()), "html", null, true);
        echo "]).addTo(map);

        });
    }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCtj9bdFee1h3-H2oF_TO5Mvj3PvRFCsCE&callback=myMap\"></script>
";
        
        $__internal_325718cf193267901afae2fc7aa9d0eca5a4e847b0ec7dbe3466ef273f24ca03->leave($__internal_325718cf193267901afae2fc7aa9d0eca5a4e847b0ec7dbe3466ef273f24ca03_prof);

        
        $__internal_9eb0ddd62cf5b8bfcf16173c6a63b76aa8306b64bc877cbdf28e4c1992cc5149->leave($__internal_9eb0ddd62cf5b8bfcf16173c6a63b76aa8306b64bc877cbdf28e4c1992cc5149_prof);

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
        return array (  687 => 320,  678 => 316,  658 => 299,  653 => 296,  645 => 292,  643 => 291,  640 => 290,  634 => 286,  627 => 281,  617 => 277,  612 => 275,  608 => 274,  605 => 273,  601 => 272,  589 => 262,  587 => 261,  582 => 258,  574 => 254,  572 => 253,  569 => 252,  563 => 248,  556 => 243,  546 => 239,  541 => 237,  537 => 236,  533 => 235,  530 => 234,  526 => 233,  513 => 222,  511 => 221,  505 => 217,  497 => 213,  495 => 212,  492 => 211,  486 => 207,  479 => 202,  468 => 197,  464 => 196,  456 => 193,  451 => 191,  447 => 190,  443 => 189,  439 => 188,  436 => 187,  432 => 186,  417 => 173,  415 => 172,  408 => 167,  400 => 163,  398 => 162,  395 => 161,  389 => 157,  383 => 153,  372 => 148,  368 => 147,  362 => 145,  356 => 143,  350 => 141,  348 => 140,  344 => 139,  340 => 138,  336 => 137,  332 => 136,  328 => 135,  325 => 134,  321 => 133,  308 => 123,  301 => 118,  299 => 117,  294 => 114,  286 => 110,  284 => 109,  281 => 108,  275 => 104,  268 => 99,  255 => 96,  251 => 95,  247 => 94,  242 => 93,  236 => 91,  230 => 89,  228 => 88,  225 => 87,  221 => 86,  207 => 74,  205 => 73,  200 => 70,  192 => 66,  190 => 65,  187 => 64,  181 => 60,  173 => 54,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  137 => 43,  131 => 41,  125 => 39,  122 => 38,  118 => 36,  114 => 34,  112 => 33,  109 => 32,  106 => 31,  102 => 30,  85 => 15,  83 => 14,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
