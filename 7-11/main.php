<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>7-11 Receipt (fixed)</title>
  <style>
    /* ---------- Page reset ---------- */
    * { box-sizing: border-box; margin: 0; padding: 0; }

    /* ---------- Body: keep content at top, centered horizontally ---------- */
    html, body { height: 100%; }
    body {
      min-height: 100vh;               /* full viewport height */
      padding: 50px;                   /* page padding */
      background: #444;                /* dark background */
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      justify-content: center;         /* center horizontally */
      align-items: flex-start;         /* KEEP AT TOP — no vertical centering */
    }

    /* ---------- Receipt container ---------- */
    .container {
      width: 600px;                    /* fixed readable width */
      background: #000;
      border: 2px solid #00e5ff;
      border-radius: 16px;
      padding: 20px;
      color: #fff;
      box-shadow: 0 0 0 rgba(0,0,0,0); /* placeholder */
    }

    .container:hover {
      box-shadow: 0 0 14px rgba(0,230,255,0.3);
      border-color: cyan;
    }

    /* ---------- Logo ---------- */
    .logo {
      display: block;
      margin: 0 auto 10px auto;
      width: 320px;        /* smaller, consistent width */
      height: auto;
      object-fit: contain;
    }

    /* ---------- Info blocks (uniform spacing) ---------- */
    .info-block {
      width: 100%;
      padding: 14px;
      border-radius: 12px;
      margin-top: 18px;        /* equal spacing between blocks */
      text-align: center;
      color: #000;             /* we use dark text on bright blocks */
      font-size: 16px;
      line-height: 1.35;
    }

    .b1 { background: #ffb347; color: #000; }
    .b2 { background: #bfbfbf; color: #000; }
    .b3 { background: #cfff4c; color: #000; }
    .b4 { background: #8fe9ff; color: #000; }

    /* Paragraph text inside container (overrides where needed) */
    .container p {
      color: #fff;             /* default white for sections not inside .info-block */
      text-align: center;
      font-size: 16px;
      margin: 0;
    }

    /* When text is inside .info-block, keep it dark */
    .info-block p { color: #000; margin: 0; }

    /* Footer small note spacing */
    .footer-note {
      margin-top: 12px;
      text-align: center;
      color: #fff;
      font-weight: 700;
      letter-spacing: .5px;
      font-size: 16px;
    }

    /* responsive */
    @media (max-width:640px) {
      .container { width: 92vw; }
      .logo { width: 80%; }
      .info-block { font-size: 14px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- use an image path that exists; if you don't have image, remove <img> -->
    <img src="images/7-11 Logo.png" class="logo" alt="7-11 Logo" />

    <div class="info-block b1">
      <p>Philippine Seven Eleven Corporation<br>
      Owned &amp; Operated by: Philippine Seven Corporation<br>
      VATREGTIN #000-390-189-0727</p>
    </div>

    <div class="info-block b2">
      <p>Aragon Bldg 2012 CRM Ave Cor.<br>
      Cardinal St. BF Almanza, Las Piñas City</p>
    </div>

    <div class="info-block b3">
      <p>Tel#: (02) 8778-7111<br><br>
      11/30/2025 02:15 PM<br><br>
      INVOICE NO: 000123456789</p>
    </div>

    <div class="info-block b4">
      <p>THIS SERVES AS YOUR OFFICIAL RECEIPT<br>
      THANK YOU FOR SHOPPING WITH US!<br>
      PLEASE COME AGAIN!</p>
    </div>

    <div class="footer-note">Powered by Your App</div>
  </div>
</body>
</html>
