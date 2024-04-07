<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>现代化导航页</title>
    <style>
        /* 基础设置 */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, h1, ul, li, a {
            text-decoration: none;
            list-style: none;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        /* 渐变背景与整体布局调整 */
        body {
            background: linear-gradient(to right, #4a7cd8, #5e8efb, #88a2e3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        header, nav, footer {
            width: 100%;
            max-width: 960px;
            text-align: center;
            margin: 20px 0;
        }

        header h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
        }

        /* 导航卡片样式调整 */
        nav ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav ul li {
            perspective: 1000px; /* 为3D翻转效果添加透视 */
        }

        .card {
            width: 300px; /* 放大卡片尺寸 */
            height: 200px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            transition: transform 0.3s ease;
            transform-style: preserve-3d; /* 保持3D样式 */
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px); /* 添加悬停效果 */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* 添加阴影 */
        }

        .card-face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden; /* 隐藏背面 */
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            box-sizing: border-box;
        }

        .card-front {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .card-back {
            background-color: rgba(255, 255, 255, 0.8);
            transform: rotateY(180deg); /* 翻转卡片背面 */
        }

        footer {
            margin-top: auto;
            padding: 20px 0;
            font-size: 0.9em;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>LOVE AI</h1>
    </header>
    <nav>
        <ul>
            <li>
                <div class="card">
                    <div class="card-face card-front">
                        <h2>主页</h2>
                        <p>点击查看更多信息</p>
                    </div>
                    <div class="card-face card-back">
                        <h2>主页</h2>
                        <p>了解我们的服务和特色</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card">
                    <div class="card-face card-front" style="background-color: rgba(255, 255, 255, 0.5);">
                        <h2>产品</h2>
                        <p>浏览我们的最新产品</p>
                    </div>
                    <div class="card-face card-back" style="background-color: rgba(255, 255, 255, 0.8);">
                        <h2>产品</h2>
                        <p>了解我们的产品详情</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card">
                    <div class="card-face card-front" style="background-color: rgba(255, 255, 255, 0.5);">
                        <h2>服务</h2>
                        <p>了解我们的服务项目</p>
                    </div>
                    <div class="card-face card-back" style="background-color: rgba(255, 255, 255, 0.8);">
                        <h2>服务</h2>
                        <p>查看我们的服务范围</p>
                    </div>
                </div>
            </li>
            <!-- 更多卡片可以按照这个格式添加 -->
        </ul>
    </nav>
    <footer>
        <p>版权 © 2024. 保留所有权利。</p>
    </footer>
</body>
</html>
