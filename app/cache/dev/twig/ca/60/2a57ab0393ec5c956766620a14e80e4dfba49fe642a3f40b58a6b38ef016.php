<?php

/* NewsAdminBundle:Articles:feedback.html.twig */
class __TwigTemplate_ca602a57ab0393ec5c956766620a14e80e4dfba49fe642a3f40b58a6b38ef016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NewsAdminBundle::layout.html.twig");

        $this->blocks = array(
            'script' => array($this, 'block_script'),
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
    public function block_script($context, array $blocks = array())
    {
        echo " 
      
       <script type=\"text/javascript\">
        window.onload = function () {
        var chart = new CanvasJS.Chart(\"chartContainer\",
        {
        title:{
        text: \"\"
        },
                exportFileName: \"Pie Chart\",
                exportEnabled: true,
                animationEnabled: true,
                legend:{
                verticalAlign: \"bottom\",
                        horizontalAlign: \"center\"
                },
                data: [
                {
                type: \"pie\",
                        showInLegend: true,
                        toolTipContent: \"{legendText}: <strong>{y}%</strong>\",
                        indexLabel: \"{label} {y}%\",
                        dataPoints: [
                        {  y:";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["good"]) ? $context["good"] : $this->getContext($context, "good")), "html", null, true);
        echo ", legendText: \"Pour\", exploded: true, label: \"Pour\" },
                        {  y:";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["bad"]) ? $context["bad"] : $this->getContext($context, "bad")), "html", null, true);
        echo ", legendText: \"Contre\", label: \"Contre\" },
                     
                        ]
                }
                ]
        });
                chart.render();
                }
                </script>
                 <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/canvasjs.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 38
    public function block_table($context, array $blocks = array())
    {
        echo "             
    <div id=\"page-wrapper\">

            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header\">
                           FeedBack
                        </h1>
                        <ol class=\"breadcrumb\">
                            <li>
                                <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
                            </li>
                            <li class=\"active\">
                                <i class=\"fa fa-pie-chart\"></i> FeedBack   /  ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class=\"row\">
                   
                 
               
              
                
         
                  
    <center><h2> <u> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</u> </h2></center>
                      
                      
                                    <center>
  ";
        // line 72
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "good", array()) != 0) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bad", array()) != 0))) {
            // line 73
            echo "                                        <div id=\"chartContainer\" style=\"height: 300px; width: 100%;\"></div><br>
  ";
        } else {
            // line 75
            echo "      <br><br>
      <b><font size=\"5\" color=\"red\">No vote </font></b>
      <br><br><br>
      ";
        }
        // line 79
        echo "                                        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                    <button  type=\"button\" class=\"btn btn-lg btn-primary\">Detail Article</button>
                </a><br>
                        </center>

                        
                  
                </div>
               
                <!-- /.row -->


                

            </div>
            <!-- /.container-fluid -->

        </div>
      
      
        ";
    }

    // line 101
    public function block_categories($context, array $blocks = array())
    {
        // line 102
        echo "       ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 103
            echo "                              <li>
                                <a href=\"";
            // line 104
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
        // line 107
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "NewsAdminBundle:Articles:feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 107,  172 => 104,  169 => 103,  164 => 102,  161 => 101,  135 => 79,  129 => 75,  125 => 73,  123 => 72,  116 => 68,  99 => 54,  79 => 38,  73 => 36,  61 => 27,  57 => 26,  30 => 3,);
    }
}
