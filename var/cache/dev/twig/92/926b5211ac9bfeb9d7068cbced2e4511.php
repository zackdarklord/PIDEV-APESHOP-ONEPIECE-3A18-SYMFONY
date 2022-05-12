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

/* Back/assets/vendor/apexcharts/locales/cs.json */
class __TwigTemplate_aa3c65bc9dd5c643182d23916e94cee6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/cs.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/cs.json"));

        // line 1
        echo "{
  \"name\": \"cs\",
  \"options\": {
    \"months\": [
      \"Leden\",
      \"Únor\",
      \"Březen\",
      \"Duben\",
      \"Květen\",
      \"Červen\",
      \"Červenec\",
      \"Srpen\",
      \"Září\",
      \"Říjen\",
      \"Listopad\",
      \"Prosinec\"
    ],
    \"shortMonths\": [
      \"Led\",
      \"Úno\",
      \"Bře\",
      \"Dub\",
      \"Kvě\",
      \"Čvn\",
      \"Čvc\",
      \"Srp\",
      \"Zář\",
      \"Říj\",
      \"Lis\",
      \"Pro\"
    ],
    \"days\": [
      \"Neděle\",
      \"Pondělí\",
      \"Úterý\",
      \"Středa\",
      \"Čtvrtek\",
      \"Pátek\",
      \"Sobota\"
    ],
    \"shortDays\": [\"Ne\", \"Po\", \"Út\", \"St\", \"Čt\", \"Pá\", \"So\"],
    \"toolbar\": {
      \"exportToSVG\": \"Stáhnout SVG\",
      \"exportToPNG\": \"Stáhnout PNG\",
      \"exportToCSV\": \"Stáhnout CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Vybrat\",
      \"selectionZoom\": \"Zoom: Vybrat\",
      \"zoomIn\": \"Zoom: Přiblížit\",
      \"zoomOut\": \"Zoom: Oddálit\",
      \"pan\": \"Přesouvat\",
      \"reset\": \"Resetovat\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/cs.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"cs\",
  \"options\": {
    \"months\": [
      \"Leden\",
      \"Únor\",
      \"Březen\",
      \"Duben\",
      \"Květen\",
      \"Červen\",
      \"Červenec\",
      \"Srpen\",
      \"Září\",
      \"Říjen\",
      \"Listopad\",
      \"Prosinec\"
    ],
    \"shortMonths\": [
      \"Led\",
      \"Úno\",
      \"Bře\",
      \"Dub\",
      \"Kvě\",
      \"Čvn\",
      \"Čvc\",
      \"Srp\",
      \"Zář\",
      \"Říj\",
      \"Lis\",
      \"Pro\"
    ],
    \"days\": [
      \"Neděle\",
      \"Pondělí\",
      \"Úterý\",
      \"Středa\",
      \"Čtvrtek\",
      \"Pátek\",
      \"Sobota\"
    ],
    \"shortDays\": [\"Ne\", \"Po\", \"Út\", \"St\", \"Čt\", \"Pá\", \"So\"],
    \"toolbar\": {
      \"exportToSVG\": \"Stáhnout SVG\",
      \"exportToPNG\": \"Stáhnout PNG\",
      \"exportToCSV\": \"Stáhnout CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Vybrat\",
      \"selectionZoom\": \"Zoom: Vybrat\",
      \"zoomIn\": \"Zoom: Přiblížit\",
      \"zoomOut\": \"Zoom: Oddálit\",
      \"pan\": \"Přesouvat\",
      \"reset\": \"Resetovat\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/cs.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\cs.json");
    }
}
