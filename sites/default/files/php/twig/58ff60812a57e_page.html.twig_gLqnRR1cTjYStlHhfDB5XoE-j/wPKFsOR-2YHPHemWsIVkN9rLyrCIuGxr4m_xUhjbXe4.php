<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_95415c4a0213780342b676dfe4f0f4f9340a60ebec204e8fc10b8dd6abb6c395 extends Twig_Template
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
        $filters = array("t" => 308);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "
<header class=\"main-header navbar navbar-default navbar-fixed-top\">
  <nav role=\"navigation\">
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
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 73
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 75
        echo "      </div>

      <div class=\"col-md-9\">
        ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 79
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 80
        echo "      
      </div>

      </div>
    </div>
  </nav>
</header>
";
        // line 87
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 88
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
    </div>
  </div>
";
        }
        // line 94
        echo "
";
        // line 95
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()))) {
            // line 96
            echo "  <div class=\"welcome-banner\">
    <div class=\"container welcome-banner-text\">
      ";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "welcome_banner_text", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        // line 102
        echo "
  ";
        // line 103
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 104
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 112
        echo "
";
        // line 113
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 114
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 115
                echo "    <div class=\"topwidget\">
      <div class=\"container\">
        
        <div class=\"row\">
          <div class = ";
                // line 119
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 120
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 121
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 123
                echo "          </div>
          <div class = ";
                // line 124
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 125
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 126
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 128
                echo "          </div>
          <div class = ";
                // line 129
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 130
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 131
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 133
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 139
        echo "
";
        // line 140
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array())) {
            // line 141
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 149
        echo "
<div id=\"wrapper\">

  <div class=\"container\">

      ";
        // line 154
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 155
            echo "        <div class=\"row\">
          ";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 159
        echo "
    <div class=\"row layout\">
      ";
        // line 161
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 162
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 163
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 164
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 168
        echo "
      ";
        // line 169
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 170
            echo "        <div class=\"content_layout\">
          <div class=\"";
            // line 171
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo "\">
            ";
            // line 172
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 176
        echo "
      ";
        // line 177
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 178
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 179
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 180
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 184
        echo "    </div>
    ";
        // line 185
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 186
            echo "      <div class=\"row\">
        ";
            // line 187
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 190
        echo "  </div>
</div>

";
        // line 193
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 194
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 195
                echo "    <div class=\"bottom-widgets\">
      <div class=\"container\">
        
        <div class=\"row\">
          <div class = ";
                // line 199
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 200
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 201
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 203
                echo "          </div>

          <div class = ";
                // line 205
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 206
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 207
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 209
                echo "          </div>

          <div class = ";
                // line 211
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 212
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 213
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 215
                echo "          </div>

          <div class = ";
                // line 217
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 218
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 219
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 221
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 228
        echo "
";
        // line 229
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 230
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">

      <div class=\"row\">

        <div class = ";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 236
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 237
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 239
            echo "        </div>

        <div class = ";
            // line 241
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 242
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 243
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 245
            echo "        </div>

        <div class = ";
            // line 247
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_class"]) ? $context["footer_third_class"] : null), "html", null, true));
            echo ">
          ";
            // line 248
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 249
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 251
            echo "        </div>

      </div>
    </div>
  </div>
";
        }
        // line 257
        echo "
<footer class=\"main-footer\">
";
        // line 259
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 260
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 264
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 266
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 267
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 269
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 270
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 272
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 273
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 275
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 276
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 278
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 279
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 281
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 282
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 284
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 285
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 287
                echo "          </div>
        </div>
        ";
            }
            // line 290
            echo "      </div>
    </div>
  </div>
";
        }
        // line 294
        echo "
";
        // line 295
        if (((isset($context["copyright_text"]) ? $context["copyright_text"] : null) || (isset($context["show_credit_link"]) ? $context["show_credit_link"] : null))) {
            // line 296
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 301
            if ((isset($context["copyright_text"]) ? $context["copyright_text"] : null)) {
                // line 302
                echo "          <p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_text"]) ? $context["copyright_text"] : null), "html", null, true));
                echo "</p>
        ";
            }
            // line 304
            echo "      </div>

      ";
            // line 306
            if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
                // line 307
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">";
                // line 308
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Designed by")));
                echo " <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 311
            echo "
    </div>
  </div>
</div>
";
        }
        // line 316
        echo "</footer>

";
        // line 318
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()))) {
            // line 319
            echo "  <div class=\"google_map\">
    ";
            // line 320
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 320,  592 => 319,  590 => 318,  586 => 316,  579 => 311,  573 => 308,  570 => 307,  568 => 306,  564 => 304,  558 => 302,  556 => 301,  549 => 296,  547 => 295,  544 => 294,  538 => 290,  533 => 287,  527 => 285,  524 => 284,  518 => 282,  515 => 281,  509 => 279,  506 => 278,  500 => 276,  497 => 275,  491 => 273,  488 => 272,  482 => 270,  480 => 269,  476 => 267,  474 => 266,  469 => 264,  463 => 260,  461 => 259,  457 => 257,  449 => 251,  443 => 249,  441 => 248,  437 => 247,  433 => 245,  427 => 243,  425 => 242,  421 => 241,  417 => 239,  411 => 237,  409 => 236,  405 => 235,  398 => 230,  396 => 229,  393 => 228,  384 => 221,  378 => 219,  376 => 218,  372 => 217,  368 => 215,  362 => 213,  360 => 212,  356 => 211,  352 => 209,  346 => 207,  344 => 206,  340 => 205,  336 => 203,  330 => 201,  328 => 200,  324 => 199,  318 => 195,  316 => 194,  312 => 193,  307 => 190,  301 => 187,  298 => 186,  296 => 185,  293 => 184,  286 => 180,  282 => 179,  279 => 178,  277 => 177,  274 => 176,  267 => 172,  263 => 171,  260 => 170,  258 => 169,  255 => 168,  248 => 164,  244 => 163,  241 => 162,  239 => 161,  235 => 159,  229 => 156,  226 => 155,  224 => 154,  217 => 149,  209 => 144,  204 => 141,  202 => 140,  199 => 139,  191 => 133,  185 => 131,  183 => 130,  179 => 129,  176 => 128,  170 => 126,  168 => 125,  164 => 124,  161 => 123,  155 => 121,  153 => 120,  149 => 119,  143 => 115,  141 => 114,  137 => 113,  134 => 112,  126 => 107,  121 => 104,  119 => 103,  116 => 102,  109 => 98,  105 => 96,  103 => 95,  100 => 94,  93 => 90,  89 => 88,  87 => 87,  78 => 80,  72 => 79,  70 => 78,  65 => 75,  59 => 73,  57 => 72,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

<header class=\"main-header navbar navbar-default navbar-fixed-top\">
  <nav role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      <div class=\"col-md-9\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}      
      </div>

      </div>
    </div>
  </nav>
</header>
{% if not is_front %}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
    </div>
  </div>
{% endif %}

{% if is_front and page.welcome_banner_text %}
  <div class=\"welcome-banner\">
    <div class=\"container welcome-banner-text\">
      {{ page.welcome_banner_text }}
    </div>
  </div>
{% endif %}

  {% if page.highlighted %}
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.highlighted }}
        </div>
      </div>
    </div>
  {% endif %}

{% if is_front %}  
  {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
    <div class=\"topwidget\">
      <div class=\"container\">
        
        <div class=\"row\">
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_first %}
              {{ page.topwidget_first }}
            {% endif %}
          </div>
          <div class = {{ topwidget_class }}>
            {% if page.topwidget_second %}
              {{ page.topwidget_second }}
            {% endif %}
          </div>
          <div class = {{ topwidget_third_class }}>
            {% if page.topwidget_third %}
              {{ page.topwidget_third }}
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endif %}

{%  if page.page_title %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}

<div id=\"wrapper\">

  <div class=\"container\">

      {% if page.content_top %}
        <div class=\"row\">
          {{ page.content_top }}
        </div>
      {% endif %}

    <div class=\"row layout\">
      {% if page.sidebar_first %}
        <div class=\"sidebar\" >
          <div class = {{sidebarfirst}} >
            {{ page.sidebar_first }}
          </div>
        </div>
      {% endif %}

      {% if page.content %}
        <div class=\"content_layout\">
          <div class=\"{{contentlayout}}\">
            {{ page.content }}
          </div>
        </div>
      {% endif %}

      {% if page.sidebar_second %}
        <div class=\"sidebar\">
          <div class={{sidebarsecond}}>
            {{ page.sidebar_second }}
          </div>
        </div>
      {% endif %}
    </div>
    {% if page.content_bottom %}
      <div class=\"row\">
        {{ page.content_bottom }}
      </div>
    {% endif %}
  </div>
</div>

{% if is_front %}  
  {% if page.bottom_first or page.bottom_second or page.bottom_third %}
    <div class=\"bottom-widgets\">
      <div class=\"container\">
        
        <div class=\"row\">
          <div class = {{ bottom_class }}>
            {% if page.bottom_first %}
              {{ page.bottom_first }}
            {% endif %}
          </div>

          <div class = {{ bottom_class }}>
            {% if page.bottom_second %}
              {{ page.bottom_second }}
            {% endif %}
          </div>

          <div class = {{ bottom_class }}>
            {% if page.bottom_third %}
              {{ page.bottom_third }}
            {% endif %}
          </div>

          <div class = {{ bottom_class }}>
            {% if page.bottom_forth %}
              {{ page.bottom_forth }}
            {% endif %}
          </div>

        </div>
      </div>
    </div>
  {% endif %}
{% endif %}

{% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}
  <div class=\"footerwidget\">
    <div class=\"container\">

      <div class=\"row\">

        <div class = {{ footer_class }}>
          {% if page.footer_first %}
            {{ page.footer_first }}
          {% endif %}
        </div>

        <div class = {{ footer_class }}>
          {% if page.footer_second %}
            {{ page.footer_second }}
          {% endif %}
        </div>

        <div class = {{ footer_third_class }}>
          {% if page.footer_third %}
            {{ page.footer_third }}
          {% endif %}
        </div>

      </div>
    </div>
  </div>
{% endif %}

<footer class=\"main-footer\">
{% if page.footer_menu %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          {{ page.footer_menu }}
        </div>
        {% if show_social_icon %}
        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </div>
        </div>
        {% endif %}
      </div>
    </div>
  </div>
{% endif %}

{% if copyright_text or show_credit_link %}
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-sm-6 col-md-6\">
        {% if copyright_text %}
          <p>{{copyright_text}}</p>
        {% endif %}
      </div>

      {% if show_credit_link %}
        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">{{ 'Designed by'|t }} <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}

    </div>
  </div>
</div>
{% endif %}
</footer>

{% if is_front and page.google_map %}
  <div class=\"google_map\">
    {{ page.google_map }}
  </div>
{% endif %}
";
    }
}
