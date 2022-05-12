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

/* Back/assets/vendor/apexcharts/locales/en.json */
class __TwigTemplate_7188ff47f63455ef596762fe1645a46b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/en.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/en.json"));

        // line 1
        echo "{
  \"name\": \"en\",
  \"options\": {
    \"months\": [
      \"January\",
      \"February\",
      \"March\",
      \"April\",
      \"May\",
      \"June\",
      \"July\",
      \"August\",
      \"September\",
      \"October\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"May\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Oct\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Sunday\",
      \"Monday\",
      \"Tuesday\",
      \"Wednesday\",
      \"Thursday\",
      \"Friday\",
      \"Saturday\"
    ],
    \"shortDays\": [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"],
    \"toolbar\": {
      \"exportToSVG\": \"Download SVG\",
      \"exportToPNG\": \"Download PNG\",
      \"exportToCSV\": \"Download CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selection\",
      \"selectionZoom\": \"Selection Zoom\",
      \"zoomIn\": \"Zoom In\",
      \"zoomOut\": \"Zoom Out\",
      \"pan\": \"Panning\",
      \"reset\": \"Reset Zoom\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/en.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"en\",
  \"options\": {
    \"months\": [
      \"January\",
      \"February\",
      \"March\",
      \"April\",
      \"May\",
      \"June\",
      \"July\",
      \"August\",
      \"September\",
      \"October\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"May\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Oct\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Sunday\",
      \"Monday\",
      \"Tuesday\",
      \"Wednesday\",
      \"Thursday\",
      \"Friday\",
      \"Saturday\"
    ],
    \"shortDays\": [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"],
    \"toolbar\": {
      \"exportToSVG\": \"Download SVG\",
      \"exportToPNG\": \"Download PNG\",
      \"exportToCSV\": \"Download CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selection\",
      \"selectionZoom\": \"Selection Zoom\",
      \"zoomIn\": \"Zoom In\",
      \"zoomOut\": \"Zoom Out\",
      \"pan\": \"Panning\",
      \"reset\": \"Reset Zoom\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/en.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\en.json");
    }
}
