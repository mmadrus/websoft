"use strict"

var express = require("express");
var router = express.Router();



router.get("/", (req, res) => {

    let data = {"num":[]};

    for (var i = 0; i < 7; i++) {
        data.num[i] = getLottoNum(data);
    }

    res.render("lotto", data);
});

function getLottoNum (data) {

    var dataSet = data.num;
    var num;
    var exists = true;

    while(exists) {

        num = (Math.floor(Math.random() * 35) + 1);

        for (var i = 0; i <= dataSet.length; i++) {

            if (num === dataSet[i]) {

                console.info(num + ' NOT ' + dataSet[i]);
                return (getLottoNum(data));

            } else {

                console.info(num + ' OK ' + dataSet[i]);
                exists = false;
            }
        }
    }

    return num;

}

module.exports= router;