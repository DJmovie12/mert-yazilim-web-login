const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const app = express();
const port = 3000;

// MongoDB'ye bağlan
mongoose.connect('mongodb+srv://adminTrex:vuGdYFc6IcBh6ppI@cluster0.7ivayrr.mongodb.net/', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
  dbName: 'deneme' // Veritabanı adı burada belirtiliyor
})
  .then(() => console.log('Bağlantı başarılı'))
  .catch((err) => console.error('Bağlantı hatası:', err));

// Veri şeması oluştur
const Schema = mongoose.Schema;
const denemeSchema = new Schema({
  email: { type: String, required: true },
  password: { type: String, required: true }
});

// Model oluştur
const Deneme = mongoose.model('Deneme', denemeSchema, 'denemeler');

// Body Parser kullan
app.use(bodyParser.urlencoded({ extended: true }));

// Login isteği yöneticisi
app.post('/register', (req, res) => {
  const { email, passw } = req.body;
  const deneme = new Deneme({ email, password: passw });
  deneme.save()
    .then(() => {
      console.log('Veri kaydedildi');
      res.send('Login başarılı');
    })
    .catch((err) => {
      console.error('Veri kaydetme hatası:', err);
      res.status(500).send('Bir hata oluştu');
    });
});

// Sunucuyu dinle
app.listen(port, () => {
  console.log(`Sunucu ${port} portunu dinliyor`);
});



