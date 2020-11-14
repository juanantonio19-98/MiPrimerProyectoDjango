{% extends 'miscellany/base.php' %}

{% block title %}Contacto{% endblock %}

{% block content %}
{% load static %}
<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
    <img class="card-img-top" src="{% static 'images/miscellany/enlace.png'%}" alt="">
    <div class="card-body">
      <h5 class="card-title">Contacto</h5>
      <p class="card-text">Puedes contantarme en el siguiente espacio te dejo mis cuentas.</p>
    </div>
    <ul  class="list-group list-group-flush">
      <li class="list-group-item bg-dark"><a href="mailto:antonioordonezfernandez8@gmail.com"><span class="material-icons">mail</span> Email</a></li>
      <li class="list-group-item bg-dark"><a href="https://www.facebook.com/profile.php?id=100007276755442"><span class="material-icons">facebook</span> Github</a></li>
      <li class="list-group-item bg-dark"><a href="https://youtube.com/channel/UCjbN_Xl25gPCevQ7jE5RrnQ"><span class="material-icons">subscriptions</span> Youtube</a></li>
    </ul>
    <div class="card-body">
      <a href="{% url 'home' %}" class="card-link">Home</a>
      <a href="{% url 'about' %}" class="card-link">Acerca de</a>
    </div>
  </div>
{% endblock %}
