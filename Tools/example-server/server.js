const express = require('express');
const app = express();
require('dotenv/config');
const cors = require('cors');

app.use(
  cors({
    origin: '*',
    methods: 'GET,POST,PUT,DELETE,OPTIONS',
  })
);
app.use(express.json());


app.post('/grab-something', async (req, res) => {
  console.log('req.body', req.body);
  res.status(200).json({message: 'Ok!'});
});


const PORT = 5000;
app.listen(PORT, () => console.log(`Portal running on port ${PORT}`));
