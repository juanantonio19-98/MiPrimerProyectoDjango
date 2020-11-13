from django.shortcuts import render
from django.shortcuts import render, HttpResponse
from django.shortcuts import get_object_or_404, render
from django.urls import reverse
from django.views import generic
from django.utils import timezone
# Create your views here.

def home(request):
    return render(request, "miscellany/home.html")

def about(request):
    return render(request, "miscellany/about.html")

def products(request):
    return render(request, "miscellany/products.html")

def contact(request):
    return render(request, "miscellany/contact.html")
