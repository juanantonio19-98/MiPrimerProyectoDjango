{% load i18n static %}<!DOCTYPE html>
{% get_current_language as LANGUAGE_CODE %}{% get_current_language_bidi as LANGUAGE_BIDI %}
<html lang="{{ LANGUAGE_CODE|default:"en-us" }}" {% if LANGUAGE_BIDI %}dir="rtl"{% endif %}>
<head>
    <!-- Bootstrap y Javascripts -->

<script src="{% static 'core/vendor/jquery/jquery.min.js' %}"></script>
<script src="{% static 'core/vendor/bootstrap/js/bootstrap.bundle.min.js' %}"></script>
<script src="{% static 'core/js/clean-blog.min.js' %}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<title>{% block title %}{% endblock %}</title>
<link rel="stylesheet" type="text/css" href="{% block stylesheet %}{% static "admin/css/base.css" %}{% endblock %}">
{% if not is_popup and is_nav_sidebar_enabled %}
  <link rel="stylesheet" type="text/css" href="{% static "admin/css/nav_sidebar.css" %}">
  <script src="{% static 'admin/js/nav_sidebar.js' %}" defer></script>
{% endif %}
{% block extrastyle %}{% endblock %}
{% if LANGUAGE_BIDI %}<link rel="stylesheet" type="text/css" href="{% block stylesheet_rtl %}{% static "admin/css/rtl.css" %}{% endblock %}">{% endif %}
{% block extrahead %}{% endblock %}
{% block responsive %}
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{% static "admin/css/responsive.css" %}">
    {% if LANGUAGE_BIDI %}<link rel="stylesheet" type="text/css" href="{% static "admin/css/responsive_rtl.css" %}">{% endif %}
{% endblock %}
{% block blockbots %}<meta name="robots" content="NONE,NOARCHIVE">{% endblock %}
</head>
{% load i18n %}

<body class="{% if is_popup %}popup {% endif %}{% block bodyclass %}{% endblock %}"
  data-admin-utc-offset="{% now "Z" %}">

<!-- Container -->
<div id="container">

    {% if not is_popup %}
    <!-- Header -->
    <div id="header">
        <div id="branding">
        {% block branding %}{% endblock %}
        </div>
        {% block usertools %}
        {% if has_permission %}
        <div id="user-tools">
            {% block welcome-msg %}
                {% translate 'Welcome,' %}
                <strong>{% firstof user.get_short_name user.get_username %}</strong>.
            {% endblock %}
            {% block userlinks %}
                {% if site_url %}
                    <a href="{{ site_url }}">{% translate 'View site' %}</a> /
                {% endif %}
                {% if user.is_active and user.is_staff %}
                    {% url 'django-admindocs-docroot' as docsroot %}
                    {% if docsroot %}
                        <a href="{{ docsroot }}">{% translate 'Documentation' %}</a> /
                    {% endif %}
                {% endif %}
                {% if user.has_usable_password %}
                <a href="{% url 'admin:password_change' %}">{% translate 'Change password' %}</a> /
                {% endif %}
                <a href="{% url 'admin:logout' %}">{% translate 'Log out' %}</a>
            {% endblock %}
        </div>
        {% endif %}
        {% endblock %}
        {% block nav-global %}{% endblock %}
    </div>
    <!-- END Header -->
    {% block breadcrumbs %}
    <div class="breadcrumbs">
    <a href="{% url 'admin:index' %}">{% translate 'Home' %}</a>
    {% if title %} &rsaquo; {{ title }}{% endif %}
    </div>
    {% endblock %}
    {% endif %}

    <div class="main shifted" id="main">
      {% if not is_popup and is_nav_sidebar_enabled %}
        {% block nav-sidebar %}
          {% include "admin/nav_sidebar.html" %}
        {% endblock %}
      {% endif %}
      <div class="content">
        {% block messages %}
          {% if messages %}
            <ul class="messagelist">{% for message in messages %}
              <li{% if message.tags %} class="{{ message.tags }}"{% endif %}>{{ message|capfirst }}</li>
            {% endfor %}</ul>
          {% endif %}
        {% endblock messages %}
        <!-- Content -->
        <div id="content" class="{% block coltype %}colM{% endblock %}">
          {% block pretitle %}{% endblock %}
          {% block content_title %}{% if title %}<h1>{{ title }}</h1>{% endif %}{% endblock %}
          {% block content %}
            {% block object-tools %}{% endblock %}
            {{ content }}
          {% endblock %}
          {% block sidebar %}{% endblock %}
          <br class="clear">
        </div>
        <!-- END Content -->
        {% block footer %}<div id="footer"></div>{% endblock %}
      </div>
    </div>
</div>
<!-- END Container -->
</body>
</html>
