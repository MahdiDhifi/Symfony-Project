<?php

/* NewsFrontBundle:Articles:list.html.twig */
class __TwigTemplate_2426f1272598612a06df3d972cbdfd279b3653dd1723f2c89c205352c07a3c62 extends Twig_Template
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
            <li ><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 21
            echo "             ";
            if (($this->getAttribute($context["cat"], "id", array()) == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 22
                echo "            <li class=\"active\" ><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
                echo "</a></li>            
        ";
            } else {
                // line 24
                echo "           <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
                echo "</a></li> 
            ";
            }
            // line 26
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contacteradmin");
        echo "\">Contact Us</a></li>
          </ul>           
        </div><!--/.nav-collapse -->
       
      </div>
    </nav>
        ";
    }

    // line 40
    public function block_slider($context, array $blocks = array())
    {
        // line 41
        echo "      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t<!-- start featured slider -->
\t\t\t\t<div class=\"featured_slider\">
\t\t\t\t   <!-- Set up your HTML -->
\t\t\t\t   <h2 class=\"featured_title\">
                                        <MARQUEE SCROLLDELAY=\"137\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                                          ";
        // line 48
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            // line 49
            echo "                                           ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
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
            // line 52
            echo "                                           ";
        }
        // line 53
        echo "                                         </MARQUEE>
                                        </h2>
\t\t\t\t 
\t\t\t\t</div><!-- End featured slider -->
        </div>
      </div>  
      ";
    }

    // line 64
    public function block_left($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"col-lg-3 col-md-3 col-sm-4\">
          <div class=\"left_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Latest Video</h2>
              <ul class=\"post_nav\">
";
        // line 71
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            echo "   
                                      ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "                                          ";
                if (($this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()) != null)) {
                    // line 74
                    echo "\t\t\t\t\t<div class=\"single_iteam\">
\t\t\t\t\t   <li>
                  <figure class=\"effect-lily\">
                    <iframe width=\"270\" height=\"150\" src=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.youtube.com/embed/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()), "html", null, true);
                    echo "\" frameborder=\"0\" allowfullscreen></iframe>
                    
                      <figcaption>
                      <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "titre", array()), "html", null, true);
                    echo "</a>
                    </figcaption>     
                  </figure>
                </li>
                                        </div>
\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                      
                                        ";
        }
        // line 89
        echo "              
              </ul>
            </div><!-- End single widget -->
            
            
              <div class=\"single_widget\">
              <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 98
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 100
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 108
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
            // line 113
            echo "                 ";
        }
        // line 114
        echo "                </marquee>
               
                
    

              </ul>
                  
        
            </div>
            
            
            
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Archive</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 131
        if ((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive"))) {
            echo "   
             ";
            // line 132
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive")));
            foreach ($context['_seq'] as $context["_key"] => $context["arc"]) {
                // line 133
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["arc"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["arc"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 141
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
            // line 146
            echo "                 ";
        }
        // line 147
        echo "                </marquee>
               
                
    

              </ul>
                       <br>
        
            </div><!-- End single widget -->
          </div>
        </div>
           
               ";
    }

    // line 170
    public function block_right($context, array $blocks = array())
    {
        // line 171
        echo "          <div class=\"col-lg-3 col-md-3 col-sm-12\">
          <div class=\"right_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" height=\"473\" direction=\"up\"  onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 178
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 179
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 180
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 188
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
            // line 193
            echo "                 ";
        }
        // line 194
        echo "                </marquee>
               
                
    

              </ul>
            </div><!-- End single widget -->
           
            <!-- start single widget -->
            <div class=\"single_widget\"> 
             <h2>Categories</h2>
             <ul>
               
              ";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 208
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
        // line 210
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

    // line 235
    public function block_content($context, array $blocks = array())
    {
        // line 236
        echo "                    
            <div class=\"col-lg-6 col-md-6 col-sm-8\">
          <div class=\"middle_content\">
            <h2>Articles</h2>

            <!-- start featured post -->
            <ul class=\"featured_nav\">
                ";
        // line 243
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 244
            echo "              <li class=\"wow fadeInDown\">
                <figure class=\"featured_img\">
                    <a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img width=\"550\" height=\"400\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo " \" alt=\"img\"></a>
                </figure>
                <article class=\"featured_article\">
                  
                  <h2 class=\"article_titile\"><a href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></h2>
                  <p>";
            // line 251
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["entity"], "contenue", array()), 0, 100), "html", null, true);
            echo "...</p>
                </article>
              </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
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
        // line 272
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "<b></font></center>
          </div>
        </div>
               
               ";
    }

    // line 283
    public function block_footer($context, array $blocks = array())
    {
        // line 284
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
        // line 294
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 295
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
        // line 298
        echo "                
             
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget\">
              <h2>Best Article</h2>
              <ul class=\"ppost_nav wow fadeInLeftBig\">
               
               ";
        // line 308
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 309
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 310
                echo "                <li>
                  <div class=\"media\">
                    <a href=\"";
                // line 312
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"media-left\">
                      <img  width=\"35\" height=\"35\" src=\"";
                // line 313
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    </a>
                    <div class=\"media-body\">
                    <a class=\"catg_title\" href=\" ";
                // line 316
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
            // line 321
            echo "                 ";
        }
        // line 322
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
        // line 355
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
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.ntt-business.com"), "html", null, true);
        echo "\" rel=\"nofollow\"><front color=\"#ffffff\"><u>Next Target Technology</u></front></a></p>
      </div>  
    </div>
  </footer>
               ";
    }

    public function getTemplateName()
    {
        return "NewsFrontBundle:Articles:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 370,  625 => 355,  590 => 322,  587 => 321,  574 => 316,  567 => 313,  563 => 312,  559 => 310,  555 => 309,  551 => 308,  539 => 298,  527 => 295,  523 => 294,  511 => 284,  508 => 283,  499 => 272,  480 => 255,  470 => 251,  464 => 250,  454 => 246,  450 => 244,  446 => 243,  437 => 236,  434 => 235,  410 => 210,  399 => 208,  395 => 207,  380 => 194,  377 => 193,  364 => 188,  356 => 184,  352 => 183,  347 => 180,  343 => 179,  339 => 178,  330 => 171,  327 => 170,  311 => 147,  308 => 146,  295 => 141,  287 => 137,  283 => 136,  278 => 133,  274 => 132,  270 => 131,  251 => 114,  248 => 113,  235 => 108,  227 => 104,  223 => 103,  218 => 100,  214 => 99,  210 => 98,  199 => 89,  195 => 87,  189 => 86,  178 => 80,  171 => 77,  166 => 74,  163 => 73,  159 => 72,  155 => 71,  147 => 65,  144 => 64,  134 => 53,  131 => 52,  118 => 50,  113 => 49,  111 => 48,  102 => 41,  99 => 40,  87 => 27,  81 => 26,  73 => 24,  65 => 22,  62 => 21,  58 => 20,  54 => 19,  47 => 15,  36 => 6,  33 => 5,);
    }
}
