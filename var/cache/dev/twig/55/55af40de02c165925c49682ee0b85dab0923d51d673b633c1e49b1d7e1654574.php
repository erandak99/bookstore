<?php

/* @ShoppingCart/book.html.twig */
class __TwigTemplate_7f2cc37a9973db37b01839e3a1cc95ffb65ac9b051a39164209648fc64387ce8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ShoppingCart/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ShoppingCart/book.html.twig"));

        // line 1
        echo "<ul class=\"product_list grid row blocknewproducts tab-pane active\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new Twig_Error_Runtime('Variable "books" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 3
            echo "        <li class=\"animated swing ajax_block_product col-xs-12 col-sm-6 col-md-4 alpha first-in-line first-item-of-tablet-line first-item-of-mobile-line \">
            <div class=\"product-container\">
                <div class=\"left-block\">
                    <div class=\"product-image-container\">
                        <a class=\"product_img_link\"
                           href=\"\"
                           title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">
                            <img class=\"replace-2x img-responsive\"
                                 src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/books/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new Twig_Error_Runtime('Variable "em" does not exist.', 11, $this->source); })()), "getRandomImage", array(), "method"), "html", null, true);
            echo "\"
                                 title=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getDescription", array(), "method"), "html", null, true);
            echo "\" width=\"395\" height=\"600\"/>
                        </a>
                        <a class=\"quick-view\" href=\"\" rel=\"\">
                            <span>Quick view</span>
                        </a>
                        <div class=\"content_price\" itemprop=\"offers\" itemscope >
                            <span itemprop=\"price\" class=\"price product-price\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", array(), "method"), "actual_rate", array()), "html", null, true);
            echo "</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", array()), "html", null, true);
            echo "</span>
                            <span class=\"price-percent-reduction\">-";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", array(), "method"), "discount", array()), "html", null, true);
            echo "%</span>
                        </div>
                        <span class=\"new-box\">
\t\t\t\t\t\t\t\t<span class=\"new-label\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getCategory", array(), "method"), "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</span>
                        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getCart", array(), "method")) {
                // line 27
                echo "                        <span class=\"sale-box\">
\t\t\t\t\t\t\t\t<span class=\"sale-label\">In Cart!</span>
\t\t\t\t\t\t\t</span>
                        ";
            }
            // line 31
            echo "
                    </div>
                </div>
                <div class=\"right-block\">
                    <div class=\"right-block-container\">
                        <h5 itemprop=\"name\">
                            <a class=\"product-name\" href=\"\" title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getName", array(), "method"), "html", null, true);
            echo "</a>
                        </h5>


                        <p class=\"product-desc\" itemprop=\"description\">
                            Well, reading books as a hobby was always a noble, pleasant and
                            very useful kind of activity. It gives knowledge, exerts on the
                            process of development of your personality.
                        </p>
                        <div itemprop=\"offers\" class=\"content_price\">
                            <span itemprop=\"price\" class=\"price product-price\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", array(), "method"), "actual_rate", array()), "html", null, true);
            echo "</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", array()), "html", null, true);
            echo "</span>
                            <span class=\"price-percent-reduction\">-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", array(), "method"), "discount", array()), "html", null, true);
            echo "%</span>
                        </div>
                    </div>
                    <div class=\"button-container\">
                        <a itemprop=\"url\" class=\"button remove_book btn btn-default\" data-id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", array(), "method"), "html", null, true);
            echo "\"
                           href=\"\" title=\"View\">
                            <span></span>
                        </a>
                        <a class=\"button ajax_add_to_cart_button btn btn-default\"
                           href=\"#\"
                           rel=\"nofollow\" title=\"Add to cart\" data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", array()), "html", null, true);
            echo "\">
                            <span>Add to cart</span>
                        </a>

                    </div>
                    <span class=\"availability\">
                        <span class=\"available-now\">
                            <link itemprop=\"availability\" href=\"https://schema.org/InStock\"/>In Stock</span>
                    </span>
                </div>
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ShoppingCart/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 73,  134 => 60,  125 => 54,  118 => 50,  114 => 49,  109 => 47,  96 => 37,  88 => 31,  82 => 27,  80 => 26,  75 => 24,  69 => 21,  65 => 20,  60 => 18,  51 => 12,  46 => 11,  36 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"product_list grid row blocknewproducts tab-pane active\">
    {% for book in books %}
        <li class=\"animated swing ajax_block_product col-xs-12 col-sm-6 col-md-4 alpha first-in-line first-item-of-tablet-line first-item-of-mobile-line \">
            <div class=\"product-container\">
                <div class=\"left-block\">
                    <div class=\"product-image-container\">
                        <a class=\"product_img_link\"
                           href=\"\"
                           title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">
                            <img class=\"replace-2x img-responsive\"
                                 src=\"{{ asset('images/books/') }}{{ em.getRandomImage() }}\"
                                 title=\"{{ book.getDescription() }}\" width=\"395\" height=\"600\"/>
                        </a>
                        <a class=\"quick-view\" href=\"\" rel=\"\">
                            <span>Quick view</span>
                        </a>
                        <div class=\"content_price\" itemprop=\"offers\" itemscope >
                            <span itemprop=\"price\" class=\"price product-price\">{{ book.getRates().actual_rate }}</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">{{ book.price }}</span>
                            <span class=\"price-percent-reduction\">-{{  book.getRates().discount }}%</span>
                        </div>
                        <span class=\"new-box\">
\t\t\t\t\t\t\t\t<span class=\"new-label\">{{ book.getCategory().name }}</span>
\t\t\t\t\t\t\t</span>
                        {% if book.getCart() %}
                        <span class=\"sale-box\">
\t\t\t\t\t\t\t\t<span class=\"sale-label\">In Cart!</span>
\t\t\t\t\t\t\t</span>
                        {% endif %}

                    </div>
                </div>
                <div class=\"right-block\">
                    <div class=\"right-block-container\">
                        <h5 itemprop=\"name\">
                            <a class=\"product-name\" href=\"\" title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">{{ book.getName() }}</a>
                        </h5>


                        <p class=\"product-desc\" itemprop=\"description\">
                            Well, reading books as a hobby was always a noble, pleasant and
                            very useful kind of activity. It gives knowledge, exerts on the
                            process of development of your personality.
                        </p>
                        <div itemprop=\"offers\" class=\"content_price\">
                            <span itemprop=\"price\" class=\"price product-price\">{{ book.getRates().actual_rate }}</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">{{ book.price }}</span>
                            <span class=\"price-percent-reduction\">-{{  book.getRates().discount }}%</span>
                        </div>
                    </div>
                    <div class=\"button-container\">
                        <a itemprop=\"url\" class=\"button remove_book btn btn-default\" data-id=\"{{ book.getId() }}\"
                           href=\"\" title=\"View\">
                            <span></span>
                        </a>
                        <a class=\"button ajax_add_to_cart_button btn btn-default\"
                           href=\"#\"
                           rel=\"nofollow\" title=\"Add to cart\" data-id=\"{{ book.id }}\">
                            <span>Add to cart</span>
                        </a>

                    </div>
                    <span class=\"availability\">
                        <span class=\"available-now\">
                            <link itemprop=\"availability\" href=\"https://schema.org/InStock\"/>In Stock</span>
                    </span>
                </div>
            </div>
        </li>
    {% endfor %}

</ul>
", "@ShoppingCart/book.html.twig", "/data/projects/assessment-99x-master/src/ShoppingCartBundle/Resources/views/book.html.twig");
    }
}
