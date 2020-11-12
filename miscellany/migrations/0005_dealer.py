# Generated by Django 3.1.2 on 2020-11-11 07:32

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('miscellany', '0004_auto_20201111_0003'),
    ]

    operations = [
        migrations.CreateModel(
            name='Dealer',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=255, verbose_name='Nombre completo')),
                ('rfc', models.DecimalField(decimal_places=0, max_digits=15, verbose_name='RFC')),
                ('address', models.CharField(max_length=255, verbose_name='Dirección')),
            ],
            options={
                'verbose_name': 'Comerciante',
                'verbose_name_plural': 'Comerciante',
            },
        ),
    ]
