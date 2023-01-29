import socket
from function.system import *

def scan_ports(host, ports):
    for port in ports:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.settimeout(5)
        try:
            con = s.connect((host, port))
            print("Servidor Iniciado na porta ", port)
            con.close()
        except:
            print("O servidor Nao foi Iniciado", port, "is closed.")

ports_to_scan = [21, 8080]
