<?php

/* NewsAdminBundle:Articles:detail.html.twig */
class __TwigTemplate_3d2b22bceff296e06fb070c04fdc9cb47eb3f6c7a222fa46c9154edf6dc85ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsAdminBundle::layout.html.twig");

        $this->blocks = array(
            'table' => array($this, 'block_table'),
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
    public function block_table($context, array $blocks = array())
    {
        echo "             
    <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                           Article details
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"#\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> Details / ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
       <h2>  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</h2>              
    <p align=\"right\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    <button  type=\"button\" class=\"btn btn-lg btn-primary\">Edit Article</button>
                </a>
                
    </p>
                
                      
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                               
                                <tr>  <td colspan=\"2\"><center><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
        echo "\" width=\"500\" height=\"300\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "\"></center></td> </tr>
                                    <tr><td>Titre</td>  <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td> </tr>
                                    <tr><td>Categorie</td><td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categorie", array()), "titre", array()), "html", null, true);
        echo "</td></tr>
                                    <tr><td>Date</td>  <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</td> </tr>   
                                     <tr> <td>Content</td>  <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenue", array()), "html", null, true);
        echo "</td></tr>
                                     ";
        // line 44
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image1", array()) != null)) {
            // line 45
            echo "                                          <tr> <td>Other photo</td>  <td> <center><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image1", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"></center></td></tr>
                                         ";
        }
        // line 47
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg1", array()) != null)) {
            // line 48
            echo "                                          <tr> <td>Other section</td>  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg1", array()), "html", null, true);
            echo "</td></tr>
                                         ";
        }
        // line 50
        echo "                                           ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image2", array()) != null)) {
            // line 51
            echo "                                               <tr> <td>Other photo</td> <td><center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image2", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"></center></td></tr>
                                         ";
        }
        // line 53
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg2", array()) != null)) {
            // line 54
            echo "                                          <tr> <td>Other section</td>  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg2", array()), "html", null, true);
            echo "</td></tr>
                                         ";
        }
        // line 56
        echo "                                         
                                           ";
        // line 57
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image3", array()) != null)) {
            // line 58
            echo "                                           <tr> <td>Other photo</td> <td><center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image3", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"></center></td></tr>
                                          ";
        }
        // line 60
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg3", array()) != null)) {
            // line 61
            echo "                                          <tr> <td>Other section</td>  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg3", array()), "html", null, true);
            echo "</td></tr>
                                         ";
        }
        // line 63
        echo "                                         
                                         
                                           ";
        // line 65
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image4", array()) != null)) {
            // line 66
            echo "                                           <tr> <td>Other photo</td> <td><center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image4", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"></center></td></tr>
                                          ";
        }
        // line 68
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg4", array()) != null)) {
            // line 69
            echo "                                          <tr> <td>Other section</td>  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg4", array()), "html", null, true);
            echo "</td></tr>
                                         ";
        }
        // line 71
        echo "                                         
                                         
                                           ";
        // line 73
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image5", array()) != null)) {
            // line 74
            echo "                                            <tr> <td>Other photo</td> <td><center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image5", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
            echo "\"></center></td></tr>
                                         ";
        }
        // line 76
        echo "                                     ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg5", array()) != null)) {
            // line 77
            echo "                                          <tr> <td>Other section</td>  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parg5", array()), "html", null, true);
            echo "</td></tr>
                                         ";
        }
        // line 79
        echo "                                         ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "video", array()) != null)) {
            // line 80
            echo "                                    <tr><td colspan=\"2\"><center>
                                        <iframe width=\"700\" height=\"370\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.youtube.com/embed/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "video", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
                                    </center></td></tr>
                    ";
        }
        // line 84
        echo "                     <tbody>
 
  
                                    

                                </tbody>
                            </table>
                        </div>
                   
                </div>
               
                <!-- /.row -->


                

            </div>
            <!-- /.container-fluid -->

        </div>
      
      
        ";
    }

    // line 108
    public function block_categories($context, array $blocks = array())
    {
        // line 109
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 110
            echo "                              <li>
                                <a href=\"";
            // line 111
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
        // line 114
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Articles:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 114,  275 => 111,  272 => 110,  267 => 109,  264 => 108,  238 => 84,  231 => 81,  228 => 80,  225 => 79,  219 => 77,  216 => 76,  205 => 74,  203 => 73,  199 => 71,  193 => 69,  190 => 68,  179 => 66,  177 => 65,  173 => 63,  167 => 61,  164 => 60,  153 => 58,  151 => 57,  148 => 56,  142 => 54,  139 => 53,  128 => 51,  125 => 50,  119 => 48,  116 => 47,  105 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  78 => 39,  65 => 29,  60 => 27,  49 => 19,  29 => 3,);
    }
}
