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

/* Back/assets/vendor/apexcharts/locales/he.json */
class __TwigTemplate_bd4338d83cc091ddf6fc10216792acb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/he.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/he.json"));

        // line 1
        echo "{
  \"name\": \"he\",
  \"options\": {
    \"months\": [
      \"ינואר\",
      \"פברואר\",
      \"מרץ\",
      \"אפריל\",
      \"מאי\",
      \"יוני\",
      \"יולי\",
      \"אוגוסט\",
      \"ספטמבר\",
      \"אוקטובר\",
      \"נובמבר\",
      \"דצמבר\"
    ],
    \"shortMonths\": [
      \"ינו׳\",
      \"פבר׳\",
      \"מרץ\",
      \"אפר׳\",
      \"מאי\",
      \"יוני\",
      \"יולי\",
      \"אוג׳\",
      \"ספט׳\",
      \"אוק׳\",
      \"נוב׳\",
      \"דצמ׳\"
    ],
    \"days\": [
      \"ראשון\",
      \"שני\",
      \"שלישי\",
      \"רביעי\",
      \"חמישי\",
      \"שישי\",
      \"שבת\"
    ],
    \"shortDays\": [\"א׳\", \"ב׳\", \"ג׳\", \"ד׳\", \"ה׳\", \"ו׳\", \"ש׳\"],
    \"toolbar\": {
      \"exportToSVG\": \"הורד SVG\",
      \"exportToPNG\": \"הורד PNG\",
      \"exportToCSV\": \"הורד CSV\",
      \"menu\": \"תפריט\",
      \"selection\": \"בחירה\",
      \"selectionZoom\": \"זום בחירה\",
      \"zoomIn\": \"הגדלה\",
      \"zoomOut\": \"הקטנה\",
      \"pan\": \"הזזה\",
      \"reset\": \"איפוס תצוגה\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/he.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"he\",
  \"options\": {
    \"months\": [
      \"ינואר\",
      \"פברואר\",
      \"מרץ\",
      \"אפריל\",
      \"מאי\",
      \"יוני\",
      \"יולי\",
      \"אוגוסט\",
      \"ספטמבר\",
      \"אוקטובר\",
      \"נובמבר\",
      \"דצמבר\"
    ],
    \"shortMonths\": [
      \"ינו׳\",
      \"פבר׳\",
      \"מרץ\",
      \"אפר׳\",
      \"מאי\",
      \"יוני\",
      \"יולי\",
      \"אוג׳\",
      \"ספט׳\",
      \"אוק׳\",
      \"נוב׳\",
      \"דצמ׳\"
    ],
    \"days\": [
      \"ראשון\",
      \"שני\",
      \"שלישי\",
      \"רביעי\",
      \"חמישי\",
      \"שישי\",
      \"שבת\"
    ],
    \"shortDays\": [\"א׳\", \"ב׳\", \"ג׳\", \"ד׳\", \"ה׳\", \"ו׳\", \"ש׳\"],
    \"toolbar\": {
      \"exportToSVG\": \"הורד SVG\",
      \"exportToPNG\": \"הורד PNG\",
      \"exportToCSV\": \"הורד CSV\",
      \"menu\": \"תפריט\",
      \"selection\": \"בחירה\",
      \"selectionZoom\": \"זום בחירה\",
      \"zoomIn\": \"הגדלה\",
      \"zoomOut\": \"הקטנה\",
      \"pan\": \"הזזה\",
      \"reset\": \"איפוס תצוגה\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/he.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\he.json");
    }
}
