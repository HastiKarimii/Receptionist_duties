from django.contrib.auth.hashers import check_password
from django.contrib.auth.backends import ModelBackend
from django.contrib.auth import get_user_model
from django.conf import settings
from django.db.models import Q
from django.contrib import messages

User = get_user_model()


class UsernameOrEmailModelBackend(ModelBackend):

    def authenticate(self, request,  username=None, password=None, **kwargs):

        try:

            user = User.objects.get(Q(username__iexact=username) | Q(email__iexact=username))
            if user.check_password(password):
                return user
            else:
                messages.info(request, f"Password for user '{username}' is incorrect")

        except User.DoesNotExist:
            messages.info(request, f"user '{username}' does not exist!")
            return None


    def get_user(self, user_id):
        try:
            return User.objects.get(pk=user_id)
        except User.DoesNotExist:
            return None


