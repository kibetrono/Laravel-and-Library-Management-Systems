from django.http import HttpResponse
from django.shortcuts import render
from app1.models import Post
from app1.forms import PostForm,DjangoForm
# Create your views here.
def hello(request,*args,**kwargs):
    context={
       "Title":"Student",
        "m_number":28794,
        "m_friends":["Mercy","Njoroge","Brenda","Peter"]
    }
    return render(request,"hello.html" ,context)
    #return HttpResponse("<h1>This is the home page</h1>")

def about(request,*args,**kwargs):
    return render(request,'about.html',{})
    #return HttpResponse("<h1>This is the about page</h1>")

def contact(request,*args,**kwargs):
    return render(request,'contact.html',{})

def home(request,*args,**kwargs):
    return render(request,"home.html",{})

def post_details(request):
    obj=Post.objects.get(id=1)
    context={
        'object':obj
    }
    return render(request,"post_details.html",context)

def post_form_create_view(request):
    form = PostForm(request.POST or None )
    if form.is_valid():
        form.save() 
        form = PostForm()
    context={
        'form':form
    }
    return render(request,"post_form.html",context)

def django_form_view(request):
    my_form=DjangoForm()
    context={
        "form":my_form
    }
    return render(request,"djangoform.html",context)


