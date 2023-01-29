import eel	
import os
from function.system import *
from function.ftpServer import *
from function.nmap import *
import subprocess

eel.init('web')                     

@eel.expose                       
def startHttp():
	subprocess.Popen(['gnome-terminal', '-e', 'python3 share.py'])

@eel.expose
def startFtp():
	subprocess.Popen(['gnome-terminal', '-e', 'python3 ftp.py'])	

@eel.expose
def closeFtp():
	Ftpclose()

@eel.expose
def closeHttp():
	Httpclose()

@eel.expose
def startdevices(ip):
	wificonnect(ip)

@eel.expose
def displayDevices():
	subprocess.Popen(['gnome-terminal', '-e', 'python3 devices.py'])	

eel.pythonSay("Servidor python conectado")

print(scan_ports(Meuip("local"), ports_to_scan))

eel.ipLocal(Meuip("local"))    

# eel.devices(check_adb_device())  

if Internet():
	eel.internet("online")
else:
	eel.internet("offline")     

eel.start('app.html', size=(800, 500))
