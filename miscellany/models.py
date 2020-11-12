from django.db import models

# Create your models here.
class Category(models.Model):
    name = models.CharField(max_length=255, verbose_name='Categoria')
    features = models.CharField(max_length=255, verbose_name='Caracteristicas')

    def __str__(self):
        return self.name

    class Meta:
        verbose_name= 'Categoria'
        verbose_name_plural= 'Categorias'

class Brand(models.Model):
    name = models.CharField(max_length=255, verbose_name='Marca')
    features = models.CharField(max_length=255, verbose_name='Caracteristicas')
    country = models.CharField(max_length=300, verbose_name='Pais de la marca')

    def __str__(self):
        return self.name

    class Meta:
        verbose_name= 'Marca'
        verbose_name_plural= 'Marcas'


class Dealer(models.Model):
    name = models.CharField(max_length=255, verbose_name='Nombre completo')
    rfc = models.DecimalField(max_digits=15, decimal_places=0, verbose_name='RFC')
    address = models.CharField(max_length=255, verbose_name='Dirección')

    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name= 'Comerciante'
        verbose_name_plural= 'Comerciantes'


class User(models.Model):
    name = models.CharField(max_length=200, verbose_name='Nombre cliente')
    last_name = models.CharField(max_length=200, verbose_name='Apellido(s)')
    bithday = models.DateField(verbose_name='Fecha de nacimiento')
    gender = models.CharField(max_length=50, verbose_name='Genero')

    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name= 'Cliente'
        verbose_name_plural= 'Cliente'
        


class Sale(models.Model):
    date = models.DateField(verbose_name='Fecha de compra')
    amount = models.DecimalField(max_digits=6, decimal_places=2, verbose_name='Monto a pagar')

    def __es__(self):
        return self.amount
    
    class Meta:
        verbose_name= 'Monto'
        verbose_name_plural= 'Montos'


class Product(models.Model):
    brand_id = models.ForeignKey(Brand, on_delete=models.CASCADE, verbose_name='Marca')
    category_id = models.ForeignKey(Category, on_delete=models.CASCADE, verbose_name='Categoria')
    name = models.CharField(max_length=255, verbose_name='Nombre')
    expire = models.DateField(verbose_name='Fecha de expiración')
    modelyear = models.DateField(verbose_name='Año de modelo')
    listprice = models.DecimalField(max_digits=6, decimal_places=2, verbose_name='Precio de lista')
    quantity = models.DecimalField(max_digits=6, decimal_places=2, verbose_name='Cantidad')

    def __str__(self):
        return self.name

    class Meta:
        verbose_name= 'Producto'
        verbose_name_plural= 'Productos'
