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

/* Back/assets/vendor/apexcharts/locales/fi.json */
class __TwigTemplate_a3993140cd68336a75321f6ee26f6b0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/fi.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/fi.json"));

        // line 1
        echo "{
  \"name\": \"fi\",
  \"options\": {
    \"months\": [
      \"Tammikuu\",
      \"Helmikuu\",
      \"Maaliskuu\",
      \"Huhtikuu\",
      \"Toukokuu\",
      \"Kesäkuu\",
      \"Heinäkuu\",
      \"Elokuu\",
      \"Syyskuu\",
      \"Lokakuu\",
      \"Marraskuu\",
      \"Joulukuu\"
    ],
    \"shortMonths\": [
      \"Tammi\",
      \"Helmi\",
      \"Maalis\",
      \"Huhti\",
      \"Touko\",
      \"Kesä\",
      \"Heinä\",
      \"Elo\",
      \"Syys\",
      \"Loka\",
      \"Marras\",
      \"Joulu\"
    ],
    \"days\": [
      \"Sunnuntai\",
      \"Maanantai\",
      \"Tiistai\",
      \"Keskiviikko\",
      \"Torstai\",
      \"Perjantai\",
      \"Lauantai\"
    ],
    \"shortDays\": [\"Su\", \"Ma\", \"Ti\", \"Ke\", \"To\", \"Pe\", \"La\"],
    \"toolbar\": {
      \"exportToSVG\": \"Lataa SVG\",
      \"exportToPNG\": \"Lataa PNG\",
      \"exportToCSV\": \"Lataa CSV\",
      \"menu\": \"Valikko\",
      \"selection\": \"Valinta\",
      \"selectionZoom\": \"Valinnan zoomaus\",
      \"zoomIn\": \"Lähennä\",
      \"zoomOut\": \"Loitonna\",
      \"pan\": \"Panoroi\",
      \"reset\": \"Nollaa zoomaus\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/fi.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"fi\",
  \"options\": {
    \"months\": [
      \"Tammikuu\",
      \"Helmikuu\",
      \"Maaliskuu\",
      \"Huhtikuu\",
      \"Toukokuu\",
      \"Kesäkuu\",
      \"Heinäkuu\",
      \"Elokuu\",
      \"Syyskuu\",
      \"Lokakuu\",
      \"Marraskuu\",
      \"Joulukuu\"
    ],
    \"shortMonths\": [
      \"Tammi\",
      \"Helmi\",
      \"Maalis\",
      \"Huhti\",
      \"Touko\",
      \"Kesä\",
      \"Heinä\",
      \"Elo\",
      \"Syys\",
      \"Loka\",
      \"Marras\",
      \"Joulu\"
    ],
    \"days\": [
      \"Sunnuntai\",
      \"Maanantai\",
      \"Tiistai\",
      \"Keskiviikko\",
      \"Torstai\",
      \"Perjantai\",
      \"Lauantai\"
    ],
    \"shortDays\": [\"Su\", \"Ma\", \"Ti\", \"Ke\", \"To\", \"Pe\", \"La\"],
    \"toolbar\": {
      \"exportToSVG\": \"Lataa SVG\",
      \"exportToPNG\": \"Lataa PNG\",
      \"exportToCSV\": \"Lataa CSV\",
      \"menu\": \"Valikko\",
      \"selection\": \"Valinta\",
      \"selectionZoom\": \"Valinnan zoomaus\",
      \"zoomIn\": \"Lähennä\",
      \"zoomOut\": \"Loitonna\",
      \"pan\": \"Panoroi\",
      \"reset\": \"Nollaa zoomaus\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/fi.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\fi.json");
    }
}
