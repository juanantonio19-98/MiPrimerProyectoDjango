from django.shortcuts import render
from django.shortcuts import render, HttpResponse

# Create your views here.

def home(request):
    return render(request, "miscellany/home.html")

def about(request):
    return render(request, "miscellany/about.html")

def portfolio(request):
    return render(request, "miscellany/portfolio.html")

def contact(request):
    return render(request, "miscellany/contact.html")
