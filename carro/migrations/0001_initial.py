# Generated by Django 5.0.7 on 2024-07-17 01:01

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='servicios',
            fields=[
                ('id', models.CharField(max_length=11, primary_key=True, serialize=False)),
                ('nombre_servicio', models.CharField(max_length=64)),
                ('precio', models.IntegerField()),
            ],
        ),
    ]
