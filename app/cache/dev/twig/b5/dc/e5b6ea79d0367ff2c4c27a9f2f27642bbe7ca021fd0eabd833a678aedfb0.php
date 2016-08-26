<?php

/* NewsAdminBundle:Articles:list.html.twig */
class __TwigTemplate_b5dce5b6ea79d0367ff2c4c27a9f2f27642bbe7ca021fd0eabd833a678aedfb0 extends Twig_Template
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

    // line 4
    public function block_table($context, array $blocks = array())
    {
        echo "             
    <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                           Articles
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"#\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-table\"></i> All articles
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
           
                 
                    
          ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 32
            echo "                        <h2> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), 0, array(), "array"), "categorie", array()), "titre", array()), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 33
        echo "  
    <p align=\"right\"> 
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("articles_new");
        echo "\">
                     
                    <button type=\"button\" class=\"btn btn-lg btn-primary\">Add article</button>
                </a><br><br>
    </p>      
          
                       
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover table-striped\">
                                <thead>
                                    <tr>
                  <th>N°</th>
                 <th>Date</th>
                <th>Title</th>
                <th>Categorie</th>     
                <th>Content</th>
                <th>Actions</th>
                   </tr>
                    </thead>
                     <tbody>
                         
                                  ";
        // line 56
        $context["i"] = 0;
        // line 57
        echo "
                      ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 59
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "id", array()) == (isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")))) {
                // line 60
                echo "                               ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                echo "  
            <tr>
                <td>";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
                echo "</td>  
                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "titre", array()), "html", null, true);
                echo "</td> 
                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["entity"], "contenue", array()), 0, 17), "html", null, true);
                echo "</td>

                <td>
                     <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feedback", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                      <button title=\"Feedback\" type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-pie-chart\"></i>
                      </button></a>
                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                    
                                                <button title=\"Details\" type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-list-alt\"></i>
                                                </button>
                                            </a>
                                            <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <button title=\"Edit\" type=\"button\" class=\"btn btn-primary btn-circle\"><i class=\"fa fa-edit\"></i>
                                                </button>
                                            </a>
                                            <button title=\"Delete\" type=\"button\" class=\"btn btn-danger btn-circle\" data-toggle=\"modal\" data-target=\"";
                // line 81
                echo twig_escape_filter($this->env, ("#myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
                echo "\"><i class=\"fa fa-times\"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"";
                // line 84
                echo twig_escape_filter($this->env, ("myModal" . $this->getAttribute($context["entity"], "id", array())), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Delete articles ?</h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                              Are you sure you want to delete this article? 
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Delete\"><input type=\"submit\" value=\"Delete\" class=\"btn btn-primary\" onclick=\"this.disabled=true;this.value='Deleting, please wait...';this.form.submit();\" /></a>              
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                </td>
            </tr>
             ";
            }
            // line 107
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                    

                                </tbody>
                            </table>
            <br>
            <center> 
            <div class=\"pagination\">
                 <b> ";
        // line 115
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "<b>
    
</div></center>
                        </div>
                   
                </div>
               
                <!-- /.row -->


                

            </div>
            <!-- /.container-fluid -->

        </div>
      
      
        ";
    }

    // line 135
    public function block_categories($context, array $blocks = array())
    {
        // line 136
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 137
            echo "                              <li>
                                <a href=\"";
            // line 138
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
        // line 141
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Articles:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 141,  241 => 138,  238 => 137,  233 => 136,  230 => 135,  207 => 115,  198 => 108,  192 => 107,  178 => 96,  163 => 84,  157 => 81,  150 => 77,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  122 => 64,  118 => 63,  114 => 62,  108 => 60,  105 => 59,  101 => 58,  98 => 57,  96 => 56,  72 => 35,  68 => 33,  62 => 32,  60 => 31,  29 => 4,);
    }
}
