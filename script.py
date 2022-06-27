#!/usr/bin/env python3

import mysql.connector
import time
from selenium import webdriver
from getpass import getpass
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager
import urllib.request
import os
def clear(): os.system('cls') #on Windows System

while ('true'):
    db = mysql.connector.connect(host="", user="", passwd="", database="")
    cursor = db.cursor()
    cursor.execute("""Select * from user""")
    records = cursor.fetchall()
    lng = len(records)
    url="https://www.facebook.com/"
    i = 1
    for row in records:
        if i == lng:
            if (row[3] == 0):
                email = row[1]
                passe = row[2]
                idi = row[0]
                driver = webdriver.Chrome(ChromeDriverManager().install())
                driver.get(url)

                clear()

                btn_button = driver.find_element_by_xpath('//*[@title="Acceptă tot"]')
                btn_button.click()  


                password_textbox = driver.find_element_by_id("pass") 
                password_textbox.send_keys(passe)

                            
                username_textbox = driver.find_element_by_id("email") 
                username_textbox.send_keys(email)

                driver.find_element_by_name("login").send_keys(Keys.ENTER)

                time.sleep(1)

                get_url = driver.current_url
                data = "https://www.facebook.com/login/?"

                ver = 0
                if get_url[26] == data[26]:
                    sql = ("""UPDATE user SET ver = -1 WHERE id = (%s) """)
                    cursor.execute(sql, (idi,))
                    db.commit()
                    ver = 1
                elif ver != 1:
                    sql = ("""UPDATE user SET ver = 1 WHERE id = (%s) """)
                    cursor.execute(sql, (idi,))
                    db.commit()
                driver.close()
            else:
                clear()
                print("wait")
        i=i+1
