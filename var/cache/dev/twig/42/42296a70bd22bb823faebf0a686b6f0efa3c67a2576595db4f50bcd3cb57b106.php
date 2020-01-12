<?php

/* @ShoppingCart/layout.html.twig */
class __TwigTemplate_d0a8926d545a22454d19d42cf9b406bce13a6534624096436fc0669fd009401a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ShoppingCart/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ShoppingCart/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>Books store</title>
    <meta name=\"generator\" content=\"PrestaShop\" />
    <meta name=\"robots\" content=\"index,follow\" />
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'rel='stylesheet' type='text/css'>

    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/global.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/product_list.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/blockpermanentlinks.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/homeslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/hooks.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/blockcategories.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/blockcart.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/category.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\">
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>

    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script/global.js"), "html", null, true);
        echo "\"></script>

</head>
<body id=\"index\" class=\"index hide-right-column lang_en\">
<div id=\"page\">
    <div class=\"page-container\">
        <div class=\"header-container\">
            <header id=\"header\">
                <div class=\"banner\">
                    <div class=\"container\">
                        <div class=\"row\">

                        </div>
                    </div>
                </div>
                <div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div id=\"header_logo\">
                                <a href=\"/\" title=\"Books store\">
                                    <img class=\"logo img-responsive\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Books store\" width=\"500\" height=\"84\" />
                                </a>
                            </div>
                            <!-- MODULE Block cart -->
                            <div class=\"col-sm-3 clearfix shopping_cart_wrap \">
                                <div class=\"shopping_cart\">
                                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shoppingcart_shopping_indexcheckout");
        echo "?\" title=\"View my shopping cart\" rel=\"nofollow\">
                                        <b></b>
                                        <span class=\"ajax_cart_quantity unvisible\">0</span>
                                        <span class=\"ajax_cart_product_txt unvisible\"> B | \$<span class=\"ajax_cart_total\">\$0</span></span>

                                        <span class=\"ajax_cart_no_product\">(empty)</span>
                                    </a>
                                </div>
                            </div>

                            <div id=\"layer_cart\">
                                <div class=\"clearfix\">
                                    <div class=\"layer_cart_product col-xs-12 col-md-6\">
                                        <span class=\"cross\" title=\"Close window\"></span>
                                        <h2>
                                            <i class=\"icon-ok\"></i>Product successfully added to your shopping cart
                                        </h2>
                                        <div class=\"product-image-container layer_cart_img\">
                                        </div>
                                        <div class=\"layer_cart_product_info\">
                                            <span id=\"layer_cart_product_title\" class=\"product-name\"></span>
                                            <span id=\"layer_cart_product_attributes\"></span>
                                            <div>
                                                <strong class=\"dark\">Quantity</strong>
                                                <span id=\"layer_cart_product_quantity\"></span>
                                            </div>
                                            <div>
                                                <strong class=\"dark\">Total</strong>
                                                <span id=\"layer_cart_product_price\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layer_cart_cart col-xs-12 col-md-6\">
                                        <h2>
                                            <!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
                                            <span class=\"ajax_cart_product_txt_s \">
\t\t\t\t\t\tThere are <span class=\"ajax_cart_quantity\">2</span> items in your cart.
\t\t\t\t\t</span>
                                            <!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
                                            <span class=\"ajax_cart_product_txt  unvisible\">
\t\t\t\t\t\tThere is 1 item in your cart.
\t\t\t\t\t</span>
                                        </h2>

                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total products
                                                (tax excl.)
                                            </strong>
                                            <span class=\"ajax_block_products_total\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\$22.54
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total shipping&nbsp;(tax excl.)
                                            </strong>
                                            <span class=\"ajax_cart_shipping_cost\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\$2.00
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total
                                                (tax excl.)
                                            </strong>
                                            <span class=\"ajax_block_cart_total\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$24.54
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                        <div class=\"button-container\">
                                                <span class=\"continue btn btn-default button exclusive-medium\" title=\"Continue shopping\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<i class=\"icon-chevron-left left\"></i>Continue shopping
\t\t\t\t\t\t</span>
                                                </span>
                                            <a class=\"btn btn-default button button-medium\" href=\"#\" title=\"Proceed to checkout\" rel=\"nofollow\">
                                                    <span>
\t\t\t\t\t\t\tProceed to checkout<i class=\"icon-chevron-right right\"></i>
\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"crossseling\"></div>
                            </div>
                            <!-- #layer_cart -->
                            <div class=\"layer_cart_overlay\"></div>

                            <div id=\"gear-right2\">
                                <a id=\"enable_config\" href=\"#\"><i
                                            class=\"icon-cogs icon-2x icon-light\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        ";
        // line 155
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "
    </div>
</div>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 156
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ShoppingCart/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 156,  238 => 155,  221 => 158,  219 => 155,  116 => 55,  107 => 49,  84 => 29,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <title>Books store</title>
    <meta name=\"generator\" content=\"PrestaShop\" />
    <meta name=\"robots\" content=\"index,follow\" />
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'rel='stylesheet' type='text/css'>

    <link rel=\"stylesheet\" href=\"{{ asset('style/global.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/product_list.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/blockpermanentlinks.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/homeslider.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/hooks.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/blockcategories.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/blockcart.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/category.css') }}\" type=\"text/css\" media=\"all\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css\">
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js\"></script>

    <script src=\"{{ asset('script/global.js') }}\"></script>

</head>
<body id=\"index\" class=\"index hide-right-column lang_en\">
<div id=\"page\">
    <div class=\"page-container\">
        <div class=\"header-container\">
            <header id=\"header\">
                <div class=\"banner\">
                    <div class=\"container\">
                        <div class=\"row\">

                        </div>
                    </div>
                </div>
                <div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div id=\"header_logo\">
                                <a href=\"/\" title=\"Books store\">
                                    <img class=\"logo img-responsive\" src=\"{{ asset('images/logo.jpg') }}\" alt=\"Books store\" width=\"500\" height=\"84\" />
                                </a>
                            </div>
                            <!-- MODULE Block cart -->
                            <div class=\"col-sm-3 clearfix shopping_cart_wrap \">
                                <div class=\"shopping_cart\">
                                    <a href=\"{{ path('shoppingcart_shopping_indexcheckout') }}?\" title=\"View my shopping cart\" rel=\"nofollow\">
                                        <b></b>
                                        <span class=\"ajax_cart_quantity unvisible\">0</span>
                                        <span class=\"ajax_cart_product_txt unvisible\"> B | \$<span class=\"ajax_cart_total\">\$0</span></span>

                                        <span class=\"ajax_cart_no_product\">(empty)</span>
                                    </a>
                                </div>
                            </div>

                            <div id=\"layer_cart\">
                                <div class=\"clearfix\">
                                    <div class=\"layer_cart_product col-xs-12 col-md-6\">
                                        <span class=\"cross\" title=\"Close window\"></span>
                                        <h2>
                                            <i class=\"icon-ok\"></i>Product successfully added to your shopping cart
                                        </h2>
                                        <div class=\"product-image-container layer_cart_img\">
                                        </div>
                                        <div class=\"layer_cart_product_info\">
                                            <span id=\"layer_cart_product_title\" class=\"product-name\"></span>
                                            <span id=\"layer_cart_product_attributes\"></span>
                                            <div>
                                                <strong class=\"dark\">Quantity</strong>
                                                <span id=\"layer_cart_product_quantity\"></span>
                                            </div>
                                            <div>
                                                <strong class=\"dark\">Total</strong>
                                                <span id=\"layer_cart_product_price\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"layer_cart_cart col-xs-12 col-md-6\">
                                        <h2>
                                            <!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
                                            <span class=\"ajax_cart_product_txt_s \">
\t\t\t\t\t\tThere are <span class=\"ajax_cart_quantity\">2</span> items in your cart.
\t\t\t\t\t</span>
                                            <!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
                                            <span class=\"ajax_cart_product_txt  unvisible\">
\t\t\t\t\t\tThere is 1 item in your cart.
\t\t\t\t\t</span>
                                        </h2>

                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total products
                                                (tax excl.)
                                            </strong>
                                            <span class=\"ajax_block_products_total\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\$22.54
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>

                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total shipping&nbsp;(tax excl.)
                                            </strong>
                                            <span class=\"ajax_cart_shipping_cost\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\$2.00
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                        <div class=\"layer_cart_row\">
                                            <strong class=\"dark\">
                                                Total
                                                (tax excl.)
                                            </strong>
                                            <span class=\"ajax_block_cart_total\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$24.54
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                        <div class=\"button-container\">
                                                <span class=\"continue btn btn-default button exclusive-medium\" title=\"Continue shopping\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<i class=\"icon-chevron-left left\"></i>Continue shopping
\t\t\t\t\t\t</span>
                                                </span>
                                            <a class=\"btn btn-default button button-medium\" href=\"#\" title=\"Proceed to checkout\" rel=\"nofollow\">
                                                    <span>
\t\t\t\t\t\t\tProceed to checkout<i class=\"icon-chevron-right right\"></i>
\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"crossseling\"></div>
                            </div>
                            <!-- #layer_cart -->
                            <div class=\"layer_cart_overlay\"></div>

                            <div id=\"gear-right2\">
                                <a id=\"enable_config\" href=\"#\"><i
                                            class=\"icon-cogs icon-2x icon-light\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        {% block content %}

        {% endblock %}

    </div>
</div>

</body>

</html>
", "@ShoppingCart/layout.html.twig", "/data/projects/assessment-99x-master/src/ShoppingCartBundle/Resources/views/layout.html.twig");
    }
}
