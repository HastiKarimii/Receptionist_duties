from django.conf.urls.static import static
from django.urls import path
from .views import *
from .forms import EmailValidationOnForgotPassword


from django.contrib.auth.views import (
    PasswordResetView,
    PasswordResetDoneView,
    PasswordResetConfirmView,
    PasswordResetCompleteView
)



urlpatterns = [

    path('reserve/create/', ReservationCreateView.as_view(), name="createreserve"),
    path('reserve/edit/<int:pk>/', ReservationUpdateView.as_view(), name='editreserve'),
    path('reserve/list/', ReservationListView.as_view(), name='listreserve'),
    path('delete/<int:pk>', ReservationDeleteView.as_view(), name = 'deletereserve'),
    path('login/', login_view, name='login'),
    path('register/', RegisterView.as_view(), name='register'),
    path('logout/', logout_view, name='logout'),
    path('changepassword/', CustomPasswordChangeView.as_view(), name='changepassword'),
    path('activate/<uidb64>/<token>', activate, name='activate'),
    path('resetpassword/', PasswordResetView.as_view(
            form_class= EmailValidationOnForgotPassword,
            template_name= 'ResetPassword.html',
        ),
        name='password-reset'
    ),
    path('resetpassword/done/', PasswordResetDoneView.as_view(template_name='ResetPasswordDone.html'),name='password_reset_done'),
    path('resetpasswordconfirm/<uidb64>/<token>/', PasswordResetConfirmView.as_view(template_name='ResetPasswordConfirm.html'),name='password_reset_confirm'),
    path('resetpasswordcomplete/',PasswordResetCompleteView.as_view(template_name='ResetPasswordComplete.html'),name='password_reset_complete'),

    ]
    # + static(settings.STATIC_URL, document_root=settings.STATIC_ROOT)+ static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)



