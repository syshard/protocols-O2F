import socket
import os
from socket import gethostbyname,create_connection

def Meuip(des):
	if des == "local":
		ipl = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
		try:
			ipl.connect(("8.8.8.8", 80))
			return ipl.getsockname()[0]
		except:
			return '127.0.0.1'

		ipl.close()
	else:
		return "foi mal"

def Internet():
    tentativas = 0
    servidorRemoto = 'www.google.com.br'

    while tentativas < 3:
        if tentativas == 1:
            servidorRemoto = 'www.lds.org'
        elif tentativas == 2:
            servidorRemoto = 'www.msn.com'

        try:
            host = gethostbyname(servidorRemoto)
            s = create_connection((host, 80), 2)
            return True
        except: tentativas += 1

    return False

def check_adb_device():
    # Obtém a saída do comando 'adb devices'
    output = os.popen("adb devices").read()
    
    # Verifica se há algum dispositivo conectado
    if "device" in output:
        # Remove a primeira linha do output, que é a tabela de cabeçalho
        output = output.split('\n', 1)[1]
        # Pega o primeiro dispositivo conectado
        device = output.split('\t')[0]
        return device
    else:
        print("Nenhum dispositivo com depuração USB habilitada encontrado.")

def Ftpclose():
	# Obtém todos os processos que estão usando a porta 21
	processes = os.popen("lsof -i :21 | awk '{print $2}'").read().splitlines()

	# Itera sobre todos os processos e os mata
	for process in processes:
	    os.system(f"kill {process}")

def Httpclose():
	# Obtém todos os processos que estão usando a porta 80
	processes = os.popen("lsof -i :80 | awk '{print $2}'").read().splitlines()

	# Itera sobre todos os processos e os mata
	for process in processes:
	    os.system(f"kill {process}")

def wificonnect(ip):
	os.system("adb tcpip 5555 && adb connect "+str(ip))
	print("ok")