from django import forms

from app1.models import Post


class PostForm(forms.ModelForm):
    class Meta:
        model = Post
        fields = [
            'title',
            'body',
            'summary'
        ]

class DjangoForm(forms.Form):
    title=forms.CharField(widget=forms.TextInput(attrs={"placeholder":"Your title"}))
    body=forms.CharField(widget=forms.Textarea)
    summary=forms.CharField(required=False)
