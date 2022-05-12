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

/* commandes/front.html.twig */
class __TwigTemplate_422af8f4f335c710c1fec35d23f216bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commandes/front.html.twig"));

        $this->parent = $this->loadTemplate("basefrontproduit.html.twig", "commandes/front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"pagetitle\">
    <h1>Commandes</h1>
<h2>recherche par status</h2>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn\">recherche</button>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_end');
        echo "
    <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out\">
        <table class=\"table table-dark\">
            <thead>
            <tr>
                <th>Numerocommande</th>
                <th>Datecreation</th>
                <th>Dateenvoi</th>
                <th>Numeroutilisateur</th>
                <th>Statut</th>
                <th>Action</th>


            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "numerocommande", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "datecreation", [], "any", false, false, false, 28), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "dateenvoi", [], "any", false, false, false, 29), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "numeroutilisateur", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statut", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>

                        <a class=\"btn btn-success\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_show_front", ["numerocommande" => twig_get_attribute($this->env, $this->source, $context["commande"], "numerocommande", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">show</a>

                    </td>

                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>

    </div>

</div><!-- End Page Title -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commandes/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  139 => 40,  128 => 34,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  103 => 26,  98 => 25,  79 => 9,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefrontproduit.html.twig' %}
{% block content %}
<div class=\"pagetitle\">
    <h1>Commandes</h1>
<h2>recherche par status</h2>

    {{ form_start(form) }}
    <button type=\"submit\" class=\"btn\">recherche</button>
    {{ form_end(form) }}
    <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out\">
        <table class=\"table table-dark\">
            <thead>
            <tr>
                <th>Numerocommande</th>
                <th>Datecreation</th>
                <th>Dateenvoi</th>
                <th>Numeroutilisateur</th>
                <th>Statut</th>
                <th>Action</th>


            </tr>
            </thead>
            <tbody>
            {% for commande in commandes %}
                <tr>
                    <td>{{ commande.numerocommande }}</td>
                    <td>{{ commande.datecreation| date(\"m/d/Y\") }}</td>
                    <td>{{ commande.dateenvoi| date(\"m/d/Y\") }}</td>
                    <td>{{ commande.numeroutilisateur }}</td>
                    <td>{{ commande.statut }}</td>
                    <td>

                        <a class=\"btn btn-success\" href=\"{{ path('app_commandes_show_front', {'numerocommande': commande.numerocommande}) }}\">show</a>

                    </td>

                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>

</div><!-- End Page Title -->

{% endblock %}

", "commandes/front.html.twig", "C:\\symfony\\website-skeleton\\templates\\commandes\\front.html.twig");
    }
}
