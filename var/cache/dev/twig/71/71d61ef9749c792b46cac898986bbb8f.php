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

/* Back/assets/vendor/apexcharts/locales/rs.json */
class __TwigTemplate_542dd4591b0473830bbd613ce37524b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/rs.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/rs.json"));

        // line 1
        echo "{
  \"name\": \"rs\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"Mart\",
      \"April\",
      \"Maj\",
      \"Jun\",
      \"Jul\",
      \"Avgust\",
      \"Septembar\",
      \"Oktobar\",
      \"Novembar\",
      \"Decembar\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Maj\",
      \"Jun\",
      \"Jul\",
      \"Avg\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Nedelja\",
      \"Ponedeljak\",
      \"Utorak\",
      \"Sreda\",
      \"Četvrtak\",
      \"Petak\",
      \"Subota\"
    ],
    \"shortDays\": [\"Ned\", \"Pon\", \"Uto\", \"Sre\", \"Čet\", \"Pet\", \"Sub\"],
    \"toolbar\": {
      \"exportToSVG\": \"Preuzmi SVG\",
      \"exportToPNG\": \"Preuzmi PNG\",
      \"exportToCSV\": \"Preuzmi CSV\",
      \"menu\": \"Meni\",
      \"selection\": \"Odabir\",
      \"selectionZoom\": \"Odabirno povećanje\",
      \"zoomIn\": \"Uvećajte prikaz\",
      \"zoomOut\": \"Umanjite prikaz\",
      \"pan\": \"Pomeranje\",
      \"reset\": \"Resetuj prikaz\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/rs.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"rs\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"Mart\",
      \"April\",
      \"Maj\",
      \"Jun\",
      \"Jul\",
      \"Avgust\",
      \"Septembar\",
      \"Oktobar\",
      \"Novembar\",
      \"Decembar\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Maj\",
      \"Jun\",
      \"Jul\",
      \"Avg\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Nedelja\",
      \"Ponedeljak\",
      \"Utorak\",
      \"Sreda\",
      \"Četvrtak\",
      \"Petak\",
      \"Subota\"
    ],
    \"shortDays\": [\"Ned\", \"Pon\", \"Uto\", \"Sre\", \"Čet\", \"Pet\", \"Sub\"],
    \"toolbar\": {
      \"exportToSVG\": \"Preuzmi SVG\",
      \"exportToPNG\": \"Preuzmi PNG\",
      \"exportToCSV\": \"Preuzmi CSV\",
      \"menu\": \"Meni\",
      \"selection\": \"Odabir\",
      \"selectionZoom\": \"Odabirno povećanje\",
      \"zoomIn\": \"Uvećajte prikaz\",
      \"zoomOut\": \"Umanjite prikaz\",
      \"pan\": \"Pomeranje\",
      \"reset\": \"Resetuj prikaz\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/rs.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\rs.json");
    }
}
