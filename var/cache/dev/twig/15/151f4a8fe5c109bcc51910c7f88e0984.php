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

/* Back/assets/vendor/apexcharts/locales/hr.json */
class __TwigTemplate_3db5d715f3c3a574fbce295e050557d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hr.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hr.json"));

        // line 1
        echo "{
  \"name\": \"hr\",
  \"options\": {
    \"months\": [
      \"Siječanj\",
      \"Veljača\",
      \"Ožujak\",
      \"Travanj\",
      \"Svibanj\",
      \"Lipanj\",
      \"Srpanj\",
      \"Kolovoz\",
      \"Rujan\",
      \"Listopad\",
      \"Studeni\",
      \"Prosinac\"
    ],
    \"shortMonths\": [
      \"Sij\",
      \"Velj\",
      \"Ožu\",
      \"Tra\",
      \"Svi\",
      \"Lip\",
      \"Srp\",
      \"Kol\",
      \"Ruj\",
      \"Lis\",
      \"Stu\",
      \"Pro\"
    ],
    \"days\": [
      \"Nedjelja\",
      \"Ponedjeljak\",
      \"Utorak\",
      \"Srijeda\",
      \"Četvrtak\",
      \"Petak\",
      \"Subota\"
    ],
    \"shortDays\": [\"Ned\", \"Pon\", \"Uto\", \"Sri\", \"Čet\", \"Pet\", \"Sub\"],
    \"toolbar\": {
      \"exportToSVG\": \"Preuzmi SVG\",
      \"exportToPNG\": \"Preuzmi PNG\",
      \"exportToCSV\": \"Preuzmi CSV\",
      \"menu\": \"Izbornik\",
      \"selection\": \"Odabir\",
      \"selectionZoom\": \"Odabirno povećanje\",
      \"zoomIn\": \"Uvećajte prikaz\",
      \"zoomOut\": \"Umanjite prikaz\",
      \"pan\": \"Pomicanje\",
      \"reset\": \"Povratak na zadani prikaz\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/hr.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"hr\",
  \"options\": {
    \"months\": [
      \"Siječanj\",
      \"Veljača\",
      \"Ožujak\",
      \"Travanj\",
      \"Svibanj\",
      \"Lipanj\",
      \"Srpanj\",
      \"Kolovoz\",
      \"Rujan\",
      \"Listopad\",
      \"Studeni\",
      \"Prosinac\"
    ],
    \"shortMonths\": [
      \"Sij\",
      \"Velj\",
      \"Ožu\",
      \"Tra\",
      \"Svi\",
      \"Lip\",
      \"Srp\",
      \"Kol\",
      \"Ruj\",
      \"Lis\",
      \"Stu\",
      \"Pro\"
    ],
    \"days\": [
      \"Nedjelja\",
      \"Ponedjeljak\",
      \"Utorak\",
      \"Srijeda\",
      \"Četvrtak\",
      \"Petak\",
      \"Subota\"
    ],
    \"shortDays\": [\"Ned\", \"Pon\", \"Uto\", \"Sri\", \"Čet\", \"Pet\", \"Sub\"],
    \"toolbar\": {
      \"exportToSVG\": \"Preuzmi SVG\",
      \"exportToPNG\": \"Preuzmi PNG\",
      \"exportToCSV\": \"Preuzmi CSV\",
      \"menu\": \"Izbornik\",
      \"selection\": \"Odabir\",
      \"selectionZoom\": \"Odabirno povećanje\",
      \"zoomIn\": \"Uvećajte prikaz\",
      \"zoomOut\": \"Umanjite prikaz\",
      \"pan\": \"Pomicanje\",
      \"reset\": \"Povratak na zadani prikaz\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/hr.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\hr.json");
    }
}
