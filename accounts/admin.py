from django.contrib import admin, messages
from django.db.models import F
import datetime

from .models import Receptionist, Reservation

admin.site.register(Receptionist)


@admin.register(Reservation)
class Reservation(admin.ModelAdmin):
    fieldsets = (
        ('General Info', {
            'fields': (('first_name', 'last_name'), ('login_date', 'logout_date'))
        }),
        ('Details', {
            'classes': ('collapse',),
            'fields': ('email', 'phone_number', 'room_type', 'number', 'gender', 'address', 'details')
        }),
    )

    list_display = ['id', 'first_name', 'last_name', 'login_date', 'logout_date', 'number']
    sortable_by = ('id','first_name', 'last_name')
    list_filter = ('room_type', 'gender')
    # list_editable = ('last_name', )
    search_fields = ('first_name', 'last_name')
    readonly_fields = ('phone_number', 'address')



    actions = ['Extension_of_stay']

    def Extension_of_stay(self, request, queryset):
        updated = queryset.update(logout_date=F('logout_date') + datetime.timedelta(days=2))
        self.message_user(
            request, f"The stay was extended for {updated} night more.", messages.SUCCESS
        )

    Extension_of_stay.short_description = 'Extension of stay for one night.'

