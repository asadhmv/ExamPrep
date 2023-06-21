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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_3d55068ff749ecdc822fa99e26c213d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'langue_switcher' => [$this, 'block_langue_switcher'],
            'role_switcher' => [$this, 'block_role_switcher'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 5
        echo "\t<div class=\"content-search\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 8
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "\t\t\t\t\t";
            $this->displayBlock('search', $context, $blocks);
            // line 53
            echo "\t\t\t\t";
        }
        // line 54
        echo "\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6\">

\t\t\t\t";
        // line 59
        echo "\t\t\t\t";
        $this->displayBlock('langue_switcher', $context, $blocks);
        // line 62
        echo "\t\t\t\t";
        // line 63
        echo "
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-3\">

\t\t\t\t";
        // line 69
        echo "\t\t\t\t";
        $this->displayBlock('role_switcher', $context, $blocks);
        // line 72
        echo "\t\t\t\t";
        // line 73
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"navbar-custom-menu\">
\t\t";
        // line 79
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 91
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 10
        echo "
\t\t\t\t\t\t<form class=\"form-action-search\" method=\"get\">
\t\t\t\t\t\t\t";
        // line 12
        $this->displayBlock('search_form', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t\t</form>
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 13
        echo "\t\t\t\t\t\t\t\t";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 27
        echo "
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudAction\" value=\"index\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 29), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", [0 => "menuIndex"], "method", false, false, false, 30), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", [0 => "submenuIndex"], "method", false, false, false, 31), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"signature\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unsetAll", [], "method", false, false, false, 33), "setAction", [0 => "index"], "method", false, false, false, 33), "setController", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 33)], "method", false, false, false, 33), "getSignature", [], "method", false, false, false, 33), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"form-widget\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search content-search-icon\"></i>

\t\t\t\t\t\t\t\t\t\t<label class=\"content-search-label\" data-value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", [0 => "query"], "method", false, false, false, 39), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input style=\"margin:10px;padding:10px;\" class=\"form-control ";
        // line 40
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", [0 => "query"], "method", false, false, false, 40))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 40), "get", [0 => "query"], "method", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 40), "get", [0 => "query"], "method", false, false, false, 40)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 40), "get", [0 => "query"], "method", false, false, false, 40), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 40, $this->source); })()), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\" oninput=\"this.parentNode.dataset.value=this.value\">
\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "get", [0 => "query"], "method", false, false, false, 43)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 44), "html", null, true);
            echo "\" class=\"content-search-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 14
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 14, $this->source); })()), "search", [], "any", false, false, false, 14), "appliedFilters", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 15
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 16
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                // line 17
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_test_iterable($context["value"])) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_langue_switcher($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "langue_switcher"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "langue_switcher"));

        // line 60
        echo "\t\t\t\t\t";
        $this->loadTemplate("changeLangue.html.twig", "@EasyAdmin/layout.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_role_switcher($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "role_switcher"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "role_switcher"));

        // line 70
        echo "\t\t\t\t\t";
        $this->loadTemplate("changeRole.html.twig", "@EasyAdmin/layout.html.twig", 70)->display($context);
        // line 71
        echo "\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 80
        echo "\t\t\t<div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 80, $this->source); })()))) ? ("user-is-impersonated") : (""));
        echo "\">
\t\t\t\t<a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 83
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 83, $this->source); })()), "userMenu", [], "any", false, false, false, 83), "isNameDisplayed", [], "any", false, false, false, 83)) {
            // line 84
            echo "\t\t\t\t\t\t<span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 84, $this->source); })()), "userMenu", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>
\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t</a>

\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "
\t\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 96
        echo "\t<a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 96, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 96)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 96, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 96));
        echo "\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col_md_12\" style=\"text-align:center\">
\t\t\t\t<img src=\"build/images/logo.png\" style=\"width:40px;\" alt=\"Symfony builder\">
\t\t\t</div>
\t\t</div>
\t</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 107
        echo "\t<a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 107, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 107)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 107, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 107));
        echo "\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col_md_12\" style=\"text-align:center\">
\t\t\t\t<img src=\"build/images/logo.png\" style=\"width:100px;\" alt=\"Symfony builder\">
\t\t\t</div>
\t\t</div>
\t</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 107,  437 => 106,  416 => 96,  406 => 95,  393 => 88,  389 => 86,  383 => 84,  381 => 83,  377 => 82,  371 => 80,  361 => 79,  351 => 71,  348 => 70,  338 => 69,  328 => 61,  325 => 60,  315 => 59,  305 => 26,  299 => 25,  293 => 24,  283 => 22,  280 => 21,  265 => 19,  260 => 18,  257 => 17,  255 => 16,  250 => 15,  245 => 14,  235 => 13,  223 => 48,  215 => 44,  213 => 43,  203 => 40,  199 => 39,  190 => 33,  185 => 31,  181 => 30,  177 => 29,  173 => 27,  170 => 13,  160 => 12,  149 => 51,  147 => 12,  143 => 10,  133 => 9,  122 => 91,  120 => 79,  112 => 73,  110 => 72,  107 => 69,  100 => 63,  98 => 62,  95 => 59,  89 => 54,  86 => 53,  83 => 9,  81 => 8,  76 => 5,  66 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}


{% block content_top_header %}
\t<div class=\"content-search\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t{% if has_search %}
\t\t\t\t\t{% block search %}

\t\t\t\t\t\t<form class=\"form-action-search\" method=\"get\">
\t\t\t\t\t\t\t{% block search_form %}
\t\t\t\t\t\t\t\t{% block search_form_filters %}
\t\t\t\t\t\t\t\t\t{% for field, array in ea.search.appliedFilters %}
\t\t\t\t\t\t\t\t\t\t{% for key, value in array %}
\t\t\t\t\t\t\t\t\t\t\t{# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
\t\t\t\t\t\t\t\t\t\t\t{% if value is iterable %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for index, iterValue in value %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudAction\" value=\"index\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"menuIndex\" value=\"{{ ea.request.query.get('menuIndex') }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submenuIndex\" value=\"{{ ea.request.query.get('submenuIndex') }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"1\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"signature\" value=\"{{ ea_url().unsetAll().setAction('index').setController(ea.request.query.get('crudControllerFqcn')).getSignature() }}\">

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"form-widget\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search content-search-icon\"></i>

\t\t\t\t\t\t\t\t\t\t<label class=\"content-search-label\" data-value=\"{{ app.request.get('query') }}\">
\t\t\t\t\t\t\t\t\t\t\t<input style=\"margin:10px;padding:10px;\" class=\"form-control {{ app.request.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query') ?? '' }}\" placeholder=\"{{ 'action.search'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}\" spellcheck=\"false\" autocorrect=\"false\" oninput=\"this.parentNode.dataset.value=this.value\">
\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t{% if app.request.get('query') %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ ea_url().unset('query') }}\" class=\"content-search-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</form>
\t\t\t\t\t{% endblock search %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-6\">

\t\t\t\t{#   Modification effectuée sur le layout pour insérer le langue switcher #}
\t\t\t\t{% block langue_switcher %}
\t\t\t\t\t{% include 'changeLangue.html.twig' %}
\t\t\t\t{% endblock langue_switcher %}
\t\t\t\t{# fin de la modification #}

\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-md-3\">

\t\t\t\t{#   Modification effectuée sur le layout pour insérer le langue switcher #}
\t\t\t\t{% block role_switcher %}
\t\t\t\t\t{% include 'changeRole.html.twig' %}
\t\t\t\t{% endblock role_switcher %}
\t\t\t\t{# fin de la modification #}

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"navbar-custom-menu\">
\t\t{% block header_custom_menu %}
\t\t\t<div class=\"dropdown user-menu-wrapper {{ is_granted(impersonator_permission) ? 'user-is-impersonated' }}\">
\t\t\t\t<a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t{{ user_menu_avatar }}
\t\t\t\t\t{% if ea.userMenu.isNameDisplayed %}
\t\t\t\t\t\t<span class=\"user-name\">{{ ea.userMenu.name }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</a>

\t\t\t\t{{ user_menu_dropdown }}
\t\t\t</div>
\t\t{% endblock header_custom_menu %}
\t</div>
{% endblock content_top_header %}


{% block responsive_header_logo %}
\t<a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col_md_12\" style=\"text-align:center\">
\t\t\t\t<img src=\"build/images/logo.png\" style=\"width:40px;\" alt=\"Symfony builder\">
\t\t\t</div>
\t\t</div>
\t</a>
{% endblock responsive_header_logo %}


{% block header_logo %}
\t<a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col_md_12\" style=\"text-align:center\">
\t\t\t\t<img src=\"build/images/logo.png\" style=\"width:100px;\" alt=\"Symfony builder\">
\t\t\t</div>
\t\t</div>
\t</a>
{% endblock header_logo %}
", "@EasyAdmin/layout.html.twig", "/home/hiba/Bureau/ExamPrep/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
