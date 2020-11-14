{% extends 'miscellany/base.html' %}

{% block title %}Productos{% endblock %}

{% block content %}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Product example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">

<!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<!-- Custom styles for this template -->
{% load static %}
<link type="text/css" href="{% static 'css/miscellany/product.css' %}" rel="stylesheet">
</head>
<body>
    <h1>Compra en</h1> <img src="{% static 'images/miscellany/texto.png'%}" alt="">
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
<div class="my-3 py-3">
  <h2 class="display-5">Detergente Ace</h2>
  <p class="lead">Detergente en plovo de 3 kg a solo $82.00.</p>
</div>
<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <img src="{% static 'images/miscellany/jabon_ace.png'%}">
    <img src="{% static 'images/miscellany/ace.png'%}">
</div>
</div>
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center  overflow-hidden">
<div class="my-3 p-3">
  <h2 class="display-5">Jitomate Salader</h2>
  <p class="lead">Jitomate Mexicano a solo $18.00 el kilogramo.</p>
</div>
<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/jitomate.png'%}">
</div>
</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
<div class="my-3 p-3">
  <h2 class="display-5">Papel Higienico Scott</h2>
  <p class="lead">4 rollos de papel higienico a solo $20.19.</p>
</div>
<div class="bg-secondary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/papel.png'%}">
</div>
</div>
<div class="bg-info mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
<div class="my-3 py-3">
  <h2 class="display-5">Aguacate</h2>
  <p class="lead">El mejor Aguacate Has a solo $50.50 el kilogramo.</p>
</div>
<div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/aguacate.png'%}">
</div>
</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
<div class="bg-secondary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
<div class="my-3 p-3">
  <h2 class="display-5">Jabón de tocador Escudo</h2>
  <p class="lead">Jabon antibacterial Escudo de 75g por presentación a solo $15.00 c/u.</p>
</div>
<div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/escudo.png'%}">
</div>
</div>
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
<div class="my-3 py-3">
  <h2 class="display-5">Papas Sabritas</h2>
  <p class="lead">El mejor surtido de papas y productos sabritas a solo $15.00 c/u.</p>
</div>
<div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/sabritas.png'%}">
</div>
</div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
<div class="my-3 p-3">
  <h2 class="display-5">Carne</h2>
  <p class="lead">Carne de puerco en bistec a solo $95.00 el kilogramo.</p>
</div>
<div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/carne.png'%}">
</div>
</div>
<div class="bg-secondary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
<div class="my-3 py-3">
  <h2 class="display-5">Atún Dolores</h2>
  <p class="lead">El mejor atún. Atún dolores, para que alcance para la familia en presentación de 3 kg por solo por $250.00.</p>
</div>
<div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <br>
    <br>
    <br>
    <img src="{% static 'images/miscellany/atun.png'%}">
</div>
</div>
</div>
<h2>Ya llego!!</h2>
<h2>Aprovecha nuestras super ofertas <span class="badge badge-secondary">Realiza compras desde tu casa. El Buen Fin ya llego!!</span></h2>
<footer class="container py-5">
    <img src="{% static 'images/miscellany/buenfin.png'%}" alt="">
    <img src="{% static 'images/miscellany/fecha.png'%}" alt="">
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
  {% endblock %}
