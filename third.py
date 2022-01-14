from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
driver=webdriver.Chrome(executable_path="C:\chromedriver_win32\chromedriver.exe")
driver.get("https://thean0n.000webhostapp.com/#hero")

user_fname=driver.find_element_by_name("fname")
user_lname=driver.find_element_by_name("lname")
user_uname=driver.find_element_by_name("username")
user_email=driver.find_element_by_name("email")
user_usn=driver.find_element_by_name("usn")
user_pass=driver.find_element_by_name("password")
user_rpass=driver.find_element_by_name("re_password")
user_fname.send_keys("chota")
user_lname.send_keys("bheem")
user_uname.send_keys("chota bheem")
user_email.send_keys("bheem001@gmail.com")
user_usn.send_keys("1ds21is009")
user_pass.send_keys("chota bheem")
user_rpass.send_keys("chota bheem")
def slow_type(element: WebElement, text: str, delay: float=0.3):
    """Send a text to an element one character at a time with a delay."""
    for character in text:
        element.send_keys(character)
        time.sleep(delay)
username = driver.find_element_by_xpath("//input[@placeholder='Username']")
text = "varshitha"
slow_type(username, text)

password = driver.find_element_by_xpath("//input[@placeholder='Password']")
text = "12345678"
slow_type(password, text)


