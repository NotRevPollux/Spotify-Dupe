const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());


mongoose.connect('mongodb://localhost:27017/spotify', {
    useNewUrlParser: true,
    useUnifiedTopology: true,
})
.then(() => console.log('MongoDB connected'))
.catch(err => console.error('MongoDB connection error:', err));


app.use(express.static('public'));


const User = mongoose.model('User', new mongoose.Schema({
    name: String,
    email: String,
    password: String,
}));


app.post('/signup', (req, res) => {
    const { name, email, password } = req.body;
    const newUser = new User({ name, email, password });
    newUser.save()
        .then(() => res.status(200).send('User signed up successfully'))
        .catch(err => res.status(500).send('Error saving user: ' + err));
});


const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
