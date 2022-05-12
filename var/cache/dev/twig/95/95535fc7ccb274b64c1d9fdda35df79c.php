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

/* Back/assets/vendor/apexcharts/locales/ca.json */
class __TwigTemplate_54c4f0d65fb0afd663dc18caaca94b4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ca.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ca.json"));

        // line 1
        echo "{
  \"name\": \"ca\",
  \"options\": {
    \"months\": [
      \"Gener\",
      \"Febrer\",
      \"Març\",
      \"Abril\",
      \"Maig\",
      \"Juny\",
      \"Juliol\",
      \"Agost\",
      \"Setembre\",
      \"Octubre\",
      \"Novembre\",
      \"Desembre\"
    ],
    \"shortMonths\": [
      \"Gen.\",
      \"Febr.\",
      \"Març\",
      \"Abr.\",
      \"Maig\",
      \"Juny\",
      \"Jul.\",
      \"Ag.\",
      \"Set.\",
      \"Oct.\",
      \"Nov.\",
      \"Des.\"
    ],
    \"days\": [
      \"Diumenge\",
      \"Dilluns\",
      \"Dimarts\",
      \"Dimecres\",
      \"Dijous\",
      \"Divendres\",
      \"Dissabte\"
    ],
    \"shortDays\": [\"Dg\", \"Dl\", \"Dt\", \"Dc\", \"Dj\", \"Dv\", \"Ds\"],
    \"toolbar\": {
      \"exportToSVG\": \"Descarregar SVG\",
      \"exportToPNG\": \"Descarregar PNG\",
      \"exportToCSV\": \"Descarregar CSV\",
      \"menu\": \"Menú\",
      \"selection\": \"Seleccionar\",
      \"selectionZoom\": \"Seleccionar Zoom\",
      \"zoomIn\": \"Augmentar\",
      \"zoomOut\": \"Disminuir\",
      \"pan\": \"Navegació\",
      \"reset\": \"Reiniciar Zoom\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ca.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ca\",
  \"options\": {
    \"months\": [
      \"Gener\",
      \"Febrer\",
      \"Març\",
      \"Abril\",
      \"Maig\",
      \"Juny\",
      \"Juliol\",
      \"Agost\",
      \"Setembre\",
      \"Octubre\",
      \"Novembre\",
      \"Desembre\"
    ],
    \"shortMonths\": [
      \"Gen.\",
      \"Febr.\",
      \"Març\",
      \"Abr.\",
      \"Maig\",
      \"Juny\",
      \"Jul.\",
      \"Ag.\",
      \"Set.\",
      \"Oct.\",
      \"Nov.\",
      \"Des.\"
    ],
    \"days\": [
      \"Diumenge\",
      \"Dilluns\",
      \"Dimarts\",
      \"Dimecres\",
      \"Dijous\",
      \"Divendres\",
      \"Dissabte\"
    ],
    \"shortDays\": [\"Dg\", \"Dl\", \"Dt\", \"Dc\", \"Dj\", \"Dv\", \"Ds\"],
    \"toolbar\": {
      \"exportToSVG\": \"Descarregar SVG\",
      \"exportToPNG\": \"Descarregar PNG\",
      \"exportToCSV\": \"Descarregar CSV\",
      \"menu\": \"Menú\",
      \"selection\": \"Seleccionar\",
      \"selectionZoom\": \"Seleccionar Zoom\",
      \"zoomIn\": \"Augmentar\",
      \"zoomOut\": \"Disminuir\",
      \"pan\": \"Navegació\",
      \"reset\": \"Reiniciar Zoom\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ca.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ca.json");
    }
}
