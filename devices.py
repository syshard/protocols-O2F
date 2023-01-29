import subprocess
import cv2
import time

width = 380
height = 630

while True:
    subprocess.call(["adb", "shell", "screencap", "-p", "/sdcard/screen.png"])
    subprocess.call(["adb", "pull", "/sdcard/screen.png"])
    img = cv2.imread("screen.png")
    print("Tamanho da tela:",width,"x",height)
    img = cv2.resize(img, (width, height))
    cv2.imshow("Device Screen", img)
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

cv2.destroyAllWindows()
