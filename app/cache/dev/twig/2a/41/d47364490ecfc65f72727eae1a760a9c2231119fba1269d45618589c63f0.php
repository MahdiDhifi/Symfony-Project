<?php

/* NewsAdminBundle:Articles:edit.html.twig */
class __TwigTemplate_2a41d47364490ecfc65f72727eae1a760a9c2231119fba1269d45618589c63f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsAdminBundle::layout.html.twig");

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'categories' => array($this, 'block_categories'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NewsAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_form($context, array $blocks = array())
    {
        // line 5
        echo "  <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                            Forms
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-edit\"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                   
               
                        
                        
                         <form  role=\"form\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"form-group\">
                                 <label>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Title:"));
        echo "</label>
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                            </div>
                             
                         
                            
                                            <div class=\"form-group\">
                                 <label>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label" => "Category:"));
        echo "</label>
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category")));
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
                            </div>
                                <div class=\"form-group\">
                                 <label>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Photo:"));
        echo "</label>
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'label', array("label" => "Content:"));
        echo "</label>
                              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                                      <div class=\"form-group\">
                                 <label>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'errors');
        echo "
                                
                            </div>
                  
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'errors');
        echo "
                                
                            </div>
                  
                                        <div class=\"form-group\">
                                 <label>";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'label', array("label" => "Video:"));
        echo "</label>
                                ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Video")));
        echo "
                                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'errors');
        echo "
                            </div>
                          

         ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary")));
        echo "
                <button type=\"reset\" class=\"btn btn-lg btn-danger\">Annuler</button>
                          
                            ";
        // line 152
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                          
                         

                        </form>

                    
                   
                       
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
";
    }

    // line 173
    public function block_categories($context, array $blocks = array())
    {
        // line 174
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 175
            echo "                              <li>
                                <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "titre", array()), "html", null, true);
            echo "</a>
                            </li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 179,  357 => 176,  354 => 175,  349 => 174,  346 => 173,  322 => 152,  316 => 149,  309 => 145,  305 => 144,  301 => 143,  293 => 138,  289 => 137,  285 => 136,  277 => 131,  272 => 129,  268 => 128,  260 => 123,  256 => 122,  252 => 121,  244 => 116,  239 => 114,  235 => 113,  225 => 106,  221 => 105,  217 => 104,  209 => 99,  204 => 97,  200 => 96,  191 => 90,  187 => 89,  183 => 88,  175 => 83,  170 => 81,  166 => 80,  156 => 73,  152 => 72,  148 => 71,  140 => 66,  135 => 64,  131 => 63,  123 => 58,  119 => 57,  115 => 56,  107 => 51,  102 => 49,  98 => 48,  92 => 45,  88 => 44,  84 => 43,  75 => 37,  71 => 36,  67 => 35,  62 => 33,  32 => 5,  29 => 4,);
    }
}
