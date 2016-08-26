<?php

/* NewsAdminBundle:Articles:add.html.twig */
class __TwigTemplate_73c1ed85320df6450d1e33d7b7fe288da7c2fee419377f1e30199a79a50a6936 extends Twig_Template
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

    // line 3
    public function block_form($context, array $blocks = array())
    {
        // line 4
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
                                <i class=\"fa fa-edit\"></i> Add article
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class=\"row\">
                   
                  <form  role=\"form\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <div class=\"form-group\">
                                 <label>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Title:"));
        echo "</label>
                                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Title")));
        echo "
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                            </div>
                             
                          
                            
                                            <div class=\"form-group\">
                                 <label>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'label', array("label" => "Category:"));
        echo "</label>
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Category")));
        echo "
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
                            </div>
                                <div class=\"form-group\">
                                 <label>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label', array("label" => "Photo:"));
        echo "</label>
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'label', array("label" => "Content:"));
        echo "</label>
                              ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenue", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                        <div class=\"form-group\">
                                 <label>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image1", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg1", array()), 'errors');
        echo "
                                
                            </div>
                  
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image2", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg2", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image3", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg3", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                   
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image4", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg4", array()), 'errors');
        echo "
                                
                            </div>
                                   
                                                   <div class=\"form-group\">
                                 <label>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'label', array("label" => "Other photo:"));
        echo "</label>
                                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Photo", "accept" => "image/gif, image/jpeg,image/jpeg, image/bmp, image/png")));
        echo "
                                5MB max par image
                                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image5", array()), 'errors');
        echo "
                            </div>
              
                   
               <div class=\"form-group\">
                               <label>";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'label', array("label" => "Other section:"));
        echo "</label>
                              ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7", "placeholder" => "Content")));
        echo "
                                   ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parg5", array()), 'errors');
        echo "
                                
                            </div>
                  
                                        <div class=\"form-group\">
                                 <label>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'label', array("label" => "Video:"));
        echo "</label>
                                ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Video")));
        echo "
                                ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "video", array()), 'errors');
        echo "
                            </div>
                          

         ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary")));
        echo "
                <button type=\"reset\" class=\"btn btn-lg btn-danger\">Annuler</button>
                          
                            ";
        // line 148
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

    // line 168
    public function block_categories($context, array $blocks = array())
    {
        // line 169
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 170
            echo "                              <li>
                                <a href=\"";
            // line 171
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
        // line 174
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Articles:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 174,  354 => 171,  351 => 170,  346 => 169,  343 => 168,  319 => 148,  313 => 145,  306 => 141,  302 => 140,  298 => 139,  290 => 134,  286 => 133,  282 => 132,  274 => 127,  269 => 125,  265 => 124,  257 => 119,  253 => 118,  249 => 117,  241 => 112,  236 => 110,  232 => 109,  222 => 102,  218 => 101,  214 => 100,  206 => 95,  201 => 93,  197 => 92,  188 => 86,  184 => 85,  180 => 84,  172 => 79,  167 => 77,  163 => 76,  153 => 69,  149 => 68,  145 => 67,  137 => 62,  132 => 60,  128 => 59,  120 => 54,  116 => 53,  112 => 52,  104 => 47,  99 => 45,  95 => 44,  89 => 41,  85 => 40,  81 => 39,  72 => 33,  68 => 32,  64 => 31,  59 => 29,  32 => 4,  29 => 3,);
    }
}
