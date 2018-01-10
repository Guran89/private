# encoding: utf-8
import time
# In this script I collect all necessary functions for the main program.
def login(username, password):
    if username == "usr" and password == "psw":
        loggedin = True
        print("You are now logged in.")
        return loggedin
    else:
        loggedin = False
        print("Wrong credentials. Try again")
        return loggedin

def help():
        print("These are all the commands you can use in NetCorp.")
        time.sleep(0.5)
        print("- Exit: quits the program.")
        print("- ")
        time.sleep(0.5)
