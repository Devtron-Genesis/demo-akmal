<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap_mint/templates/layout/page.html.twig */
class __TwigTemplate_152327abcbead1074139dfc9f455e1606292424cd4eed5ca53d759d50e19d58a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 72];
        $filters = ["date" => 437];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 68
        echo "
<!-- Header and Navbar -->
<header class=\"main-header\">
<!-- Sliding Header Widget -->
";
        // line 72
        if (($context["is_front"] ?? null)) {
            // line 73
            echo "  ";
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", []) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", []))) {
                // line 74
                echo "    <div class=\"slidewidget\">
\t<div class=\"wrapper\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <div id=\"sliding-header-wrap\">
          <!-- Slide first region -->
          
          ";
                // line 83
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])) {
                    // line 84
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_first"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 85
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_one", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 88
                echo "          
          <!-- End slide first region -->
          <!-- Slide second region -->
          
          ";
                // line 92
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])) {
                    // line 93
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slidewidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sliding_header_two", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 97
                echo "          
          <!-- End slide second region -->
          
\t\t  </div>
        </div>
      </div>
\t  <!-- end: Container -->
\t  </div>
\t  <div class=\"toggle-switch\"><div class=\"fa fa-gear fa-spin\"></div></div>
    </div>
  ";
            }
        }
        // line 109
        echo "<!--Sliding Header Widget -->
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 123
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 128
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 129
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 138
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 142
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 147
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 154
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 155
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
  ";
        }
        // line 157
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 161
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", []))) {
            // line 162
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promo", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 170
        echo "<!--End Home page banner-->


<!--Highlighted-->
  ";
        // line 174
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 175
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 183
        echo "<!--End Highlighted-->

<!--Help-->
  ";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 187
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 190
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 195
        echo "<!--End Help-->

<!-- Start Top Widget -->
";
        // line 198
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 199
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", []))) {
                // line 200
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 208
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])) {
                    // line 209
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 210
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_left", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 213
                echo "          
          <!-- End top widget left region -->\t\t  
          <!-- Top widget middle region -->
          
          ";
                // line 217
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])) {
                    // line 218
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 219
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_middle", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 222
                echo "          
          <!-- End top widget middle region -->
          <!-- Top widget right region -->
          
          ";
                // line 226
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])) {
                    // line 227
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 228
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_right", [])), "html", null, true);
                    echo "
            </div>
          ";
                }
                // line 231
                echo "          
          <!-- End top widget right region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 238
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 242
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 243
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 252
        echo "<!-- End Page Title -->


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container-fluid\">
    
    <!--Start Content Top-->
    ";
        // line 261
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 262
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 265
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 270
        echo "    <!--End Content Top-->
    
    <!--start:Breadcrumbs -->
\t";
        // line 273
        if ( !($context["is_front"] ?? null)) {
            // line 274
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 275
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
    </div>
\t";
        }
        // line 278
        echo "    <!--End Breadcrumbs-->
\t
    <div class=\"row layout\">
      <!--- Start Left Sidebar -->
      ";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 283
            echo "          <div class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
            ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 287
        echo "      <!---End Left Sidebar -->

      <!--- Start content -->
      ";
        // line 290
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 291
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-layout\">
            ";
            // line 292
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
      ";
        }
        // line 295
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 298
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 299
            echo "          <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
            ";
            // line 300
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>

      ";
        }
        // line 304
        echo "      <!---End Right Sidebar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 310
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 311
            echo "    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 314
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t  </div>
        </div>
\t</div>
    ";
        }
        // line 319
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->

<!-- Start Footer -->
  ";
        // line 325
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", []))) {
            // line 326
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 334
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])) {
                // line 335
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 336
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_one", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 339
            echo "          
          <!-- End Footer Top One Region -->

          <!-- Start Footer Top Two Region -->
          ";
            // line 343
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])) {
                // line 344
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 345
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_two", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 348
            echo "          
          <!-- End Footer Top Two Region -->

          <!-- Start Footer Top Three Region -->
          
          ";
            // line 353
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])) {
                // line 354
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 355
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_three", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 358
            echo "          
          <!-- End Footer Top Three Region -->
\t\t  
\t\t  <!-- Start Footer Top Four Region -->

          ";
            // line 363
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])) {
                // line 364
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_four", [])), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 368
            echo "\t\t  
\t\t  <!-- End Footer Top Four Region -->

        </div>
      </div>
    </div>
  ";
        }
        // line 375
        echo "  <!-- Footer Region-->
  ";
        // line 376
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 377
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 381
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          </div>
      </div>
      </div>
\t</div>
  ";
        }
        // line 387
        echo "  <!-- End Footer Region-->
<!--End Footer -->

<!-- Start Footer Ribbon -->
";
        // line 391
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 392
            echo "  <div class=\"footer-ribbon\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 396
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        ";
            // line 398
            if (($context["show_social_icon"] ?? null)) {
                // line 399
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media\">
            ";
                // line 401
                if (($context["facebook_url"] ?? null)) {
                    // line 402
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 404
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 405
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 407
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 408
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 410
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 411
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 413
                echo "            ";
                if (($context["ytube_url"] ?? null)) {
                    // line 414
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["ytube_url"] ?? null)), "html", null, true);
                    echo "\" class=\"icon-youtube\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a>
            ";
                }
                // line 416
                echo "          </div>
        </div>
        ";
            }
            // line 419
            echo "      </div>
    </div>
  </div>
";
        }
        // line 423
        echo "<!-- End Footer Ribbon -->


<!-- #footer-bottom -->
<div id=\"footer-bottom\">
    <div class=\"container\">
         <div class=\"row\">
\t\t <hr class=\"style-mint\">
         <div id=\"toTop\" class=\"col-md-12\">
          <a class=\"scrollUp\"><i class=\"fa fa-angle-up\"></i></a>
         </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-12 copy_credit\">
        <p class=\"copyright\">Copyright &copy; ";
        // line 437
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved</p>
        ";
        // line 438
        if (($context["show_credit_link"] ?? null)) {
            // line 439
            echo "          <p class=\"credit\">Theme for <a href=\"https://www.drupal.org/8\" target=\"_blank\">Drupal 8</a></p>
        ";
        }
        // line 441
        echo "        </div>
\t\t</div>
    </div>
</div>
<!-- #footer-bottom ends here -->
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_mint/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 441,  710 => 439,  708 => 438,  704 => 437,  688 => 423,  682 => 419,  677 => 416,  671 => 414,  668 => 413,  662 => 411,  659 => 410,  653 => 408,  650 => 407,  644 => 405,  641 => 404,  635 => 402,  633 => 401,  629 => 399,  627 => 398,  622 => 396,  616 => 392,  614 => 391,  608 => 387,  599 => 381,  593 => 377,  591 => 376,  588 => 375,  579 => 368,  573 => 365,  568 => 364,  566 => 363,  559 => 358,  553 => 355,  548 => 354,  546 => 353,  539 => 348,  533 => 345,  528 => 344,  526 => 343,  520 => 339,  514 => 336,  509 => 335,  507 => 334,  497 => 326,  495 => 325,  487 => 319,  479 => 314,  474 => 311,  472 => 310,  464 => 304,  457 => 300,  452 => 299,  450 => 298,  445 => 295,  439 => 292,  434 => 291,  432 => 290,  427 => 287,  421 => 284,  416 => 283,  414 => 282,  408 => 278,  402 => 275,  399 => 274,  397 => 273,  392 => 270,  384 => 265,  379 => 262,  377 => 261,  366 => 252,  358 => 247,  352 => 243,  350 => 242,  344 => 238,  335 => 231,  329 => 228,  324 => 227,  322 => 226,  316 => 222,  310 => 219,  305 => 218,  303 => 217,  297 => 213,  291 => 210,  286 => 209,  284 => 208,  274 => 200,  272 => 199,  268 => 198,  263 => 195,  255 => 190,  250 => 187,  248 => 186,  243 => 183,  235 => 178,  230 => 175,  228 => 174,  222 => 170,  214 => 165,  209 => 162,  207 => 161,  201 => 157,  195 => 155,  193 => 154,  184 => 147,  176 => 142,  169 => 138,  158 => 129,  152 => 128,  150 => 127,  144 => 123,  138 => 121,  136 => 120,  123 => 109,  109 => 97,  103 => 94,  98 => 93,  96 => 92,  90 => 88,  84 => 85,  79 => 84,  77 => 83,  66 => 74,  63 => 73,  61 => 72,  55 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_mint/templates/layout/page.html.twig", "/var/www/demo-site/themes/bootstrap_mint/templates/layout/page.html.twig");
    }
}
