<?php

/* layout.html.twig */
class __TwigTemplate_df0926ff2be83248f0190dbed295b364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

\t<title></title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<meta name=\"viewport\" content=\"width=device-width\">

\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/css/bootstrap.min.css\">
\t<style>
\tbody {
\t  padding-top: 60px;
\t  padding-bottom: 40px;
\t}
\t</style>
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/css/bootstrap-responsive.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/css/style.css\">

\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/js/libs/modernizr-2.5.3-respond-1.1.0.min.js\"></script>
</head>
<body>
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "  
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"js/libs/jquery-1.7.2.min.js\"><\\/script>')</script>

<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/js/libs/bootstrap/bootstrap.min.js\"></script>

<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "basepath"), "html", null, true);
        echo "/js/script.js\"></script>
<script>
\tvar _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
\t(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
\tg.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
\ts.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  88 => 29,  73 => 37,  68 => 35,  62 => 31,  60 => 29,  54 => 26,  49 => 24,  45 => 23,  35 => 16,  18 => 1,  32 => 5,  29 => 4,  26 => 3,);
    }
}
