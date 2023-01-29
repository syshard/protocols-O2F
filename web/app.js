eel.expose(pythonSay)
eel.expose(ipLocal)
eel.expose(internet)

let ftpPort=21
let httpPort=80
let host

function pythonSay(info) {
	console.log(info)
}

function ipLocal(meuip) {
	console.log(meuip)
	$("#textIP").text(meuip)
	$("#hostFtp").html("<strong>ftp://</strong>"+meuip)
	$("#portFtp").html("<strong>porta:</strong>"+ftpPort)

	$("#hostHttp").html("<strong>http://</strong>"+meuip)
	$("#portHttp").html("<strong>porta:</strong>"+httpPort)

	host = meuip
}

function internet(internet) {
	console.log(internet)
	$("#status").text(internet)
}
                    
function cmdMenu(){
    $(".form_menu").toggleClass('show')
	$(".bx-menu").toggleClass('bx-x')
}

function openFtp(){
    $(".form-ftp").toggleClass('showftp')
    $(".form-share").removeClass('showftp')
}

function openHttp(){
	$(".form-share").toggleClass('showftp')
	$(".form-ftp").removeClass('showftp')
}

function closeFtp(){
	eel.closeFtp()
	$(".qrFtp").toggleClass('showqrcode')
}

function closeHttp(){
	eel.closeHttp()
	$(".qrFtp").toggleClass('showqrcode')
}

function startDevices(){
	eel.displayDevices()
}

function wifiConnect(){
	eel.startdevices($(".meuip").val())
}

function ftpStart(){
	eel.startFtp()

	var qrcode = new QRCode(document.getElementById("qrcodeftp"), {
            width : 100,
            height : 100
        });

	qrcode.makeCode("ftp://"+host+":"+ftpPort);

	$(".qrFtp").toggleClass('showqrcode')
}

function ftpHttp() {
	eel.startHttp()

	var qrcode = new QRCode(document.getElementById("qrcodeftp"), {
            width : 100,
            height : 100
        });

	qrcode.makeCode("http://"+host+":"+httpPort);

	$(".qrFtp").toggleClass('showqrcode')
}

eel.javascriptSay("Cliente javascript escutando")
