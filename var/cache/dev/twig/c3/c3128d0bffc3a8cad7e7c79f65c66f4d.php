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

/* produits/AficherFront.html.twig */
class __TwigTemplate_4045f4c27d5ed4a08d5b5127cb827b00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefrontproduit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/AficherFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/AficherFront.html.twig"));

        $this->parent = $this->loadTemplate("basefrontproduit.html.twig", "produits/AficherFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4\">
        <h3 class=\"heading-tittle text-center font-italic\">Nos Produits</h3>
        <div class=\"row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            echo "
                <div class=\"col-md-4 product-men mt-5\">
                <div class=\"men-pro-item simpleCart_shelfItem\">
                    <div class=\"men-thumb-item text-center\">
                        <img src=\"/uploads/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 12), "html", null, true);
            echo "\"  height=\"220\" alt=\"\">
                        <div class=\"men-cart-pro\">
                            <div class=\"inner-men-cart-pro\">
                                <a href=\"single.html\" class=\"link-product-add-cart\">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item-info-product text-center border-top mt-4\">
                        <h4 class=\"pt-1\">
                            <a href=\"single.html\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomproduit", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                        </h4>
                        <div class=\"info-product-price my-2\">
                            <span class=\"item_price\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixunitaire", [], "any", false, false, false, 24), "html", null, true);
            echo " DT</span>
                        </div>
                        <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out\">
                            <form action=\"#\" method=\"post\">
                                <fieldset>


                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                    <input type=\"hidden\" name=\"item_name\" value=\"Samsung Galaxy J7\" />
                                    <input type=\"hidden\" name=\"amount\" value=\"200.00\" />
                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                    <a class=\" ";
            // line 40
            echo (((twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 40) < 1)) ? ("disable btn btn-secondary rounded-pill") : ("btn btn-success rounded-pill"));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commandes_new", ["numeroproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "numeroproduit", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" >COMMANDER</a>
                                    ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 41) < 1)) {
                // line 42
                echo "                                        <br><span class=\"rupture\"><small>Rupture de stock !</small></span>
                                    ";
            }
            // line 44
            echo "                                </fieldset>
                            </form>
                        </div>
                        <div class=\"info-product-price my-2\">
                            <script src=\"https://use.fontawesome.com/fe459689b4.js\"></script>

                                <form action =\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_likes_index2");
            echo "\" method=\"POST\">
                                    <input type=\"number\" name=\"ip\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "numeroproduit", [], "any", false, false, false, 51), "html", null, true);
            echo "\" hidden>
                                    <button type=\"submit\" class= \"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i></button>
                                    <button type=\"submit\" class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i></button>
                                </form>

                        </div>
                    </div>
                </div>
            </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "

        </div>
    </div>
    ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 66, $this->source); })()));
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/AficherFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 66,  161 => 62,  144 => 51,  140 => 50,  132 => 44,  128 => 42,  126 => 41,  120 => 40,  101 => 24,  95 => 21,  83 => 12,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefrontproduit.html.twig' %}

{% block content %}
    <div class=\"product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4\">
        <h3 class=\"heading-tittle text-center font-italic\">Nos Produits</h3>
        <div class=\"row\">
            {% for produit in produits %}

                <div class=\"col-md-4 product-men mt-5\">
                <div class=\"men-pro-item simpleCart_shelfItem\">
                    <div class=\"men-thumb-item text-center\">
                        <img src=\"/uploads/{{ produit.image }}\"  height=\"220\" alt=\"\">
                        <div class=\"men-cart-pro\">
                            <div class=\"inner-men-cart-pro\">
                                <a href=\"single.html\" class=\"link-product-add-cart\">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"item-info-product text-center border-top mt-4\">
                        <h4 class=\"pt-1\">
                            <a href=\"single.html\">{{ produit.nomproduit }}</a>
                        </h4>
                        <div class=\"info-product-price my-2\">
                            <span class=\"item_price\">{{ produit.prixunitaire }} DT</span>
                        </div>
                        <div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out\">
                            <form action=\"#\" method=\"post\">
                                <fieldset>


                                    <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                    <input type=\"hidden\" name=\"add\" value=\"1\" />
                                    <input type=\"hidden\" name=\"business\" value=\" \" />
                                    <input type=\"hidden\" name=\"item_name\" value=\"Samsung Galaxy J7\" />
                                    <input type=\"hidden\" name=\"amount\" value=\"200.00\" />
                                    <input type=\"hidden\" name=\"discount_amount\" value=\"1.00\" />
                                    <input type=\"hidden\" name=\"currency_code\" value=\"USD\" />
                                    <input type=\"hidden\" name=\"return\" value=\" \" />
                                    <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                    <a class=\" {{ produit.quantite < 1  ? 'disable btn btn-secondary rounded-pill' : 'btn btn-success rounded-pill'}}\" href=\"{{ path('app_commandes_new', {'numeroproduit': produit.numeroproduit}) }}\" >COMMANDER</a>
                                    {% if produit.quantite < 1 %}
                                        <br><span class=\"rupture\"><small>Rupture de stock !</small></span>
                                    {% endif  %}
                                </fieldset>
                            </form>
                        </div>
                        <div class=\"info-product-price my-2\">
                            <script src=\"https://use.fontawesome.com/fe459689b4.js\"></script>

                                <form action =\"{{path('app_likes_index2')}}\" method=\"POST\">
                                    <input type=\"number\" name=\"ip\" value=\"{{ produit.numeroproduit }}\" hidden>
                                    <button type=\"submit\" class= \"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i></button>
                                    <button type=\"submit\" class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i></button>
                                </form>

                        </div>
                    </div>
                </div>
            </div>

            {% endfor %}


        </div>
    </div>
    {{ knp_pagination_render(produits) }}

{% endblock %}

", "produits/AficherFront.html.twig", "C:\\symfony\\website-skeleton\\templates\\produits\\AficherFront.html.twig");
    }
}
