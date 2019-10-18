"""website URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from app1.views import hello,about,contact,home,post_details,post_form_create_view,django_form_view
urlpatterns = [
    path('admin/', admin.site.urls),
    path('hello/',hello),
    path('about/',about),
    path('contact/',contact),
    path('home/',home),
    path('post/',post_details),
    path('form/',post_form_create_view),
    path('create/',django_form_view)
]
