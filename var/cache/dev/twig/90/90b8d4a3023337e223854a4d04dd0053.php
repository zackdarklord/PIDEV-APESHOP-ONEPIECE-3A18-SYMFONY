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

/* Back/assets/vendor/apexcharts/locales/de.json */
class __TwigTemplate_1a43ce78ab80f7cd45a7e37e4263e38c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/de.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/de.json"));

        // line 1
        echo "{
  \"name\": \"de\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"März\",
      \"April\",
      \"Mai\",
      \"Juni\",
      \"Juli\",
      \"August\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"Dezember\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mär\",
      \"Apr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dez\"
    ],
    \"days\": [
      \"Sonntag\",
      \"Montag\",
      \"Dienstag\",
      \"Mittwoch\",
      \"Donnerstag\",
      \"Freitag\",
      \"Samstag\"
    ],
    \"shortDays\": [\"So\", \"Mo\", \"Di\", \"Mi\", \"Do\", \"Fr\", \"Sa\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG speichern\",
      \"exportToPNG\": \"PNG speichern\",
      \"exportToCSV\": \"CSV speichern\",
      \"menu\": \"Menü\",
      \"selection\": \"Auswahl\",
      \"selectionZoom\": \"Auswahl vergrößern\",
      \"zoomIn\": \"Vergrößern\",
      \"zoomOut\": \"Verkleinern\",
      \"pan\": \"Verschieben\",
      \"reset\": \"Zoom zurücksetzen\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/de.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"de\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"März\",
      \"April\",
      \"Mai\",
      \"Juni\",
      \"Juli\",
      \"August\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"Dezember\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mär\",
      \"Apr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dez\"
    ],
    \"days\": [
      \"Sonntag\",
      \"Montag\",
      \"Dienstag\",
      \"Mittwoch\",
      \"Donnerstag\",
      \"Freitag\",
      \"Samstag\"
    ],
    \"shortDays\": [\"So\", \"Mo\", \"Di\", \"Mi\", \"Do\", \"Fr\", \"Sa\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG speichern\",
      \"exportToPNG\": \"PNG speichern\",
      \"exportToCSV\": \"CSV speichern\",
      \"menu\": \"Menü\",
      \"selection\": \"Auswahl\",
      \"selectionZoom\": \"Auswahl vergrößern\",
      \"zoomIn\": \"Vergrößern\",
      \"zoomOut\": \"Verkleinern\",
      \"pan\": \"Verschieben\",
      \"reset\": \"Zoom zurücksetzen\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/de.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\de.json");
    }
}
