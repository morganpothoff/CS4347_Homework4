#!/usr/bin/env python3
# -*- coding: utf-8 -*-

from flask import *
from datetime import datetime

#import DB_Connections


app = Flask(__name__, static_url_path="/static")


@app.route("/")
def home():
	return render_template("LoginPage.html")


@app.route("/CreateAccount")
def createAccount():
	return render_template("CreateAccount.html")


app.run(host="localhost", port=8000, debug=True)