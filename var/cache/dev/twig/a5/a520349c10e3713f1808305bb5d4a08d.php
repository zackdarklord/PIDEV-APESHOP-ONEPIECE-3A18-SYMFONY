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

/* Back/assets/vendor/boxicons/css/animations.css */
class __TwigTemplate_1759b3ca9b9f466cff88f79cbb22f04b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/boxicons/css/animations.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/boxicons/css/animations.css"));

        // line 1
        echo "@-webkit-keyframes spin
{
    0%
    {
        -webkit-transform: rotate(0);
                transform: rotate(0);
    }
    100%
    {
        -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
    }
}
@keyframes spin
{
    0%
    {
        -webkit-transform: rotate(0);
                transform: rotate(0);
    }
    100%
    {
        -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
    }
}
@-webkit-keyframes burst
{
    0%
    {
        -webkit-transform: scale(1);
                transform: scale(1);

        opacity: 1;
    }
    90%
    {
        -webkit-transform: scale(1.5);
                transform: scale(1.5);

        opacity: 0;
    }
}
@keyframes burst
{
    0%
    {
        -webkit-transform: scale(1);
                transform: scale(1);

        opacity: 1;
    }
    90%
    {
        -webkit-transform: scale(1.5);
                transform: scale(1.5);

        opacity: 0;
    }
}
@-webkit-keyframes flashing
{
    0%
    {
        opacity: 1;
    }
    45%
    {
        opacity: 0;
    }
    90%
    {
        opacity: 1;
    }
}
@keyframes flashing
{
    0%
    {
        opacity: 1;
    }
    45%
    {
        opacity: 0;
    }
    90%
    {
        opacity: 1;
    }
}
@-webkit-keyframes fade-left
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(-20px);
                transform: translateX(-20px);

        opacity: 0;
    }
}
@keyframes fade-left
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(-20px);
                transform: translateX(-20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-right
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(20px);
                transform: translateX(20px);

        opacity: 0;
    }
}
@keyframes fade-right
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(20px);
                transform: translateX(20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-up
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(-20px);
                transform: translateY(-20px);

        opacity: 0;
    }
}
@keyframes fade-up
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(-20px);
                transform: translateY(-20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-down
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(20px);
                transform: translateY(20px);

        opacity: 0;
    }
}
@keyframes fade-down
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(20px);
                transform: translateY(20px);

        opacity: 0;
    }
}
@-webkit-keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}

@keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}
.bx-spin
{
    -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
}
.bx-spin-hover:hover
{
    -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
}

.bx-tada
{
    -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
}
.bx-tada-hover:hover
{
    -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
}

.bx-flashing
{
    -webkit-animation: flashing 1.5s infinite linear;
            animation: flashing 1.5s infinite linear;
}
.bx-flashing-hover:hover
{
    -webkit-animation: flashing 1.5s infinite linear;
            animation: flashing 1.5s infinite linear;
}

.bx-burst
{
    -webkit-animation: burst 1.5s infinite linear;
            animation: burst 1.5s infinite linear;
}
.bx-burst-hover:hover
{
    -webkit-animation: burst 1.5s infinite linear;
            animation: burst 1.5s infinite linear;
}
.bx-fade-up
{
    -webkit-animation: fade-up 1.5s infinite linear;
            animation: fade-up 1.5s infinite linear;
}
.bx-fade-up-hover:hover
{
    -webkit-animation: fade-up 1.5s infinite linear;
            animation: fade-up 1.5s infinite linear;
}
.bx-fade-down
{
    -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
}
.bx-fade-down-hover:hover
{
    -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
}
.bx-fade-left
{
    -webkit-animation: fade-left 1.5s infinite linear;
            animation: fade-left 1.5s infinite linear;
}
.bx-fade-left-hover:hover
{
    -webkit-animation: fade-left 1.5s infinite linear;
            animation: fade-left 1.5s infinite linear;
}
.bx-fade-right
{
    -webkit-animation: fade-right 1.5s infinite linear;
            animation: fade-right 1.5s infinite linear;
}
.bx-fade-right-hover:hover
{
    -webkit-animation: fade-right 1.5s infinite linear;
            animation: fade-right 1.5s infinite linear;
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/boxicons/css/animations.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@-webkit-keyframes spin
{
    0%
    {
        -webkit-transform: rotate(0);
                transform: rotate(0);
    }
    100%
    {
        -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
    }
}
@keyframes spin
{
    0%
    {
        -webkit-transform: rotate(0);
                transform: rotate(0);
    }
    100%
    {
        -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
    }
}
@-webkit-keyframes burst
{
    0%
    {
        -webkit-transform: scale(1);
                transform: scale(1);

        opacity: 1;
    }
    90%
    {
        -webkit-transform: scale(1.5);
                transform: scale(1.5);

        opacity: 0;
    }
}
@keyframes burst
{
    0%
    {
        -webkit-transform: scale(1);
                transform: scale(1);

        opacity: 1;
    }
    90%
    {
        -webkit-transform: scale(1.5);
                transform: scale(1.5);

        opacity: 0;
    }
}
@-webkit-keyframes flashing
{
    0%
    {
        opacity: 1;
    }
    45%
    {
        opacity: 0;
    }
    90%
    {
        opacity: 1;
    }
}
@keyframes flashing
{
    0%
    {
        opacity: 1;
    }
    45%
    {
        opacity: 0;
    }
    90%
    {
        opacity: 1;
    }
}
@-webkit-keyframes fade-left
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(-20px);
                transform: translateX(-20px);

        opacity: 0;
    }
}
@keyframes fade-left
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(-20px);
                transform: translateX(-20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-right
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(20px);
                transform: translateX(20px);

        opacity: 0;
    }
}
@keyframes fade-right
{
    0%
    {
        -webkit-transform: translateX(0);
                transform: translateX(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateX(20px);
                transform: translateX(20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-up
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(-20px);
                transform: translateY(-20px);

        opacity: 0;
    }
}
@keyframes fade-up
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(-20px);
                transform: translateY(-20px);

        opacity: 0;
    }
}
@-webkit-keyframes fade-down
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(20px);
                transform: translateY(20px);

        opacity: 0;
    }
}
@keyframes fade-down
{
    0%
    {
        -webkit-transform: translateY(0);
                transform: translateY(0);

        opacity: 1;
    }
    75%
    {
        -webkit-transform: translateY(20px);
                transform: translateY(20px);

        opacity: 0;
    }
}
@-webkit-keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}

@keyframes tada
{
    from
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }

    10%,
    20%
    {
        -webkit-transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
                transform: scale3d(.95, .95, .95) rotate3d(0, 0, 1, -10deg);
    }

    30%,
    50%,
    70%,
    90%
    {
        -webkit-transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
                transform: scale3d(1, 1, 1) rotate3d(0, 0, 1, 10deg);
    }

    40%,
    60%,
    80%
    {
        -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
    }

    to
    {
        -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
    }
}
.bx-spin
{
    -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
}
.bx-spin-hover:hover
{
    -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
}

.bx-tada
{
    -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
}
.bx-tada-hover:hover
{
    -webkit-animation: tada 1.5s ease infinite;
            animation: tada 1.5s ease infinite;
}

.bx-flashing
{
    -webkit-animation: flashing 1.5s infinite linear;
            animation: flashing 1.5s infinite linear;
}
.bx-flashing-hover:hover
{
    -webkit-animation: flashing 1.5s infinite linear;
            animation: flashing 1.5s infinite linear;
}

.bx-burst
{
    -webkit-animation: burst 1.5s infinite linear;
            animation: burst 1.5s infinite linear;
}
.bx-burst-hover:hover
{
    -webkit-animation: burst 1.5s infinite linear;
            animation: burst 1.5s infinite linear;
}
.bx-fade-up
{
    -webkit-animation: fade-up 1.5s infinite linear;
            animation: fade-up 1.5s infinite linear;
}
.bx-fade-up-hover:hover
{
    -webkit-animation: fade-up 1.5s infinite linear;
            animation: fade-up 1.5s infinite linear;
}
.bx-fade-down
{
    -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
}
.bx-fade-down-hover:hover
{
    -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
}
.bx-fade-left
{
    -webkit-animation: fade-left 1.5s infinite linear;
            animation: fade-left 1.5s infinite linear;
}
.bx-fade-left-hover:hover
{
    -webkit-animation: fade-left 1.5s infinite linear;
            animation: fade-left 1.5s infinite linear;
}
.bx-fade-right
{
    -webkit-animation: fade-right 1.5s infinite linear;
            animation: fade-right 1.5s infinite linear;
}
.bx-fade-right-hover:hover
{
    -webkit-animation: fade-right 1.5s infinite linear;
            animation: fade-right 1.5s infinite linear;
}", "Back/assets/vendor/boxicons/css/animations.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\boxicons\\css\\animations.css");
    }
}
