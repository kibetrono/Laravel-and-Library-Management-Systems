from django.db import models

# Create your models here.
class Post(models.Model):
    title=models.CharField(max_length=100)
    body=models.TextField()
    summary=models.TextField(default='It is the first app')
    def __str__(self):
        return self.title




