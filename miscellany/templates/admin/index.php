<article class="content">
    {% extends "admin/base_site.php" %}
{% load i18n static %}

{% block extrastyle %}{{ block.super }}<link rel="stylesheet" type="text/css" href="{% static "admin/dashboard.css" %}">{% endblock %}

{% block coltype %}colMS{% endblock %}

{% block bodyclass %}{{ block.super }} dashboard{% endblock %}

{% block breadcrumbs %}{% endblock %}

{% block nav-sidebar %}{% endblock %}

{% block content %}
<div id="content-main" class="text">
  {% include "admin/app_list.html" with app_list=app_list show_changelinks=True %}
</div>
{% endblock %}

{% block sidebar %}
<div id="content-related">
    <div class="module" id="recent-actions-module">
        <h2>{% translate 'Recent actions' %}</h2>
        <h3>{% translate 'My actions' %}</h3>
            {% load log %}
            {% get_admin_log 10 as admin_log for_user user %}
            {% if not admin_log %}
            <p>{% translate 'None available' %}</p>
            {% else %}
            <ul class="actionlist">
            {% for entry in admin_log %}
            <li class="{% if entry.is_addition %}addlink{% endif %}{% if entry.is_change %}changelink{% endif %}{% if entry.is_deletion %}deletelink{% endif %}">
                {% if entry.is_deletion or not entry.get_admin_url %}
                    {{ entry.object_repr }}
                {% else %}
                    <a href="{{ entry.get_admin_url }}">{{ entry.object_repr }}</a>
                {% endif %}
                <br>
                {% if entry.content_type %}
                    <span class="mini quiet">{% filter capfirst %}{{ entry.content_type.name }}{% endfilter %}</span>
                {% else %}
                    <span class="mini quiet">{% translate 'Unknown content' %}</span>
                {% endif %}
            </li>
            {% endfor %}
            </ul>
            {% endif %}
    </div>
</div>
{% endblock %}
</article>