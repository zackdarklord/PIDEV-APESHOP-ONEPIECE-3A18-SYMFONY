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

/* Back/assets/vendor/apexcharts/locales/nb.json */
class __TwigTemplate_419b15a4e7ac32382edbdecb5e5d4b8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/nb.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/nb.json"));

        // line 1
        echo "{
  \"name\": \"nb\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"Mars\",
      \"April\",
      \"Mai\",
      \"Juni\",
      \"Juli\",
      \"August\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"Desember\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Des\"
    ],
    \"days\": [
      \"Søndag\",
      \"Mandag\",
      \"Tirsdag\",
      \"Onsdag\",
      \"Torsdag\",
      \"Fredag\",
      \"Lørdag\"
    ],
    \"shortDays\": [\"Sø\", \"Ma\", \"Ti\", \"On\", \"To\", \"Fr\", \"Lø\"],
    \"toolbar\": {
      \"exportToSVG\": \"Last ned SVG\",
      \"exportToPNG\": \"Last ned PNG\",
      \"exportToCSV\": \"Last ned CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Velg\",
      \"selectionZoom\": \"Zoom: Velg\",
      \"zoomIn\": \"Zoome inn\",
      \"zoomOut\": \"Zoome ut\",
      \"pan\": \"Skyving\",
      \"reset\": \"Start på nytt\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/nb.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"nb\",
  \"options\": {
    \"months\": [
      \"Januar\",
      \"Februar\",
      \"Mars\",
      \"April\",
      \"Mai\",
      \"Juni\",
      \"Juli\",
      \"August\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"Desember\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Des\"
    ],
    \"days\": [
      \"Søndag\",
      \"Mandag\",
      \"Tirsdag\",
      \"Onsdag\",
      \"Torsdag\",
      \"Fredag\",
      \"Lørdag\"
    ],
    \"shortDays\": [\"Sø\", \"Ma\", \"Ti\", \"On\", \"To\", \"Fr\", \"Lø\"],
    \"toolbar\": {
      \"exportToSVG\": \"Last ned SVG\",
      \"exportToPNG\": \"Last ned PNG\",
      \"exportToCSV\": \"Last ned CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Velg\",
      \"selectionZoom\": \"Zoom: Velg\",
      \"zoomIn\": \"Zoome inn\",
      \"zoomOut\": \"Zoome ut\",
      \"pan\": \"Skyving\",
      \"reset\": \"Start på nytt\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/nb.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\nb.json");
    }
}
