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
