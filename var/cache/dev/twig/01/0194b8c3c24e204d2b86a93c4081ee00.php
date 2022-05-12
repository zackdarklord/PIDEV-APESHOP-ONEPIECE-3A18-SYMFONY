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

/* produits/index.html.twig */
class __TwigTemplate_268be519fb791f353e115e6d868bd7aa extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produits/index.html.twig", 1);
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
        echo "    ";
        if ((isset($context["quantite0"]) || array_key_exists("quantite0", $context) ? $context["quantite0"] : (function () { throw new RuntimeError('Variable "quantite0" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "
    <li class=\"nav-item dropdown\">

        <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</span>
        </a><!-- End Notification Icon -->

        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
                You have ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 16, $this->source); })()), "html", null, true);
            echo " new notifications
                <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
                <hr class=\"dropdown-divider\">
            </li>

            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["quantite0"]) || array_key_exists("quantite0", $context) ? $context["quantite0"] : (function () { throw new RuntimeError('Variable "quantite0" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quantite"]) {
                // line 24
                echo "
                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                    <h4>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quantite"], "nomproduit", [], "any", false, false, false, 27), "html", null, true);
                echo "</h4>
                    <p>Quantité de ce produits est finie</p>
                    <p></p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            <li>
                <hr class=\"dropdown-divider\">
            </li>

            <li>
                <hr class=\"dropdown-divider\">
            </li>



            <li>
                <hr class=\"dropdown-divider\">
            </li>


            <li>
                <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
            </li>

        </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->
    ";
        }
        // line 59
        echo "    <div class=\"pagetitle\">
        <h1>produit</h1>

    <!-- Dark Table -->
    <table class=\"table table-dark\">
        <thead>
        <tr>
            <th>Numeroproduit</th>
            <th>Nomproduit</th>
            <th>Quantite</th>
            <th>Prixunitaire</th>
            <th>Nomcategorie</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 76
            echo "            <tr>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "numeroproduit", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomproduit", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixunitaire", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomcategorie", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_show", ["numeroproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "numeroproduit", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-success\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_edit", ["numeroproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "numeroproduit", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>
        <a  href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_new");
        echo "\">Create new</a>
    </div><!-- End Page Title -->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 94,  214 => 92,  205 => 88,  196 => 84,  192 => 83,  187 => 81,  183 => 80,  179 => 79,  175 => 78,  171 => 77,  168 => 76,  163 => 75,  145 => 59,  116 => 32,  105 => 27,  100 => 24,  96 => 23,  86 => 16,  78 => 11,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}


{% block content %}
    {% if quantite0 %}

    <li class=\"nav-item dropdown\">

        <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">{{ nb }}</span>
        </a><!-- End Notification Icon -->

        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
                You have {{ nb}} new notifications
                <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
                <hr class=\"dropdown-divider\">
            </li>

            {% for quantite in quantite0 %}

                <i class=\"bi bi-x-circle text-danger\"></i>
                <div>
                    <h4>{{ quantite.nomproduit }}</h4>
                    <p>Quantité de ce produits est finie</p>
                    <p></p>
                </div>
            {% endfor %}

            <li>
                <hr class=\"dropdown-divider\">
            </li>

            <li>
                <hr class=\"dropdown-divider\">
            </li>



            <li>
                <hr class=\"dropdown-divider\">
            </li>


            <li>
                <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
                <a href=\"#\">Show all notifications</a>
            </li>

        </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->
    {% endif %}
    <div class=\"pagetitle\">
        <h1>produit</h1>

    <!-- Dark Table -->
    <table class=\"table table-dark\">
        <thead>
        <tr>
            <th>Numeroproduit</th>
            <th>Nomproduit</th>
            <th>Quantite</th>
            <th>Prixunitaire</th>
            <th>Nomcategorie</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td>{{ produit.numeroproduit }}</td>
                <td>{{ produit.nomproduit }}</td>
                <td>{{ produit.quantite }}</td>
                <td>{{ produit.prixunitaire }}</td>
                <td>{{ produit.nomcategorie }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_produits_show', {'numeroproduit': produit.numeroproduit}) }}\">show</a>
                    <a class=\"btn btn-success\" href=\"{{ path('app_produits_edit', {'numeroproduit': produit.numeroproduit}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        <a  href=\"{{ path('app_produits_new') }}\">Create new</a>
    </div><!-- End Page Title -->



{% endblock %}
", "produits/index.html.twig", "C:\\symfony\\website-skeleton\\templates\\produits\\index.html.twig");
    }
}
