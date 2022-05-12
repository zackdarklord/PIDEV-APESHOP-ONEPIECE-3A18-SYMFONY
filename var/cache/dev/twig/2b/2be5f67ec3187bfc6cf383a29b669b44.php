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

/* Back/assets/vendor/apexcharts/locales/ka.json */
class __TwigTemplate_ce27766af225a14a54bc1f441e1ae46f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ka.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ka.json"));

        // line 1
        echo "{
  \"name\": \"ka\",
  \"options\": {
    \"months\": [
      \"იანვარი\",
      \"თებერვალი\",
      \"მარტი\",
      \"აპრილი\",
      \"მაისი\",
      \"ივნისი\",
      \"ივლისი\",
      \"აგვისტო\",
      \"სექტემბერი\",
      \"ოქტომბერი\",
      \"ნოემბერი\",
      \"დეკემბერი\"
    ],
    \"shortMonths\": [
      \"იან\",
      \"თებ\",
      \"მარ\",
      \"აპრ\",
      \"მაი\",
      \"ივნ\",
      \"ივლ\",
      \"აგვ\",
      \"სექ\",
      \"ოქტ\",
      \"ნოე\",
      \"დეკ\"
    ],
    \"days\": [
      \"კვირა\",
      \"ორშაბათი\",
      \"სამშაბათი\",
      \"ოთხშაბათი\",
      \"ხუთშაბათი\",
      \"პარასკევი\",
      \"შაბათი\"
    ],
    \"shortDays\": [\"კვი\", \"ორშ\", \"სამ\", \"ოთხ\", \"ხუთ\", \"პარ\", \"შაბ\"],
    \"toolbar\": {
      \"exportToSVG\": \"გადმოქაჩე SVG\",
      \"exportToPNG\": \"გადმოქაჩე PNG\",
      \"exportToCSV\": \"გადმოქაჩე CSV\",
      \"menu\": \"მენიუ\",
      \"selection\": \"არჩევა\",
      \"selectionZoom\": \"არჩეულის გადიდება\",
      \"zoomIn\": \"გადიდება\",
      \"zoomOut\": \"დაპატარაება\",
      \"pan\": \"გადაჩოჩება\",
      \"reset\": \"გადიდების გაუქმება\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ka.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ka\",
  \"options\": {
    \"months\": [
      \"იანვარი\",
      \"თებერვალი\",
      \"მარტი\",
      \"აპრილი\",
      \"მაისი\",
      \"ივნისი\",
      \"ივლისი\",
      \"აგვისტო\",
      \"სექტემბერი\",
      \"ოქტომბერი\",
      \"ნოემბერი\",
      \"დეკემბერი\"
    ],
    \"shortMonths\": [
      \"იან\",
      \"თებ\",
      \"მარ\",
      \"აპრ\",
      \"მაი\",
      \"ივნ\",
      \"ივლ\",
      \"აგვ\",
      \"სექ\",
      \"ოქტ\",
      \"ნოე\",
      \"დეკ\"
    ],
    \"days\": [
      \"კვირა\",
      \"ორშაბათი\",
      \"სამშაბათი\",
      \"ოთხშაბათი\",
      \"ხუთშაბათი\",
      \"პარასკევი\",
      \"შაბათი\"
    ],
    \"shortDays\": [\"კვი\", \"ორშ\", \"სამ\", \"ოთხ\", \"ხუთ\", \"პარ\", \"შაბ\"],
    \"toolbar\": {
      \"exportToSVG\": \"გადმოქაჩე SVG\",
      \"exportToPNG\": \"გადმოქაჩე PNG\",
      \"exportToCSV\": \"გადმოქაჩე CSV\",
      \"menu\": \"მენიუ\",
      \"selection\": \"არჩევა\",
      \"selectionZoom\": \"არჩეულის გადიდება\",
      \"zoomIn\": \"გადიდება\",
      \"zoomOut\": \"დაპატარაება\",
      \"pan\": \"გადაჩოჩება\",
      \"reset\": \"გადიდების გაუქმება\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ka.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ka.json");
    }
}
