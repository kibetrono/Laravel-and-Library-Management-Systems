# Generated by Django 2.2 on 2019-08-20 07:47

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('app1', '0002_auto_20190820_0743'),
    ]

    operations = [
        migrations.AddField(
            model_name='post',
            name='summary',
            field=models.TextField(default='It is the first app'),
        ),
    ]
