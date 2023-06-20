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

/* security/login.html.twig */
class __TwigTemplate_828e37f13ac750941ccfb0ec88b78de0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login"), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

\t<form method=\"post\" >
\t\t";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 13
        echo "\t\t<br><br><br>
\t\t<section class=\"vh-100\">


\t\t\t<div class=\"container-fluid h-custom\" style=\"background: linear-gradient(red, white);\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-md-9 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/draw2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Sample image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-4 offset-xl-1\">
\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div style=\"width:100%;text-align:center\">
\t\t\t\t\t\t\t\t ";
        // line 27
        $this->loadTemplate("changeLangue.html.twig", "security/login.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Email input -->

\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control  form-control-lg\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.email"), "html", null, true);
        echo "\" required autofocus>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Password input -->
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control  form-control-lg\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.password"), "html", null, true);
        echo "\" required>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t\t\t\t<div class=\"form-check mb-0\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input me-2\" type=\"checkbox\" value=\"\" id=\"form2Example3\"/>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"form2Example3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.remember-me"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.forgetten-password"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"text-center text-lg-start mt-4 pt-2\">


\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"padding-left: 2.5rem; padding-right: 2.5rem;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t<!-- <p class=\"small fw-bold mt-2 pt-1 mb-0\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.dont-have-account"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a href=\"register\" class=\"link-danger\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.register"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<p> you don't have an account? <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">click here to register </a></p>
\t\t\t</section>
\t\t</form>
\t\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 83,  198 => 74,  194 => 73,  190 => 72,  181 => 66,  176 => 64,  171 => 62,  164 => 58,  151 => 48,  136 => 38,  124 => 28,  122 => 27,  112 => 20,  103 => 13,  97 => 11,  95 => 10,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{\"security.login\"|trans}}
{% endblock %}

{% block body  %}


\t<form method=\"post\" >
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\" >{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}
\t\t<br><br><br>
\t\t<section class=\"vh-100\">


\t\t\t<div class=\"container-fluid h-custom\" style=\"background: linear-gradient(red, white);\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-md-9 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<img src=\"{{asset(\"build/images/draw2.png\")}}\" class=\"img-fluid\" alt=\"Sample image\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-lg-6 col-xl-4 offset-xl-1\">
\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div style=\"width:100%;text-align:center\">
\t\t\t\t\t\t\t\t {% include 'changeLangue.html.twig' %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Email input -->

\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control  form-control-lg\" placeholder=\"{{'security.email'|trans}}\" required autofocus>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Password input -->
\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\" id=\"basic-addon1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-2x\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control  form-control-lg\" placeholder=\"{{'security.password'|trans}}\" required>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<!-- Checkbox -->
\t\t\t\t\t\t\t\t<div class=\"form-check mb-0\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input me-2\" type=\"checkbox\" value=\"\" id=\"form2Example3\"/>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"form2Example3\">
\t\t\t\t\t\t\t\t\t\t{{'security.remember-me'|trans}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a href=\"{{path('app_forgot_password_request')}}\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t{{'security.forgetten-password'|trans}}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t<div class=\"text-center text-lg-start mt-4 pt-2\">


\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"padding-left: 2.5rem; padding-right: 2.5rem;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t{{'security.login'|trans}}</button>
\t\t\t\t\t\t\t\t<!-- <p class=\"small fw-bold mt-2 pt-1 mb-0\">{{'security.dont-have-account'|trans}}
\t\t\t\t\t\t\t\t\t<a href=\"register\" class=\"link-danger\">{{'security.register'|trans}}</a>
\t\t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<p> you don't have an account? <a href=\"{{path('app_register')}}\">click here to register </a></p>
\t\t\t</section>
\t\t</form>
\t\t
\t{% endblock %}
", "security/login.html.twig", "/home/shmahma/ExamPrep/templates/security/login.html.twig");
    }
}
