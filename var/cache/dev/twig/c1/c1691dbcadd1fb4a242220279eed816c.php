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

/* Back/assets/vendor/apexcharts/locales/sq.json */
class __TwigTemplate_dd391ff310771db3e76d6abe6bc109e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/sq.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/sq.json"));

        // line 1
        echo "{
  \"name\": \"sq\",
  \"options\": {
    \"months\": [
      \"Janar\",
      \"Shkurt\",
      \"Mars\",
      \"Prill\",
      \"Maj\",
      \"Qershor\",
      \"Korrik\",
      \"Gusht\",
      \"Shtator\",
      \"Tetor\",
      \"Nëntor\",
      \"Dhjetor\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Shk\",
      \"Mar\",
      \"Pr\",
      \"Maj\",
      \"Qer\",
      \"Korr\",
      \"Gush\",
      \"Sht\",
      \"Tet\",
      \"Nën\",
      \"Dhj\"
    ],
    \"days\": [
      \"e Dielë\",
      \"e Hënë\",
      \"e Martë\",
      \"e Mërkurë\",
      \"e Enjte\",
      \"e Premte\",
      \"e Shtunë\"
    ],
    \"shortDays\": [\"Die\", \"Hën\", \"Mar\", \"Mër\", \"Enj\", \"Pre\", \"Sht\"],
    \"toolbar\": {
      \"exportToSVG\": \"Shkarko SVG\",
      \"exportToPNG\": \"Shkarko PNG\",
      \"exportToCSV\": \"Shkarko CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Seleksiono\",
      \"selectionZoom\": \"Seleksiono Zmadhim\",
      \"zoomIn\": \"Zmadho\",
      \"zoomOut\": \"Zvogëlo\",
      \"pan\": \"Spostoje\",
      \"reset\": \"Rikthe dimensionin\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/sq.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"sq\",
  \"options\": {
    \"months\": [
      \"Janar\",
      \"Shkurt\",
      \"Mars\",
      \"Prill\",
      \"Maj\",
      \"Qershor\",
      \"Korrik\",
      \"Gusht\",
      \"Shtator\",
      \"Tetor\",
      \"Nëntor\",
      \"Dhjetor\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Shk\",
      \"Mar\",
      \"Pr\",
      \"Maj\",
      \"Qer\",
      \"Korr\",
      \"Gush\",
      \"Sht\",
      \"Tet\",
      \"Nën\",
      \"Dhj\"
    ],
    \"days\": [
      \"e Dielë\",
      \"e Hënë\",
      \"e Martë\",
      \"e Mërkurë\",
      \"e Enjte\",
      \"e Premte\",
      \"e Shtunë\"
    ],
    \"shortDays\": [\"Die\", \"Hën\", \"Mar\", \"Mër\", \"Enj\", \"Pre\", \"Sht\"],
    \"toolbar\": {
      \"exportToSVG\": \"Shkarko SVG\",
      \"exportToPNG\": \"Shkarko PNG\",
      \"exportToCSV\": \"Shkarko CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Seleksiono\",
      \"selectionZoom\": \"Seleksiono Zmadhim\",
      \"zoomIn\": \"Zmadho\",
      \"zoomOut\": \"Zvogëlo\",
      \"pan\": \"Spostoje\",
      \"reset\": \"Rikthe dimensionin\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/sq.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\sq.json");
    }
}
