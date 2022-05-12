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

/* commandes/showfront.html.twig */
class __TwigTemplate_b9ec72bbbc90ecd33cd5f4e466b5515f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefrontproduit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/showfront.html.twig"));

        $this->parent = $this->loadTemplate("basefrontproduit.html.twig", "commandes/showfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"pagetitle\">
        <h1>Commandes</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <th>Numerocommande</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 12, $this->source); })()), "numerocommande", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "datecreation", [], "any", false, false, false, 16), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateenvoi</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "dateenvoi", [], "any", false, false, false, 20), "m/d/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numeroutilisateur</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 24, $this->source); })()), "numeroutilisateur", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "statut", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

        <a class=\"btn btn-outline-warning\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">back to list</a>


        ";
        // line 36
        echo twig_include($this->env, $context, "commandes/_delete_form_front.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commandes/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  113 => 33,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefrontproduit.html.twig' %}


{% block content %}
    <div class=\"pagetitle\">
        <h1>Commandes</h1>

        <table class=\"table\">
            <tbody>
            <tr>
                <th>Numerocommande</th>
                <td>{{ commande.numerocommande }}</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>{{ commande.datecreation| date(\"m/d/Y\")}}</td>
            </tr>
            <tr>
                <th>Dateenvoi</th>
                <td>{{ commande.dateenvoi| date(\"m/d/Y\") }}</td>
            </tr>
            <tr>
                <th>Numeroutilisateur</th>
                <td>{{ commande.numeroutilisateur }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ commande.statut }}</td>
            </tr>
            </tbody>
        </table>

        <a class=\"btn btn-outline-warning\" href=\"{{ path('front') }}\">back to list</a>


        {{ include('commandes/_delete_form_front.html.twig') }}
    </div>
{% endblock %}
", "commandes/showfront.html.twig", "C:\\symfony\\website-skeleton\\templates\\commandes\\showfront.html.twig");
    }
}
