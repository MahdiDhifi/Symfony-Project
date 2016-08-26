<?php

/* NewsFrontBundle:Articles:home.html.twig */
class __TwigTemplate_1a8fb0b5e3a267a77e5ef801b15bb4d7247afc9fb0c217a847bf3398c4fde1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsFrontBundle::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
            'left' => array($this, 'block_left'),
            'right' => array($this, 'block_right'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        // line 6
        echo "    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>\t  
          <a class=\"navbar-brand\" href=\"index.html\"><img width=\"133\" height=\"53\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav custom_nav\">
            <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
            echo "</a></li>            
        
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contacteradmin");
        echo "\">Contact Us</a></li>
          </ul>           
        </div><!--/.nav-collapse -->
       
      </div>
    </nav>
        ";
    }

    // line 37
    public function block_slider($context, array $blocks = array())
    {
        // line 38
        echo "      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t<!-- start featured slider -->
\t\t\t\t<div class=\"featured_slider\">
\t\t\t\t   <!-- Set up your HTML -->
\t\t\t\t   <h2 class=\"featured_title\">
                                       <MARQUEE SCROLLDELAY=\"137\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                                          ";
        // line 45
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            // line 46
            echo "                                           ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 47
                echo "                                       &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <img width=\"73\" height=\"43\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/img/logo.png"), "html", null, true);
                echo "\" alt=\"logo\"> <a class=\"\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                echo "\"><font color=\"white\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "titre", array()), "html", null, true);
                echo "</font></a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                           ";
        }
        // line 50
        echo "                                         </MARQUEE>
                                        </h2>
\t\t\t\t 
\t\t\t\t</div><!-- End featured slider -->
        </div>
      </div>  
      ";
    }

    // line 61
    public function block_left($context, array $blocks = array())
    {
        // line 62
        echo "                <div class=\"col-lg-3 col-md-3 col-sm-4\">
          <div class=\"left_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Latest Video</h2>
              <ul class=\"post_nav\">
";
        // line 68
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            echo "   
                                      ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 70
                echo "                                           ";
                if (($this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()) != null)) {
                    // line 71
                    echo "\t\t\t\t\t<div class=\"single_iteam\">
\t\t\t\t\t   <li>
                  <figure class=\"effect-lily\">
                    <iframe width=\"270\" height=\"150\" src=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.youtube.com/embed/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()), "html", null, true);
                    echo "\" frameborder=\"0\" allowfullscreen></iframe>
                    
                      <figcaption>
                      <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "titre", array()), "html", null, true);
                    echo "</a>
                    </figcaption>     
                  </figure>
                </li>
                                        </div>
\t\t\t\t\t ";
                }
                // line 83
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                      
                                        ";
        }
        // line 86
        echo "              
              </ul>
            </div><!-- End single widget -->
            
            
              <div class=\"single_widget\">
              <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 95
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 96
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 97
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
                echo "</a>                                
                    </div>
                  </div>
                </li>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                 ";
        }
        // line 111
        echo "                </marquee>
               
                
    

              </ul>
                       <br>
        
            </div>
            
            
            
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Archive</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 128
        if ((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive"))) {
            echo "   
             ";
            // line 129
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive")));
            foreach ($context['_seq'] as $context["_key"] => $context["arc"]) {
                // line 130
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["arc"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["arc"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["arc"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["arc"], "titre", array()), "html", null, true);
                echo "</a>                                
                    </div>
                  </div>
                </li>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                 ";
        }
        // line 144
        echo "                </marquee>
               
                
    

              </ul>
                       <br>
        
            </div><!-- End single widget -->
          </div>
        </div>
           
               ";
    }

    // line 167
    public function block_right($context, array $blocks = array())
    {
        // line 168
        echo "          <div class=\"col-lg-3 col-md-3 col-sm-12\">
          <div class=\"right_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
                <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                 <marquee behavior=\"scroll\"  height=\"473\"  SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\" Behavior=\"alternate\">
                  ";
        // line 175
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 177
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img width=\"50\" height=\"50\" src=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titre", array()), "html", null, true);
                echo "</a>                                
                    </div>
                  </div>
                </li>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                 ";
        }
        // line 191
        echo "                </marquee>
               
                
    

              </ul>
            </div><!-- End single widget -->
            <!-- start single widget -->
           
            <!-- start single widget -->
            <div class=\"single_widget\"> 
             <h2>Categories</h2>
             <ul>
               
              ";
        // line 205
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 206
            echo "                 <li class=\"cat-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
            echo "</a></li>      
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "             </ul>          
            </div><!-- End single widget -->
             <!-- start single widget -->
     
             <!-- start single widget -->
            <div class=\"single_widget\"> 
             <h2>Comments</h2>
               <div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4&appId=847336061967969\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div  width=\"273\" class=\"fb-comments\" data-href=\"https://www.facebook.com/groovyvisions\" data-numposts=\"7\"></div>         
            </div><!-- End single widget -->
          </div>
        </div>
         
              ";
    }

    // line 233
    public function block_content($context, array $blocks = array())
    {
        // line 234
        echo "                    
            <div class=\"col-lg-6 col-md-6 col-sm-8\">
          <div class=\"middle_content\">
            <h2>Articles</h2>

            <!-- start featured post -->
            <ul class=\"featured_nav\">
                ";
        // line 241
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 242
            echo "              <li class=\"wow fadeInDown\">
                <figure class=\"featured_img\">
                    <a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img width=\"550\" height=\"400\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo " \" alt=\"img\"></a>
                </figure>
                <article class=\"featured_article\">
                  
                  <h2 class=\"article_titile\"><a href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></h2>
                  <p>";
            // line 249
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["entity"], "contenue", array()), 0, 100), "html", null, true);
            echo "...</p>
                </article>
              </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "            
             
            
            </ul><!-- End featured post -->
            <!-- start post pagination -->
          <!--   <nav>
              <ul class=\"pagination\">
                <li><a href=\"#\"><span aria-hidden=\"true\">&laquo;</span><span class=\"sr-only\">Previous</span></a></li>
                <li><a href=\"#\">1</a></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\"><span aria-hidden=\"true\">&raquo;</span><span class=\"sr-only\">Next</span></a></li>
              </ul>
            </nav>-->
            <!-- End post pagination -->
            <center> <font color=\"blue\" size=\"5\">  <b> ";
        // line 270
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "<b></font></center>
          </div>
        </div>
               
               ";
    }

    // line 281
    public function block_footer($context, array $blocks = array())
    {
        // line 282
        echo "                
                
                <footer id=\"footer\">
    <div class=\"footer_top\">
      <div class=\"container\">
        <div class=\"row\">          
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget wow fadeInLeftBig\">
              <h2>Categories</h2>
              <ul class=\"labels_nav\">
                   ";
        // line 292
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 293
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
            echo "</a></li>            
        
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                
             
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget\">
              <h2>Best Article</h2>
              <ul class=\"ppost_nav wow fadeInLeftBig\">
               
                ";
        // line 306
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 307
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 308
                echo "                <li>
                  <div class=\"media\">
                    <a href=\"";
                // line 310
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"media-left\">
                      <img  width=\"35\" height=\"35\" src=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    </a>
                    <div class=\"media-body\">
                    <a class=\"catg_title\" href=\" ";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "titre", array()), "html", null, true);
                echo "</a>
                    </div>
                  </div>
                </li>   
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                 ";
        }
        // line 320
        echo " 
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget wow fadeInRightBig\">
              <h2>Contact Us</h2>
                <ul class=\"labels_nav\">
                   
            <li><a href=\"# \" class=\"\">eMail: groovyvisions@gmail.com</a></li>  
            <li><a href=\"# \" class=\"\">Phone: (+216)50.373.828</a></li> 
                                            <div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4&appId=847336061967969\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<br><br>&nbsp; &nbsp; &nbsp;<div class=\"fb-like\" width=\"250\" data-href=\"https://www.facebook.com/groovyvisions\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
             
        
             
                
             
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget wow fadeInRightBig\">
              <h2>Follow US</h2>
             <ul class=\"social_nav\">
              <li><a href=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.facebook.com/groovyvisions"), "html", null, true);
        echo "\" target=\"top\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
            
            </ul>
           
            </div>
          </div>
        </div>
      </div>  
    </div>
    <div class=\"footer_bottom\">
      <div class=\"container\">
        <p class=\"copyright\">All rights reserved <a href=\"index.html\">2017</a></p>
            <p class=\"developer\">Developed By <a  style=\"color: white;\" href=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.ntt-business.com"), "html", null, true);
        echo "\" rel=\"nofollow\"><front color=\"#ffffff\"><u>Next Target Technology</u></front></a></p>
      </div>  
    </div>
  </footer>
               ";
    }

    public function getTemplateName()
    {
        return "NewsFrontBundle:Articles:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 366,  612 => 352,  578 => 320,  575 => 319,  562 => 314,  555 => 311,  551 => 310,  547 => 308,  543 => 307,  539 => 306,  527 => 296,  515 => 293,  511 => 292,  499 => 282,  496 => 281,  487 => 270,  468 => 253,  458 => 249,  452 => 248,  442 => 244,  438 => 242,  434 => 241,  425 => 234,  422 => 233,  398 => 208,  387 => 206,  383 => 205,  367 => 191,  364 => 190,  351 => 185,  343 => 181,  339 => 180,  334 => 177,  330 => 176,  326 => 175,  317 => 168,  314 => 167,  298 => 144,  295 => 143,  282 => 138,  274 => 134,  270 => 133,  265 => 130,  261 => 129,  257 => 128,  238 => 111,  235 => 110,  222 => 105,  214 => 101,  210 => 100,  205 => 97,  201 => 96,  197 => 95,  186 => 86,  182 => 84,  176 => 83,  165 => 77,  158 => 74,  153 => 71,  150 => 70,  146 => 69,  142 => 68,  134 => 62,  131 => 61,  121 => 50,  118 => 49,  105 => 47,  100 => 46,  98 => 45,  89 => 38,  86 => 37,  74 => 24,  62 => 21,  58 => 20,  54 => 19,  47 => 15,  36 => 6,  33 => 5,);
    }
}
