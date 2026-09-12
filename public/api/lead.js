module.exports = async (req, res) => {
  // Allow CORS
  res.setHeader('Access-Control-Allow-Credentials', 'true');
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET,OPTIONS,PATCH,DELETE,POST,PUT');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'X-CSRF-Token, X-Requested-With, Accept, Accept-Version, Content-Length, Content-MD5, Content-Type, Date, X-Api-Version'
  );

  if (req.method === 'OPTIONS') {
    res.status(200).end();
    return;
  }

  if (req.method !== 'POST') {
    res.status(405).json({ ok: false, error: 'Method not allowed' });
    return;
  }

  try {
    const data = req.body || {};
    const name = (data.name || data.full_name || '').trim();
    const email = (data.email || '').trim();
    const phone = (data.phone || data.whatsapp || data.mobile || '').trim();

    if (!name || (!email && !phone)) {
      res.status(422).json({ ok: false, error: 'Name and email or phone required' });
      return;
    }

    console.log('📬 New Lead Received:', JSON.stringify({
      name, email, phone,
      business: data.business || data.company,
      type: data.type,
      date: new Date().toISOString()
    }));

    res.status(200).json({ ok: true, id: Date.now(), message: 'Lead recorded successfully' });
  } catch (err) {
    console.error('Lead error:', err);
    res.status(500).json({ ok: false, error: 'Internal server error' });
  }
};
