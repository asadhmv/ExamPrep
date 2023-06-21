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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .js{
            position: absolute;
            top:0;
            left:0;
        }
        
        h1{
            color:#fff;
            font-weight: bold;
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:0%;
            left: 33%;
            transform: translate(-50%; -50%);
        }
        .des_inputs{
            position: relative;
            width: 400px;
            height: 500px;
            background: #000;
            box-shadow: 0 0 50px #0ef;
            border-radius: 20px;
            padding: 40px;
            color: #fff;
            overflow: hidden;
            position: absolute;
            top:20%;
            left: 35%;
            transform: translate(-50%; -50%);
        }
       
        .input-group mb-3{
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:2%;
            left: 30%;
            transform: translate(-50%; -50%);
        }

        .input-group-prepend{
            display: flex;
            align-items: center;
        }

        .input-group-text{
            background-color: transparent;
            border-color: transparent;
            color: #fff;
        }
       
        .login-link {
            background: linear-gradient(to right, #FFFF00, #FFA500);
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        p.login-txt{
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: 1s ease-in-out;
            text-align: center;
            margin-top: 20px;
        }
\t\t.password-link{
\t\t\tbackground: linear-gradient(to right, #008000, #008080);
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
\t\t}
        .input-group.mb-3{
            margin-bottom: 0;
        }
        .form-check-label {
            color: #fff; font-size: 0.9rem;
        } .
        btn-primary.btn-lg {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
        .text-center.text-lg-start {
            text-align: center;
        }
       
       

       

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 114
        echo "\t<div class=\"js\">
        <canvas id= \"canvas_login\"> Votre navigateur ne prends pas en charge l'animation</canvas>
            ";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "    </div>

\t<form method=\"post\" >
\t\t";
        // line 122
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 122, $this->source); })())) {
            // line 123
            echo "\t\t\t<div class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 123, $this->source); })()), "messageKey", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 123, $this->source); })()), "messageData", [], "any", false, false, false, 123), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 125
        echo "\t\t<br><br><br>
\t\t<section class=\"vh-100\">


\t\t\t<div class=\"container-fluid h-custom\" style=\"background: linear-gradient(red, white);\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-md-9 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<!--img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/draw2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Sample image\"-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"des_inputs\">
                        <h1>Login</h1>
\t\t\t\t\t\t<form>

\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t<div style=\"width:100%;text-align:center\">
\t\t\t\t\t\t\t\t ";
        // line 140
        $this->loadTemplate("changeLangue.html.twig", "security/login.html.twig", 140)->display($context);
        // line 141
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
        // line 151
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 151, $this->source); })()), "html", null, true);
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
        // line 161
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
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.remember-me"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.forgetten-password"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"text-center text-lg-start mt-4 pt-2\">


\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"padding-left: 2.5rem; padding-right: 2.5rem;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t<!-- <p class=\"small fw-bold mt-2 pt-1 mb-0\">";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.dont-have-account"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a href=\"register\" class=\"link-danger\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.register"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class= \"login-txt\">Did you forget your password ?<a  href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class= \"password-link\">Click here to reset</a></p>
\t\t\t
\t\t\t\t\t\t\t<p class=\"login-txt\"> you don't have an account? <a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class= \"login-link\">click here to register </a></p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</form>
\t\t
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "                    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("anim");
        echo "
            ";
        
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
        return array (  374 => 117,  364 => 116,  345 => 192,  340 => 190,  334 => 187,  330 => 186,  326 => 185,  317 => 179,  312 => 177,  307 => 175,  300 => 171,  287 => 161,  272 => 151,  260 => 141,  258 => 140,  247 => 132,  238 => 125,  232 => 123,  230 => 122,  225 => 119,  223 => 116,  219 => 114,  209 => 113,  92 => 6,  82 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{\"security.login\"|trans}}
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .js{
            position: absolute;
            top:0;
            left:0;
        }
        
        h1{
            color:#fff;
            font-weight: bold;
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:0%;
            left: 33%;
            transform: translate(-50%; -50%);
        }
        .des_inputs{
            position: relative;
            width: 400px;
            height: 500px;
            background: #000;
            box-shadow: 0 0 50px #0ef;
            border-radius: 20px;
            padding: 40px;
            color: #fff;
            overflow: hidden;
            position: absolute;
            top:20%;
            left: 35%;
            transform: translate(-50%; -50%);
        }
       
        .input-group mb-3{
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:2%;
            left: 30%;
            transform: translate(-50%; -50%);
        }

        .input-group-prepend{
            display: flex;
            align-items: center;
        }

        .input-group-text{
            background-color: transparent;
            border-color: transparent;
            color: #fff;
        }
       
        .login-link {
            background: linear-gradient(to right, #FFFF00, #FFA500);
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        p.login-txt{
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: 1s ease-in-out;
            text-align: center;
            margin-top: 20px;
        }
\t\t.password-link{
\t\t\tbackground: linear-gradient(to right, #008000, #008080);
            display: inline-block;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
\t\t}
        .input-group.mb-3{
            margin-bottom: 0;
        }
        .form-check-label {
            color: #fff; font-size: 0.9rem;
        } .
        btn-primary.btn-lg {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
        .text-center.text-lg-start {
            text-align: center;
        }
       
       

       

    </style>
{% endblock %}

{% block body  %}
\t<div class=\"js\">
        <canvas id= \"canvas_login\"> Votre navigateur ne prends pas en charge l'animation</canvas>
            {% block javascripts %}
                    {{ encore_entry_script_tags('anim')}}
            {% endblock %}
    </div>

\t<form method=\"post\" >
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\" >{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}
\t\t<br><br><br>
\t\t<section class=\"vh-100\">


\t\t\t<div class=\"container-fluid h-custom\" style=\"background: linear-gradient(red, white);\">
\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t<div class=\"col-md-9 col-lg-6 col-xl-5\">
\t\t\t\t\t\t<!--img src=\"{{asset(\"build/images/draw2.png\")}}\" class=\"img-fluid\" alt=\"Sample image\"-->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"des_inputs\">
                        <h1>Login</h1>
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class= \"login-txt\">Did you forget your password ?<a  href=\"{{path('app_forgot_password_request')}}\" class= \"password-link\">Click here to reset</a></p>
\t\t\t
\t\t\t\t\t\t\t<p class=\"login-txt\"> you don't have an account? <a href=\"{{path('app_register')}}\" class= \"login-link\">click here to register </a></p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</form>
\t\t
\t{% endblock %}
", "security/login.html.twig", "/home/hiba/Bureau/ExamPrep/templates/security/login.html.twig");
    }
}
