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

/* base2.html.twig */
class __TwigTemplate_61c38e53f33156c5d2e528a428889b5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"/Back/assets/img/favicon.png\" rel=\"icon\">
    <link href=\"/Back/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"/Back/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"/Back/assets/css/style.css\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 411
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"/Back/assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">ApeShop - Admin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->



            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"/Back/assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Gestion</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">



                <li>
                        <a href=\"";
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">
                        <i class=\"bi bi-circle\"></i><span>Produits</span>
                    </a>
                </li>

                <li>
                    <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_index");
        echo "\">
                        <i class=\"bi bi-circle\"></i><span>Commandes</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"Back/forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">


";
        // line 384
        $this->displayBlock('content', $context, $blocks);
        // line 387
        echo "
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"/Back/assets/vendor/apexcharts/apexcharts.min.js\"></script>
<script src=\"/Back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"/Back/assets/vendor/chart.js/chart.min.js\"></script>
<script src=\"/Back/assets/vendor/echarts/echarts.min.js\"></script>
<script src=\"/Back/assets/vendor/quill/quill.min.js\"></script>
<script src=\"/Back/assets/vendor/simple-datatables/simple-datatables.js\"></script>
<script src=\"/Back/assets/vendor/tinymce/tinymce.min.js\"></script>
<script src=\"/Back/assets/vendor/php-email-form/validate.js\"></script>

<!-- Template Main JS File -->
<script src=\"/Back/assets/js/main.js\"></script>

</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 384
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 385
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  504 => 385,  494 => 384,  461 => 387,  459 => 384,  298 => 226,  289 => 220,  110 => 43,  100 => 42,  90 => 411,  88 => 42,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"/Back/assets/img/favicon.png\" rel=\"icon\">
    <link href=\"/Back/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"/Back/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
    <link href=\"/Back/assets/vendor/simple-datatables/style.css\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"/Back/assets/css/style.css\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
{% block body %}
<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"/Back/assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">ApeShop - Admin</span>
        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->



            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"/Back/assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"/Back/assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Gestion</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">



                <li>
                        <a href=\"{{ path('app_produits_index') }}\">
                        <i class=\"bi bi-circle\"></i><span>Produits</span>
                    </a>
                </li>

                <li>
                    <a href=\"{{ path('app_commandes_index') }}\">
                        <i class=\"bi bi-circle\"></i><span>Commandes</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"Back/forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"Back/forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">


{% block content %}

    {% endblock %}

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"/Back/assets/vendor/apexcharts/apexcharts.min.js\"></script>
<script src=\"/Back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"/Back/assets/vendor/chart.js/chart.min.js\"></script>
<script src=\"/Back/assets/vendor/echarts/echarts.min.js\"></script>
<script src=\"/Back/assets/vendor/quill/quill.min.js\"></script>
<script src=\"/Back/assets/vendor/simple-datatables/simple-datatables.js\"></script>
<script src=\"/Back/assets/vendor/tinymce/tinymce.min.js\"></script>
<script src=\"/Back/assets/vendor/php-email-form/validate.js\"></script>

<!-- Template Main JS File -->
<script src=\"/Back/assets/js/main.js\"></script>

</body>
{% endblock %}
</html>", "base2.html.twig", "C:\\symfony\\website-skeleton\\templates\\base2.html.twig");
    }
}
