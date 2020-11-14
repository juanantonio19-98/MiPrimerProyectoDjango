{% extends "admin/base.php" %}

{% block title %}{{ title }} | {{ site_title|default:_('Django site admin') }}{% endblock %}

{% block branding %}
<h1 id="site-name"><a href="{% url 'admin:index' %}">Administracion de Miscelaneas</a></h1>
{% endblock %}

{% block nav-global %}{% endblock %}
