<?php

/* layout.html */
class __TwigTemplate_00c56c4124b1c1ec8a439a371b8746ee6c525d3f346f1ad761ebe7908aa1b4fc extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>超简单留言板</title>
    <link rel=\"stylesheet\" href=\"/myFrame/static/css/index.css\">
</head>
<body>
    <header>
        <h1>超简单留言板</h1>
        <nav>
            <a href=\"/myFrame\">所有留言</a>
            <a href=\"/myFrame/index/add\">添加留言</a>
        </nav>
    </header>
    <main>
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </main>
    <footer>
        <i class=\"iconfont\">&#xe6d5;</i>
        <span>2018 超简单留言板</span>
    </footer>
</body>
<script src=\"/myFrame/static/js/index.js\"></script>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  54 => 20,  43 => 22,  41 => 20,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>超简单留言板</title>
    <link rel=\"stylesheet\" href=\"/myFrame/static/css/index.css\">
</head>
<body>
    <header>
        <h1>超简单留言板</h1>
        <nav>
            <a href=\"/myFrame\">所有留言</a>
            <a href=\"/myFrame/index/add\">添加留言</a>
        </nav>
    </header>
    <main>
        {% block content %}
        {% endblock %}
    </main>
    <footer>
        <i class=\"iconfont\">&#xe6d5;</i>
        <span>2018 超简单留言板</span>
    </footer>
</body>
<script src=\"/myFrame/static/js/index.js\"></script>
</html>", "layout.html", "F:\\php\\myFrame\\app\\views\\layout.html");
    }
}
