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

/* Back/assets/vendor/apexcharts/locales/hu.json */
class __TwigTemplate_4910ce3e2be1d602912b387181cc406f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hu.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hu.json"));

        // line 1
        echo "{
  \"name\": \"hu\",
  \"options\": {
    \"months\": [
      \"január\",
      \"február\",
      \"március\",
      \"április\",
      \"május\",
      \"június\",
      \"július\",
      \"augusztus\",
      \"szeptember\",
      \"október\",
      \"november\",
      \"december\"
    ],
    \"shortMonths\": [
      \"jan\",
      \"feb\",
      \"mar\",
      \"ápr\",
      \"máj\",
      \"jún\",
      \"júl\",
      \"aug\",
      \"szept\",
      \"okt\",
      \"nov\",
      \"dec\"
    ],
    \"days\": [
      \"hétfő\",
      \"kedd\",
      \"szerda\",
      \"csütörtök\",
      \"péntek\",
      \"szombat\",
      \"vasárnap\"
    ],
    \"shortDays\": [
      \"H\",
      \"K\",
      \"Sze\",
      \"Cs\",
      \"P\",
      \"Szo\",
      \"V\"
    ],
    \"toolbar\": {
      \"exportToSVG\": \"Exportálás SVG-be\",
      \"exportToPNG\": \"Exportálás PNG-be\",
      \"exportToCSV\": \"Exportálás CSV-be\",
      \"menu\": \"Fő ajánlat\",
      \"download\": \"SVG letöltése\",
      \"selection\": \"Kiválasztás\",
      \"selectionZoom\": \"Nagyító kiválasztása\",
      \"zoomIn\": \"Nagyítás\",
      \"zoomOut\": \"Kicsinyítés\",
      \"pan\": \"Képcsúsztatás\",
      \"reset\": \"Nagyító visszaállítása\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/hu.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"hu\",
  \"options\": {
    \"months\": [
      \"január\",
      \"február\",
      \"március\",
      \"április\",
      \"május\",
      \"június\",
      \"július\",
      \"augusztus\",
      \"szeptember\",
      \"október\",
      \"november\",
      \"december\"
    ],
    \"shortMonths\": [
      \"jan\",
      \"feb\",
      \"mar\",
      \"ápr\",
      \"máj\",
      \"jún\",
      \"júl\",
      \"aug\",
      \"szept\",
      \"okt\",
      \"nov\",
      \"dec\"
    ],
    \"days\": [
      \"hétfő\",
      \"kedd\",
      \"szerda\",
      \"csütörtök\",
      \"péntek\",
      \"szombat\",
      \"vasárnap\"
    ],
    \"shortDays\": [
      \"H\",
      \"K\",
      \"Sze\",
      \"Cs\",
      \"P\",
      \"Szo\",
      \"V\"
    ],
    \"toolbar\": {
      \"exportToSVG\": \"Exportálás SVG-be\",
      \"exportToPNG\": \"Exportálás PNG-be\",
      \"exportToCSV\": \"Exportálás CSV-be\",
      \"menu\": \"Fő ajánlat\",
      \"download\": \"SVG letöltése\",
      \"selection\": \"Kiválasztás\",
      \"selectionZoom\": \"Nagyító kiválasztása\",
      \"zoomIn\": \"Nagyítás\",
      \"zoomOut\": \"Kicsinyítés\",
      \"pan\": \"Képcsúsztatás\",
      \"reset\": \"Nagyító visszaállítása\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/hu.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\hu.json");
    }
}
