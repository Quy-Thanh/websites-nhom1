<!DOCTYPE html>
<html>
<head>
    <title>Favorite Videos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .video-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .video-item {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            cursor: pointer;
        }

        .video-item img {
            width: 100%;
            height: auto;
        }

        .video-item-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-item:hover .video-item-overlay {
            opacity: 1;
        }

        .video-item-title {
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Favorite Videos</h1>

        <div class="video-list">
            <div class="video-item">
                <img src="video1.jpg" alt="Video 1">
                <div class="video-item-overlay">
                    <div class="video-item-title">Video 1</div>
                </div>
            </div>
            <div class="video-item">
                <img src="video2.jpg" alt="Video 2">
                <div class="video-item-overlay">
                    <div class="video-item-title">Video 2</div>
                </div>
            </div>
            <div class="video-item">
                <img src="video3.jpg" alt="Video 3">
                <div class="video-item-overlay">
                    <div class="video-item-title">Video 3</div>
                </div>
            </div>
            <!-- Add more video items here -->
        </div>
    </div>
</body>
</html>
