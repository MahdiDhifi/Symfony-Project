<?php

/* NewsFrontBundle:Articles:detail.html.twig */
class __TwigTemplate_c3280291c6b8be0f1b7c2b02ccce16fbac591d20df44f762eef35eb864d3a46f extends Twig_Template
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
            if (($this->getAttribute($context["cat"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "id", array()))) {
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
                echo "                                           ";
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
\t\t\t\t\t ";
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
                       <br>
        
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
                  <MARQUEE SCROLLDELAY=\"137\" height=\"473\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
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
<div width=\"273\" class=\"fb-comments\" data-href=\"https://www.facebook.com/groovyvisions\" data-numposts=\"7\"></div>
            </div><!-- End single widget -->
          </div>
        </div>
         
              ";
    }

    // line 235
    public function block_content($context, array $blocks = array())
    {
        // line 236
        echo "            <div class=\"col-lg-6 col-md-6 col-sm-8\">
          <div class=\"middle_content\">
              
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "titre", array()), "html", null, true);
        echo "</a></li>
              <li class=\"active\">";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</li>
            </ol>        
            <div class=\"single_page_area\">
              <h1>";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</h1>
              <div class=\"post_commentbox\">
               
                <span><i class=\"fa fa-calendar\"></i>";
        // line 248
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                <span><a href=\"#\"><i class=\"fa fa-tags\"></i>";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "titre", array()), "html", null, true);
        echo "</a></span>
                    <span>  <a href=\"#\">  <i class=\"fa fa-thumbs-o-up\"></i>";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "good", array()), "html", null, true);
        echo "</a></span>
                <span> <a href=\"#\">  <i class=\"fa fa-thumbs-o-down\"></i>";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bad", array()), "html", null, true);
        echo "</a></span>
              
              </div>
              <div class=\"single_content\">
                   ";
        // line 255
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()) != null)) {
            // line 256
            echo "                  <center>  
               <img width=\"573\" height=\"370\" src=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                     ";
        }
        // line 260
        echo "                  <blockquote>
                    ";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenue", array()), "html", null, true);
        echo "  
                  </blockquote>
                  
                   ";
        // line 264
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image1", array()) != null)) {
            // line 265
            echo "                         <center>  
               <img width=\"400\" height=\"300\" src=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image1", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                                        
                                         ";
        }
        // line 270
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg1", array()) != null)) {
            // line 271
            echo "                                     <blockquote>   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg1", array()), "html", null, true);
            echo "  </blockquote>
                                         ";
        }
        // line 273
        echo "                                         
                                         
                                         
                                         ";
        // line 276
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image2", array()) != null)) {
            // line 277
            echo "                         <center>  
               <img width=\"400\" height=\"300\" src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image2", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                                        
                                         ";
        }
        // line 282
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg2", array()) != null)) {
            // line 283
            echo "                                     <blockquote>   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg2", array()), "html", null, true);
            echo "  </blockquote>
                                         ";
        }
        // line 285
        echo "                                  
                                         
                                         
                                         
                                         
                                         ";
        // line 290
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image3", array()) != null)) {
            // line 291
            echo "                         <center>  
               <img width=\"400\" height=\"300\" src=\"";
            // line 292
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image3", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                                        
                                         ";
        }
        // line 296
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg3", array()) != null)) {
            // line 297
            echo "                                     <blockquote>   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg3", array()), "html", null, true);
            echo "  </blockquote>
                                         ";
        }
        // line 299
        echo "                                         
                                         
                                         
                                         
                                         ";
        // line 303
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image4", array()) != null)) {
            // line 304
            echo "                         <center>  
               <img width=\"400\" height=\"300\" src=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image4", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                                        
                                         ";
        }
        // line 309
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg4", array()) != null)) {
            // line 310
            echo "                                     <blockquote>   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg4", array()), "html", null, true);
            echo "  </blockquote>
                                         ";
        }
        // line 312
        echo "                                         
                                         
                                         
                                         ";
        // line 315
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image5", array()) != null)) {
            // line 316
            echo "                         <center>  
               <img width=\"400\" height=\"300\" src=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image5", array()), "html", null, true);
            echo "\" alt=\"photo not found\">
                     </center>
                                        
                                         ";
        }
        // line 321
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg5", array()) != null)) {
            // line 322
            echo "                                     <blockquote>   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg5", array()), "html", null, true);
            echo "  </blockquote>
                                         ";
        }
        // line 324
        echo "                                         
                  ";
        // line 325
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "video", array()) != null)) {
            // line 326
            echo "                  <center>  
             
                    <iframe width=\"270\" height=\"150\" src=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.youtube.com/embed/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "video", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                    
                  </center>
                  ";
        }
        // line 332
        echo "                  <br><br>
                 <center>
                     <a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pour", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" >  <button class=\"btn btn-blue\" ><b>&nbsp; Like   <i class=\"fa fa-thumbs-o-up\"></i>&nbsp;&nbsp;</b></button></a>
               &nbsp;&nbsp;&nbsp;
                     <a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contre", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" > <button class=\"btn btn-danger\" ><b>Dislike  <i class=\"fa fa-thumbs-o-down\"></i></b></button></a>
                
                     </center>
              </div>
              
            </div>  

          </div>
    
          <div class=\"related_post\">
            <h2>Related Articles <i class=\"fa fa-thumbs-o-up\"></i></h2>
         
              
                

                  ";
        // line 351
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 6)) {
            echo "  
                      
             ";
            // line 353
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 354
                echo "     
                
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 357
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">
                       <img width=\"150\" height=\"150\" src=\"";
                // line 358
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                     <div class=\"media-body\">
                         <b>  <a class=\"catg_title\" href=\" ";
                // line 360
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "titre", array()), "html", null, true);
                echo "</a>  </b>                              
                      <br>    <a class=\"catg_titl\" href=\" ";
                // line 361
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "contenue", array()), 0, 30), "html", null, true);
                echo "</a>   
                     </div>
                    </a>
                   
                  </div>
                 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            echo "                
                 ";
        }
        // line 370
        echo "                       ";
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) < 6)) {
            echo "   
             ";
            // line 371
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 372
                echo "     
                
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 375
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">
                       <img width=\"150\" height=\"150\" src=\"";
                // line 376
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                     <div class=\"media-body\">
                         <b>  <a class=\"catg_title\" href=\" ";
                // line 378
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "titre", array()), "html", null, true);
                echo "</a>  </b>                              
                      <br>    <a class=\"catg_titl\" href=\" ";
                // line 379
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $context["m"], array(), "array"), "contenue", array()), 0, 37), "html", null, true);
                echo "...</a>   
                     </div>
                    </a>
                   
                  </div>
                 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 386
            echo "                 ";
        }
        // line 387
        echo "                 
               
          </div>
                
      
        </div>
           ";
    }

    // line 399
    public function block_footer($context, array $blocks = array())
    {
        // line 400
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
        // line 410
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 411
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
        // line 414
        echo "                
             
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget\">
              <h2>Best Article</h2>
              <ul class=\"ppost_nav wow fadeInLeftBig\">
               
                ";
        // line 424
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 425
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 426
                echo "                <li>
                  <div class=\"media\">
                    <a href=\"";
                // line 428
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"media-left\">
                      <img  width=\"35\" height=\"35\" src=\"";
                // line 429
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    </a>
                    <div class=\"media-body\">
                    <a class=\"catg_title\" href=\" ";
                // line 432
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
            // line 437
            echo "                 ";
        }
        // line 438
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
        // line 470
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
              <p class=\"developer\">Developed By <a style=\"color: white;\" href=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.ntt-business.com"), "html", null, true);
        echo "\" rel=\"nofollow\"><front color=\"#ffffff\"><u>Next Target Technology</u></front></a></p>
      </div>  
    </div>
  </footer>
               ";
    }

    public function getTemplateName()
    {
        return "NewsFrontBundle:Articles:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 484,  905 => 470,  871 => 438,  868 => 437,  855 => 432,  848 => 429,  844 => 428,  840 => 426,  836 => 425,  832 => 424,  820 => 414,  808 => 411,  804 => 410,  792 => 400,  789 => 399,  779 => 387,  776 => 386,  761 => 379,  755 => 378,  749 => 376,  745 => 375,  740 => 372,  736 => 371,  731 => 370,  727 => 368,  712 => 361,  706 => 360,  700 => 358,  696 => 357,  691 => 354,  687 => 353,  682 => 351,  664 => 336,  659 => 334,  655 => 332,  647 => 328,  643 => 326,  641 => 325,  638 => 324,  632 => 322,  629 => 321,  621 => 317,  618 => 316,  616 => 315,  611 => 312,  605 => 310,  602 => 309,  594 => 305,  591 => 304,  589 => 303,  583 => 299,  577 => 297,  574 => 296,  566 => 292,  563 => 291,  561 => 290,  554 => 285,  548 => 283,  545 => 282,  537 => 278,  534 => 277,  532 => 276,  527 => 273,  521 => 271,  518 => 270,  510 => 266,  507 => 265,  505 => 264,  499 => 261,  496 => 260,  489 => 257,  486 => 256,  484 => 255,  477 => 251,  473 => 250,  469 => 249,  465 => 248,  459 => 245,  453 => 242,  447 => 241,  443 => 240,  437 => 236,  434 => 235,  410 => 210,  399 => 208,  395 => 207,  380 => 194,  377 => 193,  364 => 188,  356 => 184,  352 => 183,  347 => 180,  343 => 179,  339 => 178,  330 => 171,  327 => 170,  311 => 147,  308 => 146,  295 => 141,  287 => 137,  283 => 136,  278 => 133,  274 => 132,  270 => 131,  251 => 114,  248 => 113,  235 => 108,  227 => 104,  223 => 103,  218 => 100,  214 => 99,  210 => 98,  199 => 89,  195 => 87,  189 => 86,  178 => 80,  171 => 77,  166 => 74,  163 => 73,  159 => 72,  155 => 71,  147 => 65,  144 => 64,  134 => 53,  131 => 52,  118 => 50,  113 => 49,  111 => 48,  102 => 41,  99 => 40,  87 => 27,  81 => 26,  73 => 24,  65 => 22,  62 => 21,  58 => 20,  54 => 19,  47 => 15,  36 => 6,  33 => 5,);
    }
}
