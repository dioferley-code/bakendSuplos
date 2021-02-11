const { verify } = require('crypto');
const express = require('express');
const jwt = require('jsonwebtoken');
const app = express();

const user = {
    id: 1,
    name: 'pepe',
    password: '123456'
}

jwt.sign({user}, 'secretkey', (err, token) => {
    localStorage.setItem(token)
    res.json({
        token
    })
})

app.listen(3000)