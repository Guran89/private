# encoding: utf-8
from functions import *
import time

while True:
    print("Welcome to NetCorp.")
    #time.sleep(0.5)
    print("Please sign in.")
    #time.sleep(0.5)
    username = input("Enter your username (usr)\n> ")
    password = input("Enter your password (psw)\n> ")

    loggedin = login(username, password)
    #time.sleep(1)
    while loggedin:
        command = input("Enter command.\n> ")
        if command == "Help" or command == "help":
            help()
        elif command == "Exit" or command == "exit" or command == "e":
            print("You are now logged off NetCorp. Welcome back.")
            #time.sleep(0.5)
            quit()
        else:
            print("Invalid command. Try again, or print 'help' to get help.")
