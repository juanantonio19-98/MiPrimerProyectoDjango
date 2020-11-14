{% extends 'miscellany/base.php' %}
{% block title %}Home{% endblock %}

{% block content %}
{% load static %}
<link rel="stylesheet" type="text/css" href="{% static 'css/miscellany/style.css' %}">
<img src="https://i.ibb.co/MR6w9C1/bienvenido.png" alt="">

    <h1>eMiscelaneas</h1>
    <section>
        <article>
            <p>Empresa dedicada a la venta de productos en linea.</p>
            <p>Puedes encontrar una gran variedad de productos</p>
            <p>Y lo mejor es que todo es hasta domicilio</p>
        </article>
        <h2>Por custiones de pandemia a razón de el Covid-19. Por el momento y para tu cuidado!!</h2>
        <h2>No queremos que te arriesgues y es por ello que tomamos medidas y te llevamos tus productos a la puerta de tu casa</h2>
        <h3>Si, a la puerta de tu casa solo compra y nosotros nos encargamos de lo demas. </h3>
    </section>
    {% load static %}
    <img src="https://i.ibb.co/cxmzZDN/logoyslogan.png" alt="">

{% endblock %}
