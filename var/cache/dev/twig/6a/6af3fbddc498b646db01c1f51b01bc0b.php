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

/* Back/assets/vendor/apexcharts/locales/el.json */
class __TwigTemplate_91449d5707d69f1934588e9c9dcf8bab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/el.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/el.json"));

        // line 1
        echo "{
  \"name\": \"el\",
  \"options\": {
    \"months\": [
      \"Ιανουάριος\",
      \"Φεβρουάριος\",
      \"Μάρτιος\",
      \"Απρίλιος\",
      \"Μάιος\",
      \"Ιούνιος\",
      \"Ιούλιος\",
      \"Αύγουστος\",
      \"Σεπτέμβριος\",
      \"Οκτώβριος\",
      \"Νοέμβριος\",
      \"Δεκέμβριος\"
    ],
    \"shortMonths\": [
      \"Ιαν\",
      \"Φευ\",
      \"Μαρ\",
      \"Απρ\",
      \"Μάι\",
      \"Ιουν\",
      \"Ιουλ\",
      \"Αυγ\",
      \"Σεπ\",
      \"Οκτ\",
      \"Νοε\",
      \"Δεκ\"
    ],
    \"days\": [
      \"Κυριακή\",
      \"Δευτέρα\",
      \"Τρίτη\",
      \"Τετάρτη\",
      \"Πέμπτη\",
      \"Παρασκευή\",
      \"Σάββατο\"
    ],
    \"shortDays\": [\"Κυρ\", \"Δευ\", \"Τρι\", \"Τετ\", \"Πεμ\", \"Παρ\", \"Σαβ\"],
    \"toolbar\": {
      \"exportToSVG\": \"Λήψη SVG\",
      \"exportToPNG\": \"Λήψη PNG\",
      \"exportToCSV\": \"Λήψη CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Επιλογή\",
      \"selectionZoom\": \"Μεγένθυση βάση επιλογής\",
      \"zoomIn\": \"Μεγένθυνση\",
      \"zoomOut\": \"Σμίκρυνση\",
      \"pan\": \"Μετατόπιση\",
      \"reset\": \"Επαναφορά μεγένθυνσης\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/el.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"el\",
  \"options\": {
    \"months\": [
      \"Ιανουάριος\",
      \"Φεβρουάριος\",
      \"Μάρτιος\",
      \"Απρίλιος\",
      \"Μάιος\",
      \"Ιούνιος\",
      \"Ιούλιος\",
      \"Αύγουστος\",
      \"Σεπτέμβριος\",
      \"Οκτώβριος\",
      \"Νοέμβριος\",
      \"Δεκέμβριος\"
    ],
    \"shortMonths\": [
      \"Ιαν\",
      \"Φευ\",
      \"Μαρ\",
      \"Απρ\",
      \"Μάι\",
      \"Ιουν\",
      \"Ιουλ\",
      \"Αυγ\",
      \"Σεπ\",
      \"Οκτ\",
      \"Νοε\",
      \"Δεκ\"
    ],
    \"days\": [
      \"Κυριακή\",
      \"Δευτέρα\",
      \"Τρίτη\",
      \"Τετάρτη\",
      \"Πέμπτη\",
      \"Παρασκευή\",
      \"Σάββατο\"
    ],
    \"shortDays\": [\"Κυρ\", \"Δευ\", \"Τρι\", \"Τετ\", \"Πεμ\", \"Παρ\", \"Σαβ\"],
    \"toolbar\": {
      \"exportToSVG\": \"Λήψη SVG\",
      \"exportToPNG\": \"Λήψη PNG\",
      \"exportToCSV\": \"Λήψη CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Επιλογή\",
      \"selectionZoom\": \"Μεγένθυση βάση επιλογής\",
      \"zoomIn\": \"Μεγένθυνση\",
      \"zoomOut\": \"Σμίκρυνση\",
      \"pan\": \"Μετατόπιση\",
      \"reset\": \"Επαναφορά μεγένθυνσης\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/el.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\el.json");
    }
}
