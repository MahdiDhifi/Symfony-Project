<?php

/* NewsFrontBundle:Articles:contact.html.twig */
class __TwigTemplate_dc31a9f6e76f55740ee53208f8052af18bfccbda64c762a8c484fcc1cb250a76 extends Twig_Template
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
            echo "            
            <li><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listarticles", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "titre", array()), "html", null, true);
            echo "</a></li>            
       
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            <li  class=\"active\" ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contacteradmin");
        echo "\">Contact Us</a></li>
          </ul>           
        </div><!--/.nav-collapse -->
       
      </div>
    </nav>
        ";
    }

    // line 38
    public function block_slider($context, array $blocks = array())
    {
        // line 39
        echo "      <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t\t<!-- start featured slider -->
\t\t\t\t<div class=\"featured_slider\">
\t\t\t\t   <!-- Set up your HTML -->
\t\t\t\t   <h2 class=\"featured_title\">
                                        <MARQUEE SCROLLDELAY=\"137\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                                          ";
        // line 46
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            // line 47
            echo "                                           ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
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
            // line 50
            echo "                                           ";
        }
        // line 51
        echo "                                         </MARQUEE>
                                        </h2>
\t\t\t\t 
\t\t\t\t</div><!-- End featured slider -->
        </div>
      </div>  
      ";
    }

    // line 62
    public function block_left($context, array $blocks = array())
    {
        // line 63
        echo "                <div class=\"col-lg-3 col-md-3 col-sm-4\">
          <div class=\"left_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
              <h2>Latest Video</h2>
              <ul class=\"post_nav\">
";
        // line 69
        if ((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) {
            echo "   
                                      ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest"))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 71
                echo "                                           ";
                if (($this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()) != null)) {
                    // line 72
                    echo "\t\t\t\t\t<div class=\"single_iteam\">
\t\t\t\t\t   <li>
                  <figure class=\"effect-lily\">
                    <iframe width=\"270\" height=\"150\" src=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.youtube.com/embed/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["latest"]) ? $context["latest"] : $this->getContext($context, "latest")), $context["i"], array(), "array"), "video", array()), "html", null, true);
                    echo "\" frameborder=\"0\" allowfullscreen></iframe>
                    
                      <figcaption>
                      <a href=\"";
                    // line 78
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
                // line 84
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                     
                                        ";
        }
        // line 87
        echo "              
              </ul>
            </div><!-- End single widget -->
            
            
              <div class=\"single_widget\">
              <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 96
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 98
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 106
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
            // line 111
            echo "                 ";
        }
        // line 112
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
        // line 129
        if ((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive"))) {
            echo "   
             ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["archive"]) ? $context["archive"] : $this->getContext($context, "archive")));
            foreach ($context['_seq'] as $context["_key"] => $context["arc"]) {
                // line 131
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["arc"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["arc"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 139
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
            // line 144
            echo "                 ";
        }
        // line 145
        echo "                </marquee>
               
                
    

              </ul>
                       <br>
        
            </div><!-- End single widget -->
          </div>
        </div>
           
               ";
    }

    // line 168
    public function block_right($context, array $blocks = array())
    {
        // line 169
        echo "          <div class=\"col-lg-3 col-md-3 col-sm-12\">
          <div class=\"right_sidebar\">
            <!-- start single widget -->
            <div class=\"single_widget\">
               <h2>Best Articles</h2>
              <ul class=\"ppost_nav wow fadeInDown\">
                  <MARQUEE SCROLLDELAY=\"137\" direction=\"up\" height=\"473\" onMouseOver=\"stop()\" onMouseOut=\"start()\">
                  ";
        // line 176
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 178
                echo "     
                <li>
                  <div class=\"media\">
                    <a class=\"media-left\" href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
                echo "\">
                      <img  width=\"50\" height=\"50\" src=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    
                    </a>
                    <div class=\"media-body\">
                      <a class=\"catg_title\" href=\" ";
                // line 186
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
            // line 191
            echo "                 ";
        }
        // line 192
        echo "                </marquee>
               
                
    

              </ul>
            </div><!-- End single widget -->
            
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
<div width=\"273\" class=\"fb-comments\" data-href=\"https://www.facebook.com/groovyvisions\" data-numposts=\"7\"></div>         
            </div><!-- End single widget -->
          </div>
        </div>
         
              ";
    }

    // line 233
    public function block_content($context, array $blocks = array())
    {
        // line 234
        echo "            <div class=\"col-lg-6 col-md-6 col-sm-8\">
          <div class=\"middle_content\">
              <h2>Contact us</h2>
                
              <div class=\"contact_area wow fadeInLeftBig\">
            <form class=\"contact_form\" role=\"form\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                <font color=\"lime\" size=\"3\"> <b>";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["send"]) ? $context["send"] : $this->getContext($context, "send")), "html", null, true);
        echo "</b></font>
                <br>  
              
              
              
                 <div class=\"form-group\">
                              
                              ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "First Name")));
        echo "
                                    <front color=\"red\"> ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first", array()), 'errors');
        echo " </front> 
                                
                            </div>
                                   
                                     <div class=\"form-group\">
                           
                              ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Last Name")));
        echo "
                                    <front> ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last", array()), 'errors');
        echo " </front> 
                                
                            </div>
                                   
                              <div class=\"form-group\">
                            
                              ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your adress mail")));
        echo "
                                 <front color=\"red\">    ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "   </front> 
                                
                            </div>
                                   
                                     <div class=\"form-group\">
                              
                              ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Subject")));
        echo "
                                  <front color=\"red\">   ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'errors');
        echo " </front > 
                                
                            </div>
                                   
                                        <div class=\"form-group\">
                               
                              ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Your message")));
        echo "
                              <front color=\"red\">  ";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'errors');
        echo " </front>
                                
                            </div>    
                              
            ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-danger")));
        echo "
            </form>
          </div>
          </div>
        </div>
           ";
    }

    // line 291
    public function block_footer($context, array $blocks = array())
    {
        // line 292
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
        // line 302
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 303
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
        // line 306
        echo "                
             
              </ul>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm3\">
            <div class=\"footer_widget\">
              <h2>Popular Articles</h2>
              <ul class=\"ppost_nav wow fadeInLeftBig\">
               
                ";
        // line 316
        if ((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most"))) {
            echo "   
             ";
            // line 317
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 318
                echo "                <li>
                  <div class=\"media\">
                    <a href=\"";
                // line 320
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detailarticle", array("id" => $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "id", array()))), "html", null, true);
                echo "\" class=\"media-left\">
                      <img  width=\"35\" height=\"35\" src=\"";
                // line 321
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["most"]) ? $context["most"] : $this->getContext($context, "most")), $context["m"], array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Photo not found \">
                    </a>
                    <div class=\"media-body\">
                    <a class=\"catg_title\" href=\" ";
                // line 324
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
            // line 329
            echo "                 ";
        }
        // line 330
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
        // line 362
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
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.ntt-business.com"), "html", null, true);
        echo "\" rel=\"nofollow\"><front color=\"#ffffff\"><u>Next Target Technology</u></front></a></p>
      </div>  
    </div>
  </footer>
               ";
    }

    public function getTemplateName()
    {
        return "NewsFrontBundle:Articles:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 376,  633 => 362,  599 => 330,  596 => 329,  583 => 324,  576 => 321,  572 => 320,  568 => 318,  564 => 317,  560 => 316,  548 => 306,  536 => 303,  532 => 302,  520 => 292,  517 => 291,  507 => 280,  500 => 276,  496 => 275,  487 => 269,  483 => 268,  474 => 262,  470 => 261,  461 => 255,  457 => 254,  448 => 248,  444 => 247,  434 => 240,  426 => 234,  423 => 233,  399 => 208,  388 => 206,  384 => 205,  369 => 192,  366 => 191,  353 => 186,  345 => 182,  341 => 181,  336 => 178,  332 => 177,  328 => 176,  319 => 169,  316 => 168,  300 => 145,  297 => 144,  284 => 139,  276 => 135,  272 => 134,  267 => 131,  263 => 130,  259 => 129,  240 => 112,  237 => 111,  224 => 106,  216 => 102,  212 => 101,  207 => 98,  203 => 97,  199 => 96,  188 => 87,  184 => 85,  178 => 84,  167 => 78,  160 => 75,  155 => 72,  152 => 71,  148 => 70,  144 => 69,  136 => 63,  133 => 62,  123 => 51,  120 => 50,  107 => 48,  102 => 47,  100 => 46,  91 => 39,  88 => 38,  76 => 25,  65 => 22,  62 => 21,  58 => 20,  54 => 19,  47 => 15,  36 => 6,  33 => 5,);
    }
}
