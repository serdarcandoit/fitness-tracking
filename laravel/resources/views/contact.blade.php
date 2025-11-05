<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Wayne Enterprises</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&family=Poppins:wght@400;600&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top, #0c0c0c 0%, #000000 100%);
      color: #f1f1f1;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .contact-box {
      background: rgba(20, 20, 20, 0.8);
      border: 1px solid rgba(255, 230, 0, 0.3);
      box-shadow: 0 0 25px rgba(255, 230, 0, 0.1);
      border-radius: 16px;
      padding: 40px;
      width: 360px;
      text-align: center;
      backdrop-filter: blur(10px);
      transition: 0.3s;
    }

    .contact-box:hover {
      box-shadow: 0 0 40px rgba(255, 230, 0, 0.3);
      transform: translateY(-4px);
    }

    h1 {
      font-family: 'Orbitron', sans-serif;
      color: #ffe600;
      letter-spacing: 2px;
      font-size: 26px;
      margin-bottom: 25px;
      text-shadow: 0 0 10px rgba(255, 230, 0, 0.3);
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 8px;
      color: #bbb;
      font-weight: 500;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      background: #111;
      color: #ffe600;
      border: 1px solid #333;
      border-radius: 8px;
      padding: 10px 12px;
      margin-bottom: 18px;
      outline: none;
      font-size: 15px;
      transition: 0.2s;
    }

    input:focus,
    textarea:focus {
      border-color: #ffe600;
      box-shadow: 0 0 8px rgba(255, 230, 0, 0.2);
    }

    textarea {
      resize: none;
      height: 90px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #ffe600 0%, #bba700 100%);
      color: #000;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 1px;
      cursor: pointer;
      transition: 0.3s;
      text-transform: uppercase;
    }

    button:hover {
      background: linear-gradient(90deg, #fff200 0%, #ffe600 100%);
      transform: translateY(-2px);
    }

    footer {
      margin-top: 15px;
      font-size: 12px;
      color: #777;
      letter-spacing: 1px;
    }
  </style>
</head>
<body>
  <div class="contact-box">
    <h1>CONTACT US</h1>
    <form action="/contact" method="POST">
      @csrf
      <label for="name">Your Name:</label>
      <input type="text" name="name" placeholder="Your name.." required>

      <label for="email">Your Email:</label>
      <input type="email" name="email" placeholder="example@email.com" required>

      <label for="message">Message:</label>
      <textarea name="message" placeholder="Send us a message..." required></textarea>

      <button type="submit">Send</button>
    </form>
    <footer>© 2025 ABC Company</footer>
  </div>
</body>
</html>
