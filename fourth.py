from selenium import webdriver
from getpass import getpass
import time

from selenium.webdriver.remote.webelement import WebElement


def slow_type(element: WebElement, text: str, delay: float=0.3):
    """Send a text to an element one character at a time with a delay."""
    for character in text:
        element.send_keys(character)
        time.sleep(delay)
driver=webdriver.Chrome(executable_path="C:\chromedriver_win32\chromedriver.exe")
driver.get("https://thean0n.000webhostapp.com/#hero")
driver.find_element_by_xpath("//*[@id='header']/div/div/div[2]/ul/li[3]/a").click()
time.sleep(2)
user_fname=driver.find_element_by_name("fname")
user_fname.send_keys("chota")
time.sleep(2)
user_lname=driver.find_element_by_name("lname")
user_lname.send_keys("bheem")
time.sleep(2)
user_uname=driver.find_element_by_name("username")
user_uname.send_keys("chota bheem")
time.sleep(2)
user_email=driver.find_element_by_name("email")
user_email.send_keys("bheem001@gmail.com")
time.sleep(1)
user_usn=driver.find_element_by_name("usn")
user_usn.send_keys("1ds21is009")
time.sleep(1)
user_pass=driver.find_element_by_name("password")
user_pass.send_keys("chota bheem")
time.sleep(1)
user_rpass=driver.find_element_by_name("re_password")
user_rpass.send_keys("chota bheem")
time.sleep(1)
driver.close()
