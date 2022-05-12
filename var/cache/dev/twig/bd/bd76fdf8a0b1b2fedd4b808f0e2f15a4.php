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

/* Back/assets/vendor/apexcharts/locales/id.json */
class __TwigTemplate_a36b078f4a30b015616de63cf0f8af34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/id.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/id.json"));

        // line 1
        echo "{
  \"name\": \"id\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Maret\",
      \"April\",
      \"Mei\",
      \"Juni\",
      \"Juli\",
      \"Agustus\",
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
      \"Mei\",
      \"Jun\",
      \"Jul\",
      \"Agu\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Des\"
    ],
    \"days\": [\"Minggu\", \"Senin\", \"Selasa\", \"Rabu\", \"kamis\", \"Jumat\", \"Sabtu\"],
    \"shortDays\": [\"Min\", \"Sen\", \"Sel\", \"Rab\", \"Kam\", \"Jum\", \"Sab\"],
    \"toolbar\": {
      \"exportToSVG\": \"Unduh SVG\",
      \"exportToPNG\": \"Unduh PNG\",
      \"exportToCSV\": \"Unduh CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Pilihan\",
      \"selectionZoom\": \"Perbesar Pilihan\",
      \"zoomIn\": \"Perbesar\",
      \"zoomOut\": \"Perkecil\",
      \"pan\": \"Geser\",
      \"reset\": \"Atur Ulang Zoom\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/id.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"id\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Maret\",
      \"April\",
      \"Mei\",
      \"Juni\",
      \"Juli\",
      \"Agustus\",
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
      \"Mei\",
      \"Jun\",
      \"Jul\",
      \"Agu\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Des\"
    ],
    \"days\": [\"Minggu\", \"Senin\", \"Selasa\", \"Rabu\", \"kamis\", \"Jumat\", \"Sabtu\"],
    \"shortDays\": [\"Min\", \"Sen\", \"Sel\", \"Rab\", \"Kam\", \"Jum\", \"Sab\"],
    \"toolbar\": {
      \"exportToSVG\": \"Unduh SVG\",
      \"exportToPNG\": \"Unduh PNG\",
      \"exportToCSV\": \"Unduh CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Pilihan\",
      \"selectionZoom\": \"Perbesar Pilihan\",
      \"zoomIn\": \"Perbesar\",
      \"zoomOut\": \"Perkecil\",
      \"pan\": \"Geser\",
      \"reset\": \"Atur Ulang Zoom\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/id.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\id.json");
    }
}
