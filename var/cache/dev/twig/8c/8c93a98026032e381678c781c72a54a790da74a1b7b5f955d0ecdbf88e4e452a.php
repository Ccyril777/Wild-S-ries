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

/* wild/seasons.html.twig */
class __TwigTemplate_4e33eb2d39dc2b6b2fa8ab0f98c7dee74bf08ce8a1ad8fb89c6200aa9cbaa7d7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'seasons' => [$this, 'block_seasons'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/seasons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wild/seasons.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wild/seasons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre Série";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_seasons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seasons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "seasons"));

        // line 6
        echo "    <section class=\"container-fluid media\">
        <h2 class=\"mt-0\"> ~> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["programName"]) || array_key_exists("programName", $context) ? $context["programName"] : (function () { throw new RuntimeError('Variable "programName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h2>
        ";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["seasons"]) || array_key_exists("seasons", $context) ? $context["seasons"] : (function () { throw new RuntimeError('Variable "seasons" does not exist.', 8, $this->source); })()));
        echo "
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) || array_key_exists("seasons", $context) ? $context["seasons"] : (function () { throw new RuntimeError('Variable "seasons" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 10
            echo "            <div class=\"mt-5 px-3\">
                <div class=\"card mb-3 pt-3 col-xl-12 mx-auto\">
                    <div class=\"container-fluid\">
                        <h2 class=\"mt-0\" href=\"#\">Saison N°";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "number", [], "any", false, false, false, 13), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "year", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
                        <a class=\"mt-0\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_season", ["id" => twig_get_attribute($this->env, $this->source, $context["season"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">.¤°o Liste des épisodes o°¤.</a>
                        <p class=\"progsize\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </section>
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wild_index");
        echo "\" class=\"retour\">
        Retour à l'accueil
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wild/seasons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 21,  129 => 20,  118 => 15,  114 => 14,  108 => 13,  103 => 10,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre Série{% endblock %}

{% block seasons %}
    <section class=\"container-fluid media\">
        <h2 class=\"mt-0\"> ~> {{ programName }}</h2>
        {{ dump(seasons) }}
        {% for season in seasons %}
            <div class=\"mt-5 px-3\">
                <div class=\"card mb-3 pt-3 col-xl-12 mx-auto\">
                    <div class=\"container-fluid\">
                        <h2 class=\"mt-0\" href=\"#\">Saison N°{{ season.number }} - {{ season.year }}</h2>
                        <a class=\"mt-0\" href=\"{{ path('wild_season', { 'id': season.id }) }}\">.¤°o Liste des épisodes o°¤.</a>
                        <p class=\"progsize\">{{ season.description }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </section>
    <a href=\"{{ path('wild_index') }}\" class=\"retour\">
        Retour à l'accueil
    </a>
{% endblock %}
", "wild/seasons.html.twig", "/home/salazhar/Documents/Symfony/Wild Séries/templates/wild/seasons.html.twig");
    }
}
