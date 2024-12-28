<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Haven - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffe6f0;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #ff80b3;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
            flex: 1;
        }
        nav {
            display: flex;
            gap: 1.5rem;
            flex: 2;
            justify-content: flex-end;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #ffe6f0;
            color: #ff4d94;
        }
        .hero {
            background-image: url('bookstore.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 2rem;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .hero h2 {
            font-size: 3rem;
            margin: 0 0 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .hero p {
            font-size: 1.5rem;
            margin: 0 0 2rem;
        }
        .hero button {
            padding: 1rem 2rem;
            background-color: #ff80b3;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #ff4d94;
        }
        .book-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
            background-color: #fff;
        }
        .book {
            background-color: white;
            padding: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .book:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .book img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .book h3 {
            font-size: 1.5rem;
            margin: 1rem 0 0.5rem;
        }
        .book p {
            color: #555;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .book button {
            padding: 0.7rem 1.5rem;
            background-color: #ff80b3;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .book button:hover {
            background-color: #ff4d94;
        }
        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: #ff4d94;
            color: white;
            font-size: 1rem;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        .contact-section {
            padding: 2rem;
            background-color: #ffe6f0;
        }
        .contact-section h2 {
            text-align: center;
            color: #ff4d94;
            margin-bottom: 1.5rem;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        .contact-form button {
            display: block;
            width: 100%;
            padding: 1rem;
            background-color: #ff80b3;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form button:hover {
            background-color: #ff4d94;
        }
    </style>
</head>
<body>
    <header>
        <h1>Book Haven</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#books">Books</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div class="hero">
        <h2>Welcome to Book Haven</h2>
        <p>Your one-stop shop for books of all genres</p>
        <button>Shop Now</button>
    </div>
    <section class="book-section" id="books">
        <div class="book">
            <img src="book1.jpg" alt="Book 1">
            <h3>Book Title 1</h3>
            <p>Author 1</p>
            <button>Buy Now</button>
        </div>
        <div class="book">
            <img src="book2.jpg" alt="Book 2">
            <h3>Book Title 2</h3>
            <p>Author 2</p>
            <button>Buy Now</button>
        </div>
        <div class="book">
            <img src="book3.jpg" alt="Book 3">
            <h3>Book Title 3</h3>
            <p>Author 3</p>
            <button>Buy Now</button>
        </div>
        <div class="book">
            <img src="book4.jpg" alt="Book 4">
            <h3>Book Title 4</h3>
            <p>Author 4</p>
            <button>Buy Now</button>
        </div>
    </section>
    <section class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
    <footer>
        &copy; 2024 Book Haven. All rights reserved.
    </footer>
</body>
</html>
