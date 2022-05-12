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

/* Back/assets/vendor/apexcharts/locales/tr.json */
class __TwigTemplate_5c1ee3cfcda3aaaf10cc928a4499f52e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/tr.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/tr.json"));

        // line 1
        echo "{
  \"name\": \"tr\",
  \"options\": {
    \"months\": [
      \"Ocak\",
      \"Şubat\",
      \"Mart\",
      \"Nisan\",
      \"Mayıs\",
      \"Haziran\",
      \"Temmuz\",
      \"Ağustos\",
      \"Eylül\",
      \"Ekim\",
      \"Kasım\",
      \"Aralık\"
    ],
    \"shortMonths\": [
      \"Oca\",
      \"Şub\",
      \"Mar\",
      \"Nis\",
      \"May\",
      \"Haz\",
      \"Tem\",
      \"Ağu\",
      \"Eyl\",
      \"Eki\",
      \"Kas\",
      \"Ara\"
    ],
    \"days\": [
      \"Pazar\",
      \"Pazartesi\",
      \"Salı\",
      \"Çarşamba\",
      \"Perşembe\",
      \"Cuma\",
      \"Cumartesi\"
    ],
    \"shortDays\": [\"Paz\", \"Pzt\", \"Sal\", \"Çar\", \"Per\", \"Cum\", \"Cmt\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG İndir\",
      \"exportToPNG\": \"PNG İndir\",
      \"exportToCSV\": \"CSV İndir\",
      \"menu\": \"Menü\",
      \"selection\": \"Seçim\",
      \"selectionZoom\": \"Seçim Yakınlaştır\",
      \"zoomIn\": \"Yakınlaştır\",
      \"zoomOut\": \"Uzaklaştır\",
      \"pan\": \"Kaydır\",
      \"reset\": \"Yakınlaştırmayı Sıfırla\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/tr.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"tr\",
  \"options\": {
    \"months\": [
      \"Ocak\",
      \"Şubat\",
      \"Mart\",
      \"Nisan\",
      \"Mayıs\",
      \"Haziran\",
      \"Temmuz\",
      \"Ağustos\",
      \"Eylül\",
      \"Ekim\",
      \"Kasım\",
      \"Aralık\"
    ],
    \"shortMonths\": [
      \"Oca\",
      \"Şub\",
      \"Mar\",
      \"Nis\",
      \"May\",
      \"Haz\",
      \"Tem\",
      \"Ağu\",
      \"Eyl\",
      \"Eki\",
      \"Kas\",
      \"Ara\"
    ],
    \"days\": [
      \"Pazar\",
      \"Pazartesi\",
      \"Salı\",
      \"Çarşamba\",
      \"Perşembe\",
      \"Cuma\",
      \"Cumartesi\"
    ],
    \"shortDays\": [\"Paz\", \"Pzt\", \"Sal\", \"Çar\", \"Per\", \"Cum\", \"Cmt\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG İndir\",
      \"exportToPNG\": \"PNG İndir\",
      \"exportToCSV\": \"CSV İndir\",
      \"menu\": \"Menü\",
      \"selection\": \"Seçim\",
      \"selectionZoom\": \"Seçim Yakınlaştır\",
      \"zoomIn\": \"Yakınlaştır\",
      \"zoomOut\": \"Uzaklaştır\",
      \"pan\": \"Kaydır\",
      \"reset\": \"Yakınlaştırmayı Sıfırla\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/tr.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\tr.json");
    }
}
