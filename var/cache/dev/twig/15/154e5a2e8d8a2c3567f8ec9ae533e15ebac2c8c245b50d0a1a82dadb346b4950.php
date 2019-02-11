<?php

/* :administrateur:base.html.twig */
class __TwigTemplate_dd8887f5c410b984cb69424a27ebc4bce9af4846ddce5a56dbb4cb09f2510461 extends Twig_Template
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
        $__internal_bb48b7c115f65767d9aab32d46ed5dda7171556744ea49119a26b378629be8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb48b7c115f65767d9aab32d46ed5dda7171556744ea49119a26b378629be8b2->enter($__internal_bb48b7c115f65767d9aab32d46ed5dda7171556744ea49119a26b378629be8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

        $__internal_b06b4826d3b610bc266e9f8cc833669929defa0628549c7a2f9d76158e799c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06b4826d3b610bc266e9f8cc833669929defa0628549c7a2f9d76158e799c5b->enter($__internal_b06b4826d3b610bc266e9f8cc833669929defa0628549c7a2f9d76158e799c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":administrateur:base.html.twig"));

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
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo2.gif"), "html", null, true);
        echo "\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            </a>
            <a class=\"navbar-brand\" href=\"/\">";
        // line 34
        $this->displayBlock('navbar', $context, $blocks);
        echo "</a>
        </nav><br/>
        <div class=\"container\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_bb48b7c115f65767d9aab32d46ed5dda7171556744ea49119a26b378629be8b2->leave($__internal_bb48b7c115f65767d9aab32d46ed5dda7171556744ea49119a26b378629be8b2_prof);

        
        $__internal_b06b4826d3b610bc266e9f8cc833669929defa0628549c7a2f9d76158e799c5b->leave($__internal_b06b4826d3b610bc266e9f8cc833669929defa0628549c7a2f9d76158e799c5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6d405a8869061e7ba443d44f1a0965e577caa26912776d0c216ccb244bfb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6d405a8869061e7ba443d44f1a0965e577caa26912776d0c216ccb244bfb9f->enter($__internal_dd6d405a8869061e7ba443d44f1a0965e577caa26912776d0c216ccb244bfb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bd98aee2cc2cc658b25656130659563397879157f28029a306d3a6b950f9959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd98aee2cc2cc658b25656130659563397879157f28029a306d3a6b950f9959->enter($__internal_6bd98aee2cc2cc658b25656130659563397879157f28029a306d3a6b950f9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6bd98aee2cc2cc658b25656130659563397879157f28029a306d3a6b950f9959->leave($__internal_6bd98aee2cc2cc658b25656130659563397879157f28029a306d3a6b950f9959_prof);

        
        $__internal_dd6d405a8869061e7ba443d44f1a0965e577caa26912776d0c216ccb244bfb9f->leave($__internal_dd6d405a8869061e7ba443d44f1a0965e577caa26912776d0c216ccb244bfb9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74e4659b1c668ce8b86ebb38a72493c01c7f6890420bb74c3361241c68270551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e4659b1c668ce8b86ebb38a72493c01c7f6890420bb74c3361241c68270551->enter($__internal_74e4659b1c668ce8b86ebb38a72493c01c7f6890420bb74c3361241c68270551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a01faade1a233dac77d31e8af642acca3f1eb7a79fb78f3fe422895d5b8c3a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01faade1a233dac77d31e8af642acca3f1eb7a79fb78f3fe422895d5b8c3a29->enter($__internal_a01faade1a233dac77d31e8af642acca3f1eb7a79fb78f3fe422895d5b8c3a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a01faade1a233dac77d31e8af642acca3f1eb7a79fb78f3fe422895d5b8c3a29->leave($__internal_a01faade1a233dac77d31e8af642acca3f1eb7a79fb78f3fe422895d5b8c3a29_prof);

        
        $__internal_74e4659b1c668ce8b86ebb38a72493c01c7f6890420bb74c3361241c68270551->leave($__internal_74e4659b1c668ce8b86ebb38a72493c01c7f6890420bb74c3361241c68270551_prof);

    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_88831bdd3209ad7c43841aab05c45362a27f8c84706776e0ba1ae757d71421d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88831bdd3209ad7c43841aab05c45362a27f8c84706776e0ba1ae757d71421d9->enter($__internal_88831bdd3209ad7c43841aab05c45362a27f8c84706776e0ba1ae757d71421d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_f0cd9d22015513922d4529e4512f3cc3ddf724978499e70a5cba1a4e7be0d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cd9d22015513922d4529e4512f3cc3ddf724978499e70a5cba1a4e7be0d9d3->enter($__internal_f0cd9d22015513922d4529e4512f3cc3ddf724978499e70a5cba1a4e7be0d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 10
        echo "            <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_f0cd9d22015513922d4529e4512f3cc3ddf724978499e70a5cba1a4e7be0d9d3->leave($__internal_f0cd9d22015513922d4529e4512f3cc3ddf724978499e70a5cba1a4e7be0d9d3_prof);

        
        $__internal_88831bdd3209ad7c43841aab05c45362a27f8c84706776e0ba1ae757d71421d9->leave($__internal_88831bdd3209ad7c43841aab05c45362a27f8c84706776e0ba1ae757d71421d9_prof);

    }

    // line 14
    public function block_logo($context, array $blocks = array())
    {
        $__internal_cca3eeedd3d49aca1a9e8dda7493d9a28527e634a1acb63aa5a54e709b2a7cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca3eeedd3d49aca1a9e8dda7493d9a28527e634a1acb63aa5a54e709b2a7cbb->enter($__internal_cca3eeedd3d49aca1a9e8dda7493d9a28527e634a1acb63aa5a54e709b2a7cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_a9df0d0dc135413bf345ceb849441afd056eb0219e7febe5c8ce85fae1eb70ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9df0d0dc135413bf345ceb849441afd056eb0219e7febe5c8ce85fae1eb70ba->enter($__internal_a9df0d0dc135413bf345ceb849441afd056eb0219e7febe5c8ce85fae1eb70ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 15
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo.gif"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a9df0d0dc135413bf345ceb849441afd056eb0219e7febe5c8ce85fae1eb70ba->leave($__internal_a9df0d0dc135413bf345ceb849441afd056eb0219e7febe5c8ce85fae1eb70ba_prof);

        
        $__internal_cca3eeedd3d49aca1a9e8dda7493d9a28527e634a1acb63aa5a54e709b2a7cbb->leave($__internal_cca3eeedd3d49aca1a9e8dda7493d9a28527e634a1acb63aa5a54e709b2a7cbb_prof);

    }

    // line 34
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_928b4ab6fe3a64192626c16efa2e076afa41ae1ee4f1d232ed497167258699ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928b4ab6fe3a64192626c16efa2e076afa41ae1ee4f1d232ed497167258699ef->enter($__internal_928b4ab6fe3a64192626c16efa2e076afa41ae1ee4f1d232ed497167258699ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6da93b14e359d151df522a411607632f243ce3762b540c1e5bd322bab49f5a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da93b14e359d151df522a411607632f243ce3762b540c1e5bd322bab49f5a32->enter($__internal_6da93b14e359d151df522a411607632f243ce3762b540c1e5bd322bab49f5a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_6da93b14e359d151df522a411607632f243ce3762b540c1e5bd322bab49f5a32->leave($__internal_6da93b14e359d151df522a411607632f243ce3762b540c1e5bd322bab49f5a32_prof);

        
        $__internal_928b4ab6fe3a64192626c16efa2e076afa41ae1ee4f1d232ed497167258699ef->leave($__internal_928b4ab6fe3a64192626c16efa2e076afa41ae1ee4f1d232ed497167258699ef_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a929f17b8cf11d15e15e43d0d549fffde82ac3e29a5b4763d02445e6fadc898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a929f17b8cf11d15e15e43d0d549fffde82ac3e29a5b4763d02445e6fadc898->enter($__internal_2a929f17b8cf11d15e15e43d0d549fffde82ac3e29a5b4763d02445e6fadc898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecc835f804625f34bd4c3d50af6367ad4e44560308870cec25a478b80c85ad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc835f804625f34bd4c3d50af6367ad4e44560308870cec25a478b80c85ad52->enter($__internal_ecc835f804625f34bd4c3d50af6367ad4e44560308870cec25a478b80c85ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ecc835f804625f34bd4c3d50af6367ad4e44560308870cec25a478b80c85ad52->leave($__internal_ecc835f804625f34bd4c3d50af6367ad4e44560308870cec25a478b80c85ad52_prof);

        
        $__internal_2a929f17b8cf11d15e15e43d0d549fffde82ac3e29a5b4763d02445e6fadc898->leave($__internal_2a929f17b8cf11d15e15e43d0d549fffde82ac3e29a5b4763d02445e6fadc898_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6e1a3e7704d6542378af7e0946bdf9a9057ae6a3ff32ccbc122af434cc78bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e1a3e7704d6542378af7e0946bdf9a9057ae6a3ff32ccbc122af434cc78bd1->enter($__internal_c6e1a3e7704d6542378af7e0946bdf9a9057ae6a3ff32ccbc122af434cc78bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b16dd26c055ff7dcaa0e6ef86b897139f51cb5c393a7d3d838b9b0d902f2259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b16dd26c055ff7dcaa0e6ef86b897139f51cb5c393a7d3d838b9b0d902f2259->enter($__internal_7b16dd26c055ff7dcaa0e6ef86b897139f51cb5c393a7d3d838b9b0d902f2259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7b16dd26c055ff7dcaa0e6ef86b897139f51cb5c393a7d3d838b9b0d902f2259->leave($__internal_7b16dd26c055ff7dcaa0e6ef86b897139f51cb5c393a7d3d838b9b0d902f2259_prof);

        
        $__internal_c6e1a3e7704d6542378af7e0946bdf9a9057ae6a3ff32ccbc122af434cc78bd1->leave($__internal_c6e1a3e7704d6542378af7e0946bdf9a9057ae6a3ff32ccbc122af434cc78bd1_prof);

    }

    public function getTemplateName()
    {
        return ":administrateur:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 39,  197 => 37,  180 => 34,  167 => 15,  158 => 14,  145 => 10,  136 => 9,  123 => 7,  114 => 6,  97 => 5,  85 => 40,  83 => 39,  80 => 38,  78 => 37,  72 => 34,  67 => 32,  50 => 17,  47 => 14,  44 => 9,  42 => 6,  38 => 5,  32 => 1,);
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
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-ngi\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"{{ asset('image/logo2.gif') }}\" width=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            </a>
            <a class=\"navbar-brand\" href=\"/\">{% block navbar %}{% endblock %}</a>
        </nav><br/>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", ":administrateur:base.html.twig", "C:\\wamp64\\www\\NGI-Web\\app/Resources\\views/administrateur/base.html.twig");
    }
}
