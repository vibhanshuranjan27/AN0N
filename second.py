from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver=webdriver.Chrome(executable_path="C:\chromedriver_win32\chromedriver.exe")
driver.get("https://thean0n.000webhostapp.com/#hero")
driver.find_element_by_xpath("//*[@id='header']/div/div/div[2]/ul/li[2]/a").click()
time.sleep(2)
driver.find_element_by_xpath("//*[@id='header']/div/div/div[2]/ul/li[3]/a").click()
time.sleep(2)
driver.find_element_by_xpath("//*[@id='header']/div/div/div[2]/ul/li[4]/a").click()
time.sleep(2)
print(driver.title)
driver.close()
