from flask import Flask, render_template, jsonify, Response, request
from flask_cors import CORS

from eliza import eliza



app = Flask(__name__)

CORS(app)
@app.route("/", methods=["POST", "GET"])
def index():
    if request.method =="POST":
        print(request.get_json())
        eliza_object = eliza()
        respond = eliza_object.respond(request.get_json()["sender"])
        return jsonify( {"status":True, "msg":respond})
    else:
        return jsonify( {"status": False})

if __name__ == "__main__":
    app.run(debug=True)