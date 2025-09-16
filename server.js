// server.js
const express = require('express');
const fetch = require('node-fetch');
const cors = require('cors');

const app = express();
app.use(cors());

const NEWSWIRE_URL = 'https://www.rockstargames.com/newswire';

app.get('/api/news', async (req, res) => {
  try {
    const resp = await fetch(NEWSWIRE_URL);
    const html = await resp.text();

    // Simple parsing: find news items. Adjust selectors based on actual html structure
    const regex = /<a\s+href="(\/newswire\/[^\"]+)"[^>]*>([^<]+)<\/a>\s*<p>([^<]+)<\/p>/g;
    const base = 'https://www.rockstargames.com';
    let matches;
    const items = [];
    while ((matches = regex.exec(html)) !== null && items.length < 5) {
      items.push({
        title: matches[2].trim(),
        summary: matches[3].trim(),
        link: base + matches[1]
      });
    }

    res.json({ items });
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: 'Failed to fetch news' });
  }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`News API running on ${PORT}`));
