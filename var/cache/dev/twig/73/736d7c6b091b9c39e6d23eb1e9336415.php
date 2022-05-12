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

/* Back/assets/vendor/apexcharts/locales/it.json */
class __TwigTemplate_b6b02b4f10e7f4947c1d244611876555 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/it.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/it.json"));

        // line 1
        echo "{
  \"name\": \"it\",
  \"options\": {
    \"months\": [
      \"Gennaio\",
      \"Febbraio\",
      \"Marzo\",
      \"Aprile\",
      \"Maggio\",
      \"Giugno\",
      \"Luglio\",
      \"Agosto\",
      \"Settembre\",
      \"Ottobre\",
      \"Novembre\",
      \"Dicembre\"
    ],
    \"shortMonths\": [
      \"Gen\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Mag\",
      \"Giu\",
      \"Lug\",
      \"Ago\",
      \"Set\",
      \"Ott\",
      \"Nov\",
      \"Dic\"
    ],
    \"days\": [
      \"Domenica\",
      \"Lunedì\",
      \"Martedì\",
      \"Mercoledì\",
      \"Giovedì\",
      \"Venerdì\",
      \"Sabato\"
    ],
    \"shortDays\": [\"Dom\", \"Lun\", \"Mar\", \"Mer\", \"Gio\", \"Ven\", \"Sab\"],
    \"toolbar\": {
      \"exportToSVG\": \"Scarica SVG\",
      \"exportToPNG\": \"Scarica PNG\",
      \"exportToCSV\": \"Scarica CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selezione\",
      \"selectionZoom\": \"Seleziona Zoom\",
      \"zoomIn\": \"Zoom In\",
      \"zoomOut\": \"Zoom Out\",
      \"pan\": \"Sposta\",
      \"reset\": \"Reimposta Zoom\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/it.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"it\",
  \"options\": {
    \"months\": [
      \"Gennaio\",
      \"Febbraio\",
      \"Marzo\",
      \"Aprile\",
      \"Maggio\",
      \"Giugno\",
      \"Luglio\",
      \"Agosto\",
      \"Settembre\",
      \"Ottobre\",
      \"Novembre\",
      \"Dicembre\"
    ],
    \"shortMonths\": [
      \"Gen\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Mag\",
      \"Giu\",
      \"Lug\",
      \"Ago\",
      \"Set\",
      \"Ott\",
      \"Nov\",
      \"Dic\"
    ],
    \"days\": [
      \"Domenica\",
      \"Lunedì\",
      \"Martedì\",
      \"Mercoledì\",
      \"Giovedì\",
      \"Venerdì\",
      \"Sabato\"
    ],
    \"shortDays\": [\"Dom\", \"Lun\", \"Mar\", \"Mer\", \"Gio\", \"Ven\", \"Sab\"],
    \"toolbar\": {
      \"exportToSVG\": \"Scarica SVG\",
      \"exportToPNG\": \"Scarica PNG\",
      \"exportToCSV\": \"Scarica CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selezione\",
      \"selectionZoom\": \"Seleziona Zoom\",
      \"zoomIn\": \"Zoom In\",
      \"zoomOut\": \"Zoom Out\",
      \"pan\": \"Sposta\",
      \"reset\": \"Reimposta Zoom\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/it.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\it.json");
    }
}
