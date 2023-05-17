<!DOCTYPE html>
    <?php require '../head.php'; ?>
<title>Linger</title>
<html lang="ua">
<body>
        <header>
            <div class="header__wrapper">
                <div class="header__top_section">
                        <?php require '../top__section_icon_container.php'; ?>

                        <section class="top-nav">
                        <input id="menu-toggle" type="checkbox" />
                        <label class='menu-button-container' for="menu-toggle">
                            <div class='menu-button'></div>
                        </label>
                        <ul class="menu">
                                <li><a href="#about_us">Наше агентство</a></li>
                                <li><a href="#activity">Наша цінність</a></li>
                                <li class="li_new"><a href="#material">Матеріали</a></li>
                        </ul>
                    </section>

                    <div class="top__section_logo">
                        <div class="logo">
                           <img src="../img/icons/linger.svg" class="logo_img" alt="">
                        </div>
                    </div>
                    <div class="top__section_language_profile">
                       <?php require '../lang.php'; ?>
                    </div>
                </div>

                <div class="header__ul_searh">
                    <div class="ul__search_container">
                        <div class="ul_container">
                            <ul>
                                <li><a href="#about_us">Наше агентство</a></li>
                                <li><a href="#activity">Наша цінність</a></li>
                                <li class="li_new"><a href="#material">Матеріали</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header__thumbnail">
                    <div class="thumbnail__wrapper">
                        <div class="thumbnail__column">
                            <div class="column">
                                <h1 class="main-title">
                                Будь тим, ким <br> ти можеш бути.
                                </h1>
                                <div class="recruit">
                                     <a href="#contact" class="team">Долучайся до нашої команди</a>
                                     <img src="..\img\icons\go.svg" alt="">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </header>
        <main>
            <div class="main__wrapper">
                <div class="wrapper__represent">
                        <div class="title__block">
                            <div class="rose">
                                <img src="..\img\icons\Glyphs_Mission_Positive-gigapixel-low_res-scale-4_00x.png" alt="">
                            </div>
                            <h2 class="title bold-spaced" id="about_us">Наше агентство</h2>
                        </div>
                        <div class="block__text">
                            <div class="aspect">
                                <p class="text bold-spaced">Ми надаємо військовим розвідувальні дані, необхідні для забезпечення безпеки нашої країни</p>
                            </div>
                            <div class="aspect">
                                <p class="text">Як провідна аналізуюча компанія в світі, робота, яку ми виконуємо, є життєво важливою для національної безпеки України. Ми збираємо та аналізуємо зовнішні розвіддані та проводимо таємні оперії. Українські політики, включно з президентом, приймають політичні рішення на основі інформації, яку ми надаємо.</p>
                                <div class="learn__button">
                                    <a href="https://www.understandingwar.org/" target="_blank">Дізнатися більше</a>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="wrapper__represent">
                    <div class="title__block">
                            <div class="badge">
                                <img src="..\img\icons\sso.svg" alt="">
                            </div>
                    </div>
                    <div class="block__text" id="activity">
                        <div class="aspect">
                            <h2 class="title bold-spaced" id="activity">Наша цінність</h2>
                            <p class="text bold-spaced">Наша цінність – це сміливі люди, віддані свободі, які винахідливо та віддано виконують нашу місію</p>
                            <p class="text">Методологія досліджень LINGER спирається як на первинні, так і на вторинні джерела, що дозволяє дослідникам отримати всебічне розуміння ситуації на місцях. Для того, щоб аналізувати військові та політичні події в тій чи іншій місцевості, аналітики ISW повинні досконало розуміти системи ворожих та дружніх збройних сил.</p>
                            <button>Дослідити нашу діяльність</button>
                        </div> 
                    </div> 
                </div>
                
                <div class="wrapper__represent vertical">
                        <h2 class="title" id="material">Матеріали</h2>     
                    <div class="block__text">
                        <div class="aspect">
                            <div class="special_info">
                                <div class="aspect__special_info_block">
                                    <div class="special_info__wrapper">
                                        <div class="special_info__image">
                                            <img src="../img/ukraine-war/preview.jpg" alt="">
                                        </div>
                                        <div class="special_info__content">
                                            <div class="info">
                                                <p>Війна в Україні: як світова спільнота реагує на конфлікт</p>
                                            </div>
                                        </div>
                                        <div class="special_info__button">
                                            <a href="..\ua\ukraine.php">Більше</a>
                                            <div class="arrow_goto">
                                                <img src="../img/icons/goto.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="aspect__special_info_block">
                                    <div class="special_info__wrapper">
                                        <div class="special_info__image">
                                            <img src="../img/afghanistan-war/preview.jpg" alt="">
                                        </div>
                                        <div class="special_info__content">
                                            <div class="info">
                                                <p>Військові таємниці Афганістану: хто воює за що?</p>
                                            </div>
                                        </div>
                                        <div class="special_info__button">
                                            <a href="..\ua\afghan.php" class="more">Більше</a>
                                            <div class="arrow_goto">
                                                <img src="../img/icons/goto.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="aspect__special_info_block">
                                    <div class="special_info__wrapper">
                                        <div class="special_info__image">
                                            <img src="../img/filler.svg" alt="">
                                        </div>
                                        <div class="special_info__content">
                                            <div class="info">
                                                
                                            </div>
                                        </div>
                                        <div class="special_info__button">
                                            <a href="#">Більше</a>
                                            <div class="arrow_goto">
                                                <img src="../img/icons/goto.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </div> 
                </div>  
                
                <div class="form__represent" id="contact">
                    <div class="title__block">
                            <h2 class="title">ОДНА КОМАНДА, ОДНА БОРОТЬБА</h2>
                            <p class="text">Залиште ваші контакти</p>
                    </div>
                    <div class="block__text" id="activity">
                        <section class="sub_block new_dex">
                            <form id="subscription_form" class="form_sub">
                                <div class="input-block">
                                    <div class="input-row">
                                        <input type="text" name="name" required placeholder="Ім'я">
                                        <input type="text" name="surname" required placeholder="Прізвище">
                                    </div>
                                    <input type="email" name="email" required placeholder="Пошта">
                                    <button type="submit" class="button">Відправити</button>
                                    </div>
                            </form>
                        </section>
                    </div> 
                </div>

            </div>
        </main>

        <?php require 'footer.php';?>
        
</body>
</html>