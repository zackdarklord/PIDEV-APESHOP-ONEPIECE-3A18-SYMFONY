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

/* Back/assets/vendor/apexcharts/locales/nl.json */
class __TwigTemplate_e9bc874df1b9bddc132e56f72a94f0e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/nl.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/nl.json"));

        // line 1
        echo "{
  \"name\": \"nl\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Maart\",
      \"April\",
      \"Mei\",
      \"Juni\",
      \"Juli\",
      \"Augustus\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mrt\",
      \"Apr\",
      \"Mei\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Zondag\",
      \"Maandag\",
      \"Dinsdag\",
      \"Woensdag\",
      \"Donderdag\",
      \"Vrijdag\",
      \"Zaterdag\"
    ],
    \"shortDays\": [\"Zo\", \"Ma\", \"Di\", \"Wo\", \"Do\", \"Vr\", \"Za\"],
    \"toolbar\": {
      \"exportToSVG\": \"Download SVG\",
      \"exportToPNG\": \"Download PNG\",
      \"exportToCSV\": \"Download CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selectie\",
      \"selectionZoom\": \"Zoom selectie\",
      \"zoomIn\": \"Zoom in\",
      \"zoomOut\": \"Zoom out\",
      \"pan\": \"Verplaatsen\",
      \"reset\": \"Standaardwaarden\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/nl.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"nl\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Maart\",
      \"April\",
      \"Mei\",
      \"Juni\",
      \"Juli\",
      \"Augustus\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mrt\",
      \"Apr\",
      \"Mei\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Zondag\",
      \"Maandag\",
      \"Dinsdag\",
      \"Woensdag\",
      \"Donderdag\",
      \"Vrijdag\",
      \"Zaterdag\"
    ],
    \"shortDays\": [\"Zo\", \"Ma\", \"Di\", \"Wo\", \"Do\", \"Vr\", \"Za\"],
    \"toolbar\": {
      \"exportToSVG\": \"Download SVG\",
      \"exportToPNG\": \"Download PNG\",
      \"exportToCSV\": \"Download CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selectie\",
      \"selectionZoom\": \"Zoom selectie\",
      \"zoomIn\": \"Zoom in\",
      \"zoomOut\": \"Zoom out\",
      \"pan\": \"Verplaatsen\",
      \"reset\": \"Standaardwaarden\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/nl.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\nl.json");
    }
}
