<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpertbotFlowers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://www.example.com/flower-background.jpg'); /* Replace with your background image URL */
            background-size: cover;
            background-attachment: fixed;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .banner {
            background-color: rgba(255, 105, 180, 0.9); /* Light pink */
            padding: 10px;
            text-align: center;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
        }
        .header {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
        }
        .nav {
            text-align: center;
            margin: 20px;
        }
        .nav button {
            background-color: #ff69b4; /* Light pink */
            border: none;
            padding: 15px 30px;
            margin: 5px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s;
        }
        .nav button:hover {
            background-color: #ff1493; /* Deep pink */
        }
        .options {
            text-align: center;
            margin: 20px;
        }
        .options button {
            background-color: #ff69b4; /* Light pink */
            border: none;
            padding: 10px 20px;
            margin: 5px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s;
        }
        .options button:hover {
            background-color: #ff1493; /* Deep pink */
        }
        .content {
            flex: 1;
            padding: 20px;
            text-align: center;
        }
        .flower {
            background-color: rgba(255, 255, 255, 0.8);
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .flower img {
            width: 100%;
            border-radius: 10px;
        }
        .flower h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .flower p {
            font-size: 1em;
            margin: 5px 0;
        }
        .footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            text-align: center;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .input-group {
            text-align: center;
            margin: 20px;
        }
        .input-group input {
            padding: 10px;
            margin: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="banner">
        Take 25% discount on the first order
    </div>
    <div class="header">
        <h1>XpertbotFlowers</h1>
    </div>
    <div class="nav">
        <button onclick="alert('User button clicked')">User</button>
        <button onclick="alert('Contact info: +961 76307006')">Contact Info</button>
    </div>
    <div class="options">
        <button onclick="alert('Most Popular')">Most Popular</button>
        <button onclick="alert('Birthday')">Birthday</button>
        <button onclick="alert('Sympathy Gifts')">Sympathy Gifts</button>
        <button onclick="alert('Occasions')">Occasions</button>
    </div>
    <div class="input-group">
        <input type="text" placeholder="Sending to">
        <input type="date" placeholder="Delivery Date">
    </div>
    <div class="content">
        <div class="flower">
            <img src="https://www.flowersbyflourish.com/wp-content/uploads/2016/06/Roses-Red.jpg" alt="Flower 1">
            <h2>Rose</h2>
            <p>Price: $10</p>
            <p>Description: Beautiful red rose, perfect for any occasion.</p>
        </div>
        <div class="flower">
            <img src="https://i.pinimg.com/originals/18/47/09/1847095dbd6c5861848a29492f5e1518.jpg" alt="Flower 2">
            <h2>Tulip</h2>
            <p>Price: $8</p>
            <p>Description: Elegant tulip flowers available in various colors.</p>
        </div>
        <div class="flower">
            <img src="https://asset.bloomnation.com/c_limit,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1605362284/vendor/2789/catalog/product/2/0/20200905064053_file_5f5332f5b2b2b_5f5335ef7a2b3.jpeg" alt="Flower 3">
            <h2>Sunflower</h2>
            <p>Price: $5</p>
            <p>Description: Bright and cheerful sunflowers to brighten your day.</p>
        </div>
        <div class="flower">
            <img src="https://www.theluxeinsider.com/wp-content/uploads/2020/08/daisy.jpg" alt="Flower 4">
            <h2>Daisy</h2>
            <p>Price: $4</p>
            <p>Description: Simple yet charming daisies, perfect for gifts.</p>
        </div>
        <div class="flower">
            <img src="https://res.cloudinary.com/bloomnation/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1593588846/vendor/2474/catalog/product/2/0/20200701122950_file_5efbd8fed010b_5efbd9fbb2a79.jpg" alt="Flower 5">
            <h2>Orchid</h2>
            <p>Price: $15</p>
            <p>Description: Exotic and stunning orchids for special occasions.</p>
        </div>
        <div class="flower">
            <img src="https://res.cloudinary.com/bloomnation/c_pad,d_vendor:global:catalog:product:image.png,f_auto,fl_preserve_transparency,q_auto/v1581974620/vendor/3157/catalog/product/2/0/20141201095609_file_547ce3f999732.png" alt="Flower 6">
            <h2>Lily</h2>
            <p>Price: $12</p>
            <p>Description: Fragrant lilies available in various colors.</p>
        </div>
        <div class="flower">
            <img src="https://storage.googleapis.com/floralhub-cdn/img-2020-06-Chrysant-Delight-Vase-scaled.jpg" alt="Flower 7">
            <h2>Chrysanthemum</h2>
            <p>Price: $6</p>
            <p>Description: Vibrant chrysanthemums for a touch of color.</p>
        </div>
        <div class="flower">
            <img src="https://i.pinimg.com/originals/da/c5/34/dac534b7162bca084b83e315b71d5b22.jpg" alt="Flower 8">
            <h2>Peony</h2>
            <p>Price: $18</p>
            <p>Description: Lush and fragrant peonies, perfect for weddings.</p>
        </div>
        
    </div>
    <div class="footer">
        Made in Lebanon © 2024 | Powered by XpertBot Academy
    </div>
</body>
</html>
