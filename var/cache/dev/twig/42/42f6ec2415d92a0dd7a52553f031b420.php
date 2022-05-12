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

/* Back/assets/vendor/apexcharts/locales/pl.json */
class __TwigTemplate_4af0def61b3785e9c3393e25fafe2f02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/pl.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/pl.json"));

        // line 1
        echo "{
  \"name\": \"pl\",
  \"options\": {
    \"months\": [
      \"Styczeń\",
      \"Luty\",
      \"Marzec\",
      \"Kwiecień\",
      \"Maj\",
      \"Czerwiec\",
      \"Lipiec\",
      \"Sierpień\",
      \"Wrzesień\",
      \"Październik\",
      \"Listopad\",
      \"Grudzień\"
    ],
    \"shortMonths\": [
      \"Sty\",
      \"Lut\",
      \"Mar\",
      \"Kwi\",
      \"Maj\",
      \"Cze\",
      \"Lip\",
      \"Sie\",
      \"Wrz\",
      \"Paź\",
      \"Lis\",
      \"Gru\"
    ],
    \"days\": [
      \"Niedziela\",
      \"Poniedziałek\",
      \"Wtorek\",
      \"Środa\",
      \"Czwartek\",
      \"Piątek\",
      \"Sobota\"
    ],
    \"shortDays\": [\"Nd\", \"Pn\", \"Wt\", \"Śr\", \"Cz\", \"Pt\", \"Sb\"],
    \"toolbar\": {
      \"exportToSVG\": \"Pobierz SVG\",
      \"exportToPNG\": \"Pobierz PNG\",
      \"exportToCSV\": \"Pobierz CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Wybieranie\",
      \"selectionZoom\": \"Zoom: Wybieranie\",
      \"zoomIn\": \"Zoom: Przybliż\",
      \"zoomOut\": \"Zoom: Oddal\",
      \"pan\": \"Przesuwanie\",
      \"reset\": \"Resetuj\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/pl.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"pl\",
  \"options\": {
    \"months\": [
      \"Styczeń\",
      \"Luty\",
      \"Marzec\",
      \"Kwiecień\",
      \"Maj\",
      \"Czerwiec\",
      \"Lipiec\",
      \"Sierpień\",
      \"Wrzesień\",
      \"Październik\",
      \"Listopad\",
      \"Grudzień\"
    ],
    \"shortMonths\": [
      \"Sty\",
      \"Lut\",
      \"Mar\",
      \"Kwi\",
      \"Maj\",
      \"Cze\",
      \"Lip\",
      \"Sie\",
      \"Wrz\",
      \"Paź\",
      \"Lis\",
      \"Gru\"
    ],
    \"days\": [
      \"Niedziela\",
      \"Poniedziałek\",
      \"Wtorek\",
      \"Środa\",
      \"Czwartek\",
      \"Piątek\",
      \"Sobota\"
    ],
    \"shortDays\": [\"Nd\", \"Pn\", \"Wt\", \"Śr\", \"Cz\", \"Pt\", \"Sb\"],
    \"toolbar\": {
      \"exportToSVG\": \"Pobierz SVG\",
      \"exportToPNG\": \"Pobierz PNG\",
      \"exportToCSV\": \"Pobierz CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Wybieranie\",
      \"selectionZoom\": \"Zoom: Wybieranie\",
      \"zoomIn\": \"Zoom: Przybliż\",
      \"zoomOut\": \"Zoom: Oddal\",
      \"pan\": \"Przesuwanie\",
      \"reset\": \"Resetuj\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/pl.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\pl.json");
    }
}
