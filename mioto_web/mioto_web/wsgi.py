"""
WSGI config for mioto_web project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/2.0/howto/deployment/wsgi/
"""
#path = '/root/webapp/mioto/mioto_web1.0/mioto_web'   # 这里为了能让jjlmsite直接被import到，加入到系统路径里面去
#if path not in sys.path:
#    sys.path.append(path)
import os

from django.core.wsgi import get_wsgi_application
#os.environ["DJANGO_SETTINGS_MODULE"] = "jjlmsite.settings"   #in server
os.environ.setdefault("DJANGO_SETTINGS_MODULE", "mioto_web.settings") # in local

application = get_wsgi_application()
