from django.contrib import admin
from .models import Category
from .models import Brand
from .models import Dealer
from .models import User
from .models import Sale
from .models import Product

# Register your models here.
admin.site.register(Category)
admin.site.register(Brand)
admin.site.register(Dealer)
admin.site.register(User)
admin.site.register(Sale)
admin.site.register(Product)
