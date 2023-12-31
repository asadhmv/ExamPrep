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

/* registration/register.html.twig */
class __TwigTemplate_66db1d569251fe9d8e9b673ea17e770a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
            
                
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .js{
            position: absolute;
            top:0;
            left:0;
        }
        .navbar-brand {
            padding: 40px;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 15px;
        }
        body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        
        .test {
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
        
        
        
        h1{
            color:#fff;
            font-weight: bold;
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:20%;
            left: 30%;
            transform: translate(-50%; -50%);
        }
        
        .register-form {
            
            justify-content: center;
            align-items: center;
            position: absolute;
            top:25%;
            left: 12%;
            transform: translate(-50%; -50%);
            padding: 40px;
            
            transition: 1s ease-in-out;
            
        }
        .register-form input[type=\"email\"]:focus,
        .register-form input[type=\"password\"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }

        .register-form input[type=\"email\"]::placeholder,
        .register-form input[type=\"password\"]::placeholder {
            color: #999;
        }

        .register-form button[type=\"submit\"] {
            background: linear-gradient(to right, #007bff, #0033a0);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .register-form button[type=\"submit\"]:hover {
            background-color: linear-gradient(to right, #0033a0, #007bff);
        }

        .login-link
         {
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
    
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 127
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 128
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "     
    <div class=\"js\">
        <canvas id= \"canvas_register\"> Votre navigateur ne prends pas en charge l'animation</canvas>
            ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </div>
    <nav class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo2.png"), "html", null, true);
        echo "\" alt=\"Image\">
            </a>
        </div>
    </nav>
    <div class=\"test\">
        <h1 style=\"font-family: 'Bookman', serif; color: #fff;\">Register</h1>
        <div class=\"register-form\">
            
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), 'errors');
        echo "

            ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 150, $this->source); })()), 'form_start');
        echo "
                ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151), 'row');
        echo "
                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 152, $this->source); })()), "plainPassword", [], "any", false, false, false, 152), 'row', ["label" => "Password"]);
        // line 154
        echo "
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 155, $this->source); })()), "agreeTerms", [], "any", false, false, false, 155), 'row');
        echo "

                <button type=\"submit\" class=\"btn\">Register</button>
            ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), 'form_end');
        echo "
            <p>Do you already have an email ?</p><a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">click here login</a></p>
        </div>
    </div>        
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "                    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("anim");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 134,  315 => 133,  300 => 159,  296 => 158,  290 => 155,  287 => 154,  285 => 152,  281 => 151,  277 => 150,  272 => 148,  261 => 140,  257 => 139,  252 => 136,  250 => 133,  245 => 130,  236 => 128,  231 => 127,  221 => 126,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
            
                
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .js{
            position: absolute;
            top:0;
            left:0;
        }
        .navbar-brand {
            padding: 40px;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 15px;
        }
        body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        
        .test {
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
        
        
        
        h1{
            color:#fff;
            font-weight: bold;
            margin-top: 0;
            text-align: center;
            position: absolute;
            top:20%;
            left: 30%;
            transform: translate(-50%; -50%);
        }
        
        .register-form {
            
            justify-content: center;
            align-items: center;
            position: absolute;
            top:25%;
            left: 12%;
            transform: translate(-50%; -50%);
            padding: 40px;
            
            transition: 1s ease-in-out;
            
        }
        .register-form input[type=\"email\"]:focus,
        .register-form input[type=\"password\"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }

        .register-form input[type=\"email\"]::placeholder,
        .register-form input[type=\"password\"]::placeholder {
            color: #999;
        }

        .register-form button[type=\"submit\"] {
            background: linear-gradient(to right, #007bff, #0033a0);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .register-form button[type=\"submit\"]:hover {
            background-color: linear-gradient(to right, #0033a0, #007bff);
        }

        .login-link
         {
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
    
    </style>
{% endblock %}
{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
     
    <div class=\"js\">
        <canvas id= \"canvas_register\"> Votre navigateur ne prends pas en charge l'animation</canvas>
            {% block javascripts %}
                    {{ encore_entry_script_tags('anim')}}
            {% endblock %}
    </div>
    <nav class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">
                <img src=\"{{asset(\"build/images/logo2.png\")}}\" alt=\"Image\">
            </a>
        </div>
    </nav>
    <div class=\"test\">
        <h1 style=\"font-family: 'Bookman', serif; color: #fff;\">Register</h1>
        <div class=\"register-form\">
            
            {{ form_errors(registrationForm) }}

            {{ form_start(registrationForm) }}
                {{ form_row(registrationForm.email) }}
                {{ form_row(registrationForm.plainPassword, {
                    label: 'Password'
                }) }}
                {{ form_row(registrationForm.agreeTerms) }}

                <button type=\"submit\" class=\"btn\">Register</button>
            {{ form_end(registrationForm) }}
            <p>Do you already have an email ?</p><a href=\"{{path('app_login')}}\">click here login</a></p>
        </div>
    </div>        
        
{% endblock %}
", "registration/register.html.twig", "/home/hiba/Bureau/ExamPrep/templates/registration/register.html.twig");
    }
}
