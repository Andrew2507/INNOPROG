<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./scripts/style.css">
	<link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>INNOPROG | Стать айтишником ЛЕГЧЕ, чем вам кажется</title>
</head>
<body>
<div class="main">
    <!-- Верхнее меню -->
    <div class="navbar">
		<img class="logo" src="https://whaile.ru/img/logo.svg" style="max-width: 170px; width: 170px;">
         
        <div class="nav-buttons" id="navMenu">
			<button class="nav-btn"><a href="https://innoprog.ru/#advantages" class="item" style="color: #000; text-decoration: none; font-size: 16px;">Преимущества</a></button>
            <button class="nav-btn"><a href="https://innoprog.ru/#training" class="item" style="color: #000;text-decoration: none;font-size: 16px;padding: 0px 0px 0px 30px;">Обучение</a></button>
            <button class="nav-btn"><a href="https://innoprog.ru/#modules" class="item" style="color: #000; text-decoration: none; font-size: 16px;">Модули</a></button>
			<button class="nav-btn"><a href="https://innoprog.ru/#tariff" class="item" style="color: #000; text-decoration: none; font-size: 16px;">Тарифы</a></button>
            <button class="nav-btn"><a href="https://innoprog.ru/#reviews" class="item" style="color: #000; text-decoration: none; font-size: 16px;">Отзывы</a></button>
            <button class="nav-btn"><a href="https://innoprog.ru/#contacts" class="item" style="color: #000; text-decoration: none; font-size: 16px;">Контакты</a></button>
        </div>

        <button class="toggler">
            <i class='bx bx-menu'></i>
        </button>
    </div>

    <div class="top-container">
        <div class="info-box">
            <h1 class="header" style="color: #000;">
                Пройдите нашу мини-игру и испытайте свои силы!
            </h1>
            <p class="info-text" style="color: #000;">
                Узнайте насколько вы подходите для нас.
            </p>
            <div class="info-buttons">
                <button id="scroll" class="info-btn selected">Начать</button>
                <button id="scrollToOnas" class="info-btn nav-btn" style="white-space: nowrap;">Telegram</button>
            </div>
        </div>
		<div class="nft-box" id="nftBox">
			<img src="./img/osnov.png" class="nft-pic">
			<div class="nft-content">
				<div class="info">
					<div>
						<p style="color: #000;font-size: 20px;">Основатель</p>
					</div>
				</div>
				<div class="likes">
					<div class="icon-box" style="color: #000;font-size: 20px;color: #9c78ff;">INNOPROG</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="get-started">
        <p class="header" style="color: #000;">Игра:</p>
		<p class="info-text" style="color: #000; font-size: 25px;">В нашей игре вам нужно проявить логику, и выбрать правильный код!</p>
        <div class="items-box" style="
    padding: 60px 80px;
    position: relative;
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    justify-content: center;
">
            <div class="item-container" style="
    padding: 16px;
    border: 1px solid #000;
    background: linear-gradient(170deg, rgba(52, 93, 129, 0.08) 1.85%, rgba(57, 46, 75, 0.08) 98%);
    border-radius: 2rem;">
                <div style="width: 100%; height: 100%; position: absolute;">
					<!-- Встроенный фрейм для отображения игры -->
					<iframe src="путь_к_вашему_индексному_файлу/index.html" width="100%" height="100%" frameborder="0"></iframe>
				</div>
            </div>
        </div>
    </div>

	<a id="onas"></a>
    <div class="get-started">
        <p class="header" style="color: #000;">О нашей мини-игре</p>
        <p class="info-text">Игра создана в целях привлечения новых клиентов</p>
        <div class="items-box">
            <div class="item-container">
                <div class="item">
                    <i class='bx bx-check-shield'></i>
                </div>
                <p>Простота использования</p>
            </div>
            <div class="item-container">
                <div class="item">
                    <i class='bx bx-wallet-alt'></i>
                </div>
                <p>Интуетивный интерфейс</p>
            </div>
            <div class="item-container">
                <div class="item">
                    <i class='bx bx-money'></i>
                </div>
                <p>Использование unity</p>
            </div>
            <div class="item-container">
                <div class="item">
                    <i class='bx bx-rocket'></i>
                </div>
                <p>Не заёмёт много времени</p>
            </div>
        </div>
    </div>
</div>

    <!-- Подвал -->
	<div class="pre-footer" style="padding: 0px 40px;background: #000;">
		<div class="footer">
			<div class="footer-header">
				<img src="https://whaile.ru/img/logo2.svg" style="max-width: 200px; width: 200px;">
				<div class="t-sociallinks__wrapper" style="justify-content: space-between; display: flex;">
					<div class="t-sociallinks__item t-sociallinks__item_phone">
						<a href="tel:+7 (993) 409-90-57" target="_blank" rel="nofollow" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM32.3668 30.3616C33.8958 28.835 34.6798 28.1875 35.1534 28.0601C35.715 27.909 36.2052 28.0405 36.7168 28.4797C37.1497 28.8512 38.2438 29.9713 38.9927 30.8096C41.1931 33.2729 43.8747 36.6359 44.2503 37.4031C44.3639 37.6353 44.375 37.701 44.3558 38.0323C44.3204 38.643 44.196 38.8343 43.3793 39.5344C42.0767 40.6509 40.0803 42.739 39.3824 43.7149C38.9257 44.3535 38.9126 44.7536 39.3248 45.483C39.675 46.1027 41.378 48.345 42.5783 49.7667C44.5875 52.1467 46.9159 54.3696 49.1773 56.0669C50.8579 57.3283 53.2214 58.7821 54.8035 59.5275C55.9343 60.0603 56.2878 60.0303 57.0122 59.3401C57.7069 58.6782 58.5246 57.6102 59.8946 55.5759C60.3408 54.9132 60.7739 54.3136 60.857 54.2434C61.1104 54.0293 61.3967 53.9282 61.8141 53.9055C62.0813 53.891 62.2608 53.9062 62.4057 53.9555C62.6843 54.0504 63.4107 54.5045 66.36 56.4276C67.7285 57.32 69.2454 58.3032 69.7309 58.6125C72.4818 60.3651 72.7871 60.6005 72.9291 61.0781C73.1185 61.7157 72.9605 62.1254 72.063 63.3233C70.9487 64.8107 69.0734 66.8197 67.674 68.0252C66.5388 69.0032 65.0797 69.9865 63.6409 70.743L63.0188 71.0701L62.389 71.0696C60.5532 71.0685 58.822 70.7024 56.1724 69.7552C49.967 67.5366 44.465 64.2895 39.647 60.0025C38.7431 59.1981 36.6429 57.0816 35.8606 56.1866C33.2537 53.2039 31.2905 50.2948 29.5948 46.9021C28.373 44.4575 27.2502 41.6203 27.0609 40.4995C26.7835 38.8572 27.4592 36.7086 28.9757 34.4108C29.8832 33.0359 30.8773 31.8488 32.3668 30.3616V30.3616Z" fill="#9c78ff"></path>
							</svg>
						</a>
					</div>
					<div class="t-sociallinks__item t-sociallinks__item_email">
						<a href="mailto:education@innoprog.ru?subject=Добрый день! Хочу приобрести подписку" target="_blank" rel="nofollow" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM26.2268 34.1813c.3042-.9738.9636-1.693 1.8568-2.0249l.4151-.1543 21.4794-.0018c21.3404-.0017 21.4819-.0009 21.8807.1335.9642.3248 1.6814 1.1482 1.9797 2.2727l.0944.3556-1.7711 1.2707c-2.462 1.7666-6.8447 4.9166-8.8523 6.3624-.925.6662-2.2783 1.639-3.0072 2.1619-2.1029 1.5081-4.2894 3.0785-5.891 4.2312-3.6493 2.6264-4.3577 3.1288-4.4113 3.1288-.0541 0-.817-.5414-4.5039-3.1961-1.6149-1.1627-3.4655-2.4914-5.7994-4.1637-.7296-.5227-2.1661-1.5561-3.1924-2.2964-1.0262-.7404-2.4421-1.7593-3.1465-2.2642-.7044-.5051-2.3496-1.6873-3.656-2.6273s-2.646-1.9002-2.9769-2.1338c-.667-.4708-.675-.4878-.4981-1.0543Zm-.1497 27.1823c-.0616.0397-.0771-2.244-.0771-11.3267 0-6.257.0122-11.3764.0271-11.3764.015 0 1.063.7458 2.3291 1.6574 2.2612 1.628 3.4539 2.4857 6.7132 4.8273 2.1704 1.5593 4.0585 2.9159 5.6761 4.0785.7296.5244 1.3265.9876 1.3265 1.0293 0 .0718-.8103.6465-3.9486 2.8008-.7465.5124-2.0931 1.4401-2.9923 2.0616-.8992.6215-3.1064 2.1429-4.9049 3.3809-1.7984 1.238-3.4504 2.3784-3.6709 2.5342-.2206.1559-.4357.3058-.4782.3331Zm43.234-19.3639c.6277-.4485 1.9187-1.381 2.8688-2.0722.9502-.6912 1.7483-1.259 1.7738-1.2619.0255-.0028.0463 5.1143.0463 11.3713 0 9.0827-.0155 11.3664-.0771 11.3267-.0424-.0273-.2576-.1768-.4782-.3323-.2205-.1554-1.0951-.7591-1.9434-1.3415-.8483-.5824-1.6812-1.1582-1.8509-1.2795-.1697-.1213-.7388-.5155-1.2648-.8759-.526-.3604-1.3172-.9043-1.7583-1.2086-.4412-.3043-2.1348-1.4711-3.7635-2.593-4.735-3.2613-4.9358-3.4028-4.9358-3.4788 0-.0759.2206-.2386 4.0412-2.9806 1.3064-.9376 3.2359-2.3243 4.2879-3.0815 1.0519-.7573 2.4262-1.7437 3.054-2.1922ZM37.8152 57.1366c.3609-.2411 1.7297-1.1886 4.8121-3.3308 1.2215-.849 2.2627-1.5349 2.3136-1.5242.0509.0107 1.0504.7092 2.2211 1.5523 1.1706.8431 2.2361 1.5743 2.3676 1.625.3044.1171.6365.117.9414-.0003.1318-.0507 1.1964-.7809 2.3658-1.6228 1.1693-.8418 2.1572-1.5435 2.1951-1.5594.0604-.0253 1.5111.9576 5.8267 3.9476 1.1431.7919 2.7209 1.8798 5.9537 4.1051.9502.6541 2.9214 2.014 4.3805 3.022l2.653 1.8328-.0051.2599c-.0072.3723-.3476 1.0784-.7463 1.5482-.3863.4549-1.0056.8296-1.5552.9408C71.322 67.9767 63.8578 68 50 68c-13.8578 0-21.322-.0233-21.5392-.0672-.5496-.1112-1.1689-.4859-1.5552-.9408-.3741-.4409-.7126-1.118-.7618-1.5243l-.0316-.2603 1.656-1.14c.9108-.627 2.2112-1.5239 2.8899-1.9932 3.6716-2.539 6.8851-4.7559 7.1571-4.9376Z" fill="#9c78ff"></path>
					        </svg>
						</a>
					</div>
					<div class="t-sociallinks__item t-sociallinks__item_telegram">
						<a href="https://t.me/innoprog_admin" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z" fill="#9c78ff"></path>
					        </svg>
						</a>
					</div>
					<div class="t-sociallinks__item t-sociallinks__item_whatsapp">
						<a href="https://wa.me/message/6EWBOWL6RTKMJ1" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM69.7626 28.9928C64.6172 23.841 57.7739 21.0027 50.4832 21C35.4616 21 23.2346 33.2252 23.2292 48.2522C23.2274 53.0557 24.4823 57.7446 26.8668 61.8769L23 76L37.4477 72.2105C41.4282 74.3822 45.9107 75.5262 50.4714 75.528H50.4823C65.5029 75.528 77.7299 63.301 77.7363 48.2749C77.7408 40.9915 74.9089 34.1446 69.7626 28.9928ZM62.9086 53.9588C62.2274 53.6178 58.8799 51.9708 58.2551 51.7435C57.6313 51.5161 57.1766 51.4024 56.7228 52.0845C56.269 52.7666 54.964 54.2998 54.5666 54.7545C54.1692 55.2092 53.7718 55.2656 53.0915 54.9246C52.9802 54.8688 52.8283 54.803 52.6409 54.7217C51.6819 54.3057 49.7905 53.4855 47.6151 51.5443C45.5907 49.7382 44.2239 47.5084 43.8265 46.8272C43.4291 46.1452 43.7837 45.7769 44.1248 45.4376C44.3292 45.2338 44.564 44.9478 44.7987 44.662C44.9157 44.5194 45.0328 44.3768 45.146 44.2445C45.4345 43.9075 45.56 43.6516 45.7302 43.3049C45.7607 43.2427 45.7926 43.1776 45.8272 43.1087C46.0545 42.654 45.9409 42.2565 45.7708 41.9155C45.6572 41.6877 45.0118 40.1167 44.4265 38.6923C44.1355 37.984 43.8594 37.3119 43.671 36.8592C43.1828 35.687 42.6883 35.69 42.2913 35.6924C42.2386 35.6928 42.1876 35.6931 42.1386 35.6906C41.7421 35.6706 41.2874 35.667 40.8336 35.667C40.3798 35.667 39.6423 35.837 39.0175 36.5191C38.9773 36.5631 38.9323 36.6111 38.8834 36.6633C38.1738 37.4209 36.634 39.0648 36.634 42.2002C36.634 45.544 39.062 48.7748 39.4124 49.2411L39.415 49.2444C39.4371 49.274 39.4767 49.3309 39.5333 49.4121C40.3462 50.5782 44.6615 56.7691 51.0481 59.5271C52.6732 60.2291 53.9409 60.6475 54.9303 60.9612C56.5618 61.4796 58.046 61.4068 59.22 61.2313C60.5286 61.0358 63.2487 59.5844 63.8161 57.9938C64.3836 56.4033 64.3836 55.0392 64.2136 54.7554C64.0764 54.5258 63.7545 54.3701 63.2776 54.1395C63.1633 54.0843 63.0401 54.0247 62.9086 53.9588Z" fill="#9c78ff"></path>
					        </svg>
						</a>
					</div>
					<div class="t-sociallinks__item t-sociallinks__item_vk">
						<a href="https://vk.com/innoprogeducation" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50ZM25 34c.406 19.488 10.15 31.2 27.233 31.2h.968V54.05c6.278.625 11.024 5.216 12.93 11.15H75c-2.436-8.87-8.838-13.773-12.836-15.647C66.162 47.242 71.783 41.62 73.126 34h-8.058c-1.749 6.184-6.932 11.805-11.867 12.336V34h-8.057v21.611C40.147 54.362 33.838 48.304 33.556 34H25Z" fill="#9c78ff"></path>
					        </svg>
						</a>
					</div>
					<div class="t-sociallinks__item t-sociallinks__item_instagram">
						<a href="https://www.instagram.com/innoprog/" target="_blank" rel="nofollow noopener" style="width: 25px; height: 25px;">
							<svg class="t-sociallinks__svg" width="25px" height="25px" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
					            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z" fill="#9c78ff"></path>
					        </svg>
						</a>
					</div>
				</div>
			</div>
			<div class="footer-links">
				<div class="link">
					<h5 style="color: #9c78ff;">Контакты</h5>
					<p>+7 993 409-90-57</p>
					<p>education@innoprog.ru</p>
				</div>
				<div class="link">
					<h5 style="color: #9c78ff;">Адрес</h5>
					<p>420500 РТ, Верхнеуслонский р-он,<br> г.Иннополис, ул. Университетская,<br> д.5, пом.115, м.15/2</p>
				</div>

			</div>

		</div>
		
		<div class="copyright">
			<p>Общество с ограниченной ответственностью "ИННОПРОГ" ИНН 1683011286 ОГРН 1221600105440</p>
		</div>
	</div>


<script src="./scripts/index.js"></script>

<script>
    // Функция для плавной прокрутки до указанного элемента
    function smoothScrollTo(target) {
        const targetElement = document.querySelector(target);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    }

    // Обработчик клика на кнопке "О нас"
    const onasButton = document.getElementById('scrollToOnas');
    if (onasButton) {
        onasButton.addEventListener('click', function (event) {
            event.preventDefault();
            smoothScrollTo('#onas'); // Прокрутка до элемента с идентификатором "onas"
        });
    }
</script>

</body>
</html>