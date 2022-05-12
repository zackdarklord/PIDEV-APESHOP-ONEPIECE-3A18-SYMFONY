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

/* Back/assets/vendor/apexcharts/locales/se.json */
class __TwigTemplate_3db4b0baf32daa4c5cc498daca5f66ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/se.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/se.json"));

        // line 1
        echo "{
  \"name\": \"se\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Mars\",
      \"April\",
      \"Maj\",
      \"Juni\",
      \"Juli\",
      \"Augusti\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Maj\",
      \"Juni\",
      \"Juli\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Söndag\",
      \"Måndag\",
      \"Tisdag\",
      \"Onsdag\",
      \"Torsdag\",
      \"Fredag\",
      \"Lördag\"
    ],
    \"shortDays\": [\"Sön\", \"Mån\", \"Tis\", \"Ons\", \"Tor\", \"Fre\", \"Lör\"],
    \"toolbar\": {
      \"exportToSVG\": \"Ladda SVG\",
      \"exportToPNG\": \"Ladda PNG\",
      \"exportToCSV\": \"Ladda CSV\",
      \"menu\": \"Meny\",
      \"selection\": \"Selektion\",
      \"selectionZoom\": \"Val av zoom\",
      \"zoomIn\": \"Zooma in\",
      \"zoomOut\": \"Zooma ut\",
      \"pan\": \"Panorering\",
      \"reset\": \"Återställ zoomning\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/se.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"se\",
  \"options\": {
    \"months\": [
      \"Januari\",
      \"Februari\",
      \"Mars\",
      \"April\",
      \"Maj\",
      \"Juni\",
      \"Juli\",
      \"Augusti\",
      \"September\",
      \"Oktober\",
      \"November\",
      \"December\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Feb\",
      \"Mar\",
      \"Apr\",
      \"Maj\",
      \"Juni\",
      \"Juli\",
      \"Aug\",
      \"Sep\",
      \"Okt\",
      \"Nov\",
      \"Dec\"
    ],
    \"days\": [
      \"Söndag\",
      \"Måndag\",
      \"Tisdag\",
      \"Onsdag\",
      \"Torsdag\",
      \"Fredag\",
      \"Lördag\"
    ],
    \"shortDays\": [\"Sön\", \"Mån\", \"Tis\", \"Ons\", \"Tor\", \"Fre\", \"Lör\"],
    \"toolbar\": {
      \"exportToSVG\": \"Ladda SVG\",
      \"exportToPNG\": \"Ladda PNG\",
      \"exportToCSV\": \"Ladda CSV\",
      \"menu\": \"Meny\",
      \"selection\": \"Selektion\",
      \"selectionZoom\": \"Val av zoom\",
      \"zoomIn\": \"Zooma in\",
      \"zoomOut\": \"Zooma ut\",
      \"pan\": \"Panorering\",
      \"reset\": \"Återställ zoomning\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/se.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\se.json");
    }
}
