from django.urls import path
from . import views
    
app_name = 'miscellany'
urlpatterns = [
    path('', views.home, name="home"),
    path('about/', views.about, name="about"),
    path('products/', views.products, name="products"),
    path('contact/', views.contact, name="contact"),
]
