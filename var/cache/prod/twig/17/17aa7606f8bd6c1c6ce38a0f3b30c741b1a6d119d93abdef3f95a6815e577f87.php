<?php

/* NGAdministrateurBundle:Default:index.html.twig */
class __TwigTemplate_c6074372332f31f3a27334294ba6d91b945583e9dbeec4624701c31d5e278173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":administrateur:base.html.twig", "NGAdministrateurBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":administrateur:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "connexion"), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <center>
        <h4>Connexion</h4><br/>

        ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 13
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security") == "Invalid credentials.")) {
                // line 14
                echo "                    Identifiant ou mot de passe incorrect.
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 15
($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security") == "Account is disabled.")) {
                // line 16
                echo "                    Votre compte est bloqué.<br/> Pour plus d'informations, consulté votre gérant ou votre administrateur.
                ";
            } else {
                // line 18
                echo "                    Erreur dans le code, contactez votre développeur.
                ";
            }
            // line 20
            echo "            </div><br/>
        ";
        }
        // line 22
        echo "
        <form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 24
        if (($context["csrf_token"] ?? null)) {
            // line 25
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
            ";
        }
        // line 27
        echo "
            <div class=\"col-md-4 mb-3\">
                <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Identifiant"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" />
            </div>

            <div class=\"col-md-4 mb-3\">
                <label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>

            <input type=\"submit\" class=\"btn btn-outline-ngi\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion"), "html", null, true);
        echo "\" />
        </form>
    </center>

    <p style=\"position: absolute; bottom: 0; left: 0; right: 0\">Version 2.1</p>
";
    }

    public function getTemplateName()
    {
        return "NGAdministrateurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  104 => 34,  97 => 30,  93 => 29,  89 => 27,  83 => 25,  81 => 24,  77 => 23,  74 => 22,  70 => 20,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NGAdministrateurBundle:Default:index.html.twig", "C:\\wamp64\\www\\NGI-Web\\src\\NG\\AdministrateurBundle/Resources/views/Default/index.html.twig");
    }
}
