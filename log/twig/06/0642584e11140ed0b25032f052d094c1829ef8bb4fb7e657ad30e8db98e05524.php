<?php

/* index.html */
class __TwigTemplate_aaddcf15c862dd4679ea70652a8ce5491ec58625bf52fc84d6a6ab1ba1be3e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"index\">
        <ul>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "            <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">
                <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</h3>
                <content>
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "
                </content>
                <time>
                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                </time>
                <div class=\"operation\">
                    <a>查看全文</a>
                    <i class=\"iconfont\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">&#xe61d;</i>
                </div>
                <span></span>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>
    <div class=\"full-text\">
        <i class=\"iconfont close\">&#xe60b;</i>
        <h3>title</h3>
        <content>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            的年纪啊倒萨大家萨达安康啥的大山打卡的可能洒家打开的看电视剧安康啥的卡单机啊看电脑卡死的啊肯定就是那科技时代安德森看上代价撒的技能萨达大家安康啥的卡死的卡都是你撒看见当看到撒看见打开大三开始的卡都是
        </content>
        <time>
            <span>
                2018-7-4
            </span>
            <i class=\"iconfont del\">&#xe61d;</i>
        </time>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 16,  55 => 12,  49 => 9,  44 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\"%}
{% block content %}
    <div class=\"index\">
        <ul>
            {% for val in data %}
            <li id=\"{{ val.id }}\">
                <h3>{{ val.title }}</h3>
                <content>
                    {{ val.content }}
                </content>
                <time>
                    {{ val.createtime|date(\"Y-m-d H:i:s\") }}
                </time>
                <div class=\"operation\">
                    <a>查看全文</a>
                    <i class=\"iconfont\" id=\"{{ val.id }}\">&#xe61d;</i>
                </div>
                <span></span>
            </li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"full-text\">
        <i class=\"iconfont close\">&#xe60b;</i>
        <h3>title</h3>
        <content>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            的年纪啊倒萨大家萨达安康啥的大山打卡的可能洒家打开的看电视剧安康啥的卡单机啊看电脑卡死的啊肯定就是那科技时代安德森看上代价撒的技能萨达大家安康啥的卡死的卡都是你撒看见当看到撒看见打开大三开始的卡都是
        </content>
        <time>
            <span>
                2018-7-4
            </span>
            <i class=\"iconfont del\">&#xe61d;</i>
        </time>
    </div>
{% endblock %}", "index.html", "F:\\php\\myFrame\\app\\views\\index.html");
    }
}
