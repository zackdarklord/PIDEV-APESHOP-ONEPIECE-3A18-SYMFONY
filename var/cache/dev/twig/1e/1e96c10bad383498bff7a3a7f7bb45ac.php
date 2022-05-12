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

/* Back/assets/vendor/apexcharts/locales/hy.json */
class __TwigTemplate_cb51799b03a8f966ef6c1fa885b7e3c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hy.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/hy.json"));

        // line 1
        echo "{
  \"name\": \"hy\",
  \"options\": {
    \"months\": [
      \"Հունվար\",
      \"Փետրվար\",
      \"Մարտ\",
      \"Ապրիլ\",
      \"Մայիս\",
      \"Հունիս\",
      \"Հուլիս\",
      \"Օգոստոս\",
      \"Սեպտեմբեր\",
      \"Հոկտեմբեր\",
      \"Նոյեմբեր\",
      \"Դեկտեմբեր\"
    ],
    \"shortMonths\": [
      \"Հնվ\",
      \"Փտվ\",
      \"Մրտ\",
      \"Ապր\",
      \"Մյս\",
      \"Հնս\",
      \"Հլիս\",
      \"Օգս\",
      \"Սեպ\",
      \"Հոկ\",
      \"Նոյ\",
      \"Դեկ\"
    ],
    \"days\": [
      \"Կիրակի\",
      \"Երկուշաբթի\",
      \"Երեքշաբթի\",
      \"Չորեքշաբթի\",
      \"Հինգշաբթի\",
      \"Ուրբաթ\",
      \"Շաբաթ\"
    ],
    \"shortDays\": [\"Կիր\", \"Երկ\", \"Երք\", \"Չրք\", \"Հնգ\", \"Ուրբ\", \"Շբթ\"],
    \"toolbar\": {
      \"exportToSVG\": \"Բեռնել SVG\",
      \"exportToPNG\": \"Բեռնել PNG\",
      \"exportToCSV\": \"Բեռնել CSV\",
      \"menu\": \"Մենյու\",
      \"selection\": \"Ընտրված\",
      \"selectionZoom\": \"Ընտրված հատվածի խոշորացում\",
      \"zoomIn\": \"Խոշորացնել\",
      \"zoomOut\": \"Մանրացնել\",
      \"pan\": \"Տեղափոխում\",
      \"reset\": \"Բերել սկզբնական վիճակի\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/hy.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"hy\",
  \"options\": {
    \"months\": [
      \"Հունվար\",
      \"Փետրվար\",
      \"Մարտ\",
      \"Ապրիլ\",
      \"Մայիս\",
      \"Հունիս\",
      \"Հուլիս\",
      \"Օգոստոս\",
      \"Սեպտեմբեր\",
      \"Հոկտեմբեր\",
      \"Նոյեմբեր\",
      \"Դեկտեմբեր\"
    ],
    \"shortMonths\": [
      \"Հնվ\",
      \"Փտվ\",
      \"Մրտ\",
      \"Ապր\",
      \"Մյս\",
      \"Հնս\",
      \"Հլիս\",
      \"Օգս\",
      \"Սեպ\",
      \"Հոկ\",
      \"Նոյ\",
      \"Դեկ\"
    ],
    \"days\": [
      \"Կիրակի\",
      \"Երկուշաբթի\",
      \"Երեքշաբթի\",
      \"Չորեքշաբթի\",
      \"Հինգշաբթի\",
      \"Ուրբաթ\",
      \"Շաբաթ\"
    ],
    \"shortDays\": [\"Կիր\", \"Երկ\", \"Երք\", \"Չրք\", \"Հնգ\", \"Ուրբ\", \"Շբթ\"],
    \"toolbar\": {
      \"exportToSVG\": \"Բեռնել SVG\",
      \"exportToPNG\": \"Բեռնել PNG\",
      \"exportToCSV\": \"Բեռնել CSV\",
      \"menu\": \"Մենյու\",
      \"selection\": \"Ընտրված\",
      \"selectionZoom\": \"Ընտրված հատվածի խոշորացում\",
      \"zoomIn\": \"Խոշորացնել\",
      \"zoomOut\": \"Մանրացնել\",
      \"pan\": \"Տեղափոխում\",
      \"reset\": \"Բերել սկզբնական վիճակի\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/hy.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\hy.json");
    }
}
