from django.utils.translation import gettext_lazy as _
from django.contrib.auth.base_user import BaseUserManager


class UserManager(BaseUserManager):

    def _create_user(self, username, email, password=None, is_active=False, **extra_fields):
        """Create and save a regular User"""
        if not username:
            raise ValueError(_('username must be set'))
        if not email:
            raise ValueError(_('email must be set'))

        email = self.normalize_email(email)
        user = self.model(
            username=username,
            email=email,
            **extra_fields
        )
        user.set_password(password)

        user.save(using=self._db)
        return user


    def create_user(self, username, email=None, password=None,  **extra_fields):
        return self._create_user(username, email, password, False, **extra_fields)


    def create_superuser(self, username,  email, password, **extra_fields):
        """Create and save a SuperUser """
        is_active = True
        extra_fields.setdefault('is_staff', True)
        extra_fields.setdefault('is_superuser', True)
        extra_fields.setdefault('is_active', True)

        if extra_fields.get('is_staff') is not True:
            raise ValueError('Superuser must have is_staff=True.')
        if extra_fields.get('is_superuser') is not True:
            raise ValueError('Superuser must have is_superuser=True.')

        return self._create_user(username, email, password, **extra_fields)

