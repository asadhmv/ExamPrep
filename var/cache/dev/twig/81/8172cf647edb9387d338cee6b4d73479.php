<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* changeLangue.html.twig */
class __TwigTemplate_0decca87d36cb716f1bfb05f768e3593 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changeLangue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changeLangue.html.twig"));

        // line 1
        echo "<style>
    .lstIconesLanguage{
        width:100%;
        text-align:center;
    }
    .iconeLanguage{
        display:inline-block;
        padding-top:6px;}
    .flag
    {
        border-radius:50%;
        width:40px;
        height:40px;
        padding:3px;
        opacity: .8;
        background-color:white;
        border: solid 1px gray;
    }
    .flag:hover{
        opacity: .9;
        border: solid 2px #3e4582;

    }
</style>

<ul class=\"lstIconesLanguage\">
    <li class=\"iconeLanguage\" id='frLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"fr_FR\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/fr.png"), "html", null, true);
        echo "\" alt=\"Version Française\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='enLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"en_EN\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/en.png"), "html", null, true);
        echo "\" alt=\"English Version\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='arLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"ar_AR\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/ar.png"), "html", null, true);
        echo "\" alt=\"النسخة العربية\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='arLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"es_ES\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/es.png"), "html", null, true);
        echo "\" alt=\"Versión española\">
        </a>
    </li>
</ul>


";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "     ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("langues");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "changeLangue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  107 => 50,  98 => 44,  90 => 39,  82 => 34,  74 => 29,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .lstIconesLanguage{
        width:100%;
        text-align:center;
    }
    .iconeLanguage{
        display:inline-block;
        padding-top:6px;}
    .flag
    {
        border-radius:50%;
        width:40px;
        height:40px;
        padding:3px;
        opacity: .8;
        background-color:white;
        border: solid 1px gray;
    }
    .flag:hover{
        opacity: .9;
        border: solid 2px #3e4582;

    }
</style>

<ul class=\"lstIconesLanguage\">
    <li class=\"iconeLanguage\" id='frLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"fr_FR\" src=\"{{ asset('build/images/fr.png') }}\" alt=\"Version Française\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='enLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"en_EN\" src=\"{{ asset('build/images/en.png') }}\" alt=\"English Version\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='arLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"ar_AR\" src=\"{{ asset('build/images/ar.png') }}\" alt=\"النسخة العربية\">
        </a>
    </li>
    <li class=\"iconeLanguage\" id='arLang'>
        <a href=\"#\">
            <img class=\"flag\" value=\"es_ES\" src=\"{{ asset('build/images/es.png') }}\" alt=\"Versión española\">
        </a>
    </li>
</ul>


{% block javascripts %}
     {{ encore_entry_script_tags('langues') }}
{% endblock %}
", "changeLangue.html.twig", "/home/shmahma/ExamPrep/templates/changeLangue.html.twig");
    }
}
