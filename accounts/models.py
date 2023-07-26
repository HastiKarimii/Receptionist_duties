from django.db import models
from django.contrib.auth.models import AbstractUser
from .managers import UserManager
from django.core.exceptions import ValidationError
from django.core.exceptions import ValidationError
from phonenumber_field.modelfields import PhoneNumberField
from django.core.validators import RegexValidator




class Receptionist(AbstractUser):
    email = models.EmailField(
        verbose_name = "email address",
        max_length=255,

    )
    is_active = models.BooleanField(default=False)
    objects = UserManager()

    USERNAME_FIELD = "username"

    class Meta:
        unique_together = ('username', 'email',)


    def __str__(self):
        return self.username



class Reservation(models.Model):

    GENDERCHOICES = (("m", "male"), ("f", "female"),)
    typeroom = (("single_room","single_room"), ("double_room","double_room"), ("three_bedroom","three_bedroom"), ("four_bedroom","four_bedroom"),)

    first_name = models.CharField(max_length=20, name = "first_name")
    last_name = models.CharField(max_length=30, name = "last_name")
    email = models.EmailField(unique=True, name = "email")
    phone_number = PhoneNumberField( name = "phone_number")
    address = models.CharField(max_length=200, name = "address")
    number = models.IntegerField()
    gender = models.CharField(max_length=12, choices=GENDERCHOICES, name="gender")
    room_type = models.CharField(max_length=24, choices=typeroom, name="room_type")
    login_date = models.DateField(name = "login_date")
    logout_date = models.DateField(name = "logout_date")
    details = models.TextField(null=True, blank=True)


    def clean(self):
        errors = {}
        if self.login_date >= self.logout_date:
            errors['login_date'] = 'login_date must be before logout_date.'
            errors['logout_date'] = 'logout_date must be after login_date.'

        if errors:
            raise ValidationError(errors)


    def __str__(self):
        return f"{self.first_name} {self.last_name}"



