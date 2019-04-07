<?php

/* themes/faq/templates/layout/page.html.twig */
class __TwigTemplate_385056b3a34f2a2a6252bdd44f02f1a539b75f6bfc332d1b2d8200fb2ae81db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 72);
        $filters = array("date" => 437);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

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
            if (($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()) || $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()))) {
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
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_one", array())) {
                    // line 84
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_first"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 85
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_one", array()), "html", null, true));
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
                if ($this->getAttribute(($context["page"] ?? null), "sliding_header_two", array())) {
                    // line 93
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slidewidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 94
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sliding_header_two", array()), "html", null, true));
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
      <div>
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 121
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 123
        echo "      </div>

      <!-- Navigation -->
      <div>
        ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 128
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
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
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow", array()), "html", null, true));
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
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "search", array()))) {
            // line 155
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search", array()), "html", null, true));
            echo "
  ";
        }
        // line 157
        echo "<!--End Search-->


<!--Home page banner-->
  ";
        // line 161
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "promo", array()))) {
            // line 162
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 165
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promo", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 175
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 178
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 187
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 190
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
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
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_left", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()))) {
                // line 200
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Top widget left region -->
          
          ";
                // line 208
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_left", array())) {
                    // line 209
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 210
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_left", array()), "html", null, true));
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
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_middle", array())) {
                    // line 218
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 219
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_middle", array()), "html", null, true));
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
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_right", array())) {
                    // line 227
                    echo "            <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">
              ";
                    // line 228
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_right", array()), "html", null, true));
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
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 243
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container-fluid\">
        ";
            // line 247
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 262
            echo "    <div class=\"content-top\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 265
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
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
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 283
            echo "          <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " sidebar-first\">
            ";
            // line 284
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 287
        echo "      <!---End Left Sidebar -->

      <!--- Start content -->
      ";
        // line 290
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 291
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo " content-layout\">
            ";
            // line 292
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
      ";
        }
        // line 295
        echo "      <!---End content -->

      <!--- Start Right Sidebar -->
      ";
        // line 298
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 299
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo " sidebar-second\">
            ";
            // line 300
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 311
            echo "    <div class=\"content-bottom\">
        <div class=\"row\">
\t\t  <div class=\"col-md-12\">
            ";
            // line 314
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
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
        if (((($this->getAttribute(($context["page"] ?? null), "footer_top_one", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) || $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()))) {
            // line 326
            echo "    <div class=\"footer-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Footer Top One Region -->
          
          ";
            // line 334
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_one", array())) {
                // line 335
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_one", array()), "html", null, true));
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
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_two", array())) {
                // line 344
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 345
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_two", array()), "html", null, true));
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
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_three", array())) {
                // line 354
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 355
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_three", array()), "html", null, true));
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
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_four", array())) {
                // line 364
                echo "          <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 365
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_four", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 377
            echo "    <div class=\"footer-space\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 381
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
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
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 392
            echo "  <div class=\"footer-ribbon\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 396
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
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
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-facebook\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 404
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 405
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-gplus\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 407
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 408
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-twitter\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 410
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 411
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"icon-linkedin\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"LinkedIn\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 413
                echo "            ";
                if (($context["ytube_url"] ?? null)) {
                    // line 414
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["ytube_url"] ?? null), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
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
        return "themes/faq/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 441,  698 => 439,  696 => 438,  692 => 437,  676 => 423,  670 => 419,  665 => 416,  659 => 414,  656 => 413,  650 => 411,  647 => 410,  641 => 408,  638 => 407,  632 => 405,  629 => 404,  623 => 402,  621 => 401,  617 => 399,  615 => 398,  610 => 396,  604 => 392,  602 => 391,  596 => 387,  587 => 381,  581 => 377,  579 => 376,  576 => 375,  567 => 368,  561 => 365,  556 => 364,  554 => 363,  547 => 358,  541 => 355,  536 => 354,  534 => 353,  527 => 348,  521 => 345,  516 => 344,  514 => 343,  508 => 339,  502 => 336,  497 => 335,  495 => 334,  485 => 326,  483 => 325,  475 => 319,  467 => 314,  462 => 311,  460 => 310,  452 => 304,  445 => 300,  440 => 299,  438 => 298,  433 => 295,  427 => 292,  422 => 291,  420 => 290,  415 => 287,  409 => 284,  404 => 283,  402 => 282,  396 => 278,  390 => 275,  387 => 274,  385 => 273,  380 => 270,  372 => 265,  367 => 262,  365 => 261,  354 => 252,  346 => 247,  340 => 243,  338 => 242,  332 => 238,  323 => 231,  317 => 228,  312 => 227,  310 => 226,  304 => 222,  298 => 219,  293 => 218,  291 => 217,  285 => 213,  279 => 210,  274 => 209,  272 => 208,  262 => 200,  260 => 199,  256 => 198,  251 => 195,  243 => 190,  238 => 187,  236 => 186,  231 => 183,  223 => 178,  218 => 175,  216 => 174,  210 => 170,  202 => 165,  197 => 162,  195 => 161,  189 => 157,  183 => 155,  181 => 154,  172 => 147,  164 => 142,  157 => 138,  146 => 129,  140 => 128,  138 => 127,  132 => 123,  126 => 121,  124 => 120,  111 => 109,  97 => 97,  91 => 94,  86 => 93,  84 => 92,  78 => 88,  72 => 85,  67 => 84,  65 => 83,  54 => 74,  51 => 73,  49 => 72,  43 => 68,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/faq/templates/layout/page.html.twig", "/var/www/faq-drupal-8/themes/faq/templates/layout/page.html.twig");
    }
}
