<!DOCTYPE html>
<?php require '../head.php'; ?>
<title>Linger</title>
<html lang="ua">
<body>
        <header>
            <div class="header__wrapper">
                <div class="header__top_section">
                    <div class="top__section_icon_container">
                        <?php require '../top__section_icon_container.php'; ?>
                    </div>

                    <section class="top-nav">
                        <input id="menu-toggle" type="checkbox" />
                        <label class='menu-button-container' for="menu-toggle">
                            <div class='menu-button'></div>
                        </label>
                        <ul class="menu">
                                <li><a href="#about_us">Our agency</a></li>
                                <li><a href="#activity">Our value</a></li>
                                <li class="li_new"><a href="#material">Materials</a></li>
                        </ul>
                    </section>

                    <div class="top__section_logo">
                        <div class="logo">
                            <a href="#"><img src="../img/icons/linger.svg" class="logo_img" alt=""></a>
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
                                <li><a href="#about_us">Our agency</a></li>
                                <li><a href="#activity">Our value</a></li>
                                <li class="li_new"><a href="#material">Materials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header__thumbnail">
                    <div class="thumbnail__wrapper">
                        <div class="thumbnail__column">
                            <div class="column">
                                <h1 class="main-title">
                                Be who <br> you can be.
                                </h1>
                                <div class="recruit">
                                     <a href="#contact" class="team">Join our team</a>
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
                            <h2 class="title bold-spaced" id="about_us">Our agency</h2>
                        </div>
                        <div class="block__text">
                            <div class="aspect">
                                <p class="text bold-spaced">We provide the military with the intelligence necessary to ensure the security of our country</p>
                            </div>
                            <div class="aspect">
                                <p class="text">As the world's leading intelligence company, the work we do is vital to Ukraine's national security. We collect and analyze foreign intelligence and conduct covert operations. Ukrainian politicians, including the president, make policy decisions based on the information we provide.</p>
                                <div class="learn__button">
                                    <a href="https://www.understandingwar.org/" target="_blank">Learn more</a>
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
                            <h2 class="title bold-spaced" id="about_us">Our value</h2>
                            <p class="text bold-spaced">Our value is courageous people committed to freedom, who fulfill our mission with ingenuity and dedication</p>
                            <p class="text">LINGER's research methodology relies on both primary and secondary sources, which allows researchers to gain a comprehensive understanding of the situation on the ground. In order to analyze military and political developments in a given area, ISW analysts must have a thorough understanding of the systems of enemy and friendly armed forces.</p>
                            <button>Explore our activities</button>
                        </div> 
                    </div> 
                </div>
                
                <div class="wrapper__represent vertical">
                        <h2 class="title" id="material">Materials</h2>     
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
                                                <p>War in Ukraine: how the international community responds to the conflict</p>
                                            </div>
                                        </div>
                                        <div class="special_info__button">
                                            <a href="..\eng\ukraine.php">More</a>
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
                                                <p>Afghanistan's military secrets: who is fighting for what?</p>
                                            </div>
                                        </div>
                                        <div class="special_info__button">
                                            <a href="..\eng\afghan.php" class="more">More</a>
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
                                            <a href="#">More</a>
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
                            <h2 class="title">ONE TEAM, ONE FIGHT</h2>
                            <p class="text">Please leave your contacts</p>
                    </div>
                    <div class="block__text" id="activity">
                        <section class="sub_block new_dex">
                            <form id="subscription_form" class="form_sub">
                                <div class="input-block">
                                    <div class="input-row">
                                        <input type="text" name="name" required placeholder="Name">
                                        <input type="text" name="surname" required placeholder="Surname">
                                    </div>
                                    <input type="email" name="email" required placeholder="Email">
                                    <button type="submit" class="button">Send</button>
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