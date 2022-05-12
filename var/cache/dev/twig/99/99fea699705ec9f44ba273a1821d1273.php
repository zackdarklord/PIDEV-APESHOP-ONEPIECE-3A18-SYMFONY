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

/* Back/assets/vendor/apexcharts/locales/fr.json */
class __TwigTemplate_f8d67434a4661e0dc9a7e97c8f68f994 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/fr.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/fr.json"));

        // line 1
        echo "{
  \"name\": \"fr\",
  \"options\": {
    \"months\": [
      \"janvier\",
      \"février\",
      \"mars\",
      \"avril\",
      \"mai\",
      \"juin\",
      \"juillet\",
      \"août\",
      \"septembre\",
      \"octobre\",
      \"novembre\",
      \"décembre\"
    ],
    \"shortMonths\": [
      \"janv.\",
      \"févr.\",
      \"mars\",
      \"avr.\",
      \"mai\",
      \"juin\",
      \"juill.\",
      \"août\",
      \"sept.\",
      \"oct.\",
      \"nov.\",
      \"déc.\"
    ],
    \"days\": [
      \"dimanche\",
      \"lundi\",
      \"mardi\",
      \"mercredi\",
      \"jeudi\",
      \"vendredi\",
      \"samedi\"
    ],
    \"shortDays\": [\"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\"],
    \"toolbar\": {
      \"exportToSVG\": \"Télécharger au format SVG\",
      \"exportToPNG\": \"Télécharger au format PNG\",
      \"exportToCSV\": \"Télécharger au format CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Sélection\",
      \"selectionZoom\": \"Sélection et zoom\",
      \"zoomIn\": \"Zoomer\",
      \"zoomOut\": \"Dézoomer\",
      \"pan\": \"Navigation\",
      \"reset\": \"Réinitialiser le zoom\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/fr.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"fr\",
  \"options\": {
    \"months\": [
      \"janvier\",
      \"février\",
      \"mars\",
      \"avril\",
      \"mai\",
      \"juin\",
      \"juillet\",
      \"août\",
      \"septembre\",
      \"octobre\",
      \"novembre\",
      \"décembre\"
    ],
    \"shortMonths\": [
      \"janv.\",
      \"févr.\",
      \"mars\",
      \"avr.\",
      \"mai\",
      \"juin\",
      \"juill.\",
      \"août\",
      \"sept.\",
      \"oct.\",
      \"nov.\",
      \"déc.\"
    ],
    \"days\": [
      \"dimanche\",
      \"lundi\",
      \"mardi\",
      \"mercredi\",
      \"jeudi\",
      \"vendredi\",
      \"samedi\"
    ],
    \"shortDays\": [\"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\"],
    \"toolbar\": {
      \"exportToSVG\": \"Télécharger au format SVG\",
      \"exportToPNG\": \"Télécharger au format PNG\",
      \"exportToCSV\": \"Télécharger au format CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Sélection\",
      \"selectionZoom\": \"Sélection et zoom\",
      \"zoomIn\": \"Zoomer\",
      \"zoomOut\": \"Dézoomer\",
      \"pan\": \"Navigation\",
      \"reset\": \"Réinitialiser le zoom\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/fr.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\fr.json");
    }
}
